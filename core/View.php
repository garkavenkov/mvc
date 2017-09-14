<?php

namespace core;

abstract class View
{    
    public static function render(string $view, array $data = [])
    {
        extract($data, EXTR_SKIP);
        $file = VIEWS_DIR . $view . ".php";
        require VIEWS_DIR. "partials/header.php";
        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found.";
        }
        require VIEWS_DIR . "partials/footer.php";
    }
}