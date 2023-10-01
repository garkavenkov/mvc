<?php

// Settings
define('SITENAME',      env('SITENAME', 'MVC Framework'));

// Database
define('DB_HOSTNAME',   env('DB_HOSTNAME', 'localhost') );
define('DB_USERNAME',   env('DB_USERNAME') );
define('DB_PASSWORD',   env('DB_PASSWORD') );
define('DB_DRIVER'  ,   env('DB_DRIVER') );

if (DB_DRIVER == 'sqlite') {
    define('DB_SCHEMA'  ,   env('DB_SCHEMA', DATABASE_DIR . '/db.sqlite') );
} else {
    define('DB_SCHEMA'  ,   env('DB_SCHEMA') );
}
