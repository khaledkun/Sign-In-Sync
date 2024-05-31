<?php
session_start();
$id =$_SESSION['id'];
//get login data for employee and this day
$thDay2 =date("Y-m-d",time());
include "../../../Registration/connect.php";
$query32 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' ";
$result32 =$conn->query($query32);
//end
// echo "<br>"."this num rows";

//num rows we get is and sup one 
// var_dump($result32->num_rows);
// echo "<br>";
$num_rows=$result32->num_rows;
$num_rows_sup=$num_rows-1;
$num_rows_sup2=$num_rows-2;
//end
// exit();
//if we get one reslut 

//if ////////////////////////////////////////////////////////////////
if($num_rows==1){
    echo "<b>you don't take any break <br>";
    echo "this is first session in <br>this day no break time you take</b>";

}elseif($num_rows==2){
    echo "<b>you take one break<b> ==</b><br>";
    $query40 ="DELETE FROM calBreak WHERE id_employee=$id";
    $reslut40 =$conn->query($query40);
    //for the session one to get time out
    $query30 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' AND daysession = 1";
    $result30 =$conn->query($query30);
    //for the session two to get time in 
    $query31 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' AND daysession = 0";
    $result31 =$conn->query($query31);

    //out
    foreach($result30 as $key1=>$value1){
    }
    //in
    foreach($result31 as $key2=>$value2){
    }
    //get time in for session two and 
    //get time out for session one
    $timein  =$value2['timee'];
    $timeout =$value1['Eout'];
    
    $timeinArray =explode(':',"$timein");
    
    //حولنا الوقت  الخاص باالدخول لى السيشن  التنيه لى اراى بالثوانى
    $hourin =$timeinArray['0']*60*60;
    $minin  =$timeinArray['1']*60;
    $secin =$timeinArray['2'];

    $totalin =$hourin+$minin+$secin;
    //نفس الأمر لى السشن الولى للتسجيل الخروج
    //==هكزى معنى بداية ونهاية  أول  بريك
    $timeoutArray =explode(':',"$timeout");
    
    $hourout = $timeoutArray['0']*60*60;
    $minout =$timeoutArray['1']*60;
    $secout =$timeoutArray['2'];
    $totalout =$hourout+$minout+$secout;
    //هنا معانا الوقت المستغرق فى البريك بالثوانى
    $allBreakSec =$totalin -$totalout;
    //معانا كده عدد الساعات
    if($allBreakSec>=3600){
        $breakHour = $allBreakSec/(60*60);
        $countHour = floor($breakHour) ;//countHour
        //كده تنقصنا الساعات بالثوانى من  كل الثوانى
        $breakminbySec =($allBreakSec-($countHour*60*60));
        //هنه جبنا عدد الدقائق
        $countMin = floor($breakminbySec/60);//countMin
        $secHour =$countHour*60*60;
        $secMin =$countMin*60;
        //هنه بنحاول نجيب الثوانى
        $countSec =$allBreakSec-($secHour+$secMin);//countsec
        
        echo "<br>";
        echo $countHour.':'.$countMin.':'.$countSec;
        echo "<br>";
    }elseif($allBreakSec>=60){
        $countMin=floor($allBreakSec/60);
        $countsec =$allBreakSec%60;
        echo "<br>";
        echo "00:".$countMin.":".$countsec;

    }elseif($allBreakSec<60){
        $totalreal= $totalin-$totalout;
        
        echo "00:00:".$allBreakSec;
    }
    
  

    



}elseif($num_rows>2){
    echo "<b>you take more than one break<br> you take "."$num_rows_sup  "."break and total time<br></b><b>******** ==</b>";
     //first delet all data to break time
     $query40 ="DELETE FROM calBreak WHERE id_employee =$id";
     $reslut40 =$conn->query($query40);
     //num rows ==4 and sup ==3 loop 1 2 3 
     for($i=1;$i<=$num_rows_sup;++$i){
        // echo $i."<br>";
         //$x this for the next session to get time in 
         $x=$i+1;
         
         // if num rows != 4 becous we do't need log out to session 0 
        if($x<=$num_rows_sup){
             $query30 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' AND daysession = $i";
             $result30 =$conn->query($query30);
             
             foreach($result30 as $key1=>$value1){
                
             }
            //  echo "<br>";
            //  echo $x;
            //  echo "<br>";

            //  echo $i;
             
             //$x = 1 2 3 but not 4 we do't need time in  for session 0?? yes becous we get the last break out the for loop
             $query31 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' AND daysession = $x";
             $result31 =$conn->query($query31);
            //  var_dump($result31);
 
             foreach($result31 as $key2=>$value2){
               
               
             }
           
                 $timein =$value2['timee'];
                 $timeout =$value1['Eout'];
                 $timeinArray =explode(':',"$timein");
                 $hourin  =$timeinArray['0']*60*60;
                 $minin =$timeinArray['1']*60;
                 $secin =$timeinArray['2'];
                 $totalin =$hourin+$minin+$secin;
                
                 
                 //time out by seconds
                 $timeoutArray =explode(':',"$timeout");
                 $hourout = $timeoutArray['0']*60*60;
                 $minout =$timeoutArray['1']*60;
                 $secout =$timeoutArray['2'];
                 $totalout =$hourout+$minout+$secout;
                 
                 //cal the break time
                 $allBreakSec =$totalin -$totalout;
                 $breakHour = $allBreakSec/(60*60);
                 $countHour = floor($breakHour) ;//countHour
                 
                 $breakminbySec =($allBreakSec-($countHour*60*60));
                 $countMin = floor($breakminbySec/60);//countMin
                 $secHour =$countHour*60*60;
                 $secMin =$countMin*60;
                 // echo "<br>";
                 
                //  echo "<br>";
                 $countSec =$allBreakSec-($secHour+$secMin);//countsec
                 
                 $formatBreak ="$countHour:$countMin:$countSec";
                //  echo $formatBreak;
                 $query36 ="INSERT INTO calBreak( totalBreak,id_employee) VALUES ('$formatBreak',$id) ";
                 $result36 =$conn->query($query36);
                //  $query35 = "UPDATE calBreak SET totalBreak='$formatBreak' WHERE id =3 ";
                 // $result35 =$conn->query($query35);
                 // var_dump($result35);

                //  var_dump($result36);
 
             
            
            }
 
         
 
         
 
        
         // echo $i =$x;
        
 
     }//end for loop
    //  if(true){
    //     exit;
    //  }
    //  echo $i."<br>";
     $beforethelast =--$i;
     $query50 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' AND daysession = $beforethelast";
     $result50 =$conn->query($query50);
     $query51 ="SELECT * FROM login WHERE id_employee = $id AND dayy ='$thDay2' AND daysession = 0";
     $result51 =$conn->query($query51);
     foreach($result50 as $key1=>$value1){  
     }
     foreach($result51 as $key2=>$value2){
     } 
    
     $timein =$value2['timee'];
     $timeout =$value1['Eout'];
     //time in by seconds
     $timeinArray =explode(':',"$timein");
     $hourin  =$timeinArray['0']*60*60;
     $minin =$timeinArray['1']*60;
     $secin =$timeinArray['2'];
     $totalin =$hourin+$minin+$secin;
    //  echo "<br>";
    //  echo "this total second to time in ".$totalin;
    //  echo "<br>";
     
     //time out by seconds
     $timeoutArray =explode(':',"$timeout");
    //  print_r($timeoutArray);
    //  echo "<br>";
     
     $hourout = $timeoutArray['0']*60*60;
     $minout =$timeoutArray['1']*60;
     $secout =$timeoutArray['2'];
     $totalout =$hourout+$minout+$secout;
    //  echo "this total second to time out ".$totalout;
    //  echo "<br>";
     
     //cal the break time
     $allBreakSec =$totalin -$totalout;
     $breakHour = $allBreakSec/(60*60);
     $countHour = floor($breakHour) ;//countHour
     
     $breakminbySec =($allBreakSec-($countHour*60*60));
     $countMin = floor($breakminbySec/60);//countMin
     $secHour =$countHour*60*60;
     $secMin =$countMin*60;
     // echo "<br>";
     
     // echo "<br>";
     $countSec =$allBreakSec-($secHour+$secMin);//countsec
     
     // echo round($breakmin);
     

    //  echo $countHour.':'.$countMin.':'.$countSec;
    //  echo "<br>";
     $formatBreak ="$countHour:$countMin:$countSec";
                 $query36 ="INSERT INTO calBreak( totalBreak,id_employee) VALUES ('$formatBreak',$id)";
                 $result36 =$conn->query($query36);

                 $query35 = "UPDATE calBreak SET totalBreak='$formatBreak' WHERE id =3 ";
                 // $result35 =$conn->query($query35);
                 // var_dump($result35);
                 // var_dump($result36);
                //  echo "<br>";
                //  var_dump($result36);
                //  echo "<br>";
 
                 $query60 = "SELECT * FROM calBreak WHERE id_employee =$id";
                 $result60= $conn->query($query60);
                 $arrayBreak=[];
                 $sectotal=[];
                 foreach($result60 as $key10=>$value10){
                    
                     $totalBreak =$value10['totalBreak'];
                     $totalBreak2 =$value10['totalBreak'];
                 
                     // echo $totalBreak;
                     
                     array_push($arrayBreak,$totalBreak);
                     
                     // $sum =array_sum($arrayBreak);
                     array_push($sectotal,strtotime($totalBreak2));
                     
                     // $array3 =$arrapush =array_push($array,$array2);
                     // echo "<pre>";
                     // print_r($arrayBreak);
                     // print_r($value10['totalBreak']);
                     // echo "</pre>";
                 
                 } 
                 ////////////////////////////////////
                 // echo "<pre>";
                 // print_r($arrayBreak);
                 // echo "</pre>";
                 // echo "<pre>";
                 // print_r($sectotal);/////////////////////////////
                 // echo "</pre>";
                 // echo "<br>";
                 // echo date("Y-m-d H:i:s",$sectotal['0']);
                 // echo "<br>";
                 $thDay2sec = strtotime($thDay2);
                 ///////////////////////////////////
                 //num rows =4 and num break we need to sum is 3 this well be 0 1 2 
                
                     // exit();
                
                     for($n = $key10 ;$n>=0;$n--){
                         // echo "///////////////+++++++++++++++++++++++?????????";
                         //sec 
                         // echo $n;
                         // echo "<br>";
                        $newvalue[]= $sectotal["$n"]-$thDay2sec;
                         // echo "<pre>";
                         // print_r($sectotal);
                         // echo "</pre>";
                       
                         
                         // if($n!=0&& $y!=-1){
                         
                         
                         //     $sectotal["$n"] +=$sectotal["$y"];
                         //     $data = date("H:i:s",$sectotal["$n"]);
                         //     // echo $data;
                         // }
                         
                         
                         // echo "$n";
                     }
                
                 if($num_rows==1){
                     exit();
                 }else{
                    //  echo "<pre>";
                     // print_r($newvalue);
                    //  echo "</pre>";
                     $theSum =array_sum($newvalue);
                    //  echo "<br>";
                    //  echo $theSum;
                    //  echo "<br>";
                    echo "<b>";
                    echo date("H:i:s",$theSum-(60*60));
                    echo "</b>";
                    
                 }
                 
 

}



