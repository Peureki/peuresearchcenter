// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var crystal = {
    events: [
        {   // [0] Casino Blitz Meta
            status: 0,
            key: 0,
            timeSideLabel: document.getElementById('sidetimer-crystal-meta'),
            sidebox: document.getElementById('crystal-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-meta')
        },
        {   // [1] Raiding Party N1
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-1-start'),
            startSideButton: document.getElementById('sidetimer-crystal-1-start'),
            resetButton: document.getElementById('timer-crystal-1-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-1-reset'),
            timeLabel: document.getElementById('timer-crystal-1'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-1'),
            sidebox: document.getElementById('crystal-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-1'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        }, 

        {   // [2] Raiding Party N2
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-2-start'),
            startSideButton: document.getElementById('sidetimer-crystal-2-start'),
            resetButton: document.getElementById('timer-crystal-2-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-2-reset'),
            timeLabel: document.getElementById('timer-crystal-2'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-2'),
            sidebox: document.getElementById('crystal-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-2'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        }, 
        {   // [3] Raiding Party S1
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-3-start'),
            startSideButton: document.getElementById('sidetimer-crystal-3-start'),
            resetButton: document.getElementById('timer-crystal-3-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-3-reset'),
            timeLabel: document.getElementById('timer-crystal-3'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-3'),
            sidebox: document.getElementById('crystal-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-3'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [4] Raiding Party S2
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-4-start'),
            startSideButton: document.getElementById('sidetimer-crystal-4-start'),
            resetButton: document.getElementById('timer-crystal-4-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-4-reset'),
            timeLabel: document.getElementById('timer-crystal-4'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-4'),
            sidebox: document.getElementById('crystal-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-4'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [5] Raiding Party E1
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-crystal-5-start'),
            startSideButton: document.getElementById('sidetimer-crystal-5-start'),
            resetButton: document.getElementById('timer-crystal-5-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-5-reset'),
            timeLabel: document.getElementById('timer-crystal-5'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-5'),
            sidebox: document.getElementById('crystal-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-5'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [6] Crucible
            status: 0,
            key: 0,
            cooldown: 60 * 21 + 30, 
            startButton: document.getElementById('timer-crystal-6-start'),
            startSideButton: document.getElementById('sidetimer-crystal-6-start'),
            resetButton: document.getElementById('timer-crystal-6-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-6-reset'),
            timeLabel: document.getElementById('timer-crystal-6'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-6'),
            sidebox: document.getElementById('crystal-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-6'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [7] Choya Stampede
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-crystal-7-start'),
            startSideButton: document.getElementById('sidetimer-crystal-7-start'),
            resetButton: document.getElementById('timer-crystal-7-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-7-reset'),
            timeLabel: document.getElementById('timer-crystal-7'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-7'),
            sidebox: document.getElementById('crystal-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-7'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [8] Farm
            status: 0,
            key: 0,
            cooldown: 60 * 10 + 30, 
            startButton: document.getElementById('timer-crystal-8-start'),
            startSideButton: document.getElementById('sidetimer-crystal-8-start'),
            resetButton: document.getElementById('timer-crystal-8-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-8-reset'),
            timeLabel: document.getElementById('timer-crystal-8'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-8'),
            sidebox: document.getElementById('crystal-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-8'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [9] Refugee (S)
            status: 0,
            key: 0,
            cooldown: 60 * 7 + 30, 
            startButton: document.getElementById('timer-crystal-9-start'),
            startSideButton: document.getElementById('sidetimer-crystal-9-start'),
            resetButton: document.getElementById('timer-crystal-9-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-9-reset'),
            timeLabel: document.getElementById('timer-crystal-9'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-9'),
            sidebox: document.getElementById('crystal-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-9'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [10] Refugee (M)
            status: 0,
            key: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-crystal-10-start'),
            startSideButton: document.getElementById('sidetimer-crystal-10-start'),
            resetButton: document.getElementById('timer-crystal-10-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-10-reset'),
            timeLabel: document.getElementById('timer-crystal-10'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-10'),
            sidebox: document.getElementById('crystal-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-10'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [11] Refugee (N)
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-crystal-11-start'),
            startSideButton: document.getElementById('sidetimer-crystal-11-start'),
            resetButton: document.getElementById('timer-crystal-11-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-11-reset'),
            timeLabel: document.getElementById('timer-crystal-11'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-11'),
            sidebox: document.getElementById('crystal-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-11'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [12] Refugee (N)
            status: 0,
            key: 0,
            cooldown: 60 * 15 + 30, 
            startButton: document.getElementById('timer-crystal-12-start'),
            startSideButton: document.getElementById('sidetimer-crystal-12-start'),
            resetButton: document.getElementById('timer-crystal-12-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-12-reset'),
            timeLabel: document.getElementById('timer-crystal-12'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-12'),
            sidebox: document.getElementById('crystal-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-12'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [13] Refugee (N)
            status: 0,
            key: 0,
            cooldown: 60 * 15 + 30, 
            startButton: document.getElementById('timer-crystal-13-start'),
            startSideButton: document.getElementById('sidetimer-crystal-13-start'),
            resetButton: document.getElementById('timer-crystal-13-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-13-reset'),
            timeLabel: document.getElementById('timer-crystal-13'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-13'),
            sidebox: document.getElementById('crystal-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-13'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [14] Forged Maverick
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-crystal-14-start'),
            startSideButton: document.getElementById('sidetimer-crystal-14-start'),
            resetButton: document.getElementById('timer-crystal-14-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-14-reset'),
            timeLabel: document.getElementById('timer-crystal-14'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-14'),
            sidebox: document.getElementById('crystal-14-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-14'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [15] Forged Punisher
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-crystal-15-start'),
            startSideButton: document.getElementById('sidetimer-crystal-15-start'),
            resetButton: document.getElementById('timer-crystal-15-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-15-reset'),
            timeLabel: document.getElementById('timer-crystal-15'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-15'),
            sidebox: document.getElementById('crystal-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-15'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [16] Forged Sorcerer
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-crystal-16-start'),
            startSideButton: document.getElementById('sidetimer-crystal-16-start'),
            resetButton: document.getElementById('timer-crystal-16-reset'),
            resetSideButton: document.getElementById('sidetimer-crystal-16-reset'),
            timeLabel: document.getElementById('timer-crystal-16'), 
            timeSideLabel: document.getElementById('sidetimer-crystal-16'),
            sidebox: document.getElementById('crystal-16-sidebox'),
            num: document.getElementById('numerical-sidetimer-crystal-16'),
            doCountdown: function(){ countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
    ]
};

// Dynamically creates unique keys
add_event_keys(crystal.events); 

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
let current_progress = document.getElementById('current-status'),
    next_progress = "",
    progress_bar = document.getElementById('progress-bar'),
    progress_text = document.getElementById('progress-text'),
    meta_width = 0,
    new_meta_time = 0,
    max_meta_time = 0,
    side_meta_name = document.getElementById('side-meta-name');

    let timer = setInterval(function(){
    let d = new Date();
    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
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

