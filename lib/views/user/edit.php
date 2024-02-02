<?php include("../../layouts/header.php"); ?>
<?php include("../../function/function.php"); ?>

<link rel="stylesheet" href="../../../css/app.scss">

<?php 
    if(isset($_POST['update_user_data'])){
        $result = update_data($_POST['user_id'], $_POST['update_uname']);
        echo $result;
    }
?>

<div class="site-container">
    <?php UpdateView() ?>
</div>
