// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var auric = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [1] Vet vinetooth N
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-1-start'),
            startSideButton: document.getElementById('sidetimer-auric-1-start'),
            resetButton: document.getElementById('timer-auric-1-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-1-reset'),
            timeLabel: document.getElementById('timer-auric-1'), 
            timeSideLabel: document.getElementById('sidetimer-auric-1'),
            sidebox: document.getElementById('auric-1-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [2] Vet vinetooth E
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-2-start'),
            startSideButton: document.getElementById('sidetimer-auric-2-start'),
            resetButton: document.getElementById('timer-auric-2-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-2-reset'),
            timeLabel: document.getElementById('timer-auric-2'), 
            timeSideLabel: document.getElementById('sidetimer-auric-2'),
            sidebox: document.getElementById('auric-2-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [3] Vet vinetooth S
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-3-start'),
            startSideButton: document.getElementById('sidetimer-auric-3-start'),
            resetButton: document.getElementById('timer-auric-3-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-3-reset'),
            timeLabel: document.getElementById('timer-auric-3'), 
            timeSideLabel: document.getElementById('sidetimer-auric-3'),
            sidebox: document.getElementById('auric-3-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [4] Vet vinetooth W
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-4-start'),
            startSideButton: document.getElementById('sidetimer-auric-4-start'),
            resetButton: document.getElementById('timer-auric-4-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-4-reset'),
            timeLabel: document.getElementById('timer-auric-4'), 
            timeSideLabel: document.getElementById('sidetimer-auric-4'),
            sidebox: document.getElementById('auric-4-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [5] Priory Escort SE
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-5-start'),
            startSideButton: document.getElementById('sidetimer-auric-5-start'),
            resetButton: document.getElementById('timer-auric-5-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-5-reset'),
            timeLabel: document.getElementById('timer-auric-5'), 
            timeSideLabel: document.getElementById('sidetimer-auric-5'),
            sidebox: document.getElementById('auric-5-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [6] Priory Escort W
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-6-start'),
            startSideButton: document.getElementById('sidetimer-auric-6-start'),
            resetButton: document.getElementById('timer-auric-6-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-6-reset'),
            timeLabel: document.getElementById('timer-auric-6'), 
            timeSideLabel: document.getElementById('sidetimer-auric-6'),
            sidebox: document.getElementById('auric-6-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [7] Balthazar HP
            status: 0,
            key: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-auric-7-start'),
            startSideButton: document.getElementById('sidetimer-auric-7-start'),
            resetButton: document.getElementById('timer-auric-7-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-7-reset'),
            timeLabel: document.getElementById('timer-auric-7'), 
            timeSideLabel: document.getElementById('sidetimer-auric-7'),
            sidebox: document.getElementById('auric-7-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [8] Blighted Saplings
            name: "Blighted Saplings",
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-8-start'),
            startSideButton: document.getElementById('sidetimer-auric-8-start'),
            resetButton: document.getElementById('timer-auric-8-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-8-reset'),
            timeLabel: document.getElementById('timer-auric-8'), 
            timeSideLabel: document.getElementById('sidetimer-auric-8'),
            sidebox: document.getElementById('auric-8-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [9] Wyvern
            name: "Wyvern",
            status: 0,
            key: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-auric-9-start'),
            startSideButton: document.getElementById('sidetimer-auric-9-start'),
            resetButton: document.getElementById('timer-auric-9-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-9-reset'),
            timeLabel: document.getElementById('timer-auric-9'), 
            timeSideLabel: document.getElementById('sidetimer-auric-9'),
            sidebox: document.getElementById('auric-9-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [10] Ooze
            name: "Ooze",
            status: 0,
            key: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-auric-10-start'),
            startSideButton: document.getElementById('sidetimer-auric-10-start'),
            resetButton: document.getElementById('timer-auric-10-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-10-reset'),
            timeLabel: document.getElementById('timer-auric-10'), 
            timeSideLabel: document.getElementById('sidetimer-auric-10'),
            sidebox: document.getElementById('auric-10-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [11] Tendril
            name: "Tendril",
            status: 0,
            key: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-auric-11-start'),
            startSideButton: document.getElementById('sidetimer-auric-11-start'),
            resetButton: document.getElementById('timer-auric-11-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-11-reset'),
            timeLabel: document.getElementById('timer-auric-11'), 
            timeSideLabel: document.getElementById('sidetimer-auric-11'),
            sidebox: document.getElementById('auric-11-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-11'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [12] Priory Escort NE
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-12-start'),
            startSideButton: document.getElementById('sidetimer-auric-12-start'),
            resetButton: document.getElementById('timer-auric-12-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-12-reset'),
            timeLabel: document.getElementById('timer-auric-12'), 
            timeSideLabel: document.getElementById('sidetimer-auric-12'),
            sidebox: document.getElementById('auric-12-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-12'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [13] Treasure Mushroom
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 45, 
            startButton: document.getElementById('timer-auric-13-start'),
            startSideButton: document.getElementById('sidetimer-auric-13-start'),
            resetButton: document.getElementById('timer-auric-13-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-13-reset'),
            timeLabel: document.getElementById('timer-auric-13'), 
            timeSideLabel: document.getElementById('sidetimer-auric-13'),
            sidebox: document.getElementById('auric-13-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-13'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.countdownSec);},
        },
        {   // [14] Auric Basin Meta
            timeSideLabel: document.getElementById('sidetimer-auric-meta'),
            sidebox: document.getElementById('auric-meta-sidebox'),
            countdownSec: document.getElementById('numerical-sidetimer-auric-meta')
        },
    ]
};
// Empty array to place timer countdowns in. By allowing to have their own space,
// it makes sure each timer is independent from one another and can still be
// called again by the same functions to be stopped or not
var placeholder = [];
// Dynamically make unique keys for all objects so that
// it can be unique timers. This allows the timers to 
// act independently when countdowning instead of messing
// up when you reset/restart
for (i = 0; i < auric.events.length; i++){
    auric.events[i].key = i; 
}
console.log(auric.events)

// Start the countdown of the timers 
function countdown(status, eventNum, eventCooldown, timeLabel, sideTimeLabel, sidebox, numCountdown){
    // Get the time right now
    let dateNow = Date.now(); 

    function run_countdown() {
        // Take the parameters from the event object to start counting down time and display it
        // Change color of texts and displays based on how much time is left (green for it's up, yellow for when it's coming, etc)
        let countdown = getTime(dateNow, eventCooldown, timeLabel, sideTimeLabel, numCountdown);

        if (countdown.time <= 0){ 
            timeLabel.style.background = ready_color;
            timeLabel.style.color = "red"; 
            sidebox.style.background = ready_color;
        } else if (countdown.time <= 60){
            timeLabel.style.background = soon_color;
            timeLabel.style.color = "black"; 
            sidebox.style.background = soon_color;
            sidebox.style.color = "black"; 

        // Default -> Countdown number to green, bkg are normal
        } else if (countdown.time < eventCooldown){
            timeLabel.style.color = "#008B11";
            sideTimeLabel.style.color = "#008B11";
        }
    }
    // Run the function to do the countdown
    run_countdown(); 
    // Check if the status of the event is 1 or 0. If 1, do the countdown
    // Else, stop this specific timer
    //
    // Do [eventNum] because eventNum is unique to each event. This allows
    // each timer to act independently + can still be stopped/reset/etc when
    // this function is called again
    if (status == 1){
        placeholder[eventNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(placeholder[eventNum]);   
    } 
}

// Label of the meta on the side
var side_meta_name = document.getElementById('side-meta-name');
var findNum = /\d+/; // Expression to use with .match(findNum) to find a number in a string

// Starts and stops an event
// objHTML = id of the html object itself
// objEvent = reference the specific events that are going to be called via HTML (this, auric.events)
function start_stop(objHTML, objEvent){

    // The container itself
    let timer = objHTML.id;
    // Based on the ID of the container, check what num is hard-coded as and match it with the event object
    let timerKey = objHTML.id.match(findNum)[0]; 
    // Status 0 = Stop 
    // Status 1 = Starting, Ongoing
    // When the Start button is clicked, change status to Starting and start timer
    // Else -> Keep status at Stop
    function start_Event(timerKey){
        let start = "Start", 
            reset = "Reset",
            // Colors that are set by the dark/light mode
            setDefault = ''; 
        if (timer == objEvent[timerKey].startButton.id || timer == objEvent[timerKey].startSideButton.id){
            if (objEvent[timerKey].status == 0){
                objEvent[timerKey].status = 1; 
                objEvent[timerKey].doCountdown(); 

                objEvent[timerKey].startButton.value = reset;
                objEvent[timerKey].startSideButton.value = reset;
            } else {
                objEvent[timerKey].status = 0;
                objEvent[timerKey].startButton.value = start;
                objEvent[timerKey].startSideButton.value = start;

                objEvent[timerKey].timeLabel.style.color = setDefault;
                objEvent[timerKey].timeSideLabel.style.color = setDefault;
                objEvent[timerKey].timeLabel.style.background = 'rgba(255,246,214)';
                objEvent[timerKey].sidebox.style.background = setDefault;
                objEvent[timerKey].sidebox.style.color = setDefault;
                objEvent[timerKey].doCountdown();
            }   
        }
    }
    start_Event(timerKey);
}

// Reset Button functionality
function reset (objHTML, objEvent){
    let timer = objHTML.id;
    let timerKey = objHTML.id.match(findNum)[0];
    /*
        When Reset button is clicked, 
        -> Change status to Stop 
        -> Reset timer to original time + 1
        -> Reset time label to oringal time
        -> Reset opacity of the text to hidden
    */
    // Remember to change these reset times to the RESPAWN rate and not the INITIAL SPAWN rate

    function reset_event(timerKey){
        if (timer == objEvent[timerKey].resetButton.id || timer == objEvent[timerKey].resetSideButton.id){
            if (objEvent[timerKey].status == 1){
                objEvent[timerKey].status = 0;
                objEvent[timerKey].cooldown = objEvent[timerKey].cooldown;
                objEvent[timerKey].timeLabel.style.color = "black";

                objEvent[timerKey].timeSideLabel.innerHTML = 'black';
                objEvent[timerKey].timeSideLabel.style.color = '';

                objEvent[timerKey].timeLabel.style.background = 'rgba(255,246,214)';
                objEvent[timerKey].sidebox.style.background = "transparent";

                // For events with different initial spawn and respawn rates 
                switch (objEvent[timerKey].name){
                    // AURIC BASIN
                    case "Blighted Saplings":
                    objEvent[timerKey].cooldown = 60 * 8 + 30; 
                    break;

                    case "Wyvern":
                    objEvent[timerKey].cooldown = 60 * 11;
                    break;

                    case "Ooze":
                    objEvent[timerKey].cooldown = 60 * 14; 
                    break;

                    case "Tendril":
                    objEvent[timerKey].cooldown = 60 * 10 + 15;
                    break;
                }

                objEvent[timerKey].doCountdown(); 
                objEvent[timerKey].status = 1;
                objEvent[timerKey].doCountdown(); 
            }
        }
    }
    reset_event(timerKey);
}
// Shows or removes timer on the sideboxes depending if the users check or unchecks the checkbox
function checkboxTimer(objHTML, objEvent){
    // Match the num on the html id to match the pos/key in the objEvent
    let timerKey = objHTML.id.match(findNum)[0];
    // Check if user has checked or unchecked checkbox
    if (objHTML.checked == true){
        objEvent[timerKey].sidebox.style.display = "block"; 
    } else {
        objEvent[timerKey].sidebox.style.display = "none";
    }
}

// Initials
let current_progress = document.getElementById('current-status'),
    next_progress = "",
    progress_bar = document.getElementById('progress-bar'),
    progress_text = document.getElementById('progress-text'),
    meta_width = 0,
    new_meta_time = 0,
    max_meta_time = 0;

// Visuals 
let arrow_north = document.getElementById('auric-arrow-1'),
    arrow_east = document.getElementById('auric-arrow-2'),
    arrow_south = document.getElementById('auric-arrow-3'),
    arrow_west = document.getElementById('auric-arrow-4');

    let timer = setInterval(function(){
    let d = new Date();
    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        result,
        hours,
        minutes,
        seconds;

        function auric_timers(start_hour, btw_hour, end_hour){
            // Prep phase begins every UTC even hour at :45 
            // Pre-events begins every UTC even hour at :49
            // Meta begins every odd UTC hour at the start
            // Map reset begins every odd UTC hour at :30 
            if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 30 || d.getUTCHours() == btw_hour || d.getUTCHours() == end_hour && d.getUTCMinutes() < 30){
                // Defaults
                // Set time to 24*3600 when UTC hour is 0
                if (start_hour == 23){
                    //time = 24 * 3600 + d.getUTCMinutes() * 60 + d.getUTCSeconds();
                    btw_hour = 24;
                    end_hour = 25;
                } 
                if (d.getUTCHours() == 0 || d.getUTCHours() == 1 && d.getUTCMinutes() < 30){
                    start_hour = -1;
                    btw_hour = 0; 
                    end_hour = 1;
                }
                progress_bar.style.background = progress_color;
                current_progress.innerHTML = "Status: Pylon Events";
                next_progress = "Prep Phase - Octovine";
                side_meta_name.innerHTML = "Pre Octovine";

                change_arrow_colors_to_light_cyan(arrow_north);
                change_arrow_colors_to_light_cyan(arrow_east);
                change_arrow_colors_to_light_cyan(arrow_south);
                change_arrow_colors_to_light_cyan(arrow_west);

                hide_multiple_elements(1,4,'auric-arrow-','opacity'); // Arrows
                hide_multiple_elements(1,20,'auric-img-','opacity'); // All images 
                hide_multiple_elements(1,12,'auric-info-','opacity'); // All info

                auric.events[14].sidebox.style.background = "transparent";

                max_meta_time = ((btw_hour * 3600) + (45 * 60)) - ((start_hour * 3600) + (30 * 60));
                new_meta_time = time - ((start_hour * 3600) + (30 * 60));
                result = ((btw_hour * 3600) + (45 * 60)) - time;

                // Prep phase
                if (d.getUTCHours() == btw_hour && d.getUTCMinutes() >= 45){

                    progress_bar.style.background = pre_meta_color;
                    auric.events[14].sidebox.style.background = pre_meta_color;
                    current_progress.innerHTML = "Status: Prep Phase! Challenges up!";
                    next_progress = "Pre-Meta Event - Mordrem Assault";
                    side_meta_name.innerHTML = "Mordrem Assault";

                    show_multiple_elements(1,4,'auric-arrow-','opacity'); // Arrows
                    show_multiple_elements(1,4,'auric-img-','opacity'); // Challenge circles
                    show_multiple_elements(1,4,'auric-info-','opacity'); // Challenge info 

                    max_meta_time = ((btw_hour * 3600) + (48 * 60)) - ((btw_hour * 3600) + (45 * 60));
                    new_meta_time = time - ((btw_hour * 3600) + (45 * 60));
                    result = ((btw_hour * 3600) + (48 * 60)) - time;

                    // Pre-event phase 
                    if (d.getUTCHours() == btw_hour && d.getUTCMinutes() >= 48){

                        progress_bar.style.background = pre_meta_color;
                        current_progress.innerHTML = "Status: Pre-Meta Event - Mordrem Assault!";
                        next_progress = "Octovine";
                        side_meta_name.innerHTML = "Octovine";

                        show_multiple_elements(5,12,'auric-img-','opacity'); // Modrem assault 
                        show_multiple_elements(5,8,'auric-info-','opacity'); // Modrem assault info
                        hide_multiple_elements(1,4,'auric-arrow-','opacity'); // Arrows

                        max_meta_time = ((end_hour * 3600) + (0 * 60)) - ((btw_hour * 3600) + (48 * 60));
                        new_meta_time = time - ((btw_hour * 3600) + (48 * 60));
                        result = ((end_hour * 3600) + (0 * 60)) - time;
                    }
                }
                // Meta
                if (d.getUTCHours() == end_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 20 ){

                    progress_bar.style.background = meta_color;
                    auric.events[14].sidebox.style.background = meta_color;
                    current_progress.innerHTML = "Status: Octovine!";
                    next_progress = "Break";
                    side_meta_name.innerHTML = "Break";

                    change_arrow_colors_to_cyan(arrow_north);
                    change_arrow_colors_to_cyan(arrow_east);
                    change_arrow_colors_to_cyan(arrow_south);
                    change_arrow_colors_to_cyan(arrow_west);

                    show_multiple_elements(1,4,'auric-arrow-','opacity'); // Arrows
                    show_multiple_elements(13,20,'auric-img-','opacity'); // Meta 
                    show_multiple_elements(9,12,'auric-info-','opacity'); // Meta info
                    hide_multiple_elements(5,12,'auric-img-','opacity'); // Modrem assault
                    hide_multiple_elements(5,8,'auric-info-','opacity'); // Modrem assault info

                    max_meta_time = ((end_hour * 3600) + (20 * 60)) - ((end_hour * 3600) + (0 * 60));
                    new_meta_time = time - ((end_hour * 3600) + (0 * 60));
                    result = ((end_hour * 3600) + (20 * 60)) - time;
                }
                // Break until Pylons
                if (d.getUTCHours() == end_hour && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 30){
                    progress_bar.style.background = progress_color;
                    current_progress.innerHTML = "Status: Break";
                    next_progress = "Pylon Events";
                    side_meta_name.innerHTML = "Pylons";

                    max_meta_time = ((end_hour * 3600) + (30 * 60)) - ((end_hour * 3600) + (20 * 60));
                    new_meta_time = time - ((end_hour * 3600) + (20 * 60));
                    result = ((end_hour * 3600) + (30 * 60)) - time;

                }
                meta_width = (new_meta_time/max_meta_time)*100;
                progress_bar.style.width = meta_width + "%";
                progress_text.innerHTML = getDisplayTime(result) + " &#x27F6; " + next_progress;

                auric.events[14].sidebox.style.background = progress_bar.style.background;
                auric.events[14].timeSideLabel.innerHTML = getDisplayTime(result);
            }
        } // End of function

        // Event session starts every odd hour at xx:30
        // Session lasts for 2 hours
        function event_session(){
            let hour = d.getUTCHours(),
                mins = d.getUTCMinutes(),
                start_hour = 0,
                btw_hour = 0,
                end_hour = 0;
            // Check if hour is odd or not
            // If odd, use that as the start hour
            // Else, use hour - 1 as the start hour
            if (hour % 2 != 0){
                start_hour = hour; 
                btw_hour = hour + 1;
                end_hour = hour + 2;
            } else {
                start_hour = hour - 1;
                btw_hour = hour; 
                end_hour = hour + 1;
            }
            // Only start meta timer when
            // 1) Start hour is an odd hour and is greater than 30 mins
            // 2) Btw hour is the second hour (even)
            if (hour == start_hour && mins >= 30 || hour == btw_hour){
                auric_timers(start_hour, btw_hour, end_hour); 
            }
            // 3) End hour is the next odd hour, but is less than 30 mins
            if (hour == start_hour && mins < 30){
                auric_timers(start_hour - 2, btw_hour - 2, end_hour - 2);
            }
        }
        event_session();
    },1000); 
