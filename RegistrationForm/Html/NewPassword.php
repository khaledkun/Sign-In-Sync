<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../CSS/ForgotPasswsord.css">
    <link rel="stylesheet" href="../CSS/Main-Style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="script.js" defer></script>
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