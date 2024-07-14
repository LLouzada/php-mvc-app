<!DOCTYPE html>
<html lang="en">

<?php
require VIEWS_PATH . 'partials/head.view.php';
require VIEWS_PATH . 'partials/header.view.php';
?>

<body>
    <div class="default-container container master-view-container">
        <h2 class="master-view-title mb-5"><?php echo $title ?></h2>
        <div class="container">
            <div class="form-container mb-5">
                <div class="filter-title-container">
                    <div class="d-flex align-items-center flex-column">
                        <p class="px-5 py-1"><?php echo $secondTitle ?></p>
                    </div>
                </div>
                <hr class="custom-hr mb-2 mt-2">
                <?php require VIEWS_PATH . $routedView ?>
            </div>
        </div>
    </div>
</body>

<?php require VIEWS_PATH . 'partials/footer.view.php'; ?>

</html>