<?php
session_start();

ini_set('display_errors','On');
error_reporting(E_ALL);

spl_autoload_register(function($class)
{
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

$router =  new app\base\Router;
$router->run();

