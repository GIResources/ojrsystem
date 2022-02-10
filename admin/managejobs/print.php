<!DOCTYPE HTML>

<html>

<head>

<title>JOB AVAILABILITY REPORT SHEET</title>

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

$result = mysqli_query($connection, "SELECT * FROM jobtable")

or die(mysqli_error("Awaiting Resources"));



// display data in table



echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="images/logo.png" 
		height="50" width="250" alt="INFOSYS JOB AVAILABILITY REPORT"/></td></tr></table><br />';

echo "<p align='center'><h4><b>The following Job vacancies and Positions were created and are available for any qualified applicant to apply at the company's job recruitment website.</b></h4></p>";
echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Job Serial No</th> <th>Job Title</th> <th>Job Code</th><th>Qualification</th><th>Years of Experience</th><th>Age Limit</th><th>Preferred Gender </th><th>Publication Date</th> <th>Expiring Date</th></tr>";


// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table


echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['job_sn'] . '</td>';
echo '<td>' . $row['jobtitle'] . '</td>';

echo '<td>' . $row['jobcode'] . '</td>';

echo '<td>' . $row['qualification'] . '</td>';
echo '<td>' . $row['yearsofexperience'] . '</td>';
echo '<td>' . $row['agelimit'] . '</td>';
echo '<td>' . $row['preferredgender'] . '</td>';
echo '<td>' . $row['publicationdate'] . '</td>';
echo '<td>' . $row['expiringdate'] . '</td>';

//echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

//echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}


// close table>

echo "</table>";

?>






</body>

</html>
