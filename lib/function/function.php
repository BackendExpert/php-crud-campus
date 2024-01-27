<?php

    use FTP\Connection;

    include("config.php");

    function addNewUser($username, $email, $uname, $mobile, $nic, $dob){
        $con = Connection();

        if(empty($username)){
            return "<div class='alertjk alertjk-red'>Username Cannot be Empty..!</div>";
        }
        elseif(empty($email)){
            return "<div class='alertjk alertjk-red'>Email Cannot be Empty..!</div>";
        }
        elseif(empty($uname)){
            return "<div class='alertjk alertjk-red'>Name Cannot be Empty..!</div>"; 
        }
        elseif(empty($mobile)){
            return "<div class='alertjk alertjk-red'>Mobile Cannot be Empty..!</div>";
        }
        elseif(empty($nic)){
            return "<div class='alertjk alertjk-red'>NIC Cannot be Empty..!</div>";
        }
        elseif(empty($dob)){
            return "<div class='alertjk alertjk-red'>Date of Bith Cannot be Empty..!</div>";
        }
    }
?>