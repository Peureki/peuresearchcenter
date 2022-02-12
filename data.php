<?php include_once ("./db/maps.php")?>

<?php  
	$nodeJSON = $gatheringDB->get_specific_map($_GET['q']);

	$farm = json_decode($nodeJSON, TRUE);
	$dataHTML = ""; 
	for ($i = 0; $i < 10; $i++){
		$gphID = "gathering-map-gph".$i; 
		$gpcID = "gathering-map-gpc".$i;
		$dataHTML .= "<tr>
		<td> ".$farm[$i]['name']."</td>
		<td> ".$farm[$i]['pick']." </td>
		<td> ".$farm[$i]['axe']." </td> 
		<td> ".$farm[$i]['sickle']." </td> 
		<td id = ".$gphID."><script> displayValues(".$farm[$i]['gold_per_hour'].", 0); </script></td>
		<td id = ".$gpcID."> ".$farm[$i]['gold_per_char']." </td>
		<td> ".$farm[$i]['time_per_char']." </td> 
		</tr>
		<script type = 'text/javascript'> let gphID".$i." = document.getElementById('".$gphID."'), 
			gpcID".$i." = document.getElementById('".$gpcID."'); 

		console.log('merp');
		gphID".$i.".innerHTML = displayValues(".$farm[$i]['gold_per_hour'].", 0);
		gpcID".$i.".innerHTML = displayValues(".$farm[$i]['gold_per_char'].", 0);"."</script>"."";
	}
	echo $dataHTML;
?>