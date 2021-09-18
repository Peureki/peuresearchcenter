// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let thunderhead = {
    events: [
        {   // empty
            status: 0,
            key: 0,
            timeSideLabel: document.getElementById('sidetimer-thunderhead-meta'),
            sidebox: document.getElementById('thunderhead-meta-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-thunderhead-meta')
        },
        {   // [1] Branded Forgotton 
            status: 0,
            key: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-thunderhead-1-start'),
            startSideButton: document.getElementById('sidetimer-thunderhead-1-start'),
            resetButton: document.getElementById('timer-thunderhead-1-reset'),
            resetSideButton: document.getElementById('sidetimer-thunderhead-1-reset'),
            timeLabel: document.getElementById('timer-thunderhead-1'), 
            timeSideLabel: document.getElementById('sidetimer-thunderhead-1'),
            sidebox: document.getElementById('thunderhead-1-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-thunderhead-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [2] Tirabikkr
            status: 0,
            key: 0,
            cooldown: 60 * 11, 
            startButton: document.getElementById('timer-thunderhead-2-start'),
            startSideButton: document.getElementById('sidetimer-thunderhead-2-start'),
            resetButton: document.getElementById('timer-thunderhead-2-reset'),
            resetSideButton: document.getElementById('sidetimer-thunderhead-2-reset'),
            timeLabel: document.getElementById('timer-thunderhead-2'), 
            timeSideLabel: document.getElementById('sidetimer-thunderhead-2'),
            sidebox: document.getElementById('thunderhead-2-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-thunderhead-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(thunderhead.events);