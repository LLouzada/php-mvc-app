<?php

namespace App\models;

use App\Database\DatabaseConnection;

class AnimalsModel
{
    private $pdo;
    private $table = 'consulta_publica';
    

    public function __construct()
    {
        $config = require HELPERS_PATH . 'config.php';
        $db = DatabaseConnection::getDbInstance($config['db']);
        $this->pdo = $db->getDbConnection();

        validateDbConnection($this->pdo);
    }

    public function getFilteredResults($requestData)
    {
        $query = prepareFilterQuery($requestData, $this->table, $this->pdo);

        if ($query === "404") {
            return $this->notFound();
        }

        if (isset($requestData['central']) && !empty($requestData['central'])) {
            $central = $requestData['central'];
            $stmt->bindParam(':central', $central);
        }

        $stmt->execute();
        
    }

    public function getDetail($id)
    {
        // $stmt = $this->pdo->prepare("SELECT * FROM your_table WHERE id = :id");
        // $stmt->execute(['id' => $id]);
        // return $stmt->fetch(PDO::FETCH_ASSOC);

        // $stmt = $this->pdo->prepare("SELECT * FROM your_table WHERE your_column LIKE :filter");
        // $stmt->execute(['filter' => '%' . $filter . '%']);
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private function notFound()
    {
        return [
            'view' => 'filter.view.php',
            'data' => [
                'title' => 'Consulta Pública de Machos Jovens e Touros',
                'secondTitle' => 'Animais Filtrados',
                'success' => false,
                'message' => 'Nenhum resultado encontrado'
            ]
        ];
    }
}
