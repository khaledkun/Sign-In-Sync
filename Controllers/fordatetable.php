<?php
echo "this bage is for date table";
include 'connect.php';
echo date_default_timezone_set('Asia/Riyadh');
$date = date('Y-m-d',time());
echo $date;
$query1 = "SELECT * FROM login WHERE day =$date";
$result1 = $conn->query($query1);
var_dump($result1);
$result0 =$result1->fetch_assoc();
echo "<br>";
print_r($result0);
$id =$result0['id'];
$day = $result0['day'];
echo $result0['id'];
echo $result0['day'];
//type will be work later
$query2 = "INSERT INTO days(id_login, datee, type) VALUES ($id,$day,1)";