<?php
session_start ();
    if(isset($_POST["password"]) && isset($_POST["token"])){
        include('connect.php');
        $token = $_POST["token"];
        $password = $_POST["password"];
        $sql = mysqli_query($conn, "SELECT * FROM employee WHERE token = '$token'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, link expired "?>");
                window.location.replace("../../Views/Registration/ForgotPasswsord.php");				
            </script>
            <?php
        }else{
			$sql = mysqli_query($conn, "UPDATE employee set password = '$password', token='' WHERE token = '$token'");
                ?>
                    <script>
                        alert("<?php echo "  Password changed successfully "?>");
                        window.location.replace("../../Views/Registration/login.php");
                    </script>
                <?php
        }
    }
    if(isset($_GET["token"])){

?>
<?php
	}else{
		                ?>
                    <script>
                        alert("No Token");
                        window.location.replace("../../Views/Registration/ForgotPasswsord.php");						
                    </script>
					<?php
	}
?>