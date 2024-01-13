<?php

namespace App\database;

use PDO;
use PDOException;

class Database
{
    public static function connect()
    {
        try {
            return new PDO(
                env('DB_DSN'),
                env('DB_USER'),
                env('DB_PASS')
            );
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}
