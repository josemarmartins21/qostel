<?php

namespace Qostel\Qos\Entitys;

use PDO;
use Qostel\Qos\Database\Database;

class RenownedClient extends Database
{
    public function getResources()
    {
        try {
            $query = "SELECT 
                    cp.logo,
                    cp.url,
                    c.name 
                    FROM client_prove_socials AS cp JOIN clients AS c 
                    ON c.id = cp.client_id WHERE is_active = :estado LIMIT :max";

            $stmt = $this->connection->prepare($query);
            
            $stmt->bindValue('estado', 1, PDO::PARAM_BOOL);
            $stmt->bindValue('max', 5, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (\Throwable $e) {
            dd($e->getMessage());
        }
    }
}