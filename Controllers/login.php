
<?php
$email = $_POST['email'];
$password = $_POST['password'];
// $username=$_POST['username'];
// $password=md5($_POST['password']);
require 'connect.php';
$query = "SELECT * FROM employee WHERE email = '$email' AND passsword = '$password'";
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
var_dump($result);
if($result-> num_rows > 0){



if (  $user['prive']==4 || $user['prive']==3) {
	session_start();
	$_SESSION['id']=$id;
	

	header('location: ../Views/BossDashboard.php');
	// header('location: ../Views/MyDashboard.php');

	
}elseif( $user['prive']==1 || $user['prive']==2){
	session_start();
	$_SESSION['id']=$id;
	echo date_default_timezone_set('Asia/Riyadh');
	$date = date('Y-m-d',time());
	$time = date('H:i:s',time());
	// echo $date."<br>";
	// echo $time."<br>";
	$query1 ="INSERT INTO login( id_empolyee, dayy, timee) VALUES ($id,'$date','$time')";
	$result1 =$conn->query($query1);
	$query2 = "SELECT * FROM datys WHERE datee =$date";
	$result2 =$conn->query($query2);
	header('location:../views/EmployeeDashboard.php');
	
	// if(!$result2){
	// 	header('location:fordatetable.php');
	// }
	// --------
	
	// $result2=$conn->query($query2);
	// var_dump($result2);
	// $logindata =$result2->fetch_assoc();

	// $id_login= $logindata['id_login'];
	// echo $id_login;
	// //type on anothor time will be work
	// $query3 ="INSERT INTO days (id_login, datee, type) VALUES ($id_login, $date, '1')";
	// $result3=$conn->query($query3);
	// header('location: ../Views/BossDashboard.php');
}	
}else{
	header('location: ../Views/login.php');
}
