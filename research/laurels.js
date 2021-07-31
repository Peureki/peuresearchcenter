
async function getLaurels(choice){
	// dr = drop rate, multiplier
	// Updated 6/8/21
	var bags = {
		// T1
		tinyCrafting: [
			{
				name: "Bone Chip",
				id: 24342,
				icon: "https://render.guildwars2.com/file/B147379DFC5430E207FCB742804E199EDF727719/1766400.png",
				dr: 1.3943,
			},
			{
				name: "Pile of Glittering Dust",
				id: 24272,
				icon: "https://render.guildwars2.com/file/0A5B3C374C1A7F07BA3D06162857D1599B01F91D/66988.png",
				dr: 1.5800,
			},
			{
				name: "Tiny Claw",
				id: 24346,
				icon: "https://render.guildwars2.com/file/386E92E109C9937C4477E5F82A0291AA05D44A92/66992.png",
				dr: 1.3257,
			},
			{
				name: "Tiny Fang",
				id: 24352,
				icon: "https://render.guildwars2.com/file/0394D7C230A11502C4CF07003B66BC64F4F7C7C2/65893.png",
				dr: 0.7600,
			},
			{
				name: "Tiny Scale",
				id: 24284,
				icon: "https://render.guildwars2.com/file/129C3E6801966212018033D29B23ABAF5A712615/66940.png",
				dr: 1.5286,
			},
			{
				name: "Tiny Totem",
				id: 24296,
				icon: "https://render.guildwars2.com/file/7AE87D4DE89F16B7B6E1EF6D133F3B28AA3971C9/66951.png",
				dr: 1.4143,
			},
			{
				name: "Tiny Venom Sac",
				id: 24278,
				icon: "https://render.guildwars2.com/file/C40532E544D99B9A92B703131409390EF36E513A/66934.png",
				dr: 1.4914,
			},
			{
				name: "Vial of Weak Blood",
				id: 24290,
				icon: "https://render.guildwars2.com/file/C0FB13FB0EDEA8E56676A05F80E3FDC5E92E98E1/66945.png",
				dr: 1.3029,
			},
		],
		smallCrafting: [
			{
				name: "Bone Shard",
				id: 24343,
				icon: "",
				dr: 0.7971,
			},
			{
				name: "Pile of Shimmering Dust",
				id: 24273,
				icon: "",
				dr: 0.8743,
			},
			{
				name: "Small Claw",
				id: 24347,
				icon: "",
				dr: 1.2286,
			},
			{
				name: "Small Fang",
				id: 24353,
				icon: "",
				dr: 1.1657,
			},
			{
				name: "Small Scale",
				id: 24285,
				icon: "",
				dr: 1.0771,
			},
			{
				name: "Small Totem",
				id: 24297,
				icon: "",
				dr: 1.2743,
			},
			{
				name: "Small Venom Sac",
				id: 24279,
				icon: "",
				dr: 1.1457,
			},
			{
				name: "Vial of Thin Blood",
				id: 24291,
				icon: "",
				dr: 1.1086,
			},
		],
		lightCrafting: [
			{
				name: "Bone",
				id: 24344,
				icon: "",
				dr: 1.8314,
			},
			{
				name: "Claw",
				id: 24348,
				icon: "",
				dr: 1.8457,
			},
			{
				name: "Fang",
				id: 24354,
				icon: "",
				dr: 1.9971,
			},
			{
				name: "Pile of Radiant Dust",
				id: 24274,
				icon: "",
				dr: 1.8200,
			},
			{
				name: "Scale",
				id: 24286,
				icon: "",
				dr: 1.8457,
			},
			{
				name: "Totem",
				id: 24298,
				icon: "",
				dr: 1.8486,
			},
			{
				name: "Venom Sac",
				id: 24280,
				icon: "",
				dr: 1.8000,
			},
			{
				name: "Vial of Blood",
				id: 24292,
				icon: "",
				dr: 1.9886,
			},
		],
		mediumCrafting: [
			{
				name: "Engraved Totem",
				id: 24363,
				icon: "",
				dr: 1.8029,
			},
			{
				name: "Full Venom Sac",
				id: 24281,
				icon: "",
				dr: 1.9057,
			},
			{
				name: "Heavy Bone",
				id: 24345,
				icon: "",
				dr: 1.8029,
			},
			{
				name: "Pile of Luminous Dust",
				id: 24275,
				icon: "",
				dr: 2.0971,
			},
			{
				name: "Sharp Claw",
				id: 24349,
				icon: "",
				dr: 1.8000,
			},
			{
				name: "Sharp Fang",
				id: 24355,
				icon: "",
				dr: 1.9457,
			},
			{
				name: "Smooth Scale",
				id: 24287,
				icon: "",
				dr: 1.8486,
			},
			{
				name: "Vial of Thick Blood",
				id: 24293,
				icon: "",
				dr: 1.8943,
			},
		],
		largeCrafting: [
			{
				name: "Intricate Totem",
				id: 24299,
				icon: "",
				dr: 1.8450,
			},
			{
				name: "Large Bone",
				id: 24341,
				icon: "",
				dr: 1.8600,
			},
			{
				name: "Large Claw",
				id: 24350,
				icon: "",
				dr: 1.9200,
			},
			{
				name: "Large Fang",
				id: 24356,
				icon: "",
				dr: 1.8100,
			},
			{
				name: "Large Scale",
				id: 24288,
				icon: "",
				dr: 1.6500,
			},
			{
				name: "Pile of Incandescent Dust",
				id: 24276,
				icon: "",
				dr: 2.1650,
			},
			{
				name: "Potent Venom Sac",
				id: 24282,
				icon: "",
				dr: 1.8850,
			},
			{
				name: "Vial of Potent Blood",
				id: 24294,
				icon: "",
				dr: 1.9700,
			},
		],
		heavyCrafting: [
			{
				name: "Ancient Bone",
				id: 24358,
				icon: "",
				dr: 0.3743,
			},
			{
				name: "Armored Scale",
				id: 24289,
				icon: "",
				dr: 0.3789,
			},
			{
				name: "Elaborate Totem",
				id: 24300,
				icon: "",
				dr: 0.3764,
			},
			{
				name: "Pile of Crystalline Dust",
				id: 24277,
				icon: "",
				dr: 0.3793,
			},
			{
				name: "Powerful Venom Sac",
				id: 24283,
				icon: "",
				dr: 0.3735,
			},
			{
				name: "Vial of Powerful Blood",
				id: 24295,
				icon: "",
				dr: 0.3758,
			},
			{
				name: "Vicious Claw",
				id: 24351,
				icon: "",
				dr: 0.3754,
			},
			{
				name: "Vicious Fang",
				id: 24357,
				icon: "",
				dr: 0.3744,
			},
		],
	}; 

	var matPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=24358,24289,24300,24277,24283,24295,24351,24357,24299,24341,24350,24356,24288,24276,24282,24294,24292,24348,24354,24344,24286,24280,24298,24274,24345,24293,24355,24281,24349,24275,24287,24363,24343,24273,24347,24353,24285,24297,24279,24291,24342,24272,24346,24352,24284,24296,24278,24290";
	const response1 = await fetch(matPricesAPI);
	const matPrices = await response1.json();

	// Go through both json of the api prices and the name of the materials
	// When ids match, fuse the prices and names together
	for (i = 0; i < matPrices.length; i++){
		addPrices(bags.tinyCrafting);
		addPrices(bags.smallCrafting);
		addPrices(bags.lightCrafting);
		addPrices(bags.mediumCrafting);
		addPrices(bags.largeCrafting);
		addPrices(bags.heavyCrafting);
	}

	function addPrices(array){
		for (j = 0; j < array.length; j++){
			if (matPrices[i].id == array[j].id){
				array[j].buy = matPrices[i].buys.unit_price; 
				array[j].sell = matPrices[i].sells.unit_price;
			}
		}
	}

	var tableBody = document.getElementById('laurels-tableBody');
	var html = ``,
		htmlProof = ``;
	var addItem, valueItem = 0, valueCurrency, profit, tax = 0.85, fee = 0, choiceValue;
	var backgroundColor, containerName,
		isNegCount = 0; // if all profit margins are neg, then this would be true. Otherwise, if one is pos, then this is false

	
	// Total all values of container or bag items
	function aContainer(array){
		addItem = 0;
		valueItem = 0;

		for (i = 0; i < array.length; i++){
			switch(choice){
				case "Sell Price": choiceValue = array[i].sell; break;
				case "Buy Price": choiceValue = array[i].buy; break;
				default: choiceValue = array[i].sell; break;
			}
			addItem = array[i].dr * choiceValue; 
			valueItem = valueItem + addItem;
		}
		valueCurrency = (valueItem * tax) - fee;

		return valueCurrency;
	}
	// Go through each total and calculate the value or per currency
	for (j = 0; j < 6; j++){
		switch(j){
			case 0: valueCurrency = aContainer(bags.tinyCrafting);
				containerName = "Tiny Crafting Bag"; break;
			case 1: valueCurrency = aContainer(bags.smallCrafting);
				containerName = "Small Crafting Bag"; break;
			case 2: valueCurrency = aContainer(bags.lightCrafting);
				containerName = "Light Crafting Bag"; break;
			case 3: valueCurrency = aContainer(bags.mediumCrafting);
				containerName = "Medium Crafting Bag"; break;
			case 4: valueCurrency = aContainer(bags.largeCrafting);
				containerName = "Large Crafting Bag"; break;
			case 5: valueCurrency = aContainer(bags.heavyCrafting);
				containerName = "Heavy Crafting Bag"; break;
		}
		if (valueCurrency < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'}
		html += `
			<tr>
				<td> ${containerName} </td>
				<td style = "background-color: ${backgroundColor};" > ${format_values_subpage(valueCurrency).gold + format_values_subpage(valueCurrency).silver + format_values_subpage(valueCurrency).copper} </td> 
			</tr>

		`;	
	}


	tableBody.innerHTML = html; 
	sortTableByPrice('laurels-table', 1);
}

function showLaurels(resultChoice){
	var resultValue = document.getElementById(resultChoice).value; 
	getLaurels(resultValue);
}