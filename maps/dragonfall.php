<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Dragonfall </title>
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
			<a href = "#summary"><li> &#10097; Summary </li></a> 
			<a href = "#bridges"><li> &#10097; Bridges </li></a> 
			<a href = "#escorts"><li> &#10097; Escorts </li></a> 
			<a href = "#upgrading-camps"><li> &#10097; Upgrading Camps </li></a>
			<a href = "#pre-meta"><li> &#10097; Pre-Meta </li></a>
			<a href = "#meta"><li> &#10097; Meta </li></a>
			<a href = "#champ-train"><li> &#10097; Champ Train </li></a>
			<a href = "#post-meta"><li> &#10097; Post-Meta </li></a>
		</ul>
	</div>

	<div class = "page-box">

		<div class = "section-header">
			<h1>Dragonfall</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<!-- Quick info table -->
		<table class = "quick-info">
			<tr>
				<th> Currency </th>
				<th> </th>
				<th> Info </th>
			</tr>

			<tr> 
				<td> Mistborn Mote </td>
				<td> <img class = "nodes-image" title = "Mistborn Mote" src = "../images/assets/nodes/Mistborn_Mote.png"></td>
				<td> Gathered from meta, nodes, Coffers</td>
			</tr>

			<tr>
				<td> Volatile Magic </td>
				<td> <img class = "nodes-image" title = "Unbound Magic" src = "../images/assets/Volatile_Magic.png"></td>
				<td> Gathered from all mobs, meta, most events, Mistborn Mote, Glyph of Bounty </td>
			</tr>

		</table> <!-- End of quick info table -->

		<div id = "summary" class = "page-header">
			<div class = "small-description">
				<p1>This guide is heavily based on <a href = "https://docs.google.com/document/d/1pPfwk3Nfcq9tLYUyWVU54ONEGH3f7IuHyXD0KeuElfk/edit" style = "text-decoration: underline;">Null's (xteh.7146) guide.</a>
				<br><br> 
				<span style = "font-weight: bold;"> Summary: </span> 
				<br>
				This guide is assuming the map is fresh. The objective of the map is to escort NPCs to 3 camps of the map: Mist Warden, Olmakhan, Crystal Bloom. In each of these camps, there are series of small events that need to be completed to progress the meta, in tiers. Once each camp reaches the max tier of 4, more series of smaller defense/escort events will begin at the same time. Once all of those are completed, then the meta begins. The map ends with a champ train that will contain most of the loot so make sure to stay after the meta! The goal is to progress the map as fast as possible while still generating enough keys for the final chests. 
				<br><br>
				<span style = "font-weight: bold;"> Recommendations: </span> 
				<br>
				At least 27 Mistborn Keys are needed for the final chests and champ train chests. Every event rewards 1 so it's best to follow the commander as tight as possible to tag every event. This will be the main source for rewards.

				<br><br> 
				Below will detail every phase to give you an idea of what you can expect for commanding or following a Dragonfall train. 
				</p1>
			</div>
		</div>

		<div id = "bridges" class = "page-header">
			<h1> Bridges </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 50%;" src = "../images/dragonfall/bridges.jpg">
		</div>

		<div class = "small-description">
			<p1>
			Immediately when the map refreshes, all bridge events begin. They all start off as bridges that need to be repaired so it's an event where you gather scraps and turn them in. To be effecient, there are two that are close to the starting waypoint. If you have the roller beetle, you can run to each side and tag it by placing 1 or a few scraps into the event. The events will have to be completed eventually because the first escorts cannot progress until each respective bridge event completes. 
			<br><br> 
			Even tagging one of these events is good. I would make sure to tag the bridge event that the commander tag is planning to start. If the commander plans to start in the Mist Warden camp, make sure to tag the bridge in the Mist Warden area. 

			</p1>
		</div>

		<div id = "escorts" class = "page-header">
			<h1> Escorts </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 50%;" src = "../images/dragonfall/escorts.jpg">
		</div>

		<div class = "small-description">
			<p1>
			A few minutes after the start of a fresh map, there will be three groups of NPCs that will have a tangerine symbol above their heads. When those are up, that's when each escort is ready. They can only start manually if a player interacts. These are the fastest escorts and should be in this order: 
			<br> 1. Mist Warden 
			<br> 2. Crystal Bloom 
			<br> 3. Olmakhan

			<br><br> 
			It is important to complete and tag all escorts because they offer <span style = "font-weight: bold;">3 Mistborn Coffers each </span>. These coffers will be the main source of loot.

			<br><br>
			It is entirely possible that each escort will start at the same time or relatively around the same time. If that is the case, prioritize Mist Warden as fast as possible. If you're the commander, make sure to communicate what your plan is with the map. Pay attention to each progress as you can see the escort symbols on the map. Crystal Bloom should be next, but if Olmakhan made more progress, move that instead. 

			<br><br> To make the escorts go more quickly, give the NPCs superspeed and to clear out every mob in the way, regardless of being part of the event. The NPCs will move towards anything red. 
			</p1>
		</div>

		<div id = "upgrading-camps" class = "page-header">
			<h1> Upgrading Camps </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 70%;" src = "../images/dragonfall/upgrading-camps.jpg">
		</div>

		<div class = "small-description">
			<p1>
			After an escort, events will start spawning from the respective camp. There are three main events that spawn frequently and should be done to quickly upgrade camps: 
			<br> - Culls (x3)
			<br> - Brandstorms 
			<br> - Champs
			<br><br>
			At the same time, depending on the tier, there are "main" events that need to complete to progress each tier. These events take longer than the events listed above, but should be done at least before the camp progress bar fills. 
			<br><br>
			At tier 2 until 4, there are occasionally Mender events. These events are a short escort event that contains a champion at the end and rewards <span style = "font-weight: bold;"> 3 Mistborn Coffers.</span> These spawn at each waypoint (except the main) and there will be a tangerine symbol above their head. This symbol can be seen throughout the map unless a player started it. 
			<br><br>
			The priority of events should be: <span style = "font-weight: bold;"> Main events &#x2192; Menders &#x2192; Culls &#x2192; Brandstorms &#x2192; Champs </span>
			<br><br>
			There are events such as: 
			<br> - Patrols 
			<br> - DERVS/Effigy/Abomination escorts
			<br> - Charr Pilots 
			<br> - Bridges
			<br> For these, I would not recommend forcusing on them, but if they happen to be in progress and near completion, might as well poke them.
			</p1>
		</div>

		<div id = "pre-meta" class = "page-header">
			<h1> Pre-Meta </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 70%;" src = "../images/dragonfall/pre-event.jpg">
		</div>

		<div class = "small-description">
			<p1>
			When all camps are tier 4, a whole set of events begin in each sector. In total, there are 15 events that happen at the same time. In each camp, there are: 
			<br> 3 "Defend allies as they construct a Brandstorm disruptor"
			<br> 2 "Protect the engineers while they install ley reflectors in the [camp]"
			<br><br> 
			Each event does not require a large amount of people. The Brandstorm disruptors take the longest as there needs to be 3 areas to defend for each event. It is best to <span style = "font-weight: bold;"> split the zerg </span> to start the meta as fast as possible. 
			<br><br> 
			If keys are an issue or you joined in late to the party, this is the best time to tag events since there are many and none of the mobs drop loot (but make sure to progress the events too).
			</p1>
		</div>

		<div id = "meta" class = "page-header">
			<h1> Meta </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 40%;" src = "../images/dragonfall/meta.jpg">
		</div>

		<div class = "small-description">
			<p1>
			Before the meta begins, there are 2 special action skills in disposal. At each shrine, there are Dragonblood Spears and Embers. 
			<br><span style = "font-weight: bold;"> Dragonblood Spears </span> destroys shields of the bosses. 
			<br><span style = "font-weight: bold;"> Embers </span> destroys Branded turrets throughout the fight. 
			<br><br> 
			Depending on what the commander decides (to split into groups or not), the picture above shows the chain of events for Weakpoints. The meta will always begin with 3 to start off with. Regardless, they will spawn in that order after each completion. 

			<br><br> <span style = "font-weight: bold;"> 12 Weakpoints </span> are needed to complete the meta. Each Weakpoint will have a crystal that players will DPS. This event can only activate if more than 3 players are in the area (white circle). Moments after the crystal shows up, a Mender will try to mend it while giving the crystal retaliation (but not as a boon). If the group has major DPS, you can outheal the Mender. Otherwise, defeat the Mender while cleaving the crystal. 

			<br><br> <span style = "font-weight: bold;"> At 6/12 Weakpoints defeated, </span> players will need to split into three groups to fight legendary bosses: Wrathbringer, Riftstalker Matriarch, Hydra. Similar to Auric Basin's meta, <span style = "font-weight: bold;"> all legendaries will need to be defeated within 30 seconds of each other </span>. If not, they will regenerate health and the process repeats. Try your best to communicate with the map to hold bosses (around 20% HP) until everyone is ready to burst DPS. Also communicate to folks that are new to not defeat a boss before others are ready. 

			<br><br> <span style = "font-weight: bold;"> Pylons </span> are floating throughout the meta. If there are more than 10 Pylons floating at a time, the event is stalled. Make sure to have a few roamers keep Pylons at a low. This can be achieved easily by a Skyscale user. You will get a special action key to chain yourself to the pylon to allow it to fall. 
			</p1>
		</div>

		<div id = "champ-train" class = "page-header">
			<h1> Champ Train </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 80%;" src = "../images/dragonfall/champ-train.jpg">
		</div>

		<div class = "small-description">
			<p1>
			Briefly after the meta, champions spawn, with 1 at each camp. The general rotation is as follows in the picture above. There are slight vvariations, but in general, you'll see more squads follow this route. It is highly recommended to have a Griffon for this. Because the champ train is under a strict time limit (18 minutes), players need to get to bosses quickly and DPS. 

			<br><br> EMPs from waystations are a great way to break bars easily and provide more opportunities for DPS. 

			<br><br> After each boss, there are 3 Mistborn Coffers that spawn. 
		</div>

		<div id = "post-meta" class = "page-header">
			<h1> Post-Meta Mistborn Motes </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" style = "width: 40%;" src = "../images/dragonfall/meta-mistborn-mote.jpg">
		</div>

		<div class = "small-description">
			<p1>
			After the meta, there are 6 guaranteed Mistborn Mote nodes that spawn. 3 are near NW Shrine and 3 are near SE Shrine. I highly recommend finding a time to gather these before the map resets. If the train finishes the champ train early, then this is a great opportunity to grab some extra nodes! 
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
