<!DOCTYPE html>
<html>
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "DashboardNavFooter";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    ?>
    <link rel="stylesheet" href="<?php echo $DashboardNavFooterPath; ?>">
</head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="<?php echo $logoIcoPath; ?>" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="BossDashboard.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossDashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Statistics.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Statistics.php" ? 'class="active"' : ''; ?>><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="BossSettings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>
</body>
</html>