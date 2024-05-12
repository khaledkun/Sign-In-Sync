<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Employee Dashboard";
    // Include the Template
    include '../Shared/Templates/MetaTags.php';?>
    <link rel="stylesheet" href="/Shared/Css/Dashboard-Test.css">
    <link rel="stylesheet" href="/Shared/Css/StopWatch-Test.css">
    <script src="/Controllers/StopWatch.js"></script>
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <div class="dashboard">
        <div class="header">
            <div class="header-text">
                <h1 id="welcomeMessage"><i class="fas fa-handshake Icons"></i> Welcome, <span id="employeeName">Employee</span></h1>
            </div>
            <div class="date-section">
                <p class="current-date"><i class="far fa-calendar-alt Icons"></i> April 6, 2024</p>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item sign-in-time">
                <i class="fas fa-sign-in-alt Icons"></i>
                <h2>Sign In Time</h2>
                <div id="timecontainer">
            <div id="timedisplay">00:00:00</div>
            <button id="startbutton" class="timer-button"><i class="fas fa-play Icons"></i></button>
            <button id="pausebutton" class="timer-button"><i class="fas fa-pause Icons"></i></button>
            <button id="resetbutton" class="timer-button"><i class="fas fa-stop Icons"></i></button>
            </div>
            </div>
            <div class="grid-item">
                <i class="fas fa-clock Icons"></i>
                <h2>Late Arrival</h2>
                <p id="late-time">0 hours</p>
            </div>
            <div class="grid-item">
                <i class="fas fa-calendar-day Icons"></i>
                <h2>Days Late</h2>
                <p id="days-late">0 days</p>
            </div>
            <div class="grid-item">
                <i class="far fa-calendar-times Icons"></i>
                <h2>Absent Days</h2>
                <p id="absent-days">0 days</p>
            </div>
            <div class="grid-item">
            <i class="fas fa-user-clock Icons"></i>
                <h2>Break Time</h2>
                <p id="break-time">0 Minutes</p>
            </div>
            <div class="grid-item holidays">
                <i class="fas fa-calendar-alt Icons"></i>
                <h2>Next Holidays</h2>
                <p id="next-holidays">No holidays</p>
            </div>
            <div class="grid-item boss-comments" style="grid-column: span 1; grid-row: span 2;">
                <i class="fas fa-comments Icons"></i>
                <h2>Boss Comments</h2>
                <p id="boss-comments">None</p>
                <a href="#" class="contact-icon"><i class="fas fa-envelope Icons"></i></a>
            </div>
            <div class="grid-item">
                <i class="fas fa-money-bill-alt Icons"></i>
                <h2>Total Paycheck</h2>
                <p id="total-paycheck">0 EGP (<span class="red-text">-0</span>)</p>
            </div>
            <div class="grid-item alerts">
                <i class="fas fa-exclamation-triangle Icons"></i>
                <h2>Alerts</h2>
                <p id="alerts">No alerts</p>
            </div>
        </div>
    </div>
</body>
</html>