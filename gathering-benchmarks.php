<?php header("Cache-Control: no-cache"); ?>

<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults, CSS/JS main files -->
	<?php include('config.php'); ?>
	<title> Benchmarks </title>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('nav.php'); ?>

	<div id = "bookmark-left" class = "bookmark-left">
		<ul>
			<a><li id = "farm-benchmark-button" onclick = "revert_benchmarks(this);"> &#10097; Map Farms </li></a> 
			<a><li id = "meta-benchmark-button" onclick = "revert_benchmarks(this);"> &#10097; Metas </li></a> 
			<a><li id = "chest-benchmark-button" onclick = "revert_benchmarks(this);"> &#10097; Chests </li></a> 
			<a><li id = "alt-benchmark-button" onclick = "revert_benchmarks(this);"> &#10097; Alt Parking </li></a> 
			<a href = "./resources/about-benchmarks.php"><li> &#10097; Benchmark Criteria </li></a> 
			<a href = "https://docs.google.com/spreadsheets/d/1aLhL_VtVXbcZ6X2yweKD7AQFg9H5j67SW85qSzTPqrg/edit?usp=sharing" target = "_blank"><li> &#10097; Spreadsheet </li></a> 
		</ul>
	</div>

	<div class = "page-box">

	</div>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/gathering-benchmarks.js?v=<?php echo $date;?>"></script>
</body>
</html>