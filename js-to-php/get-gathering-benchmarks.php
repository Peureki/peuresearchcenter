<?php 
	chdir(dirname(__FILE__));
	include_once '../db/maps.php';
?>

<script>

let entireBenchmarks = <?php echo $gatheringDB->get_values(); ?> 
	console.log(entireBenchmarks);

</script>