document.addEventListener("DOMContentLoaded", (event) => {
    const timedisplay = document.querySelector("#timedisplay");
    const startbutton = document.querySelector("#startbutton");
    const pausebutton = document.querySelector("#pausebutton");
    const resetbutton = document.querySelector("#resetbutton");

    let starttime = 0;
    let elapsedtime = 0;
    let currenttime = 0;
    let paused = true;
    let intervalId;
    let hrs = 0;
    let mins = 0;
    let secs = 0;

    startbutton.addEventListener("click", () => {
        if (paused) {
            paused = false;
            starttime = Date.now() - elapsedtime;
            intervalId = setInterval(updatetime, 75);
        }
    });

    pausebutton.addEventListener("click", () => {
        if (!paused) {
            paused = true;
            elapsedtime = Date.now() - starttime;
            clearInterval(intervalId);
        }
    });

    resetbutton.addEventListener("click", () => {
        paused = true;
        clearInterval(intervalId);
        starttime = 0;
        elapsedtime = 0;
        currenttime = 0;
        hrs = mins = secs = 0;
        timedisplay.textContent = "00:00:00";
    });

    function startTimer() {
        if (paused) {
            paused = false;
            starttime = Date.now() - elapsedtime;
            intervalId = setInterval(updatetime, 75);
        }
    }

    function updatetime() {
        elapsedtime = Date.now() - starttime;

        secs = Math.floor((elapsedtime / 1000) % 60);
        mins = Math.floor((elapsedtime / (1000 * 60)) % 60);
        hrs = Math.floor((elapsedtime / (1000 * 60 * 60)) % 24);

        secs = pad(secs);
        mins = pad(mins);
        hrs = pad(hrs);

        timedisplay.textContent = `${hrs}:${mins}:${secs}`;
    }

    function pad(unit){
        return (("0") + unit).slice(-2);
    }

    startTimer();
});