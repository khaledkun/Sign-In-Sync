<?php
session_start();

if(!$_SESSION['id']){
    header("location:../Registration/login.php");
    exit();
}

$idUser = $_SESSION['id'];
include '../../Controllers/Registration/connect.php';
$query5 = "SELECT * FROM employee WHERE id = '$idUser'";
// You Can Change the Page Title as you like
$pageTitle = "Employees Settings";
// Include the Template
include '../../Templates/MetaTags.php';

$result5 = $conn->query($query5);
$userData = $result5->fetch_assoc();
$idPrive = $userData['idPrive'];

//------------------------employee data sitting
$query1 = "SELECT * FROM bosssitting WHERE idPrive = '1'";
$result1 = $conn->query($query1);
$employee = $result1->fetch_assoc();

//------------------------supervisor data sitting
$query2 = "SELECT * FROM bosssitting WHERE idPrive = '2'";
$result2 = $conn->query($query2);
$supervisor = $result2->fetch_assoc();

//-------------------------admin data sitting
$query3 = "SELECT * FROM bosssitting WHERE idPrive = '3'";
$result3 = $conn->query($query3);
$admin = $result3->fetch_assoc();

//-------------------------manager data sitting
$query4 = "SELECT * FROM bosssitting WHERE idPrive = '4'";
$result4 = $conn->query($query4);
$manager = $result4->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo $BossSettingsPath; ?>">
    <?php include '../../Templates/MetaTags.php'; ?>
</head>
<body>
    <?php include $EmpDashboardLayout; ?>
    <form action="../../Controllers/Registration/sittingboss.php" method="POST">
        <div class="dashboard">
            <div class="header">
                <h1><i class="fas fa-user-cog Icons"></i> Employees Settings</h1>
            </div>

            <div class="grid-item">
                <h2><i class="fas fa-user Icons"></i> Employee Settings</h2>
                <div class="text-box-container">
                    <label for="name">Salary</label>
                    <input type="number" id="security1" name="security0-1" placeholder="Salary" min="<?= $employee['salary'] ?>" max="<?= $employee['salary'] ?>" value="<?= $employee['salary']; ?>"><br>
                    <label for="name">Shift Hours</label>
                    <input type="number" id="security2" name="security0-2" placeholder="Shift Hours" min="<?= $employee['shiftHour'] ?>" max="<?= $employee['shiftHour'] ?>" value="<?= $employee['shiftHour']; ?>"><br>
                    <label for="name">Max Days For Absence</label>
                    <input type="number" id="security3" name="security0-3" placeholder="Max Days for Absence" min="<?= $employee['maxAbesence'] ?>" max="<?= $employee['maxAbesence'] ?>" value="<?= $employee['maxAbesence']; ?>"><br>
                    <label for="name">Max Days For Latency</label>
                    <input type="number" id="security4" name="security0-4" placeholder="Max Days for Latency" min="<?= $employee['maxLatence'] ?>" max="<?= $employee['maxLatence'] ?>" value="<?= $employee['maxLatence']; ?>"><br>
                    <label for="name">Pay Levy per Hour</label>
                    <input type="number" id="security5" name="security0-5" placeholder="Pay Levy per Hour" min="<?= $employee['payHour'] ?>" max="<?= $employee['payHour'] ?>" value="<?= $employee['payHour']; ?>"><br>
                </div>
            </div>

            <div class="grid-item">
                <h2><i class="fas fa-user-shield Icons"></i> Supervisor Settings</h2>
                <div class="checkbox-container">
                    <div class="text-box-container">
                    <label for="name">Salary</label>
                        <input type="number" id="security1" name="security1-1" placeholder="Salary" min="<?= $supervisor['salary'] ?>" max="<?= $supervisor['salary'] ?>" value="<?= $supervisor['salary']; ?>"><br>
                        <label for="name">Shift Hours</label>
                        <input type="number" id="security2" name="security1-2" placeholder="Shift Hours" min="<?= $supervisor['shiftHour'] ?>" max="<?= $supervisor['shiftHour'] ?>" value="<?= $supervisor['shiftHour']; ?>"><br>
                        <label for="name">Max Days For Absence</label>
                        <input type="number" id="security3" name="security1-3" placeholder="Max Days for Absence" min="<?= $supervisor['maxAbesence'] ?>" max="<?= $supervisor['maxAbesence'] ?>" value="<?= $supervisor['maxAbesence']; ?>"><br>
                        <label for="name">Max Days For Latency</label>
                        <input type="number" id="security4" name="security1-4" placeholder="Max Days for Latency" min="<?= $supervisor['maxLatence'] ?>" max="<?= $supervisor['maxLatence'] ?>" value="<?= $supervisor['maxLatence']; ?>"><br>
                        <label for="name">Pay Levy per Hour</label>
                        <input type="number" id="security5" name="security1-5" placeholder="Pay Levy per Hour" min="<?= $supervisor['payHour'] ?>" max="<?= $supervisor['payHour'] ?>" value="<?= $supervisor['payHour']; ?>"><br>
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <h2><i class="fas fa-user-tie Icons"></i> Manager Settings</h2>
                <div class="radio-container">
                    <div class="text-box-container">
                    <label for="name">Salary</label>
                        <input type="number" id="security1" name="security2-1" placeholder="Salary" min="0" value="<?= $manager['salary']; ?>"><br>
                        <label for="name">Shift Hours</label>
                        <input type="number" id="security2" name="security2-2" placeholder="Shift Hours" min="0" value="<?= $manager['shiftHour']; ?>"><br>
                        <label for="name">Max Days For Absence</label>
                        <input type="number" id="security3" name="security2-3" placeholder="Max Days for Absence" min="0" value="<?= $manager['maxAbesence']; ?>"><br>
                        <label for="name">Max Days For Latency</label>
                        <input type="number" id="security4" name="security2-4" placeholder="Max Days for Latency" min="0" value="<?= $manager['maxLatence']; ?>"><br>
                        <label for="name">Pay Levy per Hour</label>
                        <input type="number" id="security5" name="security2-5" placeholder="Pay Levy per Hour" min="0" value="<?= $manager['payHour']; ?>"><br>
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-button">Save</button>
        </div>
    </form>
</body>
</html>
