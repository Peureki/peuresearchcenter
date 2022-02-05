<?php
	chdir(dirname(__FILE__));
	include_once '../db/maps.php'; 	
?>

<?php

	$nodesJSON = $nodesDB->get_values(); 
	$glyphsJSON = $glyphsDB->get_values(); 

	$nodesData = json_decode($nodesJSON, TRUE); 
	$glyphsData = json_decode($glyphsJSON, TRUE);
	//echo $nodesData[0]['node'] . "+" . $nodesData[0]['value'];
	//echo var_dump($nodesData);
	//echo var_dump($glyphsData);

	$farms = array(
		array(
			"map" => "Bjora Marches",
			"zone" => "Shiverpeaks", 
			"level" => "71-80",
			"mats" => array("Mithril Ore", 7, "Pick",
				"Orichalcum Ore", 1, "Pick",
				"Eternal Ice", 3, "Pick",
				"Cypress Sapling (Shiverpeaks", 19, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Verdant Herbs (Shiverpeaks)", 27, "Sickle",
				"Winter Root Vegetable", 11, "Sickle"),
		),
		array(
			"map" => "Bloodstone Fen",
		)
	);

	$nodesArray = [];
	$qtyArray = []; 
	$toolsArray = []; 

	$overviewPick = [];

	$pickCount = 0;
	$axeCount = 0;
	$sickleCount = 0;

	for($i = 0; $i < count($farms[0]['mats']); $i++){
		switch ($i % 3){
			// Node names
			case 0: array_push($nodesArray, $farms[0]['mats'][$i]); break;
			// Node qtys
			case 1: array_push($qtyArray, $farms[0]['mats'][$i]); break;
			// Tool 
			case 2: array_push($toolsArray, $farms[0]['mats'][$i]); break;
		}
	} 

	//echo "this is nodesArray: " . var_dump($nodesArray); 

	//echo var_dump($nodesData[1]['node']);
	// Go thru amount of nodes in a farm
	for ($i = 0; $i < count($nodesArray); $i++){
		if ($i == 0){
		} else if ($toolsArray[$i-1] == $toolsArray[$i]){
			switch ($toolsArray[$i]){
				case "Pick": $pickCount += 1; break;
				case "Axe": $axeCount += 1; break;
				case "Sickle": $sickleCount += 1; break; 
			}
		}
		$overviewCounter = 0;
		// Go thru all the nodes in the SS
		for ($j = 0; $j < count($nodesData); $j++){
			//echo "node array: " . $nodesArray[$i] . "data: " . $nodesData[$j]['node'] . "<br>"; 
			if ($nodesArray[$i] == $nodesData[$j]['node']){
				for ($k = 0; $k < count($glyphsData); $k++){
					if ($toolsArray[$i] == $glyphsData[$k]['tool']){
						switch ($glyphsData[$k]['tool']){
							case "Pick":
							if ($pickCount == 0){
								if ($farms[0]['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
									$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
									array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
								} else if ($farms[0]['level'] == $glyphsData[$k]['level']){
									$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
									array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
								}
							}  else {
								if ($farms[0]['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
									$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
									$overviewPick[$overviewCounter][1] += $total;
									$overviewCounter += 1; 
								} else if ($farms[0]['level'] == $glyphsData[$k]['level']){
									$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
									$overviewPick[$overviewCounter][1] += $total;
									$overviewCounter += 1; 
								}
							} 
							break;

						}
					}
				}
			}
		}
	}

	echo "overviewPick: ". var_dump($overviewPick);
	$overviewPick = [];

	//echo var_dump($farms[0]['mats'][0]);
	//echo var_dump($node->farms->mats);
?>