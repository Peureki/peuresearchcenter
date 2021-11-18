<?php 
	include('../db/items.php'); 	
?>

<?php
// Crafting materials
$itemsDB->update_specific_items_listings('items', $craftingIDs); 
// DWC materials
$itemsDB->update_specific_items_listings('items', $dwcIDs);
?>