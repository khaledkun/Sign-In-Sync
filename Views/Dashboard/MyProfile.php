<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "My Profile";
    // Include the Template
    include '../Templates/MetaTags.php';    
    ?>
    <link rel="stylesheet" href="<?php echo $ProfilePath; ?>">
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <form action="submit_profile.php" method="POST"> <!-- ده عشان الباك لما ييجي يبرمجه -->
    <div class="profile">
        <div class="profile-header">
            <h1><i class="fas fa-user Icons"></i> My Profile</h1>
        </div>
        <div class="profile-details grid-container">
            <div class="profile-item profile-picture" style="background-image: url('placeholder-image.png');">
                <label for="profile-picture-input">
                    <img id="profile-picture-preview" src="<?php echo $user2Path; ?>" alt="Profile Picture">
                    <input type="file" id="profile-picture-input" accept="image/*" style="display: none;">
                    <i class="fas fa-camera Icons"></i>
                </label>
            </div>
            <div class="profile-details grid-container">
                <div class="profile-item profile-info">
                    <label for="name"><i class="fas fa-user Icons"></i> First Name :</label>
                    <input type="text" id="name" value="Sameh" disabled>

                    <label for="name"><i class="fas fa-user Icons"></i> Last Name :</label>
                    <input type="text" id="name" value="Ayman" disabled>
                    
                    <label for="email"><i class="fas fa-envelope Icons"></i> Email :</label>
                    <input type="email" id="email" value="sameh.aymen@example.com"><a href="<?php echo $EmailVerifyView; ?>" target="_blank" class="change">Verify</a>
                    
                    <label for="phone"><i class="fas fa-phone Icons"></i> Phone :</label>
                    <input type="tel" id="phone" value="+201012345678">

                    <label for="name"><i class="fa-solid fa-mars-and-venus Icons"></i> Gender :</label>
                    <input type="text" id="name" value="Male" disabled>

                    <label for="name"><i class="fas fa-lock Icons"></i> Password :</label>
                    <input type="text" id="name" value="*********" disabled><a href="<?php echo $ForgetPassView; ?>" target="_blank" class="change">Change</a>
                    
                    <label for="department"><i class="fas fa-building Icons"></i> Department :</label>
                    <input type="text" id="department" value="IT" disabled>
                    
                    <label for="position"><i class="fas fa-briefcase Icons"></i> Position :</label>
                    <input type="text" id="position" value="Employee" disabled>
                    
                    <button type="submit" class="submit-button"><i class="fas fa-save Icons"></i> Save</button>
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
