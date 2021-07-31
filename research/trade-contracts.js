async function getTradeContracts(){
	//Grabs the JSON URL file from the Google App Script 
	const api_url = 'https://script.google.com/macros/s/AKfycbyUL-M1CDtoCVM3WY_egWi-ikiWYqVA-0HDYxTIKwYwM-YHBQCMOlcE/exec';
	const response = await fetch(api_url);
	const data = await response.json();

	var ss = data.spreadsheet; 

	// GW2 API for listing prices
	const api_gw2 = "https://api.guildwars2.com/v2/commerce/prices?ids=19679,19680,19681,19682,19683,19684,19685,19686,19687,19688,19718,19719,19723,19724,19726,19727,19728,19729,19730,19731,19732,19739,19741,19743,19745,19748,24272,24273,24274,24275,24276,24277,24278,24279,24280,24281,24282,24283,24284,24285,24286,24287,24288,24289,24290,24291,24292,24293,24294,24295,24296,24297,24298,24299,24300,24341,24342,24343,24344,24345,24346,24347,24348,24349,24350,24351,24352,24353,24354,24355,24356,24357,24358,24363,74202,74328";
	const response_gw2 = await fetch(api_gw2);
	const gw2 = await response_gw2.json();

	console.log(data.spreadsheet);

	var initTotal,
		finalTotal;

	var crate = {
		info: [
				// Cowrie
			{   // [0]
				name: "Cowrie League Cloth Crate", 
				icon: "https://render.guildwars2.com/file/B63C5CCFCB1FCB134F24524F0FCC9D37B4B7942B/1766435.png",
				total: 0,
			},
			{   // [1]
				name: "Cowrie League Leather Crate", 
				icon: "https://render.guildwars2.com/file/9EAC2CA3A23D030C30671907C5307B57DE752B72/1766437.png",
				total: 0,
			},
			{	// [2]
				name: "Cowrie League Metal Crate",
				icon: "https://render.guildwars2.com/file/0EE25DC40649931EDAB85697E72EC480FE4BEED1/1766436.png", 
				total: 0,
			},
			{	// [3]	
				name: "Cowrie League Trophy Crate", 
				icon: "https://render.guildwars2.com/file/2C1E57C65F3AE00ADAF5E2BDA1C404A5EB74E79B/1766438.png",
				total: 0,
			},
			{	// [4]
				name: "Cowrie League Wood Crate", 
				icon: "https://render.guildwars2.com/file/5E2E0F05A7796F033050053E43AA2942D4061424/1766439.png",
				total: 0,
			},
				// Hamaseen
			{	// [5]
				name: "Hamaseen Cloth Crate", 
				icon: "https://render.guildwars2.com/file/95517860BCED0640DAB13735487F431FFAFD7D12/1766445.png",
				total: 0,
			},
			{	// [6]
				name: "Hamaseen Leather Crate",
				icon: "https://render.guildwars2.com/file/3C4CAC04192363D62DCFE2B10A0BB845A42203C0/1766447.png", 
				total: 0,
			},
			{	// [7]
				name: "Hamaseen Ingot Crate",
				icon: "https://render.guildwars2.com/file/C79951E93F935228CBE8616E1712941F656F94B9/1766446.png", 
				total: 0,
			},
			{	// [8]
				name: "Hamaseen Trophy Crate",
				icon: "https://render.guildwars2.com/file/16FAC119B3AC67DD954D2966AFBC01F3294075FF/1766448.png", 
				total: 0,
			},
			{	// [9]
				name: "Hamaseen Wood Crate",
				icon: "https://render.guildwars2.com/file/5CB562DAA880F8AF0105BEE4D2F4DE0375ACD725/1766444.png", 
				total: 0,
			},
				// House of Daoud
			{	// [10]
				name: "House of Daoud Cloth Crate",
				icon: "https://render.guildwars2.com/file/C198AB3F23569650D47EAD240E42ADD7C866CEE0/1766440.png", 
				total: 0,
			},
			{	// [11]
				name: "House of Daoud Leather Crate",
				icon: "https://render.guildwars2.com/file/AC7502F4571B5002B0C07E0EE5CC3209A636E554/1766442.png", 
				total: 0,
			},
			{	// [12]
				name: "House of Daoud Metal Crate",
				icon: "https://render.guildwars2.com/file/1CCF3FA691E325DD6B0E63B314146D594BCED2DB/1766441.png", 
				total: 0,
			},
			{	// [13]
				name: "House of Daoud Trophy Crate",
				icon: "https://render.guildwars2.com/file/9325274F08BF10683AD7D5CAC5505195F3530215/1766443.png", 
				total: 0,
			},
			{	// [14]
				//function: function() { total_crate(crate.info[14]); },
				name: "House of Daoud Wood Crate", 
				icon: "https://render.guildwars2.com/file/5CB562DAA880F8AF0105BEE4D2F4DE0375ACD725/1766444.png",
				total: 0,
			},
		]
	};

	const tableBody = document.getElementById('tc-tableBody');
	var tableName = document.getElementById("tc");

	let dataHTML = '';

	// Get the total for a particular crate
	function total_crate(array){
		// Run through spreadsheet json
		for (i = 0; i < ss.length; i++){
			// Match the array's name with the crate to only get those values
			if (array.name == ss[i].crate){
				// Compare the IDs of the matches and get the totals from the sell price and drop rate
				for (j = 0; j < gw2.length; j++){
					if (ss[i].id == gw2[j].id){
						initTotal = (ss[i].dr * gw2[j].sells.unit_price) * .85;
						array.total = array.total + initTotal;
					}
				}
			}
		}
		return array.total; 
	}

	// Set all the totals for the caches in the array
	for (k = 0; k < crate.info.length; k++){
		total_crate(crate.info[k]);

		dataHTML += `<tr>
			<td><img style = "width: 100%; display: block;" src = ${crate.info[k].icon}></td>
			<td>${crate.info[k].name}</td>
			<td>${format_values_subpage(crate.info[k].total / 50).silver}${format_values_subpage(crate.info[k].total / 50).copper}</td>
			<td>${format_values_subpage(crate.info[k].total).silver}${format_values_subpage(crate.info[k].total).copper}</td>
			
			</tr>`;


		tableBody.innerHTML = dataHTML;
	}

	sortTableByPrice('tc', 2);



	

}

