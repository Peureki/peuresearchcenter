// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var ember = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },

        {   // [1] Sloth Chain
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-ember-1-start'),
            startSideButton: document.getElementById('sidetimer-ember-1-start'),
            resetButton: document.getElementById('timer-ember-1-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-1-reset'),
            timeLabel: document.getElementById('timer-ember-1'), 
            timeSideLabel: document.getElementById('sidetimer-ember-1'),
            sidebox: document.getElementById('ember-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-1'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [2] Destroyer Fissure 1 NW
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-ember-2-start'),
            startSideButton: document.getElementById('sidetimer-ember-2-start'),
            resetButton: document.getElementById('timer-ember-2-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-2-reset'),
            timeLabel: document.getElementById('timer-ember-2'), 
            timeSideLabel: document.getElementById('sidetimer-ember-2'),
            sidebox: document.getElementById('ember-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-2'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [3] Destroyer Fissure 2 NE
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-ember-3-start'),
            startSideButton: document.getElementById('sidetimer-ember-3-start'),
            resetButton: document.getElementById('timer-ember-3-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-3-reset'),
            timeLabel: document.getElementById('timer-ember-3'), 
            timeSideLabel: document.getElementById('sidetimer-ember-3'),
            sidebox: document.getElementById('ember-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-3'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [4] Coal 1 SW
            status: 0,
            key: 0,
            cooldown: 60 * 16 + 45, 
            startButton: document.getElementById('timer-ember-4-start'),
            startSideButton: document.getElementById('sidetimer-ember-4-start'),
            resetButton: document.getElementById('timer-ember-4-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-4-reset'),
            timeLabel: document.getElementById('timer-ember-4'), 
            timeSideLabel: document.getElementById('sidetimer-ember-4'),
            sidebox: document.getElementById('ember-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-4'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [5] Coal 2 SE
            status: 0,
            key: 0,
            cooldown: 60 * 16 + 45, 
            startButton: document.getElementById('timer-ember-5-start'),
            startSideButton: document.getElementById('sidetimer-ember-5-start'),
            resetButton: document.getElementById('timer-ember-5-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-5-reset'),
            timeLabel: document.getElementById('timer-ember-5'), 
            timeSideLabel: document.getElementById('sidetimer-ember-5'),
            sidebox: document.getElementById('ember-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-5'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [6] Coal 3 NE
            status: 0,
            key: 0,
            cooldown: 60 * 16 + 45, 
            startButton: document.getElementById('timer-ember-6-start'),
            startSideButton: document.getElementById('sidetimer-ember-6-start'),
            resetButton: document.getElementById('timer-ember-6-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-6-reset'),
            timeLabel: document.getElementById('timer-ember-6'), 
            timeSideLabel: document.getElementById('sidetimer-ember-6'),
            sidebox: document.getElementById('ember-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-6'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [7] Jade
            status: 0,
            key: 0,
            cooldown: 60 * 18, 
            startButton: document.getElementById('timer-ember-7-start'),
            startSideButton: document.getElementById('sidetimer-ember-7-start'),
            resetButton: document.getElementById('timer-ember-7-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-7-reset'),
            timeLabel: document.getElementById('timer-ember-7'), 
            timeSideLabel: document.getElementById('sidetimer-ember-7'),
            sidebox: document.getElementById('ember-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-7'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [8] Drake
            status: 0,
            key: 0,
            cooldown: 60 * 19 + 45, 
            startButton: document.getElementById('timer-ember-8-start'),
            startSideButton: document.getElementById('sidetimer-ember-8-start'),
            resetButton: document.getElementById('timer-ember-8-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-8-reset'),
            timeLabel: document.getElementById('timer-ember-8'), 
            timeSideLabel: document.getElementById('sidetimer-ember-8'),
            sidebox: document.getElementById('ember-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-8'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [9] Dominator
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-ember-9-start'),
            startSideButton: document.getElementById('sidetimer-ember-9-start'),
            resetButton: document.getElementById('timer-ember-9-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-9-reset'),
            timeLabel: document.getElementById('timer-ember-9'), 
            timeSideLabel: document.getElementById('sidetimer-ember-9'),
            sidebox: document.getElementById('ember-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-9'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [10] Captrain Huuhes
            status: 0,
            key: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-ember-10-start'),
            startSideButton: document.getElementById('sidetimer-ember-10-start'),
            resetButton: document.getElementById('timer-ember-10-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-10-reset'),
            timeLabel: document.getElementById('timer-ember-10'), 
            timeSideLabel: document.getElementById('sidetimer-ember-10'),
            sidebox: document.getElementById('ember-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-10'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [12] Karka Chain
            status: 0,
            key: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-ember-12-start'),
            startSideButton: document.getElementById('sidetimer-ember-12-start'),
            resetButton: document.getElementById('timer-ember-12-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-12-reset'),
            timeLabel: document.getElementById('timer-ember-12'), 
            timeSideLabel: document.getElementById('sidetimer-ember-12'),
            sidebox: document.getElementById('ember-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-12'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [15] Wurm
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-ember-15-start'),
            startSideButton: document.getElementById('sidetimer-ember-15-start'),
            resetButton: document.getElementById('timer-ember-15-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-15-reset'),
            timeLabel: document.getElementById('timer-ember-15'), 
            timeSideLabel: document.getElementById('sidetimer-ember-15'),
            sidebox: document.getElementById('ember-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-15'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(ember.events); 