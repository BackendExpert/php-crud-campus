<?php

    use FTP\Connection;

    include("config.php");

    function addNewUser($username, $email, $uname, $mobile, $nic, $dob){
        $con = Connection();

        if(empty($username)){
            return "ERROR";
        }
    }
?>