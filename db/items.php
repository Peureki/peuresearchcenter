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
		$batch = array_chunk($JSON, 200);
		// Iterate through each batch and through each item in each batch
		for ($i = 0; $i < count($batch); $i++){
			
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
				$sql = "INSERT IGNORE INTO $table (name, id, vendor, icon)
				VALUES ('$name', '$id', '$vendor', '$icon');";
				// Execute the SQL stmt 
				$stmt = $this->connect()->exec($sql);
			}
		}
	}
	public function set_specific_items_general($table, $IDs){
		$list_of_IDs = explode(",", $IDs);
		// Split entire JSON into batches of 100 
		$batch = array_chunk($list_of_IDs, 100);

		/*
		// Get JSON GW2 API
		$url = file_get_contents('https://api.guildwars2.com/v2/commerce/listings?ids='.$IDs);
		$JSON = json_decode($url, TRUE);
		*/

		// Iterate through each batch and through each item in each batch
		for ($i = 0; $i < count($batch); $i++){

			// Get the IDs and basic info from the items
			$apiItems = file_get_contents('https://api.guildwars2.com/v2/items?ids='.implode(",", $batch[$i]));
			$resultItems = json_decode($apiItems, TRUE);

			foreach ($resultItems as $attr){
				$name = $attr['name']; 
				$id = $attr['id'];
				$vendor = $attr['vendor_value'];
				$icon = $attr['icon']; 

				// If a name contains ' such as Siren's Landing, repalce the ' with \' so it can be disregarded as another single quote
				if (strpos($name, "'") == true){
					$name = str_replace("'", "\'", $name);
				}
				// Insert into DB
				$sql = "INSERT IGNORE INTO $table (name, id, vendor, icon)
				VALUES ('$name', '$id', '$vendor', '$icon')
				ON DUPLICATE KEY UPDATE 
					name = VALUES(name),
					id = VALUES(id),
					vendor = VALUES(vendor),
					icon = VALUES(icon);";
				// Execute the SQL stmt 
				$stmt = $this->connect()->exec($sql);
			}
				
		}		
	}
	// FOR SPECIFIC LISTINGS
	// $table = what DB table to modify
	// $IDs = string of IDs to modify in the table. ex: "1, 2, 3, 4, etc"
	public function update_specific_items_listings($table, $IDs){
		// Turn string of IDs into an array
		$list_of_IDs = explode(",", $IDs);
		// Split entire JSON into batches of 100 
		$batch = array_chunk($list_of_IDs, 200);

		/*
		// Get JSON GW2 API
		$url = file_get_contents('https://api.guildwars2.com/v2/commerce/listings?ids='.$IDs);
		$JSON = json_decode($url, TRUE);
		*/
		echo print_r($batch[0]) . "<br>";
		// Iterate through each batch and through each item in each batch
		for ($i = 0; $i < count($batch); $i++){

			$api = file_get_contents('https://api.guildwars2.com/v2/commerce/listings?ids='.implode(",", $batch[$i]));
			$result = json_decode($api, TRUE);

			foreach ($result as $attr){
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

	public function get_all_items($table){
		// Get full table
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
	// Get a specific array of items in the DB
	public function get_array_items($table, $IDs){
		// Make string of IDs into array
		$IDs = explode(",", $IDs); 
		$array = Array();

		foreach ($IDs as $value){
			$sql = "SELECT * FROM $table
				WHERE id = '$value';"; 
			$result = $this->connect()->query($sql);

			while($row = $result->fetch()){
				$array[] = $row; 
			}
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

// MOST CRAFTING ITEMS (Basic, Intermetdiate, Advanced, etc)
$craftingIDs = '19725,19712,19742,19746,19720,19744,19747,19740,19679,12990,19730,19680,19697,72752,19741,19734,19737,19736,19735,19733,19681,12991,19757,19722,19709,75241,19682,19698,76614,19745,19758,19723,19710,19759,19724,19711,19732,19683,19699,12993,71307,19718,76216,19743,89140,77256,19684,19700,12989,19685,19701,12988,74090,89271,19686,19702,19719,19731,19760,19727,19714,72194,19748,19687,19703,19761,19726,19713,19794,19790,19792,19793,19791,19789,19688,12992,19738,19729,19728,71225,19739,24358,24289,74202,24344,24342,24343,24348,83757,24300,24363,83103,24354,24281,24345,24299,37897,24341,24350,24356,24288,74328,83284,71069,71641,24277,24272,24276,24275,24274,24273,24282,70426,75694,74982,76799,75270,77112,71692,75862,71952,86269,24283,24286,24349,24355,82582,24347,24353,24285,24297,24279,24287,24346,24352,24284,24296,24278,24298,24280,24292,73034,24294,24295,24293,24291,24290,24351,24357,44941,68944,19663,24304,24302,24305,24303,24301,89103,89258,89216,24339,24337,24340,24338,24336,24329,24327,24330,24328,24326,24324,24322,24325,24323,24321,68942,68952,66933,24370,24319,24317,24320,24318,24316,19721,24366,71581,24314,24315,24313,24311,70842,66930,19976,82796,24309,24307,24310,24308,24306,66637,24333,24332,24335,24331,24334,48884,82678,71049,75857,75015,71428,70820,67832,83322,89098,89141,89182,49782,46281,46040,46186,45731,45765,45622,15465,13924,14469,11121,11876,10702,15394,13895,14517,11295,11798,10722,15508,13974,14596,11248,11835,10710,36779,36813,36750,36892,36891,36746,38336,38415,38367,38228,38264,38179,15352,13895,14566,11295,11798,10722,15427,13928,14648,11167,11754,10699,15391,13976,14563,11341,11921,10691,15512,13894,14516,11126,11881,10707,15423,13973,14428,11247,11834,10709,36779,36780,36812,36844,36842,36806,24366,24741,19925,24651,24729,46745,19983,19721,24830,43772,24330,24726,46742,24678,24732,46744,66650,24735';

// DWC items such as commendations
$dwcIDs = '93627,93525,93625,93868,93496,93899,93624';

// Fishing Items and Food Recipes
// Cannot get IDs of: Amber Trout, Albino Gourami, Albino Axoltl, Boxfish, Sheatfish, Giant Gourami, Unicorn Fish, Jade Sea Turtle, Chambered Nautilus, Cutthroat Trout, Brook Trout, Smallmouth Bass, Rock Bass, Catfish, Black Crappie, Largemouth Bass, Steelhead Trout, Redfin Barb, Leafy Seas Dragon, 
/* 
Redfin Barb [NO ID????]
Leafy Sea Dragon [NO ID????] 
Electric Eel [NO ID????]
Vampire Squid [NO ID????]
Flapjack Octopus [NO ID????]
Horseshoe Crab [NO ID????]
Sea Robin [NO ID????]

Bloodfish [NO ID????]
Bonefish [NO ID????]
Venomfish [NO ID????]

Tigerfish [NO ID????]

Firemouth [NO ID????]
Redtail Catfish [NO ID????]
Geyser Batfin [NO ID????]
Flamefin Betta [NO ID????]
Scorpion Fish [NO ID????]

Orrian Anglerfish [NO ID????]
Giant Octopus [NO ID????]
Risen Sea Bass [NO ID????]
Shipwreck Moray [NO ID????]
Unholy Mackerel [NO ID????]
*/

$fishingIDs = '96762,97690,96943,95663,95673,96347,95847,96285,96898,97771';
$fishes = "95894,97865,96757,96350,96719,96071,97278,95936,96944,96425,97692,97061,97604,97722,97714,95603,96523,96318,97753,95926,97181,96494,96899,97612,96876,95633,96933,95797,96839,97772,97507,96145,96053,97830,97792,95951,96344,96238,97463,97857,96863,96401,97654,96196,96807,96096,96195,95596,96017,96310,96834,96792,95584,97716,97559,96913,97814,95729,97853,95670,97183,95699,96817,96297,97584,97885,96226,97887,96985,96672,97479,96105,95874,97163,95609,97004,96081,95961,97462,96001,96032,96740,95881,97341,97785,97787,97509,97005,95819,97103,96667,95731,96571,97409,96543,97485,97527,97799,95766,96276,97364,97713,96643,97356,97866,97456,95668,95822,97496,95896,96619,96373,96218,97301,96954,96882,95723,97225,95654,96265,96082,96110,97241,95968,97534,96852,97388,96635,96116,95624,95682,96108,96304,97497,97097,95870,97369,95890,96085,96397,95794,97844,97756,97001,97746,97443,96513,95849,96225,97489,96445,96349,96854,96367,96308,97755,97744,96676,95859,97848,97109,95608,96769,96428,97187,96724,96094,97466,97763,95929,96597,96361,96020,96201,96983,97568,95751,96653,96325,96191,97546,96320,97841,96645,97057,97644,97122,96692,97465,97543,97078,95908,96439,96132,95924,95873,97035,96055,96666,96723,97556,96701,97770,96631,96551,97470,97302,96813,96332";
?>
