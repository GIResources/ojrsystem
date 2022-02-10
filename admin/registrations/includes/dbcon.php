<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname =   "afrs_sabelo";

    $connection = mysqli_connect($server, $username, $password, $dbname);
    
    if(!$connection){
        die("Awaiting Resoources");
    }
?>