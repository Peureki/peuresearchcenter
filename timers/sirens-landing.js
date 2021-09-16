// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var sirens = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [1] Meta
            status: 0,
            key: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-sirens-1-start'),
            startSideButton: document.getElementById('sidetimer-sirens-1-start'),
            resetButton: document.getElementById('timer-sirens-1-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-1-reset'),
            timeLabel: document.getElementById('timer-sirens-1'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-1'),
            sidebox: document.getElementById('sirens-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-1'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        }, 

        {   // [2] Winfred
            status: 0,
            key: 0,
            cooldown: 60 * 23, 
            startButton: document.getElementById('timer-sirens-2-start'),
            startSideButton: document.getElementById('sidetimer-sirens-2-start'),
            resetButton: document.getElementById('timer-sirens-2-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-2-reset'),
            timeLabel: document.getElementById('timer-sirens-2'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-2'),
            sidebox: document.getElementById('sirens-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-2'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        }, 
        {   // [3] Kingpins
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-sirens-3-start'),
            startSideButton: document.getElementById('sidetimer-sirens-3-start'),
            resetButton: document.getElementById('timer-sirens-3-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-3-reset'),
            timeLabel: document.getElementById('timer-sirens-3'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-3'),
            sidebox: document.getElementById('sirens-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-3'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [4] Champ Giant
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-sirens-4-start'),
            startSideButton: document.getElementById('sidetimer-sirens-4-start'),
            resetButton: document.getElementById('timer-sirens-4-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-4-reset'),
            timeLabel: document.getElementById('timer-sirens-4'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-4'),
            sidebox: document.getElementById('sirens-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-4'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [5] Nodes
            status: 0,
            key: 0,
            cooldown: 60 * 13 + 15, 
            startButton: document.getElementById('timer-sirens-5-start'),
            startSideButton: document.getElementById('sidetimer-sirens-5-start'),
            resetButton: document.getElementById('timer-sirens-5-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-5-reset'),
            timeLabel: document.getElementById('timer-sirens-5'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-5'),
            sidebox: document.getElementById('sirens-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-5'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [6] Champ Spider
            status: 0,
            key: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-sirens-6-start'),
            startSideButton: document.getElementById('sidetimer-sirens-6-start'),
            resetButton: document.getElementById('timer-sirens-6-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-6-reset'),
            timeLabel: document.getElementById('timer-sirens-6'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-6'),
            sidebox: document.getElementById('sirens-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-6'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [7] Wyvern
            status: 0,
            key: 0,
            cooldown: 60 * 15 + 45, 
            startButton: document.getElementById('timer-sirens-7-start'),
            startSideButton: document.getElementById('sidetimer-sirens-7-start'),
            resetButton: document.getElementById('timer-sirens-7-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-7-reset'),
            timeLabel: document.getElementById('timer-sirens-7'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-7'),
            sidebox: document.getElementById('sirens-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-7'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [8] Fountainhead
            status: 0,
            key: 0,
            cooldown: 60 * 16 + 30, 
            startButton: document.getElementById('timer-sirens-8-start'),
            startSideButton: document.getElementById('sidetimer-sirens-8-start'),
            resetButton: document.getElementById('timer-sirens-8-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-8-reset'),
            timeLabel: document.getElementById('timer-sirens-8'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-8'),
            sidebox: document.getElementById('sirens-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-8'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [9] Chaotic Distortion
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 15, 
            startButton: document.getElementById('timer-sirens-9-start'),
            startSideButton: document.getElementById('sidetimer-sirens-9-start'),
            resetButton: document.getElementById('timer-sirens-9-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-9-reset'),
            timeLabel: document.getElementById('timer-sirens-9'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-9'),
            sidebox: document.getElementById('sirens-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-9'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [10] Horrid Illusion
            status: 0,
            key: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-sirens-10-start'),
            startSideButton: document.getElementById('sidetimer-sirens-10-start'),
            resetButton: document.getElementById('timer-sirens-10-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-10-reset'),
            timeLabel: document.getElementById('timer-sirens-10'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-10'),
            sidebox: document.getElementById('sirens-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-10'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(sirens.events); 


