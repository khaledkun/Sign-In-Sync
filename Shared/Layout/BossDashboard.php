<!DOCTYPE html>
<html>
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "DashboardNavFooter";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; ?>
    <link rel="stylesheet" href="<?php echo $DashboardNavFooterPath; ?>">
    <script src="<?php echo $DashLayout; ?>"></script>
</head>
<body>
    <!-- الناف بار المشترك بين جميع صفحات الداش بورد لأصحاب العمل -->
    <div class="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <div class="navbar">
            <div class="logo-container">
            <img src="<?php echo $navBarLogoPath; ?>" alt="WebSiteLogo" class="NavBarLogo" id="Home"/>
                <span class="logo-text">Sign In Sync</span>
            </div>
            <ul>
                <li><a href="BossDashboard.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossDashboard.php" ? 'class="active"' : ''; ?>><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="BossStatistics.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossStatistics.php" ? 'class="active"' : ''; ?>><i class="fas fa-chart-bar"></i> Statistics</a></li>
                <li><a href="BossSettings.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "BossSettings.php" ? 'class="active"' : ''; ?>><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="../controllers/logout.php" <?php echo basename($_SERVER['SCRIPT_NAME']) == "login.php" ? 'class="active"' : ''; ?>><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
            <!-- للدارك مود -->
            <div class="mode-toggle">
                <button id="dark-mode-btn" title="Dark Mode"><i class="fas fa-moon"></i></button>
                <button id="light-mode-btn" title="Light Mode"><i class="fas fa-sun"></i></button>
            </div>
            <!-- هنا يتواجد الفوتر الخاص بالصفحه -->
            <div class="footer">
                <p>&copy; 2024 Sign In Sync</p>
            </div>
        </div>


        <script>
    const darkModeBtn = document.getElementById('dark-mode-btn');
    const lightModeBtn = document.getElementById('light-mode-btn');
    const body = document.body;
    const changeInputColors = (color, bgColor, borderColor) => {
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.style.color = color;
            input.style.backgroundColor = bgColor;
            input.style.border = borderColor;
        });
    };
    const toggleDarkMode = () => {
        body.style.backgroundColor = '#222';
        const gridItems = document.querySelectorAll('.grid-item');
        gridItems.forEach(item => {
            if (!item.classList.contains('boss-comments') && !item.classList.contains('holidays') && !item.classList.contains('alerts')) {
                item.style.backgroundColor = '#444';
                item.style.color = '#fff';
                const greenTexts = item.querySelectorAll('.green-text');
                greenTexts.forEach(text => {
                    text.style.color = '#00ff1a';
                });
                const profilePicture = item.querySelector('img');
                if (profilePicture) {
                    profilePicture.style.filter = 'invert(100%)';
                }
                const contactIcons = item.querySelectorAll('.contact-icon');
                contactIcons.forEach(icon => {
                    icon.style.color = '#f0f0f0';
                });
            }
        });
        const pageTitle = document.title.toLowerCase(); 
        if (pageTitle.includes('boss settings')) { 
            changeInputColors('#FFFFFF', '#444444', '2px solid #FFFFFF');
            const styleElement = document.createElement('style');
            styleElement.textContent = `
                .text-box-container input[type="number"]::-webkit-input-placeholder {
                    color: #fff !important;
                }
            `;
            document.head.appendChild(styleElement);
        }
        localStorage.setItem('mode', 'dark');
    };
    const toggleLightMode = () => {
        body.style.backgroundColor = '#f0f0f0';
        const gridItems = document.querySelectorAll('.grid-item');
        gridItems.forEach(item => {
            if (!item.classList.contains('boss-comments') && !item.classList.contains('holidays') && !item.classList.contains('alerts')) {
                item.style.backgroundColor = '#fff';
                item.style.color = '#000';
                const greenTexts = item.querySelectorAll('.green-text');
                greenTexts.forEach(text => {
                    text.style.color = 'green';
                });
                const profilePicture = item.querySelector('img');
                if (profilePicture) {
                    profilePicture.style.filter = 'none';
                }
                const contactIcons = item.querySelectorAll('.contact-icon');
                contactIcons.forEach(icon => {
                    icon.style.color = '#555';
                });
            }
        });
        const pageTitle = document.title.toLowerCase(); 
        if (pageTitle.includes('boss settings')) { 
            changeInputColors('#000000', '#ffffff', '2px solid #000000');
            const styleElement = document.createElement('style');
            styleElement.textContent = `
                .text-box-container input[type="number"]::-webkit-input-placeholder {
                    color: #000 !important;
                }
            `;
            document.head.appendChild(styleElement);
        }
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
</script>


            
</body>
</html>