document.addEventListener('DOMContentLoaded', function() {
    // Selecting the dark mode button
    const darkModeBtn = document.getElementById('dark-mode-btn');

    // Selecting the light mode button
    const lightModeBtn = document.getElementById('light-mode-btn');

    // Selecting the dark mode CSS link
    const darkModeCSS = document.querySelector("link[href='../../Shared/Css/SwitchMode/DarkDash.css']");

    // Selecting the light mode CSS link
    const lightModeCSS = document.querySelector("link[href='../../Shared/Css/SwitchMode/LightDash.css']");

    // Toggle function for dark mode
    const toggleDarkMode = () => {
        darkModeCSS.disabled = false;
        lightModeCSS.disabled = true;
        localStorage.setItem('mode', 'dark');
    };

    // Toggle function for light mode
    const toggleLightMode = () => {
        darkModeCSS.disabled = true;
        lightModeCSS.disabled = false;
        localStorage.setItem('mode', 'light');
    };

    // Function to load mode preference from local storage
    const loadModePreference = () => {
        const mode = localStorage.getItem('mode');
        if (mode === 'light') {
            toggleLightMode();
        } else {
            toggleDarkMode();
        }
    };

    // Adding event listener for dark mode button
    if (darkModeBtn) {
        darkModeBtn.addEventListener('click', () => {
            toggleDarkMode();
        });
    }

    // Adding event listener for light mode button
    if (lightModeBtn) {
        lightModeBtn.addEventListener('click', () => {
            toggleLightMode();
        });
    }

    // Loading mode preference
    loadModePreference();
});
