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
			"time" => 499,
			"mats" => array("Mithril Ore", 7, "Pick",
				"Orichalcum Ore", 1, "Pick",
				"Eternal Ice", 3, "Pick",
				"Cypress Sapling (Shiverpeaks)", 19, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Verdant Herbs (Shiverpeaks)", 27, "Sickle",
				"Winter Root Vegetable", 11, "Sickle"),
		),
		array(
			"map" => "Bloodstone Fen",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 397,
			"mats" => array("Bloodstone Crystal", 5, "Pick",
				"Palm Sapling", 19, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Jungle Plant", 15, "Sickle",
				"Mussel", 4, "Sickle"),
		),
		array(
			"map" => "Draconis Mons",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 502,
			"mats" => array("Mithril Ore", 5, "Pick",
				"Palm Sapling", 19, "Axe",
				"Primordial Orchid", 13, "Axe",
				"Jungle Plant", 21, "Sickle"),
		),
		array(
			"map" => "Dredgehaunt Cliffs",
			"zone" => "Shiverpeaks",
			"level" => "41-55",
			"time" => 664,
			"mats" => array("Iron Ore (Level > 25 Zone)", 11, "Pick",
				"Rich Iron Ore", 1, "Pick",
				"Gold Ore", 8, "Pick",
				"Rich Gold Ore", 1, "Pick",
				"Fir Sapling", 25, "Axe",
				"Young Herbs (Shiverpeaks)", 6, "Sickle",
				"Onion", 3, "Sickle",
				"Zucchini", 1, "Sickle",
				"Root Vegetable", 5, "Sickle",
				"Mature Herbs (Shiverpeaks)", 3, "Sickle",
				"Scallion", 1, "Sickle"),
		),
		array(
			"map" => "Flax",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 3600,
			"mats" => array("Mithril Ore", 1, "Pick",
				"Orichalcum Ore", 2, "Pick",
				"Bloodstone Crystal", 1, "Pick",
				"Palm Sapling", 1, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Flax", 36, "Sickle"),
		),
		array(
			"map" => "Lake Doric",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 434,
			"mats" => array("Mithril Ore", 7, "Pick",
				"Orichalcum Ore", 2, "Pick",
				"Rich Orichalcum Ore", 1, "Pick",
				"Jade Fragment", 10, "Pick",
				"Baoba Sapling (Non-Maguuma)", 14, "Axe",
				"Ancient Sapling", 2, "Axe",
				"Verdant Herbs (Kryta)", 11, "Sickle",
				"Sawgill Mushroom", 8, "Sickle",
				"Lotus Root", 1, "Sickle"),
		), 
		array(
			"map" => "Maguuma Lily Farm",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 3600,
			"mats" => array(
				"Jungle Plant", 44, "Sickle"),
		), 
		
		array(
			"map" => "Mount Maelstrom",
			"zone" => "Maguuma Jungle",
			"level" => "56-70",
			"time" => 3600,
			"mats" => array("Mithril Ore", 2, "Pick",
				"Platinum Ore", 7, "Pick",
				"Rich Platinum Ore", 3, "Pick",
				"Banyan Sapling", 12, "Axe",
				"Baoba Sapling (Maguuma Jungle)", 6, "Axe",
				"Mature Herbs (Maguuma Jungle)", 3, "Sickle",
				"Verdant Herbs (Maguuma Jungle)", 4, "Sickle",
				"Leek", 7, "Sickle",
				"Asparagus", 2, "Sickle"),
		),
		array(
			"map" => "Mussel Farm",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 475,
			"mats" => array(
				"Mussel", 39, "Sickle"),
		),
		array(
			"map" => "Sandswept Isles",
			"zone" => "Crystal Desert",
			"level" => "71-80",
			"time" => 1530,
			"mats" => array("Mithril Ore", 32, "Pick",
				"Rich Mithril Ore", 1, "Pick",
				"Orichalcum Ore", 2, "Pick",
				"Rich Orichalcum Ore", 1, "Pick",
				"Difluorite Crystal", 30, "Pick",
				"Baoba Sapling (Non-Maguuma)", 20, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Cluster of Desert Herbs", 10, "Sickle",
				"Desert Vegetable", 11, "Sickle",
				"Flax", 10, "Sickle",
				"Mussel", 26, "Sickle",
				"Coral", 10, "Sickle",
				"Artichoke", 4, "Sickle",
				"Passiflora", 2, "Sickle",
				"Lentil", 6, "Sickle"),
		), 
		array(
			"map" => "Sirens Landing",
			"zone" => "Orr",
			"level" => "71-80",
			"time" => 3600,
			"mats" => array("Mithril Ore", 2, "Pick",
				"Cypress Sapling (Non-Magu, Non-Shiv)", 17, "Axe",
				"Ancient Sapling", 3, "Axe",
				"Orrian Oyster", 5, "Sickle",
				"Omnomberry", 2, "Sickle",
				"Orrian Truffle", 4, "Sickle",
				"Black Crocus", 2, "Sickle"),
		), 
		array(
			"map" => "Sparkfly Fen",
			"zone" => "Maguuma Jungle",
			"level" => "56-70",
			"time" => 3600,
			"mats" => array("Platinum Ore", 13, "Pick",
				"Rich Platinum Ore", 3, "Pick",
				"Banyan Sapling", 25, "Axe",
				"Varietgated Taproot", 4, "Sickle",
				"Leek", 4, "Sickle",
				"Blackberry", 4, "Sickle",
				"Verdant Herbs (Maguuma Jungle)", 2, "Sickle"),
		), 
		array(
			"map" => "Timberline Falls",
			"zone" => "Shiverpeaks",
			"level" => "56-70",
			"time" => 3600,
			"mats" => array("Gold Ore", 3, "Pick",
				"Iron Ore", 2, "Pick",
				"Platinum Ore", 17, "Pick",
				"Rich Platinum Ore", 1, "Pick",
				"Fir Sapling", 4, "Axe",
				"Pine Sapling", 19, "Axe",
				"Varietgated Taproot", 5, "Sickle",
				"Portobello Mushroom", 1, "Sickle",
				"Scallion", 4, "Sickle",
				"Blackberry", 4, "Sickle",
				"Mature Herbs (Shiverpeaks)", 8, "Sickle"),
		), 
		array(
			"map" => "Winterberry",
			"zone" => "Shiverpeaks",
			"level" => "71-80",
			"time" => 3600,
			"mats" => array("Orichalcum Ore", 1, "Pick",
				"Rich Mithril Ore", 1, "Pick",
				"Cypress Sapling (Shiverpeaks)", 12, "Axe",
				"Winterberry Bush", 38, "Sickle",
				"Winter Root Vegetable", 1, "Sickle",
				"Leek", 2, "Sickle",
				"Verdant Herbs (Shiverpeaks)", 2, "Sickle"),
		), 
		/*
		array(
			"map" => "Rich Nodes",
			"zone" => "Maguuma Jungle",
			"level" => "56-70",
			"mats" => array("Iron Ore (Level <= 25 Zone)", 2, "Pick",
				"Rich Iron Ore", 12, "Pick",
				"Platinum Ore", 4, "Pick",
				"Rich Platinum Ore", 13, "Pick",
				"Gold Ore", 2, "Pick",
				"Mature Herbs (Ascalon)", 1, "Sickle",
				"Young Herbs (Ascalon)", 1, "Sickle"),
		), 
		*/
	);

	class Gathering extends BenchmarksDB{
		public function set_benchmarks($farm, $time, $pick, $axe, $sickle){
			// Check if the table is empty or not
			$checkEmpty = "SELECT * FROM gathering"; 
			$resultEmpty = $this->connect()->query($checkEmpty);
			// Count how many rows are active. If there are none, then $rowCount = 0
			$rowCount = $resultEmpty->rowCount(); 
			// Go thru each tool and get their values for each glyph

			for ($i = 0; $i < count($pick); $i++){
				for ($j = 0; $j < count($axe); $j++){
					for ($k = 0; $k < count($sickle); $k++){
						// The [1] is the value of the glyph
						// Example: $pick[0][1] is array('watchknight', 12345)
						// Sum all the values of each glyph with each tool
						$gpc = ($pick[$i][1] + $axe[$j][1] + $sickle[$k][1]) * 0.85;
						$resultPick = $pick[$i][0];
						$resultAxe = $axe[$j][0];
						$resultSickle = $sickle[$k][0];
						$gph = (3600/$time) * $gpc;
						
						$sql = "INSERT IGNORE INTO gathering (name, pick, axe, sickle, gold_per_hour, gold_per_char, time_per_char)
							VALUES ('$farm', '$resultPick', '$resultAxe', '$resultSickle', '$gph', '$gpc', '$time')
							ON DUPLICATE KEY UPDATE 
								name = VALUES(name),
								pick = VALUES(pick),
								axe = VALUES(axe),
								sickle = VALUES(sickle),
								gold_per_hour = VALUES(gold_per_hour),
								gold_per_char = VALUES(gold_per_char),
								time_per_char = VALUES(time_per_char);";
						$stmt = $this->connect()->exec($sql);	
						/*
						if ($rowCount > 0){
							$sql = "UPDATE gathering
							SET name = '$farm',
								pick = '$resultPick',
								axe = '$resultAxe',
								sickle = '$resultSickle',
								gold_per_char = '$gpc'
							WHERE name = '$farm'
							AND	pick = '$resultPick'
							AND	axe = '$resultAxe'
							AND	sickle = '$resultSickle';";
							$stmt = $this->connect()->exec($sql);	
						} else {
							$sql = "INSERT IGNORE INTO gathering (name, pick, axe, sickle, gold_per_char)
							VALUES ('$farm', '$resultPick', '$resultAxe', '$resultSickle', '$gpc');";
							$stmt = $this->connect()->exec($sql);	
						} 
						*/
					}
				}
			}
		}	
	}

	function set_gathering_benchmarks($farm, $nodesData, $glyphsData){
		$nodesArray = [];
		$qtyArray = []; 
		$toolsArray = []; 

		$overviewPick = [];
		$overviewAxe = [];
		$overviewSickle = [];

		$pickCount = 0;
		$axeCount = 0;
		$sickleCount = 0;

		for($i = 0; $i < count($farm['mats']); $i++){
			switch ($i % 3){
				// Node names
				case 0: array_push($nodesArray, $farm['mats'][$i]); break;
				// Node qtys
				case 1: array_push($qtyArray, $farm['mats'][$i]); break;
				// Tool 
				case 2: array_push($toolsArray, $farm['mats'][$i]); break;
			}
		} 
		//echo "map: " . var_dump($farm['map']);

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
			$total = 0;
			// Go thru all the nodes in the SS
			for ($j = 0; $j < count($nodesData); $j++){
				//echo "node array: " . $nodesArray[$i] . "data: " . $nodesData[$j]['node'] . "<br>"; 
				if ($nodesArray[$i] == $nodesData[$j]['node']){
					for ($k = 0; $k < count($glyphsData); $k++){
						if ($toolsArray[$i] == $glyphsData[$k]['tool']){
							switch ($glyphsData[$k]['tool']){
								case "Pick":
								if ($pickCount == 0){
									if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
									}
								}  else {
									if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										$overviewPick[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										$overviewPick[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									}
								} 
								break;
								case "Axe":
								if ($axeCount == 0){ 
									if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										array_push($overviewAxe, array($glyphsData[$k]['glyph'], $total));
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										array_push($overviewAxe, array($glyphsData[$k]['glyph'], $total));
									}
								}  else {
									if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										$overviewAxe[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										$overviewAxe[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									}
								} 
								break;
								case "Sickle":
								if ($sickleCount == 0){ 
									if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										//echo "glyph: " . $glyphsData[$k] . " total: " . $total . "<br>"; 
										array_push($overviewSickle, array($glyphsData[$k]['glyph'], $total));
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										array_push($overviewSickle, array($glyphsData[$k]['glyph'], $total));
									}
								}  else {
									if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										$overviewSickle[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										$overviewSickle[$overviewCounter][1] += $total;
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
		// If there's a farm where it doesn't use a specific type of tool at all
		// then fill the empty array with "N/A" and their total as 0
		// This prevents an error with set_benchmarks since the arrays need to not be empty to continue their loop
		if (count($overviewPick) == 0){
			array_push($overviewPick, array("N/A", 0));
		}
		if (count($overviewAxe) == 0){
			array_push($overviewAxe, array("N/A", 0));
		}
		$gatheringDB = new Gathering(); 
		$gatheringDB->set_benchmarks($farm['map'], $farm['time'], $overviewPick, $overviewAxe, $overviewSickle);
		/*
		function add_data_into_array($toolCount, $overviewArray){
			if ($toolCount == 0){ 
				if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
					$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
					array_push($overviewArray, array($glyphsData[$k]['glyph'], $total));
				} else if ($farm['level'] == $glyphsData[$k]['level']){
					$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
					array_push($overviewArray, array($glyphsData[$k]['glyph'], $total));
				}
			}  else {
				if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
					$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
					$overviewArray[$overviewCounter][1] += $total;
					$overviewCounter += 1; 
				} else if ($farm['level'] == $glyphsData[$k]['level']){
					$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
					$overviewArray[$overviewCounter][1] += $total;
					$overviewCounter += 1; 
				}
			}
		} */
	}
	for ($f = 0; $f < count($farms); $f++){
		//echo var_dump($farms);
		set_gathering_benchmarks($farms[$f], $nodesData, $glyphsData); 
	}
	
	
	

	
	

	//echo "overviewAxe: ". var_dump($overviewPick);

	//echo var_dump($farm['mats'][0]);
	//echo var_dump($node->farms->mats);
?>