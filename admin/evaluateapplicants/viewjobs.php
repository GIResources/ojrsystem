<!DOCTYPE HTML>

<html>

<head>

<title>Infosys Jobs</title>

</head>

<body>
    <h2 style="text-color: blue;"><p align="center">JOBS (POSITIONS) AVAILABILITY AND THEIR REQUIREMENTS</p></h2>
<hr>
<h4>As an Applicant, the following vacant Jobs and Positions are available for your application. Infosys Digital Solutions disclaims any other advertised or published jobs and vacant positions alleged and masterminded by any other third-party whether individual or corporate organization or site other than these outline by this site and shown on this table. Please refer the Application guide on Help Menu of the Home page or kindly contacts the Administrator using the contact menu for any  assistance you might need.</h4>
<hr>                     

<?php

/*

VIEW.PHP

Displays all data from 'job table

*/



// connect to the database

include('includes/dbcon.php');



// get results from database

$result = mysqli_query($connection,"SELECT * FROM jobtable")

or die(mysqli_error("Awaiting Resources"));



// display data in table

echo "<h3><p align='center'><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated </a> | <a href='../../index.php'><strong>Home</strong></a>&nbsp; | <a href='../managejobs/index.php'><strong>Manage Jobs!</strong></a></p></h3>";



echo "<table border='1' cellpadding='20'>";


echo "<tr> <th>ID</th> <th>Job Serial No</th><th>Job Title</th> <th>Job Code</th><th>Qualification</th><th>Years of Experience</th><th>Age Limit</th><th>Preferred Gender</th> <th>Publication Date</th><th>Expiring Date</th> <th>Edit Jobs</th><th>Delete Jobs</th></tr>";


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

echo '<td><a href="editjobs.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="deletejobs.php?id=' . $row['id'] . '">Delete</a></td>';
echo "</tr>";

}


// close table>

echo "</table>";

?>
<hr><hr>
<h3><p align="center"><a href="../../index.php"><strong>Home</strong></a>&nbsp; | <a href="../managejobs/index.php"><strong>Manage Jobs</strong></a></p></h3>

</body>

</html>
