<?php

    use FTP\Connection;

    include("config.php");

    function addNewUser($username, $email, $uname, $mobile, $nic, $dob){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username='$username' && email='$email'";
        $check_user_resut = mysqli_query($con, $check_user);
        $check_nor = mysqli_num_rows($check_user_resut);

        if($check_nor != 0){
            return "<div class='alertjk alertjk-red'>User already in Database..!</div>";
        }
        else{
            $insert_user = "INSERT INTO user_tbl(username,email,u_name,mobile,nic,dob,create_at,update_at)VALUES('$username','$email','$uname','$mobile','$nic','$dob',NOW(),NOW())";
            $insert_result = mysqli_query($con, $insert_user);
        }        
    }

    function viewUsers(){
        $con = Connection();

        $select_users = "SELECT * FROM user_tbl";
        $select_result = mysqli_query($con, $select_users);
        $users_nor = mysqli_num_rows($select_result);

        if($users_nor == 0){
            $user_data = "No users";
        }
        else{
            return "yes";
        }
        

        echo $user_data;
    }
?>