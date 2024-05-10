<?php
  session_start();


  if (isset($_SESSION['id'])) {
    $id =$_SESSION['id'];
    include '../../Templates/SharedConfig.php';
    include $ConnectContrl;
    $query1 ="SELECT * FROM employee WHERE id ='$id'";
    $result1=$conn->query($query1);
    $userdata1 =$result1->fetch_assoc();
    



   
    if ($result1-> num_rows > 0 && $userdata1['prive']==0) {
    
  
    header('Location: ' . $MydashboardView);
    exit();
  
}elseif($result1-> num_rows > 0 && $userdata1['prive']==1){
  
  header('Location: ' . $MyEmpView);
  exit();


 
}
  
}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Sign In";
        // Include the Template
        include '../../Templates/MetaTags.php';
        ?>
      <link rel="stylesheet" href="<?php echo $LoginPath; ?>">
      <link rel="stylesheet" href="<?php echo $MainStylePath; ?>">
    </head>
    <body>  
      <!-- ده بمعني ابسط  ايطار نضع فيه كل بيانات -->
      <div class="wrapper">
        <form method="post" action="<?php echo $loginContrl; ?>">
          <h1>Login</h1> 
              <!-- ده كلاس للبيانات المدخله -->
              <div class="input-box">
              <label for="email">Email<input type="email" placeholder="Email" name="email" required></label>
                <img class="user-img" src="<?php echo $user1Path; ?>" alt="user-icon">
                <label for="password">Password<input type="password"  minlength="6" placeholder="Enter your password" name="password" required></label>    
                <img class="lock-img" src="<?php echo $lockPath; ?>" alt="lock-icon for the password">
              </div>

              <div class="remember-forget">
                <label><input type="checkbox" id="rememberMe"> Remember me</label>
                <a href="<?php echo $ForgetPassView; ?>">Forgot Password?</a>
              </div>

            <button class="btn" type="submit">Login</button>

          <div class="register-link">
          <p>Don't have an account yet <a href="<?php echo $SignUpView; ?>">Register</a>
          </p></div>
        </form>
      </div>
    </body>
</html>