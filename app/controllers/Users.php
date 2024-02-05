<?php

class Users extends Controller{
    private $userModel;
    public $middleware = [AuthMiddleware::class];
    private $currentUser = null;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = $this->model(User::class);
        $this->currentUser = Session::get(AUTH_TOKEN_KEY);
    }

    public function index(){
        $data = $this->getReq();
        $searchText = NULL;
        if(array_key_exists("search",$data)){
            $searchText = $data['search'];
        }
        $users = $this->userModel->getAllUsers(['username','email','status','created_at'],$searchText);

        return $this->view("users.list",[
            "users" => $users,
            "current_user_type" => $this->currentUser->type
        ]);

    }
}