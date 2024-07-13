<?php

function prepareFilterQuery($requestData, $table, $pdo)
{
    $tableMap = require HELPERS_PATH . 'animalsMap.php';
    $queryParams = [];

    if (!isset($requestData['raca']) || empty($requestData['raca'])) {
        return "404";
    }

    $raca = $requestData['raca'];
    $raca = $tableMap['raca'][$raca];

    if (empty($raca)) {
        return "404";
    }

    $query = "SELECT * FROM $table WHERE raca = :raca";
    $queryParams['raca'] = $raca;

    if (isset($requestData['central']) && !empty($requestData['central'])) {
        $central = $requestData['central'];
        $central = $tableMap['central'][$central];

        if ($central === 'Todas as Centrais') {
            // all not emprty central
            $query .= " AND central IS NOT NULL AND central != ''";
        }
        $query .= " AND central = :central";
    }

    $stmt = $pdo->prepare($query);
    
    //bind params
    foreach ($queryParams as $key => $value) {
        $stmt->bindParam(":$key", $value);
    }

    return $stmt;

}

