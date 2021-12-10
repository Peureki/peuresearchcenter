<?php 
	chdir(dirname(__FILE__));
	include_once '../db/items.php'; 	
?>

<?php
// Crafting materials
$itemsDB->update_specific_items_listings('items', $craftingIDs); 
// DWC commendations
//$itemsDB->update_specific_items_listings('items', $dwcIDs);
?>