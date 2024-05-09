<?php
session_start();
$id =$_SESSION['id'];
$first_login = isset($_SESSION['first_login']) && $_SESSION['first_login'];

// Reset the flag after the first login
if ($first_login) {
    $_SESSION['first_login'] = false;
}

include_once "../../Controllers/Registration/connect.php";
$query1 ="SELECT * FROM employee WHERE id ='$id'";
$result1=$conn->query($query1);
$userdata1 =$result1->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once '../../Controllers/Registration/connect.php';
// You Can Change the Page Title as you like
    $pageTitle = "My Dashboard";
    // Include the Template
    include '../../Templates/MetaTags.php';?>
    <link rel="stylesheet" href="<?php echo $DashboardPath; ?>">
    <link rel="stylesheet" href="<?php echo $StopwatchPath; ?>">
    <script src="../../Controllers/Dashboard/StopWatch.js"></script>
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
            <button id="startbutton" class="timer-button" title="Start"><i class="fas fa-play Icons"></i></button>
            <button id="pausebutton" class="timer-button" title="Pause"><i class="fas fa-pause Icons"></i></button>
            <button id="resetbutton" class="timer-button" title="Reset"><i class="fas fa-stop Icons"></i></button>
            </div>
            </div>
            <div class="grid-item late-time">
                <i class="fas fa-clock Icons"></i>
                <h2>Late Arrival</h2>
                <p id="late-time">0 hours (0 days)</p>
            </div>
            
            <div class="grid-item absent-days">
                <i class="far fa-calendar-times Icons"></i>
                <h2>Absent Days</h2>
                <p id="absent-days">0 days</p>
            </div>
            <div class="grid-item break-time">
            <i class="fas fa-user-clock Icons"></i>
                <h2>Break Time</h2>
                <p id="break-time">0 Minutes</p>
            </div>
            <div class="grid-item total-paycheck">
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
                <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope Icons"></i></a>
            </div>
            <div class="grid-item holidays">
                <i class="fas fa-calendar-alt Icons"></i>
                <h2>Next Holidays</h2>
                <p id="next-holidays">No holidays</p>
            </div>
        </div>
    </div>





    <?php if ($first_login): ?>
 <div id="guide-container" class="guide">
        <div class="guide-content">
            <!-- Step 1 -->
            <div class="guide-step active" id="step1">
                <p>Welcome to sign in sync. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 2 -->
            <div class="guide-step" id="step2">
                <p>Step 2: This section covers the date section. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 3 -->
            <div class="guide-step" id="step3">
                <p>Step 3: Let's explore the sign-in time section. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 4 -->
            <div class="guide-step" id="step4">
                <p>Step 4: The late arrival section is covered here. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 5 -->
            <div class="guide-step" id="step5">
                <p>Step 5: Here's the section about absent days. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 6 -->
            <div class="guide-step" id="step6">
                <p>Step 6: This step discusses break time. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 7 -->
            <div class="guide-step" id="step7">
                <p>Step 7: This is about the total paycheck. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 8 -->
            <div class="guide-step" id="step8">
                <p>Step 8: This step explores next holidays. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 9 -->
            <div class="guide-step" id="step9">
                <p>Step 9: This step explores tasks. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 10 -->
            <div class="guide-step" id="step10">
                <p>Step 10: This step explores boss comments . Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 11 -->
            <div class="guide-step" id="step11">
                <p>Step 11: This is the navigation bar. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 12 -->
            <div class="guide-step" id="step12">
                <p>Step 12: This is your dashboard. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 13 -->
            <div class="guide-step" id="step13">
                <p>Step 13: This is your profile. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 14 -->
            <div class="guide-step" id="step14">
                <p>Step 14: This is your general settings. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 15 -->
            <div class="guide-step" id="step15">
                <p>Step 15: This is your employees. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 16 -->
            <div class="guide-step" id="step16">
                <p>Step 16: This is employee statistics. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 17 -->
            <div class="guide-step" id="step17">
                <p>Step 17: This is employees settings. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 18 -->
            <div class="guide-step" id="step18">
                <p>Step 18: This is an option to toggle dark mode. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="closeGuide()">Finish</button>
            </div>
        </div>
    </div>
    <?php endif; ?>






    
<script>
 
const guideContainer = document.getElementById("guide-container");
const steps = document.querySelectorAll(".guide-step");
let currentStep = 0; 


function goToNextStep() {
    if (currentStep < steps.length - 1) {
 
        removeHighlight(currentStep);

        
        steps[currentStep].classList.remove("active"); 
        currentStep++; 
        steps[currentStep].classList.add("active"); 

        highlightStep(currentStep);
    }
}


function closeGuide() {
   
    guideContainer.style.display = "none";


    removeHighlight(currentStep);
}
function skipGuide() {

    guideContainer.style.display = "none";

   
    if (currentStep < steps.length) {
        removeHighlight(currentStep + 1); 
    }
}


function highlightStep(stepIndex) {
    switch (stepIndex) {
        case 1:
            document.querySelector(".date-section").classList.add("highlight");
            break;
        case 2:
            document.querySelector(".sign-in-time").classList.add("highlight");
            break;
        case 3:
            document.querySelector(".late-time").classList.add("highlight");
            break;
        case 4:
            document.querySelector(".absent-days").classList.add("highlight");
            break;
        case 5:
            document.querySelector(".break-time").classList.add("highlight");
            break;
        case 6:
            document.querySelector(".total-paycheck").classList.add("highlight");
            break;
        case 7:
            document.querySelector(".holidays").classList.add("highlight");
            break;
        case 8:
            document.querySelector(".tasks").classList.add("highlight");
            break;
        case 9:
            document.querySelector(".boss-comments").classList.add("highlight");
            break;
        case 10:
            document.querySelector(".navbar").classList.add("highlight");
            break;
            case 11:
            document.querySelector("#MyDashboard").classList.add("highlight");
            break;
            case 12:
            document.querySelector("#MyProfile").classList.add("highlight");
            break;
            case 13:
            document.querySelector("#GeneralSettings").classList.add("highlight");
            break;
            case 14:
            document.querySelector("#MyEmployees").classList.add("highlight");
            break;
            case 15:
            document.querySelector("#EmployeesStatistics").classList.add("highlight");
            break;
            case 16:
            document.querySelector("#EmployeesSettings").classList.add("highlight");
            break;
            case 17:
            document.querySelector(".mode-toggle").classList.add("highlight");
            break;
        default:
            break;
    }
}

function removeHighlight(stepIndex) {
    switch (stepIndex) {
        case 1:
            document.querySelector(".date-section").classList.remove("highlight");
            break;
        case 2:
            document.querySelector(".sign-in-time").classList.remove("highlight");
            break;
        case 3:
            document.querySelector(".late-time").classList.remove("highlight");
            break;
        case 4:
            document.querySelector(".absent-days").classList.remove("highlight");
            break;
        case 5:
            document.querySelector(".break-time").classList.remove("highlight");
            break;
        case 6:
            document.querySelector(".total-paycheck").classList.remove("highlight");
            break;
        case 7:
            document.querySelector(".holidays").classList.remove("highlight");
            break;
        case 8:
            document.querySelector(".tasks").classList.remove("highlight");
            break;
        case 9:
            document.querySelector(".boss-comments").classList.remove("highlight");
            break;
        case 10:
            document.querySelector(".navbar").classList.remove("highlight");
            break;
            case 11:
            document.querySelector("#MyDashboard").classList.remove("highlight");
            break;
            case 12:
            document.querySelector("#MyProfile").classList.remove("highlight");
            break;
            case 13:
            document.querySelector("#GeneralSettings").classList.remove("highlight");
            break;
            case 14:
            document.querySelector("#MyEmployees").classList.remove("highlight");
            break;
            case 15:
            document.querySelector("#EmployeesStatistics").classList.remove("highlight");
            break;
            case 16:
            document.querySelector("#EmployeesSettings").classList.remove("highlight");
            break;
            case 17:
            document.querySelector(".mode-toggle").classList.remove("highlight");
            break;
        default:
            break;
    }
}


guideContainer.style.display = "block"; 



</script>



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