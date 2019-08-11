<?php

namespace app\base;

abstract class Controller
{
    public $route;
    public $view;
    public $access;

    public function __construct($route)
    {
        $this->route = $route;
        //if user has no access, redirect on main page
        if (!$this->checkAccess()) {
            header('Location: /');
        }
        $this->view = new View($route);
        $this->layout();
        $this->model = $this->loadModel($route['controller']);
    }

    public function redirect($url)
    {
        header('location: ' . $url);
        exit;
    }

    public function loadModel($name)
    {
        $path = 'app\models\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }

    public function checkAccess()
    {
        $this->access = require 'app/config/access/' . $this->route['controller'] . '.php';
        if ($this->hasAccess('all')) {
            return true;
        } elseif (isset($_SESSION['admin']) and $this->hasAccess('admin')) {
            return true;
        } elseif (!isset($_SESSION['admin']) and $this->hasAccess('guest')){
            return true;
        } else {
            return false;
        }
    }

    public function hasAccess($key)
    {
        return in_array($this->route['action'], $this->access[$key]);
    }
}