<?php

/**
 * Entry point da aplicação.
 * 
 * Inicializa a aplicação com o script bootstrap.php e
 * roteia as requisições do usuário para as respectivas
 * views da aplicação.
 */

require_once 'bootstrap.php';

try {
    $routerData = router();

    validateControllerData($routerData);

    extract($routerData['data']);

    $routedView = $routerData['view'];
    // var_dump($routedView);
    // die();

    // Carrega a view principal da aplicação.
    require VIEWS_PATH . 'master.view.php';
} catch (Exception $e) {
    handleAppError($e, null);
}
