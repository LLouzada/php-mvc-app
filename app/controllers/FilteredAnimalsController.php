<?php

namespace App\Controllers;

use App\models\AnimalsModel;

class FilteredAnimalsController
{
    public function filter()
    {
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
            $requestData = $_POST;
            $model = new AnimalsModel();
            
            if (isset($requestData['pagination'])) {
                // var_dump($requestData);
                // die();
                return $model->getFilteredResults($requestData, true);
            }
           
            return $model->getFilteredResults($requestData, false);
        }
    }
}
