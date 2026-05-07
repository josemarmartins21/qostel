<?php

namespace Qostel\Qos\Entitys;

use PDO;
use Qostel\Qos\Database\Database;

class Testimony extends Database
{
    public function getResources()
    {
        try {

            $query = "SELECT c.name,
                            t.testimony AS testemunho
                    FROM testimonies AS t JOIN clients as c
                    ON t.client_id = c.id WHERE is_active = :estado
                    ORDER BY c.name LIMIT :max";


            $stmt = $this->connection->prepare($query);
    
            $stmt->bindValue('estado', 1, PDO::PARAM_INT);
            $stmt->bindValue('max', 5, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (\Throwable $e) {
            dd($e->getMessage());
        }

    }
}