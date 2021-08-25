<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Experience </title>
</head>
<body>

	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div class = "page-box">
		<div class = "section-header">
			<h1>Experience</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "double-box">
			<div class = "left-side-box">

				<div onclick = "showBlock(1);" class = "inner-left-side-box">
					<img src = "../images/assets/icons/Mastery_Core.png">
				</div>

				<div onclick = "showBlock(2);" class = "inner-left-side-box">
					<img src = "../images/assets/icons/Mastery_Hot.png">
				</div>

				<div onclick = "showBlock(3);" class = "inner-left-side-box">
					<img src = "../images/assets/icons/Mastery_Pof.png">
				</div>

				<div onclick = "showBlock(4);" class = "inner-left-side-box">
					<img src = "../images/assets/icons/Mastery_Ibs.png">
				</div>
			</div>

			<div id = "main-info-box" class = "main-info-box">
				<!-- Default -->
				<div id = 'default-exp' class = "small-description" style = "display: block;">
					This guide is comprehensive list on how to gain <b>mastery EXP</b> quick and potentially <b>Spirit Shards</b> <img src = "../images/assets/icons/Spirit_Shard.png" style = "width: 25px;">. Each are ordered by what I believe are the most accessible and easiest, though also assuming you have masteries such as Skyscale or gliding completed. While the #1 options generally require Skyscale to get the easy other mastery EXP, there are options for each that can be obtained without it.  

					<br><br><b>To obtain the masteries in the first place</b>, Ayin has a great list of points with guides and videos <a href = "https://www.ayinmaiden.com/masterypoints" target = "_blank"><u>here</u></a>.

					<br><br><b>For a full list of EXP modifiers</b>, check out <a href = "https://wiki.guildwars2.com/wiki/Experience" target = "_blank"><u>Wiki's list</u></a>. Note: orbs will always be 2540 EXP, regardless of any modifiers. 

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(243,72,243);"> For All Masteries </h>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							
							Waypoints
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~500 + ~1200 bonus per mob
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Nearly Instant </span>
						</div>
						
					</div>

					<br><p class = "indent"> There is the option to kill any mobs that have not been killed in a long time. For example, if you go to a random waypoint that normally wouldn't have people and kill mobs, you could recieve bonus EXP on top of the base EXP. Below are pictures of me randomly going to a waypoint that I think is not somewhere common and finding mobs to kill. Left picture is with a red mob and the right is with a yellow mob. Either one works though yellow is most likey to have the bonus EXP as it is less likey to be focused by players, but are also less common to find. </p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/misc-general/exp-1.jpg" style = "width: 49%;">
						<img src = "../images/misc-general/exp-2.jpg" style = "width: 49%;">
					</div>



				</div> <!-- End of default -->

				<!-- Core -->
				<div id = 'core-exp' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(255, 97, 41);"> 1. Reality Rifts </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							
							<center><img src = "../images/assets/icons/Skyscale.png" style = "width: 30%; height: 30%;"></center>
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			2540 per orb
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ 5 mins </span>
						</div>
						
					</div>
					
					<b> About </b>
					<br><p class = "indent">Reality Rifts are trails of Volatile Magic (or Karma if in Icebrood Saga maps) orbs that grant 1-4 VM and 2540 EXP per. After unlocking a Skyscale, these Rifts become available once per day. There is a <b> limit of 250 orbs </b> per day for a total of potentially 635,000 EXP with very little time. For a full list of all the Rifts, check out the <a href = "https://wiki.guildwars2.com/wiki/Reality_Rift" target = "_blank"><u> wiki page</u></a>. Below is a compact list of Rifts that I think are easy and plentiful to hit the daily 250 cap.  </p>

					<br>
					<center>
						<input id = "core-rifts" type = "text" value = "SW 1 - [&BLoHAAA=] SW 2 - [&BH8HAAA=] Iron - [&BOcBAAA=] Diessa - [&BNoAAAA=] Blazeridge - [&BE8DAAA=] Timberline [&BEkCAAA=] Malchor's [&BLICAAA=] Southsun [&BNgGAAA=]"></input> <button onclick="copyText('core-rifts');">Copy Waypoints</button>

						<span class = "popup-text">Copied!</span>
					</center>
				
					<div class = "overflow-table">
						<table class = "exp">
							<tr>
								<th> Map </th>
								<th> Waypoint </th>
								<th> Directions </th>
								<th> # of Orbs </th>
								<th> EXP </th>
							</tr>
							<tr> 
								<td> Silverwastes 1 </td>
								<td> Drydock Grotto Waypoint <b>[&BLoHAAA=]</b> </td>
								<td> Fall below ship, almost to the ground </td>
								<td> 55 </td>
								<td> 139,700 </td>
							</tr>

							<tr> 
								<td> Silverwastes 2 </td>
								<td> Camp Resolve Waypoint <b>[&BH8HAAA=]</b> </td>
								<td> Top of the south exit of the camp </td>
								<td> 11 </td>
								<td> 27,940 </td>
							</tr>

							<tr> 
								<td> Iron Marches </td>
								<td> Village of Scalecatch Waypoint <b>[&BOcBAAA=]</b> </td>
								<td> Southwest from WP</td>
								<td> 40 </td>
								<td> 101,600 </td>
							</tr>

							<tr> 
								<td> Diessa Plateau </td>
								<td> Blasted Moors Waypoint <b>[&BNoAAAA=]</b> </td>
								<td> Southwest from WP </td>
								<td> 32 </td>
								<td> 81,280 </td>
							</tr>

							<tr> 
								<td> Blazeridge Steppes </td>
								<td> Gaster Gullet Waypoint <b>[&BE8DAAA=]</b> </td>
								<td> Southwest from WP, towards crystal </td>
								<td> 29 </td>
								<td> 73,660 </td>
							</tr>

							<tr> 
								<td> Timberline Falls </td>
								<td> Nonmoa Waypoint <b>[&BEkCAAA=]</b> </td>
								<td> Directly east from WP </td>
								<td> 30 </td>
								<td> 76,200 </td>
							</tr>

							<tr> 
								<td> Malchor's Leap </td>
								<td> Lights Waypoint <b>[&BLICAAA=]</b> </td>
								<td> Southeast from WP </td>
								<td> 31 </td>
								<td> 78,740 </td>
							</tr>

							<tr> 
								<td> Southsun Cove </td>
								<td> Owain's Refuge Waypoint <b>[&BNgGAAA=]</b> </td>
								<td> Northwest from WP, between cliffs </td>
								<td> 30 </td>
								<td> 76,200 </td>
							</tr>
						</table>
					</div>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 97, 41);"> 2. Silverwastes RIBA Farm </h>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							
							Organized Squad via LFG
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~26,670 per event
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Few mins per event </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">Even through 2021, Silverwaste RIBA farm continues to be extremely popular. Check the LFG tool under "Central Tyia Squads" for a RIBA farm. There are generally always at least one being ran by dedicated commanders or guilds. They are most active during the late afternoon through the late evenings (NA). 

					<br><br>
					To get the most out of your EXP, follow the simple rotation of the RIBA farm: <b>Red &#8594; Indigo &#8594; Blue &#8594; Amber</b>. A TLDR; of the farm is to follow the order of these camps when in a fresh map and until the meta. If you've joined a RIBA map mid-way, pay attention to the timers for the defenses of each fort. Red will always start first and finish last. Otherwise, while following the rotation, make sure to tag any other events that may occur such as Pact Escorts and Veterans for bonus EXP. </p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/silverwastes/event-1.jpg" style = "width: 49%;">
						<img src = "../images/silverwastes/event-2.jpg" style = "width: 49%;">
					</div>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 97, 41);"> 3. World Bosses </h>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							
							LFGing or Getting to a map on time
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~26,670 per event
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> Varies </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">These events are generally slower than other metas, but will always have people doing them. Most are easy and brain-dead and some can pack a couple events in one. Here are some examples of good world bosses for EXP: 

					<br> - Karka Queen
					<br> - Tequatl the Sunless
					<br> - Great Jungle Wurm
					<br> - Claw of Jormag 

					<br><br> To track each boss, check out the <a href = "https://wiki.guildwars2.com/wiki/Event_timers" target = "_blank"><u>Wiki timers</u></a>. 
					</p>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 97, 41);"> 4. Fractals </h>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							
							Decently experienced group
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~100,000+ per fractal
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Moderate </span> | <span> Varies between group/fractal/tier</span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">Doing general or daily fractals is a fantastic way to gain EXP. The only holdback is to either join a PUG group via LFG or to find guildies/friends to do them with you. With an experience group, this could be one of the best options for both EXP and loots. Depending on the fractal, one fractal may generate more EXP than another. An example of this could be Swampland vs. Sunqua CM. Swamp offers a crapton of mobs while Sunqua CM is only 1 boss (with partial for part 1 and full EXP for part 2). You can generate more mastery EXP but buying <a href = "https://wiki.guildwars2.com/wiki/Account_Augmentation#Fractal_Empowerment" target = "_blank"><u>Fractal Empowerment</u></a> in the fractal lobby.   

					<br><br> Note: While dungeons give decent EXP as well, they generally take longer than a decent fractal run. You'll also find an easier time finding a group via fractals than dungeons. 
					</p>


					
				</div> <!-- End of Core -->


				<!-- HoT -->
				<div id = 'hot-exp' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(19, 201, 54);"> 1. Unbound Magic Orbs </h>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							LS3 Maps, Advanced or Ley-line Gliding, Thermal Tubes
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			2540 EXP per orb
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Few mins </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">Throughout only LS3 maps, there are Unbound Magic orbs. Sometimes they are together in an easy trail and sometimes they are sparse. Each one will grant some Unbound Magic, but lots of easy EXP! There is a <b>daily cap of 250 orbs per day</b>. Below is a list of areas that are easy to get some!
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Unbound_Magic.png" style = "vertical-align: middle; width: 50px; margin-right: 15px;"> 
						Bloodstone Fen
					</div>

					<p class = "indent">Location #1 (left picture) - From the first waypoint, Soulkeeper's Airship Waypoint <b>[&BEsJAAA=]</b>, there is a trail at the end of the ship. Follow this trail to get about 15 orbs for a total of <b>38,100 EXP</b>. 
						<br><br>
						Location #2 (right picture) - Also from the first waypoint, on the left, there is an island you drop to. From where the bouncing mushroom is, fall there to see more trails of orbs. There will be 9 for a total of <b>22,860 EXP</b>.
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/bloodstone-fen/orb-1.jpg" style = "width: 49%;">
						<img src = "../images/bloodstone-fen/orb-2.jpg" style = "width: 49%;">
					</div>

					<br>
					<p class = "indent">Location #3 - Start from the top most floating island. There are 3 ways to get there. Either by the ley-line and Skyscaling to the top, using a series of bouncing mushrooms and following the flax farm, or take the updrafts (middle picture). To do this properly, make sure to wear the <b> Diving Goggles </b>. These will allow yourself to summon a portal at the end of the fall so you can come back up (bottom left picture). Follow the trail of orbs down until you reach the portal (bottom right picture).
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/bloodstone-fen/orb-3.jpg" style = "width: 49%;">
					</div>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/bloodstone-fen/orb-4.jpg" style = "width: 49%;">
						<img src = "../images/bloodstone-fen/orb-5.jpg" style = "width: 49%;">
					</div>

					<br>
					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Unbound_Magic.png" style = "vertical-align: middle; width: 50px; margin-right: 15px;"> 
						Ember Bay
					</div>

					<p class = "indent">Location #1 (left picture) - From Promontory Waypoint <b>[&BF8JAAA=]</b>, there are two ley-lines. Go to the one on the right first and take the ley-line back to get 6 quick orbs for a total of <b>15,240 EXP</b>. Then, on the ley-line across, there's another 6 for another <b>15,240 EXP</b>.
						<br><br>
						Location #2 (right picture) - While traveling on the ley-line, there's going to be a location filled with orbs all over the place. This is easy to do with a Skyscale, but you can also glide with updrafts (though more tedious). There are 24 orbs for a total of <b>60,960 EXP</b>.
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/ember-bay/orb-1.jpg" style = "width: 49%;">
						<img src = "../images/ember-bay/orb-2.jpg" style = "width: 49%;">
					</div>

					<br>
					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Unbound_Magic.png" style = "vertical-align: middle; width: 50px; margin-right: 15px;"> 
						Lake Doric
					</div>

					<p class = "indent">The location (left picture) is to the East of the map. There's a little cave at an area of a ritual that you can go into or you could Skyscale above. Once in the cave (right picture), there are a total of 22 orbs for a total of <b>55,880 EXP</b>.
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/lake-doric/orb-1.jpg" style = "width: 49%;">
						<img src = "../images/lake-doric/orb-2.jpg" style = "width: 49%;">
					</div>

					<br>
					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Unbound_Magic.png" style = "vertical-align: middle; width: 50px; margin-right: 15px;"> 
						Draconis Mons
					</div>

					<p class = "indent">Location #1 - From Mariner Landing Waypoint <b> [&BL0JAAA=]</b>, there is a thermal tube nearby. Take it to get 3 orbs while traveling. Once you land, there will be another thermal tube that takes you directly to another thermal tube, each having another 3 orbs for a total of <b> 22,860 EXP</b>.
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/draconis-mons/orb-1.jpg" style = "width: 49%;">
						<img src = "../images/draconis-mons/orb-2.jpg" style = "width: 49%;">
					</div>

					<br>
					<p class = "indent">Location #2 - From Ancient Hollow Waypoint <b> [&BNUJAAA=]</b>, head southwest to the edge of the land (left picture). There will be a ley-line that goes directly up with 7 orbs along the way (right picture). This is <b> 17,780 EXP</b>. Once at the top, head forward and slightly to the right. At the other end, there will be an area filled with 33 orbs floating in the area. You can use the updrafts, but a Skyscale would be best. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/draconis-mons/orb-3.jpg" style = "width: 49%;">
						<img src = "../images/draconis-mons/orb-4.jpg" style = "width: 49%;">
					</div>

					<br>
					<p class = "indent">Once at the top, head forward and slightly to the right (left picture). At the other end, there will be an area filled with 33 orbs floating in the area for a total of <b>83,820 EXP</b> (right picture). You can use the updrafts, but a Skyscale would be best. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/draconis-mons/orb-5.jpg" style = "width: 49%;">
						<img src = "../images/draconis-mons/orb-6.jpg" style = "width: 49%;">
					</div>

					
					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(19, 201, 54);"> 2. Adventures </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							Some may need events to be completed beforehand
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~101,346 per 
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ 1-5 mins each </span>
						</div>
						
					</div>
					
					<b> About </b>
					<br><p class = "indent"> Adventures are scattered throughout each HoT map except Dragon's Stand that can offer very quick EXP, especially if you've mastered them. Some require very little skill/learning while some are tedious. The list below are Adventures that I think require little effort, but can grant great EXP. If you haven't done these, each can offer 2 masteries if you achieve gold status! </p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Verdant Brink | Flying Circus
					</div>

					<p class = "indent"><b>Directions: </b> Head to Mellaggan's Valor Waypoint <b> [&BNUHAAA=] </b>, head northeast and you'll see a Bouncing Mushroom on the edge of the area. The Adventure will be to the right after you jump.  

						<br><br><b> What to do: </b>Glide to areas that have glowing rings around them. This is similar to doing a mount race, but with gliding. There will be <span style = "color: rgb(230, 133, 17);">orange</span> and <span style = "color: purple;"> purple </span> objects along the way with their own bonuses to the run. Grab as many as possible to get your Adventure done fast!

						<br><br> <span style = "color: rgb(230, 133, 17);"><b>Orange object: </b></span> Glide through it to gain burst gliding speeds

						<br> <span style = "color: purple;"><b>Purple object: </b></span> Run past to gain shadowstep
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Verdant Brink | Salvage Pit
					</div>

					<p class = "indent"><b>Directions: </b> Head to Shrouded Ruins Waypoint <b> [&BAEIAAA=] </b>, head directly east.

						<br><br><b> What to do: </b>You will need to grab every salvage pile on the ground, but to get gold you need to go fast. When immediately starting, grab one and head in a counterclockwise direction. Try to stay out of combat and grab any Speedboost Mushrooms. Avoid any <span style = "color: rgb(128, 32, 32);"> red </span> circles. 

						<br><br> <span style = "color: rgb(128, 32, 32);"><b>Small red circles: </b></span> Some damage | Avoid by continously running
						<br> <span style = "color: rgb(128, 32, 32);"><b>Large red circles: </b></span> Knockback | Avoid by dodging 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/verdant-brink/adventure-1.jpg" style = "width: 49%;">
						<img src = "../images/verdant-brink/adventure-2.jpg" style = "width: 49%;">
					</div>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Auric Basin | On Wings of Gold
					</div>

					<p class = "indent"><b>Directions: </b> Head to Northwatch Waypoint <b> [&BN0HAAA=] </b> and head south into Tarir. Instead of falling down, glide/mount to the east and up until you hit the Adventure. It will be in an opening on the wall. 

						<br><br><b> What to do: </b> To get gold, you'll need to get 30 orbs and turn them in. When you start, there will be a trail immediately from the starting area. Follow that, then head to the left where there will be series of updrafts that lead all the way to the top. Once at the top, there will be 5 orbs in a straight vertically line. Drop down from that and that takes care of the majority of the orbs. At this point, continue to grab a few more while staying afloat with updrafts. 

						<br><br> 
						Note: You will have a stacking buff on your bar to show you how much you've earned. Once it hits 30, go ahead and turn it in (shiny looking device)! 

						<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/auric-basin/adventure-1.jpg" style = "width: 49%;">
						<img src = "../images/auric-basin/adventure-2.jpg" style = "width: 49%;">
					</div>
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Tangled Depths | Drone Race
					</div>

					<p class = "indent"><b>Directions: </b> Head to SCAR Camp Waypoint <b> [&BAAIAAA=] </b>. Head towards the POI at [&BNEHAAA=] and the Adventure will be to the west. This Adventure is only active once <b>all the SCAR outpost events are completed</b>.

						<br><br><b> What to do: </b> You'll have three skills: 
						<br> #1 - Makes you invulnerable
						<br> #2 - Swiftness
						<br> #3 - Dash forward. This can give you a leap on ramps

						<br><br> 
						The trick to getting gold is to use your dash right when your character hits the ramp towards the other side. Always try to aim at a spot where the other side has more space to land. 

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/tangled-depths/adventure-1.jpg" style = "width: 49%;">
					</div>
					</p>


					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(19, 201, 54);"> 3. Metas & Event Trains </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							May require LFGing before events
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~26,670 per event 
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Varies on the meta/train </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent"> HoT maps are still extremely active in terms of events and metas. This is due to the constant callback to return from crafting legendaries, omega loots, and achievements. Below is a list of metas that are extremely rich in EXP and are most accessible. </p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/HoT.png" style = "vertical-align: middle; width: 100px;"> 
						Auric Basin, Tangled Depths, Dragon's Stand | Octovine, Chak Gerent, Mount of Mordremoth
					</div>

					<p class = "indent"> All metas are frequently being done on a daily basis. Always check LFG early to get into an organized map for a quick kill! If you're looking for a Dragon's Stand map, while not a quick kill compared to the other two metas, an organized map could breeze through events quickly. 
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Living_World_Season_3_Logo.png" style = "vertical-align: middle; width: 100px;"> 
						Bitterfrost Frontier | Events/Meta
					</div>

					<p class = "indent"> Bitterfrost is not only a great solo gold farm, but also a great solo EXP farm! The downside is that <b>diminishing returns hits fairly quickly</b>. Though, you could get 5+ events in within minutes for the full 26,670 base EXP with low effort. Look for defense symbols with a shield icon on the mini map (left picture). Ignore the events with the gear symbol as those events do not give EXP (right picture). 

						<br><br> The closer the map is to the meta, the more frequent the defense events will spawn. Once the meta is up, both defenses and champion events will spawn on top of each other for easy and quick events simutanously! 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/bitterfrost-frontier/exp-1.jpg" style = "width: 49%;">
						<img src = "../images/bitterfrost-frontier/exp-2.jpg" style = "width: 49%;">
					</div>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/HoT.png" style = "vertical-align: middle; width: 100px;"> 
						HoT Maps | Auric Oasis [AO] HoT Weekly Meta Train
					</div>

					<p class = "indent"> If you're in NA, [AO] provides the most consistant and quick HoT farms out there. They run on weekdays and do Auric Basin, Tangled Depths, and Dragon's Stand with Verdant Brink on Wednesdays. Their runs begin at 0:00 UTC (reset) or 7:00 PM EST/8:00 PM EDT. Join their <a href = "https://discord.gg/EeX4ANK" target = "_blank"><u>discord here</u></a>. 
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/HoT.png" style = "vertical-align: middle; width: 100px;"> 
						Verdant Brink | Stonehead Farm
					</div>

					<p class = "indent"> When Verdant Brink is Shiny Bauble week, this farm is extremely active for it's laziness and easiness. After completing the Pale Reaver Outpost events, a series of Veteran Stoneheads spawn extremely frequently at Dry Step Mesas, south of Shipwreck Peak Waypoint <b>[&BN4HAAA=]</b>. There are no diminishing returns for EXP for this event farm and events finish within a few seconds after spawning. With that said, I do NOT advise AFK farming on this due to these <a href = "https://en-forum.guildwars2.com/discussion/25253/finally-is-the-afk-farm-ok-or-not" target = "_blank"><u>rules</u></a> from ArenaNet. 
					</p>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(19, 201, 54);"> 4. Raids </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							Raid Masteries/Ley-line Gliding
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~200,025 per boss
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Difficult </span> | <span> ~ Varies on the skill of the group </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">While this method isn't the most farmable EXP, if you're an experienced raider or in a community that frequently raids weekly this could be decent. If you're learning how to do raids or inexperience, I do not recommend this if you're aiming for EXP. At that point, aim for learning the mechanics, roles, and all the raid things. 

						<br><br> For every week, there are raids that grant Call of the Mists <img src = "../images/assets/icons/Call_of_the_Mists.png" style = "width: 25px;"> which gives raids bonus loot including an additional <b>~146,527 EXP</b>. 
					</p>

					
				</div> <!-- End of HoT -->



				<!-- PoF -->
				<div id = 'pof-exp' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(255, 47, 103);"> 1. Volatile Magic Orbs </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							<center><img src = "../images/assets/icons/Skyscale.png" style = "width: 30%; height: 30%;"><img src = "../images/assets/icons/Skimmer.png" style = "width: 30%; height: 30%;"></center>
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			2540 per orb
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Few mins </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent"> Similar to Reality Rifts, these orbs appear in the sky be default. There is still a limit of 250 orbs per day, including Reality Rift orbs. Both Jahai and Thunderhead can be enough to get 250 in a few minutes with pretty easy trails! </p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Unbound_Magic.png" style = "vertical-align: middle; width: 50px; margin-right: 15px;"> 
						Jahai Bluffs
					</div>

					<p class = "indent"> Starting at Yatendi Village Waypoint <b>[&BH4LAAA=]</b>, head to Shattered Cliffs which is southeast. Stay at the high points of the cliffs as there will be floating Volatile Magic orbs near the edge of the map. While on this trail, there will be 3 parts where you could either go left/right. When you cross these points, the order is right, left, right. There are a total of 149 orbs in this route for a total of <b>378,460 EXP</b>. </p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/jahai-bluffs/orb-1.jpg" style = "width: 49%;">
					</div>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/Unbound_Magic.png" style = "vertical-align: middle; width: 50px; margin-right: 15px;"> 
						Thunderhead Peaks
					</div>

					<p class = "indent"> Location #1  (left picture) - Starting at Moorage Waypoint <b>[&BLoLAAA=]</b>, head west towards the POI Dragon's Claw [&BLcLAAA=]. There will be a ledge slightly SE from it that will have a trail of orbs. You can follow this on your Skimmer to grab them all. There is a total of 25 orbs (excluding 1..you'll see) for a total of <b>63,500 EXP</b>. 

						<br><br>
						Location #2  (right picture) - Starting at Revolution's Heart Waypoint <b>[&BKYLAAA=]</b> or from location #1, head slightly north to the end of the water. That will be the starting point for both Volatile Magic trails. This one does not require a Skyscale and instead requires a <b>Skimmer</b>. Follow the orbs on the water. There are a total of 51 orbs for a total of <b>129,540 EXP</b>. 

						<br><br>
						Location #3 (middle picture - Same starting location as $1. Instead of following the water, there is a trail of orbs in the air that starts on a building on the side. Follow the  orbs upward. Eventually you'll reach a cave. Head into the cave, then to the left when you get into an intersection. There will be more orbs going up. Both of these total to 98 orbs for a total of <b>248,920 EXP</b>. Though, if you've followed the paths above, you'll cap before getting them all. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: space-between;">
						<img src = "../images/thunderhead-peaks/orb-3.jpg" style = "width: 52%;">
						<img src = "../images/thunderhead-peaks/orb-1.jpg" style = "width: 42%;">
					</div>
					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/thunderhead-peaks/orb-2.jpg" style = "width: 40%;">
					</div>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 47, 103);"> 2. Adventures </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							All mastery for:
							<center><img src = "../images/assets/icons/Griffon.png" style = "width: 30%; height: 30%;"></center>
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~101,346 per Adventure
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Difficult </span> | <span> ~ Few mins </span>
						</div>

					</div>

					<b> About </b>
					<br><p class = "indent"> Throughout both PoF and LS4 maps, there are lots of Griffon Adventures available. Other adventures take too long as they require you to traverse through large sections of a map. Griffons, at least, are extremely fast, but also extremely difficult if you're not use to the Griffon.

					<br><br> The #1 tip of doing these challenges is to remember to <b>hold/press your space bar</b> while diving to gain insane speeds. Without this, you'll surely fail every Griffon Adventure. 

					<br><br> Below is a list of all the Griffon Adventures that I think are much easier to do than others. 
					</p>

					<br>
					<center>
						<input id = "pof-adventures" type = "text" value = "Above [&BEAKAAA=], SW of [&BJ0KAAA=], SE from [&BGcKAAA=], West from [&BMEKAAA=], South from [&BJkLAAA=], South from [&BH4LAAA=]"><button onclick="copyText('pof-adventures');">Copy Waypoints</button>

						<span class = "popup-text">Copied!</span>
					</center>

					<div class = "overflow-table">
						<table class = "exp">
							<tr>
								<th> Map </th>
								<th> Waypoint </th>
								<th> Directions </th>
							</tr>
							<tr> 
								<td> Crystal Oasis </td>
								<td> Temple of Kormir Waypoint <b>[&BEAKAAA=]</b> </td>
								<td> Head above the temple </td>
							</tr>
							<tr> 
								<td> Desert Highlands </td>
								<td>  Highjump Waypoint <b>[&BJ0KAAA=]</b> </td>
								<td> Southwest </td>
							</tr>
							<tr> 
								<td> Elon Riverlands </td>
								<td>  Skimmer Ranch Waypoint <b>[&BGcKAAA=]</b> </td>
								<td> Head to Vulture Drifts (SE) to head up</td>
							</tr>
							<tr> 
								<td> Desolation </td>
								<td>  Lair of the Forgotton Waypoint <b>[&BMEKAAA=]</b> </td>
								<td> Head west and up near Zayan Gate [&BBwKAAA=]</td>
							</tr>
							<tr> 
								<td> Jahai Bluffs 1 </td>
								<td>  Reclaimed Chantry Waypoint <b>[&BJkLAAA=]</b> </td>
								<td> Head south to the Fortress of Jahai [&BHELAAA=]. Top of a support</td>
							</tr>
							<tr> 
								<td> Jahai Bluffs 2 </td>
								<td> Yatendi Village Waypoint <b>[&BH4LAAA=]</b> </td>
								<td> Head south to Kodonur Temple [&BIkLAAA=]. Head up</td>
							</tr>

						</table>
					</div>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 47, 103);"> 3. Meta Trains </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							PoF/LS4 maps, LFG for squad
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~26,670 per event
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Varies </span>
						</div>

					</div>

					<b> About </b>
					<br><p class = "indent"> There are generally two types of event trains: PoF or LS4. LS4 meta trains are the most common as they happen at least once a day, sometimes multiple. As for PoF, meta trains are not as common, but individual metas are done on a daily basis. 
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/PoF.png" style = "vertical-align: middle; width: 100px;"> 
						LS4 Meta Trains | Various Guilds
					</div>

					<p class = "indent">This train is advertised every time at Overflow Trading Company's <a href = "https://discord.gg/7tWwz499rX" target = "_blank"><u>discord</u></a>. Join their public discord to get notified when they will do their trains! Commanders generally post them about 30 minutes before it begins.  
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/PoF.png" style = "vertical-align: middle; width: 100px;"> 
						Dragonfall | Various Guilds/Commanders
					</div>

					<p class = "indent">Generally you could find an LFG of this train during the afternoons and evenings of everyday. In my experience, I've had decent commanders that seem to know what they're doing. I would recommend to make sure to follow the commander as tight as possible. Most like to do a "tag-and-go" method where you tag an event and move on. This can be difficult for those that are used to slower paced trains as this map is mostly about getting as many events in so you can get as many keys. With that, there are a lot of events needing to complete to get to the meta so you'll find yourself with lots of EXP! 
					</p>

					<br>
					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/PoF.png" style = "vertical-align: middle; width: 100px;"> 
						PoF Meta Trains | Auric Oasis [AO] & Individual LFGs
					</div>

					<p class = "indent"> Every Friday at 3:15 UTC (10:15 PM EST/11:15 PM EDT) [AO] hosts a train going from Path of Ascension &#8594; Casino Blitz &#8594; Serpents' Ire &#8594; Maw of Torment. Join their <a href = "https://discord.gg/EeX4ANK" target = "_blank"><u>discord here</u></a>. Otherwise, Casino Blitz generally has a squad on LFG almost every time that meta is up. It's a very easy meta to gain EXP. The more Casino Coins you gather, the more you can consume to gain mastery EXP as well. 
					</p>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 47, 103);"> 4. Raids </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							Full Raptor, Raid Masteries, Ley-line Gliding
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~200,025 per boss
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Difficult </span> | <span> ~ Varies on the skill of the group </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">While this method isn't the most farmable EXP, if you're an experienced raider or in a community that frequently raids weekly this could be decent. If you're learning how to do raids or inexperience, I do not recommend this if you're aiming for EXP. At that point, aim for learning the mechanics, roles, and all the raid things. 

						<br><br> For every week, there are raids that grant Call of the Mists <img src = "../images/assets/icons/Call_of_the_Mists.png" style = "width: 25px;"> which gives raids bonus loot including an additional <b>~146,527 EXP</b>. 
					</p>

				</div> <!-- End of PoF -->

				<!-- IBS -->
				<div id = 'ibs-exp' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(156, 235, 255);"> 1. Reality Rifts </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							<center><img src = "../images/assets/icons/Skyscale.png" style = "width: 30%; height: 30%;"></center>
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			2540 per orb
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Few mins </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">Reality Rifts are trails of Volatile Magic (or Karma if in Icebrood Saga maps) orbs that grant 1-4 VM and 2540 EXP per. After unlocking a Skyscale, these Rifts become available once per day. There is a <b> limit of 250 orbs </b> per day for a total of potentially 635,000 EXP with very little time. For a full list of all the Rifts, check out the <a href = "https://wiki.guildwars2.com/wiki/Reality_Rift" target = "_blank"><u> wiki page</u></a>. Below is a compact list of Rifts that I think are easy, but it's not enough to hit the 250 cap. Other rifts in IBS are a lot more tedious to get. 

						<br><br> Below is a list of easy rifts. In Drizzlewood, make sure to use the dash skill of Skyscale while gathering orbs. This will prevent you from taking damage from snipers. 
					</p>

					<br>

					
					<center>
						<input id = "ibs-rifts" type = "text" value = "N of [&BCcMAAA=], NE of [&BCIMAAA=], NW of [&BCsMAAA=], Above [&BDkMAAA=], W [&BDUMAAA=], N of [&BHIMAAA=], SE and down from [&BHcMAAA=], Fly E from [&BHUMAAA=], Fly N from [&BHUMAAA=]"></input> <button onclick="copyText('ibs-rifts');">Copy Waypoints</button>

						<span class = "popup-text">Copied!</span>
					</center>


					<div class = "overflow-table">
						<table class = "exp">
							<tr>
								<th> Map </th>
								<th> Waypoint </th>
								<th> Directions </th>
								<th> # of Orbs </th>
								<th> EXP </th>
							</tr>
							<!--<tr> 
								<td> Grothmar Valley </td>
								<td> Wardowns Waypoint <b>[&BPgLAAA=]</b> </td>
								<td> E from waypoint to [&BP4LAAA=] </td>
								<td> 57 </td>
								<td> 144,780 </td>
							</tr> -->
							<tr> 
								<td> Bjora Marches 1 </td>
								<td> Jora's Keep Waypoint <b>[&BCcMAAA=]</b> </td>
								<td> Near the top of the gates </td>
								<td> 20 </td>
								<td> 50,800 </td>
							</tr>

							<tr> 
								<td> Bjora Marches 2 </td>
								<td> Jora's Keep Waypoint <b>[&BCcMAAA=]</b> </td>
								<td> NE of [&BCIMAAA=] </td>
								<td> 18 </td>
								<td> 45,720 </td>
							</tr>

							<tr> 
								<td> Bjora Marches 3 </td>
								<td> Jora's Keep Waypoint <b>[&BH8HAAA=]</b> </td>
								<td> Northwest of [&BCsMAAA=] </td>
								<td> 15 </td>
								<td> 38,100 </td>
							</tr>

							<tr> 
								<td> Bjora Marches 4 </td>
								<td> Still Waters Speaking Waypoint <b>[&BDkMAAA=]</b> </td>
								<td> Above the WP </td>
								<td> 13 </td>
								<td> 33,020 </td>
							</tr>

							<tr> 
								<td> Bjora Marches 5 </td>
								<td> Still Waters Speaking Waypoint <b>[&BDkMAAA=]</b> </td>
								<td> W of Kodan Shipwreck [&BDUMAAA=] </td>
								<td> 32 </td>
								<td> 81,280 </td>
							</tr>

							<tr> 
								<td> Drizzlewood Coast 1 </td>
								<td> Forward Camp Waypoint <b>[&BHIMAAA=]</b> </td>
								<td> North of WP, SE of [&BG0MAAA=] </td>
								<td> 31 </td>
								<td> 78,740 </td>
							</tr>

							<tr> 
								<td> Drizzlewood Coast 2</td>
								<td> Parachute from <b>[&BHUMAAA=]</b> </td>
								<td> SE and down from [&BHcMAAA=] </td>
								<td> 25 </td>
								<td> 63,500 </td>
							</tr>

							<tr> 
								<td> Drizzlewood Coast 3</td>
								<td> Parachute from <b>[&BHUMAAA=]</b> </td>
								<td> Directly E. Above the E-most Vista </td>
								<td> 26 </td>
								<td> 66,040 </td>
							</tr>

							<tr> 
								<td> Drizzlewood Coast 4</td>
								<td> Parachute from <b>[&BHUMAAA=]</b> </td>
								<td> Next to Vista, north of [&BHUMAAA=] </td>
								<td> 27 </td>
								<td> 68,580 </td>
							</tr>
						</table>
					</div>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(156, 235, 255);"> 2. Adventures </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							<center><img src = "../images/assets/icons/Skyscale.png" style = "width: 30%; height: 30%;"><img src = "../images/assets/icons/Griffon.png" style = "width: 30%; height: 30%;"><img src = "../images/assets/icons/Skimmer.png" style = "width: 30%; height: 30%;"></center>(for one of the Adventures). Skyscale/Griffon preferred to travel to other Adventures
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~101,346 per Adventure
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Few mins </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">The Adventures listed are fairly easy. The only difficult part is traveling through the Drizzlewood ones, as they are in high places and surrounded by snipers. 
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Drizzlewood Coast | Flight of the Eagle Spirit 
					</div>

					<p class = "indent"><b>Directions: </b> There's an <img src = "../images/assets/icons/Airdrop.png"> Airdrop symbol east of Forward Camp Waypoint <b>[&BHIMAAA=]</b>. You'll need 25 War Supplies <img src = "../images/assets/icons/War_Supplies.png" style = "width: 25px; "> to travel. Once you get parachuted, use the Griffon to glide directly east, past Frostvein Dominion Camp [&BH4MAAA=] and up the mountain. 

						<br><br><b> What to do: </b>You'll be a birb and follow the birb. Very very simple Adventure and easy to not get gold. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/drizzlewood-coast/adventure-1.jpg" style = "width: 50%;">
					</div>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Drizzlewood Coast | Arena of the Wolverine
					</div>

					<p class = "indent"><b>Directions: </b> If you're at the Adventure above, Griffon slightly southwest from it. Otherwise, there's an <img src = "../images/assets/icons/Airdrop.png"> Airdrop symbol east of Forward Camp Waypoint <b>[&BHIMAAA=]</b>. You'll need 25 War Supplies <img src = "../images/assets/icons/War_Supplies.png" style = "width: 25px; "> to travel. Once you get parachuted, use the Griffon to glide directly east, past Archstone Dominon Camp [&BG8MAAA=] and up the mountain. 

						<br><br><b> What to do: </b>The faster you DPS the boss, the faster you can get gold. There's a very long timer on this Adventure, which makes this very easy if you have any DPS build. 
					</p>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Grothmar Valley | Skyscale Trial
					</div>

					<p class = "indent"><b>Directions: </b> Head to Dalada Forest Waypoint <b> [&BA4MAAA=] </b>, head southeast towards the POI Priory Research Station [&BPELAAA=].

						<br><br><b> What to do: </b>There are orbs throughout the lake, with the majority of them in a line/pattern. There are a 2 out of place near the surface. When you start, grab the orb that immediately in front, then Skyscale quickly to the one orb on the surface to the left. Then, go back and start following the orb path. I highly advice to use the Skyscale dash to do the challenge quickly. 

						<br><br> For the other out of place orb, get it at the end of the trail. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/grothmar-valley/adventure-1.jpg" style = "width: 55%;">
					</div>

					<div style = "margin: 10px; font-weight: bold;">
						<img src = "../images/assets/icons/Adventure.png" style = "vertical-align: middle; width: 100px;"> 
						Grothmar Valley | Crater Circuit
					</div>

					<p class = "indent"><b>Directions: </b> Head to Dalada Forest Waypoint <b> [&BA4MAAA=] </b>, head southeast the POI Priory Research Station [&BPELAAA=]. Then, head southwest from that POI. 

						<br><br><b> What to do: </b>This is a simple Skimmer race, but added as an Adventure. To hit the gold status, use the Special Action to gain speed as much as possible. Always try to edge each circle to maximize turns. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/grothmar-valley/adventure-2.jpg" style = "width: 55%;">
					</div>

					

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(156, 235, 255);"> 3. Drizzlewood Coast </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							Access to Drizzlewood
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~26,670 per event
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Varies </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">Drizzlewood Coast is one of the best farms in the game. Because of this, it is one of the more active maps that you may find on the LFG frequently. There are a few ways you could get EXP in this map: 

						<br><br> Method #1 - Following the commander. As obvious as this one is, a Drizzlewood commander will generally focus on progressing the map as fast as possible. They may move a lot, but that's because they are trying to get as many necessary events completed to get to the final meta. Stick with a commander with an active map and you'll get your EXP. 

						<br><br> Method #2 - South camp caravan escorts. If the south part of the map is still progressing to the meta, then caravan escorts will continously spawn via Umbral Grotto at Base Camp Waypoint <b>[&BGQMAAA=]</b>. Whether your map is actively progressing or not, it is best to at least have the Vloxen Mine captured (bottom left-most camp). This is the shortest caravan escort route and the Vloxen Mine events can be done solo or with a small group. 

						<br><br> Rule of thumb: Caravan escorts respawn every <b>30 seconds after completion</b> (from Umbral Grotto) and camp events respawn every <b>1 minute after completion</b>. If you're map has Petraj Overlook (bottom right-most camp) captured, you could tag two caravans and/or do both camp events. 
					</p>

					<br>
					<div style = "display: flex; align-items: center; justify-content: center;">
						<img src = "../images/drizzlewood-coast/caravans.jpg" style = "width: 55%;">
					</div>

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(156, 235, 255);"> 4. Dragon Response Missions (DRMs) </h>
					<br>

					<div class = "three-boxes">
						<div> 
							<h1> Requirements </h1>
							Access to Eye of the North
						</div>

						<div> 
							<h1> Potential EXP </h1>
				 			~100,000+ per instance
						</div>

						<div> 
							<h1> Effort | Time </h1>
							<span> Easy </span> | <span> ~ Varies </span>
						</div>
						
					</div>

					<b> About </b>
					<br><p class = "indent">Depending on the Dragon Response Mission and your group (or solo) comp, it could be done fairly quickly and easily or somewhat rough. Each DRM is set at a similar pace of completing pre-events for 3-5 minutes. Afterwards, there's generally an escort and a final boss. There are a lot of individual mobs that can be farmed for EXP and the final instance gives the 100,000 EXP. 
					</p>

				</div> <!-- End of IBS -->

			</div> <!-- End of main box --> 

		</div>
	</div>


	<script> 

		function showBlock(num){
			var infoBox = document.getElementById('main-info-box').children;

			for (i = 0; i < infoBox.length; i++){
				infoBox[i].style.display = 'none';
				console.log(infoBox[i]);
			}

			infoBox[num].style.display = "block";
		}

	</script>
	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>

</body>
</html>