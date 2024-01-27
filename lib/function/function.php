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

        $check_user = "SELECT * FROM user_tbl WHERE username='$username' && email='$email'";
        $check_user_resut = mysqli_query($con, $check_user);
        $check_nor = mysqli_num_rows($check_user_resut);

        if($check_nor == 0){
            return "<div class='alertjk alertjk-red'>User already in Database..!</div>";
        }
        else{
            $insert_user = "INSERT INTO user_tbl(username,email,u_name,mobile,nic,dob,create_at,update_at)VALUES('$username','$email','$uname','$mobile','$nic','$dob',NOW(),NOW())"
        }
        
    }
?>