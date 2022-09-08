<?php
class App
{
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];
    public function __construct()
    {
         $this->parseURL();//TO MAKE URL CONVINTION(CONTROLLER / METHOD / PARAMS)
         $this->render();
    }
    /* extract controller , method , params
    *@return void 
    */
    protected function parseURL()
    {
        $url =  $_SERVER['REQUEST_URI'];
        if(!empty($url)){
            $url = trim($url,'/');
            $url = explode('/',$url);
            //[0]=>controller , [1]=>action , [2]=>params
            $this->controller = isset($url[0]) ? ucwords($url[0])."Controller":"HomeController";
            $this->action = isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }
    protected function render(){
        if(class_exists($this->controller)){
            $controller = new $this->controller;
            if(method_exists($controller , $this->action)){
                call_user_func_array([$controller,$this->action],$this->params);
            }else{
                echo "Cant Find '". $this->action . "' Method In '" . $this->controller."'";
            }
        }else{
            View::load('home');
        }
    }



}