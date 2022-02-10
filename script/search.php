<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>New TimeTable</title>

</head>
<body>
<form action="" method="POST">
<a href=".././">HOME</a><BR>
<input type="text" name="query" placeholder="query">
 <input type="submit" value="Search" />

 
 

</form>

</body>
</html>


<?php

$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'records';


$connection = mysql_connect($server, $user, $pass)

or die ("Could not connect to server ... \n" . mysql_error ());

mysql_select_db($db)

or die ("Could not connect to database ... \n" . mysql_error ());
//include('connect-db.php');


if (isset($_POST['POST'])) { 

  $course_title=($_POST['course_title']);
$course_code=($_POST['course_code']);


$course_title = mysql_real_escape_string(htmlspecialchars($_POST['course_title']));

$course_code = mysql_real_escape_string(htmlspecialchars($_POST['course_code']));

}
   @ $query = $_POST['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM mytimetable
            WHERE (`course_title` LIKE '%".$query."%') OR (`course_code` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
				echo "<table border='1' cellpadding='10' bordercolor='green' bgcolor='white' >";
				echo "<tr> <th>ID</th> <th>Course Title</th> <th>Course Code</th><th>Class Room</th><th>Lecturer Name</th><th>Time</th> <th>Date</th><th>lecturer_phone_no</th> <th>lecturer_room_no</th></tr>";
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			 echo "<tr>";
			 // . $row['id'] . '</td>';
                echo '<td>'.$results['id'].'</td>';
				echo '<td>'.$results['course_title'].'</td>';
				echo '<td>'.$results['course_code'].'</td>';
				echo '<td>'.$results['class_room'].'</td>';
				echo '<td>'.$results['lecturer_name'].'</td>';
				echo '<td>'.$results['time1'].'</td>';
				echo '<td>'.$results['date1'].'</td>';
				echo '<td>'.$results['lecturer_phone_no'].'</td>';
				echo '<td>'.$results['lecturer_room_no'].'</td>';


				
				echo "</tr>";
				echo "</table>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
	//}
    }
?>











