<?php
    session_start();
    if(isset($_SESSION['admin'])){
        
    }else{
        header("location: admin/index.php?msg= No Access");
    }

?>