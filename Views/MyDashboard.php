<?php
session_start();
$id =$_SESSION['id'];
$first_login = isset($_SESSION['first_login']) && $_SESSION['first_login'];

// Reset the flag after the first login
if ($first_login) {
    $_SESSION['first_login'] = false;
}

include_once "../Controllers/connect.php";
$query1 ="SELECT * FROM employee WHERE id ='$id'";
$result1=$conn->query($query1);
$userdata1 =$result1->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once '../controllers/connect.php';
// You Can Change the Page Title as you like
    $pageTitle = "My Dashboard";
    // Include the Template
    include '../Shared/Templates/MetaTags.php';?>
    <link rel="stylesheet" href="<?php echo $DashboardPath; ?>">
    <link rel="stylesheet" href="<?php echo $StopwatchPath; ?>">
    <script src="/Controllers/StopWatch.js"></script>
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <?php if ($first_login): ?>
    <div id="preloader">
    <div class="spinner">
        <img src="../Shared/Imgs/NavBarLogo.svg" alt="Company Logo" class="logo" />
                <p class="loading">Loading</p>
            </div>
    </div>
</div>
<?php endif; ?>
    <div class="dashboard">
        <div class="header">
            <div class="header-text">
                <h1 id="welcomeMessage"><i class="fas fa-handshake Icons"></i> Welcome, <span id="employeeName"><?=$userdata1['firstname']?></span></h1>
            </div>
            <div class="date-section">
                <p class="current-date"><i class="far fa-calendar-alt Icons"></i> <?= date(' d M, Y');?></p>
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
                <p id="late-time">0 hours (0 days)</p>
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
            <div class="grid-item">
                <i class="fas fa-money-bill-alt Icons"></i>
                <h2>Total Paycheck</h2>
                <p id="total-paycheck">0 EGP (<span class="red-text">-0</span>)</p>
            </div>
            <div class="grid-item tasks" style="grid-column: span 1; grid-row: span 2;">
                <i class="fas fa-tasks Icons"></i>
                <h2>Tasks</h2>
                <div class="boss-comments-scroll">
                 <p>Text content for scrolling...</p>
                 <p>Additional text content...</p>
                 <p>More text content...</p>
                </div>
            </div>
            <div class="grid-item boss-comments" style="grid-column: span 1; grid-row: span 2;">
                <i class="fas fa-comments Icons"></i>
                <h2>Alerts & Boss Comments</h2>
                <div class="boss-comments-scroll">
                 <p>Text content for scrolling...</p>
                 <p>Additional text content...</p>
                 <p>More text content...</p>
                </div>
                <a href="#" class="contact-icon"><i class="fas fa-envelope Icons"></i></a>
            </div>
            <div class="grid-item holidays">
                <i class="fas fa-calendar-alt Icons"></i>
                <h2>Next Holidays</h2>
                <p id="next-holidays">No holidays</p>
            </div>
        </div>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        setTimeout(() => {
            preloader.style.display = "none"; 
        }, 2000);
    }
});
    </script>
</body>
</html>