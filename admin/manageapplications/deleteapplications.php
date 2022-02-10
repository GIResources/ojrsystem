<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('includes/dbcon.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];


// delete the entry

$result = mysqli_query($connection, "DELETE FROM ((((jobs
INNER JOIN app_biodataform ON jobs.job_id = app_biodataform.job_id)
INNER JOIN qualifications ON jobs.job_id = qualifications.job_id) 
INNER JOIN career_workexperience ON jobs.job_id = career_workexperience.job_id)
INNER JOIN app_passports ON jobs.job_id = app_passports.job_id) WHERE id=$id")

or die(mysqli_error("record not deleted"));
echo "record successfully deleted";



// redirect back to the view page

header("Location: viewapplications.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: viewapplications.php");

}



?>
