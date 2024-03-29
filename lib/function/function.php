<?php

    use FTP\Connection;
    session_start();

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
            echo "<div class='alertjk alertjk-red'>No Users Found</div>";
        }
        else{
            while($row = mysqli_fetch_assoc($select_result)){
                echo "
                    <tr>
                        <td>".$row['username']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['u_name']."</td>
                        <td>".$row['mobile']."</td>
                        <td>".$row['nic']."</td>
                        <td>".$row['dob']."</td>
                        <td>
                            <a href='show.php?id=".$row['id']."'><button class='jkbtn-sm jkbtn-green'>Show</button></a>
                            <a href='edit.php?id=".$row['id']."'><button class='jkbtn-sm jkbtn-info'>Edit</button></a>
                            <a href='delete.php?id=".$row['id']."'><button class='jkbtn-sm jkbtn-red'>Delete</button></a>
                        </td>
                    </tr>
                ";
            }
        }
    }

    function showUser(){
        $con = Connection();
            
        $id = $_GET['id'];

        $select_user = "SELECT * FROM user_tbl WHERE id='$id'";
        $select_result = mysqli_query($con, $select_user);
        $user_view = mysqli_fetch_assoc($select_result);

        $view_user = "
        <div class='jk-card'>
            <div class='header-card'>
                User : ".$user_view['username']."
            </div>
            <div class='content-card'>
                <p>Email : ".$user_view['email']."</p>
                <p>Name : ".$user_view['u_name']."</p>
                <p>Mobile : ".$user_view['mobile']."</p>
                <p>NIC : ".$user_view['nic']."</p>
                <p>Date of Birth : ".$user_view['dob']."</p>
                <p>Create At : ".$user_view['create_at']."</p>
                <p>Last Update : ".$user_view['update_at']."</p>
            </div>
            <div class='footer-card'>
                <a href='index.php'><button class='jkbtn jkbtn-blue'>Back</button></a>
            </div>
        </div>
        ";

        echo $view_user;
    }

    function  UpdateView(){
        $con = Connection();

        $id = $_GET['id'];

        $select_user = "SELECT * FROM user_tbl WHERE id = '$id'";
        $select_result = mysqli_query($con, $select_user);
        $select_row = mysqli_fetch_assoc($select_result);

        $user_edit_view = "
            <div style='margin: 20px 0;'>
                <a href='index.php'><button class='jkbtn jkbtn-blue' style='margin:20px 0;'>Back</button></a>

                <form method='POST'>
                    <label>Username : </label>
                    <input type='hidden' value='".$id."' name='user_id'>
                    <input type='text' name='update_uname' class='control-jkforms' value='".$select_row['username']."'><br>

                    <label>Email : </label>
                    <input type='email' name='update_email' class='control-jkforms' value='".$select_row['email']."'><br>

                    <label>Name : </label>
                    <input type='text' name='update_name' class='control-jkforms' value='".$select_row['u_name']."'><br>

                    <label>Mobile : </label>
                    <input type='text' name='update_mobile' class='control-jkforms' value='".$select_row['mobile']."'><br>

                    <label>NIC : </label>
                    <input type='text' name='update_nic' class='control-jkforms' value='".$select_row['nic']."'><br>

                    <label>Date of Birth : </label>
                    <input type='date' class='control-jkforms' value='".$select_row['dob']."' disabled><br>

                    <input type='submit' name='update_user_data' class='jkbtn jkbtn-green'>
                </form>
                
            </div>
        ";

        echo $user_edit_view;
    }

    function update_data($id, $uname, $email, $u_name, $mobile, $nic){
        $con = Connection();

        $check_data = "SELECT * FROM user_tbl WHERE id='$id'";
        $check_result = mysqli_query($con, $check_data);
        $check_nor = mysqli_num_rows($check_result);

        if($check_nor != 0){
            $update_data = "UPDATE user_tbl SET username='$uname', email='$email', u_name='$u_name', mobile ='$mobile', nic='$nic', update_at = NOW() WHERE id = '$id'";
            $update_result = mysqli_query($con, $update_data);
            header("location:index.php");   
        }
    }


    function delete_user(){
        $con = Connection();

        $id = $_GET['id'];

        $select_user = "SELECT * FROM user_tbl WHERE id='$id'";
        $select_result = mysqli_query($con, $select_user);
        $user_view = mysqli_fetch_assoc($select_result);

        $detete_view_user = "
            <a href='index.php'><button class='jkbtn jkbtn-blue'>Back</button></a>

        <div class='jk-card'>
            <div class='header-card'>
                User : ".$user_view['username']."
            </div>
            <div class='content-card'>
                <p>Email : ".$user_view['email']."</p>
                <p>Name : ".$user_view['u_name']."</p>
                <p>Mobile : ".$user_view['mobile']."</p>
                <p>NIC : ".$user_view['nic']."</p>
                <p>Date of Birth : ".$user_view['dob']."</p>
                <p>Create At : ".$user_view['create_at']."</p>
                <p>Last Update : ".$user_view['update_at']."</p>
            </div>
            <div class='footer-card'>
                <form method='POST'>
                    <input type='hidden' value='1' name='delete_id'>
                    <input type='hidden' value='".$user_view['id']."' name='user_id'>
                    <input type='submit' name='delete_user' class='jkbtn jkbtn-red' value='Delete'>
                </form>
            </div>
        </div>
        ";

        echo $detete_view_user;
    }


    function user_delete($delete_id, $user_id){
        $con = Connection();

        echo $user_id;

        if($delete_id == 1){
            $delete_user = "DELETE FROM user_tbl WHERE id='$user_id'";
            $delete_result = mysqli_query($con, $delete_user);
            header("location:index.php");
        }
    }
?>