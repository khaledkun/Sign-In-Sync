<?php
include "../../../Registration/connect.php";
$query20 = "SELECT * FROM allday WHERE typee = 0";
$result20 =$conn->query($query20);
$thDay =date("Y-m-d",time());
$query21 ="SELECT * FROM allday WHERE dayy = '$thDay'";
$result21 =$conn->query($query21);
$Day = $result21->fetch_assoc();
// print_r($Day) ;
// print_r($Day['id']);


foreach($result20 as $key=>$value){
if($value['id']==$Day['id']){
    echo "this day is holiday".$Day['dayy'];
    
    break;
}
if($value['id']>$Day['id']){
    echo $value['dayy']."<br>";
     break;
}
    
    
    // echo "<pre>";
    // print_r($value['dayy']);
    // echo "</pre>";
}
// echo "hi nada test <br>";
// echo $_GET['reset'];
