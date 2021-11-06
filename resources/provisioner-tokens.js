async function provisionerTokens(){
	let itemPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=19718,19739,19741,19743,19748,19745,19720,19740,19742,19744,19747,19746,19723,19726,19727,19724,19722,19725,19710,19713,19714,19711,19709,19712,19719,19728,19730,19731,19729,19732,19738,19733,19734,19736,19735,19737,19697,19699,19703,19698,19702,19700,19701,19680,19679,19683,19687,19682,19688,19686,19681,19684,19685,19721,46741,46738,46739,46736,70992,80723,80714,80791,71334,80775,46743,24341,24288,24299,24276,24282,24294,24350,24356,79410,24514,24518,24532,24533,24524,19721,72436,72010,24520,76491,24515,24884,24510,75654,24515,74988,76179,24772,72315,70957,72504,24522,24773,24508,24516,24502,68063,24358,24289,24300,24277,24283,24295,24351,24357,42010,24512,42006,24519,24511,24509,24473,24521,24474,24475,90339,24359,43773,74042,66913,12815,24503,44941,66993,24305,24340,24330,24325,24320,24315,24310,67015,73034,74090,77256,72224,48917,48884,75075,71641,71580,24830,71425,24821,89271,89216,68942,74202,89258,24833,73399,72852,24800,76100,24762,36044,24756,44957,49460,69370,24818,24803,69370,89103,74328,24335,36041,38024,68437,24720,85713,76166,24821,24827,24839,86601,24,44951,89999,77699,66637,67832,66650,93567,70842,92687";
	let response = await fetch(itemPricesAPI);
	let itemPrices = await response.json();

	let prov_token = {
		// Black Citadel | Ash Legion 
		bc: [
			{
				name: "Mystic Forge Stone",
				buy: "Account Bound",
				sell: "Account Bound", 
			},
			{
				name: "Large Skull",
				id: 24366, 
				qty: 20,
				icon: "https://render.guildwars2.com/file/FA216B1B546314D0A4125D083F9BD34EA03B9329/67002.png", 
			},
			{
				name: "Superior Rune of the Citadel",
				id: 24741, 
				qty: 12,
				icon: "https://render.guildwars2.com/file/2647384A4CFBDA013F974944C501E19D092B37A8/220696.png", 
			},
		],
		// Lion's Arch | Skritt Trader
		la: [
			{
				name: "Mystic Forge Stone",
				buy: "Account Bound",
				sell: "Account Bound", 
			},
			{
				name: "Glob of Ectoplasm",
				id: 19721, 
				qty: 5,
				icon: "https://render.guildwars2.com/file/18CE5D78317265000CF3C23ED76AB3CEE86BA60E/65941.png", 
			},
			{
				name: "Superior Rune of the Adventurer",
				id: 24830, 
				qty: 1,
				icon: "https://render.guildwars2.com/file/3C053CD2680D7DAE5E0899E8F6FF530D0E445704/221141.png", 
			},
		],
	}
}

async function get_all_items(){
	let itemPricesAPI = "https://api.guildwars2.com/v2/commerce/prices";
	let response = await fetch(itemPricesAPI);
	let itemPrices = await response.json();

	console.log(itemPrices);
}
