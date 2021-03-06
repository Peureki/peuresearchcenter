<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Bloodstone Fen</title>

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
			<a href = "#maw"><li> &#10097; Bloodstone Maw </li></a> 
			<a href = "#spirits"><li> &#10097; Spirits </li></a> 
			<a href = "#rifts"><li> &#10097; Rifts </li></a> 
			<a href = "#nodes"><li > &#10097; Nodes </li></a>
		</ul>
	</div>

	<div class = "page-box">			
		<div class = "section-header">
			<h1>Bloodstone Fen</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<p1> <span style = "font-weight: bold;">How to:</span>
			<br>
			Follow the <a href = "#recommendation-events" style = "text-decoration: underline;"> recommended priority of events.</a> This farm is kind of RNG, depending on whether or not the Bloodstone Maw meta is up. Because this meta is not on a global timer, the only way to predict when this event will be up is knowing when it last ended. Otherwise, when starting this farm, you can assume that it will spawn sometime within the hour (since it has a 1 hour cooldown). 

			<br><br>
			In general, I tend to start my farm around the time the Night Meta spawns (Spirits). While the first event takes a long time due to scaling, I rotate the squad with all the seeker/cleric events. Once the first meta event is complete, then we focus on the champions/final escort. If the Bloodstone Maw did start, we ditch and head there instead. Not ideal, but it happens. 
			<br><br>
			If both Bloodstone Maw isn't up or Spirits, then I focus on the seeker/cleric events as they can scale to champions and finish quickly. If Hablion is up, we do that once for the daily chest. For a chance of pace, we do the Fragmented Wastes events if a rift appeared on the ground or is nearby the Hablion event. I generally avoid doing them because the squad has a harder time catching up from all the gliding/mounting constantly.  </p1>
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

		<div id = "homepage-maps-ls3-sector" class = "page-header">
			<h1 id = "events" > Events </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image" title = "Top Floor" src = "../images/bloodstone-fen/top-floor-events.jpg">
			<img class = "map-image" title = "Middle Floor" src = "../images/bloodstone-fen/middle-floor-events.jpg">
			<img class = "map-image" title = "Bottom Floor" src = "../images/bloodstone-fen/bottom-floor-events.jpg">
		</div>

		<div  id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "page-links">
			<p1><a href="../timers/bloodstone-fen.html"> Event Timers </a></p1>
		</div>

		<div class = "recommendation-box"> 
			<h3> <span class = "meta-text"> Bloodstone Maw, Spirits, </span> <span class = "great-text" > 14-15, 18, 16-17, </span> <span class = "meta-text"> Fragmented Wastes </span>
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
					<td id = "1" class = "meta-event-number"> 1 </td>
					<td class = "qty-event-number"> 4 </td>
					<td class = "rest-of-table"> Defeat the jade construct </td>
					<td class = "rest-of-table"> There's an Armored or Bow Jade construct. Bow is more range while Armored is more melee and tanky </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> 10 Unbound Magic (from Bloodstone Stalagmite) </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 2 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat the jade construct (two) </td>
					<td class = "rest-of-table"> Just like event #1, but both Armored and Bow are summoned. Kill the Bow first and drag Armored together </td>
					<td class = "rest-of-table"> 2 Guaranteed champ </td>
					<td class = "rest-of-table"> Boss chest, 2 Blood Rubies, 10 Unbound Magic (from Bloodstone Stalagmite)</td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 3 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Disperse the Unbound Guardian </td>
					<td class = "rest-of-table"> If you go to the green circle, you get a damage buff. Blue circles teleport you, red circles damage you </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> Boss chest, 3 Blood Rubies, Unbound Magic (scattered)</td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 4 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat the patrolling justicar </td>
					<td class = "rest-of-table"> Similar to a White Mantle Knight. Spawns during the day</td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 5 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat the patrolling crased agent </td>
					<td class = "rest-of-table"> Similar to a pistol/pistol thief. Spawns during the day </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 6 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Exorcise the angered spirits stalking the Haunted Canyons </td>
					<td class = "rest-of-table"> Kill A LOT of spirits. They are all spread through the ground area. Takes a while to progress the event </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 7 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat Savant Ehrin </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 8 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat Nyle the Compassionate </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 9 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat Ritualist Josa </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 10 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat Thief Lloyd </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 11 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Escort Alari Doubleblade </td>
					<td class = "rest-of-table"> Regular escort with multiple waves </td>
					<td class = "rest-of-table"> Possible champs, Mob density+ </td>
					<td class = "rest-of-table"> Boss chest, 1 Blood Ruby. Once per day, per character </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 12 </td>
					<td class = "qty-event-number"> 9 </td>
					<td class = "rest-of-table"> Defeat beasts disgorged from the unstable rift </td>
					<td class = "rest-of-table"> There are 9 possible locations. Some rifts apply burn, stun, or knockdown. It's just random mobs </td>
					<td class = "rest-of-table"> Possible champs, Mob density+ </td>
					<td class = "rest-of-table">  </td>
				</tr>

				<tr> 
					<td id = "1" class = "meta-event-number"> 13 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat the enormous bloodstone elemental </td>
					<td class = "rest-of-table"> After defeating 7 of #12 events, this champion spawns and the cycle repeats </td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table">  </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 14 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Exorcise the angered spirits haunting Zealot's Overlook </td>
					<td class = "rest-of-table"> Lots of spirits in the buildings, some on the outside. Kill until progress bar is filled </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table">  </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 15 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Defeat Justicar Hablion </td>
					<td class = "rest-of-table"> At around 50% and lower, the boss creates aoes that teleport you into the sky. Use gliding to get back down without fall damage</td>
					<td class = "rest-of-table"> 1 Guaranteed champ </td>
					<td class = "rest-of-table"> Boss chest. 3 Blood Rubies. Once per day, per character </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 16 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Kill the seekers to halt the cleric's supply of bloodstone </td>
					<td class = "rest-of-table"> Kill all seekers. CC helps greatly with stopping the seekers and to kill them quickly. Each seeker increases the event duration until it fails</td>
					<td class = "rest-of-table"> Possible champs, Mob Density+ </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 17 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Kill the White Mantle Cleric </td>
					<td class = "rest-of-table"> This happens regardless if event #16 fails or not. Very quick kill</td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> </td>
				</tr>

				<tr> 
					<td id = "2" class = "great-event-number"> 18 </td>
					<td class = "qty-event-number"> 1 </td>
					<td class = "rest-of-table"> Treasure Mushroom </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> </td>
					<td class = "rest-of-table"> Chance for Invisible Boot Box. 1 Guaranteed rare and spirit shard </td>
				</tr>
			</table>
		</div>

		<div id = "maw" class = "page-header">
			<h1 id = "meta-sunspear" > Bloodstone Maw </h1>
		</div>

		<div class = "small-description">
			<p1> Meta has a respawn rate of 1 hour, but it is tied to the instance of a map rather than a global timer. When the meta starts, a message will broadcast in the game saying "Jade Constructs are teleporting into Bloodstone Maw". </p1>

			<br><br> There are only 3 phases to this meta. For each event, there is a time limit so make sure to try your best to complete as fast as possible.

			<br><br><span style = "font-weight: bold;"> Phase 1: </span><br> This phase repeats 4 times. Destroying either a Champion Jade Armor or Jade Bow. Jade Armors mainly deal melee damage, knockbacks, and stuns while Jade Bows mainly deal projectile damage. For Jade Armors, it's best to be wary of telegraph skills and avoid melee range when it's spinning. They also have more defense and die slower than Jade Bows. Both Jade champions will have a CC phase around 75%. Make sure to CC during this phase to deal damage. 

			<br><br><span style = "font-weight: bold;"> Phase 2: </span><br> Similar to Phase 1, but you'll have to kill two Champion Jades (one each). All players should gather close and destroy the Jade Bow first because 1) it will cause the Jade Armor to move closer so players can cleave and 2) Jade Bows die faster. 

			<br><br><span style = "font-weight: bold;"> Phase 3: </span><br> If you've ever done Vale Guardian in the raid Wing 1, then it's the same boss. Except, the green circles don't wipe a group. Instead, the green circle provides a special action key that will enhance your damage by 200%. Blue circles teleport you randomly and red circles deal large damages over time. The boss will likely choose a sole person to tank so make sure everyone stays close so he does not move as much!
		</div>

		<div id = "spirits" class = "page-header">
			<h1 id = "meta-sunspear" > Spirits </h1>
		</div>

		<div class = "small-description">
			<p1> Unlike the other two metas of this map, this is based on a global timer. There is a Day time version and Night time version which cycles through the day-night cycle of the game. The meta entirely occurs on the ground floor.</p1>

			<br><br><span style = "font-weight: bold;"> Day time: </span><br> This phase is super simple and only contains two champions. They spawn shortly after Day starts.

			<br><br><span style = "font-weight: bold;"> Night time: </span><br> Once Night time begins, there will be an event that covers most of the ground floor to destroy angered spirits. This event scales heavily and can take a few minutes to complete. 

			<br><br> Afterwards, there will be 4 champions, spawning one at a time. Once the 4th champion has been defeated, an escort will spawn. 
		</div>

		<div id = "spirits" class = "page-header">
			<h1 id = "meta-sunspear" > Fragmented Wastes </h1>
		</div>

		<div class = "small-description">
			<p1> This meta does not neccessarily have a timer. There are 8 different locations for Rifts that will spawn in the upper floor, on the fragmented platforms. There can be up to 3 Rifts to spawn at a time. If there is no Rift, there will be one that spawns within a few minutes. </p1>

			<br><br> After 8 Rifts closed, there will be a Champion Bloodstone Elemental at a low fragmented platform. The meta repeats itself after its defeat. Rifts can still spawn regardless of having the champion up or not. 
		</div>

		<div id = "homepage-maps-ls3-sector" class = "page-header">
			<h1 id = "nodes" > Nodes </h1>
		</div>

		<div class = "small-description">
			<p1> Node locations are subject to change due to new/different instances and new days</p1>
		</div>

		<div class = "page-picture">
			<img src = "../images/bloodstone-fen/node-farm-1.jpg" style = "width:50%;">
			<img src = "../images/bloodstone-fen/node-farm-2.jpg" style = "width:50%;">
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
