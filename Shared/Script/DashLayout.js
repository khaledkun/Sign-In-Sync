    document.addEventListener("DOMContentLoaded", function() {
        const menuIcon = document.querySelector('.menu-icon');
        const navbar = document.querySelector('.navbar');
        
        function toggleNavbar() {
            if (navbar.classList.contains('hidden')) {
                navbar.classList.remove('hidden');
                navbar.classList.remove('closed');
            } else {
                navbar.classList.add('hidden');
                setTimeout(() => {
                    navbar.classList.add('closed');
                }, 500);
            }
            menuIcon.innerHTML = navbar.classList.contains('hidden') ? '<i class="fas fa-bars"></i>' : '<i class="fas fa-times"></i>';
        }

        menuIcon.addEventListener('click', toggleNavbar);

        if (window.innerWidth <= 750) {
            navbar.classList.add('hidden');
            navbar.classList.add('closed');
            menuIcon.innerHTML = '<i class="fas fa-bars"></i>';
        }

        window.addEventListener('resize', function() {
            if (window.innerWidth <= 750) {
                navbar.classList.add('hidden');
                navbar.classList.add('closed');
                menuIcon.innerHTML = '<i class="fas fa-bars"></i>';
            } else {
                navbar.classList.remove('hidden');
                navbar.classList.remove('closed');
                menuIcon.innerHTML = '<i class="fas fa-times"></i>';
            }
        });
    });