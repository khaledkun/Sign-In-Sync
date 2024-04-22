<?php
$email = $_POST['email'];
$password = $_POST['password'];
// $username=$_POST['username'];
// $password=md5($_POST['password']);
require 'connect.php';
$query = "SELECT * FROM employee WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);// mysqli result object ==>current_field  ==> feild_count ==>  lengths ==>num_rows ==>type ==>
var_dump($result);

$user =$result->fetch_assoc();
// foreach ($result as $row => $value) {
// 	echo '<pre>';

// 	print_r($value);

// 	echo '</pre>';
// }


// echo '<pre>';
// print_r($result);
// echo '</pre>';
echo "<br>";
print_r($user);
$id = $user['id'];
// echo $id;

if ($result-> num_rows > 0 && $user['prive']==0) {
	session_start();
	$_SESSION['id']=$id;
	
	header('location: ../Views/EmployeeDashboard.php');

	
}elseif($result-> num_rows > 0 && $user['prive']==1){
	session_start();
	$_SESSION['id']=$id;
	header('location: ../Views/BossDashboard.php');
	
}else{
	header('location: ../Views/login.php');
}