// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var sirens = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Meta
            function: function() { sirens_Countdown(1); },
            status: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-sirens-1-start'),
            startSideButton: document.getElementById('sidetimer-sirens-1-start'),
            resetButton: document.getElementById('timer-sirens-1-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-1-reset'),
            timeLabel: document.getElementById('timer-sirens-1'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-1'),
            sidebox: document.getElementById('sirens-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-1')
        }, 

        {   // [2] Winfred
            function: function() { sirens_Countdown(2); },
            status: 0,
            cooldown: 60 * 23, 
            startButton: document.getElementById('timer-sirens-2-start'),
            startSideButton: document.getElementById('sidetimer-sirens-2-start'),
            resetButton: document.getElementById('timer-sirens-2-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-2-reset'),
            timeLabel: document.getElementById('timer-sirens-2'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-2'),
            sidebox: document.getElementById('sirens-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-2')
        }, 
        {   // [3] Kingpins
            function: function() { sirens_Countdown(3); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-sirens-3-start'),
            startSideButton: document.getElementById('sidetimer-sirens-3-start'),
            resetButton: document.getElementById('timer-sirens-3-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-3-reset'),
            timeLabel: document.getElementById('timer-sirens-3'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-3'),
            sidebox: document.getElementById('sirens-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-3')
        },
        {   // [4] Champ Giant
            function: function() { sirens_Countdown(4); },
            status: 0,
            cooldown: 60 * 14, 
            startButton: document.getElementById('timer-sirens-4-start'),
            startSideButton: document.getElementById('sidetimer-sirens-4-start'),
            resetButton: document.getElementById('timer-sirens-4-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-4-reset'),
            timeLabel: document.getElementById('timer-sirens-4'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-4'),
            sidebox: document.getElementById('sirens-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-4')
        },
        {   // [5] Nodes
            function: function() { sirens_Countdown(5); },
            status: 0,
            cooldown: 60 * 13 + 15, 
            startButton: document.getElementById('timer-sirens-5-start'),
            startSideButton: document.getElementById('sidetimer-sirens-5-start'),
            resetButton: document.getElementById('timer-sirens-5-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-5-reset'),
            timeLabel: document.getElementById('timer-sirens-5'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-5'),
            sidebox: document.getElementById('sirens-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-5')
        },
        {   // [6] Champ Spider
            function: function() { sirens_Countdown(6); },
            status: 0,
            cooldown: 60 * 13, 
            startButton: document.getElementById('timer-sirens-6-start'),
            startSideButton: document.getElementById('sidetimer-sirens-6-start'),
            resetButton: document.getElementById('timer-sirens-6-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-6-reset'),
            timeLabel: document.getElementById('timer-sirens-6'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-6'),
            sidebox: document.getElementById('sirens-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-6')
        },
        {   // [7] Wyvern
            function: function() { sirens_Countdown(7); },
            status: 0,
            cooldown: 60 * 15 + 45, 
            startButton: document.getElementById('timer-sirens-7-start'),
            startSideButton: document.getElementById('sidetimer-sirens-7-start'),
            resetButton: document.getElementById('timer-sirens-7-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-7-reset'),
            timeLabel: document.getElementById('timer-sirens-7'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-7'),
            sidebox: document.getElementById('sirens-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-7')
        },
        {   // [8] Fountainhead
            function: function() { sirens_Countdown(8); },
            status: 0,
            cooldown: 60 * 16 + 30, 
            startButton: document.getElementById('timer-sirens-8-start'),
            startSideButton: document.getElementById('sidetimer-sirens-8-start'),
            resetButton: document.getElementById('timer-sirens-8-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-8-reset'),
            timeLabel: document.getElementById('timer-sirens-8'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-8'),
            sidebox: document.getElementById('sirens-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-8')
        },
        {   // [9] Chaotic Distortion
            function: function() { sirens_Countdown(9); },
            status: 0,
            cooldown: 60 * 9 + 15, 
            startButton: document.getElementById('timer-sirens-9-start'),
            startSideButton: document.getElementById('sidetimer-sirens-9-start'),
            resetButton: document.getElementById('timer-sirens-9-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-9-reset'),
            timeLabel: document.getElementById('timer-sirens-9'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-9'),
            sidebox: document.getElementById('sirens-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-9')
        },
        {   // [10] Horrid Illusion
            function: function() { sirens_Countdown(10); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-sirens-10-start'),
            startSideButton: document.getElementById('sidetimer-sirens-10-start'),
            resetButton: document.getElementById('timer-sirens-10-reset'),
            resetSideButton: document.getElementById('sidetimer-sirens-10-reset'),
            timeLabel: document.getElementById('timer-sirens-10'), 
            timeSideLabel: document.getElementById('sidetimer-sirens-10'),
            sidebox: document.getElementById('sirens-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-sirens-10')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var sirens; // Empty array for countdown
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
        if (timer == sirens.events[timer_num].startButton.id || timer == sirens.events[timer_num].startSideButton.id){
            if (sirens.events[timer_num].status == 0){
                sirens.events[timer_num].status = 1; 
                sirens.events[timer_num].function(); 

                sirens.events[timer_num].startButton.value = "Reset";
                sirens.events[timer_num].startSideButton.value = "Reset";
            } else {
                sirens.events[timer_num].status = 0;
                sirens.events[timer_num].startButton.value = "Start";
                sirens.events[timer_num].startSideButton.value = "Start";

                sirens.events[timer_num].timeLabel.style.color = "black";
                sirens.events[timer_num].timeSideLabel.style.color = 'black';
                sirens.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                sirens.events[timer_num].sidebox.style.background = 'transparent';
                sirens.events[timer_num].function();
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
        if (timer == sirens.events[timer_num].resetButton.id || timer == sirens.events[timer_num].resetSideButton.id){
            if (sirens.events[timer_num].status == 1){
                sirens.events[timer_num].status = 0;
                sirens.events[timer_num].cooldown = sirens.events[timer_num].cooldown;
                sirens.events[timer_num].timeLabel.style.color = "black";

                sirens.events[timer_num].timeSideLabel.innerHTML = sirens.events[timer_num].timeLabel.innerHTML;
                sirens.events[timer_num].timeSideLabel.style.color = sirens.events[timer_num].timeLabel.style.color;

                sirens.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                sirens.events[timer_num].sidebox.style.background = "transparent";

                sirens.events[timer_num].function(); 
                sirens.events[timer_num].status = 1;
                sirens.events[timer_num].function(); 
            }
        }
    }
}

function sirens_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, sirens.events[arrayNum].cooldown, sirens.events[arrayNum].timeLabel, sirens.events[arrayNum].timeSideLabel, sirens.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(sirens.events[arrayNum].timeLabel, sirens.events[arrayNum].sidebox, sirens.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(sirens.events[arrayNum].timeLabel, sirens.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (sirens.events[arrayNum].status == 1){
        sirens[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(sirens[arrayNum]);   
    } 
}


