// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var dragonfall = {
    events: [
        {   // empty
            status: 0,
        },
        // Cull Events
        // Crystal Bloom Culls 
        {   // [1] Cull B1 W
            function: function() { dragonfall_Countdown(1); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-1-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-1-start'),
            resetButton: document.getElementById('timer-dragonfall-1-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-1-reset'),
            timeLabel: document.getElementById('timer-dragonfall-1'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-1'),
            sidebox: document.getElementById('dragonfall-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-1')
        }, 
        {   // [2] Cull B2 E
            function: function() { dragonfall_Countdown(2); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-2-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-2-start'),
            resetButton: document.getElementById('timer-dragonfall-2-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-2-reset'),
            timeLabel: document.getElementById('timer-dragonfall-2'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-2'),
            sidebox: document.getElementById('dragonfall-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-2')
        }, 
        {   // [3] Cull B3 N
            function: function() { dragonfall_Countdown(3); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-3-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-3-start'),
            resetButton: document.getElementById('timer-dragonfall-3-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-3-reset'),
            timeLabel: document.getElementById('timer-dragonfall-3'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-3'),
            sidebox: document.getElementById('dragonfall-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-3')
        }, 
        // Underworld Culls
       	{   // [4] Cull U1 N
            function: function() { dragonfall_Countdown(4); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-4-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-4-start'),
            resetButton: document.getElementById('timer-dragonfall-4-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-4-reset'),
            timeLabel: document.getElementById('timer-dragonfall-4'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-4'),
            sidebox: document.getElementById('dragonfall-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-4')
        }, 
        {   // [5] Cull U2 S
            function: function() { dragonfall_Countdown(5); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-5-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-5-start'),
            resetButton: document.getElementById('timer-dragonfall-5-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-5-reset'),
            timeLabel: document.getElementById('timer-dragonfall-5'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-5'),
            sidebox: document.getElementById('dragonfall-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-5')
        }, 
        {   // [6] Cull B6 E
            function: function() { dragonfall_Countdown(6); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-6-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-6-start'),
            resetButton: document.getElementById('timer-dragonfall-6-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-6-reset'),
            timeLabel: document.getElementById('timer-dragonfall-6'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-6'),
            sidebox: document.getElementById('dragonfall-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-6')
        }, 
        // Melandru Culls 
        {   // [7] Cull M1 N
            function: function() { dragonfall_Countdown(7); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-7-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-7-start'),
            resetButton: document.getElementById('timer-dragonfall-7-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-7-reset'),
            timeLabel: document.getElementById('timer-dragonfall-7'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-7'),
            sidebox: document.getElementById('dragonfall-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-7')
        }, 
        {   // [8] Cull M2 M
            function: function() { dragonfall_Countdown(8); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-8-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-8-start'),
            resetButton: document.getElementById('timer-dragonfall-8-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-8-reset'),
            timeLabel: document.getElementById('timer-dragonfall-8'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-8'),
            sidebox: document.getElementById('dragonfall-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-8')
        }, 
        {   // [9] Cull M3 S
            function: function() { dragonfall_Countdown(9); },
            status: 0,
            cooldown: 60 * 4, 
            startButton: document.getElementById('timer-dragonfall-9-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-9-start'),
            resetButton: document.getElementById('timer-dragonfall-9-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-9-reset'),
            timeLabel: document.getElementById('timer-dragonfall-9'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-9'),
            sidebox: document.getElementById('dragonfall-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-9')
        }, 
        // Brandstorms 
        {   // [10] Brandstorm Crystal Bloom
            function: function() { dragonfall_Countdown(10); },
            status: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-dragonfall-10-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-10-start'),
            resetButton: document.getElementById('timer-dragonfall-10-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-10-reset'),
            timeLabel: document.getElementById('timer-dragonfall-10'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-10'),
            sidebox: document.getElementById('dragonfall-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-10')
        }, 
        {   // [11] Brandstorm Underworld
            function: function() { dragonfall_Countdown(11); },
            status: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-dragonfall-11-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-11-start'),
            resetButton: document.getElementById('timer-dragonfall-11-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-11-reset'),
            timeLabel: document.getElementById('timer-dragonfall-11'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-11'),
            sidebox: document.getElementById('dragonfall-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-11')
        },
        {   // [12] Brandstorm Melandru
            function: function() { dragonfall_Countdown(12); },
            status: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-dragonfall-12-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-12-start'),
            resetButton: document.getElementById('timer-dragonfall-12-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-12-reset'),
            timeLabel: document.getElementById('timer-dragonfall-12'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-12'),
            sidebox: document.getElementById('dragonfall-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-12')
        },
        // Champions
        {   // [13] Champion Crystal Bloom
            function: function() { dragonfall_Countdown(13); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-dragonfall-13-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-13-start'),
            resetButton: document.getElementById('timer-dragonfall-13-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-13-reset'),
            timeLabel: document.getElementById('timer-dragonfall-13'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-13'),
            sidebox: document.getElementById('dragonfall-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-13')
        },
        {   // [14] Champion Underworld
            function: function() { dragonfall_Countdown(14); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-dragonfall-14-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-14-start'),
            resetButton: document.getElementById('timer-dragonfall-14-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-14-reset'),
            timeLabel: document.getElementById('timer-dragonfall-14'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-14'),
            sidebox: document.getElementById('dragonfall-14-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-14')
        },
        {   // [15] Champion Crystal Bloom
            function: function() { dragonfall_Countdown(15); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-dragonfall-15-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-15-start'),
            resetButton: document.getElementById('timer-dragonfall-15-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-15-reset'),
            timeLabel: document.getElementById('timer-dragonfall-15'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-15'),
            sidebox: document.getElementById('dragonfall-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-15')
        },
        // Menders 
        {   // [16] Mender Crystal Bloom
            function: function() { dragonfall_Countdown(16); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-dragonfall-16-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-16-start'),
            resetButton: document.getElementById('timer-dragonfall-16-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-16-reset'),
            timeLabel: document.getElementById('timer-dragonfall-16'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-16'),
            sidebox: document.getElementById('dragonfall-16-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-16')
        },
        {   // [17] Mender Underworld
            function: function() { dragonfall_Countdown(17); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-dragonfall-17-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-17-start'),
            resetButton: document.getElementById('timer-dragonfall-17-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-17-reset'),
            timeLabel: document.getElementById('timer-dragonfall-17'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-17'),
            sidebox: document.getElementById('dragonfall-17-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-17')
        },
        {   // [18] Mender Melandru
            function: function() { dragonfall_Countdown(18); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-dragonfall-18-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-18-start'),
            resetButton: document.getElementById('timer-dragonfall-18-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-18-reset'),
            timeLabel: document.getElementById('timer-dragonfall-18'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-18'),
            sidebox: document.getElementById('dragonfall-18-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-18')
        },
        // Bridges
        {   // [19] Brdige Crystal Bloom E
            function: function() { dragonfall_Countdown(19); },
            status: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-19-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-19-start'),
            resetButton: document.getElementById('timer-dragonfall-19-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-19-reset'),
            timeLabel: document.getElementById('timer-dragonfall-19'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-19'),
            sidebox: document.getElementById('dragonfall-19-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-19')
        },
        {   // [20] Brdige Crystal Bloom S
            function: function() { dragonfall_Countdown(20); },
            status: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-20-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-20-start'),
            resetButton: document.getElementById('timer-dragonfall-20-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-20-reset'),
            timeLabel: document.getElementById('timer-dragonfall-20'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-20'),
            sidebox: document.getElementById('dragonfall-20-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-20')
        },
        {   // [21] Brdige Crystal Bloom E
            function: function() { dragonfall_Countdown(21); },
            status: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-21-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-21-start'),
            resetButton: document.getElementById('timer-dragonfall-21-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-21-reset'),
            timeLabel: document.getElementById('timer-dragonfall-21'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-21'),
            sidebox: document.getElementById('dragonfall-21-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-21')
        },
        {   // [22] Brdige Underworld
            function: function() { dragonfall_Countdown(22); },
            status: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-dragonfall-22-start'),
            startSideButton: document.getElementById('sidetimer-dragonfall-22-start'),
            resetButton: document.getElementById('timer-dragonfall-22-reset'),
            resetSideButton: document.getElementById('sidetimer-dragonfall-22-reset'),
            timeLabel: document.getElementById('timer-dragonfall-22'), 
            timeSideLabel: document.getElementById('sidetimer-dragonfall-22'),
            sidebox: document.getElementById('dragonfall-22-sidebox'),
            num: document.getElementById('numerical-sidetimer-dragonfall-22')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var dragonfall; // Empty array for countdown
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
        if (timer == dragonfall.events[timer_num].startButton.id || timer == dragonfall.events[timer_num].startSideButton.id){
            if (dragonfall.events[timer_num].status == 0){
                dragonfall.events[timer_num].status = 1; 
                dragonfall.events[timer_num].function(); 

                dragonfall.events[timer_num].startButton.value = "Reset";
                dragonfall.events[timer_num].startSideButton.value = "Reset";
            } else {
                dragonfall.events[timer_num].status = 0;
                dragonfall.events[timer_num].startButton.value = "Start";
                dragonfall.events[timer_num].startSideButton.value = "Start";

                dragonfall.events[timer_num].timeLabel.style.color = "black";
                dragonfall.events[timer_num].timeSideLabel.style.color = 'black';
                dragonfall.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                dragonfall.events[timer_num].sidebox.style.background = 'transparent';
                dragonfall.events[timer_num].function();
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
        if (timer == dragonfall.events[timer_num].resetButton.id || timer == dragonfall.events[timer_num].resetSideButton.id){
            if (dragonfall.events[timer_num].status == 1){
                dragonfall.events[timer_num].status = 0;
                dragonfall.events[timer_num].cooldown = dragonfall.events[timer_num].cooldown;
                dragonfall.events[timer_num].timeLabel.style.color = "black";

                dragonfall.events[timer_num].timeSideLabel.innerHTML = dragonfall.events[timer_num].timeLabel.innerHTML;
                dragonfall.events[timer_num].timeSideLabel.style.color = dragonfall.events[timer_num].timeLabel.style.color;

                dragonfall.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                dragonfall.events[timer_num].sidebox.style.background = "transparent";

                dragonfall.events[timer_num].function(); 
                dragonfall.events[timer_num].status = 1;
                dragonfall.events[timer_num].function(); 
            }
        }
    }
}

function dragonfall_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, dragonfall.events[arrayNum].cooldown, dragonfall.events[arrayNum].timeLabel, dragonfall.events[arrayNum].timeSideLabel, dragonfall.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(dragonfall.events[arrayNum].timeLabel, dragonfall.events[arrayNum].sidebox, dragonfall.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(dragonfall.events[arrayNum].timeLabel, dragonfall.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (dragonfall.events[arrayNum].status == 1){
        dragonfall[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(dragonfall[arrayNum]);   
    } 
}