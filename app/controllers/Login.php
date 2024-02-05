<?php 

class Login extends Controller{

    private $userModel;

    public function __construct()
    {
        if(Session::has(AUTH_TOKEN_KEY)){
            Handler::redirect("");
        }

        parent::__construct();
        $this->userModel = $this->model(User::class);
    }
    
    public function index()
    {
        return $this->view('auth.login');
    }

    public function submit()
    {
        $this->verifyAllowedMethod("POST");

        $validated = $this->validateLoginForm();

        if($validated['has_error']){
            return $this->view("auth.login",$validated);
        }

        $user = $this->userModel->findUserByUsername($validated['username']);
        
        if(!$user){
            Session::flash("login_error",sprintf("Couldn't found any user with %s",$validated['username']));
            Handler::redirect("login");
        }

        $login = $this->userModel->login($validated['username'],$validated['password']);

        if($login === FALSE){
            Session::flash("login_error","Credential do not match");
            Handler::redirect("login");
            exit;
        }

        Session::put(AUTH_TOKEN_KEY,$user);
        Handler::redirect("");
    }

    private function validateLoginForm(){
        $data = $this->getReq();
        $ret = [
            'username' => htmlspecialchars($data['username'] ?? ""),
            'password' => $data['password'] ?? "",
            'username_error' => "",
            'password_error' => ""
        ];
        $hasError = FALSE;

        if(is_null($ret['username']) || empty($ret['username'])){
            $hasError = TRUE;
            $ret['username_error'] = "Username field is required.";
        }

        if(is_null($ret['password']) || empty($ret['password'])){
            $hasError = TRUE;
            $ret['password_error'] = "Password field is required.";
        }

        $ret['has_error'] = $hasError;
        return $ret;
    }
}