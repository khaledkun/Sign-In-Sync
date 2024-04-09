<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "Boss Settings";
    // Include the Template
    include '../Shared/Templates/MetaTags.php'; 
    include '../Shared/Templates/BossDashboard.php'; 
    ?>
    </head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="../Shared/Templates/Logo.ico" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="Boss-Dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Statistics.php"><i class="fas fa-chart-bar"></i> Statistics</a></li>
            <li><a href="Boss-Settings.php" class="active"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
     </div>
    </div>
    <form action="submit_settings.php" method="POST"> <!-- ده عشان الباك لما ييجي يبرمجه -->
    <div class="dashboard">
        <div class="header">
                <h1><i class="fas fa-cog"></i> Settings</h1>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-user"></i> Employee Settings</h2>
            <div class="text-box-container">
                <input type="number" id="security1" name="security1" placeholder="Salary" min="0"><br>
                <input type="number" id="security2" name="security2" placeholder="Shift Hours" min="0"><br>
                <input type="number" id="security3" name="security3" placeholder="Max Days for Absence" min="0"><br>
                <input type="number" id="security4" name="security4" placeholder="Max Days for Latency" min="0"><br>
                <input type="number" id="security5" name="security5" placeholder="Pay Levy per Hour" min="0"><br>
            </div>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-user-shield"></i> Supervisor Settings</h2>
            <div class="checkbox-container">
                <div class="text-box-container">
                    <input type="number" id="security1" name="security1" placeholder="Salary" min="0"><br>
                    <input type="number" id="security2" name="security2" placeholder="Shift Hours" min="0"><br>
                    <input type="number" id="security3" name="security3" placeholder="Max Days for Absence" min="0"><br>
                    <input type="number" id="security4" name="security4" placeholder="Max Days for Latency" min="0"><br>
                    <input type="number" id="security5" name="security5" placeholder="Pay Levy per Hour" min="0"><br>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-user-tie"></i> Manager Settings</h2>
            <div class="radio-container">
                <div class="text-box-container">
                    <input type="number" id="security1" name="security1" placeholder="Salary" min="0"><br>
                    <input type="number" id="security2" name="security2" placeholder="Shift Hours" min="0"><br>
                    <input type="number" id="security3" name="security3" placeholder="Max Days for Absence" min="0"><br>
                    <input type="number" id="security4" name="security4" placeholder="Max Days for Latency" min="0"><br>
                    <input type="number" id="security5" name="security5" placeholder="Pay Levy per Hour" min="0"><br>
                </div>
            </div>
        </div>
        <button type="submit" class="submit-button"><i class="fas fa-save"></i> Save</button>
      </div>
    </form>
</body>
</html>