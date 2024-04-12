<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // You Can Change the Page Title as you like
    $pageTitle = "HomePage";
    // Include the Template
    include '../Shared/Templates/MetaTags.php';   
    ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
</head>
<body>
    <!-- Include the navbar -->
    <?php include '../Shared/NavBar/NavBar.php'; ?>
    <section class="section" id="Home">
        <div class="section__container">
            <div class="content">
                <h1 class="title">
                    The smart way to manage your team with<span> SIS<br></span>
                </h1>
                <p class="description">
                    Sign In App is a modern, enjoyable way to sign in visitors and staff, and book desks & meeting rooms. From smartphone contactless sign in to RFID and QR code scanning, choose the sign in option that works best for your organization. Join the millions signing in with Sign In App
                    <a id="read-more" href="Company vision.php">Read More</a>
                </p>
                <div class="action__btns">
                    <a href="../../Registration Form v10-K/Html/SignUp.html"><button class="Signup">Start a Free Trial</button></a>
                    <a href="../../Registration Form v10-K/Html/login.php"><button class="Signin">Buy Now</button></a>
                </div>
            </div>
            <div class="image">
                <img src="../Shared/Imgs/Mocap2-Y.jpg" alt="profile">
            </div>
        </div>
    </section>
    <section class="section" id="Services">
        <div class="section__features">
            <div class="content_features">
                <h1 class="title_features">
                    <span>Our Services<br></span>
                </h1>
                <div class="features__grid">
                    <div class="feature">
                        <i class="ri-lock-line"></i>
                        <h2>Secure Sign-Ins</h2>
                        <p>Secure logins for tracking employee attendance, keeping data safe.</p>
                    </div>
                    <div class="feature">
                        <i class="ri-smartphone-line"></i>
                        <h2>Mobile Integration</h2>
                        <p>Track staff attendance easily with our Mobile Integration feature, anytime, anywhere.</p>
                    </div>
                    <div class="feature">
                        <i class="ri-calendar-event-line"></i>
                        <h2>Time Optimization</h2>
                        <p>Turn your TIME from foe to friend with our Time Optimization feature in the employee attendance app!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="About">
        <div class="section_about">
            <div class="content_about">
                <h1 class="title_about">
                    <span>About Us<br></span>
                </h1>
                <p class="description_about">
                    In <strong>Sign In Sync</strong>,<br><br> 
                    we are committed to providing the best experience for managing employee attendance and time tracking, whether it be for employees or students. <br><br>
                    We strive to continuously develop our application, making it more innovative while ensuring ease of use to meet the needs of small and medium-sized businesses alike. <br><br>
                    Additionally, we are working on developing larger versions to be used by larger corporations, incorporating advanced technological enhancements and a professional team. <br><br>
                    We aim to provide the best version of our attendance and time tracking application, ensuring accuracy and effectiveness in human resource management. <br><br>
                    We aim to streamline administrative processes to enhance your organizational success, syncing quality, cost, time, and operational ease. <br><br>
                    We believe in the importance of improving work performance, offering various communication methods with your employees. <br><br>
                    We are eager to hear your feedback on our services and any future services you would like to see added to meet your company's needs. <br><br>
                    We are with you every step of the way, ensuring that with <strong>Sign In Sync</strong>
                    , managers can monitor their companies securely without invading employee privacy <a id="read-more" href="#">Read More</a></p>
                    
                <div class="action__btns">
                    <a href="https://www.facebook.com">
                        <button class="watch"><i class="ri-play-circle-line"></i>Introducing Sign In Sync</button>
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="../Shared/Imgs/Mocap2-Y.jpg" alt="profile">
            </div>
        </div>
    </section>
    <section class="section" id="Contact">
        <div class="section__contact">
            <div class="content_contact">
               
                <form class="contact-form">
                    
                   <div class="form-container">
                    <h1 class="title_contact">
                        <span>Contact Us<br></span>
                    </h1>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="first_name" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="last_name" name="last_name" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Mobile" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="4" placeholder="Type Your Message Here" required></textarea>
                    </div>
                    <div class="action__btns">
                        <button class="send">Send</button>
                    </div>
                   </div> 
                </form>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer__content">
            <div class="social-media">
                <a href="mailto:signinsyncsis@gmail.com"><i class="ri-mail-fill"></i></a>
                <a href="#"><i class="ri-phone-fill"></i></a>
                <a href="#"><i class="ri-team-fill"></i></a>
            </div>
            <p>&copy; 2024 Sign In Sync. All rights reserved.</p>
        </div>
    </footer>
    <a href="#" class="scroll-to-top"><i class="fas fa-arrow-up"></i></a>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        window.onscroll = function() {scrollFunction()};
    });

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.querySelector('.scroll-to-top').style.display = "block";
        } else {
            document.querySelector('.scroll-to-top').style.display = "none";
        }
    }
    </script>
</body>
</html>