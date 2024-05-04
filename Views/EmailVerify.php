<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Verify your Email Address";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    ?>
    <link rel="stylesheet" href="<?php echo $ForgotPasswsordPath; ?>">
    <link rel="stylesheet" href="<?php echo $MainStylePath; ?>">
</head>
</head>
<body>
  <div class="wrapper">
    <h1>Verify Your Email Address</h1>
    <p>Enter Your Confirmation Code To Create Your Account</p>
        <form method="post" action="../Controllers/EmailVerify.php" novalidate>
      <div class="input-box">
        <label for="email"><b>Confirmation Code</b></label>
        <input type="text" id="email" name="email" placeholder="Enter Your Confirmation Code" required>
      </div>
      <button type="submit" class="sendcode">Verify Your Email Address</button>
    </form>
  </div>
</body>
</html>