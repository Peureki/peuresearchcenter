// Updated 5/22/2021
async function getVolatile(choice){
	// dr = drop rate, multiplier
	var shipments = {
		trophy: [
			{
				name: "Ancient Bone",
				id: 24358,
				icon: "https://render.guildwars2.com/file/0EE45FBB1E1A004600E9BAA7097830B2DE08587D/66828.png",
				dr: 0.968,
			},
			{
				name: "Armored Scale",
				id: 24289,
				icon: "https://render.guildwars2.com/file/7061C82F4F9D0C585742F545C40A0F06BE0154DC/66527.png",
				dr: 1.125,
			},
			{
				name: "Congealed Putrescence",
				id: 83757,
				icon: "https://render.guildwars2.com/file/7EE737D8FFC9B1DB04D4AF2C973150C92897E2A5/1767537.png",
				dr: 0.188, 
			},
			{
				name: "Elaborate Totem",
				id: 24300, 
				icon: "https://render.guildwars2.com/file/C1ABF9082901FC3CEABC3138CBCCA1DAD5D41812/66955.png",
				dr: 1.006,
			},
			{
				name: "Eye of Kormir",
				id: 83103, 
				icon: "https://render.guildwars2.com/file/F327CD6E33A54C69F19F29DAA7C7D1A1FF4203D6/1767535.png",
				dr: 0.194,
			},
			{
				name: "Intricate Totem",
				id: 24299, 
				icon: "https://render.guildwars2.com/file/4DBC299E4B036A0DD3119A0F06BACA147C03B5C7/66954.png",
				dr: 4.998,
			},
			{
				name: "Large Bone",
				id: 24341, 
				icon: "https://render.guildwars2.com/file/13F077BA5D5C6324CFCB0A2E39050F24A441190B/66987.png",
				dr: 5.001,
			},
			{
				name: "Large Claw",
				id: 24350, 
				icon: "https://render.guildwars2.com/file/3A4D64F4CE2951F358DE0AFCEA6551050FB4B4A7/66420.png",
				dr: 4.908,
			},
			{
				name: "Large Fang",
				id: 24356, 
				icon: "https://render.guildwars2.com/file/DED4F23E44430C2BE1C0D491145A4946FC7D7C6F/223793.png",
				dr: 5.022,
			},
			{
				name: "Large Scale",
				id: 24288, 
				icon: "https://render.guildwars2.com/file/F94ECFFF0FA9C321C108DA34E777B27B0AC9D5F8/66944.png",
				dr: 4.953,
			},
			{
				name: "Pile of Crystalline Dust",
				id: 24277, 
				icon: "https://render.guildwars2.com/file/080D00670558CD9E580D5662030394B2206E92A6/434537.png",
				dr: 1.008,
			},
			{
				name: "Pile of Incandescent Dust",
				id: 24276, 
				icon: "https://render.guildwars2.com/file/3501C2BBADF95BE5F14E31484850E851EFCA33CB/434536.png",
				dr: 4.998,
			},
			{
				name: "Potent Vemon Sac",
				id: 24282,
				icon: "https://render.guildwars2.com/file/EA6A4C91F561EC5667947AEFE4CA436D0631CBE3/66938.png",
				dr: 4.924,
			},
			{
				name: "Powerful Venom Sac",
				id: 24283,
				icon: "https://render.guildwars2.com/file/543EC37900EA2A57E77FA891193A48D66AA224AB/66939.png",
				dr: 1.233,
			},
			{
				name: "Vial of Potent Blood",
				id: 24294,
				icon: "https://render.guildwars2.com/file/99AAE49EABF9A2415940FDB83CA1CE5E6E256020/66949.png",
				dr: 5.005,
			},
			{
				name: "Vial of Powerful Blood",
				id: 24295,
				icon: "https://render.guildwars2.com/file/1A930A6A7B5B01EAB4CB36E79014C12B500BF6B3/66950.png",
				dr: 0.961,
			},
			{
				name: "Vicious Claw",
				id: 24351,
				icon: "https://render.guildwars2.com/file/043E2BBA270F381870F1B45E7C09C098CAFE3D14/66996.png",
				dr: 1.037,
			},
			{
				name: "Vicious Fang",
				id: 24357,
				icon: "https://render.guildwars2.com/file/F2050EE1A7A43EDCDCB1E971FDA608AD0566E4DA/66998.png",
				dr: 1.016,
			},
		],
		leather: [
			{
				name: "Coarse Leather Section",
				id: 19730,
				icon: "https://render.guildwars2.com/file/0BDAA40E3795930BBF3DC5ACE366ABAE2D5BBFB2/65947.png",
				dr: 8.255,
			},
			{
				name: "Hardened Leather Section",
				id: 19732,
				icon: "https://render.guildwars2.com/file/C4600FB8F97F2618F4DFA2CE9FD2C669FAE9DE6F/65949.png",
				dr: 8.044,
			},
			{
				name: "Rawhide Leather Section",
				id: 19719,
				icon: "https://render.guildwars2.com/file/0CB8030AD26C3C7563B10E5EC397490F991ED795/65940.png",
				dr: 7.731,
			},
			{
				name: "Rugged Leather Section",
				id: 19731,
				icon: "https://render.guildwars2.com/file/73E9DCD5D9E50BBE3DDC97B8120E0EB9BDC590E6/65948.png",
				dr: 8.357,
			},
			{
				name: "Thick Leather Section",
				id: 19729,
				icon: "https://render.guildwars2.com/file/CC3A2CAADBB2F2B13B1E70079E7E207B08D16E93/65946.png",
				dr: 59.734,
			},
			{
				name: "Thin Leather Section",
				id: 19728,
				icon: "https://render.guildwars2.com/file/ACB203A4381C7B690A7C9BAA2EFEBD01A418E3AD/65945.png",
				dr: 7.684,
			},
		],
		cloth: [
			{
				name: "Cotton Scrap",
				id: 19741,
				icon: "https://render.guildwars2.com/file/3C013701E6252F3F100D2559BE4E47546CE1E82F/65957.png",
				dr: 9.552,
			},
			{
				name: "Gossamer Scrap",
				id: 19745,
				icon: "https://render.guildwars2.com/file/0CB2040408D0789690575FFE3532F3C34B693C6F/340417.png",
				dr: 8.657,
			},
			{
				name: "Jute Scrap",
				id: 19718,
				icon: "https://render.guildwars2.com/file/A03B07F2A625FE01B01A59042BDD06C7C5AC30D2/65939.png",
				dr: 8.657,
			},
			{
				name: "Linen Scrap",
				id: 19743,
				icon: "https://render.guildwars2.com/file/28536CD63C63047DA7DA9F7923923461DCFC5860/65958.png",
				dr: 6.119,
			},
			{
				name: "Silk Scrap",
				id: 19748,
				icon: "https://render.guildwars2.com/file/021DA825F2092327B1C6BC09EC77BD5DE5B4770D/65961.png",
				dr: 58.657,
			},
			{
				name: "Wool Scrap",
				id: 19739,
				icon: "https://render.guildwars2.com/file/4F4E176F0B5B040F690AB7AE7B7A6844C83F2D0D/65956.png",
				dr: 8.358,
			},
		],
		wood: [
			{
				name: "Ancient Wood Log",
				id: 19725,
				icon: "https://render.guildwars2.com/file/5C999770AB7CC1F85D270A50C205673DF8B6E104/220467.png",
				dr: 8.664,
			},
			{
				name: "Elder Wood Log",
				id: 19722,
				icon: "https://render.guildwars2.com/file/205871B734054D0206986FB44D6DC5425E572B0B/220465.png",
				dr: 61.335,
			},
			{
				name: "Green Wood Log",
				id: 19724,
				icon: "https://render.guildwars2.com/file/DAF50142ADC06FB11FBC02F8FFEF504F4E674047/65942.png",
				dr: 6.794,
			},
			{
				name: "Hard Wood Log",
				id: 19724,
				icon: "https://render.guildwars2.com/file/576ED6A37FA1130DDD230D5D0E0D80484E25260C/220466.png",
				dr: 6.794,
			},
			{
				name: "Seasoned Wood Log",
				id: 19727,
				icon: "https://render.guildwars2.com/file/66BEAC3E5D0EDA160AA4A7942D0C46C27DC0E7AA/65944.png",
				dr: 7.863,
			},
			{
				name: "Soft Wood Log",
				id: 19726,
				icon: "https://render.guildwars2.com/file/AB6C5501209B91D9B890B1F84B29BC0142CB59D8/65943.png",
				dr: 7.634,
			},
		],
		metal: [
			{
				name: "Copper Ore",
				id: 19697,
				icon: "https://render.guildwars2.com/file/6E17C5A65955239640743E48B30A3425FACA5D02/65925.png",
				dr: 8.434,
			},
			{
				name: "Iron Ore",
				id: 19699,
				icon: "https://render.guildwars2.com/file/C1FD07F60E0B74C497761C1C014D03E402E60C6F/65927.png",
				dr: 15.542,
			},
			{
				name: "Platinum Ore",
				id: 19702,
				icon: "https://render.guildwars2.com/file/413D7EE8CE04C0BC07C31A4B381EB6344150F849/65930.png",
				dr: 7.711,
			},
			{
				name: "Mithril Ore",
				id: 19700,
				icon: "https://render.guildwars2.com/file/E90FE803CDC205CDEB13FE03694D4D04757ACF5D/65928.png",
				dr: 60.723,
			},
			{
				name: "Orichalcum Ore",
				id: 19701,
				icon: "https://render.guildwars2.com/file/A6E2C82153BA684E2D05D3FCA09F3E02431366ED/220461.png",
				dr: 7.590,
			},
		],
	};

	var matPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=19741,19745,19718,19743,19748,19739,19725,19722,19723,19724,19727,19726,19730,19732,19719,19731,19729,19728,19697,19699,19702,19700,19701,24358,24289,83757,24300,83103,24299,24341,24350,24356,24288,24277,24276,24282,24283,24294,24295,24351,24357";
	const response1 = await fetch(matPricesAPI);
	const matPrices = await response1.json();

	// Go through both json of the api prices and the name of the materials
	// When ids match, fuse the prices and names together
	for (i = 0; i < matPrices.length; i++){
		addPrices(shipments.trophy);
		addPrices(shipments.leather);
		addPrices(shipments.cloth);
		addPrices(shipments.wood);
		addPrices(shipments.metal);
	}

	function addPrices(array){
		for (j = 0; j < array.length; j++){
			if (matPrices[i].id == array[j].id){
				array[j].buy = matPrices[i].buys.unit_price; 
				array[j].sell = matPrices[i].sells.unit_price;
			}
		}
	}

	var tableBody = document.getElementById('vm-tableBody');
	var html = ``;
	var addItem, valueItem = 0, valueShipment, valueCurrency, profit, tax = 0.85, fee = 10000, choiceValue;
	var backgroundColor, shipmentName,
		isNegCount = 0; // if all profit margins are neg, then this would be true. Otherwise, if one is pos, then this is false

	// Total all values of shipment items
	function aShipment(array){
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
		valueShipment = (valueItem * tax) - fee;

		return valueShipment;
	}
	// Go through each total and calculate the value or per currency
	for (j = 0; j < 5; j++){
		switch(j){
			case 0: valueShipment = aShipment(shipments.trophy); valueCurrency = valueShipment/250;
				shipmentName = "Trophy"; break;
			case 1: valueShipment = aShipment(shipments.leather); valueCurrency = valueShipment/250; 
				shipmentName = "Leather"; break;
			case 2: valueShipment = aShipment(shipments.cloth); valueCurrency = valueShipment/250; 
				shipmentName = "Cloth"; break;
			case 3: valueShipment = aShipment(shipments.wood); valueCurrency = valueShipment/250; 
				shipmentName = "Wood"; break; 
			case 4: valueShipment = aShipment(shipments.metal); valueCurrency = valueShipment/250; 
				shipmentName = "Metal"; break;
		}
		if (valueShipment < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'}
		html += `
			<tr>
				<td> ${shipmentName} </td>
				<td style = "background-color: ${backgroundColor};" > ${format_values_subpage(valueShipment).gold + format_values_subpage(valueShipment).silver + format_values_subpage(valueShipment).copper} </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(valueCurrency).gold + format_values_subpage(valueCurrency).silver + format_values_subpage(valueCurrency).copper} </td>
			</tr>

		`;	
	}
	tableBody.innerHTML = html; 
	sortTableByPrice('vm', 2);
}

// Updated 5/22/2021
async function getUnbound(choice){
	// dr = drop rate, multiplier
	var mistWarped = {
		packet: [
			{
				name: "Ancient Wood Log",
				id: 19725,
				icon: "https://render.guildwars2.com/file/5C999770AB7CC1F85D270A50C205673DF8B6E104/220467.png",
				dr: 0.064,
			},
			{
				name: "Bolt of Damask",
				id: 46741,
				icon: "https://render.guildwars2.com/file/7E7DA70B0EA3DB78CCB2F4FDA400A9BFEF0B0D6C/631489.png",
				dr: 0.007,
			},
			{
				name: "Coarse Leather Section",
				id: 19730,
				icon: "https://render.guildwars2.com/file/0BDAA40E3795930BBF3DC5ACE366ABAE2D5BBFB2/65947.png",
				dr: 0.169,
			},
			{
				name: "Copper Ore",
				id: 19697,
				icon: "https://render.guildwars2.com/file/6E17C5A65955239640743E48B30A3425FACA5D02/65925.png",
				dr: 0.044,
			},
			{
				name: "Cotton Scrap",
				id: 19741,
				icon: "https://render.guildwars2.com/file/3C013701E6252F3F100D2559BE4E47546CE1E82F/65957.png",
				dr: 0.154,
			},
			{
				name: "Deldrimor Steel Ingot",
				id: 46738,
				icon: "https://render.guildwars2.com/file/94DCAE59215C0096449906A81F202B0201FBA85B/631486.png",
				dr: 0.010,
			},
			{
				name: "Elder Wood Log",
				id: 19722,
				icon: "https://render.guildwars2.com/file/205871B734054D0206986FB44D6DC5425E572B0B/220465.png",
				dr: 0.106,
			},
			{
				name: "Elonian Leather Square",
				id: 46739,
				icon: "https://render.guildwars2.com/file/057F4DB327DB7F46490876E4D9D86E7C1D613C26/631487.png",
				dr: 0.011,
			},
			{
				name: "Gold Ore",
				id: 19698,
				icon: "https://render.guildwars2.com/file/D9C17CE765F921332DEBCA44681DFA2DA8586A36/65926.png",
				dr: 0.052,
			},
			{
				name: "Gossamer Scrap",
				id: 19745,
				icon: "https://render.guildwars2.com/file/0CB2040408D0789690575FFE3532F3C34B693C6F/340417.png",
				dr: 0.023,
			},
			{
				name: "Green Wood Log",
				id: 19723,
				icon: "https://render.guildwars2.com/file/DAF50142ADC06FB11FBC02F8FFEF504F4E674047/65942.png",
				dr: 0.050,
			},
			{
				name: "Hard Wood Log",
				id: 19724,
				icon: "https://render.guildwars2.com/file/576ED6A37FA1130DDD230D5D0E0D80484E25260C/220466.png",
				dr: 0.050,
			},
			{
				name: "Hardened Leather Section",
				id: 19732,
				icon: "https://render.guildwars2.com/file/C4600FB8F97F2618F4DFA2CE9FD2C669FAE9DE6F/65949.png",
				dr: 0.0764,
			},
			{
				name: "Iron Ore",
				id: 19699,
				icon: "https://render.guildwars2.com/file/C1FD07F60E0B74C497761C1C014D03E402E60C6F/65927.png",
				dr: 0.218,
			},
			{
				name: "Jute Scrap",
				id: 19718,
				icon: "https://render.guildwars2.com/file/A03B07F2A625FE01B01A59042BDD06C7C5AC30D2/65939.png",
				dr: 0.061,
			},
			{
				name: "Linen Scrap",
				id: 19743,
				icon: "https://render.guildwars2.com/file/28536CD63C63047DA7DA9F7923923461DCFC5860/65958.png",
				dr: 0.163,
			},
			{
				name: "Mithril Ore",
				id: 19700,
				icon: "https://render.guildwars2.com/file/E90FE803CDC205CDEB13FE03694D4D04757ACF5D/65928.png",
				dr: 0.121,
			},
			{
				name: "Orichalcum Ore",
				id: 19701,
				icon: "https://render.guildwars2.com/file/A6E2C82153BA684E2D05D3FCA09F3E02431366ED/220461.png",
				dr: 0.255,
			},
			{
				name: "Platinum Ore",
				id: 19702,
				icon: "https://render.guildwars2.com/file/413D7EE8CE04C0BC07C31A4B381EB6344150F849/65930.png",
				dr: 0.095,
			},
			{
				name: "Rawhide Leather Section",
				id: 19719,
				icon: "https://render.guildwars2.com/file/0CB8030AD26C3C7563B10E5EC397490F991ED795/65940.png",
				dr: 0.051,
			},
			{
				name: "Rugged Leather Section",
				id: 19731,
				icon: "https://render.guildwars2.com/file/73E9DCD5D9E50BBE3DDC97B8120E0EB9BDC590E6/65948.png",
				dr: 0.100,
			},
			{
				name: "Seasoned Wood Log",
				id: 19727,
				icon: "https://render.guildwars2.com/file/66BEAC3E5D0EDA160AA4A7942D0C46C27DC0E7AA/65944.png",
				dr: 0.142,
			},
			{
				name: "Silk Scrap",
				id: 19748,
				icon: "https://render.guildwars2.com/file/021DA825F2092327B1C6BC09EC77BD5DE5B4770D/65961.png",
				dr: 0.057,
			},
			{
				name: "Silver Ore",
				id: 19703,
				icon: "https://render.guildwars2.com/file/DA1D9FCF3006222DEE691016EFF8AEE162C3431D/65931.png",
				dr: 0.059,
			},
			{
				name: "Soft Wood Log",
				id: 19726,
				icon: "https://render.guildwars2.com/file/AB6C5501209B91D9B890B1F84B29BC0142CB59D8/65943.png",
				dr: 0.150,
			},
			{
				name: "Spiritwood Plank",
				id: 46736,
				icon: "https://render.guildwars2.com/file/955A9F900BB8AB253C9C91C7F7DF4305A741917C/631485.png",
				dr: 0.150,
			},
			{
				name: "Thick Leather Section",
				id: 19729,
				icon: "https://render.guildwars2.com/file/CC3A2CAADBB2F2B13B1E70079E7E207B08D16E93/65946.png",
				dr: 0.110,
			},
			{
				name: "Thin Leather Section",
				id: 19728,
				icon: "https://render.guildwars2.com/file/ACB203A4381C7B690A7C9BAA2EFEBD01A418E3AD/65945.png",
				dr: 0.099,
			},
			{
				name: "Wool Scrap",
				id: 19739,
				icon: "https://render.guildwars2.com/file/4F4E176F0B5B040F690AB7AE7B7A6844C83F2D0D/65956.png",
				dr: 0.111,
			},
		],
		bundle: [
			{
				name: "Amalgamated Gemstone",
				id: 68063,
				icon: "https://render.guildwars2.com/file/35BC2D35511C806348730A5E63152B2E260D4A5C/919363.png",
				dr: 0.041,
			},
			{
				name: "Ancient Bone",
				id: 24358,
				icon: "https://render.guildwars2.com/file/0EE45FBB1E1A004600E9BAA7097830B2DE08587D/66828.png",
				dr: 0.482,
			},
			{
				name: "Armored Scale",
				id: 24289,
				icon: "https://render.guildwars2.com/file/7061C82F4F9D0C585742F545C40A0F06BE0154DC/66527.png",
				dr: 0.441,
			},
			{
				name: "Black Diamond",
				id: 76491,
				icon: "https://render.guildwars2.com/file/4E096C75FAB2EF90A82648A43C64FC226267FB92/1202991.png",
				dr: 0.014,
			},
			{
				name: "Charged Lodestone",
				id: 24305,
				icon: "https://render.guildwars2.com/file/02EFB1C5E11B2FF4B4AC25A84E2302D244C82AA3/66958.png",
				dr: 0.059,
			},
			{
				name: "Crystal Lodestone",
				id: 24330,
				icon: "https://render.guildwars2.com/file/C10553036839522AAB54425B431E391F76D878AC/66980.png",
				dr: 0.060,
			},
			{
				name: "Destroyer Lodestone",
				id: 24325,
				icon: "https://render.guildwars2.com/file/77BE2565DD345ADFEF3850A5B647FE50C144AAF8/66976.png",
				dr: 0.057,
			},
			{
				name: "Ebony Orb",
				id: 75654,
				icon: "https://render.guildwars2.com/file/052E2FBD2FF19BC174E19568966A174B9A0FB1E5/1203016.png",
				dr: 0.015,
			},
			{
				name: "Elaborate Totem",
				id: 24300, 
				icon: "https://render.guildwars2.com/file/C1ABF9082901FC3CEABC3138CBCCA1DAD5D41812/66955.png",
				dr: 0.483,
			},
			{
				name: "Evergreen Lodestone",
				id: 68942,
				icon: "https://render.guildwars2.com/file/2CF4BAB1CD7F509DF151F0472F632C0D1ECAF468/1203091.png",
				dr: 0.064,
			},
			{
				name: "Flax Blossom",
				id: 74988,
				icon: "https://render.guildwars2.com/file/A660107FB0ACA5337A376F984EA3A04F9121C77E/1203039.png",
				dr: 0.014,
			},
			{
				name: "Freshwater Pearl",
				id: 76179,
				icon: "https://render.guildwars2.com/file/629318080FD49E701566ED98DF98FA54033AC9CB/223939.png",
				dr: 0.016,
			},
			{
				name: "Giant Eye",
				id: 24370,
				icon: "https://render.guildwars2.com/file/B8D60EA8046FB60D1EEF4058D6A8FEBCAE802964/223785.png",
				dr: 0.014,
			},
			{
				name: "Glacial Lodestone",
				id: 24320,
				icon: "https://render.guildwars2.com/file/E6FE2939F9BE1E03B4CD32B8492D3EDC407C0F75/66971.png",
				dr: 0.120,
			},
			{
				name: "Glob of Ectoplasm",
				id: 19721,
				icon: "https://render.guildwars2.com/file/18CE5D78317265000CF3C23ED76AB3CEE86BA60E/65941.png",
				dr: 0.212,
			},
			{
				name: "Karka Shell",
				id: 37897,
				icon: "https://render.guildwars2.com/file/B8C22597015FAFB42AB9EDE75528C40C0637B73D/511903.png",
				dr: 0.482,
			},
			{
				name: "Maguuma Burl",
				id: 72315,
				icon: "https://render.guildwars2.com/file/B15D7F31F8A477717E6055A2AFE0010BD90FECD1/1203051.png",
				dr: 0.015,
			},
			{
				name: "Maguuma Lily",
				id: 70957,
				icon: "https://render.guildwars2.com/file/2FFF0F2BF16F6692A845B9A7CC089EEC0B07B1B6/1203049.png",
				dr: 0.014,
			},
			{
				name: "Molten Lodestone",
				id: 24315,
				icon: "https://render.guildwars2.com/file/76910A3A41C33D0FF09EF3CBDA4B079706150FB9/66968.png",
				dr: 0.056,
			},
			{
				name: "Moonstone Orb",
				id: 72504,
				icon: "https://render.guildwars2.com/file/169AC14EB2E5D10D285E04BF06E506EB26D933BF/1203053.png",
				dr: 0.016,
			},
			{
				name: "Mordrem Lodestone",
				id: 70842,
				icon: "https://render.guildwars2.com/file/1ABBBC6D026544723A9D001DC41757746206C5F7/1203019.png",
				dr: 0.070,
			},
			{
				name: "Onyx Lodestone",
				id: 24310,
				icon: "https://render.guildwars2.com/file/2232AA41E3DF20EB249C0B6D10BC0D37FF6C0E3D/66963.png",
				dr: 0.058,
			},
			{
				name: "Pile of Crystalline Dust",
				id: 24277,
				icon: "https://render.guildwars2.com/file/080D00670558CD9E580D5662030394B2206E92A6/434537.png",
				dr: 0.470,
			},
			{
				name: "Pile of Putrid Essence",
				id: 24335,
				icon: "https://render.guildwars2.com/file/CBC82EA8093AE4F60F0752B179F7CD02DDF5CB33/223781.png",
				dr: 0.092,
			},
			{
				name: "Powerful Venom Sac",
				id: 24283,
				icon: "https://render.guildwars2.com/file/543EC37900EA2A57E77FA891193A48D66AA224AB/66939.png",
				dr: 0.46,
			},
			{
				name: "Pristine Toxic Spore Sample",
				id: 48884,
				icon: "https://render.guildwars2.com/file/78B90364F0FA4806E6600DD260BE2EBC51D1431D/665773.png",
				dr: 0.472,
			},
			{
				name: "Vial of Powerful Blood",
				id: 24295,
				icon: "https://render.guildwars2.com/file/1A930A6A7B5B01EAB4CB36E79014C12B500BF6B3/66950.png",
				dr: 0.470,
			},
			{
				name: "Vicious Claw",
				id: 24351,
				icon: "https://render.guildwars2.com/file/043E2BBA270F381870F1B45E7C09C098CAFE3D14/66996.png",
				dr: 0.467,
			},
			{
				name: "Vicious Fang",
				id: 24357,
				icon: "https://render.guildwars2.com/file/F2050EE1A7A43EDCDCB1E971FDA608AD0566E4DA/66998.png",
				dr: 0.436,
			},
		],
	};

	var matPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=19725,46741,19730,19697,19741,46738,19722,46739,19698,19745,19723,19724,19732,19699,19718,19743,19700,19701,19702,19719,19731,19727,19748,19703,19726,46736,19729,19728,19739,68063,24358,24289,76491,24305,24330,24325,75654,24300,68942,74988,76179,24370,24320,19721,37897,72315,70957,24315,72504,70842,24310,24277,24335,24283,48884,24295,24351,24357";
	const response1 = await fetch(matPricesAPI);
	const matPrices = await response1.json();

	// Go through both json of the api prices and the name of the materials
	// When ids match, fuse the prices and names together
	for (i = 0; i < matPrices.length; i++){
		addPrices(mistWarped.packet);
		addPrices(mistWarped.bundle);
	}
	function addPrices(array){
		for (j = 0; j < array.length; j++){
			if (matPrices[i].id == array[j].id){
				array[j].buy = matPrices[i].buys.unit_price; 
				array[j].sell = matPrices[i].sells.unit_price;
			}
		}
	}

	var tableBody = document.getElementById('um-tableBody');
	var html = ``;
	var addItem, valueItem = 0, valueMistWarped, valueCurrency, profit, tax = 0.85, fee;
	var backgroundColor, mistWarpedName,
		isNegCount = 0; // if all profit margins are neg, then this would be true. Otherwise, if one is pos, then this is false

	function aShipment(array){
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
		valueMistWarped = (valueItem * tax) - fee;

		return valueMistWarped;
	}

	for (j = 0; j < 4; j++){
		switch(j){
			case 0: fee = 400; valueMistWarped = aShipment(mistWarped.packet); valueCurrency = valueMistWarped/1250;
				mistWarpedName = "Packet (Ember Bay)"; break;
			case 1: fee = 400; valueMistWarped = aShipment(mistWarped.bundle); valueCurrency = valueMistWarped/1250; 
				mistWarpedName = "Bundle (Ember Bay)"; break;
			case 2: fee = 5000; valueMistWarped = aShipment(mistWarped.packet); valueCurrency = valueMistWarped/250; 
				mistWarpedName = "Bundle (Other LS3)"; break;
			case 3: fee = 10000; valueMistWarped = aShipment(mistWarped.bundle); valueCurrency = valueMistWarped/500; 
				mistWarpedName = "Bundle (Other LS3)"; break;
		}
		if (valueMistWarped < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4';}
		html += `
			<tr>
				<td> ${mistWarpedName} </td>
				<td style = "background-color: ${backgroundColor};" > ${format_values_subpage(valueMistWarped).gold + format_values_subpage(valueMistWarped).silver + format_values_subpage(valueMistWarped).copper} </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(valueCurrency).gold + format_values_subpage(valueCurrency).silver + format_values_subpage(valueCurrency).copper} </td>
			</tr>
		`; 	
	}
	tableBody.innerHTML = html; 
	sortTableByPrice('um', 2);
}

function showMagic(resultChoice){
	var resultValue = document.getElementById(resultChoice).value; 
	getVolatile(resultValue);
	getUnbound(resultValue);
}