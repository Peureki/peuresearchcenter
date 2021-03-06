<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Bitterfrost Frontier</title>
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
			<a href = "#farming"><li> &#10097; Farming </li></a> 
			<a href = "#events"><li> &#10097; Events </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
			<a href = "#solo-farm"><li> &#10097; Solo Farm </li></a> 
		</ul>
	</div>	

	<div class = "page-box">

		<div class = "section-header">
			<h1>Bitterfrost Frontier</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<b> How to:</b> To farm the map, it's a really <i>chill</i> event train. Sorry LOL. Seriously though, to farm this map, you do need to have at least 15 people in order to spawn champions. If there are no champions, the profit does start diminishing pretty fast. 

			<br><br>
			<b>Plan</b>
			<br> The map meta is not on a global timer. It is dependent on the instance of the map. As a commander, you could arrive at least 30-50 minutes early to the map (if you plan to start at a specific time) to gauge where the meta is at. The meta could be starting when you get there or start 30 minutes after you arrived. Either way, finding out when the meta did occur is a great thing because now you can track the time using my <a href = "../timers/bitterfrost-frontier.html" target = "_blank"><u>timer page</u></a>. Remember that each time the meta finishes, the Icebound Chests respawn. Read more specifically on the meta <u>here</u>. In an hour-ish train, it should be possible to get hit with the meta and be able for the squad to gather 2 rounds of all the Icebound Chests. 

			<br><br>
			In between the meta, follow my <a href = "#recommendation-events"><u>recommended priority of events</u></a>. Some of these events run pretty slow sometimes. All of the braziers of events (when defending) sometimes take a long time to spawn any mobs. When you have to lit the braizer, I recommend only have 2 people put in their torch to start the event. This gives it time and be slow enough to spawn mobs every 25% of the health of the brazier. 

			<br><br>
			For the Quaggan bath and the Chokocooka event, pay attention via <a href = "../timers/bitterfrost-frontier.html" target = "_blank"><u>timer page</u></a> for when an event is about to fail or has started back up again. These events have a different time when you finish their fail event and when you complete their non-failed event. In total, there are 4 possible events that can occur, but you only want the 2 events that come after successfully completing the events. Both the failed events of these events are tedious and may not be worth the squad's time. 
			<br> 
		</div>

		<div id = "events" class = "page-header">
			<h1> Events </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-bitterfrost" title = "Bitterfrost Frontier Events" src = "../images/bitterfrost-frontier/events.jpg" style = "width: 70%;">
		</div>

		<div class = "criteria-box">
			<div class = "meta-box">
				<h3> Meta </h3>
			</div>

			<div class = "great-box">
				<h3> Great </h3>
			</div>

			<div class = "meh-box">
				<h3> Meh </h3>
			</div>

			<div class = "avoid-box">
				<h3> Avoid </h3>
			</div>
		</div>

		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "recommendation-box"> 
			<h3><span class = "meta-text"> 1-3,</span><span class = "great-text" > 9-10, 12-14, 6, 11, 4, </span> <span class = "meh-text">7</span><span class = "great-text">-8, 15-16, </span><span class = "meh-text">17, </span><span class = "avoid-text"> 5 </span>
			</h3> 
		</div>

		<div class = "overflow-table">
			<table id = "events-table" class = "events">
				<tr> 
					<th> # </th>
					<th> Qty </th>
					<th> Name </th>
					<th> Description </th>
					<th> Upscale </th>
					<th> Extra </th>
				</tr>
				<tr> 
					<td id = "1" class = "meta-event-number"> 1 </td>
					<td class = "qty-event-number"> 9 </td>
					<td class = "rest-of-table"> Light the Kodan brazier </td>
					<td class = "rest-of-table"> Take a torch from a brazier and use it on an event brazier to start it. The more Braizers that are lit, the faster (but not too many or it will complete too fast). Spawns if #2 fails </td>
					<td class = "rest-of-table"> Possible champs, Mob density+</td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 2 </td>
					<td class = "qty-event-number"> 9 </td>
					<td class = "rest-of-table"> Defend the Kodan braziers from Jormag's minions </td>
					<td class = "rest-of-table"> If event #1 completes, this event will spawn eventually. Will spawn more frequently the closer the time is to the meta </td>
					<td class = "rest-of-table"> Possible champs, Mob density+ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 3 </td>
					<td class = "qty-event-number"> 9 </td>
					<td class = "rest-of-table"> Defeat Jormag's Champions </td>
					<td class = "rest-of-table"> Champions will spawn randomly to one of the 9 lit braziers </td>
					<td class = "rest-of-table"> 1 Guaranteed champ each </td>
					<td class = "rest-of-table"> Respawns Icebound Chests </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 4 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Kill the Svanir, free the quaggans </td>
					<td class = "rest-of-table"> Quick event</td>
					<td class = "rest-of-table"> Fake champs </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 5 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat the champion Svanir tyrant </td>
					<td class = "rest-of-table"> Very quick champion </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 6 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defend the griffon chicks from the Sons of Svanir </td>
					<td class = "rest-of-table"> 9 waves of Svanir. Fails if all the chicks get defeated </td>
					<td class = "rest-of-table"> Possible champs, Mob density+</td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "3" class = "meh-event-number"> 7 </td>
					<td class = "qty-event-number"> 3 </td>
					<td class = "rest-of-table"> Trounce the veteran corrupted wolf </td>
					<td class = "rest-of-table"> Very quick event. Might be too fast for a squad</td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 8 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Protect the statue from destruction </td>
					<td class = "rest-of-table"> 5 waves of enemies. If this event fails, #9 eventually will spawn.</td>
					<td class = "rest-of-table"> Possible champs, Mob density+ </td>
					<td class = "rest-of-table">  </td>
				</tr>

				<tr> 
					<td id = "3" class = "meh-event-number"> 9 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Gather stones to bolster the statue of Chokocooka </td>
					<td class = "rest-of-table"> Gather stones. There are a lot of stones deeper into the cave. If successful, event #8 spawns eventually</td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 10 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Clear the streams of corruption so the quaggan can bathe </td>
					<td class = "rest-of-table"> 5 minutes of waves. Event fails easily if there is no attendance. If this event fails, #11 spawns immediately </td>
					<td class = "rest-of-table"> Possible champs, Mob density+ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "3" class = "meh-event-number"> 11 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Destroy all the icebrood around the hot spring </td>
					<td class = "rest-of-table"> Only spawns if #10 fails. Quick event. If successful, #10 spawns instead eventually </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> </td>
				</tr>
			</table>
		</div>

		<div id = "nodes" class = "page-header">
			<h1> Nodes </h1>
		</div>

		<div class = "small-description">
			Bitterfrost Frontier is heavily known for being one of the best maps for gathering Unbound Magic and ascended trinkets. Winterberries are nodes that get you both. They are repeatable by switching to multiple characters and have a respawn rate of about 23 hours from when you gathered them. Here's my personal optimal route to gathering them quickly: 

			<br><br>
			<div style = "display: flex; align-items: center; justify-content: center;">
				<img src = "../images/bitterfrost-frontier/winterberry-farm.jpg" style = "width: 90%;">
			</div>
		</div>

		<div id = "solo-farm" class = "page-header">
			<h1> Solo Farm </h1>
		</div>

		<div class = "page-links">
			<p1><a href="https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1795865739" target = "_blank"> Spreadsheet </a></p1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles-nodes" title = "Solo Farm: Bitterfrost Icebound Chests" src = "../images/bitterfrost-frontier/icebound-chests.jpg" style = "width: 50%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<b>Icebound Chests</b>
				<br>
				<p1> This farm consist of farming Icebound Chests. Having the mastery "Koda's Flame" from Ancient Magics is required to grab torches from Braizers. To grab a torch, interact with an active Braizer that's lit (and does not have the gear symbol above it) and then interact with an Icebound Chest. You cannot grab a torch if the Braizer is not lit or is in the process of being lit. 
					<br><br>
				If you're farming this for more than 50 minutes, you're guaranteed to have a meta pop up, which will prevent the Icebound Chests from showing up. Luckily, this meta is very easy to do as you just have to kill 9 champions. There are always players around and you don't need that many to complete the meta. Once the meta is over, <span style = "font-weight: bold;"> fresh Icebound Chests will respawn</span>. Thus, making this super repeatable! Make sure to switch characters if you plan to continue it. </p1>

				<br><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/nCBi04A3YVI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
			</div>
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