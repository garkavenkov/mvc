<?php

use Dotenv\Dotenv;
use Registry\Registry;
use Http\Session\SessionManager;
use MVC\Framework\Core\Routing\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../core/init.php';
require ROOT_DIR . '/vendor/autoload.php';

// Register SESSION
Registry::set('session', new SessionManager());

// Read variables from .env file. 
Dotenv::load(path: ROOT_DIR);

// Define database parameters, site name. Need to be done after loading .env file;
require CONFIG_DIR . '/app.php';

// Load routes
Router::loadRoutes();

// Register DB instance
if (env('DB_DRIVER')) {
    Registry::set('db', DBConnector\DBConnect::getInstance());    
}