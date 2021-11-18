<?php
	chdir(dirname(__FILE__));
	include_once '../../db/maps.php'; 	
?>

<script>
	/*
async function get_materials_donation(){
	const api = 'https://script.google.com/macros/s/AKfycbxrOI8g0EYxJPfk-hj-Wkajm13xh0xlYHMKNZebL_xFtKULDipA/exec';
	const response = await fetch(api);
	const tracks = await response.json();

	let ash_total,
		flame_total,
		iron_total,
		blood_total; 
	let current_track; 
	// Go through the JSON to find the totals of each legion track
	for (i = 0; i < tracks.spreadsheet.length; i++){
		// First find what legion is current reading and mark it
		if (tracks.spreadsheet[i].item == "Glory to the Ash Legion" ||
				tracks.spreadsheet[i].item == "Glory to the Flame Legion" ||
				tracks.spreadsheet[i].item == "Glory to the Iron Legion" || 
				tracks.spreadsheet[i].item == "Glory to the Blood Legion"){
			current_track = tracks.spreadsheet[i].item;
			continue;
		}
		// Look for the name "Total" and compare what's marked. Assign the total to the marked legion
		if (tracks.spreadsheet[i].item == "Total:"){
			switch (current_track){
				case "Glory to the Ash Legion": 
					ash_total = tracks.spreadsheet[i].total / 5000; 
					break;
				case "Glory to the Flame Legion":
					flame_total = tracks.spreadsheet[i].total / 5000;
					break;
				case "Glory to the Iron Legion":
					iron_total = tracks.spreadsheet[i].total / 5000;
					break;
				case "Glory to the Blood Legion":
					blood_total = tracks.spreadsheet[i].total / 5000;
					break;
			}
		}
	}
	console.log(tracks.spreadsheet);
	console.log(ash_total, flame_total, iron_total, blood_total);
}
*/
function get_material_donations(){
	let tracks = <?php echo $dwcDB->get_tracks(); ?>;

	let html = '',
		track_table = document.getElementById('track-table'); 

	let item,
		cost,
		exchange_rate = 0;

	// There are 32 possible donations
	for (i = 0; i < 32; i++){
		if (i <= 8){

		}
	}

	console.log(tracks);
}

get_material_donations();
</script>