<?php 
	include('../db/items.php'); 	
?>

<?php
set_time_limit(1000);
// Crafting materials
$itemsDB->set_specific_items_general('items', $craftingIDs);
$itemsDB->update_specific_items_listings('items', $craftingIDs); 
// DWC materials
$itemsDB->set_specific_items_general('items', $dwcIDs); 

// Fishing recipes
$itemsDB->set_specific_items_general('items', $fishingIDs);
$itemsDB->update_specific_items_listings('items', $fishingIDs);
// Fish Names and Icons
$itemsDB->set_specific_items_general('items', $fishes);
?>