<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "assignment_4";

    $conn = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()){
        die("failed to connect with MYSQL:".mysqli_connect_errno());
    }
   /* else
    {
        echo "thay gyu connection";
    }*/
?>