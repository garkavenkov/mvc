<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../app/bootstrap.php';

$dispatcher->dispatch($_SERVER['REQUEST_URI']);