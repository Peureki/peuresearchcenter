// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var sandswept = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Gathering Storms Meta
            function: function() { sandswept_Countdown(1); },
            status: 0,
            cooldown: 60 * 33, 
            startButton: document.getElementById('timer-sandswept-1-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-1-start'),
            resetButton: document.getElementById('timer-sandswept-1-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-1-reset'),
            timeLabel: document.getElementById('timer-sandswept-1'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-1'),
            sidebox: document.getElementById('sandswept-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-1')
        }, 

        {   // [2] Specimen Chamber Meta
            function: function() { sandswept_Countdown(2); },
            status: 0,
            cooldown: 60 * 40, 
            startButton: document.getElementById('timer-sandswept-2-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-2-start'),
            resetButton: document.getElementById('timer-sandswept-2-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-2-reset'),
            timeLabel: document.getElementById('timer-sandswept-2'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-2'),
            sidebox: document.getElementById('sandswept-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-2')
        }, 
        {   // [3] Dominus Crystallum
            function: function() { sandswept_Countdown(3); },
            status: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-sandswept-3-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-3-start'),
            resetButton: document.getElementById('timer-sandswept-3-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-3-reset'),
            timeLabel: document.getElementById('timer-sandswept-3'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-3'),
            sidebox: document.getElementById('sandswept-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-3')
        },
        {   // [4] Inquest Portal
            function: function() { sandswept_Countdown(4); },
            status: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-sandswept-4-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-4-start'),
            resetButton: document.getElementById('timer-sandswept-4-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-4-reset'),
            timeLabel: document.getElementById('timer-sandswept-4'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-4'),
            sidebox: document.getElementById('sandswept-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-4')
        },
        {   // [5] Mark III 
            function: function() { sandswept_Countdown(5); },
            status: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-sandswept-5-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-5-start'),
            resetButton: document.getElementById('timer-sandswept-5-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-5-reset'),
            timeLabel: document.getElementById('timer-sandswept-5'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-5'),
            sidebox: document.getElementById('sandswept-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-5')
        },
        {   // [6] Awakened Patrol
            function: function() { sandswept_Countdown(6); },
            status: 0,
            cooldown: 60 * 8 + 30, 
            startButton: document.getElementById('timer-sandswept-6-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-6-start'),
            resetButton: document.getElementById('timer-sandswept-6-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-6-reset'),
            timeLabel: document.getElementById('timer-sandswept-6'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-6'),
            sidebox: document.getElementById('sandswept-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-6')
        },
        {   // [7] Marmoxes
            function: function() { sandswept_Countdown(7); },
            status: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-sandswept-7-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-7-start'),
            resetButton: document.getElementById('timer-sandswept-7-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-7-reset'),
            timeLabel: document.getElementById('timer-sandswept-7'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-7'),
            sidebox: document.getElementById('sandswept-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-7')
        },
        {   // [8] Scarab
            function: function() { sandswept_Countdown(8); },
            status: 0,
            cooldown: 60 * 23, 
            startButton: document.getElementById('timer-sandswept-8-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-8-start'),
            resetButton: document.getElementById('timer-sandswept-8-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-8-reset'),
            timeLabel: document.getElementById('timer-sandswept-8'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-8'),
            sidebox: document.getElementById('sandswept-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-8')
        },
        {   // [9] Inquest Data
            function: function() { sandswept_Countdown(9); },
            status: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-sandswept-9-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-9-start'),
            resetButton: document.getElementById('timer-sandswept-9-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-9-reset'),
            timeLabel: document.getElementById('timer-sandswept-9'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-9'),
            sidebox: document.getElementById('sandswept-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-9')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var sandswept; // Empty array for countdown
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
        if (timer == sandswept.events[timer_num].startButton.id || timer == sandswept.events[timer_num].startSideButton.id){
            if (sandswept.events[timer_num].status == 0){
                sandswept.events[timer_num].status = 1; 
                sandswept.events[timer_num].function(); 

                sandswept.events[timer_num].startButton.value = "Reset";
                sandswept.events[timer_num].startSideButton.value = "Reset";
            } else {
                sandswept.events[timer_num].status = 0;
                sandswept.events[timer_num].startButton.value = "Start";
                sandswept.events[timer_num].startSideButton.value = "Start";

                sandswept.events[timer_num].timeLabel.style.color = "black";
                sandswept.events[timer_num].timeSideLabel.style.color = 'black';
                sandswept.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                sandswept.events[timer_num].sidebox.style.background = 'transparent';
                sandswept.events[timer_num].function();
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
        if (timer == sandswept.events[timer_num].resetButton.id || timer == sandswept.events[timer_num].resetSideButton.id){
            if (sandswept.events[timer_num].status == 1){
                sandswept.events[timer_num].status = 0;
                sandswept.events[timer_num].cooldown = sandswept.events[timer_num].cooldown;
                sandswept.events[timer_num].timeLabel.style.color = "black";

                sandswept.events[timer_num].timeSideLabel.innerHTML = sandswept.events[timer_num].timeLabel.innerHTML;
                sandswept.events[timer_num].timeSideLabel.style.color = sandswept.events[timer_num].timeLabel.style.color;

                sandswept.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                sandswept.events[timer_num].sidebox.style.background = "transparent";

                sandswept.events[timer_num].function(); 
                sandswept.events[timer_num].status = 1;
                sandswept.events[timer_num].function(); 
            }
        }
    }
}

function sandswept_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, sandswept.events[arrayNum].cooldown, sandswept.events[arrayNum].timeLabel, sandswept.events[arrayNum].timeSideLabel, sandswept.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(sandswept.events[arrayNum].timeLabel, sandswept.events[arrayNum].sidebox, sandswept.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(sandswept.events[arrayNum].timeLabel, sandswept.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (sandswept.events[arrayNum].status == 1){
        sandswept[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(sandswept[arrayNum]);   
    } 
}

// Checkboxes
function sandswept_All_Checkbox(obj){
    var checkbox = obj,
        north = document.getElementById('sandswept-north-meta-checkbox'),
        south = document.getElementById('sandswept-south-meta-checkbox'),
        s2 = document.getElementById('sandswept-2-checkbox'),
        s3 = document.getElementById('sandswept-3-checkbox'),
        s4 = document.getElementById('sandswept-4-checkbox'),
        s6 = document.getElementById('sandswept-6-checkbox'),
        //s10 = document.getElementById('sandswept-10-checkbox'),
        s12 = document.getElementById('sandswept-12-checkbox'),
        s17 = document.getElementById('sandswept-17-checkbox');

    if (checkbox.checked == true){
        north.checked = true;
        south.checked = true;
        s2.checked = true; 
        s3.checked = true; 
        s4.checked = true; 
        s6.checked = true; 
       // s10.checked = true; 
        s12.checked = true; 
        s17.checked = true; 

        sandswept_North_Meta_Checkbox(north);
        sandswept_South_Meta_Checkbox(south);
        sandswept_2_Checkbox(s2);
        sandswept_3_Checkbox(s3);
        sandswept_4_Checkbox(s4);
        sandswept_6_Checkbox(s6);
        //sandswept_10_Checkbox(s10);
        sandswept_12_Checkbox(s12);
        sandswept_17_Checkbox(s17);
    } else {
        north.checked = false;
        south.checked = false;
        s2.checked = false; 
        s3.checked = false; 
        s4.checked = false; 
        s6.checked = false; 
        //s10.checked = false; 
        s12.checked = false; 
        s17.checked = false; 

        sandswept_North_Meta_Checkbox(north);
        sandswept_South_Meta_Checkbox(south);
        sandswept_2_Checkbox(s2);
        sandswept_3_Checkbox(s3);
        sandswept_4_Checkbox(s4);
        sandswept_6_Checkbox(s6);
        //sandswept_10_Checkbox(s10);
        sandswept_12_Checkbox(s12);
        sandswept_17_Checkbox(s17);
    }
}
function sandswept_North_Meta_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_north_meta.style.display = "block";
    } else {
        sidebox_timer_sandswept_north_meta.style.display = "none";
    }
}
function sandswept_South_Meta_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_south_meta.style.display = "block";
    } else {
        sidebox_timer_sandswept_south_meta.style.display = "none";
    }
}

function sandswept_2_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_2.style.display = "block";
    } else {
        sidebox_timer_sandswept_2.style.display = "none";
    }
}
function sandswept_3_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_3.style.display = "block";
    } else {
        sidebox_timer_sandswept_3.style.display = "none";
    }
}
function sandswept_4_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_4.style.display = "block";
    } else {
        sidebox_timer_sandswept_4.style.display = "none";
    }
}
function sandswept_6_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_6.style.display = "block";
    } else {
        sidebox_timer_sandswept_6.style.display = "none";
    }
}
/*
function sandswept_10_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_10.style.display = "block";
    } else {
        sidebox_timer_sandswept_10.style.display = "none";
    }
}*/
function sandswept_12_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_12.style.display = "block";
    } else {
        sidebox_timer_sandswept_12.style.display = "none";
    }
}
function sandswept_17_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_sandswept_17.style.display = "block";
    } else {
        sidebox_timer_sandswept_17.style.display = "none";
    }
}
// Deselect all bounties
function sandswept_Deselect(obj){
    var elem;
    for (i = 3; i <= 12; i++){
        for (j = 1; j <= 3; j++){
            elem = document.getElementById('sandswept-bounty-'+i+'-'+j+'-checkbox');
            elem.checked = false;

            window["sandswept_Bounty_"+i+"_Checkbox"](elem);
        }
    }
    var elem1 = document.getElementById('sandswept-bounty-1-checkbox').checked = false; 
    var elem2 = document.getElementById('sandswept-bounty-2-checkbox').checked = false;

    sandswept_Bounty_1_Checkbox(elem1);
    sandswept_Bounty_2_Checkbox(elem2);
}

// Bounty checkboxes
// Starcaller
function sandswept_Bounty_1_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('sandswept-bounty-target-1'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}
// Seneb
function sandswept_Bounty_2_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('sandswept-bounty-target-17'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}
// Ironshell
function sandswept_Bounty_3_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-2'),
        bounty_2 = document.getElementById('sandswept-bounty-target-3'),
        bounty_3 = document.getElementById('sandswept-bounty-target-4'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-3-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-3-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-3-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-3-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-3-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-3-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Oakenscorn
function sandswept_Bounty_4_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-5'),
        bounty_2 = document.getElementById('sandswept-bounty-target-6'),
        bounty_3 = document.getElementById('sandswept-bounty-target-7'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-4-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-4-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-4-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-4-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-4-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-4-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Old Stonehoof
function sandswept_Bounty_5_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-8'),
        bounty_2 = document.getElementById('sandswept-bounty-target-9'),
        bounty_3 = document.getElementById('sandswept-bounty-target-10'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-5-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-5-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-5-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-5-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-5-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-5-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Exterminator
function sandswept_Bounty_6_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-11'),
        bounty_2 = document.getElementById('sandswept-bounty-target-12'),
        bounty_3 = document.getElementById('sandswept-bounty-target-13'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-6-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-6-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-6-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-6-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-6-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-6-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Emogg
function sandswept_Bounty_7_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-14'),
        bounty_2 = document.getElementById('sandswept-bounty-target-15'),
        bounty_3 = document.getElementById('sandswept-bounty-target-16'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-7-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-7-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-7-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-7-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-7-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-7-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Magneton
function sandswept_Bounty_8_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-18'),
        bounty_2 = document.getElementById('sandswept-bounty-target-19'),
        bounty_3 = document.getElementById('sandswept-bounty-target-20'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-8-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-8-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-8-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-8-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-8-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-8-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Prickly Pair
function sandswept_Bounty_9_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-21'),
        bounty_2 = document.getElementById('sandswept-bounty-target-22'),
        bounty_3 = document.getElementById('sandswept-bounty-target-23'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-9-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-9-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-9-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-9-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-9-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-9-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Nepheretes
function sandswept_Bounty_10_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-24'),
        bounty_2 = document.getElementById('sandswept-bounty-target-25'),
        bounty_3 = document.getElementById('sandswept-bounty-target-26'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-10-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-10-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-10-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-10-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-10-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-10-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Vebis
function sandswept_Bounty_11_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-27'),
        bounty_2 = document.getElementById('sandswept-bounty-target-28'),
        bounty_3 = document.getElementById('sandswept-bounty-target-29'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-11-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-11-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-11-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-11-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-11-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-11-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Crystalwing
function sandswept_Bounty_12_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-30'),
        bounty_2 = document.getElementById('sandswept-bounty-target-31'),
        bounty_3 = document.getElementById('sandswept-bounty-target-32'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-12-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-12-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-12-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-12-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-12-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-12-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}


