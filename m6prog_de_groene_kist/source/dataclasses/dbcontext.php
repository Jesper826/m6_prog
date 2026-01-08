<?php

require_once __DIR__ . '/../database.php';

class DbContext {
    /**
     * Retourneer de bestaande mysqli verbinding uit `database.php`
     * Gebruik: $conn = DbContext::getConnection();
     */
    public static function getConnection(): mysqli {
        global $connection;
        return $connection;
    }
}
