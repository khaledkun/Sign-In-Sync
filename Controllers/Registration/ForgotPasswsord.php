<?php
session_start ();
    if(isset($_POST["email"])){
        include('../Templates/SharedConfig.php');
        include($ConnectContrl);
        $email = $_POST["email"];

        $sql = mysqli_query($conn, "SELECT * FROM employee WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_array($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
                window.location.replace("<?php echo $ForgetPassView; ?>");				
            </script>
            <?php
        }else{
            $token = bin2hex(random_bytes(50));

            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;			
			$URL=$_SERVER['HTTP_HOST'];
            require "PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // h-hotel account
            $mail->Username='boooodyomar2@gmail.com';
            $mail->Password='bzmowsjcmervpeyx';
            // send by h-hotel email
            $mail->setFrom('boooodyomar2@gmail.com', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear $fetch[1]</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://$URL/$NewPassView?token=$token
            <br><br>
            <p>With regrads,</p>";
            // نحط التوكين فالداتا بيز عشان نقارنها لما اليوزر يدخل علي اللينك
			$sql = mysqli_query($conn, "UPDATE employee set token = '$token' WHERE email='$email'"); 

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo " Invalid Email1 "?>");
                        window.location.replace("<?php echo $ForgetPassView; ?>");
						
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("<?php echo "  Email sent "?>");
                        window.location.replace("<?php echo $LoginView; ?>");
                    </script>
                <?php
            }
        }
    }
?>

