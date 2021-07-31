// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var draconis = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Meta
            function: function() { draconis_Countdown(1); },
            status: 0,
            cooldown: 60 * 16, 
            startButton: document.getElementById('timer-draconis-1-start'),
            startSideButton: document.getElementById('sidetimer-draconis-1-start'),
            resetButton: document.getElementById('timer-draconis-1-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-1-reset'),
            timeLabel: document.getElementById('timer-draconis-1'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-1'),
            sidebox: document.getElementById('draconis-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-1')
        }, 

        {   // [2] Lava Wurm
            function: function() { draconis_Countdown(2); },
            status: 0,
            cooldown: 60 * 11, 
            startButton: document.getElementById('timer-draconis-2-start'),
            startSideButton: document.getElementById('sidetimer-draconis-2-start'),
            resetButton: document.getElementById('timer-draconis-2-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-2-reset'),
            timeLabel: document.getElementById('timer-draconis-2'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-2'),
            sidebox: document.getElementById('draconis-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-2')
        }, 
        {   // [3] Skelk
            function: function() { draconis_Countdown(3); },
            status: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-draconis-3-start'),
            startSideButton: document.getElementById('sidetimer-draconis-3-start'),
            resetButton: document.getElementById('timer-draconis-3-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-3-reset'),
            timeLabel: document.getElementById('timer-draconis-3'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-3'),
            sidebox: document.getElementById('draconis-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-3')
        },
        {   // [4] Golem
            function: function() { draconis_Countdown(4); },
            status: 0,
            cooldown: 60 * 7 + 45, 
            startButton: document.getElementById('timer-draconis-4-start'),
            startSideButton: document.getElementById('sidetimer-draconis-4-start'),
            resetButton: document.getElementById('timer-draconis-4-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-4-reset'),
            timeLabel: document.getElementById('timer-draconis-4'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-4'),
            sidebox: document.getElementById('draconis-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-4')
        },
        {   // [5] Devourer
            function: function() { draconis_Countdown(5); },
            status: 0,
            cooldown: 60 * 19 + 30, 
            startButton: document.getElementById('timer-draconis-5-start'),
            startSideButton: document.getElementById('sidetimer-draconis-5-start'),
            resetButton: document.getElementById('timer-draconis-5-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-5-reset'),
            timeLabel: document.getElementById('timer-draconis-5'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-5'),
            sidebox: document.getElementById('draconis-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-5')
        },
        {   // [6] Emperor Mattake
            function: function() { draconis_Countdown(6); },
            status: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-draconis-6-start'),
            startSideButton: document.getElementById('sidetimer-draconis-6-start'),
            resetButton: document.getElementById('timer-draconis-6-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-6-reset'),
            timeLabel: document.getElementById('timer-draconis-6'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-6'),
            sidebox: document.getElementById('draconis-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-6')
        },
        {   // [7] Webby Mother
            function: function() { draconis_Countdown(7); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-draconis-7-start'),
            startSideButton: document.getElementById('sidetimer-draconis-7-start'),
            resetButton: document.getElementById('timer-draconis-7-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-7-reset'),
            timeLabel: document.getElementById('timer-draconis-7'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-7'),
            sidebox: document.getElementById('draconis-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-7')
        },
        {   // [8] Wind Rider
            function: function() { draconis_Countdown(8); },
            status: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-draconis-8-start'),
            startSideButton: document.getElementById('sidetimer-draconis-8-start'),
            resetButton: document.getElementById('timer-draconis-8-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-8-reset'),
            timeLabel: document.getElementById('timer-draconis-8'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-8'),
            sidebox: document.getElementById('draconis-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-8')
        },
        {   // [9] Spirit of Nature
            function: function() { draconis_Countdown(9); },
            status: 0,
            cooldown: 60 * 5, 
            startButton: document.getElementById('timer-draconis-9-start'),
            startSideButton: document.getElementById('sidetimer-draconis-9-start'),
            resetButton: document.getElementById('timer-draconis-9-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-9-reset'),
            timeLabel: document.getElementById('timer-draconis-9'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-9'),
            sidebox: document.getElementById('draconis-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-9')
        },
        {   // [10] Stonehead
            function: function() { draconis_Countdown(10); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-draconis-10-start'),
            startSideButton: document.getElementById('sidetimer-draconis-10-start'),
            resetButton: document.getElementById('timer-draconis-10-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-10-reset'),
            timeLabel: document.getElementById('timer-draconis-10'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-10'),
            sidebox: document.getElementById('draconis-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-10')
        },
        {   // [11] Grub Gobbler
            function: function() { draconis_Countdown(11); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-draconis-11-start'),
            startSideButton: document.getElementById('sidetimer-draconis-11-start'),
            resetButton: document.getElementById('timer-draconis-11-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-11-reset'),
            timeLabel: document.getElementById('timer-draconis-11'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-11'),
            sidebox: document.getElementById('draconis-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-11')
        },
        {   // [12] Mercenaries
            function: function() { draconis_Countdown(12); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-draconis-12-start'),
            startSideButton: document.getElementById('sidetimer-draconis-12-start'),
            resetButton: document.getElementById('timer-draconis-12-reset'),
            resetSideButton: document.getElementById('sidetimer-draconis-12-reset'),
            timeLabel: document.getElementById('timer-draconis-12'), 
            timeSideLabel: document.getElementById('sidetimer-draconis-12'),
            sidebox: document.getElementById('draconis-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-draconis-12')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var draconis; // Empty array for countdown
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
        if (timer == draconis.events[timer_num].startButton.id || timer == draconis.events[timer_num].startSideButton.id){
            if (draconis.events[timer_num].status == 0){
                draconis.events[timer_num].status = 1; 
                draconis.events[timer_num].function(); 

                draconis.events[timer_num].startButton.value = "Reset";
                draconis.events[timer_num].startSideButton.value = "Reset";
            } else {
                draconis.events[timer_num].status = 0;
                draconis.events[timer_num].startButton.value = "Start";
                draconis.events[timer_num].startSideButton.value = "Start";

                draconis.events[timer_num].timeLabel.style.color = "black";
                draconis.events[timer_num].timeSideLabel.style.color = 'black';
                draconis.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                draconis.events[timer_num].sidebox.style.background = 'transparent';
                draconis.events[timer_num].function();
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
        if (timer == draconis.events[timer_num].resetButton.id || timer == draconis.events[timer_num].resetSideButton.id){
            if (draconis.events[timer_num].status == 1){
                draconis.events[timer_num].status = 0;
                draconis.events[timer_num].cooldown = draconis.events[timer_num].cooldown;
                draconis.events[timer_num].timeLabel.style.color = "black";

                draconis.events[timer_num].timeSideLabel.innerHTML = draconis.events[timer_num].timeLabel.innerHTML;
                draconis.events[timer_num].timeSideLabel.style.color = draconis.events[timer_num].timeLabel.style.color;

                draconis.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                draconis.events[timer_num].sidebox.style.background = "transparent";

                draconis.events[timer_num].function(); 
                draconis.events[timer_num].status = 1;
                draconis.events[timer_num].function(); 
            }
        }
    }
}

function draconis_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, draconis.events[arrayNum].cooldown, draconis.events[arrayNum].timeLabel, draconis.events[arrayNum].timeSideLabel, draconis.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(draconis.events[arrayNum].timeLabel, draconis.events[arrayNum].sidebox, draconis.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(draconis.events[arrayNum].timeLabel, draconis.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (draconis.events[arrayNum].status == 1){
        draconis[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(draconis[arrayNum]);   
    } 
}


