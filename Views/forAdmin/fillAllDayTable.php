<?php
include "../../Controllers/Registration/connect.php";
$query3= "DELETE  FROM allday WHERE 0=0";
$delete =true;
$insert =true;
if($delete == true){
  $result3 =$conn->query($query3);
  var_dump($result3);
}
$currentDay = date("Y-m-d",time());

$dayBySecends = (60*60*24);
// echo date('Y-m-d h:i:s',$dayBySecends);
if($insert){
  
  $countDay =30;
  for($i=0;$i<30;++$i){
    // echo $i;
  
    $Daybysecend = time()+($dayBySecends*$i);
    $Dayss = date("Y-m-d",$Daybysecend);
    $query2 ="INSERT INTO allday (dayy, typee) VALUES ('$Dayss',1)";
  
    $result2 =$conn->query($query2);
    var_dump($result2);
    // echo date("  Y-m-d",$Daybysecend)."<br>";
  
  }
}
    
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="controlDay.php" method="POST">
  <h1>chose holiday days</h1>
  <?php
  for($x=0;$x<30;++$x){
    $Daybysecend = time()+($dayBySecends*$x);
    $Dayss = date("Y-m-d",$Daybysecend);
    ?>
 <h3>'(<?=$Dayss?>)'</h3>

  <input type="radio" id="check" name="typeDay<?=$x?>" value="0" required>
  <label for="check">holiday</label>
  <br>
  <input type="radio" id="check" name="typeDay<?=$x?>" value="1" required checked>
  <label for="check">workday</label>
  <br>
  <?php



  }
  ?>
  <input type="submit">
</form>
</body>
</html>




