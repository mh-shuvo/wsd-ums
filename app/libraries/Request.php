<?php
class Request{

    protected $params = [];

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    protected function verifyAllowedMethod($method)
    {
        if ($_SERVER["REQUEST_METHOD"] != $method) {
            echo sprintf("The [%s] method is not allowed!",$method);
            exit;
        }
    }

    protected function getReq(){
        return $this->params;
    }
}