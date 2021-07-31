// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

var istan = {
    events: [
        {   // empty
            status: 0,
        },
        {   // [1] Pirates
            function: function() { istan_Countdown(1); },
            status: 0,
            cooldown: 60 * 12 + 30, 
            startButton: document.getElementById('timer-istan-1-start'),
            startSideButton: document.getElementById('sidetimer-istan-1-start'),
            resetButton: document.getElementById('timer-istan-1-reset'),
            resetSideButton: document.getElementById('sidetimer-istan-1-reset'),
            timeLabel: document.getElementById('timer-istan-1'), 
            timeSideLabel: document.getElementById('sidetimer-istan-1'),
            sidebox: document.getElementById('istan-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-istan-1')
        }, 

        {   // [2] Akili
            function: function() { istan_Countdown(2); },
            status: 0,
            cooldown: 60 * 20 + 45, 
            startButton: document.getElementById('timer-istan-2-start'),
            startSideButton: document.getElementById('sidetimer-istan-2-start'),
            resetButton: document.getElementById('timer-istan-2-reset'),
            resetSideButton: document.getElementById('sidetimer-istan-2-reset'),
            timeLabel: document.getElementById('timer-istan-2'), 
            timeSideLabel: document.getElementById('sidetimer-istan-2'),
            sidebox: document.getElementById('istan-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-istan-2')
        }, 
        {   // [3] Book Raid
            function: function() { istan_Countdown(3); },
            status: 0,
            cooldown: 60 * 19 + 45, 
            startButton: document.getElementById('timer-istan-3-start'),
            startSideButton: document.getElementById('sidetimer-istan-3-start'),
            resetButton: document.getElementById('timer-istan-3-reset'),
            resetSideButton: document.getElementById('sidetimer-istan-3-reset'),
            timeLabel: document.getElementById('timer-istan-3'), 
            timeSideLabel: document.getElementById('sidetimer-istan-3'),
            sidebox: document.getElementById('istan-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-istan-3')
        },
        {   // [4] Graveyard
            function: function() { istan_Countdown(4); },
            status: 0,
            cooldown: 60 * 15, 
            startButton: document.getElementById('timer-istan-4-start'),
            startSideButton: document.getElementById('sidetimer-istan-4-start'),
            resetButton: document.getElementById('timer-istan-4-reset'),
            resetSideButton: document.getElementById('sidetimer-istan-4-reset'),
            timeLabel: document.getElementById('timer-istan-4'), 
            timeSideLabel: document.getElementById('sidetimer-istan-4'),
            sidebox: document.getElementById('istan-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-istan-4')
        },
    ]
};


// Label of the meta on the side
var meta_name = document.getElementById('meta-name');

var istan; // Empty array for countdown
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
        if (timer == istan.events[timer_num].startButton.id || timer == istan.events[timer_num].startSideButton.id){
            if (istan.events[timer_num].status == 0){
                istan.events[timer_num].status = 1; 
                istan.events[timer_num].function(); 

                istan.events[timer_num].startButton.value = "Reset";
                istan.events[timer_num].startSideButton.value = "Reset";
            } else {
                istan.events[timer_num].status = 0;
                istan.events[timer_num].startButton.value = "Start";
                istan.events[timer_num].startSideButton.value = "Start";

                istan.events[timer_num].timeLabel.style.color = "black";
                istan.events[timer_num].timeSideLabel.style.color = 'black';
                istan.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                istan.events[timer_num].sidebox.style.background = 'transparent';
                istan.events[timer_num].function();
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
        if (timer == istan.events[timer_num].resetButton.id || timer == istan.events[timer_num].resetSideButton.id){
            if (istan.events[timer_num].status == 1){
                istan.events[timer_num].status = 0;
                istan.events[timer_num].cooldown = istan.events[timer_num].cooldown;
                istan.events[timer_num].timeLabel.style.color = "black";

                istan.events[timer_num].timeSideLabel.innerHTML = istan.events[timer_num].timeLabel.innerHTML;
                istan.events[timer_num].timeSideLabel.style.color = istan.events[timer_num].timeLabel.style.color;

                istan.events[timer_num].timeLabel.style.background = 'rgba(255,246,214)';
                istan.events[timer_num].sidebox.style.background = "transparent";

                istan.events[timer_num].function(); 
                istan.events[timer_num].status = 1;
                istan.events[timer_num].function(); 
            }
        }
    }
}

function istan_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, istan.events[arrayNum].cooldown, istan.events[arrayNum].timeLabel, istan.events[arrayNum].timeSideLabel, istan.events[arrayNum].num);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(istan.events[arrayNum].timeLabel, istan.events[arrayNum].sidebox, istan.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(istan.events[arrayNum].timeLabel, istan.events[arrayNum].sidebox);
        }
    }
    run_countdown(); 
    if (istan.events[arrayNum].status == 1){
        istan[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(istan[arrayNum]);   
    } 
}

// ISTAN CHECKBOXES 
function istan_All_Checkbox(obj){
	var checkbox = obj,
		istan_pala = document.getElementById('istan-meta-pala-checkbox'),
		istan_gh = document.getElementById('istan-meta-gh-checkbox'),
		istan_1 = document.getElementById('istan-1-checkbox'),
		istan_7 = document.getElementById('istan-7-checkbox'),
		istan_8 = document.getElementById('istan-8-checkbox'),
		istan_9 = document.getElementById('istan-9-checkbox');

	if (checkbox.checked == true){
		istan_pala.checked = true;
		istan_gh.checked = true;
		istan_1.checked = true;
		istan_7.checked = true;
		istan_8.checked = true;
		istan_9.checked = true;

		istan_Meta_Pala_Checkbox(istan_pala);
		istan_Meta_GH_Checkbox(istan_gh);
		istan_1_Checkbox(istan_1); 
		istan_7_Checkbox(istan_7); 
		istan_8_Checkbox(istan_8); 
		istan_9_Checkbox(istan_9); 
	} else {
		istan_pala.checked = false;
		istan_gh.checked = false;
		istan_1.checked = false;
		istan_7.checked = false;
		istan_8.checked = false;
		istan_9.checked = false;

		istan_Meta_Pala_Checkbox(istan_pala);
		istan_Meta_GH_Checkbox(istan_gh);
		istan_1_Checkbox(istan_1); 
		istan_7_Checkbox(istan_7); 
		istan_8_Checkbox(istan_8); 
		istan_9_Checkbox(istan_9); 
	}
}
function istan_Meta_Pala_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_istan_meta_pala.style.display = "block";
	} else {
		sidebox_timer_istan_meta_pala.style.display = "none";
	}
}
function istan_Meta_GH_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_istan_meta_gh.style.display = "block";
	} else {
		sidebox_timer_istan_meta_gh.style.display = "none";
	}
}

function istan_1_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_istan_1.style.display = "block";
	} else {
		sidebox_timer_istan_1.style.display = "none";
	}
}
function istan_7_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_istan_7.style.display = "block";
	} else {
		sidebox_timer_istan_7.style.display = "none";
	}
}
function istan_8_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_istan_8.style.display = "block";
	} else {
		sidebox_timer_istan_8.style.display = "none";
	}
}
function istan_9_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_istan_9.style.display = "block";
	} else {
		sidebox_timer_istan_9.style.display = "none";
	}
}

// Istan Global Timer
var sidebox_timer_istan_meta_pala = document.getElementById('istan-meta-pala-sidebox'),
	sidebox_timer_istan_meta_gh = document.getElementById('istan-meta-gh-sidebox'),
	time_side_label_istan_meta_pala = document.getElementById('sidetimer-istan-meta-pala'),
	time_side_label_istan_meta_gh = document.getElementById('sidetimer-istan-meta-gh'),
	numerical_sidebox_timer_istan_meta_pala = document.getElementById('numerical-sidetimer-istan-meta-pala'),
	numerical_sidebox_timer_istan_meta_gh = document.getElementById('numerical-sidetimer-istan-meta-gh'),
	current_progress = document.getElementById('current-status'),
	next_pala_progress = "",
	progress_pala_bar = document.getElementById('pala-progress-bar'),
	progress_pala_text = document.getElementById('pala-progress-text'),
	pala_width = 0,
	new_pala_time = 0,
	max_pala_time = 0,
	next_gh_progress = "",
	progress_gh_bar = document.getElementById('gh-progress-bar'),
	progress_gh_text = document.getElementById('gh-progress-text'),
	gh_width = 0,
	new_gh_time = 0,
	max_gh_time = 0;
	

	// Palawadan global timer
	// Palawadan begins every odd UTC-0, at :45
	var istan_pala_timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
		pala_result,
		gh_result,
		hours,
		minutes,
		seconds;

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((1 * 3600) + (45 * 60)) - ((0 * 3600) + (35 * 60));
        new_pala_time = time - ((0 * 3600) + (35 * 60));
        pala_result = ((1 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((2 * 3600) + (20 * 60)) - ((0 * 3600) + (35 * 60));
        new_gh_time = time - ((0 * 3600) + (35 * 60));
        gh_result = ((2 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 2 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 2 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((2 * 3600) + (15 * 60)) - ((1 * 3600) + (45 * 60));
		        new_pala_time = time - ((1 * 3600) + (45 * 60));
		        pala_result = ((2 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((3 * 3600) + (45 * 60)) - ((2 * 3600) + (15 * 60));
		        new_pala_time = time - ((2 * 3600) + (15 * 60));
		        pala_result = ((3 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((3 * 3600) + (45 * 60)) - ((2 * 3600) + (20 * 60));
		        new_pala_time = time - ((2 * 3600) + (20 * 60));
		        pala_result = ((3 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((2 * 3600) + (35 * 60)) - ((2 * 3600) + (20 * 60));
		        new_gh_time = time - ((2 * 3600) + (20 * 60));
		        gh_result = ((2 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((3 * 3600) + (45 * 60)) - ((2 * 3600) + (35 * 60));
        new_pala_time = time - ((2 * 3600) + (35 * 60));
        pala_result = ((3 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((4 * 3600) + (20 * 60)) - ((2 * 3600) + (35 * 60));
        new_gh_time = time - ((2 * 3600) + (35 * 60));
        gh_result = ((4 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 4 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 4 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((4 * 3600) + (15 * 60)) - ((3 * 3600) + (45 * 60));
		        new_pala_time = time - ((3 * 3600) + (45 * 60));
		        pala_result = ((4 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((5 * 3600) + (45 * 60)) - ((4 * 3600) + (15 * 60));
		        new_pala_time = time - ((4 * 3600) + (15 * 60));
		        pala_result = ((5 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((5 * 3600) + (45 * 60)) - ((4 * 3600) + (20 * 60));
		        new_pala_time = time - ((4 * 3600) + (20 * 60));
		        pala_result = ((5 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((4 * 3600) + (35 * 60)) - ((4 * 3600) + (20 * 60));
		        new_gh_time = time - ((4 * 3600) + (20 * 60));
		        gh_result = ((4 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((5 * 3600) + (45 * 60)) - ((4 * 3600) + (35 * 60));
        new_pala_time = time - ((4 * 3600) + (35 * 60));
        pala_result = ((5 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((6 * 3600) + (20 * 60)) - ((4 * 3600) + (35 * 60));
        new_gh_time = time - ((4 * 3600) + (35 * 60));
        gh_result = ((6 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 6 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 6 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((6 * 3600) + (15 * 60)) - ((5 * 3600) + (45 * 60));
		        new_pala_time = time - ((5 * 3600) + (45 * 60));
		        pala_result = ((6 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((7 * 3600) + (45 * 60)) - ((6 * 3600) + (15 * 60));
		        new_pala_time = time - ((6 * 3600) + (15 * 60));
		        pala_result = ((7 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((7 * 3600) + (45 * 60)) - ((6 * 3600) + (20 * 60));
		        new_pala_time = time - ((6 * 3600) + (20 * 60));
		        pala_result = ((7 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((6 * 3600) + (35 * 60)) - ((6 * 3600) + (20 * 60));
		        new_gh_time = time - ((6 * 3600) + (20 * 60));
		        gh_result = ((6 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}
	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((7 * 3600) + (45 * 60)) - ((6 * 3600) + (35 * 60));
        new_pala_time = time - ((6 * 3600) + (35 * 60));
        pala_result = ((7 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((8 * 3600) + (20 * 60)) - ((6 * 3600) + (35 * 60));
        new_gh_time = time - ((6 * 3600) + (35 * 60));
        gh_result = ((8 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 8 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 8 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((8 * 3600) + (15 * 60)) - ((7 * 3600) + (45 * 60));
		        new_pala_time = time - ((7 * 3600) + (45 * 60));
		        pala_result = ((8 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((9 * 3600) + (45 * 60)) - ((8 * 3600) + (15 * 60));
		        new_pala_time = time - ((8 * 3600) + (15 * 60));
		        pala_result = ((9 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((9 * 3600) + (45 * 60)) - ((8 * 3600) + (20 * 60));
		        new_pala_time = time - ((8 * 3600) + (20 * 60));
		        pala_result = ((9 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((8 * 3600) + (35 * 60)) - ((8 * 3600) + (20 * 60));
		        new_gh_time = time - ((8 * 3600) + (20 * 60));
		        gh_result = ((8 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((9 * 3600) + (45 * 60)) - ((8 * 3600) + (35 * 60));
        new_pala_time = time - ((8 * 3600) + (35 * 60));
        pala_result = ((9 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((10 * 3600) + (20 * 60)) - ((8 * 3600) + (35 * 60));
        new_gh_time = time - ((8 * 3600) + (35 * 60));
        gh_result = ((10 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 10 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 10 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((10 * 3600) + (15 * 60)) - ((9 * 3600) + (45 * 60));
		        new_pala_time = time - ((9 * 3600) + (45 * 60));
		        pala_result = ((10 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((11 * 3600) + (45 * 60)) - ((10 * 3600) + (15 * 60));
		        new_pala_time = time - ((10 * 3600) + (15 * 60));
		        pala_result = ((11 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((11 * 3600) + (45 * 60)) - ((10 * 3600) + (20 * 60));
		        new_pala_time = time - ((10 * 3600) + (20 * 60));
		        pala_result = ((11 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((10 * 3600) + (35 * 60)) - ((10 * 3600) + (20 * 60));
		        new_gh_time = time - ((10 * 3600) + (20 * 60));
		        gh_result = ((10 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((11 * 3600) + (45 * 60)) - ((10 * 3600) + (35 * 60));
        new_pala_time = time - ((10 * 3600) + (35 * 60));
        pala_result = ((11 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((12 * 3600) + (20 * 60)) - ((10 * 3600) + (35 * 60));
        new_gh_time = time - ((10 * 3600) + (35 * 60));
        gh_result = ((12 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 12 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 12 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((12 * 3600) + (15 * 60)) - ((11 * 3600) + (45 * 60));
		        new_pala_time = time - ((11 * 3600) + (45 * 60));
		        pala_result = ((12 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((13 * 3600) + (45 * 60)) - ((12 * 3600) + (15 * 60));
		        new_pala_time = time - ((12 * 3600) + (15 * 60));
		        pala_result = ((13 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((13 * 3600) + (45 * 60)) - ((12 * 3600) + (20 * 60));
		        new_pala_time = time - ((12 * 3600) + (20 * 60));
		        pala_result = ((13 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((12 * 3600) + (35 * 60)) - ((12 * 3600) + (20 * 60));
		        new_gh_time = time - ((12 * 3600) + (20 * 60));
		        gh_result = ((12 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((13 * 3600) + (45 * 60)) - ((12 * 3600) + (35 * 60));
        new_pala_time = time - ((12 * 3600) + (35 * 60));
        pala_result = ((13 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((14 * 3600) + (20 * 60)) - ((12 * 3600) + (35 * 60));
        new_gh_time = time - ((12 * 3600) + (35 * 60));
        gh_result = ((14 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 14 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 14 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((14 * 3600) + (15 * 60)) - ((13 * 3600) + (45 * 60));
		        new_pala_time = time - ((13 * 3600) + (45 * 60));
		        pala_result = ((14 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((15 * 3600) + (45 * 60)) - ((14 * 3600) + (15 * 60));
		        new_pala_time = time - ((14 * 3600) + (15 * 60));
		        pala_result = ((15 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((15 * 3600) + (45 * 60)) - ((14 * 3600) + (20 * 60));
		        new_pala_time = time - ((14 * 3600) + (20 * 60));
		        pala_result = ((15 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((14 * 3600) + (35 * 60)) - ((14 * 3600) + (20 * 60));
		        new_gh_time = time - ((14 * 3600) + (20 * 60));
		        gh_result = ((14 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}
	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((15 * 3600) + (45 * 60)) - ((14 * 3600) + (35 * 60));
        new_pala_time = time - ((14 * 3600) + (35 * 60));
        pala_result = ((15 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((16 * 3600) + (20 * 60)) - ((14 * 3600) + (35 * 60));
        new_gh_time = time - ((14 * 3600) + (35 * 60));
        gh_result = ((16 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 16 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 16 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((16 * 3600) + (15 * 60)) - ((15 * 3600) + (45 * 60));
		        new_pala_time = time - ((15 * 3600) + (45 * 60));
		        pala_result = ((16 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((17 * 3600) + (45 * 60)) - ((16 * 3600) + (15 * 60));
		        new_pala_time = time - ((16 * 3600) + (15 * 60));
		        pala_result = ((17 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((17 * 3600) + (45 * 60)) - ((16 * 3600) + (20 * 60));
		        new_pala_time = time - ((16 * 3600) + (20 * 60));
		        pala_result = ((17 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((16 * 3600) + (35 * 60)) - ((16 * 3600) + (20 * 60));
		        new_gh_time = time - ((16 * 3600) + (20 * 60));
		        gh_result = ((16 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}
	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((17 * 3600) + (45 * 60)) - ((16 * 3600) + (35 * 60));
        new_pala_time = time - ((16 * 3600) + (35 * 60));
        pala_result = ((17 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((18 * 3600) + (20 * 60)) - ((16 * 3600) + (35 * 60));
        new_gh_time = time - ((16 * 3600) + (35 * 60));
        gh_result = ((18 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 18 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 18 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((18 * 3600) + (15 * 60)) - ((17 * 3600) + (45 * 60));
		        new_pala_time = time - ((17 * 3600) + (45 * 60));
		        pala_result = ((18 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((19 * 3600) + (45 * 60)) - ((18 * 3600) + (15 * 60));
		        new_pala_time = time - ((18 * 3600) + (15 * 60));
		        pala_result = ((19 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((19 * 3600) + (45 * 60)) - ((18 * 3600) + (20 * 60));
		        new_pala_time = time - ((18 * 3600) + (20 * 60));
		        pala_result = ((19 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((18 * 3600) + (35 * 60)) - ((18 * 3600) + (20 * 60));
		        new_gh_time = time - ((18 * 3600) + (20 * 60));
		        gh_result = ((18 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}
	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((19 * 3600) + (45 * 60)) - ((18 * 3600) + (35 * 60));
        new_pala_time = time - ((18 * 3600) + (35 * 60));
        pala_result = ((19 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((20 * 3600) + (20 * 60)) - ((18 * 3600) + (35 * 60));
        new_gh_time = time - ((18 * 3600) + (35 * 60));
        gh_result = ((20 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 20 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 20 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((20 * 3600) + (15 * 60)) - ((19 * 3600) + (45 * 60));
		        new_pala_time = time - ((19 * 3600) + (45 * 60));
		        pala_result = ((20 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((21 * 3600) + (45 * 60)) - ((20 * 3600) + (15 * 60));
		        new_pala_time = time - ((20 * 3600) + (15 * 60));
		        pala_result = ((21 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((21 * 3600) + (45 * 60)) - ((20 * 3600) + (20 * 60));
		        new_pala_time = time - ((20 * 3600) + (20 * 60));
		        pala_result = ((21 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((20 * 3600) + (35 * 60)) - ((20 * 3600) + (20 * 60));
		        new_gh_time = time - ((20 * 3600) + (20 * 60));
		        gh_result = ((20 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}
	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 35){
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((21 * 3600) + (45 * 60)) - ((20 * 3600) + (35 * 60));
        new_pala_time = time - ((20 * 3600) + (35 * 60));
        pala_result = ((21 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((22 * 3600) + (20 * 60)) - ((20 * 3600) + (35 * 60));
        new_gh_time = time - ((20 * 3600) + (35 * 60));
        gh_result = ((22 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 22 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 22 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((22 * 3600) + (15 * 60)) - ((21 * 3600) + (45 * 60));
		        new_pala_time = time - ((21 * 3600) + (45 * 60));
		        pala_result = ((22 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((23 * 3600) + (45 * 60)) - ((22 * 3600) + (15 * 60));
		        new_pala_time = time - ((22 * 3600) + (15 * 60));
		        pala_result = ((23 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((23 * 3600) + (45 * 60)) - ((22 * 3600) + (20 * 60));
		        new_pala_time = time - ((22 * 3600) + (20 * 60));
		        pala_result = ((23 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((22 * 3600) + (35 * 60)) - ((22 * 3600) + (20 * 60));
		        new_gh_time = time - ((22 * 3600) + (20 * 60));
		        gh_result = ((22 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}

	// New cycle (GMT)
	// Pala - Every 1:45 until 2:15 
	// Great hall - Every 2:20 until 2:35 
	// Total time - 1:45 thru 2:35
	if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 35 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 35){
		// Set time to 24*3600 when UTC hour is 0
        if (d.getUTCHours() == 0){
            time = 24 * 3600 + d.getUTCMinutes() * 60 + d.getUTCSeconds();
        }
		// Defaults
		progress_pala_bar.style.background = progress_color; 
		progress_gh_bar.style.background = progress_color;

		current_progress.innerHTML = 'Status: Break';
		next_pala_progress = 'Palawadan';
		next_gh_progress = 'Great Hall';

		hide_multiple_elements(1,21,'istan-img-','opacity'); // Pala + GH circles and symbols
		hide_multiple_elements(22,31,'istan-img-','display'); // Pala + GH animations
		hide_multiple_elements(1,8,'istan-arrow-','display'); // Pala arrows

		// Sidebox
		sidebox_timer_istan_meta_pala.style.background = 'transparent';
		sidebox_timer_istan_meta_gh.style.background = 'transparent';

		// Pala time
		max_pala_time = ((23 * 3600) + (45 * 60)) - ((22 * 3600) + (35 * 60));
        new_pala_time = time - ((22 * 3600) + (35 * 60));
        pala_result = ((23 * 3600) + (45 * 60)) - time;
        // Gh time
        max_gh_time = ((24 * 3600) + (20 * 60)) - ((22 * 3600) + (35 * 60));
        new_gh_time = time - ((22 * 3600) + (35 * 60));
        gh_result = ((24 * 3600) + (20 * 60)) - time;

        // 5 min before Pala
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	progress_pala_bar.style.background = pre_meta_color; 
        	current_progress.innerHTML = 'Status: Get ready to raid Palawadan!';
			next_pala_progress = 'Palawadan';

			show_multiple_elements(22,30,'istan-img-','display'); // Pala animations 

			sidebox_timer_istan_meta_pala.style.background = pre_meta_color;
        }

        // Start of Meta phases
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 0 && d.getUTCMinutes() < 35){
        	// Pala phase 
        	if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 0 && d.getUTCMinutes() < 15){
        		progress_pala_bar.style.background = meta_color; 

        		current_progress.innerHTML = 'Status: Raid Palawadan!';
				next_pala_progress = 'Break';

				show_multiple_elements(1,20,'istan-img-','opacity');
				show_multiple_elements(1,8,'istan-arrow-','display');

				sidebox_timer_istan_meta_pala.style.background = meta_color;

				max_pala_time = ((24 * 3600) + (15 * 60)) - ((23 * 3600) + (45 * 60));
		        new_pala_time = time - ((23 * 3600) + (45 * 60));
		        pala_result = ((24 * 3600) + (15 * 60)) - time;
        	}
        	// 5 mins before GH 
		    if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 20){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = pre_meta_color; 

		    	current_progress.innerHTML = 'Status: Get ready to raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 

		    	show_multiple_elements(31,31,'istan-img-','display');

		    	sidebox_timer_istan_meta_gh.style.background = pre_meta_color;

		    	// Pala meta time is finished. Reset until next phase
		    	max_pala_time = ((25 * 3600) + (45 * 60)) - ((24 * 3600) + (15 * 60));
		        new_pala_time = time - ((24 * 3600) + (15 * 60));
		        pala_result = ((25 * 3600) + (45 * 60)) - time;
		    }
		    // Start of GH
		    if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 35){
		    	progress_pala_bar.style.background = progress_color; 
		    	progress_gh_bar.style.background = meta_color; 

		    	current_progress.innerHTML = 'Status: Raid the Great Hall!'; 
		    	next_pala_progress = 'Palawadan'; 
		    	next_gh_progress = 'Break'; 

		    	show_multiple_elements(21,21,'istan-img-','opacity');

		    	sidebox_timer_istan_meta_gh.style.background = meta_color;

		    	max_pala_time = ((25 * 3600) + (45 * 60)) - ((24 * 3600) + (20 * 60));
		        new_pala_time = time - ((24 * 3600) + (20 * 60));
		        pala_result = ((25 * 3600) + (45 * 60)) - time;

		    	max_gh_time = ((24 * 3600) + (35 * 60)) - ((24 * 3600) + (20 * 60));
		        new_gh_time = time - ((24 * 3600) + (20 * 60));
		        gh_result = ((24 * 3600) + (35 * 60)) - time;
		    }
        }

        // Pala time result
		pala_width = (new_pala_time/max_pala_time)*100;
		progress_pala_bar.style.width = pala_width + '%';
		getTime(d, pala_result, 'none', time_side_label_istan_meta_pala, numerical_sidebox_timer_istan_meta_pala);
		progress_pala_text.innerHTML = getDisplayTime(pala_result) + ' &#x27F6; ' + next_pala_progress; 
		// Gh time result
		gh_width = (new_gh_time/max_gh_time)*100;
		progress_gh_bar.style.width = gh_width + '%';
		getTime(d, gh_result, 'none', time_side_label_istan_meta_gh, numerical_sidebox_timer_istan_meta_gh);
		progress_gh_text.innerHTML = getDisplayTime(gh_result) + ' &#x27F6; ' + next_gh_progress;  
	}
		console.log(d.getUTCHours(), d.getUTCMinutes());
	}, 1000);