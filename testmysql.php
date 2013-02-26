<?php 
$link = mysql_connect('hostname','dbuser','dbpassword'); 
OF NIET?!
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 
?> 
