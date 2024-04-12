<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "NavBar";
        // Include the Template
        include '../Shared/Templates/MetaTags.php';  
        ?>
</head>
<link rel="stylesheet" href="<?php echo $NavBarPath; ?>">
<script type="text/javascript" src="NavBar.js"></script>
<body>
    <nav>
        <div class="nav__content">
            <div class="LogoWithText">
            <img src="/Shared/Imgs/NavBarLogo.svg" alt="WebSiteLogo" class="NavBarLogo" id="Home"/>
            <div class="logo">
                <a id="#Home">Sign In Sync</a>
            </div>
            </div>
            <label for="check" class="checkbox"><i class="ri-menu-line"></i></label>
            <input type="checkbox" name="check" id="check">
            <ul>
                <li><a href="#Main" class="active">Home</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#About">About Us</a></li>
                <li><a href="#Contact">Contact Us</a></li>
                <div class="action__btns">
                    <a href="../../RegistrationForm/Html/SignUp.html"><button class="Signup">Start a Free Trial</button></a>
                    <a href="../../RegistrationForm/Html/login.php"><button class="Signin">Buy Now</button></a>
                </div>
            </ul>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll("nav a");

            // Function to handle scroll
            function handleScroll() {
                const sections = document.querySelectorAll(".section");
                const scrollPosition = window.scrollY;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 50;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        // Remove active class from all links
                        navLinks.forEach(link => link.classList.remove("active"));
                        // Add active class to current link
                        const targetId = section.getAttribute("id");
                        const correspondingLink = document.querySelector(`nav a[href="#${targetId}"]`);
                        if (correspondingLink) {
                            correspondingLink.classList.add("active");
                        }
                    }
                });
            }

            // Add scroll event listener
            window.addEventListener("scroll", handleScroll);
        });
    </script>
</body>
</html>