<?php

namespace App\Controllers;

class TestController
{
    public function index()
    {
        $TestModel = new \App\Models\TestModel();
        $result = $TestModel->testDbConnection();

        return [
            'view' => 'test.view.php',
            'data' => [
                'title' => 'Db Teste', 
                'queryResult' => $result->nome
            ]
        ];
    }
}
