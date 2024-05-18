<?php
// define('HOST', 'sql11.freesqldatabase.com');
// define('USERNAME', 'sql11698552');
// define('PASS','CbrDAHaavS');
// define('DB', 'sql11698552');

// https://phpmyadmin.alwaysdata.com/
define('HOST', 'mysql-sign-in-sync.alwaysdata.net');
define('USERNAME', '359435');
define('PASS','J@8L$wX9f!5K');
define('DB', 'sign-in-sync_db');




$conn = new mysqli(HOST,USERNAME,PASS,DB);
$conn->set_charset('utf8');
if(!$conn){
	echo $conn -> connect_error;
};


