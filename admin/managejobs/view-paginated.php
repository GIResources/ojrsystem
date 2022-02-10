
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Infosys Jobs</title>

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

include('includes/dbcon.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$result = mysqli_query($connection, "SELECT * FROM jobtable");

$total_results = mysqli_num_rows($result);

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



echo "<p><a href='viewjobs.php'>View All</a> | <b>View Page:</b> ";

for ($i = 1; $i <= $total_pages; $i++)

{

echo "<a href='view-paginated.php?page=$i'>$i</a> ";

}

echo "</p>";



// display data in table


echo "<table border='1' cellpadding='20' bordercolor='green' bgcolor='white' >";

echo "<tr> <th>ID</th> <th>Job Serial No</th><th>Job Title</th> <th>Job Code</th><th>Qualification</th><th>Years of Experience</th><th>Age Limit</th><th>Preferred Gender</th> <th>Publication Date</th><th>Expiring Date</th> <th>Edit Jobs</th><th>Delete Jobs</th></tr>";


// loop through results of database query, displaying them in the table

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }



// echo out the contents of each row into a table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row[$i 'id'] . '</td>';

echo '<td>' . $row[$i 'job_sn'] . '</td>';

echo '<td>' . $row[$i 'jobtitle'] . '</td>';

echo '<td>' . $row[$i 'jobcode'] . '</td>';

echo '<td>' . $row[$i 'qualification'] . '</td>';
echo '<td>' . $row[$i 'yearsofexperience'] . '</td>';
echo '<td>' . $row[$i 'agelimit'] . '</td>';
echo '<td>' . $row[$i 'preferredgender'] . '</td>';
echo '<td>' . $row[$i 'publicationdate'] . '</td>';
echo '<td>' . $row[$i 'expiringdate'] . '</td>';

echo '<td><a href="editjobs.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="deletejobs.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";
    }

// close table>

echo "</table>";



// pagination



?>





</body>

</html>
