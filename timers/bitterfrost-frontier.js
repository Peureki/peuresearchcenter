// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var bitterfrost = {
    events: [
        {   // empty
            status: 0,
        },

        {   // [1] Beacons of Koda Meta
            function: function() { bitterfrost_Countdown(1); },
            status: 0,
            cooldown: 60 * 52, 
            startButton: document.getElementById('timer-bitterfrost-1-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-1-start'),
            resetButton: document.getElementById('timer-bitterfrost-1-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-1-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-1'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-1'),
            sidebox: document.getElementById('bitterfrost-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-1')
        },
        {   // [2] Vet Wolf
            function: function() { bitterfrost_Countdown(2); },
            status: 0,
            cooldown: 60 * 9 + 45, 
            startButton: document.getElementById('timer-bitterfrost-2-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-2-start'),
            resetButton: document.getElementById('timer-bitterfrost-2-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-2-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-2'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-2'),
            sidebox: document.getElementById('bitterfrost-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-2')
        },
        {   // empty
            status: 0,
        },
        {   // [4] Svanir Tyrant
            function: function() { bitterfrost_Countdown(4); },
            status: 0,
            cooldown: 60 * 9 + 45, 
            startButton: document.getElementById('timer-bitterfrost-4-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-4-start'),
            resetButton: document.getElementById('timer-bitterfrost-4-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-4-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-4'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-4'),
            sidebox: document.getElementById('bitterfrost-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-4')
        },
        {   // empty
            status: 0,
        },
        {   // [6] Griffon Chicks
            function: function() { bitterfrost_Countdown(6); },
            status: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-bitterfrost-6-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-6-start'),
            resetButton: document.getElementById('timer-bitterfrost-6-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-6-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-6'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-6'),
            sidebox: document.getElementById('bitterfrost-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-6')
        },
        {   // empty
            status: 0,
        },
        {   // [8] Chokocooka
            function: function() { bitterfrost_Countdown(8); },
            name: "Chokocooka",
            status: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-bitterfrost-8-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-8-start'),
            resetButton: document.getElementById('timer-bitterfrost-8-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-8-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-8'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-8'),
            sidebox: document.getElementById('bitterfrost-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-8'),
            infoBox: document.getElementById('bitterfrost-8-info-box-1'),
            infoText: document.getElementById('bitterfrost-8-info-box-1-text')
        },
        {   // empty
            status: 0,
        },
        {   // [10] Quaggan Bath
            function: function() { bitterfrost_Countdown(10); },
            name: "Quaggan Bath",
            status: 0,
            cooldown: 60 * 11, 
            startButton: document.getElementById('timer-bitterfrost-10-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-10-start'),
            resetButton: document.getElementById('timer-bitterfrost-10-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-10-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-10'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-10'),
            sidebox: document.getElementById('bitterfrost-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-10'),
            infoBox: document.getElementById('bitterfrost-10-info-box-1'),
            infoText: document.getElementById('bitterfrost-10-info-box-1-text')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var bitterfrost; // Empty array for countdown
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
        if (timer == bitterfrost.events[timer_num].startButton.id || timer == bitterfrost.events[timer_num].startSideButton.id){
            if (bitterfrost.events[timer_num].status == 0){
                bitterfrost.events[timer_num].status = 1; 
                bitterfrost.events[timer_num].function(); 

                bitterfrost.events[timer_num].startButton.value = "Reset";
                bitterfrost.events[timer_num].startSideButton.value = "Reset";
            } else {
                bitterfrost.events[timer_num].status = 0;
                bitterfrost.events[timer_num].startButton.value = "Start";
                bitterfrost.events[timer_num].startSideButton.value = "Start";

                bitterfrost.events[timer_num].timeLabel.style.color = "black";
                bitterfrost.events[timer_num].timeSideLabel.style.color = 'black';
                bitterfrost.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                bitterfrost.events[timer_num].sidebox.style.background = 'transparent';
                bitterfrost.events[timer_num].function();
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
        if (timer == bitterfrost.events[timer_num].resetButton.id || timer == bitterfrost.events[timer_num].resetSideButton.id){
            switch (bitterfrost.events[timer_num].name){
                case "Chokocooka":
                    bitterfrost.events[timer_num].infoBox.style.opacity = 0; 
                    do_Restart(timer_num); 
                    break;
                case "Quaggan Bath":
                    bitterfrost.events[timer_num].infoBox.style.opacity = 0; 
                    do_Restart(timer_num);
                    break;
                default:
                    do_Restart(timer_num);
            }
            
        }
    }

    function do_Restart(timer_num){
        if (bitterfrost.events[timer_num].status == 1){
            bitterfrost.events[timer_num].status = 0;
            bitterfrost.events[timer_num].cooldown = bitterfrost.events[timer_num].cooldown;
            bitterfrost.events[timer_num].timeLabel.style.color = "black";

            bitterfrost.events[timer_num].timeSideLabel.innerHTML = bitterfrost.events[timer_num].timeLabel.innerHTML;
            bitterfrost.events[timer_num].timeSideLabel.style.color = bitterfrost.events[timer_num].timeLabel.style.color;

            bitterfrost.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
            bitterfrost.events[timer_num].sidebox.style.background = "transparent";

            bitterfrost.events[timer_num].function(); 
            bitterfrost.events[timer_num].status = 1;
            bitterfrost.events[timer_num].function(); 
        }
    }
}

function bitterfrost_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, bitterfrost.events[arrayNum].cooldown, bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].timeSideLabel, bitterfrost.events[arrayNum].num);

        // When events have pre-events that could be in replacement of the actual event 
        switch(bitterfrost.events[arrayNum].name){
            case "Chokocooka": 
                if (countdown.time <= -60){
                    bitterfrost.events[arrayNum].infoBox.style.background = fail_color; 
                    bitterfrost.events[arrayNum].infoText.innerHTML = "If none present, gathering event is back!";
                } else if (countdown.time <= 90){
                    bitterfrost.events[arrayNum].infoBox.style.background = ready_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event up if gathering succeeded!";
                } else if (countdown.time <= 150){
                    bitterfrost.events[arrayNum].infoBox.style.opacity = 1;
                    bitterfrost.events[arrayNum].infoBox.style.background = soon_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event upcoming if gathering succeeded!";
                }
            break; 

            case "Quaggan Bath":
                if (countdown.time <= 240){
                    bitterfrost.events[arrayNum].infoBox.style.background = fail_color; 
                    bitterfrost.events[arrayNum].infoText.innerHTML = "If none present, Icebrood have taken over!";
                } else if (countdown.time <= 360){
                    bitterfrost.events[arrayNum].infoBox.style.background = ready_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event up if Icebrood was cleared!";
                } else if (countdown.time <= 420){
                    // 5:00 between completing corruption -> quaggan bath. 11:00 - 5:00 = 6:00 -> 420 (+ 1 minute warning)
                    bitterfrost.events[arrayNum].infoBox.style.opacity = 1;
                    bitterfrost.events[arrayNum].infoBox.style.background = soon_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event upcoming if Icebrood was cleared!";
                }
            break;
            
        } 
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].sidebox, bitterfrost.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].sidebox);
        } else if (countdown.time < bitterfrost.events[arrayNum].cooldown){
            start_countdown_color(bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].timeSideLabel);
        }
    }
    run_countdown(); 
    if (bitterfrost.events[arrayNum].status == 1){
        bitterfrost[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(bitterfrost[arrayNum]);   
    } 
}


