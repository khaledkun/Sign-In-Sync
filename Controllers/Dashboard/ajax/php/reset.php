<?php

session_start();
include "../../../Registration/connect.php";
$id =$_SESSION['id'];
$reset = $_GET['reset'];

// $date = date('Y-m-d',time());
// $query2= "SELECT * FROM resettest WHERE id_employee =$id AND dayy =$date";
// $ruselt2 =$conn->query($query2);
// $ruselt2 =$ruselt2->fetch_assoc();
// if($result2){
//     $query3 = "UPDATE resettest SET dayy ='[value-2]' WHERE 1";
// }

echo $reset;

//-----------------------------------
$query1 ="INSERT INTO resettest ( 'date') VALUES ('$reset')";
$result1 =$conn->query($query1);
// ---------------------------
