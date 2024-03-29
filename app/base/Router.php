<?php

namespace app\base;

class Router
{
    private $routes = [];
    private $params = [];

    public function __construct()
    {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
    }

    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        } return false;
    }

    // run, controller, run
    public function run()
    {
        if ($this->match()) {
            $path = 'app\controllers\\' . ucfirst($this->params["controller"]) . 'Controller';
            if (class_exists($path)) {
                $action = "action" . ucfirst($this->params['action']);
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    //action not found
                    View::error(404);
                }
            } else {
                //path not found
                View::error(404);
            }
        } else {
            //path not found
            View::error(404);
        }
    }
}