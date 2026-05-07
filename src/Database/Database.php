<?php

namespace Qostel\Qos\Database;

use PDO;

abstract class Database
{
    protected PDO $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=' . $_ENV['DB_HOST'] . ";database=" . $_ENV['DB_DATABASE'], 
                $_ENV['DB_USER'], 
                $_ENV['DB_PASSWORD']
            );

            $this->setConnectionAttribues();
            
        } catch (\PDOException $e) {
            dd($e->getMessage());
        }
    }

    private function setConnectionAttribues(): void
    {
        $this->connection->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
    }
}