<!-- CRON JOB TO INPUT LISTING VALUES FOR ITEMS NEEDED FOR PROVISIONER TOKENS -->
<?php
	chdir(dirname(__FILE__));
	include_once '../db/items.php'; 	
?>

<?php 
	// Each faction is seperated by 6 numbers
	// Sylvari,Itzel,Pact,Noble,Quaggan
	$vb = "46281,46040,46186,45731,45765,45622,15465,13924,14469,11121,11876,10702,15394,13895,14517,11295,11798,10722,15508,13974,14596,11248,11835,10710,36779,36813,36750,36892,36891,36746";
	// Priory,Exalted,Skritt
	$ab = "38336,38415,38367,38228,38264,38179,15352,13895,14566,11295,11798,10722,15427,13928,14648,11167,11754,10699";
	// Ogre,Rata,Nuhoch,SCAR
	$td = "15391,13976,14563,11341,11921,10691,15423,13973,14428,11247,11834,10709,15512,13894,14516,11126,11881,10707,36779,36780,36812,36844,36842,36806";

	$itemsDB->set_items_listings('items',$vb);
	$itemsDB->set_items_listings('items',$ab);
	$itemsDB->set_items_listings('items',$td);
?>