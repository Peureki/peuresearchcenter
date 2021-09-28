<script>
//	===========================================================================
//  ========================== BENCHMARKS =====================================
// 	===========================================================================
// Grabs all the benchmarks from the main Google Spreadsheet: 
async function getBenchmarkAll(table, image){

	//Grabs the JSON URL file from the Google App Script 
	const response = await fetch(api_url_map_benchmarks);
	const data = await response.json();

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
		nowGPH,
		map24GPH,
		map24GPHChange;

	let time, hours, minutes,
		colorPosChange, colorGPHChange, background_color;
	// Get benchmarks from mySQL 
	// This DB gets updated every 24 hours 
	let mapsDB = <?php echo $mapsDB->getMaps(); ?>;
	console.log(mapsDB)

	let count = 0;
	//Loop through all of the named benchmarks until there's an empy cell in the spreadsheet
	//Places those data into the empty data table
	for (i = 0; i < data.spreadsheet.length; i++){
		// Check if there's not an empty farm
		if (data.spreadsheet[i].farmtype != ""){
			// At current farm, find the matching farm from the SQL DB
			for (j = 0; j < mapsDB.length; j++){
				// If it matches, set the change index of the farm based on positions of both tables
				if (data.spreadsheet[i].map == mapsDB[j].name){
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
			count++; 
			// Depending on what the SS says under "farm type", change color of bkg
			switch(data.spreadsheet[i].farmtype){

				case "R":
				data.spreadsheet[i].farmtype = "Repeatable";
				background_color = "#4ccd38";
				break;

				case "D":
				data.spreadsheet[i].farmtype = "Daily";
				background_color = "#84F473";
				break;

				case "G":
				data.spreadsheet[i].farmtype = "Gathering";
				background_color = "#fab52a";
				break;

				case "S":
				data.spreadsheet[i].farmtype = "Solo";
				background_color = "#1f8ce7";
				break;
			}

			karma = Math.floor(data.spreadsheet[i].karma);
			spiritshard = Math.floor(data.spreadsheet[i].spiritshard);
			tradecontract = Math.floor(data.spreadsheet[i].tradecontract);
			elegymosaic = Math.floor(data.spreadsheet[i].elegymosaic);
			unboundmagic = Math.floor(data.spreadsheet[i].unboundmagic);
			volatilemagic = Math.floor(data.spreadsheet[i].volatilemagic);

			nowGPH = data.spreadsheet[i].gold; 
			map24GPH = mapsDB[i].gold_per_hour;
			map24GPHChange = nowGPH - map24GPH;
			// If the change of the GPH from the last 24 hours is more/less than zero, change text color
			if (map24GPHChange > 0){
				colorGPHChange = "#41AF2F"; // green
			} else {
				colorGPHChange = "#EE3D3D"; // red
			}

			// Display the time in a 00:00 format
			time = Math.floor(data.spreadsheet[i].time); 
			hours = Math.floor(time / 100);
			minutes = time % 100; 

			if (minutes < 10){
				minutes = "0" + minutes; 
			}

			time = hours + ":" + minutes;

			// Get the total amount of gold for a benchmark
			let totalGold = data.spreadsheet[i].gold * (hours + (minutes/60));

			let link = '',
				 pop,
				 popColor;

			switch (data.spreadsheet[i].map){
				case "Amal / Key Metas (PoF/LS4 & 5)":
				link = "./maps/combo-farms.php#amalgamated-key-farm";
				pop = "Rare";
				break;

				case "Amnoon Nodes/Caches (w/ Volatile)":
				link = "./gathering/amnoon-node-cache-farm.php";
				pop = "Rare";
				break;

				case "Auric Basin (Baubles)":
				link = "./maps/auric-basin.php"
				pop = "Uncommon";
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

				case "Labyrinth (~750% MF)":
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
			<td style = "background-color:${background_color}">${data.spreadsheet[i].farmtype}</td>
			<td> ${pop} </td>
			<td onclick = "location.href = '${link}';">${data.spreadsheet[i].map}</td>
			<td>${time}</td>
			<td>${displayValues(data.spreadsheet[i].gold, 0)} 
				<div class = "hoverTooltip"> <b>Gold Per Hour</b>
				<br> <span class = "hoverTooltip-left"> Recent: </span><span class = "hoverTooltip-right">${displayValues(data.spreadsheet[i].gold, 0)} </span>
				<br> <span class = "hoverTooltip-left"> 24 hours ago: </span><span class = "hoverTooltip-right">${displayValues(mapsDB[i].gold_per_hour, 0)} </span>
				<br> <span class = "hoverTooltip-left"> 24 hour change: </span><span class = "hoverTooltip-right" style = "color: ${colorGPHChange}">${displayValues(map24GPHChange, 0)} </span></div> </td>
			<td>${displayValues(totalGold, 0)}</td>
			<td>${karma}</td>
			<td>${spiritshard}</td>
			<td>${tradecontract}</td>
			<td>${unboundmagic}</td>
			<td>${volatilemagic}</td>
			</tr>`;

		} else {
			break;
		}
	}
	//Magic
	tableBody.innerHTML = dataHTML;
	sortTableByGPH('benchmarks', 5);

}
</script>