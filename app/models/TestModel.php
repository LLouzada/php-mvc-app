<?php

namespace App\Models;

use App\Database\DatabaseConnection;

class TestModel
{
    private $pdo;

    public function __construct() {
        $config = require HELPERS_PATH . 'config.php';
        $db = DatabaseConnection::getDbInstance($config['db']);
        $this->pdo = $db->getDbConnection();
        
        validateDbConnection($this->pdo);
    }
    
    public function testDbConnection()
    {
        $stmt = $this->pdo->prepare("SELECT nome FROM consulta_publica LIMIT 1");
        $stmt->execute();
        $result = $stmt->fetch();
        
        if ($result == null) {
            return ['msg' => "Sem resultados"];
        }
        return $result;
    }
}