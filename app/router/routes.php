<?php

/**
 * Definição das rotas da aplicação.
 * 
 * @return array
 */

return [
    '/' => 'Filter@index',
    '/consulta-de-touros' => 'Filter@index',
    '/public/' => 'Filter@index',
    '/public/consulta-de-touros' => 'Filter@index',
    '/lucas' => 'Filter@index',
    '/lucas/consulta-de-touros' => 'Filter@index',
    '/test' => 'Test@index',
    '/animais-filtrados' => 'FilteredAnimals@filter',
];
