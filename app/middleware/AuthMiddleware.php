<?php

class AuthMiddleware implements MiddlewareInterface{

    public function handle(){
        if(!Session::has(AUTH_TOKEN_KEY)){
            return header("Location:".URLROOT."/login");
        }
        return true;
    }

}