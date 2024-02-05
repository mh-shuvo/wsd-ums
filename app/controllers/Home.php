<?php
  class Home extends Controller {

    public $middleware = [AuthMiddleware::class];

    public function __construct(){}

    public function index(){
      $user = json_decode(json_encode(Session::get(AUTH_TOKEN_KEY)), true);
      return $this->view("index",[...$user]);
      /**
       * If you want to share data with view then pass like
       * $this->view("index",["title" => "Welcome to the PHPMVC"])
       */
    }

  }