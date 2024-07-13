<?php

namespace App\Controllers;

class FilterController
{
    public function index()
    {
        return [
            'view' => 'filter.view.php',
            'data' => [
                'title' => 'Consulta Pública de Machos Jovens e Touros',
                'secondTitle' => 'Consultar Animais'
            ]
        ];
    }
}
