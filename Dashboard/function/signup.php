<?php


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$idna = $_POST['nationalid'];
$sginas = $_POST['account-type'];
$birth = $_POST['birthday'];
$gender = $_POST['gender'];

echo "<pre>";
print_r($_POST);
echo "</pre>";

include "connect.php";

$query="INSERT INTO users ( fname, lname, password, email, nationalid, priv, birthday, gender) VALUES ( '$firstname', '$lastname', '$password', '$email', '$idna', '$sginas', '$birth', '$gender')";

$resulte = $conn-> query($query);

if($resulte){
	header("location:../index.php");
}

