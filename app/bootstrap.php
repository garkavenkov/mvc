<?php

/**
 * Include composer's vendor/autoload.php
 */
require COMPOSER_DIR . 'autoload.php';

/**
 * Include configuration file.
 */
require SYS_DIR . 'config.php';

/**
 * Autoload classes
 */
spl_autoload_register(function($class) {    
    $file = ROOT_DIR . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $file;
    }
});
