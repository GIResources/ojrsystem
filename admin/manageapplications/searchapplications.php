<!DOCTYPE html>
<html lang="en">
<head>
<title>Infosys Applications</title>
    </head>
    <body>
                             <form action="" method="POST">

                            <p align="center"><a href=".././">HOME</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href=".././manageapplications/">BACK</a><BR /></p>

                           <p align="center"> <input type="text" name="query" placeholder="Search Applications here...!" />
 
                            <input type="submit" value="Search" />
                            
                            </p>

    


</form>

</body>
</html>


<?php

require_once('includes/dbcon.php');


if (isset($_POST['POST'])) { 

  $desiredjobposition=($_POST['desiredjobposition']);
$firstname=($_POST['firstname']);


$desiredjobposition = mysql_real_escape_string(htmlspecialchars($_POST['desiredjobposition']));

$firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));

}
   @ $query = $_POST['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($connection, $query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($connection, "SELECT * FROM SELECT jobs.job_id, jobs.jobcategory, jobs.desiredjobposition, app_biodataform.firstname, app_biodataform.lastname, app_biodataform.phone, app_biodataform.email, qualifications.highestqualification, qualifications.discipline, career_workexperience.lastjobposition, app_passports.passport
FROM ((((jobs
INNER JOIN app_biodataform ON jobs.job_id = app_biodataform.job_id)
INNER JOIN qualifications ON jobs.job_id = qualifications.job_id) 
INNER JOIN career_workexperience ON jobs.job_id = career_workexperience.job_id)
INNER JOIN app_passports ON jobs.job_id = app_passports.job_id)

            WHERE (`jobs.desiredjobposition` LIKE '%".$query."%') OR (`app_biodataform.firstname` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
				echo "<h4 align='center'>Search Results...</h4>";
                echo "<table border='1' cellpadding='10' bordercolor='green' bgcolor='white' >";
				echo "<tr> <th>Job ID</th> <th>Job Category</th><th>Job Position</th><th>Full Name</th><th>Phone</th><th>Email</th><th>Qualification</th><th>Last Job Position</th></tr>";
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			 echo "<tr>";
			 // . $row['id'] . '</td>';
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
               
		
				echo "</tr>";
				echo "</table>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        //echo "Minimum length is ".$min_length;
	//}
    }
?>