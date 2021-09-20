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
                hide_multiple_elements(1,18,'thunderhead-img-','opacity');
                // Info
                hide_multiple_elements(1,6,'thunderhead-info-','opacity');
                // BREAK PHASE Ex: 1:00 - 1:45
                if (hr == start_hour){
                    // BREAK PHASE Ex: 1:00 - 1:45
                    if (min < 45){
                        progressBar.style.background = progress_color;
                        nextProgress = "Thunderhead Keep";
                        // Other events
                        show_multiple_elements(11,18,'thunderhead-img-','opacity');
                        show_multiple_elements(3,6,'thunderhead-info-','opacity');

                        // maxTime = the` end UTC time of this phase as a whole
                        // maxBar = total duration of this phase
                        maxTime = start_hour * 3600 + (45 * 60); 
                        maxBar = 45 * 60;
                    // THUNDERHEAD KEEP PHASE Ex: 1:45 - 2
                    } else {
                        progressBar.style.background = meta_color;
                        nextProgress = "Regular Events";
                        // Meta
                        show_multiple_elements(1,2,'thunderhead-img-','opacity');
                        show_multiple_elements(1,1,'thunderhead-info-','opacity');

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
                        show_multiple_elements(11,16,'thunderhead-img-','opacity');
                        show_multiple_elements(3,5,'thunderhead-info-','opacity');

                        // maxTime = the end UTC time of this phase as a whole
                        // maxBar = total duration of this phase
                        maxTime = end_hour * 3600 + (45 * 60); 
                        maxBar = 45 * 60;
                    // THUNDERHEAD KEEP PHASE Ex: 2:45 - 3
                    } else {
                        progressBar.style.background = meta_color;
                        nextProgress = "Regular Events";
                        // Meta
                        show_multiple_elements(3,10,'thunderhead-img-','opacity');
                        show_multiple_elements(2,2,'thunderhead-info-','opacity');

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
                // thunderhead.events[0] = the sidebox timer for the meta
                thunderhead.events[0].sidebox.style.background = progressBar.style.background;
                thunderhead.events[0].timeSideLabel.innerHTML = getDisplayTime(result);
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