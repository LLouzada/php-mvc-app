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

    public function getFilteredResults(array $requestData)
    {
        $prepare = new PrepareQuery();
        $resultOfQueryPrepare = $prepare->prepareFilterQuery($requestData, $this->table, $this->pdo);

        if ($resultOfQueryPrepare === "404") {
            return $this->notFound();
        }

        validateResultOfQueryPrepare($resultOfQueryPrepare);

        // var_dump($resultOfQueryPrepare);
        // die();

        $resultMainQuery = $this->runMainQuery($resultOfQueryPrepare);
        if (empty($resultMainQuery) || $resultMainQuery === "404") {
            return $this->notFound();
        }

        $resultCountQuery = $this->runCountQuery($resultOfQueryPrepare);

        // var_dump($resultMainQuery);
        // var_dump($resultCountQuery);
        // die();

        return [
            'view' => 'filteredAnimals.view.php',
            'data' => [
                'title' => 'Consulta Pública de Machos Jovens e Touros',
                'secondTitle' => 'Animais Filtrados - Consulta Avaliação Genética',
                'success' => true,
                'filteredResults' => $resultMainQuery,
                'countResults' => $resultCountQuery,
                'mainQuery' => $resultOfQueryPrepare['query'],
                'mainQueryParams' => $resultOfQueryPrepare['queryParams'],
                'countQuery' => $resultOfQueryPrepare['countQuery'],
                'countQueryParams' => $resultOfQueryPrepare['countQueryParams'],
                'limit' => (int) $requestData['limit'],
                'offset' => 0,
                'classification' => $resultOfQueryPrepare['classification'],
            ]
        ];
    }

    /**
     * Executa a query principal.
     * 
     * @param array $resultOfQueryPrepare
     * @return array
     */
    private function runMainQuery(array $resultOfQueryPrepare)
    {
        $mainStmt = $this->pdo->prepare($resultOfQueryPrepare['query']);
        foreach ($resultOfQueryPrepare['queryParams'] as $key => $value) {
            $mainStmt->bindValue(":$key", $value);
        }

        if (!$mainStmt->execute()) {
            return '404';
        }

        return $mainStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Executa a query de contagem.
     * 
     * @param array $resultOfQueryPrepare
     * @return array
     */
    private function runCountQuery(array $resultOfQueryPrepare)
    {
        $countStmt = $this->pdo->prepare($resultOfQueryPrepare['countQuery']);
        foreach ($resultOfQueryPrepare['countQueryParams'] as $key => $value) {
            $countStmt->bindValue(":$key", $value);
        }

        if (!$countStmt->execute()) {
            return '404';
        }

        return $countStmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Retorna uma mensagem de erro caso a query não retorne resultados.
     * 
     * @return array
     */
    private function notFound(): array
    {
        return [
            'view' => 'filteredAnimals.view.php',
            'data' => [
                'title' => 'Consulta Pública de Machos Jovens e Touros',
                'secondTitle' => 'Animais Filtrados',
                'success' => false,
                'message' => 'Nenhum resultado encontrado'
            ]
        ];
    }
}
