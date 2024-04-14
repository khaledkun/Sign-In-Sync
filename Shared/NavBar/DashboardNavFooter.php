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
<div class="menu-icon">
        <i class="fas fa-bars"></i>
    </div>
    <div class="navbar">
        <div class="logo-container">
            <img src="<?php echo $logoIcoPath; ?>" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="BossDashboard.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossDashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="BossStatistics.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossStatistics.php" ? 'class="active"' : ''; ?>><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="BossSettings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <!-- للدارك مود -->
        <div class="mode-toggle">
            <button id="dark-mode-btn"><i class="fas fa-moon"></i></button>
            <button id="light-mode-btn"><i class="fas fa-sun"></i></button>
        </div>
        <!--  -->
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuIcon = document.querySelector('.menu-icon');
            const navbar = document.querySelector('.navbar');
            let navbarVisible = true;
            menuIcon.addEventListener('click', function() {
                navbarVisible = !navbarVisible;
                navbar.style.display = navbarVisible ? 'block' : 'none';
                menuIcon.innerHTML = navbarVisible ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
            });
            window.addEventListener('resize', function() {
                if (window.innerWidth <= 750) {
                    navbar.style.display = 'none';
                    navbarVisible = false;
                    menuIcon.innerHTML = '<i class="fas fa-bars"></i>';
                } else {
                    navbar.style.display = 'block';
                    navbarVisible = true;
                    menuIcon.innerHTML = '<i class="fas fa-times"></i>';
                }
            });
            if (window.innerWidth <= 750) {
                navbar.style.display = 'none';
                navbarVisible = false;
                menuIcon.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });
    </script>
</body>
</html>