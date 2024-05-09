<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Employees Statistics";
    // Include the Template
    include '../../Templates/MetaTags.php'; 
    ?>
    <link rel="stylesheet" href="<?php echo $StatisticsPath; ?>">
    </head>
<body>
<!-- Here was the Navbar -->
    <!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <div class="dashboard">
        <div class="header">
            <h1><i class="fas fa-chart-bar"></i> Employees Statistics</h1>
        </div>
        <ul class="custom-list">
            <li><a href='#'><span>Today</span></a></li>
            <li><a href='#'><span>Yesterday</span></a></li>
            <li><a href='#'><span>Last Week</span></a></li>
            <li><a href='#'><span>This Month</span></a></li>
            <li><a href='#'><span>Last Month</span></a></li>
        </ul>
        <div class="grid-container">
            <div class="grid-item currently-working-employees">
                <i class="fas fa-user-clock"></i>
                <h2>Currently Working Employees</h2>
                <p id="currently-working-employees">0 employees</p>
            </div>
            <div class="grid-item late-employees">
                <i class="fas fa-hourglass-end"></i>
                <h2>Late Employees</h2>
                <p id="late-employees">0 employees</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-clock"></i>
                <h2>Absent Employees</h2>
                <p id="absent-employees">0 employees</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-coins"></i>
                <h2>Total Pay Levies</h2>
                <p id="total-pay-levies">0 EGP</p>
            </div>
            <div class="grid-item alerts">
                <i class="fas fa-exclamation-triangle"></i>
                <h2>Total Alerts</h2>
                <p id="total-alerts">0 alerts</p>
            </div>
            <div class="grid-item boss-comments">
                <i class="fas fa-comments"></i>
                <h2>Total Comments</h2>
                <p id="total-comments">0 comments</p>
            </div>
        </div>
    </div>
</body>
</html>