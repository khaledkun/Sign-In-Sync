document.addEventListener("DOMContentLoaded", function() {
    // Check if it's the homepage
    const pageTitle = document.title;
    const navLinks = document.querySelectorAll("nav a");

    if (pageTitle === 'HomePage') {
        function handleScroll() {
            const sections = document.querySelectorAll(".section");
            const scrollPosition = window.scrollY;

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 50;
                const sectionBottom = sectionTop + section.offsetHeight;
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    navLinks.forEach(link => link.classList.remove("active"));
                    const targetId = section.getAttribute("id");
                    const correspondingLink = document.querySelector(`nav a[href="HomePage.php#${targetId}"]`);
                    if (correspondingLink) {
                        correspondingLink.classList.add("active");
                    }
                }
            });
        }
        window.addEventListener("scroll", handleScroll);

        window.addEventListener("scroll", function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector('.scroll-to-top').style.display = "block";
            } else {
                document.querySelector('.scroll-to-top').style.display = "none";
            }
        });
    } else {
        // Remove active class from all links
        navLinks.forEach(link => {
            link.classList.remove("active");
        });

        // Set active link based on page title
        if (pageTitle === 'About Us') {
            navLinks.forEach(link => {
                if (link.textContent === 'About Us') {
                    link.classList.add("active");
                }
            });
        } else if (pageTitle === 'Our Team') {
            navLinks.forEach(link => {
                if (link.textContent === 'Contact Us') {
                    link.classList.add("active");
                }
            });
        } else if (pageTitle === 'Company Vision') {
            navLinks.forEach(link => {
                if (link.textContent === 'Home') {
                    link.classList.add("active");
                }
            });
        }
    }
});
