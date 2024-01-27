<?php include("../layouts/header.php"); ?>

<link rel="stylesheet" href="../../css/app.scss">
<div class="site-container">

    <button id="openModalJK" class="jkbtn jkbtn-blue">Open Model</button>

    <div id="modalJK" class="JKmodal">
        <div class="jkm-content">
            <h1 class="jk-display-6">Add New Member</h1>
            <form action="" method="post">
                <label for="username">Username : </label>
                <input type="text" name="username" id="" class="control-jkforms"><br>

                <label for="email">Email : </label>
                <input type="email" name="email" id="" class="control-jkforms"><br>

                <label for="name">Name : </label>
                <input type="text" name="uname" id="" class="control-jkforms"><br>
                
                <label for="mobile">Mobile : </label>
                <input type="text" name="mobile" id="" class="control-jkforms"><br>
                
                <label for="nic">NIC : </label>
                <input type="text" name="nic" id="" class="control-jkforms"><br>

                <label for="birth">Date of Birth : </label>
                <input type="date" name="dob" id="" class="control-jkforms"><br>
            </form>
            <button class="jkbtn jkbtn-red close">Close</button>
        </div>
    </div>



</div>