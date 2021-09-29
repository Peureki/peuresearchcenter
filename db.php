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
/*
class Test extends BenchmarksDB{
	public function getUsers(){
		$sql = "SELECT * FROM users"; 
		$stmt = $this->connect()->query($sql);

		while($row = $stmt->fetch()){
			echo $row['users_firstname'] . " " . $row['users_lastname'] . "<br>";
		}
	}

	public function getUsersStmt($firstname, $lastname){
		$sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?"; 
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$firstname, $lastname]);
		$names = $stmt->fetchAll();

		foreach ($names as $name){
			echo $name['users_firstname'] . "<br>"; 
		}
	}
}
*/
class Maps extends BenchmarksDB{
	public function setMaps(){
		// Get JSON from Google Spreadsheet 
		$json = file_get_contents('https://script.google.com/macros/s/AKfycbwzCoaJtZVmPUO5nus0i6mLWi1CJhXPkww1NFGX/exec');
		$mapObj = json_decode($json, TRUE);
		// Connect to the DB
		$sql = "SELECT count(*) FROM maps";
		$result = $this->connect()->query($sql);

		// Remove items from previous list
		$sql = "DELETE FROM maps"; 
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
			$sql = "INSERT INTO maps (type, name, time, gold_per_hour, total_gold, karma, spirit_shards, trade_contracts, unbound_magic, volatile_magic)
			VALUES ('$farmtype', '$map', '$time', '$gold_per_hour', '$total_gold', '$karma', '$spirit_shards', '$trade_contracts', '$unbound_magic', '$volatile_magic')";
			// Execute the SQL stmt 
			$stmt = $this->connect()->exec($sql);
		} 
	}

	public function getMaps(){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM maps ORDER BY gold_per_hour DESC";
		$result = $this->connect()->query($sql);
		// Create empty array
		$array = Array();
		// Go thru DB and fetch contents into array
		while($row = $result->fetch()){
			$array[] = $row; 
		}
		// Create JSON from the array
		$json = json_encode($array);
		return $json;
	}
}
// Initialize map DB
$mapsDB = new Maps();

?>