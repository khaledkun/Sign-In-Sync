<!DOCTYPE html>
<html>
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "DashboardNavFooter";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    ?>
</head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="<?php echo $logoIcoPath; ?>" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="Employee-Dashboard.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Employee-Dashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Profile.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Profile.php" ? 'class="active"' : ''; ?>><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="Employee-Settings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Employee-Settings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>
</body>
</html>