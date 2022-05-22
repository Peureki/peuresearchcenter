<?php 
	chdir(dirname(__FILE__));
	include_once '../db/maps.php'; 	
	include_once "./items.php";
?>

<?php 
	$fishingDB->set_values();

	class Set_Fish_Values extends BenchmarksDB{
		public function set_values($fishName, $fishValue){
			for ($i = 0; $i < count($fishValue); $i++){
				$value = $fishValue[$i]; 
				$name = addslashes($fishName[$i]);

				$sql = "UPDATE fishing
				SET value = '$value'
				WHERE fish = '$name';";
				$stmt = $this->connect()->exec($sql);
			}
		}
	}


	// Get array of fishingDB and itemsDB
	$fish = json_decode($fishingDB->get_values('fishing'), TRUE);
	$items = json_decode($itemsDB->get_all_items('items'), TRUE);
	// Empty arrays
	// These will be filled with the name of the fish for $fishName and values for $fishValues
	// Input these into set_values for the class Set_Fish_Values so they can be inputted into the Fishing DB 
	$fishName = []; 
	$fishValue = [];

	// Iterate through each fish
	for ($i = 0; $i < count($fish); $i++){
		// For each fish, seperate the long strings of the materials and their drop rates
		$matsArray = explode(",", $fish[$i]['mats']); 
		$drArray = explode(",", $fish[$i]['dr']);
		$value = 0;

		// Go through each material. Drop rates should be the same qty as the qty of mats
		for ($j = 0; $j < count($matsArray); $j++){
			// Match the items with the materials
			// Set the value of the fish for each material
			for ($k = 0; $k < count($items); $k++){
				if ($matsArray[$j] == $items[$k]['name']){
					$value += $items[$k]['sell_unit_price'] * floatval($drArray[$j]); 
				}
			}	
		}
		array_push($fishValue, $value); 
		array_push($fishName, $fish[$i]['fish']);
	}
	$setFishValues = new Set_Fish_Values(); 
	$setFishValues->set_values($fishName, $fishValue); 

?>
