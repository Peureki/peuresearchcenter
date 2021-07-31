// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var ember = {
    events: [
        {   // empty
            status: 0,
        },

        {   // [1] Sloth Chain
            function: function() { ember_Countdown(1); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-ember-1-start'),
            startSideButton: document.getElementById('sidetimer-ember-1-start'),
            resetButton: document.getElementById('timer-ember-1-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-1-reset'),
            timeLabel: document.getElementById('timer-ember-1'), 
            timeSideLabel: document.getElementById('sidetimer-ember-1'),
            sidebox: document.getElementById('ember-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-1')
        },
        {   // [2] Destroyer Fissure 1 NW
            function: function() { ember_Countdown(2); },
            status: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-ember-2-start'),
            startSideButton: document.getElementById('sidetimer-ember-2-start'),
            resetButton: document.getElementById('timer-ember-2-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-2-reset'),
            timeLabel: document.getElementById('timer-ember-2'), 
            timeSideLabel: document.getElementById('sidetimer-ember-2'),
            sidebox: document.getElementById('ember-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-2')
        },
        {   // [3] Destroyer Fissure 2 NE
            function: function() { ember_Countdown(3); },
            status: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-ember-3-start'),
            startSideButton: document.getElementById('sidetimer-ember-3-start'),
            resetButton: document.getElementById('timer-ember-3-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-3-reset'),
            timeLabel: document.getElementById('timer-ember-3'), 
            timeSideLabel: document.getElementById('sidetimer-ember-3'),
            sidebox: document.getElementById('ember-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-3')
        },
        {   // [4] Coal 1 SW
            function: function() { ember_Countdown(4); },
            status: 0,
            cooldown: 60 * 16 + 45, 
            startButton: document.getElementById('timer-ember-4-start'),
            startSideButton: document.getElementById('sidetimer-ember-4-start'),
            resetButton: document.getElementById('timer-ember-4-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-4-reset'),
            timeLabel: document.getElementById('timer-ember-4'), 
            timeSideLabel: document.getElementById('sidetimer-ember-4'),
            sidebox: document.getElementById('ember-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-4')
        },
        {   // [5] Coal 2 SE
            function: function() { ember_Countdown(5); },
            status: 0,
            cooldown: 60 * 16 + 45, 
            startButton: document.getElementById('timer-ember-5-start'),
            startSideButton: document.getElementById('sidetimer-ember-5-start'),
            resetButton: document.getElementById('timer-ember-5-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-5-reset'),
            timeLabel: document.getElementById('timer-ember-5'), 
            timeSideLabel: document.getElementById('sidetimer-ember-5'),
            sidebox: document.getElementById('ember-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-5')
        },
        {   // [6] Coal 3 NE
            function: function() { ember_Countdown(6); },
            status: 0,
            cooldown: 60 * 16 + 45, 
            startButton: document.getElementById('timer-ember-6-start'),
            startSideButton: document.getElementById('sidetimer-ember-6-start'),
            resetButton: document.getElementById('timer-ember-6-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-6-reset'),
            timeLabel: document.getElementById('timer-ember-6'), 
            timeSideLabel: document.getElementById('sidetimer-ember-6'),
            sidebox: document.getElementById('ember-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-6')
        },
        {   // [7] Jade
            function: function() { ember_Countdown(7); },
            status: 0,
            cooldown: 60 * 18, 
            startButton: document.getElementById('timer-ember-7-start'),
            startSideButton: document.getElementById('sidetimer-ember-7-start'),
            resetButton: document.getElementById('timer-ember-7-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-7-reset'),
            timeLabel: document.getElementById('timer-ember-7'), 
            timeSideLabel: document.getElementById('sidetimer-ember-7'),
            sidebox: document.getElementById('ember-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-7')
        },
        {   // [8] Drake
            function: function() { ember_Countdown(8); },
            status: 0,
            cooldown: 60 * 19 + 45, 
            startButton: document.getElementById('timer-ember-8-start'),
            startSideButton: document.getElementById('sidetimer-ember-8-start'),
            resetButton: document.getElementById('timer-ember-8-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-8-reset'),
            timeLabel: document.getElementById('timer-ember-8'), 
            timeSideLabel: document.getElementById('sidetimer-ember-8'),
            sidebox: document.getElementById('ember-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-8')
        },
        {   // [9] Dominator
            function: function() { ember_Countdown(9); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-ember-9-start'),
            startSideButton: document.getElementById('sidetimer-ember-9-start'),
            resetButton: document.getElementById('timer-ember-9-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-9-reset'),
            timeLabel: document.getElementById('timer-ember-9'), 
            timeSideLabel: document.getElementById('sidetimer-ember-9'),
            sidebox: document.getElementById('ember-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-9')
        },
        {   // empty
            status: 0,
        },
        {   // empty
            status: 0,
        },
        {   // [12] Karka Chain
            function: function() { ember_Countdown(12); },
            status: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-ember-12-start'),
            startSideButton: document.getElementById('sidetimer-ember-12-start'),
            resetButton: document.getElementById('timer-ember-12-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-12-reset'),
            timeLabel: document.getElementById('timer-ember-12'), 
            timeSideLabel: document.getElementById('sidetimer-ember-12'),
            sidebox: document.getElementById('ember-12-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-12')
        },
        {   // empty
            status: 0,
        },
        {   // empty
            status: 0,
        },
        {   // [15] Wurm
            function: function() { ember_Countdown(15); },
            status: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-ember-15-start'),
            startSideButton: document.getElementById('sidetimer-ember-15-start'),
            resetButton: document.getElementById('timer-ember-15-reset'),
            resetSideButton: document.getElementById('sidetimer-ember-15-reset'),
            timeLabel: document.getElementById('timer-ember-15'), 
            timeSideLabel: document.getElementById('sidetimer-ember-15'),
            sidebox: document.getElementById('ember-15-sidebox'),
            num: document.getElementById('numerical-sidetimer-ember-15')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var ember; // Empty array for countdown
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
        if (timer == ember.events[timer_num].startButton.id || timer == ember.events[timer_num].startSideButton.id){
            if (ember.events[timer_num].status == 0){
                ember.events[timer_num].status = 1; 
                ember.events[timer_num].function(); 

                ember.events[timer_num].startButton.value = "Reset";
                ember.events[timer_num].startSideButton.value = "Reset";
            } else {
                ember.events[timer_num].status = 0;
                ember.events[timer_num].startButton.value = "Start";
                ember.events[timer_num].startSideButton.value = "Start";

                ember.events[timer_num].timeLabel.style.color = "black";
                ember.events[timer_num].timeSideLabel.style.color = 'black';
                ember.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                ember.events[timer_num].sidebox.style.background = 'transparent';
                ember.events[timer_num].function();
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
        if (timer == ember.events[timer_num].resetButton.id || timer == ember.events[timer_num].resetSideButton.id){
            if (ember.events[timer_num].status == 1){
                ember.events[timer_num].status = 0;
                ember.events[timer_num].cooldown = ember.events[timer_num].cooldown;
                ember.events[timer_num].timeLabel.style.color = "black";

                ember.events[timer_num].timeSideLabel.innerHTML = ember.events[timer_num].timeLabel.innerHTML;
                ember.events[timer_num].timeSideLabel.style.color = ember.events[timer_num].timeLabel.style.color;

                ember.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                ember.events[timer_num].sidebox.style.background = "transparent";

                ember.events[timer_num].function(); 
                ember.events[timer_num].status = 1;
                ember.events[timer_num].function(); 
            }
        }
    }
}

function ember_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, ember.events[arrayNum].cooldown, ember.events[arrayNum].timeLabel, ember.events[arrayNum].timeSideLabel, ember.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(ember.events[arrayNum].timeLabel, ember.events[arrayNum].sidebox, ember.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(ember.events[arrayNum].timeLabel, ember.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (ember.events[arrayNum].status == 1){
        ember[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(ember[arrayNum]);   
    } 
}

// Checkboxes
function ember_All_Checkbox(obj){
	var checkbox = obj,
		e1 = document.getElementById('ember-1-checkbox'), 
		e6_1 = document.getElementById('ember-6-1-checkbox'),
		e6_2 = document.getElementById('ember-6-2-checkbox'),
		e7_1 = document.getElementById('ember-7-1-checkbox'),
		e7_2 = document.getElementById('ember-7-2-checkbox'),
		e7_3 = document.getElementById('ember-7-3-checkbox'),
		e9 = document.getElementById('ember-9-checkbox'),
		e12 = document.getElementById('ember-12-checkbox'),
		e15 = document.getElementById('ember-15-checkbox');

	if (checkbox.checked == true){
		e1.checked = true;
		e6_1.checked = true;
		e6_2.checked = true;
		e7_1.checked = true;
		e7_2.checked = true;
		e7_3.checked = true;
		e9.checked = true;
		e12.checked = true;
		e15.checked = true;

        ember_1_Checkbox(e1);
        ember_6_1_Checkbox(e6_1);
        ember_6_2_Checkbox(e6_2);
        ember_7_1_Checkbox(e7_1);
        ember_7_2_Checkbox(e7_2);
        ember_7_3_Checkbox(e7_3);
        ember_9_Checkbox(e9);
        ember_12_Checkbox(e12);
        ember_15_Checkbox(e15);
	} else {
		e1.checked = false;
		e6_1.checked = false;
		e6_2.checked = false;
		e7_1.checked = false;
		e7_2.checked = false;
		e7_3.checked = false;
		e9.checked = false;
		e12.checked = false;
		e15.checked = false; 

        ember_1_Checkbox(e1);
        ember_6_1_Checkbox(e6_1);
        ember_6_2_Checkbox(e6_2);
        ember_7_1_Checkbox(e7_1);
        ember_7_2_Checkbox(e7_2);
        ember_7_3_Checkbox(e7_3);
        ember_9_Checkbox(e9);
        ember_12_Checkbox(e12);
        ember_15_Checkbox(e15);
	}
}

// Sloth
function ember_1_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_1.style.display = "block";
    } else {
        sidebox_timer_ember_1.style.display = "none";
    }
}
// Fissure 1
function ember_6_1_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_6_1.style.display = "block";
    } else {
        sidebox_timer_ember_6_1.style.display = "none";
    }
}
// Fissure 1
function ember_6_2_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_6_2.style.display = "block";
    } else {
        sidebox_timer_ember_6_2.style.display = "none";
    }
}
// Coal 1
function ember_7_1_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_7_1.style.display = "block";
    } else {
        sidebox_timer_ember_7_1.style.display = "none";
    }
}
// Coal 2
function ember_7_2_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_7_2.style.display = "block";
    } else {
        sidebox_timer_ember_7_2.style.display = "none";
    }
}
// Coal 3
function ember_7_3_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_7_3.style.display = "block";
    } else {
        sidebox_timer_ember_7_3.style.display = "none";
    }
}
// Dom
function ember_9_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_9.style.display = "block";
    } else {
        sidebox_timer_ember_9.style.display = "none";
    }
}
// Karka
function ember_12_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_12.style.display = "block";
    } else {
        sidebox_timer_ember_12.style.display = "none";
    }
}
// Wurm
function ember_15_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_ember_15.style.display = "block";
    } else {
        sidebox_timer_ember_15.style.display = "none";
    }
}