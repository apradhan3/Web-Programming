<?php 
    $_SERVER = "localhost";
    $user ="root";
    $pass = "root";
    $db ="history";


    $conn = mysqli_connect($_SERVER,$user,$pass,$db);
    echo "Connection success"
?>