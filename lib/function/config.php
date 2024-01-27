<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "php-crud-campus";
   
        $con = mysqli_connect($server,$user,$pass,$db);

        $result = (!$con)?"Connection Lost":$con;
        return $result;
    }


?>