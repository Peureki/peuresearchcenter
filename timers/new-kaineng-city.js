// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let kaineng = {
    events: [
        {   // Meta
            status: 0,
            key: 0,
            timeSideLabel: document.getElementById('sidetimer-kaineng-meta'),
            sidebox: document.getElementById('kaineng-meta-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-meta')
        },
        {   // [1] Elite Brotherhood (Baedal)
            status: 0,
            key: 0,
            cooldown: 60 * 44 + 45, 
            startButton: document.getElementById('timer-kaineng-1-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-1-start'),
            resetButton: document.getElementById('timer-kaineng-1-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-1-reset'),
            timeLabel: document.getElementById('timer-kaineng-1'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-1'),
            sidebox: document.getElementById('kaineng-1-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [2] Technician (Baedal)
            status: 0,
            key: 0,
            cooldown: 60 * 30 + 45, 
            startButton: document.getElementById('timer-kaineng-2-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-2-start'),
            resetButton: document.getElementById('timer-kaineng-2-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-2-reset'),
            timeLabel: document.getElementById('timer-kaineng-2'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-2'),
            sidebox: document.getElementById('kaineng-2-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [3] Servitor (Baedal)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-3-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-3-start'),
            resetButton: document.getElementById('timer-kaineng-3-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-3-reset'),
            timeLabel: document.getElementById('timer-kaineng-3'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-3'),
            sidebox: document.getElementById('kaineng-3-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [4] Teleporter (Baedal)
            status: 0,
            key: 0,
            cooldown: 60 * 29 + 15, 
            startButton: document.getElementById('timer-kaineng-4-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-4-start'),
            resetButton: document.getElementById('timer-kaineng-4-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-4-reset'),
            timeLabel: document.getElementById('timer-kaineng-4'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-4'),
            sidebox: document.getElementById('kaineng-4-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [5] Servitor (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-5-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-5-start'),
            resetButton: document.getElementById('timer-kaineng-5-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-5-reset'),
            timeLabel: document.getElementById('timer-kaineng-5'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-5'),
            sidebox: document.getElementById('kaineng-5-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [6] Teleporter (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 29 + 15, 
            startButton: document.getElementById('timer-kaineng-6-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-6-start'),
            resetButton: document.getElementById('timer-kaineng-6-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-6-reset'),
            timeLabel: document.getElementById('timer-kaineng-6'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-6'),
            sidebox: document.getElementById('kaineng-6-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [7] Volatile Sparks (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 34, 
            startButton: document.getElementById('timer-kaineng-7-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-7-start'),
            resetButton: document.getElementById('timer-kaineng-7-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-7-reset'),
            timeLabel: document.getElementById('timer-kaineng-7'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-7'),
            sidebox: document.getElementById('kaineng-7-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [8] Repair Crew (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-kaineng-8-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-8-start'),
            resetButton: document.getElementById('timer-kaineng-8-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-8-reset'),
            timeLabel: document.getElementById('timer-kaineng-8'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-8'),
            sidebox: document.getElementById('kaineng-8-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [9] Elite Brotherhood (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 44 + 45, 
            startButton: document.getElementById('timer-kaineng-9-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-9-start'),
            resetButton: document.getElementById('timer-kaineng-9-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-9-reset'),
            timeLabel: document.getElementById('timer-kaineng-9'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-9'),
            sidebox: document.getElementById('kaineng-9-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [10] Food Cart (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 24 + 30, 
            startButton: document.getElementById('timer-kaineng-10-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-10-start'),
            resetButton: document.getElementById('timer-kaineng-10-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-10-reset'),
            timeLabel: document.getElementById('timer-kaineng-10'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-10'),
            sidebox: document.getElementById('kaineng-10-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [11] Volatile Sparks (Nahpui)
            status: 0,
            key: 0,
            cooldown: 60 * 34, 
            startButton: document.getElementById('timer-kaineng-11-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-11-start'),
            resetButton: document.getElementById('timer-kaineng-11-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-11-reset'),
            timeLabel: document.getElementById('timer-kaineng-11'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-11'),
            sidebox: document.getElementById('kaineng-11-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-11'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [12] Servitor (Nahpui)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-12-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-12-start'),
            resetButton: document.getElementById('timer-kaineng-12-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-12-reset'),
            timeLabel: document.getElementById('timer-kaineng-12'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-12'),
            sidebox: document.getElementById('kaineng-12-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-12'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [13] Teleporter (Nahpui)
            status: 0,
            key: 0,
            cooldown: 60 * 29 + 15, 
            startButton: document.getElementById('timer-kaineng-13-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-13-start'),
            resetButton: document.getElementById('timer-kaineng-13-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-13-reset'),
            timeLabel: document.getElementById('timer-kaineng-13'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-13'),
            sidebox: document.getElementById('kaineng-13-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-13'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [14] Technician (Nahpui)
            status: 0,
            key: 0,
            cooldown: 60 * 30 + 45, 
            startButton: document.getElementById('timer-kaineng-14-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-14-start'),
            resetButton: document.getElementById('timer-kaineng-14-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-14-reset'),
            timeLabel: document.getElementById('timer-kaineng-14'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-14'),
            sidebox: document.getElementById('kaineng-14-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-14'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [15] Elite Brotherhood (Lut)
            status: 0,
            key: 0,
            cooldown: 60 * 44 + 45, 
            startButton: document.getElementById('timer-kaineng-15-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-15-start'),
            resetButton: document.getElementById('timer-kaineng-15-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-15-reset'),
            timeLabel: document.getElementById('timer-kaineng-15'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-15'),
            sidebox: document.getElementById('kaineng-15-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-15'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [16] Technician (Lut)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-16-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-16-start'),
            resetButton: document.getElementById('timer-kaineng-16-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-16-reset'),
            timeLabel: document.getElementById('timer-kaineng-16'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-16'),
            sidebox: document.getElementById('kaineng-16-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-16'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [17] Teleporter (Lut)
            status: 0,
            key: 0,
            cooldown: 60 * 29 + 15, 
            startButton: document.getElementById('timer-kaineng-17-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-17-start'),
            resetButton: document.getElementById('timer-kaineng-17-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-17-reset'),
            timeLabel: document.getElementById('timer-kaineng-17'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-17'),
            sidebox: document.getElementById('kaineng-17-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-17'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [18] Servitor (Lut)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-18-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-18-start'),
            resetButton: document.getElementById('timer-kaineng-18-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-18-reset'),
            timeLabel: document.getElementById('timer-kaineng-18'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-18'),
            sidebox: document.getElementById('kaineng-18-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-18'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [19] Servitor (Cobble)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-19-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-19-start'),
            resetButton: document.getElementById('timer-kaineng-19-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-19-reset'),
            timeLabel: document.getElementById('timer-kaineng-19'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-19'),
            sidebox: document.getElementById('kaineng-19-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-19'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [20] Repair Crew (Cobble)
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-kaineng-20-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-20-start'),
            resetButton: document.getElementById('timer-kaineng-20-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-20-reset'),
            timeLabel: document.getElementById('timer-kaineng-20'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-20'),
            sidebox: document.getElementById('kaineng-20-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-20'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [21] Volatile Sparks (Cobble)           
            status: 0,
            key: 0,
            cooldown: 60 * 34, 
            startButton: document.getElementById('timer-kaineng-21-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-21-start'),
            resetButton: document.getElementById('timer-kaineng-21-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-21-reset'),
            timeLabel: document.getElementById('timer-kaineng-21'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-21'),
            sidebox: document.getElementById('kaineng-21-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-21'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [22] Elite Brotherhood (Cobble)
            status: 0,
            key: 0,
            cooldown: 60 * 44 + 45, 
            startButton: document.getElementById('timer-kaineng-22-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-22-start'),
            resetButton: document.getElementById('timer-kaineng-22-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-22-reset'),
            timeLabel: document.getElementById('timer-kaineng-22'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-22'),
            sidebox: document.getElementById('kaineng-22-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-22'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [23] Technician (Cobble)
            status: 0,
            key: 0,
            cooldown: 60 * 30 + 45, 
            startButton: document.getElementById('timer-kaineng-23-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-23-start'),
            resetButton: document.getElementById('timer-kaineng-23-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-23-reset'),
            timeLabel: document.getElementById('timer-kaineng-23'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-23'),
            sidebox: document.getElementById('kaineng-23-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-23'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [24] Food Cart (Cobble)
            status: 0,
            key: 0,
            cooldown: 60 * 24 + 30, 
            startButton: document.getElementById('timer-kaineng-24-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-24-start'),
            resetButton: document.getElementById('timer-kaineng-24-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-24-reset'),
            timeLabel: document.getElementById('timer-kaineng-24'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-24'),
            sidebox: document.getElementById('kaineng-24-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-24'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [25] Volatile Sparks (Gwan)
            status: 0,
            key: 0,
            cooldown: 60 * 34, 
            startButton: document.getElementById('timer-kaineng-25-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-25-start'),
            resetButton: document.getElementById('timer-kaineng-25-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-25-reset'),
            timeLabel: document.getElementById('timer-kaineng-25'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-25'),
            sidebox: document.getElementById('kaineng-25-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-25'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [26] Elite Brotherhood (Gwan)
            status: 0,
            key: 0,
            cooldown: 60 * 44 + 45, 
            startButton: document.getElementById('timer-kaineng-26-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-26-start'),
            resetButton: document.getElementById('timer-kaineng-26-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-26-reset'),
            timeLabel: document.getElementById('timer-kaineng-26'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-26'),
            sidebox: document.getElementById('kaineng-26-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-26'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [27] Servitor (Gwan)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 45, 
            startButton: document.getElementById('timer-kaineng-27-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-27-start'),
            resetButton: document.getElementById('timer-kaineng-27-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-27-reset'),
            timeLabel: document.getElementById('timer-kaineng-27'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-27'),
            sidebox: document.getElementById('kaineng-27-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-27'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [28] Techinican (Gwan)
            status: 0,
            key: 0,
            cooldown: 60 * 30 + 45, 
            startButton: document.getElementById('timer-kaineng-28-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-28-start'),
            resetButton: document.getElementById('timer-kaineng-28-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-28-reset'),
            timeLabel: document.getElementById('timer-kaineng-28'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-28'),
            sidebox: document.getElementById('kaineng-28-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-28'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [29] Servitor (Power, Up)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-29-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-29-start'),
            resetButton: document.getElementById('timer-kaineng-29-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-29-reset'),
            timeLabel: document.getElementById('timer-kaineng-29'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-29'),
            sidebox: document.getElementById('kaineng-29-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-29'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [30] Servitor (Power, Down)
            status: 0,
            key: 0,
            cooldown: 60 * 34 + 30, 
            startButton: document.getElementById('timer-kaineng-30-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-30-start'),
            resetButton: document.getElementById('timer-kaineng-30-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-30-reset'),
            timeLabel: document.getElementById('timer-kaineng-30'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-30'),
            sidebox: document.getElementById('kaineng-30-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-30'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [31] Posh Party (Baedal)
            status: 0,
            key: 0,
            cooldown: 60 * 10 + 45, 
            startButton: document.getElementById('timer-kaineng-31-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-31-start'),
            resetButton: document.getElementById('timer-kaineng-31-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-31-reset'),
            timeLabel: document.getElementById('timer-kaineng-31'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-31'),
            sidebox: document.getElementById('kaineng-31-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-31'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [32] Jade Bulwark (Power, Down)
            status: 0,
            key: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-kaineng-32-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-32-start'),
            resetButton: document.getElementById('timer-kaineng-32-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-32-reset'),
            timeLabel: document.getElementById('timer-kaineng-32'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-32'),
            sidebox: document.getElementById('kaineng-32-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-32'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [33] Bathhouse (Lut)
            status: 0,
            key: 0,
            cooldown: 60 * 10 + 45, 
            startButton: document.getElementById('timer-kaineng-33-start'),
            startSideButton: document.getElementById('sidetimer-kaineng-33-start'),
            resetButton: document.getElementById('timer-kaineng-33-reset'),
            resetSideButton: document.getElementById('sidetimer-kaineng-33-reset'),
            timeLabel: document.getElementById('timer-kaineng-33'), 
            timeSideLabel: document.getElementById('sidetimer-kaineng-33'),
            sidebox: document.getElementById('kaineng-33-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-kaineng-33'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(kaineng.events);

/*
// Initials
let nextProgress = "", // What is displayed on the main progress bar after the ->
    progressBar = document.getElementById('progress-bar'),
    progressText = document.getElementById('progress-text'),
    barWidth = 0,
    currentBar = 0,
    maxBar = 0, 
    currentTime = 0,
    maxTime = 0;

// Label of the meta on the side
let side_meta_name = document.getElementById('side-meta-name');

    let timer = setInterval(function(){
    let d = new Date();
    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        result,
        hr = d.getUTCHours(),
        min = d.getUTCMinutes(),
        sec = d.getUTCSeconds();

        function doMeta(start_hour, end_hour){
            // Pre phase begins every UTC hour at :45 
            // Map resets at every every UTC hour around :00 (when players finish or fail meta)
            // ASSUME STARTING AT ODD HR
            // ENTIRE 2HR PHASE Ex: 1:00 - 3:00
            if (hr == start_hour || hr == end_hour){
                // Default settings
                // Images
                hide_multiple_elements(1,18,'kaineng-img-','opacity');
                // Info
                hide_multiple_elements(1,6,'kaineng-info-','opacity');
                // BREAK PHASE Ex: 1:00 - 1:45
                if (hr == start_hour){
                    // BREAK PHASE Ex: 1:00 - 1:45
                    if (min < 45){
                        progressBar.style.background = progress_color;
                        nextProgress = "kaineng Keep";
                        // Other events
                        show_multiple_elements(11,18,'kaineng-img-','opacity');
                        show_multiple_elements(3,6,'kaineng-info-','opacity');

                        // maxTime = the` end UTC time of this phase as a whole
                        // maxBar = total duration of this phase
                        maxTime = start_hour * 3600 + (45 * 60); 
                        maxBar = 45 * 60;
                    // kaineng KEEP PHASE Ex: 1:45 - 2
                    } else {
                        progressBar.style.background = meta_color;
                        nextProgress = "Regular Events";
                        // Meta
                        show_multiple_elements(1,2,'kaineng-img-','opacity');
                        show_multiple_elements(1,1,'kaineng-info-','opacity');

                        maxTime = end_hour * 3600;
                        maxBar = 15 * 60;
                    }   
                }
                // BREAK PHASE Ex: 2:00 - 2:45
                if (hr == end_hour){
                    // BREAK PHASE Ex: 2:00 - 2:45
                    if (min < 45){
                        progressBar.style.background = progress_color;
                        nextProgress = "Oil Floes";
                        // Other events
                        show_multiple_elements(11,16,'kaineng-img-','opacity');
                        show_multiple_elements(3,5,'kaineng-info-','opacity');

                        // maxTime = the end UTC time of this phase as a whole
                        // maxBar = total duration of this phase
                        maxTime = end_hour * 3600 + (45 * 60); 
                        maxBar = 45 * 60;
                    // kaineng KEEP PHASE Ex: 2:45 - 3
                    } else {
                        progressBar.style.background = meta_color;
                        nextProgress = "Regular Events";
                        // Meta
                        show_multiple_elements(3,10,'kaineng-img-','opacity');
                        show_multiple_elements(2,2,'kaineng-info-','opacity');

                        maxTime = (end_hour + 1) * 3600;
                        maxBar = 15 * 60;
                    }   
                }
                side_meta_name.innerHTML = nextProgress;
                currentBar = time - (maxTime - maxBar);
                barWidth = (currentBar/maxBar)*100;
                progressBar.style.width = barWidth + "%";
                result = time - maxTime;
                progressText.innerHTML = getDisplayTime(result) + " &#x27F6; " + nextProgress;
                // kaineng.events[0] = the sidebox timer for the meta
                kaineng.events[0].sidebox.style.background = progressBar.style.background;
                kaineng.events[0].timeSideLabel.innerHTML = getDisplayTime(result);
            }
        } // End of function

        // Event session starts every odd UTC hour at xx:45
        // Session lasts for 2 hours
        function event_session(){
            let start_hour = 0,
                end_hour = 0;
            // Check if hour is odd or not
            // If odd, use that as the start hour
            // Else, use hour - 1 as the start hour
            if (hr % 2 != 0){
                start_hour = hr; 
                end_hour = hr + 1;
            } else {
                start_hour = hr - 1;
                end_hour = hr; 
            }
            // Only start meta timer when
            // 1) Start hour is an odd hour and is greater than 30 mins
            // 2) End hour is the second hour (even)
            doMeta(start_hour, end_hour); 
        }
        event_session();
        console.log(d.getUTCHours(), d.getUTCMinutes())
    },1000); 

    */