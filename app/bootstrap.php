<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ROOT_DIR', dirname(__DIR__));
define('APP_DIR', ROOT_DIR . '/app' );
define('VIEWS_DIR', ROOT_DIR . '/resources/views/');
define('CONFIG_DIR', ROOT_DIR . '/config');
define('ROUTES_DIR', ROOT_DIR . '/routes');


require CONFIG_DIR . '/app.php';
require ROOT_DIR . '/vendor/autoload.php';

use MVC\Framework\Core\Routing\Router;

Router::loadRoutes();

