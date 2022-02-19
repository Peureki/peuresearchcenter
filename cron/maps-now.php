<?php 
	//include('../db/maps.php'); 	
	chdir(dirname(__FILE__));
	include_once '../db/maps.php'; 
?>

<?php 
	// Set benchmarks
	$mapsDB->setMaps('maps');
	$chestsDB->set_values();
?>