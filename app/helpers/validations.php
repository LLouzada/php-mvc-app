<?php

function validateControllerData(array $routerData): void {
    if (!isset($routerData['view'])) {
        throw new Exception('Indíce de view não encontrado. Verifique o retorno do controller.');
    }
    
    if (!isset($routerData['data'])) {
        throw new Exception('Indíce de dados não encontrado. Verifique o retorno do controller.');
    }
    
    if (!file_exists(VIEWS_PATH . $routerData['view'])) {
        throw new Exception('View não encontrada. Verifique o nome da view no controller e a existência do arquivo.');
    }
    
    if (!is_array($routerData['data']) || !isset($routerData['data']['title'])) {
        throw new Exception('Dados inválidos. Verifique o retorno do controller.');
    }
}

function validateRequestRoute(string $controllerWithNamespace, string $method, string $controller): void {
    
    if (!class_exists($controllerWithNamespace)) {
        throw new Exception("Controller {$controller} não encontrado.");
    }

    if (!method_exists($controllerWithNamespace, $method)) {
        throw new Exception("Método {$method} no controller {$controller} não encontrado.");
    }
}

function validateDbConnection($pdo): void {
    if ($pdo == null) {
        throw new Exception("Erro ao conectar com o banco de dados");
    }
}
