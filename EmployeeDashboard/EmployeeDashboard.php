<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="text.css">
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Employee Dashboard";
    // Include the Template
    include '../Shared/Templates/MetaTags.php';    
    ?>
    <link rel="stylesheet" href="<?php echo $DashboardPath; ?>">
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include '../Shared/NavBar/EmpDashNavFooter.php'; ?>
    <div class="dashboard">
        <div class="header">
            <div class="header-text">
                <h1 id="welcomeMessage"><i class="fas fa-handshake"></i> Welcome, <span id="employeeName">Employee</span></h1>
            </div>
            <div class="date-section">
                <p class="current-date"><i class="far fa-calendar-alt"></i> April 6, 2024</p>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item sign-in-time">
                <i class="fas fa-sign-in-alt"></i>
                <h2>Sign In Time</h2>
                <div id="timecontainer">
            <div id="timedisplay">00:00:00</div>
            <button id="startbutton" class="timer-button"><i class="fas fa-play"></i></button>
            <button id="pausebutton" class="timer-button"><i class="fas fa-pause"></i></button>
            <button id="resetbutton" class="timer-button"><i class="fas fa-stop"></i></button>
            </div>
            </div>
            <div class="grid-item">
                <i class="fas fa-clock"></i>
                <h2>Late Arrival</h2>
                <p id="late-time">0 hours</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-calendar-day"></i>
                <h2>Days Late</h2>
                <p id="days-late">0 days</p>
            </div>
            <div class="grid-item">
                <i class="far fa-calendar-times"></i>
                <h2>Absent Days</h2>
                <p id="absent-days">0 days</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-coins"></i>
                <h2>Pay Levy</h2>
                <p id="pay-levy">0 EGP</p>
            </div>
            <div class="grid-item holidays">
                <i class="fas fa-calendar-alt"></i>
                <h2>Next Holidays</h2>
                <p id="next-holidays">No holidays</p>
            </div>
            <div class="grid-item boss-comments" style="grid-column: span 1; grid-row: span 2;">
                <i class="fas fa-comments"></i>
                <h2>Boss Comments</h2>
                <p id="boss-comments">None</p>
                <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="grid-item">
                <i class="fas fa-money-bill-alt"></i>
                <h2>Total Paycheck</h2>
                <p id="total-paycheck">0 EGP</p>
            </div>
            <div class="grid-item alerts">
                <i class="fas fa-exclamation-triangle"></i>
                <h2>Alerts</h2>
                <p id="alerts">No alerts</p>
            </div>
        </div>
    </div>
    <script src="text.js"></script>
</body>
</html>