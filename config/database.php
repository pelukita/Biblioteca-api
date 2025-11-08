<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'biblioteca_db';
    private $username = 'Root';
    private $password = '';
    public $connection;

    public function getConnection() {
        $this->connection = null;
        try {
            $this->connection = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            $this->connection->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->connection;
    }
}