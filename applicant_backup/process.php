<?php

//Connecting to gospeltruth database///

require_once("includes/dbcon.php");

?>


<?php

    
        $app_title = $_POST['title'];
        $app_fname = $_POST['fname'];
        $app_lname = $_POST['lname'];
        $app_initial = $_POST['initials'];
        $app_phone = $_POST['phone'];
        $app_email = $_POST['email'];
        $app_nationality = $_POST['country'];
        $app_gender = $_POST['gender'];
                
        ////Checking for empty fields here!//////
        
        if(empty($app_title || $app_fname || $app_lname || $app_initials || $app_phone || $app_email || $app_nationality || $app_gender)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating app Serial Numner (sn) for the appistrator Registration///
            
            $query = " SELECT * FROM register_applicants ";
            $run_query = mysqli_query($connection, $query);
                
            $total_users = mysqli_num_rows($run_query);
            $increase_num = $total_users + 1;
            $job_id = $increase_num;
            
        ////Checking for Already existing Members during Registration!///
            
            
            $query = " SELECT * FROM register_applicants WHERE id = '{$job_id}' ";
            $run_query = mysqli_query($connection, $query);

            if(mysqli_num_rows($run_query) > 0){
                echo "app with these details already exist";
            }else{
            
               $query = "INSERT INTO register_applicants(app_id, title, firstname, lastname, initials, phone, email, nationality, gender) VALUES('{$job_id}','{$app_title}','{$app_fname}','{$app_lname}','{$app_initial}','{$app_phone}','{$app_email}','{$app_nationality}','{$app_gender}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Applicant Registration was Successful!";
                            header("Location: ../index.php");
                            }else{
                                echo "Ooops! Sorry, Applicant Registration Failed. Try again!";
                            
                            }
                header("Location:index.php");
                        }
                
    
            }
        
 
   
?>
