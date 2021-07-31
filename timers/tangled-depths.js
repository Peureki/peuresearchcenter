// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

function revert_tangled_depths(){
    revert = 1;
}

function refresh(){
	window.location.reload();
}

var tangled = {
    events: [
        // Meta 
        {   // [0] Chak Gerent
            timeSideLabel: document.getElementById('sidetimer-tangled-meta'),
            sidebox: document.getElementById('tangled-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-meta')
        },
        // These are INITIAL timers for when Outpost Events are completed
        // For RESPAWN timers
        // Nuhoch events
        {   // [1] Chak Lobber
            function: function() { tangled_Countdown(1); },
            status: 0,
            cooldown: 60 * 7 + 45, 
            startButton: document.getElementById('timer-tangled-1-start'),
            startSideButton: document.getElementById('sidetimer-tangled-1-start'),
            resetButton: document.getElementById('timer-tangled-1-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-1-reset'),
            timeLabel: document.getElementById('timer-tangled-1'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-1'),
            sidebox: document.getElementById('tangled-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-1')
        }, 
        {   // [2] Elementals
            function: function() { tangled_Countdown(2); },
            status: 0,
            cooldown: 60 * 2, 
            startButton: document.getElementById('timer-tangled-2-start'),
            startSideButton: document.getElementById('sidetimer-tangled-2-start'),
            resetButton: document.getElementById('timer-tangled-2-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-2-reset'),
            timeLabel: document.getElementById('timer-tangled-2'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-2'),
            sidebox: document.getElementById('tangled-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-2')
        },
        {   // [3] Sporlings
            function: function() { tangled_Countdown(3); },
            status: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-tangled-3-start'),
            startSideButton: document.getElementById('sidetimer-tangled-3-start'),
            resetButton: document.getElementById('timer-tangled-3-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-3-reset'),
            timeLabel: document.getElementById('timer-tangled-3'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-3'),
            sidebox: document.getElementById('tangled-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-3')
        },
        {   // [4] Grub Pit
            function: function() { tangled_Countdown(4); },
            status: 0,
            cooldown: 60 * 0, 
            startButton: document.getElementById('timer-tangled-4-start'),
            startSideButton: document.getElementById('sidetimer-tangled-4-start'),
            resetButton: document.getElementById('timer-tangled-4-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-4-reset'),
            timeLabel: document.getElementById('timer-tangled-4'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-4'),
            sidebox: document.getElementById('tangled-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-4')
        },
        {   // [5] Beetle
            function: function() { tangled_Countdown(5); },
            status: 0,
            cooldown: 60 * 10 + 30, 
            startButton: document.getElementById('timer-tangled-5-start'),
            startSideButton: document.getElementById('sidetimer-tangled-5-start'),
            resetButton: document.getElementById('timer-tangled-5-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-5-reset'),
            timeLabel: document.getElementById('timer-tangled-5'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-5'),
            sidebox: document.getElementById('tangled-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-5')
        },
        {   // [6] Alchemist Patli
            function: function() { tangled_Countdown(6); },
            status: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-tangled-6-start'),
            startSideButton: document.getElementById('sidetimer-tangled-6-start'),
            resetButton: document.getElementById('timer-tangled-6-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-6-reset'),
            timeLabel: document.getElementById('timer-tangled-6'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-6'),
            sidebox: document.getElementById('tangled-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-6')
        },
        {   // [7] Zintl
            function: function() { tangled_Countdown(7); },
            status: 0,
            cooldown: 60 * 23, 
            startButton: document.getElementById('timer-tangled-7-start'),
            startSideButton: document.getElementById('sidetimer-tangled-7-start'),
            resetButton: document.getElementById('timer-tangled-7-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-7-reset'),
            timeLabel: document.getElementById('timer-tangled-7'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-7'),
            sidebox: document.getElementById('tangled-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-7')
        },
        {   // [8] Skelk
            function: function() { tangled_Countdown(8); },
            status: 0,
            cooldown: 60 * 24, 
            startButton: document.getElementById('timer-tangled-8-start'),
            startSideButton: document.getElementById('sidetimer-tangled-8-start'),
            resetButton: document.getElementById('timer-tangled-8-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-8-reset'),
            timeLabel: document.getElementById('timer-tangled-8'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-8'),
            sidebox: document.getElementById('tangled-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-8')
        },

        // Ogre Outpost
        {   // [9] Wyvern Nest
            function: function() { tangled_Countdown(9); },
            status: 0,
            cooldown: 60 * 3, 
            startButton: document.getElementById('timer-tangled-9-start'),
            startSideButton: document.getElementById('sidetimer-tangled-9-start'),
            resetButton: document.getElementById('timer-tangled-9-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-9-reset'),
            timeLabel: document.getElementById('timer-tangled-9'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-9'),
            sidebox: document.getElementById('tangled-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-9')
        },
        {   // [10] Matriarch Bat
            function: function() { tangled_Countdown(10); },
            status: 0,
            cooldown: 60 * 7 + 45, 
            startButton: document.getElementById('timer-tangled-10-start'),
            startSideButton: document.getElementById('sidetimer-tangled-10-start'),
            resetButton: document.getElementById('timer-tangled-10-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-10-reset'),
            timeLabel: document.getElementById('timer-tangled-10'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-10'),
            sidebox: document.getElementById('tangled-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-10')
        },
        {   // [11] Chak Morale
            function: function() { tangled_Countdown(11); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-tangled-11-start'),
            startSideButton: document.getElementById('sidetimer-tangled-11-start'),
            resetButton: document.getElementById('timer-tangled-11-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-11-reset'),
            timeLabel: document.getElementById('timer-tangled-11'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-11'),
            sidebox: document.getElementById('tangled-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-11')
        },
        {   // [12] Grub
            function: function() { tangled_Countdown(12); },
            status: 0,
            cooldown: 60 * 17, 
            startButton: document.getElementById('timer-tangled-12-start'),
            startSideButton: document.getElementById('sidetimer-tangled-12-start'),
            resetButton: document.getElementById('timer-tangled-12-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-12-reset'),
            timeLabel: document.getElementById('timer-tangled-12'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-12'),
            sidebox: document.getElementById('tangled-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-12')
        },

        // Rata Outpost
        {   // [13] Haywire Golem
            function: function() { tangled_Countdown(13); },
            status: 0,
            cooldown: 60 * 4 + 30, 
            startButton: document.getElementById('timer-tangled-13-start'),
            startSideButton: document.getElementById('sidetimer-tangled-13-start'),
            resetButton: document.getElementById('timer-tangled-13-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-13-reset'),
            timeLabel: document.getElementById('timer-tangled-13'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-13'),
            sidebox: document.getElementById('tangled-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-13')
        },
        {   // [14] Chak Lobber
            function: function() { tangled_Countdown(14); },
            status: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-tangled-14-start'),
            startSideButton: document.getElementById('sidetimer-tangled-14-start'),
            resetButton: document.getElementById('timer-tangled-14-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-14-reset'),
            timeLabel: document.getElementById('timer-tangled-14'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-14'),
            sidebox: document.getElementById('tangled-14-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-14')
        },
        {   // [15] Mushrooms
            function: function() { tangled_Countdown(15); },
            status: 0,
            cooldown: 60 * 3 + 15, 
            startButton: document.getElementById('timer-tangled-15-start'),
            startSideButton: document.getElementById('sidetimer-tangled-15-start'),
            resetButton: document.getElementById('timer-tangled-15-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-15-reset'),
            timeLabel: document.getElementById('timer-tangled-15'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-15'),
            sidebox: document.getElementById('tangled-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-15')
        },

        // SCAR Outposts 
        {   // [16] Chak Crown
            function: function() { tangled_Countdown(16); },
            status: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-tangled-16-start'),
            startSideButton: document.getElementById('sidetimer-tangled-16-start'),
            resetButton: document.getElementById('timer-tangled-16-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-16-reset'),
            timeLabel: document.getElementById('timer-tangled-16'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-16'),
            sidebox: document.getElementById('tangled-16-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-16')
        },
        {   // [17] Fire Wyvern
            function: function() { tangled_Countdown(17); },
            status: 0,
            cooldown: 60 * 7 + 30, 
            startButton: document.getElementById('timer-tangled-17-start'),
            startSideButton: document.getElementById('sidetimer-tangled-17-start'),
            resetButton: document.getElementById('timer-tangled-17-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-17-reset'),
            timeLabel: document.getElementById('timer-tangled-17'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-17'),
            sidebox: document.getElementById('tangled-17-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-17')
        },
        {   // [18] Wasps
            function: function() { tangled_Countdown(18); },
            status: 0,
            cooldown: 60 * 15 + 45, 
            startButton: document.getElementById('timer-tangled-18-start'),
            startSideButton: document.getElementById('sidetimer-tangled-18-start'),
            resetButton: document.getElementById('timer-tangled-18-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-18-reset'),
            timeLabel: document.getElementById('timer-tangled-18'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-18'),
            sidebox: document.getElementById('tangled-18-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-18')
        },
        {   // [19] Chak Lobber
            function: function() { tangled_Countdown(19); },
            status: 0,
            cooldown: 60 * 30 + 30, 
            startButton: document.getElementById('timer-tangled-19-start'),
            startSideButton: document.getElementById('sidetimer-tangled-19-start'),
            resetButton: document.getElementById('timer-tangled-19-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-19-reset'),
            timeLabel: document.getElementById('timer-tangled-19'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-19'),
            sidebox: document.getElementById('tangled-19-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-19')
        },

        // Standalones
        {   // [20] Mushroom King
            function: function() { tangled_Countdown(20); },
            status: 0,
            cooldown: 60 * 18 + 45, 
            startButton: document.getElementById('timer-tangled-20-start'),
            startSideButton: document.getElementById('sidetimer-tangled-20-start'),
            resetButton: document.getElementById('timer-tangled-20-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-20-reset'),
            timeLabel: document.getElementById('timer-tangled-20'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-20'),
            sidebox: document.getElementById('tangled-20-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-20')
        },
        {   // [21] Treasure Mushroom
            function: function() { tangled_Countdown(21); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-tangled-21-start'),
            startSideButton: document.getElementById('sidetimer-tangled-21-start'),
            resetButton: document.getElementById('timer-tangled-21-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-21-reset'),
            timeLabel: document.getElementById('timer-tangled-21'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-21'),
            sidebox: document.getElementById('tangled-21-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-21')
        },
        {   // [22] Chak Driver
            function: function() { tangled_Countdown(22); },
            status: 0,
            cooldown: 60 * 38, 
            startButton: document.getElementById('timer-tangled-22-start'),
            startSideButton: document.getElementById('sidetimer-tangled-22-start'),
            resetButton: document.getElementById('timer-tangled-22-reset'),
            resetSideButton: document.getElementById('sidetimer-tangled-22-reset'),
            timeLabel: document.getElementById('timer-tangled-22'), 
            timeSideLabel: document.getElementById('sidetimer-tangled-22'),
            sidebox: document.getElementById('tangled-22-sidebox'),
            num: document.getElementById('numerical-sidetimer-tangled-22')
        },

    ]
};

var tangled; // Empty array for countdown
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
        if (timer == tangled.events[timer_num].startButton.id || timer == tangled.events[timer_num].startSideButton.id){
            if (tangled.events[timer_num].status == 0){
                tangled.events[timer_num].status = 1; 
                tangled.events[timer_num].function(); 

                tangled.events[timer_num].startButton.value = "Reset";
                tangled.events[timer_num].startSideButton.value = "Reset";
            } else {
                tangled.events[timer_num].status = 0;
                tangled.events[timer_num].startButton.value = "Start";
                tangled.events[timer_num].startSideButton.value = "Start";

                tangled.events[timer_num].timeLabel.style.color = "black";
                tangled.events[timer_num].timeSideLabel.style.color = 'black';
                tangled.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                tangled.events[timer_num].sidebox.style.background = 'transparent';
                tangled.events[timer_num].function();
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
        if (timer == tangled.events[timer_num].resetButton.id || timer == tangled.events[timer_num].resetSideButton.id){
            if (tangled.events[timer_num].status == 1){
                // For events with different initial spawn and respawn rates 
                switch (tangled.events[timer_num]){
                    // Nuhoch Outpost
                    case tangled.events[1]: // Chak Lobber
                    tangled.events[timer_num].cooldown = 60 * 36; 
                    break;

                    case tangled.events[2]: // Elementals
                    tangled.events[timer_num].cooldown = 60 * 13;
                    break;

                    case tangled.events[3]: // Sporlings
                    tangled.events[timer_num].cooldown = 60 * 30; 
                    break;

                    case tangled.events[4]: // Grub Pit
                    tangled.events[timer_num].cooldown = 60 * 10 + 30;
                    break;

                    case tangled.events[5]: // Beetle
                    tangled.events[timer_num].cooldown = 60 * 12 + 15;
                    break;

                    case tangled.events[6]: // Alchemist Patli - UNKNOWN
                    tangled.events[timer_num].cooldown = 60 * 30;
                    break;

                    case tangled.events[7]: // Zintl
                    tangled.events[timer_num].cooldown = 60 * 28 + 45;
                    break;

                    case tangled.events[8]: // Skelk - UNKNOWN
                    tangled.events[timer_num].cooldown = 60 * 30;
                    break;

                    // Ogre Outpost
                    case tangled.events[9]: // Wyvern Nest
                    tangled.events[timer_num].cooldown = 60 * 18;
                    break;

                    case tangled.events[10]: // Matriarch Bat
                    tangled.events[timer_num].cooldown = 60 * 18 + 30;
                    break;

                    case tangled.events[11]: // Chak Morale
                    tangled.events[timer_num].cooldown = 60 * 17 + 30;
                    break;

                    case tangled.events[12]: // Grubs
                    tangled.events[timer_num].cooldown = 60 * 18 + 45;
                    break;

                    // Rata Outpost
                    case tangled.events[13]: // Haywire Golems
                    tangled.events[timer_num].cooldown = 60 * 22 + 15;
                    break;

                    case tangled.events[14]: // Chak Lobber
                    tangled.events[timer_num].cooldown = 60 * 18 + 15;
                    break;

                    case tangled.events[15]: // Mushroom
                    tangled.events[timer_num].cooldown = 60 * 30;
                    break;

                    // SCAR Outpost 
                    case tangled.events[16]: // Chak Crown
                    tangled.events[timer_num].cooldown = 60 * 36 + 30;
                    break;

                    case tangled.events[17]: // Fire Wyvern
                    tangled.events[timer_num].cooldown = 60 * 22 + 15;
                    break;

                    case tangled.events[18]: // Wasps
                    tangled.events[timer_num].cooldown = 60 * 18 + 15;
                    break;

                    case tangled.events[19]: // Chak Lobber - UNKNOWN
                    tangled.events[timer_num].cooldown = 60 * 30;
                    break;

                    case tangled.events[20]: // Mushroom King
                    tangled.events[timer_num].cooldown = 60 * 18 + 45;
                    break;
                }

                tangled.events[timer_num].status = 0;
                tangled.events[timer_num].cooldown = tangled.events[timer_num].cooldown;
                tangled.events[timer_num].timeLabel.style.color = "black";

                tangled.events[timer_num].timeSideLabel.innerHTML = tangled.events[timer_num].timeLabel.innerHTML;
                tangled.events[timer_num].timeSideLabel.style.color = tangled.events[timer_num].timeLabel.style.color;

                tangled.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                tangled.events[timer_num].sidebox.style.background = "transparent";

                tangled.events[timer_num].function(); 
                tangled.events[timer_num].status = 1;
                tangled.events[timer_num].function(); 

                
            }
        }
    }
}

function tangled_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, tangled.events[arrayNum].cooldown, tangled.events[arrayNum].timeLabel, tangled.events[arrayNum].timeSideLabel, tangled.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(tangled.events[arrayNum].timeLabel, tangled.events[arrayNum].sidebox, tangled.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(tangled.events[arrayNum].timeLabel, tangled.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (tangled.events[arrayNum].status == 1){
        tangled[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(tangled[arrayNum]);   
    } 
}

function tangled_Depths_Post_Checkbox(obj){
    var checkbox = obj,
        id = obj.id;

    switch (id){
        case "post-nuhoch":
            if (checkbox.checked == true){
            // Start at 1 because the array starts at 1 isntead of 0
                for (i = 1; i <= 8; i++){
                    start_stop(tangled.events[i].startButton);
                }
            } else {
            // Start at 1 because the array starts at 1 isntead of 0
                for (i = 1; i <= 8; i++){
                    start_stop(tangled.events[i].startButton);
                }
            }
        break; 

        case "post-ogre":
            if (checkbox.checked == true){
            // 9-12 for events
                for (i = 9; i <= 12; i++){
                    start_stop(tangled.events[i].startButton);
                }
            } else {
            // 9-12 for events
                for (i = 9; i <= 12; i++){
                    start_stop(tangled.events[i].startButton);
                }
            }
        break;  

        case "post-rata":
            if (checkbox.checked == true){
            // 13-15 for events 
                for (i = 13; i <= 15; i++){
                    start_stop(tangled.events[i].startButton);
                }
            } else {
            // 13-15 for events
                for (i = 13; i <= 15; i++){
                    start_stop(tangled.events[i].startButton);
                }
            }
        break;  

        case "post-scar":
            if (checkbox.checked == true){
            // 16-19 
                for (i = 16; i <= 19; i++){
                    start_stop(tangled.events[i].startButton);
                }
            } else {
            // 16-19
                for (i = 16; i <= 19; i++){
                    start_stop(tangled.events[i].startButton);
                }
            }
        break;  
    }
}

function tangled_Depths_All_Checkbox(obj){
    var checkbox = obj,
        id = obj.id,
        subCheckbox,
        sidebox;

    // Display shows or removes the checkboxes and sideboxes for a particular outpost
    function display_box(startNum, endNum, condition){
        if (condition == true){
            for (i = startNum; i <= endNum; i++){
                subCheckbox = document.getElementById('tangled-'+i+'-checkbox');
                sidebox = document.getElementById('tangled-'+i+'-sidebox');

                subCheckbox.checked = true;
                sidebox.style.display = "block";
            }
        } else {
            for (i = startNum; i <= endNum; i++){
                subCheckbox = document.getElementById('tangled-'+i+'-checkbox');
                sidebox = document.getElementById('tangled-'+i+'-sidebox');

                subCheckbox.checked = false;
                sidebox.style.display = "none";
            }
        }
    }

    switch (id){
        // Peu's List 
        case "peus-list-checkbox":
            if (checkbox.checked == true){
                display_box(4,4,false);
                display_box(12,12,false);
                display_box(14,15,false);
            } else {
                display_box(4,4,true);
                display_box(12,12,true);
                display_box(14,15,true);
            }
        break;
        // 1-8
        case "all-nuhoch-checkbox":
            if (checkbox.checked == true){
                display_box(1,8,true);
            } else {
                display_box(1,8,false);
            }
        break;
        // 9-12 
        case "all-ogre-checkbox":
            if (checkbox.checked == true){
                display_box(9,12,true);
            } else {
                display_box(9,12,false);
            }
        break;
        // 13-15 
        case "all-rata-checkbox":
            if (checkbox.checked == true){
                display_box(13,15,true);
            } else {
                display_box(13,15,false);
            }
        break;
        // 16-19
        case "all-scar-checkbox":
            if (checkbox.checked == true){
                display_box(16,19,true);
            } else {
                display_box(16,19,false);
            }
        break;
    }
}
// Label of the meta on the side
var side_meta_name = document.getElementById('side-meta-name');

// Tangled Depths Global Timer
var current_progress = document.getElementById('current-status'),
	next_progress = "",
	progress_bar = document.getElementById('progress-bar'),
	progress_text = document.getElementById('progress-text'),
	meta_width = 0,
	new_meta_time = 0,
	max_meta_time = 0;

var ogre_arrow = document.getElementById('tangled-arrow-1'),
	ogre_circle = document.getElementById('tangled-img-1'),
	ogre_boss = document.getElementById('tangled-img-5'),
	ogre_npc = document.getElementById('tangled-img-9'),
	ogre_info = document.getElementById('tangled-lane-info-1'),
    ogre_chak = document.getElementById('tangled-img-13'),
	nuhoch_arrow = document.getElementById('tangled-arrow-2'),
	nuhoch_circle = document.getElementById('tangled-img-2'),
	nuhoch_boss = document.getElementById('tangled-img-6'),
	nuhoch_npc = document.getElementById('tangled-img-10'),
	nuhoch_info = document.getElementById('tangled-lane-info-2'),
    nuhoch_chak = document.getElementById('tangled-img-14'),
	rata_arrow = document.getElementById('tangled-arrow-3'),
	rata_circle = document.getElementById('tangled-img-3'),
	rata_boss = document.getElementById('tangled-img-7'),
	rata_npc = document.getElementById('tangled-img-11'),
	rata_info = document.getElementById('tangled-lane-info-3'),
    rata_chak = document.getElementById('tangled-img-15'),
	scar_arrow = document.getElementById('tangled-arrow-4'),
	scar_circle = document.getElementById('tangled-img-4'),
	scar_boss = document.getElementById('tangled-img-8'),
	scar_npc = document.getElementById('tangled-img-12'),
	scar_info = document.getElementById('tangled-lane-info-4'),
    scar_chak = document.getElementById('tangled-img-16');

var map_box = document.getElementById('map-timer-wrapper-1'),
	meta_box = document.getElementById('map-timer-wrapper-2'),
    refresh_button = document.getElementById('refresh'),
    revert_button = document.getElementById('revert'),
    revert = 0;

	var tangled_depths_timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
		result,
		hours,
		minutes,
		seconds;

    function tangled_timers(previous_hour, mid_hour, next_hour){
        if (d.getUTCHours() == 0 && d.getUTCMinutes() < 46){
            previous_hour = -1;
            mid_hour = 0;
        }
    	if (d.getUTCHours() == previous_hour && d.getUTCMinutes() >= 46 || d.getUTCHours() == mid_hour || d.getUTCHours() == next_hour && d.getUTCMinutes() < 46){

            map_box.style.position = 'static';
            map_box.style.opacity = 1;
            meta_box.style.opacity = 0;

            revert_button.style.display = 'none';
            if (d.getUTCHours() == previous_hour && d.getUTCMinutes() >= 46 || d.getUTCHours() == mid_hour || d.getUTCHours() == next_hour && d.getUTCMinutes() < 30){
                if (revert != 0){
                    revert = 0;
                }
            }
            progress_bar.style.background = progress_color;

            current_progress.innerHTML = "Status: Outpost Events";
            next_progress = "Prep - Chak Gerent";
            side_meta_name.innerHTML = "Prep - Chak Gerent";

            max_meta_time = ((next_hour * 3600) + (25 * 60)) - ((previous_hour * 3600) + (46 * 60));
            new_meta_time = time - ((previous_hour * 3600) + (46 * 60));
            result = ((next_hour * 3600) + (25 * 60)) - time;

            // 5 min prep time
            if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
                current_progress.innerHTML = "Status: Prep time! Gather and fill each lane!";
                next_progress = "Phase One";
                side_meta_name.innerHTML = "Phase One";

                progress_bar.style.background = pre_meta_color;
                map_box.style.position = 'absolute';
                map_box.style.opacity = 0;
                meta_box.style.opacity = 1;
                show_multiple_elements(1,4,'tangled-arrow-','opacity'); // Arrows
                show_multiple_elements(9,12,'tangled-img-','opacity'); // NPCs 
                show_multiple_elements(1,4,'tangled-img-','opacity'); // Circles
                hide_multiple_elements(1,4,'tangled-lane-info-','opacity'); // Lane info
                hide_multiple_elements(13,16,'tangled-img-','opacity'); // Chak

                // event circles
                ogre_circle.style.top = '75%';
                ogre_circle.style.left = '24%';
                nuhoch_circle.style.top = '34%';
                nuhoch_circle.style.left = '31%';
                rata_circle.style.top = '32%';
                rata_circle.style.left = '56%';
                scar_circle.style.top = '52%';
                scar_circle.style.left = '80%';
                // boss
                ogre_boss.style.top = '80%';
                ogre_boss.style.left = '27%';
                nuhoch_boss.style.top = '39%';
                nuhoch_boss.style.left = '34%';
                rata_boss.style.top = '37%';
                rata_boss.style.left = '59%';
                scar_boss.style.top = '56%';
                scar_boss.style.left = '83%';
                // chak 
                ogre_chak.style.top = '80%';
                ogre_chak.style.left = '22%';
                nuhoch_chak.style.top = '34%';
                nuhoch_chak.style.left = '31%';
                rata_chak.style.top = '29%';
                rata_chak.style.left = '59%';
                scar_chak.style.top = '55%';
                scar_chak.style.left = '88%';

                // Move NPCs 
                if (d.getUTCMinutes() >= 26){
                    ogre_npc.style.top = '80%';
                    ogre_npc.style.left = '27%';
                    nuhoch_npc.style.top = '39%';
                    nuhoch_npc.style.left = '34%';
                    rata_npc.style.top = '37%';
                    rata_npc.style.left = '59%';
                    scar_npc.style.top = '56%';
                    scar_npc.style.left = '83%';
                }

                max_meta_time = ((next_hour * 3600) + (30 * 60)) - ((next_hour * 3600) + (25 * 60));
                new_meta_time = time - ((next_hour * 3600) + (25 * 60));
                result = ((next_hour * 3600) + (30 * 60)) - time;
            }

            
            // Meta time
            if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 46){

                refresh_button.style.display = 'block';
                revert_button.style.display = 'block';
                
                // If users click revert button
                // Revert back to outpost events instead of meta
                if (revert == 1){
                    map_box.style.opacity = 1;
                    meta_box.style.opacity = 0;

        
                    revert_button.style.display = 'none';

                    current_progress.innerHTML = "Status: Reverted to outpost events";
                    next_progress = "End of meta";
                    side_meta_name.innerHTML = "End of Meta";

                    max_meta_time = ((next_hour * 3600) + (46 * 60)) - ((next_hour * 3600) + (30 * 60));
                    new_meta_time = time - ((next_hour * 3600) + (30 * 60));
                    result = ((next_hour * 3600) + (46 * 60)) - time;
                } else {

                    hide_multiple_elements(1,4,'tangled-arrow-','opacity');
                    hide_multiple_elements(1,4,'tangled-lane-info-','opacity'); // Lane info
                    hide_multiple_elements(9,12,'tangled-img-','opacity'); // NPCs
                    hide_multiple_elements(13,16,'tangled-img-','opacity'); // Chak invasion
                    hide_multiple_elements(5,8,'tangled-img-','opacity'); // Boss

                    progress_bar.style.background = meta_color;

                    map_box.style.position = 'absolute';
                    map_box.style.opacity = 0;
                    meta_box.style.opacity = 1;

                    ogre_info.innerHTML = 'Destroy Chak eggs';
                    nuhoch_info.innerHTML = 'Stomp nodules';
                    rata_info.innerHTML = 'Power up the golem';
                    scar_info.innerHTML = 'Destroy Chak';

                    // Default position
                    // Placed here b/c it's hidden and needs to go back if users stay on the page
                    ogre_npc.style.top = '72%';
                    ogre_npc.style.left = '57%';
                    nuhoch_npc.style.top = '72%';
                    nuhoch_npc.style.left = '57%';
                    rata_npc.style.top = '72%';
                    rata_npc.style.left = '57%';
                    scar_npc.style.top = '72%';
                    scar_npc.style.left = '57%';

                    // Phase 1 of meta - Progress event 
                    // Duration: 2 mins
                    if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 35){
                        current_progress.innerHTML = "Status: Phase One! Progress the events!";
                        next_progress = "Chak Gerent";
                        side_meta_name.innerHTML = "Chak Gerent";

                        show_multiple_elements(1,4,'tangled-lane-info-','opacity'); // Lane info

                        // Chak attack 1 minute after event
                        if (d.getUTCMinutes() == 31 && d.getUTCSeconds() <= 30){
                            ogre_info.innerHTML = 'Intercept the Chak';
                            nuhoch_info.innerHTML = 'Intercept the Chak';
                            rata_info.innerHTML = 'Intercept the Chak';
                            scar_info.innerHTML = 'Intercept the Chak';

                            show_multiple_elements(13,16,'tangled-img-','opacity'); // Chak invasion
                        }

                        max_meta_time = ((next_hour * 3600) + (32 * 60)) - ((next_hour * 3600) + (30 * 60));
                        new_meta_time = time - ((next_hour * 3600) + (30 * 60));
                        result = ((next_hour * 3600) + (32 * 60)) - time;
                    
                        // Phase 1 of meta - Attack boss
                        // Duration: 3 mins
                        if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 32 && d.getUTCMinutes() < 35){
                            current_progress.innerHTML = "Status: Attack Chak Gerent!";
                            next_progress = "Phase Two";
                            side_meta_name.innerHTML = "Phase Two";

                            show_multiple_elements(5,8,'tangled-img-','opacity'); // Boss

                            ogre_info.innerHTML = 'Attack Chak Gerent!';
                            nuhoch_info.innerHTML = 'Attack Chak Gerent!';
                            rata_info.innerHTML = 'Attack Chak Gerent!';
                            scar_info.innerHTML = 'Attack Chak Gerent!';

                            // Nuhoch early warning
                            if (d.getUTCMinutes() == 34 && d.getUTCSeconds() >= 40){
                                nuhoch_info.innerHTML = 'Move forward to prep for next phase!';
                                show_multiple_elements(2,2,'tangled-lane-info-','opacity');
                            }

                            max_meta_time = ((next_hour * 3600) + (35 * 60)) - ((next_hour * 3600) + (32 * 60));
                            new_meta_time = time - ((next_hour * 3600) + (32 * 60));
                            result = ((next_hour * 3600) + (35 * 60)) - time;
                        }
                    }
                    // Phase 2 of meta - Progress Event
                    // Duration: 2 mins
                    if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 35 && d.getUTCMinutes() < 40){
                        current_progress.innerHTML = "Status: Phase Two! Progress the events!";
                        next_progress = "Chak Gerent";
                        side_meta_name.innerHTML = "Chak Gerent";

                        show_multiple_elements(1,4,'tangled-lane-info-','opacity'); // Lane info

                        // Chak attack 30 seconds after event
                        if (d.getUTCMinutes() == 35 && d.getUTCSeconds() >= 30){
                            ogre_info.innerHTML = 'Intercept the Chak';
                            nuhoch_info.innerHTML = 'Intercept the Chak';
                            rata_info.innerHTML = 'Intercept the Chak';
                            scar_info.innerHTML = 'Intercept the Chak';

                            show_multiple_elements(13,16,'tangled-img-','opacity'); // Chak invasion
                        }

                        // event circles - new location
                        ogre_circle.style.top = '75%';
                        ogre_circle.style.left = '31%';
                        nuhoch_circle.style.top = '39%';
                        nuhoch_circle.style.left = '36%';
                        rata_circle.style.top = '40%';
                        scar_circle.style.top = '56%';
                        scar_circle.style.left = '70%';
                        // boss - new location
                        ogre_boss.style.top = '80%';
                        ogre_boss.style.left = '34%';
                        nuhoch_boss.style.top = '43%';
                        nuhoch_boss.style.left = '39%';
                        rata_boss.style.top = '45%';
                        rata_boss.style.left = '59%';
                        scar_boss.style.top = '60%';
                        scar_boss.style.left = '73%';
                        // chak - new location
                        ogre_chak.style.top = '80%';
                        ogre_chak.style.left = '29%';
                        nuhoch_chak.style.top = '38%';
                        nuhoch_chak.style.left = '35%';
                        rata_chak.style.top = '38%';
                        rata_chak.style.left = '59%';
                        scar_chak.style.top = '59%';
                        scar_chak.style.left = '78%';

                        max_meta_time = ((next_hour * 3600) + (37 * 60)) - ((next_hour * 3600) + (35 * 60));
                        new_meta_time = time - ((next_hour * 3600) + (35 * 60));
                        result = ((next_hour * 3600) + (37 * 60)) - time;
                    
                        // Phase 2 of meta - Attack boss
                        // Duration: 3 mins
                        if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 37 && d.getUTCMinutes() < 40){
                            current_progress.innerHTML = "Status: Attack Chak Gerent!";
                            next_progress = "Phase Three";
                            side_meta_name.innerHTML = "Phase Three";

                            show_multiple_elements(5,8,'tangled-img-','opacity'); // Boss

                            ogre_info.innerHTML = 'Attack Chak Gerent!';
                            nuhoch_info.innerHTML = 'Attack Chak Gerent!';
                            rata_info.innerHTML = 'Attack Chak Gerent!';
                            scar_info.innerHTML = 'Attack Chak Gerent!';

                            // Nuhoch early warning
                            if (d.getUTCMinutes() == 39 && d.getUTCSeconds() >= 40){
                                nuhoch_info.innerHTML = 'Move forward to prep for next phase!';
                                show_multiple_elements(2,2,'tangled-lane-info-','opacity');
                            }

                            max_meta_time = ((next_hour * 3600) + (40 * 60)) - ((next_hour * 3600) + (37 * 60));
                            new_meta_time = time - ((next_hour * 3600) + (37 * 60));
                            result = ((next_hour * 3600) + (40 * 60)) - time;
                        }
                    }
                    // Phase 3 of meta - Progress Event
                    // Duration: 2 mins
                    if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
                        current_progress.innerHTML = "Status: Phase Three! Progress the events!";
                        next_progress = "Chak Gerent";
                        side_meta_name.innerHTML = "Chak Gerent";

                        show_multiple_elements(1,4,'tangled-lane-info-','opacity'); // Lane info

                        // Chak attack at the start of the event
                        if (d.getUTCMinutes() == 40 && d.getUTCSeconds() <= 10){
                            ogre_info.innerHTML = 'Intercept the Chak';
                            nuhoch_info.innerHTML = 'Intercept the Chak';
                            rata_info.innerHTML = 'Intercept the Chak';
                            scar_info.innerHTML = 'Intercept the Chak';

                            show_multiple_elements(1,4,'tangled-lane-info-','opacity');
                            show_multiple_elements(13,16,'tangled-img-','opacity');
                        }

                        // event circles - new location
                        ogre_circle.style.top = '73%';
                        ogre_circle.style.left = '40%';
                        nuhoch_circle.style.top = '47%';
                        nuhoch_circle.style.left = '42%';
                        rata_circle.style.top = '47%';
                        scar_circle.style.top = '60%';
                        scar_circle.style.left = '65%';
                        // boss - new location
                        ogre_boss.style.top = '78%';
                        ogre_boss.style.left = '43%';
                        nuhoch_boss.style.top = '51%';
                        nuhoch_boss.style.left = '45%';
                        rata_boss.style.top = '52%';
                        rata_boss.style.left = '59%';
                        scar_boss.style.top = '65%';
                        scar_boss.style.left = '68%';
                        // chak - new location
                        ogre_chak.style.top = '78%';
                        ogre_chak.style.left = '38%';
                        nuhoch_chak.style.top = '45%';
                        nuhoch_chak.style.left = '42%';
                        rata_chak.style.top = '45%';
                        rata_chak.style.left = '59%';
                        scar_chak.style.top = '62%';
                        scar_chak.style.left = '73%';

                        max_meta_time = ((next_hour * 3600) + (42 * 60)) - ((next_hour * 3600) + (40 * 60));
                        new_meta_time = time - ((next_hour * 3600) + (40 * 60));
                        result = ((next_hour * 3600) + (42 * 60)) - time;
                    
                        // Phase 3 of meta - Attack boss
                        // Duration: 3 mins
                        if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 42 && d.getUTCMinutes() < 45){
                            current_progress.innerHTML = "Status: Attack Chak Gerent!";
                            next_progress = "Break";
                            side_meta_name.innerHTML = "Break";

                            show_multiple_elements(5,8,'tangled-img-','opacity'); // Boss

                            ogre_info.innerHTML = 'Attack Chak Gerent!';
                            nuhoch_info.innerHTML = 'Attack Chak Gerent!';
                            rata_info.innerHTML = 'Attack Chak Gerent!';
                            scar_info.innerHTML = 'Attack Chak Gerent!';

                            max_meta_time = ((next_hour * 3600) + (45 * 60)) - ((next_hour * 3600) + (42 * 60));
                            new_meta_time = time - ((next_hour * 3600) + (42 * 60));
                            result = ((next_hour * 3600) + (45 * 60)) - time;
                        }
                    }
                    // Break
                    // Duration: 1 min
                    if (d.getUTCHours() == next_hour && d.getUTCMinutes() >= 45 && d.getUTCMinutes() < 46){
                        current_progress.innerHTML = "Status: Break time! Gather loots!";
                        next_progress = "Outpost Events";
                        side_meta_name.innerHTML = "Outpost Events";

                        hide_multiple_elements(1,8,'tangled-img-','opacity'); // Circles and Boss icons

                        max_meta_time = ((next_hour * 3600) + (46 * 60)) - ((next_hour * 3600) + (45 * 60));
                        new_meta_time = time - ((next_hour * 3600) + (45 * 60));
                        result = ((next_hour * 3600) + (46 * 60)) - time;
                    }
                }
            }
           
            meta_width = (new_meta_time/max_meta_time)*100;
            progress_bar.style.width = meta_width + "%";
            progress_text.innerHTML = getDisplayTime(result) + " &#x27F6; " + next_progress;

            tangled.events[0].sidebox.style.background = progress_bar.style.background;
            tangled.events[0].timeSideLabel.innerHTML = getDisplayTime(result);
        }
    } // End of tangled_timers function

    if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 46){
        tangled_timers(0,1,2);
    }
    if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 46){
        tangled_timers(2,3,4);
    }
    if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 46){
        tangled_timers(4,5,6);
    }
    if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 46){
        tangled_timers(6,7,8);
    }
    if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 46){
        tangled_timers(8,9,10);
    }
    if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 46){
        tangled_timers(10,11,12);
    }
    if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 46){
        tangled_timers(12,13,14);
    }
    if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 46){
        tangled_timers(14,15,16);
    }
    if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 46){
        tangled_timers(16,17,18);
    }
    if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 46){
        tangled_timers(18,19,20);
    }
    if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 46){
        tangled_timers(20,21,22);
    }
    if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 46){
        tangled_timers(22,23,0);
    }


    console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());
	
	}, 1000);