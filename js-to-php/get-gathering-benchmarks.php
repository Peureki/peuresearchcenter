<?php 
	chdir(dirname(__FILE__));
	include_once '../db/maps.php';
?>

<script>

let topofEachFarm = <?php echo $gatheringDB->get_specific_values("Top of each farm"); ?>,
	specificMap = <?php echo $gatheringDB->get_specific_map("Mussels");?> ,
	glyphs = <?php echo $glyphsJSON = $glyphsDB->get_values(); ?>;

	console.log('glyphs:', glyphs); 

function get_top_gathering_benchmarks(){
	let table = document.getElementById('gathering-benchmarks'),
	tableBody = document.getElementById('gathering-tableData'),
	dataHTML = ``,
	mapPage;

	for (let i = 0; i < topofEachFarm.length; i++){
		switch (topofEachFarm[i].name){
			case "Bjora Marches": mapPage = "./maps/bjora-marches.php"; break; 
			case "Bloodstone Fen": mapPage = "./maps/bloodstone-fen.php#nodes"; break;
			case "Draconis Mons": mapPage = "./maps/draconis-mons.php#nodes"; break; 
			case "Dredgehaunt Cliffs": mapPage = "./gathering/dredgehaunt-node-farm.php"; break;
			case "Ember Bay": mapPage = "./maps/ember-bay.php#nodes"; break; 
			case "Fireheart Rise": mapPage = "./gathering/fireheart-rise-node-farm.php"; break; 
			case "Flax": mapPage = "./gathering/flax-farm.php"; break;
			case "Lake Doric": mapPage = "./maps/lake-doric#node-farm"; break;
			case "Maguuma Lilies": mapPage = "./gathering/maguuma-lilies.php"; break; 
			case "Mussels": mapPage = "./gathering/mussel-node-farm.php"; break; 
			case "Mount Maelstrom": mapPage = "./gathering/mount-maelstrom-node-farm.php"; break;
			case "Rich Nodes": mapPage = "./gathering/rich-node-farm.php"; break;
			case "Sandswept Isles": mapPage = "./maps/sandswept-isles#node-farm.php"; break;
			case "Siren's Landing": mapPage = "./maps/sirens-landing.php#node-farm"; break;
			case "Sparkfly Fen": mapPage = "./gathering/sparkfly-fen-node-farm.php"; break; 
		}

		dataHTML += `
		<tr>
		<td onclick = "location.href = '${mapPage}';"> ${topofEachFarm[i].name} </td>
		<td> ${topofEachFarm[i].pick} </td>
		<td> ${topofEachFarm[i].axe} </td>
		<td> ${topofEachFarm[i].sickle} </td>
		<td> ${displayValues(topofEachFarm[i].gold_per_hour, 0)} </td>
		<td> ${displayValues(topofEachFarm[i].gold_per_char, 0)} </td>
		<td> ${topofEachFarm[i].time_per_char} </td>
		</tr>`;
	}
	tableBody.innerHTML = dataHTML;
}


// Get highest gph for each farm 
//SELECT * FROM gathering WHERE gold_per_hour IN ( SELECT MAX(gold_per_hour) FROM gathering GROUP BY name) ORDER BY `gathering`.`gold_per_hour` DESC

</script>