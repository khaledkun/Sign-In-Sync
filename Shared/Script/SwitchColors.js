document.addEventListener('DOMContentLoaded', function() {
    // Selecting the mode toggle button(s)
    const darkModeBtn = document.getElementById('dark-mode-btn');
    const lightModeBtn = document.getElementById('light-mode-btn');
    const modeToggleBtn = document.getElementById('mode-toggle-btn');

    // Selecting the dark mode CSS link
    const darkModeCSS = document.querySelector("link[href='../../Shared/Css/SwitchMode/Dark.css']");

    // Selecting the light mode CSS link
    const lightModeCSS = document.querySelector("link[href='../../Shared/Css/SwitchMode/Light.css']");

    // Function to toggle dark mode
    const toggleDarkMode = () => {
        darkModeCSS.disabled = false;
        lightModeCSS.disabled = true;
        localStorage.setItem('mode', 'dark');
        updateIcon('moon');
    };

    // Function to toggle light mode
    const toggleLightMode = () => {
        darkModeCSS.disabled = true;
        lightModeCSS.disabled = false;
        localStorage.setItem('mode', 'light');
        updateIcon('sun');
    };

    // Function to toggle between dark and light modes
    const toggleMode = () => {
        if (modeToggleBtn) {
            if (darkModeCSS.disabled) {
                toggleDarkMode();
            } else {
                toggleLightMode();
            }
        }
    };

    // Function to update icon
    const updateIcon = (iconType) => {
        const icon = document.getElementById('mode-icon');
        icon.className = '';
        if (iconType === 'moon') {
            icon.classList.add('fas', 'fa-moon');
        } else {
            icon.classList.add('fas', 'fa-sun');
        }
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

    // Adding event listener for mode toggle button
    if (modeToggleBtn) {
        modeToggleBtn.addEventListener('click', () => {
            toggleMode();
        });
    }

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
