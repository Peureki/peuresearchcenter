console.log('this is the gathering benchmarks');






async function display_benchmarks(){

	let node = {
		farms: [
			{
				map: "Bjora Marches",
				zone: "Shiverpeaks",
				est: 0,
				find_est: function(){
					add_nodes(this,
						"Mithril Ore", 7, "Pick",
						"Orichalcum Ore", 1, "Pick");
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

	console.log("Node SS Data: ", nodeData); 
	console.log("Glyph SS Data: ", glyphData);

	function add_nodes(obj, n1, n1Qty, n1Type, n2, n2Qty, n2Type, n3, n3Qty, n3Type, n4, n4Qty, n4Type){
		// Empty arrays
		let nodes = new Array, qty = new Array; 
		let nodeObj = new Object(); 
		let total = 0;
		console.log("arguments: ", arguments.length, arguments[1])
		// Start with the second argument as the first is to declare what obj we're inputting the result
		for (let i = 1; i < arguments.length; i++){
			console.log("n1 argument: ", i, i % 3);
			//if (isNaN(arguments[i]) != true || typeof arguments[i] !== "undefined"){nodes.push(arguments[i]); obj.node1 = arg; nodeObj.node = n1;}
		}
		// Check if the parameters are there or not. 
		// If yes => push the node into nodes[] and create new obj attribute in the farms it's refer to
		if (isNaN(n1) != true || typeof n1 !== "undefined"){nodes.push(n1); obj.node1 = n1; nodeObj.node = n1;}
		if (isNaN(n2) != true || typeof n2 !== "undefined"){nodes.push(n2); obj.node2 = n2;}
		if (isNaN(n3) != true || typeof n3 !== "undefined"){nodes.push(n3); obj.node3 = n3;}
		if (isNaN(n4) != true || typeof n4 !== "undefined"){nodes.push(n4); obj.node4 = n4;}
		// Check if qty parameters are there or not
		// If yes => do the same as above, but with qty[] and new attribute
		if (isNaN(n1Qty) != true || typeof n1Qty !== "undefined"){qty.push(n1Qty); obj.node1Qty = n1Qty;}
		if (isNaN(n2Qty) != true || typeof n2Qty !== "undefined"){qty.push(n2Qty); obj.node2Qty = n2Qty;}
		if (isNaN(n3Qty) != true || typeof n3Qty !== "undefined"){qty.push(n3Qty); obj.node3Qty = n3Qty;}
		if (isNaN(n4Qty) != true || typeof n4Qty !== "undefined"){qty.push(n4Qty); obj.node4Qty = n4Qty;}

		console.log(nodeObj);



		for (i = 0; i < nodes.length; i++){
			for (j = 0; j < nodeData.spreadsheet.length; j++){
				if (nodes[i] == nodeData.spreadsheet[j].item){
					total += nodeData.spreadsheet[j].worth * qty[i]; 
				}
			}
		}

		console.log("total: ", total);
	}

	node.farms[0].find_est();

	console.log(node.farms);
}

display_benchmarks();

