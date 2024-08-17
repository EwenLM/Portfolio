<?php

namespace App\Models;

use PDOException;

class DbConnector extends Db
{
    private static $instance;

    protected function __construct()
    {
        parent::__construct();
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

// Utilisation la classe MyDb pour obtenir une instance de PDO
try {
    $db = DbConnector::getInstance()->getPdo();
    // Utilisation de $db pour effectuer des opérations sur la base de données
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}