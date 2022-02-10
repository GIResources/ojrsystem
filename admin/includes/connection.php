<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname =   "contactsdb";

    $connection = mysqli_connect($server, $username, $password, $dbname);
    
    if(!$connection){
        die("Awaiting Resoources");
    }
?>