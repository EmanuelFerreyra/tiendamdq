<?php


namespace tiendamdq\database;

use PDO;
use PDOException;


class Connection extends PDOException{

    private $connection;


    public function __construct( $keysDataBase ){

        $keys = (object)$keysDataBase;

        $dsn = "mysql:host=$keys->host;dbname=$keys->database;";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->connection = new PDO($dsn, $keys->user, $keys->password, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    
    }


    public function on(){
        return $this->connection ? 'good connection' : 'danger connection';
    }

}
