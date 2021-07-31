
var width,
	end_time, 
	result,
	temp_result,
	num_result,
	num,
	time,
	hours_HTML,
	minutes_HTML,
	seconds_HTML,
	progress_bar,
	parent,
	status,
	title, // Title of the meta box. ie: Gendarran - Ley-line Anomaly
	waypoint; // Waypoint code if changing

// Status for metas that are not on a global timer
var bsf_maw_status = 0,
	bff_status = 0,
	dm_cull_status = 0,
	sl_status = 0,
	ssi_storms_status = 0,
	ssi_specimen_status = 0,
	kourna_scarab_status = 0;

// Lists all the hours, mins, secs from the HTML into ints
var cooldowns = {
	bloodstone_maw: [
		// Beacons of Koda
		{hours: parseInt(document.getElementById("bsf-maw-hours").innerHTML), 
		minutes: parseInt(document.getElementById("bsf-maw-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("bsf-maw-seconds").innerHTML)}
	],
	bitterfrost: [
		// Beacons of Koda
		{hours: parseInt(document.getElementById("bff-koda-hours").innerHTML), 
		minutes: parseInt(document.getElementById("bff-koda-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("bff-koda-seconds").innerHTML)}
	],
	draconis_cull: [
		// Draconis Mons Cull the Destroyers
		{hours: parseInt(document.getElementById("dm-cull-hours").innerHTML), 
		minutes: parseInt(document.getElementById("dm-cull-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("dm-cull-seconds").innerHTML)}
	],
	sirens: [
		// Orrian Shrine Power Grid
		{hours: parseInt(document.getElementById("sl-shrines-hours").innerHTML), 
		minutes: parseInt(document.getElementById("sl-shrines-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("sl-shrines-seconds").innerHTML)}
	],
	sandswept_storms: [
		// Gathering Storms
		{hours: parseInt(document.getElementById("ssi-storms-hours").innerHTML), 
		minutes: parseInt(document.getElementById("ssi-storms-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("ssi-storms-seconds").innerHTML)}
	],
	sandswept_specimen: [
		// Specimen Chamber
		{hours: parseInt(document.getElementById("ssi-specimen-hours").innerHTML), 
		minutes: parseInt(document.getElementById("ssi-specimen-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("ssi-specimen-seconds").innerHTML)}
	],
	kourna_scarab: [
		// Specimen Chamber
		{hours: parseInt(document.getElementById("kourna-scarab-hours").innerHTML), 
		minutes: parseInt(document.getElementById("kourna-scarab-minutes").innerHTML), 
		seconds: parseInt(document.getElementById("kourna-scarab-seconds").innerHTML)}
	],

};

// Based on where the function was activated in the HTML will determine which part of the cooldowns object will be used
function check_farm(parentNode){
	switch (parentNode){
		case "bsf-maw-box":
		return cooldowns.bloodstone_maw; 
		break;

		case "bff-koda-box":
		return cooldowns.bitterfrost; 
		break;

		case "dm-cull-box":
		return cooldowns.draconis_cull; 
		break;

		case "sl-shrines-box":
		return cooldowns.sirens; 
		break;

		case "ssi-storms-box":
		return cooldowns.sandswept_storms;
		break;

		case "ssi-specimen-box":
		return cooldowns.sandswept_specimen;
		break;

		case "kourna-scarab-box":
		return cooldowns.kourna_scarab;
		break;
	}
}

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

// Ley-line Anomaly

function core_Anomaly(){
	var num = document.getElementById('core-anomaly-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("core-anomaly-hours");
		minutes_HTML = document.getElementById("core-anomaly-minutes");
		seconds_HTML = document.getElementById("core-anomaly-seconds");
		progress_bar = document.getElementById("core-anomaly-progress-bar");
		waypoint = document.getElementById("waypoint-button"); 
		title = document.getElementById("title-anomaly");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// Timberline Falls [&BEwCAAA=] 0:20, 6:20, 12:20, 18:20
		// Iron Marches [&BOcBAAA=] 2:10, 8:20, 14:20, 20:20
		// Gendarran Fields [&BJEBAAA=] 4:10, 10:20, 16:20, 22:20

		title.style.fontWeight = "bold";
		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		// Timberline Falls upcoming
		if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 10 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 16 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 22 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 20){
			title.innerHTML = "Timberline - Ley-line Anomaly";
			waypoint.addEventListener("click", copyWaypoint('[&BEwCAAA=]'));
		}
		// Iron Marches upcoming
		if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 6 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 12 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 18 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 20){
			title.innerHTML = "Iron Marches - Ley-line Anomaly";
			waypoint.addEventListener("click", copyWaypoint('[&BOcBAAA=]'));
		}
		// Gendarran Fields upcoming
		if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 8 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 14 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 20
			|| d.getUTCHours() == 20 && d.getUTCMinutes() >= 20 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 20){
			title.innerHTML = "Gendarran - Ley-line Anomaly";
			waypoint.addEventListener("click", copyWaypoint('[&BJEBAAA=]'));
		}

		display_Time(d.getUTCHours());

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (20 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1  && d.getUTCMinutes() >= 50 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 20){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (20 * 60)) - (((target_hour - 1) * 3600) + (50 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (50 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30){
				end_time = (((target_hour + 2) * 3600) + (10 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function core_Karka(){
	var num = document.getElementById('core-karka-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("core-karka-hours");
		minutes_HTML = document.getElementById("core-karka-minutes");
		seconds_HTML = document.getElementById("core-karka-seconds");
		progress_bar = document.getElementById("core-karka-progress-bar");


		// Start times (UTC): 
		// Every few hours
		// Duration: 10 minutes
		// 2:00, 6:00, 10:30, 15:00, 18:00, 23:00

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		// Duration of 2:00 slot
		if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 10 
			|| d.getUTCHours() == 0
			|| d.getUTCHours() == 1
			|| d.getUTCHours() == 2 && d.getUTCMinutes() < 10){

			if (d.getUTCHours() == 23){
				end_time = ((26 * 3600) + (0 * 60));
			} else {
				end_time = ((2 * 3600) + (0 * 60));
			}
			// 30 mintes before meta
			if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((2 * 3600) + (0 * 60)) - ((1 * 3600) + (30 * 60));
            	pre_time = time - ((1 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 10:30 slot
		if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 10
			|| d.getUTCHours() == 7
			|| d.getUTCHours() == 8
			|| d.getUTCHours() == 9
			|| d.getUTCHours() == 10 && d.getUTCMinutes() < 40){
			end_time = ((10 * 3600) + (30 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 0){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((10 * 3600) + (30 * 60)) - ((10 * 3600) + (0 * 60));
            	pre_time = time - ((10 * 3600) + (0 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 40){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 15:00 slot
		if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 40
			|| d.getUTCHours() == 11
			|| d.getUTCHours() == 12
			|| d.getUTCHours() == 13
			|| d.getUTCHours() == 14
			|| d.getUTCHours() == 15 && d.getUTCMinutes() < 10){
			end_time = ((15 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((15 * 3600) + (0 * 60)) - ((14 * 3600) + (30 * 60));
            	pre_time = time - ((14 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 18:00 slot
		if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 10 
			|| d.getUTCHours() == 16
			|| d.getUTCHours() == 17
			|| d.getUTCHours() == 18 && d.getUTCMinutes() < 10){
			end_time = ((18 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((18 * 3600) + (0 * 60)) - ((17 * 3600) + (30 * 60));
            	pre_time = time - ((17 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 23:00 slot
		if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 10 
			|| d.getUTCHours() == 19
			|| d.getUTCHours() == 20
			|| d.getUTCHours() == 21
			|| d.getUTCHours() == 22
			|| d.getUTCHours() == 23 && d.getUTCMinutes() < 10){
			end_time = ((23 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((23 * 3600) + (0 * 60)) - ((22 * 3600) + (30 * 60));
            	pre_time = time - ((22 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}


    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function core_Tequatl(){
	var num = document.getElementById('core-tequatl-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("core-tequatl-hours");
		minutes_HTML = document.getElementById("core-tequatl-minutes");
		seconds_HTML = document.getElementById("core-tequatl-seconds");
		progress_bar = document.getElementById("core-tequatl-progress-bar");


		// Start times (UTC): 
		// Every few hours
		// Duration: 10 minutes
		// 0:00, 3:00, 7:00, 11:30, 16:00, 19:00

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		// Duration of 0:00 slot
		if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 10 
			|| d.getUTCHours() == 20
			|| d.getUTCHours() == 21
			|| d.getUTCHours() == 22
			|| d.getUTCHours() == 23
			|| d.getUTCHours() == 0 && d.getUTCMinutes() < 10){

			if (d.getUTCHours() == 19 || 20 || 21 || 22 || 23){
				end_time = ((24 * 3600) + (0 * 60));
			} else {
				end_time = ((0 * 3600) + (0 * 60));
			}
			// 30 mintes before meta
			if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((24 * 3600) + (0 * 60)) - ((23 * 3600) + (30 * 60));
            	pre_time = time - ((23 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 3:00 slot
		if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 10
			|| d.getUTCHours() == 1
			|| d.getUTCHours() == 2
			|| d.getUTCHours() == 3 && d.getUTCMinutes() < 10){
			end_time = ((3 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((3 * 3600) + (0 * 60)) - ((2 * 3600) + (30 * 60));
            	pre_time = time - ((2 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 7:00 slot
		if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 10
			|| d.getUTCHours() == 4
			|| d.getUTCHours() == 5
			|| d.getUTCHours() == 6
			|| d.getUTCHours() == 7 && d.getUTCMinutes() < 10){
			end_time = ((7 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((7 * 3600) + (0 * 60)) - ((6 * 3600) + (30 * 60));
            	pre_time = time - ((6 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 11:30 slot
		if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 10
			|| d.getUTCHours() == 8
			|| d.getUTCHours() == 9
			|| d.getUTCHours() == 10
			|| d.getUTCHours() == 11 && d.getUTCMinutes() < 40){
			end_time = ((11 * 3600) + (30 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 0){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((11 * 3600) + (30 * 60)) - ((11 * 3600) + (0 * 60));
            	pre_time = time - ((11 * 3600) + (0 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 40){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 16:00 slot
		if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 40
			|| d.getUTCHours() == 12
			|| d.getUTCHours() == 13
			|| d.getUTCHours() == 14
			|| d.getUTCHours() == 15
			|| d.getUTCHours() == 16 && d.getUTCMinutes() < 10){
			end_time = ((16 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((16 * 3600) + (0 * 60)) - ((15 * 3600) + (30 * 60));
            	pre_time = time - ((15 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}
		// Duration of 19:00 slot
		if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 10 
			|| d.getUTCHours() == 17
			|| d.getUTCHours() == 18
			|| d.getUTCHours() == 19 && d.getUTCMinutes() < 10){
			end_time = ((19 * 3600) + (0 * 60));

			// 30 mintes before meta
			if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color; 

				event_time = ((19 * 3600) + (0 * 60)) - ((18 * 3600) + (30 * 60));
            	pre_time = time - ((18 * 3600) + (30 * 60));
			}

			// Meta time for 10 minutes
			if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Verdant Brink

function vb_Day(){
	var num = document.getElementById('vb-day-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("vb-day-hours");
		minutes_HTML = document.getElementById("vb-day-minutes");
		seconds_HTML = document.getElementById("vb-day-seconds");
		progress_bar = document.getElementById("vb-day-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 45 minutes
		// 0:30, 2:30, 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			if (d.getUTCHours() == target_hour - 1){
				end_time = (((target_hour - 2) * 3600) + (30 * 60));
			} else {
				end_time = ((target_hour * 3600) + (30 * 60));
			}
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour * 3600) + (0 * 60));

			}
			// Meta time for 45 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 45){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 45){
				end_time = (((target_hour) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function vb_Night(){
	var num = document.getElementById('vb-night-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("vb-night-hours");
		minutes_HTML = document.getElementById("vb-night-minutes");
		seconds_HTML = document.getElementById("vb-night-seconds");
		progress_bar = document.getElementById("vb-night-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 45 minutes
		// 1:45, 3:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 5){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 5){
				end_time = (((target_hour) * 3600) + (45 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function vb_Bosses(){
	var num = document.getElementById('vb-bosses-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("vb-bosses-hours");
		minutes_HTML = document.getElementById("vb-bosses-minutes");
		seconds_HTML = document.getElementById("vb-bosses-seconds");
		progress_bar = document.getElementById("vb-bosses-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 0:10, 2:10, etc 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (10 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1  && d.getUTCMinutes() >= 40 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 10){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (10 * 60)) - (((target_hour - 1) * 3600) + (40 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (40 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 10 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30){
				end_time = (((target_hour + 2) * 3600) + (10 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Auric Basin

function ab_Pylons(){
	var num = document.getElementById('ab-pylons-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("ab-pylons-hours");
		minutes_HTML = document.getElementById("ab-pylons-minutes");
		seconds_HTML = document.getElementById("ab-pylons-seconds");
		progress_bar = document.getElementById("ab-pylons-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 45 minutes
		// 1:30, 3:30, 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			// When it's the even hour, but meta still going on
			if (d.getUTCHours() == target_hour - 1){
				end_time = (((target_hour - 2) * 3600) + (30 * 60));
			} else {
				end_time = ((target_hour * 3600) + (30 * 60));
			}
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour * 3600) + (0 * 60));

			}
			// Meta time for 45 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 45){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 45){
				end_time = (((target_hour) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function ab_Octovine(){
	var num = document.getElementById('ab-octovine-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("ab-octovine-hours");
		minutes_HTML = document.getElementById("ab-octovine-minutes");
		seconds_HTML = document.getElementById("ab-octovine-seconds");
		progress_bar = document.getElementById("ab-octovine-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 45 minutes
		// 1:00, 3:00, 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (0 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (0 * 60)) - (((target_hour - 1) * 3600) + (30 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (30 * 60));

			}
			// Meta time for 30 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30){
				end_time = (((target_hour + 2) * 3600) + (0 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Tangled Depths 

function td_Outposts(){
	var num = document.getElementById('td-outposts-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("td-outposts-hours");
		minutes_HTML = document.getElementById("td-outposts-minutes");
		seconds_HTML = document.getElementById("td-outposts-seconds");
		progress_bar = document.getElementById("td-outposts-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 1hr 45 minutes
		// 0:46, 2:46 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			// When it's the even hour, but meta still going on
			if (d.getUTCHours() == target_hour - 1){
				end_time = (((target_hour - 2) * 3600) + (46 * 60));
			} else {
				end_time = ((target_hour * 3600) + (46 * 60));
			}
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 16){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (46 * 60)) - ((target_hour  * 3600) + (16 * 60));
            	pre_time = time - ((target_hour * 3600) + (16 * 60));

			}
			// Meta time for 1hr 45 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 46 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 46){
				end_time = ((target_hour * 3600) + (46 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function td_Gerent(){
	var num = document.getElementById('td-gerent-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("td-gerent-hours");
		minutes_HTML = document.getElementById("td-gerent-minutes");
		seconds_HTML = document.getElementById("td-gerent-seconds");
		progress_bar = document.getElementById("td-gerent-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 16 minutes
		// 0:30, 2:30, etc 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (30 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour  && d.getUTCMinutes() >= 0  && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour  * 3600) + (0 * 60));

			}
			// Meta time for 16 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 46){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 46){
				end_time = (((target_hour + 2) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Dragon's Stand 

function ds(){
	var num = document.getElementById('ds-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("ds-hours");
		minutes_HTML = document.getElementById("ds-minutes");
		seconds_HTML = document.getElementById("ds-seconds");
		progress_bar = document.getElementById("ds-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 60 minutes
		// 1:30, 3:30, 

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (30 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (0 * 60)) - ((target_hour * 3600) + (30 * 60));
            	pre_time = time - ((target_hour * 3600) + (30 * 60));

			}
			// Meta time for 60 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 30){
				end_time = (((target_hour) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Bloodstone Fen

function bsf_Spirits(){
	var num = document.getElementById('bsf-spirits-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("bsf-spirits-hours");
		minutes_HTML = document.getElementById("bsf-spirits-minutes");
		seconds_HTML = document.getElementById("bsf-spirits-seconds");
		progress_bar = document.getElementById("bsf-spirits-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// 1:45, 3:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 5){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 5){
				end_time = (((target_hour) * 3600) + (45 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function ld_Noran(){
	var num = document.getElementById('ld-noran-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

    	hours_HTML = document.getElementById("ld-noran-hours");
		minutes_HTML = document.getElementById("ld-noran-minutes");
		seconds_HTML = document.getElementById("ld-noran-seconds");
		progress_bar = document.getElementById("ld-noran-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// 00:30, 2:30, 4:30, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){

			// Only when UTC = 0
			if (d.getUTCHours() == 23){
				target_hour = 24; 
				end_time = ((24 * 3600) + (30 * 60)); 
			} else {
				end_time = ((target_hour * 3600) + (30 * 60));
			}

			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - (((target_hour) * 3600) + (0 * 60));
            	pre_time = time - (((target_hour) * 3600) + (0 * 60));
			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 40){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 40){
				end_time = (((target_hour + 2) * 3600) + (30 * 60));
			}
		}
		
	
    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function ld_Saidra(){
	var num = document.getElementById('ld-saidra-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("ld-saidra-hours");
		minutes_HTML = document.getElementById("ld-saidra-minutes");
		seconds_HTML = document.getElementById("ld-saidra-seconds");
		progress_bar = document.getElementById("ld-saidra-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:00, 3:00, 5:00, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (0 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (0 * 60)) - (((target_hour - 1) * 3600) + (30 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (30 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 20){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 20){
				end_time = (((target_hour + 2) * 3600) + (0 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	    console.log("saidra: ", num_result);

	},1000);
}

function ld_Loamhurst(){
	var num = document.getElementById('ld-loamhurst-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("ld-loamhurst-hours");
		minutes_HTML = document.getElementById("ld-loamhurst-minutes");
		seconds_HTML = document.getElementById("ld-loamhurst-seconds");
		progress_bar = document.getElementById("ld-loamhurst-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 15 minutes
		// 1:45, 3:45, 5:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Crystal Oasis 

function co_Blitz(){
	var num = document.getElementById('co-blitz-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

    	hours_HTML = document.getElementById("co-blitz-hours");
		minutes_HTML = document.getElementById("co-blitz-minutes");
		seconds_HTML = document.getElementById("co-blitz-seconds");
		progress_bar = document.getElementById("co-blitz-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 00:05, 2:05, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){

			end_time = ((target_hour * 3600) + (5 * 60));	

			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 5 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 35){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (5 * 60)) - (((target_hour - 1) * 3600) + (35 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (35 * 60));
			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 5 && d.getUTCMinutes() < 25){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 25){
				end_time = (((target_hour + 2) * 3600) + (30 * 60));
			}
		}
		
	
    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Desert Highlands

function dh(){
	var num = document.getElementById('dh-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("dh-hours");
		minutes_HTML = document.getElementById("dh-minutes");
		seconds_HTML = document.getElementById("dh-seconds");
		progress_bar = document.getElementById("dh-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:00, 3:00, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (0 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (0 * 60)) - (((target_hour - 1) * 3600) + (30 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (30 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 20){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 20){
				end_time = (((target_hour + 2) * 3600) + (0 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Elon Riverlands

function er(){
	var num = document.getElementById('er-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("er-hours");
		minutes_HTML = document.getElementById("er-minutes");
		seconds_HTML = document.getElementById("er-seconds");
		progress_bar = document.getElementById("er-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:30, 3:30, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (30 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour * 3600) + (0 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 50){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 50){
				end_time = (((target_hour + 2) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Desolation

function deso_Wurms(){
	var num = document.getElementById('deso-wurms-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("deso-wurms-hours");
		minutes_HTML = document.getElementById("deso-wurms-minutes");
		seconds_HTML = document.getElementById("deso-wurms-seconds");
		progress_bar = document.getElementById("deso-wurms-progress-bar");

		// Start times (UTC): 
		// Every hour
		// Duration: 20 minutes
		// 0:30, 1:30, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		insert_Time(d.getUTCHours());

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (30 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour * 3600) + (0 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30 && d.getUTCMinutes() < 50){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 50){
				end_time = (((target_hour + 1) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function deso_Maw(){
	var num = document.getElementById('deso-maw-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("deso-maw-hours");
		minutes_HTML = document.getElementById("deso-maw-minutes");
		seconds_HTML = document.getElementById("deso-maw-seconds");
		progress_bar = document.getElementById("deso-maw-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:30, 3:30, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (30 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour * 3600) + (0 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Domain of Vabbi

function vabbi_Forged(){
	var num = document.getElementById('vabbi-forged-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("vabbi-forged-hours");
		minutes_HTML = document.getElementById("vabbi-forged-minutes");
		seconds_HTML = document.getElementById("vabbi-forged-seconds");
		progress_bar = document.getElementById("vabbi-forged-progress-bar");

		// Start times (UTC): 
		// Every hours
		// Duration: 10 minutes
		// 0:00, 1:00

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		insert_Time(d.getUTCHours());

		function insert_Time(target_hour){
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 10){
				end_time = (((target_hour + 1) * 3600) + (0 * 60));
			} else {
				end_time = ((target_hour * 3600) + (0 * 60));
			}
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = (((target_hour + 1) * 3600) + (0 * 60)) - ((target_hour * 3600) + (30 * 60));
            	pre_time = time - ((target_hour * 3600) + (30 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 10){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function vabbi_Serpent(){
	var num = document.getElementById('vabbi-serpent-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("vabbi-serpent-hours");
		minutes_HTML = document.getElementById("vabbi-serpent-minutes");
		seconds_HTML = document.getElementById("vabbi-serpent-seconds");
		progress_bar = document.getElementById("vabbi-serpent-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 0:30, 2:30, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (30 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 0 && d.getUTCMinutes() < 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (30 * 60)) - ((target_hour * 3600) + (0 * 60));
            	pre_time = time - ((target_hour * 3600) + (0 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 30){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1){
				end_time = (((target_hour) * 3600) + (30 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Domain of Istan

function istan_Pala(){
	var num = document.getElementById('istan-pala-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("istan-pala-hours");
		minutes_HTML = document.getElementById("istan-pala-minutes");
		seconds_HTML = document.getElementById("istan-pala-seconds");
		progress_bar = document.getElementById("istan-pala-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:45, 3:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 5){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 5){
				end_time = (((target_hour) * 3600) + (45 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function istan_GH(){
	var num = document.getElementById('istan-gh-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("istan-gh-hours");
		minutes_HTML = document.getElementById("istan-gh-minutes");
		seconds_HTML = document.getElementById("istan-gh-seconds");
		progress_bar = document.getElementById("istan-gh-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 0:20, 2:20, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (20 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 50 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 20){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (20 * 60)) - (((target_hour - 1) * 3600) + (50 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (50 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 20 && d.getUTCMinutes() < 40){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour  && d.getUTCMinutes() >= 40){
				end_time = (((target_hour + 2) * 3600) + (20 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Jahai Bluffs

function jahai_Shat(){
	var num = document.getElementById('jahai-shat-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("jahai-shat-hours");
		minutes_HTML = document.getElementById("jahai-shat-minutes");
		seconds_HTML = document.getElementById("jahai-shat-seconds");
		progress_bar = document.getElementById("jahai-shat-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:00, 3:00, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (0 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 30){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (0 * 60)) - (((target_hour - 1) * 3600) + (30 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (30 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() < 20){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 20){
				end_time = (((target_hour + 2) * 3600) + (45 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Thunderhead Peaks

function th_Keep(){
	var num = document.getElementById('th-keep-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("th-keep-hours");
		minutes_HTML = document.getElementById("th-keep-minutes");
		seconds_HTML = document.getElementById("th-keep-seconds");
		progress_bar = document.getElementById("th-keep-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 1:45, 3:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 5){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 5){
				end_time = (((target_hour) * 3600) + (45 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function th_Oil(){
	var num = document.getElementById('th-oil-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("th-oil-hours");
		minutes_HTML = document.getElementById("th-oil-minutes");
		seconds_HTML = document.getElementById("th-oil-seconds");
		progress_bar = document.getElementById("th-oil-progress-bar");


		// Start times (UTC): 
		// Every 2 hours
		// Duration: 20 minutes
		// 2:45, 4:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15 && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 5){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 5){
				end_time = (((target_hour) * 3600) + (45 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Grothmar Valley

function gv_Effigy(){
	var num = document.getElementById('gv-effigy-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("gv-effigy-hours");
		minutes_HTML = document.getElementById("gv-effigy-minutes");
		seconds_HTML = document.getElementById("gv-effigy-seconds");
		progress_bar = document.getElementById("gv-effigy-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// 0:10, 2:10, 4:10, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (10 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 40 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 10){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (10 * 60)) - (((target_hour - 1) * 3600) + (40 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (40 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 10 && d.getUTCMinutes() < 20){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 20){
				end_time = (((target_hour + 2) * 3600) + (10 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function gv_Doomlore(){
	var num = document.getElementById('gv-doomlore-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("gv-doomlore-hours");
		minutes_HTML = document.getElementById("gv-doomlore-minutes");
		seconds_HTML = document.getElementById("gv-doomlore-seconds");
		progress_bar = document.getElementById("gv-doomlore-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// 0:35, 2:35, 4:35, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() - 1;
			} else {
				even = d.getUTCHours() + 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case odd: case even:
				insert_Time(even);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (35 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 5 && d.getUTCMinutes() < 35){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (35 * 60)) - ((target_hour * 3600) + (5 * 60));
            	pre_time = time - ((target_hour * 3600) + (5 * 60));

			}
			// Meta time for 20 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 35 && d.getUTCMinutes() < 45){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 45){
				end_time = (((target_hour + 2) * 3600) + (35 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;
	    console.log("doomlore: ", num_result);

	},1000);
}

function gv_Ooze(){
	var num = document.getElementById('gv-ooze-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("gv-ooze-hours");
		minutes_HTML = document.getElementById("gv-ooze-minutes");
		seconds_HTML = document.getElementById("gv-ooze-seconds");
		progress_bar = document.getElementById("gv-ooze-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// 1:05, 3:05, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (5 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 35 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 5){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (5 * 60)) - (((target_hour - 1) * 3600) + (35 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (35 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 5 && d.getUTCMinutes() < 15){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 15){
				end_time = (((target_hour + 2) * 3600) + (5 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function gv_Concert(){
	var num = document.getElementById('gv-concert-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("gv-concert-hours");
		minutes_HTML = document.getElementById("gv-concert-minutes");
		seconds_HTML = document.getElementById("gv-concert-seconds");
		progress_bar = document.getElementById("gv-concert-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 10 minutes
		// 1:05, 3:05, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (40 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 10 && d.getUTCMinutes() < 40){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (40 * 60)) - (((target_hour - 1) * 3600) + (10 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (10 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 40 && d.getUTCMinutes() < 50){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 50){
				end_time = (((target_hour + 2) * 3600) + (40 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

// Bjora Marches

function bm_Drakkar(){
	var num = document.getElementById('bm-drakkar-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("bm-drakkar-hours");
		minutes_HTML = document.getElementById("bm-drakkar-minutes");
		seconds_HTML = document.getElementById("bm-drakkar-seconds");
		progress_bar = document.getElementById("bm-drakkar-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 30 minutes
		// 1:05, 3:05, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (5 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 35 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 5){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (5 * 60)) - (((target_hour - 1) * 3600) + (35 * 60));
            	pre_time = time - (((target_hour - 1) * 3600) + (35 * 60));

			}
			// Meta time for 10 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 5 && d.getUTCMinutes() < 35){
				progress_bar.style.background = meta_color;

    			pre_time = 100;
    			event_time = 100;
			}
			// Display new time after meta duration
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 35){
				end_time = (((target_hour + 2) * 3600) + (5 * 60));
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function bm_Storms(){
	var num = document.getElementById('bm-storms-num');
	var timer = setInterval(function(){
	var d = new Date();
	var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

	    hours_HTML = document.getElementById("bm-storms-hours");
		minutes_HTML = document.getElementById("bm-storms-minutes");
		seconds_HTML = document.getElementById("bm-storms-seconds");
		progress_bar = document.getElementById("bm-storms-progress-bar");

		// Start times (UTC): 
		// Every 2 hours
		// Duration: 30 minutes
		// 1:455, 3:45, etc

		progress_bar.style.background = "#ddd";
		pre_time = 0;
		event_time = 0;

		display_Time();

		function display_Time(){
			var even, odd; 
			if (d.getUTCHours() % 2 == 0){
				even = d.getUTCHours();
				odd = d.getUTCHours() + 1;
			} else {
				even = d.getUTCHours() - 1;
				odd = d.getUTCHours();
			}
			switch(d.getUTCHours()){
				case even: case odd:
				insert_Time(odd);
				break;
			}
		}

		function insert_Time(target_hour){
			end_time = ((target_hour * 3600) + (45 * 60));
			
			// 30 minutes before meta
			if (d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() >= 15 || d.getUTCHours() == target_hour && d.getUTCMinutes() < 45){
				progress_bar.style.background = pre_meta_color;

    			event_time = ((target_hour * 3600) + (45 * 60)) - ((target_hour * 3600) + (15 * 60));
            	pre_time = time - ((target_hour * 3600) + (15 * 60));

			}
			// Meta time for 30 minutes
			if (d.getUTCHours() == target_hour && d.getUTCMinutes() >= 5 || d.getUTCHours() == target_hour - 1 && d.getUTCMinutes() < 15){
				progress_bar.style.background = meta_color;

				end_time = (((target_hour - 2) * 3600) + (45 * 60));

    			pre_time = 100;
    			event_time = 100;
			}
		}

    	result = end_time - time;
    	num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

    	// Ongoing. Displays the number as positve and goes up 
    	if (result < 0){
    		result = result * -1;
    	}
    	// If train is less than 1 hour or 1 minute, fade out that section of the timer
    	if (result < 3600){
    		hours_HTML.parentNode.style.opacity = 0.2;

    		if (result < 60){
    			minutes_HTML.parentNode.style.opacity = 0.2;
    		} else {
    			minutes_HTML.parentNode.style.opacity = 1;
    		}
    	} else {
    		hours_HTML.parentNode.style.opacity = 1;
    		minutes_HTML.parentNode.style.opacity = 1;
    	}
    	
	   
	    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
	    width = (pre_time/event_time)*100;
	    progress_bar.style.width = width + "%";

	    num.innerHTML = num_result;

	},1000);
}

function countdown(boxID){
	var result = (parseInt(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[0].lastElementChild.innerHTML)*3600)
		+(parseInt(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[1].lastElementChild.innerHTML)*60)
		+(parseInt(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[2].lastElementChild.innerHTML));

	var num = document.getElementById(boxID.parentNode.parentNode.childNodes[7].id);
	var pre_time = 0,
		event_time = result,
		temp_result = 0,
		end_time = result,
		parent = boxID.parentNode.parentNode.id;

	

	function start_countdown(){

			hours_HTML = document.getElementById(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[0].lastElementChild.id);
			minutes_HTML = document.getElementById(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[1].lastElementChild.id);
			seconds_HTML = document.getElementById(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[2].lastElementChild.id);
			progress_bar = document.getElementById(boxID.parentNode.parentNode.childNodes[5].firstElementChild.id);

			boxID.value = "Reset";

			progress_bar.style.background = pre_meta_color;

			if (pre_time == event_time){
				progress_bar.style.background = meta_color;
				pre_time = 1;
				event_time =  1;
			} else {
				pre_time = pre_time + 1;
			}

			temp_result = temp_result + 1;
			result =  end_time - temp_result; // Counts down
	    	
			num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0
			if (result < 0){
				result = result * -1;
			}
			// If train is less than 1 hour or 1 minute, fade out that section of the timer
	    	if (result < 3600){
	    		hours_HTML.parentNode.style.opacity = 0.2;

	    		if (result < 60){
	    			minutes_HTML.parentNode.style.opacity = 0.2;
	    		} else {
	    			minutes_HTML.parentNode.style.opacity = 1;
	    		}
	    	} else {
	    		hours_HTML.parentNode.style.opacity = 1;
	    		minutes_HTML.parentNode.style.opacity = 1;
	    	}

		    format_time(result, hours_HTML, minutes_HTML, seconds_HTML);
		    width = (pre_time/event_time)*100;
		    progress_bar.style.width = width + "%";

		    num.innerHTML = num_result;
	}

	function revert_countdown(){
		boxID.value = "Start";
		hours_HTML = document.getElementById(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[0].lastElementChild.id);
		minutes_HTML = document.getElementById(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[1].lastElementChild.id);
		seconds_HTML = document.getElementById(boxID.parentNode.parentNode.childNodes[5].lastElementChild.children[2].lastElementChild.id);
		progress_bar = document.getElementById(boxID.parentNode.parentNode.childNodes[5].firstElementChild.id);

		hours_HTML.innerHTML = check_farm(parent)[0].hours;
		minutes_HTML.innerHTML = check_farm(parent)[0].minutes;
		seconds_HTML.innerHTML = check_farm(parent)[0].seconds;

		progress_bar.style.width = 0 + "%";
		hours_HTML.parentNode.style.opacity = 1;
		minutes_HTML.parentNode.style.opacity = 1;
	}

	// Switches functions depending on what meta is activated
	switch (parent){
		case "bsf-maw-box":
			if (bsf_maw_status == 0){
				bsf_maw_status = 1;
				start_countdown();
				bsf_maw_start = setInterval(start_countdown, 1000);
			} else {
				bsf_maw_status = 0; 
				clearInterval(bsf_maw_start);
				revert_countdown();
			}
		break;

		case "bff-koda-box":
			if (bff_status == 0){
				bff_status = 1;
				start_countdown();
				bff_start = setInterval(start_countdown, 1000);
			} else {
				bff_status = 0; 
				clearInterval(bff_start);
				revert_countdown();
			}
		break;

		case "dm-cull-box":
			if (dm_cull_status == 0){
				dm_cull_status = 1;
				start_countdown();
				dm_start = setInterval(start_countdown, 1000);
			} else {
				dm_cull_status = 0; 
				clearInterval(dm_start);
				revert_countdown();
			}
		break;

		case "sl-shrines-box":
			if (sl_status == 0){
				sl_status = 1;
				start_countdown();
				sl_start = setInterval(start_countdown, 1000);
			} else {
				sl_status = 0; 
				clearInterval(sl_start);
				revert_countdown();
			}
		break;

		case "ssi-storms-box":
			if (ssi_storms_status == 0){
				ssi_storms_status = 1;
				start_countdown();
				ssi_storms_start = setInterval(start_countdown, 1000);
			} else {
				ssi_storms_status = 0; 
				clearInterval(ssi_storms_start);
				revert_countdown();
			}
		break;

		case "ssi-specimen-box":
			if (ssi_specimen_status == 0){
				ssi_specimen_status = 1;
				start_countdown();
				ssi_specimen_start = setInterval(start_countdown, 1000);
			} else {
				ssi_specimen_status = 0; 
				clearInterval(ssi_specimen_start);
				revert_countdown();
			}
		break;

		case "kourna-scarab-box":
			if (kourna_scarab_status == 0){
				kourna_scarab_status = 1;
				start_countdown();
				kourna_scarab_start = setInterval(start_countdown, 1000);
			} else {
				kourna_scarab_status = 0; 
				clearInterval(kourna_scarab_start);
				revert_countdown();
			}
		break;
	}

}


// Format the time to display in days, hours, minutes, and seconds
// Takes the numbers into HTML 
function format_time(result_time, hours, minutes, seconds){
	var s = Math.floor(result_time);
	var m = Math.floor(s / 60);
	var h = Math.floor(m / 60);

	if (isNaN(s) == true){
		s = 0;
		m = 0;
		h = 0;
	}

	h %= 24;
	m %= 60; 
	s %= 60;

	h = (h < 10) ? "0" + h : h;
	m = (m < 10) ? "0" + m : m;
	s = (s < 10) ? "0" + s : s; 

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

function copyWaypoint(text){
	const el = document.createElement('textarea');
    el.value = text;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}




