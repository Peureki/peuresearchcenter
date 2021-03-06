<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Crystal Oasis </title>

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
			<a href = "#casino-blitz"><li> &#10097; Casino Blitz </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
		</ul>
	</div>

	<!-- Add nav bar here -->

	<div class = "page-box">

		<div class = "section-header">
			<h1>Crystal Oasis</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div id = "summary" class = "page-header">
			<div class = "small-description">
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/B_JC0XKMdvk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
				<p1>
					Before starting, this farm requires <b>at least 20 people</b> to scale for champions. As with most map farms, it will not work with solo or small groups. If there's no Forged Champions, there's no <img src = "../images/assets/containers/Battered_Forged_Components.png" style = "width: 25px; height: 25px; vertical-align: middle;"> Battered Forged Components which are the main profits for this specific farm. 

					<br><br>
					Crystal Oasis as a whole is a fantatic map with many different dynamic events. Out of all the PoF maps, it has the most Forged events. These events are the secret to this farm as they provide Forged champions. These champions provide  <img src = "../images/assets/containers/Battered_Forged_Components.png" style = "width: 25px; height: 25px; vertical-align: middle;"> Battered Forged Components which are champion bags that provide multiple pieces of green+ Unidentified Gear and a chance to drop recipies and skins that potentially could be worth a couple gold. 
					<br><br>
					<span style = "font-weight: bold;"> Method: </span> 
					<br>
					Using my <a href = "../timers/crystal-oasis.html" style = "text-decoration: underline"> timer page</a>, I farmed events on the west side of the map mainly. This includes events such as: 4 of the Raiding Party (north/south), Refugee (south), and the Farm. Due to their low cooldowns, it's possile to rotation between these events without having to need to go to the other parts of the map. To get the best results, it's possile to sit at the spawn location at each of the Raiding Party events before they spawn so they can upscale right away. This makes it easier to spawn more than 1 champion. The Raiding Party events spawn at each gate of the Forged camps. 
					<br><br>
					I generally start my farm an hour before Pinata. I include Pinata because the Choya Pinata is valuable in the sense that it drops 3 guaranteed rare Unidentified Gear, Amalgamated Gemstone, and a chance to drop the Confetti Infusion (and it's awkward not to do it). During the first/second rounds of Casino Blitz, I tell the squad to grab a few coins. For each round, we do the bounties Zelke and Legendary Choya. There's also many caches layed out through the cities so I try to place markers on their <a href = "../gathering/amnoon-node-cache-farm.html" target = "_blank"><u>locations</u></a>.  
					<br><br>
					<span style = "font-weight: bold;"> Disclaimer: </span> 
					<br>
					For me, I did take bounty requests. If I did, I would try to include them in my rotation (do them if they are nearby the next event). Obviously this took a slight hit in the gold per hour, but I think it's realistic to put it in the benchmark because there are a lot of bounties required for collections and achievements. There's always going to be a request for something or two, espcically Facet. If it's Facet, I do it at the end because it's out of the way. 


				</p1>
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

		<div id = "events" class = "page-header">
			<h1> Events </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" title = "Events" src = "../images/crystal-oasis/events.jpg">
		</div>

		<div  id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "page-links">
			<p1><a href="../timers/crystal-oasis.html"> Event Timers </a></p1>
		</div>

		<div class = "recommendation-box"> 
			<h3> <span class = "meta-text"> Casino Blitz, </span><span class = "great-text" >6, 10, 9, 8, 18, 19,</span> <span class = "meh-text">14, 12, 13, 21, 3, 4, 16, 17, 20, </span><span class = "avoid-text">22, 24, 7, 5, 1, 2, 5, 11, 25, 15, 23</span>
			</h3> 
		</div>

		<table id = "events-table" class = "events">
			<tr> 
				<th onclick = "sortTableByNumber('events-table', 0);" ondblclick="sortTableByCriteria('events-table');"> # </th>
				<th onclick = "sortTableByQuantity('events-table', 1);"> Qty </th>
				<th> Name </th>
				<th> Description </th>
				<th onclick = "sortTableByUpscale('events-table');"> Upscale </th>
				<th onclick = "sortTableByExtra('events-table');"> Extra </th>
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
				<td class = "rest-of-table"> Help Nasim gather fish </td>
				<td class = "rest-of-table"> Kill wildlife in the water and turn in materials to the NPC </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Recover the sunken Consortium cargo </td>
				<td class = "rest-of-table"> Gathering materials for the NPC </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the Water Authority plant from Hamaseen saboteurs </td>
				<td class = "rest-of-table"> Defending NPCS from Hamaseen enemies. It's either this event or #4 that can spawn here</td>
				<td class = "rest-of-table"></td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the Water Authority facility workers as they repair damage water pipes </td>
				<td class = "rest-of-table"> Defending NPCS from various mobs</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help repair leaks in the Amnoon Water Authority pipes </td>
				<td class = "rest-of-table"> Killing oozes to fix pipes. None of the mobs drop loot nor does it upscale. </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 5 </td>
				<td class = "rest-of-table"> Defeat the Forged raiding party </td>
				<td class = "rest-of-table"> A pack of Forged will roam an area. A second wave will spawn after killing the initial pack </td>
				<td class = "rest-of-table"> Possible champs</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Talib recover his escaped sand shark pups </td>
				<td class = "rest-of-table"> CCing Sand sharks and throwing in the sand pit </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the stampede of choya before they break down the gate </td>
				<td class = "rest-of-table"> All the choyas! </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the Amnoon farmworkers form the Forged </td>
				<td class = "rest-of-table"> Multiple waves of Forged. Two waves on the top and bottom of the east part of the event</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> See the refugees safely through to Amnoon </td>
				<td class = "rest-of-table"> Multiple waves of Forged in this escort</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Priest Bashshar get healers and medical supplies </td>
				<td class = "rest-of-table"> Short escort with 3 waves of Forged </td>
				<td class = "rest-of-table"> Possible champs</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the village of Kweli from the Forged </td>
				<td class = "rest-of-table"> This happens a minute after event #11. Defend for 6 minutes from Forged. Does not upscale well with large squads </td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Reclaim the village of Kweli from the Forged </td>
				<td class = "rest-of-table"> Happens if event #12 fails. Capturing the village from Forged. Does not upscale well with large squads </td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort refugees from the Temple of Kormir to the southern way station </td>
				<td class = "rest-of-table"> Takes a minute to start up. 3 waves of Forged enemies, but not a lot of total mobs </td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the Zaishen from desecrating the Temple of Kormir </td>
				<td class = "rest-of-table"> None of the mobs drop EXP or loot</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the champion (Wurm) </td>
				<td class = "rest-of-table"> Random champion wurm that throws that lots of poop AoEs. Somewhat difficult without some peeps</td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 17 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Champion Branded hydra </td>
				<td class = "rest-of-table"> Champion hydra, but runs away after taking a certain amount of damge. Stop it by mounting up and having at least 5? people use their special skill</td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 18 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Disrupt the Forged ritual and destroy the crucible </td>
				<td class = "rest-of-table"> Start the event from the cliffs, then CC ritualists, then the crucible</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 19 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the Forged commander </td>
				<td class = "rest-of-table"> Happens after event #18. A single Forged champion</td>
				<td class = "rest-of-table"> 1 Guaranteed champ, possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 20 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Ashwah search for his missing daughter in the Brand </td>
				<td class = "rest-of-table"> Multiple waves of Branded mobs</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 21 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Drive back Balthazar's forces before they wear down </td>
				<td class = "rest-of-table"> Defending an area full of Forged</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 22 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help the refugees each the oasis settlement </td>
				<td class = "rest-of-table"> Escorting NPCs, but there's barely any mobs that spawn</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 23 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Scavenge supplies form the clifftop Zephyrite ruins </td>
				<td class = "rest-of-table"> Gathering materials for the NPC</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 24 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Rescue refugees forced into labor in the Zephyrite mine</td>
				<td class = "rest-of-table"> Rescuing refugees and escorting them away from Forged</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 25 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Olaf recover buried artifacts </td>
				<td class = "rest-of-table"> Gathering materials for the NPC</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 26 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Salima gather stone and protect quarries from choyas </td>
				<td class = "rest-of-table"> Escorting NPCs and killing choyas</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>
		</table>

		<div id = "casino-blitz" class = "homepage-sector">
			<h1> Casino Blitz </h1>
		</div>

		<div class = "small-description-left">
			<p1> 
				Probably one of the more simplier metas. Unlike most, this requires some participation by gathering floating Casino Coins that are scattered throughout Amnoon. For max effenciency to gather them all, check out <a href = "http://tekkitsworkshop.net/index.php/path-of-fire/147-guild-wars-2-path-of-fire-casino-blitz-coin-run-with-custom-taco-routes" target = "_blank" style = "text-decoration: underline;"> Tekkit's Workshop guide</a>. 
				<br><br>
				There are 3 rounds for players to collect at least 150 Casino Coins. After 3 successful rounds, a Choya Pinata will spawn. Catch it before it escapes! It is possible to fail one round to spawn the Choya Pinata, but there still needs to be 3 successful runs. If a round fails, then that round repeats again. 
				<br><br>
				The Choya Pinata offers a Crystal Oasis Hero's Chest that grants 3 guaranteed rare Unidentified Gear, a choice of either: 
				<br>
				- Amalgamated Gemstone
				<br> - Pulsing Brandsparks (2)
				<br> - Intact Mosaic 
				<br> - Pile of Elonian Trade Contracts (100)
				<br> - Recipe: Zehtuka's Harrier Inscription
				<br><br>
				There's a super rare chance for a Confetti Infusion to drop. 

			</p1>
		</div>
			<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
			<h1 id = "nodes" > Nodes </h1>
		</div>

		<div class = "small-description">
			<p1> Node locations are subject to change due to new/different instances and new days</p1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" title = "Nodes" src = "../images/crystal-oasis/nodes.jpg" style = "width: 100%;">
		</div>

		<div class = "page-header">
			<h2> Criteria</h2>
		</div>

		<div class = "small-description">
			<p1> These are the categories for how abundant the nodes are available in this zone</p1>
		</div>

		<!-- Critiera boxes-->
		<div class = "criteria-box">

			<div class = "great-box">
				<h3> High Qty </h3>
			</div>

			<div class = "meh-box">
				<h3> Meh Qty</h3>
			</div>

			<div class = "avoid-box">
				<h3> Low Qty </h3>
			</div>
		</div>

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
				<td><img class = "nodes-image" title = "Mithril Ore" src = "https://wiki.guildwars2.com/images/e/ee/Mithril_Ore.png">
				</td>
				<td class = "nodes-node"> Mithril Ore </td>
				<td class = "nodes-info"> Chance to receive crystals</td>
				<td class = "nodes-cooldown"> 1 hour</td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Orichalcum Ore" src = "https://wiki.guildwars2.com/images/4/43/Orichalcum_Ore.png">
				</td>
				<td class = "nodes-node"> Orichalcum Ore </td>
				<td class = "nodes-info"> Chance to receive rare orbs</td>
				<td class = "nodes-cooldown"> 24 hours </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Quartz Crystal" src = "../images/assets/nodes/Quartz_Crystal.png">
				</td>
				<td class = "nodes-node"> Quartz Crystal </td>
				<td class = "nodes-info"> There's a rich node on the southeast corner of the map</td>
				<td class = "nodes-cooldown"> 1 hour/24 hours</td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Log </td> 
				<td><img class = "nodes-image" title = "Palm Sapling" src = "https://wiki.guildwars2.com/images/a/a7/Elder_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Mebahya Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Troves (crystals), or rare Palm Lumber Cores </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Log </td> 
				<td><img class = "nodes-image" title = "Ancient Sapling" src = "https://wiki.guildwars2.com/images/0/01/Ancient_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Ancient Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Treasures (orbs), or rare Palm Lumber Cores </td>
				<td class = "nodes-cooldown"> 24 hours </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Pile of Flax Seeds" src = "https://wiki.guildwars2.com/images/f/fa/Pile_of_Flax_Seeds.png">
				</td>
				<td class = "nodes-node"> Pile of Flax Seeds </td>
				<td class = "nodes-info"> Chance to receive Flax Fiber, rare Flax Blossom </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Lentils" src = "../images/assets/nodes/Handful_of_Red_Lentils.png">
				</td>
				<td class = "nodes-node"> Lentils </td>
				<td class = "nodes-info"> </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Mussel" src = "https://wiki.guildwars2.com/images/a/aa/Mussel.png">
				</td>
				<td class = "nodes-node"> Mussel </td>
				<td class = "nodes-info"> Chance to receive the very rare Freshwater Pearl </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Cluster of Desert Herb" src = "../images/assets/nodes/Varietal_Sesame_Seed.png">
				</td>
				<td class = "nodes-node"> Cluster of Desert Herbs </td>
				<td class = "nodes-info"> Chance to receive the Variental Seseme Seeds, Chili Peppers, Coriander Seed, Sage Leaf, and Sesame Seed </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

		</table>

	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
</body>
</html>
