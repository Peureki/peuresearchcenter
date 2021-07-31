// Level: 
// 1 = 1-15
// 2 = 16-40
// 3 = 41-55
// 4 = 56-70
// 5 = 71-80

/*
var glyphs = {
	forester: [
		// Level 1-15
		{glyph: "Forester", tool: "Pick", level: 1, name: "Green Wood Log", id: 19723, multiplier: .34},
		{glyph: "Forester", tool: "Axe", level: 1, name: "Green Wood Log", id: 19723, multiplier: .28},
		{glyph: "Forester", tool: "Sickle", level: 1, name: "Green Wood Log", id: 19723, multiplier: 0}, // Need data
		// Level 16-40
		{glyph: "Forester", tool: "Pick", level: 2, name: "Green Wood Log", id: 19723, multiplier: .12},
		{glyph: "Forester", tool: "Pick", level: 2, name: "Soft Wood Log", id: 19726, multiplier: .26},
		{glyph: "Forester", tool: "Axe", level: 2, name: "Green Wood Log", id: 19723, multiplier: .10},
		{glyph: "Forester", tool: "Sickle", level: 2, name: "Green Wood Log", id: 19723, multiplier: 0}, 
		{glyph: "Forester", tool: "Sickle", level: 2, name: "Soft Wood Log", id: 19726, multiplier: 12},
		// Level 41-55
		{glyph: "Forester", tool: "Pick", level: 2, name: "Seasoned Wood Log", id: 19727, multiplier: .20},
		{glyph: "Forester", tool: "Pick", level: 2, name: "Hard Wood Log", id: 19724, multiplier: .13},
		{glyph: "Forester", tool: "Axe", level: 2, name: "Elder Wood Log", id: 19722, multiplier: .0104},
		{glyph: "Forester", tool: "Axe", level: 2, name: "Hard Wood Log", id: 19724, multiplier: .1042},
		{glyph: "Forester", tool: "Axe", level: 2, name: "Seasoned Wood Log", id: 19727, multiplier: .1042},
		{glyph: "Forester", tool: "Axe", level: 2, name: "Soft Wood Log", id: 19726, multiplier: .0729},
		{glyph: "Forester", tool: "Sickle", level: 2, name: "Green Wood Log", id: 19723, multiplier: 0}, 
		{glyph: "Forester", tool: "Sickle", level: 2, name: "Soft Wood Log", id: 19726, multiplier: 12},
	]
};

async function glyph_benchmarks(table){
	const api_link = 'https://api.guildwars2.com/v2/commerce/prices?ids=19723';
	const response = await fetch(api_link);
	const api = await response.json();

	function match_api(id,){
		var match,
			sell_price,
			buy_price;
		for (i=0; i < api.length; i++){
			if (id == api[i].id){
				match = api[i].id
				sell_price = api[i].sells.unit_price;
				buy_price = api[i].buys.unit_price;
			}
		}
		return {
			match: match,
			sell_price: sell_price,
			buy_price: buy_price
		};
	}

	const tableBody = document.getElementById('tableData');
	var tableName = document.getElementById(table);

	// Empty table
	let dataHTML = '';

	var amount = Math.floor(match_api(19723).sell_price * glyphs.forester[0].multiplier);
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
	

	if (negative == true){
		negative_symbol = ' -';
		if (silver > 0){
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

	console.log(glyphs.forester);

	dataHTML += `<tr>
	<td>${silverHTML}${copperHTML}<td>
	</tr>`

	tableBody.innerHTML = dataHTML;
}

*/
async function getGlyphs(table, image){

	//Grabs the JSON URL file from the Google App Script 
	const api_spreadsheet = 'https://script.google.com/macros/s/AKfycbzFqLJFdm5TeCDGhrUPIZvIhW87IfdgTWS2uYWTWH4dhTcepYFg/exec';
	const response = await fetch(api_spreadsheet);
	const data = await response.json();

	//The table that all the data will be stored in
	const tableBody = document.getElementById('tableData-glyphs');
	var tableName = document.getElementById(table);
	var loading_image = document.getElementById(image);

	tableName.style.opacity = 1;
	loading_image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	var glyph,
		tool,
		level,
		vps, // value per strike
		vpn; // value per node

	for (i = 0; i < data.spreadsheet.length; i++){

		glyph = data.spreadsheet[i].glyph;
		tool = data.spreadsheet[i].tool;
		level = data.spreadsheet[i].level;
		vps = data.spreadsheet[i].vps;
		vpn = data.spreadsheet[i].vpn;

		switch (tool){
			case "Pick":
			tool = "./images/assets/pick.png";
			break;

			case "Axe":
			tool = "./images/assets/axe.png";
			break;

			case "Sickle":
			tool = "./images/assets/sickle.png";
			break;
		}

		dataHTML += `<tr>
		<td>${glyph}</td>
		<td><img src = "${tool}" style = "width: 80%;"></td>
		<td>${level}</td>
		<td>${format_values(vps).silver}${format_values(vps).copper}</td>
		<td>${format_values(vpn).silver}${format_values(vpn).copper}</td>
		</tr>`

		tableBody.innerHTML = dataHTML;
	}
	sortTableByPrice('all-glyphs', 4);
}

async function getBountyValues(table, image){
	//Grabs the JSON URL file from the Google App Script 
	const api_spreadsheet = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api_spreadsheet);
	const data = await response.json();

	//The table that all the data will be stored in
	const tableBody = document.getElementById('tableData-bounty');
	var tableName = document.getElementById(table);
	var loading_image = document.getElementById(image);

	tableName.style.opacity = 1;
	loading_image.style.display = 'none';

	// Seperate array to each specific type of nodes
	let oreNodes = data.spreadsheet.slice(0,8);
	let woodNodes = data.spreadsheet.slice(9,30);
	let plantNodes = data.spreadsheet.slice(31,77);
	let herbNodes = data.spreadsheet.slice(78,100);
	let lsNodes = data.spreadsheet.slice(109,119);

	var node_name; 
	var worth;
	var tool;

	//Empty data table
	let dataHTML = '';

	function nonplant_table(array){
		for (i = 0; i < array.length; i++){
			node_name = array[i].item;
			worth = (array[i].worth * 1.1583) - array[i].worth;

			if (node_name.includes("Ore",0) == true){
				tool = "./images/assets/pick.png";
			} else {
				tool = "./images/assets/axe.png";
			}

			dataHTML += `<tr>
			<td>${node_name}</td>
			<td align = "center"><img src = "${tool}" style = "width: 80%;"></td>
			<td>${format_values(worth).silver}${format_values(worth).copper}</td>
			</tr>`

			tableBody.innerHTML = dataHTML;
		}
	}
	function plant_table(array){
		for (i = 0; i < array.length; i++){
			node_name = array[i].item;
			worth = (array[i].worth * 1.4748) - array[i].worth;
			tool = "./images/assets/sickle.png";

			dataHTML += `<tr>
			<td>${node_name}</td>
			<td align = "center"><img src = "${tool}" style = "width: 80%;"></td>
			<td>${format_values(worth).silver}${format_values(worth).copper}</td>
			</tr>`

			tableBody.innerHTML = dataHTML;
		}
	}	nonplant_table(oreNodes);
	nonplant_table(woodNodes);
	plant_table(plantNodes);
	plant_table(herbNodes);
	sortTableByPrice('bounty', 2);
}