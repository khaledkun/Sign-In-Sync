const sections = document.querySelectorAll('.section');
function checkActiveSection() {
    let scrollPosition = window.scrollY;
    sections.forEach(section => {
        const top = section.offsetTop - 150;
        const height = section.offsetHeight;
        const id = section.getAttribute('id');
    
        if (scrollPosition >= top && scrollPosition < top + height) {
            document.querySelector('nav li a[href="#' + id + '"]').classList.add('active');
        } else {
            document.querySelector('nav li a[href="#' + id + '"]').classList.remove('active');
        }
    });
}
window.addEventListener('scroll', checkActiveSection);
window.addEventListener('DOMContentLoaded', checkActiveSection);
function hideMenu() {
document.getElementById('check').checked = false;
}
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    link.addEventListener('click', hideMenu);
});