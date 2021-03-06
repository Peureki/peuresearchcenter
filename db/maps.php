<?php
// Include creds 
chdir(dirname(__FILE__));
include "../db/class.php"; 

class AltParking extends BenchmarksDB{
	public function set_values(){
		$altAPI = file_get_contents("https://script.google.com/macros/s/AKfycbzfNQgjkDxz5yMDTEbhXFGU7_AQL4GUuxf-iBYc-togAvRBrhWjuQcAtw/exec");
		$altData = json_decode($altAPI, TRUE);

		// Check if the table is empty or not
		$checkEmpty = "SELECT * FROM nodes"; 
		$resultEmpty = $this->connect()->query($checkEmpty);
		// Check if there's any rows 
		// If yes => Update data
		// If no => Create table and fill in data
		foreach ($altData['spreadsheet'] as $altSS){
			$type = $altSS['type'];
			$repeat = $altSS['repeat']; 
			$map = addslashes($altSS['map']);
			$name = addslashes($altSS['name']);
			$value = $altSS['benchmark'];
			// Check if there's no value at all
			// If yes => skip, continue loop
			// Otherwise => print to sql db
			if ($value == ""){
				echo "value: ".$value;
				continue;
			} else {
				$sql = "INSERT IGNORE INTO alt_parking (type, repeatable, map, name, value)
				VALUES ('$type', '$repeat', '$map', '$name', '$value')
				ON DUPLICATE KEY UPDATE 
					type = VALUES(type),
					repeatable = VALUES(repeatable),
					map = VALUES(map),
					name = VALUES(name),
					value = VALUES(value);";
				$stmt = $this->connect()->exec($sql);
			}
		}
	}
	public function get_values(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM alt_parking ORDER BY value DESC";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}

class Maps extends BenchmarksDB{
	public function setMaps($table){
		// Get JSON from Google Spreadsheet 
		$json = file_get_contents('https://script.google.com/macros/s/AKfycbwzCoaJtZVmPUO5nus0i6mLWi1CJhXPkww1NFGX/exec');
		$mapObj = json_decode($json, TRUE);

		// Check if the google sheets table broke. It breaks usually when there's a farm that is a neg value
		$negCheck = 0;
		$ssCount = 0; 
		foreach ($mapObj['spreadsheet'] as $ss){
			// Check that there's no empty farm. If there is, then stop the loop (at the end of the list)
			if (empty($ss['farmtype'])){
				break;
			}
			// Check if there's a gph < 0
			if ($ss['gold'] < 0){
				$negCheck = -1;
			}
			$ssCount += 1; 
		}
		// If google sheets is broken, then don't do anything and keep the previous table
		// else, run script normally
		if ($negCheck != -1){
			// Connect to the DB
			$sql = "SELECT * FROM $table";
			$result = $this->connect()->query($sql);
			// Create empty array
			$array = Array();
			// Go thru DB and fetch contents into array
			while($row = $result->fetch()){
				$array[] = $row; 
			}

			// If the amount of farms in the SS match the same amount in the current DB,
			// then only update exisiting data
			if (count($array) == $ssCount){
				// Set each var to match var in spreadsheet
				foreach ($mapObj['spreadsheet'] as $ss){
					// Check if first attr of array is empty
					// If yes, stop the loop
					if (empty($ss['farmtype'])){
						break;
					}
					$farmtype = $ss['farmtype'];
					$map = $ss['map'];
					$time = $ss['time'];
					$gold_per_hour = $ss['gold'];
					$total_gold = $ss['goldss'];
					$karma = $ss['karma'];
					$spirit_shards = $ss['spiritshard'];
					$trade_contracts = $ss['tradecontract'];
					$unbound_magic = $ss['unboundmagic'];
					$volatile_magic = $ss['volatilemagic'];


					// If a map name contains ' such as Siren's Landing, repalce the ' with \' so it can be disregarded as another single quote
					if (strpos($map, "'") == true){
						$map = str_replace("'", "\'", $map);
					}
					
					$sql = "UPDATE $table
						SET type = '$farmtype',
						name = '$map',
						time = '$time',
						gold_per_hour = '$gold_per_hour',
						total_gold = '$total_gold',
						karma = '$karma',
						spirit_shards = '$spirit_shards',
						trade_contracts = 'trade_contracts',
						unbound_magic = '$unbound_magic',
						volatile_magic = '$volatile_magic'
						WHERE name = '$map';";
					
					// Insert into DB
					/*
					$sql = "INSERT INTO $table (type, name, time, gold_per_hour, total_gold, karma, spirit_shards, trade_contracts, unbound_magic, volatile_magic)
					VALUES ('$farmtype', '$map', '$time', '$gold_per_hour', '$total_gold', '$karma', '$spirit_shards', '$trade_contracts', '$unbound_magic', '$volatile_magic');";
					*/
					// Execute the SQL stmt 
					$stmt = $this->connect()->exec($sql);
				} 
				// Otherwise if there's one less or more farms
				// Redo the list to add or remove stuff
			} else {
				// Remove items from previous list
				$sql = "DELETE FROM $table"; 
				$stmt = $this->connect()->exec($sql);

				// Set each var to match var in spreadsheet
				foreach ($mapObj['spreadsheet'] as $ss){
					// Check if first attr of array is empty
					// If yes, stop the loop
					if (empty($ss['farmtype'])){
						break;
					}
					$farmtype = $ss['farmtype'];
					$map = $ss['map'];
					$time = $ss['time'];
					$gold_per_hour = $ss['gold'];
					$total_gold = $ss['goldss'];
					$karma = $ss['karma'];
					$spirit_shards = $ss['spiritshard'];
					$trade_contracts = $ss['tradecontract'];
					$unbound_magic = $ss['unboundmagic'];
					$volatile_magic = $ss['volatilemagic'];

					// If a map name contains ' such as Siren's Landing, repalce the ' with \' so it can be disregarded as another single quote
					if (strpos($map, "'") == true){
						$map = str_replace("'", "\'", $map);
					}
					// Insert into DB
					$sql = "INSERT IGNORE INTO $table (type, name, time, gold_per_hour, total_gold, karma, spirit_shards, trade_contracts, unbound_magic, volatile_magic)
					VALUES ('$farmtype', '$map', '$time', '$gold_per_hour', '$total_gold', '$karma', '$spirit_shards', '$trade_contracts', '$unbound_magic', '$volatile_magic');";
					// Execute the SQL stmt 
					$stmt = $this->connect()->exec($sql);
				}
			}

			
		}
	}

	public function getMaps($table){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM $table ORDER BY gold_per_hour DESC";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}

class Chests extends BenchmarksDB{
	
	public function set_values(){
		$chestAPI = file_get_contents("https://script.google.com/macros/s/AKfycbyXE3uJeUftQvlzCorAJ_DL4fsZa25GVx16Pr8MyX99DaZ2q6HX9mamMw/exec");
		$chestData = json_decode($chestAPI, TRUE);

		// Check if the table is empty or not
		$checkEmpty = "SELECT * FROM nodes"; 
		$resultEmpty = $this->connect()->query($checkEmpty);
		// Check if there's any rows 
		// If yes => Update data
		// If no => Create table and fill in data
		foreach ($chestData['spreadsheet'] as $chestSS){
			$type = $chestSS['type'];
			$map = addslashes($chestSS['map']); 
			$chest = $chestSS['chest'];
			$value = $chestSS['benchmark'];
			// Check if there's no value at all
			// If yes => skip, continue loop
			// Otherwise => print to sql db
			if ($value == ""){
				echo "value: ".$value;
				continue;
			} else {
				$sql = "INSERT IGNORE INTO chests (type, map, chest, value)
				VALUES ('$type', '$map', '$chest', '$value')
				ON DUPLICATE KEY UPDATE 
					type = VALUES(type),
					map = VALUES(map),
					chest = VALUES(chest),
					value = VALUES(value);";
				$stmt = $this->connect()->exec($sql);
			}
		}
	}
	public function get_values(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM chests ORDER BY value DESC";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}

}

class DWC extends BenchmarksDB {
	public function set_tracks(){
		// Get JSON from Google Spreadsheet 
		$json = file_get_contents('https://script.google.com/macros/s/AKfycbxrOI8g0EYxJPfk-hj-Wkajm13xh0xlYHMKNZebL_xFtKULDipA/exec');
		$dwcObj = json_decode($json, TRUE);

		foreach ($dwcObj['spreadsheet'] as $ss){
			$count = 0;

			if ($ss['item'] == "Glory to the Ash Legion" ||
				$ss['item'] == "Glory to the Flame Legion" ||
				$ss['item'] == "Glory to the Iron Legion" ||
				$ss['item'] == "Glory to the Blood Legion" ||
				$ss['item'] == "Death to the Dominion" ||
				$ss['item'] == "Death to the Corrupted"){
				$current_track = $ss['item'];
				continue; 
			}
			if ($ss['item'] == "Total:"){
				switch ($current_track){
					case "Glory to the Ash Legion":
						$track_value = $ss['total'];
						$comm_value = $track_value / 5000;
						$count = 1;
						break;
					case "Glory to the Flame Legion":
						$track_value = $ss['total'];
						$comm_value = $track_value / 5000;
						$count = 1;
						break;
					case "Glory to the Iron Legion":
						$track_value = $ss['total'];
						$comm_value = $track_value / 5000;
						$count = 1;
						break;
					case "Glory to the Blood Legion":
						$track_value = $ss['total'];
						$comm_value = $track_value / 5000;
						$count = 1;
						break;
					case "Death to the Dominion":
						$track_value = $ss['total'];
						$comm_value = $track_value / 5000;
						$count = 1;
						break;
					case "Death to the Corrupted":
						$track_value = $ss['total'];
						$comm_value = $track_value / 5000;
						$count = 1;
						break;
				}
			}
			
			if ($count != 0){
				$sql = "INSERT INTO dwc_tracks (name, track_value, comm_value)
					VALUES ('$current_track', '$track_value', '$comm_value')
					ON DUPLICATE KEY UPDATE name = '$current_track', track_value = '$track_value', comm_value = '$comm_value';";
				// Execute the SQL stmt 
				$stmt = $this->connect()->exec($sql);
				$current_track = '';
			}
			
		}	
	}

	public function get_tracks(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM dwc_tracks ORDER BY track_value DESC";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}

class Glyphs extends BenchmarksDB{
	public function set_values(){
		$glyphsJSON = file_get_contents('https://script.google.com/macros/s/AKfycbzFqLJFdm5TeCDGhrUPIZvIhW87IfdgTWS2uYWTWH4dhTcepYFg/exec');
		$glyphsData = json_decode($glyphsJSON, TRUE); 

		foreach ($glyphsData['spreadsheet'] as $glyphSS){
			$glyph = $glyphSS['glyph'];
			$tool = $glyphSS['tool'];
			$level = $glyphSS['level'];
			$vps = $glyphSS['vps'];
			$vpn = $glyphSS['vpn']; 

			$sql = "INSERT IGNORE INTO glyphs (glyph, tool, level, value_per_strike, value_per_node)
			VALUES ('$glyph', '$tool', '$level', '$vps', '$vpn')
			ON DUPLICATE KEY UPDATE 
				glyph = VALUES(glyph),
				tool = VALUES(tool),
				level = VALUES(level),
				value_per_strike = VALUES(value_per_strike),
				value_per_node = VALUES(value_per_node);";
			$stmt = $this->connect()->exec($sql);
		}
	}

	public function get_values(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM glyphs";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}

class Metas extends BenchmarksDB{
	public function set_values(){
		$metaAPI = file_get_contents("https://script.google.com/macros/s/AKfycbx-5f0DZD1b1TUkZTEd_-Suit3MGIfrfptc19RZ/exec");
		$metaData = json_decode($metaAPI, TRUE);

		// Check if the table is empty or not
		$checkEmpty = "SELECT * FROM nodes"; 
		$resultEmpty = $this->connect()->query($checkEmpty);
		// Check if there's any rows 
		// If yes => Update data
		// If no => Create table and fill in data
		foreach ($metaData['spreadsheet'] as $metaSS){
			$type = $metaSS['farmtype'];
			$map = addslashes($metaSS['map']); 
			$meta = addslashes($metaSS['meta']);
			$time = $metaSS['time'];
			$total_gold = $metaSS['gold'];
			$gold_per_min = $metaSS['goldss'];
			$karma = $metaSS['karma'];
			$spirit_shards = $metaSS['spiritshard'];
			$trade_contracts = $metaSS['tradecontract'];
			$elegy_mosaic = $metaSS['elegymosaic'];
			$unbound_magic = $metaSS['unboundmagic'];
			$volatile_magic = $metaSS['volatilemagic'];

			// Check if there's any value in total_gold
			// If not, skip the loop
			if ($total_gold == ""){
				continue;
			} else {
				$sql = "INSERT IGNORE INTO metas (type, map, meta, time, total_gold, gold_per_min, karma, spirit_shards, trade_contracts, elegy_mosaics, unbound_magic, volatile_magic)
				VALUES ('$type', '$map', '$meta', '$time', '$total_gold', '$gold_per_min', '$karma', '$spirit_shards', '$trade_contracts', 'elegy_mosaics', '$unbound_magic', '$volatile_magic')
				ON DUPLICATE KEY UPDATE 
					type = VALUES(type),
					map = VALUES(map),
					meta = VALUES(meta),
					time = VALUES(time),
					total_gold = VALUES(total_gold),
					gold_per_min = VALUES(gold_per_min),
					karma = VALUES(karma),
					spirit_shards = VALUES(spirit_shards),
					trade_contracts = VALUES(trade_contracts),
					elegy_mosaics = VALUES(elegy_mosaics),
					unbound_magic = VALUES(unbound_magic),
					volatile_magic = VALUES(volatile_magic);";
				$stmt = $this->connect()->exec($sql);
			}
		}
	}
	public function get_values(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM metas ORDER BY gold_per_min DESC";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}

class Nodes extends BenchmarksDB{
	public function set_values(){
		$nodeAPI = file_get_contents("https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec");
		$nodeData = json_decode($nodeAPI, TRUE);

		// Check if the table is empty or not
		$checkEmpty = "SELECT * FROM nodes"; 
		$resultEmpty = $this->connect()->query($checkEmpty);
		// Check if there's any rows 
		// If yes => Update data
		// If no => Create table and fill in data
		if ($resultEmpty->rowCount() > 0){
			foreach ($nodeData['spreadsheet'] as $nodeSS){
				$item = $nodeSS['item'];
				$worth = $nodeSS['worth']; 

				// Insert into DB
				$sql = "UPDATE nodes
				SET node = '$item', value = '$worth'
				WHERE node = '$item';";
				// Execute the SQL stmt 
				$stmt = $this->connect()->exec($sql);
			}
		} else {
			foreach ($nodeData['spreadsheet'] as $nodeSS){
				$item = $nodeSS['item'];
				$worth = $nodeSS['worth']; 
				$sql = "INSERT IGNORE INTO nodes (node, value)
				VALUES ('$item', '$worth');";
				// Execute the SQL stmt 
				$stmt = $this->connect()->exec($sql);
			}
		}
		
	}

	public function get_values(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM nodes";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}

class Gathering extends BenchmarksDB{
	
	public function get_specific_values($request){
		switch ($request){
			// Get everything
			case "All":
			$sql = "SELECT * FROM gathering 
				WHERE gold_per_hour IN 
					( SELECT MAX(gold_per_hour) FROM gathering GROUP BY name) 
				ORDER BY `gathering`.`gold_per_hour` DESC";
			break; 
			// Get the top gph of each farm only
			case "Top of each farm": 
			$sql = "SELECT * FROM gathering 
				WHERE gold_per_hour IN 
					( SELECT MAX(gold_per_hour) FROM gathering GROUP BY name) 
				ORDER BY `gathering`.`gold_per_hour` DESC";
			break;
		}
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
	// Return only a specific map
	// ex: $request = "Sandswept Isles"
	public function get_specific_map($request){
		$sql = "SELECT * FROM `gathering` WHERE `name` LIKE '$request' ORDER BY `gold_per_hour` DESC";

		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
	// Return gathering farms based on the user's selection of tools
	// Ex: Leatherworker, Leatherworker, Leatherwork
	// Return all benchmarks with leatherworker
	public function get_specific_tools($pick, $axe, $sickle){
		$sql = "SELECT * FROM `gathering` 
		WHERE (pick = 'N/A' OR pick = '$pick')
		AND (axe = 'N/A' OR axe = '$axe')
    	AND (sickle = 'N/A' OR sickle = '$sickle')
		ORDER BY gold_per_hour DESC;";

		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}

}

class Fishing extends BenchmarksDB{
	public function set_values(){
		$fishingAPI = file_get_contents("https://script.google.com/macros/s/AKfycbxbFUw06Ky56YWoos-f21Jln4ccEZ3atGKbrUYhtq7OPfOvJnqcVaEdzYYnZ9y0-o91dg/exec");
		$fishingData = json_decode($fishingAPI, TRUE);

		// Check if the table is empty or not
		$checkEmpty = "SELECT * FROM fishing"; 
		$resultEmpty = $this->connect()->query($checkEmpty);
		// Check if there's any rows 
		// If yes => Update data
		// If no => Create table and fill in data
		foreach ($fishingData['spreadsheet'] as $fishingSS){
			$fish = addslashes($fishingSS['fish']);
			$rarity = $fishingSS['rarity']; 
			$mats = $fishingSS['mats'];
			$dr = str_replace("%","",$fishingSS['dr']);
			$size = $fishingSS['size'];
			$map = addslashes($fishingSS['map']);
			$hole = $fishingSS['hole'];
			$bait = $fishingSS['bait'];
			$time = $fishingSS['time'];


			$sql = "INSERT IGNORE INTO fishing (fish, rarity, mats, dr, size, map, hole, bait, time)
			VALUES ('$fish', '$rarity', '$mats', '$dr', '$size', '$map', '$hole', '$bait', '$time')
			ON DUPLICATE KEY UPDATE 
				fish = VALUES(fish),
				rarity = VALUES(rarity),
				mats = VALUES(mats),
				dr = VALUES(dr),
				size = VALUES(size),
				map = VALUES(map),
				hole = VALUES(hole),
				bait = VALUES(bait),
				time = VALUES(time);";
			$stmt = $this->connect()->exec($sql);
		}
		// CATCHES
		foreach ($fishingData['catches'] as $fishingSS){
			$map = addslashes($fishingSS['map']);
			$hole = $fishingSS['hole']; 
			$bait = $fishingSS['bait'];
			$time = $fishingSS['time'];
			$fp = $fishingSS['fp'];
			$mats = addslashes($fishingSS['mats']);
			$dr = $fishingSS['dr'];
			$size = $fishingSS['size'];
			$value = $fishingSS['value'];

			$sql = "INSERT IGNORE INTO catches (map, hole, bait, time, fp, mats, dr, size, value)
			VALUES ('$map', '$hole', '$bait', '$time', '$fp', '$mats', '$dr', '$size', '$value')
			ON DUPLICATE KEY UPDATE 
				map = VALUES(map),
				hole = VALUES(hole),
				bait = VALUES(bait),
				time = VALUES(time),
				fp = VALUES(fp),
				mats = VALUES(mats),
				dr = VALUES(dr),
				size = VALUES(size),
				value = VALUES(value);";
			$stmt = $this->connect()->exec($sql);
		}
		// BENCHMARKS
		foreach ($fishingData['benchmarks'] as $fishingSS){
			$map = addslashes($fishingSS['map']);
			$hole = $fishingSS['hole']; 
			$bait = $fishingSS['bait'];
			$time = $fishingSS['time'];
			$fp = $fishingSS['fp'];
			$avgNodes = $fishingSS['avgNodes'];
			$avgTime = $fishingSS['avgTime'];
			$value = $fishingSS['value'];

			$sql = "INSERT IGNORE INTO fishing_benchmarks (map, hole, bait, time, fp, avg_nodes, avg_time, value)
			VALUES ('$map', '$hole', '$bait', '$time', '$fp', '$avgNodes', '$avgTime', '$value')
			ON DUPLICATE KEY UPDATE 
				map = VALUES(map),
				hole = VALUES(hole),
				bait = VALUES(bait),
				time = VALUES(time),
				fp = VALUES(fp),
				avg_nodes = VALUES(avg_nodes),
				avg_time = VALUES(avg_time),
				value = VALUES(value);";
			$stmt = $this->connect()->exec($sql);
		}

	}

	public function get_values($table){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM $table";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		$pdo = null; 

		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}

}

// Initialize map DB
$mapsDB = new Maps();
$dwcDB = new DWC(); 
$dwcDB->set_tracks();

// Gathering DBs
$nodesDB = new Nodes();
//$nodesDB->set_values();

$glyphsDB = new Glyphs();
//$glyphsDB->set_values();

$gatheringDB = new Gathering(); 

// Alt parking
$altParkingDB = new AltParking();

// Chests
$chestsDB = new Chests(); 

// Metas
$metasDB = new Metas();

// Fishing
$fishingDB = new Fishing();
$catchesDB = new Fishing(); 
$fishingBenchmarksDB = new Fishing();
//$fishingDB->set_values();
?>