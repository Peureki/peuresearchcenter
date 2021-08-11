<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Siren's Landing </title>
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
			<a href = "#orrian-shrine"><li> &#10097; Orrian Shrine </li></a> 
			<a href = "#node-farm"><li> &#10097; Node Farm</li></a> 
		</ul>
	</div>

	<div class = "page-box">

		<div class = "section-header">
			<h1>Siren's Landing</h1>
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
				<td> Orrian Pearls </td>
				<td> <img class = "nodes-image" title = "Orrian Peals" src = "../images/assets/nodes/Orrian_Pearl.png"></td>
				<td> Gathered from meta, Sunken Chests, nodes, hearts</td>
			</tr>

			<tr>
				<td> Unbound Magic </td>
				<td> <img class = "nodes-image" title = "Unbound Magic" src = "../images/assets/Unbound_Magic.png"></td>
				<td> Gathered from all mobs, meta, most events, Orrian Pearls (consumed), Glyph of Unbound </td>
			</tr>

		</table> <!-- End of quick info table -->

		<div class = "page-header">
			<div class = "small-description">
				<p1><span style = "font-weight: bold;"> How to: </span>
					<br>
				Follow the <a href = "#recommendation-events" style = "text-decoration: underline;"> recommended priority of events.</a> The meta for this map does not have a global timer. It spawns every 30 minutes and can be completed within 10 minutes or less. In this farm, if there isn't a meta up, I follow the order of recommended events and whichever is nearby. If the meta is up, I prepare the squad at one of the shrines and ask players not to run ahead (since some people generally don't have the shrines unlocked). I always assume that and mount my way to each shrine. Obviously it would be faster if everyone had the shrine, but I try my best to accompany everyone. 
				<br><br>
				Since this an hourly farm, I did the meta at least two times. Since it's not on a global timer, there's no way of knowing when the first meta will spawn unless I was in the map during the previous meta. </p1>
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
			<img class = "map-image"  style = "width: 70%;" src = "../images/sirens-landing/events.jpg">
		</div>

		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "page-links">
			<p1><a href="../timers/sirens-landing.html"> Event Timers </a></p1>
		</div>

		<div class = "recommendation-box"> 
			<h3> <span class = "meta-text" > Meta, </span><span class = "great-text"> 1-2, 3-4, 5, 6, 7, 8, 9, 13-14, 15, </span><span class = "meh-text"> 16-</span><span class = "great-text">17, </span><span class = "meh-text">10-</span><span class = "great-text">11, </span><span class = "avoid-text">12</span>
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
				<td class = "rest-of-table"> Kill inquest to drop Inquest Keys. Use the Keys are consoles that have a wrench symbol above </td>
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
				<td class = "rest-of-table"> Champion boss. Watch out for AoEs, immobolizes, and pulls </td>
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
				<td class = "rest-of-table"> Defends the flax farm. Very out of the way in terms of killing him for event sake </td>
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

		<div id = "orrian-shrine" class = "page-header">
			<h1> Orrian Shrine Power Grid </h1>
			<div class = "small-description">
				<p1> When the progress bar starts depleting and says "The magic grid is about to fail. Be ready to assist in keeping the shrine powered!", that's when the meta is going to start. It has a 30 minute cooldown upon completing.  </p1>

				<br><br> There are four different locations, all at each shrine. I like to start off with the southeast shrine and make my way clockwise. If you're with a small group of friends that have all the shrines unlocked, you can use the shrine symbol on the mini-map to instantly teleport like a waypoint (more info below). If you're with a squad and with pugs, it might be best to just run to each shrine with your mounts. 

				<br><br> Each shrine has 2 of the same events. First is to kill mobs and gather their essences that they drop. Then, a champion spawns. Southeast = drake, southwest = lich, northwest = gorrilla, northeast = spider. 

				<br><br> When the meta is completed, an NPC will be interactable. He will have two tabs of items. The first tab is where you can exchange 8 Orrian Pearls for Orrian Coffers. These Coffers give lots of loot and some Orrian Pearls back as a reward. The second tab is where you buy the shrines to use them as waypoints. 
			</div>
		</div>

		<div id = "node-farm" class = "homepage-sector">
			<h1> Node Farm </h1>
		</div>

		<div class = "small-description">
			<center><iframe width="560" height="315" src="https://www.youtube.com/embed/AQbsEOZV0Hc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

			<span style = "font-weight: bold;"> Disclaimer:</span>
			<br>
			Shrines act like additional waypoints in the map. Example of a Shrine is here: [&BO0JAAA=] (up). After the meta, there is an NPC you can speak to that will have goodies. The second tab will be Shrines that you can purchase. 

			<br><br>
			<b> Spreadsheet</b>
			<br>
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=775271946" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits.
			
			<br><br>
			<span style = "font-weight: bold;"> Route:</span>
			<br>
			Start at Camp Reclamation Waypoint [&BO8JAAA=]. While this is a "node farm", there a lot of free chests that are along the way. This will net lots of Unidentified Gear while obtaining Elder Wood Logs. It is best to have the Shrines unlocked in the map. I did this in about 8-9 characters to acehieve a 1 hour farm. 
			<br><br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. 
		</div>

		<!-- 
			HTML notation:
			getBenchmark("[table-name]","[Name of farm 1]", etc);
			The name of the farm has to match the name in the spreadsheet EXACTLY (spaces and all)
		-->
		<script> getGatheringBenchmark("benchmark-table","Siren's Landing Node Farm (w/ Volatile)"); </script>

		<!-- Gathering Picture -->
		<div class = "page-gathering-picture">
			<img title = "Siren's Landing" style = "width: 70%;" src = "../images/sirens-landing/node-farm.jpg">
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
