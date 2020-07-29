<?php

class Route{

    protected $controller = 'homeController';
    protected $method     = 'index';
    protected $param      = [];
    public function __construct()
    {
        if(isset($_GET['url'])){
            $url = explode('/', filter_var( trim($_GET['url']), FILTER_SANITIZE_URL)) ;
            $url[0] = $url[0] . 'Controller';
        }else{
            $url[0] = 'home';
        }
        
        // cek file controller
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
        }else{
            require_once '../app/Views/Error/404.php';
            exit;
        }
        // ingat!, kita ada di file public index.php
        require_once '../app/controllers/' . $this->controller . '.php';
        $object = new $this->controller;
        // cek metode controller
        if(isset($url[1])){
            if(method_exists($object, $url[1])){
                $this->method = $url[1];
            }
        }
        unset($url[0]);
        unset($url[1]);
        $this->param = $url;

        call_user_func_array([$this->controller, $this->method], $this->param);
    }
}