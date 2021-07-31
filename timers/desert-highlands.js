// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var desert = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Choya
            function: function() { desert_Countdown(1); },
            status: 0,
            cooldown: 60 * 16 + 30, 
            startButton: document.getElementById('timer-desert-1-start'),
            startSideButton: document.getElementById('sidetimer-desert-1-start'),
            resetButton: document.getElementById('timer-desert-1-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-1-reset'),
            timeLabel: document.getElementById('timer-desert-1'), 
            timeSideLabel: document.getElementById('sidetimer-desert-1'),
            textLabel: document.getElementById('timer-desert-1-text'),
            sidebox: document.getElementById('desert-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-1')
        },
        {   // [2] Sand Shark
            function: function() { desert_Countdown(2); },
            status: 0,
            cooldown: 60 * 17 + 15, 
            startButton: document.getElementById('timer-desert-2-start'),
            startSideButton: document.getElementById('sidetimer-desert-2-start'),
            resetButton: document.getElementById('timer-desert-2-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-2-reset'),
            timeLabel: document.getElementById('timer-desert-2'), 
            timeSideLabel: document.getElementById('sidetimer-desert-2'),
            textLabel: document.getElementById('timer-desert-2-text'),
            sidebox: document.getElementById('desert-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-2')
        },
        {   // [3] Sand Eel
            function: function() { desert_Countdown(3); },
            status: 0,
            cooldown: 60 * 18 + 15, 
            startButton: document.getElementById('timer-desert-3-start'),
            startSideButton: document.getElementById('sidetimer-desert-3-start'),
            resetButton: document.getElementById('timer-desert-3-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-3-reset'),
            timeLabel: document.getElementById('timer-desert-3'), 
            timeSideLabel: document.getElementById('sidetimer-desert-3'),
            textLabel: document.getElementById('timer-desert-3-text'),
            sidebox: document.getElementById('desert-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-3')
        },
        {   // [4] Yumma Escort
            function: function() { desert_Countdown(4); },
            status: 0,
            cooldown: 60 * 17 + 45, 
            startButton: document.getElementById('timer-desert-4-start'),
            startSideButton: document.getElementById('sidetimer-desert-4-start'),
            resetButton: document.getElementById('timer-desert-4-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-4-reset'),
            timeLabel: document.getElementById('timer-desert-4'), 
            timeSideLabel: document.getElementById('sidetimer-desert-4'),
            textLabel: document.getElementById('timer-desert-4-text'),
            sidebox: document.getElementById('desert-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-4')
        },
        {   // [5] Yumug Escort
            function: function() { desert_Countdown(5); },
            status: 0,
            cooldown: 60 * 20 + 45, 
            startButton: document.getElementById('timer-desert-5-start'),
            startSideButton: document.getElementById('sidetimer-desert-5-start'),
            resetButton: document.getElementById('timer-desert-5-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-5-reset'),
            timeLabel: document.getElementById('timer-desert-5'), 
            timeSideLabel: document.getElementById('sidetimer-desert-5'),
            textLabel: document.getElementById('timer-desert-5-text'),
            sidebox: document.getElementById('desert-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-5')
        },
        {   // [6] Nayim Chain
            function: function() { desert_Countdown(6); },
            status: 0,
            cooldown: 60 * 46 + 30, 
            startButton: document.getElementById('timer-desert-6-start'),
            startSideButton: document.getElementById('sidetimer-desert-6-start'),
            resetButton: document.getElementById('timer-desert-6-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-6-reset'),
            timeLabel: document.getElementById('timer-desert-6'), 
            timeSideLabel: document.getElementById('sidetimer-desert-6'),
            textLabel: document.getElementById('timer-desert-6-text'),
            sidebox: document.getElementById('desert-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-6')
        },
        {   // [7] Asho Escort
            function: function() { desert_Countdown(7); },
            status: 0,
            cooldown: 60 * 17 + 30, 
            startButton: document.getElementById('timer-desert-7-start'),
            startSideButton: document.getElementById('sidetimer-desert-7-start'),
            resetButton: document.getElementById('timer-desert-7-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-7-reset'),
            timeLabel: document.getElementById('timer-desert-7'), 
            timeSideLabel: document.getElementById('sidetimer-desert-7'),
            textLabel: document.getElementById('timer-desert-7-text'),
            sidebox: document.getElementById('desert-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-7')
        },
        {   // [8] Mordant Crescent
            function: function() { desert_Countdown(8); },
            status: 0,
            cooldown: 60 * 51 + 30, 
            startButton: document.getElementById('timer-desert-8-start'),
            startSideButton: document.getElementById('sidetimer-desert-8-start'),
            resetButton: document.getElementById('timer-desert-8-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-8-reset'),
            timeLabel: document.getElementById('timer-desert-8'), 
            timeSideLabel: document.getElementById('sidetimer-desert-8'),
            textLabel: document.getElementById('timer-desert-8-text'),
            sidebox: document.getElementById('desert-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-8')
        },
        {   // [9] Ogre Escort
            function: function() { desert_Countdown(9); },
            status: 0,
            cooldown: 60 * 6 + 15, 
            startButton: document.getElementById('timer-desert-9-start'),
            startSideButton: document.getElementById('sidetimer-desert-9-start'),
            resetButton: document.getElementById('timer-desert-9-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-9-reset'),
            timeLabel: document.getElementById('timer-desert-9'), 
            timeSideLabel: document.getElementById('sidetimer-desert-9'),
            textLabel: document.getElementById('timer-desert-9-text'),
            sidebox: document.getElementById('desert-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-9')
        },
        {   // [10] Dameer Escort
            function: function() { desert_Countdown(10); },
            status: 0,
            cooldown: 60 * 17 + 30, 
            startButton: document.getElementById('timer-desert-10-start'),
            startSideButton: document.getElementById('sidetimer-desert-10-start'),
            resetButton: document.getElementById('timer-desert-10-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-10-reset'),
            timeLabel: document.getElementById('timer-desert-10'), 
            timeSideLabel: document.getElementById('sidetimer-desert-10'),
            textLabel: document.getElementById('timer-desert-10-text'),
            sidebox: document.getElementById('desert-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-10')
        },
        {   // [11] Forged Tormenter
            function: function() { desert_Countdown(11); },
            status: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-desert-11-start'),
            startSideButton: document.getElementById('sidetimer-desert-11-start'),
            resetButton: document.getElementById('timer-desert-11-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-11-reset'),
            timeLabel: document.getElementById('timer-desert-11'), 
            timeSideLabel: document.getElementById('sidetimer-desert-11'),
            textLabel: document.getElementById('timer-desert-11-text'),
            sidebox: document.getElementById('desert-11-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-11')
        },
        {   // [12] Hostages
            function: function() { desert_Countdown(12); },
            status: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-desert-12-start'),
            startSideButton: document.getElementById('sidetimer-desert-12-start'),
            resetButton: document.getElementById('timer-desert-12-reset'),
            resetSideButton: document.getElementById('sidetimer-desert-12-reset'),
            timeLabel: document.getElementById('timer-desert-12'), 
            timeSideLabel: document.getElementById('sidetimer-desert-12'),
            textLabel: document.getElementById('timer-desert-12-text'),
            sidebox: document.getElementById('desert-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-desert-12')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var desert; // Empty array for countdown
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
        if (timer == desert.events[timer_num].startButton.id || timer == desert.events[timer_num].startSideButton.id){
            if (desert.events[timer_num].status == 0){
                desert.events[timer_num].status = 1; 
                desert.events[timer_num].function(); 

                desert.events[timer_num].startButton.value = "Reset";
                desert.events[timer_num].startSideButton.value = "Reset";
            } else {
                desert.events[timer_num].status = 0;
                desert.events[timer_num].startButton.value = "Start";
                desert.events[timer_num].startSideButton.value = "Start";

                desert.events[timer_num].timeLabel.style.color = "black";
                desert.events[timer_num].timeSideLabel.style.color = 'black';
                desert.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                desert.events[timer_num].sidebox.style.background = 'transparent';
                desert.events[timer_num].function();
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
        if (timer == desert.events[timer_num].resetButton.id || timer == desert.events[timer_num].resetSideButton.id){
            if (desert.events[timer_num].status == 1){
                desert.events[timer_num].status = 0;
                desert.events[timer_num].cooldown = desert.events[timer_num].cooldown;
                desert.events[timer_num].timeLabel.style.color = "black";

                desert.events[timer_num].timeSideLabel.innerHTML = desert.events[timer_num].timeLabel.innerHTML;
                desert.events[timer_num].timeSideLabel.style.color = desert.events[timer_num].timeLabel.style.color;

                desert.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                desert.events[timer_num].sidebox.style.background = "transparent";

                // For events with different initial spawn and respawn rates 
                switch (desert.events[timer_num].name){
                    case "Blighted Saplings":
                    desert.events[timer_num].cooldown = 60 * 8 + 30; 
                    break;

                    case "Wyvern":
                    desert.events[timer_num].cooldown = 60 * 11;
                    break;

                    case "Ooze":
                    desert.events[timer_num].cooldown = 60 * 14; 
                    break;

                    case "Tendril":
                    desert.events[timer_num].cooldown = 60 * 10 + 15;
                    break;
                }

                desert.events[timer_num].function(); 
                desert.events[timer_num].status = 1;
                desert.events[timer_num].function(); 
            }
        }
    }
}

function desert_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, desert.events[arrayNum].cooldown, desert.events[arrayNum].timeLabel, desert.events[arrayNum].timeSideLabel, desert.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(desert.events[arrayNum].timeLabel, desert.events[arrayNum].sidebox, desert.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(desert.events[arrayNum].timeLabel, desert.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (desert.events[arrayNum].status == 1){
        desert[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(desert[arrayNum]);   
    } 
}


