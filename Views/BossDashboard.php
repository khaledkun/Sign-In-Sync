<?php
session_start();
$id =$_SESSION['id'];

include_once "../Controllers/connect.php";
$query1 ="SELECT * FROM employee WHERE id ='$id'";
$result1=$conn->query($query1);
$userdata1 =$result1->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Boss Dashboard";
        // Include the Template
        include '../Shared/Templates/MetaTags.php'; 
        ?>
    </head>
    <link rel="stylesheet" href="<?php echo $BossDashboardPath; ?>">
<body>
<!-- Here was the Navbar -->
    <!-- Include the navbar -->
    <?php include '../Shared/NavBar/DashboardNavFooter.php'; ?>
    <div class="boss-dashboard">
        <div class="header">
            <div class="header-text">
                <h1 id="welcomeMessage"><i class="fas fa-user-tie"></i> Welcome, <span id="employeeName"><?=$userdata1['firstname']?></span></h1>
            </div>
            <div class="date-section">
                <p class="current-date"><i class="far fa-calendar-alt"></i> <?=date(' d M, Y');?></p>
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
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
                <div class="grid-item">
                    <p><span>Employee</span></p>
                    <a href="#" class="contact-icon"><i class="fas fa-envelope"></i></a>
                    <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <p><i class="fas fa-sign-in-alt"></i> Sign In Time: <span class="green-text">9:00 AM</span></p>
                    <p><i class="fas fa-sign-out-alt"></i> Sign Out Time: <span class="green-text">5:00 PM</span></p>
                    <p><i class="fas fa-clock"></i> Late Time: <span class="red-text">5 Minutes</span></p>
                    <textarea placeholder="Comments"></textarea>
                </div>
        </div>
    </div>
</body>
</html>