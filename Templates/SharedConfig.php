<?php
// No need to define a base path
// because we are on localhost
// and everyone has its own localhost
// Define the directory containing the Shared Folder
$Shared = "../../Shared/";
// Define the directory containing the images
$ImgsPath = $Shared . "Imgs/";

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
$Eye = $ImgsPath . "eye.png";
$EyeSlash = $ImgsPath . "eye-slash.png";

// Define the directory containing the Css
$CssPath = $Shared . "Css/";
$DashboardCss = $CssPath . "Dashboard/";
$HomeCss = $CssPath . "Home/";
$RegestrationCss = $CssPath . "Registration/";
$SwitchCss = $CssPath . "SwitchMode/";
        // Define paths for each File inside the Dashboard
        $BossDashboardPath = $DashboardCss . "MyEmployees.css";
        $BossSettingsPath = $DashboardCss . "EmployeesSettings.css";
        $StatisticsPath = $DashboardCss . "EmployeesStatistics.css";
        $ProfilePath = $DashboardCss . "MyProfile.css";
        $SettingsPath = $DashboardCss . "GeneralSettings.css";
        $DashboardPath = $DashboardCss . "MyDashboard.css";
        $DashboardNavFooterPath = $DashboardCss . "DashboardNavFooter.Css";
        $StopwatchPath = $DashboardCss . "StopWatch.css";
        // Define paths for each File inside the Homepage
        $HomepagePath = $HomeCss . "Homepage.css";
        $CompanyVisionPath = $HomeCss . "CompanyVision.css";
        $NavBarPath = $HomeCss . "NavBar.css";
        // Define paths for each File inside the Regestration
        $ForgotPasswsordPath = $RegestrationCss . "ForgotPasswsord.css";
        $LoginPath = $RegestrationCss . "Login.css";
        $MainStylePath = $RegestrationCss . "MainStyle.css";
        $SignUpPath = $RegestrationCss . "SignUp.css";
        $PrivacyPopUpPath = $RegestrationCss . "PrivacyPopUp.css";
        // Define paths for each File inside the SwitchMode
        $DarkPath = $SwitchCss . "Dark.css";
        $LightPath = $SwitchCss . "Light.css";
// Define the directory containing the Layout For Homepage - dasboard
$LayoutPath = $Shared . "Layout/";

// Define paths for each Layout file
$EmpDashboardLayout = $LayoutPath . "EmpDashboard.php";
$HomepageLayout = $LayoutPath . "Homepage.php";

// Define the directory containing the Scripts
$ScriptPath = $Shared . "Script/";

// Define paths for each Script file
$DashLayout = $ScriptPath . "DashLayout.js";
$HomeLayout = $ScriptPath . "HomeLayout.js";
$ScrollUp = $ScriptPath . "ScrollUp.js";
$SwitchColors = $ScriptPath . "SwitchColors.js";

// Define the directory containing the Controllers Registration For Views
$ControllersPath = "../../Controllers/";
    $DashboardContrl = $ControllersPath . "Dashboard/";
    $HomeContrl = $ControllersPath . "Home/";
    $RegestrationContrl = $ControllersPath . "Registration/";
        // Define paths for each File inside the Dashboard
        $StopWatchContrl =  $DashboardContrl . "StopWatch.js";
        // Define paths for each File inside the Homepage

        // Define paths for each File inside the Regestration
        $phpmailerContrl =  $RegestrationContrl . "class.phpmailer.php";
        $smtpContrl =  $RegestrationContrl . "class.smtp.php";
        $ConnectContrl =  $RegestrationContrl . "connect.php";
        $EmailVerifyContrl =  $RegestrationContrl . "EmailVerify.php";
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
    $HomeView = $ViewsPath . "Home/";
    $RegestrationView = $ViewsPath . "Registration/";
        // Define paths for each File inside the Dashboard
        $EmpSettView = $DashboardView . "EmployeesSettings.php";
        $EmpStatView = $DashboardView . "EmployeesStatistics.php";
        $GenSettView = $DashboardView . "GeneralSettings.php";
        $MydashboardView = $DashboardView . "MyDashboard.php";
        $MyEmpView = $DashboardView . "MyEmployees.php";
        $MyprofileView = $DashboardView . "MyProfile.php";
        // Define paths for each File inside the Homepage
        $AboutUsView = $HomeView . "AboutUs.php";
        $BuyNowView = $HomeView . "BuyNow.php";
        $CompanyVisionView = $HomeView . "CompanyVision.php";
        $CreditsView = $HomeView . "Credits.php";
        $HomePageView = $HomeView . "HomePage.php";
        $ServicesView = $HomeView . "Services.php";
        $TermsView = $HomeView . "TermsConditions.php";
        // Define paths for each File inside the Regestration
        $EmailVerifyView = $RegestrationView . "EmailVerify.php";
        $ForgetPassView = $RegestrationView . "ForgotPasswsord.php";
        $IndexView = $RegestrationView . "index.php";
        $LoginView = $RegestrationView . "login.php";
        $NewPassView = $RegestrationView . "NewPassword.php";
        $SignUpView = $RegestrationView . "SignUp.php";
?>
