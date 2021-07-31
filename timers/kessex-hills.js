// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var kessex = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Overlord
            function: function() { kessex_Countdown(1); },
            status: 0,
            cooldown: 60 * 6 + 30, 
            startButton: document.getElementById('timer-kessex-1-start'),
            startSideButton: document.getElementById('sidetimer-kessex-1-start'),
            resetButton: document.getElementById('timer-kessex-1-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-1-reset'),
            timeLabel: document.getElementById('timer-kessex-1'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-1'),
            textLabel: document.getElementById('timer-kessex-1-text'),
            sidebox: document.getElementById('kessex-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-1')
        },
        {   // [2] Bandits
            function: function() { kessex_Countdown(2); },
            status: 0,
            cooldown: 60 * 14 + 30, 
            startButton: document.getElementById('timer-kessex-2-start'),
            startSideButton: document.getElementById('sidetimer-kessex-2-start'),
            resetButton: document.getElementById('timer-kessex-2-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-2-reset'),
            timeLabel: document.getElementById('timer-kessex-2'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-2'),
            textLabel: document.getElementById('timer-kessex-2-text'),
            sidebox: document.getElementById('kessex-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-2')
        },
        {   // [3] Toxic Alchemist
            function: function() { kessex_Countdown(3); },
            status: 0,
            cooldown: 60 * 16 + 30, 
            startButton: document.getElementById('timer-kessex-3-start'),
            startSideButton: document.getElementById('sidetimer-kessex-3-start'),
            resetButton: document.getElementById('timer-kessex-3-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-3-reset'),
            timeLabel: document.getElementById('timer-kessex-3'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-3'),
            textLabel: document.getElementById('timer-kessex-3-text'),
            sidebox: document.getElementById('kessex-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-3')
        },
        {   // [4] Toxic Spider
            function: function() { kessex_Countdown(4); },
            status: 0,
            cooldown: 60 * 7 + 30, 
            startButton: document.getElementById('timer-kessex-4-start'),
            startSideButton: document.getElementById('sidetimer-kessex-4-start'),
            resetButton: document.getElementById('timer-kessex-4-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-4-reset'),
            timeLabel: document.getElementById('timer-kessex-4'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-4'),
            textLabel: document.getElementById('timer-kessex-4-text'),
            sidebox: document.getElementById('kessex-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-4')
        },
        {   // [5] Blood Witch
            function: function() { kessex_Countdown(5); },
            status: 0,
            cooldown: 60 * 7 + 45, 
            startButton: document.getElementById('timer-kessex-5-start'),
            startSideButton: document.getElementById('sidetimer-kessex-5-start'),
            resetButton: document.getElementById('timer-kessex-5-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-5-reset'),
            timeLabel: document.getElementById('timer-kessex-5'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-5'),
            textLabel: document.getElementById('timer-kessex-5-text'),
            sidebox: document.getElementById('kessex-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-5')
        },
        {   // [6] Haullcination West
            function: function() { kessex_Countdown(6); },
            status: 0,
            cooldown: 60 * 25, 
            startButton: document.getElementById('timer-kessex-6-start'),
            startSideButton: document.getElementById('sidetimer-kessex-6-start'),
            resetButton: document.getElementById('timer-kessex-6-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-6-reset'),
            timeLabel: document.getElementById('timer-kessex-6'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-6'),
            textLabel: document.getElementById('timer-kessex-6-text'),
            sidebox: document.getElementById('kessex-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-6')
        },
        {   // [7] Haullcination East
            function: function() { kessex_Countdown(7); },
            status: 0,
            cooldown: 60 * 25, 
            startButton: document.getElementById('timer-kessex-7-start'),
            startSideButton: document.getElementById('sidetimer-kessex-7-start'),
            resetButton: document.getElementById('timer-kessex-7-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-7-reset'),
            timeLabel: document.getElementById('timer-kessex-7'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-7'),
            textLabel: document.getElementById('timer-kessex-7-text'),
            sidebox: document.getElementById('kessex-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-7')
        },
        {   // [8] Haullcination North
            function: function() { kessex_Countdown(8); },
            status: 0,
            cooldown: 60 * 25, 
            startButton: document.getElementById('timer-kessex-8-start'),
            startSideButton: document.getElementById('sidetimer-kessex-8-start'),
            resetButton: document.getElementById('timer-kessex-8-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-8-reset'),
            timeLabel: document.getElementById('timer-kessex-8'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-8'),
            textLabel: document.getElementById('timer-kessex-8-text'),
            sidebox: document.getElementById('kessex-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-8')
        },
        {   // [9] Harpy
            function: function() { kessex_Countdown(9); },
            status: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-kessex-9-start'),
            startSideButton: document.getElementById('sidetimer-kessex-9-start'),
            resetButton: document.getElementById('timer-kessex-9-reset'),
            resetSideButton: document.getElementById('sidetimer-kessex-9-reset'),
            timeLabel: document.getElementById('timer-kessex-9'), 
            timeSideLabel: document.getElementById('sidetimer-kessex-9'),
            textLabel: document.getElementById('timer-kessex-9-text'),
            sidebox: document.getElementById('kessex-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-kessex-9')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var kessex; // Empty array for countdown
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
        if (timer == kessex.events[timer_num].startButton.id || timer == kessex.events[timer_num].startSideButton.id){
            if (kessex.events[timer_num].status == 0){
                kessex.events[timer_num].status = 1; 
                kessex.events[timer_num].function(); 

                kessex.events[timer_num].startButton.value = "Reset";
                kessex.events[timer_num].startSideButton.value = "Reset";
            } else {
                kessex.events[timer_num].status = 0;
                kessex.events[timer_num].startButton.value = "Start";
                kessex.events[timer_num].startSideButton.value = "Start";


                kessex.events[timer_num].textLabel.style.opacity = 0;
                kessex.events[timer_num].timeLabel.style.color = "black";
                kessex.events[timer_num].timeSideLabel.style.color = 'black';
                kessex.events[timer_num].sidebox.style.background = 'transparent';
                kessex.events[timer_num].function();
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
        if (timer == kessex.events[timer_num].resetButton.id || timer == kessex.events[timer_num].resetSideButton.id){
            if (kessex.events[timer_num].status == 1){
                kessex.events[timer_num].status = 0;
                kessex.events[timer_num].cooldown = kessex.events[timer_num].cooldown;
                kessex.events[timer_num].textLabel.style.opacity = 0;
                kessex.events[timer_num].timeLabel.style.color = "black";

                kessex.events[timer_num].timeSideLabel.innerHTML = kessex.events[timer_num].timeLabel.innerHTML;
                kessex.events[timer_num].timeSideLabel.style.color = kessex.events[timer_num].timeLabel.style.color;

                kessex.events[timer_num].sidebox.style.background = "transparent";

                kessex.events[timer_num].function(); 
                kessex.events[timer_num].status = 1;
                kessex.events[timer_num].function(); 
            }
        }
    }
}

function kessex_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, kessex.events[arrayNum].cooldown, kessex.events[arrayNum].timeLabel, kessex.events[arrayNum].timeSideLabel, kessex.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(kessex.events[arrayNum].textLabel, kessex.events[arrayNum].timeLabel, kessex.events[arrayNum].sidebox, kessex.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(kessex.events[arrayNum].textLabel, kessex.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (kessex.events[arrayNum].status == 1){
        kessex[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(kessex[arrayNum]);   
    } 
}
 

