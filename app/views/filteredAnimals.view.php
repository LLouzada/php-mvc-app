<?php

$showldShowEmptyMessage = false;
if (!$success) {
    $countResults = 0;
} else {
    $filteredResults = $filteredResults ?? [];
    $countResults = htmlspecialchars($countResults['COUNT(*)']);
    $numberPages = ceil($countResults / $limit);
    $currentPage = $offset === 0 ? 1 : $offset / $limit + 1;
    $classification = $classification ?? '';
}

?>

<div class="filtered-results" id="aba2" class="mt-3" style="border-top-width: 0px; display: block;">
    <table width="100%" border="0">
        <tbody>

            <?php
            if (!$success) {
                echo '<tr><td height="39" colspan="2" align="center" style="font-size: 12px">Nenhum animal encontrado.</td></tr>';
            } else {
                include VIEWS_PATH . 'partials/filterResult/filterResultHead.view.php';
                $currentIndex = 1;
                foreach ($filteredResults as $index => $animal) {
                    $dt_nasc = $animal['dt_nasc'] ?? '';
                    if (!empty($dt_nasc)) {
                        //format date
                        $dt_nasc = date('d/m/Y', strtotime($dt_nasc));
                    }

                    $top = $animal['tmgte'] ?? '';
                    if (!empty($top)) {
                        //remove decimal point
                        $top = number_format($top, 0, ',', '');
                    }

                    $variedade = $animal['variedade'] ?? '';
                    if (!empty($variedade)) {
                        if ($variedade === 'Padrão') {
                            $variedade = 'P';
                        } else {
                            $variedade = 'M';
                        }
                    }

                    $rowStyle = $index % 2 == 0 ? 'filterResultRowDark' : 'filterResultRowLight';


                    include VIEWS_PATH . "partials/filterResult/{$rowStyle}.view.php";
                    $currentIndex++;
                }
            }
            ?>
        </tbody>
    </table>
    <hr class="custom-hr mt-2 mb-3">

    <div class="row justify-content-b">
        <div class="col-10">
            <?php include VIEWS_PATH . 'partials/filterResult/filterResultFooter.view.php' ?>
        </div>
        <div class="col-2">
            <a href="consulta-de-touros"> <button type="submit" class="btn btn-primary btn-sm">Nova Consulta</button></a>
        </div>
    </div>
</div>