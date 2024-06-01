<?php
session_start();
$id =$_SESSION['id'];
// $reset =$_GET['reset'];
// echo $_GET['reset'];
echo "hi<br>";
include "../../../Registration/connect.php";
//rememper to add when daysession =1
$query100="SELECT * FROM login WHERE id_employee =$id AND timee >= '09:10:00' ";
$result100=$conn->query($query100);
// var_dump($result100);
$thDay20 =date("Y-m-d",time());
$counDayLate=0;
$lateDayArray=[];
$StartWorkTimeRoule=strtotime("09:10:00");
// echo $StartWorkTimeRoule;
echo "<br>";
foreach($result100 as $key100=>$value100){
    // echo "<pre>";
    // print_r($value100['dayy']);
    // echo "</pre>";
    $counDayLate++;
    array_push($lateDayArray,$value100['timee']);
   
    // echo "<pre>";
    $LateLogTime =$value100['timee'];
    // echo "</pre>";
    $LateLogTimeBySecond =strTotime($LateLogTime);
    array_push($lateTimeLogBySECArray,$LateLogTimeBySecond);
    // echo "<br>";
    // echo $LateLogTimeBySecond;

}
echo "<b><br>count day you late in ==(";
echo $counDayLate;
echo ")day<br>and this day is</b>";
for($h20=0;$h20<count($lateDayArray);$h20++){
    echo "<br>";
    echo $h20;
    echo "<b><pre>";
    print_r($lateDayArray["$h20"]);
    echo "</pre></b>";
//     echo $h20;
    echo "<br>";
    $totalSecondLate=$LateLogTimeBySecond-$StartWorkTimeRoule;
    echo "<b>the total second of late ==</b>".$totalSecondLate;
//     echo "<br>";

//     if($totalSecondLate>=3600){
//         $lateHour = $totalSecondLate/(60*60);
//         $countHour20 = floor($lateHour) ;//countHour
//         $lateminbySec =($totalSecondLate-($countHour20*60*60));
    
//         $countMin20 = floor($lateminbySec/60);//countMin
//         $secHour =$countHour20*60*60;
//         $secMin =$countMin20*60;
        
//         $countSec20 =$totalSecondLate-($secHour+$secMin);//countsec
        
//         echo "<br>";
//         echo $countHour20.':'.$countMin20.':'.$countSec20;
//         echo "<br>";
//     }elseif($totalSecondLate>=60){
//         $countMin20=floor($totalSecondLate/60);
//         $countsec20 =$totalSecondLate%60;
//         echo "<br>";
//         echo "00:".$countMin20.":".$countsec20;

//     }elseif($totalSecondLate<60){
//         // $totalreal= $totalin-$totalout;
        
//         echo "00:00:".$totalSecondLate;
//     }
  
}


