<?php
  class Profile extends Controller {

    public $middleware = [AuthMiddleware::class];
    private $user = null;
    private $profileForm = [];

    public function __construct(){
        parent::__construct();
        
        $this->userModel = $this->model(User::class);

        $this->user = json_decode(json_encode(Session::get(AUTH_TOKEN_KEY)),true);
        $this->profileForm = [
            'username' => $this->user['username'],
            'email' => $this->user['email'],
            'username_error' => "",
            'email_error' => "",
        ];
    }

    public function index(){
        return $this->view('auth.profile',$this->profileForm);
    }

    public function password(){
        return $this->view('auth.password');
    }

    public function changePassword(){
        $this->verifyAllowedMethod("POST");
        $validated = $this->validateChangePasswordForm();

        if($validated['has_error']){
            return $this->view("auth.password",$validated);
        }
        $password = password_hash($validated['new-password'],PASSWORD_DEFAULT);

        $changePassword = $this->userModel->updatePassword([
            'password' => $password,
            'id' => $this->user['id']
        ]);

        if(!$changePassword){
            Session::flash("password_response","Something went wrong. Please try again.");
            Handler::redirect("profile/password");
        }

        //Update User Session
        $user = $this->user;
        $user['password']  = $password;
        Session::put(AUTH_TOKEN_KEY,json_decode(json_encode($user)));

        Session::flash("password_response","Password successfully updated.","text-success");
        Handler::redirect("profile/password");
    }

    public function update(){
        $this->verifyAllowedMethod("POST");

        $validated = $this->validateProfileUpdateForm();

        if($validated['has_error']){
            return $this->view("auth.profile",$validated);
        }

        $validated['id'] = $this->user['id'];

        $save = $this->userModel->updateProfile($validated);
        if(!$save){
            Session::flash("profile","Something went wrong. Please try again.");
            Handler::redirect("profile");
        }

        //Update User Session
        $user = $this->user;
        $user['username'] = $validated['username'];
        $user['email'] = $validated['email'];
        Session::put(AUTH_TOKEN_KEY,json_decode(json_encode($user)));

        Session::flash("profile","Profile successfully updated.","text-success");
        Handler::redirect("profile");
    }

    public function delete(){
        $delete = $this->userModel->delete($this->user['id']);
        if($delete){
            Handler::redirect("profile/logout");
        }
    }

    private function validateChangePasswordForm(){
        $data = $this->getReq();
    
        $ret['new-password'] = $data['new-password'];
        $ret['confirm-new-password'] = $data['confirm-new-password'];
        $ret['old-password'] = $data['old-password'];

        $hasError = FALSE;

        if(is_null($ret['old-password']) || empty($ret['old-password'])){
            $hasError = TRUE;
            $ret['old-password_error'] = "Old password field is required.";
        }else{
            
            if(!password_verify($ret['old-password'],$this->user['password'])){
                $hasError = TRUE;
                $ret['old-password_error'] = "Old password doesn't match.";
            }
        }

        if(is_null($ret['new-password']) || empty($ret['new-password'])){
            $hasError = TRUE;
            $ret['new-password_error'] = "New password field is required.";
        }else{
            if(strlen($ret['new-password']) < 6){
                $hasError = TRUE;
                $ret['new-password_error'] = "Password length should be minimum 6 charecters long..";
            }
        }

        if(is_null($ret['confirm-new-password']) || empty($ret['confirm-new-password'])){
            $hasError = TRUE;
            $ret['confirm-new-password_error'] = "Confirm new password field is required.";
        }else{
            if(($ret['new-password'] != $ret['confirm-new-password']) && !is_null($ret['new-password'])){
                $hasError = TRUE;
                $ret['confirm-new-password_error'] = "Confirm new password doesn't match.";
            }
        }

        $ret['has_error'] = $hasError;
        return $ret;
    }

    private function validateProfileUpdateForm(){
        $data = $this->getReq();
        
        $ret = $this->profileForm;

        $ret['username'] = htmlspecialchars($data['username']);
        $ret['email'] = htmlspecialchars($data['email']);

        $hasError = FALSE;

        if(is_null($ret['username']) || empty($ret['username'])){
            $hasError = TRUE;
            $ret['username_error'] = "Username field is required.";
        }else{
            $user = $this->userModel->findUserByUsername($ret['username']);
            if($user && $user->id != $this->user['id']){
                $hasError = TRUE;
                $ret['username_error'] = "Username already exists.";
            }
        }

        if(is_null($ret['email']) || empty($ret['email'])){
            $hasError = TRUE;
            $ret['email_error'] = "Email field is required.";
        }else{
            $user = $this->userModel->findUserByEmail($ret['email']);
            if($user && $user->id != $this->user['id']){
                $hasError = TRUE;
                $ret['email_error'] = "Email already exists.";
            }
        }

        $ret['has_error'] = $hasError;
        return $ret;
    }

    public function logout(){
        Session::destroy();
        Handler::redirect("login");
    }

  }