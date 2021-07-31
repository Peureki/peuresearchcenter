// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var vabbi = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Forged Officer
            function: function() { vabbi_Countdown(1); },
            status: 0,
            cooldown: 60 * 6 + 45, 
            box: document.getElementById('vabbi-1-box'),
            startButton: document.getElementById('timer-vabbi-1-start'),
            startSideButton: document.getElementById('sidetimer-vabbi-1-start'),
            resetButton: document.getElementById('timer-vabbi-1-reset'),
            resetSideButton: document.getElementById('sidetimer-vabbi-1-reset'),
            timeLabel: document.getElementById('timer-vabbi-1'), 
            timeSideLabel: document.getElementById('sidetimer-vabbi-1'),
            textLabel: document.getElementById('timer-vabbi-1-text'),
            sidebox: document.getElementById('vabbi-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-1')
        },
        {   // [2] Statues
            function: function() { vabbi_Countdown(2); },
            status: 0,
            cooldown: 60 * 24 + 15, 
            startButton: document.getElementById('timer-vabbi-2-start'),
            startSideButton: document.getElementById('sidetimer-vabbi-2-start'),
            resetButton: document.getElementById('timer-vabbi-2-reset'),
            resetSideButton: document.getElementById('sidetimer-vabbi-2-reset'),
            timeLabel: document.getElementById('timer-vabbi-2'), 
            timeSideLabel: document.getElementById('sidetimer-vabbi-2'),
            textLabel: document.getElementById('timer-vabbi-2-text'),
            sidebox: document.getElementById('vabbi-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-2')
        },
        {   // [3] Branded Assaults
            function: function() { vabbi_Countdown(3); },
            status: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-vabbi-3-start'),
            startSideButton: document.getElementById('sidetimer-vabbi-3-start'),
            resetButton: document.getElementById('timer-vabbi-3-reset'),
            resetSideButton: document.getElementById('sidetimer-vabbi-3-reset'),
            timeLabel: document.getElementById('timer-vabbi-3'), 
            timeSideLabel: document.getElementById('sidetimer-vabbi-3'),
            textLabel: document.getElementById('timer-vabbi-3-text'),
            sidebox: document.getElementById('vabbi-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-3')
        },
        {   // [4] Show
            function: function() { vabbi_Countdown(4); },
            status: 0,
            cooldown: 60 * 10 + 45, 
            startButton: document.getElementById('timer-vabbi-4-start'),
            startSideButton: document.getElementById('sidetimer-vabbi-4-start'),
            resetButton: document.getElementById('timer-vabbi-4-reset'),
            resetSideButton: document.getElementById('sidetimer-vabbi-4-reset'),
            timeLabel: document.getElementById('timer-vabbi-4'), 
            timeSideLabel: document.getElementById('sidetimer-vabbi-4'),
            textLabel: document.getElementById('timer-vabbi-4-text'),
            sidebox: document.getElementById('vabbi-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-4')
        },
        {   // [5] Legendary Forged
            function: function() { vabbi_Countdown(5); },
            status: 0,
            cooldown: 60 * 30, 
            box: document.getElementById('vabbi-5-box'),
            startButton: document.getElementById('timer-vabbi-5-start'),
            startSideButton: document.getElementById('sidetimer-vabbi-5-start'),
            resetButton: document.getElementById('timer-vabbi-5-reset'),
            resetSideButton: document.getElementById('sidetimer-vabbi-5-reset'),
            timeLabel: document.getElementById('timer-vabbi-5'), 
            timeSideLabel: document.getElementById('sidetimer-vabbi-5'),
            textLabel: document.getElementById('timer-vabbi-5-text'),
            sidebox: document.getElementById('vabbi-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-5')
        },
        {   // [6] Forged Wildhound
            function: function() { vabbi_Countdown(6); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-vabbi-6-start'),
            startSideButton: document.getElementById('sidetimer-vabbi-6-start'),
            resetButton: document.getElementById('timer-vabbi-6-reset'),
            resetSideButton: document.getElementById('sidetimer-vabbi-6-reset'),
            timeLabel: document.getElementById('timer-vabbi-6'), 
            timeSideLabel: document.getElementById('sidetimer-vabbi-6'),
            textLabel: document.getElementById('timer-vabbi-6-text'),
            sidebox: document.getElementById('vabbi-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-6')
        },
        // Metas
        {   // [7] Forged with Fire
            name: document.getElementById('side-forged-name'),
            timeSideLabel: document.getElementById('sidetimer-vabbi-forged'),
            sidebox: document.getElementById('vabbi-forged-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-forged')
        },
        {   // [8] Serpents Ire
            name: document.getElementById('side-serpent-name'),
            timeSideLabel: document.getElementById('sidetimer-vabbi-serpent'),
            sidebox: document.getElementById('vabbi-serpent-sidebox'),
            num: document.getElementById('numerical-sidetimer-vabbi-serpent')
        },

        
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var vabbi; // Empty array for countdown
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
        if (timer == vabbi.events[timer_num].startButton.id || timer == vabbi.events[timer_num].startSideButton.id){
            if (vabbi.events[timer_num].status == 0){
                vabbi.events[timer_num].status = 1; 
                vabbi.events[timer_num].function(); 

                vabbi.events[timer_num].startButton.value = "Reset";
                vabbi.events[timer_num].startSideButton.value = "Reset";
            } else {
                vabbi.events[timer_num].status = 0;
                vabbi.events[timer_num].startButton.value = "Start";
                vabbi.events[timer_num].startSideButton.value = "Start";

                vabbi.events[timer_num].timeLabel.style.color = "black";
                vabbi.events[timer_num].timeSideLabel.style.color = 'black';
                vabbi.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                vabbi.events[timer_num].sidebox.style.background = 'transparent';
                vabbi.events[timer_num].function();
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
    // Remvabbi to change these reset times to the RESPAWN rate and not the INITIAL SPAWN rate

    switch (timer_num) {
        case timer_num:
        start_Event(timer_num);
        break;
    }

    function start_Event(timer_num){
        if (timer == vabbi.events[timer_num].resetButton.id || timer == vabbi.events[timer_num].resetSideButton.id){
            if (vabbi.events[timer_num].status == 1){
                vabbi.events[timer_num].status = 0;
                vabbi.events[timer_num].cooldown = vabbi.events[timer_num].cooldown;
                vabbi.events[timer_num].timeLabel.style.color = "black";

                vabbi.events[timer_num].timeSideLabel.innerHTML = vabbi.events[timer_num].timeLabel.innerHTML;
                vabbi.events[timer_num].timeSideLabel.style.color = vabbi.events[timer_num].timeLabel.style.color;

                vabbi.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                vabbi.events[timer_num].sidebox.style.background = "transparent";

                vabbi.events[timer_num].function(); 
                vabbi.events[timer_num].status = 1;
                vabbi.events[timer_num].function(); 
            }
        }
    }
}

function vabbi_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, vabbi.events[arrayNum].cooldown, vabbi.events[arrayNum].timeLabel, vabbi.events[arrayNum].timeSideLabel, vabbi.events[arrayNum].num);
        
        switch (arrayNum){
            case 3: // Branded Assults
                if (countdown.time <= 0){
                    show_multiple_elements(3,10,'vabbi-img-','opacity');
                } else {
                    hide_multiple_elements(3,10,'vabbi-img-','opacity');
                }
            break;
        }

        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(vabbi.events[arrayNum].timeLabel, vabbi.events[arrayNum].sidebox, vabbi.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(vabbi.events[arrayNum].timeLabel, vabbi.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (vabbi.events[arrayNum].status == 1){
        vabbi[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(vabbi[arrayNum]);   
    } 
}

// Domain of Vabbi Global Timer
var current_progress = document.getElementById('vabbi-current-status'),
    forged_progress = "",
    serpent_progress = "",
    forged_progress_bar = document.getElementById('forged-progress-bar'),
    serpent_progress_bar = document.getElementById('serpent-progress-bar'),
    forged_progress_text = document.getElementById('forged-progress-text'),
    serpent_progress_text = document.getElementById('serpent-progress-text'),
    serpent_progress_box = document.getElementById('serpent-progress-box'),
    forged_width = 0,
    new_forged_time = 0,
    new_serpent_time = 0,
    max_forged_time = 0,
    max_serpent_time = 0,
    forgedArrow = document.getElementById('vabbi-arrow-1'),
    forgedInfo = document.getElementById('vabbi-meta-info-1'),
    forgedCircle = document.getElementById('vabbi-img-1'),
    forgedBoss = document.getElementById('vabbi-img-2'),
    serpentRect = document.getElementById('vabbi-shape-1');

    var vabbi_meta_timer = setInterval(function(){
    var d = new Date();
    var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        forged_result,
        serpent_result,
        hours,
        minutes,
        seconds;

    // Forged with Fire
    // Starts at the beginning of every hour xx:00

    // Serpents' Ire 
    // Starts every even UTC at xx:30
    function vabbi_timer(prev_hr, hr, next_hr){
        if (d.getUTCHours() == prev_hr || d.getUTCHours() == hr){

            // Defaults
            forged_progress_bar.style.background = progress_color;
            serpent_progress_bar.style.background = progress_color;

            current_progress.innerHTML = "Currently: Break. Awaiting next meta";
            forged_progress = "Forged with Fire";
            serpent_progress = "Serpents' Ire";

            forgedArrow.style.opacity = 0;
            forgedInfo.style.opacity = 0;
            forgedCircle.style.opacity = 0;
            forgedBoss.style.opacity = 0;
            vabbi.events[1].box.style.opacity = 1; // Forged Officer
            vabbi.events[5].box.style.opacity = 1; // Legendary Forged

            hide_multiple_elements(2,4,'vabbi-arrow-','opacity'); // Arrows
            hide_multiple_elements(2,2,'vabbi-meta-info-','opacity'); // Title
            serpentRect.style.opacity = 0;

            // Hour 0
            if (d.getUTCHours() == prev_hr){
                // time < 0:30
                if (d.getUTCMinutes() < 30){
                    current_progress.innerHTML = "Currently: Forged with Fire! Gather at the Foundry!";
                    forged_progress = "Break";

                    forgedArrow.style.opacity = 1;
                    forgedInfo.style.opacity = 1;
                    forgedCircle.style.opacity = 1;
                    forgedBoss.style.opacity = 1;
                    forged_progress_bar.style.background = meta_color;
                    vabbi.events[1].box.style.opacity = 0.2; // Forged Officer
                    vabbi.events[5].box.style.opacity = 0.2; // Legendary Forged

                    max_forged_time = ((prev_hr * 3600) + (30 * 60)) - ((prev_hr * 3600) + (0 * 60));
                    new_forged_time = time - ((prev_hr * 3600) + (0 * 60));
                    forged_result = ((prev_hr * 3600) + (30 * 60)) - time;

                    max_serpent_time = ((prev_hr * 3600) + (30 * 60)) - (((prev_hr - 1) * 3600) + (0 * 60));
                    new_serpent_time = time - (((prev_hr - 1) * 3600) + (0 * 60));
                    serpent_result = ((prev_hr * 3600) + (30 * 60)) - time;

                    // time < 0:30 and >= 25
                    if (d.getUTCMinutes() >= 25){
                        serpent_progress_bar.style.background = pre_meta_color;
                    }
                }
                // time > 0:30
                if (d.getUTCMinutes() >= 30){
                    current_progress.innerHTML = "Currently: Serpents' Ire! Spread at the Branded (east) side of the map!";
                    serpent_progress = "Break";

                    show_multiple_elements(2,4,'vabbi-arrow-','opacity'); // Arrows
                    show_multiple_elements(2,2,'vabbi-meta-info-','opacity'); // Title
                    serpentRect.style.opacity = 0.5;

                    serpent_progress_bar.style.background = meta_color;

                    max_forged_time = ((hr * 3600) + (0 * 60)) - ((prev_hr * 3600) + (30 * 60));
                    new_forged_time = time - ((prev_hr * 3600) + (30 * 60));
                    forged_result = ((hr * 3600) + (0 * 60)) - time;

                    max_serpent_time = ((hr * 3600) + (0 * 60)) - ((prev_hr * 3600) + (30 * 60));
                    new_serpent_time = time - ((prev_hr * 3600) + (30 * 60));
                    serpent_result = ((hr * 3600) + (0 * 60)) - time;

                    // time > 0:30 and > 0:55
                    if (d.getUTCMinutes() >= 55){
                        forged_progress_bar.style.background = pre_meta_color;
                    }
                }
            }
            // Hour 1
            if (d.getUTCHours() == hr){
                max_serpent_time = ((next_hr * 3600) + (30 * 60)) - ((hr * 3600) + (0 * 60));
                new_serpent_time = time - ((hr * 3600) + (0 * 60));
                serpent_result = ((next_hr * 3600) + (30 * 60)) - time;

                // time < 1:30
                if (d.getUTCMinutes() < 30){
                    current_progress.innerHTML = "Currently: Forged with Fire! Gather at the Foundry!";
                    forged_progress = "Break";

                    forgedArrow.style.opacity = 1;
                    forgedInfo.style.opacity = 1;
                    forgedCircle.style.opacity = 1;
                    forgedBoss.style.opacity = 1;
                    forged_progress_bar.style.background = meta_color;
                    vabbi.events[1].box.style.opacity = 0.2; // Forged Officer
                    vabbi.events[5].box.style.opacity = 0.2; // Legendary Forged
                    forged_progress_bar.style.background = meta_color;

                    max_forged_time = ((hr * 3600) + (30 * 60)) - ((hr * 3600) + (0 * 60));
                    new_forged_time = time - ((hr * 3600) + (0 * 60));
                    forged_result = ((hr * 3600) + (30 * 60)) - time;
                }
                // time > 1:30
                if (d.getUTCMinutes() >= 30){

                    max_forged_time = ((next_hr * 3600) + (0 * 60)) - ((hr * 3600) + (30 * 60));
                    new_forged_time = time - ((hr * 3600) + (30 * 60));
                    forged_result = ((next_hr * 3600) + (0 * 60)) - time;

                    if (d.getUTCMinutes() >= 55){
                        forged_progress_bar.style.background = pre_meta_color;
                    }
                }
            }

            forged_width = (new_forged_time/max_forged_time)*100;
            forged_progress_bar.style.width = forged_width + "%";
            forged_progress_text.innerHTML = getDisplayTime(forged_result) + " &#x27F6; " + forged_progress;

            boss_width = (new_serpent_time/max_serpent_time)*100;
            serpent_progress_bar.style.width = boss_width + "%";
            serpent_progress_text.innerHTML = getDisplayTime(serpent_result) + " &#x27F6; " + serpent_progress;

            vabbi.events[7].sidebox.style.background = forged_progress_bar.style.background; // Forged w/ Fire sidebox
            vabbi.events[7].name.innerHTML = forged_progress;
            vabbi.events[7].timeSideLabel.innerHTML = getDisplayTime(forged_result); 

            vabbi.events[8].sidebox.style.background = serpent_progress_bar.style.background; // Serpent Ire sidebox
            vabbi.events[8].name.innerHTML = serpent_progress;
            vabbi.events[8].timeSideLabel.innerHTML = getDisplayTime(serpent_result);

        }
    }
    
    console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());

    if (d.getUTCHours() == 0 || d.getUTCHours() == 1){
        vabbi_timer(0,1,2);
    }
    if (d.getUTCHours() == 2 || d.getUTCHours() == 3){
        vabbi_timer(2,3,4);
    }
    if (d.getUTCHours() == 4 || d.getUTCHours() == 5){
        vabbi_timer(4,5,6);
    }
    if (d.getUTCHours() == 6 || d.getUTCHours() == 7){
        vabbi_timer(6,7,8);
    }
    if (d.getUTCHours() == 8 || d.getUTCHours() == 9){
        vabbi_timer(8,9,10);
    }
    if (d.getUTCHours() == 10 || d.getUTCHours() == 11){
        vabbi_timer(10,11,12);
    }
    if (d.getUTCHours() == 12 || d.getUTCHours() == 13){
        vabbi_timer(12,13,14);
    }
    if (d.getUTCHours() == 14 || d.getUTCHours() == 15){
        vabbi_timer(14,15,16);
    }
    if (d.getUTCHours() == 16 || d.getUTCHours() == 17){
        vabbi_timer(16,17,18);
    }
    if (d.getUTCHours() == 18 || d.getUTCHours() == 19){
        vabbi_timer(18,19,20);
    }
    if (d.getUTCHours() == 20 || d.getUTCHours() == 21){
        vabbi_timer(20,21,22);
    }
    if (d.getUTCHours() == 22 || d.getUTCHours() == 23){
        vabbi_timer(22,23,24);
    }
    
    }, 1000);


