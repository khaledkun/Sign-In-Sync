<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Change Password";
    // Include the Template
    include '../../Templates/MetaTags.php';
    ?>
    <link rel="stylesheet" href="<?php echo $ForgotPasswsordPath; ?>">
    <link rel="stylesheet" href="<?php echo $MainStylePath; ?>">
</head>
<body>
  <div class="wrapper">
    <h1>Reset Your Password</h1>
    <p>Enter new Password To Restore Your Account</p>
        <form method="post" action="<?php echo $NewPassContrl; ?>" novalidate>
      <div class="input-box">
        <label for="password"><b>New Password</b></label>
      <?php if(isset($_GET["token"])): ?>
    <input type="hidden" id="token" name="token" value="<?php echo $_GET["token"];?>">
      <?php endif; ?>
        <input type="password" id="password" name="password" placeholder="Enter Your new Password" required>
        <img class="lock-img" src="<?php echo $Eye; ?>" onclick="togglePasswordVisibility()" alt="eye-icon for the password">
      </div>
      <button type="submit" class="sendcode">Change Password</button>
    </form>
  </div>
  <script>
      function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var eyeIcon = document.querySelector('.lock-img');
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          eyeIcon.src = '<?php echo $EyeSlash; ?>';
        } else {
          passwordField.type = 'password';
          eyeIcon.src = '<?php echo $Eye; ?>'; 
        }
      }
    </script>
</body>
</html>