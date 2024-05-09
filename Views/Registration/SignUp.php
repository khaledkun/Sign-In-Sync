<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Sign Up";
    // Include the Template
    include '../../Templates/MetaTags.php';
    ?>
</head>
<link rel="stylesheet" href="<?php echo $SignUpPath; ?>">
<link rel="stylesheet" href="<?php echo $MainStylePath; ?>">
<link rel="stylesheet" href="<?php echo $PrivacyPopUpPath; ?>">
<!-- لربط أعلام الدول بكل رقم للدوله -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <!-- سكربت رقم التليفون الدولي -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<body>
  <div class="wrapper">
    <h1>Sign Up</h1>
    <form method="post" action="../Controllers/signup.php">
      <div class="user-details">
        <div class="input-box">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
        </div>
        <div class="input-box">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
        </div>
        <div class="input-box">
          <label for="password">Password</label>
          <input type="password" onChange="onChange()" id="password" pattern="^(?=.*[A-Z])(?=.*[!@#$%^&*_])(?=.{8,}).*$" title="Password must contain at least one uppercase letter, one special character (!@#$%^&*_), and be at least 8 characters long." name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-box">
          <label for="password2">Confirm Password</label>
          <input type="password" onChange="onChange()" id="password2" name="password2" placeholder="Confirm your password" required>
        </div>
        <div class="input-box">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email address" pattern=".+@(gmail\.com|hotmail\.com|yahoo\.com)" required>
        </div>
        <div class="container">
            <form id="login" onsubmit="process(event)">
              <label for="phone">Phone Number</label>
              <input id="phone" pattern="[0]{1}[1]{1}[0125]{1}[0-9]{8}" title="Please enter valid phone number" type="text" name="phone" required/>
      </div>
      <div class="input-box" id="age-input-box">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" min="18" max="50" required>
      </div>
      <div class="list-box2">
      <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="male" selected>&#xf222; Male</option>
          <option value="female">&#xf221; Female</option>
       </select>
      </div>
      <div class="list-box">
        <h2>Sign as:</h2>
        <select id="position" name="position">
          <option value="manager">&#xf502; Admin</option>
          <option value="value3" selected>&#xf007; Employee</option>
          <option value="value2">&#xf508; Manager</option>
          <option value="value4">&#xf505; Supervisor</option>
       </select>
      </div>
      <label for="terms-and-conditions">
        <input type="checkbox" id="terms-and-conditions" class="inline" required> I accept the <a href="#" class="privacy-Page">Terms and Conditions</a>
      </label>
      <button type="submit" class="registerbtn">Sign Up</button>
      <p class="or">Or</p>
      <a href="login.php" class="signbtn">Sign In</a>
    </form>
  </div>

  <div id="terms-popup" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Terms and Conditions</h2>
      <p style="line-height: 1;">
        <strong>Information we collect:</strong>
        <br>
        Contact and account data: When you and your employees register on our website for the first time and if you modify the data again.
        <br>
        Application data: When you or any of your employees visit our website or through the application, we usually collect your contact information such as (name, email, phone number) and any other information you shared with us.
        This also applies to the free trial.
        <br>
        <br>
        <strong>How we use the information you provide,Contact and account data:</strong><br>
         We use your contact information so that we can provide our services, meet your requests, billing, and manage the account related to employees, and this also in the case of hiring a team from the company to operate the application and provide the monthly report to the purchasing company. We may also use this information for marketing or communication purposes, and you can stop it at any time. We also use this data so that we can analyze service trends.
        <br>
        If you register to participate in an event on our website or application, we may transmit your name, email address, phone number and company name to the organizer or sponsors of the selected event for marketing purposes. 
        <br>
        <br><strong>Client database:</strong><br> We collect and process this data on your behalf so that we can perform services related to recording the attendance and absence of your employees. This data is recorded either by collecting and entering it through us or through the employees’ login.
        <br>
        <br>
        <strong>Access, update, or delete personal informationContact and account data:</strong><br> You certainly have access to the personal data you previously provided to log in for the first time and update it. You can do this at any time by connecting to your personal account atSIS. If you want to permanently delete your account or personal information for a valid reason, please contact us to request that. If you encounter any problem, we will take all measures to permanently delete your account unless we want to keep it for legal reasons.
        This also applies to the free trial session.
        <br>
        <br>
        <strong>Protection policy:</strong> 
        <br>
        Given the importance and sensitivity of personal information to the company and its employees, we take a large number of security precautions to ensure that this information is processed, stored, and kept securely from loss and unauthorized access.
        <br>
        You can also create your own database on your personal server if you want to ensure greater protection.
        <br>
        <br>
        <strong>Data privacy policy:</strong>
        <br>
        Data retention
        <br>
        <br><br><strong>Contact and account data:</strong><br>This data will be retained only when necessary, and for the purpose for which it was collected, as described in this policy, including the statutory retention period, or the period used for promotion.
        <br>
        <br><strong>Application data:</strong><br>If we do not hire you, we may keep the information you provide for up to a year, so that we can contact you again if there is anything new.
        <br>
        <br><strong>Browser data:</strong><br>We may retain this data for a maximum period of 6 months, unless we need to retain it for security reasons.
        <br>
        <br><strong>Customer database:</strong><br> We will keep this data if necessary, to be able to provide the services that you have seen due to our need for it so that it can reach your employees easily. Also, your database is kept up to 3 months after the last use, and it can be deleted at the request of the responsible manager. Data may be retained for legal reasons.
    </p>        
    </div>
  </div>
  <footer>
    <!-- جعل الأسكربت يبدأ بدولة مصر بدل من أمريكا -->
    <script>
      const phoneInputField = document.querySelector("#phone");
      const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
          preferredCountries: ["eg"]
      });
    </script>
    <script src="/Controllers/PopUpPage.js"></script>
  </footer>
  <script>
    function onChange() {
  const password = document.querySelector('input[name=password]');
  const confirm = document.querySelector('input[name=password2]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}
</script>
</body>
</html>
