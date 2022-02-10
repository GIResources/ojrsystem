<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View TimeTable</title>

</head>
<script>
function myFunction(){
	window.print();
	
}
</script>
<body onload = "myFunction()">

<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('connect-db.php');



// get results from database

$result = mysql_query("SELECT * FROM mytimetable")

or die(mysql_error());



// display data in table



echo'<table align="center" bgcolor="white" border="0"><tr><td><img src="comp.jpg" 
		height="10" width="80" alt="ONLINE LECTURE TIMETABLE SCHEDULING SYSTEM REPORT"/></td></tr></table><br />';

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Course Title</th> <th>Course Code</th><th>Class Room</th><th>Lecturer Name</th><th>Time</th><th>Date</th><th>lecturer_phone_no</th> <th>lecturer_room_no</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table


echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['course_code'] . '</td>';

echo '<td>' . $row['course_title'] . '</td>';

echo '<td>' . $row['class_room'] . '</td>';
echo '<td>' . $row['lecturer_name'] . '</td>';
echo '<td>' . $row['time1'] . '</td>';
echo '<td>' . $row['date1'] . '</td>';
echo '<td>' . $row['lecturer_phone_no'] . '</td>';
echo '<td>' . $row['lecturer_room_no'] . '</td>';

//echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

//echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}


// close table>

echo "</table>";

?>






</body>

</html>
