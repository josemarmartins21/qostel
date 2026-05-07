<?php

namespace Qostel\Qos\Entitys;

use Qostel\Qos\Database\Database;
use PDO;

class FrequentQuestion extends Database
{
    public function getResources()
    {
        try {

            $query = "SELECT question AS pergunta, response FROM questions
            WHERE is_active = :estado
            LIMIT :max";

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