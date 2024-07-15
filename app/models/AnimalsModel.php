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

    public function getFilteredResults(array $requestData, bool $isPagination = false, bool $isDetails = false)
    {
        $prepare = new PrepareQuery();

        if ($isPagination) {
            $limit = (int) $requestData['limit'];
            $offset = (int) $requestData['offset'];

            $mainQuery = $requestData['mainQuery'];
            $mainQueryParams = json_decode($requestData['mainQueryParams'], true);

            // add limit and offset to the main query params
            $mainQueryParams['limit'] = $limit;
            $mainQueryParams['offset'] = $offset;

            $resultMainQuery = $this->runMainQuery([
                'query' => $mainQuery,
                'queryParams' => $mainQueryParams
            ]);
            
            if (empty($resultMainQuery) || $resultMainQuery === "404") {
                return $this->notFound();
            }
            
            //string(3) "NaN"
            if ($requestData['currentPage'] === "NaN") {
                //calculate the current page based on the offset and limit
                $requestData['currentPage'] = ($offset / $limit) + 1;
            }

            return [
                'view' => 'filteredAnimals.view.php',
                'data' => [
                    'title' => 'Consulta Pública de Machos Jovens e Touros',
                    'secondTitle' => 'Animais Filtrados - Consulta Avaliação Genética',
                    'success' => true,
                    'filteredResults' => $resultMainQuery,
                    'countResults' => $requestData['countResults'],
                    'mainQuery' => $mainQuery,
                    'mainQueryParams' => $mainQueryParams,
                    'limit' => $limit,
                    'offset' => $offset,
                    'currentPage' => $requestData['currentPage'],
                    'pagination' => true
                ]
            ];
        }

        if ($isDetails) {
            $animalId = $requestData['animalId'];
            $query = "SELECT * FROM {$this->table} WHERE id = :id";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindValue(':id', $animalId);

            if (!$stmt->execute()) {
                return '404';
            }

            $resultMainQuery = $stmt->fetch(PDO::FETCH_ASSOC);

            
            if (empty($resultMainQuery)) {
                return $this->notFound();
            }

            return [
                'view' => 'animalDetails.view.php',
                'data' => [
                    'title' => 'Consulta Pública de Machos Jovens e Touros',
                    'secondTitle' => 'Ficha do Animal',
                    'animalDetails' => $resultMainQuery,
                    'success' => true,
                    'mainQuery' => $requestData['mainQuery'],
                    'mainQueryParams' => $requestData['mainQueryParams'],
                    'limit' => $requestData['limit'],
                    'offset' => $requestData['offset'],
                    'currentPage' => $requestData['currentPage'],
                    'numberPages' => $requestData['numberPages'],
                    'countResults' => $requestData['countResults']

                ]
            ];
        }


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
                'pagination' => false
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
