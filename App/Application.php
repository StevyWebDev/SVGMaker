<?php

namespace App;

class Application
{
    public static function process()
    {
        $controllerName = "Home";
        $task = "index";
        $param = null;

        if(!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }

        if(!empty($_GET['task'])) {
            $task = $_GET['task'];
        }

        if(!empty($_GET['param'])) {
            $param = $_GET['param'];
        }

        $controllerName = "\Controller\\" . $controllerName;
        $controller = new $controllerName();
        $controller->$task($param);
    }
}