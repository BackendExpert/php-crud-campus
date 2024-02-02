<?php include("../../layouts/header.php"); ?>
<?php include("../../function/function.php"); ?>

<link rel="stylesheet" href="../../../css/app.scss">

<?php 
    if(isset($_POST['delete_user'])){
        $result = user_delete($_POST['delete_id'], $_POST['user_id']);
        echo $result;
    }
?>

<div class="site-container">
    <?php delete_user() ?>
</div>
