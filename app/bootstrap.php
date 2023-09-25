<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../core/init.php';
require ROOT_DIR . '/vendor/autoload.php';

Dotenv\Dotenv::load(path: ROOT_DIR);

require CONFIG_DIR . '/app.php';

MVC\Framework\Core\Routing\Router::loadRoutes();

if (env('DB_DRIVER')) {
    $dbh = DBConnector\DBConnect::getInstance();
}