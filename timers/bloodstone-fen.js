// NAV-LEFT SORT IDs
// Add this to only Timer pages
var sort_timers = document.getElementById('nav-left-sidetimer-box'),
    sort_interval;

// Always sorts the left event list
// Add this to only Timer pages
sort_interval = setInterval(function(){
    left_sidetimer_sort(sort_timers);
}, 1000);

// Default statuses 
var status_bloodstone_meta = 0, // Bloodstone Maw
    status_bloodstone_1 = 0; // Hablion

//  Times 
//  Minute = [minute] * 60 
var time_bloodstone_meta = 60 * 60, // Bloodstone Maw
    time_bloodstone_1 = 60 * 30; // Hablion

/* Start/Stop buttons */
var start_button_bloodstone_meta = document.getElementById('timer-bloodstone-meta-start'), // Bloodstone Maw
	start_button_bloodstone_1 = document.getElementById('timer-bloodstone-1-start'); //Hablion

// Start buttons on the side
var start_side_button_bloodstone_meta = document.getElementById('sidetimer-bloodstone-meta-start'), // Bloodstone Maw
	start_side_button_bloodstone_1 = document.getElementById('sidetimer-bloodstone-1-start'); //Hablion

/* Time labels - What the timer says */
var time_label_bloodstone_meta = document.getElementById('timer-bloodstone-meta'), // Bloodstone Maw
	time_label_bloodstone_1 = document.getElementById('timer-bloodstone-1'); //Hablion

var time_side_label_bloodstone_spirits = document.getElementById('sidetimer-bloodstone-spirits'), // Spirits
	time_side_label_bloodstone_meta = document.getElementById('sidetimer-bloodstone-meta'), // Bloodstone Maw
	time_side_label_bloodstone_1 = document.getElementById('sidetimer-bloodstone-1'); //Hablion

/* Time texts - What the text below the timer says */
var time_text_bloodstone_meta = document.getElementById('timer-bloodstone-meta--text'), // Bloodstone Maw
	time_text_bloodstone_1 = document.getElementById('timer-bloodstone-1-text'); //Hablion

/* Sidebox Timers */
var sidebox_timer_bloodstone_spirits = document.getElementById('bloodstone-spirits-sidebox'), // Spirits
	sidebox_timer_bloodstone_meta = document.getElementById('bloodstone-meta-sidebox'), // Bloodstone Maw
	sidebox_timer_bloodstone_1 = document.getElementById('bloodstone-1-sidebox'); //Hablion

var numerical_sidebox_timer_bloodstone_spirits = document.getElementById('numerical-sidetimer-bloodstone-spirits'),
	numerical_sidebox_timer_bloodstone_meta = document.getElementById('numerical-sidetimer-bloodstone-meta'), // Bloodstone Maw
    numerical_sidebox_timer_bloodstone_1 = document.getElementById('numerical-sidetimer-bloodstone-1'); // Hablion

// Defaults
var current_status = document.getElementById('current-status'),
	next_progress = "",
	progress_box_bottom = document.getElementById('progress-box-bottom'),
	progress_bar = document.getElementById('progress-bar'),
	progress_bar_meta = document.getElementById('progress-bar-meta'),
	progress_bar_bottom = document.getElementById('progress-bar-bottom'),
	progress_text = document.getElementById('progress-text'),
	progress_text_meta = document.getElementById('progress-text-meta'),
	progress_text_bottom = document.getElementById('progress-text-bottom'),
	bottom_button = document.getElementById('bloodstone-spirit-button'),
	width = 0,
	width_bottom = 0,
	new_time = 0,
	max_time = 0
	new_bloodstone_time = 0,
	revert = 0; // 0 = show Spirit 1st event, 1 = revert to hide

hide_multiple_elements(1,4,'bloodstone-arrow-','display');


/* Start/Stop button functionality */
function start_stop(obj){

    var timer = obj.id;
    // Status 0 = Stop 
    // Status 1 = Starting, Ongoing
    // When the Start button is clicked, change status to Starting and start timer
    // Else -> Keep status at Stop
    // TANGLED DEPTHS - NUHOCH
    if (timer == 'timer-bloodstone-meta-start' || timer == 'sidetimer-bloodstone-meta-start'){
        if (status_bloodstone_meta == 0){
            status_bloodstone_meta = 1; 
            timerBloodstoneMeta();

            start_button_bloodstone_meta.value = "Reset";
            start_side_button_bloodstone_meta.value = "Reset";
        } else {
            status_bloodstone_meta = 0;
            start_button_bloodstone_meta.value = "Start";
            start_side_button_bloodstone_meta.value = "Start";

            time_side_label_bloodstone_meta.style.color = 'black';
            sidebox_timer_bloodstone_meta.style.background = 'transparent';
            timerBloodstoneMeta();
        }   
    }
    if (timer == 'timer-bloodstone-1-start' || timer == 'sidetimer-bloodstone-1-start'){
        if (status_bloodstone_1 == 0){
            status_bloodstone_1 = 1; 
            timerBloodstone1();

            start_button_bloodstone_1.value = "Reset";
            start_side_button_bloodstone_1.value = "Reset";
        } else {
            status_bloodstone_1 = 0;
            start_button_bloodstone_1.value = "Start";
            start_side_button_bloodstone_1.value = "Start";

            time_side_label_bloodstone_1.style.color = 'black';
            sidebox_timer_bloodstone_1.style.background = 'transparent';
            timerBloodstone1();
        }   
    }
}

// Reset Button functionality
function reset (obj){
    var timer = obj.id;
    /*
        When Reset button is clicked, 
        -> Change status to Stop 
        -> Reset timer to original time + 1
        -> Reset time label to oringal time
        -> Reset opacity of the text to hidden
    */
    // Remember to change these reset times to the RESPAWN rate and not the INITIAL SPAWN rate
    if (timer == 'timer-bloodstone-meta-reset' || timer == 'sidetimer-bloodstone-meta-reset'){
        if (status_bloodstone_meta == 1){
            status_bloodstone_meta = 0;
            time_bloodstone_meta = 60 * 60; 

            time_side_label_bloodstone_meta.innerHTML = '33:00';
            time_side_label_bloodstone_meta.style.color = 'black';
            sidebox_timer_bloodstone_meta.style.background = 'transparent';

            timerBloodstoneMeta();
            status_bloodstone_meta = 1;
            timerBloodstoneMeta();

            timerTangledDepthsOgre4();
            status_tangled_depths_ogre_4 = 1;
            timerTangledDepthsOgre4();
        }
    }
    if (timer == 'timer-bloodstone-1-reset' || timer == 'sidetimer-bloodstone-1-reset'){
		if (status_bloodstone_1 == 1){
			status_bloodstone_1 = 0;
			time_bloodstone_1 = 60 * 30; 
			time_label_bloodstone_1.innerHTML = "30:00";
			time_text_bloodstone_1.style.opacity = 0;
			time_label_bloodstone_1.style.color = "black";

			time_side_label_bloodstone_1.innerHTML = time_label_bloodstone_1.innerHTML;
			time_side_label_bloodstone_1.style.color = time_label_bloodstone_1.style.color;

			sidebox_timer_bloodstone_1.style.background = "transparent";

			timerBloodstone1();
			status_bloodstone_1 = 1;
			timerBloodstone1();
		}
	}
}

// Bloodstone Maw 
function timerBloodstoneMeta(){
    var date_now = Date.now();

    function run_countdown() {
        // Defaults
        next_progress = "Bloodstone Maw";
        progress_bar_meta.style.background = progress_color;
        progress_text_meta.style.color = 'black';
        hide_multiple_elements(15,16,'bloodstone-img-','opacity'); // Maw icons
		hide_multiple_elements(17,18,'bloodstone-img-','display'); // Maw icon animations

        var countdown = getTime(date_now, time_bloodstone_meta, 'none', time_side_label_bloodstone_meta, numerical_sidebox_timer_bloodstone_meta);
        if (countdown.time <= 0){ 
           
            next_progress = "Bloodstone Maw (overtime)";
            progress_bar_meta.style.background = meta_color;
            new_bloodstone_time = time_bloodstone_meta;
            progress_text_meta.style.color = '#802020';

            sidebox_timer_bloodstone_meta.style.background = meta_color;
            time_side_label_bloodstone_meta.style.color = 'red';

           	show_multiple_elements(15,16,'bloodstone-img-','opacity'); // Maw icons
			hide_multiple_elements(17,18,'bloodstone-img-','display'); // Maw icon animations

        } else if (countdown.time <= 60){
            new_bloodstone_time = time_bloodstone_meta - countdown.time;

        } else if (countdown.time <= 300){
            progress_bar_meta.style.background = pre_meta_color;
            new_bloodstone_time = time_bloodstone_meta - countdown.time;

            sidebox_timer_bloodstone_meta.style.background = pre_meta_color;

			show_multiple_elements(17,18,'bloodstone-img-','display'); // Maw icon animations

        } else if (countdown.time <= time_bloodstone_meta){
            new_bloodstone_time = time_bloodstone_meta - countdown.time;

        }
        meta_width = (new_bloodstone_time/time_bloodstone_meta)*100;
        progress_bar_meta.style.width = meta_width + "%";
        progress_text_meta.innerHTML = getDisplayTime(countdown.time) + " &#x27F6; " + next_progress;
    }
    run_countdown(); 
    if (status_bloodstone_meta == 1){
        bloodstone_meta = setInterval(run_countdown, 1000);
    } else {
        clearInterval(bloodstone_meta);   
    } 
}

// Hablion 
function timerBloodstone1(){
    var date_now = Date.now();

    function run_countdown() {
        var countdown = getTime(date_now, time_bloodstone_1, time_label_bloodstone_1, time_side_label_bloodstone_1, numerical_sidebox_timer_bloodstone_1);
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(time_text_bloodstone_1, time_label_bloodstone_1, sidebox_timer_bloodstone_1, time_side_label_bloodstone_1);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(time_text_bloodstone_1, sidebox_timer_bloodstone_1);
        }
    }
    run_countdown(); 
    if (status_bloodstone_1 == 1){
        bloodstone_1 = setInterval(run_countdown, 1000);
    } else {
        clearInterval(bloodstone_1);   
    } 
}

// Checkboxes
function bloodstone_All_Checkbox(obj){
	var checkbox = obj,
		spirits = document.getElementById('bloodstone-spirits-checkbox'),
		maw = document.getElementById('bloodstone-meta-checkbox'),
		b1 = document.getElementById('bloodstone-1-checkbox'); 

	if (checkbox.checked == true){
		spirits.checked = true;
		maw.checked = true;
		b1.checked = true;

		bloodstone_Spirits_Checkbox(spirits);
		bloodstone_Meta_Checkbox(maw);
		bloodstone_1_Checkbox(b1);
	} else {
		spirits.checked = false;
		maw.checked = false;
		b1.checked = false;

		bloodstone_Spirits_Checkbox(spirits);
		bloodstone_Meta_Checkbox(maw);
		bloodstone_1_Checkbox(b1);
	}
}
// Spirits
function bloodstone_Spirits_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_bloodstone_spirits.style.display = "block";
    } else {
        sidebox_timer_bloodstone_spirits.style.display = "none";
    }
}
// Bloodstone Maw
function bloodstone_Meta_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_bloodstone_meta.style.display = "block";
    } else {
        sidebox_timer_bloodstone_meta.style.display = "none";
    }
}
// Justicar Hablion
function bloodstone_1_Checkbox(obj){
    var checkbox = obj;
    if (checkbox.checked == true){
        sidebox_timer_bloodstone_1.style.display = "block";
    } else {
        sidebox_timer_bloodstone_1.style.display = "none";
    }
}

// Interactive progress bar for Spirits meta 
function progress_meta(){

	if (progress_text_bottom.innerHTML == 'Exorcise the angered spirits!'){
		progress_text_bottom.innerHTML = 'Kill all 4 champions then Escort Alari!';
		progress_bar_bottom.style.width = 50+'%';

		show_multiple_elements(3,12,'bloodstone-img-','opacity'); // Boss icons
		show_multiple_elements(1,4,'bloodstone-arrow-','display'); // Arrows
		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // 

		revert = 1; // hide spirit 1st element

	} else if (progress_text_bottom.innerHTML == 'Kill all 4 champions then Escort Alari!'){
		progress_text_bottom.innerHTML = 'All objectives completed!';
		progress_bar_bottom.style.width = 100+'%';

		hide_multiple_elements(3,12,'bloodstone-img-','opacity');
		hide_multiple_elements(1,4,'bloodstone-arrow-','display');

		revert = 2;
	}
}
	

	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
		result,
		hours,
		minutes,
		seconds;

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 0 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((1 * 3600) + (40 * 60)) - ((0 * 3600) + (30 * 60));
        new_time = time - ((0 * 3600) + (30 * 60));
        result = ((1 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((1 * 3600) + (45 * 60)) - ((1 * 3600) + (40 * 60));
        	new_time = time - ((1 * 3600) + (40 * 60));
        	result = ((1 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 2 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((2 * 3600) + (25 * 60)) - ((1 * 3600) + (45 * 60));
        	new_time = time - ((1 * 3600) + (45 * 60));
        	result = ((2 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((2 * 3600) + (30 * 60)) - ((2 * 3600) + (25 * 60));
        		new_time = time - ((2 * 3600) + (25 * 60));
        		result = ((2 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%'; 
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 2 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((3 * 3600) + (40 * 60)) - ((2 * 3600) + (30 * 60));
        new_time = time - ((2 * 3600) + (30 * 60));
        result = ((3 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((3 * 3600) + (45 * 60)) - ((3 * 3600) + (40 * 60));
        	new_time = time - ((3 * 3600) + (40 * 60));
        	result = ((3 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((4 * 3600) + (25 * 60)) - ((3 * 3600) + (45 * 60));
        	new_time = time - ((3 * 3600) + (45 * 60));
        	result = ((4 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((4 * 3600) + (30 * 60)) - ((4 * 3600) + (25 * 60));
        		new_time = time - ((4 * 3600) + (25 * 60));
        		result = ((4 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 4 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((5 * 3600) + (40 * 60)) - ((4 * 3600) + (30 * 60));
        new_time = time - ((4 * 3600) + (30 * 60));
        result = ((5 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((5 * 3600) + (45 * 60)) - ((5 * 3600) + (40 * 60));
        	new_time = time - ((5 * 3600) + (40 * 60));
        	result = ((5 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 6 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((6 * 3600) + (25 * 60)) - ((5 * 3600) + (45 * 60));
        	new_time = time - ((5 * 3600) + (45 * 60));
        	result = ((6 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((6 * 3600) + (30 * 60)) - ((6 * 3600) + (25 * 60));
        		new_time = time - ((6 * 3600) + (25 * 60));
        		result = ((6 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 6 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((7 * 3600) + (40 * 60)) - ((6 * 3600) + (30 * 60));
        new_time = time - ((6 * 3600) + (30 * 60));
        result = ((7 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((7 * 3600) + (45 * 60)) - ((7 * 3600) + (40 * 60));
        	new_time = time - ((7 * 3600) + (40 * 60));
        	result = ((7 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((8 * 3600) + (25 * 60)) - ((7 * 3600) + (45 * 60));
        	new_time = time - ((7 * 3600) + (45 * 60));
        	result = ((8 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((8 * 3600) + (30 * 60)) - ((8 * 3600) + (25 * 60));
        		new_time = time - ((8 * 3600) + (25 * 60));
        		result = ((8 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 8 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((9 * 3600) + (40 * 60)) - ((8 * 3600) + (30 * 60));
        new_time = time - ((8 * 3600) + (30 * 60));
        result = ((9 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((9 * 3600) + (45 * 60)) - ((9 * 3600) + (40 * 60));
        	new_time = time - ((9 * 3600) + (40 * 60));
        	result = ((9 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 10 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((10 * 3600) + (25 * 60)) - ((9 * 3600) + (45 * 60));
        	new_time = time - ((9 * 3600) + (45 * 60));
        	result = ((10 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((10 * 3600) + (30 * 60)) - ((10 * 3600) + (25 * 60));
        		new_time = time - ((10 * 3600) + (25 * 60));
        		result = ((10 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 10 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((11 * 3600) + (40 * 60)) - ((10 * 3600) + (30 * 60));
        new_time = time - ((10 * 3600) + (30 * 60));
        result = ((11 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((11 * 3600) + (45 * 60)) - ((11 * 3600) + (40 * 60));
        	new_time = time - ((11 * 3600) + (40 * 60));
        	result = ((11 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((12 * 3600) + (25 * 60)) - ((11 * 3600) + (45 * 60));
        	new_time = time - ((11 * 3600) + (45 * 60));
        	result = ((12 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((12 * 3600) + (30 * 60)) - ((12 * 3600) + (25 * 60));
        		new_time = time - ((12 * 3600) + (25 * 60));
        		result = ((12 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 12 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((13 * 3600) + (40 * 60)) - ((12 * 3600) + (30 * 60));
        new_time = time - ((12 * 3600) + (30 * 60));
        result = ((13 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((13 * 3600) + (45 * 60)) - ((13 * 3600) + (40 * 60));
        	new_time = time - ((13 * 3600) + (40 * 60));
        	result = ((13 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 14 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((14 * 3600) + (25 * 60)) - ((13 * 3600) + (45 * 60));
        	new_time = time - ((13 * 3600) + (45 * 60));
        	result = ((14 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((14 * 3600) + (30 * 60)) - ((14 * 3600) + (25 * 60));
        		new_time = time - ((14 * 3600) + (25 * 60));
        		result = ((14 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress;  
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 14 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((15 * 3600) + (40 * 60)) - ((14 * 3600) + (30 * 60));
        new_time = time - ((14 * 3600) + (30 * 60));
        result = ((15 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((15 * 3600) + (45 * 60)) - ((15 * 3600) + (40 * 60));
        	new_time = time - ((15 * 3600) + (40 * 60));
        	result = ((15 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 16 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((16 * 3600) + (25 * 60)) - ((15 * 3600) + (45 * 60));
        	new_time = time - ((15 * 3600) + (45 * 60));
        	result = ((16 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((16 * 3600) + (30 * 60)) - ((16 * 3600) + (25 * 60));
        		new_time = time - ((16 * 3600) + (25 * 60));
        		result = ((16 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 16 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((17 * 3600) + (40 * 60)) - ((16 * 3600) + (30 * 60));
        new_time = time - ((16 * 3600) + (30 * 60));
        result = ((17 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((17 * 3600) + (45 * 60)) - ((17 * 3600) + (40 * 60));
        	new_time = time - ((17 * 3600) + (40 * 60));
        	result = ((17 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 18 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((18 * 3600) + (25 * 60)) - ((17 * 3600) + (45 * 60));
        	new_time = time - ((17 * 3600) + (45 * 60));
        	result = ((18 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((18 * 3600) + (30 * 60)) - ((18 * 3600) + (25 * 60));
        		new_time = time - ((18 * 3600) + (25 * 60));
        		result = ((18 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 18 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((19 * 3600) + (40 * 60)) - ((18 * 3600) + (30 * 60));
        new_time = time - ((18 * 3600) + (30 * 60));
        result = ((19 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((19 * 3600) + (45 * 60)) - ((19 * 3600) + (40 * 60));
        	new_time = time - ((19 * 3600) + (40 * 60));
        	result = ((19 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((20 * 3600) + (25 * 60)) - ((19 * 3600) + (45 * 60));
        	new_time = time - ((19 * 3600) + (45 * 60));
        	result = ((20 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((20 * 3600) + (30 * 60)) - ((20 * 3600) + (25 * 60));
        		new_time = time - ((20 * 3600) + (25 * 60));
        		result = ((20 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		if (d.getUTCHours() == 20 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0; 

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
		hide_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

		max_time = ((21 * 3600) + (40 * 60)) - ((20 * 3600) + (30 * 60));
        new_time = time - ((20 * 3600) + (30 * 60));
        result = ((21 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	show_multiple_elements(13,14,'bloodstone-img-','display'); // Spirit meta 1st event animation

        	max_time = ((21 * 3600) + (45 * 60)) - ((21 * 3600) + (40 * 60));
        	new_time = time - ((21 * 3600) + (40 * 60));
        	result = ((21 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 22 && d.getUTCMinutes() < 30){
        	progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1; 

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((22 * 3600) + (25 * 60)) - ((21 * 3600) + (45 * 60));
        	new_time = time - ((21 * 3600) + (45 * 60));
        	result = ((22 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((22 * 3600) + (30 * 60)) - ((22 * 3600) + (25 * 60));
        		new_time = time - ((22 * 3600) + (25 * 60));
        		result = ((22 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress;  
	}

	// New cycle (GMT)
	// Spirits Day - Every even hour at 0:30 until 1:45
	// Spirits night - Every odd hour at 1:45 until 2:30
	// Total time - 0:30 thru 2:30
	if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
		// Day time 
		// Defaults
		// Set time to 24*3600 when UTC hour is 0
        if (d.getUTCHours() == 0){
            time = 24 * 3600 + d.getUTCMinutes() * 60 + d.getUTCSeconds();
        }
        if (d.getUTCHours() == 22 && d.getUTCMinutes() == 30 && d.getUTCSeconds() == 0){
			if (revert != 0){
				revert = 0; 
			}
		}
		progress_box_bottom.style.opacity = 0;
        bottom_button.style.opacity = 0;

		current_status.innerHTML = 'Status: Day time'; 
		next_progress = 'Dusk'
		progress_bar.style.background = progress_color;

		// Sidebox
		sidebox_timer_bloodstone_spirits.style.background = 'transparent';

		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event

		max_time = ((23 * 3600) + (40 * 60)) - ((22 * 3600) + (30 * 60));
        new_time = time - ((22 * 3600) + (30 * 60));
        result = ((23 * 3600) + (40 * 60)) - time;

        // Dusk
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 45){
        	current_status.innerHTML = "Status: Dusk";
        	next_progress = 'Night time';
        	progress_bar.style.background = pre_meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = pre_meta_color;

        	max_time = ((23 * 3600) + (45 * 60)) - ((23 * 3600) + (40 * 60));
        	new_time = time - ((23 * 3600) + (40 * 60));
        	result = ((23 * 3600) + (45 * 60)) - time;
        }
        // Night time
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
 			progress_box_bottom.style.opacity = 1;
        	bottom_button.style.opacity = 1;  

        	if (revert == 0){
        		show_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	} else if (revert == 2){
        		bottom_button.style.opacity = 0;
        	} else {
        		hide_multiple_elements(1,2,'bloodstone-img-','opacity'); // Spirit meta 1st event
        	}

        	current_status.innerHTML = "Status: Night time";
        	next_progress = 'Dawn';
        	progress_bar.style.background = meta_color; 

        	// Sidebox
        	sidebox_timer_bloodstone_spirits.style.background = meta_color;

        	max_time = ((24 * 3600) + (25 * 60)) - ((23 * 3600) + (45 * 60));
        	new_time = time - ((23 * 3600) + (45 * 60));
        	result = ((24 * 3600) + (25 * 60)) - time;

        	// Dawn 
        	if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 25 && d.getUTCMinutes() < 30){
        		current_status.innerHTML = 'Status: Dawn'; 
        		next_progress = 'Day time';

        		max_time = ((24 * 3600) + (30 * 60)) - ((24 * 3600) + (25 * 60));
        		new_time = time - ((24 * 3600) + (25 * 60));
        		result = ((24 * 3600) + (30 * 60)) - time;
        	}
        }

		// time result
		width = (new_time/max_time)*100;
		progress_bar.style.width = width + '%';
		getTime(d, result, 'none', time_side_label_bloodstone_spirits, numerical_sidebox_timer_bloodstone_spirits);
		progress_text.innerHTML = getDisplayTime(result) + ' &#x27F6; ' + next_progress; 
	}

		console.log(d.getUTCHours(), d.getUTCMinutes());
	}, 1000);