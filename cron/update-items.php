<?php 
	include('../db/items.php'); 	
?>

<?php

$itemsDB->update_specific_items_listings('items', $craftingIDs); 

?>