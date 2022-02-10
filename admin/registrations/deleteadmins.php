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

$result = mysqli_query($connection, "DELETE FROM register_admin WHERE id=$id")

or die(mysqli_error("record not deleted"));
echo "record successfully deleted";



// redirect back to the view page

header("Location: viewadmins.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: viewadmins.php");

}



?>
