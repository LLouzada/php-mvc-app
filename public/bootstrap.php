<?php

/**
 * Script utilitário para inicialização da aplicação.
 * 
 * Carrega o autoload do composer e defino as configurações
 * de exibição de erros e logs da aplicação. Utilizo a constante
 * DEBUG para definir se a aplicação está em ambiente de
 * desenvolvimento ou produção. 
 * 
 * Para mudar o ambiente de desenvolvimento, basta alterar a constante DEBUG
 * no arquivo [helpers/constants].
 * 
 * [As mesmas configurações podem ser feitas via .htaccess, .php.ini, apache.conf, etc.,
 * por comodidade, foi centralizado neste arquivo.]
 */

require_once '../vendor/autoload.php';
require_once HELPERS_PATH . 'validations.php';
require_once HELPERS_PATH . 'handler.php';

$dotenv = Dotenv\Dotenv::createImmutable(APP_ROOT);
$dotenv->load();

ini_set('display_errors', DEBUG ? 1 : 0);
ini_set('display_startup_errors', DEBUG ? 1 : 0);
error_reporting(DEBUG ? E_ALL : 0);

