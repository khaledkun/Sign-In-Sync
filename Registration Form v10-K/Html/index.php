<?php




//-----------------

session_start();
				

				if (!isset($_SESSION['id'])) {
					header('location:login.php');
					exit();
					
				}



				require '../function/connect.php';
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
</head>
<body>
	<br>

<a href="../function/logout.php">logout</a>
</body>
</html>