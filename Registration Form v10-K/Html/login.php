<?php
  session_start();

if (isset($_SESSION['id'])) {

  header('location:index.php');
  exit();
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Sign In</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../CSS/Login.css" />
      <link rel="stylesheet" href="../CSS/Main-Style.css">
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
      <!-- Unicons CSS -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
      <script src="script.js" defer></script>
    </head>
    <body>  
      <!-- ده بمعني ابسط  ايطار نضع فيه كل بيانات -->
      <div class="wrapper">
        <form method="post" action="../function/login.php" novalidate>
          <h1>Login</h1> 
              <!-- ده كلاس للبيانات المدخله -->
              <div class="input-box">
                <label for="email">Email or phone number<input type="text" placeholder="Email or phone number" name="email" required></label>
                <img class="user-img" src="../Imgs/user.svg" alt="user-icon">
                <label for="password">Password<input type="password" placeholder="Enter your password" name="password" required></label>    
                <img class="lock-img" src="../Imgs/lock.svg" alt="lock-icon for the password">
              </div>

              <div class="remember-forget">
                <label><input type="checkbox" id="rememberMe"> Remember me</label>
                <a href="ForgotPasswsord.html">Forgot Password?</a>
              </div>

          <input type="submit" value="login" class="btn">

          <div class="register-link">
          <p>Don't have an account yet <a href="SignUp.html">Register</a>
          </p></div>
        </form>
      </div>
    </body>
</html>