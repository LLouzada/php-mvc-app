<?php

namespace App\Controllers;

class FilteredAnimalsController
{
    public function filter()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Filter 1
            $data = $_POST;
            $raca = $data['raca'];
            $central = $data['central'];
            $rp = $data['rp'];

            // Filter 2
            $serie = $data['serie'];
            $rgn = $data['rgn'];
            $rgd = $data['rgd'];
            $nome = $data['nome'];

            // Filter 3
            $categoria = $data['categoria'];
            $variedade = $data['variedade'];
            $situacao = $data['situacao'];
            $sexo = $data['sexo'];
            $intervaloNasc1 = $data['intervalo-nasc1'];
            $intervaloNasc2 = $data['intervalo-nasc2'];

            // Filter 4
            $pSerie = $data['p-serie'];
            $pRgn = $data['p-rgn'];
            $pRgd = $data['p-rgd'];
            $mSerie = $data['m-serie'];
            $mRgn = $data['m-rgn'];
            $mRgd = $data['m-rgd'];

            // Filter 5


            echo $raca;
            echo $central;
            echo $rp;
            die();

            // var_dump($data);
            // $filteredAnimals = $this->filterAnimals($data);
            // return view('filtered-animals', compact('filteredAnimals'));
        }
    }
}
