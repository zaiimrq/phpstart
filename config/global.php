<?php

$env = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$env->load();

function env(string $env): string
{
    return $_ENV[$env] ?? null;
}

function public_path(): string
{
    return __DIR__ . '/../public';
}
