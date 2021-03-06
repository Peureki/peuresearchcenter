<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Desolation </title>
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
			<a href = "#maw"><li> &#10097; Maw of Torment </li></a> 
			<a href = "#junundu"><li> &#10097; Junundu Rising </li></a> 
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
		</ul>
	</div>

	<!-- Add nav bar here -->

	<div class = "page-box">

		<div class = "section-header">
			<h1>Desolation</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div id = "summary" class = "page-header">
			<div class = "small-description">
				<p1>
					Desolation isn't the most obvious in terms of how to farm it. Most of the events are considered not worth doing, but luckily there are a lot of Forged events. As with other PoF maps, Forged champions give Forged Battered Components which are the champion bags that offer multiple Unidentified Gear, recipies, and Forged skins that may be worth a pretty penny. In this farm, I mainly focused on Raiding Parties, the metas, and an occasional legendary bounty or event if stuff is on cooldown. 
					<br><br>
					<span style = "font-weight: bold;"> Method: </span> 
					<br>
					Using my <a href = "../timers/desolation.html" style = "text-decoration: underline"> timer page</a>, I farmed events on the west side of the map mainly. This includes events such as: 5 of the Raiding Party, Redeemer Kossan, and the Maw of Torment meta. Due to their low cooldowns, it's possile to rotation between these events without having to need to go to the other parts of the map until the Junundu Rising meta.
					<br><br>
					I started my farm at the same hour as when Maw would begin. Though, while the meta was in progress, our squad did not participate in the first event. I figured I'd get more chances for champions and currency if I were to farm the Raiding Parties and Redeemer Kossan. Before the 1st Maw event ended (about 2-3 minutes left), I would quickly run through all the locations of the next Maw events and split the squad up into 3 groups. These events as simple escorts so there were at least 5+ people at each escort. After the escorts were completed, we killed the Legendary Forged boss and killed additional champions that may have spawned.  
					<br><br>
					<span style = "font-weight: bold;"> Disclaimer: </span> 
					<br>
					After Maw, I would do another round of the Raiding Parties and Redeemer Kossan. If I had extra time before Junundu, I would do the legendary bounty: Awakened Hoarder. While he is not a Forged, it's possible for it to drop a unique mini, Mini Awakened Abomination. For Junundu, when the fort champions spawn, I go from Awakened to Forged. Generally, not many champions spawn on the Forged fort. It's possible the Awakened Fort may be better with a squad because of the amount of champions that spawn, but Forged fort is also much harder to defeat without a squad. With the squad killing the Forged first, the Awakened is usually done the same time and compeleting the meta quick. 
					<br><br>
					With the last 20ish minutes left to complete an hour of farming, I continued to do more Raiding Parties and Redeemer Kossan. I've also touched a little bit of the Ghost Kids (Meymo and Kyrisah event), Champion Ooze, and Ghost Eaters if there's nothing else up. 

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
			<img class = "map-image" title = "Events" src = "../images/desolation/events.jpg" style = "width: 40%">
		</div>

		<div  id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "page-links">
			<p1><a href="../timers/desolation.html"> Event Timers </a></p1>
		</div>

		<div class = "recommendation-box"> 
			<h3> <span class = "meta-text"> Maw of Torment, Junundu Wurms, </span><span class = "great-text" >8, 18, 17, 2-4, 19, 6, </span> <span class = "meh-text">10, 11, 22-23, 16, </span><span class = "avoid-text">12-15, 9, 20, 21, 1, 5</span>
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
				<td class = "qty-event-number"> 4 </td>
				<td class = "rest-of-table"> Collect intel reports from Shadows dead drops </td>
				<td class = "rest-of-table"> Collecting stuff throughout the map. Not worth doing. </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Collect relics for Meymo and Kyrisah </td>
				<td class = "rest-of-table"> Kind of a slow gathering event, but it leads to #3, #4. </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Kyrisah and Meymo locate the lost key </td>
				<td class = "rest-of-table"> Escorting NPCs with lots of waves of enemies</td>
				<td class = "rest-of-table">Possible champions</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Buuran investigate the mysterious gate </td>
				<td class = "rest-of-table"> Escorting an NPC with some waves of enemies</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Canid Throneguard to open the throne doors </td>
				<td class = "rest-of-table"> Veteran Canids that block a section of the map. Not worth doing for loots.</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Cahmpion Sulfurous Ooze </td>
				<td class = "rest-of-table"> Very quick champion Ooze.  </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Elder Air Djinn </td>
				<td class = "rest-of-table"> As the HP drops, it teleports to a different location </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 8 </td>
				<td class = "qty-event-number"> 5 </td>
				<td class = "rest-of-table"> Defeat the Forged raiding party </td>
				<td class = "rest-of-table"> Group of forged enemies. Has a second wave after defeating the initial group </td>
				<td class = "rest-of-table"> Possible champs</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Destroy the Forged cannons so the Chantry gate can reopen </td>
				<td class = "rest-of-table"> Destroying 7 forged cannons</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help recover the stranded villager's lost mount </td>
				<td class = "rest-of-table"> Escorting an NPC with 3 waves of harpies</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help the refugee caravan</td>
				<td class = "rest-of-table"> It's possible to get waves of either Awakened or Forged </td>
				<td class = "rest-of-table"> Possible champs</td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Rebel Keyon steal weapons from the garrison </td>
				<td class = "rest-of-table"> Collecting weapons from a heavily guarded awakened garrison. Takes a while to complete </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the captive villagers from the garrison's Awakened until Zuri returns with weapons </td>
				<td class = "rest-of-table"> Happens if event #12 succeeds. Defense event, but none of the mobs drop EXP or loot </td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort Zuri to the clanmarshal's pergola </td>
				<td class = "rest-of-table"> Escort with Awakened mobs </td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the clanmarshal and vizier</td>
				<td class = "rest-of-table"> Boss fight similar to a champion Hierarch </td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the Awakened reinforcements before they reach the Zayan Gate </td>
				<td class = "rest-of-table"> A champion and a couple other Awakened foes</td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 17 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the forged reinforcements before they reach the Shattered Ravines </td>
				<td class = "rest-of-table"> A champion and a couple other Forged foes</td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 18 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Patrol the area near the Mouth of Torment with Redeemer Kossan </td>
				<td class = "rest-of-table"> There are 3 possile routes for this event. Each can spawn Forged or Awakened foes</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 19 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect wandering spirits form ghost eaters</td>
				<td class = "rest-of-table"> Waves of Awakened foes</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> Rare chance to drop the mini, "Soulbeast Ebeleke Eze"</td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 20 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop informants from delivering spy reports to the raven posts </td>
				<td class = "rest-of-table"> Very long and slow defense event</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 21 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the sneaking saboteurs before they poison all the scarecrows </td>
				<td class = "rest-of-table"> Very long and slow defense event</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 22 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Weaken Annealed Abominations, and use Tether to bring them to Maziz </td>
				<td class = "rest-of-table"> DPS Abominations, then use the special skill to tether to escort to the NPC</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 24 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend Alloa's aural sequencers as they reprogram the abominations </td>
				<td class = "rest-of-table"> Waves of Forged enemies</td>
				<td class = "rest-of-table"> Possible champs</td>
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
		</table>

		<div id = "maw" class = "homepage-sector">
			<h1> Maw of Torment </h1>
		</div>

		<div class = "small-description-left">
			<p1> 
				There are 3 phases to this meta: 
				<br> 1) Attacking elite Forged officers and cannons
				<br> 2) Escorting 3 NPCs from the NW, N, and SE sections of the Maw area to the center
				<br> 3) Defeating the legendary Forged Demolisher 
				<br><br>
				<span style = "font-weight: bold;">1) </span>
				<br>
				There are 3 individual events (left picture). While there is a time limit (8 minutes), this event can actually fail and the meta will still progress. The event is all about destroying the Forged elites and cannons. The elites and cannons will persist to the next event if none are destroyed, which will make it slightly more difficult for smaller groups. 
				<br><br>
				It is possible for each of these events to upscale to champion Forged. A method that can work is to only do one or two lanes (or three if your group is really fast) individually to obtain the most amount of champs. The more the squad does, the more the prep beforehand since it will be more difficult to spread when the timer runs out. 
				<br><br>
				<span style = "font-weight: bold;">2) </span>
				<br>
				There are 3 escorts that need to be carried out within 8 minutes. Each spawns at the start of the previous event (right picture). Disclaimer, this part of the event is known to bug out by stalling. Each of these escorts need at least a small group to succeed as there are a lot of Forged enemies. I recommend at least 5 for each escort, but the more the better. 
				<br><br>
				Each of the escorts can upscale to champions. While it may sound great to do an escort at a time (they are quick), the time it takes to travel to other escorts and to complete them may not be enough time to do each individually. It's most likey best to complete all 3 as fast as possible. 
				<br><br>
				<span style = "font-weight: bold;">3) </span>
				<br>
				Afterwards, a legendary Forged boss will spawn at the waypoint, The Darklands Waypoint [&BKMKAAA=]. The basic mechanics of this boss is to avoid its dash attack that leaves a firey trail and to attack where it isn't putting a shield up. 
				<br><br>
				Occasionally, Forged champions will spawn throughout the fight. They do drop loot so make sure to tag those! 
				<br><br>
				<div style = "display: flex; align-items: center; justify-content: space-between;">
					<img src = "../images/desolation/maw-1.jpg" style = "width: 49%;">
					<img src = "../images/desolation/maw-2.jpg" style = "width: 49%;">
				</div>
			</p1>
		</div>

		<div id = "junundu" class = "homepage-sector">
			<h1> Junundu Rising </h1>
		</div>

		<div class = "small-description-left">
			<p1> 
				There are 2 phases to this meta: 
				<br> 1) Collect sulfer crystals for [NPC name]'s junundu lure
				<br> 2) Destroy the Awakened trebuchets / Destroy the Forged cannons
				<br><br>
				<span style = "font-weight: bold;">1) </span>
				<br>
				There are 3 individual events. Use a Skimmer or Skyscale to go into the sulfur valleys to obtain a Sulfur Crystal. It will appear as a buff on your buff bar to indicate that you've picked one up. Simply hover over one, then head to an NPC to turn it in. It's good to supply at least 1 for each event to get 3 event credits. 
				<br><br>
				<span style = "font-weight: bold;">2) </span>
				<br>
				Each of the escorts can upscale to champions. While it may sound great to do an escort at a time (they are quick), the time it takes to travel to other escorts and to complete them may not be enough time to do each individually. It's most likey best to complete all 3 as fast as possible. 
				<br><br>
				<span style = "font-weight: bold;">3) </span>
				<br>
				Afterwards, there are two forts that can be assaulted, Forged or Awakened. Both forts will have a single champion. The common route is to start with the Awakened champion then to the Forged. <span style = "font-weight: bold;"> Disclaimer: </span> make sure to not stand on top of the champions as they will teleport away and possibly go invulnerable if they go past the fort barrier. 
				<br><br>
				After the champions, the junundu wurms will have taken down the barriers of the gate and there are 3 trebs/cannons to defeat in both camps. More champions are likey to spawn at the Awakened than the Forged, but generally people split to both forts to finish them quickly. They downscale pretty well with a small group. 
			</p1>
		</div>

			<div id = "homepage-maps-ls3-sector" class = "homepage-sector">
			<h1 id = "nodes" > Nodes (coming soon) </h1>
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
