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
        <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Sign In";
        // Include the Template
        include '../../Shared/Templates/MetaTags.php'; 
        include '../../Shared/Templates/LogIn.php'; 
        ?>
    </head>
    <body>  
      <!-- ده بمعني ابسط  ايطار نضع فيه كل بيانات -->
      <div class="wrapper">
        <form method="post" action="../function/login.php" novalidate>
          <h1>Login</h1> 
              <!-- ده كلاس للبيانات المدخله -->
              <div class="input-box">
                <label for="email">Email or phone number<input type="text" placeholder="Email or phone number" name="email" required></label>
                <img class="user-img" src="<?php echo $user2Path; ?>" alt="user-icon">
                <label for="password">Password<input type="password" placeholder="Enter your password" name="password" required></label>    
                <img class="lock-img" src="../../Shared/Imgs/lock.svg" alt="lock-icon for the password">
              </div>

              <div class="remember-forget">
                <label><input type="checkbox" id="rememberMe"> Remember me</label>
                <a href="ForgotPasswsord.php">Forgot Password?</a>
              </div>

          <input type="submit" value="login" class="btn">

          <div class="register-link">
          <p>Don't have an account yet <a href="SignUp.php">Register</a>
          </p></div>
        </form>
      </div>
    </body>
</html>