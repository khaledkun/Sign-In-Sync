<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Change Password";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    ?>
    <link rel="stylesheet" href="<?php echo $ForgotPasswsordPath; ?>">
    <link rel="stylesheet" href="<?php echo $MainStylePath; ?>">
</head>
<body>
  <div class="wrapper">
    <h1>Reset Your Password</h1>
    <p>Enter new Password To Restore Your Account</p>
        <form method="post" action="../function/NewPassword.php" novalidate>
      <div class="input-box">
        <label for="password"><b>New Password</b></label>
		<input type="hidden" id="token" name="token" value="<?php echo $_GET["token"]?>">		
        <input type="password" id="password" name="password" placeholder="Enter Your new Password" required>
      </div>
      <button type="submit" class="sendcode">Change Password</button>
    </form>
  </div>
</body>
</html>