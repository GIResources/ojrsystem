<?php
    session_start();
    if(isset($_SESSION['app'])){
        
    }else{
        header("location: applicants/index.php?msg= No Access");
    }

?>