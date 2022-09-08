<?php 
class View 
{
    public static function load($view , $params =[])
    {
        $viewFile = VIEWS . $view . ".php";
        if(file_exists($viewFile)){
            extract($params);//make title => blabla (title as variable $title = blabla)
            ob_start();
            require_once($viewFile);
            ob_end_flush();
        }else{
            echo "<h2 style = 'background : red'>This View '" . $view ."' Dosnt Exist</h2>";
        }
    }




}