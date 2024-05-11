<!DOCTYPE html>
<html>
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "DashboardNavFooter";
    // Include the Template
    include '../../Templates/MetaTags.php'; ?>
    <link rel="stylesheet" href="<?php echo $DashboardNavFooterPath; ?>">
    <link rel="stylesheet" href="<?php echo $DarkDashPath; ?>">
    <link rel="stylesheet" href="<?php echo $LightDashPath; ?>">
    <script src="<?php echo $DashLayout; ?>"></script>
    <script src="<?php echo $SwitchColors; ?>"></script>
</head>
<body>
<div class="menu-icon">
        <i class="fas fa-bars"></i>
    </div>
    <div class="navbar">
        <div class="logo-container">
        <a href="HomePage.php" target="_blank" <?php echo basename($_SERVER['SCRIPT_NAME']) == "HomePage.php" ? 'class="active"' : ''; ?>>
        <img src="<?php echo $navBarLogoPath; ?>" alt="WebSiteLogo" class="NavBarLogo" id="Home"/>
            <span class="logo-text">Sign In Sync</span></a>
        </div>
        <ul>
           <li><a href="MyDashboard.php" id="MyDashboard" <?php echo basename($_SERVER['SCRIPT_NAME']) == "MyDashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> My Dashboard</a></li>
            <li><a href="MyProfile.php" id="MyProfile" <?php echo basename($_SERVER['SCRIPT_NAME']) == "MyProfile.php" ? 'class="active"' : ''; ?>><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="GeneralSettings.php" id="GeneralSettings" <?php echo basename($_SERVER['SCRIPT_NAME']) == "GeneralSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> General Settings</a></li>
            <li><a href="MyEmployees.php" id="MyEmployees" <?php echo basename($_SERVER['SCRIPT_NAME']) == "MyEmployees.php" ? 'class="active"' : ''; ?>><i class="fas fa-user-tie"></i> My Employees</a></li>
            <li><a href="EmployeesStatistics.php" id="EmployeesStatistics" <?php echo basename($_SERVER['SCRIPT_NAME']) == "EmployeesStatistics.php" ? 'class="active"' : ''; ?>><i class="fas fa-chart-bar"></i> Employees Statistics</a></li>
            <li><a href="EmployeesSettings.php" id="EmployeesSettings" <?php echo basename($_SERVER['SCRIPT_NAME']) == "EmployeesSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-user-cog"></i> Employees Settings</a></li>
            <li><a href="../../Controllers/Registration/logout.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <!-- للدارك مود -->
        <div class="mode-toggle">
            <button id="dark-mode-btn" title="Dark Mode"><i class="fas fa-moon"></i></button>
            <button id="light-mode-btn" title="Light Mode"><i class="fas fa-sun"></i></button>
        </div>
        <!--  -->
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>
</body>
</html>