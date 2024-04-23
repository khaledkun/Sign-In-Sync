const darkModeBtn = document.getElementById('dark-mode-btn');
const lightModeBtn = document.getElementById('light-mode-btn');
const darkModeCSS = document.getElementById('dark-mode-css');
const lightModeCSS = document.getElementById('light-mode-css');

const toggleDarkMode = () => {
    darkModeCSS.disabled = false;
    lightModeCSS.disabled = true;
    localStorage.setItem('mode', 'dark');
};

const toggleLightMode = () => {
    darkModeCSS.disabled = true;
    lightModeCSS.disabled = false;
    localStorage.setItem('mode', 'light');
};

const loadModePreference = () => {
    const mode = localStorage.getItem('mode');
    if (mode === 'light') {
        toggleLightMode();
    } else {
        toggleDarkMode();
    }
};

darkModeBtn.addEventListener('click', toggleDarkMode);
lightModeBtn.addEventListener('click', toggleLightMode);
window.addEventListener('DOMContentLoaded', loadModePreference);