<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../CSS/ForgotPasswsord.css">
    <link rel="stylesheet" href="../CSS/Main-Style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="script.js" defer></script>
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