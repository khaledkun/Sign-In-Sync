<?php




//-----------------

session_start();
				

				if (!isset($_SESSION['id'])) {
					header('location:login.php');
					exit();
					
				}



				require '../../Controllers/Registration/connect.php';
				$id = $_SESSION['id'];
				$query="SELECT * FROM employee WHERE id ='$id'";
				$result = $conn->query($query);
				$user =$result->fetch_assoc();
				$username=$user['username'];
				// $privliges =$user['priv'];

echo "<h1>index</h1>";






// var_dump($resulte);
print_r($user);
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Index";
    // Include the Template
    include '../../Templates/MetaTags.php'; 
    ?>
</head>
<body>
	<br>

<a href="../../Controllers/Registration/logout.php">logout</a>
</body>
</html>