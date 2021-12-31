<?php
	chdir(dirname(__FILE__));
	include_once '../db/maps.php'; 	
?>
<script>
//	===========================================================================
//  ========================== BENCHMARKS =====================================
// 	===========================================================================
// Grabs all the benchmarks from the main Google Spreadsheet: 
function getBenchmarkAll(table, image){

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('tableData');
	let tableName = document.getElementById(table);
	let loading_image = document.getElementById(image);

	tableName.style.opacity = 1;
	loading_image.style.display = 'none';

	//Empty data table
	let dataHTML = '';
	// Labels
	let changeIndex, 
		karma,
		spiritshard, 
		tradecontract, 
		elegymosaic, 
		unboundmagic, 
		volatilemagic,
		nowGPH, map24GPH, map24GPHChange,
		totalGold, total24Gold, total24GoldChange, colorTotalChange;

	let time, hours, minutes,
		colorPosChange, colorGPHChange, background_color;
	// Get benchmarks from mySQL 
	// This DB gets updated every 24 hours 
	let maps_24hr = <?php echo $mapsDB->getMaps("maps_24hr"); ?>,
		maps_1w = <?php echo $mapsDB->getMaps("maps_1w"); ?>;

	let maps_now = <?php echo $mapsDB->getMaps("maps"); ?>;

	console.log(maps_now, maps_24hr);

	//Loop through all of the named benchmarks until there's an empy cell in the spreadsheet
	//Places those data into the empty data table
	for (i = 0; i < maps_now.length; i++){
		// Display the time in a 00:00 format
		time = maps_now[i].time.substring(4, 8); 

		// At current farm, find the matching farm from the SQL DB
		for (j = 0; j < maps_24hr.length; j++){
			// If it matches, set the change index of the farm based on positions of both tables
			if (maps_now[i].name == maps_24hr[j].name){
				// Gold per hour tooltip 
				nowGPH = maps_now[i].gold_per_hour; 
				map24GPH = maps_24hr[j].gold_per_hour;
				map24GPHChange = nowGPH - map24GPH;

				// Total gold tooltip
				totalGold = maps_now[i].total_gold;
				total24Gold = maps_24hr[j].total_gold; 
				total24GoldChange = totalGold - total24Gold;

				// Finding index
				changeIndex = j - i; 
				if (changeIndex == 0){
					colorPosChange = "";
					break;
				}
				if (changeIndex > 0){
					changeIndex = "+" + changeIndex;
					colorPosChange = "#41AF2F"; // green
					break;
				} else {
					colorPosChange = "#EE3D3D"; // red
					break;
				}
			}
		}
		// Depending on what the SS says under "farm type", change color of bkg
		switch(maps_now[i].type){

			case "R":
			maps_now[i].type = "Repeatable";
			background_color = "#4ccd38";
			break;

			case "D":
			maps_now[i].type = "Daily";
			background_color = "#84F473";
			break;

			case "G":
			maps_now[i].type = "Gathering";
			background_color = "#fab52a";
			break;

			case "S":
			maps_now[i].type = "Solo";
			background_color = "#1f8ce7";
			break;
		}

		karma = Math.floor(maps_now[i].karma);
		spiritshard = Math.floor(maps_now[i].spirit_shards);
		tradecontract = Math.floor(maps_now[i].trade_contracts);
		unboundmagic = Math.floor(maps_now[i].unbound_magic);
		volatilemagic = Math.floor(maps_now[i].volatile_magic);

		// If the change of the GPH from the last 24 hours is more/less than zero, change text color
		if (map24GPHChange > 0){
			colorGPHChange = "#41AF2F"; // green
		} else {
			colorGPHChange = "#EE3D3D"; // red
		}
		if (total24GoldChange > 0){
			colorTotalChange = "#41AF2F"; // green
		} else {
			colorTotalChange = "#EE3D3D"; // red
		}


		let link = '',
			 pop,
			 expan,
			 popColor;

		switch (maps_now[i].name){
			case "Amal / Key Metas (PoF/LS4 & 5)":
			link = "./maps/combo-farms.php#amalgamated-key-farm";
			pop = "Rare";
			break;

			case "Amnoon Nodes/Caches (w/ Volatile)":
			link = "./gathering/amnoon-node-cache-farm.php";
			pop = "Rare";
			break;

			case "Auric Basin (Baubles)":
			link = "./maps/auric-basin.php";
			pop = "Uncommon";
			expan = "HoT"; 
			break;

			case "Bitterfrost Frontier":
			link = "./maps/bitterfrost-frontier.php";
			pop = "Rare";
			break;

			case "Bjora Marches":
			link = "./maps/bjora-marches.php";
			pop = "Rare";
			break;

			case "Bjora Marches Node Farm (w/ Volatile)":
			link = "./maps/bjora-marches.php";
			pop = "Common";
			break;

			case "Bloodstone Fen":
			link = "./maps/bloodstone-fen.php";
			pop = "Rare";
			break;

			case "Core Tyria Train":
			link = "./maps/combo-farms.php#core-tyria-train";
			pop = "Rare";
			break;

			case "Crystal Oasis":
			link = "./maps/crystal-oasis.php";
			pop = "Rare";
			break;

			case "Cursed Shore (Week 4 maps Bonus)":
			link = "./maps/cursed-shore.php";
			pop = "Rare";
			break;

			case "Desert Highlands":
			link = "./maps/desert-highlands.php";
			pop = "Rare";
			break;

			case "Desolation":
			link = "./maps/desolation.php";
			pop = "Rare";
			break;

			case "Destroyer Farm":
			link = "./maps/destroyer-farm.php";
			pop = "Rare";
			break;

			case "Domain of Kourna":
			link = "./maps/domain-of-kourna.php";
			pop = "Rare";
			break;

			case "Draconis Mons":
			link = "./maps/draconis-mons.php";
			pop = "Rare";
			break;

			case "Dragon's Stand":
			link = "./maps/dragons-stand.php";
			pop = "Common";
			break;

			case "Dragonfall":
			link = "./maps/dragonfall.php";
			pop = "Common";
			break;

			case "Dredgehaunt Node Farm (w/ Volatile)":
			link = "./gathering/dredgehaunt-node-farm.php";
			pop = "Uncommon";
			break;

			case "Drizzlewood Coast":
			link = "./maps/drizzlewood-coast.php";
			pop = "Common";
			break;

			case "Drizzlewood Coast (South)":
			link = "./maps/drizzlewood-coast.php";
			pop = "Common";
			break;

			case "Dry Top [SAND]":
			link = "https://drytopsand.com/index.php";
			pop = "Uncommon";
			break;

			case "Elon Riverlands":
			link = "./maps/elon-riverlands.php";
			pop = "Rare";
			break;

			case "Ember Bay":
			link = "./maps/ember-bay.php";
			pop = "Rare";
			break;

			case "Flax Farm (w/ Volatile)":
			link = "./gathering/flax-farm.php";
			pop = "Common";
			break;

			case "Frostgorge Sound Champ Train":
			link = "./maps/frostgorge-sound.php";
			pop = "Rare";
			break;

			case "Grothmar/Bjora":
			link = "./maps/combo-farms.php";
			pop = "Rare";
			break;

			case "Grothmar / Kourna - Eff/Doom/Ooze":
			link = "./maps/combo-farms.php";
			pop = "Rare";
			break;

			case "Grothmar Valley":
			link = "./maps/grothmar-valley.php";
			pop = "Rare";
			break;

			case "HoT Meta Train (VB, TD, AB)":
			link = "./maps/combo-farms.php#hot-meta-train";
			pop = "Common";
			break;

			case "Infusion Train [SM]":
			link = "./maps/combo-farms.php#infusion-train";
			pop = "Common";
			break;

			case "Domain of Istan":
			link = "./maps/domain-of-istan.php";
			pop = "Common";
			break;

			case "Jahai Bluffs":
			link = "./maps/jahai-bluffs.php";
			pop = "Rare";
			break;

			case "Karka Farming":
			link = "./maps/karka-farm.php";
			pop = "Rare";
			break;

			case "Kessex Hills (Baubles)":
			link = "./maps/kessex-hills.php";
			pop = "Rare";
			break;

			case "Labyrinth (~300% MF)":
			link = "https://docs.google.com/document/d/1kNoF1Hx0WueB188dVtTuJQmy8KBdrHnSY3-N9RFC8SA/edit";
			pop = "Common";
			break;

			case "Labyrinth (~700% MF)":
			link = "https://docs.google.com/document/d/1kNoF1Hx0WueB188dVtTuJQmy8KBdrHnSY3-N9RFC8SA/edit";
			pop = "Common";
			break;

			case "Lake Doric":
			link = "./maps/lake-doric.php#leather-farm";
			pop = "Rare";
			break;

			case "Lake Doric Node Farm (w/ Volatile)":
			link = "./maps/lake-doric.php#node-farm";
			pop = "Common";
			break;

			case "Leather Farm (Lake Doric)":
			link = "./maps/lake-doric.php";
			pop = "Uncommon";
			break;

			case "Legendary Bounty Train":
			link = "./maps/legendary-bounty-train.php";
			pop = "Common";
			break;

			case "LS3 Train":
			link = "./maps/combo-farms.php#ls3-train";
			pop = "Rare";
			break;

			case "LS4 Meta Train":
			link = "./maps/combo-farms.php#ls4-train";
			pop = "Common";
			break;

			case "Malchor's Leap Champ Train":
			link = "./maps/malchors-leap.php";
			pop = "Rare";
			break;

			case "Orr Node Farm (w/ Volatile)":
			link = "./gathering/orr-node-farm.php";
			pop = "Rare";
			break;

			case "PoF Meta Train":
			link = "./maps/combo-farms.php#pof-meta-train";
			pop = "Uncommon";
			break;

			case "Reset - PoF/LS5/Core/HoT/LS4":
			link = "./maps/combo-farms.php#reset";
			pop = "Rare";
			break;

			case "Rich Node Farm (w/ Volatile)":
			link = "./gathering/rich-node-farm.php";
			pop = "Common";
			break;

			case "Sandswept Isles":
			link = "./maps/sandswept-isles.php";
			pop = "Rare";
			break;

			case "Sandswept/Kourna":
			link = "./maps/combo-farms.php#sandswept-kourna";
			pop = "Rare";
			break;

			case "Sandswept Node Farm (w/ Volatile)":
			link = "./maps/sandswept-isles.php#node-farm";
			pop = "Uncommon";
			break;

			case "Silverwastes":
			link = "./maps/silverwastes.php";
			pop = "Common";
			break;

			case "Siren's Landing":
			link = "./maps/sirens-landing.php";
			pop = "Rare";
			break;

			case "Siren's Landing Node Farm (w/ Volatile)":
			link = "./maps/sirens-landing.php#node-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Bitterfrost Icebound Chests":
			link = "./maps/bitterfrost-frontier.php#solo-farm";
			pop = "Common";
			break;

			case "Solo Farm: Bitterfrost Events":
			link = "./maps/bitterfrost-frontier.php#solo-events";
			pop = "Common";
			break;

			case "Solo Farm: Harathi Centaurs":
			link = "./maps/harathi-hinterlands.php";
			pop = "Rare";
			break;

			case "Solo Farm: Jahai Chak":
			link = "./maps/jahai-bluffs.php#solo-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Jahai Wildlife":
			link = "./maps/jahai-bluffs.php#solo-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Kourna Choya":
			link = "./maps/domain-of-kourna.php#solo-farm";
			pop = "Uncommon";
			break;

			case "Solo Farm: Kourna Front Line":
			link = "./maps/domain-of-kourna.php#solo-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Kourna Inquests":
			link = "./maps/domain-of-kourna.php#solo-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Kourna Wildlife":
			link = "./maps/domain-of-kourna.php#solo-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Sandswept Inquest":
			link = "./maps/sandswept-isles.php#solo-farm";
			pop = "Uncommon";
			break;

			case "Solo Farm: Sandswept Karka/Drake":
			link = "./maps/sandswept-isles.php#solo-farm";
			pop = "Rare";
			break;

			case "Solo Farm: Thunderhead D#802020ge":
			link = "./maps/thunderhead-peaks.php#solo-farm";
			pop = "Rare";
			break;

			case "Sparkfly Fen Node Farm (w/ Volatile)":
			link = "./gathering/sparkfly-fen-node-farm.php";
			pop = "Rare";
			break;

			case "Stonehead Farm (Baubles)":
			link = "./maps/verdant-brink.php";
			pop = "Common";
			break;

			case "Tangled Depths (Baubles)":
			link = "./maps/tangled-depths.php";
			pop = "Rare";
			break;

			case "Tangled Depths (w/o Baubles)":
			link = "./maps/tangled-depths.php";
			pop = "Rare";
			break;

			case "Thunderhead Peaks":
			link = "./maps/thunderhead-peaks.php";
			pop = "Rare";
			break;

			case "Thunderhead / Kourna":
			link = "./maps/combo-farms.php#thunderhead-kourna.php";
			pop = "Rare";
			break;

			case "Timberline Node Farm (w/ Volatile)":
			link = "./gathering/timberline-falls-node-farm.php";
			pop = "Rare";
			break;

			case "Domain of Vabbi":
			link = "./maps/domain-of-vabbi.php";
			pop = "Rare";
			break;

			case "Verdant Brink (Baubles)":
			link = "./maps/verdant-brink.php";
			pop = "Rare";
			break;

			case "Winterberry Farm (w/ Volatile)":
			link = "./maps/bitterfrost-frontier.php#nodes";
			pop = "Common";
			break;

			case "World Boss Train (w/ Volatile)":
			link = "./maps/world-boss-train.php";
			pop = "Common";
			break;
		}
	
		dataHTML += `<tr>
		<td style = "color: ${colorPosChange};"> ${changeIndex} </td> 
		<td style = "background-color:${background_color}">${maps_now[i].type}</td>
		<td> ${pop} </td>
		<td onclick = "location.href = '${link}';">${maps_now[i].name}</td>
		<td>${time}</td>
		<td><div id = "sort">${displayValues(maps_now[i].gold_per_hour, 0)}</div>
			<div class = "hoverTooltip"> <b>Gold Per Hour</b>
			<br> <span class = "hoverTooltip-left"> Recent: </span><span class = "hoverTooltip-right">${displayValues(maps_now[i].gold_per_hour, 0)} </span>
			<br> <span class = "hoverTooltip-left"> 24 hours ago: </span><span class = "hoverTooltip-right">${displayValues(maps_24hr[i].gold_per_hour, 0)} </span>
			<br> <span class = "hoverTooltip-left"> 24 hour change: </span><span class = "hoverTooltip-right" style = "color: ${colorGPHChange}">${displayValues(map24GPHChange, 0)} </span></div> </td>
		<td><div id = "sort">${displayValues(totalGold, 0)}</div>
			<div class = "hoverTooltip"> <b>Total Gold</b>
			<br> <span class = "hoverTooltip-left"> Recent: </span><span class = "hoverTooltip-right">${displayValues(totalGold, 0)} </span>
			<br> <span class = "hoverTooltip-left"> 24 hours ago: </span><span class = "hoverTooltip-right">${displayValues(total24Gold, 0)} </span>
			<br> <span class = "hoverTooltip-left"> 24 hour change: </span><span class = "hoverTooltip-right" style = "color: ${colorTotalChange}">${displayValues(total24GoldChange, 0)} </span></div> </td>
		<td>${karma}</td>
		<td>${spiritshard}</td>
		<td>${tradecontract}</td>
		<td>${unboundmagic}</td>
		<td>${volatilemagic}</td>
		<td>${expan}</td>
		</tr>`;
	}
	//Magic
	tableBody.innerHTML = dataHTML;
	sortTableByPrice('benchmarks', 5);
}

function select_option(selectedIndex){
	console.log(selectedIndex.value);
	switch(selectedIndex.value){
		case "24hr Change (+/-)": sortTableByQuantity('benchmarks', 0); break;
		case "Farm Type": sortTableByAlphabet('benchmarks', 1); break;
		case "Popularity": sortTableByAlphabet('benchmarks', 2); break;
		case "Map": sortTableByAlphabet('benchmarks', 3); break;
		case "Time": sortTableByTime('benchmarks', 4); break;
		case "Gold/Hour": sortTableByPrice('benchmarks', 5); break;
		case "Total Gold": sortTableByPrice('benchmarks', 6); break;
		case "Karma": sortTableByQuantity('benchmarks', 7); break;
		case "Spirit Shards": sortTableByQuantity('benchmarks', 8); break;
		case "Trade Contracts": sortTableByQuantity('benchmarks', 9); break; 
		case "Unbound Magic": sortTableByQuantity('benchmarks', 10); break;
		case "Volatile Magic": sortTableByQuantity('benchmarks', 11); break;
		default: sortTableByPrice('benchmarks', 5); break;
	}
}
</script>
