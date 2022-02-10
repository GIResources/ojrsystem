<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $course_title, $course_code,$class_room,$lecturer_name, $time1,$lecturer_phone_no,$lecturer_room_no,$date1, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Update TimeTable</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

<strong>Course Title: *</strong> <input type="text" name="course_title" value="<?php echo $course_title; ?>" /><br/>

<strong>Course Code: *</strong> <input type="text" name="course_code" value="<?php echo $course_code; ?>" /><br/>

<strong>class_room: *</strong> <input type="text" name="class_room" value="<?php echo $class_room ?>" /><br/>

<strong>lecturer_name: *</strong> <input type="text" name="lecturer_name" value="<?php echo $lecturer_name; ?>" /><br/>

<strong>time: *</strong> <input type="text" name="time1" value="<?php echo $time1; ?>" /><br/>
<strong>Date: *</strong> <input type="text" name="date1" value="<?php echo $date1; ?>" /><br/>

<strong>lecturer_phone_no: *</strong> <input type="text" name="lecturer_phone_no" value="<?php echo $lecturer_phone_no; ?>" /><br/>

<strong>lecturer_room_no: *</strong> <input type="text" name="lecturer_room_no" value="<?php echo $lecturer_room_no; ?>" /><br/>




<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}







// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (isset($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$course_title = mysql_real_escape_string(htmlspecialchars($_POST['course_title']));

$course_code = mysql_real_escape_string(htmlspecialchars($_POST['course_code']));

$class_room = mysql_real_escape_string(htmlspecialchars($_POST['class_room']));

$lecturer_name = mysql_real_escape_string(htmlspecialchars($_POST['lecturer_name']));

$time1 = mysql_real_escape_string(htmlspecialchars($_POST['time1']));

$date1 = mysql_real_escape_string(htmlspecialchars($_POST['date1']));

$lecturer_phone_no = mysql_real_escape_string(htmlspecialchars($_POST['lecturer_phone_no']));

$lecturer_room_no = mysql_real_escape_string(htmlspecialchars($_POST['lecturer_room_no']));



// check that firstname/lastname fields are both filled in

if ($course_title ==''|| $date1 ==''|| $course_code ==''||$class_room ==''||$lecturer_name ==''|| $time1 ==''|| $lecturer_phone_no ==''|| $lecturer_room_no =='')
{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($course_title, $course_code,$class_room,$lecturer_name, $time1,$date1,$lecturer_phone_no,$lecturer_room_no, $error);


}

else

{

// save the data to the database


mysql_query("UPDATE mytimetable SET course_title = '$course_title',course_code = '$course_code',class_room = '$class_room', lecturer_name = '$lecturer_name',time1 = '$time1',date1 = '$date1',lecturer_phone_no = '$lecturer_phone_no',lecturer_room_no = '$lecturer_room_no' WHERE id='$id' ")
or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM mytimetable WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$course_title = $row['course_title'];

$course_code = $row['course_code'];

$class_room = $row['class_room'];

$lecturer_name = $row['lecturer_name'];

$time1 = $row['time1'];

$date1 = $row['date1'];


$lecturer_phone_no = $row['lecturer_phone_no'];

$lecturer_room_no = $row['lecturer_room_no'];


// show form

renderForm($id, $course_title, $course_code,$class_room,$lecturer_name, $time1,$date1,$lecturer_phone_no,$lecturer_room_no, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>
