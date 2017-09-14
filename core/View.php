<?php

namespace core;

abstract class View
{
    public static function render(string $view, array $data = [])
    {
        extract($data, EXTR_SKIP);
        $file = "../app/views/$view" . ".php";
        require "../app/views/partials/header.php";
        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found.";
        }
        require "../app/views/partials/footer.php";
    }
}