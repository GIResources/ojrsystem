<?php
    include('includes/dbcon.php');
    session_start();
    $app_id = $_SESSION['app'];
    
    var_dump($app_id);
    //exit;

    $ses_sql = mysqli_query($connection,"SELECT * FROM register_applicants WHERE id= '{$app_id}' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $apploggedin_session = $row['id'];
    $app_id = $row['id'];
    

    if(isset($apploggedin_session) !="app"){
        
    header("location: applicants/signup/index.php?msg= No Access, Please signup to create your account");
    }

?>
