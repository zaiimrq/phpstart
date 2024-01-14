<?php


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/global.php';


try {
    $env = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $env->load();
    require_once __DIR__ . '/../app/routes.php';
} catch (\Throwable $throwable) {
    die($throwable->getMessage());
}
