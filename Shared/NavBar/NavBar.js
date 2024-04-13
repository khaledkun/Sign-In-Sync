document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll("nav a");
    function handleScroll() {
        const sections = document.querySelectorAll(".section");
        const scrollPosition = window.scrollY;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 50;
            const sectionBottom = sectionTop + section.offsetHeight;
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                navLinks.forEach(link => link.classList.remove("active"));
                const targetId = section.getAttribute("id");
                const correspondingLink = document.querySelector(`nav a[href="#${targetId}"]`);
                if (correspondingLink) {
                    correspondingLink.classList.add("active");
                }
            }
        });
    }
    window.addEventListener("scroll", handleScroll);
});