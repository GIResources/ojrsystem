<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname =   "ojrs";

    $connection = mysqli_connect($server, $username, $password, $dbname);
    
    if(!$connection){
        die("Awaiting Resoources");
    }
?>