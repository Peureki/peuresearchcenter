<?php
	chdir(dirname(__FILE__));
	include_once '../../db/items.php'; 	
?>

<?php 
	$sylvariIDs = "46281,46040,46186,45731,45765,45622";
?>

<script>
//	===================================================================================
//  ========================== PROVISIONER TOKENS =====================================
// 	===================================================================================
	let itemIDs = <?php echo $itemsDB->get_array_items("items", "46281,46040,46186,45731,45765,45622,15465,13924,14469,11121,11876,10702,15394,13895,14517,11295,11798,10722,15508,13974,14596,11248,11835,10710,36779,36813,36750,36892,36891,36746,38336,38415,38367,38228,38264,38179,15352,13895,14566,11295,11798,10722,15427,13928,14648,11167,11754,10699,15391,13976,14563,11341,11921,10691,15512,13894,14516,11126,11881,10707,15423,13973,14428,11247,11834,10709,36779,36780,36812,36844,36842,36806,

	24366,24741,19925,24651,24729,46745,19983,19721,24830,43772,24330,24726,46742,24678,24732,46744,66650,24735"); ?>; 

	let ascendedIngres = <?php echo $itemsDB->get_array_items("items", "19735, 19721, 46747, 19684, 19709"); ?>; 
	let generalIngres = <?php echo $itemsDB->get_array_items("items", "43773"); ?> ;

	console.log(itemIDs);

	let upgradedMats = [
		{
			name: "Charged Quartz Crystal",
			value: function() {
				recipe(this, generalIngres,
					25, "Quartz Crystal");
			},
		},
		{
			name: "Glob of Elder Spirit Residue",
			value: function() {
				recipe(this, ascendedIngres,
					50, "Elder Wood Plank",
					1, "Glob of Ectoplasm",
					10, "Thermocatalytic Reagent");
			},
		},
		{
			name: "Lump of Mithrillium",
			value: function() {
				recipe(this, ascendedIngres,
					50, "Mithril Ingot",
					1, "Glob of Ectoplasm",
					10, "Thermocatalytic Reagent");
			},
		},
		{
			name: "Spool of Thick Elonian Cord",
			value: function() {
				recipe(this, ascendedIngres,
					50, "Cured Thick Leather Square",
					1, "Glob of Ectoplasm",
					10, "Thermocatalytic Reagent");
			},
		},
	];

	// Go thru the upgradedMats obj and fill their buy, sell values
	for (let i = 0; i < upgradedMats.length; i++){
		upgradedMats[i].value();
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

	// Empty object
	let factions = {
		vb_sylvari: [{},{},{},{},{},{},],
		vb_itzel: [{},{},{},{},{},{},],
		vb_pact: [{},{},{},{},{},{},],
		vb_noble: [{},{},{},{},{},{},],
		vb_quaggan: [{},{},{},{},{},{},],

		ab_priory: [{},{},{},{},{},{},],
		ab_exalted: [{},{},{},{},{},{},],
		ab_skritt: [{},{},{},{},{},{},],

		td_ogre: [{},{},{},{},{},{},],
		td_rata: [{},{},{},{},{},{},],
		td_nuhoch: [{},{},{},{},{},{},],
		td_scar: [{},{},{},{},{},{},],

		black_citadel: [{},{},{},],
		hoelbrak: [{},{},{}],
		lions_arch: [{},{},{}],
		rata_sum: [{},{},{}],
		divinitys_reach: [{},{},{}],
		the_grove: [{},{},{}],
	};

	// Find a specific item in an array and return the attributes
	function findItem(name, array){
		let attributes = 0; 
		for (let counter = 0; counter < array.length; counter++){
			if (name == array[counter].name){
				attributes = array[counter];
			}
		}
		return attributes;
	}

	// Apply particular IDs to the empty object Factions
	// Example:
	// factions = factions.vb_sylvari
	// minRange = 0, the range where it starts in the ItemsID array
	// mapName = "Verdant Brink"
	// waypointName = "[&BN4HAAA=]""
	function applyIDs(factions, minRange, mapName, factionName, waypointName){
		for (i = 0; i < factions.length; i++){
			factions[i].name = itemIDs[minRange+i].name;
			factions[i].id = itemIDs[minRange+i].id;
			factions[i].map = mapName;
			factions[i].factionName = factionName;
			factions[i].waypoint = waypointName;
			factions[i].icon = itemIDs[minRange+i].icon;
			
			// Check the names and any of these names matches
			// If it does, give it a qty
			// If not, default to 1
			// 
			// Exception: If they're ascended mats or acc bound mats that have value
			// Display those new values via UpgradedMats array
			switch (itemIDs[minRange+i].name){
				case "Large Skull": factions[i].qty = 20; break;
				case "Superior Rune of the Citadel": factions[i].qty = 12; break;
				case "Superior Sigil of Icebrood Slaying": factions[i].qty = 20; break;
				case "Superior Rune of Hoelbrak": factions[i].qty = 14; break;
				case "Glob of Ectoplasm": factions[i].qty = 5; break;
				case "Crystal Lodestone": factions[i].qty = 24; break;
				case "Superior Rune of Rata Sum": factions[i].qty = 14; break;
				case "Superior Sigil of Justice": factions[i].qty = 34; break;
				case "Superior Rune of Divinity": factions[i].qty = 4; break;
				case "Sheet of Ambrite": factions[i].qty = 3; break;
				case "Superior Rune of the Grove": factions[i].qty = 14; break;

				// UpgradedMats
				case "Spool of Thick Elonian Cord": 
					factions[i].qty = "Infinite"; 
					factions[i].buy_price = findItem(itemIDs[minRange+i].name, upgradedMats).buy;
					factions[i].sell_price = findItem(itemIDs[minRange+i].name, upgradedMats).sell;
					break; 
				case "Charged Quartz Crystal":
					factions[i].qty = "Infinite"; 
					factions[i].buy_price = findItem(itemIDs[minRange+i].name, upgradedMats).buy;
					factions[i].sell_price = findItem(itemIDs[minRange+i].name, upgradedMats).sell;
					break; 
				case "Lump of Mithrillium":
					factions[i].qty = "Infinite"; 
					factions[i].buy_price = findItem(itemIDs[minRange+i].name, upgradedMats).buy;
					factions[i].sell_price = findItem(itemIDs[minRange+i].name, upgradedMats).sell;
					break; 
				case "Glob of Elder Spirit Residue":
					factions[i].qty = "Infinite"; 
					factions[i].buy_price = findItem(itemIDs[minRange+i].name, upgradedMats).buy;
					factions[i].sell_price = findItem(itemIDs[minRange+i].name, upgradedMats).sell;
					break; 
				default: factions[i].qty = 1; break;
			} 

			if (factions[i].qty != "Infinite"){
				// Multiple qty with the prices
				factions[i].buy_price = itemIDs[minRange+i].buy_unit_price * factions[i].qty; 
				factions[i].sell_price = itemIDs[minRange+i].sell_unit_price * factions[i].qty;
			}

		}
	}
	// The num is from the order of of where the items are in ItemsID array
	// Each of these have 6 options per faction
	// VB
	applyIDs(factions.vb_sylvari, 0, "Verdant Brink", "Sylvari", "[&BN4HAAA=]"); 
	applyIDs(factions.vb_itzel, 6, "Verdant Brink", "Itzel", "[&BN4HAAA=]");
	applyIDs(factions.vb_pact, 12, "Verdant Brink", "Pact", "[&BN4HAAA=]");
	applyIDs(factions.vb_noble, 18, "Verdant Brink", "Noble", "[&BN4HAAA=]");
	applyIDs(factions.vb_quaggan, 24, "Verdant Brink", "Quaggan", "[&BN4HAAA=]");

	// AB
	applyIDs(factions.ab_priory, 30, "Auric Basin", "Priory", "[&BNYHAAA=]");
	applyIDs(factions.ab_exalted, 36, "Auric Basin", "Exalted", "[&BNYHAAA=]");  
	applyIDs(factions.ab_skritt, 42, "Auric Basin", "Skritt", "[&BNYHAAA=]"); 

	// TD
	applyIDs(factions.td_ogre, 48, "Tangled Depths", "Ogre", "[&BMwHAAA=]");
	applyIDs(factions.td_nuhoch, 54, "Tangled Depths", "Nuhoch", "[&BMwHAAA=]");
	applyIDs(factions.td_rata, 60, "Tangled Depths", "Rata", "[&BMwHAAA=]");
	applyIDs(factions.td_scar, 66, "Tangled Depths", "SCAR", "[&BMwHAAA=]");

	// Each of these have 3 options per faction
	// Cities
	applyIDs(factions.black_citadel, 72, "Black Citadel", "Collector's", "[&BKgDAAA=]");
	applyIDs(factions.hoelbrak, 75, "Hoelbrak", "Collector's", "[&BIYDAAA=]");
	applyIDs(factions.lions_arch, 78, "Lion's Arch", "Collector's", "[&BAwEAAA=]");
	applyIDs(factions.rata_sum, 81, "Rata Sum", "Collector's", "[&BLYEAAA=]");
	applyIDs(factions.divinitys_reach, 84, "Divinity's Reach", "Collector's", "[&BP4EAAA=]");
	applyIDs(factions.the_grove, 87, "The Grove", "Collector's", "[&BLsEAAA=]");

	let othersList = [
		factions.vb_sylvari,
		factions.vb_itzel,
		factions.vb_pact,
		factions.vb_noble,
		factions.vb_quaggan,
		factions.ab_priory,
		factions.ab_exalted,
		factions.ab_skritt,
		factions.td_ogre,
		factions.td_nuhoch,
		factions.td_rata,
		factions.td_scar];

	let citiesList = [
		factions.black_citadel,
		factions.hoelbrak,
		factions.lions_arch,
		factions.rata_sum,
		factions.divinitys_reach,
		factions.the_grove
	];

	let currentNum,
		currentSell; 

	let html = '',
		citiesTable = document.getElementById('prov-tokens-cities-tbody'),
		othersTable = document.getElementById('prov-tokens-other-tbody');

	let numID = 0,
		waypointID = "waypoint-" + 0,
		nameID = "name-" + 0; 

	// NON-CITIES
	// Go through each faction and determine what's the cheapest price
	for (i = 0; i < othersList.length; i++){
		currentNum = 0;
		currentSell = othersList[i][0].sell_price;

		for (j = 1; j < othersList[i].length; j++){
			if (othersList[i][j].sell_price < currentSell){
				currentNum = j; 
				currentSell = othersList[i][j].sell_price; 
			}
		}
		html += ` <tr>
			<td> ${othersList[i][currentNum].map} </td>
			<td> ${othersList[i][currentNum].factionName} </td>
			<td onclick = "copyWP(this.children[0].id, &quot;${othersList[i][currentNum].waypoint}&quot;);"><input id = "${waypointID}" type = "text" value = "${othersList[i][currentNum].waypoint}"></input> </td>
			<td onclick = "copyWP(this.children[0].id, &quot;${othersList[i][currentNum].name}&quot;);"><input id = "${nameID}" type = "text" value = "${othersList[i][currentNum].name}"></input> </td>
			<td> ${othersList[i][currentNum].qty} </td>
			<td> ${displayValues(othersList[i][currentNum].buy_price)} </td>
			<td> ${displayValues(othersList[i][currentNum].sell_price)} </td>
		</tr>`;
		othersTable.innerHTML = html; 
		numID += 1; 
		waypointID = "waypoint-" + numID;
		nameID = "name-" + numID;
	}

	// Reset vars for the new table so I don't have to make more vars
	html = ''; 

	// CITIES
	// Go through each faction and determine what's the cheapest price
	for (i = 0; i < citiesList.length; i++){
		for (j = 0; j < citiesList[i].length; j++){
			html += ` <tr>
				<td> ${citiesList[i][j].map} </td>
				<td> ${citiesList[i][j].factionName} </td>
				<td onclick = "copyWP(this.children[0].id, &quot;${citiesList[i][j].waypoint}&quot;);"><input id = "${waypointID}" type = "text" value = "${citiesList[i][j].waypoint}"></input> </td>
				<td onclick = "copyWP(this.children[0].id, &quot;${citiesList[i][j].name}&quot;);"><input id = "${nameID}" type = "text" value = "${citiesList[i][j].name}"></input></td>
				<td> ${citiesList[i][j].qty} </td>
				<td> ${displayValues(citiesList[i][j].buy_price)} </td>
				<td> ${displayValues(citiesList[i][j].sell_price)} </td>
			</tr>`;
			numID += 1;
			waypointID = "waypoint-" + numID;
			nameID = "name-" + numID;
		}
		citiesTable.innerHTML = html; 
	}

</script>
