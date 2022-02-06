console.log('this is the gathering benchmarks');





/*
async function display_benchmarks(){

	let node = {
		farms: [
			{
				map: "Bjora Marches",
				zone: "Shiverpeaks",
				level: "71-80",
				est: 0,
				find_est: function(){
					add_nodes(this,
						"Mithril Ore", 7, "Pick",
						"Orichalcum Ore", 1, "Pick",
						"Eternal Ice", 3, "Pick",
						"Cypress Sapling (Shiverpeaks)", 19, "Axe",
						"Ancient Sapling", 1, "Axe",
						"Verdant Herbs (Shiverpeaks)", 27, "Sickle",
						"Winter Root Vegetable", 11, "Sickle");
				},
			},
		]
	}

	let node_api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	let node_response = await fetch(node_api);
	let nodeData = await node_response.json();

	// Glyph sheet
	let glyph_api = 'https://script.google.com/macros/s/AKfycbzFqLJFdm5TeCDGhrUPIZvIhW87IfdgTWS2uYWTWH4dhTcepYFg/exec';
	let glyph_response = await fetch(glyph_api);
	let glyphData = await glyph_response.json();

	console.log("obj: ", node.farms);
	console.log("Node SS Data: ", nodeData); 
	console.log("Glyph SS Data: ", glyphData);

	let table = document.getElementById('gathering-benchmarks'),
		tableBody = document.getElementById('gathering-tableData'),
		dataHTML = ``;

	function add_nodes(obj, n1, n1Qty, n1Type, n2, n2Qty, n2Type, n3, n3Qty, n3Type, n4, n4Qty, n4Type, n5, n5Qty, n5Type, n6, n6Qty, n6Type, n7, n7Qty, n7Type){
		// Empty arrays
		let nodes = new Array, qty = new Array, type = new Array; 
		let node = {
			mats: []
		}; 
		let total = 0;
		let nodeCounter = -1;
		// Start with the second argument as the first is to declare what obj we're inputting the result
		for (let i = 1; i < arguments.length; i++){
			if ((i % 3) == 1){
				nodeCounter += 1; 
			}
			switch (i % 3){
				case 1: 
					if (isNaN(arguments[i]) != true || typeof arguments[i] !== "undefined"){
						nodes[nodeCounter] = arguments[i]; 
					}
				break;

				case 2: qty[nodeCounter] = arguments[i];
				break;

				case 0: type[nodeCounter] = arguments[i];
				break;
			}
			//if (isNaN(arguments[i]) != true || typeof arguments[i] !== "undefined"){nodes.push(arguments[i]); obj.node1 = arg; nodeObj.node = n1;}
		} 
		console.log("node mats: ", nodes, qty, type);
		// Check if the parameters are there or not. 
		// If yes => push the node into nodes[] and create new obj attribute in the farms it's refer to

		let overview = [],
			overviewPick = [],
			overviewAxe = [],
			overviewSickle = [],
			pickCount = 0, 
			axeCount = 0,
			sickleCount = 0,
			overviewCounter = 0;

		// Go thru nodes list
		for (let i = 0; i < nodes.length; i++){
			// Check if the next node on the obj is the same gathering type
			// If yes => add a count. This will eventually stop pushing new glyph values into the overviews
			if (type[i-1] == type[i]){
				if (type[i] == "Pick")
					pickCount += 1;
				if (type[i] == "Axe")
					axeCount += 1;
				if (type[i] == "Sickle"){
					sickleCount += 1;
				}
				console.log("sickle count: ", sickleCount);
			}
			overviewCounter = 0;
			// Go thru node SS
			for (let j = 0; j < nodeData.spreadsheet.length; j++){
				// Check if the node list matches the SS list
				// If yes => go thru glyph SS
				if (nodes[i] == nodeData.spreadsheet[j].item){
					for (let k = 0;  k < glyphData.spreadsheet.length; k++){
						// Check if tool used matches the tools in glyph SS
						if (type[i] == glyphData.spreadsheet[k].tool){
							if (type[i] == "Pick"){ 
								if (pickCount == 0){
									// If yes => Check if the level is 71-80 and check if the glyph is considered "All"
									if (obj.level == "71-80" && glyphData.spreadsheet[k].level == "All"){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewPick.push([glyphData.spreadsheet[k].glyph, total]);
										//console.log("Pick: ", overviewPick, "Axe: ", overviewAxe);
										//overview.push([glyphData.spreadsheet[k].glyph, total]);
									// Otherwise, if still yes => check any glyphs that are labeled "71-80"
									} else if (obj.level == glyphData.spreadsheet[k].level){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewPick.push([glyphData.spreadsheet[k].glyph, total]);
									}
								} else {
									// If yes => Check if the level is 71-80 and check if the glyph is considered "All"
									if (obj.level == "71-80" && glyphData.spreadsheet[k].level == "All"){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										//console.log("overview pick: ", overviewCounter)
										overviewPick[overviewCounter][1] += total;
										overviewCounter += 1;
									// Otherwise, if still yes => check any glyphs that are labeled "71-80"
									} else if (obj.level == glyphData.spreadsheet[k].level){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewPick[overviewCounter][1] += total;
										overviewCounter += 1;
									}
								}
							}
							if (type[i] == "Axe"){	
								if (axeCount == 0){
									// If yes => Check if the level is 71-80 and check if the glyph is considered "All"
									if (obj.level == "71-80" && glyphData.spreadsheet[k].level == "All"){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewAxe.push([glyphData.spreadsheet[k].glyph, total]);
									// Otherwise, if still yes => check any glyphs that are labeled "71-80"
									} else if (obj.level == glyphData.spreadsheet[k].level){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewAxe.push([glyphData.spreadsheet[k].glyph, total]);
									}
								} else {
									console.log("axecounter:", axeCount);
									// If yes => Check if the level is 71-80 and check if the glyph is considered "All"
									if (obj.level == "71-80" && glyphData.spreadsheet[k].level == "All"){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewAxe[overviewCounter][1] += total;
										overviewCounter += 1;
									// Otherwise, if still yes => check any glyphs that are labeled "71-80"
									} else if (obj.level == glyphData.spreadsheet[k].level){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										//console.log("axe counter:  ", overviewCounter)
										overviewAxe[overviewCounter][1] += total;
										overviewCounter += 1;
									}
								}
							}
							if (type[i] == "Sickle"){	
								if (sickleCount == 0){
									// If yes => Check if the level is 71-80 and check if the glyph is considered "All"
									if (obj.level == "71-80" && glyphData.spreadsheet[k].level == "All"){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewSickle.push([glyphData.spreadsheet[k].glyph, total]);
									// Otherwise, if still yes => check any glyphs that are labeled "71-80"
									} else if (obj.level == glyphData.spreadsheet[k].level){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewSickle.push([glyphData.spreadsheet[k].glyph, total]);
									}
								} else {
									// If yes => Check if the level is 71-80 and check if the glyph is considered "All"
									if (obj.level == "71-80" && glyphData.spreadsheet[k].level == "All"){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewSickle[overviewCounter][1] += total;
										overviewCounter += 1;
									// Otherwise, if still yes => check any glyphs that are labeled "71-80"
									} else if (obj.level == glyphData.spreadsheet[k].level){
										let total = (nodeData.spreadsheet[j].worth + glyphData.spreadsheet[k].vpn) * qty[i];
										overviewSickle[overviewCounter][1] += total;
										overviewCounter += 1;
									}
								}
							}
						}
					} // End of glyph for loop
				} // End of obj node and all node check
			} // End of all nodes for loop
		} // End of obj node for loop
		console.log(overviewPick, overviewAxe, overviewSickle);
		obj.est = overview;

		let showEverything = new Array(),
			grandTotal; 
		for (let i = 0; i < overviewPick.length; i++){
			for (let j = 0; j < overviewAxe.length; j++){
				for (let k = 0; k < overviewSickle.length; k++){
					grandTotal = overviewPick[i][1] + overviewAxe[j][1] + overviewSickle[k][1];
					showEverything.push([obj.map, overviewPick[i], overviewAxe[j], overviewSickle[k], grandTotal]);

					dataHTML += `<tr>
					<td> ${obj.map}</td> 
					<td> ${overviewPick[i][0]} </td>
					<td> ${overviewAxe[j][0]} </td>
					<td> ${overviewSickle[k][0]} </td> 
					<td> ${displayValues(grandTotal, 0)} </td>
					</tr>`;
				}
			}
		}
		tableBody.innerHTML = dataHTML; 
	} // End of function

	node.farms[0].find_est();
	
}

display_benchmarks();

*/