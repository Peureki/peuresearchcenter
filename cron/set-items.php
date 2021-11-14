<?php 
	include('../db/items.php'); 	
?>

<?php
set_time_limit(1000);
$itemsDB->set_specific_items_general('items', $craftingIDs);
?>