<?php
include "../../Controllers/Registration/connect.php";




echo "<pre>";
print_r($_POST);
echo "</pre>";

$currentDay = date("Y-m-d",time());

$dayBySecends = (60*60*24);

for($z=0;$z<30;++$z){
  // echo $i;

  $Daybysecend = time()+($dayBySecends*$z);
  $Dayss = date("Y-m-d",$Daybysecend);
  $typeDay =$_POST["typeDay$z"];

  $query5 ="UPDATE allday SET typee= $typeDay WHERE dayy ='$Dayss'";
  $result =$conn->query($query5);

  // $query2 ="INSERT INTO allday (dayy, typee) VALUES ('$Dayss',1)";

  // $result2 =$conn->query($query2);
  // var_dump($result2);
  // echo date("  Y-m-d",$Daybysecend)."<br>";

}


//  if($_SERVER['REQUEST_METHOD']=='POST'){
//     print_r($_POST);
//     $countHoli = count($_POST);
//     for($z=1;$z<=30;++$z){
//       if(in_array($_POST["typeDay$z"],$_POST)){
//       $typeDay =$_POST["typeDay$z"];
      
//       $query5 ="UPDATE allday SET typee= $typeDay WHERE dayy ='$DayHoli'";
//       $result =$conn->query($query5);
//       echo "<br>";
//       }
      
//     }
    
//   }
// $array = [1,3];
// echo in_array(4,$array);