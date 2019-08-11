<?php

namespace app\base;

class View
{
    public $path;
    public $route;
    public $layout = 'light';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars, EXTR_OVERWRITE);
        $path = 'app/views/' . $this->path . '.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/' . $this->layout . '.php';
        }
    }

    public static function error($code)
    {
        http_response_code($code);
        $path = 'app/views/errors/' . $code . '.php';
        if (file_exists($path)) {
//            require $path;
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/light.php';
        }
        exit;
    }

    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }

    public function redirect($url)
    {
        header('location: /'.$url);
        exit;
    }
}