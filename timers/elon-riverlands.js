// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var elon = {
    events: [
        {   // [0] Path of Ascnesion 
            timeSideLabel: document.getElementById('sidetimer-elon-meta'),
            sidebox: document.getElementById('elon-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-meta'),
            area: document.getElementById('elon-shape-2'), // Event area
            info: document.getElementById('elon-meta-info-2'),
        },
        {   // [1] Choya
            status: 0,
            key: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-elon-1-start'),
            startSideButton: document.getElementById('sidetimer-elon-1-start'),
            resetButton: document.getElementById('timer-elon-1-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-1-reset'),
            timeLabel: document.getElementById('timer-elon-1'), 
            timeSideLabel: document.getElementById('sidetimer-elon-1'),
            textLabel: document.getElementById('timer-elon-1-text'),
            sidebox: document.getElementById('elon-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-1'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [2] Branded Waves
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 15, 
            startButton: document.getElementById('timer-elon-2-start'),
            startSideButton: document.getElementById('sidetimer-elon-2-start'),
            resetButton: document.getElementById('timer-elon-2-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-2-reset'),
            timeLabel: document.getElementById('timer-elon-2'), 
            timeSideLabel: document.getElementById('sidetimer-elon-2'),
            textLabel: document.getElementById('timer-elon-2-text'),
            sidebox: document.getElementById('elon-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-2'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [3] Flint
            status: 0,
            key: 0,
            cooldown: 60 * 11, 
            startButton: document.getElementById('timer-elon-3-start'),
            startSideButton: document.getElementById('sidetimer-elon-3-start'),
            resetButton: document.getElementById('timer-elon-3-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-3-reset'),
            timeLabel: document.getElementById('timer-elon-3'), 
            timeSideLabel: document.getElementById('sidetimer-elon-3'),
            textLabel: document.getElementById('timer-elon-3-text'),
            sidebox: document.getElementById('elon-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-3'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [4] Raiding Party N
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-elon-4-start'),
            startSideButton: document.getElementById('sidetimer-elon-4-start'),
            resetButton: document.getElementById('timer-elon-4-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-4-reset'),
            timeLabel: document.getElementById('timer-elon-4'), 
            timeSideLabel: document.getElementById('sidetimer-elon-4'),
            textLabel: document.getElementById('timer-elon-4-text'),
            sidebox: document.getElementById('elon-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-4'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [5] Rading Party Mid
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-elon-5-start'),
            startSideButton: document.getElementById('sidetimer-elon-5-start'),
            resetButton: document.getElementById('timer-elon-5-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-5-reset'),
            timeLabel: document.getElementById('timer-elon-5'), 
            timeSideLabel: document.getElementById('sidetimer-elon-5'),
            textLabel: document.getElementById('timer-elon-5-text'),
            sidebox: document.getElementById('elon-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-5'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [6] Raiding Party S
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-elon-6-start'),
            startSideButton: document.getElementById('sidetimer-elon-6-start'),
            resetButton: document.getElementById('timer-elon-6-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-6-reset'),
            timeLabel: document.getElementById('timer-elon-6'), 
            timeSideLabel: document.getElementById('sidetimer-elon-6'),
            textLabel: document.getElementById('timer-elon-6-text'),
            sidebox: document.getElementById('elon-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-6'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [7] Lost Mount
            status: 0,
            key: 0,
            cooldown: 60 * 11 + 15, 
            startButton: document.getElementById('timer-elon-7-start'),
            startSideButton: document.getElementById('sidetimer-elon-7-start'),
            resetButton: document.getElementById('timer-elon-7-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-7-reset'),
            timeLabel: document.getElementById('timer-elon-7'), 
            timeSideLabel: document.getElementById('sidetimer-elon-7'),
            textLabel: document.getElementById('timer-elon-7-text'),
            sidebox: document.getElementById('elon-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-7'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [8] Sand Lion
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-elon-8-start'),
            startSideButton: document.getElementById('sidetimer-elon-8-start'),
            resetButton: document.getElementById('timer-elon-8-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-8-reset'),
            timeLabel: document.getElementById('timer-elon-8'), 
            timeSideLabel: document.getElementById('sidetimer-elon-8'),
            textLabel: document.getElementById('timer-elon-8-text'),
            sidebox: document.getElementById('elon-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-8'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [9] Deadhouse
            status: 0,
            key: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-elon-9-start'),
            startSideButton: document.getElementById('sidetimer-elon-9-start'),
            resetButton: document.getElementById('timer-elon-9-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-9-reset'),
            timeLabel: document.getElementById('timer-elon-9'), 
            timeSideLabel: document.getElementById('sidetimer-elon-9'),
            textLabel: document.getElementById('timer-elon-9-text'),
            sidebox: document.getElementById('elon-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-9'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [10] Jimoh
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-elon-10-start'),
            startSideButton: document.getElementById('sidetimer-elon-10-start'),
            resetButton: document.getElementById('timer-elon-10-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-10-reset'),
            timeLabel: document.getElementById('timer-elon-10'), 
            timeSideLabel: document.getElementById('sidetimer-elon-10'),
            textLabel: document.getElementById('timer-elon-10-text'),
            sidebox: document.getElementById('elon-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-10'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [11] Branded Storm N
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 45, 
            startButton: document.getElementById('timer-elon-11-start'),
            startSideButton: document.getElementById('sidetimer-elon-11-start'),
            resetButton: document.getElementById('timer-elon-11-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-11-reset'),
            timeLabel: document.getElementById('timer-elon-11'), 
            timeSideLabel: document.getElementById('sidetimer-elon-11'),
            textLabel: document.getElementById('timer-elon-11-text'),
            sidebox: document.getElementById('elon-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-11'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [12] Branded Storm S
            status: 0,
            key: 0,
            cooldown: 60 * 6 + 45, 
            startButton: document.getElementById('timer-elon-12-start'),
            startSideButton: document.getElementById('sidetimer-elon-12-start'),
            resetButton: document.getElementById('timer-elon-12-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-12-reset'),
            timeLabel: document.getElementById('timer-elon-12'), 
            timeSideLabel: document.getElementById('sidetimer-elon-12'),
            textLabel: document.getElementById('timer-elon-12-text'),
            sidebox: document.getElementById('elon-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-12'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [13] Doppleganger
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-elon-13-start'),
            startSideButton: document.getElementById('sidetimer-elon-13-start'),
            resetButton: document.getElementById('timer-elon-13-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-13-reset'),
            timeLabel: document.getElementById('timer-elon-13'), 
            timeSideLabel: document.getElementById('sidetimer-elon-13'),
            textLabel: document.getElementById('timer-elon-13-text'),
            sidebox: document.getElementById('elon-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-13'),
            area: document.getElementById('elon-shape-1'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [14] Champ Djinn
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 15, 
            startButton: document.getElementById('timer-elon-14-start'),
            startSideButton: document.getElementById('sidetimer-elon-14-start'),
            resetButton: document.getElementById('timer-elon-14-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-14-reset'),
            timeLabel: document.getElementById('timer-elon-14'), 
            timeSideLabel: document.getElementById('sidetimer-elon-14'),
            textLabel: document.getElementById('timer-elon-14-text'),
            sidebox: document.getElementById('elon-14-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-14'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [15] Graveyard
            status: 0,
            key: 0,
            cooldown: 60 * 4 + 30, 
            startButton: document.getElementById('timer-elon-15-start'),
            startSideButton: document.getElementById('sidetimer-elon-15-start'),
            resetButton: document.getElementById('timer-elon-15-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-15-reset'),
            timeLabel: document.getElementById('timer-elon-15'), 
            timeSideLabel: document.getElementById('sidetimer-elon-15'),
            textLabel: document.getElementById('timer-elon-15-text'),
            sidebox: document.getElementById('elon-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-15'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [16] Awakened Caravan
            status: 0,
            key: 0,
            cooldown: 60 * 4 + 30, 
            startButton: document.getElementById('timer-elon-16-start'),
            startSideButton: document.getElementById('sidetimer-elon-16-start'),
            resetButton: document.getElementById('timer-elon-16-reset'),
            resetSideButton: document.getElementById('sidetimer-elon-16-reset'),
            timeLabel: document.getElementById('timer-elon-16'), 
            timeSideLabel: document.getElementById('sidetimer-elon-16'),
            textLabel: document.getElementById('timer-elon-16-text'),
            sidebox: document.getElementById('elon-16-sidebox'),
            num: document.getElementById('numerical-sidetimer-elon-16'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
       
    ]
};
// Dynamically creates unique keys
add_event_keys(elon.events); 

// Initials
let current_progress = document.getElementById('current-status'),
    next_progress = "",
    progress_bar = document.getElementById('progress-bar'),
    progress_text = document.getElementById('progress-text'),
    meta_width = 0,
    new_meta_time = 0,
    max_meta_time = 0,
    meta_name = document.getElementById('meta-name');

    let timer = setInterval(function(){
    let d = new Date();
    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        result,
        hours,
        minutes,
        seconds;

        function elon_meta(start_hour, btw_hour, end_hour){
            // Meta begins every UTC odd hour at :30 
            // Map reset begins every even UTC hour at :00 
            if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 30 || d.getUTCHours() == btw_hour || d.getUTCHours() == end_hour && d.getUTCMinutes() < 30){
                // Defaults
                // Set time to 24*3600 when UTC hour is 0
                
                progress_bar.style.background = progress_color;
                current_progress.innerHTML = "Status: Break";
                next_progress = "Path of Ascension";
                meta_name.innerHTML = "Path of Ascension";

                elon.events[0].area.style.opacity = 0;
                elon.events[0].info.style.opacity = 0;

                max_meta_time = ((end_hour * 3600) + (30 * 60)) - ((btw_hour * 3600) + (0 * 60));
                new_meta_time = time - ((btw_hour * 3600) + (0 * 60));
                result = ((end_hour * 3600) + (30 * 60)) - time;

                // 5 mins til meta
                if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
                    progress_bar.style.background = pre_meta_color;
                }

                // Meta
                if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 30){

                    // If Doppleganger timer reaches 0, remove effects from Ascension meta
                    if (elon.events[13].area.style.opacity == 0){
                        elon.events[0].area.style.opacity = 0.5;
                        elon.events[0].info.style.opacity = 1;
                    } else {
                        elon.events[0].area.style.opacity = 0;
                        elon.events[0].info.style.opacity = 0;
                    }

                    progress_bar.style.background = meta_color;
                    current_progress.innerHTML = "Status: Path of Ascension/Doppleganger!";
                    next_progress = "Break";
                    meta_name.innerHTML = "Break";

                    max_meta_time = ((btw_hour * 3600) + (0 * 60)) - ((start_hour * 3600) + (30 * 60));
                    new_meta_time = time - ((start_hour * 3600) + (30 * 60));
                    result = ((btw_hour * 3600) + (0 * 60)) - time;
                }

                meta_width = (new_meta_time/max_meta_time)*100;
                progress_bar.style.width = meta_width + "%";
                progress_text.innerHTML = getDisplayTime(result) + " &#x27F6; " + next_progress;

                elon.events[0].sidebox.style.background = progress_bar.style.background;
                elon.events[0].timeSideLabel.innerHTML = getDisplayTime(result);
            }
        } // End of function

        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 2 || d.getUTCHours() == 3 && d.getUTCMinutes() < 30){
            elon_meta(1,2,3);
        }
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 4 || d.getUTCHours() == 5 && d.getUTCMinutes() < 30){
            elon_meta(3,4,5);
        }
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 6 || d.getUTCHours() == 7 && d.getUTCMinutes() < 30){
            elon_meta(5,6,7);
        }
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 8 || d.getUTCHours() == 9 && d.getUTCMinutes() < 30){
            elon_meta(7,8,9);
        }
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 10 || d.getUTCHours() == 11 && d.getUTCMinutes() < 30){
            elon_meta(9,10,11);
        }
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 12 || d.getUTCHours() == 13 && d.getUTCMinutes() < 30){
            elon_meta(11,12,13);
        }
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 14 || d.getUTCHours() == 15 && d.getUTCMinutes() < 30){
            elon_meta(13,14,15);
        }
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 16 || d.getUTCHours() == 17 && d.getUTCMinutes() < 30){
            elon_meta(15,16,17);
        }
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 18 || d.getUTCHours() == 19 && d.getUTCMinutes() < 30){
            elon_meta(17,18,19);
        }
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 20 || d.getUTCHours() == 21 && d.getUTCMinutes() < 30){
            elon_meta(19,20,21);
        }
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 22 || d.getUTCHours() == 23 && d.getUTCMinutes() < 30){
            elon_meta(21,22,23);
        }
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 0 || d.getUTCHours() == 1 && d.getUTCMinutes() < 30){
            elon_meta(23,0,1);
        }

        console.log(d.getUTCHours(), d.getUTCMinutes());


    },1000); 

