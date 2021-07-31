// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var drizzlewood = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Vloxen Mine
            function: function() { drizzlewood_Countdown(1); },
            status: 0,
            cooldown: 60 * 1, 
            startButton: document.getElementById('timer-drizzlewood-1-start'),
            startSideButton: document.getElementById('sidetimer-drizzlewood-1-start'),
            resetButton: document.getElementById('timer-drizzlewood-1-reset'),
            resetSideButton: document.getElementById('sidetimer-drizzlewood-1-reset'),
            timeLabel: document.getElementById('timer-drizzlewood-1'), 
            timeSideLabel: document.getElementById('sidetimer-drizzlewood-1'),
            textLabel: document.getElementById('timer-drizzlewood-1-text'),
            sidebox: document.getElementById('drizzlewood-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-drizzlewood-1')
        },
        {   // [2] Petraj Overlook
            function: function() { drizzlewood_Countdown(2); },
            status: 0,
            cooldown: 60 * 1, 
            startButton: document.getElementById('timer-drizzlewood-2-start'),
            startSideButton: document.getElementById('sidetimer-drizzlewood-2-start'),
            resetButton: document.getElementById('timer-drizzlewood-2-reset'),
            resetSideButton: document.getElementById('sidetimer-drizzlewood-2-reset'),
            timeLabel: document.getElementById('timer-drizzlewood-2'), 
            timeSideLabel: document.getElementById('sidetimer-drizzlewood-2'),
            textLabel: document.getElementById('timer-drizzlewood-2-text'),
            sidebox: document.getElementById('drizzlewood-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-drizzlewood-2')
        },
        {   // [3] Fort Defiance
            function: function() { drizzlewood_Countdown(3); },
            status: 0,
            cooldown: 60 * 1, 
            startButton: document.getElementById('timer-drizzlewood-3-start'),
            startSideButton: document.getElementById('sidetimer-drizzlewood-3-start'),
            resetButton: document.getElementById('timer-drizzlewood-3-reset'),
            resetSideButton: document.getElementById('sidetimer-drizzlewood-3-reset'),
            timeLabel: document.getElementById('timer-drizzlewood-3'), 
            timeSideLabel: document.getElementById('sidetimer-drizzlewood-3'),
            textLabel: document.getElementById('timer-drizzlewood-3-text'),
            sidebox: document.getElementById('drizzlewood-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-drizzlewood-3')
        },
        {   // [4] Port Cascadia
            function: function() { drizzlewood_Countdown(4); },
            status: 0,
            cooldown: 60 * 1, 
            startButton: document.getElementById('timer-drizzlewood-4-start'),
            startSideButton: document.getElementById('sidetimer-drizzlewood-4-start'),
            resetButton: document.getElementById('timer-drizzlewood-4-reset'),
            resetSideButton: document.getElementById('sidetimer-drizzlewood-4-reset'),
            timeLabel: document.getElementById('timer-drizzlewood-4'), 
            timeSideLabel: document.getElementById('sidetimer-drizzlewood-4'),
            textLabel: document.getElementById('timer-drizzlewood-4-text'),
            sidebox: document.getElementById('drizzlewood-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-drizzlewood-4')
        },
        {   // [5] Leadfoot Village
            function: function() { drizzlewood_Countdown(5); },
            status: 0,
            cooldown: 60 * 1, 
            startButton: document.getElementById('timer-drizzlewood-5-start'),
            startSideButton: document.getElementById('sidetimer-drizzlewood-5-start'),
            resetButton: document.getElementById('timer-drizzlewood-5-reset'),
            resetSideButton: document.getElementById('sidetimer-drizzlewood-5-reset'),
            timeLabel: document.getElementById('timer-drizzlewood-5'), 
            timeSideLabel: document.getElementById('sidetimer-drizzlewood-5'),
            textLabel: document.getElementById('timer-drizzlewood-5-text'),
            sidebox: document.getElementById('drizzlewood-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-drizzlewood-5')
        },
        {   // [6] Lighthouse Point
            function: function() { drizzlewood_Countdown(6); },
            status: 0,
            cooldown: 60 * 1, 
            startButton: document.getElementById('timer-drizzlewood-6-start'),
            startSideButton: document.getElementById('sidetimer-drizzlewood-6-start'),
            resetButton: document.getElementById('timer-drizzlewood-6-reset'),
            resetSideButton: document.getElementById('sidetimer-drizzlewood-6-reset'),
            timeLabel: document.getElementById('timer-drizzlewood-6'), 
            timeSideLabel: document.getElementById('sidetimer-drizzlewood-6'),
            textLabel: document.getElementById('timer-drizzlewood-6-text'),
            sidebox: document.getElementById('drizzlewood-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-drizzlewood-6')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var drizzlewood; // Empty array for countdown
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
        if (timer == drizzlewood.events[timer_num].startButton.id || timer == drizzlewood.events[timer_num].startSideButton.id){
            if (drizzlewood.events[timer_num].status == 0){
                drizzlewood.events[timer_num].status = 1; 
                drizzlewood.events[timer_num].function(); 

                drizzlewood.events[timer_num].startButton.value = "Reset";
                drizzlewood.events[timer_num].startSideButton.value = "Reset";
            } else {
                drizzlewood.events[timer_num].status = 0;
                drizzlewood.events[timer_num].startButton.value = "Start";
                drizzlewood.events[timer_num].startSideButton.value = "Start";

                drizzlewood.events[timer_num].timeLabel.style.color = "black";
                drizzlewood.events[timer_num].timeSideLabel.style.color = 'black';
                drizzlewood.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                drizzlewood.events[timer_num].sidebox.style.background = 'transparent';
                drizzlewood.events[timer_num].function();
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
        -> Reset timer to original time
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
        if (timer == drizzlewood.events[timer_num].resetButton.id || timer == drizzlewood.events[timer_num].resetSideButton.id){
            if (drizzlewood.events[timer_num].status == 1){
                drizzlewood.events[timer_num].status = 0;
                drizzlewood.events[timer_num].cooldown = drizzlewood.events[timer_num].cooldown;
                drizzlewood.events[timer_num].timeLabel.style.color = "black";

                drizzlewood.events[timer_num].timeSideLabel.innerHTML = drizzlewood.events[timer_num].timeLabel.innerHTML;
                drizzlewood.events[timer_num].timeSideLabel.style.color = drizzlewood.events[timer_num].timeLabel.style.color;

                drizzlewood.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                drizzlewood.events[timer_num].sidebox.style.background = "transparent";

                drizzlewood.events[timer_num].function(); 
                drizzlewood.events[timer_num].status = 1;
                drizzlewood.events[timer_num].function(); 
            }
        }
    }
}

function drizzlewood_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, drizzlewood.events[arrayNum].cooldown, drizzlewood.events[arrayNum].timeLabel, drizzlewood.events[arrayNum].timeSideLabel, drizzlewood.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(drizzlewood.events[arrayNum].timeLabel, drizzlewood.events[arrayNum].sidebox, drizzlewood.events[arrayNum].timeSideLabel);
            // 30 seconds instead of 60 since all the events are 1 minutes
        } else if (countdown.time <= 30){
            time_text_and_labels_less_than_60(drizzlewood.events[arrayNum].timeLabel, drizzlewood.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (drizzlewood.events[arrayNum].status == 1){
        drizzlewood[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(drizzlewood[arrayNum]);   
    } 
}
 

