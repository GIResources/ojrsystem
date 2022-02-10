
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View TimeTable</title>

</head>

<body>

<li> <p><a href="index.php">HOME</a></p></li>

<?php

/*

VIEW-PAGINATED.PHP

Displays all data from 'players' table

This is a modified version of view.php that includes pagination

*/



// connect to the database

include('connect-db.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$result = mysql_query("SELECT * FROM mytimetable");

$total_results = mysql_num_rows($result);

$total_pages = ceil($total_results / $per_page);



// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];



// make sure the $show_page value is valid

if ($show_page > 0 && $show_page <= $total_pages)

{

$start = ($show_page -1) * $per_page;

$end = $start + $per_page;

}

else

{

// error - show first set of results

$start = 0;

$end = $per_page;

}

}

else

{

// if page isn't set, show first set of results

$start = 0;

$end = $per_page;

}



// display pagination



echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";

for ($i = 1; $i <= $total_pages; $i++)

{

echo "<a href='view-paginated.php?page=$i'>$i</a> ";

}

echo "</p>";



// display data in table


echo "<table border='1' cellpadding='10' bordercolor='green' bgcolor='white' >";

echo "<tr> <th>ID</th> <th>Course Title</th> <th>Course Code</th><th>Class Room</th><th>Lecturer Name</th><th>Time</th> <th>Date</th><th>lecturer_phone_no</th> <th>lecturer_room_no</th></tr>";


// loop through results of database query, displaying them in the table

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'id') . '</td>';

echo '<td>' . mysql_result($result, $i, 'course_title') . '</td>';

echo '<td>' . mysql_result($result, $i, 'course_code') . '</td>';

echo '<td>' . mysql_result($result, $i, 'class_room') . '</td>';

echo '<td>' . mysql_result($result, $i, 'lecturer_name') . '</td>';
echo '<td>' . mysql_result($result, $i, 'time1') . '</td>';
echo '<td>' . mysql_result($result, $i, 'date1') . '</td>';
echo '<td>' . mysql_result($result, $i, 'lecturer_phone_no') . '</td>';
echo '<td>' . mysql_result($result, $i, 'lecturer_room_no') . '</td>';


echo "</tr>";

}

// close table>

echo "</table>";



// pagination



?>





</body>

</html>
