<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    
<title>Infosys Job Availability</title>

</head>
    
<body>
<form action="" method="POST">

<a href=".././">HOME</a><BR>

<input type="text" name="query" placeholder="query" />
 
<input type="submit" value="Search" />

 
 

</form>

</body>
</html>


<?php

require_once('includes/dbcon.php');


if (isset($_POST['POST'])) { 

  $jobtitle=($_POST['jobtitle']);
$jobcode=($_POST['jobcode']);


$jobtitle = mysql_real_escape_string(htmlspecialchars($_POST['jobtitle']));

$jobcode = mysql_real_escape_string(htmlspecialchars($_POST['jobcode']));

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
         
        $raw_results = mysqli_query($connection, "SELECT * FROM jobtable
            WHERE (`jobtitle` LIKE '%".$query."%') OR (`jobcode` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
				echo "<table border='1' cellpadding='10' bordercolor='green' bgcolor='white' >";
				echo "<tr> <th>ID</th> <th>Job Serial No</th> <th>Job Title</th> <th>Job Code</th><th>Qualification</th><th>Years of Experience</th><th>Age Limit</th> <th>Preferred Gender</th><th>Publication Date</th> <th>Expiring Date</th></tr>";
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			 echo "<tr>";
			 // . $row['id'] . '</td>';
                echo '<td>'.$results['id'].'</td>';
				echo '<td>'.$results['job_sn'].'</td>';
				echo '<td>'.$results['jobtitle'].'</td>';
				echo '<td>'.$results['jobcode'].'</td>';
				echo '<td>'.$results['qualification'].'</td>';
				echo '<td>'.$results['yearsofexperience'].'</td>';
				echo '<td>'.$results['agelimit'].'</td>';
				echo '<td>'.$results['preferredgender'].'</td>';
				echo '<td>'.$results['publicationdate'].'</td>';
				echo '<td>'.$results['expiringdate'].'</td>';


				
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











