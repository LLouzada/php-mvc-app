<?php

function validateControllerData(array $routerData): void
{
    if (!isset($routerData['view'])) {
        throw new Exception('Indíce de view não encontrado. Verifique o retorno do controller.');
    }

    if (!isset($routerData['data'])) {
        throw new Exception('Indíce de dados não encontrado. Verifique o retorno do controller.');
    }

    if (!file_exists(VIEWS_PATH . $routerData['view'])) {
        throw new Exception('View não encontrada. Verifique o nome da view no controller e a existência do arquivo.');
    }

    if (!is_array($routerData['data']) || !isset($routerData['data']['title']) || !isset($routerData['data']['secondTitle'])) {
        throw new Exception('Dados inválidos. Verifique o retorno do controller.');
    }

    if (isset($routerData['data']['success']) && $routerData['data']['success'] === false) {
        if (!isset($routerData['data']['message'])) {
            throw new Exception('Mensagem de erro não encontrada. Verifique o retorno do controller.');
        }
    }

    if (isset($routerData['data']['success']) && $routerData['data']['success'] === true) {
        if ($routerData['view'] === 'animalDetails.view.php') {
            return;
        }
        if (
            !isset($routerData['data']['filteredResults']) || !isset($routerData['data']['countResults']) || !isset($routerData['data']['mainQuery'])
            || !isset($routerData['data']['mainQueryParams']) || !isset($routerData['data']['limit']) || !isset($routerData['data']['offset'])
        ) {
            throw new Exception('Dados de resultados não encontrados. Verifique o retorno do controller.');
        }
    }
}

function validateRequestRoute(string $controllerWithNamespace, string $method, string $controller): void
{

    if (!class_exists($controllerWithNamespace)) {
        throw new Exception("Controller {$controller} não encontrado.");
    }

    if (!method_exists($controllerWithNamespace, $method)) {
        throw new Exception("Método {$method} no controller {$controller} não encontrado.");
    }
}

function validateDbConnection($pdo): void
{
    if ($pdo == null) {
        throw new Exception("Erro ao conectar com o banco de dados");
    }
}

function validateResultOfQueryPrepare(array $requestData): void
{
    if (empty($requestData)) {
        throw new Exception("Dados da requisição não encontrados.");
    }

    if (!isset($requestData['query']) || !isset($requestData['queryParams']) || !isset($requestData['countQuery']) || !isset($requestData['countQueryParams'])) {
        throw new Exception("Dados da preparação da query não encontrados.");
    }
}

// function validateFilteredResults(array $filteredResults): void
// {
//     if (empty($filteredResults)) {
//         throw new Exception("Erro ao filtrar os resultados.");
//     }

//     if (
// /        !isset($filteredResults['filteredResults']) || !isset($filteredResults['countResults']) || !isset($filteredResults['mainQuery'])
//         || !isset($filteredResults['mainQueryParams']) || !isset($filteredResults['countQuery']) || !isset($filteredResults['countQueryParams'])
//     ) {
//         throw new Exception("Dados dos resultados filtrados não encontrados.");
//     }
// }
