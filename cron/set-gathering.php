<?php 
	include('../db/maps.php'); 	
?>

<?php
set_time_limit(1000);
//Gathering DBs
$nodesDB->set_values(); 
$glyphsDB->set_values();
?>

<?php
	// Get the data from the dbs
	$nodesJSON = $nodesDB->get_values(); 
	$glyphsJSON = $glyphsDB->get_values(); 
	$chestsJSON = $chestsDB->get_values();

	$nodesData = json_decode($nodesJSON, TRUE); 
	$glyphsData = json_decode($glyphsJSON, TRUE);
	$chestsData = json_decode($chestsJSON, TRUE);
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
			"time" => 280,
			"mats" => array("Palm Sapling", 15, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Jungle Plant", 14, "Sickle",
				"Mussel", 4, "Sickle"),
		),
		/*
		array(
			"map" => "Coral",
			"zone" => "Kryta",
			"level" => "71-80",
			"time" => 101,
			"mats" => array(
				"Coral (Level 80 Zone)", 9, "Sickle"),
		), */
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
			"map" => "Ember Bay",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 215,
			"mats" => array(
				"Palm Sapling", 14, "Axe",
				"Jungle Plant", 4, "Sickle",
				"Passiflora", 2, "Sickle"),
		),
		array(
			"map" => "Fireheart Rise",
			"zone" => "Ascalon",
			"level" => "56-70",
			"time" => 308,
			"mats" => array("Platinum Ore", 6, "Pick",
				"Rich Platinum Ore", 3, "Pick",
				"Inglewood Sapling", 9, "Axe",
				"Verdant Herbs (Ascalon)", 6, "Sickle"),
		),
		array(
			"map" => "Flax",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 260,
			"mats" => array(
				"Flax", 34, "Sickle"),
		),
		array(
			"map" => "Iron Marches",
			"zone" => "Maguuma Jungle",
			"level" => "56-70",
			"time" => 302,
			"mats" => array("Platinum Ore", 10, "Pick",
				"Rich Platinum Ore", 2, "Pick",
				"Inglewood Sapling", 10, "Axe"),
		),
		array(
			"map" => "Lake Doric",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 301,
			"mats" => array("Mithril Ore", 3, "Pick",
				"Orichalcum Ore", 2, "Pick",
				"Rich Orichalcum Ore", 0, "Pick",
				"Jade Fragment", 0, "Pick",
				"Baoba Sapling (Non-Maguuma)", 13, "Axe",
				"Ancient Sapling", 1, "Axe",
				"Verdant Herbs (Kryta)", 10, "Sickle"),
		), 
		array(
			"map" => "Maguuma Lilies",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 535,
			"mats" => array(
				"Jungle Plant", 44, "Sickle"),
		), 
		
		array(
			"map" => "Mount Maelstrom",
			"zone" => "Maguuma Jungle",
			"level" => "56-70",
			"time" => 237,
			"mats" => array("Mithril Ore", 0, "Pick",
				"Platinum Ore", 5, "Pick",
				"Rich Platinum Ore", 2, "Pick",
				"Banyan Sapling", 7, "Axe",
				"Baoba Sapling (Maguuma Jungle)", 4, "Axe",
				"Verdant Herbs (Maguuma Jungle)", 4, "Sickle"),
		), 
		array(
			"map" => "Mussels",
			"zone" => "Maguuma Jungle",
			"level" => "71-80",
			"time" => 309,
			"mats" => array(
				"Mussel", 29, "Sickle"),
		),
		// FOR THIS FARM SPECIFICALLY:
		// For each node, add the levels cooresponding to it too
		array(
			"map" => "Rich Nodes",
			"zone" => "Maguuma Jungle",
			"level" => array("16-40",
				"16-40",
				"16-40",
				"56-70",
				"56-70",
				"41-55",
				"56-70",
				"41-55",
				"16-40"),
			"time" => 874.5,
			"mats" => array("Iron Ore (Level <= 25 Zone)", 2, "Pick",
				"Iron Ore (Level > 25 Zone)", 1.5, "Pick",
				"Rich Iron Ore", 12, "Pick",
				"Platinum Ore", 7.5, "Pick",
				"Rich Platinum Ore", 11, "Pick",
				"Gold Ore", 1, "Pick",
				"Mature Herbs (Ascalon)", 1, "Sickle",
				"Young Herbs (Ascalon)", 1, "Sickle",
				"Herb Seedling (Ascalon)", 0.5, "Sickle"),
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
			"map" => "Siren\'s Landing",
			"zone" => "Orr",
			"level" => "71-80",
			"time" => 312,
			"mats" => array(
				"Cypress Sapling (Non-Magu, Non-Shiv)", 16, "Axe",
				"Orrian Sapling", 1, "Axe",
				"Orrian Oyster", 4, "Sickle",
				"Omnomberry", 4, "Sickle",
				"Orrian Truffle", 3, "Sickle",
				"Black Crocus", 2, "Sickle",
				"Waterlogged Chest", 16, "Chest"),
		), 
		array(
			"map" => "Sparkfly Fen",
			"zone" => "Maguuma Jungle",
			"level" => "56-70",
			"time" => 342,
			"mats" => array("Platinum Ore", 9, "Pick",
				"Rich Platinum Ore", 3, "Pick",
				"Banyan Sapling", 14, "Axe",
				"Verdant Herbs (Maguuma Jungle)", 3, "Sickle"),
		),
		/*
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
		*/
	);

	class Set_Gathering extends BenchmarksDB{
		public function set_benchmarks($farm, $time, $pick, $axe, $sickle, $chests){
			// Check if the table is empty or not
			$checkEmpty = "SELECT * FROM gathering"; 
			$resultEmpty = $this->connect()->query($checkEmpty);
			// Count how many rows are active. If there are none, then $rowCount = 0
			$rowCount = $resultEmpty->rowCount(); 
			// Go thru each tool and get their values for each glyph
			//echo "pick: " . count($pick) . " axe: " . count($axe) . " sickle: " . count($sickle);
			for ($i = 0; $i < count($pick); $i++){
				for ($j = 0; $j < count($axe); $j++){
					for ($k = 0; $k < count($sickle); $k++){
						for ($l = 0; $l < count($chests); $l++){
							// The [1] is the value of the glyph
							// Example: $pick[0][1] is array('watchknight', 12345)
							// Sum all the values of each glyph with each tool
							$gpc = ($pick[$i][1] + $axe[$j][1] + $sickle[$k][1] + $chests[$l][1]) * 0.85;
							$resultPick = $pick[$i][0];
							$resultAxe = $axe[$j][0];
							$resultSickle = $sickle[$k][0];
							$gph = (3600/$time) * $gpc;

							// Format the time as in mins : seconds
							$leftNum = floor($time/60); 
							$rightNum = $time - ($leftNum * 60);
							if (strlen($rightNum) <= 1){
								$rightNum = "0".$rightNum; 
							} else if (strlen($rightNum) > 1){
								$rightNum = substr($rightNum, 0, 2);
							}
							$duration = $leftNum . ":" . $rightNum;

							$sql = "INSERT IGNORE INTO gathering (name, pick, axe, sickle, gold_per_hour, gold_per_char, time_per_char)
								VALUES ('$farm', '$resultPick', '$resultAxe', '$resultSickle', '$gph', '$gpc', '$duration')
								ON DUPLICATE KEY UPDATE 
									name = VALUES(name),
									pick = VALUES(pick),
									axe = VALUES(axe),
									sickle = VALUES(sickle),
									gold_per_hour = VALUES(gold_per_hour),
									gold_per_char = VALUES(gold_per_char),
									time_per_char = VALUES(time_per_char);";
							$stmt = $this->connect()->exec($sql);
						}
							
					}
				}
			}
		}
	}

	function set_gathering_benchmarks($farm, $nodesData, $glyphsData, $chestsData){
		$nodesArray = [];
		$qtyArray = []; 
		$toolsArray = []; 

		$overviewPick = [];
		$overviewAxe = [];
		$overviewSickle = [];
		$overviewChests = [];

		$pickCount = 0;
		$axeCount = 0;
		$sickleCount = 0;
		$chestsCount = 0;

		// Go through the farm['mats'] array and check the parameters
		// There are 3 parameters: Node name, Node qty, and Tool type
		// Push each paramater into their own arrays
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

		// Go thru each node listed in each farm above
		for ($i = 0; $i < count($nodesArray); $i++){
			if ($i == 0){
				// If the previous tool type matches the current one, then add to the respective count
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
						// Check if the tools for the current node match the tools in the glyph data
						if ($toolsArray[$i] == $glyphsData[$k]['tool']){
							// Switch between each tool
							switch ($glyphsData[$k]['tool']){
								case "Pick":
								if ($pickCount == 0){
									// Check if the level of the farm has multiple or not
									if (is_array($farm['level']) == TRUE){
										if ($glyphsData[$k]['level'] == "All"){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										} else if ($farm['level'][$i] == $glyphsData[$k]['level']){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
											//echo "glyph: " .  $glyphsData[$k]['glyph'] . " | total: " . $total . "<br>"; 
										}
										//echo "Gylph: " . $glyphsData[$k]['glyph'] . " value: " . $glyphsData[$k]['value_per_node']. "<br>";
										//echo "glyph: " .  $glyphsData[$k]['glyph'] . " | total: " . $total . "<br>"; 
										array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
									}
									// If not multiple levels => check if higher level and if glyph is for all
									else if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
										// Bounty check 
										if ($glyphsData[$k]['glyph'] == "Bounty"){
											$total = ($nodesData[$j]['value'] * $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										} else { // Not bounty
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										}
										array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
									// If not either => match the levels
									} else if ($farm['level'] == $glyphsData[$k]['level']){
										$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										array_push($overviewPick, array($glyphsData[$k]['glyph'], $total));
									}
								}  else {
									// Check if the level of the farm has multiple or not
									if (is_array($farm['level']) == TRUE){
										if ($glyphsData[$k]['level'] == "All"){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										} else if ($farm['level'][$i] == $glyphsData[$k]['level']){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										}
										$overviewPick[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									}
									else if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
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
									// Check if the level of the farm has multiple or not
									if (is_array($farm['level']) == TRUE){
										if ($glyphsData[$k]['level'] == "All"){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										} else if ($farm['level'][$i] == $glyphsData[$k]['level']){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										}
										array_push($overviewAxe, array($glyphsData[$k]['glyph'], $total));
									}
									else if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
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
									// Check if the level of the farm has multiple or not
									if (is_array($farm['level']) == TRUE){
										if ($glyphsData[$k]['level'] == "All"){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										} else if ($farm['level'][$i] == $glyphsData[$k]['level']){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										}
										$overviewAxe[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									}
									else if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
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
									// Check if the level of the farm has multiple or not
									if (is_array($farm['level']) == TRUE){
										if ($glyphsData[$k]['level'] == "All"){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										} else if ($farm['level'][$i] == $glyphsData[$k]['level']){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										}
										array_push($overviewSickle, array($glyphsData[$k]['glyph'], $total));
									}
									else if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
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
									// Check if the level of the farm has multiple or not
									if (is_array($farm['level']) == TRUE){
										if ($glyphsData[$k]['level'] == "All"){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i]; 
										} else if ($farm['level'][$i] == $glyphsData[$k]['level']){
											$total = ($nodesData[$j]['value'] + $glyphsData[$k]['value_per_node']) * $qtyArray[$i];
										}
										$overviewSickle[$overviewCounter][1] += $total;
										$overviewCounter += 1; 
									}
									else if ($farm['level'] == "71-80" && $glyphsData[$k]['level'] == "All"){
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
			} // End of nodes check loop
			// Check if there's a chest in the farm
			if ($toolsArray[$i] == "Chest"){
				for ($l = 0; $l < count($chestsData); $l++){
					if ($nodesArray[$i] == $chestsData[$l]['chest']){
						$total = $chestsData[$l]['value'] * $qtyArray[$i];
						array_push($overviewChests, array($chestsData[$l]['chest'], $total)); 
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
		if (count($overviewSickle) == 0){
			array_push($overviewSickle, array("N/A", 0));
		}
		if (count($overviewChests) == 0){
			array_push($overviewChests, array("N/A", 0));
		}
		$setGatheringDB = new Set_Gathering(); 
		$setGatheringDB->set_benchmarks($farm['map'], $farm['time'], $overviewPick, $overviewAxe, $overviewSickle, $overviewChests);
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
		set_gathering_benchmarks($farms[$f], $nodesData, $glyphsData, $chestsData); 
	}
	
	
	

	
	

	//echo "overviewAxe: ". var_dump($overviewPick);

	//echo var_dump($farm['mats'][0]);
	//echo var_dump($node->farms->mats);
?>