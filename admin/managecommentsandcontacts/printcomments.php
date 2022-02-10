<!DOCTYPE HTML>

<html>

<head>

<title>COMMENTS AND CONTACTS REPORT SHEET</title>

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

$result = mysqli_query($connection, "SELECT * FROM contactus")

or die(mysqli_error("Awaiting Resources"));



// display data in table



echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="images/logo.png" 
		height="50" width="250" alt="INFOSYS COMMENTS AND CONTACTS REPORT"/></td></tr></table><br />';

echo "<p align='center'><h4><b>The following comments and contacts reached us the Administators of the OJRS for one reason or the other on this recruitment website.</b></h4></p>";
echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Comments Serial No</th> <th>Name</th> <th>Email  Address</th><th>Message</th><th>Comment Date and Time</th></tr>";


// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table


echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['contact_id'] . '</td>';
echo '<td>' . $row['name'] . '</td>';

echo '<td>' . $row['email'] . '</td>';

echo '<td>' . $row['message'] . '</td>';
echo '<td>' . $row['commentdate'] . '</td>';


//echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

//echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}


// close table>

echo "</table>";

?>






</body>

</html>
