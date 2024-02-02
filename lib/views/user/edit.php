<?php include("../../layouts/header.php"); ?>
<?php include("../../function/function.php"); ?>

<link rel="stylesheet" href="../../../css/app.scss">

<?php 
    if(isset($_POST['update_user_data'])){
        $result = update_data($_POST['']);
        echo $result;
    }
?>

<div class="site-container">
    <?php UpdateView() ?>
</div>
