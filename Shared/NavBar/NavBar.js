document.addEventListener("DOMContentLoaded", function() {
    const pageTitle = document.title;
    const navLinks = document.querySelectorAll("nav a");
    const scrollButton = document.querySelector('.scroll-to-top');

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
    } else {
        navLinks.forEach(link => {
            link.classList.remove("active");
        });

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
    window.addEventListener("scroll", function() {
        const scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 20) {
            scrollButton.style.display = "block";
        } else {
            scrollButton.style.display = "none";
        }
    });
});