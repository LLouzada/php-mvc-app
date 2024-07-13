<?php

/**
 * Método para buscar as rotas da aplicação, as quais são 
 * definidas no arquivo [routes.php] para nos permitir
 * maior conveniência na manutenção e organização do código.
 * 
 * @return array
 */
function routes(): array
{
    return require 'routes.php';
}

/**
 * Método para rotear as requisições do usuário para as 
 * respectivas views da aplicação.
 * 
 * Faz parte do entry point da aplicação, sendo chamado
 * no arquivo [index.php].
 * 
 * @return mixed
 */
function router() : mixed
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = routes();

    return array_key_exists($uri, $routes) ? loadController($routes[$uri]) : throw new Exception('Rota não encontrada. Rota: ' . $uri);
}
