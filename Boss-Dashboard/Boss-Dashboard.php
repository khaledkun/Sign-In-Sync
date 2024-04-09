<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Boss Dashboard";
        // Include the Template
        include '../Shared/Templates/MetaTags.php'; 
        include '../Shared/Templates/BossDashboard.php'; 
        ?>
    </head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="Logo.ico" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="Boss-Dashboard.html" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Statistics.html"><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="Boss-Settings.html"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
    </div>

    <div class="boss-dashboard">
        <div class="header">
            <div class="header-text">
                <h1 id="welcomeMessage"><i class="fas fa-user-tie"></i> Welcome, <span id="employeeName">Boss</span></h1>
            </div>
            <div class="date-section">
                <p class="current-date"><i class="far fa-calendar-alt"></i> April 6, 2024</p>
            </div>
        </div>
        <div class="search-container">
            <select id="list-box">
                <option value="" disabled selected hidden>Sort by</option>
                <option value="value1">All</option>
                <option value="value2">Manager</option>
                <option value="value3">Empoloyee</option>
                <option value="value4">Supervisor</option>
            </select>
            <div class="search-input-container">
                <input type="text" id="search-input" placeholder="Search...">
                <button id="search-button"><i class="fas fa-search"></i></button>
                
            </div>
        </div>        
        <div class="grid-container">
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="Image.png" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="Image.png" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="Image.png" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="Image.png" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="Image.png" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="Image.png" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
        </div>
    </div>
</body>
</html>