
<?php
session_start();

if(!$_SESSION['id']){
    header("location:../Registration/login.php");
    exit();
 }

$id =$_SESSION['id'];
$first_login = isset($_SESSION['first_login']) && $_SESSION['first_login'];

// Reset the flag after the first login
if ($first_login) {
    $_SESSION['first_login'] = false;
}
include '../../Templates/SharedConfig.php';
include_once($ConnectContrl);
$query1 ="SELECT * FROM employee WHERE id ='$id'";
$result1=$conn->query($query1);
$userdata1 =$result1->fetch_assoc();
$posstion = $userdata1['idPrive'];
$imgname = $userdata1['imgname'];
$imgpath = "../../Controllers/Registration/img/"."$imgname";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "My Profile";
    // Include the Template
    include '../../Templates/MetaTags.php';    
    ?>
    <link rel="stylesheet" href="<?php echo $ProfilePath; ?>">
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <form action="../../Controllers/Registration/addpict.php" method="POST" enctype="multipart/form-data"> <!-- ده عشان الباك لما ييجي يبرمجه -->
    <div class="profile">
        <div class="profile-header">
            <h1><i class="fas fa-user Icons"></i> My Profile</h1>
        </div>
        <div class="profile-details grid-container">
            <div class="profile-item profile-picture" style="background-image: url('placeholder-image.png');">
            <i class="fa fa-trash Icons" id="remove-picture-icon"></i>
            <?php if ($imgname && file_exists($imgpath)) : ?>
            <img id="profile-picture-preview" src="<?= $imgpath ?>" alt="Profile Picture">
            <?php else : ?>
            <img id="profile-picture-preview" src="<?= $user2Path ?>" alt="Profile Picture" style="filter: var(--Img);">
                 <?php endif; ?>
                <label for="profile-picture-input">
                <?php
                // $user2Path?>
                <?php
                // ?>
                    <i class="fas fa-camera Icons">
                    <input type="file" id="profile-picture-input" accept="image/*" style="display: none;" name="img"></i>
                    <p id="error-message" style="color: red;"></p>
                </label>
            </div>
            <div class="profile-details grid-container">
                <div class="profile-item profile-info">
                <!--  -->
                    <label for="name"><i class="fas fa-user Icons"></i> First Name :</label>
                    <input type="text" id="name" value="<?=$userdata1['firstname']?>" disabled>

                    <label for="name"><i class="fas fa-user Icons"></i> Last Name :</label>
                    <input type="text" id="name" value="<?= $userdata1['lastname']?>" disabled>
                    
                    <label for="email"><i class="fas fa-envelope Icons"></i> Email :</label>
                    <input type="email" id="email" value="<?= $userdata1['email']?>"><a href="<?php echo $EmailVerifyView; ?>" target="_blank" class="change">Verify</a>
                    
                    <label for="phone"><i class="fas fa-phone Icons"></i> Phone :</label>
                    <input type="tel" id="phone" value="<?= $userdata1['phone']?>">

                    <label for="name"><i class="fa-solid fa-mars-and-venus Icons"></i> Gender :</label>
                    <input type="text" id="name" value="<?= $userdata1['gender'] == 1? 'Female':'Male'?>" disabled>

                    <label for="name"><i class="fas fa-lock Icons"></i> Password :</label>
                    <input type="password" id="name" value="<?= $userdata1['passsword']?>" disabled><a href="<?php echo $ForgetPassView; ?>" target="_blank" class="change">Change</a>
                    
                    <label for="position"><i class="fas fa-briefcase Icons"></i> Position :</label>
                    <select id="position" name="position" disabled>
                    <option value="3" <?php if($posstion == 3) echo "selected"; ?>>&#xf502; Admin</option>
                    <option value="1" <?php if($posstion == 1) echo "selected"; ?>>&#xf007; Employee</option>
                    <option value="2" <?php if($posstion == 2) echo "selected"; ?>>&#xf505; Supervisor</option>
                    <option value="4" <?php if($posstion == 4) echo "selected"; ?>>&#xf508; Manager</option>
                    </select>
                </div>
                <button type="submit" class="submit-button">Save</button>
            </div>
        </div>
    </form>

    <!-- ده عشان تجرب بس فكرة تغيير الصورة بتاعة البروفايل -->

    <script>
    document.getElementById('profile-picture-input').addEventListener('change', function() {
        const file = this.files[0];
        const reader = new FileReader();
        const profilePicture = document.getElementById('profile-picture-preview');
        const errorMessage = document.getElementById('error-message');
        const maxSize = 2 * 1024 * 1024; 
        const minWidth = 150;
        const minHeight = 150;

        reader.onload = function(event) {
            const img = new Image();
            img.src = event.target.result;
            img.onload = function() {
                if (file.size > maxSize) {
                    errorMessage.textContent = 'File size must be less than 2MB';
                    document.getElementById('profile-picture-input').value = '';
                    profilePicture.src = '';
                    return;
                }
                if (img.width < minWidth || img.height < minHeight) {
                    errorMessage.textContent = 'Image dimensions must be at least 150x150 pixels';
                    document.getElementById('profile-picture-input').value = '';
                    profilePicture.src = '';
                    return;
                }
                errorMessage.textContent = ''; 
                profilePicture.src = img.src; 
            };
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('remove-picture-icon').addEventListener('click', function() {
    document.getElementById('profile-picture-input').value = '';
    document.getElementById('profile-picture-preview').src = '<?= $user2Path ?>';
    document.getElementById('error-message').textContent = '';
});
</script>

</body>
</html>
