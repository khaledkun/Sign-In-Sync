<?php
// No need to define a base path
// because we are on localhost
// and everyone has its own localhost

// Define the directory containing the images
$ImgsPath = "../../Shared/Imgs/";

// Define paths for each image
$employee1Path = $ImgsPath . "Employee.png";
$employee2Path = $ImgsPath . "Employee.webp";
$lockPath = $ImgsPath . "lock.svg";
// $logoIcoPath = $ImgsPath . "Logo.ico";
$mocap1Path = $ImgsPath . "Mocap1-Y.jpg";
$mocap2Path = $ImgsPath . "Mocap2-Y.jpg";
// $navBarLogoPath = $ImgsPath . "NavBarLogo.svg";
$navBarLogoPath = $ImgsPath . "NavBar.png";
$user1Path = $ImgsPath . "user.svg";
$user2Path = $ImgsPath . "User-Icon.png";
$websiteLogoPath = $ImgsPath . "WebSiteLogo.svg";

// Define the directory containing the Css
$CssPath = "../../Shared/Css/";

// Define paths for each Css file
$BossDashboardPath = $CssPath . "MyEmployees.css";
$BossSettingsPath = $CssPath . "EmployeesSettings.css";
$StatisticsPath = $CssPath . "EmployeesStatistics.css";
$ProfilePath = $CssPath . "MyProfile.css";
$SettingsPath = $CssPath . "GeneralSettings.css";
$DashboardPath = $CssPath . "MyDashboard.css";
$ForgotPasswsordPath = $CssPath . "ForgotPasswsord.css";
$HomepagePath = $CssPath . "Homepage.css";
$CompanyVisionPath = $CssPath . "CompanyVision.css";
$LoginPath = $CssPath . "Login.css";
$MainStylePath = $CssPath . "MainStyle.css";
$NavBarPath = $CssPath . "NavBar.css";
$PrivacyPopUpPath = $CssPath . "PrivacyPopUp.css";
$SignUpPath = $CssPath . "SignUp.css";
$DashboardNavFooterPath = $CssPath . "DashboardNavFooter.Css";
$StopwatchPath = $CssPath . "StopWatch.css";

// Define the directory containing the Layout For Homepage - dasboard
$LayoutPath = "../../Shared/Layout/";

// Define paths for each Layout file
$EmpDashboardLayout = $LayoutPath . "EmpDashboard.php";
$HomepageLayout = $LayoutPath . "Homepage.php";

// Define the directory containing the Scripts
$ScriptPath = "../../Shared/Script/";

// Define paths for each Script file
$DashLayout = $ScriptPath . "DashLayout.js";
$HomeLayout = $ScriptPath . "HomeLayout.js";
$ScrollUp = $ScriptPath . "ScrollUp.js";

// Define the directory containing the Controllers Registration For Views
$ControllersPath = "../../Controllers/";
    $DashboardContrl = $ControllersPath . "Dashboard/";
    $HomepageContrl = $ControllersPath . "Homepage/";
    $RegestrationContrl = $ControllersPath . "Registration/";
        // Define paths for each File inside the Dashboard
        $StopWatchContrl =  $DashboardContrl . "StopWatch.js";
        // Define paths for each File inside the Homepage

        // Define paths for each File inside the Regestration
        $ConnectContrl =  $RegestrationContrl . "connect.php";
        $ForgetPassContrl =  $RegestrationContrl . "ForgotPasswsord.php";
        $IndexContrl =  $RegestrationContrl . "index.php";
        $loginContrl =  $RegestrationContrl . "login.php";
        $LogoutContrl =  $RegestrationContrl . "logout.php";
        $NewPassContrl =  $RegestrationContrl . "NewPassword.php";
        $PopupContrl =  $RegestrationContrl . "PopUpPage.js";
        $SignupContrl =  $RegestrationContrl . "signup.php";


// Define the directory containing the views Registration For Controllers
$ViewsPath = "../../Views/";
    $DashboardView = $ViewsPath . "Dashboard/";
    $HomepageView = $ViewsPath . "Homepage/";
    $RegestrationView = $ViewsPath . "Registration/";
        // Define paths for each File inside the Dashboard
        $EmpSettView = $DashboardView . "EmployeesSettings.php";
        $EmpStatView = $DashboardView . "EmployeesStatistics.php";
        $GenSettView = $DashboardView . "GeneralSettings.php";
        $MydashboardView = $DashboardView . "MyDashboard.php";
        $MyEmpView = $DashboardView . "MyEmployees.php";
        $MyprofileView = $DashboardView . "MyProfile.php";
        // Define paths for each File inside the Homepage
        $AboutUsView = $HomepageView . "AboutUs.php";
        $BuyNowView = $HomepageView . "BuyNow.php";
        $CompanyVisionView = $HomepageView . "CompanyVision.php";
        $CreditsView = $HomepageView . "Credits.php";
        $HomePageView = $HomepageView . "HomePage.php";
        $ServicesView = $HomepageView . "Services.php";
        $TermsView = $HomepageView . "TermsConditions.php";
        // Define paths for each File inside the Regestration
        $EmailVerifyView = $RegestrationView . "EmailVerify.php";
        $ForgetPassView = $RegestrationView . "ForgotPasswsord.php";
        $IndexView = $RegestrationView . "index.php";
        $LoginView = $RegestrationView . "login.php";
        $NewPassView = $RegestrationView . "NewPassword.php";
        $SignUpView = $RegestrationView . "SignUp.php";
?>
