<?php 
	chdir(dirname(__FILE__));
	include('../../db/maps.php'); 
	include('./items.php');	
?>

<script>
	// Initials
	let nextProgress = "", // What is displayed on the main progress bar after the ->
	    progressBarTyria = document.getElementById('progress-bar-tyria'),
	    progressTextTyria = document.getElementById('progress-text-tyria'),
	    progressBarCantha = document.getElementById('progress-bar-cantha'),
	    progressTextCantha = document.getElementById('progress-text-cantha'),
	    tyriaTimerBox = document.getElementById('tyria-timer-box'),
	    canthaTimerBox = document.getElementById('cantha-timer-box'),
	    barWidth = 0,
	    currentBar = 0,
	    maxBar = 0, 
	    currentTime = 0,
	    maxTime = 0;

	// Get fish data from database
	let fishingDB = <?php echo $fishingDB->get_values('fishing'); ?>;
	// Get fishing pictures from items database
	let fishIcons = <?php echo $itemsDB->get_array_items('items', $fishes); ?>; 
	// Get all the general items in the general items db
	let generalItems = <?php echo $itemsDB->get_all_items('items'); ?>; ;

	var tyriaStatus = "",
		canthaStatus = "";

	let dayColor = '#f5e633',
		duskColor = '#aa7fac',
		nightColor = '#1a687d',
		dawnColor = '#e8be8f',
		icon = "";


	// Fishing description tables
	// These are hidden by default
	let allFP = document.getElementsByClassName('fishing-fp'),
		fishDetails = document.getElementById('fish-details'),
		fishGeneral = document.getElementById('fish-general'),
		fishHoles = document.getElementById('fish-hole'),
		fishBait = document.getElementById('fish-bait'),
		fishTime = document.getElementById('fish-time'),
		seitungFP = document.getElementById('seitung-fp'),
		kainengFP = document.getElementById('kaineng-fp'),
		echovaldFP = document.getElementById('echovald-fp'),
		ascalonFP = document.getElementById('ascalon-fp'),
		krytaFP = document.getElementById('kryta-fp'),
		shiverpeaksFP = document.getElementById('shiverpeaks-fp'),
		orrFP = document.getElementById('orr-fp'),
		maguumaFP = document.getElementById('maguuma-fp'),
		crystalFP = document.getElementById('crystal-fp'),
		desertFP = document.getElementById('desert-fp'),
		dragonsFP = document.getElementById('dragons-fp'),
		emberFP = document.getElementById('ember-fp'),
		draconisFP = document.getElementById('draconis-fp');

	// Tables for both LOCAL and GLOBAL fishes
	let localData = document.getElementById('local-fishing-data'),
		globalData = document.getElementById('global-fishing-data');
	// Map info pictures
	let pageImg = document.getElementsByClassName('page-img'); 

	// FISHING BOOKMARKS
	// By default, display what's already going to show on the page
	// If the user selects a region and it shows maps, then add those maps to the bookmarks
	let bookmarks = document.getElementById('fishing-bookmarks'),
		bookmarksHTML = ``;

	// DEFAULT TAX
	let prevTax = 0.85;

	let map = '';
	// Get the map from the user when they select it
    function get_map(getMap){
    	map = getMap; 
    }

    let otherList = [
		"Antique Fishing Lure",
		"Can of Glow Worms",
		"Can of Worms",
		"Lost Bait Cage",
		"Mackerel",
	];

	let junkList = [
		"Antique Diving Helm",
		"Broken Bottle",
		"Broken Brass Spyglass",
		"Broken Fishing Hook",
		"Broken Fishing Rod",
		"Broken Oar",
		"Broken Trident",
		"Crumbled Ancient Statue",
		"Fish-Shaped Stone",
		"Golden Merlion Statuette",
		"Piece of Driftwood",
		"Pockmarked Vase",
		"Rotten Fish Head",
		"Rusted Mechanism",
		"Shattered Fishing Cage",
		"Tarnished Brass Compass",
		"Tarnished Bronze Astrolabe",
		"Tarnished Silver Sextant",
		"Weathered Peg Leg",
	];

	// TIMER FOR CANTHA AREA
	let timerCantha = setInterval(function(){
    let d = new Date();
    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
        result,
        hr = d.getUTCHours(),
        min = d.getUTCMinutes(),
        sec = d.getUTCSeconds();

        function day_night(start_hour, end_hour){
            // ASSUME STARTING AT ODD HR
            // ENTIRE 2HR PHASE Ex: 1:00 - 3:00
            // 1:00 - 1:34 DAY
            // 1:35 - 1:39 DUSK
            // 1:40 - 2:34 NIGHT
            // 2:35 - 2:39 DAWN
            // 2:40 - 3:00+ DAY

            // maxTime = the end UTC time of this phase as a whole
        	// maxBar = total duration of this phase

            // FIRST HOUR (ODD)
            // 1:00 - 1:59
            if (hr == start_hour){
            	// DAY
            	if (min < 35){
            		canthaStatus = "Daytime";
            		nextProgress = "Dusk"; 
            		progressBarCantha.style.background = dayColor; 

            		maxTime = start_hour * 3600 + (35 * 60); 
        			maxBar = 55 * 60;
            	}
            	// DUSK
            	if (min >= 35 && min < 40){
            		// For a moment, make all faded fish not fade
            		if (min == 35 && sec <= 5){
            			dusk_dawn("Cantha");
            		}
            		canthaStatus = "Dusk";
            		nextProgress = "Nighttime";
            		progressBarCantha.style.background = duskColor;

            		maxTime = start_hour * 3600 + (40 * 60); 
        			maxBar = 5 * 60;
            	}
            	// NIGHT
            	if (min >= 40){
            		// For a moment, change fish row to fade appropiately
            		if (min == 40 && sec <= 5){
            			daytime_nighttime();
            		}
            		canthaStatus = "Nighttime";
            		nextProgress = "Dawn";
            		progressBarCantha.style.background = nightColor;

            		maxTime = end_hour * 3600 + (35 * 60); 
        			maxBar = 55 * 60;
            	}
            }
            // SECOND HOUR (EVEN)
            // 2:00 - 2:59
            if (hr == end_hour){
            	// NIGHT
            	if (min < 35){
            		canthaStatus = "Nighttime";
            		nextProgress = "Dawn";
            		progressBarCantha.style.background = nightColor; 

            		maxTime = end_hour * 3600 + (35 * 60); 
        			maxBar = 55 * 60;
            	}
            	// DAWN
            	if (min >= 35 && min < 40){
            		// For a moment, make all faded fish not fade
            		if (min == 35 && sec <= 5){
            			dusk_dawn("Cantha");
            		}
            		canthaStatus = "Dawn";
            		nextProgress = "Daytime";
            		progressBarCantha.style.background = dawnColor; 

            		maxTime = end_hour * 3600 + (40 * 60); 
        			maxBar = 5 * 60;
            	}
            	// DAY
            	if (min >= 40){
            		// For a moment, change fish row to fade appropiately
            		if (min == 40 && sec <= 5){
            			daytime_nighttime(); 
            		}
            		canthaStatus = "Daytime";
            		nextProgress = "Dusk";
            		progressBarCantha.style.background = dayColor;

        			maxTime = (end_hour + 1) * 3600 + (35 * 60); 
        			maxBar = 55 * 60;
            	}
            }

        	currentBar = time - (maxTime - maxBar);
        	barWidth = (currentBar/maxBar)*100;
            progressBarCantha.style.width = barWidth + "%";
            result = time - maxTime;
            if (canthaStatus == "Dusk" || canthaStatus == "Dawn"){
            	progressTextCantha.innerHTML = "Cantha " + canthaStatus + " | " + "Mackerel Time! | " + getDisplayTime(result) + " &#x27F6; " + nextProgress;
            } else {
            	progressTextCantha.innerHTML = "Cantha " + canthaStatus + " | " + getDisplayTime(result) + " &#x27F6; " + nextProgress;
            }
          
        } // End of function

        // Event session starts every odd UTC hour at xx:30
        // Session lasts for 2 hours
        function event_session(){
            let start_hour = 0,
                end_hour = 0;
            // Check if hour is odd or not
            // If odd, use that as the start hour
            // Else, use hour - 1 as the start hour
            if (hr % 2 != 0){
                start_hour = hr; 
                end_hour = hr + 1;
            } else {
                start_hour = hr - 1;
                end_hour = hr; 
            }
            // Only start meta timer when
            // 1) Start hour is an odd hour and is greater than 30 mins
            // 2) End hour is the second hour (even)
            day_night(start_hour, end_hour); 
        }
        event_session();
    },1000); 

	// TIMER FOR TYRIA TIME
	let timerTyria = setInterval(function(){
	    let d = new Date();
	    let time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
	        result,
	        hr = d.getUTCHours(),
	        min = d.getUTCMinutes(),
	        sec = d.getUTCSeconds();

        function day_night(start_hour, end_hour){
            // ASSUME STARTING AT ODD HR
            // ENTIRE 2HR PHASE Ex: 1:00 - 3:00
            // 1:00 - 1:39 DAY
            // 1:40 - 1:44 DUSK
            // 1:45 - 2:44 NIGHT
            // 2:45 - 2:49 DAWN
            // 2:50 - 3:00+ DAY

            // maxTime = the end UTC time of this phase as a whole
        	// maxBar = total duration of this phase

            // FIRST HOUR (ODD)
            // 1:00 - 1:39
            if (hr == start_hour){
            	// DAY
            	if (min < 40){
            		tyriaStatus = "Daytime";
            		nextProgress = "Dusk"; 
            		progressBarTyria.style.background = dayColor; 

            		maxTime = start_hour * 3600 + (40 * 60); 
        			maxBar = 70 * 60;
            	}
            	// DUSK
            	// 1:40 - 1:44
            	if (min >= 40 && min < 45){
            		// For a moment, make all faded fish not fade
            		if (min == 40 && sec <= 5){
            			dusk_dawn("Tyria");
            		}
            		tyriaStatus = "Dusk";
            		nextProgress = "Nighttime";
            		progressBarTyria.style.background = duskColor;

            		maxTime = start_hour * 3600 + (45 * 60); 
        			maxBar = 5 * 60;
            	}
            	// NIGHT
            	// 1:45 - 2:44
            	if (min >= 45){
            		// For a moment, change fish row to fade appropiately
            		if (min == 45 && sec <= 5){
            			daytime_nighttime();
            		}
            		tyriaStatus = "Nighttime";
            		nextProgress = "Dawn";
            		progressBarTyria.style.background = nightColor;

            		maxTime = end_hour * 3600 + (25 * 60); 
        			maxBar = 40 * 60;
            	}
            }
            // SECOND HOUR (EVEN)
            // 2:00 - 2:44
            if (hr == end_hour){
            	// NIGHT
            	if (min < 25){
            		tyriaStatus = "Nighttime";
            		nextProgress = "Dawn";
            		progressBarTyria.style.background = nightColor; 

            		maxTime = end_hour * 3600 + (25 * 60); 
        			maxBar = 40 * 60;
            	}
            	// DAWN
            	if (min >= 25 && min < 30){
            		// For a moment, make all faded fish not fade
            		if (min == 25 && sec <= 5){
            			dusk_dawn("Tyria");
            		}
            		tyriaStatus = "Dawn";
            		nextProgress = "Daytime";
            		progressBarTyria.style.background = dawnColor; 

            		maxTime = end_hour * 3600 + (30 * 60); 
        			maxBar = 5 * 60;
            	}
            	// DAY
            	if (min >= 30){
            		// For a moment, change fish row to fade appropiately
            		if (min == 30 && sec <= 5){
            			daytime_nighttime();
            		}
            		tyriaStatus = "Daytime";
            		nextProgress = "Dusk";
            		progressBarTyria.style.background = dayColor;

        			maxTime = (end_hour + 1) * 3600 + (40 * 60); 
        			maxBar = 70 * 60;
            	}
            }
        	currentBar = time - (maxTime - maxBar);
        	barWidth = (currentBar/maxBar)*100;
            progressBarTyria.style.width = barWidth + "%";
            result = time - maxTime;
            if (tyriaStatus == "Dusk" || tyriaStatus == "Dawn"){
            	progressTextTyria.innerHTML = "Tyria " + tyriaStatus + " | " + "Mackerel Time! | " + getDisplayTime(result) + " &#x27F6; " + nextProgress;
            } else {
            	progressTextTyria.innerHTML = "Tyria " + tyriaStatus + " | " + getDisplayTime(result) + " &#x27F6; " + nextProgress;
            }
          
        } // End of function

        // Event session starts every odd UTC hour at xx:30
        // Session lasts for 2 hours
        function event_session(){
            let start_hour = 0,
                end_hour = 0;
            // Check if hour is odd or not
            // If odd, use that as the start hour
            // Else, use hour - 1 as the start hour
            if (hr % 2 != 0){
                start_hour = hr; 
                end_hour = hr + 1;
            } else {
                start_hour = hr - 1;
                end_hour = hr; 
            }
            // Only start meta timer when
            // 1) Start hour is an odd hour and is greater than 30 mins
            // 2) End hour is the second hour (even)
            day_night(start_hour, end_hour); 
        }
        event_session();
    },1000); 

    function only_unique(value, index, self){
    	return self.indexOf(value) === index;
    }
	

	// When the user selects a map, display table and map 
	function show_map(map){
		let holeTable = document.getElementById('fish-hole-data'),
			baitTable = document.getElementById('fish-bait-data'),
			timeTable = document.getElementById('fish-time-data'),
			detailTable = document.getElementById('fish-details-data'),
			detailItem = document.getElementById('fishing-details-item'),
			localHTML = ``,
			globalHTML = ``,
			holeHTML = ``,
			baitHTML = ``,
			timeHTML = ``,
			detailHTML = ``; 


		let opacity = 1,
			color = "";

		let data = ``,
			status = "";

		// By default, do not show any fishing detail tables
		// This also allows the tables to go away when users select a new map
		for (let i = 0; i < allFP.length; i++){
			allFP[i].style.display = "none";
		}
		// By default, do not show any fishing detail tables
		// This also allows the tables to go away when users select a new map
		for (let i = 0; i < pageImg.length; i++){
			pageImg[i].style.display = "none";
		}
		// Just a lazy function to show certain amount of images
		function show_img(range){
			for (let i = 0; i < range; i++){
				pageImg[i].style.display = "block";
			}
		}
		// Depending on what the map the user selects,
		// Change map
		// Show new tables
		// Show timer depending on the area
		switch (map){
			case "Seitung Province": 
				status = canthaStatus;
				seitungFP.style.display = "block"; 
				pageImg[0].children[0].src = "../images/seitung-province/fishing.jpg"; 
				show_img(1);
				pageImg[0].id = "seitung-province";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#seitung-province"><li> &#10097; Seitung Province </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "New Kaineng City": 
				status = canthaStatus;
				kainengFP.style.display = "block"; 
				pageImg[0].children[0].src = "../images/new-kaineng-city/fishing.jpg";
				show_img(1); 
				pageImg[0].id = "new-kaineng-city";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#new-kaineng-city"><li> &#10097; New Kaineng City </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
				break;
			case "Echovald Wilds": 
				status = canthaStatus;
				echovaldFP.style.display = "block"; 
				pageImg[0].children[0].src = "../images/echovald-wilds/fishing.png"; 
				show_img(1);
				pageImg[0].id = "echovald-wilds";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#echovald-wilds"><li> &#10097; Echovald Wilds </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
				break;
			case "Dragon's End": 
				status = canthaStatus;
				dragonsFP.style.display = "block"; 
				pageImg[0].children[0].src = "../images/dragons-end/fishing.jpg"; 
				show_img(1);
				pageImg[0].id = "dragons-end";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#dragons-end"><li> &#10097; Dragon's End </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Ascalon": 
				status = tyriaStatus;
				ascalonFP.style.display = "block";
				pageImg[0].children[0].src = "../images/fireheart-rise/fishing.jpg";
				pageImg[1].children[0].src = "../images/diessa-plateau/fishing.jpg";
				pageImg[2].children[0].src = "../images/plains-of-ashford/fishing.jpg";
				pageImg[3].children[0].src = "../images/grothmar-valley/fishing.jpg";
				pageImg[4].children[0].src = "../images/field-of-ruin/fishing.jpg";
				pageImg[5].children[0].src = "../images/iron-marches/fishing.jpg";
				show_img(6);
				pageImg[0].id = "fireheart-rise";
				pageImg[1].id = "diessa-plateau";
				pageImg[2].id = "plains-of-ashford";
				pageImg[3].id = "grothmar-valley";
				pageImg[4].id = "field-of-ruin";
				pageImg[5].id = "iron-marches";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#fireheart-rise"><li> &#10097; Fireheart Rise </li></a>
					<a href = "#diessa-plateau"><li> &#10097; Diessa Plateau </li></a>
					<a href = "#plains-of-ashford"><li> &#10097; Plains of Ashford </li></a>
					<a href = "#grothmar-valley"><li> &#10097; Grothmar Valley </li></a>
					<a href = "#field-of-ruin"><li> &#10097; Field of Ruin </li></a>
					<a href = "#iron-marches"><li> &#10097; Iron Marches </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Kryta": 
				status = tyriaStatus;
				krytaFP.style.display = "block";
				pageImg[0].children[0].src = "../images/bloodtide-coast/fishing.jpg";
				pageImg[1].children[0].src = "../images/harathi-hinterlands/fishing.jpg";
				pageImg[2].children[0].src = "../images/gendarran-fields/fishing.jpg";
				pageImg[3].children[0].src = "../images/lions-arch/fishing.jpg";
				pageImg[4].children[0].src = "../images/southsun-cove/fishing.jpg";
				pageImg[5].children[0].src = "../images/kessex-hills/fishing.jpg";
				pageImg[6].children[0].src = "../images/queensdale/fishing.jpg";
				pageImg[7].children[0].src = "../images/lake-doric/fishing.jpg";
				show_img(8);
				pageImg[0].id = "bloodtide-coast";
				pageImg[1].id = "harathi-hinterlands";
				pageImg[2].id = "gendarran-fields";
				pageImg[3].id = "lions-arch";
				pageImg[4].id = "southsun-cove";
				pageImg[5].id = "kessex-hills";
				pageImg[6].id = "queensdale";
				pageImg[7].id = "lake-doric";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#bloodtide-coast"><li> &#10097; Bloodtide Coast </li></a>
					<a href = "#harathi-hinterlands"><li> &#10097; Harathi Hinterlands </li></a>
					<a href = "#gendarran-fields"><li> &#10097; Gendarran Fields </li></a>
					<a href = "#lions-arch"><li> &#10097; Lion's Arch </li></a>
					<a href = "#southsun-cove"><li> &#10097; Southsun Cove </li></a>
					<a href = "#kessex-hills"><li> &#10097; Kessex Hills </li></a>
					<a href = "#queensdale"><li> &#10097; Queensdale </li></a>
					<a href = "#lake-doric"><li> &#10097; Lake Doric </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Shiverpeaks": 
				status = tyriaStatus;
				shiverpeaksFP.style.display = "block";
				pageImg[0].children[0].src = "../images/frostgorge-sound/fishing.jpg";
				pageImg[1].children[0].src = "../images/drizzlewood-coast/fishing.jpg";
				pageImg[2].children[0].src = "../images/thunderhead-peaks/fishing.jpg";
				pageImg[3].children[0].src = "../images/timberline-falls/fishing.jpg";
				pageImg[4].children[0].src = "../images/lornars-pass/fishing.jpg";
				pageImg[5].children[0].src = "../images/snowden-drifts/fishing.jpg";
				pageImg[6].children[0].src = "../images/wayfarer-foothills/fishing.jpg";
				show_img(7);
				pageImg[0].id = "frostgorge-sound";
				pageImg[1].id = "drizzlewood-coast";
				pageImg[2].id = "thunderhead-peaks";
				pageImg[3].id = "timberline-falls";
				pageImg[4].id = "lornars-pass";
				pageImg[5].id = "snowden-drifts";
				pageImg[6].id = "wayfarer-foothills";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#frostgorge-sound"><li> &#10097; Frostgorge Sound </li></a>
					<a href = "#drizzlewood-coast"><li> &#10097; Drizzlewood Coast </li></a>
					<a href = "#thunderhead-peaks"><li> &#10097; Thunderhead Peaks </li></a>
					<a href = "#timberline-falls"><li> &#10097; Timberline Falls </li></a>
					<a href = "#lornars-pass"><li> &#10097; Lornar's Pass </li></a>
					<a href = "#snowden-drifts"><li> &#10097; Snowden Drifts </li></a>
					<a href = "#wayfarer-foothills"><li> &#10097; Warferer Foothills </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Orr": 
				status = tyriaStatus;
				orrFP.style.display = "block";
				pageImg[0].children[0].src = "../images/sirens-landing/fishing.jpg";
				pageImg[1].children[0].src = "../images/straits-of-devestation/fishing.jpg";
				pageImg[2].children[0].src = "../images/malchors-leap/fishing.jpg";
				pageImg[3].children[0].src = "../images/cursed-shore/fishing.jpg";
				show_img(4);
				pageImg[0].id = "sirens-landing";
				pageImg[1].id = "straits-of-devestation";
				pageImg[2].id = "malchors-leap";
				pageImg[3].id = "cursed-shore";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#sirens-landing"><li> &#10097; Siren's Landing </li></a>
					<a href = "#straits-of-devestation"><li> &#10097; Straits of Devestation </li></a>
					<a href = "#malchors-leap"><li> &#10097; Malchor's Leap </li></a>
					<a href = "#cursed-shore"><li> &#10097; Cursed Shore </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Maguuma Jungle": 
				status = tyriaStatus;
				maguumaFP.style.display = "block";
				pageImg[0].children[0].src = "../images/mount-maelstrom/fishing.jpg";
				pageImg[1].children[0].src = "../images/rata-sum/fishing.jpg";
				pageImg[2].children[0].src = "../images/sparkfly-fen/fishing.jpg";
				pageImg[3].children[0].src = "../images/caledon-forest/fishing.jpg";
				pageImg[4].children[0].src = "../images/tangled-depths/fishing.jpg";
				pageImg[5].children[0].src = "../images/metrica-province/fishing.jpg";
				pageImg[6].children[0].src = "../images/brisband-wildlands/fishing.jpg";
				show_img(7);
				pageImg[0].id = "mount-maelstrom";
				pageImg[1].id = "rata-sum";
				pageImg[2].id = "sparkfly-fen";
				pageImg[3].id = "caledon-forest";
				pageImg[4].id = "tangled-depths";
				pageImg[5].id = "metrica-province";
				pageImg[6].id = "brisband-wildlands";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#mount-maelstrom"><li> &#10097; Mount Maelstrom </li></a>
					<a href = "#rata-sum"><li> &#10097; Rata Sum </li></a>
					<a href = "#sparkfly-fen"><li> &#10097; Sparkfly Fen </li></a>
					<a href = "#caledon-forest"><li> &#10097; Caledon Forest </li></a>
					<a href = "#tangled-depths"><li> &#10097; Tangled Depths </li></a>
					<a href = "#metrica-province"><li> &#10097; Metrica Province </li></a>
					<a href = "#brisband-wildlands"><li> &#10097; Brisband Wildlands </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Crystal Desert":
				crystalFP.style.display = "block";
				status = tyriaStatus; 
				pageImg[0].children[0].src = "../images/crystal-oasis/fishing.jpg";
				pageImg[1].children[0].src = "../images/domain-of-kourna/fishing.jpg";
				pageImg[2].children[0].src = "../images/desolation/fishing.jpg";
				pageImg[3].children[0].src = "../images/elon-riverlands/fishing.jpg";
				pageImg[4].children[0].src = "../images/desert-highlands/fishing.jpg";
				show_img(5);
				pageImg[0].id = "crystal-oasis";
				pageImg[1].id = "domain-of-kourna";
				pageImg[2].id = "desolation";
				pageImg[3].id = "elon-riverlands";
				pageImg[4].id = "desert-highlands";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#crystal-oasis"><li> &#10097; Crystal Oasis </li></a>
					<a href = "#domain-of-kourna"><li> &#10097; Domain of Kourna </li></a>
					<a href = "#desolation"><li> &#10097; Desolation </li></a>
					<a href = "#elon-riverlands"><li> &#10097; Elon Riverlands </li></a>
					<a href = "#desert-highlands"><li> &#10097; Desert Highlands </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Desert Isles": 
				status = canthaStatus; 
				desertFP.style.display = "block";
				pageImg[0].children[0].src = "../images/sandswept-isles/fishing.jpg";
				pageImg[1].children[0].src = "../images/domain-of-istan/fishing.jpg";
				show_img(2);
				pageImg[0].id = "sandswept-isles";
				pageImg[1].id = "domain-of-istan";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#sandswept-isles"><li> &#10097; Sandswept Isles </li></a>
					<a href = "#domain-of-istan"><li> &#10097; Domain of Istan </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				break;
			case "Ember Bay":
				status = tyriaStatus;
				emberFP.style.display = "block";
				pageImg[0].children[0].src = "../images/ember-bay/fishing.jpg";
				show_img(1);
				pageImg[0].id = "ember-bay";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#ember-bay"><li> &#10097; Ember Bay </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a>`;
				break;
			case "Draconis Mons":
				draconisFP.style.display = "block";
				pageImg[0].children[0].src = "../images/draconis-mons/fishing.jpg";
				pageImg[0].id = "draconis-mons";
				bookmarksHTML = `
					<a href = "#fish-values"><li> &#10097; Fish Values </li></a> 
					<a href = "#draconis-mons"><li> &#10097; Draconis Mons </li></a>
					<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
					<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
					<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> `;
				show_img(1);
				break;
		}

		bookmarks.innerHTML = bookmarksHTML; 

		let holeArray = [],
			baitArray = [],
			timeArray = [],
			uniqueHoles,
			uniqueBait,
			uniqueTime;  
		// Go through the database and make table based showing the fishes and their infomation for the respective selected map
		for (let i = 0; i < fishingDB.length; i++){
			for (let j = 0; j < fishIcons.length; j++){
				if (fishingDB[i].fish == fishIcons[j].name){
					icon = fishIcons[j].icon;
					break;
				} else {
					icon = "";
				}
			}
			if (fishingDB[i].map == map || fishingDB[i].map == "World" || fishingDB[i].map == "Saltwater"){
				// Push unique holes into the array
				holeArray.push(fishingDB[i].hole); 
				// Push bait into the array
				baitArray.push(fishingDB[i].bait);
				// Push time into array
				timeArray.push(fishingDB[i].time); 

				// In the spreadsheet, the array looks like 1,2,3
				// Split into an array to easily iterate through
				// matSplit and drSplit should always have the same amount of numbers and should match their respective mat/dr 
				let matSplit = fishingDB[i].mats.split(","),
					drSplit = fishingDB[i].dr.split(",");

				let matSell = 0,
					matValue = 0,
					fishValue = 0;
				// Reset the detailHTML so the next fish on the list doesn't get the info from the previous 
				detailHTML = ``;
				// Iterate through the split arrays to get the detail info and to find the values of the items, fish
				for (let j = 0; j < matSplit.length; j++){
					// If there's no sample size within the spreadsheet, return 0
					if (drSplit[j] == "#DIV/0!"){
						drSplit[j] = 0;
					}
					// Iterate through the generalItems db for the tp prices
					// If match => set the mat values to that
					for (let k = 0; k < generalItems.length; k++){
						if (matSplit[j] == generalItems[k].name){
							matSell = generalItems[k].sell_unit_price;
							break; 
						// If there's an item that doesn't have a tp price such as Fish Eggs, set to 0
						} else {
							matSell = 0;
						}
					}
					// Set the values to the mats and the fish as a whole
					matValue = (matSell * drSplit[j]); 
					fishValue += matValue;  
					// Set info to the detail
					detailHTML += `<span style = "float: left;"> ${(Math.round(drSplit[j] * 100)/100).toFixed(2)} ${matSplit[j]} &nbsp;&nbsp; </span> <span style = "float:right;"> ${displayValues(matValue, 1)}</span><br>`;
				}

				if (fishingDB[i].time == status || status == "Dusk" || status == "Dawn" || fishingDB[i].time == "Any" || map == "Ember Bay" || map == "Draconis Mons"){
					opacity = 1;
				} else {
					opacity = 0.4;
				}

				switch (fishingDB[i].rarity){
					case "Basic": color = "#e4e8e4"; break;
					case "Fine": color = "#62a4df"; break;
					case "Masterwork": color = "#1a9353"; break;
					case "Rare": color = "#fcd056"; break;
					case "Exotic": color = "#fda405"; break;
					case "Ascended": color = "#fb72b8"; break;
					case "Legendary": color = "#6e1bf5"; break;
				}
				// Apply default tax
				fishValue *= prevTax;

				if (fishingDB[i].map == map){
					localHTML += `<tr style = "opacity: ${opacity};">
					<td><img src = "${icon}"> </td>
					<td onmouseover = "show_row(this.parentNode);" onmouseout = "hide_row(this.parentNode, '${fishingDB[i].time}');" style = 'background-color: ${color};'>${fishingDB[i].fish}
						<div class = "tooltip">
							<h1> ${fishingDB[i].fish} - Possible drops </h1>
							<p1> Size: ${fishingDB[i].size} </p1>
							<br>
							` + ` ${detailHTML} ` + `
						</div>
					</td>
					<td> ${fishingDB[i].hole} </td>
					<td> ${fishingDB[i].bait} </td>
					<td> ${fishingDB[i].time} </td>
					<td> ${displayValues(fishValue,1)} </td>
					</tr>`;
				}
				if (fishingDB[i].map == "World" || fishingDB[i].map == "Saltwater"){
					globalHTML += `<tr style = "opacity: ${opacity};">
					<td><img src = "${icon}"> </td>
					<td onmouseover = "show_row(this.parentNode);" onmouseout = "hide_row(this.parentNode, '${fishingDB[i].time}');" style = 'background-color: ${color};'>${fishingDB[i].fish}
						<div class = "tooltip">
							<h1> ${fishingDB[i].fish} - Possible drops </h1>
							<p1> Size: ${fishingDB[i].size} </p1>
							<br>
							` + ` ${detailHTML} ` + `
						</div>
					</td>
					<td> ${fishingDB[i].hole} </td>
					<td> ${fishingDB[i].bait} </td>
					<td> ${fishingDB[i].time} </td>
					<td> ${displayValues(fishValue,1)} </td>
					</tr>`;
				}
				
				
			}
		}
		localData.innerHTML = localHTML; 
		globalData.innerHTML = globalHTML;
		sortTableByPrice('local-fishing', 5);
		sortTableByPrice('global-fishing', 5);

		// CHECKBOXES	
		// Filter the array to have unique values only
		uniqueHoles = holeArray.filter(only_unique); 
		// Add unique values into the side table
		// For customize_fishing_table parameters, (this, column number to sort from)
		for (let i = 0; i < uniqueHoles.length; i++){
			holeHTML += `<tr>
			<td> ${uniqueHoles[i]} </td>
			<td> <input type = "checkbox" checked = "true" onclick = "customize_fishing_table(this, 2);"> </td>
			</tr>
			`;
		}
		// Display the table since by default it's hidden
		fishHoles.style.display = "block";
		holeTable.innerHTML = holeHTML; 

		// Filter the array to have unique values only
		uniqueBait = baitArray.filter(only_unique); 
		// Add unique values into the side table
		for (let i = 0; i < uniqueBait.length; i++){
			baitHTML += `<tr>
			<td> ${uniqueBait[i]} </td>
			<td> <input type = "checkbox" checked = "true" onclick = "customize_fishing_table(this, 3);"> </td>
			</tr>
			`;
		}
		// Display the table since by default it's hidden
		fishBait.style.display = "block";
		baitTable.innerHTML = baitHTML; 

		// Filter the array to have unique values only
		uniqueTime = timeArray.filter(only_unique); 
		// Add unique values into the side table
		for (let i = 0; i < uniqueTime.length; i++){
			timeHTML += `<tr>
			<td> ${uniqueTime[i]} </td>
			<td> <input type = "checkbox" checked = "true" onclick = "customize_fishing_table(this, 4);"> </td>
			</tr>
			`;
		}
		// Display the table since by default it's hidden
		fishTime.style.display = "block";
		timeTable.innerHTML = timeHTML; 

		// Be default, show the general fish checkbox
		fishGeneral.style.display = "block";
		let fishGeneralCheckbox = document.getElementById('fish-general-checkbox'); 
		fishGeneralCheckbox.checked = false; 

	}
	/*
	function show_details(td){
		let tooltip = document.querySelectorAll('#fish-details');
		td.addEventListener('mouseover', fn, false);

		function fn(e){

			for (let i = tooltip.length; i--;){
				tooltip[i].style.left = e.pageX + "px";
				tooltip[i].style.top = e.pageY + "px";
			}
		} 
		let dataHTML = ``;
		let table = document.getElementById('fish-details-data'),
			itemName = document.getElementById('fish-details-item');

		fishDetails.style.display = "block";

		for (let i = 0; i < fishingDB.length; i++){
			if (fishingDB[i].fish == td.innerHTML){
				let matSplit = fishingDB[i].mats.split(","),
					drSplit = fishingDB[i].dr.split(",");

				itemName.innerHTML = fishingDB[i].fish; 

				for (let j = 0; j < matSplit.length; j++){
					dataHTML += `<tr>
					<td> ${matSplit[j]} </td>
					</tr>
					`
				}
			}
		}
		table.innerHTML = dataHTML;
	} */

	//customize_fishing_table('fish-tax', 5); 
	function customize_fishing_table(box, col){
		// If users check the box in the "Currently Avaiable Fish", then remove any fish that is already faded
		// and vise versa
		if (box.id == "fish-general-checkbox"){
			if (box.checked != true){
				for (let i = 0, row; row = localData.rows[i]; i++){
					row.style.display = "";
				}
				for (let i = 0, row; row = globalData.rows[i]; i++){
					row.style.display = "";
				}
			} else {
				for (let i = 0, row; row = localData.rows[i]; i++){
					if (row.style.opacity != 1){
						row.style.display = "none";
					}
				}
				for (let i = 0, row; row = globalData.rows[i]; i++){
					if (row.style.opacity != 1){
						row.style.display = "none";
					}
				}
			}
		}
		if (box.id == "fish-tax"){
			for (let i = 0, row; row = localData.rows[i]; i++){
				let getNums = /(|-)[0-9]/g,
					getRow = row.getElementsByTagName('td')[col],
					getValue = row.getElementsByTagName('td')[col].innerHTML.match(getNums),
					tempValue = '',
					fishValue = 0;
				for (let j = 0; j < getValue.length; j++){
					tempValue = tempValue.concat(getValue[j]);
				}
				fishValue = parseInt(tempValue) / prevTax;
				fishValue *= box.value;
				getRow.innerHTML = displayValues(fishValue, 1); 
			}
			prevTax = box.value; 
		}

		// Get the fishing hole name adjacent to the checkbox
		let option = box.parentNode.parentNode.getElementsByTagName('td')[0].innerHTML;
		// Get main tables
		let localTable = document.getElementById('local-fishing'),
			globalTable = document.getElementById('global-fishing');
		// Iterate thru the main table to check the fishing hole column and match with the checkbox
		for (let i = 1, row; row = localTable.rows[i]; i++){
			// Get the fishing hole name from the main table
			let hole = row.getElementsByTagName('td')[col].innerHTML; 
			if (option == hole && box.checked == false){
				row.style.display = "none";
			}
			if (option == hole && box.checked == true){
				row.style.display = "";
			}
		}
		for (let i = 1, row; row = globalTable.rows[i]; i++){
			// Get the fishing hole name from the main table
			let hole = row.getElementsByTagName('td')[col].innerHTML; 
			if (option == hole && box.checked == false){
				row.style.display = "none";
			}
			if (option == hole && box.checked == true){
				row.style.display = "";
			}
		}
	}

	// When it hits dusk/dawn, hit this function
	// Make the main fishing table opacity = 1 instead of some being 0 because all fishes are availalbe during dusk/dawn
	// This function gets called in the timers
	function dusk_dawn(region){
		if (region == "Cantha"){
			if (map == "Seitung Province" || map == "New Kaineng City" || map == "Echovald Wilds" || map == "Dragon's End"){
				for (let i = 0, row; row = localData.rows[i]; i++){
					row.style.opacity = 1;
				}
				for (let i = 0, row; row = globalData.rows[i]; i++){
					row.style.opacity = 1;
				}
			}
		} else {
			if (map != "Seitung Province" || map != "New Kaineng City" || map != "Echovald Wilds" || map != "Dragon's End"){
				for (let i = 0, row; row = localData.rows[i]; i++){
					row.style.opacity = 1;
				}
				for (let i = 0, row; row = globalData.rows[i]; i++){
					row.style.opacity = 1;
				}
			}
		}
		
		
	}
	function daytime_nighttime(){
		if (map == "Seitung Province" || map == "New Kaineng City" || map == "Echovald Wilds" || map == "Dragon's End"){
			for (let i = 0, row; row = localData.rows[i]; i++){
				// For some reason, there's unnecssary spaces that make the strings not match
				// Removed spaced so that it does
				let time = row.children[4].innerHTML.replace(/\s/g, '');
				if (time == canthaStatus || time == "Any"){
					row.style.opacity = 1; 
				} else {
					row.style.opacity = 0.4;
				}
			}

			for (let i = 0, row; row = globalData.rows[i]; i++){
				let time = row.children[4].innerHTML.replace(/\s/g, '');
				if (time == canthaStatus || time == "Any"){
					row.style.opacity = 1; 
				} else {
					row.style.opacity = 0.4;
				}
			}
		} else {
			for (let i = 0, row; row = localData.rows[i]; i++){
				// For some reason, there's unnecssary spaces that make the strings not match
				// Removed spaced so that it does
				let time = row.children[4].innerHTML.replace(/\s/g, '');
				if (time == tyriaStatus || time == "Any"){
					row.style.opacity = 1; 
				} else {
					row.style.opacity = 0.4;
				}
			}

			for (let i = 0, row; row = globalData.rows[i]; i++){
				let time = row.children[4].innerHTML.replace(/\s/g, '');
				if (time == tyriaStatus || time == "Any"){
					row.style.opacity = 1; 
				} else {
					row.style.opacity = 0.4;
				}
			}
		}

		
	}
	// Call this function when hovering over the main fishing table under Name column
	// When hovering, if  the row is already hidden, show it to display the potential drops of the fish
	// When hoving out, if the current time and the required time do not match, then hide the row
	function show_row(row){
		if (row.style.opacity == 0.4)
			row.style.opacity = 1;		
	}
	function hide_row(row, time){
		if (map == "Seitung Province" || map == "New Kaineng City" || map == "Echovald Wilds" || map == "Dragon's End"){
			if (canthaStatus == time || time == "Any" || canthaStatus == "Dusk" || canthaStatus == "Dawn"){
				row.style.opacity = 1; 
			} else {
				row.style.opacity = 0.4;
			}
		} else {
			if (tyriaStatus == time || time == "Any" || tyriaStatus == "Dusk" || tyriaStatus == "Dawn"){
				row.style.opacity = 1; 
			} else {
				row.style.opacity = 0.4; 
			}
		}
	}



	let	fishingBuffs = document.getElementById('fishing-buff-values').rows,
		buffTotal = document.getElementById('fishing-buff-total');


	function fishing_buff_value(){
		let total = 0; 
		for (let i = 0; i < fishingBuffs.length - 1; i++){
			if (fishingBuffs[i].getElementsByTagName('input')[0].checked != false){
				total += parseInt(fishingBuffs[i].getElementsByTagName('input')[0].value);
			}
		}
		buffTotal.innerHTML = total;
	}
	// In the buff table, if users select a party tier buff, then it gives the value to the <td> above
	// Then in the fishing_buff_value() function, it calculates the new total with the new value
	function select_lure(lure){
		let totalValue = document.getElementById('fishing-lure'),
			lureValue = document.getElementById('fishing-lure-value');
		switch (lure.value){
			case "Wooden Fishing Lure": totalValue.value = 50; lureValue.innerHTML = 50; break;
			case "Antique Fishing Lure": totalValue.value = 75; lureValue.innerHTML = 75; break;
			case "Amber Fishing Lure":
			case "Jade Fishing Lure": totalValue.value = 100; lureValue.innerHTML = 100; break;
		}
		// Calculate the total
		// Putting this here allows the user to see the new total when the checkbox is checked AND switching the tiers
		fishing_buff_value();
	}
	// In the buff table, if users select a party tier buff, then it gives the value to the <td> above
	// Then in the fishing_buff_value() function, it calculates the new total with the new value
	function select_bait(bait){
		let totalValue = document.getElementById('fishing-bait'),
			foodValue = document.getElementById('fishing-bait-value');
		switch (bait.value){
			case "Not Mackerel": totalValue.value = 100; foodValue.innerHTML = 100; break;
			case "Mackerel": totalValue.value = 150; foodValue.innerHTML = 150; break;
		}
		// Calculate the total
		// Putting this here allows the user to see the new total when the checkbox is checked AND switching the tiers
		fishing_buff_value();
	}
	// In the buff table, if users select a mastery tier buff, then it gives the value to the <td> above
	// Then in the fishing_buff_value() function, it calculates the new total with the new value
	function select_mastery(mastery){
		let totalValue = document.getElementById('fishing-mastery'),
			masteryValue = document.getElementById('fishing-mastery-value');
		switch (mastery.value){
			case "Tier 1": totalValue.value = 20; masteryValue.innerHTML = 20; break;
			case "Tier 2": totalValue.value = 40; masteryValue.innerHTML = 40; break;
			case "Tier 3": totalValue.value = 60; masteryValue.innerHTML = 60; break;
			case "Tier 4": totalValue.value = 80; masteryValue.innerHTML = 80; break;
			case "Tier 5": totalValue.value = 100; masteryValue.innerHTML = 100; break;
		}
		// Calculate the total
		// Putting this here allows the user to see the new total when the checkbox is checked AND switching the tiers
		fishing_buff_value();
	}
	// In the buff table, if users select a party tier buff, then it gives the value to the <td> above
	// Then in the fishing_buff_value() function, it calculates the new total with the new value
	function select_party(tier){
		let partyValue = document.getElementById('fishing-party'),
			tierValue = document.getElementById('fishing-tier-value');
		switch (tier.value){
			case "Tier 1": partyValue.value = 50; tierValue.innerHTML = 50; break;
			case "Tier 2": partyValue.value = 100; tierValue.innerHTML = 100; break;
			case "Tier 3": partyValue.value = 150; tierValue.innerHTML = 150; break;
			case "Tier 4": partyValue.value = 200; tierValue.innerHTML = 200; break;
			case "Tier 5": partyValue.value = 250; tierValue.innerHTML = 250; break;
			case "Tier 6": partyValue.value = 300; tierValue.innerHTML = 300; break;
		}
		// Calculate the total
		// Putting this here allows the user to see the new total when the checkbox is checked AND switching the tiers
		fishing_buff_value();
	}
	// In the buff table, if users select a party tier buff, then it gives the value to the <td> above
	// Then in the fishing_buff_value() function, it calculates the new total with the new value
	function select_food(food){
		let totalValue = document.getElementById('fishing-food'),
			foodValue = document.getElementById('fishing-food-value');
		switch (food.value){
			case "Whitefish Sushi": totalValue.value = 75; foodValue.innerHTML = 75; break;
			case "Yellowfish Sushi": totalValue.value = 100; foodValue.innerHTML = 100; break;
			case "Orangefish Sushi": totalValue.value = 125; foodValue.innerHTML = 125; break;
			case "Redfish Sushi": totalValue.value = 150; foodValue.innerHTML = 150; break;
			case "Bowl of Fish Stew": totalValue.value = 150; foodValue.innerHTML = 150; break;
			case "Bowl of Echovald Hotpot": totalValue.value = 150; foodValue.innerHTML = 150; break;
			case "Bowl of Jade Sea Bounty": totalValue.value = 150; foodValue.innerHTML = 150; break;
			case "Bowl of Crispy Fish Pancakes": totalValue.value = 150; foodValue.innerHTML = 150; break;
			case "Bowl of Imperial Palace Special": totalValue.value = 150; foodValue.innerHTML = 150; break;
		}
		// Calculate the total
		// Putting this here allows the user to see the new total when the checkbox is checked AND switching the tiers
		fishing_buff_value();
	}

	function fish_exchange(){
		let requiredFish = ["Piece of Crustacean Meat", "Fine Fish Fillet", "Fabulous Fish Fillet", "Flavorful Fish Fillet", "Fantastic Fish Fillet", "Fine Fish Fillet", "Flawless Fish Fillet"],
			resultFish = ["Fine Fish Fillet", "Fabulous Fish Fillet", "Flavorful Fish Fillet", "Fantastic Fish Fillet", "Flawless Fish Fillet", "Mackerel", "Chunk of Ancient Ambergris"];

		let table = document.getElementById('fishing-exchange-data'),
			dataHTML = ``,
			requiredIcon, resultIcon; 

		for (let i = 0; i < requiredFish.length; i++){
			let totalValue = 0,
				requiredValue = 0,
				resultValue = 0,
				color = ""; 
			for (let j = 0; j < generalItems.length; j++){
				// Mackerel exchange
				if (i == 5){
					resultValue = 0; 
					if (requiredFish[i] == generalItems[j].name){
						resultIcon[i] = generalItems[j].icon;
					}
				}
				if (requiredFish[i] == generalItems[j].name){
					requiredValue = generalItems[j].sell_unit_price;
					requiredIcon = generalItems[j].icon;
				}
				if (resultFish[i] == generalItems[j].name){
					resultValue = generalItems[j].sell_unit_price; 
					resultIcon = generalItems[j].icon;
				}
			}
			
			let qty = 5;
			switch (requiredFish[i]){
				case "Piece of Crustacean Meat": qty = 1; break;
				case "Flawless Fish Fillet": qty = 10; break;
			}
			totalValue = (resultValue - (requiredValue * qty)) * prevTax; 
			if (totalValue > 0){
				color = "#CFE9B4";
			} else {
				color = "#E9C4B4";
			}
			dataHTML += `
			<tr>
				<td> ${qty} </td>
				<td> <img src = "${requiredIcon}"></td>
				<td> &#8594; </td>
				<td> <img src ="${resultIcon}"> </td>
				<td style = "background-color: ${color};"> ${displayValues(totalValue,1)} </td>
			</tr>
			`;

		}
		table.innerHTML = dataHTML; 
		sortTableByPrice('fishing-exchange', 4);
	}
	fish_exchange();
	fishing_buff_value();

</script>

<!-- 
	=====================================================
	====================== CATCHES ======================
	=====================================================
-->

<script>
	// Get catches data from spreadsheet db
	let catches = <?php echo $catchesDB->get_values('catches');?>; 
	let catchTableBody = document.getElementById('catch-table-values'),
		catchHTML = ``; 

	console.log("catches: ", catches)

	// List out all the catch data and their values onto the catch table
	for (let i = 0; i < catches.length; i++){
		// If the sample size is < 50, don't include
		if (catches[i].value == 0 || catches[i].size < 50){
			continue; 
		} 
		catchHTML += `<tr>
		<td>${catches[i].map}</td>
		<td>${catches[i].hole}</td>
		<td>${catches[i].bait}</td>
		<td>${catches[i].time}</td>
		<td>${catches[i].fp} </td>
		<td>${catches[i].size}</td>
		<td onclick = "catch_details(this.parentNode); location.href = '#drop-rates'"> Show </td>
		<td>${displayValues(catches[i].value,1)}</td> 
		</tr>`;
	}
	catchTableBody.innerHTML = catchHTML;
	sortTableByPrice("catches", 7);

	
	function catch_details(td){
		// Get the dr list from respective hole from the catch table
		let region = td.children[0].innerHTML,
			hole = td.children[1].innerHTML,
			bait = td.children[2].innerHTML,
			time = td.children[3].innerHTML,
			fp = td.children[4].innerHTML,
			size = td.children[5].innerHTML; 
		let detailsTableBody = document.getElementById('dr-details-table-values');
		let detailsHTML = ``;

		let saltwaterTableBody = document.getElementById('dr-saltwater-table-values'),
			worldClassTableBody = document.getElementById('dr-world-class-table-values'),
			junkTableBody = document.getElementById('dr-junk-table-values'),
			tonicTableBody = document.getElementById('dr-tonic-table-values'),
			localTableBody = document.getElementById('dr-local-table-values'),
			localTypeTableBody = document.getElementById('dr-local-type-table-values'),
			bagTableBody = document.getElementById('dr-bag-table-values'),
			otherTableBody = document.getElementById('dr-other-table-values'); 

		let regionSpan = document.getElementById('dr-region'),
			holeSpan = document.getElementById('dr-hole'),
			baitSpan = document.getElementById('dr-bait'),
			timeSpan = document.getElementById('dr-time'),
			fpSpan = document.getElementById('dr-fp'),
			sizeSpan = document.getElementById('dr-size');

		let saltwaterHTML = ``,
			worldClassHTML = ``,
			junkHTML = ``,
			tonicHTML = ``,
			localHTML = ``,
			localTypeHTML = ``,
			bagHTML = ``,
			otherHTML = ``;

		let saltwaterTotal = 0,
			worldClassTotal = 0,
			localTotal = 0,
			localFineTotal = 0, localMasterworkTotal = 0, localRareTotal = 0, localExoticTotal = 0, localAscendedTotal = 0, localLegendaryTotal = 0,
			legendaryTotal = 0, ascendedTotal = 0, rareTotal = 0, masterworkTotal = 0, fineTotal = 0, basicTotal = 0,
			junkTotal = 0,
			tonicTotal = 0, 
			bagTotal = 0,
			otherTotal = 0;

		let color = "",
			icon = "";


		regionSpan.innerHTML = region; 
		holeSpan.innerHTML = hole; 
		baitSpan.innerHTML = bait;  
		timeSpan.innerHTML = time; 
		fpSpan.innerHTML = fp;
		sizeSpan.innerHTML = size;


		for (let i = 0; i < catches.length; i++){
			// Check if map matches
			if (region == catches[i].map
				&& hole == catches[i].hole
				&& bait == catches[i].bait 
				&& time == catches[i].time){
				// Make array of the fish names, drop rates
				let catchFish = catches[i].mats.split(","); 
				let catchDr = catches[i].dr.split(",");
				console.log("catch fish: ", catchFish);

				for (let j = 0; j < catchFish.length; j++){
					let catchValue = 0;
					if (catchFish[j] == ""){
						continue;
					}
					// Iterate through the fish DB and check if the current catches match and match their specific type
					for (let k = 0; k < fishingDB.length; k++){
						if (fishingDB[k].fish == catchFish[j]){
							switch (fishingDB[k].rarity){
								case "Basic": color = "#e4e8e4"; break;
								case "Fine": color = "#62a4df"; break;
								case "Masterwork": color = "#1a9353"; break;
								case "Rare": color = "#fcd056"; break;
								case "Exotic": color = "#fda405"; break;
								case "Ascended": color = "#fb72b8"; break;
								case "Legendary": color = "#6e1bf5"; break;
							}
							for (let l = 0; l < fishIcons.length; l++){
								if (fishingDB[k].fish == fishIcons[l].name){
									icon = fishIcons[l].icon; 
								}
							}

							if (fishingDB[k].map == region){
								localHTML += `<tr>
								<td><img src = "${icon}"> </td>
								<td style = "background-color: ${color};">${catchFish[j]}</td>
								<td>${(catchDr[j]*100).toFixed(2) + "%"}
								</tr>`;
								localTotal += parseFloat(catchDr[j]);

								// Using color because it is asscioated with the type of fish since catchFish and catchDr do not have the rarities of the fish included 
								switch (color){
									case "#62a4df": localFineTotal += parseFloat(catchDr[j]); break;
									case "#1a9353": localMasterworkTotal += parseFloat(catchDr[j]); break;
									case "#fcd056": localRareTotal += parseFloat(catchDr[j]); break;
									case "#fda405": localExoticTotal += parseFloat(catchDr[j]); break;
									case "#fb72b8": localAscendedTotal += parseFloat(catchDr[j]); break;
									case "#6e1bf5": localLegendaryTotal += parseFloat(catchDr[j]); break;
								}
							}
							if (fishingDB[k].map == "Saltwater"){
								saltwaterHTML += `<tr>
								<td><img src = "${icon}"> </td>
								<td style = "background-color: ${color};">${catchFish[j]}</td>
								<td>${(catchDr[j]*100).toFixed(2) + "%"}
								</tr>`;
								saltwaterTotal += parseFloat(catchDr[j]); 
							}
							if (fishingDB[k].map == "World"){
								worldClassHTML += `<tr>
								<td><img src = "${icon}"> </td>
								<td style = "background-color: ${color};">${catchFish[j]}</td>
								<td>${(catchDr[j]*100).toFixed(2) + "%"}
								</tr>`;
								worldClassTotal += parseFloat(catchDr[j]);
							} 
						}
						
						
					}
					// Check junk
					if (junkList.includes(catchFish[j])){
						for (let l = 0; l < generalItems.length; l++){
							if (catchFish[j] == generalItems[l].name){
								icon = generalItems[l].icon; 
							}
						}
						junkHTML += `<tr>
						<td><img src = "${icon}"> </td>
						<td style = "background-color: #aab1c5";>${catchFish[j]}</td>
						<td>${(catchDr[j]*100).toFixed(2) + "%"}
						</tr>`;
						junkTotal += parseFloat(catchDr[j]);
					}
					// Check Tonics
					if (catchFish[j].includes("Tonic")){
						for (let l = 0; l < generalItems.length; l++){
							if (catchFish[j] == generalItems[l].name){
								icon = generalItems[l].icon; 
							}
						}
						tonicHTML += `<tr>
						<td><img src = "${icon}"> </td>
						<td style = "background-color: #1a9353;">${catchFish[j]}</td>
						<td>${(catchDr[j]*100).toFixed(2) + "%"}
						</tr>`;
						tonicTotal += parseFloat(catchDr[j]);
					}
					// Check bags
					if (catchFish[j].includes("Box") || catchFish[j].includes("Bag")){
						for (let l = 0; l < generalItems.length; l++){
							if (catchFish[j] == generalItems[l].name){
								icon = generalItems[l].icon; 
							}
						}
						bagHTML += `<tr>
						<td><img src = "${icon}"> </td>
						<td style = "background-color: #fda405;">${catchFish[j]}</td>
						<td>${(catchDr[j]*100).toFixed(2) + "%"}
						</tr>`;
						bagTotal += parseFloat(catchDr[j]);
					}
					// Check others
					if (otherList.includes(catchFish[j])){
						for (let l = 0; l < generalItems.length; l++){
							if (catchFish[j] == generalItems[l].name){
								icon = generalItems[l].icon; 
							}
						}
						otherHTML += `<tr>
						<td><img src = "${icon}"> </td>
						<td style = "background-color: #e4e8e4;">${catchFish[j]}</td>
						<td>${(catchDr[j]*100).toFixed(2) + "%"}
						</tr>`;
						otherTotal += parseFloat(catchDr[j]);
					}
					
					

					/*
					detailsHTML += `<tr>
					<td>${catchFish[j]}</td>
					<td>${(catchDr[j]*100).toFixed(2) + "%"}</td>
					</tr>`;
					*/
				}
			}
		}
		detailsHTML = `
		<tr>
		<td> Local </td>
		<td> ${(localTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td> Saltwater </td>
		<td> ${(saltwaterTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td> World Class </td>
		<td> ${(worldClassTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		</tr>
		<tr>
		<td> Junk </td>
		<td> ${(junkTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		</tr>
		<tr>
		<td> Bags </td>
		<td> ${(bagTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		</tr>
		<tr>
		<td> Tonics </td>
		<td> ${(tonicTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		</tr>
		<tr>
		<td> Other </td>
		<td> ${(otherTotal * 100).toFixed(2) + "%"} </td>
		</tr>`;

		localTypeHTML = `
		<tr>
		<td style = "background-color: #62a4df;"> Fine </td>
		<td> ${(localFineTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td style = "background-color: #1a9353;"> Masterwork </td>
		<td> ${(localMasterworkTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td style = "background-color: #fcd056;"> Rare </td>
		<td> ${(localRareTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td style = "background-color: #fda405;"> Exotic </td>
		<td> ${(localExoticTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td style = "background-color: #fb72b8;"> Ascended </td>
		<td> ${(localAscendedTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		<tr>
		<td style = "background-color: #6e1bf5;"> Legendary </td>
		<td> ${(localLegendaryTotal * 100).toFixed(2) + "%"} </td>
		</tr>
		`;

		detailsTableBody.innerHTML = detailsHTML;
		localTableBody.innerHTML = localHTML;
		localTypeTableBody.innerHTML = localTypeHTML;
		saltwaterTableBody.innerHTML = saltwaterHTML;
		worldClassTableBody.innerHTML = worldClassHTML;
		junkTableBody.innerHTML = junkHTML;
		tonicTableBody.innerHTML = tonicHTML;
		bagTableBody.innerHTML = bagHTML;
		otherTableBody.innerHTML = otherHTML;

		sortTableByPercent("catches-details", 1);
		sortTableByPercent('dr-local-table', 2);
		sortTableByPercent('catches-local-type', 1);
		sortTableByPercent('dr-saltwater-table', 2);
		sortTableByPercent('dr-world-class-table', 2);
		sortTableByPercent('dr-junk-table', 2);
		sortTableByPercent('dr-bag-table', 2);
		sortTableByPercent('dr-tonic-table', 2);
		sortTableByPercent('dr-other-table', 2);

	}
	
</script>

<!-- 
	========================================================
	====================== BENCHMARKS ======================
	========================================================
-->

<script>

	let benchmarks = <?php echo $fishingBenchmarksDB->get_values('fishing_benchmarks');?>,
		benchTableBody = document.getElementById('bench-table-values'),
		benchHTML = ``;

	// List out all the catch data and their values onto the catch table
	for (let i = 0; i < benchmarks.length; i++){
		if (benchmarks[i].value == 0){
			continue;
		}
		// On the spreadsheet, the time is labeled numerically (if that makes sense) and not something like 14mins 56secs.
		// Instead 14:56 = 14.93333
		// So this avgTime converts the 14.93 => 14:56
		let avgTime = (Math.round(benchmarks[i].avg_time) + ((benchmarks[i].avg_time % 1) * 60)/100).toFixed(2).replace(".",":"); 
		benchHTML += `<tr>
		<td>${benchmarks[i].map}</td>
		<td>${benchmarks[i].hole}</td>
		<td>${benchmarks[i].bait}</td>
		<td>${benchmarks[i].time}</td>
		<td>${benchmarks[i].fp}</td>
		<td>${(Math.round(benchmarks[i].avg_nodes * 100)/100).toFixed(2)}</td>
		<td>${avgTime}</td>
		<td>${displayValues(benchmarks[i].value,1)}</td> 
		</tr>`;
	}
	benchTableBody.innerHTML = benchHTML;
	sortTableByPrice("fishing-benchmarks", 7);

</script>


<script>

	let food = [
		{
			name: "Bowl of Fish Stew",
			value: function() {
				recipe(this, generalItems,
					3, "Fine Fish Fillet",
					2, "Fabulous Fish Fillet",
					1, "Flavorful Fish Fillet",
					1, "Bowl of Herbed Vegetable Stock");
			},
			name: "Bowl of Echovald Hotpot",
			value: function() {
				recipe(this, generalItems,
					3, "Fine Fish Fillet",
					2, "Fabulous Fish Fillet",
					1, "Flavorful Fish Fillet",
					1, "Bowl of Herbed Vegetable Stock");
			},
		},
	];

	// Go thru the upgradedMats obj and fill their buy, sell values
	for (let i = 0; i < food.length; i++){
		food[i].value();
	}

	// Example for "Spool of Thick Elonian Cord": 
	//          recipe(this, ascendedIngres,
	// 				50, "Cured Thick Leather Square",
	//				1, "Glob of Ectoplasm",
	//				10, "Thermocatalytic Reagent");
	function recipe(product, array, qty1, ingre1, qty2, ingre2, qty3, ingre3, qty4, ingre4){
		// Empty arrays to put in ingredients and their qty
		let ingre = new Array,
			qty = new Array; 

		let buy_value = 0,
			sell_value = 0,
			temp_buy_value = 0,
			temp_sell_value = 0;

		// Check if the inputted ingredients and qty are valid
		// If yes, push into the array
		if (isNaN(ingre1) != true || typeof ingre1 !== "undefined"){ingre.push(ingre1);}
		if (isNaN(ingre2) != true || typeof ingre2 !== "undefined"){ingre.push(ingre2);}
		if (isNaN(ingre3) != true || typeof ingre3 !== "undefined"){ingre.push(ingre3);}
		if (isNaN(ingre4) != true || typeof ingre4 !== "undefined"){ingre.push(ingre4);} 

		if (isNaN(qty1) != true || typeof qty1 !== "undefined"){qty.push(qty1);}
		if (isNaN(qty2) != true || typeof qty2 !== "undefined"){qty.push(qty2);}
		if (isNaN(qty3) != true || typeof qty3 !== "undefined"){qty.push(qty3);}
		if (isNaN(qty4) != true || typeof qty4 !== "undefined"){qty.push(qty4);}	

		// Go through the ingre array then the array with all of the items
		// Check to see if the names in the ingre array match with the other
		// If yes, input the buy and sell values * their qty
		for (i = 0; i < ingre.length; i++){
			for (j = 0; j < array.length; j++){
				if (array[j].name == ingre[i]){
					temp_buy_value = array[j].buy_unit_price * qty[i]; 
					temp_sell_value = array[j].sell_unit_price * qty[i];
				}
			}
			buy_value += temp_buy_value;
			sell_value += temp_sell_value;	
		}
		// Replace the .buy and .sell in the product to these new values
		product.buy = buy_value;
		product.sell = sell_value;
	}

</script>