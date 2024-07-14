<?php

namespace App\Controllers;

use App\models\AnimalsModel;

class FilteredAnimalsController
{
    public function filter()
    {
        // todo - implementar paginação aqui
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return [
                'view' => 'filter.view.php',
                'data' => [
                    'title' => 'Consulta de Touros',
                    'secondTitle' => 'Filtros de Consulta'
                ]
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // if (!isset($_POST['pagination'])) {
            //     return [
            //         'view' => 'filter.view.php',
            //         'data' => [
            //             'title' => 'Consulta de Touros',
            //             'secondTitle' => 'Filtros de Consulta',
            //             'error' => 'Favor preencher os campos de filtro'
            //         ]
            //     ];
            // }
            $requestData = $_POST;

            $model = new AnimalsModel();
            return $model->getFilteredResults($requestData);
        }
    }
}
