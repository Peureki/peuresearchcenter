<?php 
	chdir(dirname(__FILE__));
	include_once '../db/maps.php';
?>

<script>

let topofEachFarm = <?php echo $gatheringDB->get_specific_values("Top of each farm"); ?>,
	specificMap = <?php echo $gatheringDB->get_specific_map("Mussels");?> ; 

function get_gathering_benchmarks(){
	let table = document.getElementById('gathering-benchmarks'),
	tableBody = document.getElementById('gathering-tableData'),
	dataHTML = ``;

	for (let i = 0; i < topofEachFarm.length; i++){
		dataHTML += `
		<tr>
		<td> ${topofEachFarm[i].name} </td>
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
function get_gathering_maps(){
	let table = document.getElementById('gathering-benchmarks'),
	tableBody = document.getElementById('gathering-map-tableData'),
	dataHTML = ``;

	for (let i = 0; i < specificMap.length; i++){
		dataHTML += `
		<tr>
		<td> ${specificMap[i].name} </td>
		<td> ${specificMap[i].pick} </td>
		<td> ${specificMap[i].axe} </td>
		<td> ${specificMap[i].sickle} </td>
		<td> ${displayValues(specificMap[i].gold_per_hour, 0)} </td>
		<td> ${displayValues(specificMap[i].gold_per_char, 0)} </td>
		<td> ${specificMap[i].time_per_char} </td>
		</tr>`;
	}
	tableBody.innerHTML = dataHTML;
}



// Get highest gph for each farm 
//SELECT * FROM gathering WHERE gold_per_hour IN ( SELECT MAX(gold_per_hour) FROM gathering GROUP BY name) ORDER BY `gathering`.`gold_per_hour` DESC

</script>