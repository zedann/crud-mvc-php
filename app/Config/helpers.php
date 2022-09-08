<?php

if(!function_exists('url')){
    function url($url = null)
    {
        echo '/'.$url ;
    }
}

if(!function_exists('route')){
    function route($url = null , $param = null){
        echo $url.'/'.$param;
    }
}