<?php
	chdir(dirname(__FILE__));
	include_once '../../db/maps.php'; 	
?>

<?php 
	$costIDs = "19722,19700,19729,19748,19725,19701,19745";
?>

<script>
function get_material_donations(select_legion, select_cost){
	let users_legion = document.getElementById(select_legion).value,
		users_cost = document.getElementById(select_cost).value;

	// Purpose is to arrange an array in a particular way with info from a different array that's in a non-preferred order
	// return the specific info 
	function find_within_array(array, item){
		let item_found;
		for (let i = 0; i < array.length; i++){
			if (array[i].name == item){
				item_found = array[i]; 
			}
		}
		return item_found;
	}
	// Get the db
	let tracks = <?php echo $dwcDB->get_tracks(); ?>,
		dwc_items = <?php echo $itemsDB->get_array_items('items', $dwcIDs); ?>,
		cost_items = <?php echo $itemsDB->get_array_items('items', $costIDs); ?>;

	let html = '',
		track_table = document.getElementById('track-tableBody');
	// Can't simply put this in CSS because it will change the icons of the currency too
	let icon_size = "width: 35px; height: 35px; vertical-align: middle;";

	let comm_name,
		comm_icon,
		comm_qty,
		comm_value = 0,
		cost_name,
		cost_icon,
		cost_qty,
		cost_value = 0,
		dwc_num = 0,
		cost_num = -1,
		avg_track_value = 0,
		result_value = 0,
		exchange_rate = 0;

	// Order of the costs beyond Charr commendations
	// Ancient, Ori, Thick, Gossamer
	let cost_order = [cost_items[4], cost_items[5], cost_items[2], cost_items[6]];
	// Order of the tracks to be represented on the table
	let track_order = [0, find_within_array(tracks, "Glory to the Ash Legion"),
		find_within_array(tracks, "Glory to the Blood Legion"),
		find_within_array(tracks, "Death to the Dominion"),
		find_within_array(tracks, "Glory to the Flame Legion"),
		find_within_array(tracks, "Death to the Corrupted"),
		find_within_array(tracks, "Glory to the Iron Legion")];
	console.log("track order ", track_order);
	// Gets the avg worth of all the commendations combined
	for (i = 0; i < tracks.length; i++){
		avg_track_value += parseInt(tracks[i].comm_value); 
	}
	avg_track_value /= tracks.length;

	// There are 32 possible donations
	for (i = 0; i < 32; i++){
		// Charr Commendations
		if (i < 8){
			comm_name = dwc_items[0].name;
			comm_icon = dwc_items[0].icon; 
			// First 4 Charr are 125 while the rest are 250
			if (i < 4){
				comm_qty = 125; 
			} else {
				comm_qty = 250;
			}
			switch (i){
				case 4:
				case 7: cost_qty = 200;
					break;
				default: cost_qty = 100;
					break;
			}
			// First 6 cost items are in the same order
			// Then it repeats Thick Leather
			//
			// For qty, only Silk (4) and Goss (8) are 200
			switch (i){
				// Thick Leather repeats
				case 6: cost_name = cost_items[2].name;
					cost_icon = cost_items[2].icon; 
					// Check what user selected for the cost price. Defaults to Sell Price
					switch (users_cost){
						case "Buy Price": cost_value = cost_items[2].buy_unit_price * cost_qty; break;
						case "Sell Price": cost_value = cost_items[2].sell_unit_price * cost_qty; break;
					}
					break;
				// Gossamer 
				case 7: cost_name = cost_items[6].name;
					cost_icon = cost_items[6].icon;
					// Check what user selected for the cost price. Defaults to Sell Price
					switch (users_cost){
						case "Buy Price": cost_value = cost_items[6].buy_unit_price * cost_qty; break;
						case "Sell Price": cost_value = cost_items[6].sell_unit_price * cost_qty; break;
					}
					break;
				default: cost_name = cost_items[i].name;
					cost_icon = cost_items[i].icon;
					cost_value = cost_items[i].sell_unit_price * cost_qty;
					// Check what user selected for the cost price. Defaults to Sell Price
					switch (users_cost){
						case "Buy Price": cost_value = cost_items[i].buy_unit_price * cost_qty; break;
						case "Sell Price": cost_value = cost_items[i].sell_unit_price * cost_qty; break;
					}
					break;
			}
			// Change Charr Commendations depending on what users choose. Default is avg
			switch (users_legion){
				case "Avg": comm_value = avg_track_value * comm_qty; break;
				case "Ash": comm_value = find_within_array(tracks, "Glory to the Ash Legion").comm_value * comm_qty; break;
				case "Blood": comm_value = find_within_array(tracks, "Glory to the Blood Legion").comm_value * comm_qty; break;
				case "Dominon": comm_value = find_within_array(tracks, "Death to the Dominion").comm_value * comm_qty; break;
				case "Flame": comm_value = find_within_array(tracks, "Glory to the Flame Legion").comm_value * comm_qty; break;
				case "Frost": comm_value = find_within_array(tracks, "Death to the Corrupted").comm_value * comm_qty; break;
				case "Iron": comm_value = find_within_array(tracks, "Glory to the Iron Legion").comm_value * comm_qty; break;
				default: comm_value = avg_track_value * comm_qty;
			}
		}
		// Ash Legion
		if (i >= 8){
			// For every 4th item, set the next in dwc_items +1
			// Also reset the rotation of the order of costs
			if (i % 4 == 0){
				dwc_num += 1;
				cost_num = 0;
				cost_qty = 50; 
				
			} else {
				cost_num += 1;
				cost_qty = 50;
			}
			if (cost_num == 3){
				cost_qty = 100;
			}
			comm_name = dwc_items[dwc_num].name;
			comm_icon = dwc_items[dwc_num].icon; 
			comm_value = track_order[dwc_num].comm_value * comm_qty;

			cost_name = cost_order[cost_num].name;
			cost_icon = cost_order[cost_num].icon;

			// Check what user selected for the cost price. Defaults to Sell Price
			switch (users_cost){
				case "Buy Price": cost_value = cost_order[cost_num].buy_unit_price * cost_qty; break;
				case "Sell Price": cost_value = cost_order[cost_num].sell_unit_price * cost_qty; break;
			}
		}
		result_value = comm_value - cost_value; 

		if (result_value < 0){ 
			background_color = '#E9C4B4'; 
		} else { 
			background_color = '#CFE9B4';
		}

		html += `
			<tr>
				<td> ${cost_qty} &nbsp; <img src = "${cost_icon}" style = "${icon_size}"><span class = "hoverTooltip">${cost_name}</span>
					<br> <span> ${displayValues(cost_value)} </span> </td>
				<td> &#8594; </td>
				<td> ${comm_qty} &nbsp; <img src = "${comm_icon}" style = "${icon_size}"> ${comm_name} <span class = "hoverTooltip"><b>${comm_name}</b>
							<br> <b>Cost:</b> &nbsp; ${displayValues(comm_value)} 
							<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(cost_value)}</span> 
					<br> <span> ${displayValues(comm_value)} </span></td>
				<td style = "background-color: ${background_color};"> ${displayValues(result_value)} </td>
			</tr>
		`;
		track_table.innerHTML = html;
	}

	console.log(tracks);
}

get_material_donations('choose-legion', 'choose-cost');
</script>