// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var crystal = {
    events: [
        {   // [0] Casino Blitz Meta
            timeSideLabel: document.getElementById('sidetimer-crystal-meta'),
            sidebox: document.getElementById('crystal-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-meta')
        },
        {   // [1] Raiding Party N1
            function: function() { crystal_Countdown(1); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-1-start'),
            startSideButton: document.getElementById('sidetimer-crystal-1-start'),
            resetButton: document.getElementById('timer-crystal-1-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-1-reset'),
            timeLabel: document.getElementById('timer-crystal-1'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-1'),
            sidebox: document.getElementById('crystal-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-1')
        }, 

        {   // [2] Raiding Party N2
            function: function() { crystal_Countdown(2); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-2-start'),
            startSideButton: document.getElementById('sidetimer-crystal-2-start'),
            resetButton: document.getElementById('timer-crystal-2-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-2-reset'),
            timeLabel: document.getElementById('timer-crystal-2'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-2'),
            sidebox: document.getElementById('crystal-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-2')
        }, 
        {   // [3] Raiding Party S1
            function: function() { crystal_Countdown(3); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-3-start'),
            startSideButton: document.getElementById('sidetimer-crystal-3-start'),
            resetButton: document.getElementById('timer-crystal-3-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-3-reset'),
            timeLabel: document.getElementById('timer-crystal-3'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-3'),
            sidebox: document.getElementById('crystal-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-3')
        },
        {   // [4] Raiding Party S2
            function: function() { crystal_Countdown(4); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-4-start'),
            startSideButton: document.getElementById('sidetimer-crystal-4-start'),
            resetButton: document.getElementById('timer-crystal-4-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-4-reset'),
            timeLabel: document.getElementById('timer-crystal-4'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-4'),
            sidebox: document.getElementById('crystal-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-4')
        },
        {   // [5] Raiding Party E1
            function: function() { crystal_Countdown(5); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-5-start'),
            startSideButton: document.getElementById('sidetimer-crystal-5-start'),
            resetButton: document.getElementById('timer-crystal-5-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-5-reset'),
            timeLabel: document.getElementById('timer-crystal-5'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-5'),
            sidebox: document.getElementById('crystal-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-5')
        },
        {   // [6] Crucible
            function: function() { crystal_Countdown(6); },
            status: 0,
            cooldown: 60 * 21 + 30, 
            startButton: document.getElementById('timer-crystal-6-start'),
            startSideButton: document.getElementById('sidetimer-crystal-6-start'),
            resetButton: document.getElementById('timer-crystal-6-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-6-reset'),
            timeLabel: document.getElementById('timer-crystal-6'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-6'),
            sidebox: document.getElementById('crystal-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-6')
        },
        {   // [7] Choya Stampede
            function: function() { crystal_Countdown(7); },
            status: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-crystal-7-start'),
            startSideButton: document.getElementById('sidetimer-crystal-7-start'),
            resetButton: document.getElementById('timer-crystal-7-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-7-reset'),
            timeLabel: document.getElementById('timer-crystal-7'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-7'),
            sidebox: document.getElementById('crystal-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-7')
        },
        {   // [8] Farm
            function: function() { crystal_Countdown(8); },
            status: 0,
            cooldown: 60 * 10 + 30, 
            startButton: document.getElementById('timer-crystal-8-start'),
            startSideButton: document.getElementById('sidetimer-crystal-8-start'),
            resetButton: document.getElementById('timer-crystal-8-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-8-reset'),
            timeLabel: document.getElementById('timer-crystal-8'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-8'),
            sidebox: document.getElementById('crystal-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-8')
        },
        {   // [9] Refugee (S)
            function: function() { crystal_Countdown(9); },
            status: 0,
            cooldown: 60 * 7 + 30, 
            startButton: document.getElementById('timer-crystal-9-start'),
            startSideButton: document.getElementById('sidetimer-crystal-9-start'),
            resetButton: document.getElementById('timer-crystal-9-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-9-reset'),
            timeLabel: document.getElementById('timer-crystal-9'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-9'),
            sidebox: document.getElementById('crystal-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-9')
        },
        {   // [10] Refugee (M)
            function: function() { crystal_Countdown(10); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-crystal-10-start'),
            startSideButton: document.getElementById('sidetimer-crystal-10-start'),
            resetButton: document.getElementById('timer-crystal-10-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-10-reset'),
            timeLabel: document.getElementById('timer-crystal-10'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-10'),
            sidebox: document.getElementById('crystal-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-10')
        },
        {   // [11] Refugee (N)
            function: function() { crystal_Countdown(11); },
            status: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-crystal-11-start'),
            startSideButton: document.getElementById('sidetimer-crystal-11-start'),
            resetButton: document.getElementById('timer-crystal-11-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-11-reset'),
            timeLabel: document.getElementById('timer-crystal-11'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-11'),
            sidebox: document.getElementById('crystal-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-11')
        },
        {   // [12] Refugee (N)
            function: function() { crystal_Countdown(12); },
            status: 0,
            cooldown: 60 * 15 + 30, 
            startButton: document.getElementById('timer-crystal-12-start'),
            startSideButton: document.getElementById('sidetimer-crystal-12-start'),
            resetButton: document.getElementById('timer-crystal-12-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-12-reset'),
            timeLabel: document.getElementById('timer-crystal-12'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-12'),
            sidebox: document.getElementById('crystal-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-12')
        },
        {   // [13] Refugee (N)
            function: function() { crystal_Countdown(13); },
            status: 0,
            cooldown: 60 * 15 + 30, 
            startButton: document.getElementById('timer-crystal-13-start'),
            startSideButton: document.getElementById('sidetimer-crystal-13-start'),
            resetButton: document.getElementById('timer-crystal-13-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-13-reset'),
            timeLabel: document.getElementById('timer-crystal-13'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-13'),
            sidebox: document.getElementById('crystal-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-13')
        },
        {   // [14] Forged Maverick
            function: function() { crystal_Countdown(14); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-crystal-14-start'),
            startSideButton: document.getElementById('sidetimer-crystal-14-start'),
            resetButton: document.getElementById('timer-crystal-14-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-14-reset'),
            timeLabel: document.getElementById('timer-crystal-14'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-14'),
            sidebox: document.getElementById('crystal-14-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-14')
        },
        {   // [15] Forged Punisher
            function: function() { crystal_Countdown(15); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-crystal-15-start'),
            startSideButton: document.getElementById('sidetimer-crystal-15-start'),
            resetButton: document.getElementById('timer-crystal-15-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-15-reset'),
            timeLabel: document.getElementById('timer-crystal-15'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-15'),
            sidebox: document.getElementById('crystal-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-15')
        },
        {   // [16] Forged Sorcerer
            function: function() { crystal_Countdown(16); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-crystal-16-start'),
            startSideButton: document.getElementById('sidetimer-crystal-16-start'),
            resetButton: document.getElementById('timer-crystal-16-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-16-reset'),
            timeLabel: document.getElementById('timer-crystal-16'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-16'),
            sidebox: document.getElementById('crystal-16-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-16')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var crystal; // Empty array for countdown
var find_num = /\d+/; // Expression to use with .match(find_num) to find a number in a string


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
        if (timer == crystal.events[timer_num].startButton.id || timer == crystal.events[timer_num].startSideButton.id){
            if (crystal.events[timer_num].status == 0){
                crystal.events[timer_num].status = 1; 
                crystal.events[timer_num].function(); 

                crystal.events[timer_num].startButton.value = "Reset";
                crystal.events[timer_num].startSideButton.value = "Reset";
            } else {
                crystal.events[timer_num].status = 0;
                crystal.events[timer_num].startButton.value = "Start";
                crystal.events[timer_num].startSideButton.value = "Start";

                crystal.events[timer_num].timeLabel.style.color = "black";
                crystal.events[timer_num].timeSideLabel.style.color = 'black';
                crystal.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                crystal.events[timer_num].sidebox.style.background = 'transparent';
                crystal.events[timer_num].function();
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
        if (timer == crystal.events[timer_num].resetButton.id || timer == crystal.events[timer_num].resetSideButton.id){
            if (crystal.events[timer_num].status == 1){
                crystal.events[timer_num].status = 0;
                crystal.events[timer_num].cooldown = crystal.events[timer_num].cooldown;
                crystal.events[timer_num].timeLabel.style.color = "black";

                crystal.events[timer_num].timeSideLabel.innerHTML = crystal.events[timer_num].timeLabel.innerHTML;
                crystal.events[timer_num].timeSideLabel.style.color = crystal.events[timer_num].timeLabel.style.color;

                crystal.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                crystal.events[timer_num].sidebox.style.background = "transparent";

                crystal.events[timer_num].function(); 
                crystal.events[timer_num].status = 1;
                crystal.events[timer_num].function(); 
            }
        }
    }
}

function crystal_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, crystal.events[arrayNum].cooldown, crystal.events[arrayNum].timeLabel, crystal.events[arrayNum].timeSideLabel, crystal.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(crystal.events[arrayNum].timeLabel, crystal.events[arrayNum].sidebox, crystal.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(crystal.events[arrayNum].timeLabel, crystal.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (crystal.events[arrayNum].status == 1){
        crystal[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(crystal[arrayNum]);   
    } 
}




// Checkboxes
function crystal_All_Checkbox(obj){
	var checkbox = obj,
		c1 = document.getElementById('crystal-1-checkbox'), 
        c2 = document.getElementById('crystal-2-checkbox'), 
        c3 = document.getElementById('crystal-3-checkbox'), 
        c4 = document.getElementById('crystal-4-checkbox'),
        c5 = document.getElementById('crystal-5-checkbox'), 
        c6 = document.getElementById('crystal-6-checkbox'), 
        c7 = document.getElementById('crystal-7-checkbox'), 
        c8 = document.getElementById('crystal-8-checkbox'), 
        c9 = document.getElementById('crystal-9-checkbox'), 
        c10 = document.getElementById('crystal-10-checkbox'), 
        c11 = document.getElementById('crystal-11-checkbox');

	if (checkbox.checked == true){
		c1.checked = true;
        c2.checked = true;
        c3.checked = true;
        c4.checked = true; 
        c5.checked = true; 
        c6.checked = true; 
        c7.checked = true; 
        c8.checked = true; 
        c9.checked = true; 
        c10.checked = true; 
        c11.checked = true; 

        crystal_1_Checkbox(c1);
        crystal_2_Checkbox(c2);
        crystal_3_Checkbox(c3);
        crystal_4_Checkbox(c4);
        crystal_5_Checkbox(c5);
        crystal_6_Checkbox(c6);
        crystal_7_Checkbox(c7);
        crystal_8_Checkbox(c8);
        crystal_9_Checkbox(c9);
        crystal_10_Checkbox(c10);
        crystal_11_Checkbox(c11);
	} else {
		c1.checked = false;
        c2.checked = false;
        c3.checked = false;
        c4.checked = false; 
        c5.checked = false; 
        c6.checked = false; 
        c7.checked = false; 
        c8.checked = false; 
        c9.checked = false; 
        c10.checked = false; 
        c11.checked = false; 

        crystal_1_Checkbox(c1);
        crystal_2_Checkbox(c2);
        crystal_3_Checkbox(c3);
        crystal_4_Checkbox(c4);
        crystal_5_Checkbox(c5);
        crystal_6_Checkbox(c6);
        crystal_7_Checkbox(c7);
        crystal_8_Checkbox(c8);
        crystal_9_Checkbox(c9);
        crystal_10_Checkbox(c10);
        crystal_11_Checkbox(c11);
	}
}
// Raiding party N1
function crystal_1_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_1.style.display = "block";
    } else {
        sidebox_timer_crystal_1.style.display = "none";
    }
}
// Raiding party N2
function crystal_2_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_2.style.display = "block";
    } else {
        sidebox_timer_crystal_2.style.display = "none";
    }
}
// Raiding party S1
function crystal_3_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_3.style.display = "block";
    } else {
        sidebox_timer_crystal_3.style.display = "none";
    }
}
// Raiding party S2
function crystal_4_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_4.style.display = "block";
    } else {
        sidebox_timer_crystal_4.style.display = "none";
    }
}
// Raiding party W1
function crystal_5_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_5.style.display = "block";
    } else {
        sidebox_timer_crystal_5.style.display = "none";
    }
}
// Crucible
function crystal_6_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_6.style.display = "block";
    } else {
        sidebox_timer_crystal_6.style.display = "none";
    }
}
// Choya Stampede
function crystal_7_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_7.style.display = "block";
    } else {
        sidebox_timer_crystal_7.style.display = "none";
    }
}
// Farm
function crystal_8_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_8.style.display = "block";
    } else {
        sidebox_timer_crystal_8.style.display = "none";
    }
}
// Refugee S
function crystal_9_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_9.style.display = "block";
    } else {
        sidebox_timer_crystal_9.style.display = "none";
    }
}
// Refugee M
function crystal_10_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_10.style.display = "block";
    } else {
        sidebox_timer_crystal_10.style.display = "none";
    }
}
// Refugee N
function crystal_11_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_crystal_11.style.display = "block";
    } else {
        sidebox_timer_crystal_11.style.display = "none";
    }
}

// Bounty checkboxes
// Deselect all bounties
function bounty_Deselect(obj){
    var elem;
    
    for (i = 4; i <= 18; i++){
        for (j = 1; j <= 3; j++){
            elem = document.getElementById('crystal-bounty-'+i+'-'+j+'-checkbox');
            elem.checked = false;
        }
    } 
    hide_multiple_elements(4,48,'crystal-bounty-target-','opacity');
    var elem1 = document.getElementById('crystal-bounty-1-checkbox').checked = false; 
    var elem2 = document.getElementById('crystal-bounty-2-checkbox').checked = false;
    var elem3 = document.getElementById('crystal-bounty-3-checkbox').checked = false;

    crystal_Bounty_1_Checkbox(elem1);
    crystal_Bounty_2_Checkbox(elem2);
    crystal_Bounty_3_Checkbox(elem3);
}
// Choya
function crystal_Bounty_1_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('crystal-bounty-target-1'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}
// Queen Yidaxu
function crystal_Bounty_2_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('crystal-bounty-target-2'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}
// Facet
function crystal_Bounty_3_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('crystal-bounty-target-3'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}

// Initials
var current_progress = document.getElementById('current-status'),
    next_progress = "",
    progress_bar = document.getElementById('progress-bar'),
    progress_text = document.getElementById('progress-text'),
    meta_width = 0,
    new_meta_time = 0,
    max_meta_time = 0,
    side_meta_name = document.getElementById('side-meta-name');

    var timer = setInterval(function(){
    var d = new Date();
    var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        result,
        hours,
        minutes,
        seconds;
        
        // Casino phase 1 begins at every even UTC at xx:05 
        // Casino phase 2: xx:10
        // Casino phase 3: xx:15
        // Casino 1 minute wait: xx:20 - xx:21 
        // Choya Pinata: xx:21
        // End whole phase at xx:30 (techically when the pinata dies)
        function crystal_meta(prev_hr, hr, next_hr){
            if (d.getUTCHours() == prev_hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == hr || d.getUTCHours() == next_hr && d.getUTCMinutes() < 30){
            progress_bar.style.background = progress_color;
            crystal.events[0].sidebox.style.background = "transparent";
            current_progress.innerHTML = "Status: Break";
            next_progress = "Casino Blitz - Round 1";

            // Defaults 
            hide_multiple_elements(1,1,'crystal-img-','display'); // Round 1 circle w/ animation 
            hide_multiple_elements(1,5,'crystal-img-','opacity'); // Round 1-3, choya pinata 

            max_meta_time = ((next_hr * 3600) + (5 * 60)) - ((prev_hr * 3600) + (30 * 60));
            new_meta_time = time - ((prev_hr * 3600) + (30 * 60));
            result = ((next_hr * 3600) + (5 * 60)) - time;

            // 5 minutes til meta
            if (d.getUTCHours() == next_hr && d.getUTCMinutes() < 5){
                progress_bar.style.background = pre_meta_color;
                crystal.events[0].sidebox.style.background = pre_meta_color;

                show_multiple_elements(1,1,'crystal-img-','display'); // Round 1 circle w/ animation
            }

            // Casino Blitz whole
            if (d.getUTCHours() == next_hr && d.getUTCMinutes() >= 5 && d.getUTCMinutes() < 30){
                progress_bar.style.background = meta_color;
                crystal.events[0].sidebox.style.background = meta_color;

                // Round 1 
                if (d.getUTCMinutes() >= 5 && d.getUTCMinutes() < 10){
                    current_progress.innerHTML = "Status: Casino Blitz - Round 1";
                    next_progress = "Casino Blitz - Round 2";

                    hide_multiple_elements(1,1,'crystal-img-','display'); // Round 1 circle w/ animation
                    show_multiple_elements(2,2,'crystal-img-','opacity'); // Round 1 circle w/o animation

                    max_meta_time = ((next_hr * 3600) + (10 * 60)) - ((next_hr * 3600) + (5 * 60));
                    new_meta_time = time - ((next_hr * 3600) + (5 * 60));
                    result = ((next_hr * 3600) + (10 * 60)) - time;
                }
                // Round 2
                if (d.getUTCMinutes() >= 10 && d.getUTCMinutes() < 15){
                    current_progress.innerHTML = "Status: Casino Blitz - Round 2";
                    next_progress = "Casino Blitz - Round 3";

                    hide_multiple_elements(2,2,'crystal-img-','display'); // Round 1 circle
                    show_multiple_elements(3,3,'crystal-img-','opacity'); // Round 2 circle 

                    max_meta_time = ((next_hr * 3600) + (15 * 60)) - ((next_hr * 3600) + (10 * 60));
                    new_meta_time = time - ((next_hr * 3600) + (10 * 60));
                    result = ((next_hr * 3600) + (15 * 60)) - time;
                }
                // Round 3
                if (d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
                    current_progress.innerHTML = "Status: Casino Blitz - Round 3";
                    next_progress = "1 Minute Break";

                    hide_multiple_elements(3,3,'crystal-img-','display'); // Round 2 circle
                    show_multiple_elements(4,4,'crystal-img-','opacity'); // Round 3 circle 

                    max_meta_time = ((next_hr * 3600) + (20 * 60)) - ((next_hr * 3600) + (15 * 60));
                    new_meta_time = time - ((next_hr * 3600) + (15 * 60));
                    result = ((next_hr * 3600) + (20 * 60)) - time;
                }
                // 1 Minute Break
                if (d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 21){
                    current_progress.innerHTML = "Status: 1 Minute Break til Choya Pinata";
                    next_progress = "Choya Pinata";

                    hide_multiple_elements(4,4,'crystal-img-','display'); // Round 3 circle 

                    max_meta_time = ((next_hr * 3600) + (21 * 60)) - ((next_hr * 3600) + (20 * 60));
                    new_meta_time = time - ((next_hr * 3600) + (20 * 60));
                    result = ((next_hr * 3600) + (21 * 60)) - time;
                }
                // Choya Pinata
                if (d.getUTCMinutes() >= 21 && d.getUTCMinutes() < 30){
                    current_progress.innerHTML = "Status: Get the Choya Pinata before it escapes!";
                    next_progress = "Break";

                    show_multiple_elements(5,5,'crystal-img-','opacity'); // Choya Pinata 

                    max_meta_time = ((next_hr * 3600) + (30 * 60)) - ((next_hr * 3600) + (21 * 60));
                    new_meta_time = time - ((next_hr * 3600) + (21 * 60));
                    result = ((next_hr * 3600) + (30 * 60)) - time;
                }
            }

            meta_width = (new_meta_time/max_meta_time)*100;
            progress_bar.style.width = meta_width + "%";
            progress_text.innerHTML = getDisplayTime(result) + " &#x27F6; " + next_progress;

            side_meta_name.innerHTML = next_progress;
            crystal.events[0].sidebox.style.background = progress_bar.style.background;
            crystal.events[0].timeSideLabel.innerHTML = getDisplayTime(result);

        }
    }
    console.log(d.getUTCHours(), d.getUTCMinutes());

    if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 30){
        crystal_meta(0,1,2);
    }
    if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
        crystal_meta(2,3,4);
    }
    if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 30){
        crystal_meta(4,5,6);
    }
    if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
        crystal_meta(6,7,8);
    }
    if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 30){
        crystal_meta(8,9,10);
    }
    if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
        crystal_meta(10,11,12);
    }
    if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 30){
        crystal_meta(12,13,14);
    }
    if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 30){
        crystal_meta(14,15,16);
    }
    if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 30){
        crystal_meta(16,17,18);
    }
    if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
        crystal_meta(18,19,20);
    }
    if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 30){
        crystal_meta(20,21,22);
    }
    if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
        crystal_meta(22,23,24);
    }


    },1000); 

