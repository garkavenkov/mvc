<?php

use Dotenv\Dotenv;
use Registry\Registry;
use MVC\Framework\Core\Routing\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../core/init.php';
require ROOT_DIR . '/vendor/autoload.php';

Dotenv::load(path: ROOT_DIR);

require CONFIG_DIR . '/app.php';

Router::loadRoutes();

if (env('DB_DRIVER')) {
    Registry::set('db', DBConnector\DBConnect::getInstance());    
}