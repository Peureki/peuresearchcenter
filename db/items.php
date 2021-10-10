<?php 

class ItemsDB{
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "general";

	protected function connect(){
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName; 
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}
class Items extends ItemsDB{
	// FOR ALL ITEMS
	public function set_items_general($table){
		
		// Get JSON from GW2 API
		$url = file_get_contents('https://api.guildwars2.com/v2/items');
		$JSON = json_decode($url, TRUE);
		// Split entire JSON into batches of 100 
		$batch = array_chunk($JSON, 100);
		// Iterate through each batch and through each item in each batch
		for ($i = 0; $i < count($batch); $i ++){
			
			$api = file_get_contents('https://api.guildwars2.com/v2/items?ids='.implode(",", $batch[$i]));
			$result = json_decode($api, TRUE);

			foreach ($result as $attr){
				$name = $attr['name']; 
				$id = $attr['id'];
				$vendor = $attr['vendor_value'];
				$icon = $attr['icon']; 

				// If a name contains ' such as Siren's Landing, repalce the ' with \' so it can be disregarded as another single quote
				if (strpos($name, "'") == true){
					$name = str_replace("'", "\'", $name);
				}
				// Insert into DB
				$sql = "INSERT INTO $table (name, id, vendor, icon)
				VALUES ('$name', '$id', '$vendor', '$icon');";
				// Execute the SQL stmt 
				$stmt = $this->connect()->exec($sql);
			}
		}
	}
	// FOR SPECIFIC LISTINGS
	// $table = what DB table to modify
	// $IDs = string of IDs to modify in the table. ex: "1, 2, 3, 4, etc"
	public function set_items_listings($table, $IDs){
		
		// Get JSON GW2 API
		$url = file_get_contents('https://api.guildwars2.com/v2/commerce/listings?ids='.$IDs);
		$JSON = json_decode($url, TRUE);
		// Split entire JSON into batches of 100 
		//$batch = array_chunk($JSON, 100);

		// Iterate through each batch and through each item in each batch
		for ($i = 0; $i < count($JSON); $i ++){

			foreach ($JSON as $attr){
				$id = $attr['id']; 
				// Check if either exist in the trading post
				// Sometimes there's no buy orders or sometimes there's no orders at all 
				if (isset($attr['buys'][0]['listings']) == true || isset($attr['buys'][0]['listings']) != NULL){
					$buy_listings = $attr['buys'][0]['listings'];
					$buy_unit_price = $attr['buys'][0]['unit_price'];
					$buy_qty = $attr['buys'][0]['quantity'];
				}
				if (isset($attr['sells'][0]['listings']) == true || $attr['sells'][0]['listings'] != NULL){
					$sell_listings = $attr['sells'][0]['listings'];
					$sell_unit_price = $attr['sells'][0]['unit_price'];
					$sell_qty = $attr['sells'][0]['quantity'];
				}

				$sql = "UPDATE $table
					SET  buy_listings = '$buy_listings', 
					buy_unit_price = '$buy_unit_price',
					buy_qty = '$buy_qty',
					sell_listings = '$sell_listings',
					sell_unit_price = '$sell_unit_price',
					sell_qty = '$sell_qty'
					WHERE id = '$id';";
				$stmt = $this->connect()->exec($sql);
			}
		}		
	}

	public function get_items($table){
		// Get full table and sort by gold_per_hour col and descending
		$sql = "SELECT * FROM $table";
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
set_time_limit(1000);
// Initialize map DB
$itemsDB = new Items();
//$itemsDB->set_item_general('items');

$api_list = "24358,24289,83757,24300,83103,24299,24341,24350,24356,24288,24277,24276,24282,24283,24294,24295,24351,24357";
$itemsDB->set_items_listings('items', $api_list);

?>
