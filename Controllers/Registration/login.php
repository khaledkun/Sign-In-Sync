<?php
$email = $_POST['email'];
$password = $_POST['password'];
// $username=$_POST['username'];
// $password=md5($_POST['password']);
include('../../Templates/SharedConfig.php');
include('connect.php');
session_start();
$query = "SELECT * FROM employee WHERE email = '$email' AND passsword = '$password'";
$result = $conn->query($query);// mysqli result object ==>current_field  ==> feild_count ==>  lengths ==>num_rows ==>type ==>
// var_dump($result);

$user =$result->fetch_assoc();

print_r($user);

// echo $id;

if (!isset($_SESSION['first_login'])) {
	
	// If it's the first time this session is created
	$_SESSION['first_login'] = true;
} else {
	// Otherwise, it's not the first login in this session
	$_SESSION['first_login'] = false;
}
//------------------------------------------------------------------login--php
if($result-> num_rows > 0){
	
	

	if ( $user['idPrive']==4 || $user['idPrive']==3) {
		$id = $user['id'];
		$_SESSION['id']=$id;

		echo date_default_timezone_set('Asia/Riyadh');
		$date = date('Y-m-d',time());
		$time = date('H:i:s',time());
		$query1 ="INSERT INTO login( id_employee, dayy, timee) VALUES ($id,'$date','$time')";
		$result1 =$conn->query($query1);

		header('Location: ' . $MydashboardView);
		exit();


		
	}elseif( $user['idPrive']==1 || $user['idPrive']==2){
		$id = $user['id'];
		$_SESSION['id']=$id;
		echo date_default_timezone_set('Asia/Riyadh');
		$date = date('Y-m-d',time());
		$time = date('H:i:s',time());
		// echo $date."<br>";
		// echo $time."<br>";
		$query1 ="INSERT INTO login( id_employee, dayy, timee) VALUES ($id,'$date','$time')";
		$result1 =$conn->query($query1);
		
		header('Location: ' . $MydashboardView);
		exit();

		
		
	}
}else{
		header('Location: ' . $LoginView);
}
// echo $result;