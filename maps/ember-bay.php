<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Ember Bay </title>
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
			<a href = "#nodes"><li> &#10097; Nodes </li></a> 
		</ul>
	</div>

	<div class = "page-box">

		<div class = "section-header">
			<h1>Ember Bay</h1>
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
				<td> Petrified Wood </td>
				<td> <img class = "nodes-image" title = "Petrified Wood" src = "../images/assets/nodes/Petrified_Wood.png"></td>
				<td> Gathered from Sloth, Dominator, Wurm, hearts, nodes, map bonus rewards</td>
			</tr>

			<tr>
				<td> Unbound Magic </td>
				<td> <img class = "nodes-image" title = "Unbound Magic" src = "../images/assets/Unbound_Magic.png"></td>
				<td> Gathered from all mobs, meta, most events, Petrified Wood (consumed), Glyph of Unbound </td>
			</tr>

		</table> <!-- End of quick info table -->

		<div class = "page-header">
			<h2> How to: </h2>
			<div class = "small-description">
				<p1> Follow the <a href = "#recommendation-events" style = "text-decoration: underline;"> recommended priority of events.</a> This farm consists of constantly farming the Sloth, Dominator, Karka, Coalescense, and Fissure events. I try to avoid the Wurm and Jade as those take forever with little reward. Essentially farming the same few events over and over again for an hour. I'd say these events are pretty decent, but not for an hour farm...but here it is for science!</p1>
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

		<div id = "events" class = "homepage-sector">
			<h1> Events </h1>
		</div>

		<div class = "map-image-box">
			<img class = "map-image-ember-bay" title = "Events" src = "../images/ember-bay/ember-bay-events.jpg">
		</div>


		<div id = "recommendation-events" class = "page-header">
			<h2> Recommendation: Priority of Events </h2>
		</div>

		<div class = "recommendation-box"> 
			<h3> <span class = "great-text" > 1-3, 9-10, 12-14, 6, 11, 4, </span> <span class = "meh-text">7</span><span class = "great-text">-8, 15-16, </span><span class = "meh-text">17, </span><span class = "avoid-text"> 5 </span>
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

		<div class = "small-legend">
			<p1><img class = "chain-arrow-image" title = "Chain event" src = "C:/Users/Matt/Desktop/peu-research-center/images/assets/black-arrow.png"> = Chain event leading to event # [ ]</p1>
			<p1> Sorting by Event # shows chain events, cooldowns </p1>
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
				<td id = "2" class = "great-event-number"> 1 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Feed the sloth plant </td>
				<td class = "rest-of-table"> Gather event. Gather poop from Rolling Devils and water from ponds </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 2 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Escort the sloth feeder to the feeding area </td>
				<td class = "rest-of-table"> There are 3 areas where the NPC stops. Each stop has 2 waves of enemies </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 3 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect the slublings from the Sloth Queen </td>
				<td class = "rest-of-table"> This is a DPS check. Low DPS will fail the event. You do more damage to the boss after he eats a slubling, but you don't want him to eat 5 </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, 3 Petrified Wood. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 4 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat jade construct and destroy other mursaat defences </td>
				<td class = "rest-of-table"> With a large squad, this pre-event can spawn champion Jades</td>
				<td class = "rest-of-table"> Possible champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "4" class = "avoid-event-number"> 5 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Pyroclastic Jade Construct </td>
				<td class = "rest-of-table"> Very tedious boss. There are platforms that you can melee, but he will constantly knock you down. The left-most one has a safe spot from lava. At a few points, you will need to pick up rocks to destroy his breakbar </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Mastery point locked behind him if you don't have it</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 6 </td>
				<td class = "qty-event-number"> 2 </td>
				<td class = "rest-of-table"> Collapse the destroyer fissure </td>
				<td class = "rest-of-table"> Very quick event </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 7 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Defeat the dragon minions before they absort ley-line magic </td>
				<td class = "rest-of-table"> It takes 4 minutes to defend the ley-line sparks from NPCs. They do not drop loot</td>
				<td class = "rest-of-table"> Fake champs </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 8 </td>
				<td class = "qty-event-number"> 3 </td>
				<td class = "rest-of-table"> Coalescence or (if #7 fails) Imbued Destroyer Champion </td>
				<td class = "rest-of-table"> Champion Coalescence if event #7 completes. Imbued Destroyer Champion if fails</td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> If the Champion Caolescence completes -> boss chest, 3 Gilded Coffers. The 3 Gilded Coffers can repeat </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 9 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Help the trapped skritt by breaking defiance </td>
				<td class = "rest-of-table"> CC skritt to complete event. Need 12 skritt to be freed</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 10 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the Molten Dominator </td>
				<td class = "rest-of-table"> Every 25%, he goes invulnerable and spawns mobs in the lava pit </td>
				<td class = "rest-of-table"> 1 Guaranteed champ </td>
				<td class = "rest-of-table"> Boss chest, 3 petrified wood. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 11 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the rampaging pirate captain </td>
				<td class = "rest-of-table"> Fastest event ever. Though, people usually need this for achievements </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 12 </td>
				<td class = "qty-event-number"> 9 </td>
				<td class = "rest-of-table"> Escort the disillusioned skritt to their new home </td>
				<td class = "rest-of-table"> Slow NPCs. Will stop 3 times to spawn 2 waves each. First two stops are destroyers while the last stop are karkas  </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 13 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Protect the skritt from the attacking karka </td>
				<td class = "rest-of-table"> Infinate waves of enemies until the event completes. The faster the clears, the faster the waves. </td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table">  </td>
			</tr>

			<tr> 
				<td id = "2" class = "great-event-number"> 14 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Defeat the champion Karka! </td>
				<td class = "rest-of-table"> Simple champ karka. Gains retaliation every 25% and evades. Regains health when the champ finishes its first health bar </td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 15 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Power up Ahadd's golem by defeating the amplified Destroyers </td>
				<td class = "rest-of-table"> Kinda long gathering event if everyone is not participating</td>
				<td class = "rest-of-table"> </td>
				<td class = "rest-of-table"> </td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 16 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table">Protect the energy relays to help Smooth-a-Tron </td>
				<td class = "rest-of-table"> Long defense event</td>
				<td class = "rest-of-table"> Possible champs, Mob Density+ </td>
				<td class = "rest-of-table"> Boss chest, 3 Petrified Wood. Once per day, per character</td>
			</tr>

			<tr> 
				<td id = "3" class = "meh-event-number"> 17 </td>
				<td class = "qty-event-number"> 1 </td>
				<td class = "rest-of-table"> Donate gold to fund Skrilla -> Defend Skrilla </td>
				<td class = "rest-of-table"> Needs a total of 5 gold to be donated to start her escort event</td>
				<td class = "rest-of-table"> Possible champs, Mob density+ </td>
				<td class = "rest-of-table"> Boss chest, 3 Petrified Wood. Repeatable </td>
			</tr>

		</table>

		<div id = "nodes" class = "homepage-sector">
			<h1> Nodes </h1>
		</div>

		<div class = "page-picture">
			<img src = "../images/ember-bay/node-farm.jpg">
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