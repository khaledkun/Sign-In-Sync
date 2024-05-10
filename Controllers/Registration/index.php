<?php
//test some change
echo "<h1>index</h1>";
include('../../Templates/SharedConfig.php');
include($ConnectContrl);

$query="SELECT * FROM employee";

$resulte = $conn-> query($query);

// var_dump($resulte);
foreach ($resulte as $key => $value) {
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}