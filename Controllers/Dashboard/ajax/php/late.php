<?php
session_start();
$id =$_SESSION['id'];
// $reset =$_GET['reset'];
// echo $_GET['reset'];
// echo "hi<br>";
include "../../../Registration/connect.php";
//rememper to add when daysession =1
$query101="SELECT start FROM timeWork ";
$result101=$conn->query($query101);
$rule =$result101->fetch_assoc();
$ruleStart =$rule['start'];
// var_dump($ruleStart) ;

$query100="SELECT * FROM login WHERE id_employee =$id AND timee >= '$ruleStart' AND daysession =1";
$result100=$conn->query($query100);
// var_dump($result100);
$counDayLate =$result100->num_rows;
$thDay20 =date("Y-m-d",time());
// $counDayLate=0;


$lateDayArray=[];
$StartWorkTimeRoule=strtotime($ruleStart);
$num_rows100 = $result100->num_rows;
// echo $StartWorkTimeRoule;
$lateTimeLogBySECArray=[];
$lateTimeArray=[];
$lateSecArray=[];
echo "<br>";
echo "<b><br>count day you late in ==(";
echo $counDayLate;
echo ")day<br>and this day is</b>";
if($num_rows100<=0){
    echo "no late <br>";
    echo "late day == 0";
}else{
    foreach($result100 as $key100=>$value100){
        echo "<pre><b>";
        print_r($value100['dayy']);
        echo "<br> you log at == ";
        print_r($value100['timee']);
        echo "<br> late== ";
        $lateBySec=strtotime($value100['timee'])-strtotime("09:10:00");
        // echo $lateBySec;
        // echo "<br>";
        $lateTimeFormat =date("H:i:s",$lateBySec-(60*60));
        echo $lateTimeFormat;
        echo "</pre></b>";
        // $counDayLate++;
        array_push($lateTimeArray,$lateTimeFormat);
        // array_push($lateTimeArray,$value100['timee']);
       
        // echo "<pre>";
        $LateLogTime =$value100['timee'];
        // echo "</pre>";
        $LateLogTimeBySecond =strTotime($LateLogTime);
        array_push($lateTimeLogBySECArray,$LateLogTimeBySecond);
        // echo "<br>";
        // echo $LateLogTimeBySecond;
        array_push($lateSecArray,$lateBySec);
    
    }

}
// echo "<br><pre>";
// // print_r($lateTimeArray);
// echo "</pre><br>";
// echo array_sum($lateSecArray);
echo "<br>";
$sec100=array_sum($lateSecArray);
$totalLate = date("H:i:s",$sec100);
echo "<b>The total time you late == </b>";
echo "<b>".$totalLate."</b>";

// 



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
  
// }


