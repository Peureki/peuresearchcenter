<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Refinement </title>
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
			<a href = "#ascended"><li id = "bookmark-ascended" > &#10097; Ascended Materials </li></a> 
			<a href = "#basic"><li id = "bookmark-basic" > &#10097; Basic Materials </li></a> 
			<a href = "#gem"><li id = "bookmark-gem" > &#10097; Gemstones </li></a> 
			<a href = "#jewel"><li id = "bookmark-jewel" > &#10097; Jewels </li></a> 
			<a href = "#misc"><li id = "bookmark-misc" > &#10097; Miscellaneous </li></a> 
			<a href = "#curio"><li id = "bookmark-curio" > &#10097; Mystic Curios </li></a>
			<a href = "#rune"><li id = "bookmark-rune" > &#10097; Runes </li></a>
		</ul>
	</div>	

	<div class = "bookmark-left-button">
		<button>&#10097;</button>
	</div>

	
	<div id = "nav-right-sidetimer-box" class = "bookmark-right" style = "min-width: 180px;">
		<b style = "font-size: 20px;"> Preferences </b>
	    <br> 
	    Toggle to show/hide
	    <br><br>
		<button  type = "button" id = "default" class = "select-button" onclick = "showPreferences(this.id, 0);"> Default </button> 
	    <br><br>
	    Ascended Materials <input type = "Checkbox" id = "check-ascended" onclick = "showPreferences(this.id, 'ascended');"> 
	    <br>
	    Basic Materials <input type = "Checkbox" id = "check-basic" onclick = "showPreferences(this.id, 'basic');"> 
	    <br>
	    Gemstones <input type = "Checkbox" id = "check-gem" onclick = "showPreferences(this.id, 'gem');">
	    <br>
	    Jewels <input type = "Checkbox" id = "check-jewel" onclick = "showPreferences(this.id, 'jewel');">
	    <br>
	    Miscellaneous <input type = "Checkbox" id = "check-misc" onclick = "showPreferences(this.id, 'misc');"> 
	    <br>
	    Mystic Curios <input type = "Checkbox" id = "check-curio" onclick = "showPreferences(this.id, 'curio');">    
	    <br>
	    Runes <input type = "Checkbox" id = "check-rune" onclick = "showPreferences(this.id, 'rune');"> 
	</div> 

	<div class = "page-box">

		<div class = "section-header">
			<h1> Refinement </h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div style = "text-align: center;">
			<span style = "font-size: 15px; font-weight: bold;"> Items: </span>
			<select name = "items" id = "items-ss" class = "select-button">
				<option value = "Buy Price"> Buy Price </option>
				<option value = "Sell Price"> Sell Price </option>
			</select>

			<span style = "font-size: 15px; font-weight: bold;"> Results: </span>
			<select name = "results" id = "results-ss" class = "select-button">
				<option value = "Sell Price"> Sell Price </option>
				<option value = "Buy Price"> Buy Price </option>
			</select>

			<span style = "font-size: 15px; font-weight: bold;"> Tax: </span>
			<select name = "results" id = "tax-ss" class = "select-button">
				<option value = "85% Tax"> 85% Tax (TP Tax) </option>
				<option value = "90% Tax"> 90% Tax </option>
				<option value = "No Tax"> No Tax </option>
			</select>

			<button  type = "button" id = "calculate" class = "select-button" onclick = "showPrices('items-ss', 'results-ss', 'tax-ss');"> Calculate </button>
		</div>

		<div id = "ascended" style = "margin: 10px;">
			<div class = "section-header">
				<h1> Ascended Materials </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<table id = "ascended-table" class = "four-ingre">
				<thead>
					<tr>
						<th> Item 1 </th>
						<th> </th>
						<th> Item 2 </th>
						<th> </th>
						<th> Item 3 </th>
						<th> </th>
						<th> Item 4 </th>
						<th> </th>
						<th> Result</th>
						<th> /Conversion </th>
					</tr>	
				</thead>
				<tbody id = "ascended-tableBody"></tbody>
			</table>
		</div>

		<div id = "basic">
			<div class = "section-header">
				<h1> Basic Materials </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>
		

			<div style = "display: flex; justify-content: center;">
				<div id = "cloth" style = "margin: 10px;">
					<div class = "homepage-title">
						<h1> Cloth </h1> 
					</div>

					<table id = "cloth-table" class = "one-ingre">
						<thead>
							<tr>
								<th> Item 1 </th>
								<th> </th>
								<th> Result </th>
								<th> /Refinement </th>
							</tr>	
						</thead>
						<tbody id = "cloth-tableBody"></tbody>
					</table>
				</div>

				<div id = "leather" style = "margin: 10px;">
					<div class = "homepage-title">
						<h1> Leather </h1> 
					</div>

					<table id = "leather-table" class = "one-ingre">
						<thead>
							<tr>
								<th> Item 1 </th>
								<th> </th>
								<th> Result </th>
								<th> /Refinement </th>
							</tr>	
						</thead>
						<tbody id = "leather-tableBody"></tbody>
					</table>
				</div>
			</div>

			<div style = "display: flex; justify-content: center;">
				<div id = "metal" style = "margin: 10px;">
					<div class = "homepage-title">
						<h1> Metal </h1> 
					</div>

					<table id = "metal-table" class = "two-ingre">
						<thead>
							<tr>
								<th> Item 1 </th>
								<th> </th>
								<th> Item 2 </th>
								<th> </th>
								<th> Result </th>
								<th> /Refinement </th>
							</tr>	
						</thead>
						<tbody id = "metal-tableBody"></tbody>
					</table>
				</div>

				<div id = "wood" style = "margin: 10px;">
					<div class = "homepage-title">
						<h1> Wood </h1> 
					</div>

					<table id = "wood-table" class = "one-ingre">
						<thead>
							<tr>
								<th> Item 1 </th>
								<th> </th>
								<th> Result </th>
								<th> /Refinement </th>
							</tr>	
						</thead>
						<tbody id = "wood-tableBody"></tbody>
					</table>
				</div>
			</div>
		</div>

		<div id = "gem">
			<div class = "section-header">
				<h1> Gemstone</h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<table id = "gem-table" class = "four-ingre">
				<thead>
					<tr>
						<th> Item 1 </th>
						<th> </th>
						<th> Item 2 </th>
						<th> </th>
						<th> Item 3 </th>
						<th> </th>
						<th> Item 4 </th>
						<th> </th>
						<th> Result</th>
						<th> /Conversion </th>
					</tr>	
				</thead>
				<tbody id = "gem-tableBody"></tbody>
			</table>
		</div>

		<div id = "jewel">
			<div class = "section-header">
				<h1> Jewels </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<table id = "orb-table" class = "two-ingre">
				<thead>
					<tr>
						<th> Item 1 </th>
						<th> </th>
						<th> Item 2 </th>
						<th> </th>
						<th> Result</th>
						<th> /Conversion </th>
					</tr>	
				</thead>
				<tbody id = "orb-tableBody"></tbody>
			</table>
		</div>

		<div id = "misc" style = "margin: 10px;">
			<div class = "section-header">
				<h1> Miscellaneous </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<table id = "misc-table" class = "four-ingre">
				<thead>
					<tr>
						<th> Item 1 </th>
						<th> </th>
						<th> Item 2 </th>
						<th> </th>
						<th> Item 3 </th>
						<th> </th>
						<th> Item 4 </th>
						<th> </th>
						<th> Result</th>
						<th> /Conversion </th>
					</tr>	
				</thead>
				<tbody id = "misc-tableBody"></tbody>
			</table>
		</div>

		<div id = "curio" style = "margin: 10px;">
			<div class = "section-header">
				<h1> Mystic Curios </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<table id = "curio-table" class = "three-ingre">
				<thead>
					<tr>
						<th> Item 1 </th>
						<th> </th>
						<th> Item 2 </th>
						<th> </th>
						<th> Item 3 </th>
						<th> </th>
						<th> Result</th>
						<th> /Conversion </th>
					</tr>	
				</thead>
				<tbody id = "curio-tableBody"></tbody>
			</table>
		</div>

		<div id = "rune" style = "margin: 10px;">
			<div class = "section-header">
				<h1> Runes </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<table id = "rune-table" class = "four-ingre">
				<thead>
					<tr>
						<th> Item 1 </th>
						<th> </th>
						<th> Item 2 </th>
						<th> </th>
						<th> Item 3 </th>
						<th> </th>
						<th> Item 4 </th>
						<th> </th>
						<th> Result </th>
						<th> /Conversion </th>
					</tr>	
				</thead>
				<tbody id = "rune-tableBody"></tbody>
			</table>
		</div>
	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
	
	<!--<script id = "js-main" type = "text/javascript" src = "../script.js"></script>-->
	<script type = "text/javascript" src = "<?php echo $base;?>/research/refinement.js?v=<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/research/preferences.js?v=<?php echo $date;?>"></script>

	<script> refinement(0); </script>
	<script> doPreferences(); </script>
</body>
</html>