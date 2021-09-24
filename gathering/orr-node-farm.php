<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Orr Node Farm </title>
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
			<h1>Orr Node Farm</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<b> Spreadsheet</b>
			<br>
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=450419869" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits.

			<br><br>
			<b> Route </b>
			<br>
			This farm consists of going to 3 out of the 4 Orr maps for Elder Wood, Mithril, Ghost Peppers, and other stuff. Bring some damage as there will probably be mob aggro.		
		</div>

		<!-- Gathering Picture -->
		<div class = "flex-description">
			Start at Siren's Landing Camp Reclamation Waypoint [&BO8JAAA=].
		</div>

		<div class = "page-picture">
			<img title = "Siren's Landing" style = "width: 80%;" src = "../images/sirens-landing/node-farm.jpg">
		</div>

		<div class = "flex-description">
			Pagga's Waypoint [&BKYCAAA=]
		</div>

		<div class = "page-picture">
			<img title = "Malchor's Leap" style = "width: 70%;" src = "../images/malchors-leap/node-farm.jpg">
		</div>

		<div class = "flex-description">
			Pursuit Pass Waypoint [&BBcDAAA=]
		</div>

		<div class = "page-picture">
			<img title = "Cursed Shore" style = "width: 40%;" src = "../images/cursed-shore/node-farm.jpg">
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
