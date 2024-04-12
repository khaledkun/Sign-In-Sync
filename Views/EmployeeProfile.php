<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "Employee Profile";
    // Include the Template
    include '../Shared/Templates/MetaTags.php';    
    ?>
    <link rel="stylesheet" href="<?php echo $ProfilePath; ?>">
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include '../Shared/NavBar/EmpDashNavFooter.php'; ?>
    <form action="submit_profile.php" method="POST"> <!-- ده عشان الباك لما ييجي يبرمجه -->
    <div class="profile">
        <div class="profile-header">
            <h1><i class="fas fa-user"></i> My Profile</h1>
        </div>
        <div class="profile-details grid-container">
            <div class="profile-item profile-picture" style="background-image: url('placeholder-image.png');">
                <label for="profile-picture-input">
                    <img id="profile-picture-preview" src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <input type="file" id="profile-picture-input" accept="image/*" style="display: none;">
                    <i class="fas fa-camera"></i>
                </label>
            </div>
            <div class="profile-details grid-container">
                <div class="profile-item profile-info">
                    <label for="name"><i class="fas fa-user"></i> Name :</label>
                    <input type="text" id="name" value="John Doe">
                    
                    <label for="email"><i class="fas fa-envelope"></i> Email :</label>
                    <input type="email" id="email" value="john.doe@example.com">
                    
                    <label for="phone"><i class="fas fa-phone"></i> Phone :</label>
                    <input type="tel" id="phone" value="+201012345678">
                    
                    <label for="department"><i class="fas fa-building"></i> Department :</label>
                    <input type="text" id="department" value="IT">
                    
                    <label for="position"><i class="fas fa-briefcase"></i> Position :</label>
                    <select id="position" name="position">
                        <option value="manager">Manager</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="employee" selected>Employee</option>
                    </select>
                    
                    <button type="submit" class="submit-button"><i class="fas fa-save"></i> Save</button>
                </div>
            </div>
        </div>
    </form>

    <!-- ده عشان تجرب بس فكرة تغيير الصورة بتاعة البروفايل -->

    <script>
        document.getElementById('profile-picture-input').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('profile-picture-preview').src = event.target.result;
        }
        reader.readAsDataURL(file);
    }
});
    </script>
</body>
</html>
