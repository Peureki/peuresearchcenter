<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Thunderhead Peaks </title>
	
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
			<a href = "#thunderhead-keep"><li> &#10097; Thunderhead Keep</li></a> 
			<a href = "#oil-floes"><li> &#10097; Oil Floes </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
			<a href = "#solo-farm"><li> &#10097; Solo Farms </li></a> 
		</ul>
	</div>

	<!-- Main box -->
	<div class = "page-box">

		<div class = "section-header">
			<h1>Thunderhead Peaks</h1>
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
				<td> Branded Mass </td>
				<td> <img class = "nodes-image" title = "Kralkatite Ore" src = "..\images\assets\nodes\Branded_Mass.png"></td>
				<td> Gathered from Metas (Thunderhead Keep, Oil Floes), caches, nodes, hearts, map bonus rewards</td>
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
			<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\thunderhead-peaks\thunderhead-events.jpg" style = "width: 40%;">
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
			<h3> <span class = "meta-text" > Oil Floes, Thunderhead Keep </span><span class = "great-text"> 2-3, 5, 6, 7, 8, 9, 10, </span><span class = "avoid-text"> 4, 1 </span>
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

		<!-- 
			Start of the events table 
		-->

		<table id = "events-table" class = "events">

			<!-- 
				HTML notation: 
				class = "chain-arrow-[map name]-[event #]"
			-->

			<div id = "chain-wrapper-event-table" class = "chain-wrapper">

				 <span class = "chain-arrow-thunderhead-2"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

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
				<td id = "4" class = "avoid-event-number"> 1 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Logan, Canach, and Rytlock train Corsairs </td>
				<td class = "rest-of-table"> Super long event. No loot from mobs and extremely out of the way </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Take back the Deldrimor Ruins </td>
				<td class = "rest-of-table"> If #3 fails, this eventually spawns. Destroy branded and people trapped in crystals </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the Deldrimor Ruins from the mist rift attack </td>
				<td class = "rest-of-table"> Similar event as Jahai's rifts. Defeat Branded enemies</td>
				<td class = "rest-of-table"> Possible champ(s)</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Find shinies in the snow for Garaff </td>
				<td class = "rest-of-table"> Gathering event. Nothing special </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 5 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Help Tirabikkr look for the Light of Deldrimor </td>
				<td class = "rest-of-table"> Has 3 possible routes. 3 waves of Branded </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the Branded Forgotten</td>
				<td class = "rest-of-table"> Quick champion event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the Zephyrites from the Branded </td>
				<td class = "rest-of-table"> Defense event. Champion at the end if upscaled </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Pepperseed deliver Zephyrite supplies to Forge </td>
				<td class = "rest-of-table"> Simple escort with lots of waves of Branded </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort Pepperseed back to the Zephyrite Docks </td>
				<td class = "rest-of-table"> Simple escort with lots of waves of Branded </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Hunt down the champion ice hydra </td>
				<td class = "rest-of-table"> Event spawns after the Oil Floes meta. When the Hydra runs, mount up and use the special skill to stop it. Need a couple people </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"></td>
			</tr>
		</table> <!-- End of events table -->

		<!-- Start of meta -->

		<div id = "thunderhead-keep" class = "page-header">
			<h1> Thunderhead Keep </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\thunderhead-peaks\thunderhead-keep-meta.jpg" style = "width: 40%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> When the meta begins, there's generally a champ or two at the start, depending on the upscale. In general, I see most zergs run counterclockwise to kill all the mobs

				<br><br> After the first event is complete, at the gear marker, there are traps that can be placed. There is a crystal in the center that needs to be protected from the Branded. Use the traps to prevent a Sapper or other mobs from attacking it 

				<br><br> When the defense phase starts, a strat is to defend one side so that the zerg can achieve the most loot while still protecting the center. With that said, the zerg can also defeat one champion Riftstalker at a time for bonus loot. 

				<br><br> The final boss has a defense shield that needs to taken down by going back to the Gear symbol and picking up Dragonblood Spears. Use your special skill to attack the boss to decrease the defense shield to make it vulnerable. From there, watch out for telegraph skills

				<br><br> After all events are complete, there are a couple new Branded nodes throughout the area that can be gathered for a chance of getting more Volatile Magic and Branded Masses</p1>
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
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Branded from the keep </td>
				<td class = "rest-of-table"> Simple event of killing all Branded </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Repair defenses and place mines </td>
				<td class = "rest-of-table"> Place mines around the center crystal to prevent mobs from coming </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Repel invading Branded </td>
				<td class = "rest-of-table"> Depending on the commander, defend one side. There are two sides that will be filled with Branded </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 2 </td>
				<td class = "rest-of-table"> Defeat the Riftstalker </td>
				<td class = "rest-of-table"> There are two that spawn. One at the east and one at the west </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Wratherbringer </td>
				<td class = "rest-of-table"> Use Dragonblood Spears to remove its defenses. Watch out for telegraphed AoEs </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, chance for Serpentite Jewel, Dragon Crystal nodes</td>
			</tr>
		</table>  <!-- End of meta event table --> 

		<div id = "oil-floes" class = "page-header">
			<h1> Oil Floes </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\thunderhead-peaks\thunderhead-oil-floes.jpg" style = "width: 40%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> The first event is a long escort. There are three oil rigs that need to be defended eventually. Ever oil rig that the escort goes to, there is a pause to defend the NPCs from Branded. 

				<br><br> Once the NPC finishes with an oil rig, people need to stay to keep defending. At least 10 people is recommended as there will be a lot of upscaled mobs. As the NPC reaches the third rig, there is going be a champion Hydra at each rig. 

				<br><br> Event #2 is collecting oil and returning it to the pipes. There's going to be a bucket looking symbol that will give you a special action key to sweep the oil. All 3 rigs will have to do this at the same time. 

				<br><br> The final boss is a giant turd. It leaves giant oil slicks on the ground as it moves, making it hard to keep up. The boss generally jumps back at the center, creating a shockwave. 

				<br><br> When the boss is defeated, as with Thunderhead Keep's meta, there will be extra Dragon Crystal nodes that will spawn</p1>
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
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Minter Mikhail restore and defend the oil drills </td>
				<td class = "rest-of-table"> Description above </td>
				<td class = "rest-of-table"> Possible champ(s) </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Use oil reclamation pumps to clean up the spills </td>
				<td class = "rest-of-table"> Description above</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Sulypix before it drains your reclaim oil </td>
				<td class = "rest-of-table"> Description above </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, chance for Serpentite Jewel, 3 Dragon Crystal nodes</td>
			</tr>
		</table>  <!-- End of meta event table --> 

		<!-- Start of nodes -->
		<div id = "nodes" class = "page-header"> 
			<h1> Nodes </h1>
			<div class = "small-description">
				<p1> Node locations are subject to change due to new/different instances and new days</p1>
			</div>
		</div>

		<!-- Node Map -->
		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles-nodes" title = "Lake Doric Nodes" src = "..\images\thunderhead-peaks\thunderhead-nodes.jpg" style = "width: 50%;">
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
				<td id = "1" class = "nodes-high-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Dragon Crystal Node" src = "..\images\assets\nodes\Branded_Mass.png">
				</td>
				<td class = "nodes-node"> Dragon Crystal  </td>
				<td class = "nodes-info"> Recieve extra Volatile Magic and Dragonite Ore</td>
				<td class = "nodes-cooldown"> 24 hours </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Iron Ore" src = "..\images\assets\nodes\Iron_Ore.png">
				</td>
				<td class = "nodes-node"> Iron Ore  </td>
				<td class = "nodes-info"> Chance to receive lumps </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Platinum Ore" src = "..\images\assets\nodes\Platinum_Ore.png">
				</td>
				<td class = "nodes-node"> Platinum Ore </td>
				<td class = "nodes-info"> Chance to receive shards </td>
				<td class = "nodes-cooldown"> 1 hour </td>
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
				<td class = "nodes-node"> Cypress Sapling </td>
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
				<td><img class = "nodes-image" title = "Varietal Peppercorn Seed" src = "..\images\assets\nodes\Varietal_Peppercorn_Seed.png">
				</td>
				<td class = "nodes-node"> Mature Herb </td>
				<td class = "nodes-info"> Chance to receive Rosemary, Thyme, Garlic, Black Peppercorn, and the rare Varietal Peppercorn Seed </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Winter Root Vegetable" src = "..\images\assets\nodes\Beet.png">
				</td>
				<td class = "nodes-node"> Winter Root Vegetable </td>
				<td class = "nodes-info"> Chance to recieve Beet, Turnip, Parsnip, and Rutabaga </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id ="3" class = "nodes-low-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Snow Truffle" src = "..\images\assets\nodes\Snow_Truffle.png">
				</td>
				<td class = "nodes-node"> Snow Truffle </td>
				<td class = "nodes-info"> </td>
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
			<tbody id = "benchmark-table-thunderhead-solo-farm"></tbody>
		</table>


		<!--
			HTML notation: 
			getBenchmark("[name of table]", "[name of farm]", etc);
			name of farm has to match the name of the spreadhsheet
		-->

		<script> getBenchmark("benchmark-table-thunderhead-solo-farm", "Solo Farm: Thunderhead Dredge"); </script>

		<div class = "page-header">
			<h2> Solo Farm: Thunderhead Dredge </h2>
			<div class = "small-description">
				<p1> This farm consist of killing Branded Dredge with a high power DPS build with high mobility. I personally switch from Power Necro and Power Soulbeast, but there are many others. </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-jahai-solo-farms" title = "Solo Farm: Jahai Wildlife" src = "..\images\thunderhead-peaks\thunderhead-dredge.jpg" style = "width: 40%;">
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
