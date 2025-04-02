<?php

namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function getAll()
    {
        $statement = $this->db->query("SELECT * FROM {$this->table} ORDER BY date_creation DESC");
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findById(int $id)
    {
        $statement = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $statement->bindParam(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
}