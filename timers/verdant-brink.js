// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var verdant = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Pact Tower S
            function: function() { verdant_Countdown(1); },
            status: 0,
            cooldown: 60 * 4 + 30, 
            startButton: document.getElementById('timer-verdant-1-start'),
            startSideButton: document.getElementById('sidetimer-verdant-1-start'),
            resetButton: document.getElementById('timer-verdant-1-reset'),
            resetSideButton: document.getElementById('sidetimer-verdant-1-reset'),
            timeLabel: document.getElementById('timer-verdant-1'), 
            timeSideLabel: document.getElementById('sidetimer-verdant-1'),
            sidebox: document.getElementById('verdant-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-verdant-1')
        }, 

        {   // [2] Pact Tower W
            function: function() { verdant_Countdown(2); },
            status: 0,
            cooldown: 60 * 4 + 30, 
            startButton: document.getElementById('timer-verdant-2-start'),
            startSideButton: document.getElementById('sidetimer-verdant-2-start'),
            resetButton: document.getElementById('timer-verdant-2-reset'),
            resetSideButton: document.getElementById('sidetimer-verdant-2-reset'),
            timeLabel: document.getElementById('timer-verdant-2'), 
            timeSideLabel: document.getElementById('sidetimer-verdant-2'),
            sidebox: document.getElementById('verdant-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-verdant-2')
        }, 
        {   // [3] Pact Tower E
            function: function() { verdant_Countdown(3); },
            status: 0,
            cooldown: 60 * 4 + 30, 
            startButton: document.getElementById('timer-verdant-3-start'),
            startSideButton: document.getElementById('sidetimer-verdant-3-start'),
            resetButton: document.getElementById('timer-verdant-3-reset'),
            resetSideButton: document.getElementById('sidetimer-verdant-3-reset'),
            timeLabel: document.getElementById('timer-verdant-3'), 
            timeSideLabel: document.getElementById('sidetimer-verdant-3'),
            sidebox: document.getElementById('verdant-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-verdant-3')
        },
        {   // [4] Meta - Day/Night
            timeSideLabel: document.getElementById('sidetimer-verdant-daynight-meta'),
            sidebox: document.getElementById('verdant-daynight-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-verdant-daynight-meta')
        },
        {   // [5] Meta - Night Bosses
            timeSideLabel: document.getElementById('sidetimer-verdant-bosses-meta'),
            sidebox: document.getElementById('verdant-bosses-meta-sidebox'),
            num: document.getElementById('numerical-sidetimer-verdant-bosses-meta')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var verdant; // Empty array for countdown
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
        if (timer == verdant.events[timer_num].startButton.id || timer == verdant.events[timer_num].startSideButton.id){
            if (verdant.events[timer_num].status == 0){
                verdant.events[timer_num].status = 1; 
                verdant.events[timer_num].function(); 

                verdant.events[timer_num].startButton.value = "Reset";
                verdant.events[timer_num].startSideButton.value = "Reset";
            } else {
                verdant.events[timer_num].status = 0;
                verdant.events[timer_num].startButton.value = "Start";
                verdant.events[timer_num].startSideButton.value = "Start";

                verdant.events[timer_num].timeLabel.style.color = "black";
                verdant.events[timer_num].timeSideLabel.style.color = 'black';
                verdant.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                verdant.events[timer_num].sidebox.style.background = 'transparent';
                verdant.events[timer_num].function();
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
        if (timer == verdant.events[timer_num].resetButton.id || timer == verdant.events[timer_num].resetSideButton.id){
            if (verdant.events[timer_num].status == 1){
                verdant.events[timer_num].status = 0;
                verdant.events[timer_num].cooldown = verdant.events[timer_num].cooldown;
                verdant.events[timer_num].timeLabel.style.color = "black";

                verdant.events[timer_num].timeSideLabel.innerHTML = verdant.events[timer_num].timeLabel.innerHTML;
                verdant.events[timer_num].timeSideLabel.style.color = verdant.events[timer_num].timeLabel.style.color;

                verdant.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                verdant.events[timer_num].sidebox.style.background = "transparent";

                verdant.events[timer_num].function(); 
                verdant.events[timer_num].status = 1;
                verdant.events[timer_num].function(); 
            }
        }
    }
}

function verdant_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, verdant.events[arrayNum].cooldown, verdant.events[arrayNum].timeLabel, verdant.events[arrayNum].timeSideLabel, verdant.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(verdant.events[arrayNum].timeLabel, verdant.events[arrayNum].sidebox, verdant.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(verdant.events[arrayNum].timeLabel, verdant.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (verdant.events[arrayNum].status == 1){
        verdant[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(verdant[arrayNum]);   
    } 
}

// Day time checkboxes. Shows elements when clicked
function verdant_Day_Checkbox(obj){
	var checkbox = obj; 
	if (checkbox.value == "x"){
		checkbox.value = "  ";
	} else if (checkbox.value == "  "){
		checkbox.value = "x";
		obj.parentNode.style.opacity = 0;
		if (obj.parentNode.id == 'verdant-box-1'){
			show_multiple_elements(1,4,'verdant-vet-','opacity');
			show_multiple_elements(1,4,'verdant-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'verdant-box-2'){
			show_multiple_elements(5,10,'verdant-vet-','opacity');
			show_multiple_elements(5,10,'verdant-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'verdant-box-3'){
			show_multiple_elements(11,13,'verdant-vet-','opacity');
			show_multiple_elements(11,13,'verdant-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'verdant-box-4'){
			show_multiple_elements(14,15,'verdant-vet-','opacity');
			show_multiple_elements(14,14,'verdant-vet-info-','opacity');
		} 
		if (obj.parentNode.id == 'verdant-box-5'){
			show_multiple_elements(16,18,'verdant-vet-','opacity');
			show_multiple_elements(15,17,'verdant-vet-info-','opacity');
		}
		// Delay the display to let the opacity fade out
		setTimeout(function(){ 
			obj.parentNode.style.display = "none";
			checkbox.value = "  ";
		 }, 2000);

	}
}

// Verdant Brink Global Timer
var current_progress = document.getElementById('verdant-current-status'),
	next_progress = "",
	boss_progress = "",
	progress_bar = document.getElementById('verdant-progress-bar'),
	progress_boss_bar = document.getElementById('verdant-progress-bosses-bar'),
	progress_text = document.getElementById('verdant-progress-text'),
	progress_boss_text = document.getElementById('verdant-progress-bosses-text'),
	progress_boss_box = document.getElementById('verdant-progress-bosses-box'),
	meta_width = 0,
	new_meta_time = 0,
	new_boss_time = 0,
	max_meta_time = 0,
	max_boss_time = 0,
    side_daynight_name = document.getElementById('daynight-meta-name'),
    side_bosses_name = document.getElementById('bosses-meta-name');

	var verdant_day_timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
		result,
		boss_result,
		hours,
		minutes,
		seconds;

	// Day = every even hour at :30 til odd hour at :45 (UTC time)
	// EX: 00:30 - 1:45
	// Night = every odd hour at :45 til even hour at :30 (UTC time)
	// EX: 1:45 - 2:30
	// Night bosses = every even hour at :10 til even hour at :30 (UTC time)
	// Ex: 2:10 - 2:30 
    function verdant_timer(prev_hr, hr, next_hr){
    	if (d.getUTCHours() == prev_hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == hr || d.getUTCHours() == next_hr && d.getUTCMinutes() < 30){

            progress_bar.style.background = progress_color;
            progress_boss_bar.style.background = progress_color;

            current_progress.innerHTML = "Currently: Day time";
            next_progress = "Night Meta";
            boss_progress = "Night Bosses";

            max_meta_time = ((hr * 3600) + (45 * 60)) - ((prev_hr * 3600) + (30 * 60));
            new_meta_time = time - ((prev_hr * 3600) + (30 * 60));
            result = ((hr * 3600) + (45 * 60)) - time;

            max_boss_time = ((next_hr * 3600) + (10 * 60)) - ((prev_hr * 3600) + (30 * 60));
            new_boss_time = time - ((prev_hr * 3600) + (30 * 60));
            result_boss = ((next_hr * 3600) + (10 * 60)) - time;

            hide_circles(21,40,'verdant-meta-circle-','opacity');
            hideElement('verdant-meta-boss-info-1');
            hideElement('verdant-meta-boss-info-2');
            hideElement('verdant-meta-boss-info-3');
            hideElement('verdant-meta-boss-info-4');
            hideElement('verdant-meta-boss-info-5');

            // By default, the day boxes show up 
            // This is to ensure that if someone stays in VB for a long time or right before day starts, that these will show up
            if (d.getUTCHours() == prev_hr && d.getUTCMinutes() == 30){
                show_multiple_elements(1,5,'verdant-box-','opacity');
                show_multiple_elements(1,5,'verdant-box-','display');
                show_multiple_elementss(1,3,'verdant-box-','opacity');
            }

            // Night time
            if (d.getUTCHours() == hr && d.getUTCMinutes() >= 45 || d.getUTCHours() == next_hr && d.getUTCMinutes() < 30){

                progress_bar.style.background = meta_color;
                hide_multiple_elements(1,5,'verdant-box-','opacity'); // Day boxes opacity
                hide_multiple_elements(1,5,'verdant-box-','display'); // Day boxes display (removes hover info)
                hide_multiple_elements_db_names(1,3,'verdant-','-box','opacity');
                hide_multiple_elements(1,18,'verdant-vet-','opacity'); // Veteran/event icons
                hide_multiple_elements(1,16,'verdant-vet-info-','opacity'); // Veteran/event infos

                // 30 second warning to defend camp
                if (d.getUTCHours() == hr && d.getUTCMinutes() == 45 && d.getUTCSeconds() < 30){

                    current_progress.innerHTML = "Currently: Night time";
                    next_progress = "Defend camps";
                    boss_progress = "Night bosses";

                    max_meta_time = ((hr * 3600) + (45 * 60) + 30) - ((hr * 3600) + (45 * 60));
                    new_meta_time = time - ((hr * 3600) + (45 * 60));
                    result = ((hr * 3600) + (45 * 60) + 30) - time;

                    show_circles(1,20,'verdant-meta-circle-','display');
                }

                // Defend camps 1 
                // if ( mininum time && any other time (not including seconds) && last minute + seconds before next if statement)
                if (d.getUTCHours() == hr && d.getUTCMinutes() == 45 && d.getUTCSeconds() >= 30 || d.getUTCHours() == hr && d.getUTCMinutes() > 45 && d.getUTCMinutes() < 49 || d.getUTCHours() == hr && d.getUTCMinutes() == 49 && d.getUTCSeconds() < 30){

                    current_progress.innerHTML = "Currently: Night - Defend Camps";
                    next_progress = "Break";
                    boss_progress = "Night bosses";

                    max_meta_time = ((hr * 3600) + (49 * 60) + 30) - ((hr * 3600) + (45 * 60) + 30);
                    new_meta_time = time - ((hr * 3600) + (45 * 60) + 30);
                    result = ((hr * 3600) + (49 * 60) + 30) - time;

                    hide_circles(1,20,'verdant-meta-circle-','display');
                    show_circles(21,40,'verdant-meta-circle-','opacity');
                }

                // Break between camps 1 and camp 2
                // if ( mininum time && any other time (not including seconds) && last minute + seconds before next if statement)
                if (d.getUTCHours() == hr && d.getUTCMinutes() == 49 && d.getUTCSeconds() >= 30 || d.getUTCHours() == hr && d.getUTCMinutes() > 49 && d.getUTCMinutes() < 55 || d.getUTCHours() == hr && d.getUTCMinutes() == 55 && d.getUTCSeconds() < 30){

                    current_progress.innerHTML = "Currently: Night - Retake camps, escort patrols, gather supplies";
                    next_progress = "Defend camps";
                    boss_progress = "Night bosses";

                    max_meta_time = ((hr * 3600) + (55 * 60) + 30) - ((hr * 3600) + (49 * 60) + 30);
                    new_meta_time = time - ((hr * 3600) + (49 * 60) + 30);
                    result = ((hr * 3600) + (55 * 60) + 30) - time;

                    showElement('verdant-meta-info-1');
                    hide_circles(21,40,'verdant-meta-circle-','opacity');
                    // 30 second warning 
                    if (d.getUTCHours() == hr && d.getUTCMinutes() == 55 && d.getUTCSeconds() < 30){
                        hideElement('verdant-meta-info-1');
                        show_circles(1,20,'verdant-meta-circle-','display');
                    }
                }

                // Defend camps 2
                // if ( mininum time && any other time (not including seconds) && last minute + seconds before next if statement)
                if (d.getUTCHours() == hr && d.getUTCMinutes() == 55 && d.getUTCSeconds() >= 30 || d.getUTCHours() == hr && d.getUTCMinutes() > 55 && d.getUTCMinutes() < 59 || d.getUTCHours() == hr && d.getUTCMinutes() == 59 && d.getUTCSeconds() < 30){

                    current_progress.innerHTML = "Currently: Night - Defend camps";
                    next_progress = "Break";
                    boss_progress = "Night bosses";

                    max_meta_time = ((hr * 3600) + (59 * 60) + 30) - ((hr * 3600) + (55 * 60) + 30);
                    new_meta_time = time - ((hr * 3600) + (55 * 60) + 30);
                    result = ((hr * 3600) + (59 * 60) + 30) - time;

                    hide_circles(1,20,'verdant-meta-circle-','display');
                    show_circles(21,40,'verdant-meta-circle-','opacity');

                }

                // Break between camps 2 and camp 3
                // if ( mininum time && any other time (not including seconds) && last minute + seconds before next if statement)
                if (d.getUTCHours() == hr && d.getUTCMinutes() == 59 && d.getUTCSeconds() >= 30 || d.getUTCHours() == next_hr && d.getUTCMinutes() < 5 || d.getUTCHours() == next_hr && d.getUTCMinutes() == 5 && d.getUTCSeconds() < 30){

                    current_progress.innerHTML = "Currently: Night - Retake camps, escort patrols, gather supplies";
                    next_progress = "Defend camps";
                    boss_progress = "Night bosses";

                    max_meta_time = ((next_hr * 3600) + (5 * 60) + 30) - ((hr * 3600) + (59 * 60) + 30);
                    new_meta_time = time - ((hr * 3600) + (59 * 60) + 30);
                    result = ((next_hr * 3600) + (5 * 60) + 30) - time;

                    showElement('verdant-meta-info-1');
                    hide_circles(21,40,'verdant-meta-circle-','opacity');
                    // 30 second warning 
                    if (d.getUTCHours() == next_hr && d.getUTCMinutes() == 5 && d.getUTCSeconds() < 30){
                        hideElement('verdant-meta-info-1');
                        show_circles(1,20,'verdant-meta-circle-','display');
                    }
                }

                // Defend camps 3
                // if ( mininum time && any other time (not including seconds) && last minute + seconds before next if statement)
                if (d.getUTCHours() == next_hr && d.getUTCMinutes() == 5 && d.getUTCSeconds() >= 30 || d.getUTCHours() == next_hr && d.getUTCMinutes() > 5 && d.getUTCMinutes() < 10){

                    current_progress.innerHTML = "Currently: Night - Defend camps";
                    next_progress = "Night bosses";
                    boss_progress = "Night bosses";

                    max_meta_time = ((next_hr * 3600) + (10 * 60)) - ((next_hr * 3600) + (5 * 60) + 30);
                    new_meta_time = time - ((next_hr * 3600) + (5 * 60) + 30);
                    result = ((next_hr * 3600) + (10 * 60)) - time;

                    hide_circles(1,20,'verdant-meta-circle-','display');
                    show_circles(21,40,'verdant-meta-circle-','opacity');

                }

                // Night bosses
                if (d.getUTCHours() == next_hr && d.getUTCMinutes() >= 10 && d.getUTCMinutes() < 30){
                    current_progress.innerHTML = "Currently: Night - Bosses";
                    next_progress = "Day";
                    boss_progress = "Day";
                    progress_boss_bar.style.background = meta_color;

                    max_meta_time = ((next_hr * 3600) + (30 * 60)) - ((next_hr * 3600) + (10 * 60));
                    new_meta_time = time - ((next_hr * 3600) + (10 * 60));
                    result = ((next_hr * 3600) + (30 * 60)) - time;

                    max_boss_time = max_meta_time;
                    new_boss_time = new_meta_time;
                    result_boss = result;

                    show_circles(21,40,'verdant-meta-circle-','opacity');
                    showElement('verdant-meta-boss-info-1');
                    showElement('verdant-meta-boss-info-2');
                    showElement('verdant-meta-boss-info-3');
                    showElement('verdant-meta-boss-info-4');
                    showElement('verdant-meta-boss-info-5');
                }
            }
            meta_width = (new_meta_time/max_meta_time)*100;
            progress_bar.style.width = meta_width + "%";
            progress_text.innerHTML = getDisplayTime(result) + " &#x27F6; " + next_progress;

            boss_width = (new_boss_time/max_boss_time)*100;
            progress_boss_bar.style.width = boss_width + "%";
            progress_boss_text.innerHTML = getDisplayTime(result_boss) + " &#x27F6; " + boss_progress;

            side_daynight_name.innerHTML = next_progress;
            side_bosses_name.innerHTML = boss_progress;

            verdant.events[4].sidebox.style.background = progress_bar.style.background;
            verdant.events[5].sidebox.style.background = progress_boss_bar.style.background;

            verdant.events[4].timeSideLabel.innerHTML = getDisplayTime(result);
            verdant.events[5].timeSideLabel.innerHTML = getDisplayTime(result_boss);
        }
    }
    
	console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());

    if (d.getUTCHours() == 0 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 30){
        verdant_timer(0,1,2);
    }
    if (d.getUTCHours() == 2 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
        verdant_timer(2,3,4);
    }
    if (d.getUTCHours() == 4 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 30){
        verdant_timer(4,5,6);
    }
    if (d.getUTCHours() == 6 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
        verdant_timer(6,7,8);
    }
    if (d.getUTCHours() == 8 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 30){
        verdant_timer(8,9,10);
    }
    if (d.getUTCHours() == 10 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
        verdant_timer(10,11,12);
    }
    if (d.getUTCHours() == 12 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 30){
        verdant_timer(12,13,14);
    }
    if (d.getUTCHours() == 14 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 30){
        verdant_timer(14,15,16);
    }
    if (d.getUTCHours() == 16 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 30){
        verdant_timer(16,17,18);
    }
    if (d.getUTCHours() == 18 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
        verdant_timer(18,19,20);
    }
    if (d.getUTCHours() == 20 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 30){
        verdant_timer(20,21,22);
    }
    if (d.getUTCHours() == 22 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
        verdant_timer(22,23,24);
    }
	
	}, 1000);