<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php');?>
	<title> Dailies </title>
	<script type = "text/javascript" src = "<?php echo $base;?>/resources/dailies.js?v=<?php echo $date;?>"></script>
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
			<h1>Dailies</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div id = "dailies" class = "small-description">
			Depending on your account type (expansion or not), it may change what dailies you recieve for today. 
			
			<div style = "position: relative; display: flex; align-items: left;">
				<div style = "background: rgb(236, 236, 222); border: 1px solid black; width: 17px; height: 17px; position: absolute; bottom: 25%;">
				</div> 
				<p style = "margin-left: 25px;"> Expansion + Level 80 Dailies </p>
			</div>

			<div style = "position: relative; display: flex; align-items: left;">
				<div style = "background: rgb(255, 97, 41); border: 1px solid black; width: 17px; height: 17px; position: absolute; bottom: 25%;">
				</div> 
				<p style = "margin-left: 25px;"> Free Account Dailies </p>
			</div> 
		</div>

		<div class = "small-description">
			<b> UPDATE as of 3/28 </b>
			<br> Anet has confirmed that the api for https://api.guildwars2.com/v2/achievements/daily is currently broken. They are working on a fix for it. Sorry for the inconvience!
		</div>

		<div id = "revert" class = "red-button" style = "display: flex; align-items: center; justify-content: center; margin: 20px;">
			<input type = "button" id = "today-button" value = "Today's Dailies" style = "margin-left: 10px; margin-right: 10px;" onclick = "getDaily(1);">
			<input type = "button" id = "tomorrow-button" value = "Tomorrow's Dailies" style = "margin-left: 10px; margin-right: 10px;" onclick = "getDaily(2);">
		</div>

		<div class = "small-description" style = "display: flex; justify-content: center;">
			<span style = "font-size: 18px; margin-right: 5px;"> Copy Expan + LvL 80 Dailies: </span>
			<input  type = "text" id = "copyExpan" class = "select-button" onclick = "copyValue(this.id);" value = "merp"> </input> 
		</div>

		<div class = "page-box">
			<div class = "overflow-table">
				<table id = "daily" class = "daily">
					<tr>
						<th> Type </th>
						<th onclick = "sortTableByDifficulty('daily',1);"> Difficulty </th>
						<th> Daillies </th>
						<th> How-to </th>
						<th> Waypoint </th>
						<th> Link </th>
					</tr>

					<tbody id = "dailyBody"></tbody>
				</table>
			</div>

			<div class = "section-header">
				<h1>PSNA</h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div id = "psna" class = "small-description" style = "display: flex; justify-content: center;">
				<span style = "font-size: 18px; margin-right: 5px;"> Copy PSNA Waypoints/Locations: </span>
				<input  type = "text" id = "copyPSNA" class = "select-button" onclick = "copyValue(this.id);" value = "merp"> </input> 
			</div>

			<div class = "overflow-table">
				<table class = "psna">
					<tr>
						<th> Name </th>
						<th> Area </th>
						<th> How-to </th>
						<th> Location </th>
					</tr>

					<tbody id = "psnaBody"></tbody>
				</table>
			</div>

			<div id = "provisioner-tokens" class = "section-header">
				<h1>Provisioner Tokens</h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div class = "small-description" style = "display: flex; justify-content: center;">
				<span style = "font-size: 18px; margin-right: 5px;"> Copy Waypoints: </span>
				<input  type = "text" id = "copyProv" class = "select-button" onclick = "copyValue(this.id);" value = "VB: [&BN4HAAA=] | AB: [&BNYHAAA=] | TD: [&BMwHAAA=] | Rata: [&BLYEAAA=] | Grove: [&BLsEAAA=] | Div Reach: [&BP4EAAA=] | LA: [&BAwEAAA=] | Hoel: [&BIYDAAA=] | Citidal: [&BKgDAAA=]"> </input> 
			</div>

			<div class = "homepage-title">
				<h1> HoT Maps </h1>
			</div>

			<div class = "small-description">
				These specific NPCs have multiple tabs where there are multiple options to exchange. Only 1 exchange per tab can happen. This table displays <b> the cheapest option </b> within those tabs. 
			</div>

			<div class = "overflow-table">
				<table id = "prov-tokens-other" class = "prov-tokens-other">
					<tr>
						<th> Map </th>
						<th> Faction </th>
						<th> Waypoint </th>
						<th> Name </th>
						<th> Qty </th>
						<th onclick = "sortTableByPrice('prov-tokens-other', 5, 'ascending');"> Buy Price </th>
						<th onclick = "sortTableByPrice('prov-tokens-other', 6, 'ascending');"> Sell Price </th>	
					</tr>
					<tbody id = "prov-tokens-other-tbody"></tbody>
				</table>
			</div>

			<div class = "homepage-title">
				<h1> Cities </h1>
			</div>

			<div class = "overflow-table">
				<table id = "prov-tokens-cities" class = "prov-tokens-cities">
					<tr>
						<th> Map </th>
						<th> Faction </th>
						<th> Waypoint </th>
						<th> Name </th>
						<th> Qty </th>
						<th onclick = "sortTableByPrice('prov-tokens-cities', 5, 'ascending');"> Buy Price </th>
						<th onclick = "sortTableByPrice('prov-tokens-cities', 6, 'ascending');"> Sell Price </th>	
					</tr>
					<tbody id = "prov-tokens-cities-tbody"></tbody>
				</table>
			</div>

			<div id = "dwc-donations" class = "section-header">
				<h1>DWC Material Donations</h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div class = "small-description">
				These values are based on the total value of the reward tracks / 5000 for each commendation. The cost are items needed to be exchanged for the commendations. Note that while there are values per commendation, check your progress in whichever reward track of your choosing to see what reward is coming up. The values are long-term, assuming you work on completing the whole reward track. Ascended items and Mystic Clover values are not considered. Check the full reward track values <a href = "../research/drizzlewood-reward-tracks.php"><u> here.</u></a> 
			</div>

			<div class = "selections">
				<div>
					<b>Cost Value:</b> 
					<select name = "choose-cost" id = "choose-cost" class = "select-button">
						<option value = "Sell Price"> Sell Price </option>
					<option value = "Buy Price"> Buy Price </option>
					</select>
				</div>

				<div>
					<b>Choose Legion for Charr Commendations:</b>
					<select name = "choose-legion" id = "choose-legion" class = "select-button">
						<option value = "Avg"> Average </option>
						<option value = "Ash"> Ash </option>
						<option value = "Blood"> Blood </option>
						<option value = "Dominion"> Dominion </option>
						<option value = "Flame"> Flame </option>
						<option value = "Frost"> Frost </option>
						<option value = "Iron"> Iron </option>
					</select>
				</div>

				<button  type = "button" id = "calculate" class = "select-button" onclick = "get_material_donations('choose-legion', 'choose-cost');"> Calculate </button>
			</div>

			<div class = "overflow-table">
				<table id = "track-table" class = "one-ingre">
					<thead>
						<tr>
							<th> Cost </th>
							<th> </th>
							<th> Commendation </th>
							<th onclick = "sortTableByPrice('track-table', 3, 'decending');"> /Exchange </th>
						</tr>	
					</thead>
					<tbody id = "track-tableBody"></tbody>
				</table>
			</div>
		</div> <!-- End of page box -->



  		<div class = "bottom-sticky">
	  		<div id = "box-0" class = "inner-page-box"> <!-- Start of Peu Train -->
				
				<div class = "full-progress-box">
					<div id = "progress-bar-0" class = "full-progress-bar">
					</div>

					<div class = "page-box-full-timer" style = "">

						<div class = "full-timer-name" style = "margin: 0; vertical-align: middle;">
							Reset in: <p1 id = "name-0"></p1> <p1 id = "time-0"></p1>
						</div>
						<div class = "full-timer">
							Hours
							<br>
							<p1 id = "hours-0">00</p1> <!-- Hour -->
						</div>
						<div class = "full-timer">
							Minutes 
							<br>
							<p1 id = "minutes-0">00</p1> <!-- Minutes -->
						</div>
						<div class = "full-timer">
							Seconds
							<br>
							<p1 id = "seconds-0">00</p1> <!-- Seconds -->
						</div>
					</div>
				</div>

				<p2 id = "num-0" style = "display: none;"> </p2>
			</div> <!-- End of reset -->
		</div>
	</div>


	<script> 

		function showBlock(num){
			var infoBox = document.getElementById('main-info-box').children;

			for (i = 0; i < infoBox.length; i++){
				infoBox[i].style.display = 'none';
				console.log(infoBox[i]);
			}

			infoBox[num].style.display = "block";
		}

		getDaily();
		new_Train('hours-0','minutes-0','seconds-0','progress-bar-0','num-0','box-0','name-0','time-0',0);

	</script>

	<?php include ('../js-to-php/resources/provisioner-tokens.php'); 
		include ('./material-donations.php');
	?>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../../footer.php"); ?>


</body>
</html>