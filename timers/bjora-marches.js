// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var bjora = {
    events: [
        {   // empty
            status: 0,
        },

        {   // [1] Wisp
            function: function() { bjora_Countdown(1); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-bjora-1-start'),
            startSideButton: document.getElementById('sidetimer-bjora-1-start'),
            resetButton: document.getElementById('timer-bjora-1-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-1-reset'),
            timeLabel: document.getElementById('timer-bjora-1'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-1'),
            sidebox: document.getElementById('bjora-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-1')
        }, 
        {   // [2] Pineshade
            function: function() { bjora_Countdown(2); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-bjora-2-start'),
            startSideButton: document.getElementById('sidetimer-bjora-2-start'),
            resetButton: document.getElementById('timer-bjora-2-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-2-reset'),
            timeLabel: document.getElementById('timer-bjora-2'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-2'),
            sidebox: document.getElementById('bjora-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-2')
        },
        {   // [3] Bowman
            function: function() { bjora_Countdown(3); },
            status: 0,
            cooldown: 60 * 9, 
            startButton: document.getElementById('timer-bjora-3-start'),
            startSideButton: document.getElementById('sidetimer-bjora-3-start'),
            resetButton: document.getElementById('timer-bjora-3-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-3-reset'),
            timeLabel: document.getElementById('timer-bjora-3'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-3'),
            sidebox: document.getElementById('bjora-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-3')
        },
        {   // [4] Murellow
            function: function() { bjora_Countdown(4); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-bjora-4-start'),
            startSideButton: document.getElementById('sidetimer-bjora-4-start'),
            resetButton: document.getElementById('timer-bjora-4-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-4-reset'),
            timeLabel: document.getElementById('timer-bjora-4'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-4'),
            sidebox: document.getElementById('bjora-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-4')
        },
        {   // [5] Skelk
            function: function() { bjora_Countdown(5); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-bjora-5-start'),
            startSideButton: document.getElementById('sidetimer-bjora-5-start'),
            resetButton: document.getElementById('timer-bjora-5-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-5-reset'),
            timeLabel: document.getElementById('timer-bjora-5'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-5'),
            sidebox: document.getElementById('bjora-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-5')
        },
        {   // [6] Berserker
            function: function() { bjora_Countdown(6); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-bjora-6-start'),
            startSideButton: document.getElementById('sidetimer-bjora-6-start'),
            resetButton: document.getElementById('timer-bjora-6-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-6-reset'),
            timeLabel: document.getElementById('timer-bjora-6'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-6'),
            sidebox: document.getElementById('bjora-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-6')
        },
        {   // [7] Shaman
            function: function() { bjora_Countdown(7); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-bjora-7-start'),
            startSideButton: document.getElementById('sidetimer-bjora-7-start'),
            resetButton: document.getElementById('timer-bjora-7-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-7-reset'),
            timeLabel: document.getElementById('timer-bjora-7'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-7'),
            sidebox: document.getElementById('bjora-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-7')
        },
        {   // [8] Brute
            function: function() { bjora_Countdown(8); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-bjora-8-start'),
            startSideButton: document.getElementById('sidetimer-bjora-8-start'),
            resetButton: document.getElementById('timer-bjora-8-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-8-reset'),
            timeLabel: document.getElementById('timer-bjora-8'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-8'),
            sidebox: document.getElementById('bjora-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-8')
        },
        {   // [9] Summoner
            function: function() { bjora_Countdown(9); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-bjora-9-start'),
            startSideButton: document.getElementById('sidetimer-bjora-9-start'),
            resetButton: document.getElementById('timer-bjora-9-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-9-reset'),
            timeLabel: document.getElementById('timer-bjora-9'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-9'),
            sidebox: document.getElementById('bjora-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-9')
        },
        {   // [10] Patrol NE
            function: function() { bjora_Countdown(10); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-bjora-10-start'),
            startSideButton: document.getElementById('sidetimer-bjora-10-start'),
            resetButton: document.getElementById('timer-bjora-10-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-10-reset'),
            timeLabel: document.getElementById('timer-bjora-10'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-10'),
            sidebox: document.getElementById('bjora-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-10')
        },
        {   // [11] Patrol N
            function: function() { bjora_Countdown(11); },
            status: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-bjora-11-start'),
            startSideButton: document.getElementById('sidetimer-bjora-11-start'),
            resetButton: document.getElementById('timer-bjora-11-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-11-reset'),
            timeLabel: document.getElementById('timer-bjora-11'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-11'),
            sidebox: document.getElementById('bjora-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-11')
        },
        {   // [12] Patrol S
            function: function() { bjora_Countdown(12); },
            status: 0,
            cooldown: 60 * 6, 
            startButton: document.getElementById('timer-bjora-12-start'),
            startSideButton: document.getElementById('sidetimer-bjora-12-start'),
            resetButton: document.getElementById('timer-bjora-12-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-12-reset'),
            timeLabel: document.getElementById('timer-bjora-12'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-12'),
            sidebox: document.getElementById('bjora-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-12')
        },
        {   // [13] Boneskinner
            function: function() { bjora_Countdown(13); },
            status: 0,
            cooldown: 60 * 5, 
            startButton: document.getElementById('timer-bjora-13-start'),
            startSideButton: document.getElementById('sidetimer-bjora-13-start'),
            resetButton: document.getElementById('timer-bjora-13-reset'),
            resetSideButton: document.getElementById('sidetimer-bjora-13-reset'),
            timeLabel: document.getElementById('timer-bjora-13'), 
            timeSideLabel: document.getElementById('sidetimer-bjora-13'),
            sidebox: document.getElementById('bjora-13-sidebox'),
            num: document.getElementById('numerical-sidetimer-bjora-13')
        },

    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var bjora; // Empty array for countdown
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
        if (timer == bjora.events[timer_num].startButton.id || timer == bjora.events[timer_num].startSideButton.id){
            if (bjora.events[timer_num].status == 0){
                bjora.events[timer_num].status = 1; 
                bjora.events[timer_num].function(); 

                bjora.events[timer_num].startButton.value = "Reset";
                bjora.events[timer_num].startSideButton.value = "Reset";
            } else {
                bjora.events[timer_num].status = 0;
                bjora.events[timer_num].startButton.value = "Start";
                bjora.events[timer_num].startSideButton.value = "Start";

                bjora.events[timer_num].timeLabel.style.color = "black";
                bjora.events[timer_num].timeSideLabel.style.color = 'black';
                bjora.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                bjora.events[timer_num].sidebox.style.background = 'transparent';
                bjora.events[timer_num].function();
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
        if (timer == bjora.events[timer_num].resetButton.id || timer == bjora.events[timer_num].resetSideButton.id){
            if (bjora.events[timer_num].status == 1){
                bjora.events[timer_num].status = 0;
                bjora.events[timer_num].cooldown = bjora.events[timer_num].cooldown;
                bjora.events[timer_num].timeLabel.style.color = "black";

                bjora.events[timer_num].timeSideLabel.innerHTML = bjora.events[timer_num].timeLabel.innerHTML;
                bjora.events[timer_num].timeSideLabel.style.color = bjora.events[timer_num].timeLabel.style.color;

                bjora.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                bjora.events[timer_num].sidebox.style.background = "transparent";

                bjora.events[timer_num].function(); 
                bjora.events[timer_num].status = 1;
                bjora.events[timer_num].function(); 
            }
        }
    }
}

function bjora_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, bjora.events[arrayNum].cooldown, bjora.events[arrayNum].timeLabel, bjora.events[arrayNum].timeSideLabel, bjora.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(bjora.events[arrayNum].timeLabel, bjora.events[arrayNum].sidebox, bjora.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(bjora.events[arrayNum].timeLabel, bjora.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (bjora.events[arrayNum].status == 1){
        bjora[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(bjora[arrayNum]);   
    } 
}


