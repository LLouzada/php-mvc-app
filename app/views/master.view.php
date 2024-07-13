<!DOCTYPE html>
<html lang="en">

<?php
require VIEWS_PATH . 'partials/head.view.php';
require VIEWS_PATH . 'partials/header.view.php';
?>

<body>
    <div class="default-container container master-view-container">
        <h2 class="master-view-title mb-5"><?php echo $title ?></h2>
        <?php require VIEWS_PATH . $routedView ?>
    </div>
</body>

<?php require VIEWS_PATH . 'partials/footer.view.php'; ?>

</html>

<style>
    .master-view-title {
        font-weight: 700;
        margin-left: 20px;
    }

    .master-view-container {
        padding-top: 40px;
        min-height: 60vh;
    }
</style>