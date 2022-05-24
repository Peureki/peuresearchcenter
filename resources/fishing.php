<?php header("Cache-Control: no-cache"); ?>
<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php');
		?>
	<title> Fishing </title>
</head>
<body>

	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div id = "bookmark-left" class = "bookmark-left">
		<ul id = "fishing-bookmarks">
			<a href = "#fish-values"><li> &#10097; Fish Values </li></a>
			<a href = "#benchmarks"><li> &#10097; Est Benchmarks </li></a> 
			<a href = "#catch-values"><li> &#10097; Catch Values </li></a>
			<a href = "#drop-rates"><li> &#10097; Drop Rates </li></a>
			<a href = "#fishing-tips"><li> &#10097; Fishing Tips </li></a> 
		</ul>
	</div>

	<div class = "page-box">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Fishing</h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div id = "fish-values" class = "homepage-title">
			<h1> Pick an area </h1> 
		</div>

		<div class = "flex-description">
			<select class = "select-button" onchange = "get_map(this.value); show_map(this.value);">
				<option value = "" disabled selected> Map </option>
				<option value = "Seitung Province"> Seitung Province </option>
				<option value = "New Kaineng City"> New Kaineng City </option>
				<option value = "Echovald Wilds"> Echovald Wilds </option>
				<option value = "Dragon's End"> Dragon's End </option>
				<option value = "Ascalon"> Ascalon </option>
				<option value = "Kryta"> Kryta </option>
				<option value = "Shiverpeaks"> Shiverpeaks </option>
				<option value = "Orr"> Orr </option>
				<option value = "Maguuma Jungle"> Maguuma Jungle </option>
				<option value = "Crystal Desert"> Crystal Desert </option>
				<option value = "Desert Isles"> Desert Isles </option>
				<option value = "Ember Bay"> Ember Bay </option>
				<option value = "Draconis Mons"> Draconis Mons </option>
			</select>
		</div>

		<div class = "flex-description" style = "line-height: 1; align-items: flex-start; overflow-x: auto;">
			<div>
				<div class = "overflow-table">
					<table class = "fishing" id = 'local-fishing'>
						<thead>
							<tr>
								<th> </th>
								<th onclick = "sortTableByAlphabet('local-fishing', 1);"> Local Fish </th>
								<th onclick = "sortTableByAlphabet('local-fishing', 2);"> Fishing Hole </th>
								<th onclick = "sortTableByAlphabet('local-fishing', 3);"> Bait </th>
								<th onclick = "sortTableByAlphabet('local-fishing', 4);"> Time </th>
								<th onclick = "sortTableByPrice('local-fishing', 5);"> Value </th>
							</tr>
						</thead>
						<tbody id = "local-fishing-data"></tbody>
					</table>

					<table class = "fishing" id = 'global-fishing'>
					<thead>
						<tr>
							<th> </th>
							<th onclick = "sortTableByAlphabet('global-fishing', 1);"> Global Fish </th>
							<th onclick = "sortTableByAlphabet('global-fishing', 2);"> Fishing Hole </th>
							<th onclick = "sortTableByAlphabet('global-fishing', 3);"> Bait </th>
							<th onclick = "sortTableByAlphabet('global-fishing', 4);"> Time </th>
							<th onclick = "sortTableByPrice('global-fishing', 5);"> Value </th>
						</tr>
					</thead>
						<tbody id = "global-fishing-data"></tbody>
					</table>
				</div>
			</div>

			<div class = "fishing-box" style = "display: flex; flex-direction: column; justify-content: center;">
				<table class = "fishing-fp" id = "seitung-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 50 </td>
						</tr>
						<tr>
							<td> Shore Fish </td>
							<td> 150 </td>
						</tr>
						<tr>
							<td> Offshore Fish </td>
							<td> 200 </td>
						</tr>
						<tr>
							<td> Special Fishing Hole </td>
							<td> 0 </td>
						</tr>
					</tbody>
				</table>

				<table class = "fishing-fp" id = "kaineng-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 150 </td>
						</tr>
						<tr>
							<td> Coastal Fish </td>
							<td> 200 </td>
						</tr>
						<tr>
							<td> Offshore Fish </td>
							<td> 250 </td>
						</tr>
					</tbody>
				</table>

				<!-- ECHOVALD FISHING POWER -->

				<table class = "fishing-fp" id = "echovald-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 200 </td>
						</tr>
						<tr>
							<td> Lake Fish </td>
							<td> 250 </td>
						</tr>
						<tr>
							<td> Grotto </td>
							<td> 250 </td>
						</tr>
					</tbody>
				</table>

				<!-- ASCALON FISHING POWER -->

				<table class = "fishing-fp" id = "ascalon-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 400 </td>
						</tr>
						<tr>
							<td> Lake Fish </td>
							<td> 450 </td>
						</tr>
						<tr>
							<td> Noxious Water Fish </td>
							<td> 500 </td>
						</tr>
					</tbody>
				</table>

				<!-- KRYTA FISHING POWER -->

				<table class = "fishing-fp" id = "kryta-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 300 </td>
						</tr>
						<tr>
							<td> River Fish </td>
							<td> 350 </td>
						</tr>
						<tr>
							<td> Lake Fish </td>
							<td> 400 </td>
						</tr>
						<tr>
							<td> Coastal Fish </td>
							<td> 450 </td>
						</tr>
					</tbody>
				</table>

				<!-- SHIVERPEAKS FISHING POWER -->

				<table class = "fishing-fp" id = "shiverpeaks-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 350 </td>
						</tr>
						<tr>
							<td> Lake Fish </td>
							<td> 400 </td>
						</tr>
						<tr>
							<td> Boreal Fish </td>
							<td> 450 </td>
						</tr>
					</tbody>
				</table>

				<!-- ORR FISHING POWER -->

				<table class = "fishing-fp" id = "orr-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 600 </td>
						</tr>
						<tr>
							<td> Shore Fish </td>
							<td> 650 </td>
						</tr>
						<tr>
							<td> Offshore Fish </td>
							<td> 700 </td>
						</tr>
					</tbody>
				</table>

				<!-- MAGUUMA JUNGLE FISHING POWER -->

				<table class = "fishing-fp" id = "maguuma-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 450 </td>
						</tr>
						<tr>
							<td> Freshwater Fish </td>
							<td> 500 </td>
						</tr>
						<tr>
							<td> Saltwater Fish </td>
							<td> 550 </td>
						</tr>
					</tbody>
				</table>

				<!-- CRYSTAL DESERT FISHING POWER -->

				<table class = "fishing-fp" id = "crystal-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 500 </td>
						</tr>
						<tr>
							<td> Desert Fish </td>
							<td> 550 </td>
						</tr>
					</tbody>
				</table>

				<!-- DESERT ISLES FISHING POWER -->

				<table class = "fishing-fp" id = "desert-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 550 </td>
						</tr>
						<tr>
							<td> Shore Fish </td>
							<td> 600 </td>
						</tr>
						<tr>
							<td> Offshore Fish </td>
							<td> 650 </td>
						</tr>
					</tbody>
				</table>

				<!-- DRAGON'S END FISHING POWER -->

				<table class = "fishing-fp" id = "dragons-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 250 </td>
						</tr>
						<tr>
							<td> Quarry Fish </td>
							<td> 300 </td>
						</tr>
						<tr>
							<td> Cavern Fish </td>
							<td> 350 </td>
						</tr>
					</tbody>
				</table>

				<!-- EMBER BAY FISHING POWER -->

				<table class = "fishing-fp" id = "ember-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 650 </td>
						</tr>
						<tr>
							<td> Coastal Fish </td>
							<td> 700 </td>
						</tr>
					</tbody>
				</table>


				<!-- DRACONIS MONS FISHING POWER -->

				<table class = "fishing-fp" id = "draconis-fp">
					<thead>
						<tr>
							<th> Fishing Hole </th>
							<th> Fishing Power </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Open Waters </td>
							<td> 700 </td>
						</tr>
						<tr>
							<td> Volcanic Fish </td>
							<td> 750 </td>
						</tr>
					</tbody>
				</table>

				<!-- List of checkboxes for GENERAL. Users can check or uncheck to remove them from the main table -->
				<table class = "fishing-fp" id = "fish-general">
					<thead>
						<tr>
							<th id = "fish-general-name"> General </th>
							<th> </th>
						</tr>
					</thead>
					<tbody id = "fish-general-data">
						<tr>
							<td> Currently Available Fish </td>
							<td> <input type = "checkbox" checked = "false" id = "fish-general-checkbox" onclick = "customize_fishing_table(this, 0);"> </td>
						</tr>
						<tr>
							<td> Tax </td>
							<td> <select class = "checkbox-select" id = "fish-tax" onchange = "customize_fishing_table(this, 5);">
									<option value = "0.85" selected = "selected"> 85% </option>
									<option value = "0.9"> 90% </option>
									<option value = "1"> None </option>
								</select> </td>
						</tr>
					</tbody>
				</table>

				<!-- List of checkboxes for FISHING HOLES. Users can check or uncheck to remove them from the main table -->
				<table class = "fishing-fp" id = "fish-hole">
					<thead>
						<tr>
							<th id = "fish-hole-name"> Fishing Hole </th>
							<th> </th>
						</tr>
					</thead>
					<tbody id = "fish-hole-data"></tbody>
				</table>

				<!-- List of checkboxes for BAIT. Users can check or uncheck to remove them from the main table -->
				<table class = "fishing-fp" id = "fish-bait">
					<thead>
						<tr>
							<th id = "fish-bait-name"> Fishing Bait </th>
							<th> </th>
						</tr>
					</thead>
					<tbody id = "fish-bait-data"></tbody>
				</table>


				<!-- List of checkboxes for TIME. Users can check or uncheck to remove them from the main table -->
				<table class = "fishing-fp" id = "fish-time">
					<thead>
						<tr>
							<th id = "fish-time-name"> Time </th>
							<th> </th>
						</tr>
					</thead>
					<tbody id = "fish-time-data"></tbody>
				</table>

				<!-- DETAILS when users hover over the name of a fish. This section will show what will drop from the fish --> 
				<table class = "fishing-fp" id = "fish-details">
					<thead>
						<tr>
							<th id = "fish-details-item"> Item</th>
						</tr>
					</thead>
					<tbody id = "fish-details-data"></tbody>
				</table>

				
			
			</div>
		</div>

		<div class = "page-img">
			<img>
		</div>

		<div class = "page-img">
			<img>
		</div>

		<div class = "page-img">
			<img>
		</div>	

		<div class = "page-img">
			<img>
		</div>	

		<div class = "page-img">
			<img>
		</div>	

		<div class = "page-img">
			<img>
		</div>	

		<div class = "page-img">
			<img>
		</div>	

		<div class = "page-img">
			<img>
		</div>	

		<!-- 
			==================================================================
			====================== ESTIMATED BENCHMARKS ======================
			==================================================================
		-->

		<div id = "benchmarks" class = "homepage-title">
			<h1> Estimated Benchmarks </h1> 
		</div>

		<div class = "small-description">
			<p1><b> Disclaimer:  </b> While some of these gph values look extremely high, there's a huge variance in what you could actually get in 1 hour. For example, a farm could be 35gph, but the range of possible gph could be about 20gph to 37gph. Fishing is truly RNG. The more catches you can get, the more of a chance to get those high valued fish. The higher the bench, the higher your avg gph run will be. 
			<br><br>
			Avg Node => Avg amount of nodes in a route
			<br> Avg Time => Avg amount of time to complete a route
			<br> Bench => (Avg Nodes * (Catch Rate * 3)) * (60 / Avg Time)

			<br><br> Routes change per instance. General routes can be found by <a href = "#fish-values"><u>picking an area</u></a>on the top of the page marked by arrows. I recommend fish farming a map that contains <b>both a good day and nighttime gph</b>. Testing still needs to be made for more maps and routes so stay tuned for more. 
			</p1>
		</div>

		<div class = "overflow-table">
			<div class = "flex-description" style = "align-items: flex-start;">
				<table class = "fishing" id = "fishing-benchmarks">
					<thead>
						<tr>
							<th> Map </th>
							<th> Fishing Hole </th>
							<th> Bait </th>
							<th> Time </th>
							<th> FP </th>
							<th> Avg Nodes </th>
							<th> Avg Time </th>
							<th> Bench </th>
						</tr>
					</thead>
					<tbody id = "bench-table-values">
					</tbody>
				</table>
			</div>
		</div>

		<!-- 
			==========================================================
			====================== CATCH VALUES ======================
			==========================================================
		-->

		<div id = "catch-values" class = "homepage-title">
			<h1> Catch Values </h1> 
		</div>

		<div class = "small-description">
			<p1> All values were caught with 875 fishing power except Seitung pools. Those are including the "Tips on Fishing" heart bonus from <input type = "text" onclick = "copy_value(this);" value = "[&BO4MAAA=]">. </p1>
		</div>

		<div class = "overflow-table">
			<div class = "flex-description" style = "align-items: flex-start;">
				<table class = "fishing" id = "catches">
					<thead>
						<tr>
							<th> Region </th>
							<th> Fishing Hole </th>
							<th> Bait </th>
							<th> Time </th>
							<th> FP </th>
							<th> Sample </th>
							<th> Drop Rates </th>
							<th> Value </th>
						</tr>
					</thead>
					<tbody id = "catch-table-values">
					</tbody>
				</table>
			</div>
		</div>

		<!-- 
			==========================================================
			====================== CATCH VALUES ======================
			==========================================================
		-->

		<div id = "drop-rates" class = "homepage-title">
			<h1> Drop Rates </h1> 
		</div>

		<div class = "small-description">
			<p1> Select a <a href = "#catch-values"><u> catch value</u></a> above to see the drop rates. Disclaimer: Take the sample size into consideration. These take a very long time to accumulate so some may have a lot more than others. </p1>
		</div>

		<div class = "overflow-table">
			<div class = "flex-description" style = "align-items: flex-start;">
				<div class = "small-description" style = "min-width: 275px;">
					<p1> 
						<b> Region: </b><span class = "p-right" id = "dr-region"> </span>
						<br><b> Fishing Hole: </b><span class = "p-right" id = "dr-hole"> </span>
						<br><b> Bait: </b><span class = "p-right" id = "dr-bait"> </span>
						<br><b> Time: </b><span class = "p-right" id = "dr-time"> </span>
						<br><b> Fishing Power: </b><span class = "p-right" id = "dr-fp"> </span>
						<br><b> Sample Size: </b><span class = "p-right" id = "dr-size"> </span>

					</p1>
				</div>

				<table class = "general" id = "catches-details">
					<thead>
						<tr>
							<th> Type </th>
							<th> Drop Rate </th>
						</tr>
					</thead>
					<tbody id = "dr-details-table-values">
					</tbody>
				</table>

				<table class = "general" id = "catches-local-type">
					<thead>
						<tr>
							<th> Local Type </th>
							<th onclick = "sortTableByPercent('catches-local-type', 1);"> Drop Rate </th>
						</tr>
					</thead>
					<tbody id = "dr-local-type-table-values">
					</tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div class = "flex-description" style = "align-items: flex-start; flex-wrap: wrap;"> 
				<!-- Local -->
				<table class = "general" id = "dr-local-table">
					<thead>
						<tr>
							<th> </th>
							<th> Local </th>
							<th onclick = "sortTableByPercent('dr-local-table', 1);"> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-local-table-values">
					</tbody>
				</table> 

				<table class = "general" id = "dr-saltwater-table">
					<thead>
						<tr>
							<th> </th>
							<th> Saltwater </th>
							<th onclick = "sortTableByPercent('dr-saltwater-table', 1);"> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-saltwater-table-values">
					</tbody>
				</table> 

				<table class = "general" id = "dr-world-class-table">
					<thead>
						<tr>
							<th> </th>
							<th> World Class </th>
							<th> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-world-class-table-values">
					</tbody>
				</table> 

				<table class = "general" id = "dr-junk-table">
					<thead>
						<tr>
							<th> </th>
							<th> Junk </th>
							<th> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-junk-table-values">
					</tbody>
				</table> 

				<!-- Bags -->
				<table class = "general" id = "dr-bag-table">
					<thead>
						<tr>
							<th> </th>
							<th> Bags </th>
							<th> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-bag-table-values">
					</tbody>
				</table> 

				<!-- Tonics -->
				<table class = "general" id = "dr-tonic-table">
					<thead>
						<tr>
							<th> </th>
							<th> Tonics </th>
							<th> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-tonic-table-values">
					</tbody>
				</table> 



				<!-- Others -->
				<table class = "general" id = "dr-other-table">
					<thead>
						<tr>
							<th> </th>
							<th> Other </th>
							<th> DR </th>
						</tr>
					</thead>
					<tbody id = "dr-other-table-values">
					</tbody>
				</table> 
			</div>
		</div>

		

		<div id = "fishing-tips" class = "flex-description" style = "align-items: flex-start; overflow-x: auto;">
			<div class = "left-inner-box">
				<table class = "details" id = "fishing-buffs">
					<thead>
						<tr>
							<th> </th>
							<th> Fishing Buffs </th>
							<th> Power </th>
						</tr>
					</thead>
					<tbody id = "fishing-buff-values">
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "25" checked = "true"></td>
							<td> Fishing Rod </td>
							<td> 25 </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "50" checked = "true"></td>
							<td> Tips on Fishing </td>
							<td> 50 </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "0" id = "fishing-bait" checked = "true"></td>
							<td> <select class = "checkbox-select" onchange = "select_bait(this);">
									<option value = "" disabled selected> Bait </option>
									<option value = "Not Mackerel"> Not Mackerel </option>
									<option value = "Mackerel"> Mackerel </option>
								</select> </td>
							<td id = "fishing-bait-value"> </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "0" id = "fishing-lure" checked = "true"></td>
							<td> <select class = "checkbox-select" onchange = "select_lure(this);">
									<option value = "" disabled selected> Lure </option>
									<option value = "Wooden Fishing Lure"> Wood Fishing Lure (+50) </option>
									<option value = "Antique Fishing Lure"> Antique Fishing Lure (+75) </option>
									<option value = "Amber Fishing Lure"> Amber Fishing Lure (+100) </option>
									<option value = "Jade Fishing Lure"> Jade Fishing Lure (+100) </option>
								</select>  </td>
							<td id = "fishing-lure-value"> </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "0" id = "fishing-food" checked = "true"></td>
							<td> <select class = "checkbox-select" onchange = "select_food(this);">
									<option value = "" disabled selected> Food </option>
									<option value = "Whitefish Sushi"> Whitefish Sushi (+75) </option>
									<option value = "Yellowfish Sushi"> Yellowfish Sushi (+100) </option>
									<option value = "Orangefish Sushi"> Orangefish Sushi (+125) </option>
									<option value = "Redfish Sushi"> Redfish Sushi (+150) </option>
									<option value = "Bowl of Fish Stew"> Bowl of Fish Stew (+150) </option>
									<option value = "Bowl of Echovald Hotpot"> Bowl of Echovald Hotpot (+150) </option>
									<option value = "Bowl of Jade Sea Bounty"> Bowl of Jade Sea Bounty (+150) </option>
									<option value = "Bowl of Crispy Fish Pancakes"> Bowl of Crispy Fish Pancakes (+150) </option>
									<option value = "Bowl of Imperial Palace Special"> Bowl of Imperial Palace Special (+150) </option>
								</select>  </td>
							<td id = "fishing-food-value"> </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "100" checked = "true"></td>
							<td> Full Tank </td>
							<td> 100 </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "0" id = "fishing-mastery" checked = "true"></td>
							<td> <select class = "checkbox-select" onchange = "select_mastery(this);">
									<option value = "" disabled selected> Mastery </option>
									<option value = "Tier 1"> Fishing Hole Master (+20) </option>
									<option value = "Tier 2"> Angler Sense (+40) </option>
									<option value = "Tier 3"> Fishing on a Full Tank (+60) </option>
									<option value = "Tier 4"> Master Caster (+80) </option>
									<option value = "Tier 5"> Local Legend (+100) </option>
								</select> </td>
							<td id = "fishing-mastery-value"> </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "0" id = "fishing-party" checked = "true"></td>
							<td> <select class = "checkbox-select" onchange = "select_party(this);">
									<option value = "" disabled selected> Fishing Party </option>
									<option value = "Tier 1"> Tier 1, 1 Fish (+50)</option>
									<option value = "Tier 2"> Tier 2, 10 Fish (+100)</option>
									<option value = "Tier 3"> Tier 3, 25 Fish (+150)</option>
									<option value = "Tier 4"> Tier 4, 45 Fish (+200)</option>
									<option value = "Tier 5"> Tier 5, 70 Fish (+250)</option>
									<option value = "Tier 6"> Tier 6, 99+ Fish (+300)</option>
								</select></td>
							<td id = "fishing-tier-value"> </td>
						</tr>
						<tr>
							<td></td>
							<td> Total: </td>
							<td id = "fishing-buff-total"> </td>
						</tr>
					</tbody>
				</table>

				<table class = "details" id = "fishing-buffs">
				<thead>
					<tr>
						<th> Food </th>
						<th> Power </th>
					</tr>
				</thead>
				<tbody id = "fishing-buff-values">
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Whitefish_Sushi" target = "_blank">Whitefish Sushi</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Yellowfish_Sushi" target = "_blank">Yellowfish Sushi</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Orangefish_Sushi" target = "_blank">Orangefish Sushi</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Redfish_Sushi" target = "_blank">Redfish Sushi</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Bowl_of_Fish_Stew" target = "_blank">Bowl of Fish Stew</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Bowl_of_Echovald_Hotpot" target = "_blank">Bowl of Echovald Hotpot</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Bowl_of_Jade_Sea_Bounty" target = "_blank">Bowl of Jade Sea Bounty</a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Plate_of_Crispy_Fish_Pancakes" target = "_blank">Plate of Crispy Fish Pancakes </a></td>
						<td> 150 </td>
					</tr>
					<tr>
						<td><a href = "https://wiki.guildwars2.com/wiki/Plate_of_Imperial_Palace_Special" target = "_blank">Plate of Imperial Palace Special </td>
						<td> 150 </td>
					</tr>
				</tbody>

				<table class = "details" id = "fishing-buffs">
					<thead>
						<tr>
							<th> Fishing Party </th>
							<th> Power </th>
						</tr>
					</thead>
					<tbody id = "fishing-buff-values">
						<tr>
							<td> Tier 1, 1 Fish </td>
							<td> 50 </td>
						</tr>
						<tr>
							<td> Tier 2, 10 Fish </td>
							<td> 100 </td>
						</tr>
						<tr>
							<td> Tier 3, 25 Fish </td>
							<td> 150 </td>
						</tr>
						<tr>
							<td> Tier 4, 45 Fish </td>
							<td> 200 </td>
						</tr>
						<tr>
							<td> Tier 5, 70 Fish </td>
							<td> 250 </td>
						</tr>
						<tr>
							<td> Tier 6, 99+ Fish </td>
							<td> 300 </td>
						</tr>
					</tbody>
				</table>

				<table class = "details" id = "fishing-exchange">
					<thead>
						<tr>
							<th> Qty </th>
							<th></th>
							<th></th>
							<th></th>
							<th onclick = "sortTableByPrice(this, 4);"> Result Value </th>
						</tr>
					</thead>
					<tbody id = "fishing-exchange-data">
					</tbody>
				</table>
			</div>

			<div class = "small-description">
				<b> General Tips and Info </b>
				<br> - Fishing holes have ~9 minute respawn rate. Depending on the area and travel, a good loop is an area with ~7 fish holes.
				<br> - During dusk/dawn, all fish become available regardless of time requirement. Also the best time to farm Mackerels in any open saltwater. 

				<br><br>
				<b> Fishing Rods </b>
				<br> Rods are only available at +25 by completing the first story chapter of EoD.

				<br><br>
				<b> Tips on Fishing </b>
				<br> This is a 1 hour +50 Fishing Power buff that can purchase from the heart vendor at <input type = "text" onclick = "copy_value(this);" value = "[&BO4MAAA=]"> (southeast). Simply fish around the area to complete the heart. You are able to map travel with the buff. If you have access to the Canthan guild hall, you can exit there to quickly travel to the heart.

				<br><br>
				<b> Bait </b>
				<br> All bait, except Mackerels, are +100 Fishing Power. Mackerels are +150. You can obtain these by exchange 5 Fine Fish Fillets at the Fishmonger in Arborstone or in saltwater at anytime with very low chance, but have a high chance of dropping during dusk/dawn in open water. In addition, Fish Eggs can be purchased at this vendor <input type = "text" onclick = "copy_value(this);" value = "[&BDULAAA=]"> in Sandswept. 

				<br><br>
				<b> Lure </b>
				<br> Lure can be purchased through a couple of vendors. If you have Arborstone mastery level 1+, you have access to fishing merchants. If you have max fishing mastery, you have access to Amber/Jade fishing lures. 
				<br> - Wooden Fishing Lure, +50 Fishing Power at <input type = "text" onclick = "copy_value(this);" value = "[&BO4MAAA=]"> via Tournament Vendor, Vendor at the docks, or the heart. 
				<br> - Antique Fishing Lure, +75 Fishing Power at <input type = "text" onclick = "copy_value(this);" value = "[&BMYMAAA=]">
				<br> - Amber Fishing Lure, +100 Fishing Power at Arborstone (Mastery Level 1+, northwest)
				<br> - Jade Fishing Lure, +100 Fishing Power south of <input type = "text" onclick = "copy_value(this);" value = "[&BKIMAAA=]">

				<br><br>
				<b> Food </b>
				<br> Non-ascended food recipes are obtained automatically if you have a Chef leveled up. Ascended recipes can be purchased easily from either of these two vendors: 
				<br> - Canach Club in Arborstone. Enter through the northwest, in a cave. If you have the fishing or turtle merchants, it is next to them. 
				<br> - Archaeologist vendor at Echovald <input type = "text" onclick = "copy_value(this);" value = "[&BMoMAAA=]">

				<br><br>
				<b> Full Tank & Fishing Masteries </b>
				<br> Full Tank is the 3rd mastery in the Fishing line. Simply eat any food to be Nourished and you gain 100+ Fishing Power. For every mastery you complete in that line, you gain a passive +20 per for a total of +100. 

				<br><br>
				<b> Fishing Party </b>
				<br> This is the last mastery in the Skiff line. Once obtained, after each successful catch in a Fishing Hole, you gain a stack for you and those within your Skiff. Your party members can also contribute to the stack for each successful fish captured in a hole. Check the Fishing Buffs table for the breakdown of each tier. 

				<br><br> - With 1 person, it will take 99 fish, 33 Fishing Holes to gain max stacks. With 5, it will take ~7 Fishing Holes. 
				<br> - You can "share" the fishing buff from other party member's skiffs. If you join a party with stacks, you can hop on their skiff to obtain the stack for yourself. You can transfer the stack back to your skiff. 
			</div>
		</div>

	</div>

	<!-- 
	    ===================================================================
	    ====================== PROGRESS BARS ==============================
	    ===================================================================
	  -->
	  	<div class = "bottom-sticky" id = "tyria-timer-box" style = "bottom: 4%;">
	      	<div id = "progress-box-tyria" class = "progress-box">
	        	<h1 id = "progress-text-tyria" class = "progress-text"></h1>
	        	<div id = "progress-bar-tyria" class = "progress-bar"></div>
	      	</div>
	  	</div>

	  	<div class = "bottom-sticky" id = "cantha-timer-box">
	      	<div id = "progress-box-cantha" class = "progress-box">
	        	<h1 id = "progress-text-cantha" class = "progress-text"> </h1>
	        	<div id = "progress-bar-cantha" class = "progress-bar"></div>
	      	</div>
	  	</div>


	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../js-to-php/resources/fishing.php"); ?>
	<?php include("../footer.php"); ?>


</body>
</html>