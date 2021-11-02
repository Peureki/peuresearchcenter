<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Silverwastes </title>
	
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
			<a href = "#top"><li> &#10097; Top </li></a> 
			<a href = "#loot"><li> &#10097; Loot </li></a> 
			<a href = "#meta"><li> &#10097; Meta </li></a> 
			<a href = "#caravans"><li> &#10097; Caravans </li></a> 
			<a href = "#legendary-bosses"><li> &#10097; Legendary Bosses </li></a> 
		</ul>
	</div>

	<div class = "page-box">

		<div id = "top" class = "section-header">
			<h1>Silverwastes</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			Silverwaste farming is more commonly known as <b> RIBA</b>. RIBA stands for Red &#8594; Indigo &#8594; Blue &#8594; Amber camps. This is the order of rotation that the train will proceed to get the most of the map and their events. From start (fresh map) to finish, the entire cycle of defending the forts, meta, and chest train should take almost exactly an hour. 

			<br><br>
			<div>
				<img src = "../images/silverwastes/event-1.jpg" style = "display: block; margin-left: auto; margin-right: auto; width: 50%;">
			</div>

			<br id = "loot">
			With the RIBA rotation going, this farm takes advantages of two things: <b>Map Bonus Rewards & Lost Bandit Chests.</b> Unlike most maps, the map bonus rewards do not change per week. From most lucrative map bonus rewards to the least: Bag of Gear &#8594; Silverwaste Shovel &#8594; Bandit Crest &#8594; Pile of Silky Sand.

			<br><br>
			<div style = "display: flex; align-items: center; justify-content: space-evenly;">
				<img src = "../images/silverwastes/map-bonus.png" style = "width: 30%;">
				<img src = "../images/silverwastes/chest-route.jpg" style = "width: 49%;">
			</div>

			<br>
			<b>Bags of Gear</b> &#8212; Depending on what level character you open this on, can determine what kind of gear you recieve. Check out <a href = "https://silverwastes.loltools.net/" target = "_blank"><u> Silverwaste Loltools</u></a> to see what character level is currently the most profitable. Otherwise, if you open on a level 80, you'll get lots of Unidentified Gear, which is still great! With Unidentified Gear, check out my <a href = "../research/salvage.html" target = "_blank"><u> Salvage page</u></a>.

			<br><br>
			<b>Silverwastes Shovel</b> &#8212; This is what's used to find the Lost Bandit Chests. This can also be purchased in exchange for Bandit Crests (the map currency) via Vendor at the first waypoint. You could even sell these to guilds that need it for their guild hall. 

			<br><br>
			<b>Bandit Crests</b> &#8212; This is the map currency. Use these to buy shovels. For extra profits, you could use them to buy Sandy Bag of Gear or Bag of Stolen Goods. Their estimated profit margins can be found on my <a href = "../research/currency-worth.html#bandit-crests" target = "_blank"><u> Currency Worth</u></a> page. 

			<br><br>
			<b>Pile of Silky Sand</b> &#8212; This material can be found in both Silverwastes and Dry Top. By consuming 10 (you'll get a lot), you get a chance to get Bandit Crests, Geodes, keys, or other materials. It's always worth-wild to consome what you get. 
		</div>

		<div id = "meta" class = "homepage-title">
			<h1> Meta - Vinewrath </h1>
		</div>

		<div class = "small-description">
			<b> Main Idea </b>
			<br>
			There are 3 seperate lanes that need at least 10+ people each. One by one from south to north, each lane will encounter a boss. Once a boss is completed, the next lane will go through their lane and fight their boss. If a lane fails to defeat their boss, then that boss is now the next's lane boss and so forth. For any lane that is not currently fighting a boss, their task is to defend an NPC as it escorts itself to and from the lane. Vinewrath is finished when all 3 bosses have been defeated. 

			<br><br>
			Ideally, you want:
			<br> South lane - Melee DPS
			<br> Mid lane - Reflects/projectile destruction, either melee or range (easier) DPS
			<br> North lane - Melee or ranged (easier) DPS
			<br> Mid being the most important due to having a greater chance of snowballing everyone if the mechanics or DPS aren't on par. 

			<br><br>
			<b> Bosses </b>
			<br> 
			<b>South lane</b> - There are circle of bees. Run into the swarm of bees and then run to the white square area near the boss. Getting a couple people to do this will ensure a beehive shield for the boss's main attack (1 shot lazer). 
			<br><br>
			<b>Mid lane</b> - The boss will be centered and throw out two different attacks. First will be a spin-to-win where it throws projectiles. If the projectiles hit the little plants surrounding the boss, they explode into a large damaging AOE. To counter this, it is best to <b> bring reflects or projectile destruction </b>. The second attack is a melee fear that can be dodged a second after you see the telegraph. At some point, the boss will run to the back of the room to do a 1 shot attack. Avoid this by following the boss and standing in the white triangle AOE. If the boss's health is < 50%, the second attack is a large damaging AOE around the boss rather than a fear. 
			<br><br>
			<b>North lane</b> - This boss will doing lots of leaps and charges in melee range. When it charges, it leaves a line of death and destroys projectiles through that line. At some point, it will run to the back of the room to do a 1 shot AOE. To avoid this, DPS a pod to open up as a flower and stand on top of it. 

		</div>

		<div id = "other-events" class = "homepage-title">
			<h1> Other Events </h1>
		</div>

		<div class = "small-description">
			<b id = "caravans"> Caravans </b>
			<br>
			While still following the RIBA rotation, there are Caravan escorts that spawn. When the squad unlocks all 4 camps, there are 4 potential escorts you can hit while farming. As long as they get completed, they will continuously farm until the map reaches meta. Each escort will stop 3 times for a wave of enemies each. Tagging one wave is enough to get credit for the event. The most common escorts to complete at the <b> Purple, Yellow, and Blue</b> ones. 

			<br><br>
			<div style = "display: flex; align-items: center; justify-content: space-evenly;">
				<img src = "../images/silverwastes/event-2.jpg" style = "width: 49%;">
			</div>

			<br><br>
			<b id = "legendary-bosses"> Legendary Bosses </b>
			<br>
			These are simply bonuses events that occur at each fort, but are often requested due to each carrying a mastery point. These bosses have a greater chance the higher the overall defence level the map is. If you're looking for a specific legendary boss, I would stick around that respective camp. If you're a regular player, please do your best to call the bosses out and their location! 

			<br><br>
			<div style = "display: flex; align-items: center; justify-content: space-evenly;">
				<img src = "../images/silverwastes/legendary-bosses.jpg" style = "width: 49%;">
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
