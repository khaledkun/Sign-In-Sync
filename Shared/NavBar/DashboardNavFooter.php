<!DOCTYPE html>
<html>
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "DashboardNavFooter";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    include '../Shared/Templates/DashboardNavFooter.php'; 
    ?>
</head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="<?php echo $logoIcoPath; ?>" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="Boss-Dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Statistics.php"><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="Boss-Settings.php"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>
</body>
</html>