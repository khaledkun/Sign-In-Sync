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
    const idleTimeout = 5000; /* 5 seconds of inactivity (change as you want) */
    let manuallyPaused = false; 

    function resetIdleTimer() {
        clearTimeout(idleTimer); 
        if (!manuallyPaused && !paused) {
            idleTimer = setTimeout(() => {
                pauseTimer(); 
                console.log("Timer paused due to idle mode");
            }, idleTimeout);
        }
    }

    document.addEventListener("mousemove", () => {
        if (!manuallyPaused && paused) {
            startTimer(); 
            console.log("Timer resumed after exiting idle mode");
        }
        resetIdleTimer();
    });

    document.addEventListener("keypress", () => {
        if (!manuallyPaused && paused) {
            startTimer(); 
            console.log("Timer resumed after exiting idle mode");
        }
        resetIdleTimer();
    });

    function startTimer() {
        if (paused) {
            paused = false;
            starttime = Date.now() - elapsedtime;
            intervalId = setInterval(updatetime, 75);
            resetIdleTimer();
        }
    }

    function pauseTimer() {
        if (!paused) {
            paused = true;
            elapsedtime = Date.now() - starttime; 
            clearInterval(intervalId);
            clearTimeout(idleTimer);
        }
    }

    pausebutton.addEventListener("click", () => {
        pauseTimer();
        manuallyPaused = true; 
    });

    startbutton.addEventListener("click", () => {
        manuallyPaused = false; 
        startTimer(); 
    });

    resetbutton.addEventListener("click", () => {
        paused = true;
        clearInterval(intervalId);
        clearTimeout(idleTimer); 
        starttime = 0;
        elapsedtime = 0;
        timedisplay.textContent = "00:00:00";
        manuallyPaused = false; 
    });

    function updatetime() {
        elapsedtime = Date.now() - starttime;
        const secs = Math.floor((elapsedtime / 1000) % 60);
        const mins = Math.floor((elapsedtime / (1000 * 60)) % 60);
        const hrs = Math.floor((elapsedtime / (1000 * 60 * 60)) % 24);

        timedisplay.textContent = `${pad(hrs)}:${pad(mins)}:${pad(secs)}`; 
    }

    function pad(unit) {
        return ("0" + unit).slice(-2); 
    }

    startTimer(); 
});