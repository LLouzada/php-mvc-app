<?php

namespace App\models;

use PDO;
use App\helpers\PrepareQuery;
use App\Database\DatabaseConnection;

class AnimalsModel
{
    private $pdo;
    private string $table = 'consulta_publica';


    public function __construct()
    {
        $config = require HELPERS_PATH . 'config.php';
        $db = DatabaseConnection::getDbInstance($config['db']);
        $this->pdo = $db->getDbConnection();

        validateDbConnection($this->pdo);
    }

    public function getFilteredResults($requestData)
    {
        $prepare = new PrepareQuery();
        if ($prepare === "404") {
            return $this->notFound();
        }

        $prepareResult = $prepare->prepareFilterQuery($requestData, $this->table, $this->pdo);

        var_dump($prepareResult);
        die();

        $stmt = $this->pdo->prepare($prepareResult['query']);

        // Bind params
        foreach ($prepareResult['queryParams'] as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }

        $result = $stmt->execute();
        if (!$result) {
            return $this->notFound();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
