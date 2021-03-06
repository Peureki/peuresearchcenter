<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Sandswept Isles</title>

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
			<a href = "#specimen-chamber"><li> &#10097; Specimen Chamber </li></a> 
			<a href = "#gathering-storms"><li> &#10097; Gathering Storms </li></a> 
			<a href = "#bounties"><li> &#10097; Bounties </li></a> 
			<a href = "#node-farm"><li> &#10097; Node Farms </li></a> 
			<a href = "#solo-farm"><li> &#10097; Solo Farms </li></a> 
		</ul>
	</div>

	<div class = "page-box">

		<div class = "section-header">
			<h1>Sndswept Isles</h1>
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
				<td> Difluorite Crystal </td>
				<td> <img class = "nodes-image" title = "Kralkatite Ore" src = "..\images\assets\nodes\Difluorite_Crystal.png"></td>
				<td> Gathered from South (Specimen Chamber) meta, North (Gathering Storms) meta, nodes, hearts, Sunken Chests (reward after north meta), Dominus Crystallum, Mark III Suppressor Golem, Beetle Queen, map bonus rewards, legendary bounties </td>
			</tr>

			<tr>
				<td> Volatile Magic </td>
				<td> <img class = "nodes-image" title = "Volatile Magic" src = "..\images\assets\Volatile_Magic.png"></td>
				<td> Gathered from all mobs, South meta, North meta, all events, Sunken Chests, Difluorite Crystals (consumed), Glyph of Volatility </td>
			</tr>

		</table>

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
			<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\sandswept-isles\sandswept-isles-map-events.jpg" style = "width: 35%;">
			
		</div>

		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
			<div class = "small-description">
				<p1> LB = Legendary Bounties, CB = Champion Bounties </p1>
				<p1><a href = "#bounties"><br> List of bounties </a></p1>
			</div>
		</div>

		<div class = "recommendation-box" > 
			<h3> <span class = "meta-text" > South (Specimen Chamber), North (Gathering Storms), </span><span class = "great-text"> 2, 4, 17, 12-13, </span><span class = "meh-text">10-</span><span class = "great-text">11, </span><span class = "meh-text"> 3, 6, </span><span class = "avoid-text"> 7-9, 14, 5, 15, 16 </span>
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

		<table id = "events-table" class = "events">
			<tr> 
				<th> # </th>
				<th> Qty </th>
				<th> Name </th>
				<th> Description </th>
				<th> Upscale </th>
				<th> Extra </th>
			</tr>

			<!-- id = 1, class = "meta-event-number"
				 id = 2, class = "great-event-number"
				 id = 3, class = "meh-event-number"
				 id = 4, class = "avoid-event-number"
			 -->

			<tr> 
				<td id = "4" class = "avoid-event-number"> 1 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Catch as many fish as you can </td>
				<td class = "rest-of-table"> Literally catching fish. Cool event, but in terms for gold, not worth it </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Dominus Crystallum </td>
				<td class = "rest-of-table"> Similar to a Wyvern. Watch for melee telegraphs, phases at 66%, 33%, dashes, and knockdowns </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, 3 Difluorite Crystals. Once per day, per character </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Inquest patrol </td>
				<td class = "rest-of-table"> Quick event, super easy. It's just out of the way and too quick for squads as the mobs are just veterans </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 4 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Destroy the Mark III Suppressor Golem </td>
				<td class = "rest-of-table"> There are 3 possible locations. Quick champion event </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table">Boss chest, 3 Difluorite Crystals. Once per day per character. Not per location</td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Disable the Inquest security turrets </td>
				<td class = "rest-of-table"> More of a solo/duo fun event. Not worth for a squad for profits </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 6 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Disrupt the Awakened patrol </td>
				<td class = "rest-of-table"> Quick event with a decent amount of mobs. Kind of out of the way </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Free Subject S by destroying the shield generators </td>
				<td class = "rest-of-table"> Decent event with lots of mobs, but the event-chain as a whole is not worth it as it is slow and buggy. </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort Subject S to safety</td>
				<td class = "rest-of-table"> Slow escort. Does not upscale</td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat all the laboratory security </td>
				<td class = "rest-of-table"> Sometimes this event bugs out </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Mount up and help Fenn wrangle the panicked marmoxes</td>
				<td class = "rest-of-table"> Kind of a quick event, if everyone participates. Need to complete this event to spawn #11, #12, #13. Sometimes this bugs out </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort Fenn back to the village </td>
				<td class = "rest-of-table"> Normal escort with lots of animals to drop Cuts of Quality Red Meat </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the livestock from the beetle stampede </td>
				<td class = "rest-of-table"> 3 waves of Scarabs  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Abiri, the Beetle Queen </td>
				<td class = "rest-of-table"> Very quick boss fight  </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, 3 Difluorite Crystals. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Overload the Inquest generator with golem cores </td>
				<td class = "rest-of-table"> Simple gathering event </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Participate in the celebration dance! </td>
				<td class = "rest-of-table"> Simple gathering event </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Participate in the daily motion vision assessment </td>
				<td class = "rest-of-table"> Another dorky event. More of a solo-event </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 17 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the flow of Inquest data </td>
				<td class = "rest-of-table"> Waves of inquest and a champ at the end </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

		</table>

		<div id = "specimen-chamber" class = "page-header">
			<h1> South, Specimen Chamber </h1>
		</div>


		<div class = "map-image-box" style = "display: flex; justify-content: center; align-items: center;">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\sandswept-isles\specimen-chamber.jpg" style = "width: 50%;">
			
		</div>
			
		<div class = "page-header">
			<div class = "small-description">
				<p1> Meta respawns around every 45 minutes from the previous meta (successful or not). 

				<br><br> There are multiple portals throughout the southern maps to quickly teleport straight to the meta. This is great if your squad is in a middle of a bounty train and are super far from the nearest waypoint.

				<br><br> If you have bought the full tiers of the Karmic Retribution / Empowerment, prepare to get lots of karma/experience!</p1>
			</div>
		</div>

		<div class = "map-image-box" style = "display: flex; justify-content: center; align-items: center;">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\sandswept-isles\specimen-chamber-pre.jpg" style = "width: 50%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> The first event has players attack waves of Inquests for 7 minute in this enclosed area. Waves spawn when every single mob from a wave gets defeated. It is possible for multiple waves to spawn at once. 

				<br><br> Waves spawns from the left, right, and inside the defense zone. 

				<br><br> From my personal experience, waiting for the mobs to run towards the defense zone decreases the total number of potential mobs that spawn overall. This is due to too much waiting for the mobs to run + you can't contol people who have range that will kill mobs before they reach. 

				<br><br> The best way is to make sure you have AoEs, some range, or speed to constantly run to each wave to tag mobs. I do not recommend major/raid DPS on the mobs as they are not ranked any speciality (just normal, not veterans or elites). 

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
				<td class = "rest-of-table"> Hold out until the laser array runs out of emergency power </td>
				<td class = "rest-of-table"> Detailed description above </td>
				<td class = "rest-of-table"> A few guaranteed champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

		</table>

		<div class = "map-image-box" style = "display: flex; justify-content: center; align-items: center;">
			<img class = "map-image-draconis-mons" title = "Events" src = "..\images\sandswept-isles\specimen-chamber-area.jpg" style = "width: 50%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> For the next event, there are 6 possible bosses. Though, only 2 will be released to fight. First, you will fight 2 of them, one by one. Then, the last event has players attack both at once.  

				</p1>
			</div>
		</div>

		<table class = "sandswept-south-meta-bosses">

			<tr>
				<th> </th>
				<th> Name </th>
				<th> Mechanics </th>
			</tr>	

			<tr>
				<td><img class = "sandswept-south-meta-bosses-beyn" title = "Simulacrum of Beyn, Scion of Thorns" src = "..\images\sandswept-isles\Champion_Axemaster_Gwyllion.jpg"></td>
				<td> Simulacrum of Beyn, Scion of Thorns </td>
				<td> Watch out for constant leaps. Every leap knocks players back. He also summons turret plants that shoot out poison volleys.</td>
			</tr>

			<tr>
				<td><img class = "sandswept-south-meta-bosses-destroyer" title = "Simulacrum of Destroyer Crematus" src = "..\images\sandswept-isles\Megadestroyer.jpg"></td>
				<td> Simulacrum of Destroyer Crematus </td>
				<td> Creates fire AoEs from him, fire tornadoes, and slams the ground, creating a shockwave that knocks down. He also leaps in front that does burst damage.
			</tr>

			<tr> 
				<td><img class = "sandswept-south-meta-bosses-jord" title = "Simulacrum of Jord Ironfrost" src = "..\images\sandswept-isles\Bjarl_the_Rampager.jpg"></td>
				<td> Simulacrum of Jord Ironfrost </td>
				<td> Creates shields. When attacking directly at a shield, it retaliates with ice AoE balls. He also throws ice AoE balls around himself. Ice fields damage players over time. At 50%, he pushes players to the edge at all times and puts ice fields on all the edges. 
			</tr>

			<tr> 
				<td><img class = "sandswept-south-meta-bosses-beta" title = "Simulacrum of Subject Beta" src = "..\images\sandswept-isles\Branded_Sapper.jpg"></td>
				<td> Simulacrum of Subject Beta </td>
				<td> Creates anti-gravity waves. Large laser beams in front and targets a single player to create multiple damaging AoEs. </td>
			</tr>

			<tr> 
				<td><img class = "sandswept-south-meta-bosses-tlati" title = "Simulacrum of Tlati, the Unchained" src = "..\images\sandswept-isles\Risen_Hylek.jpg"></td>
				<td> Simulacrum of Tlati, the Unchained </td>
				<td> Eats players. When the boss jumps around, he leaves poison fields and creates AoEs in front as a cone. </td>
			</tr>

			<tr> 
				<td><img class = "sandswept-south-meta-bosses-varkesh" title = "Simulacrum of Varkesh, the Branded" src = "..\images\sandswept-isles\Branded_Charr.jpg"></td>
				<td> Simulacrum of Varkesh, the Branded </td>
				<td> Dashes constantly. If players are caught in the dash, then they get stunned. </td>
			</tr>
		</table>

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
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat [ name of Simulacrum ] </td>
				<td class = "rest-of-table"> One of the 6 bosses listed above </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat [ name of Simulacrum ] part 2 </td>
				<td class = "rest-of-table"> One of the 6 bosses listed above </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table">  </td>
			</tr>

				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the dragon minion simulacrum </td>
				<td class = "rest-of-table"> Defeat the two bosses from the previous 2 events at the same time. Both share the same health pool so attack the one that is easier to handle </td>
				<td class = "rest-of-table"> 2 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, 5 Difluorite Crystals. Once per day, per character </td>
			</tr>

		</table>


		<div id = "gathering-storms" class = "page-header">
			<h1> North, Gathering Storms </h1>

			<div class = "map-image-box">
				<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\sandswept-isles\north-meta.jpg">
			
			</div>

			<div class = "small-description">
				<p1> When the meta bar says "The skies grow darker", then event #1 will show up scattered throughout the northern island. Simple event where you kill veterans. 

				<br><br>After that, 3 events (event #2) spawn simultaneously. I generally prefer to start from the left event #2 and progress to the right. It can work the other way as well, just don't start in the middle because it's just awkward flow. The event will spin you counter-clockwise, but the vortex does not hurt. There are always 3 champion elementals. They can do melee damage and sometimes reflect projectiles.   

				<br><br> After event #2, it generally takes about a minute of NPC talk to start event #3. I generally take my time to gather until the event begins. Make sure to let the squad know ahead of time so everyone can be at the event to upscale it. 

				<br><br> There are 6 waves of enemies for event #3. This event scales DRAMATICALLY with champions (yay). At the last wave, the champion earth Elemental does not drop loot. </p1>
				
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
				<td class = "qty-event-number"> 4 </td>
				<td class = "rest-of-table"> Defeat the rampaging elementals! </td>
				<td class = "rest-of-table"> Group of elites/veteran sparks, elementals </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Destroy the stormcaller echoes </td>
				<td class = "rest-of-table"> Counter-clockwise vortex. Does not damage the player. Always 3 champions  </td>
				<td class = "rest-of-table"> 3 Guaranteed champs </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Elder Rhona track down the source of the storm </td>
				<td class = "rest-of-table"> 6 waves, multiple champions </td>
				<td class = "rest-of-table"> 1 Guaranteed Champ, upscales </td>
				<td class = "rest-of-table"> </td>
			</tr>
		</table>

		<div class = "map-image-box">
				<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\sandswept-isles\cove-of-north-meta.jpg" style = "width: 40%;">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> As the escort ends, this cave will open. Stand on the left side (from where you enter the cave) because end-chest bug and keep your character locked inside the chest. 

				<br><br> This boss is a Djinn so that means that when you break their CC-bar, the defense drops dramatically. Start with the bunny and use the bunny when you see the break-bar show up. It takes a few seconds until it does, otherwise you might get baited. 
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
				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat Zohaqan </td>
				<td class = "rest-of-table"> Stand melee range, condi cleanse the slow/chill, knockbacks. CC the breakbar when it's up to remove his defense </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> Boss chest, 5 Difluorite Crystals. Once per day, per character </td>
			</tr>
		</table>

		<div class = "map-image-box">
				<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\sandswept-isles\sunken-chest-locations.jpg">
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> After the meta, there will be at least 10+ Sunken Chests throughout the shore of the island. The map above is the possible locations, but not all of the dots indicate a guaranteed chest. It's going to be a select few out of those locations. 

				<br><br> Each Sunken Chest gives a few pieces of Unidentified Gear, Volatile Magic, and a chance for a Difluorite Crystal. 
				</p1>
			</div>
		</div>


		<div id = "bounties" class = "page-header"> 
			<h1> Bounties </h1>
			<div class = "small-description">
				<p1> Note: Some bounties may not spawn and instead will spawn an "Ambush" event. This event is purely Awakened mobs and a single champion and does not count for achievements. </p1>
			</div>
		</div>

		<table class = "bounties-info">
			<tr>
				<th> Legendary </th>
				<th> Mechanics </th>
				<th> Extra </th>
			</tr>
			<tr> 
				<td class = "great-bounty"> Starcaller </td>
				<td> Just another Hydra, but add more HP and 3 bounty "instabilities". Watch out for dash attacks, AoE frontal attacks, knockdowns, and meteor showers</td>
				<td> 1 Difluroite Crystal, chance for 1 of 3 mini Hydras </td>
			</tr>

			<tr> 
				<td class = "great-bounty"> Seneb the Desecrated </td>
				<td> Summons AoEs around a player that infects other players when touched. Dash attacks, fire AoEs</td>
				<td> 1 Difluroite Crystal </td>
			</tr>

			<tr>
				<th> Champions </th>
				<th>  </th>
				<th>  </th>
			</tr>
			<tr>
				<td class = "great-bounty"> Ironshell </td>
				<td> Just like a veteran Karka. Stmops, rolls, phases at 25% health. Grants retaliation every 25% of its first health. Regenerates to 50% when initially killed</td> 
				<td> </td>
			</tr>
			<tr>
				<td class = "great-bounty"> Oakenscorn </td>
				<td> Melee stomp that may 1-shot. Summons choyas as backup. Dies quickly </td>
				<td> </td>
			</tr>
			<tr>
				<td class = "meh-bounty"> Old Stonehoof </td>
				<td> Headbutts players. While headbutting, he launches players into the air multiple times. Can be annoying, but quick if the squad is large or has good DPS</td>
				<td> </td>
			</tr>
			<tr>
				<td class = "avoid-bounty"> Exterminator IG-04 </td>
				<td> This should be a legendary boss. Heavy mechanics. Watch out for telegraphs, when he crouches, he does an expanding AoE of death. At 50% HP and lower, he does multiple wave attacks and laser beams. Avoid if this boss's location is on a meta event </td>
				<td> </td>
			</tr>
			<tr>
				<td class = "great-bounty"> Emogg the Soulbeast </td>
				<td> Even though he's a soulbeast, he has a pet attacking players. Both die extremely quick</td>
				<td> </td>
			</tr>
			<tr>
				<td class = "meh-bounty"> Magneton Manipulator </td>
				<td> Does a vortex, anti-gravity push to players when he spins with AoEs around him. Can be annoying to kill</td>
				<td> </td>
			</tr>

			<tr>
				<td class = "great-bounty"> The Prickly Pair </td>
				<td> TWO CHOYAS! They both roll around</td>
				<td> 2 Champions instead of 1 </td>
			</tr>

			<tr>
				<td class = "great-bounty"> Nepheretes </td>
				<td> He's the same as an Awakened Canid. Burrows, knockdown players, and slashes. Can be quick with a large squad </td>
				<td>  </td>
			</tr>

			<tr>
				<td class = "great-bounty"> Vebis the Inquisitor </td>
				<td> Laser beams in front </td>
				<td>  </td>
			</tr>

			<tr>
				<td class = "great-bounty"> Crystalwing </td>
				<td> Same as a Branded Griffon. Evades attacks periodically. Melee AoEs </td>
				<td> </td>
			</tr>
		</table>		

		<div class = "map-image-box">
			
		</div>

		<div id = "nodes" class = "page-header"> 
			<h1> Nodes </h1>
			<div class = "small-description">
				<p1> Node locations are subject to change due to new/different instances and new days</p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles-nodes" title = "Lake Doric Nodes" src = "..\images\sandswept-isles\sandswept-nodes.jpg" style = "width: 45%;">
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
				<td id = "1" class = "nodes-high-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Difluorite Crystal" src = "..\images\assets\nodes\Difluorite_Crystal.png">
				</td>
				<td class = "nodes-node"> Difluorite Crystal </td>
				<td class = "nodes-info"> Consume for Volatile Magic. Can only be gathered from nodes, hearts, events, legendary bounties, and map bonus rewards </td>
				<td class = "nodes-cooldown"> </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Mithril Ore" src = "..\images\assets\nodes\Mithril_Ore.png">
				</td>
				<td class = "nodes-node"> Mithril Ore </td>
				<td class = "nodes-info"> Chance to receive crystals</td>
				<td class = "nodes-cooldown"> 1 hour</td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Ore </td> 
				<td><img class = "nodes-image" title = "Orichalcum Ore" src = "..\images\assets\nodes\Orichalcum_Ore.png">
				</td>
				<td class = "nodes-node"> Orichalcum Ore </td>
				<td class = "nodes-info"> Chance to receive rare orbs</td>
				<td class = "nodes-cooldown"> 24 hours</td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Wood </td> 
				<td><img class = "nodes-image" title = "Elder Wood Log" src = "..\images\assets\nodes\Elder_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Baoba Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Troves (crystals) </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-meh-box"> Wood </td> 
				<td><img class = "nodes-image" title = "Ancient Sapling" src = "https://wiki.guildwars2.com/images/0/01/Ancient_Wood_Log.png">
				</td>
				<td class = "nodes-node"> Ancient Sapling </td>
				<td class = "nodes-info"> Chance to receive Foxfire Clusters, Hidden Treasures (orbs), or rare Palm Lumber Cores </td>
				<td class = "nodes-cooldown"> 24 hours </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Cluster of Desert Herb" src = "..\images\assets\nodes\Varietal_Cilantro_Seed.png">
				</td>
				<td class = "nodes-node"> Cluster of Desert Herb </td>
				<td class = "nodes-info"> Chance to receive Chili Peppers, Coriander Seeds, Sage Leaf, Sesame Seed, Varietal Sesame Seed, Varietal Clove Seed </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Desert Veg" src = "..\images\assets\nodes\Cassava_Root.png">
				</td>
				<td class = "nodes-node"> Desert Vegetable </td>
				<td class = "nodes-info"> Chance to receive Cassava Root, Flax Fiber, Onion, Garlic </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Mussel" src = "..\images\assets\nodes\Mussel.png">
				</td>
				<td class = "nodes-node"> Mussel </td>
				<td class = "nodes-info"> Chance to receive the very rare Freshwater Pearl </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "3" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Flax" src = "..\images\assets\nodes\Pile_Of_Flax_Seeds.png">
				</td>
				<td class = "nodes-node"> Pile of Flax Seeds </td>
				<td class = "nodes-info"> Chance to receive Flax Fiber, rare Flax Blossom </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id = "1" class = "nodes-high-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Coral" src = "..\images\assets\nodes\Coral_Tentacle.png">
				</td>
				<td class = "nodes-node"> Coral </td>
				<td class = "nodes-info"> Chance to recieve Coral Orb</td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id ="3" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Red Lentils" src = "..\images\assets\nodes\Handful_Of_Red_Lentils.png">
				</td>
				<td class = "nodes-node"> Handful of Red Lentils </td>
				<td class = "nodes-info"> </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id ="3" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Cabbage" src = "..\images\assets\nodes\Head_of_Cabbage.png">
				</td>
				<td class = "nodes-node"> Head of Cabbage </td>
				<td class = "nodes-info"> </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>

			<tr> 
				<td id ="3" class = "nodes-meh-box"> Plant </td> 
				<td><img class = "nodes-image" title = "Artichoke" src = "..\images\assets\nodes\Artichoke.png">
				</td>
				<td class = "nodes-node"> Artichoke </td>
				<td class = "nodes-info"> </td>
				<td class = "nodes-cooldown"> 1 hour </td>
			</tr>
		</table>

		<div id = "node-farm" class = "page-header">
			<h1> Node Farm </h1>
		</div>

		<div class = "small-description">
			<span style = "font-weight: bold;"> Disclaimer:</span>
			<br>
			In order to receive materials such as variental herbs and quality meats, you need to have completed at least the Charr and Sylvari portion of the <a href = "https://wiki.guildwars2.com/wiki/Gourmet_Training" target = "_blank" style = "text-decoration: underline;"> Gourmet Training</a> achievement. These materials play a significant role in benchmarks that includes them. Skimmer mastery to dive underwater is also required. 

			<br><br>
			<b> Spreadsheet</b>
			<br>
			To find averages, specific loots, and more, check out the  <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1129982216" target = "_blank"><u> spreadsheet</u></a>.

			<br><br>
			<b> Node Farm Calculator</b>
			<br>
			While this farm uses specific Glyphs, check out the <a href = "../gathering.html#calculator" target = "_blank"><u> Node Farm Calcaulator</u></a> to test out the estimated profits with different Glyphs. What are displayed in the benchmarks are not neccessarily the best Glyphs to use for maximum profits.
			
			<br><br>
			<span style = "font-weight: bold;"> Route:</span>
			<br>
			Start at Atholma Waypoint [&BEMLAAA=]. Northeast of the waypoint has a quick plant farm. Most of the plants are not worth much, but can bring a lot of Volatile Magic with Volatile tools. The entire zone (except in areas with Inquest) are filled with nodes, including the water. A high amount of profits will be from: 
			<br> - Difluorite (before it caps)
			<br> - Coral 
			<br> - Mussels (rare chance to get a Freshwater Pearl, but the node is abundant here)
		</div>

		<!-- 
			HTML notation:
			getBenchmark("[table-name]","[Name of farm 1]", etc);
			The name of the farm has to match the name in the spreadsheet EXACTLY (spaces and all)
		-->

		<!-- Gathering Picture -->
		<div class = "page-gathering-picture">
			<img title = "Sandswept Isles" style = "width: 50%;" src = "../images/sandswept-isles/sandswept-gathering-route.jpg">
		</div>

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
			<tbody id = "benchmark-table-sandswept-solo-farm"></tbody>
		</table>

		<script> getBenchmark("benchmark-table-sandswept-solo-farm", "Solo Farm: Sandswept Inquest", "Solo Farm: Sandswept Karka/Drake"); </script>

		<div class = "page-links">
			<p1><a href="https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1141069623" target = "_blank"> Spreadsheet </a></p1>
		</div>

		<div class = "page-header">
			<h2> Solo Farm: Sandswept Inquest </h2>
			<div class = "small-description">
				<p1> This farm consist of killing Inquests with a high power DPS build with high mobility. I personally switch from Power Necro and Power Soulbeast, but there are many others. This run does include the Sandswept South meta (the first event). There's a portal that spawns at the location of the farm to be easily teleported. By using the <a href = "../timers/sandswept-isles.html" style = "text-decoration: underline;"> timer page</a>, you can predict when the next run will be. </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles-nodes" title = "Solo Farm: Sandswept Inquest" src = "..\images\sandswept-isles\sandswept-solo-inquest.jpg" style = "width: 35%;">
		</div>

		<div class = "page-links">
			<p1><a href="https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=2109785507" target = "_blank"> Spreadsheet </a></p1>
		</div>

		<div class = "page-header">
			<h2> Solo Farm: Sandswept Karka/Drake </h2>
			<div class = "small-description">
				<p1> This farm consist of killing Karkas and Drakes with a high power DPS build with high mobility. I personally switch from Power Necro and Power Soulbeast, but there are many others. I try not attack any mobs in the water as they are too spread apart. </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-sandswept-isles-nodes" title = "Solo Farm: Sandswept Karka/Drake" src = "..\images\sandswept-isles\sandswept-solo-karka-drake.jpg" style = "width: 45%;">
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
