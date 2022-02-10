<!DOCTYPE HTML>

<html>

<head>

<title>APPLICATION DATABASE REPORT SHEET</title>

</head>
<script>
function myFunction(){
	window.print();
}
</script>
<body onload = "myFunction()">

<form style='color:black; background-color:white;width: 98%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;text-emphasis: bold; .hr{background-color:red; }'>

<?php

// connect to the database

// display data in table

echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="images/logo.png" 
		height="50" width="250" alt="APPLICATIONS DATABASE"/></td></tr></table><br />';

echo "<p align='justify'><h4><b>All the Applications submitted by different Applicants in view of the available Job and Position Vacancies. Infosys Digital Solutions disclaims any other advertised or published Application Database alleged and masterminded by any other third-party whether individual or corporate organization or site other than these outline by this site and shown on this table.</b></h4></p>";
echo "<table border='1' cellpadding='10'>";

include('includes/dbcon.php');
//include('includes/app_session.php');

// get results from database

$result = "SELECT jobs.job_id, jobs.jobcategory, jobs.desiredjobposition, app_biodataform.firstname, app_biodataform.lastname, app_biodataform.phone, app_biodataform.email, qualifications.highestqualification, qualifications.discipline, career_workexperience.lastjobposition, app_passports.passport
FROM ((((jobs
INNER JOIN app_biodataform ON jobs.job_id = app_biodataform.job_id)
INNER JOIN qualifications ON jobs.job_id = qualifications.job_id) 
INNER JOIN career_workexperience ON jobs.job_id = career_workexperience.job_id)
INNER JOIN app_passports ON jobs.job_id = app_passports.job_id)"
or die("Awaiting Resources...\n" . mysqli_error());
    
   // if($query){
    // var_dump($query);
    //       exit;   
    
   $run_query = mysqli_query($connection, $result);
    
       if($row = $run_query) {
           while($row = mysqli_fetch_array($run_query)){
// display data in table
        

    
echo "<table border='1' cellpadding='20' > ";

echo "<tr> <th>Job ID</th> <th>Job Category</th><th>Job Position</th><th>Full Name</th><th>Phone</th><th>Email</th><th>Qualification</th><th>Last Job Position</th></tr>";


// echo out the contents of each row into a table
        echo "<p align='justify' style='color:black;'><tr>";
                echo '<td>' . $row['job_id'] . '</td>' ;
                echo '<td>' . $row['jobcategory'] . '</td>' ;
                echo '<td>' . $row['desiredjobposition'] . '</td>';
                        
                echo '<td>' . $row['firstname'] .'&nbsp;'. $row['lastname'] .'</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['email'] .'</td>';
                
                //echo '<b>Last Name:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result1['lastname'] . '</td>'. '<br /><br />';
               
                echo '<td>' . $row['highestqualification'] .'&nbsp;' . $row['discipline'].'</td>';
                        
                // echo '<b>Discipline:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result2['discipline'] . '</td>';
            
                //echo '<td>' . $result3['lastempname'] . '</td>';
                echo '<td>' . $row['lastjobposition'] . '</td>';          
               
       
                
                

        echo '<div><hr><hr></div>';
             //  echo '<td><a href="deleteapplications.php?id=' . $row['job_id'] . '">Delete</a></td>';
        echo "</tr></p>";
       }
       
       }
    
// close table>

echo "</table>";

    
?>





    </form>
</body>

</html>
