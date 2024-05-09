document.addEventListener("DOMContentLoaded", () => {
    const timedisplay = document.querySelector("#timedisplay");
    const startbutton = document.querySelector("#startbutton");
    const pausebutton = document.querySelector("#pausebutton");
    const resetbutton = document.querySelector("#resetbutton");

    let starttime = 0;
    let elapsedtime = 0;
    let paused = true;
    let intervalId;
    let idleTimer;
    const idleTimeout = 5000; // 5 seconds of inactivity to trigger idle pause
    let manuallyPaused = false; // Flag to determine if the timer is manually paused
    let resetInProgress = false; // Flag to track if a reset has occurred

    function resetIdleTimer() {
        if (!resetInProgress) { // Only set idle timer if reset isn't in progress
            clearTimeout(idleTimer); // Clear existing idle timer
            if (!manuallyPaused && !paused) { // Set new idle timer if not manually paused
                idleTimer = setTimeout(() => {
                    pauseTimer(); // Auto-pause due to idle
                    console.log("Timer paused due to idle mode");
                }, idleTimeout);
            }
        }
    }

    function startTimer() {
        if (!resetInProgress && paused) { // Start timer only if not in reset state
            paused = false;
            starttime = Date.now() - elapsedtime; // Adjust the start time
            intervalId = setInterval(updatetime, 75); // Start updating the timer
            resetIdleTimer(); // Reset idle timer when starting
        }
    }

    function pauseTimer() {
        if (!paused) {
            paused = true;
            elapsedtime = Date.now() - starttime; // Record elapsed time
            clearInterval(intervalId); // Stop updating the timer
            clearTimeout(idleTimer); // Clear idle timer
        }
    }

    // Event listeners to auto-resume the timer if not manually paused or reset
    document.addEventListener("mousemove", () => {
        if (!manuallyPaused && !resetInProgress && paused) { // Auto-resume if not manually paused
            startTimer(); // Resume the timer
            console.log("Timer resumed after exiting idle mode");
        }
        resetIdleTimer(); // Reset idle timer upon interaction
    });

    document.addEventListener("keypress", () => {
        if (!manuallyPaused && !resetInProgress && paused) { // Auto-resume if not manually paused
            startTimer();
            console.log("Timer resumed after exiting idle mode");
        }
        resetIdleTimer(); // Reset idle timer upon interaction
    });

    pausebutton.addEventListener("click", () => {
        pauseTimer(); // Manually pause
        manuallyPaused = true; // Mark as manually paused
    });

    startbutton.addEventListener("click", () => {
        manuallyPaused = false; // Clear manual pause flag
        resetInProgress = false; // Clear reset flag
        startTimer(); // Start the timer manually
    });

    resetbutton.addEventListener("click", () => {
        resetInProgress = true; // Set reset flag to prevent auto-resume
        pauseTimer(); // Ensure the timer is paused
        starttime = 0; // Reset start time
        elapsedtime = 0; // Reset elapsed time
        timedisplay.textContent = "00:00:00"; // Reset the display
        manuallyPaused = false; // Reset manual pause flag
    });

    function updatetime() {
        elapsedtime = Date.now() - starttime; // Calculate elapsed time
        const secs = Math.floor((elapsedtime / 1000) % 60);
        const mins = Math.floor((elapsedtime / (1000 * 60)) % 60);
        const hrs = Math.floor((elapsedtime / (1000 * 60 * 60)) % 24);

        timedisplay.textContent = `${pad(hrs)}:${pad(mins)}:${pad(secs)}`; // Update the display
    }

    function pad(unit) {
        return ("0" + unit).slice(-2); // Pad with leading zero
    }
    setTimeout(() => {
        startTimer(); 
    }, 2000);
});
