<?php

/**
 * Carrega o controller e o método solicitado pelo roteamento.
 *
 * @param string $routeRequested Rota solicitada
 * @return mixed
 */
function loadController($routeRequested): mixed
{
    [$controller, $method] = explode('@', $routeRequested);
    $controllerWithNamespace = CONTROLLERS_PATH . $controller . 'Controller';

    validateRequestRoute($controllerWithNamespace, $method, $controller);

    $controllerInstance = new $controllerWithNamespace;

    return $controllerInstance->$method();
}
