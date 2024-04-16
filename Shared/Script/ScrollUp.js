document.addEventListener("DOMContentLoaded", function() {
    const scrollButton = document.querySelector('.scroll-to-top');

    window.addEventListener("scroll", function() {
        const scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 20) {
            scrollButton.style.display = "block";
        } else {
            scrollButton.style.display = "none";
        }
    });
});
