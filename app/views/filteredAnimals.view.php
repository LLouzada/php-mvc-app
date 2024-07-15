<?php

$showldShowEmptyMessage = false;
if (!$success) {
    $countResultsFinal = 0;
} else {
    if($pagination){
        $countResultsFinal = $countResults;
        $numberPages = ceil($countResultsFinal / $limit);
        $currentPage = $offset === 0 ? 1 : $currentPage;
        $classification = $classification ?? '';
    } else {
        $countResultsFinal = htmlspecialchars($countResults['COUNT(*)']);
    }
    $filteredResults = $filteredResults ?? [];
    $numberPages = ceil($countResultsFinal / $limit);
    $currentPage = $offset === 0 ? 1 : $currentPage;
    $classification = $classification ?? '';
    
}

?>

<div class="filtered-results" id="filtered-results" class="mt-3" style="border-top-width: 0px; display: block;">
    <table width="100%" border="0">
        <tbody>

            <?php
            if (!$success) {
                echo '<tr><td height="39" colspan="2" align="center" style="font-size: 12px">Nenhum animal encontrado.</td></tr>';
            } else {
                include VIEWS_PATH . 'partials/filterResult/filterResultHead.view.php';

                $currentIndex = $offset + 1;

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

<form id="paginationForm" action="/animais-filtrados" method="POST" style="display: none;">
    <input type="hidden" name="pagination" id="pagination" value="true">
    <input type="hidden" name="mainQuery" id="mainQuery" value="<?php echo htmlspecialchars($mainQuery); ?>">
    <input type="hidden" name="mainQueryParams" id="mainQueryParams" value='<?php echo htmlspecialchars(json_encode($mainQueryParams)); ?>'>
    <input type="hidden" name="limit" id="limit" value="<?php echo htmlspecialchars($limit); ?>">
    <input type="hidden" name="offset" id="offset" value="<?php echo htmlspecialchars($offset); ?>">
    <input type="hidden" name="currentPage" id="currentPage" value="<?php htmlspecialchars($currentPage); ?>">
    <input type="hidden" name="numberPages" id="numberPages" value="<?php echo htmlspecialchars($numberPages); ?>">
    <input type="hidden" name="countResults" id="countResults" value="<?php echo htmlspecialchars($countResultsFinal); ?>">
</form>