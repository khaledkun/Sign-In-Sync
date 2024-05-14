<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    $idUser= $_SESSION['id'];
    include '../../Controllers/Registration/connect.php';
    $query5 = "SELECT * FROM employee WHERE id = '$idUser'";
    // You Can Change the Page Title as you like
    $pageTitle = "Employees Settings";
    // Include the Template
    include '../../Templates/MetaTags.php'; 
    
    $result5= $conn->query($query5);
    $userData = $result5->fetch_assoc();
    $idPrive = 4;

    // $idPrive = $userData['idPrive'];
    echo $idPrive;
    //------------------------employee data sitting
    $query1 ="SELECT * FROM bosssitting WHERE idPrive = '1'";
    $result1 =$conn->query($query1);
    $employee = $result1->fetch_assoc();
    
    
    //------------------------supervisor data sitting
    $query2 ="SELECT * FROM bosssitting WHERE idPrive = '2'";
    $result2 =$conn->query($query2);
    $supervisor = $result2->fetch_assoc();
    //-------------------------admin data sitting
    $query3 ="SELECT * FROM bosssitting WHERE idPrive = '3'";
    $result3 =$conn->query($query3);
    $admin =$result3->fetch_assoc();
    //-------------------------manager data sitting
    $query4 ="SELECT * FROM bosssitting WHERE idPrive = '4'";
    $result4 =$conn->query($query4);
    $manager = $result4->fetch_assoc();

    ?>
    <link rel="stylesheet" href="<?php echo $BossSettingsPath; ?>">
    </head>
<body>
<!-- Here was the Navbar -->
    <!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
    <form action="../../Controllers/Registration/sittingboss.php" method="POST"> <!-- ده عشان الباك لما ييجي يبرمجه -->
    <div class="dashboard">
        <div class="header">
                <h1><i class="fas fa-user-cog Icons"></i> Employees Settings</h1>
        </div>
        <?php 
        if($idPrive != 2 || $idPrive == 4){
       
            ?>
        
        <div class="grid-item">
            <h2><i class="fas fa-user Icons"></i> Employee Settings</h2>
            <div class="text-box-container">
             
                <input type="number" id="security1" name="security0-1" placeholder="Salary" min="<?=$idPrive <= 2 ? $employee['salary'] : ""?>" max="<?=$idPrive <= 2 ? $employee['salary'] : ""?>" value="<?= $employee['salary'];?>" ><br>
                <input type="number" id="security2" name="security0-2" placeholder="Shift Hours" min="<?=$idPrive <= 2 ? $employee['shiftHour'] : ""?>" max="<?=$idPrive <= 2 ? $employee['shiftHour'] : ""?>" value="<?= $employee['shiftHour'];?>"><br>
                <input type="number" id="security3" name="security0-3" placeholder="Max Days for Absence" min="<?=$idPrive <= 2 ? $employee['maxAbesence'] : ""?>" max="<?=$idPrive <= 2 ? $employee['maxAbesence'] : ""?>" value="<?= $employee['maxAbesence'];?>" disabled ><br>
                <input type="number" id="security4" name="security0-4" placeholder="Max Days for Latency" min="<?=$idPrive <= 2 ? $employee['maxLatence'] : ""?>" max="<?=$idPrive <= 2 ? $employee['maxLatence'] : ""?>" value="<?= $employee['maxLatence'];?>"><br>
                <input type="number" id="security5" name="security0-5" placeholder="Pay Levy per Hour" min="<?=$idPrive <= 2 ? $employee['payHour'] : ""?>" max="<?=$idPrive <= 2 ? $employee['payHour'] : ""?>" value="<?= $employee['payHour'];?>"><br>
            </div>
        </div>
            <?php } 
            ?>


        <?php 
        if($idPrive == 2 || $idPrive == 4 || $idPrive == 3){
       
            ?>
            <div class="grid-item">
            <h2><i class="fas fa-user-shield Icons"></i> Supervisor Settings</h2>
            <div class="checkbox-container">
                <div class="text-box-container">
                    <input type="number" id="security1" name="security1-1" placeholder="Salary" min="<?=$idPrive <= 2 ? $supervisor['salary'] : ""?>" max="<?=$idPrive <= 2 ? $supervisor['salary'] : ""?>" value="10" value="<?= $supervisor['salary'];?>"><br>
                    <input type="number" id="security2" name="security1-2" placeholder="Shift Hours" min="<?=$idPrive <= 2 ? $supervisor['shiftHour'] : ""?>" max="<?=$idPrive <= 2 ? $supervisor['shiftHour'] : ""?>" value="<?= $supervisor['shiftHour'];?>"><br>
                    <input type="number" id="security3" name="security1-3" placeholder="Max Days for Absence" min="<?=$idPrive <= 2 ? $supervisor['maxAbesence'] : ""?>" max="<?=$idPrive <= 2 ? $supervisor['maxAbesence'] : ""?>" value="<?= $supervisor['maxAbesence'];?>"><br>
                    <input type="number" id="security4" name="security1-4" placeholder="Max Days for Latency" min="<?=$idPrive <= 2 ? $supervisor['maxLatence'] : ""?>" max="<?=$idPrive <= 2 ? $supervisor['maxLatence'] : ""?>" value="<?= $supervisor['maxLatence'];?>"><br>
                    <input type="number" id="security5" name="security1-5" placeholder="Pay Levy per Hour" min="<?=$idPrive <= 2 ? $supervisor['payHour'] : ""?>" max="<?=$idPrive <= 2 ? $supervisor['payHour'] : ""?>" value="<?= $supervisor['payHour'];?>"><br>
                </div>
            </div>
        </div>
<?php
        }
        ?>
        <?php 
        if($idPrive == 3 || $idPrive == 4){
        ?>
        
        <div class="grid-item">
            <h2><i class="fas fa-user-tie Icons"></i> Manager Settings</h2>
            <div class="radio-container">
                <div class="text-box-container">
                    <input type="number" id="security1" name="security2-1" placeholder="Salary" min="0" value="<?= $manager['salary'];?>"><br>
                    <input type="number" id="security2" name="security2-2" placeholder="Shift Hours" min="0" value="<?= $manager['shiftHour'];?>"><br>
                    <input type="number" id="security3" name="security2-3" placeholder="Max Days for Absence" min="0" value="<?= $manager['maxAbesence'];?>"><br>
                    <input type="number" id="security4" name="security2-4" placeholder="Max Days for Latency" min="0" value="<?= $manager['maxLatence'];?>"><br>
                    <input type="number" id="security5" name="security2-5" placeholder="Pay Levy per Hour" min="0" value="<?= $manager['payHour'];?>"><br>
                </div>
            </div>
        </div>
        <button type="submit" class="submit-button">Save</button>
      </div>
            <?php }?>
    </form>
</body>
</html>