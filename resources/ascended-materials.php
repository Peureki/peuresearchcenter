<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php 
		include('../config.php');
	?>
	<title> Ascended Materials </title>
</head>
<body>

	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php
		include('../nav.php');
	?>


	<div class = "page-box">
		<div class = "section-header">
			<h1>Ascended Materials</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		
		<div class = "section-header-space"></div>
		<div class = "double-box">
			<div class = "left-side-box">

				<div onclick = "showMaterial(1);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">
				</div>

				<div onclick = "showMaterial(2);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Dragonite_Ore.png">
				</div>

				<div onclick = "showMaterial(3);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Empyreal_Fragment.png">
				</div>

				<div onclick = "showMaterial(4);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Bottle_of_Airship_Oil.png">
				</div>

				<div onclick = "showMaterial(5);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Pile_of_Auric_Dust.png">
				</div>

				<div onclick = "showMaterial(6);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Ley_Line_Spark.png">
				</div>

				<div onclick = "showMaterial(7);" class = "inner-left-side-box">
					<img src = "../images/assets/items/Crystalline_Ore.png">
				</div>
			</div>

			<style>
				.main-info-box img{
					margin-left: 3px;
					margin-right: 3px;
					width: 30px;
					height: 30px;
					vertical-align: middle;
					display: inline-block;
				}
			</style>

			<div id = "main-info-box" class = "main-info-box">
				<!-- Default Box -->
				<div class = "small-description">
					In this page, you'll find a list of ascended materials and how to get them. Each may or may not have different methods or when is the best time to get them. 
					
				</div> <!-- End of default box -->

				<!-- Bloodstone Dust -->
				<div id = 'bloodstone-dust' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(206, 73, 24);"> 1. Champion Bags </h>
					<br>
					<br><p class = "indent">Make sure to open the bags at level 80. For every champion bag, there is about a 500% drop rate to obtain 1. So, for every bag, you could expect around 5 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">. Opening on a lower level character will not grant you any dust. Champion bags can be easily obtained by attending metas and trains. Examples: LS4 trains, Silverwastes, Dragonfall, Heart of Thorn metas, etc.</p> 

					<br><br>
					<h class = "bookmark-header" style = "background-color: rgb(206, 73, 24);"> 2. Fractal Encryptions </h>
					<br>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Fractal_Encryption_Key.png">Fractal Encryption Key. Obtained by doing fractal dailies or via fractal vendor in the fractal lobby.</p>
					
					<br><p class = "indent">Either by doing fractals and looting them or buying it from the TP, these boxes offer an almost guaranteed chance to drop either 15 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">, <img src = "../images/assets/items/Empyreal_Fragment.png">, or <img src = "../images/assets/items/Dragonite_Ore.png">. </p>

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(206, 73, 24);"> 3. Gathering </h>
					<br><br>
					<p class = "indent"> In LS3 and LS4 maps, there are nodes that can generate some <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">Bloodstone Dust per strikes. 
					<br> Bloodstone Fen - <img src = "../images/assets/nodes/Blood_Ruby.png">Blood Rubies 
					<br> Lake Doric - <img src = "../images/assets/nodes/Jade_Shard.png">Jade Fragments 

					<br><br> For each strike, the average rate is about 2 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">. There is an account limit to gathering only 50 nodes per day. 
					</p>

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(206, 73, 24);"> 4. Chests </h>
					<br><br>
					Below are a list of chests that I rate from the most accessible/best amount of <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">per chest to the least. 

					<br><br><b> A. Silverwastes - Lost Bandit Chest </b>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Silverwastes_Shovel.png">Silverwastes Shovel (to find them) and <img src = "../images/assets/items/Lost_Bandit_Key.png">Bandit Keys (to open). Can obtain via vendor/events</p>
					<br><p class = "indent">Silverwaste is an extremely popular ongoing farm. Always check the LFG under Central Tyria Squads for groups. Either by following a train or having an excess amount of <img src = "../images/assets/items/Silverwastes_Shovel.png">Shovels, you can gather Lost Bandit Chests throughout the area. They have a low respawn rate so you could keep looping around the map and keep gatering chests. Rather than the chest itself, it gives a guaranteed <img src = "../images/assets/items/Embroidered_Coin_Purse.png">champion bag, which will will give you an average of 5 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">.</p>

					<br> <b>B. Verdant Brink - Airship Cargo</b>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Pact_Crowbar.png">Pact Crowbars. Can only obtain via Day events</p>
					<br><p class = "indent">During the day, Airship Cargo are located throughout the entire map, but can only appear after progress has been made for an outpost. If the outpost is completely done the symbol will turn from <img src = "../images/assets/items/Outpost_Inactive.png">&#x2192;<img src = "../images/assets/items/Outpost_Active.png">, then Airship Cargo will be placed in that area. </p>
					<br><p class = "indent">During the night, Airship Cargo are still throughout the map if the day events were completed, but can spawn more in the air (looted as Recovered Pact Supplies) if a Night Boss has been defeated. They will spawn in the area around the boss's defeat. </p>

					<br><p class = "indent">In addition, each Airship Cargo has a good chance to drop <img src = "../images/assets/items/Heirloom_Seed_Pouch.png">1-2 champion bags, which drop about 5 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">.</p>

					<br><p class = "indent">Below is a timer that indicates when a good time would be to hop in and hoard some chests. A "good time" to loot the chests are assuming an hour after Day has begun and into the Night meta. A "bad time" is when the events reset and the Outposts are just starting to progress during the Day. </p>

					<!-- VB chest time -->
					<div id = "box-0" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-0"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-0" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-0"></span> &#x2192; <span id = "full-timer-next-0"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of VB chest time -->

					<br> <b>C. Auric Basin - Exalted Chests (of all grades)</b>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Exalted_Key.png">Exalted Keys. Can only obtain via Pylon events and from NPC vendors</p>
					<br><p class = "indent">The time before and sometime after a meta, completing Pylon events will award several Exalted Chests (lowest grade). On the mini map, similarily to VB/TD's outpost icons <img src = "../images/assets/items/Exalted_Pylon_Inactive.png">&#x2192;<img src = "../images/assets/items/Exalted_Pylon_Active.png">, look for the orange symbol.</p>
					<br><p class = "indent">After completing the meta, you will be granted rooms full of Exalted Chests of all grades. The meta is generally done every day at every hour and can be done in about 5-10 minutes.</p>

					<br><p class = "indent">While each chest does not guarantee a <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">, there is a good chance to recieve a <img src = "../images/assets/items/Heirloom_Seed_Pouch.png">champion bag. That will give around 5 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png"> per bag. </p>

					<br><p class = "indent">Below is a timer that indicates when a good time would be to hop in and hoard some chests. A "good time" to loot the chests are assuming an hour after Pylons has begun and into the Octovine meta. A "bad time" is when the events reset and the Pylons are just starting to progress. It is good to note that it is wise to join a map before it fills before meta for a better chance of a pre-cleared Pylon map rather than a fresh meta map. </p>

					<!-- AB chest time -->
					<div id = "box-1" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-1"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-1" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-1"></span> &#x2192; <span id = "full-timer-next-1"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of AB chest time -->

					<br> <b>D. Tangled Depths - Crystallized Supply Cache (of all lanes)</b>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Vial_of_Chak_Acid.png">Chak Acid. Can only obtain via Outpost events and from NPC vendors</p>
					<br><p class = "indent">The time before and sometime after a meta, completing Outpost events will award several caches <img src = "../images/assets/items/Outpost_Inactive.png">&#x2192;<img src = "../images/assets/items/Outpost_Active.png">. These can be mostly found in the respective lane of the completed outpost and some throughout where the events took place.  </p>

					<br><p class = "indent">After completing the meta, you will be granted a single room with some caches.</p>

					<br><p class = "indent">While each cache does not guarantee a <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">, there is a good chance to recieve a <img src = "../images/assets/items/Heirloom_Seed_Pouch.png">champion bag. That will give around 5 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png"> per bag. </p>

					<br><p class = "indent">Below is a timer for when is a "good" or "bad" time to gather chests. This is assuming you have keys, about 45 minutes after Outposts events began, and assuming some activity in the map. During the "good" times to loot caches, there's generally peeps doing an outpost or two and have completed them. During the "bad" time, it's usually during when the Outposts just started and needs peeps to progress it to spawn caches.</a> 

					<!-- TD chest time -->
					<div id = "box-2" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-2"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-2" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-2"></span> &#x2192; <span id = "full-timer-next-2"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of TD chest time -->
				</div>

				<!-- Dragonite Ore -->
				<div id = 'dragonite-ore' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(255, 209, 44)"> 1. Gathering </h>

					<br><br><b>A) Bitterfrost Frontier - <img src = "../images/assets/nodes/Fresh_Winterberry.png">Winterberry Bushes</b>
					<br><p class = "indent">These nodes can be gathered daily (respawn about every 23 hours), but can be gathered multiple times if you have multiple characters. Each node drops 4 <img src = "../images/assets/items/Dragonite_Ore.png">. You can find a route <a href = "../maps/bitterfrost-frontier.html#nodes" target = "_blank"><u>here</u></a>.</p>

					<br><b>B) Thunderhead Peaks - <img src = "../images/assets/nodes/Branded_Mass.png">Dragon Crystal Nodes</b>
					<br><p class = "indent">Same with Winterberries. Though, there's not as many Winterberries as there are Dragon Crystals. Some of the nodes can be found around History's End Waypoint [&BLsLAAA=], and head all the way to the southern part of the map, Ice Floes (the ice part). There are nodes that do spawn after each of the metas. </p>

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 209, 44)"> 2. Chests </h>

					<br><br> <b>A) Silverwastes - Lost Bandit Chests</b>
					<br><p class = "indent"> Silverwaste is an extremely popular ongoing farm. Always check the LFG under Central Tyria Squads for groups. Either by following a train or having an excess amount of <img src = "../images/assets/items/Silverwastes_Shovel.png">Silverwastes Shovels, you can gather Lost Bandit Chests throughout the area. They have a low respawn rate so you could keep looping around the map and keep gatering chests. Each chest will give you an average of 8 <img src = "../images/assets/items/Dragonite_Ore.png">. </p>

					<br> <b>B) Domain of Kourna - Kournan Chests</b>
					<br><p class = "indent"> There aren't many of these chests, but they offer as much as 10 <img src = "../images/assets/items/Dragonite_Ore.png">per chest. Here are all the easy and quick locations: 
						<br> - From the Allied Encampment Waypoint [&BFcLAAA=], head northeast into a cave below this POI [&BEsLAAA=]. Once entering the cave, head to the right and there's a wall you could knock down if you have the Roller Beetle. There are 2 chests in there. 

						<br><br> - Going along with above, when entering the cave, instead of going to the right, go straight ahead. You'll end up to this POI [&BFwLAAA=] and there are 2 chests on top of the stairs. 

						<br><br> - Either from where you are above, or from Apizmic Grounds Waypoint [&BFALAAA=], go northeast. You'll see an area full of choyas. South of the choyas wandering all over the place, there will be a circular area with veteran choyas and/or a choya event. On a hill adjacent to it, there are 2 chests.

						<br><br> - From Allied Encampment Waypoint [&BFcLAAA=], head directly south to [&BGELAAA=]. There are 2 chests. 
					</p>

					<br><b> C) Fractal Encryptions </b>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Fractal_Encryption_Key.png">Fractal Encryption Key. Obtained by doing fractal dailies or via fractal vendor in the fractal lobby.</p>
					
					<br><p class = "indent">Either by doing fractals and looting them or buying it from the TP, these boxes offer an almost guaranteed chance to drop either 15 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">, <img src = "../images/assets/items/Empyreal_Fragment.png">, or <img src = "../images/assets/items/Dragonite_Ore.png">. </p>

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(255, 209, 44)"> 3. World Bosses </h>
					<br><br>
					You could get a few dozen by doing some world bosses, but be aware that some may take a while to spawn or bit a minute to complete. To check up on a list of world bosses and what are active, check out the <a href = "https://wiki.guildwars2.com/wiki/Event_timers" target = "_blank"><u>Wiki timers.</u></a>
				</div>

				<!-- Empyreal Fragments -->
				<div id = 'empyreal-fragment' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(104, 128, 192);"> 1. Chests </h>

					<br><br><b>A) Bitterfrost Frontier - Icebound Chests </b>
					<br><p class = "indent">The solo farm for Bitterfrost is not only an extremely profitable farm for gold, but also a great way to get Fragments! Each chest will give an average of 3 <img src = "../images/assets/items/Empyreal_Fragment.png"> with about 28-30 chests in the whole central area. This can be repeated per character and per meta. More information on the route <a href = "../maps/bitterfrost-frontier.html#solo-farm" target = "_blank"><u>here</u></a>. No keys required, but you do need the mastery "Koda's Flame" to unlock the chests. You don't need the mastery to gather the chest, however.</p>

					<br><b>B) Siren's Landing - Waterlogged Chests</b>
					<br><p class = "indent">Similarly to Icebound Chests, these do not need a key. There are 13 clustered in a nice area with each dropping an average of 3 <img src = "../images/assets/items/Empyreal_Fragment.png">per. Each chest can be repeated by switching to another character. The route can be found <a href = "/gathering/sirens-landing-node-farm.html" target = "_blank"><u>here</u></a> </p>

					<br><b>C) Fractal Encryptions </b>
					<br><p class = "indent">Required: <img src = "../images/assets/items/Fractal_Encryption_Key.png">Fractal Encryption Key. Obtained by doing fractal dailies or via fractal vendor in the fractal lobby.</p>
					
					<br><p class = "indent">Either by doing fractals and looting them or buying it from the TP, these boxes offer an almost guaranteed chance to drop either 15 <img src = "../images/assets/items/Pile_of_Bloodstone_Dust.png">, <img src = "../images/assets/items/Empyreal_Fragment.png">, or <img src = "../images/assets/items/Dragonite_Ore.png">. </p>

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(104, 128, 192);"> 2. Gathering </h>
					<br><br>

					<br> <b>A) Sandswept Isles - <img src = "../images/assets/nodes/Difluorite_Crystal.png"> Difluroite Crystals </b>
					<br><p class = "indent"> Out of all the other LS maps, I think Sandswept has the most condensed and easier areas for gathering the nodes. Each strike yields about 2 <img src = "../images/assets/items/Empyreal_Fragment.png"> for a total of about 6 <img src = "../images/assets/items/Empyreal_Fragment.png"> per node. While I don't think there's a good route for them, here's a <a href = "../maps/sandswept-isles.html#nodes" target = "_blank"><u>map</u></a> where they are mostly located. If you have TaCO, that's a good option as well.  </p>

					<br> <b>B) Dragonfall - <img src = "../images/assets/nodes/Mistborn_Mote.png"> Mistborn Mote </b>
					<br><p class = "indent"> These nodes drop a large amount of Fragments, but are generally spread throughout the map. Having Glyph of Bounty/karma tools will enhance the amount you get. You'll get about 6 <img src = "../images/assets/items/Empyreal_Fragment.png"> per node. Here's a <a href = "https://www.youtube.com/watch?v=AYVkzKztHb8" target = "_blank"><u>video guide</u></a>. 
					</p>

					<br><b> C) Ember Bay - <img src = "../images/assets/nodes/Petrified_Wood.png"> Petrified Wood </b>
					<br><p class = "indent">These nodes are also spread throughout the map. On average, you'll get about 2 <img src = "../images/assets/items/Empyreal_Fragment.png"> per stike or 6 per node. Here's a <a href = "https://www.youtube.com/watch?v=dMFxYPeWKSU" target = "_blank"><u>video guide</u></a>.
				</div>

				<!-- Bottle of Airship Oil -->
				<div id = 'airship-oil' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(156, 131, 104);"> 1. Airship Cargo </h>
					<br><br>
					<p class = "indent">Required: <img src = "../images/assets/items/Pact_Crowbar.png">Pact Crowbars. Can only obtain via Day events</p>
					<br><p class = "indent">For every Airship Cargo, the average drop rate is around 1-2 <img src = "../images/assets/items/Pact_Crowbar.png"> , with a very small chance to earn up to 10 <img src = "../images/assets/items/Pact_Crowbar.png">. 

					<br><br><p class = "indent">During the day, Airship Cargo are located throughout the entire map, but can only appear after progress has been made for an outpost. If the outpost is completely done the symbol will turn from <img src = "../images/assets/items/Outpost_Inactive.png">&#x2192;<img src = "../images/assets/items/Outpost_Active.png">, then Airship Cargo will be placed in that area. </p>

					<br><p class = "indent">During the night, Airship Cargo are still throughout the map if the day events were completed, but can spawn more in the air (looted as Recovered Pact Supplies) if a Night Boss has been defeated. They will spawn in the area around the boss's defeat. </p>

					<br><p class = "indent">Below is a timer that indicates when a good time would be to hop in and hoard some chests. A "good time" to loot the chests are assuming an hour after Day has begun and into the Night meta. A "bad time" is when the events reset and the Outposts are just starting to progress during the Day. </p>

					<!-- VB chest time -->
					<div id = "box-3" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-3"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-3" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-3"></span> &#x2192; <span id = "full-timer-next-3"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of VB chest time -->

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(156, 131, 104);"> 2. Other </h>

					<br><br> <b>A) Matriarch</b>
					<br><p class = "indent"> Out of all the Night bosses, this one in particular has a bonus boss chest that can award 1-10 <img src = "../images/assets/items/Bottle_of_Airship_Oil.png">.</p>

					<br> <b>B) Night Bosses (including Matriarch) - <img src = "../images/assets/nodes/Mistborn_Mote.png"> Mistborn Mote </b>
					<br><p class = "indent"> This can only be done once per day per account. When killing a Night Boss, you'll recieve Verdant Brink or Dragon's Stand: Hero's Choice Chest <img src = "../images/assets/items/Verdant_Brink-_Hero's_Choice_Chest.png">. One of the options can let you get <img src = "../images/assets/items/Bottle_of_Airship_Oil.png"></a>. 
					</p>
				</div>

				<!-- Pile of Auric Dust -->
				<div id = 'auric-dust' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(249, 245, 104);"> 1. Exalted Chest </h>
					<br><br>
					<p class = "indent">Required: <img src = "../images/assets/items/Exalted_Key.png">Exalted Keys. Can only obtain via Pylon events and vendor exchange.</p>
					<br><p class = "indent">For every Exalted Chest, the average is around 1-3 <img src = "../images/assets/items/Pile_of_Auric_Dust.png">, higher average with higher grade. 

					The time before and sometime after a meta, completing Pylon events will award several Exalted Chests (lowest grade). On the mini map, similarily to VB/TD's outpost icons <img src = "../images/assets/items/Exalted_Pylon_Inactive.png">&#x2192;<img src = "../images/assets/items/Exalted_Pylon_Active.png">, look for the orange symbol.</p>
					<br><p class = "indent">After completing the meta, you will be granted rooms full of Exalted Chests of all grades. The meta is generally done every day at every hour and can be done in about 5-10 minutes.</p>

					<br><p class = "indent">Below is a timer that indicates when a good time would be to hop in and hoard some chests. A "good time" to loot the chests are assuming an hour after Pylons has begun and into the Octovine meta. A "bad time" is when the events reset and the Pylons are just starting to progress. It is good to note that it is wise to join a map before it fills before meta for a better chance of a pre-cleared Pylon map rather than a fresh meta map. </p>

					<!-- AB chest time -->
					<div id = "box-4" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-4"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-4" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-4"></span> &#x2192; <span id = "full-timer-next-4"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of AB chest time -->

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(249, 245, 104);"> 2. Other </h>
					<br><br>
					<b>A) <img src = "../images/assets/items/Auric_Basin-_Hero's_Choice_Chest.png"> Auric Basin/Dragon's Stand - Hero's Choice Chest </b> 
					<br><p class = "indent"> There is an option to choose more <img src = "../images/assets/items/Pile_of_Auric_Dust.png">.</p>

					<br> <b>B) <img src = "../images/assets/items/Recovered_Priory_Expedition_Chest.png"> Recovered Priory Expedition chest/<img src = "../images/assets/items/Lost_Arms_of_an_Auric_Hero.png"> Lost Arms of an Auric Hero chest </b>
					<br><p class = "indent"> There is an extremely low chance to drop a single <img src = "../images/assets/items/Pile_of_Auric_Dust.png">.</p>
					</p>
				</div>

				<!-- Ley Line Spark -->
				<div id = 'ley-line-spark' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(132, 251, 247);"> 1. Crystallized Supply Cache (all lanes)  </h>
					<br><br>
					<p class = "indent">Required: <img src = "../images/assets/items/Vial_of_Chak_Acid.png">Chak Acid. Can only obtain via Outpost events and from NPC vendors</p>
					<br><p class = "indent">The time before and sometime after a meta, completing Outpost events will award several caches <img src = "../images/assets/items/Outpost_Inactive.png">&#x2192;<img src = "../images/assets/items/Outpost_Active.png">. These can be mostly found in the respective lane of the completed outpost and some throughout where the events took place. Each cache will give an average of 2 <img src = "../images/assets/items/Ley_Line_Spark.png">.</p>

					<br><p class = "indent">After completing the meta, you will be granted a single room with some caches.</p>


					<br><p class = "indent">Below is a timer for when is a "good" or "bad" time to gather chests. This is assuming you have keys, about 45 minutes after Outposts events began, and assuming some activity in the map. During the "good" times to loot caches, there's generally peeps doing an outpost or two and have completed them. During the "bad" time, it's usually during when the Outposts just started and needs peeps to progress it to spawn caches. </p> 

					<!-- TD chest time -->
					<div id = "box-5" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-5"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-5" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-5"></span> &#x2192; <span id = "full-timer-next-5"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of TD chest time -->

					<br>
					<h class = "bookmark-header" style = "background-color: rgb(132, 251, 247);"> 2. Other </h>
					<br><br>
					<b>A) <img src = "../images/assets/items/Auric_Basin-_Hero's_Choice_Chest.png"> Auric Basin/Dragon's Stand - Hero's Choice Chest</b> 
					<br><p class = "indent"> There is an option to choose more <img src = "../images/assets/items/Pile_of_Auric_Dust.png">.</p>

					<br> <b>B) <img src = "../images/assets/items/Recovered_Priory_Expedition_Chest.png"> Recovered Priory Expedition chest/<img src = "../images/assets/items/Lost_Arms_of_an_Auric_Hero.png"> Lost Arms of an Auric Hero chest </b>
					<br><p class = "indent"> There is an extremely low chance to drop a single <img src = "../images/assets/items/Pile_of_Auric_Dust.png">.</p>
					</p>
				</div>

				<!-- Crystalline Ore -->
				<div id = 'crystalline-ore' class = "small-description" style = "display: none;">
					<h class = "bookmark-header" style = "background-color: rgb(126, 188, 211);"> 1. Noxious Seed Pod </h>
					<br><br>
					<p class = "indent">Required: <img src = "../images/assets/items/Machete.png">Machete. Can only obtain via vendors in Dragon's Stand</p>
					<br><p class = "indent">These pods are only found in Dragon's Stand. They spawn after taking over an outposts for each lane of the meta. Even more will spawn at the end of the final phase and will have arrows labeled on the mini map. On average, there will be about 70 Noxious Pods. Each gives an average of 1 <img src = "../images/assets/items/Crystalline_Ore.png">, with a small chance to get up to 10.</p>

					<br><p class = "indent">Below is a timer for when is a "good" or "bad" time to find a map and do the meta. Unfortuantely, unlike the other currencies, it's not as easy as going into a map and gathering all the chests. It is recommended to find a map that is actively working on the meta. Depending on their progress, you may get into one that has done most of the work.</a> 

					<!-- DS chest time -->
					<div id = "box-6" class = "inner-page-box">
						<div class = "full-timer-name">
							Status: <span id = "full-timer-current-6"></span>
						</div>

						<div class = "full-progress-box">
							<div id = "progress-bar-6" class = "full-progress-bar">
							</div>

							<div class = "full-timer-left">

								<div>
									<span id = "full-timer-time-6"></span> &#x2192; <span id = "full-timer-next-6"></span>
								</div>
		
							</div>
						</div>
					</div> <!-- End of DS chest time -->

					</p>
				</div>

			</div>

		</div>
	</div>


	<script> 

		insertNav('navbar', 2);

		function showMaterial(num){
			var infoBox = document.getElementById('main-info-box').children;

			for (i = 0; i < infoBox.length; i++){
				infoBox[i].style.display = 'none';
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

<script type = "text/javascript" src = "<?php echo $base;?>/resources/full-timers.js?v=<?php echo $date;?>"></script>

<script>
	// Timers
	verdantLootTimer('progress-bar-0', 'full-timer-time-0', 'full-timer-next-0', 'full-timer-current-0');
	auricLootTimer('progress-bar-1', 'full-timer-time-1', 'full-timer-next-1', 'full-timer-current-1');
	tangledLootTimer('progress-bar-2', 'full-timer-time-2', 'full-timer-next-2', 'full-timer-current-2');

	// Airship Oil
	verdantLootTimer('progress-bar-3', 'full-timer-time-3', 'full-timer-next-3', 'full-timer-current-3');

	// Pile of Auric Dust
	auricLootTimer('progress-bar-4', 'full-timer-time-4', 'full-timer-next-4', 'full-timer-current-4');

	// Ley-line Sparks
	tangledLootTimer('progress-bar-5', 'full-timer-time-5', 'full-timer-next-5', 'full-timer-current-5');

	dragonStandLootTimer('progress-bar-6', 'full-timer-time-6', 'full-timer-next-6', 'full-timer-current-6');
</script>

</html>