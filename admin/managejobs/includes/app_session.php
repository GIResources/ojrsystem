<?php
    include('includes/dbcon.php');
    session_start();
    $appcheck = $_SESSION['app'];
    $ses_sql = mysqli_query($connection,"SELECT * FROM register_applicants WHERE id= '{$job_id}' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $apploggedin_session = $row['firstname'];
    $job_id = $row['id'];
    

    if(isset($apploggedin_session) !="app"){
        
    header("location: applicants/index.php?msg= No Access");
    }

?>
