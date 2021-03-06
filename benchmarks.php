<?php header("Cache-Control: no-cache"); ?>

<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults, CSS/JS main files -->
	<?php 
		chdir(dirname(__FILE__));
		include('config.php'); 
		include ('./js-to-php/benchmarks.php'); 
		include ("../js-to-php/get-gathering-benchmarks.php");?>
	<title> Benchmarks </title>
	<script> 
		// AJAX to show the gathering farm once users have selected the drop down menu of gathering farms
		function get_gathering_farm(str) {
			console.log("this is gathering farm");
			let div = document.getElementById('gathering-map-tableData'),
				loading = document.getElementById('loading-choya-1');
			// Show the loading choya when collecting data
			loading.style.display = "block"; 
			// If none selected, show nothing
		  	if (str == "") {
		    	div.innerHTML = "";
		    	return;
		  	} else {
		  		// Otherwise, send request to php file that collects data
		    	var xmlhttp = new XMLHttpRequest();
		    	xmlhttp.onreadystatechange = function() {
		      	if (this.readyState == 4 && this.status == 200) {
		        	div.innerHTML = this.responseText;
		        	// Check if the php file contains <script> tags. 
		        	// Activate them
		        	// If we don't do this, it will show up as regular text and not work
		        	let arr = div.getElementsByTagName('script')
					for (let n = 0; n < arr.length; n++)
					    eval(arr[n].innerHTML)//run script inside div
					loading.style.display = "none"; 
		      	}
		    };
		    xmlhttp.open("GET","./js-to-php/get-specific-gathering-map.php?q="+str,true);
		    xmlhttp.send();
		  }
		}

		// AJAX to show the gathering tools once users have selected the drop down menu of gathering farms
		function get_gathering_tools(userPick, userAxe, userSickle) {
			console.log("this is gathering tools");
			let div = document.getElementById('gathering-specific-tools-tableData'),
				pick = document.getElementById(userPick).value, 
				axe = document.getElementById(userAxe).value,
				sickle = document.getElementById(userSickle).value,
				loading = document.getElementById('loading-choya-2');
			// Show the loading choya when collecting data
			loading.style.display = "block"; 
			// If none selected, show nothing
		  	if (userPick == "" || userAxe == "" || userSickle == "") {
		    	div.innerHTML = "";
		    	return;
		  	} else {
		  		// Otherwise, send request to php file that collects data
		    	var xmlhttp = new XMLHttpRequest();
		    	xmlhttp.onreadystatechange = function() {
		      	if (this.readyState == 4 && this.status == 200) {
		        	div.innerHTML = this.responseText;
		        	// Check if the php file contains <script> tags. 
		        	// Activate them
		        	// If we don't do this, it will show up as regular text and not work
		        	let arr = div.getElementsByTagName('script')
		        	console.log(div);
					for (let n = 0; n < arr.length; n++)
					    eval(arr[n].innerHTML)//run script inside div
					loading.style.display = "none"; 
		      	}
		    };
		    xmlhttp.open("GET","./js-to-php/get-specific-tools.php?q="+pick+","+axe+","+sickle,true);
		    xmlhttp.send();
		  }
		}
	</script>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('nav.php'); ?>

	<div id = "bookmark-left" class = "bookmark-left">
		<ul>
			<a href = "#map-farms"><li> &#10097; Map Farms </li></a> 
			<a href = "#metas"><li> &#10097; Metas </li></a> 
			<a href = "#chests" ><li> &#10097; Chests </li></a> 
			<a href = "#alt-parking" ><li> &#10097; Alt Parking </li></a>
			<a href = "#gathering"><li> &#10097; Gathering </li></a>
			<a href = "./resources/about-benchmarks.php"><li> &#10097; Benchmark Criteria </li></a> 
			<a href = "https://docs.google.com/spreadsheets/d/1aLhL_VtVXbcZ6X2yweKD7AQFg9H5j67SW85qSzTPqrg/edit?usp=sharing" target = "_blank"><li> &#10097; Spreadsheet </li></a> 
		</ul>
	</div>

	<div style = "position: relative;" id = "map-farms">
		<div class = "section-header">
			<h1>Benchmarks</h1>
			<div class = "banner-box"></div>
			<img src = "./images/assets/banner.svg">
		</div>
	</div>
	<!-- Hidden space so the header doesn't overlap anything below -->
	<div class = "section-header-space"></div>

	<div class = "page-box">
		<div class = "flex-description">
			<table class = "single-info">
				<tr>
					<th> HoT Bauble Week </th>
				</tr>
				<tr>
					<td id = "input-bauble"></td>
				</tr>
			</table>

			<table class = "single-info">
				<tr>
					<th> Map Bonus Week </th>
				</tr>
				<tr>
					<td id = "input-map-bonus"> </td>
				</tr>
			</table>
			<!--
			<table class = "single-info">
				<tr>
					<th> Sort Table By: </th>
				</tr>
				<tr>
					<td>
						<select name = "sort-bench" id = "sort-map" onchange = "select_option(this);">
						<option value = "24hr Change (+/-)"> 24hr Change (+/-) </option>
						<option  value = "Farm Type"> Farm Type </option>
						<option value = "Popularity"> Popularity </option>
						<option value = "Map"> Map </option>
						<option value = "Time"> Time </option>
						<option selected = "selected" value = "Gold/Hour"> Gold/Hour </option>
						<option value = "Total Gold"> Total Gold </option>
						<option value = "Karma"> Karma </option>
						<option value = "Spirit Shards"> Spirit Shards </option>
						<option value = "Trade Contracts"> Trade Contracts </option>
						<option value = "Unbound Magic"> Unbound Magic </option>
						<option value = "Volatile Magic"> Volatile Magic </option>
						<option value = "Expansion Type"> Expansion Type </option>
						</select>
					</td>
				</tr>
			</table>
			-->
		</div>
	</div>
	
	<div style = "position: relative; overflow-x: auto;">
		<div class = "page-box">
			<img id = "loading-image" class = "loading-image" src = "./images/assets/research-choya-screen.png">
			<table id = "benchmarks" class = "benchmarks"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByQuantity('benchmarks', 0);"> +/- </th>
						<th onclick = "sortTableByAlphabet('benchmarks', 1);"> Farm <br> Type </th>
						<th onclick = "sortTableByAlphabet('benchmarks', 2);"> Popularity </th>
						<th onclick = "sortTableByAlphabet('benchmarks', 3);"> Map </th>
						<th onclick = "sortTableByTime('benchmarks', 4);"> Time <br>(H:M) </th>
						<th onclick = "sortTableByPrice('benchmarks', 5);"> Gold/Hour </th>
						<th onclick = "sortTableByPrice('benchmarks', 6);"> Total Gold </th>
						<th onclick = "sortTableByQuantity('benchmarks', 7);"> <img title = "Karma" src = ".\images\assets\Karma.png" style = "width: 30%;"> </th>
						<th onclick = "sortTableByQuantity('benchmarks', 8);"> <img title = "Spirit Shard" src = ".\images\assets\Spirit_Shard.png" style = "width: 50%;"> </th>
						<th onclick = "sortTableByQuantity('benchmarks', 9);"> <img title = "Trade Contract" src = ".\images\assets\Trade_Contract.png" style = "width: 50%;"> </th>
						<th onclick = "sortTableByQuantity('benchmarks', 10);"> <img title = "UM" src = ".\images\assets\Unbound_Magic.png" style = "width: 50%;"></th>
						<th onclick = "sortTableByQuantity('benchmarks', 11);"> <img title = "VM" src = ".\images\assets\Volatile_Magic.png" style = "width: 50%;"> </th>
						<!--<th> Option </th>-->
					</tr>
				</thead>
				<tbody id = "tableData"></tbody>
			</table>
		</div>
	</div>

	<div class = "page-box" id = "metas">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Metas</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "overflow-table">
			<table id = "meta-benchmarks" class = "other-benchmarks"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('meta-benchmarks', 0);"> Farm Type </th>
						<th onclick = "sortTableByAlphabet('meta-benchmarks', 1);"> Map </th>
						<th onclick = "sortTableByAlphabet('meta-benchmarks', 2);"> Meta </th>
						<th onclick = "sortTableByTime('meta-benchmarks', 3);"> Time<br>(M:S) </th>
						<th onclick = "sortTableByPrice('meta-benchmarks', 4);"> Gold/Mins </th>
						<th onclick = "sortTableByPrice('meta-benchmarks', 5);"> Total Gold </th>
						<th onclick = "sortTableByQuantity('meta-benchmarks', 6);"> <img title = "Karma" src = ".\images\assets\Karma.png" style = "width: 30%;"> </th>
						<th onclick = "sortTableByQuantity('meta-benchmarks', 7);"> <img title = "Spirit Shard" src = ".\images\assets\Spirit_Shard.png" style = "width: 50%;"> </th>
						<th onclick = "sortTableByQuantity('meta-benchmarks', 8);"> <img title = "Trade Contract" src = ".\images\assets\Trade_Contract.png" style = "width: 50%;"> </th>
						<th onclick = "sortTableByQuantity('meta-benchmarks', 9);"> <img title = "Elegy Mosaic" src = ".\images\assets\Elegy_Mosaic.png" style = "width: 50%;"> </th>
						<th onclick = "sortTableByQuantity('meta-benchmarks', 10);"> <img title = "UM" src = ".\images\assets\Unbound_Magic.png" style = "width: 50%;"></th>
						<th onclick = "sortTableByQuantity('meta-benchmarks', 11);"> <img title = "VM" src = ".\images\assets\Volatile_Magic.png" style = "width: 50%;"> </th>
					</tr>
				</thead>
				<tbody id = "meta-tableData"></tbody>
			</table>
		</div>
	</div>

	<!-- 
		============================================================================
		====================== OPEN WORLD CHESTS BENCHMARKS ========================
		============================================================================
	-->

	<div class = "page-box" id = "chests">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Chests</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "overflow-table">
			<table id = "chest-benchmarks" class = "other-benchmarks"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('chest-benchmarks', 0);"> Type </th>
						<th onclick = "sortTableByAlphabet('chest-benchmarks', 1);"> Map </th>
						<th onclick = "sortTableByAlphabet('chest-benchmarks', 2);"> Chest </th>
						<th onclick = "sortTableByPrice('chest-benchmarks', 3);"> Gold/Chest </th>
					</tr>
				</thead>
				<tbody id = "chest-tableData"></tbody>
			</table>
		</div>
	</div>

	<!-- 
		====================================================================
		====================== ALT PARKING BENCHMARKS ======================
		====================================================================
	-->

	<div class = "page-box" id = "alt-parking">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Alt Parking</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "overflow-table">
			<table id = "alt-benchmarks" class = "other-benchmarks"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('alt-benchmarks', 0);"> Type </th>
						<th onclick = "sortTableByAlphabet('alt-benchmarks', 1);"> Repeat </th>
						<th onclick = "sortTableByAlphabet('alt-benchmarks', 2);"> Map </th>
						<th onclick = "sortTableByAlphabet('alt-benchmarks', 3);"> Name </th>
						<th onclick = "sortTableByPrice('alt-benchmarks', 4);"> Benchmark </th>
						<th> Info </th>
					</tr>
				</thead>
				<tbody id = "alt-tableData"></tbody>
			</table>
		</div>
	</div>

	<!-- 
		============================================================================
		====================== ESTIMATED GATHERING BENCHMARKS ======================
		============================================================================
	-->

	<div class = "page-box" id = "gathering">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Estimated Gathering</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<details>
				<summary>About: </summary>
				These benchmarks are estimates on gathering farms. These numbers are calculated by taking the average value of a node, glyph, the time it takes for one character to do a round of a particular farm and combining those values to create an estimate. 
				<br><br>
				For example, we'll use the Bloodstone Fen farm. Focusing on wood and plants, the average amount of nodes in a single map is around 15 Palm Saplings (Elder), 1 Ancient, 14 Jungle Plants, and 4 Mussels. 
				<br><br>
				The math goes as the following: 
				<br> (Avg value of node * avg glyph used) * avg qty of node. Sum of all of the rest of the nodes and that's the avg total for one run. Take the time it takes to do one run and multiply that to get an hour and that's the estimated gold per hour. 
				<br><br>
				Note: These farms do not include random drops that you may get from fighting mobs or tagging an event along the way. Normally, that doesn't happen often so it doesn't affect the benchmark too much. But, a good example of this is the farm "Rich Nodes" which includes a lot of mob killing along the way in lower level maps. It does affect it by a lot, especially when it comes to T3-T4 mats. With that, refer to the real benchmarks above (though only recorded using Volatile tools as the baseline). 
			</details>
		</div>

		<div class = "small-description-center">
			Top estimated benchmark using the best tools for each recorded farm
		</div>

		<div class = "overflow-table">
			<table id = "gathering-benchmarks" class = "gathering-benchmarks"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('gathering-benchmarks', 0);"> Map </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 1);"> Pick </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 2);"> Axe </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 3);"> Sickle </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold/Hour </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold/Char </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Time/Char </th>
					</tr>
				</thead>
				<tbody id = "gathering-tableData"></tbody>
			</table>
		</div>

		<div class = "small-description-center">
			Top 10 estimated benchmark using the best tools for a particular farm
		</div>

		<form method = "GET" action = "" class = "benchmark-form">
			<select name = "node-farm" id = "node-farm" name = "node-farm" onchange="get_gathering_farm(this.value);">
				<option value = "" disabled selected> Pick Node Farm </option>
				<option value = "Bjora Marches"> Bjora Marches </option>
				<option value = "Bloodstone Fen"> Bloodstone Fen </option>
				<option value = "Draconis Mons"> Draconis Mons </option>
				<option value = "Dredgehaunt Cliffs"> Dredgehaunt Cliffs </option>
				<option value = "Flax"> Flax </option>
				<option value = "Lake Doric"> Lake Doric </option>
				<option value = "Maguuma Lilies"> Maguuma Lilies </option>
				<option value = "Mount Maelstrom"> Mount Maelstrom </option>
				<option value = "Mussels"> Mussels </option>
				<!--<option value = "Orr"> Orr </option> -->
				<option value = "Rich Nodes"> Rich Nodes </option>
				<option value = "Sandswept Isles"> Sandswept Isles </option>
				<!--<option value = "Siren's Landing"> Siren's Landing </option>
				<option value = "Sparkfly Fen"> Sparkfly Fen </option>
				<option value = "Timberline Falls"> Timberline Falls </option>
				<option value = "Winterberry"> Winterberry </option>-->
			</select>
			<img src = "./images/assets/rolling-choya.png" id = "loading-choya-1">
		</form>

		<div class = "overflow-table">
			<table id = 'gathering-benchmarks' class = 'gathering-benchmarks'> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('gathering-benchmarks', 0);"> Map </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 1);"> Pick </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 2);"> Axe </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 3);"> Sickle </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold/Hour </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold/Char </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Time/Char </th>
					</tr>
				</thead>
				<tbody id = 'gathering-map-tableData'>
				</tbody>
			</table>
		</div>

		<div class = "small-description-center">
			Choose a combination of glyphs and see what the best estimated farms would be. 
		</div>

		<form method = "GET" action = "" class = "benchmark-form">
			<select name = "node-farm" id = "node-pick" name = "node-farm">
				<option value = "" disabled selected> Pick </option>
				<option value = "Bounty"> Bounty </option>
				<option value = "Forester"> Forester </option>
				<option value = "Herbalist"> Herbalist </option>
				<option value = "Leatherworker"> Leatherworker </option>
				<option value = "Prospector"> Prospector </option>
				<option value = "Scavenger"> Scavenger </option>
				<option value = "Tailor"> Tailor </option>
				<option value = "Unbound"> Unbound </option>
				<option value = "Volatile"> Volatile </option>
				<option value = "Watchknight"> Watchknight </option>
			</select>

			<select name = "node-farm" id = "node-axe" name = "node-farm">
				<option value = "" disabled selected> Axe </option>
				<option value = "Bounty"> Bounty </option>
				<option value = "Forester"> Forester </option>
				<option value = "Herbalist"> Herbalist </option>
				<option value = "Leatherworker"> Leatherworker </option>
				<option value = "Prospector"> Prospector </option>
				<option value = "Scavenger"> Scavenger </option>
				<option value = "Tailor"> Tailor </option>
				<option value = "Unbound"> Unbound </option>
				<option value = "Volatile"> Volatile </option>
				<option value = "Watchknight"> Watchknight </option>
			</select>

			<select name = "node-farm" id = "node-sickle" name = "node-farm">
				<option value = "" disabled selected> Sickle </option>
				<option value = "Bounty"> Bounty </option>
				<option value = "Forester"> Forester </option>
				<option value = "Herbalist"> Herbalist </option>
				<option value = "Leatherworker"> Leatherworker </option>
				<option value = "Prospector"> Prospector </option>
				<option value = "Scavenger"> Scavenger </option>
				<option value = "Tailor"> Tailor </option>
				<option value = "Unbound"> Unbound </option>
				<option value = "Volatile"> Volatile </option>
				<option value = "Watchknight"> Watchknight </option>
			</select>

			<input class = "select-button" type = "button" value = "Enter Selection" onclick = "get_gathering_tools('node-pick', 'node-axe', 'node-sickle');">

			<img src = "./images/assets/rolling-choya.png" id = "loading-choya-2">
		</form>

		<div class = "overflow-table">
			<table id = 'gathering-specific-tools' class = 'gathering-benchmarks'> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('gathering-benchmarks', 0);"> Map </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 1);"> Pick </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 2);"> Axe </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 3);"> Sickle </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold/Hour </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold/Char </th>
						<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Time/Char </th>
					</tr>
				</thead>
				<tbody id = 'gathering-specific-tools-tableData'>
				</tbody>
			</table>
		</div>
	</div>

	<script>
		getBenchmarkAll('benchmarks','loading-image');
		get_alt_benchmarks();
		get_chest_benchmarks();
		get_meta_benchmarks();
	 </script>

	<script> get_top_gathering_benchmarks(); </script>

		<div id = "info-box" class = "page-box" style = "position: fixed; top: 35%; left: 20%; display: none;">
			<div id = "info-close" onclick = "closeBox(this);" class = "alt-x">
				x
			</div>
			<div class = "alt-box">
				<div id = "alt-bitterfrost" class = "alt-box-child">
					<h1> Bitterfrost Frontier </h1>

					<b> Hot Springs:</b> At the Dragon's Teeth Hot Springs <b>[&BH4JAAA=]</b>, there is a thermal next to the Vista. Take that thermal and it will lead you exactly to the spot. 
					<br> Loot:
					<br> - 1 Ancient Sapling
					<br> - 2 Verdant Herbs 
					<br> - 1 Icebound Chest
				</div>

				<div id = "alt-bjora" class = "alt-box-child">
					<h1> Bjora Marches </h1>

					<b> Snow Truffle farm:</b>Located at Boneskinner Den [&BCsMAAA=]. You need the mastery "Raven Bond" in order to unlock the barrier. To earn the bonus chest, you need to have the mastery "Essence of Resilience Tier 1" done.
					<br> Loot:
					<br> - 5 Snow Truffles
					<br> - 1 Eternal Ice
					<br> - 1 Small Chest of Valor

					<br><br>
					<b> Asgeir's Legacy:</b>Located at north of <b>[&BCgMAAA=]</b>. This area is only accessed by completing the Raven's Storms meta. There is a Raven's Gate to the west of the area and it will take you to an area with 3 small chests
					<br> Loot:
					<br> - 1 Small Chest of Resiliance
					<br> - 1 Small Chest of Valor
					<br> - 1 Small Chest of Vigilance

					<br><br>
					<b> Tier 3 Chest:</b> There are 3 locations of tier 3 chests. Check <a href = "https://wiki.guildwars2.com/wiki/Essence_chest" target = "_blank"><u>for a spot for the chests</u></a>. 
					<br> Loot:
					<br> - 1 Large Chest of [something]
				</div>

				<div id = "alt-blazeridge" class = "alt-box-child">
					<h1> Blazeridge Steppes </h1>

					<b> Cabbage farm:</b> North of Lunk Kraal Waypoint <b>[&BAACAAA=]</b>. 
					<br> Loot:
					<br> - 8 Cabbages
				</div>

				<div id = "alt-bloodtide" class = "alt-box-child">
					<h1> Bloodtide Coast </h1>

					<b> Sugar Pumpkin farm:</b> south of Remanda Waypoint <b>[&BKcBAAA=]</b>. 
					<br> Loot:
					<br> - 8 Sugar Pumpkins
				</div>

				<div id = "alt-brisband" class = "alt-box-child">
					<h1> Brisband Wildlands </h1>

					<b> Spinach farm:</b> south of Watchful Source Waypoint <b>[&BFwAAAA=]</b>. Head into a cave and go southeast. 
					<br> Loot:
					<br> - 8 Spinachs  
				</div>

				<div id = "alt-caledon" class = "alt-box-child">
					<h1> Caledon Forest </h1>

					<b> Lettuce farm:</b> Northwest from Kraitbane Haven Waypoint <b>[&BEABAAA=]</b>. 
					<br> Loot:
					<br> - 8 Lettuces  
				</div>

				<div id = "alt-crystal" class = "alt-box-child">
					<h1> Crystal Oasis </h1>

					<b> Sanctum of Nabkha:</b> Located at <b>[&BPgJAAA=]</b>. This jumping puzzle requires a Jackle. To view a guide on how to do it, watch <a href = "https://www.youtube.com/watch?v=qT156WZQgXg" target = "_blank"><u>this video</u></a>. 
					<br> Loot:
					<br> - 1 Glorious Branded Chest
					<br> - 1 Glorious Awakened Chest
					<br> - 1 Glorious Vabbian Chest 

					<br><br>
					<b> Clam farm: </b> From Amnoom Waypoint <b>[&BLsKAAA=]</b>, head all the way to the northwest section of the map. 
					<br> Loot:
					<br> - 10 Clams 

					<br><br>
					<b> Potato farm: </b> From Amnoon Waypoint <b>[&BLsKAAA=]</b>, head directly east to <b>[&BOMKAAA=]</b>.
					<br> Loot:
					<br> - 6 Potatoes
				</div>

				<div id = "alt-desert" class = "alt-box-child">
					<h1> Desert Highlands </h1>

					<b> Tomb of Primeval Kings:</b> Located at <b>[&BIoKAAA=]</b>. It is a whole area full of chests that do not require a key. There are 6 chests and 2 trade caches (which do require a Trader's Key). 
					<br> Loot:
					<br> - 6 Treasure Chest
					<br> - 2 Trade Caches (possibly switches per day/instance) 
					<br> - 1 Mithril or Orichalcum (possibly switches per day/instance)

					<br><br>
					<b> Clam farm: </b> From Brightwater Waypoint <b>[&BLsKAAA=]</b>, head all the way to the southwest section of the map. 
					<br> Loot:
					<br> - 7 Clams

					<br><br>
					<b> Strawberry farm: </b> From Brightwater Waypoint <b>[&BLsKAAA=]</b>, head north to the nearest Heart. There will be a cave full of choyas and head to the northern section of the cave, next to the waterfall. 
					<br> Loot:
					<br> - 8 Strawberries
				</div>

				<div id = "alt-desolation" class = "alt-box-child">
					<h1> Desolation </h1>

					<b> Carrot farm:</b> From Bonestrand Waypoint <b>[&BNwKAAA=]</b>, head east on the water. 
					<br> Loot:
					<br> - 8 Carrots 
				</div>

				<div id = "alt-diessa" class = "alt-box-child">
					<h1> Diessa Plateau </h1>

					<b> Strawberry farm:</b> From Nolan Waypoint <b>[&BN4AAAA=]</b>, head southwest to the Vista. From there, there is a sewer looking pipe covered in moss that leads to a secret area with the strawberries.  
					<br> Loot:
					<br> - 8 Strawberries
				</div>

				<div id = "alt-kourna" class = "alt-box-child">
					<h1> Domain of Kourna </h1>

					<b> Arkjok Farmlands:</b> From Allied Encampment Waypoint <b>[&BFcLAAA=]</b>, head north. There will be an area that resembles a farm land on a hill. 
					<br> Loot:
					<br> - 12 Cluster of Desert Herbs
					<br> - 4 Flaxs 
				</div>

				<div id = "alt-vabbi" class = "alt-box-child">
					<h1> Domain of Vabbi </h1>

					<b> Artichoke farm:</b> South of <b>[&BOsKAAA=]</b>. There is a heart nearby is head directly south from that.
					<br> Loot:
					<br> - 8 Arichokes  
				</div>

				<div id = "alt-draconis" class = "alt-box-child">
					<h1> Draconis Mons </h1>

					<b> Flax farm:</b> West and down from Heathen's Hold Waypoint <b>[&BM0JAAA=]</b>. Don't drop all the way down, when you drop to the next level (the mini map will shift), keep dropping before you hit the floor/water level. There will be a cave enterence. 
					<br> Loot:
					<br> - 10 Flaxs

					<br><br>
					<b> Searching Ascent:</b> This is an extremely tedious jumping puzzle and it's not really a jumping puzzle. To find a good video guide, watch <a href = "https://www.youtube.com/watch?v=5NzbcGmFotw" target = "_blank"><u>this</u></a>. Generally, you could find someone on LFG under Draconis Mons that you can teleport to. 
					<br> Loot:
					<br> - Chest. 1 guaranteed rare and green gear, Unbound Magic, 3 Fire Orchid Blossoms 
				</div>

				<div id = "alt-dredgehaunt" class = "alt-box-child">
					<h1> Dredgehaunt Cliffs </h1>

					<b> Cabbage farm:</b> From Wide Expanse Waypoint <b>[&BF8CAAA=]</b>, head west and up the hill.
					<br> Loot:
					<br> - 8 Cabbages   
				</div>

				<div id = "alt-drizzlewood" class = "alt-box-child">
					<h1> Drizzlewood Coast </h1>

					<b> Olafson Farmstead:</b> Head to Leadfoot Village. Located at <b>[&BGgMAAA=]</b>. It is on top of the cliffs. 
					<br> Loot:
					<br> - 4 Verdant Herbs
					<br> - 4 Portobello Mushrooms
					<br> - 4 Scallions
					<br> - 4 Potatoes

					<br><br>
					<b> Clam and Coral farm:</b> Head to Port Cascadia. Head east from the port and underwater. 
					<br> Loot:
					<br> - 6 Clams
					<br> - 4 Corals 

					<br><br>
					<b> Seaweed farm:</b> Head to Port Cascadia. Head southeast from the port and underwater. 
					<br> Loot:
					<br> - 4 Seaweeds 

					<br><br>
					<b> Winter Root Vegetable farm:</b> Head to the border of Grotto and Petraj at the top. Some of these nodes can be gathered more than once, regardless if you have the Glyph of Bounty.  
					<br> Loot:
					<br> - 6 Winter Root Vegetables 

					<br><br>
					<b> Potato farm:</b> Head to Fort Defiance. There is a mesa, directly next and west of the camp.
					<br> Loot:
					<br> - 4 Potatoes  

					<br><br>
					<b> Petraj Overlook:</b> Head to Petraj. Just north of the camp will be the nodes. 
					<br> Loot:
					<br> - 4 Blackberries
					<br> - 4 Winter Root Vegetables  
				</div>

				<div id = "alt-drytop" class = "alt-box-child">
					<h1> Dry Top </h1>

					<b> Uplands Oasis:</b> From Vine Bridge Waypoint <b>[&BIYHAAA=]</b>, head north to the northwest section of the map.   
					<br> Loot: 
					<br> - 2 Cabbage
					<br> - 4 Cactus
					<br> - 4 Carrot
					<br> - 3 Lettuce
					<br> - 3 Primordial Orchid, if you've completed the achievement "A Henge Away From Home"
				</div>

				<div id = "alt-ember" class = "alt-box-child">
					<h1> Ember Bay </h1>

					<b> Seaweed farm:</b> From Promontory Waypoint <b>[&BF8JAAA=]</b>, southeast and underwater.    
					<br> Loot: 
					<br> - 8 Seaweed
				</div>

				<div id = "alt-field" class = "alt-box-child">
					<h1> Field of Ruins </h1>

					<b> Grape farm:</b> From Ogre Road Waypoint <b>[&BE8BAAA=]</b>, southeast into an area filled with Ogres.    
					<br> Loot: 
					<br> - 8 Grapes
				</div>

				<div id = "alt-fireheart" class = "alt-box-child">
					<h1> Fireheart Rise </h1>

					<b> Rich Platinum:</b> From Breaktooth's Waypoint <b>[&BBoCAAA=]</b>, head up and east. Sometimes there's 2 or 3 other Rich Platinum Veins.     
					<br> Loot: 
					<br> ~ 1-3 Rich Platinum Veins
				</div>

				<div id = "alt-frostgorge" class = "alt-box-child">
					<h1> Frostgorge Sound </h1>

					<b> Butternut Squash farm:</b> From Arundon Waypoint <b>[&BHgCAAA=]</b>, head slightly northeast.
					<br> Loot: 
					<br> - 8 Butternut Squash
				</div>

				<div id = "alt-gendarran" class = "alt-box-child">
					<h1> Gendarran Fields </h1>

					<b> Spinach farm:</b> From Provern Shore Waypoint <b>[&BOQAAAA=]</b>, head northwest and up a hill. 
					<br> Loot: 
					<br> - 8 Spinach
				</div>

				<div id = "alt-harathi" class = "alt-box-child">
					<h1> Harathi Hinterlands </h1>

					<b> Cabbage farm:</b> From Demetra Waypoint <b>[&BKsAAAA=]</b>, head north and fall into a swamp. There will be a cave/door guarded by bandits 
					<br> Loot: 
					<br> - 8 Cabbage
				</div>

				<div id = "alt-iron" class = "alt-box-child">
					<h1> Iron Marches </h1>

					<b> Sugar Pumpkin farm:</b> From Bulwark Waypoint <b>[&BOwBAAA=]</b>, head northeast. 
					<br> Loot: 
					<br> - 8 Sugar Pumpkin
				</div>

				<div id = "alt-kessex" class = "alt-box-child">
					<h1> Kessex Hills </h1>

					<b> Strawberry farm:</b> From Cereboth Waypoint <b>[&BBIAAAA=]</b>, head southeast towards <b>[&BAMFAAA=]</b>. 
					<br> Loot: 
					<br> - 8 Strawberries
				</div>

				<div id = "alt-lions" class = "alt-box-child">
					<h1> Lion's Arch </h1>

					<b> Troll's Revenge farm:</b> From Western Ward Waypoint <b>[&BC4EAAA=]</b>, head slightly north and up. There is a JP chest, but you can't loot it unless you do the JP. 
					<br> Loot: 
					<br> - 1 Herb Sprout
					<br> - 1 Young Herb
					<br> - 2 Root Vegetable
					<br> - 2 Taproot
					<br> - 2 Carrot

					<br><br>
					<b> Weyandt's Revenge:</b> From Farshore Waypoint <b>[&BDMEAAA=]</b>, you could skip via <a href = "https://www.youtube.com/watch?v=UTbE7Yxh-Tk&t=28s" target = "_blank"><u>this video</u></a> or watch <a href = "https://www.youtube.com/watch?v=zpMsf-7eDg4" target = "_blank"><u>this video</u></a> to do the JP.
					<br> Loot:
					<br> - 1-2 Guaranteed green gear or rare
					<br> - 1-2 Medallions/Crests or Orbs
					<br> - Possibly Doubloons

					<br><br>
					<b> Urmaug's Secret:</b> From Guild Bluff Waypoint <b>[&BA0EAAA=]</b>, you could watch <a href = "https://www.youtube.com/watch?v=BtWy90Ppkmg" target = "_blank"><u>this video</u></a> to do the JP. It's extremely short.
					<br> Loot:
					<br> - 1 Medallion/Crest
					<br> - 1-2 blue+ unidentified gear
				</div>

				<div id = "alt-lornars" class = "alt-box-child">
					<h1> Lornar's Pass </h1>

					<b> Grape farm:</b> From Demon's Maw Waypoint <b>[&BOYAAAA=]</b>, head directly north. 
					<br> Loot: 
					<br> - 8 Grapes
				</div>

				<div id = "alt-malchors" class = "alt-box-child">
					<h1> Malchor's Leap </h1>

					<b> Elder Wood farm:</b> From Pagga's Waypoint <b>[&BKYCAAA=]</b>, head directly west.  
					<br> Loot: 
					<br> - 5 Cypress Saplings
					<br> - Possible Ghost Peppers
					<br> - Possible Mithril Ore
					<br> - Possible Orichalcum Ore 
				</div>

				<div id = "alt-metrica" class = "alt-box-child">
					<h1> Metrica Province </h1>

					<b> Potato farm:</b> From Akk Wilds Waypoint <b>[&BEIAAAA=]</b>, head northwest. There will be a floating platform with the nodes. 
					<br> Loot: 
					<br> - 8 Potatoes
				</div>

				<div id = "alt-mount" class = "alt-box-child">
					<h1> Mount Maelstrom </h1>

					<b> Artichoke farm:</b> From Oxbow Isle Waypoint <b>[&BNECAAA=]</b>, head directly south. There will be an island and you'll have to head up for the nodes.
					<br> Loot: 
					<br> - 8 Artichokes

					<br><br>
					<b> Hidden Garden:</b> In order to enter this JP, you need to kill a "Keeper or []" in the map. It could be located in 4 different areas. Southeast from <b>[&BMkCAAA=]</b>, west of <b>[&BM8CAAA=]</b>, north of <b>[&BNECAAA=]</b>, or southeast of <b>[&BNICAAA=]</b>. You need to have finished the Kudzu III collection in order to spawn the nodes. 
					<br> Loot: 
					<br> - 3 Zuccini 
					<br> - 3 Butternut Squash
					<br> - 3 Carrot
					<br> - 3 Sugar Pumpkin
					<br> - 3 Ghost Pepper
					<br> - 2 Chili Pepper
					<br> - 3 Raspberry
					<br> - 2 Blackberry
					<br> - 3 Strawberry
					<br> - 3 Omnomberry
					<br> - 2 Spinach Leaf
					<br> - 2 Cabbage
					<br> - 3 Primordial Orchid 
				</div>

				<div id = "alt-plains" class = "alt-box-child">
					<h1> Plains of Ashford </h1>

					<b> Potato farm:</b> From Loreclaw Waypoint <b>[&BMcDAAA=]</b>, nodes are right south of the waypoint. 
					<br> Loot: 
					<br> - 8 Potatoes
				</div>

				<div id = "alt-queensdale" class = "alt-box-child">
					<h1> Queensdale </h1>

					<b> Beetletun Farms:</b> From Beetletun Waypoint <b>[&BPoAAAA=]</b>, head south.  
					<br> Loot: 
					<br> - 1-2 Aspen Saplings
					<br> - 0-2 Copper Ore
					<br> - 1 Herb Patch
					<br> - 8 Lettuce
					<br> - 1 Onion
					<br> - 1 Root Vegetable
				</div>

				<div id = "alt-sandswept" class = "alt-box-child">
					<h1> Sandswept Isles </h1>

					<b> Malor's Ranch:</b> From Loreclaw Waypoint <b>[&BEMLAAA=]</b>, head east and up a slight hill.  
					<br> Loot: 
					<br> - 4 Arichoke
					<br> - 4 Cabbage
					<br> - 4 Lentils
					<br> - 4 Desert Vegetables
					<br> - 4 Cluster of Desert Herbs
					<br> - 0-2 Baoba Saplings
					<br> - 0-2 Difluorite Crystals
					<br> - 0-2 Mithril Ores
					<br> - 1 Trade Cache
				</div>

				<div id = "alt-sirens" class = "alt-box-child">
					<h1> Siren's Landing </h1>

					<b> Abaddon's Ascent:</b> From Camp Reclamation Waypoint <b>[&BO8JAAA=]</b>, head northeast to an island <b>[&BOIJAAA=]</b>. To watch a guide, <a href = "https://www.youtube.com/watch?v=xOP6dEwktWA" target = "_blank"><u>click here</u></a>.
					<br> Loot: 
					<br> - Unbound Magic
					<br> - 3 Orrian Pearls
					<br> - Crystals
					<br> - 1 green+ unidentified gear
					<br> - Unstable (hide, metal, or rag)

					<br><br>
					<b> Elder Wood farm:</b> From Camp Reclamation Waypoint <b>[&BO8JAAA=]</b>, head south to a settlement.
				</div>

				<div id = "alt-snowden" class = "alt-box-child">
					<h1> Snowden Drifts </h1>

					<b> Strawberry farm:</b> From Reaver's Waypoint <b>[&BMcDAAA=]</b>, head south and up a hill. 
					<br> Loot: 
					<br> - 8 Strawberries
				</div>

				<div id = "alt-straits" class = "alt-box-child">
					<h1> Straits of Devestation </h1>

					<b> Elder Wood farm:</b> From WAywarde Waypoint <b>[&BMcDAAA=]</b>, head west. Though, sometimes you'll take some damage if one of the temples is active. 
					<br> Loot: 
					<br> - 4 Cypress Saplings
				</div>

				<div id = "alt-tangled" class = "alt-box-child">
					<h1> Tangled Depths </h1>

					<b> Flax farm:</b> Use a Skyscale/Bunny mount, you could head to Ogre Camp Waypoint <b>[&BMwHAAA=]</b>, north, and up to the Great Tree. 
					<br> Loot: 
					<br> - 8 Flaxs
				</div>

				<div id = "alt-thunderhead" class = "alt-box-child">
					<h1> Thunderhead Peaks </h1>

					<b> Iron farm:</b> From History's End Waypoint <b>[&BLsLAAA=]</b>, head southeast to The Weeping Crest. The nodes will be scattered throughout the cliffs. 
					<br> Loot: 
					<br> - 8 Iron Ores

					<br><br>
					<b> Platinum farm:</b> From Revolution's Heart Waypoint <b>[&BKYLAAA=]</b>, use a Skyscale and follow the Volatile Magic up. Eventually, you'll see the nodes on the left side of the cliffs.
					<br> Loot: 
					<br> - 7 Iron Ores

					<br><br>
					<b> Clam farm:</b> From Revolution's Heart Waypoint <b>[&BKYLAAA=]</b>, head southeast to the water. Where the map says "Ice Floe", the nodes are underneth the last letters. 
					<br> Loot: 
					<br> - 6 Clams
				</div>

				<div id = "alt-timber" class = "alt-box-child">
					<h1> Timberline Falls </h1>

					<b> Cauliflower farm:</b> From Valance Tutory Waypoint <b>[&BEwCAAA=]</b>, head north and up a hill. 
					<br> Loot: 
					<br> - 8 Cauliflower
				</div>

				<div id = "alt-variety" class = "alt-box-child">
					<h1> Variety </h1>

					<b> Rich Orichalcum:</b> There are many maps that have a permanent rich ori node. For reference and picture guides, <a href = "https://en-forum.guildwars2.com/discussion/54340/rich-orichalcum-node-locations" target = "_blank">click here</a>. 
					<br> Loot: 
					<br> - Rich Orichalcum Vein
				</div>

				<div id = "alt-verdant" class = "alt-box-child">
					<h1> Verdant Brink</h1>

					<b> Matriarch: </b>Park your character in the same location as one of the night bosses, Matriarch. This is located above Pact Encampment Waypoint <b>[&BAgIAAA=]</b>. You could either arrive at the platform through a chopper that will only spawn when it's time for the night bosses to spawn and if the camp is cleared from Mordrem. 

					<br><br>To get there before the chopper, go to Mellaggan's Valor Waypoint <b>[&BNUHAAA=]</b> and above the waypoint will be an updraft. Take the updraft and head to the center of the map. You could either Griffon, Skyscale or keep gliding (while taking more updrafts) to reach the platform above Pact Encampment. 

					<br><br>
					<b> Flax farm:</b> From Jaka Itzel Waypoint <b>[&BOAHAAA=]</b>, fall straight down from the village. 
					<br> Loot: 
					<br> - 8 Flaxs
				</div>
				
			</div>
		</div>
	</div>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/benchmarks.js?v=<?php echo $date;?>"></script>
</body>
</html>