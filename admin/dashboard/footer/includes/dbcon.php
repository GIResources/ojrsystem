
<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "gospeltruth";
@mysql_connect ("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
@mysql_select_db("$db_name") or die ("no database");

echo "successful connection";
?>
 
//$link = mysql_connect('$db_host','$db_username','', '$db_name'); 
//if (!$link) { 
//	die('Could not connect to MySQL: ' . mysql_error()); 
//} else{
//echo 'Connection OK'; 
mysql_close($link); 
?>   