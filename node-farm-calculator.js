var node = {
	farms: [
		{map: "Bjora Marches", 
		mithril: 7, 
		rich_mithril: 0, 
		orichalcum: 1, 
		rich_orichalcum: 0, 
		eternal_ice: 3,
		elder_wood: 19, 
		ancient_wood: 1, 
		verdant_herb: 27, 
		winter_root_vegetable: 11 
		},

		{map: "Bloodstone Fen",  
		bloodstone: 5, 
		elder_wood: 19, 
		ancient_wood: 1, 
		jungle_plant: 15, 
		mussel: 4 
		},

		{map: "Draconis Mons",
		mithril: 5, 
		elder_wood: 19,
		primordial_orchid: 13,
		jungle_plant: 21
		},

		{map: "Dredgehaunt Cliffs", 
		iron: 11,
		rich_iron: 1,
		gold: 8, 
		rich_gold: 1,
		seasoned_wood: 25,
		young_herb: 6,
		onion: 3,
		zucchini: 1,
		root_vegetable: 5,
		mature_herb: 3,
		scallion: 1
		
		},

		{map: "Flax", 
		mithril: 1,  
		orichalcum: 1,  
		bloodstone: 1,
		elder_wood: 1, 
		ancient_wood: 1, 
		flax: 36  
		},

		{map: "Lake Doric", 
		mithril: 7, 
		rich_mithril: 0, 
		orichalcum: 2, 
		rich_orichalcum: 1, 
		jade_fragment: 10,
		elder_wood: 14, 
		ancient_wood: 2, 
		verdant_herb: 11, 
		sawgill_mushroom: 8, 
		lotus: 1},

		{map: "Maguuma Lily Farm", 
		jungle_plant: 44,
		},

		{map: "Mount Maelstrom", 
		platinum: 7,
		rich_platinum: 3,
		mithril: 2,
		hard_wood: 12,
		elder_wood: 6,
		leek: 7,
		verdant_herb: 4,
		asparagus: 2,
		mature_herb: 3
		},

		{map: "Mussel Farm", 
		mussel: 39,
		},

		{map: "Orr", 
		mithril: 24,
		rich_mithril: 2,
		orichalcum: 4,
		elder_wood: 46,
		ancient_wood: 9,
		orrian_oyster: 5,
		omnomberry: 7,
		orrain_truffle: 6,
		black_crocus: 10,
		ghost_pepper: 10,
		lotus: 2
		},

		{map: "Rich Nodes", 
		iron: 2, 
		rich_iron: 12, 
		platinum: 4, 
		rich_platinum: 13, 
		gold: 2,
		mature_herb: 1, 
		young_herb: 1 
		},

		{map: "Sandswept Isles", 
		mithril: 32, 
		rich_mithril: 1, 
		orichalcum: 2, 
		rich_orichalcum: 1, 
		difluorite: 30,
		elder_wood: 20, 
		ancient_wood: 1, 
		cluster_of_desert_herb: 10, 
		desert_vegetable: 11, 
		flax: 10,
		mussel: 26,
		coral: 10,
		artichoke: 4,
		passiflora: 2,
		lentil: 6},

		{map: "Siren's Landing", 
		mithril: 2,  
		orichalcum: 0,  
		elder_wood: 17, 
		ancient_wood: 3, 
		orrian_oyster: 5, 
		omnomberry: 2, 
		orrain_truffle: 4,
		black_crocus: 2
		},

		{map: "Sparkfly Fen", 
		platinum: 13,
		rich_platinum: 3,
		hard_wood: 25,
		variegated_taproot: 4,
		leek: 4,
		blackberry: 4,
		verdant_herb: 2
		},

		{map: "Timberline Falls", 
		gold: 3,
		iron: 2,
		platinum: 17,
		rich_platinum: 1,
		seasoned_wood: 4,
		hard_wood: 19,
		blackberry: 4,
		variegated_taproot: 5,
		portobello_mushroom: 1,
		mature_herb: 8,
		scallion: 4
		},

		{ map: "Winterberry",
		orichalcum: 1,
		rich_mithril: 1,
		elder_wood: 12,
		winterberry: 38,
		verdant_herb: 2,
		winter_root_vegetable: 1,
		leek: 2
		}
	]
};

function match_map(map){
	var match; 
	for (i = 0; i < node.farms.length; i++){
		if (map == node.farms[i].map){
			match = node.farms[i];
		}
	}
	return match;
}
function display_nodes(map, table){
	var match;  
	var tableBody = document.getElementById(table);
	var tableHTML = '';
	for (i = 0; i < node.farms.length; i++){
		if (map == node.farms[i].map){
			match = node.farms[i];
		}
	}
	tableHTML = `<tr>
	<td> 
	`

}

async function display_values(selected_map, selected_sickle, selected_axe, selected_pick, selected_characters, selected_hour, selected_minute_1, selected_minute_2, farm_button){

	// Rolling choya
	var choya = document.getElementById('rolling-choya-node-proof');
	choya.style.display = "block";

	// Grabs the JSON URL file from the Google App Script 
	// Value per node sheet
	const node_api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const node_response = await fetch(node_api);
	const nodeData = await node_response.json();

	// Glyph sheet
	const glyph_api = 'https://script.google.com/macros/s/AKfycbzFqLJFdm5TeCDGhrUPIZvIhW87IfdgTWS2uYWTWH4dhTcepYFg/exec';
	const glyph_response = await fetch(glyph_api);
	const glyphData = await glyph_response.json();

	// What the selected map is
	var map = document.getElementById(selected_map).value;
	var sickle = document.getElementById(selected_sickle).value;
	var axe = document.getElementById(selected_axe).value;
	var pick = document.getElementById(selected_pick).value;
	var characters = document.getElementById(selected_characters).value;
	var hour = document.getElementById(selected_hour).value;
	var minute_1 = document.getElementById(selected_minute_1).value;
	var minute_2 = document.getElementById(selected_minute_2).value;
	var time = (hour*60)+(minute_1*10)+(minute_2*1);
	var time_notice = document.getElementById('time-notice');
	var levels;
	// Values for other functions
	var node_value;
	var node_bounty_value;
	var sickle_value;
	var axe_value;
	var pick_value;
	var q;
	var array_value = 0;
	// Array for node values
	var nodes = [];
	// What is going to be displayed
	var value = document.getElementById('value');
	var valueHTML = '';
	// Table for proof 
	var tableBody = document.getElementById('node-proof-data');
	var proofHTML = '';

	// Empty array to fill in with pictures for each farm proof
	var info;
	var multiple_levels = [];

	// Div to make a button to a selected farm 
	var link = document.getElementById(farm_button);
	var linkHTML = '';
	var directed_page = ''; // Based on selected farm, move to this page when clicking the link

	function match_api(match){
		for (i = 0; i < nodeData.spreadsheet.length; i++){
			if (match == nodeData.spreadsheet[i].item){
				node_value = nodeData.spreadsheet[i].worth;
			}
		}
		return node_value;
	}

	// Same as above, but only when applying to bounty mining tools
	// This prevents the calculation to always assume the last switch or if statement condition (like rich ori)
	function match_bounty_api(match){
		for (i = 0; i < nodeData.spreadsheet.length; i++){
			if (match == nodeData.spreadsheet[i].item){
				node_bounty_value = nodeData.spreadsheet[i].worth;
			}
		}
		return node_bounty_value;
	}

	// Find value of glyph w/ sickle
	// vpn = value per node
	function match_sickle(selected_sickle){

		if (selected_sickle == 0){
			sickle_value = 0;
		}
		if (selected_sickle == "Scavenger" || "Unbound" || "Volatile" || "Watchknight"){
			for (i = 0; i < glyphData.spreadsheet.length; i++){
				if (selected_sickle == glyphData.spreadsheet[i].glyph && "Sickle" == glyphData.spreadsheet[i].tool){
					sickle_value = glyphData.spreadsheet[i].vpn;
				}
			}
		}
		if (selected_sickle == "Bounty"){
			sickle_value = (match_api() * 1.4748) - match_api();
		} else {
			for (i = 0; i < glyphData.spreadsheet.length; i++){
				if (selected_sickle == glyphData.spreadsheet[i].glyph && "Sickle" == glyphData.spreadsheet[i].tool){
					switch (levels){
						case 115:
							if ("1-15" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 1640:
							if ("16-40" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 4155:
							if ("41-55" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 5670:
							if ("56-70" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 7180:
							if ("71-80" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;
					}
					
				}
			} // end of for loop
		} // end of else 
		return sickle_value;

	}

	// Find value of glyph w/ axe
	function match_axe(selected_axe){
		if (selected_axe == 0){
			axe_value = 0;
		}
		if (selected_axe == "Scavenger" || "Unbound" || "Volatile" || "Watchknight"){
			for (i = 0; i < glyphData.spreadsheet.length; i++){
				if (selected_axe == glyphData.spreadsheet[i].glyph && "Axe" == glyphData.spreadsheet[i].tool){
					axe_value = glyphData.spreadsheet[i].vpn;
				}
			}
		} 
		if (selected_axe == "Bounty"){
			axe_value = (match_api() * 1.1583) - match_api();
		} else {
			for (i = 0; i < glyphData.spreadsheet.length; i++){
				if (selected_axe == glyphData.spreadsheet[i].glyph && "Axe" == glyphData.spreadsheet[i].tool){
					switch (levels){
						case 115:
							if ("1-15" == glyphData.spreadsheet[i].level){
								axe_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 1640:
							if ("16-40" == glyphData.spreadsheet[i].level){
								axe_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 4155:
							if ("41-55" == glyphData.spreadsheet[i].level){
								axe_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 5670:
							if ("56-70" == glyphData.spreadsheet[i].level){
								axe_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 7180:
							if ("71-80" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;
					}
				}
			} // end for 
		} // end if
		return axe_value;
	}

	// Find value of glyph w/ pick
	function match_pick(selected_pick){
		if (selected_pick == 0){
			pick_value = 0;
		}
		if (selected_pick == "Scavenger" || "Unbound" || "Volatile" || "Watchknight"){
			for (i = 0; i < glyphData.spreadsheet.length; i++){
				if (selected_pick == glyphData.spreadsheet[i].glyph && "Pick" == glyphData.spreadsheet[i].tool){
					pick_value = glyphData.spreadsheet[i].vpn;
				}
			}
		} 
		if (selected_pick == "Bounty"){
			pick_value = (match_api() * 1.1583) - match_api();
			if (match_api() == match_bounty_api("Rich Copper Ore") 
				|| match_api() == match_bounty_api("Rich Silver Ore")
				|| match_api() == match_bounty_api("Rich Iron Ore")
				|| match_api() == match_bounty_api("Rich Platinum Ore")
				|| match_api() == match_bounty_api("Rich Mithril Ore")
				|| match_api() == match_bounty_api("Rich Orichalcum Ore")){
				pick_value = 0;
			}
			
			
		} else {
			for (i = 0; i < glyphData.spreadsheet.length; i++){
				if (selected_pick == glyphData.spreadsheet[i].glyph && "Pick" == glyphData.spreadsheet[i].tool){
					switch (levels){
						case 115:
							if ("1-15" == glyphData.spreadsheet[i].level){
								pick_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 1640:
							if ("16-40" == glyphData.spreadsheet[i].level){
								pick_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 4155:
							if ("41-55" == glyphData.spreadsheet[i].level){
								pick_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 5670:
							if ("56-70" == glyphData.spreadsheet[i].level){
								pick_value = glyphData.spreadsheet[i].vpn;
							}
						break;

						case 7180:
							if ("71-80" == glyphData.spreadsheet[i].level){
								sickle_value = glyphData.spreadsheet[i].vpn;
							}
						break;
					}
				}
			} // end for
		} // end if
		return pick_value;
	}

	function add_array(array){
	
		var array_value = array.reduce((a, b) => a + b, 0);
		if (time == 0){
			time = 60;
			time_notice.innerHTML = '';
		}
		if (time < 60 && time != 0){
			time_notice.innerHTML = "Time under 1 hour (excluding 0) will result in inflation of the actual result";
		}
		return (array_value * characters)/(time/60);
	}

	// Collects all the data and does..all the work
	// Calculates and formats the data into HTML 
	function do_work(){
		for (i = 0; i < info.all.length; i++){

			nodes[i] = (info.all[i].qty * info.all[i].node_value) + (info.all[i].qty * info.all[i].glyph_value);

			proofHTML += `<tr>
				<td align = "center"> <img src = "${info.all[i].url}" style = "width: 100%;"> </td>
				<td> ${info.all[i].name} </td>
				<td> (${info.all[i].qty} * ${format_values(info.all[i].node_value).silver}${format_values(info.all[i].node_value).copper}) +
				 		(${info.all[i].qty} * ${format_values(info.all[i].glyph_value).silver}${format_values(info.all[i].glyph_value).copper}) </td>
			</tr>`
		}
		valueHTML = `${format_values(add_array(nodes)).gold}${format_values(add_array(nodes)).silver}${format_values(add_array(nodes)).copper}`
		value.innerHTML = valueHTML;
		tableBody.innerHTML = proofHTML;

		linkHTML += `<a class = "red-button" href  = './gathering/${directed_page}.html';> View Selected Farm </a>
		`
		link.innerHTML = linkHTML;
	}

	// After selecting a farm
	switch (map){
		case "Bjora Marches":
		directed_page = 'bjora-node-farm';
		levels = 7180;
		q = match_map(map); // for quantities
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Rich Mithril Ore", qty: q.rich_mithril, node_value: match_api("Rich Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Eternal_Ice_Shard.png", name: "Eternal Ice", qty: q.eternal_ice, node_value: match_api("Eternal Ice"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Cypress Sapling", qty: q.elder_wood, node_value: match_api("Cypress Sapling (Shiverpeaks)"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Ancient Sapling", qty: q.ancient_wood, node_value: match_api("Ancient Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Varietal_Peppercorn_Seed.png", name: "Verdant Herb", qty: q.verdant_herb, node_value: match_api("Verdant Herbs (Shiverpeaks)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Beet.png", name: "Winter Root Vegetable", qty: q.winter_root_vegetable, node_value: match_api("Winter Root Vegetable"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Bloodstone Fen":
		directed_page = 'bloodstone-fen-node-farm';
		levels = 7180;
		q = match_map(map); // for quantities
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Blood_Ruby.png", name: "Bloodstone Crystal", qty: q.bloodstone, node_value: match_api("Bloodstone Crystal"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Palm Sapling", qty: q.elder_wood, node_value: match_api("Palm Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Ancient Sapling", qty: q.ancient_wood, node_value: match_api("Ancient Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Maguuma_Lily.png", name: "Jungle Plant", qty: q.jungle_plant, node_value: match_api("Jungle Plant"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Freshwater_Pearl.png", name: "Mussel", qty: q.mussel, node_value: match_api("Mussel"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Draconis Mons":
		directed_page = "draconis-mons-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Palm Sapling", qty: q.elder_wood, node_value: match_api("Palm Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Fire_Orchid_Blossom.png", name: "Primordial Orchid", qty: q.primordial_orchid, node_value: match_api("Primordial Orchid"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Maguuma_Lily.png", name: "Jungle Plant", qty: q.jungle_plant, node_value: match_api("Jungle Plant"), glyph_value: match_sickle(sickle)},
				
			]
		};		
		do_work();
		break;

		case "Dredgehaunt Cliffs":
		directed_page = "dredgehaunt-node-farm";
		levels = 4155;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Iron_Ore.png", name: "Iron Ore", qty: q.iron, node_value: match_api("Iron Ore (Level > 25 Zone)"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Iron_Ore.png", name: "Rich Iron Ore", qty: q.rich_iron, node_value: match_api("Rich Iron Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Gold_Ore.png", name: "Gold Ore", qty: q.gold, node_value: match_api("Gold Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Gold_Ore.png", name: "Rich Gold Ore", qty: q.rich_gold, node_value: match_api("Rich Gold Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Seasoned_Wood_Log.png", name: "Fir Sapling", qty: q.seasoned_wood, node_value: match_api("Fir Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Varietal_Peppercorn_Seed.png", name: "Young Herb", qty: q.young_herb, node_value: match_api("Young Herbs (Shiverpeaks)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Onion.png", name: "Onion", qty: q.onion, node_value: match_api("Onion"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Zucchini.png", name: "Zucchini", qty: q.zucchini, node_value: match_api("Zucchini"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Beet.png", name: "Root Vegetable", qty: q.root_vegetable, node_value: match_api("Root Vegetable"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Peppercorn_Seed.png", name: "Mature Herb", qty: q.mature_herb, node_value: match_api("Mature Herbs (Shiverpeaks)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Green_Onion.png", name: "Scallion", qty: q.scallion, node_value: match_api("Scallion"), glyph_value: match_sickle(sickle)}
				
			]
		};		
		do_work();
		break;

		case "Flax":
		directed_page = "flax-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Blood_Ruby.png", name: "Bloodstone Crystal", qty: q.bloodstone, node_value: match_api("Bloodstone Crystal"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Palm Sapling", qty: q.elder_wood, node_value: match_api("Palm Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Ancient Sapling", qty: q.ancient_wood, node_value: match_api("Ancient Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Pile_of_Flax_Seeds.png", name: "Flax", qty: q.flax, node_value: match_api("Flax"), glyph_value: match_sickle(sickle)}
				
			]
		};	
		do_work();
		break;

		case "Lake Doric":
		directed_page = "lake-doric-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Rich Mithril Ore", qty: q.rich_mithril, node_value: match_api("Rich Mithril Ore"), glyph_value: match_pick(pick)}, 
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Rich Orichalcum Ore", qty: q.rich_orichalcum, node_value: match_api("Rich Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Jade_Shard.png", name: "Jade Fragment", qty: q.jade_fragment, node_value: match_api("Jade Fragment"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Baoba Sapling", qty: q.elder_wood, node_value: match_api("Baoba Sapling (Non-Maguuma)"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Ancient Sapling", qty: q.ancient_wood, node_value: match_api("Ancient Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Varietal_Mint_Seed.png", name: "Verdant Herb", qty: q.verdant_herb, node_value: match_api("Verdant Herbs (Kryta)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Sawgill_Mushroom.png", name: "Sawgill Mushroom", qty: q.sawgill_mushroom, node_value: match_api("Sawgill Mushroom"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Lotus_Root.png", name: "Lotus", qty: q.lotus, node_value: match_api("Lotus"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Maguuma Lily Farm":
		directed_page = "maguuma-lily-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Maguuma_Lily.png", name: "Jungle Plant", qty: q.jungle_plant, node_value: match_api("Jungle Plant"), glyph_value: match_sickle(sickle)},
			]
		};
		do_work();
		break;

		case "Mount Maelstrom":
		directed_page = "mount-maelstrom-node-farm";
		levels = 5670;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Platinum Ore", qty: q.platinum, node_value: match_api("Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Rich Platinum Ore", qty: q.rich_platinum, node_value: match_api("Rich Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Hard_Wood_Log.png", name: "Banyan Sapling", qty: q.hard_wood, node_value: match_api("Banyan Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Baoba Sapling", qty: q.elder_wood, node_value: match_api("Baoba Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Leek.png", name: "Leek", qty: q.leek, node_value: match_api("Leek"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Clove_Seed.png", name: "Verdant Herb", qty: q.verdant_herb, node_value: match_api("Verdant Herbs (Maguuma Jungle)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Asparagus_Spear.png", name: "Asparagus", qty: q.asparagus, node_value: match_api("Asparagus"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Clove_Seed.png", name: "Mature Herb", qty: q.mature_herb, node_value: match_api("Mature Herbs (Maguuma Jungle)"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Mussel Farm":
		directed_page = "mussel-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mussel.png", name: "Mussel", qty: q.mussel, node_value: match_api("Mussel"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Orr":
		directed_page = "orr-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Rich Mithril Ore", qty: q.rich_mithril, node_value: match_api("Rich Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Cypress Sapling", qty: q.elder_wood, node_value: match_api("Cypress Sapling (Non-Magu, Non-Shiv)"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Orrian Sapling", qty: q.ancient_wood, node_value: match_api("Orrian Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Orrian_Pearl.png", name: "Orrian Pearl", qty: q.orrian_oyster, node_value: match_api("Orrian Oyster"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Omnomberry.png", name: "Omnomberry", qty: q.omnomberry, node_value: match_api("Omnomberry"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Orrian_Truffle.png", name: "Orrian Truffle", qty: q.orrain_truffle, node_value: match_api("Orrian Truffle"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Saffron_Thread.png", name: "Black Crocus", qty: q.black_crocus, node_value: match_api("Black Crocus"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Ghost_Pepper.png", name: "Ghost Pepper", qty: q.ghost_pepper, node_value: match_api("Ghost Pepper"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Lotus_Root.png", name: "Lotus", qty: q.lotus, node_value: match_api("Lotus"), glyph_value: match_sickle(sickle)},
			]
		};
		do_work();
		break;

		case "Rich Nodes":
		directed_page = "rich-node-farm";
		q = match_map(map);
		info = {
			all: [
				{url: "./images/assets/nodes/Iron_Ore.png", name: "Iron Ore", qty: q.iron, node_value: match_api("Iron Ore (Level <= 25 Zone)"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Iron_Ore.png", name: "Rich Iron Ore", qty: q.rich_iron, node_value: match_api("Rich Iron Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Platinum Ore", qty: q.platinum, node_value: match_api("Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Rich Platinum Ore", qty: q.rich_platinum, node_value: match_api("Rich Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Gold_Ore.png", name: "Gold Ore", qty: q.gold, node_value: match_api("Gold Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Varietal_Mint_Seed.png", name: "Mature Herb", qty: q.mature_herb, node_value: match_api("Mature Herbs (Ascalon)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Peppercorn_Seed.png", name: "Young Herb", qty: q.young_herb, node_value: match_api("Young Herbs (Shiverpeaks)"), glyph_value: match_sickle(sickle)}	
			]
		};	
		multiple_levels = [1640,1640,5670,5670,4155,5670,4155]; 
		for (i = 0; i < info.all.length; i++){
			levels = multiple_levels[i];
			nodes[i] = (info.all[i].qty * info.all[i].node_value) + (info.all[i].qty * info.all[i].glyph_value);

			proofHTML += `<tr>
				<td align = "center"> <img src = "${info.all[i].url}" style = "width: 100%;"> </td>
				<td> ${info.all[i].name} </td>
				<td> (${info.all[i].qty} * ${format_values(info.all[i].node_value).silver}${format_values(info.all[i].node_value).copper}) +
				 		(${info.all[i].qty} * ${format_values(info.all[i].glyph_value).silver}${format_values(info.all[i].glyph_value).copper}) </td>
			</tr>`
		}
		valueHTML = `${format_values(add_array(nodes)).gold}${format_values(add_array(nodes)).silver}${format_values(add_array(nodes)).copper}`
		value.innerHTML = valueHTML;
		tableBody.innerHTML = proofHTML;
		break;

		case "Sandswept Isles":
		directed_page = "sandswept-isles-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Rich Mithril Ore", qty: q.rich_mithril, node_value: match_api("Rich Mithril Ore"), glyph_value: match_pick(pick)}, 
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Rich Orichalcum Ore", qty: q.rich_orichalcum, node_value: match_api("Rich Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Difluorite_Crystal.png", name: "Difluorite Crystal", qty: q.difluorite, node_value: match_api("Difluorite Crystal"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Baoba Sapling", qty: q.elder_wood, node_value: match_api("Baoba Sapling (Non-Maguuma)"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Ancient Sapling", qty: q.ancient_wood, node_value: match_api("Ancient Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Varietal_Sesame_Seed.png", name: "Cluster of Desert Herb", qty: q.cluster_of_desert_herb, node_value: match_api("Cluster of Desert Herbs"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Onion.png", name: "Desert Vegetable", qty: q.desert_vegetable, node_value: match_api("Desert Vegetable"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Pile_of_Flax_Seeds.png", name: "Flax", qty: q.flax, node_value: match_api("Flax"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Mussel.png", name: "Mussel", qty: q.mussel, node_value: match_api("Mussel"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Coral_Orb.png", name: "Coral", qty: q.coral, node_value: match_api("Coral"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Artichoke.png", name: "Artichoke", qty: q.artichoke, node_value: match_api("Artichoke"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Passion_Fruit.png", name: "Passiflora", qty: q.passiflora, node_value: match_api("Passiflora"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Handful_of_Red_Lentils.png", name: "Lentil", qty: q.lentil, node_value: match_api("Lentil"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Siren's Landing":
		directed_page = "sirens-landing-node-farm";
		levels = 7180;
		q = match_map(map);
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Mithril Ore", qty: q.mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Cypress Sapling", qty: q.elder_wood, node_value: match_api("Cypress Sapling (Non-Magu, Non-Shiv)"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Ancient_Wood_Log.png", name: "Orrian Sapling", qty: q.ancient_wood, node_value: match_api("Orrian Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Orrian_Pearl.png", name: "Orrian Pearl", qty: q.orrian_oyster, node_value: match_api("Orrian Oyster"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Omnomberry.png", name: "Omnomberry", qty: q.omnomberry, node_value: match_api("Omnomberry"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Orrian_Truffle.png", name: "Orrian Truffle", qty: q.orrain_truffle, node_value: match_api("Orrian Truffle"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Saffron_Thread.png", name: "Black Crocus", qty: q.black_crocus, node_value: match_api("Black Crocus"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work();
		break;

		case "Sparkfly Fen":
		directed_page = "sparkfly-fen-node-farm";
		levels = 5670;
		q = match_map(map); // for quantities
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Platinum Ore", qty: q.platinum, node_value: match_api("Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Rich Platinum Ore", qty: q.rich_platinum, node_value: match_api("Rich Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Hard_Wood_Log.png", name: "Banyan Sapling", qty: q.hard_wood, node_value: match_api("Banyan Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Carrot.png", name: "Variegated Taproot", qty: q.variegated_taproot, node_value: match_api("Variegated Taproot"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Leek.png", name: "Leek", qty: q.leek, node_value: match_api("Leek"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Blackberry.png", name: "Blackberry", qty: q.blackberry, node_value: match_api("Blackberry"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Cilantro_Seed.png", name: "Verdant Herb", qty: q.verdant_herb, node_value: match_api("Verdant Herb (Maguuma Jungle)"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work(); 
		break;

		case "Timberline Falls":
		directed_page = "timberline-falls-node-farm";
		levels = 5670;
		q = match_map(map); // for quantities
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Gold_Ore.png", name: "Gold Ore", qty: q.gold, node_value: match_api("Gold Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Iron_Ore.png", name: "Iron Ore", qty: q.iron, node_value: match_api("Iron Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Platinum Ore", qty: q.platinum, node_value: match_api("Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Platinum_Ore.png", name: "Rich Platinum Ore", qty: q.rich_platinum, node_value: match_api("Rich Platinum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Seasoned_Wood_Log.png", name: "Fir Sapling", qty: q.seasoned_wood, node_value: match_api("Fir Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Hard_Wood_Log.png", name: "Pine Sapling", qty: q.hard_wood, node_value: match_api("Pine Sapling"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Blackberry.png", name: "Blackberry", qty: q.blackberry, node_value: match_api("Blackberry"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Beet.png", name: "Variegated Taproot", qty: q.variegated_taproot, node_value: match_api("Variegated Taproot"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Portobello_Mushroom.png", name: "Portobello Mushroom", qty: q.portobello_mushroom, node_value: match_api("Portobello Mushroom"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Peppercorn_Seed.png", name: "Mature Herb", qty: q.mature_herb, node_value: match_api("Mature Herb (Shiverpeaks)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Onion.png", name: "Scallion", qty: q.scallion, node_value: match_api("Scallion"), glyph_value: match_sickle(sickle)}
			]
		};
		do_work(); 
		break;

		case "Winterberry":
		directed_page = "winterberry-node-node-farm";
		levels = 7180;
		q = match_map(map); // for quantities
		// Proof 
		// url: picture
		// name: name to display on the table
		// qty: q.[name of node from node[] table]
		// node_value: match_api("[name of the node in spreadsheet exactly")
		// glyph_value: match_[tool](tool)
		info = {
			all: [
				{url: "./images/assets/nodes/Orichalcum_Ore.png", name: "Orichalcum Ore", qty: q.orichalcum, node_value: match_api("Orichalcum Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Mithril_Ore.png", name: "Rich Mithril Ore", qty: q.rich_mithril, node_value: match_api("Mithril Ore"), glyph_value: match_pick(pick)},
				{url: "./images/assets/nodes/Elder_Wood_Log.png", name: "Cypress Sapling", qty: q.elder_wood, node_value: match_api("Cypress Sapling (Shiverpeaks)"), glyph_value: match_axe(axe)},
				{url: "./images/assets/nodes/Fresh_Winterberry.png", name: "Fresh Winterberry", qty: q.winterberry, node_value: match_api("Winterberry Bush"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Varietal_Peppercorn_Seed.png", name: "Verdant Herb", qty: q.verdant_herb, node_value: match_api("Verdant Herb (Shiverpeaks)"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Beet.png", name: "Winter Root Vegetable", qty: q.winter_root_vegetable, node_value: match_api("Winter Root Vegetable"), glyph_value: match_sickle(sickle)},
				{url: "./images/assets/nodes/Leek.png", name: "Leek", qty: q.leek, node_value: match_api("Leek"), glyph_value: match_sickle(sickle)}
				]
		};
		do_work(); 
		break;
	}

	choya.style.display = "none";
}

// Input a value to format to get the gold, silver, and copper symbols
function format_values(value){
	var amount = Math.floor(value);
	var negative = false; 
	var negative_symbol = '';
	var gold = 0;
	var silver = 0;
	var copper = 0;
	var copperHTML = ``;
	var silverHTML = ``;
	var goldHTML = ``;

	if (amount < 0){
		amount = amount * -1; 
		negative = true;
	}

	if (amount == 0){
		copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
	}

	if (amount > 0){ 
		copper = (amount % 100);
		amount = Math.floor(amount/100);

		if (copper >= 10){
			copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
		} else {
			copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
		}
		if (copper == 100){
			copper = 0;
			amount++;
		} 
	}
	if (amount > 0){
		silver = amount % 100; 
		amount = Math.floor(amount / 100);

		if (silver >= 10){
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
		} else {
			silverHTML = " 0"+`${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
		}
		if (silver == 100){
			silver = 0;
			amount++;
		}
	}
	if (amount >= 10){
		gold = amount;
		goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
	} else {
		gold = amount;
		goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
	}

	if (negative == true){
		negative_symbol = ' -';
		if (gold > 0){
			goldHTML = `${negative_symbol}${goldHTML}`;
		} else {
			goldHTML = ``;
			if (silver > 0){
				silverHTML = `${negative_symbol}${silverHTML}`;
			} else {
				silverHTML = ``;
				if (copper > 0){
					copperHTML = `${negative_symbol}${copperHTML}`;
				} else {
					copperHTML = ``;
				} 
			}
		} 
	} 

	return {
		copper: copperHTML,
		silver: silverHTML,
		gold: goldHTML
	};
}