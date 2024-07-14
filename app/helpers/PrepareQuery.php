<?php

namespace App\helpers;

class PrepareQuery
{
    private $table;
    private $queryParamsMap;
    private $query = '';
    private $queryParams = [];
    private $countQuery = '';
    private $countQueryParams = [];
    private $classification;

    public function __construct()
    {
        $this->queryParamsMap = require HELPERS_PATH . 'queryParamsMap.php';
    }

    public function prepareFilterQuery(array $requestData, $table)
    {
        $this->table = $table;

        $prepareResult1 = $this->buildInitialQueryAndAddRace($requestData);
        if (!$prepareResult1) {
            return "404";
        }

        $this->addCentral($requestData);

        $this->addRepProg($requestData);

        $this->addAnimalDetails($requestData);

        $this->addGrouDetails($requestData);

        $this->addGenealogicalDetails($requestData);

        $this->addDeps($requestData);

        $this->addNumberOfSons($requestData);

        $prepareResult2 = $this->addOrderAndClassificationAndPagination($requestData);
        if (!$prepareResult2) {
            return "404";
        }

        return [
            'query' => $this->query,
            'queryParams' => $this->queryParams,
            'countQuery' => $this->countQuery,
            'countQueryParams' => $this->countQueryParams,
            'classification' => $this->classification
        ];
    }


    private function buildInitialQueryAndAddRace(array $requestData): bool
    {
        if (empty($requestData['raca']) || empty($requestData['classification']) || empty($requestData['limit']) || empty($requestData['order'])) {
            return false;
        }

        $raca = $this->queryParamsMap['raca'][$requestData['raca']] ?? null;

        if (!$raca) {
            return false;
        }

        $this->query = "SELECT * FROM $this->table WHERE raca = :raca";
        $this->countQuery = "SELECT COUNT(*) FROM $this->table WHERE raca = :raca";
        $this->queryParams['raca'] = $raca;
        $this->countQueryParams['raca'] = $raca;

        return true;
    }

    private function addCentral(array $requestData): void
    {
        if (!empty($requestData['central'])) {
            $central = $this->queryParamsMap['central'][$requestData['central']] ?? null;

            if ($central === 'Todas as Centrais') {
                $partialQuery = " AND central IS NOT NULL AND central != ''";
                $this->query .= $partialQuery;
                $this->countQuery .= $partialQuery;
            } else if ($central) {
                $partialQuery = " AND central = :central";
                $this->query .= $partialQuery;
                $this->countQuery .= $partialQuery;
                $this->queryParams['central'] = $central;
                $this->countQueryParams['central'] = $central;
            }
        }
    }

    private function addRepProg(array $requestData): void
    {
        if (!empty($requestData['rp'])) {
            $rp = $this->queryParamsMap['rp'][$requestData['rp']] ?? null;

            if ($rp === 'Todas as RP') {
                $partialQuery = " AND rep_prog IS NOT NULL AND rep_prog != ''";
                $this->query .= $partialQuery;
                $this->countQuery .= $partialQuery;
            } else if ($rp) {
                $partialQuery = " AND rep_prog = :rp";
                $this->query .= $partialQuery;
                $this->countQuery .= $partialQuery;
                $this->queryParams['rp'] = $rp;
                $this->countQueryParams['rp'] = $rp;
            }
        }
    }

    private function addAnimalDetails(array $requestData)
    {
        if (!empty($requestData['serie'])) {
            $serie = $requestData['serie'];
            $serie = filter_var($serie, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND serie = :serie";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['serie'] = $serie;
            $this->countQueryParams['serie'] = $serie;
        }

        if (!empty($requestData['rgn'])) {
            $rgn = $requestData['rgn'];

            $rgn = filter_var($rgn, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery1 = " AND rgn = :rgn";
            $this->query .= $partialQuery1;
            $this->countQuery .= $partialQuery1;
            $this->queryParams['rgn'] = $rgn;
            $this->countQueryParams['rgn'] = $rgn;
        }

        if (!empty($requestData['rgd'])) {
            $rgd = $requestData['rgd'];

            $rgd = filter_var($rgd, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery2 = " AND rgd = :rgd";
            $this->query .= $partialQuery2;
            $this->countQuery .= $partialQuery2;
            $this->queryParams['rgd'] = $rgd;
            $this->countQueryParams['rgd'] = $rgd;
        }

        if (!empty($requestData['nome'])) {
            $nome = $requestData['nome'];

            $nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

            //like
            $partialQuery3 = " AND nome LIKE :nome";
            $this->query .= $partialQuery3;
            $this->countQuery .= $partialQuery3;
            $this->queryParams['nome'] = "%" . $nome . "%";
            $this->countQueryParams['nome'] = "%" . $nome . "%";
        }
    }

    private function addGrouDetails(array $requestData)
    {
        if (!empty($requestData['categoria'])) {
            $categoria = $requestData['categoria'];
            $categoria = $this->queryParamsMap['categoria'][$categoria] ?? null;

            if ($categoria) {
                $partialQuery = " AND categoria = :categoria";
                $this->query .= $partialQuery;
                $this->countQuery .= $partialQuery;
                $this->queryParams['categoria'] = $categoria;
                $this->countQueryParams['categoria'] = $categoria;
            }
        }

        if (!empty($requestData['variedade'])) {
            $variedade = $requestData['variedade'];
            $variedade = $this->queryParamsMap['variedade'][$variedade] ?? null;

            if ($variedade) {
                $partialQuery = " AND variedade = :variedade";
                $this->query .= $partialQuery;
                $this->countQuery .= $partialQuery;
                $this->queryParams['variedade'] = $variedade;
                $this->countQueryParams['variedade'] = $variedade;
            }
        }

        if (!empty($requestData['intervalo-nasc1']) && !empty($requestData['intervalo-nasc2'])) {
            $intervaloNasc1 = $requestData['intervalo-nasc1'];
            $intervaloNasc2 = $requestData['intervalo-nasc2'];

            $intervaloNasc1 = date('Y-m-d', strtotime($intervaloNasc1));
            $intervaloNasc2 = date('Y-m-d', strtotime($intervaloNasc2));

            // check if the dates are valid
            if (!$intervaloNasc1 || !$intervaloNasc2) {
                return;
            }

            // check if date1 is less than date2
            if ($intervaloNasc1 > $intervaloNasc2) {
                return;
            }

            $partialQuery = " AND dt_nasc BETWEEN :intervaloNasc1 AND :intervaloNasc2";

            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['intervaloNasc1'] = $intervaloNasc1;
            $this->countQueryParams['intervaloNasc1'] = $intervaloNasc1;
            $this->queryParams['intervaloNasc2'] = $intervaloNasc2;
            $this->countQueryParams['intervaloNasc2'] = $intervaloNasc2;
        }
    }

    private function addGenealogicalDetails(array $requestData): void
    {
        if (!empty($requestData['p-serie'])) {
            $paiSerie = $requestData['p-serie'];
            $paiSerie = filter_var($paiSerie, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND pai_serie = :paiSerie";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['paiSerie'] = $paiSerie;
            $this->countQueryParams['paiSerie'] = $paiSerie;
        }

        if (!empty($requestData['p-rgn'])) {
            $paiRgn = $requestData['p-rgn'];
            $paiRgn = filter_var($paiRgn, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND pai_rgn = :paiRgn";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['paiRgn'] = $paiRgn;
            $this->countQueryParams['paiRgn'] = $paiRgn;
        }

        if (!empty($requestData['p-rgd'])) {
            $paiRgd = $requestData['p-rgd'];
            $paiRgd = filter_var($paiRgd, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND pai_rgd = :paiRgd";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['paiRgd'] = $paiRgd;
            $this->countQueryParams['paiRgd'] = $paiRgd;
        }

        if (!empty($requestData['m-serie'])) {
            $maeSerie = $requestData['m-serie'];
            $maeSerie = filter_var($maeSerie, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND mae_serie = :maeSerie";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['maeSerie'] = $maeSerie;
            $this->countQueryParams['maeSerie'] = $maeSerie;
        }

        if (!empty($requestData['m-rgn'])) {
            $maeRgn = $requestData['m-rgn'];
            $maeRgn = filter_var($maeRgn, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND mae_rgn = :maeRgn";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['maeRgn'] = $maeRgn;
            $this->countQueryParams['maeRgn'] = $maeRgn;
        }

        if (!empty($requestData['m-rgd'])) {
            $maeRgd = $requestData['m-rgd'];
            $maeRgd = filter_var($maeRgd, FILTER_SANITIZE_SPECIAL_CHARS);

            $partialQuery = " AND mae_rgd = :maeRgd";
            $this->query .= $partialQuery;
            $this->countQuery .= $partialQuery;
            $this->queryParams['maeRgd'] = $maeRgd;
            $this->countQueryParams['maeRgd'] = $maeRgd;
        }
    }

    private function addDeps(array $requestData): void
    {
        // todo - add deps
    }

    private function addNumberOfSons(array $requestData): void
    {
        // todo - add number of sons
    }

    private function addOrderAndClassificationAndPagination(array $requestData): bool
    {
        $classification = $requestData['classification'];
        $classification = $this->queryParamsMap['classification'][$classification];
        if (!$classification) {
            return false;
        }
        $this->classification = $classification;

        $order = $requestData['order'];
        $order = $order === 'Desc' ? 'DESC' : 'ASC';

        $limit = (int) $requestData['limit'];

        $offset = 0;
        $this->query .= " ORDER BY {$classification} {$order} LIMIT :limit OFFSET :offset";
        $this->queryParams['limit'] = (int) $limit;
        $this->queryParams['offset'] = $offset;

        return true;
    }
}
