<?php include("../../layouts/header.php"); ?>
<?php include("../../function/function.php"); ?>

<link rel="stylesheet" href="../../../css/app.scss">

<?php 
    if(){
        $result = update_data();
        echo $result;
    }
?>

<div class="site-container">
    <?php UpdateView() ?>
</div>
