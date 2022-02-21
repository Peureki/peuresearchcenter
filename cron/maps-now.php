<?php 
	//include('../db/maps.php'); 	
	chdir(dirname(__FILE__));
	include_once '../db/maps.php'; 
?>

<?php 
	// Set benchmarks
	$mapsDB->setMaps('maps');
	$altParkingDB->set_values();
	$chestsDB->set_values();
	$metasDB->set_values();
?>
