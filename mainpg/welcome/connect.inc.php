<?php 

$mysql_error = 'Could not connect to the database.';
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";

$mysql_db="tis";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_password)||!mysql_select_db($mysql_db)) {
	echo "Error";
	die(mysql_error());
}


 ?>