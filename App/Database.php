<?php

namespace App;

use mysqli;

class Database
{
    private static ?mysqli $conn = null;

    public static function getConnection(): mysqli
    {
        if (self::$conn === null) {
            self::$conn = new mysqli(
                'localhost',
                'root',
                '',
                'school_app'
            );
        }

        if (self::$conn -> connect_error) {
            die("Conexiune esuata: " . self::$conn->connect_error);
        }

        return self::$conn;
    }
}