<?php
session_start();
// Check if the guide has already been shown in this session
$showGuide = !isset($_SESSION['guide_shown_employees_statistics']) || $_SESSION['guide_shown_employees_statistics'] == false;

// If the guide hasn't been shown, set the session variable to true after displaying the guide
if ($showGuide) {
    $_SESSION['guide_shown_employees_statistics'] = true;
}
$id =$_SESSION['id'];

include_once "../../Controllers/Registration/connect.php";
$query1 ="SELECT * FROM employee WHERE id ='$id'";
$result1=$conn->query($query1);
$userdata1 =$result1->fetch_assoc();

?>
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
            <div class="grid-item absent-employees">
                <i class="fas fa-clock"></i>
                <h2>Absent Employees</h2>
                <p id="absent-employees">0 employees</p>
            </div>
            <div class="grid-item total-pay-levies">
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
    <?php if ($showGuide): ?> <!-- Display the guide if it hasn't been shown in this session -->
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
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 3 -->
            <div class="guide-step" id="step3">
                <p>Step 3: Let's explore the search bar. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 4 -->
            <div class="guide-step" id="step4">
                <p>Step 4: an option to sort employees. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 5 -->
            <div class="guide-step" id="step5">
                <p>Step 5: Here's the Employee Info. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 6 -->
            <div class="guide-step alt" id="step6">
                <p>Step 6: This icon to define employee type. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 7 -->
            <div class="guide-step alt" id="step7">
                <p>Step 7: This is to indicate online status for employee. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 8 -->
            <div class="guide-step alt" id="step8">
                <p>Step 8: This is a button to send an email to the employee. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="closeGuide()">Finish</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <script>
 
const guideContainer = document.getElementById("guide-container");
const steps = document.querySelectorAll(".guide-step");
let currentStep = 0; 

function goToPreviousStep() {
    if (currentStep > 0) {
       
        removeHighlight(currentStep);
        
      
        steps[currentStep].classList.remove("active"); 
        currentStep--; 
        steps[currentStep].classList.add("active");
        
        
        highlightStep(currentStep);
    }
}


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

 
    for (let i = 1; i <= 17; i++) { 
        removeHighlight(i); 
    }
}

function highlightStep(stepIndex) {
    switch (stepIndex) {
        case 1:
            document.querySelector(".custom-list").classList.add("highlight");
            break;
        case 2:
            document.querySelector(".grid-item.currently-working-employees").classList.add("highlight");
            break;
        case 3:
            document.querySelector(".grid-item.late-employees").classList.add("highlight");
            break;
        case 4:
            document.querySelector(".grid-item.absent-employees").classList.add("highlight");
            break;
        case 5:
            document.querySelector(".grid-item.total-pay-levies").classList.add("highlight");
            break;
        case 6:
            document.querySelector(".grid-item.alerts").classList.add("highlight");
            break;
        case 7:
            document.querySelector(".grid-item.boss-comments").classList.add("highlight");
            break;
        default:
            break;
    }
}

function removeHighlight(stepIndex) {
    switch (stepIndex) {
        case 1:
            document.querySelector(".custom-list").classList.remove("highlight");
            break;
        case 2:
            document.querySelector(".grid-item.currently-working-employees").classList.remove("highlight");
            break;
        case 3:
            document.querySelector(".grid-item.late-employees").classList.remove("highlight");
            break;
        case 4:
            document.querySelector(".grid-item.absent-employees").classList.remove("highlight");
            break;
        case 5:
            document.querySelector(".grid-item.total-pay-levies").classList.remove("highlight");
            break;
        case 6:
            document.querySelector(".grid-item.alerts").classList.remove("highlight");
            break;
        case 7:
            document.querySelector(".grid-item.boss-comments").classList.remove("highlight");
            break;
        default:
            break;
    }
}


guideContainer.style.display = "block"; 


function checkWidth() {
    const screenWidth = window.innerWidth;
    
    if (screenWidth <= 1280) {
        skipGuide(); 
    }
}

window.addEventListener("resize", checkWidth); 
window.addEventListener("DOMContentLoaded", checkWidth);



</script>
</body>
</html>