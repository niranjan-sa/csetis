<?php 

$mysql_error = 'Could not connect to the database.';
$mysql_username = 'root';
$mysql_password = '';
$mysql_host = 'localhost';
$mysql_database = 'teacherinfo';

if(!mysql_connect($mysql_host, $mysql_username, $mysql_password) || !mysql_select_db($mysql_database)) {
	die($mysql_error);
}
//@mysql_connect($mysql_host, $mysql_username, $mysql_password);
//@ symbol removes the default warnings for that statement!!

echo 'Connected<br>';
 ?>