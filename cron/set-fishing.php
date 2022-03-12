<?php 
	chdir(dirname(__FILE__));
	include('../db/maps.php'); 
	include('../db/items.php');	
?>

<?php

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

	   tyriaTimerBox.style.display = "none";
	   canthaTimerBox.style.display = "none";

	// Get data from database
	let fishingDB = <?php echo $fishingDB->get_values(); ?>;
	// Get fishing pictures from items database
	let fishIcons = <?php echo $itemsDB->get_array_items('items', $fishes); ?>; 

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
		fishHoles = document.getElementById('fish-hole'),
		fishBait = document.getElementById('fish-bait'),
		fishTime = document.getElementById('fish-time'),
		seitungFP = document.getElementById('seitung-fp'),
		kainengFP = document.getElementById('kaineng-fp'),
		echovaldFP = document.getElementById('echovald-fp'),
		dragonsFP = document.getElementById('dragons-fp'),
		emberFP = document.getElementById('ember-fp'),
		draconisFP = document.getElementById('draconis-fp');

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
        			maxBar = 35 * 60;
            	}
            	// DUSK
            	if (min >= 35 && min < 40){
            		canthaStatus = "Dusk";
            		nextProgress = "Nighttime";
            		progressBarCantha.style.background = duskColor;

            		maxTime = start_hour * 3600 + (40 * 60); 
        			maxBar = 5 * 60;
            	}
            	// NIGHT
            	if (min >= 40){
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
            		canthaStatus = "Dawn";
            		nextProgress = "Daytime";
            		progressBarCantha.style.background = dawnColor; 

            		maxTime = end_hour * 3600 + (40 * 60); 
        			maxBar = 5 * 60;
            	}
            	// DAY
            	if (min >= 40){
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
            progressTextCantha.innerHTML = "Currently: " + canthaStatus + " | " + getDisplayTime(result) + " &#x27F6; " + nextProgress;

          
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
        			maxBar = 55 * 60;
            	}
            	// DUSK
            	// 1:40 - 1:44
            	if (min >= 40 && min < 45){
            		tyriaStatus = "Dusk";
            		nextProgress = "Nighttime";
            		progressBarTyria.style.background = duskColor;

            		maxTime = start_hour * 3600 + (45 * 60); 
        			maxBar = 5 * 60;
            	}
            	// NIGHT
            	// 1:45 - 2:44
            	if (min >= 45){
            		tyriaStatus = "Nighttime";
            		nextProgress = "Dawn";
            		progressBarTyria.style.background = nightColor;

            		maxTime = end_hour * 3600 + (45 * 60); 
        			maxBar = 55 * 60;
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
        			maxBar = 55 * 60;
            	}
            	// DAWN
            	if (min >= 25 && min < 30){
            		tyriaStatus = "Dawn";
            		nextProgress = "Daytime";
            		progressBarTyria.style.background = dawnColor; 

            		maxTime = end_hour * 3600 + (30 * 60); 
        			maxBar = 5 * 60;
            	}
            	// DAY
            	if (min >= 30){
            		tyriaStatus = "Daytime";
            		nextProgress = "Dusk";
            		progressBarTyria.style.background = dayColor;

        			maxTime = (end_hour + 1) * 3600 + (40 * 60); 
        			maxBar = 55 * 60;
            	}
            }
        	currentBar = time - (maxTime - maxBar);
        	barWidth = (currentBar/maxBar)*100;
            progressBarTyria.style.width = barWidth + "%";
            result = time - maxTime;
            progressTextTyria.innerHTML = "Currently: " + tyriaStatus + " | " + getDisplayTime(result) + " &#x27F6; " + nextProgress;

          
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

	// Display the timer depending on what the user selects
	// Put this function inside the show_map function within the switch where it changes depending on what the user selects
    function show_appro_timer(area){
    	switch (area){
    		case "Tyria": tyriaTimerBox.style.display = "block"; canthaTimerBox.style.display = "none"; break;
    		case "Cantha": tyriaTimerBox.style.display = "none"; canthaTimerBox.style.display = "block"; break;
    		case "Ring of Fire": tyriaTimerBox.style.display = "none"; canthaTimerBox.style.display = "none"; break;
    	}
    }

    // Get the map from the user when they select it
    function get_map(map){
    	show_map(map);
    }

    function only_unique(value, index, self){
    	return self.indexOf(value) === index;
    }
	

	// When the user selects a map, display table and map 
	function show_map(map){
		let table = document.getElementById('fishing-data'),
			holeTable = document.getElementById('fish-hole-data'),
			baitTable = document.getElementById('fish-bait-data'),
			timeTable = document.getElementById('fish-time-data'),
			img = document.getElementById('fishing-img'),
			dataHTML = ``,
			holeHTML = ``,
			baitHTML = ``,
			timeHTML = ``; 

		let opacity = 1,
			color = "";

		let data = ``,
			status = "";

		// By default, do not show any fishing detail tables
		// This also allows the tables to go away when users select a new map
		for (let i = 0; i < allFP.length; i++){
			allFP[i].style.display = "none";
		}
		// Depending on what the map the user selects,
		// Change map
		// Show new tables
		// Show timer depending on the area
		switch (map){
			case "Seitung Province": 
				status = canthaStatus;
				seitungFP.style.display = "block"; 
				img.src = "../images/seitung-province/fishing.jpg"; 
				show_appro_timer("Cantha"); 
				break;
			case "New Kaineng City": 
				status = canthaStatus;
				kainengFP.style.display = "block"; 
				img.src = "../images/new-kaineng-city/fishing.jpg"; 
				show_appro_timer("Cantha");
				break;
			case "Echovald Wilds": 
				status = canthaStatus;
				echovaldFP.style.display = "block"; 
				img.src = "../images/echovald-wilds/fishing.png"; 
				show_appro_timer("Cantha"); 
				break;
			case "Dragon's End": 
				status = canthaStatus;
				dragonsFP.style.display = "block"; 
				img.src = "../images/dragons-end/fishing.jpg"; 
				show_appro_timer("Cantha"); 
				break;
			case "Ascalon": 
				status = tyriaStatus;
				show_appro_timer("Tyria"); 
				break;
			case "Kryta": 
				status = tyriaStatus;
				show_appro_timer("Tyria"); 
				break;
			case "Shiverpeaks": 
				status = tyriaStatus;
				show_appro_timer("Tyria"); 
				break;
			case "Orr": 
				status = tyriaStatus;
				show_appro_timer("Tyria"); 
				break;
			case "Maguuma Jungle": 
				status = tyriaStatus;
				show_appro_timer("Tyria"); 
				break;
			case "Crystal Desert":
				status = tyriaStatus; 
				show_appro_timer("Tyria"); 
				break;
			case "Ember Bay":
				emberFP.style.display = "block";
				img.src = "../images/ember-bay/fishing.jpg";
				show_appro_timer("Ring of Fire");
				break;
			case "Draconis Mons":
				draconisFP.style.display = "block";
				img.src = "../images/draconis-mons/fishing.jpg";
				show_appro_timer("Ring of Fire");
				break;
		}

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
			if (fishingDB[i].map == map || fishingDB[i].map == "World"){
				// Push unique holes into the array
				holeArray.push(fishingDB[i].hole); 
				// Push bait into the array
				baitArray.push(fishingDB[i].bait);
				// Push time into array
				timeArray.push(fishingDB[i].time); 

				if (fishingDB[i].time == status || fishingDB[i].time == "Any" || map == "Ember Bay" || map == "Draconis Mons"){
					opacity = 1;
					switch (fishingDB[i].rarity){
						case "Basic": color = "#e4e8e4"; break;
						case "Fine": color = "#62a4df"; break;
						case "Masterwork": color = "#1a9353"; break;
						case "Rare": color = "#fcd056"; break;
						case "Exotic": color = "#fda405"; break;
						case "Ascended": color = "#fb72b8"; break;
						case "Legendary": color = "#6e1bf5"; break;
					}
				} else {
					opacity = 0.4;
					color = "none";
				}
				
				dataHTML += `<tr>
				<td style = "opacity: ${opacity}"><img src = "${icon}"> </td>
				<td onmouseover = "show_details(this);" style = 'opacity: ${opacity}; background-color: ${color};'>${fishingDB[i].fish}</td>
				<td style = 'opacity: ${opacity};'> ${fishingDB[i].hole} </td>
				<td style = 'opacity: ${opacity};'> ${fishingDB[i].bait} </td>
				<td style = 'opacity: ${opacity};'> ${fishingDB[i].time} </td>
				<td style = 'opacity: ${opacity};'> ${displayValues(fishingDB[i].value,1)} </td>
				</tr>`;
				
			}
		}
		table.innerHTML = dataHTML; 
		sortTableByPrice('fishing', 5);

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



		
	}
	function show_details(td){
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
	}

	function customize_fishing_table(box, col){
		// Get the fishing hole name adjacent to the checkbox
		let option = box.parentNode.parentNode.getElementsByTagName('td')[0].innerHTML;
		// Get main table
		let table = document.getElementById('fishing');
		// Iterate thru the main table to check the fishing hole column and match with the checkbox
		for (let i = 1, row; row = table.rows[i]; i++){
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


	let	fishingBuffs = document.getElementById('fishing-buff-values').rows,
		buffTotal = document.getElementById('fishing-buff-total');


	function fishing_buff_value(){
		let total = 0; 
		console.log(fishingBuffs[0].getElementsByTagName('input')[0])
		for (let i = 0; i < fishingBuffs.length - 1; i++){
			if (fishingBuffs[i].getElementsByTagName('input')[0].checked != false){
				total += parseInt(fishingBuffs[i].getElementsByTagName('input')[0].value);
			}
		}
		buffTotal.innerHTML = total;
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

	fishing_buff_value();



</script>