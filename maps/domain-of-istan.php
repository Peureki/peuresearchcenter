<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Domain of Istan </title>
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
			<a href = "#palawadan"><li> &#10097; Palawadan </li></a> 
			<a href = "#sunspear"><li> &#10097; Sunspear (Great Hall) </li></a> 
			<a href = "#bounties"><li> &#10097; Bounties </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
		</ul>
	</div>

	<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
		<h1 id = "farming" > Farming </h1>
	</div>

	<div class = "page-box">
		<div class = "section-header">
			<h1>Domain of Istan</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<table class = "quick-info">
			<tr>
				<th> Currency </th>
				<th> </th>
				<th> Info </th>
			</tr>

			<tr> 
				<td> Kralkatite Ore </td>
				<td> <img class = "nodes-image" title = "Kralkatite Ore" src = "..\images\assets\nodes\Kralkatite_Ore.png"></td>
				<td> Gathered from Palawadan meta, Great Hall meta, Brewmaster (event # 6), brandstorms (meteors), hearts, map bonus rewards, legendary bounties </td>
			</tr>

			<tr>
				<td> Volatile Magic </td>
				<td> <img class = "nodes-image" title = "Volatile Magic" src = "..\images\assets\Volatile_Magic.png"></td>
				<td> Gathered from all mobs, Palawadan meta, Great Hall meta, events, Kralkatite Ore (consume), Glyph of Volatility </td>

		</table>

		<div class = "page-header">
			<div class = "small-description-left">
				<p1><span style = "font-weight: bold"> How to: </span>
				Follow the <a href = "#recommendation-events" style = "text-decoration: underline;"> recommended priority of events.</a> This farm is generally from the LS4 train. At the start, the train begins with about an hour of Istan so this benchmark is based on starting with: 
				<br><br>
				- Palawadan 
				<br> - Akali
				<br> - Brewmaster
				<br> - Great Hall 
				<br> - Brewmaster
				<br> - Akali
				</p1>
			</div>
		</div>

		<div class = "page-header">
			<h2> Criteria </h2>
				<div class = "small-description">
					<p1> These are the categories of the type of content. This includes events, bounties, and (in a similar variation) gathering nodes.</p1>
				</div>
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
	</div> <!-- End of page box -->

	<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
		<h1 id = "events" > Events </h1>
	</div>

	<div class = "page-box">
		<div class = "map-image-box">
			<img class = "map-image-domain-of-istan" title = "Events" src = "..\images\domain-of-istan\istan-events.jpg" style = "width: 50%;">
			
		</div>

		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
			<div class = "small-description">
				<p1> LB = Legendary Bounties, CB = Champion Bounties </p1>
				<p1><a href = "#list-of-bounties"><br> List of bounties </a></p1>
			</div>
		</div>

		<div class = "page-links">
			<p1><a href="../timers/domain-of-istan.html"> Event Timers </a></p1>
		</div>

		<div class = "recommendation-box" > 
			<h3> <span class = "meta-text" > Palawadan, Great Hall, </span><span class = "great-text"> 7, 1-6, LB, </span><span class = "meh-text"> 9, 8, 11, 12, CB, </span><span class = "avoid-text"> 10 </span>
			</h3> 
		</div>

		<div class = "page-header">
			<h2> Sort by: </h2>
		</div>

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
			<p1><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"> = Chain event leading to event # [ ] </p1>
		</div>

		<table id = "events-table" class = "events">
			<div id = "chain-wrapper-event-table" class = "chain-wrapper">
				 <span class = "chain-arrow-istan-1"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-istan-2"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-istan-3"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-istan-4"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>

				 <span class = "chain-arrow-istan-5"><img class = "chain-arrow-image" title = "Chain event" src = "..\images\assets\black-arrow.png"></span>
			</div>
			<tr> 
				<th> # </th>
				<th> Qty </th>
				<th> Name </th>
				<th> Description </th>
				<th> Upscale </th>
				<th> Extra </th>
			</tr>
			<tr><td id = "2" class = "great-event-number">1</td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Powderkeg to lure out their captain </td>
				<td class = "rest-of-table"> Killing mobs labeled "Powderkeg" </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Powderkeg Captain </td>
				<td class = "rest-of-table"> Quick Veteran </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Stonefists to lure out their captain </td>
				<td class = "rest-of-table"> Killing mobs labeled "Stonefists" </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Stonefist Captain </td>
				<td class = "rest-of-table"> Quick Veteran </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Alehounds to lure out their captain </td>
				<td class = "rest-of-table"> Kill mobs labeled "Alehounds" </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Alehound Captain (Brewmaster) </td>
				<td class = "rest-of-table"> CC boss to prevent a large deadly AoE. Watch for AoEs on players as they can drop poison fields </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">Boss chest, 10 Kralkatite Ore. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend Akili while he recalibrates mirriors </td>
				<td class = "rest-of-table"> 3 defense areas. Each defense area spawns a lot of mobs, but die very quickly. It's best to constantly AoE and run around to tag mobs </td>
				<td class = "rest-of-table"> Possible champs, Mob density+</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the book burning raid on the Astralarium library</td>
				<td class = "rest-of-table"> Long defense mission to kill Awakened. Some mobs are very tanky </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Awakened from the graveyard </td>
				<td class = "rest-of-table"> Killing mobs. Doesn't really upscale unless your squad is there when it spawns </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Mordant Crescent before they Awaken buried Villagers </td>
				<td class = "rest-of-table"> Killing Mordant Crescents as they head to graves. This is a quick event to fail </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Mordant Graveraiser </td>
				<td class = "rest-of-table"> Regular Awakened champion </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the loyalists from confiscating food stashed by villagers </td>
				<td class = "rest-of-table"> Incredibly long event </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 13 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Intercept the corpse caravan departing from [location] </td>
				<td class = "rest-of-table"> Quick event to intercept this event before it reaches the Great Hall. Progresses the Great Hall meta spawn rate </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Destroy the crystal encasing the Brandstone </td>
				<td class = "rest-of-table"> Not an event meant for a squad, but a generous way to get more Kralkatite Ore / Powdered Rose. Do not attack the crystal.  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>
		</table>

	</div> <!-- End of this page box -->

	<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
		<h1 id = "palawadan" > Palawadan, Jewel of Istan </h1>
	</div>

	<div class = "page-box">
		<div class = "map-image-box">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\domain-of-istan\istan-palawadan-event.jpg">
			
		</div>
			
		<div class = "page-header">
			<div class = "small-description-left">
				<p1> Meta respawns every 2 hours at Dusk (xx:45)  

				<br><br> Every event upscales heavily, but does not downscale as much. With that, it is recommended to have a large to full squad to obtain more champions and to complete the meta effenciently. 

				<br><br> Every event (except for the first) spawns "Supply Caches" for additional loot. They spawn in the area of a completed event and the locations are shown in the in-game mini-map. There is a daily account limit of 30 supply caches per day.

				<br><br> Circle = Rally Point (on the map above). These rally points spawn a lot more champions if the squad kills the champs/mobs quickly. 
				</p1>
			</div>
		</div>

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
				<td class = "rest-of-table"> Defeat Joko's Champions to open the path </td>
				<td class = "rest-of-table"> Recommended to start off with the bunny to CC the bosses. Both bosses will initially burrow to a player. Wait for them to pop up, then use your bunny. Both champs should die relatively around the same time </td>
				<td class = "rest-of-table"> Fake champs</td>
				<td class = "rest-of-table"> At least 1 Supply Cache </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Northern Awakened Forces (Market) </td>
				<td class = "rest-of-table"> Rally point. Kill mobs and champions when they spawn. Faster kill = more mobs/champions </td>
				<td class = "rest-of-table"> Possible champs, Mob density+</td>
				<td class = "rest-of-table"> At least 1 Suppply Cache </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Northern Awakened Forces (Courtyard) </td>
				<td class = "rest-of-table"> Rally point. Kill mobs and champions when they spawn. Faster kill = more mobs/champions </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> At least 1 Supply Cache </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the Loyalist Leaders </td>
				<td class = "rest-of-table"> 6 champion Loyalists to kill. There are 4 on the ground level and 2 upstairs. It's best to kill the initial 3 when you arrive at the building, the 2 upstairs, then the champ to the east.  </td>
				<td class = "rest-of-table"> 6 Guaranteed champ </td>
				<td class = "rest-of-table"> 6 Supply Caches </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Tear down the statue of Palawa Joko </td>
				<td class = "rest-of-table"> Stack on the feet of the statue. Tag champions, but don't focus on them until the statue is defeated. When the statue is defeated, the mobs have decreased defenses and die quickly </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> At least 1 Supply Cache </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Southern Awakeend Forces (Residential) </td>
				<td class = "rest-of-table"> Rally point. Kill mobs and champions when they spawn. Faster kill = more mobs/champions </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> At least 1 Supply Cache </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Southern Awakeend Forces (Training Grounds) </td>
				<td class = "rest-of-table"> Rally point. Kill mobs and champions when they spawn. Faster kill = more mobs/champions </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> At least 1 Supply Cache </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Destroy the ships carrying corsair reinforcements </td>
				<td class = "rest-of-table"> 3 ships to destroy. Some people can use cannons to hit the ship or people can fly to the ship for damage. Ignore the mobs </td>
				<td class = "rest-of-table"> Fake champs </td>
				<td class = "rest-of-table"> 6 Supply Caches, 2 for each ship destroyed </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Awakened Archon Iberu </td>
				<td class = "rest-of-table"> He does a lot of melee damage. CC the boss at 75% and 25%. Kill/cleave the mobs as he life siphons them </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest. At least 6 Supply Caches </td>
			</tr>


		</table>

	</div> <!-- End of this page box -->

	<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
		<h1 id = "sunspear" > Sunspear Uprising (Great Hall) </h1>
	</div>

	<div class = "page-box">

			<div class = "map-image-box">
				<img class = "map-image-draconis-mons" title = "Events" src = "..\images\domain-of-istan\great-hall-meta-event.jpg" style = "width: 30%;">
			
		

			<div class = "small-description-left">
				<p1> Meta respawns after every Palawadan, in the next hour, at the xx:20 minute mark. The meta also can begin when the progress bar of "Mordant Crescent Forces" depletes.  </p1>

				<br><br> This meta has fast sequences of events of mostly just killing champions and mobs. 

				<br><br> For the last event (#5), when fighting Amala, the event intially begins with 2 champions at the corners of the room. Kill those first, then Amala. Every 25% of Amala's health, a single champion will spawn at a corner. Kill those, then back to Amala for the next 25% of her health. Make sure to ignore the champion Elemental as he does not drop loot. 

				
			</div>
		</div>

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
				<td class = "rest-of-table"> Break through the main gate of the Mordant Crescent </td>
				<td class = "rest-of-table"> Kill the gate, ignore the mobs </td>
				<td class = "rest-of-table"> Fake champs</td>
				<td class = "rest-of-table"> 2 Supply Caches </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear the Awakened forces from the courtyard </td>
				<td class = "rest-of-table"> Kill all mobs. Most squads go one side to the other to get the most amount of mobs. If the event bugs out, there's possibly a mob under the ground that the squad needs to AoE to progress </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> 2 Supply Caches </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Mordant Crescent Captain </td>
				<td class = "rest-of-table"> Tankier version of a champion hierarch. Does a spin-to-win that 1 shots with a heavy CC bar </td>
				<td class = "rest-of-table"> 1 Guaranteed champ, other champs are fake </td>
				<td class = "rest-of-table"> 2 Supply Caches </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Destroy the mesmerizing fountains of Joko </td>
				<td class = "rest-of-table"> There are 6 fountains to destroy. One on each side and 4 in the building.  </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> 2 Supply Caches </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Warden Amala </td>
				<td class = "rest-of-table"> Nearly the same boss as Wardan Amala in Twlight Oasis fractal. At the start and every 25% of her health, there will champions that spawn in either the left or right corner.  </td>
				<td class = "rest-of-table"> 
				<td class = "rest-of-table"> Boss chest, 4 Supply Caches </td>
			</tr>
		</table>

		<div class = "map-image-box">
				<img class = "map-image-domain-of-istan-amala-champs" title = "Events" src = "..\images\domain-of-istan\amala-champ-locations.jpg" style = "width: 50%;">
			
			</div>
	</div> <!-- End of this page box -->

	<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
		<h1 id = "bounties" > Bounties </h1>
	</div>

	<div class = "page-box">

			<div class = "small-description">
				<br>
				<p1> Note: Some bounties may not spawn and instead will spawn an "Ambush" event. This event is purely Awakened mobs and a single champion and does not count for achievements. </p1>
				<br><br>
			</div>

		<table class = "bounties-info">
			<tr>
				<th> Legendary </th>
				<th> Mechanics </th>
				<th> Extra </th>
			</tr>
			<tr> 
				<td class = "great-bounty"> Smoldge </td>
				<td> Dashes around, leaves a trail of firey poop. Throws goop at range.  Can be a quick kill with good/large squad.</td>
				<td> 1 Kralkatite Ore, Elegy Mosaic </td>
			</tr>
			<tr>
				<th> Champions </th>
				<th> </th>
				<th>  </th>
			</tr>
			<tr>
				<td class = "meh-bounty"> Lady Shamshir </td>
				<td> Dashes constantly</td> 
				<td> </td>
			</tr>
			<tr>
				<td class = "meh-bounty"> Matriarch Shrilliss </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<td class = "meh-bounty"> Simoom the Accursed </td>
				<td> Summons tornadoes to push back melee players.</td>
				<td> </td>
			</tr>
			<tr>
				<td class = "avoid-bounty"> Suneh Stormbringer</td>
				<td> An enraged Jacaranda. Tons of constant AoEs and powerful bursts with knockbacks. Super evil!</td>
				<td> </td>
			</tr>
		</table>		

	</div> <!-- End of this page box -->

	<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
		<h1 id = "nodes" > Nodes </h1>
	</div>

	<div class = "page-box">
	
			<div class = "small-description">
				<p1> Node locations are subject to change due to new/different instances and new days</p1>
			</div>

		<div class = "map-image-box">
			<img class = "map-image-domain-of-istan-nodes" title = "Lake Doric Nodes" src = "..\images\domain-of-istan\nodes.jpg" style = "width: 60%;">
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
				<td><img class = "nodes-image" title = "Kralkatite Ore" src = "..\images\assets\nodes\Kralkatite_Ore.png">
				</td>
				<td class = "nodes-node"> Kralkatite Ore </td>
				<td class = "nodes-info"> Consume for Volatile Magic. Can only be gathered from Brandstorms / Meteors </td>
				<td class = "nodes-cooldown"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-low-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Mithril Ore" src = "..\images\assets\nodes\Mithril_Ore.png">
				</td>
				<td class = "nodes-node"> Mithril Ore </td>
				<td class = "nodes-info"> Chance to receive crystals</td>
				<td class = "nodes-cooldown"> 1 hour</td>
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
				<td class = "nodes-node"> Baoba Sapling </td>
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
				<td><img class = "nodes-image" title = "Desert Veg" src = "..\images\assets\nodes\Cassava_Root.png">
				</td>
				<td class = "nodes-node"> Desert Vegetable </td>
				<td class = "nodes-info"> Chance to receive Cassava Root, Flax Fiber, Onion, Garlic </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Mussel" src = "..\images\assets\nodes\Mussel.png">
				</td>
				<td class = "nodes-node"> Mussel </td>
				<td class = "nodes-info"> Chance to receive the very rare Freshwater Pearl </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Flax" src = "..\images\assets\nodes\Pile_Of_Flax_Seeds.png">
				</td>
				<td class = "nodes-node"> Pile of Flax Seeds </td>
				<td class = "nodes-info"> Chance to receive Flax Fiber, rare Flax Blossom </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "2" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Seaweed" src = "..\images\assets\nodes\Seaweed.png">
				</td>
				<td class = "nodes-node"> Seaweed </td>
				<td class = "nodes-info"> </td>
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
