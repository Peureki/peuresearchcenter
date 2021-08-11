<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Salvage </title>

	<script id = "js-salvage" type = "text/javascript" src = "<?php echo $base;?>/research/salvage.js?v=<?php echo $date;?>"></script>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div class ="page-box">

		<div class = "section-header">
			<h1> Salvage </h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			Average is determined by salvaging an item and comparing it to the TP sell price (including 15% tax for items pre-salvaged/post-salvaged). All items are assumed as drops/in your inventory already. 
		</div>

		<div id = "revert" class = "red-button" style = "text-align: center;">
			<input type = "button" id = "sell-button" value = "Sell Price" onclick = "sell_button();">
			<!--<input type = "button" id = "buy-button" value = "Buy Price" onclick = "buy_button();">-->
			<input type = "button" id = "value-button" value = "Value" onclick = "value_button();">
		</div>

		<div id = "sell-uni" class = "multi-benchmarks-left">
			<div id = "loading" class = "loading"> 
				<img id = "loading-image" class = "loading-image" src = "../images/assets/research-choya.png">
				<table id = "salvage-uni" class = "worth-salvage"> 
					<thead> 
						<tr>
							<th></th>
							<th> Unidentified Gear</th>
							<th> Profit</th>
							<th> Choice </th>
						</tr>
					</thead>
					<tbody id = "salvage-uni-table"></tbody>
				</table>
			</div>
		</div>
		<!--
		<div id = "buy-uni" class = "multi-benchmarks-left" style = "display: none;">
			<table id = "salvage-uni" class = "worth-salvage"> 
				<thead> 
					<tr>
						<th></th>
						<th> Unidentified Gear</th>
						<th> Profit</th>
						<th> Choice </th>
					</tr>
				</thead>
				<tbody id = "salvage-uni-buy-table"></tbody>
			</table>
		</div> -->

		<div id = "value-uni" class = "multi-benchmarks-left" style = "display: none;">
			<table id = "salvage-uni" class = "worth-salvage"> 
				<thead> 
					<tr>
						<th></th>
						<th> Unidentified Gear</th>
						<th> Profit</th>
						<th> Choice </th>
					</tr>
				</thead>
				<tbody id = "salvage-uni-value-table"></tbody>
			</table>
		</div>

		<div class ="page-box" style = "margin-top: -15px; margin-bottom: -15px;">
			<div class = "small-description" style = "margin-left: auto; margin-right: auto;">
					<span style = "font-weight: bold">General rule of thumb for unidentified gear:</span>
					<br>
					<span style = "font-weight: bold">All</span> unidentified gear is assuming you open then salvage. For more data on direct vs non-direct salvaging, check <a href = "https://wiki.guildwars2.com/wiki/Piece_of_Unidentified_Gear" target = "_blank" style = "text-decoration: underline;">Wiki</a> (listed at the bottom).
					<br>- Blue &#8594; Copper-Fed > Basic Kit 
					<br> - Green &#8594; Runecrafter's > Copper-Fed > Basic Kit
					<br> - Yellows &#8594; Silver-Fed or Mystic Salvage Kit > Master's Salvage Kit
					<br><br>
					Note: Outside of unidentified gear, the list above is the order of salvaging kits if you don't happen to have some such as Runecrafter's. 
					<br><br>
					As of 7/21, you can sort by Item or Choice, but not the rest yet. 
			</div>
		</div>

		

		<div id = "sell-item" class = "multi-benchmarks-left">
			<div id = "loading" class = "loading"> 
				<table id = "salvage-tp" class = "worth-salvage"> 
					<thead> 
						<tr>
							<th></th>
							<th onclick = "sortTableByAlphabet('salvage-tp', 1);" style = "cursor: pointer;"> Item</th>
							<th> Copper-Fed</th>
							<th> Runecrafter's</th>
							<th> Silver-Fed</th>
							<th onclick = "sortTableByAlphabet('salvage-tp', 5);" style = "cursor: pointer;"> Choice </th>
						</tr>
					</thead>
					<tbody id = "salvage-sell-table"></tbody>
				</table>
			</div>
		</div>
	<!--
		<div id = "buy-item" class = "multi-benchmarks-left" style = "display: none;">
			<div id = "loading" class = "loading"> 
				<table id = "salvage-tp" class = "worth-salvage"> 
					<thead> 
						<tr>
							<th></th>
							<th onclick = "sortTableByAlphabet('salvage-tp', 1);" style = "cursor: pointer;"> Item</th>
							<th> Copper-Fed</th>
							<th> Runecrafter's</th>
							<th> Silver-Fed</th>
							<th onclick = "sortTableByAlphabet('salvage-tp', 5);" style = "cursor: pointer;"> Choice </th>
						</tr>
					</thead>
					<tbody id = "salvage-buy-table"></tbody>
				</table>
			</div>
		</div> -->

		<div id = "value-item" class = "multi-benchmarks-left" style = "display: none;">
			<div id = "loading" class = "loading"> 
				<table id = "salvage-tp" class = "worth-salvage"> 
					<thead> 
						<tr>
							<th></th>
							<th onclick = "sortTableByAlphabet('salvage-tp', 1);" style = "cursor: pointer;"> Item</th>
							<th> Copper-Fed</th>
							<th> Runecrafter's</th>
							<th> Silver-Fed</th>
							<th onclick = "sortTableByAlphabet('salvage-tp', 5);" style = "cursor: pointer;"> Choice </th>
						</tr>
					</thead>
					<tbody id = "salvage-value-table"></tbody>
				</table>
			</div>
		</div>
	</div>

	<div class = "page-links">
			<p1><a href="https://docs.google.com/spreadsheets/d/1XveivmraUz6WLSeNIbMHYckr9OMmj191aE-FYZhtjCE/edit?usp=sharing" target = "_blank"> Spreadsheet </a></p1>
		</div>




	<script> getSalvage('salvage-tp','loading-image');
	</script>

		
	</div> <!-- End of page-box -->
	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
</body>
</html>