<?php 
	//include('../db/maps.php'); 	
	chdir(dirname(__FILE__));
	include_once '../db/maps.php'; 
?>

<?php 
	$mapsDB->setMaps('maps');
?>