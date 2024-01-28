<?php include("../../layouts/header.php"); ?>
<?php include("../../function/function.php"); ?>

<link rel="stylesheet" href="../../../css/app.scss">
<div class="site-container">
    <?php 
        $id = $_GET['id'];
        echo $id;
    ?>
    <?php showUser() ?>
</div>
