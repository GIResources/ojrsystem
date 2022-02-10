<!DOCTYPE HTML>

<html>

<head>

<title>ADMINISTRATORS LIST SHEET</title>

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

$result = mysqli_query($connection, "SELECT * FROM register_admin")

or die(mysqli_error("Awaiting Resources"));



// display data in table



echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="images/logo.png" 
		height="50" width="250" alt="INFOSYS AUTHORIZED ADMINISTRATORS REPORT"/></td></tr></table><br />';

echo "<p align='center'><h4><b>The follow authorized Administrator were registered and delegated to attend to all qualified applicant applying for any Job Position in the company's job recruitment website.</b></h4></p>";
echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Serial No</th> <th>Title</th> <th>First Name</th><th>Last Name</th><th>Phone Contacts</th><th>Email Address</th><th>Gender </th><th>Registration Date</th></tr>";


// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table


echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['sn'] . '</td>';
echo '<td>' . $row['title'] . '</td>';

echo '<td>' . $row['firstname'] . '</td>';

echo '<td>' . $row['lastname'] . '</td>';
echo '<td>' . $row['phone'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
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
