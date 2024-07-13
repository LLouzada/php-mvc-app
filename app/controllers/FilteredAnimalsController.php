<?php

namespace App\Controllers;

use App\models\AnimalsModel;

class FilteredAnimalsController
{
    public function filter()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requestData = $_POST;

            $model = new AnimalsModel();
            $filteredResults = $model->getFilteredResults($requestData);

            return [
                'view' => 'filter.view.php',
                'data' => [
                    'title' => 'Consulta Pública de Machos Jovens e Touros',
                    'secondTitle' => 'Animais Filtrados',
                    'success' => true,
                    'filteredResults' => $filteredResults
                ]
            ];
        }
    }

   
}
