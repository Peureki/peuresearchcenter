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
			<select class = "select-button" onchange = "select_map(this.value);">
				<option value = "" disabled selected> Map </option>
				<option value = "Seitung Province"> Seitung Province </option>
				<option value = "New Kaineng City"> New Kaineng City </option>
				<option value = "Echovald Wilds"> Echovald Wilds </option>
				<option value = "Dragon's End"> Dragon's End </option>
				<!--<option value = "Ascalon"> Ascalon </option>
				<option value = "Kryta"> Kryta </option>
				<option value = "Shiverpeaks"> Shiverpeaks </option>
				<option value = "Orr"> Orr </option>
				<option value = "Maguuma Jungle"> Maguuma Jungle </option>
				<option value = "Crystal Desert"> Crystal Desert </option>
				-->
				<option value = "Ember Bay"> Ember Bay </option>
				<option value = "Draconis Mons"> Draconis Mons </option>
			</select>
		</div>

		<div class = "flex-description" style = "line-height: 1; align-items: flex-start;">
			<table class = "fishing" id = 'fishing'>
				<thead>
					<tr>
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
			<div class = "small-description">
				The checklist on the right is defaulted to max buffs individually. Check or uncheck to see what Fishing Power you could achieve. 
			</div>

			<table class = "details" id = "fishing-buffs">
				<thead>
					<tr>
						<th> </th>
						<th> Buff </th>
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
								<option value = "Tier 1"> Tier 1 (+50)</option>
								<option value = "Tier 2"> Tier 2 (+100)</option>
								<option value = "Tier 3"> Tier 3 (+150)</option>
								<option value = "Tier 4"> Tier 4 (+200)</option>
								<option value = "Tier 5"> Tier 5 (+250)</option>
								<option value = "Tier 6"> Tier 6 (+300)</option>
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