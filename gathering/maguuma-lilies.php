<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Maguuma Lilies </title>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<!-- Main box -->
	<div class = "page-box">

		<div class = "section-header">
			<h1>Maguuma Lilies</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<b> Spreadsheet</b>
			<br>
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=366414828" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits. 
		</div>

		<div class = "small-description-center">
			<b>Soulkeeper's Airship Waypoint [&BEsJAAA=]</b>
		</div>

		<div class = "page-picture">
			<img src = "../images/bloodstone-fen/node-farm-1.jpg">
		</div>

		<div class = "page-picture">
			<img src = "../images/bloodstone-fen/node-farm-2.jpg">
		</div>

		<div class = "small-description-center">
			<b>Mariner Landing Waypoint [&BL0JAAA=]</b>
		</div>

		<div class = "page-picture">
			<img src = "../images/draconis-mons/node-farm-1.jpg">
		</div>

		<div class = "page-picture">
			<img src = "../images/draconis-mons/node-farm-2.jpg">
		</div>

	</div> <!-- End of page-box -->
	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
</body>
</html>
