// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var draconis = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [1] Meta
            status: 0,
            key: 0,
            cooldown: 60 * 16, 
            startButton: document.getElementById('timer-draconis-1-start'),
            startSideButton: document.getElementById('sidetimer-draconis-1-start'),
            resetButton: document.getElementById('timer-draconis-1-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-1-reset'),
            timeLabel: document.getElementById('timer-draconis-1'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-1'),
            sidebox: document.getElementById('draconis-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-1'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        }, 

        {   // [2] Lava Wurm
            status: 0,
            key: 0,
            cooldown: 60 * 11, 
            startButton: document.getElementById('timer-draconis-2-start'),
            startSideButton: document.getElementById('sidetimer-draconis-2-start'),
            resetButton: document.getElementById('timer-draconis-2-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-2-reset'),
            timeLabel: document.getElementById('timer-draconis-2'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-2'),
            sidebox: document.getElementById('draconis-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-2'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        }, 
        {   // [3] Skelk
            status: 0,
            key: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-draconis-3-start'),
            startSideButton: document.getElementById('sidetimer-draconis-3-start'),
            resetButton: document.getElementById('timer-draconis-3-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-3-reset'),
            timeLabel: document.getElementById('timer-draconis-3'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-3'),
            sidebox: document.getElementById('draconis-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-3'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [4] Golem
            status: 0,
            key: 0,
            cooldown: 60 * 7 + 45, 
            startButton: document.getElementById('timer-draconis-4-start'),
            startSideButton: document.getElementById('sidetimer-draconis-4-start'),
            resetButton: document.getElementById('timer-draconis-4-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-4-reset'),
            timeLabel: document.getElementById('timer-draconis-4'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-4'),
            sidebox: document.getElementById('draconis-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-4'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [5] Devourer
            status: 0,
            key: 0,
            cooldown: 60 * 19 + 30, 
            startButton: document.getElementById('timer-draconis-5-start'),
            startSideButton: document.getElementById('sidetimer-draconis-5-start'),
            resetButton: document.getElementById('timer-draconis-5-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-5-reset'),
            timeLabel: document.getElementById('timer-draconis-5'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-5'),
            sidebox: document.getElementById('draconis-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-5'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [6] Emperor Mattake
            status: 0,
            key: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-draconis-6-start'),
            startSideButton: document.getElementById('sidetimer-draconis-6-start'),
            resetButton: document.getElementById('timer-draconis-6-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-6-reset'),
            timeLabel: document.getElementById('timer-draconis-6'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-6'),
            sidebox: document.getElementById('draconis-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-6'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [7] Webby Mother
            status: 0,
            key: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-draconis-7-start'),
            startSideButton: document.getElementById('sidetimer-draconis-7-start'),
            resetButton: document.getElementById('timer-draconis-7-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-7-reset'),
            timeLabel: document.getElementById('timer-draconis-7'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-7'),
            sidebox: document.getElementById('draconis-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-7'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [8] Wind Rider
            status: 0,
            key: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-draconis-8-start'),
            startSideButton: document.getElementById('sidetimer-draconis-8-start'),
            resetButton: document.getElementById('timer-draconis-8-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-8-reset'),
            timeLabel: document.getElementById('timer-draconis-8'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-8'),
            sidebox: document.getElementById('draconis-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-8'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [9] Spirit of Nature
            status: 0,
            key: 0,
            cooldown: 60 * 5, 
            startButton: document.getElementById('timer-draconis-9-start'),
            startSideButton: document.getElementById('sidetimer-draconis-9-start'),
            resetButton: document.getElementById('timer-draconis-9-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-9-reset'),
            timeLabel: document.getElementById('timer-draconis-9'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-9'),
            sidebox: document.getElementById('draconis-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-9'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [10] Stonehead
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-draconis-10-start'),
            startSideButton: document.getElementById('sidetimer-draconis-10-start'),
            resetButton: document.getElementById('timer-draconis-10-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-10-reset'),
            timeLabel: document.getElementById('timer-draconis-10'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-10'),
            sidebox: document.getElementById('draconis-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-10'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [11] Grub Gobbler
            status: 0,
            key: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-draconis-11-start'),
            startSideButton: document.getElementById('sidetimer-draconis-11-start'),
            resetButton: document.getElementById('timer-draconis-11-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-11-reset'),
            timeLabel: document.getElementById('timer-draconis-11'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-11'),
            sidebox: document.getElementById('draconis-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-11'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [12] Mercenaries
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-draconis-12-start'),
            startSideButton: document.getElementById('sidetimer-draconis-12-start'),
            resetButton: document.getElementById('timer-draconis-12-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-12-reset'),
            timeLabel: document.getElementById('timer-draconis-12'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-12'),
            sidebox: document.getElementById('draconis-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-12'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
    ]
};

// Dynamically creates unique keys
add_event_keys(draconis.events); 