<?php
session_start();
$id =$_SESSION['id'];

//step for to do 
include "../../../Registration/connect.php";
$theDay = date("Y-m-d");

$query80="SELECT * FROM allday WHERE typee =1 AND dayy < '$theDay'";
$result80=$conn->query($query80);
// تكرار بعدد أيام العمل الى فاتت
$i10=0;
$d10=0;
$absendDayArray[]=[];
$absent=0;
foreach($result80 as $key80=>$value80){
    $num_rows80=$result80->num_rows;
    $workDaybefore=$value80['dayy'];
    // echo $workDaybefore;
    // echo "<br>";
    $query81 ="SELECT * FROM login WHERE id_employee =$id AND dayy = '$workDaybefore'";
    $result81 =$conn->query($query81);
    $i10++;
    //عددالجلسات
    if($result81->num_rows==0){
        $absent++;
        array_push($absendDayArray,$value80['dayy']);
    }
    // echo "count work day before this day"."$i10<br>";
    // var_dump($result81);
        //تكرار بعددالجلسات بداخل كل يوم
        
        //عدد الايام التى لم حضرها
    //     if($absent){
    //         $d10++;
            
            

    // }
}
echo "<b>count of day you don't login ";
echo $absent."<br>";
$supD=$absent-1;
echo "<br>";
// echo "<pre>";
// print_r($absendDayArray);
// echo "</pre>";
echo "<b>and this day is </b><br>";
for($u10=1;$u10<count($absendDayArray);$u10++){
    echo "<b><pre>";
    print_r($absendDayArray[$u10]);
    echo "</pre></b>";
    //عدد الاايام التى هى أيام عمل
}

// echo $absent;



