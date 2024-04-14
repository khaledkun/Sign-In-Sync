<?php
define('HOST', 'sql11.freesqldatabase.com');
define('USERNAME', 'sql11698552');
define('PASS','CbrDAHaavS');
define('DB', 'sql11698552');

$conn = new mysqli(HOST,USERNAME,PASS,DB);
$conn->set_charset('utf8');
if(!$conn){
	echo $conn -> connect_error;
};


