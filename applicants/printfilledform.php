<?php
session_start();
// The session variable carried from the signup table is stored in the check variable

$check = $_SESSION["session_check"];

?>

<!DOCTYPE HTML>

<html>

<head>

<title>APPLICANT FILLED FORM DETAILS</title>

</head>
<script>
function myFunction(){
	window.print();
}
</script>
<body onload = "myFunction()">
<?php

// connect to the database

include('includes/dbcon.php');

// get results from database

echo "<form style='color:black; background-color:white;width: 40%; padding-left: 200px;padding-right: 200px;padding-top: 40px;padding-bottom: 40px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;text-emphasis: bold; .hr{background-color:red; }'> ";

echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="images/logo.png" 
		height="50" width="250" alt="INFOSYS JOB AVAILABILITY REPORT"/></td></tr></table><br />';

echo '<h4 align="center"><b>APPLICATION FORM SUBMISSION REPORT</b></h4> <br />';
echo '<h4 align="center"><b>NOTICE</b></h4>';

echo "<h6 align='justify'><b> Congratulations, Your Application has been received, we shall be communicating with you through your Email within two weeks of your Application Submission Date. You are advised to check your email frequently within this period. </b></h6>";

// get results from database

$result3 = "SELECT * FROM app_passports WHERE sess_check = '{$check}' ";
            $run_query = mysqli_query($connection, $result3);
    
            if(mysqli_num_rows($run_query) == 1){
            while($result3 = mysqli_fetch_assoc($run_query)){
             
                
                echo "<p align='justify' style='color:black;'><tr>";
                echo '<b align="center"> &nbsp; &nbsp; &nbsp; &nbsp;Passport</b>'. '<br />';
                echo '&nbsp;'.'&nbsp;'.'<td>'.'<img src= '. $result3['passport'] . ' width="110" height="110"/>' .'</td>' . '<br />';
            
            if($result3 == true){
                $result = "SELECT * FROM jobs WHERE sess_check = '{$check}' ";
                $run_query = mysqli_query($connection, $result);

                if(mysqli_num_rows($run_query) == 1){
                    while($result = mysqli_fetch_assoc($run_query)){

                        echo '<b>Job Category:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result['jobcategory'] . '</td>' . '<br />';
                        echo '<b>Job Position:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result['desiredjobposition'] . '</td>'. '<br />';

        
      
        if($result == true){
            $result1 = "SELECT * FROM app_biodataform WHERE sess_check = '{$check}' ";
            $run_query = mysqli_query($connection, $result1);
    
            if(mysqli_num_rows($run_query) == 1){
            while($result1 = mysqli_fetch_assoc($run_query)){
        
                echo '<b>First Name:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result1['firstname'] . '</td>'. '<br />';
                echo '<b>Last Name:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result1['lastname'] . '</td>'. '<br />';
                echo '<b>Phone No:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result1['phone'] . '</td>'. '<br />';
                echo '<b>Email Address:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result1['email'] . '</td>'. '<br />';

     
        if($result1 == true){
            $result2 = "SELECT * FROM qualifications WHERE sess_check = '{$check}' ";
            $run_query = mysqli_query($connection, $result2);
    
            if(mysqli_num_rows($run_query) == 1){
            while($result2 = mysqli_fetch_assoc($run_query)){
            
                echo '<b>Qualification:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result2['highestqualification'] . '</td>'. '<br />';
                echo '<b>Discipline:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result2['discipline'] . '</td>';

      
       
            
        
                            }

                        }
                    }
                }
            }    
        }
    }
}
}
}
}

echo '<div><hr><hr></div>';
echo "</tr></p>";
echo "Please if you are invited for an interview, kindly come to Your Scheduled Interview with this form.";


                  

// close table>

echo "</table>";


?>





</body>

</html>
