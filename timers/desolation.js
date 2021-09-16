// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var desolation = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [1] Caravan
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-desolation-1-start'),
            startSideButton: document.getElementById('sidetimer-desolation-1-start'),
            resetButton: document.getElementById('timer-desolation-1-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-1-reset'),
            timeLabel: document.getElementById('timer-desolation-1'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-1'),
            sidebox: document.getElementById('desolation-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        }, 

        {   // [2] Lost Mount
            status: 0,
            key: 0,
            cooldown: 60 * 11 + 15, 
            startButton: document.getElementById('timer-desolation-2-start'),
            startSideButton: document.getElementById('sidetimer-desolation-2-start'),
            resetButton: document.getElementById('timer-desolation-2-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-2-reset'),
            timeLabel: document.getElementById('timer-desolation-2'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-2'),
            sidebox: document.getElementById('desolation-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        }, 
        {   // [3] Redeemer Kossan
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-desolation-3-start'),
            startSideButton: document.getElementById('sidetimer-desolation-3-start'),
            resetButton: document.getElementById('timer-desolation-3-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-3-reset'),
            timeLabel: document.getElementById('timer-desolation-3'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-3'),
            sidebox: document.getElementById('desolation-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [4] Raiding Party W1
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-desolation-4-start'),
            startSideButton: document.getElementById('sidetimer-desolation-4-start'),
            resetButton: document.getElementById('timer-desolation-4-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-4-reset'),
            timeLabel: document.getElementById('timer-desolation-4'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-4'),
            sidebox: document.getElementById('desolation-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [5] Raiding Party W2
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-desolation-5-start'),
            startSideButton: document.getElementById('sidetimer-desolation-5-start'),
            resetButton: document.getElementById('timer-desolation-5-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-5-reset'),
            timeLabel: document.getElementById('timer-desolation-5'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-5'),
            sidebox: document.getElementById('desolation-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [6] Raiding Party W3
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-desolation-6-start'),
            startSideButton: document.getElementById('sidetimer-desolation-6-start'),
            resetButton: document.getElementById('timer-desolation-6-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-6-reset'),
            timeLabel: document.getElementById('timer-desolation-6'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-6'),
            sidebox: document.getElementById('desolation-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [7] Raiding Party W4
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-desolation-7-start'),
            startSideButton: document.getElementById('sidetimer-desolation-7-start'),
            resetButton: document.getElementById('timer-desolation-7-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-7-reset'),
            timeLabel: document.getElementById('timer-desolation-7'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-7'),
            sidebox: document.getElementById('desolation-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [8] Ghost Kids
            status: 0,
            key: 0,
            cooldown: 60 * 16, 
            startButton: document.getElementById('timer-desolation-8-start'),
            startSideButton: document.getElementById('sidetimer-desolation-8-start'),
            resetButton: document.getElementById('timer-desolation-8-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-8-reset'),
            timeLabel: document.getElementById('timer-desolation-8'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-8'),
            sidebox: document.getElementById('desolation-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [9] Champ Ooze
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-desolation-9-start'),
            startSideButton: document.getElementById('sidetimer-desolation-9-start'),
            resetButton: document.getElementById('timer-desolation-9-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-9-reset'),
            timeLabel: document.getElementById('timer-desolation-9'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-9'),
            sidebox: document.getElementById('desolation-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [10] Ghost Eaters
            status: 0,
            key: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-desolation-10-start'),
            startSideButton: document.getElementById('sidetimer-desolation-10-start'),
            resetButton: document.getElementById('timer-desolation-10-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-10-reset'),
            timeLabel: document.getElementById('timer-desolation-10'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-10'),
            sidebox: document.getElementById('desolation-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-10'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [11] Forged Officer
            status: 0,
            key: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-desolation-11-start'),
            startSideButton: document.getElementById('sidetimer-desolation-11-start'),
            resetButton: document.getElementById('timer-desolation-11-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-11-reset'),
            timeLabel: document.getElementById('timer-desolation-11'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-11'),
            sidebox: document.getElementById('desolation-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-11'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [12] Raiding Party W5
            status: 0,
            key: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-desolation-12-start'),
            startSideButton: document.getElementById('sidetimer-desolation-12-start'),
            resetButton: document.getElementById('timer-desolation-12-reset'),
            resetSideButton: document.getElementById('sidetimer-desolation-12-reset'),
            timeLabel: document.getElementById('timer-desolation-12'), 
            timeSideLabel: document.getElementById('sidetimer-desolation-12'),
            sidebox: document.getElementById('desolation-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-desolation-12'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(desolation.events); 

// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

// Initials
var current_progress = document.getElementById('current-status'),
    maw_next_progress = "",
    maw_progress_bar = document.getElementById('maw-progress-bar'),
    maw_progress_text = document.getElementById('maw-progress-text'),
    maw_meta_width = 0,
    maw_new_meta_time = 0,
    maw_max_meta_time = 0,
    jun_next_progress = "",
    jun_progress_bar = document.getElementById('jun-progress-bar'),
    jun_progress_text = document.getElementById('jun-progress-text'),
    jun_meta_width = 0,
    jun_new_meta_time = 0,
    jun_max_meta_time = 0;

var maw_w_circle = document.getElementById('desolation-img-13'),
    maw_n_circle = document.getElementById('desolation-img-14'),
    maw_s_circle = document.getElementById('desolation-img-15');

    var timer = setInterval(function(){
    var d = new Date();
    var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        maw_result,
        jun_result,
        hours,
        minutes,
        seconds;
        
        // Maw beings every odd UTC hour :00
        // 1st Maw event from :00-:08
        // 2nd Maw event from :08-:16 (8 minute escort?)
        // Whole maw event from :00-:20
        // Junundu begins every hour at :30
        // 1st Jun event from :30-:40 
        // 2nd Jun event from :40-50
        // Whole Jun event from :30-:50
        function desolation_timers(start_hour, btw_hour, end_hour){
            if (d.getUTCHours() == start_hour || d.getUTCHours() == btw_hour){
                // Set time to 24*3600 when UTC hour is 0
                if (d.getUTCHours() == 0){
                    time = 24 * 3600 + d.getUTCMinutes() * 60 + d.getUTCSeconds();
                    start_hour = 24;
                    btw_hour = 25;
                    end_hour = 26;
                }
                maw_next_progress = "Maw of Torment"
                jun_next_progress = "Junundu Rising";

                // Defaults
                hide_multiple_elements(1,33,'desolation-img-','opacity'); // All event icons
                hide_multiple_elements(1,3,'desolation-arrow-','opacity'); // All arrows
                hide_multiple_elements(1,12,'desolation-img-','display'); // All animation w/ animation
                maw_w_circle.style.top = '54%';
                maw_w_circle.style.left = '9%';
                maw_n_circle.style.top = '54%';
                maw_n_circle.style.left = '16%';
                maw_s_circle.style.top = '65%';
                maw_s_circle.style.left = '25%';

                maw_max_meta_time = ((end_hour * 3600) + (0 * 60)) - ((start_hour * 3600) + (0 * 60));
                maw_new_meta_time = time - ((start_hour * 3600) + (0 * 60));
                maw_result = ((end_hour * 3600) + (0 * 60)) - time;

                jun_max_meta_time = ((start_hour * 3600) + (30 * 60)) - ((start_hour * 3600) + (0 * 60));
                jun_new_meta_time = time - ((start_hour * 3600) + (0 * 60));
                jun_result = ((start_hour * 3600) + (30 * 60)) - time;

                // Maw 
                if (d.getUTCHours() == start_hour && d.getUTCMinutes() < 20){
                    maw_progress_bar.style.background = meta_color; 

                    // 1st event 
                    if (d.getUTCMinutes() < 8){
                        current_progress.innerHTML = "Status: 1st Maw Event! Defeat Elite Forged Officers and Cannons";
                        maw_next_progress = "Maw Escorts";

                        // Events
                        show_multiple_elements(13,15,'desolation-img-','opacity'); // Maw event circles 
                        show_multiple_elements(19,21,'desolation-img-','opacity'); // Maw cross swords

                        maw_max_meta_time = ((start_hour * 3600) + (8 * 60)) - ((start_hour * 3600) + (0 * 60));
                        maw_new_meta_time = time - ((start_hour * 3600) + (0 * 60));
                        maw_result = ((start_hour * 3600) + (8 * 60)) - time;
                    }
                    // 2nd event - Escorts
                    if (d.getUTCMinutes() < 16 && d.getUTCMinutes() >= 8){
                        current_progress.innerHTML = "Status: 2nd Maw Event! Escort 3 NPCs to the Maw and defeat the Realm Portals";
                        maw_next_progress = "Legendary Forged Demolisher";

                        // Events 
                        hide_multiple_elements(19,21,'desolation-img-','opacity'); // Maw 1st event cross swords
                        show_multiple_elements(25,27,'desolation-img-','opacity'); // Maw shield
                        show_multiple_elements(1,3,'desolation-arrow-','opacity'); // Maw arrows
                        show_multiple_elements(13,15,'desolation-img-','opacity'); // Maw event circles 
                        maw_w_circle.style.top = '48%';
                        maw_w_circle.style.left = '9%';
                        maw_n_circle.style.top = '48%';
                        maw_n_circle.style.left = '17%';
                        maw_s_circle.style.top = '66%';
                        maw_s_circle.style.left = '15%';

                        maw_max_meta_time = ((start_hour * 3600) + (16 * 60)) - ((start_hour * 3600) + (8 * 60));
                        maw_new_meta_time = time - ((start_hour * 3600) + (8 * 60));
                        maw_result = ((start_hour * 3600) + (16 * 60)) - time;
                    }
                    // Boss
                    if (d.getUTCMinutes() < 20 && d.getUTCMinutes() >= 16){
                        current_progress.innerHTML = "Status: Legendary Forged Demolisher";
                        maw_next_progress = "Break";

                        //hide_multiple_elements(25,27,'desolation-img-','opacity'); // Maw shield
                        //hide_multiple_elements(1.3.'desolation-arrow-','opacity'); // Maw arrows
                        show_multiple_elements(28,29,'desolation-img-','opacity'); // Maw demolisher 

                        maw_max_meta_time = ((start_hour * 3600) + (20 * 60)) - ((start_hour * 3600) + (16 * 60));
                        maw_new_meta_time = time - ((start_hour * 3600) + (16 * 60));
                        maw_result = ((start_hour * 3600) + (20 * 60)) - time;
                    }
                }

                // Break between Maw and Junundu
                if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 30){
                    maw_progress_bar.style.background = progress_color; 
                    current_progress.innerHTML = "Status: Break"
                    maw_next_progress = "Maw of Torment";

                    // 5 Mins til Junundu
                    if (d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
                        jun_progress_bar.style.background = pre_meta_color; 

                        // Events
                        show_multiple_elements(4,6,'desolation-img-','display'); // Jun circle w/ animation
                        show_multiple_elements(10,12,'desolation-img-','display'); // Jun gather w/ animation
                    }
                }

                // Junundu 
                if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 50){
                    jun_progress_bar.style.background = meta_color;

                    // 1st event
                    if (d.getUTCMinutes() < 40){
                        current_progress.innerHTML = "Status: Gather sulfur crystals (3x)";
                        jun_next_progress = "Awakened & Forged forts";

                        // Events
                        show_multiple_elements(16,18,'desolation-img-','opacity'); // Jun circle 
                        show_multiple_elements(22,24,'desolation-img-','opacity'); // Jun gather

                        jun_max_meta_time = ((start_hour * 3600) + (40 * 60)) - ((start_hour * 3600) + (30 * 60));
                        jun_new_meta_time = time - ((start_hour * 3600) + (30 * 60));
                        jun_result = ((start_hour * 3600) + (40 * 60)) - time;
                    }
                    // 2nd event
                    if (d.getUTCMinutes() < 50 && d.getUTCMinutes() >= 40){
                        current_progress.innerHTML = "Status: Invade Awakened & Forged forts! Destroy the trebs";
                        jun_next_progress = "Break";

                        // Events
                        show_multiple_elements(30,33,'desolation-img-','opacity'); // Jun forts

                        jun_max_meta_time = ((start_hour * 3600) + (50 * 60)) - ((start_hour * 3600) + (40 * 60));
                        jun_new_meta_time = time - ((start_hour * 3600) + (40 * 60));
                        jun_result = ((start_hour * 3600) + (50 * 60)) - time;
                    }
                }

                // Break between Junundu and next Junundu
                if (d.getUTCHours() == start_hour && d.getUTCMinutes() >= 50 || d.getUTCHours() == btw_hour && d.getUTCMinutes() < 30){
                    jun_progress_bar.style.background = progress_color; 
                    current_progress.innerHTML = "Status: Break";
                    jun_next_progress = "Junundu Rising"; 

                    jun_max_meta_time = ((btw_hour * 3600) + (30 * 60)) - ((start_hour * 3600) + (50 * 60));
                    jun_new_meta_time = time - ((start_hour * 3600) + (50 * 60));
                    jun_result = ((btw_hour * 3600) + (30 * 60)) - time;

                    // 5 mins til Junundu
                    if (d.getUTCHours() == btw_hour && d.getUTCMinutes() < 30 && d.getUTCMinutes() >= 25){
                        jun_progress_bar.style.background = pre_meta_color;  

                        show_multiple_elements(4,6,'desolation-img-','display'); // Jun circle
                        show_multiple_elements(10,12,'desolation-img-','display'); // Jun gathering
                    }
                }

                // 2nd Junundu
                if (d.getUTCHours() == btw_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 50){
                    jun_progress_bar.style.background = meta_color;

                    // 1st event
                    if (d.getUTCMinutes() < 40){
                        current_progress.innerHTML = "Status: Gather sulfur crystals (3x)";
                        jun_next_progress = "Awakened & Forged forts";

                        // Events
                        show_multiple_elements(16,18,'desolation-img-','opacity'); // Jun circle 
                        show_multiple_elements(22,24,'desolation-img-','opacity'); // Jun gather

                        jun_max_meta_time = ((btw_hour * 3600) + (40 * 60)) - ((btw_hour * 3600) + (30 * 60));
                        jun_new_meta_time = time - ((btw_hour * 3600) + (30 * 60));
                        jun_result = ((btw_hour * 3600) + (40 * 60)) - time;
                    }
                    // 2nd event
                    if (d.getUTCMinutes() < 50 && d.getUTCMinutes() >= 40){
                        current_progress.innerHTML = "Status: Invade Awakened & Forged forts! Destroy the trebs";
                        jun_next_progress = "Break";

                        // Events
                        show_multiple_elements(30,33,'desolation-img-','opacity'); // Jun forts

                        jun_max_meta_time = ((btw_hour * 3600) + (50 * 60)) - ((btw_hour * 3600) + (40 * 60));
                        jun_new_meta_time = time - ((btw_hour * 3600) + (40 * 60));
                        jun_result = ((btw_hour * 3600) + (50 * 60)) - time;
                    }
                }

                // Break between 2nd Junundu and Maw 
                if (d.getUTCHours() == btw_hour && d.getUTCMinutes() >= 50){
                    jun_progress_bar.style.background = progress_color; 
                    current_progress.innerHTML = "Status: Break";
                    jun_next_progress = "Junundu Rising";

                    jun_max_meta_time = ((end_hour * 3600) + (30 * 60)) - ((btw_hour * 3600) + (50 * 60));
                    jun_new_meta_time = time - ((btw_hour * 3600) + (50 * 60));
                    jun_result = ((end_hour * 3600) + (30 * 60)) - time;

                    // 5 mins til Maw 
                    if (d.getUTCMinutes() >= 55){
                        maw_progress_bar.style.background = pre_meta_color;

                        // Events
                        show_multiple_elements(1,3,'desolation-img-','display'); // Maw circles w/ animation
                        show_multiple_elements(7,9,'desolation-img-','display'); // Maw cross sword w/ animation
                    }
                }

                maw_meta_width = (maw_new_meta_time/maw_max_meta_time)*100;
                maw_progress_bar.style.width = maw_meta_width + "%";
                maw_progress_text.innerHTML = getDisplayTime(maw_result) + " &#x27F6; " + maw_next_progress;

                jun_meta_width = (jun_new_meta_time/jun_max_meta_time)*100;
                jun_progress_bar.style.width = jun_meta_width + "%";
                jun_progress_text.innerHTML = getDisplayTime(jun_result) + " &#x27F6; " + jun_next_progress;

            } // End of whole if statement
        } // End of function

        if (d.getUTCHours() == 23 || d.getUTCHours() == 0){
            maw_next_progress = "Maw of Torment"
            jun_next_progress = "Junundu Rising";

            // Defaults
            hide_multiple_elements(1,33,'desolation-img-','opacity'); // All event icons
            hide_multiple_elements(1,3,'desolation-arrow-','opacity'); // All arrows
            hide_multiple_elements(4,6,'desolation-img-','display'); // Jun circle w/ animation
            hide_multiple_elements(10,12,'desolation-img-','display'); // Jun gather w/ animation
            hide_multiple_elements(1,3,'desolation-img-','display'); // Maw circles w/ animation
            maw_w_circle.style.top = '54%';
            maw_w_circle.style.left = '9%';
            maw_n_circle.style.top = '54%';
            maw_n_circle.style.left = '16%';
            maw_s_circle.style.top = '65%';
            maw_s_circle.style.left = '25%';

            maw_max_meta_time = ((24 * 3600) + (0 * 60)) - ((23 * 3600) + (0 * 60));
            maw_new_meta_time = time - ((23 * 3600) + (0 * 60));
            maw_result = ((24 * 3600) + (0 * 60)) - time;

            jun_max_meta_time = ((23 * 3600) + (30 * 60)) - ((23 * 3600) + (0 * 60));
            jun_new_meta_time = time - ((23 * 3600) + (0 * 60));
            jun_result = ((23 * 3600) + (30 * 60)) - time;

            // Maw 
            if (d.getUTCHours() == 23 && d.getUTCMinutes() < 20){
                maw_progress_bar.style.background = meta_color; 

                // 1st event 
                if (d.getUTCMinutes() < 8){
                    current_progress.innerHTML = "Status: 1st Maw Event! Defeat Elite Forged Officers and Cannons";
                    maw_next_progress = "Maw Escorts";

                    // Events
                    show_multiple_elements(13,15,'desolation-img-','opacity'); // Maw event circles 
                    show_multiple_elements(1,21,'desolation-img-','opacity'); // Maw cross swords

                    maw_max_meta_time = ((23 * 3600) + (8 * 60)) - ((23 * 3600) + (0 * 60));
                    maw_new_meta_time = time - ((23 * 3600) + (0 * 60));
                    maw_result = ((23 * 3600) + (8 * 60)) - time;
                }
                // Escorts
                if (d.getUTCMinutes() < 16 && d.getUTCMinutes() >= 8){
                    current_progress.innerHTML = "Status: 2nd Maw Event! Escort 3 NPCs to the Maw and defeat the Realm Portals";
                    maw_next_progress = "Legendary Forged Demolisher";

                    // Events 
                    hide_multiple_elements(1,21,'desolation-img-','opacity'); // Maw 1st event cross swords
                    show_multiple_elements(25,27,'desolation-img-','opacity'); // Maw shield
                    show_multiple_elements(1,3,'desolation-arrow-','opacity'); // Maw arrows
                    maw_w_circle.style.top = '48%';
                    maw_w_circle.style.left = '9%';
                    maw_n_circle.style.top = '48%';
                    maw_n_circle.style.left = '23%';
                    maw_s_circle.style.top = '66%';
                    maw_s_circle.style.left = '15%';

                    maw_max_meta_time = ((23 * 3600) + (16 * 60)) - ((23 * 3600) + (8 * 60));
                    maw_new_meta_time = time - ((23 * 3600) + (8 * 60));
                    maw_result = ((23 * 3600) + (16 * 60)) - time;
                }
                // Boss
                if (d.getUTCMinutes() < 20 && d.getUTCMinutes() >= 16){
                    current_progress.innerHTML = "Status: Legendary Forged Demolisher";
                    maw_next_progress = "Break";

                    //hide_multiple_elements(25,27,'desolation-img-','opacity'); // Maw shield
                    //hide_multiple_elements(1.3.'desolation-arrow-','opacity'); // Maw arrows
                    show_multiple_elements(28,29,'desolation-img-','opacity'); // Maw demolisher 

                    maw_max_meta_time = ((23 * 3600) + (20 * 60)) - ((23 * 3600) + (16 * 60));
                    maw_new_meta_time = time - ((23 * 3600) + (16 * 60));
                    maw_result = ((23 * 3600) + (20 * 60)) - time;
                }
            }

            // Break between Maw and Junundu
            if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 30){
                maw_progress_bar.style.background = progress_color; 
                current_progress.innerHTML = "Status: Break"
                maw_next_progress = "Maw of Torment";

                // 5 Mins til Junundu
                if (d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
                    jun_progress_bar.style.background = pre_meta_color; 

                    // Events
                    show_multiple_elements(4,6,'desolation-img-','display'); // Jun circle w/ animation
                    show_multiple_elements(10,12,'desolation-img-','display'); // Jun gather w/ animation
                }
            }

            // Junundu 
            if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 50){
                jun_progress_bar.style.background = meta_color;

                // 1st event
                if (d.getUTCMinutes() < 40){
                    current_progress.innerHTML = "Status: Gather sulfur crystals (3x)";
                    jun_next_progress = "Awakened & Forged forts";

                    // Events
                    show_multiple_elements(16,18,'desolation-img-','opacity'); // Jun circle 
                    show_multiple_elements(22,24,'desolation-img-','opacity'); // Jun gather

                    jun_max_meta_time = ((23 * 3600) + (40 * 60)) - ((23 * 3600) + (30 * 60));
                    jun_new_meta_time = time - ((23 * 3600) + (30 * 60));
                    jun_result = ((23 * 3600) + (40 * 60)) - time;
                }
                // 2nd event
                if (d.getUTCMinutes() < 50 && d.getUTCMinutes() >= 40){
                    current_progress.innerHTML = "Status: Invade Awakened & Forged forts! Destroy the trebs";
                    jun_next_progress = "Break";

                    // Events
                    show_multiple_elements(30,33,'desolation-img-','opacity'); // Jun forts

                    jun_max_meta_time = ((23 * 3600) + (50 * 60)) - ((23 * 3600) + (40 * 60));
                    jun_new_meta_time = time - ((23 * 3600) + (40 * 60));
                    jun_result = ((23 * 3600) + (50 * 60)) - time;
                }
            }

            // Break between Junundu and next Junundu
            if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 50 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
                jun_progress_bar.style.background = progress_color; 
                current_progress.innerHTML = "Status: Break";
                jun_next_progress = "Junundu Rising"; 

                jun_max_meta_time = ((24 * 3600) + (30 * 60)) - ((23 * 3600) + (50 * 60));
                jun_new_meta_time = time - ((23 * 3600) + (50 * 60));
                jun_result = ((24 * 3600) + (30 * 60)) - time;

                // 5 mins til Junundu
                if (d.getUTCHours() == 0 && d.getUTCMinutes() < 30 && d.getUTCMinutes() >= 25){
                    jun_progress_bar.style.background = pre_meta_color;  
                }
            }

            // 2nd Junundu
            if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 50){
                jun_progress_bar.style.background = meta_color;

                // 1st event
                if (d.getUTCMinutes() < 40){
                    current_progress.innerHTML = "Status: Gather sulfur crystals (3x)";
                    jun_next_progress = "Awakened & Forged forts";

                    // Events
                    show_multiple_elements(16,0,'desolation-img-','opacity'); // Jun circle 
                    show_multiple_elements(22,24,'desolation-img-','opacity'); // Jun gather

                    jun_max_meta_time = ((24 * 3600) + (40 * 60)) - ((24 * 3600) + (30 * 60));
                    jun_new_meta_time = time - ((24 * 3600) + (30 * 60));
                    jun_result = ((24 * 3600) + (40 * 60)) - time;
                }
                // 2nd event
                if (d.getUTCMinutes() < 50 && d.getUTCMinutes() >= 40){
                    current_progress.innerHTML = "Status: Invade Awakened & Forged forts! Destroy the trebs";
                    jun_next_progress = "Break";

                    // Events
                    show_multiple_elements(30,33,'desolation-img-','opacity'); // Jun forts

                    jun_max_meta_time = ((24 * 3600) + (50 * 60)) - ((24 * 3600) + (40 * 60));
                    jun_new_meta_time = time - ((24 * 3600) + (40 * 60));
                    jun_result = ((24 * 3600) + (50 * 60)) - time;
                }
            }

            // Break between 2nd Junundu and Maw 
            if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 50){
                jun_progress_bar.style.background = progress_color; 
                current_progress.innerHTML = "Status: Break";
                jun_next_progress = "Junundu Rising";

                jun_max_meta_time = ((25 * 3600) + (30 * 60)) - ((1 * 3600) + (50 * 60));
                jun_new_meta_time = time - ((1 * 3600) + (50 * 60));
                jun_result = ((25 * 3600) + (30 * 60)) - time;

                // 5 mins til Maw 
                if (d.getUTCMinutes() >= 55){
                    maw_progress_bar.style.background = pre_meta_color;

                    // Events
                    show_multiple_elements(1,3,'desolation-img-','display'); // Maw circles w/ animation
                    show_multiple_elements(7,9,'desolation-img-','display'); // Maw cross sword w/ animation
                }
            }

            maw_meta_width = (maw_new_meta_time/maw_max_meta_time)*100;
            maw_progress_bar.style.width = maw_meta_width + "%";
            maw_progress_text.innerHTML = getDisplayTime(maw_result) + " &#x27F6; " + maw_next_progress;

            jun_meta_width = (jun_new_meta_time/jun_max_meta_time)*100;
            jun_progress_bar.style.width = jun_meta_width + "%";
            jun_progress_text.innerHTML = getDisplayTime(jun_result) + " &#x27F6; " + jun_next_progress;

        }

        if (d.getUTCHours() == 1 || d.getUTCHours() == 2){
            desolation_timers(1,2,3);
        }
        if (d.getUTCHours() == 3 || d.getUTCHours() == 4){
            desolation_timers(3,4,5);
        }
        if (d.getUTCHours() == 5 || d.getUTCHours() == 6){
            desolation_timers(5,6,7);
        }
        if (d.getUTCHours() == 7 || d.getUTCHours() == 8){
            desolation_timers(7,8,9);
        }
        if (d.getUTCHours() == 9 || d.getUTCHours() == 10){
            desolation_timers(9,10,11);
        }
        if (d.getUTCHours() == 11 || d.getUTCHours() == 12){
            desolation_timers(11,12,13);
        }
        if (d.getUTCHours() == 13 || d.getUTCHours() == 14){
            desolation_timers(13,14,15);
        }
        if (d.getUTCHours() == 15 || d.getUTCHours() == 16){
            desolation_timers(15,16,17);
        }
        if (d.getUTCHours() == 17 || d.getUTCHours() == 18){
            desolation_timers(17,18,19);
        }
        if (d.getUTCHours() == 19 || d.getUTCHours() == 20){
            desolation_timers(19,20,21);
        }
        if (d.getUTCHours() == 21 || d.getUTCHours() == 22){
            desolation_timers(21,22,23);
        }
        if (d.getUTCHours() == 23 || d.getUTCHours() == 0){
            desolation_timers(23,0,1);
        }
    },1000); 

