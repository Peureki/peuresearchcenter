<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Domain of Kourna </title>
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
			<a href = "#scarab-plague"><li> &#10097; Scarab Plague </li></a> 
			<a href = "#solo-farm"><li> &#10097; Solo Farms </li></a> 
		</ul>
	</div>

	<!-- Main box -->
	<div class = "page-box">

		<div class = "section-header">
			<h1>Domain of Kourna</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			<b> How to: </b>
			<br>
			<p1> Follow the <a href = "#recommendation-events"> recommended priority of events.</a> Ideally, the events should be in order to get the most amount of gold, but sometimes that's not the case. Follow the list as close as possible to get most of your time's worth. Use your best judgement to which event should be done next. Also, consider the distance between the current event and the next event and jduge if it's worth the time to travel or not.</p1>

			<p1> <br><br> If you're the commander, make sure to communicate with the squad on where you're going to and have a relatively steady pace so most can still follow easily. </p1>

			<p1> <br><br> Have a build that can provide decent DPS (so the event champs/bosses don't take a long time), can provide good mobility, and good AoEs to tag multiple mobs. Check some farming builds here: <br><a href = "https://metabattle.com/wiki/Open_World" target = "_blank"> Meta Battle Open World Builds </a></p1>
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
			<img class = "map-image-sandswept-isles" title = "Events" src = "..\images\domain-of-kourna\domain-of-kourna-events.jpg" style = "width: 50%;">
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
			<h3> <span class = "meta-text" > Scarab Plague, </span><span class = "great-text"> 6, 2-3, 11, 4, 5, 7, LB, CB, </span><span class = "meh-text"> CB, 10, <span class = "avoid-text"> 8-9, 12, 19-20, 13-15, 17-18, 16</span>
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

		<!-- 
			Start of the events table 
		-->

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
				<td id = "2" class = "great-event-number"> 1 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Researcher Siris test his Rez-o-Matic device </td>
				<td class = "rest-of-table"> Kill enemies within the white circle. Two waves. Second wave has loot while the first doesn't </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Kill the mutated rats </td>
				<td class = "rest-of-table"> Quick event. Kill veteran rats. The second event takes about 30 seconds before you can talk to the NPC to start it </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help Researcher Emm track the origin point of the mutated rats </td>
				<td class = "rest-of-table"> 2 waves. First wave are hyenas. Second wave could be Scales or Bats. The first the mobs die, the more waves spawn for more loot </td>
				<td class = "rest-of-table"> Possible champ, Mob density+ </td>
				<td class = "rest-of-table"> 1 Kournan Chest + 1 Possible Supply Cache. Once per day per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Champion Sand Shark </td>
				<td class = "rest-of-table"> Simple sand shark, just a champion </td>
				<td class = "rest-of-table"> 1 Guaranteed champ</td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Put an end to the choya chieftain </td>
				<td class = "rest-of-table"> Quick veteran choya event. There's usually 2 Kournan caches nearby that's not related to the event </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Disable the Awakened Inquest cannon before it can fire</td>
				<td class = "rest-of-table"> If you arrive early, you can focus the mobs and cleave the cannon before event timer runs out. Otherwise, focus the cannon before it fails </td>
				<td class = "rest-of-table"> Possible champ, Mob density+ </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 7 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Clear out the Awakened Inquest Lab</td>
				<td class = "rest-of-table"> Very quick event to kill a few mobs</td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> 2 Kournan Chests. Once per day, per character </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 8 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Collect shiny rocks for the beleguered farmer </td>
				<td class = "rest-of-table"> Decent gathering event, but takes 1+ minute of waiting to spawn the next event </td>
				<td class = "rest-of-table"></td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect the farmer while he hunts for the choya</td>
				<td class = "rest-of-table"> 3 waves of choya. Pre-event takes too long to get to this event </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 10 </td>
				<td class = "qty-event-number"> 5 </td>
				<td class = "rest-of-table"> Trample scarabs with your mount to contain the outbreak </td>
				<td class = "rest-of-table"> Not so great with a squad, but if you're solo or with a friend, very quick event. Use mounts to run over the scarabs. Beetle one-shots them </td>
				<td class = "rest-of-table"></td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Repurpose the golem </td>
				<td class = "rest-of-table"> 3 waves of Awakened. First two can upscale, third does not. Fake champ at the end  </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"></td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 12 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Champion Abomination </td>
				<td class = "rest-of-table"> Very annoying champion to fight. When he puts up his shield, any attack gets retaliated into 1-shot attacks. Usually wipes groups </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Safely escort the caravan from the ally camp to the farmlands </td>
				<td class = "rest-of-table"> Simple escort, but none of the mobs drop loot or EXP </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Stop the thieves from escaping the farmland with stolen supplies</td>
				<td class = "rest-of-table"> Same as above. No loot, no EXP </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> recover the supplies taken by Joko's loyalists</td>
				<td class = "rest-of-table"> Even worse than above. No loot, no exp </td>
				<td class = "rest-of-table">  </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Crazed Broodmother </td>
				<td class = "rest-of-table"> SUPER out of the way. You have to run far away and swim for a few minutes to spawn  </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 17 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect Apizmic Grounds from a choya attack </td>
				<td class = "rest-of-table"> Cute, but none of the mobs drop loot  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 18 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Retake Aplizmic Grounds from invasive choya </td>
				<td class = "rest-of-table"> None of the mobs drop loot  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 19 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect the thorn wall from the Awakened </td>
				<td class = "rest-of-table"> None of the mobs drop loot  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 20 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defend the thorn wall shapers while they repair the wall </td>
				<td class = "rest-of-table"> None of the mobs drop loot  </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>
		</table> <!-- End of events table -->

		<!-- Start of meta -->

		<div id = "scarab-plague" class = "page-header">
			<h1> Containing the Scarab Plague </h1>
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> Meta respawns around every 10 minutes after its last completion

				<br><br> Add picture of spare parts bar here </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<center><img class = "map-image-draconis-mons" title = "Events" src = "..\images\domain-of-kourna\domain-of-kourna-meta-events.jpg" style = "width: 30%;"></center>
			
		</div>
			
		<div class = "page-header">
			<div class = "small-description">
				<p1> This is a very quick meta and somewhat awkward with a large zerg. For example, event #1 are 3 Pylons that spawn at the same time. These Pylons do not scale and have a fixed HP (not a lot). Make sure to attack it once if you have a large zerg so everyone has a chance for credit.

				<br><br> The arrows are my personal routes for the Pylons. Any way works, I just prefer this way because it's close to the NPC where you can turn in the spare parts + close event #2

				<br><br> Once #1 has been completed and all the spare parts are collected, event #2 happens in all 3 locations. Instead of attacking the cannon, you have to defend it. None of the mobs drop exp or loot. The southeast location starts 20 seconds faster than the others.  </p1>
			</div>
		</div>

		<div class = "map-image-box">
			<center><img class = "map-image-draconis-mons" title = "Events" src = "..\images\domain-of-kourna\domain-of-kourna-meta-portal.jpg" style = "width: 30%;"></center>
		</div>

		<div class = "page-header">
			<div class = "small-description">
				<p1> After defending the cannons, meta event #3 will begin promptly. There is a portal west of the Allied Encampment Waypoint that leads you directly to the meta. It looks exactly like a mesmer portal. Why it's there? I have no idea..

				<br><br> The meta will make you defend 3 rally points. Each rally point completion will recieve chests so don't forget to pick them all up! 

				<br><br> The last event is to destroy a champion Inquest and a golem. The golem goes invulnerable every 25% and spawns orbs. Those orbs explode into poison fields that will destroy you. Kill them ASAP or cleave them when they spawn.

				</p1>
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
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Destroy the control pylons </td>
				<td class = "rest-of-table"> Detailed description above </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 2 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Secure the [location] Awakened Inquest cannon </td>
				<td class = "rest-of-table"> Detailed description above </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help your allies secure key positions in the Awakened Inquest facility </td>
				<td class = "rest-of-table"> Detailed description above </td>
				<td class = "rest-of-table"> Fake champs </td>
				<td class = "rest-of-table"> 4 large Kournan Chests, 2 Awakened Chests </td>
			</tr>

			<tr> 
				<td class = "meta-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> End the plague experiments </td>
				<td class = "rest-of-table"> Detailed description above </td>
				<td class = "rest-of-table"> 2 Guaranteed champs </td>
				<td class = "rest-of-table"> Boss chest, 1 large Kournan Chest, 1 Kournan Supply Cache, 4 Kournan Chests </td>
			</tr>

		</table>  <!-- End of meta event table --> 

		<!-- 
			HTML notation:
			<td> class = "[criteria]-bounty" 
		-->

		<!-- Start of Solo Farm section -->
		<div id = "solo-farm" class = "page-header">
			<h1> Solo Farms </h1>
		</div>

		<div class = "small-description">
			For all Solo Farms, is it worth noting a few things:
			<br> 1. It's <b>require at least tier 1 of the Karmic Empowerment</b> (obtained via Volatile Magic vendor). The reason is because it forces each mob to drop 1 Karmic Retribution, thus also forcing the mob to drop Volatile Magic.

			<br><br> 2. Diminishing returns starts at around 30 minutes, depending on how quickly you kill the mobs. If you start noticing that you are not obtaining any volatile magic from a mob, switch characters to refresh the farm.  

			<br><br>
			<b> Solo Farm: Kourna Inquests</b>
			<br> This farm consist of killing Inquests with a high power DPS build with high mobility. I personally switch from Power Necro and Power Soulbeast, but there are many others. 

			<br><br>
			<div>
				<img src = "..\images\domain-of-kourna\domain-of-kourna-inquests.jpg" style = "display: block; margin-left: auto; margin-right: auto; width: 40%;">
			</div>

			<br>
			<b> Solo Farm: Kourna Wildlife </b>
			<br> This farm consist of killing all wildlife that can drop Cuts of Quality Red Meat. This includes Hyenas, Sand Lions, Rock Gazelles, Shadhavars, and Drakes

			<br><br>
			<div>
				<img src = "..\images\domain-of-kourna\domain-of-kourna-wildlife.jpg" style = "display: block; margin-left: auto; margin-right: auto; width: 40%;">
			</div>

			<br>
			<b> Solo Farm: Kourna Front Line </b>
			<br> This farm consist of killing lots of Awakened mobs at the "Front Line" of Kourna. They spawn a lot and frequently in this particular area.

			<br><br>
			<div>
				<img src = "..\images\domain-of-kourna\domain-of-kourna-front-line.jpg" style = "display: block; margin-left: auto; margin-right: auto; width: 40%;">
			</div>

			<br>
			<b> Solo Farm: Kourna Choyas </b>
			<br> This farm consist of killing lots of Choyas. Though, this spot is notorious for having AFK farmers so..actually farming here may not be the best idea. 

			<br><br>
			<div>
				<img src = "..\images\domain-of-kourna\domain-of-kourna-choya.jpg" style = "display: block; margin-left: auto; margin-right: auto; width: 30%;">
			</div>	
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
