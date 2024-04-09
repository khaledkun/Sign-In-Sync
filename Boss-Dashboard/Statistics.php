<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Boss Settings";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    include '../Shared/Templates/BossDashboard.php'; 
    ?>
    </head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="../Shared/Templates/Logo.ico" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
        <li><a href="Boss-Dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="Statistics.html" class="active"><i class="fas fa-chart-bar"></i> Statistics</a></li>
        <li><a href="Boss-Settings.html"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="../Dashboard/Html/login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
     </div>
    </div>
    <div class="dashboard">
        <div class="header">
            <h1><i class="fas fa-chart-bar"></i> Statistics</h1>
        </div>
        <ul class="custom-list">
            <li><a href='#'><span>Today</span></a></li>
            <li><a href='#'><span>Yesterday</span></a></li>
            <li><a href='#'><span>Last Week</span></a></li>
            <li><a href='#'><span>This Month</span></a></li>
            <li><a href='#'><span>Last Month</span></a></li>
        </ul>
        <div class="grid-container">
            <div class="grid-item sign-in-time">
                <i class="fas fa-user-clock"></i>
                <h2>Currently Working Employees</h2>
                <p id="sign-in-time">0 employees</p>
            </div>
            <div class="grid-item sign-out-time">
                <i class="fas fa-hourglass-end"></i>
                <h2>Late Employees</h2>
                <p id="sign-out-time">0 employees</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-clock"></i>
                <h2>Absent Employees</h2>
                <p id="late-time">0 employees</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-coins"></i>
                <h2>Total Pay Levies</h2>
                <p id="days-late">0 EGP</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-exclamation-triangle"></i>
                <h2>Total Alerts</h2>
                <p id="absent-days">0 alerts</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-comments"></i>
                <h2>Total Comments</h2>
                <p id="absent-days">0 comments</p>
            </div>
        </div>
    </div>
</body>
</html>