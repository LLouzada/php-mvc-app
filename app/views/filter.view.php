<form id="myForm" action="/animais-filtrados" method="POST">

    <?php include VIEWS_PATH . 'partials/form/form1.php' ?>

    <hr class="custom-hr mb-2 mt-1">

    <?php include VIEWS_PATH . 'partials/form/form2.php' ?>

    <hr class="custom-hr mb-1 mt-1">

    <?php include VIEWS_PATH . 'partials/form/form3.php' ?>

    <hr class="custom-hr mb-1 mt-1">

    <?php include VIEWS_PATH . 'partials/form/form4.php' ?>

    <hr class="custom-hr mb-1 mt-1">

    <?php include VIEWS_PATH . 'partials/form/form5.php' ?>

    <hr class="custom-hr mb-1 mt-1">

    <?php include VIEWS_PATH . 'partials/form/form6.php' ?>

    <hr class="custom-hr mb-1 mt-1">

    <?php include VIEWS_PATH . 'partials/form/form7.php' ?>

    <hr class="custom-hr mb-2 mt-3">

    <div class="row justify-content-end">
        <div class="col-auto">
            <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
        </div>
        <div class="col-auto">
            <button type="reset" class="btn btn-warning btn-sm">Limpar</button>
        </div>
    </div>
</form>



<script>
    function formatDate(type) {
        var element = ''
        if (type === 'inicio') {
            element = 'intervalo-nasc1'
        } else {
            element = 'intervalo-nasc2'
        }
        document.getElementById(element).addEventListener('change', function() {
            var date = new Date(this.value);
            var formattedDate = date.toLocaleDateString('pt-BR');
            console.log(formattedDate);
        });
    }
</script>

<?php echo '<script>history.replaceState(null, null, "/consulta-de-touros");</script>'; ?>