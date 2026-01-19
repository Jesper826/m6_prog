<?php

require_once __DIR__ . '/../database.php';

class DbContext {

    public static function getConnection(): mysqli {
        global $connection;
        return $connection;
    }
}
