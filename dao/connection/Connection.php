<?php

class Connection
{
    private static ?PDO $connection = null;
    /**
     * Connection constructor.
     */
    private function __construct()
    {
        self::$connection = new PDO(
            DB_DSN, DB_USER, DB_PASSWORD,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,     // déclencher une exception en cas d'erreur
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // chaque ligne du résultat sera une table associative
            ]
        );
    }

    public static function getInstance(): PDO{
        if(self::$connection == null){
            new Connection();
        }
        return self::$connection;
    }


}