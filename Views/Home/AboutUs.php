<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "About Us";
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
       </style> 
</head>
<body>
    <!-- Include the navbar -->
    <?php include $HomepageLayout; ?>
        <!-- لم اقم بربط هذة الصفحة مع باقي الصفح  -->
        <div class="container">
    <h1> </h1>
        <p>
        <B><I><U>We aim to streamline administrative processes to enhance your organizational success, syncing quality, cost, time, and operational ease. <br><br>
        We believe in the importance of improving work performance, offering various communication methods with your employees. <br><br>
        We are eager to hear your feedback on our services and any future services you would like to see added to meet your company's needs. <br><br>
        </p>
    </div>
</body>
</html>
