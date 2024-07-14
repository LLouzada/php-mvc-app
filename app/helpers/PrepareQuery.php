<?php

namespace App\helpers;

class PrepareQuery
{
    private $table;
    private $tableMap;
    private $query = '';
    private $queryParams = [];

    public function __construct()
    {
        $this->tableMap = require HELPERS_PATH . 'animalsMap.php';
    }

    public function prepareFilterQuery(array $requestData, $table)
    {
        $this->table = $table;

        $prepareResult = $this->prepareRaca($requestData);
        if (!$prepareResult) {
            return "404";
        }

        $this->prepareCentral($requestData);

        $this->prepareRepProg($requestData);


        return [
            'query' => $this->query,
            'queryParams' => $this->queryParams
        ];
    }

    private function prepareRaca($requestData): bool
    {
        if (empty($requestData['raca'])) {
            return false;
        }

        $raca = $this->tableMap['raca'][$requestData['raca']] ?? null;

        if (!$raca) {
            return false;
        }

        $this->query = "SELECT * FROM $this->table WHERE raca = :raca";
        $this->queryParams['raca'] = $raca;

        return true;
    }

    private function prepareCentral($requestData)
    {
        if (!empty($requestData['central'])) {
            $central = $this->tableMap['central'][$requestData['central']] ?? null;

            if ($central === 'Todas as Centrais') {
                $this->query .= " AND central IS NOT NULL AND central != ''";
            } else if ($central) {
                $this->query .= " AND central = :central";
                $this->queryParams['central'] = $central;
            }
        }
    }

    private function prepareRepProg($requestData)
    {
        if (!empty($requestData['rp'])) {
            $rp = $this->tableMap['rp'][$requestData['rp']] ?? null;

            if ($rp === 'Todas as RP') {
                $this->query .= " AND rep_prog IS NOT NULL AND rep_prog != ''";
            } else if ($rp) {
                $this->query .= " AND rep_prog = :rp";
                $this->queryParams['rp'] = $rp;
            }
        }
    }
}
