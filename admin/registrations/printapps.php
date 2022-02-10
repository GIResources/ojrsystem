<!DOCTYPE HTML>

<html>

<head>

<title>REGISTERED APPLICANTS LIST REPORT SHEET</title>

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

$result = mysqli_query($connection, "SELECT * FROM register_applicants")

or die(mysqli_error("Awaiting Resources"));



// display data in table



echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="images/logo.png" 
		height="50" width="250" alt="REGISTERED APPLICANTS REPORT SHEET"/></td></tr></table><br />';

echo "<p align='center'><h4><b>The following Registered Applicants are available on the company's job recruitment website for any administrative purpose and assistance.</b></h4></p>";
echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Applicant JOB ID </th> <th>Title</th> <th>First Name</th><th>Last Name</th><th>Initials</th><th>Phone Numbers</th><th>Email Address</th><th>Nationality</th> <th>Gender</th> <th>Registration Date</th></tr>";


// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table


echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['job_id'] . '</td>';
echo '<td>' . $row['title'] . '</td>';

echo '<td>' . $row['firstname'] . '</td>';

echo '<td>' . $row['lastname'] . '</td>';
echo '<td>' . $row['initials'] . '</td>';
echo '<td>' . $row['phone'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['nationality'] . '</td>';
echo '<td>' . $row['gender'] . '</td>';
echo '<td>' . $row['regdate'] . '</td>';

//echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

//echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}


// close table>

echo "</table>";

?>






</body>

</html>
