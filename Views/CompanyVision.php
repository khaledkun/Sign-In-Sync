<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Company Vision";
        // Include the Template
        include '../Shared/Templates/MetaTags.php';
        ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
      <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #004baa;
            padding: 50px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #002cb6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #f9fafc;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #f9fafc;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: left;
        }
        @media (max-width: 750px) {
         body {
          height: 120vh;
         }
        }
       </style> 
</head>
<body>
    <!-- Include the navbar -->
    <?php include $HomepageLayout; ?>
        <!-- لم اقم بربط هذة الصفحة مع باقي الصفح  -->
    <div class="container">
    <h1> Our vision at Sign In Sync....</h1>
        <p>
        <B><I><U>Our vision at Sign In Sync is to achieve synchronization and harmony in recording employee attendance 
        and departure,to build a bright future where orderand efficiency prevail.</U></I></B><br>
         The Sign In Sync application/website was developed to be an attendance and departure portal for employees
          and students as well, stimulating excellence and creativity and building a bright future where order 
          and efficiency prevail. We strive to provide a synchronous and unified work experience for recording attendance
           and departure for employees and students, aiming to be the ideal destination for companies interested in managing
            and organizing their operations with efficiency, high accuracy, and an easy and simple user interface.
        </p>
    </div>    
</body>
</html>
