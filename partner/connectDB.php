<?php
    //connect to database
    $server = 'localhost';
    $user = 'root';
    $passw = '';
    $database = 'greenunity';

    $connection = mysqli_connect($server,$user,$passw,$database);

    if($connection == false){
        die("Database connection failed" . mysqli_connect_error());
    }
?>