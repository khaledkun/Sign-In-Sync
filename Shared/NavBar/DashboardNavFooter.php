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
            <li><a href="Boss-Dashboard.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Boss-Dashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Statistics.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Statistics.php" ? 'class="active"' : ''; ?>><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="Boss-Settings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "Boss-Settings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
    console.log("DOM loaded");
    var currentLocation = window.location.pathname;
    console.log("Current location:", currentLocation);

    var navLinks = document.querySelectorAll(".navbar ul li a");

    navLinks.forEach(function(link) {
        console.log("Link:", link.getAttribute("href"));
        if (link.getAttribute("href") === currentLocation) {
            console.log("Match found!");
            link.classList.add("active");
        }
    });
});

    </script>
</body>
</html>