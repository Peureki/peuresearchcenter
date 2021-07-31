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
        },
        {   // [1] Vet vinetooth N
            function: function() {auric_Countdown(1); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-1-start'),
            startSideButton: document.getElementById('sidetimer-auric-1-start'),
            resetButton: document.getElementById('timer-auric-1-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-1-reset'),
            timeLabel: document.getElementById('timer-auric-1'), 
            timeSideLabel: document.getElementById('sidetimer-auric-1'),
            sidebox: document.getElementById('auric-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-1')
        },
        {   // [2] Vet vinetooth E
            function: function() {auric_Countdown(2); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-2-start'),
            startSideButton: document.getElementById('sidetimer-auric-2-start'),
            resetButton: document.getElementById('timer-auric-2-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-2-reset'),
            timeLabel: document.getElementById('timer-auric-2'), 
            timeSideLabel: document.getElementById('sidetimer-auric-2'),
            sidebox: document.getElementById('auric-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-2')
        },
        {   // [3] Vet vinetooth S
            function: function() {auric_Countdown(3); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-3-start'),
            startSideButton: document.getElementById('sidetimer-auric-3-start'),
            resetButton: document.getElementById('timer-auric-3-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-3-reset'),
            timeLabel: document.getElementById('timer-auric-3'), 
            timeSideLabel: document.getElementById('sidetimer-auric-3'),
            sidebox: document.getElementById('auric-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-3')
        },
        {   // [4] Vet vinetooth W
            function: function() {auric_Countdown(4); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-auric-4-start'),
            startSideButton: document.getElementById('sidetimer-auric-4-start'),
            resetButton: document.getElementById('timer-auric-4-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-4-reset'),
            timeLabel: document.getElementById('timer-auric-4'), 
            timeSideLabel: document.getElementById('sidetimer-auric-4'),
            sidebox: document.getElementById('auric-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-4')
        },
        {   // [5] Priory Escort SE
            function: function() {auric_Countdown(5); },
            status: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-5-start'),
            startSideButton: document.getElementById('sidetimer-auric-5-start'),
            resetButton: document.getElementById('timer-auric-5-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-5-reset'),
            timeLabel: document.getElementById('timer-auric-5'), 
            timeSideLabel: document.getElementById('sidetimer-auric-5'),
            sidebox: document.getElementById('auric-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-5')
        },
        {   // [6] Priory Escort W
            function: function() {auric_Countdown(6); },
            status: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-6-start'),
            startSideButton: document.getElementById('sidetimer-auric-6-start'),
            resetButton: document.getElementById('timer-auric-6-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-6-reset'),
            timeLabel: document.getElementById('timer-auric-6'), 
            timeSideLabel: document.getElementById('sidetimer-auric-6'),
            sidebox: document.getElementById('auric-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-6')
        },
        {   // [7] Balthazar HP
            function: function() {auric_Countdown(7); },
            status: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-auric-7-start'),
            startSideButton: document.getElementById('sidetimer-auric-7-start'),
            resetButton: document.getElementById('timer-auric-7-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-7-reset'),
            timeLabel: document.getElementById('timer-auric-7'), 
            timeSideLabel: document.getElementById('sidetimer-auric-7'),
            sidebox: document.getElementById('auric-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-7')
        },
        {   // [8] Blighted Saplings
            function: function() {auric_Countdown(8); },
            name: "Blighted Saplings",
            status: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-8-start'),
            startSideButton: document.getElementById('sidetimer-auric-8-start'),
            resetButton: document.getElementById('timer-auric-8-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-8-reset'),
            timeLabel: document.getElementById('timer-auric-8'), 
            timeSideLabel: document.getElementById('sidetimer-auric-8'),
            sidebox: document.getElementById('auric-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-8')
        },
        {   // [9] Wyvern
            function: function() {auric_Countdown(9); },
            name: "Wyvern",
            status: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-auric-9-start'),
            startSideButton: document.getElementById('sidetimer-auric-9-start'),
            resetButton: document.getElementById('timer-auric-9-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-9-reset'),
            timeLabel: document.getElementById('timer-auric-9'), 
            timeSideLabel: document.getElementById('sidetimer-auric-9'),
            sidebox: document.getElementById('auric-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-9')
        },
        {   // [10] Ooze
            function: function() {auric_Countdown(10); },
            name: "Ooze",
            status: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-auric-10-start'),
            startSideButton: document.getElementById('sidetimer-auric-10-start'),
            resetButton: document.getElementById('timer-auric-10-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-10-reset'),
            timeLabel: document.getElementById('timer-auric-10'), 
            timeSideLabel: document.getElementById('sidetimer-auric-10'),
            sidebox: document.getElementById('auric-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-10')
        },
        {   // [11] Tendril
            function: function() {auric_Countdown(11); },
            name: "Tendril",
            status: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-auric-11-start'),
            startSideButton: document.getElementById('sidetimer-auric-11-start'),
            resetButton: document.getElementById('timer-auric-11-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-11-reset'),
            timeLabel: document.getElementById('timer-auric-11'), 
            timeSideLabel: document.getElementById('sidetimer-auric-11'),
            sidebox: document.getElementById('auric-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-11')
        },
        {   // [12] Priory Escort NE
            function: function() {auric_Countdown(12); },
            status: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-auric-12-start'),
            startSideButton: document.getElementById('sidetimer-auric-12-start'),
            resetButton: document.getElementById('timer-auric-12-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-12-reset'),
            timeLabel: document.getElementById('timer-auric-12'), 
            timeSideLabel: document.getElementById('sidetimer-auric-12'),
            sidebox: document.getElementById('auric-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-12')
        },
        {   // [13] Priory Escort NE
            function: function() {auric_Countdown(13); },
            status: 0,
            cooldown: 60 * 9 + 45, 
            startButton: document.getElementById('timer-auric-13-start'),
            startSideButton: document.getElementById('sidetimer-auric-13-start'),
            resetButton: document.getElementById('timer-auric-13-reset'),
            resetSideButton: document.getElementById('sidetimer-auric-13-reset'),
            timeLabel: document.getElementById('timer-auric-13'), 
            timeSideLabel: document.getElementById('sidetimer-auric-13'),
            sidebox: document.getElementById('auric-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-13'),
            getStuff: function(){console.log(this.cooldown);},
        },
        {   // [14] Auric Basin Meta
            timeSideLabel: document.getElementById('sidetimer-auric-meta'),
            sidebox: document.getElementById('auric-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-auric-meta')
        },
    ]
};

// Label of the meta on the side
var side_meta_name = document.getElementById('side-meta-name');

var auric; // Empty array for countdown
var find_num = /\d+/; // Expression to use with .match(find_num) to find a number in a string
auric.events[13].getStuff();


/* Start/Stop button functionality */
function start_stop(obj){

    var timer = obj.id;
    var timer_num = obj.id.match(find_num)[0];
    // Status 0 = Stop 
    // Status 1 = Starting, Ongoing
    // When the Start button is clicked, change status to Starting and start timer
    // Else -> Keep status at Stop
    
    switch (timer_num) {
        case timer_num:
        start_Event(timer_num);
        break;
    }

    function start_Event(timer_num){
        if (timer == auric.events[timer_num].startButton.id || timer == auric.events[timer_num].startSideButton.id){
            if (auric.events[timer_num].status == 0){
                auric.events[timer_num].status = 1; 
                auric.events[timer_num].function(); 

                auric.events[timer_num].startButton.value = "Reset";
                auric.events[timer_num].startSideButton.value = "Reset";
            } else {
                auric.events[timer_num].status = 0;
                auric.events[timer_num].startButton.value = "Start";
                auric.events[timer_num].startSideButton.value = "Start";

                auric.events[timer_num].timeLabel.style.color = "black";
                auric.events[timer_num].timeSideLabel.style.color = 'black';
                auric.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                auric.events[timer_num].sidebox.style.background = 'transparent';
                auric.events[timer_num].function();
            }   
        }
    }
}

// Reset Button functionality
function reset (obj){
    var timer = obj.id;
    var timer_num = obj.id.match(find_num)[0];
    /*
        When Reset button is clicked, 
        -> Change status to Stop 
        -> Reset timer to original time + 1
        -> Reset time label to oringal time
        -> Reset opacity of the text to hidden
    */
    // Remember to change these reset times to the RESPAWN rate and not the INITIAL SPAWN rate

    switch (timer_num) {
        case timer_num:
        start_Event(timer_num);
        break;
    }

    function start_Event(timer_num){
        if (timer == auric.events[timer_num].resetButton.id || timer == auric.events[timer_num].resetSideButton.id){
            if (auric.events[timer_num].status == 1){
                auric.events[timer_num].status = 0;
                auric.events[timer_num].cooldown = auric.events[timer_num].cooldown;
                auric.events[timer_num].timeLabel.style.color = "black";

                auric.events[timer_num].timeSideLabel.innerHTML = auric.events[timer_num].timeLabel.innerHTML;
                auric.events[timer_num].timeSideLabel.style.color = auric.events[timer_num].timeLabel.style.color;

                auric.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                auric.events[timer_num].sidebox.style.background = "transparent";

                // For events with different initial spawn and respawn rates 
                switch (auric.events[timer_num].name){
                    case "Blighted Saplings":
                    auric.events[timer_num].cooldown = 60 * 8 + 30; 
                    break;

                    case "Wyvern":
                    auric.events[timer_num].cooldown = 60 * 11;
                    break;

                    case "Ooze":
                    auric.events[timer_num].cooldown = 60 * 14; 
                    break;

                    case "Tendril":
                    auric.events[timer_num].cooldown = 60 * 10 + 15;
                    break;
                }

                auric.events[timer_num].function(); 
                auric.events[timer_num].status = 1;
                auric.events[timer_num].function(); 
            }
        }
    }
}

function auric_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, auric.events[arrayNum].cooldown, auric.events[arrayNum].timeLabel, auric.events[arrayNum].timeSideLabel, auric.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(auric.events[arrayNum].timeLabel, auric.events[arrayNum].sidebox, auric.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(auric.events[arrayNum].timeLabel, auric.events[arrayNum].sidebox);
        } else if (countdown.time < auric.events[arrayNum].cooldown){
            start_countdown_color(auric.events[arrayNum].timeLabel, auric.events[arrayNum].timeSideLabel);
        }
    }
    run_countdown(); 
    if (auric.events[arrayNum].status == 1){
        auric[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(auric[arrayNum]);   
    } 
}


// Checkboxes
function auric_All_Checkbox(obj){
	var checkbox = obj,
		a1 = document.getElementById('auric-1-checkbox'), 
        a2 = document.getElementById('auric-2-checkbox'), 
        a3 = document.getElementById('auric-3-checkbox'), 
        a4 = document.getElementById('auric-4-checkbox'); 

	if (checkbox.checked == true){
		a1.checked = true;
        a2.checked = true;
        a3.checked = true;
        a4.checked = true; 

        auric_1_Checkbox(a1);
        auric_2_Checkbox(a2);
        auric_3_Checkbox(a3);
        auric_4_Checkbox(a4);
	} else {
		a1.checked = false;
        a2.checked = false;
        a3.checked = false;
        a4.checked = false; 

        auric_1_Checkbox(a1);
        auric_2_Checkbox(a2);
        auric_3_Checkbox(a3);
        auric_4_Checkbox(a4);
	}
}
// Vinetooth N
function auric_1_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_auric_1.style.display = "block";
    } else {
        sidebox_timer_auric_1.style.display = "none";
    }
}
// Vinetooth E
function auric_2_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_auric_2.style.display = "block";
    } else {
        sidebox_timer_auric_2.style.display = "none";
    }
}
// Vinetooth S
function auric_3_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_auric_3.style.display = "block";
    } else {
        sidebox_timer_auric_3.style.display = "none";
    }
}
// Vinetooth N
function auric_4_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_auric_4.style.display = "block";
    } else {
        sidebox_timer_auric_4.style.display = "none";
    }
}

function auric_Post_S_Pylon(obj){
    var event = obj;
     if (event.checked == true){
        start_stop(auric.events[8].startButton);
     } else {
        start_stop(auric.events[8].startButton);
     }
}
function auric_Post_SE_Pylon(obj){
    var event = obj;
     if (event.checked == true){
        start_stop(auric.events[9].startButton);
     } else {
        start_stop(auric.events[9].startButton);
     }
}
function auric_Post_W_Pylon(obj){
    var event = obj;
     if (event.checked == true){
        start_stop(auric.events[10].startButton);
     } else {
        start_stop(auric.events[10].startButton);
     }
}
function auric_Post_N_Pylon(obj){
    var event = obj;
     if (event.checked == true){
        start_stop(auric.events[11].startButton);
     } else {
        start_stop(auric.events[11].startButton);
     }
}


// Initials
var current_progress = document.getElementById('current-status'),
    next_progress = "",
    progress_bar = document.getElementById('progress-bar'),
    progress_text = document.getElementById('progress-text'),
    meta_width = 0,
    new_meta_time = 0,
    max_meta_time = 0;

// Visuals 
var arrow_north = document.getElementById('auric-arrow-1'),
    arrow_east = document.getElementById('auric-arrow-2'),
    arrow_south = document.getElementById('auric-arrow-3'),
    arrow_west = document.getElementById('auric-arrow-4');

    var timer = setInterval(function(){
    var d = new Date();
    var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
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

        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 2 || d.getUTCHours() == 3 && d.getUTCMinutes() < 30){
            auric_timers(1,2,3);
        }
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 4 || d.getUTCHours() == 5 && d.getUTCMinutes() < 30){
            auric_timers(3,4,5);
        }
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 6 || d.getUTCHours() == 7 && d.getUTCMinutes() < 30){
            auric_timers(5,6,7);
        }
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 8 || d.getUTCHours() == 9 && d.getUTCMinutes() < 30){
            auric_timers(7,8,9);
        }
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 10 || d.getUTCHours() == 11 && d.getUTCMinutes() < 30){
            auric_timers(9,10,11);
        }
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 12 || d.getUTCHours() == 13 && d.getUTCMinutes() < 30){
            auric_timers(11,12,13);
        }
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 14 || d.getUTCHours() == 15 && d.getUTCMinutes() < 30){
            auric_timers(13,14,15);
        }
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 16 || d.getUTCHours() == 17 && d.getUTCMinutes() < 30){
            auric_timers(15,16,17);
        }
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 18 || d.getUTCHours() == 19 && d.getUTCMinutes() < 30){
            auric_timers(17,18,19);
        }
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 20 || d.getUTCHours() == 21 && d.getUTCMinutes() < 30){
            auric_timers(19,20,21);
        }
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 22 || d.getUTCHours() == 23 && d.getUTCMinutes() < 30){
            auric_timers(21,22,23);
        }
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 0 || d.getUTCHours() == 1 && d.getUTCMinutes() < 30){
            auric_timers(23,0,1);
        }

        console.log(d.getUTCHours(), d.getUTCMinutes());


    },1000); 
