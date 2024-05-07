<!DOCTYPE html>
<html>
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "DashboardNavFooter";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; ?>
    <!-- <link rel="stylesheet" href="<?php echo $DashboardNavFooterPath; ?>"> -->
    <link rel="stylesheet" href="/Shared/Css/DashboardNavFooter.Css">
    <script src="<?php echo $DashLayout; ?>"></script>
    <script src="/Shared/Script/Switch-Colors.js"></script>
</head>
<body>
<div class="menu-icon">
        <i class="fas fa-bars"></i>
    </div>
    <div class="navbar">
        <div class="logo-container">
        <a href="HomePage.php" target="_blank" <?php echo basename($_SERVER['SCRIPT_NAME']) == "HomePage.php" ? 'class="active"' : ''; ?>>
        <img src="<?php echo $navBarLogoPath; ?>" alt="WebSiteLogo" class="NavBarLogo" id="Home"/>
            <span class="logo-text">Sign In Sync</span></a>
        </div>
        <ul>
            <li><a href="MyDashboard.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "MyDashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> My Dashboard</a></li>
            <li><a href="MyProfile.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "MyProfile.php" ? 'class="active"' : ''; ?>><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="GeneralSettings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "GeneralSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> General Settings</a></li>
            <li><a href="MyEmployees.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "MyEmployees.php" ? 'class="active"' : ''; ?>><i class="fas fa-user-tie"></i> My Employees</a></li>
            <li><a href="EmployeesStatistics.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "EmployeesStatistics.php" ? 'class="active"' : ''; ?>><i class="fas fa-chart-bar"></i> Employees Statistics</a></li>
            <li><a href="EmployeesSettings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "EmployeesSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-user-cog"></i> Employees Settings</a></li>
            <li><a href="../controllers/logout.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <!-- للدارك مود -->
        <div class="mode-toggle">
            <button id="dark-mode-btn" title="Dark Mode"><i class="fas fa-moon"></i></button>
            <button id="light-mode-btn" title="Light Mode"><i class="fas fa-sun"></i></button>
        </div>
        <!--  -->
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>


    <!-- <script>
    const darkModeBtn = document.getElementById('dark-mode-btn');
const lightModeBtn = document.getElementById('light-mode-btn');
const body = document.body;
const toggleDarkMode = () => {
    body.style.backgroundColor = '#222';
    const gridItems = document.querySelectorAll('.grid-item');
    gridItems.forEach(item => {
        if (!item.classList.contains('boss-comments') && !item.classList.contains('holidays') && !item.classList.contains('alerts')) {
            item.style.backgroundColor = '#444';
            item.style.color = '#fff';
        }
    });
    const profileItems = document.querySelectorAll('.profile-item');
    profileItems.forEach(item => {
        item.style.backgroundColor = '#333';
        item.style.color = '#fff'; 
    });
    const profileInfoItems = document.querySelectorAll('.profile-item.profile-info');
    profileInfoItems.forEach(item => {
        item.style.backgroundColor = '#333'; 
        item.style.color = '#fff';
        const inputs = item.querySelectorAll('input');
        inputs.forEach(input => {
            input.style.backgroundColor = '#333'; 
            input.style.color = '#fff'; 
        });
        const listBoxes = item.querySelectorAll('select');
        listBoxes.forEach(listBox => {
            listBox.style.backgroundColor = '#333'; 
            listBox.style.color = '#fff'; 
        });
    });
    const profilePictures = document.querySelectorAll('.profile-picture img');
    profilePictures.forEach(picture => {
        picture.style.filter = 'invert(100%)'; 
    });
    localStorage.setItem('mode', 'dark');
};

const toggleLightMode = () => {
    body.style.backgroundColor = '#f0f0f0';
    const gridItems = document.querySelectorAll('.grid-item');
    gridItems.forEach(item => {
        if (!item.classList.contains('boss-comments') && !item.classList.contains('holidays') && !item.classList.contains('alerts')) {
            item.style.backgroundColor = '#fff';
            item.style.color = '#000';
        }
    });
    const profileItems = document.querySelectorAll('.profile-item');
    profileItems.forEach(item => {
        item.style.backgroundColor = '#fff'; 
        item.style.color = '#000'; 
    });
    const profileInfoItems = document.querySelectorAll('.profile-item.profile-info');
    profileInfoItems.forEach(item => {
        item.style.backgroundColor = '#fff'; 
        item.style.color = '#000'; 
        const inputs = item.querySelectorAll('input');
        inputs.forEach(input => {
            input.style.backgroundColor = 'transparent'; 
            input.style.color = '#000';
        });
        const listBoxes = item.querySelectorAll('select');
        listBoxes.forEach(listBox => {
            listBox.style.backgroundColor = 'transparent'; 
            listBox.style.color = '#000'; 
        });
    });
    const profilePictures = document.querySelectorAll('.profile-picture img');
    profilePictures.forEach(picture => {
        picture.style.filter = 'none'; 
    });
    localStorage.setItem('mode', 'light');
};
const loadModePreference = () => {
    const mode = localStorage.getItem('mode');
    if (mode === 'dark') {
        toggleDarkMode(); 
    } else {
        toggleLightMode();
    }
};
darkModeBtn.addEventListener('click', toggleDarkMode);
lightModeBtn.addEventListener('click', toggleLightMode);
window.addEventListener('DOMContentLoaded', loadModePreference);
</script> -->


</body>
</html>