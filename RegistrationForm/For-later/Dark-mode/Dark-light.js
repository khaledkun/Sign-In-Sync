(function() {
    let toggleBtn = document.querySelector("#toggleBtn");
    let bodyEl = document.querySelector("body");
    let darkMode = localStorage.getItem("darkMode") === "true";

    initializeDarkMode();

    toggleBtn.addEventListener('change', (event) => {
      darkMode = event.target.checked;
      setDarkMode(darkMode);
      localStorage.setItem("darkMode", darkMode);
    });

    function initializeDarkMode() {
      if (darkMode) {
        toggleBtn.checked = true;
        setDarkMode(true);
      }
    }

    function setDarkMode(enabled) {
      if (enabled) {
        bodyEl.classList.add("dark");
      } else {
        bodyEl.classList.remove("dark");
      }
    }
  })();