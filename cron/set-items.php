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
// Fish Names and Icons
$itemsDB->set_specific_items_general('items', $fishes);
$itemsDB->set_specific_items_general('items', $fishJunkIDs);
$itemsDB->set_specific_items_general('items', $tonicIDs); 
$itemsDB->set_specific_items_general('items', $otherFishIDs);

// Bags
$itemsDB->set_specific_items_general('items', $bagIDs); 
?>