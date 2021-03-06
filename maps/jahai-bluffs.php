<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Jahai Bluffs </title>
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
			<a href = "#dangerous-prey"><li> &#10097; Dangerous Prey </li></a> 
			<a href = "#hunt-the-hunter"><li> &#10097; Hunt the Hunter </li></a> 
			<a href = "#bounties"><li> &#10097; Bounties </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
			<a href = "#solo-farm"><li> &#10097; Solo Farms </li></a> 
		</ul>
	</div>

	<!-- Main box -->
	<div class = "page-box">

		<div class = "section-header">
			<h1>Jahai Bluffs</h1>
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
				<td> Lump of Mistonium </td>
				<td> <img class = "nodes-image" title = "Kralkatite Ore" src = "..\images\assets\nodes\Lump_of_Mistonium.png"></td>
				<td> Gathered from Meta (Dangerous Prey), Mist caches, nodes, hearts, map bonus rewards</td>
			</tr>

			<tr>
				<td> Volatile Magic </td>
				<td> <img class = "nodes-image" title = "Volatile Magic" src = "..\images\assets\Volatile_Magic.png"></td>
				<td> Gathered from all mobs, meta, most events, caches, Inscribed Shards (consumed), Glyph of Volatility </td>
			</tr>

		</table> <!-- End of quick info table -->

		<div class = "page-header">
			<h2> How to: </h2>
			<div class = "small-description">
				<p1> Follow the <a href = "#recommendation-events"> recommended priority of events.</a> Ideally, the events should be in order to get the most amount of gold, but sometimes that's not the case. Follow the list as close as possible to get most of your time's worth. Use your best judgement to which event should be done next. Also, consider the distance between the current event and the next event and jduge if it's worth the time to travel or not.</p1>

				<p1> <br><br> If you're the commander, make sure to communicate with the squad on where you're going to and have a relatively steady pace so most can still follow easily. </p1>

				<p1> <br><br> Have a build that can provide decent DPS (so the event champs/bosses don't take a long time), can provide good mobility, and good AoEs to tag multiple mobs. Check some farming builds here: <br><a href = "https://metabattle.com/wiki/Open_World" target = "_blank"> Meta Battle Open World Builds </a></p1>
			</div>
		</div>

		<div class = "page-header">
			<h2> Criteria </h2>
				<div class = "small-description">
					<p1> These are the categories of the type of content. This includes events, bounties, and (in a similar variation) gathering nodes.</p1>
				</div>
		</div>

		<!-- Critiera boxes-->
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
		<!-- End of Farming section -->

		<!-- Start of Events section -->
		<div id = "events" class = "page-header">
			<h1> Events </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\jahai-bluffs\jahai-bluffs-events.jpg" style = "width: 60%;">
		</div>

		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
			<div class = "small-description">
				<p1> LB = Legendary Bounties, CB = Champion Bounties </p1>
				<p1><a href = "#bounties"><br> List of bounties </a></p1>
			</div>
		</div>

		<!--
			Recommendation box
			HTML notation: 
			<span class = "[event criteria]-text" changes the color of text 
		-->

		<div class = "recommendation-box" > 
			<h3> <span class = "meta-text" > Dangerous Prey, </span><span class = "great-text"> 6-8, 11, 1-3, 15-16, 9-10, </span><span class = "meh-text"> 12-13, 4, 5, LB, <span class = "meta-text" > Hunt the Hunter </span> <span class = "avoid-text"> 14, CB, </span> <span class = "meta-text"> Ancestor Tree </span>
			</h3> 
		</div>

		<div class = "page-header">
			<h2> Sort by: </h2>
		</div>

		<!-- 
			Sort buttons for the events table
			HTML notation: 
			onClick = "sortTableBy[something]('[table name]')"
		-->

		<div class = "sort-box-event">
			<div id = "sort-button-event-1" class = "sort-button-event-1" onClick = "sortTableByNumber('events-table')" onMouseOver = "onHover_Yellow('sort-button-event-1')" onMouseOut = "onHover_Tan('sort-button-event-1')">
				<h3> Event # </h3>
			</div>

			<div id = "sort-button-event-2" class = "sort-button-event-2" onClick = "sortTableByCriteria('events-table')" onMouseOver = "onHover_Yellow('sort-button-event-2')" onMouseOut = "onHover_Tan('sort-button-event-2')">
				<h3> Criteria </h3>
			</div>

			<div id = "sort-button-event-3" class = "sort-button-event-3" onClick = "sortTableByUpscale('events-table')" onMouseOver = "onHover_Yellow('sort-button-event-3')" onMouseOut = "onHover_Tan('sort-button-event-3')">
				<h3> Upscale </h3>
			</div>

			<div id = "sort-button-event-4" class = "sort-button-event-4" onClick = "sortTableByExtra('events-table')" onMouseOver = "onHover_Yellow('sort-button-event-4')" onMouseOut = "onHover_Tan('sort-button-event-4')">
				<h3> Extra </h3>
			</div>
		</div>

		<div class = "small-legend">
			<p1><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"> = Chain event leading to event # [ ]</p1>
			<p1> Sorting by Event # shows chain events, cooldowns </p1>
		</div>

		<!-- 
			Start of the events table 
		-->

		<table id = "events-table" class = "events">

			<!-- 
				HTML notation: 
				class = "chain-arrow-[map name]-[event #]"
			-->

			<div id = "chain-wrapper-event-table" class = "chain-wrapper">
				 <span class = "chain-arrow-jahai-1"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-jahai-2"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-jahai-6"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-jahai-7"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-jahai-9"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-jahai-12"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-jahai-15"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>				 

			</div>

			<tr> 
				<th> # </th>
				<th> Qty </th>
				<th> Name </th>
				<th> Description </th>
				<th> Upscale </th>
				<th> Extra </th>
			</tr>

			<!-- 
				HTML notation:
				id = #, # = classification for sorting
				id = 1, class = "meta-event-number"
				id = 2, class = "great-event-number"
				id = 3, class = "meh-event-number"
				id = 4, class = "avoid-event-number"

				class = classification for coloring
				[event critiera]-event-number (meta, great, meh, avoid)

				td #3 = Event name 
				td #4 = Event description
				td #5 = Upscale
				td #6 = Extra
			 -->
			<tr> 
				<td id = "2" class = "great-event-number"> 0 </td>
				<td class = "qty-event-number"> 5 </td>
				<td class = "rest-of-table"> Repel the Branded invasion and close the rift </td>
				<td class = "rest-of-table"> If squad is < 5 people, scales down hard. If the squad is large, then it upscales dramatically. Lots of mobs </td>
				<td class = "rest-of-table"> Creates more portals = more mobs </td>
				<td class = "rest-of-table"> Boss chest, 5 Mistonium. Once per day, per location, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 1 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort Sergeant Eshid to the garrison </td>
				<td class = "rest-of-table"> 3 waves of enemies. Second wave spawns a lot more mobs than others. Event #4, #15-16 need to be done to start this </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Raid the garrison for supplies </td>
				<td class = "rest-of-table"> Quick gathering event, but also spawns a lot of mobs that drop loot</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort Eshid back to Soul's Vendetta </td>
				<td class = "rest-of-table"> 3 waves. Not as many mobs as the first escort though. </td>
				<td class = "rest-of-table"> Possible champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend Pact engineers as they repair the gate </td>
				<td class = "rest-of-table"> Slowest defense ever. Barely any mobs spawn. Only do this if you're waiting for the meta </td>
				<td class = "rest-of-table"> Possible champ(s)</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Subdue the malfunctioning DERV </td>
				<td class = "rest-of-table"> Quick champion event, though he does not drop loot </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend Ziya as she searches for Vemyen </td>
				<td class = "rest-of-table"> 3 waves. Each wave has an enourmous amount of mobs </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Shatter the Brandstone before it explodes </td>
				<td class = "rest-of-table"> DPS check. Very quick event </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded djinn Vemyen </td>
				<td class = "rest-of-table"> Legendary Djinn. Dashes and does melee AoE attacks. Phases at 75%, 50%, 25%. There will be DPS crystals to do (3) </td>
				<td class = "rest-of-table">1 Guaranteed champ</td>
				<td class = "rest-of-table">Boss chest, 5 Mistoniums. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded out of Yatendi </td>
				<td class = "rest-of-table"> 4 locations of mobs. Look for X on the map for locations. </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded Champions </td>
				<td class = "rest-of-table"> There's only 2 Elites and 2 Champions even though the event says 4 </td>
				<td class = "rest-of-table">2 Guaranteed champs</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 11 </td>
				<td class = "qty-event-number"> 2 </td>
				<td class = "rest-of-table"> Stop "Joko" from recruiting the Awakened! </td>
				<td class = "rest-of-table"> You need to bring ALL CC skills. When Joko has a CC bar, break it. Break his clones too. If too slow, the event fails  </td>
				<td class = "rest-of-table"> Possible champ(s), Mob density+ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded Villagers </td>
				<td class = "rest-of-table"> Extremely long event. Constant spawn of mobs </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded Villagers </td>
				<td class = "rest-of-table"> For elites, they are super tanky </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the Chantry's enterances against the Branded </td>
				<td class = "rest-of-table">3 areas to defend. There's some prep time too. If an area fails, the whole event fails</td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded troops </td>
				<td class = "rest-of-table"> Lots of Branded to kill. Sometimes the champions are slow to spawn on the sides </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Branded Generals </td>
				<td class = "rest-of-table"> 2 Elites, 1 champ  </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

		</table> <!-- End of events table -->

		<!-- Start of meta -->

		<div id = "dangerous-prey" class = "page-header">
			<h1> Dangerous Prey </h1>
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> Meta respawns every 2 hours at the xx:15. Event #1-3 are option and not pre-events to the Death-Branded Shatterer, but they help make the meta smoother. The DERV escort provides DERVs that players can use to help fight against the Shatterer. The Wurm event helps protect allies from lots of mobs. 

				<br><br> Event #1 and #3 start at the same time, on the hour of when the Shatterer is suppose to begin. I recommend doing event #3, the DERV escort, to loots and champions. </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\jahai-bluffs\jahai-bluffs-dangerous-prey.jpg" style = "width: 40%;">
			
		</div>

		<!-- Table of meta events -->
		<table class = "events">
			<tr> 
				<th> # </th>
				<th> Qty </th>
				<th> Name </th>
				<th> Description </th>
				<th> Upscale </th>
				<th> Extra </th>
			</tr>
			<tr> 
				<td class = "meta-event-number"> 1 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Find food in the garrison for hungry Awakened </td>
				<td class = "rest-of-table"> Find food and take them to Awakened so they stop attacking the wurms </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect the Junundu from the invading Branded </td>
				<td class = "rest-of-table"> Title. Just waves of Branded </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort the DERVs to the Shatterer Trenches </td>
				<td class = "rest-of-table"> Long escort with 5 main waves of mobs (marked on map) with champions </td>
				<td class = "rest-of-table"> 3 Guaranteed champs, more possible </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Destroy the Death-Branded Shatterer </td>
				<td class = "rest-of-table"> Detailed description below </td>
				<td class = "rest-of-table"> 6 Guaranteed champs, more possible </td>
				<td class = "rest-of-table"> Boss chest, 5 Mistoniums, chance for super rare Crystal Infusion</td>
			</tr>
		</table>  <!-- End of meta event table --> 

		<div class = "map-image-box">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\jahai-bluffs\jahai-bluffs-shatterer.jpg" style = "width: 40%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> This Shatterer is similar to the OG Shatterer in Blazeridge. The general consensus is to fight on one side (right) so everyone is grouped together. Watch out for pulsing AoEs and stomps. There are a couple notable things for this boss. There are DERVs and Griffon Roosts that can help damage the boss. There are also jump pads to take you to the ledges.

				<br><br> At every 25% of the boss's health, it will phase to where the group has to split to kill Riftstalkers as they heal it. At 75% of the boss's total health, a single Riftstalker will spawn south

				<br><br> At 50% of the boss's total health, there will be two Riftstalkers. One on the left and right of the boss's feet. Since the squad is already attacking the right feet, turn out and fight the Riftstalker. Then, head to the other

				<br><br> At 25% of the boss's total health, there will be three Riftstalkers. One south, where the original 75% one was, and two above the ledges. The general consensus is to go to the south then go to the right ledge</p1>
			</div>
		</div>

		<div id = "hunt-the-hunter" class = "page-header">
			<h1> Hunt the Hunter </h1>
			<div class = "small-description">
				<p1> Compared to the Dangerous Prey meta, this is more like a regular event train </p1>
			</div> 
		</div>

		<div class = "map-image-box">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\jahai-bluffs\jahai-bluffs-hunt-the-hunter.jpg" style = "width: 40%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> Most of the events are purely gathering events. Event #1 has two seperate gathering runs where you collect supply from the ground and mobs. It's awkward when this meta is up the same time as Dangerous Prey because it can stall the DERV escort. 

				<br><br> Event #2 is the same type of event. You gather meat to the NPC to spawn the next event. Finally, the last event is a simple champion Hydra </p1>
			</div>
		</div>

		<!-- Table of meta events -->
		<table class = "events">
			<tr> 
				<th> # </th>
				<th> Qty </th>
				<th> Name </th>
				<th> Description </th>
				<th> Upscale </th>
				<th> Extra </th>
			</tr>
			<tr> 
				<td class = "meta-event-number"> 1 </td>
				<td class = "qty-event-number"> 2 </td>
				<td class = "rest-of-table"> Collect the deliver lost supplies to Second Spear Koja or Nimani </td>
				<td class = "rest-of-table"> Gather supplies from the ground or mobs </td>
				<td class = "rest-of-table"> Possible champs</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Gather dolyak meat to use as bait for the Branded Hydra </td>
				<td class = "rest-of-table"> Title </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the champion Branded hydra terrorizing supply routes </td>
				<td class = "rest-of-table"> Branded Hydra champ </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>
		</table>  <!-- End of meta event table --> 

		<!-- Start of bounties --> 
		<div id = "bounties" class = "page-header"> 
			<h1> Bounties </h1>
		</div>

		<div class = "bounty-box">

			<!-- 
				Bounty markers 
				HTML notation: 
				id = [name of bounty]-1, this is for showElement() and hideElement() 
				class = "bounty-[name of bounty]-[number of location]"
				directory\[color]-x.png determines the color (green, yellow, red)
			-->
			<img id = "wyverns" class = "bounty-wyverns" title = "Bounty Location" src = "..\images\assets\yellow-x.png">

			<img id = "angry-pet-rock-1" class = "bounty-angry-pet-rock-1" title = "Bounty Location" src = "..\images\assets\red-x.png">

			<img id = "angry-pet-rock-2" class = "bounty-angry-pet-rock-2" title = "Bounty Location" src = "..\images\assets\red-x.png">

			<img id = "angry-pet-rock-3" class = "bounty-angry-pet-rock-3" title = "Bounty Location" src = "..\images\assets\red-x.png">

			<img id = "badly-confused-ettin-1" class = "bounty-badly-confused-ettin-1" title = "Bounty Location" src = "..\images\assets\yellow-x.png">

			<img id = "badly-confused-ettin-2" class = "bounty-badly-confused-ettin-2" title = "Bounty Location" src = "..\images\assets\yellow-x.png">

			<img id = "badly-confused-ettin-3" class = "bounty-badly-confused-ettin-3" title = "Bounty Location" src = "..\images\assets\yellow-x.png">

			<img id = "weapons-1" class = "bounty-weapons-1" title = "Bounty Location" src = "..\images\assets\red-x.png">

			<img id = "weapons-2" class = "bounty-weapons-2" title = "Bounty Location" src = "..\images\assets\red-x.png">

			<img id = "weapons-3" class = "bounty-weapons-3" title = "Bounty Location" src = "..\images\assets\red-x.png">
			
		</div> <!-- End of bounty locations -->

		<!-- Start of bounty table -->
		<!-- 
			HTML notation:
			<td> class = "[criteria]-bounty" 
		-->
		<table class = "bounties-info">
			<tr>
				<th> Legendary </th>
				<th> Mechanics </th>
				<th> Extra </th>
			</tr>
			<tr> 
				<td class = "great-bounty"> Wyvern Matriarch and Patriarch </td>
				<td> Same two bosses from Verdant Brink. They do constant knockdowns, fire AoEs, summons mini wyverns, fire breaths, and shockwaves</td>
				<td> 1 Mistonium </td>
			</tr>

			<tr>
				<th> Champions </th>
				<th>  </th>
				<th>  </th>
			</tr>
			<tr>
				<td class = "great-bounty"> Angry Pet Rock </td>
				<td> Very annoying boss that pulls foes inward, then knocks them down. It does it constantly</td> 
				<td> </td>
			</tr>
			<tr>
				<td class = "great-bounty"> Badly Confused Ettin </td>
				<td> Teleports randomly to other players. If everyone sticks together, he's relatively easy to beat </td>
				<td> </td>
			</tr>
			<tr>
				<td class = "meh-bounty"> Weapons </td>
				<td> Incredibly difficult. The two weapons must be seperated otherwise they deal significant damage. CC when possible. There could be bursts of damage</td>
				<td> </td>
			</tr>
		</table> <!-- End of bounty table -->	

		<!-- Start of nodes -->
		<div id = "nodes" class = "page-header"> 
			<h1> Nodes </h1>
			<div class = "small-description">
				<p1> Node locations are subject to change due to new/different instances and new days</p1>
			</div>
		</div>

		<!-- Node Map -->
		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles-nodes" title = "Lake Doric Nodes" src = "..\images\jahai-bluffs\jahai-bluffs-nodes.jpg" style = "width: 70%;">
		</div>

		<div class = "page-header">
			<h2> Criteria</h2>
		</div>

		<div class = "small-description">
			<p1> These are the categories for how abundant the nodes are available in this zone</p1>
		</div>

		<div class = "high-quantity-box">
			<h3> High Quantity </h3>
		</div>

		<div class = "meh-quantity-box">
			<h3> Meh Quantity </h3>
		</div>

		<div class = "low-quantity-box">
			<h3> Low Quantity </h3>
		</div>

		<div class = "page-header">
			<h2> Sort by: </h2>
		</div>

		<div class = "sort-box-node">
			<div id = "sort-button-node-1" class = "sort-button-node-1" onClick = "sortTableByNode('nodes-sort')" onMouseOver = "onHover_Yellow('sort-button-node-1')" onMouseOut = "onHover_Tan('sort-button-node-1')">
				<h3> Node </h3>
			</div>

			<div id = "sort-button-node-2" class = "sort-button-node-2" onClick = "sortTableByCriteria('nodes-sort')" onMouseOver = "onHover_Yellow('sort-button-node-2')" onMouseOut = "onHover_Tan('sort-button-node-2')">
				<h3> Criteria </h3>
			</div>

			<div id = "sort-button-node-3" class = "sort-button-node-3" onClick = "sortTableByUpscale('nodes-sort')" onMouseOver = "onHover_Yellow('sort-button-node-3')" onMouseOut = "onHover_Tan('sort-button-node-3')">
				<h3> Cooldown </h3>
			</div>

		</div>

		<!-- 
			Start of node table
			HTML notation:
			[criteria number]: 
			1 - High quantity
			2 - Meh quantity
			3 - Low quantity
			1st <td id = "[criteria number]" class = "nodes-[criteria]-box"
		-->
		<table id = "nodes-sort" class = "nodes">
			<tr> 
				<th> Type </th>
				<th> </th>
				<th> Node </th>
				<th> Info </th>
				<th> Cooldown </th>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Lump of Mistonium" src = "..\images\assets\nodes\Lump_of_Mistonium.png">
				</td>
				<td class = "nodes-node"> Lump of Mistonium </td>
				<td class = "nodes-info"> Recieve extra Volatile Magic and Dragonite Ore</td>
				<td class = "nodes-cooldown"> 24 hours </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Mithril Ore" src = "..\images\assets\nodes\Mithril_Ore.png">
				</td>
				<td class = "nodes-node"> Mithril Ore </td>
				<td class = "nodes-info"> Chance to receive crystals</td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Orichalcum Ore" src = "..\images\assets\nodes\Orichalcum_Ore.png">
				</td>
				<td class = "nodes-node"> Orichalcum Ore </td>
				<td class = "nodes-info"> Chance to receive rare orbs</td>
				<td class = "nodes-cooldown"> 24 hours</td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Wood </td> 
				<td><img class = "nodes-image" title = "Elder Wood Log" src = "..\images\assets\nodes\Elder_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Mebahya Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Troves (crystals) </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Wood </td> 
				<td><img class = "nodes-image" title = "Ancient Sapling" src = "https://wiki.guildwars2.com/images/0/01/Ancient_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Ancient Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Treasures (orbs), or rare Palm Lumber Cores </td>
				<td class = "nodes-cooldown"> 24 hours </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Cluster of Desert Herb" src = "..\images\assets\nodes\Varietal_Cilantro_Seed.png">
				</td>
				<td class = "nodes-node"> Cluster of Desert Herb </td>
				<td class = "nodes-info"> Chance to receive Chili Peppers, Coriander Seeds, Sage Leaf, Sesame Seed, Varietal Sesame Seed, Varietal Clove Seed </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Desert Vegetable" src = "..\images\assets\nodes\Cassava_Root.png">
				</td>
				<td class = "nodes-node"> Desert Vegetable </td>
				<td class = "nodes-info"> Chance to receive Cassava Root, Flax Fiber, Onion, Garlic </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Mussel" src = "..\images\assets\nodes\Mussel.png">
				</td>
				<td class = "nodes-node"> Mussel </td>
				<td class = "nodes-info"> Chance to receive the very rare Freshwater Pearl </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Flax" src = "..\images\assets\nodes\Pile_Of_Flax_Seeds.png">
				</td>
				<td class = "nodes-node"> Pile of Flax Seeds </td>
				<td class = "nodes-info"> Chance to receive Flax Fiber, rare Flax Blossom </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id ="3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Red Lentils" src = "..\images\assets\nodes\Handful_Of_Red_Lentils.png">
				</td>
				<td class = "nodes-node"> Handful of Red Lentils </td>
				<td class = "nodes-info"> </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Jungle Plant (image = Maguuma Lily)" src = "https://wiki.guildwars2.com/images/6/6c/Maguuma_Lily.png">
				</td>
				<td class = "nodes-node"> Jungle Plant </td>
				<td class = "nodes-info"> Chance to receive Cassava Root, Clove, Lemongrass, Pile of Allspice Berries, and the very rare Maguuma Lily </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>
		</table> <!-- End of node table -->

		<!-- Start of Solo Farm section -->
		<div id = "solo-farm" class = "page-header">
			<h1> Solo Farm </h1>
		</div>

		<table class = "benchmark-table"> 
			<thead> 
				<tr>
					<th> Farm Type </th>
					<th> Farm </th>
					<th> Benchmark </th>
				</tr>
			</thead>
			<tbody id = "benchmark-table-jahai-bluffs-solo-farm"></tbody>
		</table>


		<!--
			HTML notation: 
			getBenchmark("[name of table]", "[name of farm]", etc);
			name of farm has to match the name of the spreadhsheet
		-->

		<script> getBenchmark("benchmark-table-jahai-bluffs-solo-farm", "Solo Farm: Jahai Wildlife", "Solo Farm: Jahai Chak"); </script>

		<div class = "page-header">
			<h2> Solo Farm: Jahai Wildlife </h2>
			<div class = "small-description">
				<p1> This farm consist of killing Wildlife with a high power DPS build with high mobility. I personally switch from Power Necro and Power Soulbeast, but there are many others. </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-jahai-solo-farms" title = "Solo Farm: Jahai Wildlife" src = "..\images\jahai-bluffs\jahai-bluffs-wildlife.jpg" style = "width: 40%;">
		</div>

		<div class = "page-header">
			<h2> Solo Farm: Jahai Chak </h2>
			<div class = "small-description">
				<p1> This farm consist of killing all Chak. It's a very annoying farm, I just wanted to test it out. This includes Hyenas, Sand Lions, Rock Gazelles, Shadhavars, and Drakes </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-jahai-solo-farms" title = "Solo Farm: Jahai Chak" src = "..\images\jahai-bluffs\jahai-bluffs-chak.jpg" style = "width: 40%;">
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
