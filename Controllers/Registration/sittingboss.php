<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

include"connect.php";

//------------------------------------------------employee
$salary0 = $_POST['security0-1'];
$HourShift0= $_POST['security0-2'];
$maxAbsence0= $_POST['security0-3'];
$maxLatencey0= $_POST['security0-4'];
$payHour0= $_POST['security0-5'];
//UPDATE `bosssitting` SET `idPrive`='[value-2]',`maxAbesence`='[value-3]',`maxLatence`='[value-4]',`salary`='[value-5]',`payHour`='[value-6]' WHERE 1

$query ="UPDATE  bosssitting  SET  maxAbesence =$maxAbsence0 , maxLatence =$maxLatencey0 , salary =$salary0 , payHour =$payHour0 , shiftHour= $HourShift0 WHERE idPrive =1";
$resulte = $conn->query($query);
// $idPrive0 = $_POST['security0-1'];
// $maxAbsence0= $_POST['security0-2'];
// $maxLatencey0= $_POST['security0-3'];
// $salary0= $_POST['security0-4'];
// $payHour0= $_POST['security0-5'];

//------------------------------------------------supervisor
$salary1 = $_POST['security1-1'];
$HourShift1= $_POST['security1-2'];
$maxAbsence1= $_POST['security1-3'];
$maxLatencey1= $_POST['security1-4'];
$payHour1= $_POST['security1-5'];

//$query ="UPDATE  bosssitting  SET  maxAbesence =$maxAbsence0 , maxLatence =$maxLatencey0 , salary =$salary0 , payHour =$payHour0 , shiftHour= $HourShift0 WHERE idPrive =1";

$query1 ="UPDATE  bosssitting  SET    maxAbesence =$maxAbsence1, maxLatence =$maxLatencey1, salary =$salary1, payHour =$payHour1 ,shiftHour= $HourShift1 WHERE idPrive =2";
$resulte1 = $conn->query($query1);
//------------------------------------------------manager
$salary2 = $_POST['security2-1'];
$HourShift2= $_POST['security2-2'];
$maxAbsence2= $_POST['security2-3'];
$maxLatencey2= $_POST['security2-4'];
$payHour2= $_POST['security2-5'];

$query2 ="UPDATE  bosssitting  SET    maxAbesence ='$maxAbsence2', maxLatence ='$maxLatencey2', salary ='$salary2', payHour ='$payHour2' ,shiftHour= '$HourShift2' WHERE idPrive =4";
$resulte2 = $conn->query($query2);
// var_dump($resulte);
// echo "<br>";
// var_dump($resulte1);
// echo "<br>";
// var_dump($resulte2);
// echo "<br>";
if($resulte && $resulte1 &&$ $resulte2){
	header('location:../../views/Dashboard/MyDashboard.php');
}
