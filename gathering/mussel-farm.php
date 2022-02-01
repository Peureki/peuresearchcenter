<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php');?>
	<title> Mussel Farm </title>
</head>
<body>

	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div id = "bookmark-left" class = "bookmark-left">
		<ul>
			<a href = "#dailies"><li> &#10097; Dailies </li></a> 
			<a href = "#psna"><li> &#10097; PSNA </li></a> 
			<a href = "#provisioner-tokens"><li> &#10097; Prov Tokens </li></a> 
			<a href = "#dwc-donations"><li> &#10097; DWC Donations </li></a> 
		</ul>
	</div>

	<div class = "page-box">
		<div class = "section-header">
			<h1>Mussel Farm</h1>
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
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1aLhL_VtVXbcZ6X2yweKD7AQFg9H5j67SW85qSzTPqrg/edit#gid=1982020967" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits.

			<br><br>
			<span style = "font-weight: bold;"> Route:</span>
			<br>
			Start at Shipwreck Peak Waypoint <b>[&BN4HAAA=]</b> and head below the waypoint. They'll be a trail of mussels throughout. Afterwards, head to Allied Encampment Waypoint <b>[&BFcLAAA=]</b> in Domain of Kourna. Follow the picture for the route as you'll use the waypoint twice. 
		</div>

		<!-- Gathering Picture -->
		<div class = "page-picture">
			<img title = "Verdant Brink Mussel Route" style = "width: 50%;" src = "../images/mussel-farm/map-1.jpg">
		</div>
		<div class = "page-picture">
			<img title = "Verdant Brink Mussel Route" style = "width: 50%;" src = "../images/mussel-farm/map-2.jpg">
		</div>
	</div>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>


</body>
</html>