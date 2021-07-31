// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var kourna = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Researcher Siris
            function: function() { kourna_Countdown(1); },
            status: 0,
            cooldown: 60 * 8 + 30, 
            startButton: document.getElementById('timer-kourna-1-start'),
            startSideButton: document.getElementById('sidetimer-kourna-1-start'),
            resetButton: document.getElementById('timer-kourna-1-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-1-reset'),
            timeLabel: document.getElementById('timer-kourna-1'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-1'),
            sidebox: document.getElementById('kourna-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-1')
        }, 
        {   // [2] Researcher Emm
            function: function() { kourna_Countdown(2); },
            status: 0,
            cooldown: 60 * 8 + 30, 
            startButton: document.getElementById('timer-kourna-2-start'),
            startSideButton: document.getElementById('sidetimer-kourna-2-start'),
            resetButton: document.getElementById('timer-kourna-2-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-2-reset'),
            timeLabel: document.getElementById('timer-kourna-2'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-2'),
            sidebox: document.getElementById('kourna-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-2')
        }, 
        {   // [3] Champ Shark
            function: function() { kourna_Countdown(3); },
            status: 0,
            cooldown: 60 * 13 + 30, 
            startButton: document.getElementById('timer-kourna-3-start'),
            startSideButton: document.getElementById('sidetimer-kourna-3-start'),
            resetButton: document.getElementById('timer-kourna-3-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-3-reset'),
            timeLabel: document.getElementById('timer-kourna-3'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-3'),
            sidebox: document.getElementById('kourna-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-3')
        },
        {   // [4] Choya Chieftain
            function: function() { kourna_Countdown(4); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-kourna-4-start'),
            startSideButton: document.getElementById('sidetimer-kourna-4-start'),
            resetButton: document.getElementById('timer-kourna-4-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-4-reset'),
            timeLabel: document.getElementById('timer-kourna-4'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-4'),
            sidebox: document.getElementById('kourna-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-4')
        }, 
        {   // [5] Cannons
            function: function() { kourna_Countdown(5); },
            status: 0,
            cooldown: 60 * 5 + 30, 
            startButton: document.getElementById('timer-kourna-5-start'),
            startSideButton: document.getElementById('sidetimer-kourna-5-start'),
            resetButton: document.getElementById('timer-kourna-5-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-5-reset'),
            timeLabel: document.getElementById('timer-kourna-5'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-5'),
            sidebox: document.getElementById('kourna-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-5')
        }, 
        {   // [6] Inquest Lab
            function: function() { kourna_Countdown(6); },
            status: 0,
            cooldown: 60 * 13 + 30, 
            startButton: document.getElementById('timer-kourna-6-start'),
            startSideButton: document.getElementById('sidetimer-kourna-6-start'),
            resetButton: document.getElementById('timer-kourna-6-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-6-reset'),
            timeLabel: document.getElementById('timer-kourna-6'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-6'),
            sidebox: document.getElementById('kourna-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-6')
        }, 
        {   // [7] Researcher Maggin
            function: function() { kourna_Countdown(7); },
            status: 0,
            cooldown: 60 * 8, 
            startButton: document.getElementById('timer-kourna-7-start'),
            startSideButton: document.getElementById('sidetimer-kourna-7-start'),
            resetButton: document.getElementById('timer-kourna-7-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-7-reset'),
            timeLabel: document.getElementById('timer-kourna-7'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-7'),
            sidebox: document.getElementById('kourna-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-7')
        }, 
        {   // [8] Scarab Plague Meta
            function: function() { kourna_Countdown(8); },
            status: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-kourna-8-start'),
            startSideButton: document.getElementById('sidetimer-kourna-8-start'),
            resetButton: document.getElementById('timer-kourna-8-reset'),
            resetSideButton: document.getElementById('sidetimer-kourna-8-reset'),
            timeLabel: document.getElementById('timer-kourna-8'), 
            timeSideLabel: document.getElementById('sidetimer-kourna-8'),
            sidebox: document.getElementById('kourna-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-kourna-8')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var kourna; // Empty array for countdown
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
        if (timer == kourna.events[timer_num].startButton.id || timer == kourna.events[timer_num].startSideButton.id){
            if (kourna.events[timer_num].status == 0){
                kourna.events[timer_num].status = 1; 
                kourna.events[timer_num].function(); 

                kourna.events[timer_num].startButton.value = "Reset";
                kourna.events[timer_num].startSideButton.value = "Reset";
            } else {
                kourna.events[timer_num].status = 0;
                kourna.events[timer_num].startButton.value = "Start";
                kourna.events[timer_num].startSideButton.value = "Start";

                kourna.events[timer_num].timeLabel.style.color = "black";
                kourna.events[timer_num].timeSideLabel.style.color = 'black';
                kourna.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                kourna.events[timer_num].sidebox.style.background = 'transparent';
                kourna.events[timer_num].function();
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
        if (timer == kourna.events[timer_num].resetButton.id || timer == kourna.events[timer_num].resetSideButton.id){
            if (kourna.events[timer_num].status == 1){
                kourna.events[timer_num].status = 0;
                kourna.events[timer_num].cooldown = kourna.events[timer_num].cooldown;
                kourna.events[timer_num].timeLabel.style.color = "black";

                kourna.events[timer_num].timeSideLabel.innerHTML = kourna.events[timer_num].timeLabel.innerHTML;
                kourna.events[timer_num].timeSideLabel.style.color = kourna.events[timer_num].timeLabel.style.color;

                kourna.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                kourna.events[timer_num].sidebox.style.background = "transparent";

                kourna.events[timer_num].function(); 
                kourna.events[timer_num].status = 1;
                kourna.events[timer_num].function(); 
            }
        }
    }
}

function kourna_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, kourna.events[arrayNum].cooldown, kourna.events[arrayNum].timeLabel, kourna.events[arrayNum].timeSideLabel, kourna.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(kourna.events[arrayNum].timeLabel, kourna.events[arrayNum].sidebox, kourna.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(kourna.events[arrayNum].timeLabel, kourna.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (kourna.events[arrayNum].status == 1){
        kourna[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(kourna[arrayNum]);   
    } 
}

// Day time checkboxes. Shows elements when clicked
function kourna_Day_Checkbox(obj){
	var checkbox = obj; 
	if (checkbox.value == "x"){
		checkbox.value = "  ";
	} else if (checkbox.value == "  "){
		checkbox.value = "x";
		obj.parentNode.style.opacity = 0;
		if (obj.parentNode.id == 'kourna-box-1'){
			show_multiple_elements(1,4,'kourna-vet-','opacity');
			show_multiple_elements(1,4,'kourna-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'kourna-box-2'){
			show_multiple_elements(5,10,'kourna-vet-','opacity');
			show_multiple_elements(5,10,'kourna-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'kourna-box-3'){
			show_multiple_elements(11,13,'kourna-vet-','opacity');
			show_multiple_elements(11,13,'kourna-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'kourna-box-4'){
			show_multiple_elements(14,15,'kourna-vet-','opacity');
			show_multiple_elements(14,14,'kourna-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'kourna-box-5'){
			show_multiple_elements(16,18,'kourna-vet-','opacity');
			show_multiple_elements(15,17,'kourna-vet-info-','opacity');
		}
		// Delay the display to let the opacity fade out
		setTimeout(function(){ 
			obj.parentNode.style.display = "none";
			checkbox.value = "  ";
		 }, 2000);

	}
}