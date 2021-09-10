// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let jahai = {
    events: [
        {   // empty
            status: 0,
            key: 0,
            timeSideLabel: document.getElementById('sidetimer-jahai-meta'),
            sidebox: document.getElementById('jahai-meta-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-meta')
        },
        {   // [1] Yatendi Village
            status: 0,
            key: 0,
            cooldown: 60 * 23, 
            startButton: document.getElementById('timer-jahai-1-start'),
            startSideButton: document.getElementById('sidetimer-jahai-1-start'),
            resetButton: document.getElementById('timer-jahai-1-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-1-reset'),
            timeLabel: document.getElementById('timer-jahai-1'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-1'),
            sidebox: document.getElementById('jahai-1-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [2] Ziya
            status: 0,
            key: 0,
            cooldown: 60 * 13 + 45, 
            startButton: document.getElementById('timer-jahai-2-start'),
            startSideButton: document.getElementById('sidetimer-jahai-2-start'),
            resetButton: document.getElementById('timer-jahai-2-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-2-reset'),
            timeLabel: document.getElementById('timer-jahai-2'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-2'),
            sidebox: document.getElementById('jahai-2-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [3] Garrison Escort
            status: 0,
            key: 0,
            cooldown: 60 * 2 + 30, 
            startButton: document.getElementById('timer-jahai-3-start'),
            startSideButton: document.getElementById('sidetimer-jahai-3-start'),
            resetButton: document.getElementById('timer-jahai-3-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-3-reset'),
            timeLabel: document.getElementById('timer-jahai-3'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-3'),
            sidebox: document.getElementById('jahai-3-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [4] DERV
            status: 0,
            key: 0,
            cooldown: 60 * 14 + 45, 
            startButton: document.getElementById('timer-jahai-4-start'),
            startSideButton: document.getElementById('sidetimer-jahai-4-start'),
            resetButton: document.getElementById('timer-jahai-4-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-4-reset'),
            timeLabel: document.getElementById('timer-jahai-4'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-4'),
            sidebox: document.getElementById('jahai-4-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [5] Gate
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-jahai-5-start'),
            startSideButton: document.getElementById('sidetimer-jahai-5-start'),
            resetButton: document.getElementById('timer-jahai-5-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-5-reset'),
            timeLabel: document.getElementById('timer-jahai-5'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-5'),
            sidebox: document.getElementById('jahai-5-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [6] Chantry
            status: 0,
            key: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-jahai-6-start'),
            startSideButton: document.getElementById('sidetimer-jahai-6-start'),
            resetButton: document.getElementById('timer-jahai-6-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-6-reset'),
            timeLabel: document.getElementById('timer-jahai-6'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-6'),
            sidebox: document.getElementById('jahai-6-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        // START OF BOUNTIES
        {   // [7] LB: Wyverns 
            status: 0,
            key: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-jahai-7-start'),
            startSideButton: document.getElementById('sidetimer-jahai-7-start'),
            resetButton: document.getElementById('timer-jahai-7-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-7-reset'),
            timeLabel: document.getElementById('timer-jahai-7'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-7'),
            sidebox: document.getElementById('jahai-7-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [8] Ettin
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-jahai-8-start'),
            startSideButton: document.getElementById('sidetimer-jahai-8-start'),
            resetButton: document.getElementById('timer-jahai-8-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-8-reset'),
            timeLabel: document.getElementById('timer-jahai-8'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-8'),
            sidebox: document.getElementById('jahai-8-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [9] Pet Rock
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-jahai-9-start'),
            startSideButton: document.getElementById('sidetimer-jahai-9-start'),
            resetButton: document.getElementById('timer-jahai-9-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-9-reset'),
            timeLabel: document.getElementById('timer-jahai-9'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-9'),
            sidebox: document.getElementById('jahai-9-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [10] Weapons
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-jahai-10-start'),
            startSideButton: document.getElementById('sidetimer-jahai-10-start'),
            resetButton: document.getElementById('timer-jahai-10-reset'),
            resetSideButton: document.getElementById('sidetimer-jahai-10-reset'),
            timeLabel: document.getElementById('timer-jahai-10'), 
            timeSideLabel: document.getElementById('sidetimer-jahai-10'),
            sidebox: document.getElementById('jahai-10-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-jahai-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(jahai.events);

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

// Visuals 
let arrow_north = document.getElementById('auric-arrow-1'),
    arrow_east = document.getElementById('auric-arrow-2'),
    arrow_south = document.getElementById('auric-arrow-3'),
    arrow_west = document.getElementById('auric-arrow-4');

    let timer = setInterval(function(){
    let d = new Date();
    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        result,
        hr = d.getUTCHours(),
        min = d.getUTCMinutes(),
        sec = d.getUTCSeconds();

        function doMeta(start_hour, end_hour){
            // Pre phase begins every odd UTC hour at :00 
            // Meta begins every every odd UTC hour at :15
            // Map resets at every odd UTC hour at :30

            // ASSUME STARTING AT ODD HR
            // ENTIRE 2HR PHASE Ex: 1:00 - 3:00
            if (hr == start_hour || hr == end_hour){
            	// ENTIRE META PHASE Ex: 1:00 - 1:30
            	if (hr == start_hour && min < 30){
            		// PRE-META PHASE Ex: 1:00 - 1:15
            		if (min < 15){
            			progressBar.style.background = pre_meta_color;
            			nextProgress = "Death-Branded Shatterer";

            			// maxTime = the end UTC time of this phase as a whole
            			// maxBar = total duration of this phase
            			maxTime = start_hour * 3600 + (15 * 60); 
            			maxBar = 15 * 60;
            		} else {
            			progressBar.style.background = meta_color;
	            		nextProgress = "Break";

	            		maxTime = start_hour * 3600 + (30 * 60);
	            		maxBar = 15 * 60;
             		}
            		
            	}
            	// OUTSIDE OF META Ex: 1:30 - 3:00
            	if (hr == start_hour && min >= 30 || hr == end_hour){
            		progressBar.style.background = progress_color;
            		nextProgress = "Pre-Meta - DERV Escort";

            		maxTime = (end_hour + 1) * 3600;
            		maxBar = 90 * 60; 
            	}
            	side_meta_name.innerHTML = nextProgress;
            	currentBar = time - (maxTime - maxBar);
            	barWidth = (currentBar/maxBar)*100;
                progressBar.style.width = barWidth + "%";
                result = time - maxTime;
                progressText.innerHTML = getDisplayTime(result) + " &#x27F6; " + nextProgress;
                // Jahai.events[0] = the sidebox timer for the meta
                jahai.events[0].sidebox.style.background = progressBar.style.background;
                jahai.events[0].timeSideLabel.innerHTML = getDisplayTime(result);

                //console.log(barWidth)
            }
        } // End of function

        // Event session starts every odd UTC hour at xx:30
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
    },1000); 