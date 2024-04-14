<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "NavBar";
        // Include the Template
        include '../Shared/Templates/MetaTags.php';  
        ?>
<link rel="stylesheet" href="<?php echo $NavBarPath; ?>">
<script type="text/javascript" src="/Shared/NavBar/NavBar.js"></script>
</head>
<body>
    <nav>
        <div class="nav__content">
            <div class="LogoWithText">
            <img src="<?php echo $navBarLogoPath; ?>" alt="WebSiteLogo" class="NavBarLogo" id="Home"/>
            <div class="logo">
                <a id="#Home">Sign In Sync</a>
            </div>
            </div>
            <label for="check" class="checkbox"><i class="ri-menu-line"></i></label>
            <input type="checkbox" name="check" id="check">
            <ul>
            <li><a href="<?php echo basename($_SERVER['SCRIPT_NAME']) == "HomePage.php" ? '#Main' : 'HomePage.php'; ?>" <?php echo basename($_SERVER['SCRIPT_NAME']) == "HomePage.php" ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#About">About Us</a></li>
                <li><a href="#Contact">Contact Us</a></li>
                <div class="action__btns">
                    <a href="/Views/SignUp.php"><button class="Signup">Start a Free Trial</button></a>
                    <a href="/Views/login.php"><button class="Signin">Buy Now</button></a>
                </div>
            </ul>
        </div>
    </nav>
</body>
</html>