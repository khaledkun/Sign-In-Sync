<?php
$email = $_POST['email'];
$password = $_POST['password'];
// $username=$_POST['username'];
// $password=md5($_POST['password']);
require '../../Controllers/Registration/connect.php';
session_start();
$query = "SELECT * FROM employee WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);// mysqli result object ==>current_field  ==> feild_count ==>  lengths ==>num_rows ==>type ==>
// var_dump($result);

$user =$result->fetch_assoc();
// foreach ($result as $row => $value) {
// 	echo '<pre>';

// 	print_r($value);

// 	echo '</pre>';
// }


// echo '<pre>';
// print_r($result);
// echo '</pre>';

// echo "<br>";
// print_r($user);
$id = $user['id'];
// echo $id;

if (!isset($_SESSION['first_login'])) {
	// If it's the first time this session is created
	$_SESSION['first_login'] = true;
} else {
	// Otherwise, it's not the first login in this session
	$_SESSION['first_login'] = false;
}
if ($result-> num_rows > 0 && $user['prive']==0) {
	session_start();
	$_SESSION['id']=$id;
	

	
	header('location: ../../Views/Dashboard/MyDashboard.php');

	
}elseif($result-> num_rows > 0 && $user['prive']==1){
	session_start();
	$_SESSION['id']=$id;
	echo date_default_timezone_set('Asia/Riyadh');
	$date = date('Y-m-d',time());
	$time = date('H:i:s',time());
	// echo $date."<br>";
	// echo $time."<br>";
	$query1 ="INSERT INTO login( id_empolyee, day, timee) VALUES ($id,'$date','$time')";
	$result1 =$conn->query($query1);
	// $query2 = "SELECT * FROM login"

	// $id_login= $login['id_login'];
	//type on anothor time will be work
	$query3 ="INSERT INTO days (id_login, datee, type) VALUES ($id_login, $date, '1')";
	// $result3=$conn->query($query3);
	header('location: ../../Views/Dashboard/BossDashboard.php');
	
}else{
	header('location: ../../Views/Registration/login.php');
}