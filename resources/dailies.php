<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
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

		<div class = "small-description">
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

		<div id = "revert" class = "red-button" style = "display: flex; align-items: center; justify-content: center; margin: 20px;">
			<input type = "button" id = "today-button" value = "Today's Dailies" style = "margin-left: 10px; margin-right: 10px;" onclick = "getDaily(1);">
			<input type = "button" id = "tomorrow-button" value = "Tomorrow's Dailies" style = "margin-left: 10px; margin-right: 10px;" onclick = "getDaily(2);">
		</div>

		<div style = "display: flex; align-items: center; justify-content: center; margin: 20px;">
			<span style = "font-size: 18px; margin-right: 5px;"> Copy Expan + LvL 80 Dailies: </span>
			<input  type = "text" id = "copyExpan" class = "select-button" onclick = "copyValue(this.id);" value = "merp"> </input> 
		</div>

		<div class = "page-box">
			<table id = "daily" class = "daily">
				<tr>
					<th> Type </th>
					<th> Daillies </th>
					<th onclick = "sortTableByDifficulty('daily',2);"> Difficulty </th>
					<th> How-to </th>
					<th> Waypoint </th>
					<th> Link </th>
				</tr>

				<tbody id = "dailyBody"></tbody>
			</table>

			<div class = "section-header">
			<h1>Pact Supply Network Agent</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

			<div style = "display: flex; align-items: center; justify-content: center; margin: 20px;">
				<span style = "font-size: 18px; margin-right: 5px;"> Copy PSNA Waypoints/Locations: </span>
				<input  type = "text" id = "copyPSNA" class = "select-button" onclick = "copyValue(this.id);" value = "merp"> </input> 
			</div>

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



  		<div class = "bottom-sticky">
	  		<div id = "box-0" class = "inner-page-box"> <!-- Start of Peu Train -->
				
				<div class = "full-progress-box">
					<div id = "progress-bar-0" class = "full-progress-bar" style = "height: 93%;">
					</div>

					<div class = "page-box-full-timer" style = "">

						<div class = "full-timer-name" style = "margin: 0; vertical-align: middle;">
							<b>Reset in: </b><p1 id = "name-0"></p1> <p1 id = "time-0"></p1>
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

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>

</body>
</html>