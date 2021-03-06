<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Draconis Mons </title>
	
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
			<a href = "#cull-the-destroyers"><li> &#10097; Cull the Destroyers </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
		</ul>
	</div>

	<div class = "page-box">

		<div class = "section-header">
			<h1>Draconis Mons</h1>
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
				<td> Fire Orchid Blossom </td>
				<td> <img class = "nodes-image" title = "Fire Orchid Blossom" src = "../images/assets/nodes/Fire_Orchid_Blossom.png"></td>
				<td> Gathered from meta, nodes, hearts, certain bosses (Wurm, Druid) map bonus rewards</td>
			</tr>

			<tr>
				<td> Unbound Magic </td>
				<td> <img class = "nodes-image" title = "Unbound Magic" src = "../images/assets/Unbound_Magic.png"></td>
				<td> Gathered from all mobs, meta, most events, Fire Orchid Blossoms (consumed), Glyph of Unbound </td>
			</tr>

		</table> <!-- End of quick info table -->

		<div class = "page-header">
			<div class = "small-description">
				<p1><span style = "font-weight: bold;"> How to: </span>
					<br>
				Follow the <a href = "#recommendation-events" style = "text-decoration: underline;"> recommended priority of events.</a> For this farm, generally the meta has progressed in some way. I start with the meta, finishing off that was left. From there, I follow events that were generally quick champion kills such as Webby, Mushroom, Stonehead, and whatever else is in the recommended priority list. For an hour worth of data, I always had time to do the meta a second time. Sometimes, three times. </p1>
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
			<img class = "map-image" title = "Top Floor"  style = "width: 40%;" src = "../images/draconis-mons/top-floor-events.jpg">
			<img class = "map-image" title = "Middle Floor" style = "width: 40%;" src = "../images/draconis-mons/middle-floor-events.jpg">
			<img class = "map-image" title = "Bottom Floor"  style = "width: 40%;" src = "../images/draconis-mons/bottom-floor-events.jpg">
		</div>

		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "page-links">
			<p1><a href="../timers/draconis-mons.html"> Event Timers </a></p1>
		</div>

		<div class = "recommendation-box"> 
			<h3> <span class = "meta-text" > Meta, </span><span class = "great-text"> 16-18, 19-20, 13, 12, 4-5, 7, 8-9, </span><span class = "meh-text"> 22, 14, 11, 10, 6, </span><span class = "avoid-text"> 15, 21</span>
			</h3> 
		</div>

		<div class = "page-header">
			<h2> Sort by: </h2>
		</div>

		<div id = "chain-wrapper-event-table" class = "chain-wrapper">
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
				<td class = "qty-event-number"> 7 </td>
				<td class = "rest-of-table"> Thin out the amassing destoyers </td>
				<td class = "rest-of-table"> Upscales very dramatically when a large squad. Mobs do not despawn when the events are finished</td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "1" class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 4 </td>
				<td class = "rest-of-table"> Neutralize the destroyer champion and all destroyer burrows</td>
				<td class = "rest-of-table"> 1 single champion each that are surrounded by other destroyer mobs. Most mobs do not give loot, but the champion still does </td>
				<td class = "rest-of-table"> 1 Guaranteed champ, fake champs possible </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "1" class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 2 </td>
				<td class = "rest-of-table"> Defeat the Destroyer Lieutenants </td>
				<td class = "rest-of-table"> Detailed description above </td>
				<td class = "rest-of-table"> 1 Guaranteed champ each </td>
				<td class = "rest-of-table"> Boss chest (from one boss only), 5 Fire Orchid Blossoms. Once per day, per character </td>
			</tr>

			<tr> 
				<td id = "1" class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Siegemaster Immelhoof </td>
				<td class = "rest-of-table"> Starts at the fort </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, 4 Jade Shards. Once per day, per character</td>
			</tr>
			<tr> 
				<td id = "2" class = "great-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Keep mercenaries from charging the lava with bloodstone </td>
				<td class = "rest-of-table"> Most times, the event scales too high that it bugs where no mobs will spawn for a few minutes. Eventually it fixes itself</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the bloodstone-charged lava wurm</td>
				<td class = "rest-of-table"> Can range or melee at the playform below. The leftside is safe from knockbacks, but still have to dodge when the wurm curls to avoid the knockup. Careful of exploding Bloodstone creatures </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> Boss chest, 3 Fire Orchids. Once per day, per character. </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Disrupt the caravan traveling </td>
				<td class = "rest-of-table"> Event is kind of out of the way. Very quick event if the event intercepts with you or the squad </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the champion jngle skelk </td>
				<td class = "rest-of-table"> In a cave beyond a small inquest camp. Very quick event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Use Inquest keypads to shut down Inquest gate </td>
				<td class = "rest-of-table"> Kill inquest to drop Inquest Keys. Use the Keys on the consoles that have a wrench symbol above </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Inquest Champion </td>
				<td class = "rest-of-table"> Quick champion event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the Devourer Champion </td>
				<td class = "rest-of-table"> Quick event, but it is out of the way. It is next to event #8-9.  </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Treasure Mushroom </td>
				<td class = "rest-of-table"> Quick event, but out of the way. It is next to meta event #1 (3rd event in route)  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> 1 Guaranteed rare gear and spirit shard </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Mushroom Emperor </td>
				<td class = "rest-of-table"> Quick champion event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the champion Webby Mother </td>
				<td class = "rest-of-table"> Quick champion event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Deactivate portals to stop the Inquest looters </td>
				<td class = "rest-of-table"> Quick event, though probably not the best for a large squad to complete </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the champion wind rider </td>
				<td class = "rest-of-table"> Quick event, but very out of the way. There are no events near it </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort the Vigil squad to the ancient ruins </td>
				<td class = "rest-of-table"> Escort. 3 stops with 2 waves each. First two wave only has pocket raptors. Escort can start when the NPC has a tangerine symbol </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 17 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the ruins while the Vigil investigates </td>
				<td class = "rest-of-table"> Simple defense event </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 18 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the greater Spirit of Nature </td>
				<td class = "rest-of-table"> Champion boss. Watch out for AoEs, immobilizes,, and pulls </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"> Boss chest, 3 Fire Orchid Blossoms. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 19 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help the escort the hatchlings away </td>
				<td class = "rest-of-table"> Simple escort. The escort can be started if the NPC has a tangerine symbol </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"> Boss chest, 3 Fire Orchid Blossoms. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 20 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Slay the stonehead </td>
				<td class = "rest-of-table"> Quick champion. From where the mob came from, the less the health, the more mobs that spawn from that direction </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 21 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the grub gobbler </td>
				<td class = "rest-of-table"> Defends the flax farm. Very out of the way in terms of killing him for the sake of doing an event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 22 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Repel the agressive mercenaries </td>
				<td class = "rest-of-table"> Most of the mobs don't drop loot. Though, champions do (if they spawn) </td>
				<td class = "rest-of-table"> Possible champs, Mob Density+</td>
				<td class = "rest-of-table"> </td>
			</tr>

		</table>

		<div id = "cull-the-destroyers" class = "page-header">
			<h1> Cull the Destroyers </h1>
			<div class = "small-description">
				<p1> There are a total of 13 events in total. For event #1, there are 7 locations throughout the map that can be navigated easily by using thermal tubes. The map above is the route I use that I think works effectively to easily flow a squad to completing as many events as possible. Afterwards, event #2 are destroying 4 champion Destroyers and their burrows. #3 (Destroyer Lieutenants) requires the squad to split into two groups.  </p1>

				<br><br> The Destroyer Lieutenants scale pretty dramatically. With a small group of 5 good dps players, the boss's health can drop quickly. With a large squad of ~20 with average dps, the boss's health drops slowly. 

				<br><br> CCing the Destroyer Lieutenants prevents the platforms from shattering, thus creating more room for boiling water (deals damage over time). Ideally, it would best to CC, but they have a heavy breakbar. Expect the platform to be shattered and to prepare yourself to move as there's going to be less room to fight.

				<br><br> If one Destroyer Lieutenant is defeated before the second is, then the second gets enraged with 200% more damage and takes less damage. It is recommended to kill both Lieutenants relatively around the same time so the second group won't have more of a difficult time. When both Destroyer Lieutenants are defeated, all players participating will receive two bouncy event chests instead of one. 
			</div>
		</div>

		<div id = "nodes" class = "page-header"> 
			<h1> Nodes </h1>
			<div class = "small-description">
				<p1> Node locations are subject to change due to new/different instances and new days</p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" title = "Top Floor"  style = "width: 40%;" src = "../images/draconis-mons/top-floor-nodes.jpg">
			<img class = "map-image" title = "Middle Floor" style = "width: 40%;" src = "../images/draconis-mons/middle-floor-nodes.jpg">
			<img class = "map-image" title = "Bottom Floor"  style = "width: 40%;" src = "../images/draconis-mons/bottom-floor-nodes.jpg">
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

		<table id = "nodes-sort" class = "nodes">
			<tr> 
				<th> Type </th>
				<th> </th>
				<th> Node </th>
				<th> Info </th>
				<th> Cooldown </th>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Log </td> 
				<td><img class = "nodes-image" title = "Primordial Orchid" src = "https://wiki.guildwars2.com/images/e/ed/Fire_Orchid_Blossom.png">
				</td>
				<td class = "nodes-node"> Primordial Orchid </td>
				<td class = "nodes-info"> Use to exchange for ascended trinkets or consume for Unbound Magic. There is a daily account limit </td>
				<td class = "nodes-cooldown"> 24 hours</td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Mithril Ore" src = "https://wiki.guildwars2.com/images/e/ee/Mithril_Ore.png">
				</td>
				<td class = "nodes-node"> Mithril Ore </td>
				<td class = "nodes-info"> Chance to receive crystals</td>
				<td class = "nodes-cooldown"> 1 hour</td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Orichalcum Ore" src = "https://wiki.guildwars2.com/images/4/43/Orichalcum_Ore.png">
				</td>
				<td class = "nodes-node"> Orichalcum Ore </td>
				<td class = "nodes-info"> Chance to receive rare orbs</td>
				<td class = "nodes-cooldown"> ???</td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Log </td> 
				<td><img class = "nodes-image" title = "Elder Wood Log" src = "https://wiki.guildwars2.com/images/a/a7/Elder_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Palm Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Troves (crystals) </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Log </td> 
				<td><img class = "nodes-image" title = "Ancient Sapling" src = "https://wiki.guildwars2.com/images/0/01/Ancient_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Ancient Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Treasures (orbs), or rare Palm Lumber Cores </td>
				<td class = "nodes-cooldown"> ??? </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Jungle Plant (image = Maguuma Lily)" src = "https://wiki.guildwars2.com/images/6/6c/Maguuma_Lily.png">
				</td>
				<td class = "nodes-node"> Jungle Plant </td>
				<td class = "nodes-info"> Chance to receive Cassava Root, Clove, Lemongrass, Pile of Allspice Berries, and the very rare Maguuma Lily </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Sawgill Mushroom" src = "https://wiki.guildwars2.com/images/3/39/Sawgill_Mushroom.png">
				</td>
				<td class = "nodes-node"> Sawgill Mushroom </td>
				<td class = "nodes-info"> Chance to receive the very rare Giant Mushroom Spore </td>
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
