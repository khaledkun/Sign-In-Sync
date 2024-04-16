    window.addEventListener("scroll", function() {
        const scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 20) {
            scrollButton.style.display = "block";
        } else {
            scrollButton.style.display = "none";
        }
    });