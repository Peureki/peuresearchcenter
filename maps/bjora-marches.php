<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Bjora Marches </title>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div class = "page-box">

		<div class = "section-header">
			<h1>Bjora Marches</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<center> <iframe width="560" height="315" src="https://www.youtube.com/embed/HrUGwYeLH5c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </center>
			
			<span style = "font-weight: bold;"> Disclaimer:</span>
			<br>
			In order to receive materials such as variental herbs and quality meats, you need to have completed at least the Charr and Sylvari portion of the <a href = "https://wiki.guildwars2.com/wiki/Gourmet_Training" target = "_blank" style = "text-decoration: underline;"> Gourmet Training</a> achievement. These materials play a significant role in benchmarks that includes them. 
			
			<br><br>
			<b> Spreadsheet</b>
			<br>
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=238669369.html" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits. 

			<br><br>
			<span style = "font-weight: bold;"> Route:</span>
			<br>
			Start at Still Waters Speaking Waypoint [&BDkMAAA=]. The east side of Bjora does not have as many nodes compared to the west side. There is an abundance of herbs that offer Varietal Peppercorn Seeds. There are a lot of enemies to slow you down so it's best to bring a character that is quick, can dodge easily, or be quick on your feet. It is required to get Raven's Light mastery (2nd from Raven Attunement) otherwise you'll get chilled and frozen. 
			<br><br>
			I did this with about 7 characters. I didn't prep for the farm so they were just using whatever build and weapons they were left off. 
			
		</div>

		<!-- 
			HTML notation:
			getBenchmark("[table-name]","[Name of farm 1]", etc);
			The name of the farm has to match the name in the spreadsheet EXACTLY (spaces and all)
		-->

		<!-- Gathering Picture -->
		<div class = "page-gathering-picture">
			<img title = "Bjora Marches" style = "width: 50%;" src = "../images/bjora-marches/bjora-node-farm.jpg">
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
