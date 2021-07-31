async function getSalvage(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbyPYwpYVfEiL5_kr_Cg74OWizWIMGBNskIaU-mJJ_31Sp92_-4/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Grab listings from GW2 API on outcome items from salvaging
	const api_listing = 'https://api.guildwars2.com/v2/commerce/prices?ids=19725,89103,89258,89216,19730,19697,19741,19722,19721,19698,19745,19723,19724,19732,19699,19718,19743,89140,19700,19701,66637,24277,19702,19719,19731,19727,19748,19703,82582,19726,89098,89141,89182,19729,19728,19739';
	const response_listing = await fetch(api_listing);
	const listing = await response_listing.json();

	// Grab items from GW2 API. These items are the items being salvaged
	const api_item = 'https://api.guildwars2.com/v2/commerce/prices?ids=21678,80681,21690,21692,21686,22326,21675,22327,21670,21657,21673,21668,21656,21663,19721,22329,22325,21689,21680,21693,21694,66670,22328,21681,21679,21666,21672,21684,79423,22330,21695,21664,21654,21688,22331,82488,21682,21658,21669,21659,21662,21661,21653,21687,21685,21674,21667,21655,21665,79213,79079,79138,21683,21691,21671,21660,85016,84731,83008';
	const response_item = await fetch(api_item);
	const item = await response_item.json();

	// Grab info from GW2 API on uni gear
	const api_uni_info = 'https://api.guildwars2.com/v2/items?ids=85016,84731,83008';
	const response_info = await fetch(api_uni_info);
	const uni_info = await response_info.json();

	// Grab info from GW2 API on other items
	const api_item_info = 'https://api.guildwars2.com/v2/items?ids=21678,80681,21690,21692,21686,22326,21675,22327,21670,21657,21673,21668,21656,21663,19721,22329,22325,21689,21680,21693,21694,66670,22328,21681,21679,21666,21672,21684,79423,22330,21695,21664,21654,21688,22331,82488,21682,21658,21669,21659,21662,21661,21653,21687,21685,21674,21667,21655,21665,79213,79079,79138,21683,21691,21671,21660';
	const response_item_info = await fetch(api_item_info);
	const item_info = await response_item_info.json();

	var myTable = document.getElementById(table);
	var loading_image = document.getElementById(image);

	myTable.style.opacity = 1; 
	loading_image.style.display = 'none';

	// Uni gear
	let uni_blue_array = data.spreadsheet.slice(0,26); 
	let uni_green_array = data.spreadsheet.slice(35,59);
	let uni_yellow_array = data.spreadsheet.slice(68,86);

	// All other items
	let item_array = [
		{spreadsheet: data.spreadsheet.slice(0,2)},// Bit of Metal Scrap
		{spreadsheet: data.spreadsheet.slice(10,17)}, // Bloodstone-Warped Hide
		{spreadsheet: data.spreadsheet.slice(25,27)}, // Brittle Clump of Ore
		{spreadsheet: data.spreadsheet.slice(35,39)}, // Clump of Ore
		{spreadsheet: data.spreadsheet.slice(47,50)}, // Coarse Leather Strap
		{spreadsheet: data.spreadsheet.slice(58,61)}, // Decaying Mass
		{spreadsheet: data.spreadsheet.slice(69,72)}, // Discarded Garment
		{spreadsheet: data.spreadsheet.slice(80,83)}, // Fetid Mass
		{spreadsheet: data.spreadsheet.slice(91,94)}, // Filthy Hide
		{spreadsheet: data.spreadsheet.slice(102,105)}, // Filthy Pelt
		{spreadsheet: data.spreadsheet.slice(113,116)}, // Frayed Garment
		{spreadsheet: data.spreadsheet.slice(124,127)}, // Frayed Hide
		{spreadsheet: data.spreadsheet.slice(135,138)}, // Frayed Pelt
		{spreadsheet: data.spreadsheet.slice(146,149)}, // Frayed Rag
		{spreadsheet: data.spreadsheet.slice(157,163)}, // Glob of Ectoplasm
		{spreadsheet: data.spreadsheet.slice(171,174)}, // Half-Digested Mass
		{spreadsheet: data.spreadsheet.slice(182,184)}, // Half-Eaten Mass
		{spreadsheet: data.spreadsheet.slice(192,195)}, // Hard Leather Strap
		{spreadsheet: data.spreadsheet.slice(203,207)}, // Jagged Metal Scrap
		{spreadsheet: data.spreadsheet.slice(215,219)}, // Laden Clump of Ore
		{spreadsheet: data.spreadsheet.slice(227,230)}, // Loaded clump of Ore
		{spreadsheet: data.spreadsheet.slice(238,240)}, // Lump of Raw Ambrite
		{spreadsheet: data.spreadsheet.slice(248,251)}, // Malodorous Mass
		{spreadsheet: data.spreadsheet.slice(259,263)}, // Metal Scrap
		{spreadsheet: data.spreadsheet.slice(271,275)}, // Pile of Metal Scrap
		{spreadsheet: data.spreadsheet.slice(283,286)}, // Rag
		{spreadsheet: data.spreadsheet.slice(294,297)}, // Ragged Garment
		{spreadsheet: data.spreadsheet.slice(305,307)}, // Rawhide Leather Strap
		{spreadsheet: data.spreadsheet.slice(315,322)}, // Reclaimed Wood Chunk
		{spreadsheet: data.spreadsheet.slice(330,333)}, // Regurgitated Mass
		{spreadsheet: data.spreadsheet.slice(341,344)}, // Rich Clump of Ore
		{spreadsheet: data.spreadsheet.slice(352,355)}, // Ripped Hide
		{spreadsheet: data.spreadsheet.slice(363,366)}, // Ripped Pelt
		{spreadsheet: data.spreadsheet.slice(374,377)}, // Rugged Leather Strap
		{spreadsheet: data.spreadsheet.slice(385,388)}, // Salvageable Hide
		{spreadsheet: data.spreadsheet.slice(396,404)}, // Salvageable Intact Forged Scrap
		{spreadsheet: data.spreadsheet.slice(412,415)}, // Salvageable Metal Scrap
		{spreadsheet: data.spreadsheet.slice(423,426)}, // Salvageable Pelt
		{spreadsheet: data.spreadsheet.slice(434,436)}, // Shredded Garment
		{spreadsheet: data.spreadsheet.slice(444,446)}, // Shredded Rag 
		{spreadsheet: data.spreadsheet.slice(454,457)}, // Soiled Rag
		{spreadsheet: data.spreadsheet.slice(465,467)}, // Tattered Hide
		{spreadsheet: data.spreadsheet.slice(475,477)}, // Tattered Pelt
		{spreadsheet: data.spreadsheet.slice(485,488)}, // Thick Leather Strap
		{spreadsheet: data.spreadsheet.slice(496,499)}, // Thin Leather Strap
		{spreadsheet: data.spreadsheet.slice(507,510)}, // Torn Garment
		{spreadsheet: data.spreadsheet.slice(518,521)}, // Torn Hide
		{spreadsheet: data.spreadsheet.slice(529,532)}, // Torn Pelt
		{spreadsheet: data.spreadsheet.slice(540,543)}, // Torn Rag
		{spreadsheet: data.spreadsheet.slice(551,558)}, // Unstable Hide
		{spreadsheet: data.spreadsheet.slice(566,572)}, // Unstable Metal Chunk
		{spreadsheet: data.spreadsheet.slice(580,587)}, // Unstalbe Rag
		{spreadsheet: data.spreadsheet.slice(595,598)}, // Valuable Metal Scrap
		{spreadsheet: data.spreadsheet.slice(606,610)}, // Weak Clump of Ore
		{spreadsheet: data.spreadsheet.slice(618,621)}, // Worn Garment
		{spreadsheet: data.spreadsheet.slice(629,632)} // Worn Rag
	];


	var individual_total;
	var subtotal_sell;
	var subtotal_buy;
	var value; 
	var profit_vs_sell; 
	var profit_vs_buy;

	function get_uni_gear(spreadsheet, item_id){
		subtotal_sell = 0; 
		subtotal_buy = 0;

		// 36 = array size of the listing API
		for (i = 0; i < spreadsheet.length; i++){
			for (j = 0; j < 36; j++){
				if (spreadsheet[i].uni_id == listing[j].id){
					individual_total = spreadsheet[i].uni * (listing[j].sells.unit_price * .85); 
					subtotal_sell = subtotal_sell + individual_total; 

					individual_total = spreadsheet[i].uni * (listing[j].buys.unit_price * .85);
					subtotal_buy = subtotal_buy + individual_total; 
				}
			}
			if (spreadsheet[i].uni_name == 'Copper-Fed'){
				individual_total = spreadsheet[i].uni; 
				subtotal_sell = subtotal_sell - individual_total; 
				subtotal_buy = subtotal_buy - individual_total;
			}
			if (spreadsheet[i].uni_name == "Runecrafter's"){
				individual_total = spreadsheet[i].uni; 
				subtotal_sell = subtotal_sell - individual_total; 
				subtotal_buy = subtotal_buy - individual_total;
			}
			if (spreadsheet[i].uni_name == 'Silver-Fed' && item_id == 83008){
				individual_total = 60; 
				subtotal_sell = subtotal_sell - individual_total; 
				subtotal_buy = subtotal_buy - individual_total;

			} else if (spreadsheet[i].uni_name == 'Silver-Fed') {
				individual_total = spreadsheet[i].uni; 
				subtotal_sell = subtotal_sell - individual_total;
				subtotal_buy = subtotal_buy - individual_total;
			}

		}
		function get_item_sell_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].sells.unit_price * .85;
				}
			}
		}
		function get_item_buy_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].buys.unit_price * .85;
				}
			}
		}

		profit_vs_sell = subtotal_sell - get_item_sell_price(item_id);;
		profit_vs_buy = subtotal_buy - get_item_buy_price(item_id);;
		return {
			value: subtotal_sell,
			profit_vs_sell: profit_vs_sell,
			profit_vs_buy: profit_vs_buy 
		};
	}

	// For COPPER-FED
	function get_items_copper(spreadsheet, item_id){

		subtotal_sell = 0;
		subtotal_buy = 0;

		// 36 = array size of the listing API
		for (i = 0; i < spreadsheet.length; i++){
			for (j = 0; j < 36; j++){
				if (spreadsheet[i].copper_id == listing[j].id){
					individual_total = spreadsheet[i].copper * (listing[j].sells.unit_price * .85); 
					subtotal_sell = subtotal_sell + individual_total; 

					individual_total = spreadsheet[i].copper * (listing[j].buys.unit_price * .85);
					subtotal_buy = subtotal_buy + individual_total; 
				}
			}
			if (spreadsheet[i].copper_name == 'Copper-Fed'){
				individual_total = spreadsheet[i].copper; 
				subtotal_sell = subtotal_sell - individual_total; 
				subtotal_buy = subtotal_buy - individual_total;
			}

		}
		function get_item_sell_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].sells.unit_price * .85;
				}
			}
		}
		function get_item_buy_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].buys.unit_price * .85;
				}
			}
		}

		console.log(
			"profit_vs_sell: ", subtotal_sell,
			"profit_vs_buy: ", subtotal_buy,
			"get_item_sell_price: ", get_item_sell_price(item_id),
			"get_item_buy_price: ", get_item_buy_price(item_id));

		profit_vs_sell = subtotal_sell - get_item_sell_price(item_id);;
		profit_vs_buy = subtotal_buy - get_item_buy_price(item_id);;
		return {
			value: subtotal_sell,
			profit_vs_sell: profit_vs_sell,
			profit_vs_buy: profit_vs_buy 
		};

	}

	// For RUNECRAFTER
	function get_items_rune(spreadsheet, item_id){

		subtotal_sell = 0;
		subtotal_buy = 0;

		// 36 = array size of the listing API
		for (i = 0; i < spreadsheet.length; i++){
			for (j = 0; j < 36; j++){
				if (spreadsheet[i].rune_id == listing[j].id){
					individual_total = spreadsheet[i].rune * (listing[j].sells.unit_price * .85); 
					subtotal_sell = subtotal_sell + individual_total; 

					individual_total = spreadsheet[i].rune * (listing[j].buys.unit_price * .85); 
					subtotal_buy = subtotal_buy + individual_total; 
				}
			}
			if (spreadsheet[i].rune_name == "Runecrafter's"){
				individual_total = 30; 
				subtotal_sell = subtotal_sell - individual_total; 
				subtotaL_buy = subtotal_buy - individual_total;
			}
		}
		function get_item_sell_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].sells.unit_price * .85;
				}
			}
		}
		function get_item_buy_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].buys.unit_price * .85;
				}
			}
		}

		profit_vs_sell = subtotal_sell - get_item_sell_price(item_id);;
		profit_vs_buy = subtotal_buy - get_item_buy_price(item_id);;
		return {
			value: subtotal_sell,
			profit_vs_sell: profit_vs_sell, 
			profit_vs_buy: profit_vs_buy
		};
	}

	// For SILVER-FED
	function get_items_silver(spreadsheet, item_id){

		subtotal_sell = 0;
		subtotal_buy = 0;
		// 36 = array size of the listing API
		for (i = 0; i < spreadsheet.length; i++){
			for (j = 0; j < 36; j++){
				if (spreadsheet[i].silver_id == listing[j].id){
					individual_total = spreadsheet[i].silver * (listing[j].sells.unit_price * .85); 
					subtotal_sell = subtotal_sell + individual_total; 

					individual_total = spreadsheet[i].silver * (listing[j].buys.unit_price * .85); 
					subtotal_buy = subtotal_buy + individual_total; 
				}
			}
			if (spreadsheet[i].silver_name == "Silver-Fed"){
				individual_total = 60; 
				subtotal_sell = subtotal_sell - individual_total; 
				subtotal_buy = subtotal_buy - individual_total;
			}
		}
		function get_item_sell_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].sells.unit_price * .85;
				}
			}
		}
		function get_item_buy_price(item_id){
			for (i = 0; i < item.length; i++){
				if (item_id == item[i].id){
					return item[i].buys.unit_price * .85;
				}
			}
		}

		profit_vs_sell = subtotal_sell - get_item_sell_price(item_id);;
		profit_vs_buy = subtotal_buy - get_item_buy_price(item_id);;

		return {
			value: subtotal_sell,
			profit_vs_sell: profit_vs_sell, 
			profit_vs_buy: profit_vs_buy
		};
	}

	// Uni gear results
	var uni_blue = get_uni_gear(uni_blue_array, 85016);
	var uni_green = get_uni_gear(uni_green_array, 84731);
	var uni_yellow = get_uni_gear(uni_yellow_array, 83008);

	// Other item results
	item_id_array = [21678,80681,21690,21692,21686,22326,21675,22327,21670,21657,21673,21668,21656,21663,19721,22329,22325,21689,21680,21693,21694,66670,22328,21681,21679,21666,21672,21684,79423,22330,21695,21664,21654,21688,22331,82488,21682,21658,21669,21659,21662,21661,21653,21687,21685,21674,21667,21655,21665,79213,79079,79138,21683,21691,21671,21660];
	// COPPER-FED
	var item_c = [];
	var item_r = [];
	var item_s = [];

	function get_values_copper(item, id){
		for (i = 0; i < id.length; i++){

			item_c[i] = get_items_copper(item[i].spreadsheet, id[i]);
		}
		return item_c;
	}
	function get_values_rune(item, id){
		for (i = 0; i < id.length; i++){

			item_r[i] = get_items_rune(item[i].spreadsheet, id[i]);
		}
		return item_r;
	}
	function get_values_silver(item, id){
		for (i = 0; i < id.length; i++){

			item_s[i] = get_items_silver(item[i].spreadsheet, id[i]);
		}
		return item_s;
	}
	
	get_values_copper(item_array, item_id_array);
	get_values_rune(item_array, item_id_array);
	get_values_silver(item_array, item_id_array);

	let uni = [
			{ 
				name: "Piece of Common Unidentified Gear", 
				profit_vs_sell: uni_blue.profit_vs_sell, 
				profit_vs_buy: uni_blue.profit_vs_buy,
				value: uni_blue.value},
			{
				name: "Piece of Unidentified Gear", 
				profit_vs_sell: uni_green.profit_vs_sell, 
				profit_vs_buy: uni_green.profit_vs_buy,
				value: uni_green.value},
			{ 
				name: "Piece of Rare Unidentified Gear", 
				profit_vs_sell: uni_yellow.profit_vs_sell, 
				profit_vs_buy: uni_yellow.profit_vs_buy,
				value: uni_yellow.value}
			]; 

	const uni_sell_tableBody = document.getElementById('salvage-uni-table');
	const uni_buy_tableBody = document.getElementById('salvage-uni-buy-table');
	const uni_value_tableBody = document.getElementById('salvage-uni-value-table');
	//Empty data table
	let uni_sell_dataHTML = '';
	let uni_buy_dataHTML = '';
	let uni_value_dataHTML = '';

	// array = The array of values that will be formatted
	// array_info = The array of information of the items/values such as icons 
	// callback = type of callback for the array such as: 
	//			  .profit_vs_sell 
	//			  .profit_vs_buy
	// dataHTML = Empty HTML that will get filled to a table
	// table_body = The table that the data will go into
	function get_formatted_uni(array, array_info, callback, dataHTML, table_body){
		for (i = 0; i < 3; i++){

			var uni_icon = array_info[i].icon;
			var amount = 0;

			if (callback == "profit_vs_sell"){
				amount = Math.floor(array[i].profit_vs_sell);
			} else if (callback == 'profit_vs_buy'){
				amount = Math.floor(array[i].profit_vs_buy);
			} else if (callback == 'value'){
				amount = Math.floor(array[i].value);
			}

			var negative = false; 
			var negative_symbol = '';
			var gold = 0;
			var silver = 0;
			var copper = 0;
			var copperHTML = ``;
			var silverHTML = ``;
			var goldHTML = ``;
			var choice;

			if (amount < 0){
				amount = amount * -1; 
				negative = true;
			}

			if (amount > 0){ 
				copper = (amount % 100);
				amount = Math.floor(amount/100);

				if (copper >= 10){
					copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
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
					silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML = " 0"+`${silver} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver == 100){
					silver = 0;
					amount++;
				}
			}
			if (amount > 0){
				if (amount >= 10){
					gold = amount;
					goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
				} else {
					gold = amount;
					goldHTML = `${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
				}
				if (gold == 0){
					gold = 0;
					amount++;
				}
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

			// If negative, change color to green + change choice. Vise versa
			switch (negative){
				case true:
				color = 'rgba(215, 86, 86, 0.7)';
				choice = 'TP';
				break;

				case false:
				color = 'rgba(86, 215, 109, 0.7)';
				choice = 'Mix Salvage';
				break;
			}


			dataHTML += `
			<tr>
				<td><img style = "width: 100%; display: block;" src = ${uni_icon}></td>
				<td>${array[i].name}</td>
				<td style = "background-color: ${color};">${goldHTML}${silverHTML}${copperHTML}</td>
				<td style = "text-align: center;"> ${choice} </td>
			</tr>`;
		}
		table_body.innerHTML = dataHTML;
	} // End of function 

	get_formatted_uni(uni, uni_info, 'profit_vs_sell', uni_sell_dataHTML, uni_sell_tableBody);
	//get_formatted_uni(uni, uni_info, 'profit_vs_buy', uni_buy_dataHTML, uni_buy_tableBody);
	get_formatted_uni(uni, uni_info, 'value', uni_value_dataHTML, uni_value_tableBody);

	// Arrays for formatting the numbers 
	// Let only the Copper array have the names instead of all of them for less work
	var item_name = [];

	function get_item_id(id_array, gw2_id_array){
		for (i = 0; i < id_array.length; i++){
			if (id_array[i] == gw2_id_array[i].id){
				item_name[i] = gw2_id_array[i].name;
			}
		}
		return item_name;
	}

	get_item_id(item_id_array, item_info);

	// Empty arrays 
	// name: item's name 
	// profit_vs_sell: the sell value of the item (for whatever salvage kit)
	var copper_fed = [];
	var runecrafter = [];
	var silver_fed = [];

	// Put values into the arrays
	// Takes the array of item_name[i] for the names
	// Takes the array of item_c[i] for info on the items 
	function get_name_and_sell_values_copper(array){
		for (i = 0; i < array.length; i++){
			copper_fed[i] = {
				name: item_name[i], 
				value: item_c[i].value, 
				profit_vs_sell: item_c[i].profit_vs_sell,
				profit_vs_buy: item_c[i].profit_vs_buy
			};
			
		}
		return copper_fed;
	}

	function get_name_and_sell_values_rune(array){
		for (i = 0; i < array.length; i++){
			runecrafter[i] = {
				name: item_name[i], 
				value: item_r[i].value, 
				profit_vs_sell: item_r[i].profit_vs_sell,
				profit_vs_buy: item_r[i].profit_vs_buy
			};
			
		}
		return runecrafter;
	}
	function get_name_and_sell_values_silver(array){
		for (i = 0; i < array.length; i++){
			silver_fed[i] = {
				name: item_name[i], 
				value: item_s[i].value, 
				profit_vs_sell: item_s[i].profit_vs_sell,
				profit_vs_buy: item_s[i].profit_vs_buy
			};
			
		}
		return silver_fed;
	}
	get_name_and_sell_values_copper(item_id_array);
	get_name_and_sell_values_rune(item_id_array);
	get_name_and_sell_values_silver(item_id_array);
	
	// Table to place the values in the HTML + empty variable to place the HTML
	const item_sell_tableBody = document.getElementById('salvage-sell-table');
	const item_buy_tableBody = document.getElementById('salvage-buy-table');
	const item_value_tableBody = document.getElementById('salvage-value-table');

	let item_sell_HTML = '';
	let item_buy_HTML = '';
	let item_value_HTML = '';


	// array = The array of values that will be formatted
	// array_info = The array of information of the items/values such as icons 
	// callback = type of callback for the array such as: 
	//			  .profit_vs_sell 
	//			  .profit_vs_buy
	// dataHTML = Empty HTML that will get filled to a table
	// table_body = The table that the data will go into
	function get_formatted_item(array_copper, array_rune, array_silver, array_info, callback, dataHTML, table_body){
		for (i = 0; i < array_copper.length; i++){
			var item_icon = array_info[i].icon;
			var amount_c = 0,
				amount_r = 0,
				amount_s = 0;

			if (callback == 'profit_vs_sell'){
				amount_c = Math.floor(array_copper[i].profit_vs_sell);
				amount_r = Math.floor(array_rune[i].profit_vs_sell);
				amount_s = Math.floor(array_silver[i].profit_vs_sell);
			} else if (callback == 'profit_vs_buy'){
				amount_c = Math.floor(array_copper[i].profit_vs_buy);
				amount_r = Math.floor(array_rune[i].profit_vs_buy);
				amount_s = Math.floor(array_silver[i].profit_vs_buy);
			} else if (callback == 'value'){
				amount_c = Math.floor(array_copper[i].value);
				amount_r = Math.floor(array_rune[i].value);
				amount_s = Math.floor(array_silver[i].value);
			}

			if (amount_c > 0 && amount_c > amount_r && amount_c > amount_s){
				choice = 'Copper-Fed';
			} else if (amount_r > 0 && amount_r > amount_c && amount_r > amount_s){
				choice = "Runecrafter's"; 
			} else if (amount_s > 0 && amount_s > amount_r && amount_s > amount_c){
				choice = "Silver-Fed";
			} else {
				choice = "TP";
			}

			var negative_c = false,
				negative_r = false,
				negative_s = false;

			var negative_symbol_c = '',
				negative_symbol_r = '',
				negative_symbol_s = '';

			var gold_c = 0,
				gold_r = 0,
				gold_s = 0;

			var silver_c = 0,
				silver_r = 0,
				silver_s = 0;

			var copper_c = 0,
				copper_r = 0,
				copper_s = 0;

			var copperHTML_c = ``, 
				copperHTML_r = ``,
				copperHTML_s = ``;

			var silverHTML_c = ``,
				silverHTML_r = ``,
				silverHTML_s = ``;

			var goldHTML_c = ``,
				goldHTML_r = ``,
				goldHTML_s = ``;

			var color_c,
				color_r,
				color_s;

			// Whether or not to salvage or sell to TP
			var choice; 

			// COPPER-FED
			if (amount_c < 0){
				amount_c = amount_c * -1; 
				negative_c = true;
			}

			if (amount_c > 0){ 
				copper_c = (amount_c % 100);
				amount_c = Math.floor(amount_c/100);

				if (copper_c >= 10){
					copperHTML_c = ` ${copper_c} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML_c = " 0"+`${copper_c} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				}
				if (copper_c == 100){
					copper_c = 0;
					amount_c++;
				} 
			}
			if (amount_c > 0){
				silver_c = amount_c % 100; 
				amount_c = Math.floor(amount_c / 100);

				if (silver_c >= 10){
					silverHTML_c = ` ${silver_c}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML_c = " 0"+`${silver_c} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver_c == 100){
					silver_c = 0;
					amount_c++;
				}
			}
			if (amount_c >= 10){
				gold_c = amount_c;
				goldHTML_c = ` ${gold_c} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			}

			if (negative_c == true){
				negative_symbol_c = ' -';
				if (gold_c > 0){
					goldHTML_c = `${negative_symbol_c}${goldHTML_c}`;
				} else {
					goldHTML_c = ``;
					if (silver_c > 0){
						silverHTML_c = `${negative_symbol_c}${silverHTML_c}`;
					} else {
						silverHTML_c = ``;
						if (copper_c > 0){
							copperHTML_c = `${negative_symbol_c}${copperHTML_c}`;
						} else {
							copperHTML_c = ``;
						} 
					}
				} 
			} 

			// RUNECRAFTER'S
			if (amount_r < 0){
				amount_r = amount_r * -1; 
				negative_r = true;
			}

			if (amount_r > 0){ 
				copper_r = (amount_r % 100);
				amount_r = Math.floor(amount_r/100);

				if (copper_r >= 10){
					copperHTML_r = ` ${copper_r} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML_r = " 0"+`${copper_r} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				}
				if (copper_r == 100){
					copper_r = 0;
					amount_r++;
				} 
			}
			if (amount_r > 0){
				silver_r = amount_r % 100; 
				amount_r = Math.floor(amount_r / 100);

				if (silver_r >= 10){
					silverHTML_r = ` ${silver_r}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML_r = " 0"+`${silver_r} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver_r == 100){
					silver_r = 0;
					amount_r++;
				}
			}
			if (amount_r >= 10){
				gold_r = amount_r;
				goldHTML_r = ` ${gold_r} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			}

			if (negative_r == true){
				negative_symbol_r = ' -';
				if (gold_r > 0){
					goldHTML_r = `${negative_symbol_r}${goldHTML_r}`;
				} else {
					goldHTML_r = ``;
					if (silver_r > 0){
						silverHTML_r = `${negative_symbol_r}${silverHTML_r}`;
					} else {
						silverHTML_r = ``;
						if (copper_r > 0){
							copperHTML_r = `${negative_symbol_r}${copperHTML_r}`;
						} else {
							copperHTML_r = ``;
						} 
					}
				} 
			}

			// SILVERFED
			if (amount_s < 0){
				amount_s = amount_s * -1; 
				negative_s = true;
			}

			if (amount_s > 0){ 
				copper_s = (amount_s % 100);
				amount_s = Math.floor(amount_s/100);

				if (copper_s >= 10){
					copperHTML_s = ` ${copper_s} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML_s = " 0"+`${copper_s} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				}
				if (copper_s == 100){
					copper_s = 0;
					amount_s++;
				} 
			}
			if (amount_s > 0){
				silver_s = amount_s % 100; 
				amount_s = Math.floor(amount_s / 100);

				if (silver_s >= 10){
					silverHTML_s = ` ${silver_s}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML_s = " 0"+`${silver_s} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver_s == 100){
					silver_s = 0;
					amount_s++;
				}
			}
			if (amount_s >= 10){
				gold_s = amount_s;
				goldHTML_s = ` ${gold_s} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			}

			if (negative_s == true){
				negative_symbol_s = ' -';
				if (gold_s > 0){
					goldHTML_s = `${negative_symbol_s}${goldHTML_s}`;
				} else {
					goldHTML_s = ``;
					if (silver_s > 0){
						silverHTML_s = `${negative_symbol_s}${silverHTML_s}`;
					} else {
						silverHTML_s = ``;
						if (copper_s > 0){
							copperHTML_s = `${negative_symbol_s}${copperHTML_s}`;
						} else {
							copperHTML_s = ``;
						} 
					}
				} 
			}

			// Color 
			switch (negative_c){
				case true:
				color_c = 'rgba(215, 86, 86, 0.7)'; 
				break;

				case false:
				color_c = 'rgba(86, 215, 109, 0.7)';
				break;
			}
			switch (negative_r){
				case true:
				color_r = 'rgba(215, 86, 86, 0.7)'; 
				break;

				case false:
				color_r = 'rgba(86, 215, 109, 0.7)';
				break;
			}
			switch (negative_s){
				case true:
				color_s = 'rgba(215, 86, 86, 0.7)'; 
				break;

				case false:
				color_s = 'rgba(86, 215, 109, 0.7)';
				break;
			}

			dataHTML += `
			<tr>
				<td><img style = "width: 100%; display: block;" src = ${item_icon}></td>
				<td>${array_copper[i].name}</td>
				<td style = "background-color: ${color_c};">${goldHTML_c}${silverHTML_c}${copperHTML_c}</td>
				<td style = "background-color: ${color_r};">${goldHTML_r}${silverHTML_r}${copperHTML_r}</td>
				<td style = "background-color: ${color_s};">${goldHTML_s}${silverHTML_s}${copperHTML_s}</td>
				<td>${choice}</td>
			</tr>`;
		}
		table_body.innerHTML = dataHTML; 
	}

	get_formatted_item(copper_fed, runecrafter, silver_fed, item_info, 'profit_vs_sell', item_sell_HTML, item_sell_tableBody);
	//get_formatted_item(copper_fed, runecrafter, silver_fed, item_info, 'profit_vs_buy', item_buy_HTML, item_buy_tableBody);
	get_formatted_item(copper_fed, runecrafter, silver_fed, item_info, 'value', item_value_HTML, item_value_tableBody);


}

// Buttons
function sell_button(){
	var div = document.getElementById('sell-uni'),
		other_div = document.getElementById('value-uni'),
		item_div = document.getElementById('sell-item'),
		item_div_2 = document.getElementById('value-item');

	div.style.display = 'block';
	other_div.style.display = 'none';
	item_div.style.display = 'block';
	item_div_2.style.display = 'none';
}
/*
function buy_button(){
	var div = document.getElementById('buy'),
		other_div = document.getElementById('sell');
		other_div_2 = document.getElementById('value');

	div.style.display = 'block';
	other_div.style.display = 'none';
	other_div_2.style.display = 'none';
}*/
function value_button(){
	var div = document.getElementById('sell-uni'),
		other_div = document.getElementById('value-uni'),
		item_div = document.getElementById('sell-item'),
		item_div_2 = document.getElementById('value-item');

	div.style.display = 'none';
	other_div.style.display = 'block';
	item_div.style.display = 'none';
	item_div_2.style.display = 'block';
}