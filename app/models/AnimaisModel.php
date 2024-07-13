<?php

namespace App\models;

use App\Database\DatabaseConnection;

class AnimaisModel
{
    private $pdo;

    public function __construct() {
        $config = require HELPERS_PATH . 'config.php';
        $db = DatabaseConnection::getDbInstance($config['db']);
        $this->pdo = $db->getDbConnection();
        
        validateDbConnection($this->pdo);
    }

    public function getFilteredResults($filter) {
        // $stmt = $this->pdo->prepare("SELECT * FROM your_table WHERE your_column LIKE :filter");
        // $stmt->execute(['filter' => '%' . $filter . '%']);
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDetail($id) {
        // $stmt = $this->pdo->prepare("SELECT * FROM your_table WHERE id = :id");
        // $stmt->execute(['id' => $id]);
        // return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
}
