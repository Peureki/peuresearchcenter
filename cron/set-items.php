<?php 
	include('../db/items.php'); 	
?>

<?php
set_time_limit(1000);
// Crafting materials
$itemsDB->set_specific_items_general('items', $craftingIDs);
// DWC materials
$itemsDB->set_specific_items_general('items', $dwcIDs); 
?>