<!DOCTYPE HTML>

<html>

<head>

<title>View Job</title>

</head>

<body>



<?php

/*

VIEW.PHP

Displays all data from 'job table

*/



// connect to the database

include('connect-db.php');



// get results from database

$result = mysql_query("SELECT * FROM jobtable")

or die(mysql_error());



// display data in table

echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";



echo "<table border='1' cellpadding='20'>";


echo "<tr> <th>ID</th> <th>Job Title</th> <th>Job Code</th><th>Qualification</th><th>Years of Experience</th><th>Age Limit</th> <th>Publication Date</th><th>Expiring Date</th> <th>Apply</th><th>Edit Here</th><th>Delete Here</th></tr>";


// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['jobtitle'] . '</td>';
echo '<td>' . $row['jobcode'] . '</td>';


echo '<td>' . $row['qualification'] . '</td>';
echo '<td>' . $row['yearsofexperience'] . '</td>';
echo '<td>' . $row['agelimit'] . '</td>';
echo '<td>' . $row['date1'] . '</td>';
echo '<td>' . $row['publicationdate'] . '</td>';
echo '<td>' . $row['expiringdate'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}


// close table>

echo "</table>";

?>


<p><a href="index.php">Add a new record</a></p>

<p><a href="print.php">print record</a></p>

</body>

</html>
