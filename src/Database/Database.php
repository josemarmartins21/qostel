<?php

namespace Qostel\Qos\Database;

use PDO;

abstract class Database
{
    protected PDO $connection;

    public abstract function getResources();

    public function __construct()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=' . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_DATABASE'], 
                $_ENV['DB_USERNAME'], 
                $_ENV['DB_PASSWORD']
            );

            $this->connection->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
            
        } catch (\PDOException $e) {
            dd($e->getMessage());
        }
    }
}