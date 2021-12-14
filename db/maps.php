<?php 

class BenchmarksDB{
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "benchmarks";

	protected function connect(){
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName; 
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
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

class DWC extends BenchmarksDB{
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

// Initialize map DB
$mapsDB = new Maps();
$dwcDB = new DWC(); 
$dwcDB->set_tracks();

?>