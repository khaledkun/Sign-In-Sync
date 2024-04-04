
<?php


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
// $idna = $_POST['nationalid'];
// $sginas = $_POST['account-type'];
$age = $_POST['age'];
$gender = $_POST['gender'];

echo "<pre>";
print_r($_POST);
echo "</pre>";

include "connect.php";

$query="INSERT INTO employee ( firstname, lastname, email , gender, password, age) VALUES ( '$firstname', '$lastname' ,'$email', $gender, '$password','$age')";

$resulte = $conn-> query($query);
var_dump($resulte);
$query1= "SELECT * FROM employee WHERE firstname ='$firstname' AND lastname='$lastname'";
$resulte1 = $conn->query($query1);
$userArray = $resulte1->fetch_assoc();
echo "<pre>";
print_r($userArray);
echo "</pre>";

if($resulte){
	session_start();
	$_SESSION['id']=$userArray['id'];
	header("location:../Html/index.php");
}

//INSERT INTO `employee`( `firstname`, `lastname`, `address`, `email`, `gender`, `password`, `age`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')