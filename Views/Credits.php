<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Our Team";
        // Include the Template
        include '../Shared/Templates/MetaTags.php';
        ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
      <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #004baa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 95%;
            background-color: #002cb6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 110px;
        }
        h1 {
            color: #f9fafc;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 100%;
        }
        .item {
            width: calc(20% - 20px);
            height: 210px;
            background-color: #f9fafc;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 50px;
            margin: 10px;
            align-items: center;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .item p {
            margin: 4px 0;
        }
        .item img {
           width: 80px;
           border-radius: 50%;
        }
        @media screen and (max-width: 600px) {
            .item {
                width: 100%;
            }
        }
       </style> 
</head>
<body>
    <!-- Include the navbar -->
    <?php include '../Shared/NavBar/NavBar.php'; ?>
        <!-- لم اقم بربط هذة الصفحة مع باقي الصفح  -->
        <div class="container">
          <h1>Our Team </h1>
         <div class="grid">
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>عبدالرحمن محمد حامد حسن</p>
            <p>Back-End Dev</p>
            <p>01122859748</p>
            <p>abdel.rahman31053099@art.tanta.edu
                .eg
            </p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>عبد الرحمن محمد الأحمدي دحروج</p>
            <p>Mobile-Dev</p>
            <p>01226336080</p>
            <p>abdel.rahman31067369@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>ندي محمود احمد الدبور</p>
            <p>Back-End Dev</p>
            <p>01278819019</p>
            <p>nada31050307@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>ياسمين السيد عبد المقصود رجب</p>
            <p>Digital Marketing</p>
            <p>01201241408</p>
            <p>yassmine31052542@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>خالد ناجي عبد الجليل محمد حمام</p>
            <p>Full Stack Dev - Leader</p>
            <p>01117134243</p>
            <p>khaled31067026@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>محمد محمد عبدالله حسين</p>
            <p>Graphic Designer</p>
            <p>01129483536</p>
            <p>mohammed31067703@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>سامح ايمن صلاح محمد</p>
            <p>Front-End Dev</p>
            <p>01067088917</p>
            <p>sameh31053717@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>علي محمد علي عبدالله التركاوي</p>
            <p>Ui&Ux</p>
            <p>01009571383</p>
            <p>aly31067527@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>ياسمين عبد الله خليفة</p>
            <p>Graphic Designer</p>
            <p>01220859044</p>
            <p>yassmine31067064@art.tanta.edu
                .eg</p>
           </div>
           <div class="item">
           <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
            <p>آية سعيد عبدالرحمن دعبس</p>
            <p>Mobile-Dev</p>
            <p>01129532933</p>
            <p>aya31053410@art.tanta.edu
                .eg</p>
           </div>
         </div>
        </div>
</body>
</html>
