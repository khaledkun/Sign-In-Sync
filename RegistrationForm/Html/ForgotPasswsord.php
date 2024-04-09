<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "ForgetPassword";
    // Include the Template
    include '../../Shared/Templates/MetaTags.php'; 
    include '../../Shared/Templates/ForgetPassword.php'; 
    ?>
</head>
</head>
<body>
  <div class="wrapper">
    <h1>Forgot Your Password</h1>
    <p>Enter your email To Restore Your Account</p>
        <form method="post" action="../function/ForgotPasswsord.php" novalidate>
      <div class="input-box">
        <label for="email"><b>Email Address</b></label>
        <input type="text" id="email" name="email" placeholder="Enter Your Email Address" required>
      </div>
      <button type="submit" class="sendcode">Send Me Restore Link</button>
    </form>
  </div>
</body>
</html>