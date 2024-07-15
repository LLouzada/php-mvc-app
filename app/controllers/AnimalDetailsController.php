<?php

namespace App\Controllers;

use App\models\AnimalsModel;

class AnimalDetailsController
{
    public function details()
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
            
            if (isset($requestData['animalId'])) {
                return $model->getFilteredResults($requestData, false, true);
            }
           
        }
    }
}
