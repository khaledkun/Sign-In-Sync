<?php
session_start();
$id = $_SESSION['id'];
include 'connect.php';
echo "hi nada let's do the best"."<br>";

 date_default_timezone_set('Asia/Riyadh');
		$date = date('Y-m-d',time());
		$time = date('H:i:s',time());
        $query2 ="SELECT * FROM login WHERE  dayy = '$date' AND id_employee = '$id'";
        $result2 = $conn-> query($query2);

        // var_dump($result2);
        
        $session = $result2->num_rows;
        echo $session;
        // foreach($result2 as $key=>$value){
        //     echo "<pre>";
        //     echo count()
        //     print_r(var_dump($value['Eout']));
        //     echo "</pre>"; 
        // }
        // $query3 = "UPDATE login SET daysession = $session WHERE daysession= 0 ";
        $query3 = "UPDATE login SET daysession = $session WHERE id_employee = $id AND Eout  IS NULL ";
        $result3 =$conn->query($query3);
        var_dump($result3);

		$query1 ="UPDATE login SET Eout = '$time' WHERE id_employee = $id AND Eout  IS NULL";
        $result = $conn->query($query1);
        

        // echo "<pre>";

        // var_dump($result);
        // echo "</pre>";
        
		// $result1 =$conn->query($query1);
        // echo $time;

header('location:logout.php');
exit();