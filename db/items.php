<?php 

class ItemsDB{
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "items";

	protected function connect(){
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName; 
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}
class Items extends ItemsDB{
	public function setItems($table){
		
		// Get JSON from Google Spreadsheet 
		$url = file_get_contents('https://api.guildwars2.com/v2/items');
		$JSON = json_decode($url, TRUE);
		$curl = curl_init();
		foreach ($JSON as $ID){
			
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://api.guildwars2.com/v2/items?ids='.$ID,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"cache-control: no-cache"
				),
			));

			$result = curl_exec($curl);
			$err = curl_error($curl);
			
			$query = json_decode($result, TRUE);
			
			var_dump($query);
			/*
			$url = 'https://api.guildwars2.com/v2/items?ids='.$ID;
			$data = array('key1' => 'value1', 'key2' => 'value2');

			// use key 'http' even if you send the request to https://...
			$options = array(
			    'http' => array(
			        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			        'method'  => 'POST',
			        'content' => http_build_query($data)
			    )
			);
			$context  = stream_context_create($options);
			$query = file_get_contents($url, false, $context);
			if ($query === FALSE) { echo "Merp"; }

			$query = json_decode($query, TRUE);

			foreach ($query as $array){
				$name = $array['name'] . "<br>"; 
				echo $name;
			}
			*/
		
		}
		curl_close($curl);
		
		/*
		$url = file_get_contents('https://api.guildwars2.com/v2/items?ids='.implode(',', $itemIDs));
		//$itemInfo = file_get_contents('https://api.guildwars2.com/v2/items?ids=6,12452');
		$query = json_decode($url, TRUE); 
		*/
		/*
		$url = 'https://api.guildwars2.com/v2/items?ids='.implode(',', $itemIDs);
		$data = array('key1' => 'value1', 'key2' => 'value2');

		// use key 'http' even if you send the request to https://...
		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data)
		    )
		);
		$context  = stream_context_create($options);
		$query = file_get_contents($url, false, $context);
		if ($query === FALSE) { echo "Merp"; }
		*/
		
		
		// Connect to the DB
		$sql = "SELECT * FROM $table";
		$result = $this->connect()->query($sql);

		// Remove items from previous list
		$sql = "DELETE FROM $table"; 
		$stmt = $this->connect()->exec($sql);

		// Set each var to match var in spreadsheet
		foreach ($query as $array){
			$name = $array['name']; 
			echo $name;

			// If a map name contains ' such as Siren's Landing, repalce the ' with \' so it can be disregarded as another single quote
			if (strpos($map, "'") == true){
				$map = str_replace("'", "\'", $map);
			}
			// Insert into DB
			$sql = "INSERT INTO $table (type, name, time, gold_per_hour, total_gold, karma, spirit_shards, trade_contracts, unbound_magic, volatile_magic)
			VALUES ('$farmtype', '$map', '$time', '$gold_per_hour', '$total_gold', '$karma', '$spirit_shards', '$trade_contracts', '$unbound_magic', '$volatile_magic');";
			// Execute the SQL stmt 
			$stmt = $this->connect()->exec($sql);
		} 
	}

	public function getItems($table){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM $table ORDER BY gold_per_hour DESC";
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
$itemsDB = new Items();
$itemsDB->setItems($info);

?>