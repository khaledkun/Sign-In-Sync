<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Our Team";
        // Include the Template
        include '../../Templates/MetaTags.php';
        ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: var(--Body-Background);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .container {
            width: 95%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 120px;
            margin-bottom: 50px;
            text-align: center;
        }
        h1 {
            color: var(--Heading);
            font-size: 50px;
            margin-bottom: 40px;
            text-align: center;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            justify-items: center;
        }
        .item {
            width: 100%;
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
        }
        .item img {
            width: 200px;
            margin-left: 200px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .item p {
            margin: 4px 0;
        }
        .description p {
            flex: 1;
            color: var(--Heading);
            text-align: left;
        }
        .item .description h2 {
            font-size: 40px;
            margin-bottom: 20px;
            text-align: left;
            color: var(--Heading);
        }
        .item .description h3 {
            font-size: 20px;
            margin-bottom: 20px;
            text-align: left;
            color: var(--Heading);
        }
        .social-icons {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #002cb6;
            color: #fff;
            border-radius: 50%;
            margin: 0 5px;
            text-align: center;
            line-height: 30px;
            font-size: 20px;
            text-decoration: none;
            padding: 5px;
        }
        .social-icons a:hover {
           background-color: #0056b3;
           transform: scale(1.1);
           transition: 0.3s;
        }
         @media (max-width: 1024px) {
            .item img {
            margin-left: 0px;
         }
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    <?php include $HomepageLayout; ?>
    <!-- لم اقم بربط هذة الصفحة مع باقي الصفح -->
    <div class="container">
        <h1>Our Team</h1>
        <div class="grid">
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name1</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name2</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name3</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name4</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name5</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name6</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name7</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name8</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name9</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name10</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#" title="Phone" target="_blank"><i class="fas fa-phone"></i></a>
                    <a href="#" title="Microsoft Teams" target="_blank"><span class="mdi mdi-microsoft-teams"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>