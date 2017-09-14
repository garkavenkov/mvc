<?php

require '../vendor/autoload.php';

spl_autoload_register(function($class) {
    $root = dirname(__DIR__); // get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $file;
    }
});

use core\Router;

$router = new Router();
$router->dispatch($_SERVER['QUERY_STRING']);