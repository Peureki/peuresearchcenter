<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Dredgehaunt Node Farm </title>
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
			<h1>Dredgehaunt Node Farm</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<b>Disclaimer:</b>
			<br>
			In order to receive materials such as variental herbs and quality meats, you need to have completed at least the Charr and Sylvari portion of the <a href = "https://wiki.guildwars2.com/wiki/Gourmet_Training" target = "_blank" style = "text-decoration: underline;"> Gourmet Training</a> achievement. These materials play a significant role in benchmarks that includes them. 

			<br><br>
			<b> Spreadsheet</b>
			<br>
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1556176364" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits.

			<br><br>
			<span style = "font-weight: bold;"> Route:</span>
			<br>
			Start at Graupel Waypoint [&BGICAAA=] and head in a counterclockwise rotation. In general, it's best to gather mainly Iron Ore and Seasoned Wood Logs. With Glyph of Volatility, it's good to gather plants for quick Volatile Magic. Though, the plants in this map are generally low profit such:
			<br> - Root Vegetables
			<br> - Zucchini
			<br> - Mushrooms
		</div>

		<!-- Gathering Picture -->
		<div class = "page-picture">
			<img title = "Dredgehaunt Cliffs" style = "width: 50%;" src = "..\images\dredgehaunt-cliffs\dredgehaunt-cliffs-node-farm.jpg">
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
