<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Services";
        // Include the Template
        include '../../Templates/MetaTags.php';
        ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
      <style>
        body {
            font-family: Arial, sans-serif;
            background-color: var(--Body-Background);
            padding: 50px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: var(--Body-Background);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: var(--Heading);
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: var(--Heading);
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: left;
        }
       </style> 
</head>
<body>
    <!-- Include the navbar -->
    <?php include $HomepageLayout; ?>
        <!-- لم اقم بربط هذة الصفحة مع باقي الصفح  -->
        <div class="container">
    <h1>Services</h1>
        <p>
        <B><I><U>Services Content
        </p>
    </div>
</body>
</html>
