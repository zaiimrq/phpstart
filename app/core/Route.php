<?php

namespace App\core;

class Route
{

    public static function __callStatic($method, $args)
    {
        if (Route::method() == strtoupper($method) && Route::is($args[0])) {

            is_callable($args[1]) ?
                call_user_func($args[1]) :
                call_user_func_array([$args[1][0], $args[1][0]], $_REQUEST);

            foreach ($args[2] ?? [] as $arg) {
                call_user_func([new $arg, 'middleware']);
            }
            exit;
        }

        http_response_code(404);
    }

    public static function uri(): string
    {
        $uri = $_SERVER["PATH_INFO"] ?? '/';
        $uri = filter_var($uri, FILTER_SANITIZE_URL);

        return $uri;
    }

    public static function is(string $path): bool
    {
        return Route::uri() == $path;
    }

    public static function method(): string
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public static function redirect(string $path): void
    {
        header("Location: $path");
        exit;
    }
}
