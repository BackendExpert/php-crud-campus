<?php include("../layouts/header.php"); ?>

<div class="site-container">
<button class="jkbtn jkbtn-blue" id="jkbtn-popup">Click Here</button>

<div class="jk-modal" id= "modalJK">
    <div class="jk-modal-content">
        <div class="jk-mheader">
            <h1>Add New Member</h1>
        <div>
        <hr>
        <div class="jk-mbody">
            <form action="" method="POST">
                <label for="nic">NIC : </label>
                <input type="text" id="basicForm" name="nic" class="control-jkforms">

                <label for="username">Username : </label>
                <input type="text" id="basicForm" name="username" class="control-jkforms">

                <label for="email">Email : </label>
                <input type="email" id="basicForm" name="email" class="control-jkforms">

                <label for="Mobile">Mobile : </label>
                <input type="text" id="basicForm" name="mobile" class="control-jkforms">

                <label for="dob">Date Of Birth : </label>
                <input type="date" id="basicForm" name="dob" class="control-jkforms">            
        <div>
        <hr>
        <div class="jk-mfooter">
            <button class="jkbtn jkbtn-red" id="closeModel">Close</button>
            <input type="reset" value="Clear" class="jkbtn jkbtn-gray">
            <input type="submit" value="Submit" class="jkbtn jkbtn-green" id="closeModel" name="addUser">
        <div>
        </form>
    <div>
</div>
</div>

<script src="https://jkcss-css-framework.github.io/JKCSS-Framework/js/jkcss.min.js"></script>