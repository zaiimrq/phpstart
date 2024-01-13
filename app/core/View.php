<?php

namespace phpstart\core;

class View
{
    public static function render(string $view): void
    {
        require_once __DIR__ . "/../views/$view.php";
    }
}
