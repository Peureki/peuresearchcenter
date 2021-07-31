// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var cursed = {
    events: [
        {   // empty
            status: 0,
        },

        {   // [1] Champ Mage
            function: function() { cursed_Countdown(1); },
            status: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-cursed-1-start'),
            startSideButton: document.getElementById('sidetimer-cursed-1-start'),
            resetButton: document.getElementById('timer-cursed-1-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-1-reset'),
            timeLabel: document.getElementById('timer-cursed-1'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-1'),
            sidebox: document.getElementById('cursed-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-1')
        },
        {   // [2] Champ Ooze
            function: function() { cursed_Countdown(2); },
            status: 0,
            cooldown: 60 * 25 + 30, 
            startButton: document.getElementById('timer-cursed-2-start'),
            startSideButton: document.getElementById('sidetimer-cursed-2-start'),
            resetButton: document.getElementById('timer-cursed-2-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-2-reset'),
            timeLabel: document.getElementById('timer-cursed-2'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-2'),
            sidebox: document.getElementById('cursed-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-2')
        },
        {   // [3] Champ Giant
            function: function() { cursed_Countdown(3); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-cursed-3-start'),
            startSideButton: document.getElementById('sidetimer-cursed-3-start'),
            resetButton: document.getElementById('timer-cursed-3-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-3-reset'),
            timeLabel: document.getElementById('timer-cursed-3'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-3'),
            sidebox: document.getElementById('cursed-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-3')
        },
        {   // [4] Pentient Defense 
            function: function() { cursed_Countdown(4); },
            status: 0,
            cooldown: 60 * 49 + 15, 
            startButton: document.getElementById('timer-cursed-4-start'),
            startSideButton: document.getElementById('sidetimer-cursed-4-start'),
            resetButton: document.getElementById('timer-cursed-4-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-4-reset'),
            timeLabel: document.getElementById('timer-cursed-4'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-4'),
            sidebox: document.getElementById('cursed-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-4')
        },
        {   // [5] Champ Groundkeeper
            function: function() { cursed_Countdown(5); },
            status: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-cursed-5-start'),
            startSideButton: document.getElementById('sidetimer-cursed-5-start'),
            resetButton: document.getElementById('timer-cursed-5-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-5-reset'),
            timeLabel: document.getElementById('timer-cursed-5'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-5'),
            sidebox: document.getElementById('cursed-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-5')
        },
        {   // [6] Shelter's Gate
            function: function() { cursed_Countdown(6); },
            status: 0,
            cooldown: 60 * 28 + 45, 
            startButton: document.getElementById('timer-cursed-6-start'),
            startSideButton: document.getElementById('sidetimer-cursed-6-start'),
            resetButton: document.getElementById('timer-cursed-6-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-6-reset'),
            timeLabel: document.getElementById('timer-cursed-6'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-6'),
            sidebox: document.getElementById('cursed-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-6')
        },
        {   // [7] Jofast Defense
            function: function() { cursed_Countdown(7); },
            status: 0,
            cooldown: 60 * 30 + 15, 
            startButton: document.getElementById('timer-cursed-7-start'),
            startSideButton: document.getElementById('sidetimer-cursed-7-start'),
            resetButton: document.getElementById('timer-cursed-7-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-7-reset'),
            timeLabel: document.getElementById('timer-cursed-7'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-7'),
            sidebox: document.getElementById('cursed-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-7')
        },
        {   // [8] Risen King Chain
            function: function() { cursed_Countdown(8); },
            status: 0,
            cooldown: 60 * 25 + 30, 
            startButton: document.getElementById('timer-cursed-8-start'),
            startSideButton: document.getElementById('sidetimer-cursed-8-start'),
            resetButton: document.getElementById('timer-cursed-8-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-8-reset'),
            timeLabel: document.getElementById('timer-cursed-8'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-8'),
            sidebox: document.getElementById('cursed-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-8')
        },
        {   // [9] Champ Meg
            function: function() { cursed_Countdown(9); },
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-cursed-9-start'),
            startSideButton: document.getElementById('sidetimer-cursed-9-start'),
            resetButton: document.getElementById('timer-cursed-9-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-9-reset'),
            timeLabel: document.getElementById('timer-cursed-9'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-9'),
            sidebox: document.getElementById('cursed-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-9')
        },
        {   // [10] Gavbeorn Defense
            function: function() { cursed_Countdown(10); },
            status: 0,
            cooldown: 60 * 24, 
            startButton: document.getElementById('timer-cursed-10-start'),
            startSideButton: document.getElementById('sidetimer-cursed-10-start'),
            resetButton: document.getElementById('timer-cursed-10-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-10-reset'),
            timeLabel: document.getElementById('timer-cursed-10'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-10'),
            sidebox: document.getElementById('cursed-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-10')
        },
        {   // [11] Plinx
            function: function() { cursed_Countdown(11); },
            status: 0,
            cooldown: 60 * 23 + 45, 
            startButton: document.getElementById('timer-cursed-11-start'),
            startSideButton: document.getElementById('sidetimer-cursed-11-start'),
            resetButton: document.getElementById('timer-cursed-11-reset'),
            resetSideButton: document.getElementById('sidetimer-cursed-11-reset'),
            timeLabel: document.getElementById('timer-cursed-11'), 
            timeSideLabel: document.getElementById('sidetimer-cursed-11'),
            sidebox: document.getElementById('cursed-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-cursed-11')
        }, 
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var cursed; // Empty array for countdown
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
        if (timer == cursed.events[timer_num].startButton.id || timer == cursed.events[timer_num].startSideButton.id){
            if (cursed.events[timer_num].status == 0){
                cursed.events[timer_num].status = 1; 
                cursed.events[timer_num].function(); 

                cursed.events[timer_num].startButton.value = "Reset";
                cursed.events[timer_num].startSideButton.value = "Reset";
            } else {
                cursed.events[timer_num].status = 0;
                cursed.events[timer_num].startButton.value = "Start";
                cursed.events[timer_num].startSideButton.value = "Start";

                cursed.events[timer_num].timeLabel.style.color = "black";
                cursed.events[timer_num].timeSideLabel.style.color = 'black';
                cursed.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                cursed.events[timer_num].sidebox.style.background = 'transparent';
                cursed.events[timer_num].function();
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
        if (timer == cursed.events[timer_num].resetButton.id || timer == cursed.events[timer_num].resetSideButton.id){
            if (cursed.events[timer_num].status == 1){
                cursed.events[timer_num].status = 0;
                cursed.events[timer_num].cooldown = cursed.events[timer_num].cooldown;
                cursed.events[timer_num].timeLabel.style.color = "black";

                cursed.events[timer_num].timeSideLabel.innerHTML = cursed.events[timer_num].timeLabel.innerHTML;
                cursed.events[timer_num].timeSideLabel.style.color = cursed.events[timer_num].timeLabel.style.color;

                cursed.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                cursed.events[timer_num].sidebox.style.background = "transparent";

                cursed.events[timer_num].function(); 
                cursed.events[timer_num].status = 1;
                cursed.events[timer_num].function(); 
            }
        }
    }
}

function cursed_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, cursed.events[arrayNum].cooldown, cursed.events[arrayNum].timeLabel, cursed.events[arrayNum].timeSideLabel, cursed.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(cursed.events[arrayNum].timeLabel, cursed.events[arrayNum].sidebox, cursed.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(cursed.events[arrayNum].timeLabel, cursed.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (cursed.events[arrayNum].status == 1){
        cursed[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(cursed[arrayNum]);   
    } 
}


