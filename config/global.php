<?php

function env(string $env): string
{
    return $_ENV[$env] ?? null;
}

function public_path(): string
{
    return __DIR__ . '/../public';
}

function baseurl(string $path): string
{
    return env('BASEURL') . '/' . $path;
}
