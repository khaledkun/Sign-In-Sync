<?php
echo "<h1>index</h1>";
include "function/connect.php";

$query="SELECT * FROM users";

$resulte = $conn-> query($query);

// var_dump($resulte);
foreach ($resulte as $key => $value) {
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}