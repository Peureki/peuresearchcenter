
var sort_interval = setInterval(function() {
	community_sort(document.getElementById('community-sort'));
}, 1000);

// Sorts the event table on the left on community pages by upcoming event
function community_sort(obj){
  var switching, i, x, y, shouldSwitch;
  var left_sidetimer = obj.children;
  switching = true;

  while (switching) {
    switching = false;
    
    for (i = 0; i < (left_sidetimer.length - 1); i++) {
      shouldSwitch = false;
      
      x = left_sidetimer[i].getElementsByTagName("p2");
      y = left_sidetimer[i+1].getElementsByTagName("p2");

      if (parseInt(x[0].innerHTML) > parseInt(y[0].innerHTML)) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) { 
      left_sidetimer[i].parentNode.insertBefore(left_sidetimer[i + 1], left_sidetimer[i]);
      switching = true;
    }
  }
}

// First Saturday of every next month at 16:00 UTC
function getSaturday() {
    var d = new Date(),
        month = d.getMonth();
        saturdays= [];

    var next = new Date(d.getFullYear(), d.getMonth() + 1);
    var current = new Date(d.getFullYear(), d.getMonth());
    d.setDate(1);

    // Get the first Monday in the month
    while (next.getDay() !== 6) {
        next.setDate(next.getDate() + 1);
    }

    // Get the first Monday in the month
    while (current.getDay() !== 6) {
        current.setDate(current.getDate() + 1);
    }

    next.setHours(16);
    current.setHours(d.getUTCHours());
    current.setMinutes(d.getUTCMinutes());
    current.setSeconds(d.getUTCSeconds());

    return {
    	next: next,
    	current: current
    };
}

async function peu_Train(){

	const api = 'https://script.google.com/macros/s/AKfycbyJvkwmtIfvhVb4I2muUoNs5kATfp4fhMk6cMoIsmlKHmrJoeY/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Date (year, month, day, hour, minute, second, milisecond)
	var newDate = new Date(Date.UTC(data.spreadsheet[7].farm, data.spreadsheet[7].days, data.spreadsheet[7].hours, data.spreadsheet[7].minutes, data.spreadsheet[7].seconds));

	var days_HTML = document.getElementById("days-0"),
		hours_HTML = document.getElementById("hours-0"),
		minutes_HTML = document.getElementById("minutes-0"),
		seconds_HTML = document.getElementById("seconds-0"),
		progress_bar = document.getElementById("peu-progress-bar"),
		num = document.getElementById('peu-num'),
		box = document.getElementById('peu-box'),
		input_train = document.getElementById('train-name');

	var days = parseInt(data.spreadsheet[7].hours),
		hours = parseInt(data.spreadsheet[7].minutes),
		minutes = parseInt(data.spreadsheet[7].seconds),
		seconds = 0;

	var width,
		temp_time = 0,
		pre_time = 0,
		event_time,
		end_time, 
		result,
		num_result;

	input_train.innerHTML = data.spreadsheet[0].farm;

	var timer = setInterval(function(){
		var d = new Date();
		var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

		progress_bar.style.background = "#ddd"; // bar disppears
		pre_time = 0;
		event_time = 0;

		end_time = ((days * 86400) + (hours * 3600) + (minutes * 60) + (seconds));

		// If a Saturday train is beyond reset, this makes sure the time still stays relevant for UTC time
		if (days == 6 && d.getUTCDay() == 0 && d.getUTCHours() < 3){
			time = 6*86400 + (d.getUTCHours()*3600 + 24*3600) + d.getUTCMinutes()*60 + d.getUTCSeconds();
		}

		if (days == 6 && d.getUTCDay() == 0){
			time = 7*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();
		}
		if (days == 6 && d.getUTCDay() == 1){
			time = 8*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();
		}
		if (days == 6 && d.getUTCDay() == 2){
			time = 9*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();
		}
		
		result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// < 1 hour til event
    	if (result < 3600 && result > 0){
			progress_bar.style.background = pre_meta_color;

			event_time = 3600;
            pre_time = (3600 - result);
		}

		// Event is ongoing for 1 hour
		if (result <= 0 && result >= -3600){
			progress_bar.style.background = meta_color;

			event_time = 100;
			pre_time = 100;
		}

		if (result < -3600){
			box.style.opacity = 0.2;
			num_result = 10000000000000;
		}

		// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}


    	format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	}, 1000);
}


function infusion_Train(){
	var width,
		pre_time,
		event_time,
		end_time, 
		result,
		num_result;
	var num = document.getElementById('infusion-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-1"),
			hours_HTML = document.getElementById("hours-1"),
			minutes_HTML = document.getElementById("minutes-1"),
			seconds_HTML = document.getElementById("seconds-1"),
			progress_bar = document.getElementById("infusion-progress-bar");

		progress_bar.style.background = "#ddd"; // bar disppears
		pre_time = 0;
		event_time = 0;
			
		// Start times (UTC): 
		// Monday (1), 00:00
		// Thursday (4), 00:00
		// Saturday (6), 00:00
		if (d.getUTCDay() == 6 && d.getUTCHours() > 0
			|| d.getUTCDay() == 0
			|| d.getUTCDay() == 1 && d.getUTCHours() <= 0){

			end_time = ((1 * 86400) + (0 * 3600) + (0 * 60)); 
			// Only after Friday's reset, set up time for next Sunday as 8 (6 + 2 days)
	    	if (d.getUTCDay() == 6){
	    		end_time = ((8 * 86400) + (0 * 3600) + (0 * 60)); 
	    	}

			if (d.getUTCDay() == 0 && d.getUTCHours() == 23){
				progress_bar.style.background = pre_meta_color;

				event_time = ((0 * 86400) + (24 * 3600) + (0 * 60)) - ((0 * 86400) + (23 * 3600) + (0 * 60));
                pre_time = time - ((0 * 86400) + (23 * 3600) + (0 * 60));
			}

			if (d.getUTCDay() == 1 && d.getUTCHours() == 0){

				progress_bar.style.background = meta_color;
				event_time = 100;
				pre_time = 100;
			}
		}

	    if (d.getUTCDay() == 1 && d.getUTCHours() > 0
	    	|| d.getUTCDay() == 2
	    	|| d.getUTCDay() == 3 
	    	|| d.getUTCDay() == 4 && d.getUTCHours() <= 0){

	    	end_time = ((4 * 86400) + (0 * 3600) + (0 * 60)); 

	    	if (d.getUTCDay() == 3 && d.getUTCHours() == 23){
				progress_bar.style.background = pre_meta_color;

				event_time = ((3 * 86400) + (24 * 3600) + (0 * 60)) - ((3 * 86400) + (23 * 3600) + (0 * 60));
                pre_time = time - ((3 * 86400) + (23 * 3600) + (0 * 60));
			}

			if (d.getUTCDay() == 4 && d.getUTCHours() == 0){

				progress_bar.style.background = meta_color;
				event_time = 100;
				pre_time = 100;
			}

	    	 
	    	result = end_time - time;
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	} 
	    }

	    if (d.getUTCDay() == 4 && d.getUTCHours() > 0
	    	|| d.getUTCDay() == 5
	    	|| d.getUTCDay() == 6 && d.getUTCHours() <= 0){

	    	if (d.getUTCDay() == 5 && d.getUTCHours() == 23){
				progress_bar.style.background = pre_meta_color;

				event_time = ((5 * 86400) + (24 * 3600) + (0 * 60)) - ((5 * 86400) +  (23 * 3600) + (0 * 60));
                pre_time = time - ((5 * 86400) +  (23 * 3600) + (0 * 60));

			}

			if (d.getUTCDay() == 6 && d.getUTCHours() == 0){

				progress_bar.style.background = meta_color;
				event_time = 100;
				pre_time = 100;
			}

	    	end_time = ((6 * 86400) + (0 * 3600) + (0 * 60));  
	    	result = end_time - time; 
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }
	    result = end_time - time; 
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	
	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;
	},1000); 
}

function LS4_Train(){
	var width,
		pre_time,
		event_time,
		end_time, 
		result,
		num_result;

	var	num = document.getElementById('ls4-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();


	    var days_HTML = document.getElementById("days-2"),
			hours_HTML = document.getElementById("hours-2"),
			minutes_HTML = document.getElementById("minutes-2"),
			seconds_HTML = document.getElementById("seconds-2"),
			progress_bar = document.getElementById("ls4-progress-bar");

		progress_bar.style.background = "#ddd"; // bar disppears
		pre_time = 0;
		event_time = 0;

		// Start times (UTC): 
		// 00:45 
		// 7:45
		// 13:45
		// 17:45
		if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 45
	    	|| d.getUTCHours() == 4
	    	|| d.getUTCHours() == 5
	    	|| d.getUTCHours() == 6
	    	|| d.getUTCHours() == 7
	    	|| d.getUTCHours() == 8
	    	|| d.getUTCHours() == 9
	    	|| d.getUTCHours() == 10 && d.getUTCMinutes() < 45){

			if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 7 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

				event_time = ((7 * 3600) + (45 * 60)) - ((6 * 3600) + (45 * 60));
                pre_time = time - ((6 * 3600) + (45 * 60));
			}

			if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 45
				|| d.getUTCHours() == 8 
				|| d.getUTCHours() == 9
				|| d.getUTCHours() == 10 && d.getUTCMinutes() < 45){

				progress_bar.style.background = meta_color;
				event_time = 100;
				pre_time = 100;
			}
			
			end_time = ((7 * 3600) + (45 * 60)); 
	    	result = end_time - time; 
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }

	    // Starts at 13:45
	    if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 45
	    	|| d.getUTCHours() == 11
	    	|| d.getUTCHours() == 12
	    	|| d.getUTCHours() == 13
	    	|| d.getUTCHours() == 14
	    	|| d.getUTCHours() == 15
	    	|| d.getUTCHours() == 16 && d.getUTCMinutes() < 45){

	    	if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 13 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

				event_time = ((13 * 3600) + (45 * 60)) - ((12 * 3600) + (45 * 60));
                pre_time = time - ((12 * 3600) + (45 * 60));
			}

			if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 45
				|| d.getUTCHours() == 14
				|| d.getUTCHours() == 15
				|| d.getUTCHours() == 16 && d.getUTCMinutes() < 45){

				progress_bar.style.background = meta_color;

				event_time = 100;
				pre_time = 100;
			}
		
	    	end_time = ((13 * 3600) + (45 * 60));
	    	result = end_time - time; 
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }

	    // Starts at 17:45
	    if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 45
	    	|| d.getUTCHours() == 17
	    	|| d.getUTCHours() == 18
	    	|| d.getUTCHours() == 19
	    	|| d.getUTCHours() == 20 && d.getUTCMinutes() < 45){

	    	if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 17 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

				event_time = ((17 * 3600) + (45 * 60)) - ((16 * 3600) + (45 * 60));
                pre_time = time - ((16 * 3600) + (45 * 60));
			}

			if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 45
				|| d.getUTCHours() == 18
				|| d.getUTCHours() == 19
				|| d.getUTCHours() == 20 && d.getUTCMinutes() < 45){

				progress_bar.style.background = meta_color;

				event_time = 100;
				pre_time = 100;
			}

	    	end_time = ((17 * 3600) + (45 * 60)); 
	    	result = end_time - time; 
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }

	    // Starts at 00:45
	    if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 45
	    	|| d.getUTCHours() == 21
	    	|| d.getUTCHours() == 22
	    	|| d.getUTCHours() == 23
	    	|| d.getUTCHours() == 0
	    	|| d.getUTCHours() == 1
	    	|| d.getUTCHours() == 2
	    	|| d.getUTCHours() == 3 && d.getUTCMinutes() < 45){

	    	if (d.getUTCHours() <= 3 && d.getUTCMinutes() < 45){
	    		end_time = (0 * 3600) + (45 * 60);
	    		result = end_time - time;
	    		num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0
	    		// Ongoing. Displays the number as positve and goes up 
		    	if (result < 0){
		    		result = result * -1;
		    	} 
	    	} else {
	    		end_time = ((24 * 3600) + (45 * 60));
	    		result = end_time - time;;
	    		num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0
	    		// Ongoing. Displays the number as positve and goes up 
		    	if (result < 0){
		    		result = result * -1;
		    	} 
	    	}

	    	if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 45 || d.getUTCHours() == 0 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

				if (d.getUTCHours() == 0){
					event_time = ((0 * 3600) + (45 * 60)) - ((-1 * 3600) + (45 * 60));
                	pre_time = time - ((-1 * 3600) + (45 * 60));
				} else {
					event_time = ((24 * 3600) + (45 * 60)) - ((23 * 3600) + (45 * 60));
               		pre_time = time - ((23 * 3600) + (45 * 60));
				}		
			}

			if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 45
				|| d.getUTCHours() == 1
				|| d.getUTCHours() == 2
				|| d.getUTCHours() == 3 && d.getUTCMinutes() < 45){
				progress_bar.style.background = meta_color;

				end_time = (0 * 3600) + (45 * 60);
	    		result = end_time - time;
	    		num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0
	    		// Ongoing. Displays the number as positve and goes up 
		    	if (result < 0){
		    		result = result * -1;
		    	} 

				event_time = 100;
				pre_time = 100;
			}
	    	
	    	 
	    }

	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000); 

}

function LS3_Train(){
	var width,
		pre_time,
		event_time,
		end_time, 
		result,
		num_result;
	var num = document.getElementById('ls3-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-3"),
			hours_HTML = document.getElementById("hours-3"),
			minutes_HTML = document.getElementById("minutes-3"),
			seconds_HTML = document.getElementById("seconds-3"),
			progress_bar = document.getElementById("ls3-progress-bar");

		progress_bar.style.background = "#ddd"; // bar disppears
		pre_time = 0;
		event_time = 0;

		// Start times (UTC): 
		// Wednesdays 13:00
		// Duration: 3 hours+
	    if (d.getUTCDay() == 0
	    	|| d.getUTCDay() == 1
	    	|| d.getUTCDay() == 2
	    	|| d.getUTCDay() == 3 && d.getUTCHours() <= 15){

	    	end_time = ((3 * 86400) + (13 * 3600) + (0 * 60)); 

	    	if (d.getUTCDay() == 3 && d.getUTCHours() == 12){
	    		progress_bar.style.background = pre_meta_color;

	    		event_time = ((13 * 3600) + (0 * 60)) - ((12 * 3600) + (0 * 60));
                pre_time = time - ((12 * 3600) + (0 * 60));
	    	}

	    	if (d.getUTCDay() == 3 && d.getUTCHours() >= 13 && d.getUTCHours() <= 15){
	    		progress_bar.style.background = meta_color;

	    		event_time = 100;
                pre_time = 100;
	    	}

	    	 
	    	result = end_time - time;
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}

	    }


	    if (d.getUTCDay() == 3 && d.getUTCHours() >= 16
	    	|| d.getUTCDay() == 4
	    	|| d.getUTCDay() == 5
	    	|| d.getUTCDay() == 6){

	    	pre_time = 0; //set bar to none
	    	event_time = 0;

	    	end_time = ((10 * 86400) + (13 * 3600) + (0 * 60));  
	    	result = end_time - time; 
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }

	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000); 
}

function HoT_AO_Train(){
	var width,
		end_time, 
		result,
		num_result;
	var num = document.getElementById('hot-ao-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-4"),
			hours_HTML = document.getElementById("hours-4"),
			minutes_HTML = document.getElementById("minutes-4"),
			seconds_HTML = document.getElementById("seconds-4"),
			progress_bar = document.getElementById("hot-ao-progress-bar");

		progress_bar.style.background = "#ddd"; // bar disppears
		pre_time = 0;
		event_time = 0;

		// Start times (UTC): 
		// Weekdays at reset
		// Duration: ~2 hours

		// Monday at reset
	    if (d.getUTCDay() == 6 && d.getUTCHours() >= 2
	    	|| d.getUTCDay() == 0
	    	|| d.getUTCDay() == 1
	    	|| d.getUTCDay() == 2 && d.getUTCHours() < 2){

	    	pre_time = 0; // set bar to none
	    	event_time = 0;

	    	end_time = ((2 * 86400) + (0 * 3600) + (0 * 60));  
	    	if (d.getUTCDay() == 6){
	    		end_time = ((9 * 86400) + (0 * 3600) + (0 * 60));
	    	}

	    	if (d.getUTCDay() == 1 && d.getUTCHours() == 23){
	    		progress_bar.style.background = pre_meta_color;

	    		event_time = ((1 * 86400) + (24 * 3600) + (0 * 60)) - ((1 * 86400) + (23 * 3600) + (0 * 60));
                pre_time = time - ((1 * 86400) + (23 * 3600) + (0 * 60));
	    	}

	    	if (d.getUTCDay() == 2 && d.getUTCHours() < 2){
	    		progress_bar.style.background = meta_color;

	    		event_time = 100;
                pre_time = 100;
	    	}


	    	result = end_time - time;
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }
	    console.log(d.getUTCDay(), d.getUTCHours());
	   	
	   	// Monday's reset 
	   	/*
	   	if (d.getUTCDay() == 1 && d.getUTCHours() >= 2 || d.getUTCDay() == 2 && d.getUTCHours() < 2){
	   		weekday(2,1,0);
	   	} */
	   	// Tuesday's reset
	   	if (d.getUTCDay() == 2 && d.getUTCHours() >= 2 || d.getUTCDay() == 3 && d.getUTCHours() < 2){
	   		weekday(3,2,1); // Tuesday
	   	}
	   	// Wednesday's reset
	   	if (d.getUTCDay() == 3 && d.getUTCHours() >= 2 || d.getUTCDay() == 4 && d.getUTCHours() < 2){
	   		weekday(4,3,2); // Wednesday
	   	}
	   	// Thursday's reset
	   	if (d.getUTCDay() == 4 && d.getUTCHours() >= 2 || d.getUTCDay() == 5 && d.getUTCHours() < 2){
	   		weekday(5,4,3); // Thursday
	   	}
	   	// Friday's reset
	   	if (d.getUTCDay() == 5 && d.getUTCHours() >= 2 || d.getUTCDay() == 6 && d.getUTCHours() < 2){
	   		weekday(6,5,4); // Friday
	   	}
   		  
	    // Easy plug in function for weekdays
	    // Day = num for the day of the train 
	    // Previous_Day = num for the day before the train
	    function weekday(next_day, day, previous_day){

	    	progress_bar.style.background = "#ddd"; // default background
	    	pre_time = 0;
			event_time = 0;
	    	end_time = ((next_day * 86400) + (0 * 3600) + (0 * 60)); // default end time

	    	if (d.getUTCDay() == day && d.getUTCHours() == 23){
	    		progress_bar.style.background = pre_meta_color;

	    		event_time = ((day * 86400) + (24 * 3600) + (0 * 60)) - ((day * 86400) + (23 * 3600) + (0 * 60));
                pre_time = time - ((day * 86400) + (23 * 3600) + (0 * 60));
	    	}

		    if (d.getUTCDay() == next_day && d.getUTCHours() < 2){
		    	progress_bar.style.background = meta_color;

		    	event_time = 100;
		    	pre_time = 100;
		    
		    	end_time = ((next_day * 86400) + (0 * 3600) + (0 * 60));  
		    	
		    }  
	    	result = end_time - time;
	    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

	    	// Ongoing. Displays the number as positve and goes up 
	    	if (result < 0){
	    		result = result * -1;
	    	}
	    }

	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";
	    console.log(width);

	    num.innerHTML = num_result;

	},1000); 
}

function HPMP_EL_Train(){
	var width,
		end_time, 
		result,
		num_result;
	var num = document.getElementById('hpmp-el-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-5"),
			hours_HTML = document.getElementById("hours-5"),
			minutes_HTML = document.getElementById("minutes-5"),
			seconds_HTML = document.getElementById("seconds-5"),
			progress_bar = document.getElementById("hpmp-el-progress-bar");

		// Start times (UTC): 
		// Saturdays at 20:00 
		// Duration: ~2 hours

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

    	if (d.getUTCDay() == 6 && d.getUTCHours() == 19){
    		progress_bar.style.background = pre_meta_color;

    		event_time = ((6 * 86400) + (20 * 3600) + (0 * 60)) - ((6 * 86400) + (19 * 3600) + (0 * 60));
            pre_time = time - ((6 * 86400) + (19 * 3600) + (0 * 60));
    	}

    	if (d.getUTCDay() == 6 && d.getUTCHours() > 19 && d.getUTCHours() < 23){
    		progress_bar.style.background = meta_color;

    		event_time = 100;
            pre_time = 100;
    	}
	    
	    // When it's Saturday UTC 1 hour before Sunday, displays the accurate time
	    if (d.getUTCDay() == 6 && d.getUTCHours() == 23){
	    	end_time = ((13 * 86400) + (22 * 3600) + (0 * 60));  
	    } else {
	    	end_time = ((6 * 86400) + (20 * 3600) + (0 * 60)); 
	    } 
    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
	   
	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000); 
}

function POF_AO_Train(){
	var width,
		end_time, 
		result,
		num_result;
	var num = document.getElementById('pof-ao-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-6"),
			hours_HTML = document.getElementById("hours-6"),
			minutes_HTML = document.getElementById("minutes-6"),
			seconds_HTML = document.getElementById("seconds-6"),
			progress_bar = document.getElementById("pof-ao-progress-bar");

		// Start times (UTC): 
		// Saturdays at 3:30 
		// Duration: ~1 hour

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;
		end_time = ((6 * 86400) + (3 * 3600) + (30 * 60));

	    // 1 hour til event
	    if (d.getUTCDay() == 6 && d.getUTCHours() == 2 && d.getUTCMinutes() >= 30 || d.getUTCDay() == 6 && d.getUTCHours() == 3 && d.getUTCMinutes() < 30){
	    	progress_bar.style.background = pre_meta_color;

    		event_time = ((6 * 86400) + (3 * 3600) + (30 * 60)) - ((6 * 86400) + (2 * 3600) + (30 * 60));
            pre_time = time - ((6 * 86400) + (2 * 3600) + (30 * 60));
	    }
	    // Event time
	    if (d.getUTCDay() == 6 && d.getUTCHours() == 3 && d.getUTCMinutes() >= 30 || d.getUTCDay() == 6 && d.getUTCHours() == 4){
	    	progress_bar.style.background = meta_color;

    		event_time = 100;
            pre_time = 100;
	    }
	    // After event, til day 6 is over, temp time displayed
	    if (d.getUTCDay() == 6 && d.getUTCHours() > 4){
	    	end_time = ((12 * 86400) + (3 * 3600) + (30 * 60))
	    }

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
	   
	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000); 
}

function TT(){
	var width,
		end_time, 
		result,
		num_result;
	var num = document.getElementById('tt-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-7"),
			hours_HTML = document.getElementById("hours-7"),
			minutes_HTML = document.getElementById("minutes-7"),
			seconds_HTML = document.getElementById("seconds-7"),
			progress_bar = document.getElementById("tt-progress-bar");

		// Start times (UTC): 
		// Everyday at: 
		// 1:00
		// 4:00
		// 8:00
		// 12:30
		// 17:00
		// 20:00 
		// Duration: ~30 minutes

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		// 1:00
		if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 30
			|| d.getUTCHours() == 21
			|| d.getUTCHours() == 22
			|| d.getUTCHours() == 23
			|| d.getUTCHours() == 0
			|| d.getUTCHours() == 1 && d.getUTCMinutes() < 30){

			end_time = (1 * 3600) + (0 * 60);
			if (d.getUTCHours() == 20 
				|| d.getUTCHours() == 21 
				|| d.getUTCHours() == 22
				|| d.getUTCHours() == 23){
				end_time = (25 * 3600) + (0 * 60);
			}

			// 1 hour til event
			if (d.getUTCHours() == 0){
				progress_bar.style.background = pre_meta_color;

	    		event_time = ((1 * 3600) + (0 * 60)) - ((0 * 3600) + (0 * 60));
	            pre_time = time - ((0 * 3600) + (0 * 60));
			}

			// Event time
			if (d.getUTCHours() == 1 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

	    		event_time = 100;
	            pre_time = 100;
			}
		}

		// 4:00
		if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 30
			|| d.getUTCHours() == 2
			|| d.getUTCHours() == 3
			|| d.getUTCHours() == 4 && d.getUTCMinutes() < 30){

			end_time = (4 * 3600) + (0 * 60);

			// 1 hour til event
			if (d.getUTCHours() == 3){
				progress_bar.style.background = pre_meta_color;

	    		event_time = ((4 * 3600) + (0 * 60)) - ((3 * 3600) + (0 * 60));
	            pre_time = time - ((3 * 3600) + (0 * 60));
			}

			// Event time
			if (d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

	    		event_time = 100;
	            pre_time = 100;
			}
		}

		// 8:00
		if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 30
			|| d.getUTCHours() == 5
			|| d.getUTCHours() == 6
			|| d.getUTCHours() == 7
			|| d.getUTCHours() == 8 && d.getUTCMinutes() < 30){

			end_time = (8 * 3600) + (0 * 60);

			// 1 hour til event
			if (d.getUTCHours() == 7){
				progress_bar.style.background = pre_meta_color;

	    		event_time = ((8 * 3600) + (0 * 60)) - ((7 * 3600) + (0 * 60));
	            pre_time = time - ((7 * 3600) + (0 * 60));
			}

			// Event time
			if (d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

	    		event_time = 100;
	            pre_time = 100;
			}
		}

		// 12:30
		if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 30
			|| d.getUTCHours() == 9
			|| d.getUTCHours() == 10
			|| d.getUTCHours() == 11
			|| d.getUTCHours() == 12){

			end_time = (12 * 3600) + (30 * 60);

			// 1 hour til event
			if (d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

	    		event_time = ((12 * 3600) + (30 * 60)) - ((11 * 3600) + (30 * 60));
	            pre_time = time - ((11 * 3600) + (30 * 60));
			}

			// Event time
			if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = meta_color;

	    		event_time = 100;
	            pre_time = 100;
			}
		}

		// 17:00
		if (d.getUTCHours() == 13
			|| d.getUTCHours() == 14
			|| d.getUTCHours() == 15
			|| d.getUTCHours() == 16
			|| d.getUTCHours() == 17 && d.getUTCMinutes() < 30){

			end_time = (17 * 3600) + (0 * 60);
			// 1 hour til event
			if (d.getUTCHours() == 16){
				progress_bar.style.background = pre_meta_color;

	    		event_time = ((17 * 3600) + (0 * 60)) - ((16 * 3600) + (0 * 60));
	            pre_time = time - ((16 * 3600) + (0 * 60));
			}

			// Event time
			if (d.getUTCHours() == 17 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

	    		event_time = 100;
	            pre_time = 100;
			}
		}

		// 20:00
		if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 30
			|| d.getUTCHours() == 18
			|| d.getUTCHours() == 19
			|| d.getUTCHours() == 20 && d.getUTCMinutes() < 30){

			end_time = (20 * 3600) + (0 * 60);
			// 1 hour til event
			if (d.getUTCHours() == 19){
				progress_bar.style.background = pre_meta_color;

	    		event_time = ((20 * 3600) + (0 * 60)) - ((19 * 3600) + (0 * 60));
	            pre_time = time - ((19 * 3600) + (0 * 60));
			}

			// Event time
			if (d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

	    		event_time = 100;
	            pre_time = 100;
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
	   
	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000); 
}

function emi(){
	var width,
		end_time, 
		result,
		num_result,
		one_day = 1000*60*60*24,
		days_left_next,
		days_left_current;
	var num = document.getElementById('emi-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    var days_HTML = document.getElementById("days-8"),
			hours_HTML = document.getElementById("hours-8"),
			minutes_HTML = document.getElementById("minutes-8"),
			seconds_HTML = document.getElementById("seconds-8"),
			progress_bar = document.getElementById("emi-progress-bar");

		// Start times (UTC): 
		// Every first Saturday of every month at 16 UTC
		// Duration: ~8 hours

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		days_left_next = Math.ceil(Math.ceil(getSaturday().next.getTime()-d.getTime())/one_day);
		days_left_current = Math.ceil(Math.ceil(getSaturday().current.getTime()-d.getTime())/one_day);

		if (d.getMonth() < getSaturday().next.getMonth()){
				
			end_time = (((days_left_next-1) * 86400) + (11 * 3600) + (0 * 60));  
		}

		// When it's the same month
		if (d.getMonth() == getSaturday().current.getMonth() && days_left_current > 0){
			end_time = (((days_left_current) * 86400) + (11 * 3600) + (0 * 60));

			if (days_left_curernt < 6 && days_left_current > 0){
				end_time = (((6 * 86400) + (17 * 3600) + (0 * 60) + 1));
			}

			// Same day and same hours
			if (d.getDay() == getSaturday().current.getDay() && d.getUTCHours() >= 15){
				// 1 hour prior
				if (d.getUTCHours() == 16){
					progress_bar.style.background = pre_meta_color;

		    		event_time = ((getSaturday().current.getDay() * 86400) + (17 * 3600) + (30 * 60)) - ((getSaturday().current.getDay() * 86400) + (16 * 3600) + (30 * 60));
		            pre_time = time - ((getSaturday().current.getDay() * 86400) + (16 * 3600) + (30 * 60));
				}
				// Ongoing event
				if (d.getUTCHours() >= 17){
					progress_bar.style.background = meta_color;

		    		event_time = 100;
		            pre_time = 100;

				}
			} 
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
	   
	    format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000); 
}

// Format the time to display in days, hours, minutes, and seconds
// Takes the numbers into HTML 
function format_time(result_time, days, hours, minutes, seconds){
	var s = Math.floor(result_time);
	var m = Math.floor(s / 60);
	var h = Math.floor(m / 60);
	var d = Math.floor(h / 24);

	if (isNaN(s) == true){
		s = 0;
		m = 0;
		h = 0;
		d = 0;
	}

	h %= 24;
	m %= 60; 
	s %= 60;

	h = (h < 10) ? "0" + h : h;
	m = (m < 10) ? "0" + m : m;
	s = (s < 10) ? "0" + s : s; 

	days.innerHTML = d;
	hours.innerHTML = h;
	minutes.innerHTML = m;
	seconds.innerHTML = s;
}

// Checkboxes
function checkbox_Timers(checkbox, timerBox){
	var box = document.getElementById(timerBox);

	if (checkbox.checked == true){
		box.style.display = "block";
	} else {
		box.style.display = "none";
	}
}




// When the user clicks on div, open the popup
function popup(id) {
  var popup = document.getElementById(id);
  popup.classList.toggle("show");
}




