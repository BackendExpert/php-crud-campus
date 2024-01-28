<?php include("../../layouts/header.php"); ?>
<?php include("../../function/function.php"); ?>

<link rel="stylesheet" href="../../../css/app.scss">
<div class="site-container">

    <button id="openModalJK" class="jkbtn jkbtn-blue">Add New Member</button>

    <div id="modalJK" class="JKmodal data-modal">
        <div class="jkm-content">
            <h1 class="jk-display-6">Add New Member</h1>
            <?php 
                if(isset($_POST['addUser'])){
                    $result = addNewUser($_POST['username'], $_POST['email'], $_POST['uname'], $_POST['mobile'], $_POST['nic'], $_POST['dob']);
                    echo $result;
                }
            ?>

            <form action="" method="post">
                <label for="username">Username : </label>
                <input type="text" name="username" id="" class="control-jkforms" required><br>

                <label for="email">Email : </label>
                <input type="email" name="email" id="" class="control-jkforms" required><br>

                <label for="name">Name : </label>
                <input type="text" name="uname" id="" class="control-jkforms" required><br>
                
                <label for="mobile">Mobile : </label>
                <input type="text" name="mobile" id="" class="control-jkforms" required><br>
                
                <label for="nic">NIC : </label>
                <input type="text" name="nic" id="" class="control-jkforms" required><br>

                <label for="birth">Date of Birth : </label>
                <input type="date" name="dob" id="" class="control-jkforms" required><br>
                
                <button class="jkbtn jkbtn-red close">Close</button>
                <input type="reset" value="Clear" class="jkbtn jkbtn-gray">
                <input type="submit" value="Submit" name="addUser" class="jkbtn jkbtn-green">
            </form>
        </div>
    </div>
    <br><br>
    <br>

    <table class="jk-table hover-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>NIC</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php viewUsers(); ?>
        </tbody>
    </table>

    


</div>