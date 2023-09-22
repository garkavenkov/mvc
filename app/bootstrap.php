<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../core/init.php';

require CONFIG_DIR . '/app.php';
require ROOT_DIR . '/vendor/autoload.php';

use DBConnector\DBConnect;
use MVC\Framework\Core\Routing\Router;

Router::loadRoutes();

$dbh = DBConnect::getInstance();