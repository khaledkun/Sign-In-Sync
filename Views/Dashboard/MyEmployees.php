<?php
session_start();
// Check if the guide has already been shown in this session
$showGuide = !isset($_SESSION['guide_shown_my_employees']) || $_SESSION['guide_shown_my_employees'] == false;

// If the guide hasn't been shown, set the session variable to true after displaying the guide
if ($showGuide) {
    $_SESSION['guide_shown_my_employees'] = true;
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
        <?php
        // You Can Change the Page Title as you like
        $pageTitle = "My Employees";
        // Include the Template
        include '../../Templates/MetaTags.php'; 
        ?>
    </head>
    <link rel="stylesheet" href="<?php echo $BossDashboardPath; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<body>
<!-- Here was the Navbar -->
    <!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <div class="boss-dashboard">
        <div class="header">
            <div class="header-text">
                <h1 id="welcomeMessage"><i class="fas fa-user-tie"></i> My Employees</h1>
            </div>
            <div class="date-section">
                <p class="current-date"><i class="far fa-calendar-alt"></i> <?=date(' d M, Y');?></p>
            </div>
        </div>
        <div class="search-container">
            <select id="list-box">
                <option value="" disabled selected hidden>Sort by</option>
                <option value="value1">All</option>
                <option value="value3">&#xf007; Employee</option>
                <option value="value2">&#xf508; Manager</option>
                <option value="value4">&#xf505; Supervisor</option>
            </select>
            <div class="search-input-container">
                <input type="text" id="search-input" placeholder="Search...">
                <button id="search-button"><i class="fas fa-search"></i></button>
            </div>
        </div>        
        <div class="grid-container">
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope"></i></a>
                    <a href="#" class="type-icon"><i class="fas fa-user"></i>
                    <a href="#" class="state-icon"><i class="fas fa-circle" style="color: green;"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <p><i class="fas fa-user-clock"></i> Break Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope"></i></a>
                    <a href="#1" class="type-icon"><i class="fas fa-user"></i>
                    <a href="#1" class="state-icon"><i class="fas fa-circle" style="color: green;"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <p><i class="fas fa-user-clock"></i> Break Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item first">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope"></i></a>
                    <a href="#1" class="type-icon"><i class="fas fa-user-shield"></i>
                    <a href="#1" class="state-icon"><i class="fas fa-circle" style="color: red;"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <p><i class="fas fa-user-clock"></i> Break Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope"></i></a>
                    <a href="#1" class="type-icon"><i class="fas fa-user-shield"></i>
                    <a href="#1" class="state-icon"><i class="fas fa-circle" style="color: red;"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <p><i class="fas fa-user-clock"></i> Break Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope"></i></a>
                    <a href="#1" class="type-icon"><i class="fas fa-user-tie"></i>
                    <a href="#1" class="state-icon"><i class="fas fa-circle" style="color: grey;"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <p><i class="fas fa-user-clock"></i> Break Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon" title="Contact"><i class="fas fa-envelope"></i></a>
                    <a href="#1" class="type-icon"><i class="fas fa-user-tie"></i>
                    <a href="#1" class="state-icon"><i class="fas fa-circle" style="color: grey;"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <p><i class="fas fa-user-clock"></i> Break Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
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
            <div class="guide-step" id="step6">
                <p>Step 6: This icon to define employee type. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 7 -->
            <div class="guide-step" id="step7">
                <p>Step 7: This is to indicate online status for employee. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 8 -->
            <div class="guide-step alt" id="step8">
                <p>Step 8: This is Sign In Time. Click "Next" to continue.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 9 -->
            <div class="guide-step alt" id="step9">
                <p>Step 9: This is Sign Out Time. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 10 -->
            <div class="guide-step alt" id="step10">
                <p>Step 10: This is Late Time . Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 11 -->
            <div class="guide-step alt" id="step11">
                <p>Step 11: This is Break Time. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 12 -->
            <div class="guide-step alt" id="step12">
                <p>Step 12: This is text area to send comments. Click "Next" to proceed.</p>
                <button  class="skip-btn" onclick="skipGuide()">Skip</button>
                <button class="back-btn" onclick="goToPreviousStep()">Back</button>
                <button  class="next-btn" onclick="goToNextStep()">Next</button>
            </div>

            <!-- Step 13 -->
            <div class="guide-step alt" id="step13">
                <p>Step 13: This is a button to send an email to the employee. Click "Next" to proceed.</p>
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
            document.querySelector(".date-section").classList.add("highlight");
            break;
        case 2:
            document.querySelector("#search-input").classList.add("highlight");
            document.querySelector("#search-button").classList.add("highlight");
            break;
        case 3:
            document.querySelector("#list-box").classList.add("highlight");
            break;
        case 4:
            document.querySelector(".grid-item.first").classList.add("highlight");
            break;
        case 5:
            document.querySelector(".grid-item.first .type-icon").classList.add("highlight");
            break;
        case 6:
            document.querySelector(".grid-item.first .state-icon").classList.add("highlight");
            break;
        case 7:
            document.querySelector(".grid-item.first p i.fas.fa-sign-in-alt + span").classList.add("highlight");
            break;
        case 8:
            document.querySelector(".grid-item.first p i.fas.fa-sign-out-alt + span").classList.add("highlight");
            break;
        case 9:
            document.querySelector(".grid-item.first p i.fas.fa-clock + span").classList.add("highlight");
            break;
        case 10:
            document.querySelector(".grid-item.first p i.fas.fa-user-clock + span").classList.add("highlight");
            break;
            case 11:
               
                document.querySelector(".grid-item.first textarea").classList.add("highlight");
            break;
            case 12:
                document.querySelector(".grid-item.first .contact-icon").classList.add("highlight");
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
            document.querySelector("#search-input").classList.remove("highlight");
            document.querySelector("#search-button").classList.remove("highlight");
            break;
        case 3:
            document.querySelector("#list-box").classList.remove("highlight");
            break;
        case 4:
            document.querySelector(".grid-item.first").classList.remove("highlight");
            break;
        case 5:
            document.querySelector(".grid-item.first .type-icon").classList.remove("highlight");
            break;
        case 6:
            document.querySelector(".grid-item.first .state-icon").classList.remove("highlight");
            break;
        case 7:
            document.querySelector(".grid-item.first p i.fas.fa-sign-in-alt + span").classList.remove("highlight");
            break;
        case 8:
            document.querySelector(".grid-item.first p i.fas.fa-sign-out-alt + span").classList.remove("highlight");
            break;
        case 9:
            document.querySelector(".grid-item.first p i.fas.fa-clock + span").classList.remove("highlight");
            break;
        case 10:
            document.querySelector(".grid-item.first p i.fas.fa-user-clock + span").classList.remove("highlight");
            break;
            case 11:
            
            document.querySelector(".grid-item.first textarea").classList.remove("highlight");
            break;
            case 12:
            document.querySelector(".grid-item.first .contact-icon").classList.remove("highlight");
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