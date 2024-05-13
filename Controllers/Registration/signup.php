
<?php
include('../../Templates/SharedConfig.php');
include($ConnectContrl);

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
// $idna = $_POST['nationalid'];
$sginas = $_POST['position'];
$age = $_POST['age'];
$gender = $_POST['gender'];


$query3 = "SELECT * FROM employee";
$result3 = $conn->query($query3);
foreach($result3 as $key=>$value){
}
print_r($value);
  if($value['email']==$email){
	header('location:../../Views/Registration/SignUp.php');
  }

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";




$query="INSERT INTO employee ( firstname, lastname, email , gender, passsword, age,idPrive) 
VALUES ( '$firstname', '$lastname' ,'$email', $gender, '$password','$age','$sginas')";

$resulte = $conn-> query($query);
var_dump($resulte);
$query1= "SELECT * FROM employee WHERE firstname ='$firstname' AND lastname='$lastname'";
$resulte1 = $conn->query($query1);
$userArray = $resulte1->fetch_assoc();
// echo "<pre>";
// print_r($userArray);
// echo "</pre>";

if($resulte){
	session_start();
	$_SESSION['id']=$userArray['id'];
	
}
if ( $userArray['idPrive']==1 || $userArray['idPrive']==2) {
	
	
	// header('Location: ' . $MyEmpView);
	

	
}elseif( $userArray['idPrive']==4 || $userArray['idPrive']==3){
	
	// header('Location: ' . $MydashboardView);
}
else{
	// header('Location: ' . $LoginView);
}
//INSERT INTO `employee`( `firstname`, `lastname`, `address`, `email`, `gender`, `password`, `age`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')