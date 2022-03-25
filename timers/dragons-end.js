// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let de = {
    events: [
        {   // Meta
            status: 0,
            key: 0,
            timeSideLabel: document.getElementById('sidetimer-de-meta'),
            sidebox: document.getElementById('de-meta-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-meta')
        },
        {   // [1] Jade Maw
            status: 0,
            key: 0,
            cooldown: 60 * 34, 
            startButton: document.getElementById('timer-de-1-start'),
            startSideButton: document.getElementById('sidetimer-de-1-start'),
            resetButton: document.getElementById('timer-de-1-reset'),
            resetSideButton: document.getElementById('sidetimer-de-1-reset'),
            timeLabel: document.getElementById('timer-de-1'), 
            timeSideLabel: document.getElementById('sidetimer-de-1'),
            sidebox: document.getElementById('de-1-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },

        {   // [2] Shipments
            status: 0,
            key: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-de-2-start'),
            startSideButton: document.getElementById('sidetimer-de-2-start'),
            resetButton: document.getElementById('timer-de-2-reset'),
            resetSideButton: document.getElementById('sidetimer-de-2-reset'),
            timeLabel: document.getElementById('timer-de-2'), 
            timeSideLabel: document.getElementById('sidetimer-de-2'),
            sidebox: document.getElementById('de-2-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [3] Sangsa Chain
            status: 0,
            key: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-de-3-start'),
            startSideButton: document.getElementById('sidetimer-de-3-start'),
            resetButton: document.getElementById('timer-de-3-reset'),
            resetSideButton: document.getElementById('sidetimer-de-3-reset'),
            timeLabel: document.getElementById('timer-de-3'), 
            timeSideLabel: document.getElementById('sidetimer-de-3'),
            sidebox: document.getElementById('de-3-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [4] Modrem Void
            status: 0,
            key: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-de-4-start'),
            startSideButton: document.getElementById('sidetimer-de-4-start'),
            resetButton: document.getElementById('timer-de-4-reset'),
            resetSideButton: document.getElementById('sidetimer-de-4-reset'),
            timeLabel: document.getElementById('timer-de-4'), 
            timeSideLabel: document.getElementById('sidetimer-de-4'),
            sidebox: document.getElementById('de-4-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [5] Naga
            status: 0,
            key: 0,
            cooldown: 60 * 16, 
            startButton: document.getElementById('timer-de-5-start'),
            startSideButton: document.getElementById('sidetimer-de-5-start'),
            resetButton: document.getElementById('timer-de-5-reset'),
            resetSideButton: document.getElementById('sidetimer-de-5-reset'),
            timeLabel: document.getElementById('timer-de-5'), 
            timeSideLabel: document.getElementById('sidetimer-de-5'),
            sidebox: document.getElementById('de-5-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [6] Risen Void
            status: 0,
            key: 0,
            cooldown: 60 * 13 + 15, 
            startButton: document.getElementById('timer-de-6-start'),
            startSideButton: document.getElementById('sidetimer-de-6-start'),
            resetButton: document.getElementById('timer-de-6-reset'),
            resetSideButton: document.getElementById('sidetimer-de-6-reset'),
            timeLabel: document.getElementById('timer-de-6'), 
            timeSideLabel: document.getElementById('sidetimer-de-6'),
            sidebox: document.getElementById('de-6-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [7] NE Void
            status: 0,
            key: 0,
            cooldown: 60 * 36 + 15, 
            startButton: document.getElementById('timer-de-7-start'),
            startSideButton: document.getElementById('sidetimer-de-7-start'),
            resetButton: document.getElementById('timer-de-7-reset'),
            resetSideButton: document.getElementById('sidetimer-de-7-reset'),
            timeLabel: document.getElementById('timer-de-7'), 
            timeSideLabel: document.getElementById('sidetimer-de-7'),
            sidebox: document.getElementById('de-7-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [8] Icebrood Void
            status: 0,
            key: 0,
            cooldown: 60 * 36 + 15, 
            startButton: document.getElementById('timer-de-8-start'),
            startSideButton: document.getElementById('sidetimer-de-8-start'),
            resetButton: document.getElementById('timer-de-8-reset'),
            resetSideButton: document.getElementById('sidetimer-de-8-reset'),
            timeLabel: document.getElementById('timer-de-8'), 
            timeSideLabel: document.getElementById('sidetimer-de-8'),
            sidebox: document.getElementById('de-8-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [9] Branded Void
            status: 0,
            key: 0,
            cooldown: 60 * 36 + 15, 
            startButton: document.getElementById('timer-de-9-start'),
            startSideButton: document.getElementById('sidetimer-de-9-start'),
            resetButton: document.getElementById('timer-de-9-reset'),
            resetSideButton: document.getElementById('sidetimer-de-9-reset'),
            timeLabel: document.getElementById('timer-de-9'), 
            timeSideLabel: document.getElementById('sidetimer-de-9'),
            sidebox: document.getElementById('de-9-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [10] Lau Chain
            status: 0,
            key: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-de-10-start'),
            startSideButton: document.getElementById('sidetimer-de-10-start'),
            resetButton: document.getElementById('timer-de-10-reset'),
            resetSideButton: document.getElementById('sidetimer-de-10-reset'),
            timeLabel: document.getElementById('timer-de-10'), 
            timeSideLabel: document.getElementById('sidetimer-de-10'),
            sidebox: document.getElementById('de-10-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [11] Enraged Kappa
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 15, 
            startButton: document.getElementById('timer-de-11-start'),
            startSideButton: document.getElementById('sidetimer-de-11-start'),
            resetButton: document.getElementById('timer-de-11-reset'),
            resetSideButton: document.getElementById('sidetimer-de-11-reset'),
            timeLabel: document.getElementById('timer-de-11'), 
            timeSideLabel: document.getElementById('sidetimer-de-11'),
            sidebox: document.getElementById('de-11-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-11'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [12] Shrine Guardian
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-de-12-start'),
            startSideButton: document.getElementById('sidetimer-de-12-start'),
            resetButton: document.getElementById('timer-de-12-reset'),
            resetSideButton: document.getElementById('sidetimer-de-12-reset'),
            timeLabel: document.getElementById('timer-de-12'), 
            timeSideLabel: document.getElementById('sidetimer-de-12'),
            sidebox: document.getElementById('de-12-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-12'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [13] Speaker Outpost
            status: 0,
            key: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-de-13-start'),
            startSideButton: document.getElementById('sidetimer-de-13-start'),
            resetButton: document.getElementById('timer-de-13-reset'),
            resetSideButton: document.getElementById('sidetimer-de-13-reset'),
            timeLabel: document.getElementById('timer-de-13'), 
            timeSideLabel: document.getElementById('sidetimer-de-13'),
            sidebox: document.getElementById('de-13-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-13'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [14] Speaker Champ
            status: 0,
            key: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-de-14-start'),
            startSideButton: document.getElementById('sidetimer-de-14-start'),
            resetButton: document.getElementById('timer-de-14-reset'),
            resetSideButton: document.getElementById('sidetimer-de-14-reset'),
            timeLabel: document.getElementById('timer-de-14'), 
            timeSideLabel: document.getElementById('sidetimer-de-14'),
            sidebox: document.getElementById('de-14-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-14'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [15] Destroyer Void
            status: 0,
            key: 0,
            cooldown: 60 * 36 + 15, 
            startButton: document.getElementById('timer-de-15-start'),
            startSideButton: document.getElementById('sidetimer-de-15-start'),
            resetButton: document.getElementById('timer-de-15-reset'),
            resetSideButton: document.getElementById('sidetimer-de-15-reset'),
            timeLabel: document.getElementById('timer-de-15'), 
            timeSideLabel: document.getElementById('sidetimer-de-15'),
            sidebox: document.getElementById('de-15-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-15'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [16] NW Void
            status: 0,
            key: 0,
            cooldown: 60 * 36 + 15, 
            startButton: document.getElementById('timer-de-16-start'),
            startSideButton: document.getElementById('sidetimer-de-16-start'),
            resetButton: document.getElementById('timer-de-16-reset'),
            resetSideButton: document.getElementById('sidetimer-de-16-reset'),
            timeLabel: document.getElementById('timer-de-16'), 
            timeSideLabel: document.getElementById('sidetimer-de-16'),
            sidebox: document.getElementById('de-16-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-16'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        /*
        {   // [7] Volatile Sparks (Bori)
            status: 0,
            key: 0,
            cooldown: 60 * 34, 
            startButton: document.getElementById('timer-de-7-start'),
            startSideButton: document.getElementById('sidetimer-de-7-start'),
            resetButton: document.getElementById('timer-de-7-reset'),
            resetSideButton: document.getElementById('sidetimer-de-7-reset'),
            timeLabel: document.getElementById('timer-de-7'), 
            timeSideLabel: document.getElementById('sidetimer-de-7'),
            sidebox: document.getElementById('de-7-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-de-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        */
    ]
};
// Dynamically creates unique keys
add_event_keys(de.events);

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
                hide_multiple_elements(1,18,'de-img-','opacity');
                // Info
                hide_multiple_elements(1,6,'de-info-','opacity');
                // BREAK PHASE Ex: 1:00 - 1:45
                if (hr == start_hour){
                    // BREAK PHASE Ex: 1:00 - 1:45
                    if (min < 45){
                        progressBar.style.background = progress_color;
                        nextProgress = "de Keep";
                        // Other events
                        show_multiple_elements(11,18,'de-img-','opacity');
                        show_multiple_elements(3,6,'de-info-','opacity');

                        // maxTime = the` end UTC time of this phase as a whole
                        // maxBar = total duration of this phase
                        maxTime = start_hour * 3600 + (45 * 60); 
                        maxBar = 45 * 60;
                    // de KEEP PHASE Ex: 1:45 - 2
                    } else {
                        progressBar.style.background = meta_color;
                        nextProgress = "Regular Events";
                        // Meta
                        show_multiple_elements(1,2,'de-img-','opacity');
                        show_multiple_elements(1,1,'de-info-','opacity');

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
                        show_multiple_elements(11,16,'de-img-','opacity');
                        show_multiple_elements(3,5,'de-info-','opacity');

                        // maxTime = the end UTC time of this phase as a whole
                        // maxBar = total duration of this phase
                        maxTime = end_hour * 3600 + (45 * 60); 
                        maxBar = 45 * 60;
                    // de KEEP PHASE Ex: 2:45 - 3
                    } else {
                        progressBar.style.background = meta_color;
                        nextProgress = "Regular Events";
                        // Meta
                        show_multiple_elements(3,10,'de-img-','opacity');
                        show_multiple_elements(2,2,'de-info-','opacity');

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
                // de.events[0] = the sidebox timer for the meta
                de.events[0].sidebox.style.background = progressBar.style.background;
                de.events[0].timeSideLabel.innerHTML = getDisplayTime(result);
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