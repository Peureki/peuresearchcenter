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

		<div class = "homepage-title">
			<h1> Pick an area </h1> 
		</div>

		<div class = "flex-description">
			<select class = "select-button" onchange = "get_map(this.value);">
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
				
				<option value = "Ember Bay"> Ember Bay </option>
				<option value = "Draconis Mons"> Draconis Mons </option>
			</select>
		</div>

		<div class = "flex-description" style = "line-height: 1; align-items: flex-start;">
			<table class = "fishing" id = 'fishing'>
				<thead>
					<tr>
						<th> </th>
						<th onclick = "sortTableByAlphabet('fishing', 0);"> Name </th>
						<th onclick = "sortTableByAlphabet('fishing', 1);"> Fishing Hole </th>
						<th onclick = "sortTableByAlphabet('fishing', 2);"> Bait </th>
						<th onclick = "sortTableByAlphabet('fishing', 3);"> Time </th>
						<th onclick = "sortTableByPrice('fishing', 4);"> Value </th>
					</tr>
				</thead>
				<tbody id = "fishing-data"></tbody>
			</table>

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

		<div class = "page-picture">
			<img id = "fishing-img">
		</div>

		<div class = "flex-description" style = "align-items: flex-start;">
			<div>
				<table class = "details" id = "fishing-buffs">
					<thead>
						<tr>
							<th> </th>
							<th> Fishing Buffs </th>
							<th> Fishing Power </th>
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
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "100" checked = "true"></td>
							<td> Bait </td>
							<td> 100 </td>
						</tr>
						<tr>
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "100" checked = "true"></td>
							<td> Lure </td>
							<td> 100 </td>
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
							<td><input type = "checkbox" onclick = "fishing_buff_value();" value = "100" checked = "true"></td>
							<td> Mastery </td>
							<td> 100 </td>
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
						<th> Fishing Power </th>
						<th> Value </th>
					</tr>
				</thead>
				<tbody id = "fishing-buff-values">
					<tr>
						<td> Whitefish Sushi </td>
						<td> 75 </td>
						<td> Something </td>
					</tr>
				</tbody>
			</table>
			</div>

			<div class = "small-description">
				The checklist on the right is the available fishing power you can obtain. Check or uncheck to see what you could potentially achieve. 

				<br><br>
				<b> Fishing Rods </b>
				<br> Rods are only available at +25 by completing the first story chapter or EoD. There's a +50 by completing the achievement, "Cod Swimming Amongst Mere Minnows" (good luck :D).

				<br><br>
				<b> Tips on Fishing </b>
				<br> This is a +50 Fishing Power, 1 hour buff that can purchase from the heart vendor at <input type = "text" onclick = "copy_value(this);" value = "[&BO4MAAA=]"> (southeast). Simply fish around the area to complete the heart. You are able to map travel with the buff. 

				<br><br>
				<b> Bait </b>
				<br> All bait, except Mackerels, are +100 Fishing Power. Mackerels are +150. You can obtain these in Saltwater at anytime with very low chance, but have a high chance of dropping during dusk/dawn in open water. 

				<br><br>
				<b> Lure </b>
				<br> Lure can be purchased through a couple of vendors. If you have Arborstone level 1+, you can purchase the Wooden Fishing Lure and the Amber Fishing Lure. 
				<br> - Wooden Fishing Lure, +50 Fishing Power at <input type = "text" onclick = "copy_value(this);" value = "[&BO4MAAA=]"> via Tournament Vendor, Vendor at the docks, or the heart. 
				<br> - Antique Fishing Lure, +75 Fishing Power at <input type = "text" onclick = "copy_value(this);" value = "[&BMYMAAA=]">
				<br> - Amber Fishing Lure, +100 Fishing Power at Arborstone (Mastery Level 1+, northwest)

				<br><br>
				<b> Food </b>
				<br> Non-ascended Fishing Power food is obtained automatically if you have a Chef. Ascended feasts can be purchased easily from either of these two vendors: 
				<br> - Canach Club in Arborstone. Enterence is northwest, in a cave. If you have the fishing or turtle merchants, it is next to them. 
				<br> - Archaeologist vendor at Echovald <input type = "text" onclick = "copy_value(this);" value = "[&BMoMAAA=]">

				<br><br>
				<b> Full Tank & Fishing Masteries </b>
				<br> Full Tank is the 3rd mastery in the Fishing line. Simply eat any food to be Nourished and you gain 100+ Fishing Power. For every mastery you complete in that line, you gain a passive +20 per for a total of +100. 

				<br><br>
				<b> Fishing Party </b>
				<br> This is the last mastery in the Fishing line. Once obtained, while you fish in a Fishing Hole, you gain a stack for you and those within your Skiff. Your party members can also contribute to the stack for each successful fish captured in a hole. Check the Fishing Buffs table for the breakdown of each tier. 

				<br><br> - With 1 person, it will take 99 fishes, 33 Fishing Holes to gain max stacks. With 5, it will take 20 Fishing Holes. 
				<br> - You can "share" the fishing buff from other party member's skiffs. If you just joined in a party with 50 stacks already, you can get the 50 stacks by going on the skiff. You could also take the buff to your skiff. This does not work when the stack hits beyond 99+ (bug?). 
			</div>
		</div>

	</div>

	<!-- 
	    ===================================================================
	    ====================== PROGRESS BARS ==============================
	    ===================================================================
	  -->
	  	<div class = "bottom-sticky" id = "tyria-timer-box" style = "">
	      	<div id = "progress-box-tyria" class = "progress-box">
	        	<h1 id = "progress-text-tyria" class = "progress-text"> </h1>
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
	<?php include ("../cron/set-fishing.php"); ?>
	<?php include("../footer.php"); ?>


</body>
</html>