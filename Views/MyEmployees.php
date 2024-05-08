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
        $pageTitle = "My Employees";
        // Include the Template
        include '../Shared/Templates/MetaTags.php'; 
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
</body>
</html>