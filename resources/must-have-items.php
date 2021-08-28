<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Must Have Items </title>
	<script type = "text/javascript" src = "<?php echo $base;?>/resources/must-have-items.js?v=<?php echo $date;?>"></script>
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
			<h1>Must Have Items</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "flex-description">
			<div style = "padding-left: 20px; padding-right: 20px;">
				<span id = "gold-per-gem"></span> &#x2192; 1 <img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;">
			</div>

			<div style = "padding-left: 20px; padding-right: 20px;">
				1 <img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> &#x2192; <span id = "gem-per-gold"></span>
			</div>

			<div style = "padding-left: 20px; padding-right: 20px;">
				$1 (USD) &#x2192; 80 <img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;">
			</div>

			<div style = "padding-left: 20px; padding-right: 20px;">
				$1 (USD) &#x2192; <span id = "gold-per-dollar"></span>
			</div>
		</div>

		<br><br>
		<div class = "double-box">
			<div class = "mhi-section">
				<b style = "font-size: 30px;"> Gem Store </b>
				<div class = "mhi-list" style = "margin-top: 20px;">
					<div>
						<img src = "../images/assets/icons/Copper-Fed_Salvage-o-Matic.png" style = "vertical-align: middle;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Copper-Fed Salvage-o-Matic</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>800<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $10
						<br><span id = "copper-fed"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Runecrafter's_Salvage-o-Matic.png" style = "vertical-align: middle;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Runecrafter's Salvage-o-Matic</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>600<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $7.50
						<br><span id = "runecrafter"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Silver-Fed_Salvage-o-Matic.png" style = "vertical-align: middle;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Silver-Fed Salvage-o-Matic</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>500<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $6.25
						<br><span id = "silver-fed"></span>
					</div>
				</div>

			<!-- Gathering tools-->

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Infinite_Volatile_Magic_Gathering_Tools.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Infinite Volatile Magic Gathering Tools</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>2700<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $33.75
						<br><span id = "volatile-tools"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Consortium_Harvesting_Sickle.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Consortium Harvesting Sickle</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>1000<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $12.50
						<br><span id = "consortium-sickle"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Choya_Mining_Tool.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Choya Mining Tool</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>1000<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $12.50
						<br><span id = "choya-mining"></span>
					</div>
				</div>

			<!-- Shared inventory slots -->
				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Shared_Inventory_Slot.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Shared Inventory Slot</b>
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" > 
						<br>700<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $8.75
						<br><span id = "shared-inventory"></span>
					</div>
				</div>

				<!-- Lounge Passes -->
				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Mistlock_Sanctuary_Passkey.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Mistlock Santuary Passkey</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>1000<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $12.50
						<br><span id = "mistlock-santuary"></span>
					</div>
				</div>

				<!-- Account Upgrades -->
				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Storage_Expander.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Storage Expander</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" > 
						<br>800<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $10
						<br><span id = "storage-expander"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Bank_Tab_Expansion.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Bank Tab Expansion</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>600<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $7.50
						<br><span id = "bank-tab"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Bag_Slot_Expansion.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Bag Slot Expansion</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>400<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $5
						<br><span id = "bag-slot"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Character_Slot_Expansion.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Character Slot Expansion</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>800<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $10
						<br><span id = "character-slot"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Equipment_Template_Expansion.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Equipment Template Expansion</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>500<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $6.25
						<br><span id = "equipment-template"></span>
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Build_Template_Expansion.png" style = "vertical-align: middle; width: 64px; height: 64px;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Build Template Expansion</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxLeft(this);" >
						<br>300<img src = "../images/assets/icons/Gem.png" style = "width: 25px; height: 25px; vertical-align: middle;"> | $3.75
						<br><span id = "build-template"></span>
					</div>
				</div>

			</div> <!-- End of section box-->

			<!-- START of right side -->

			<div class = "mhi-section">
				<b style = "font-size: 30px;"> Non-Gem Store </b>
				<div class = "mhi-list" style = "margin-top: 20px;">
					<div>
						<img src = "../images/assets/icons/Season_3_Portal_Tome.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Season 3 Portal Tome</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br>1000 <img src = "../images/assets/Unbound_Magic.png" style = "width: 25px; height: 25px; vertical-align: middle;"> + 1 <img src = "../images/assets/Gold_coin.png" style = "width: 15px; height: 15px; vertical-align: middle;">
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Season_4_Portal_Tome.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Season 4 Portal Tome</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br>1000 <img src = "../images/assets/Volatile_Magic.png" style = "width: 25px; height: 25px; vertical-align: middle;"> + 1 <img src = "../images/assets/Gold_coin.png" style = "width: 15px; height: 15px; vertical-align: middle;">
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Icebrood_Saga_Portal_Tome.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Icebrood Saga Portal Tome</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br>175,000 <img src = "../images/assets/icons/Karma.png" style = "width: 25px; height: 25px; vertical-align: middle;"> + 2 <img src = "../images/assets/Gold_coin.png" style = "width: 15px; height: 15px; vertical-align: middle;">
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Portable_United_Legions_Waystation.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Portable United Legions Waystation</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> 25 <img src = "../images/assets/icons/War_Supplies.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						<br> Drizzlewood Coast or via another Portal Waystation
						
					</div>
				</div> 

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Prototype_Position_Rewinder.png" style = "vertical-align: middle;">
					</div>

					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Prototype Position Rewinder</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br>175,000 <img src = "../images/assets/icons/Karma.png" style = "width: 25px; height: 25px; vertical-align: middle;"> + 75 <img src = "../images/assets/nodes/Difluorite_Crystal.png" style = "width: 25px; height: 25px; vertical-align: middle;">
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/White_Mantle_Portal_Device.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>White Mantle Portal Device</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br>1000 <img src = "../images/assets/icons/Magnetite_Shard.png" style = "width: 25px; height: 25px; vertical-align: middle;"> + 3 <img src = "../images/assets/Gold_coin.png" style = "width: 15px; height: 15px; vertical-align: middle;">
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Sentient_Singularity.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Gleam of Sentience</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> Achievements <img src = "../images/assets/icons/Achievements.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Star_of_Gratitude.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Star of Gratitude</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> Achievements <img src = "../images/assets/icons/Achievements.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						
					</div>
				</div> 

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Mawdrey_II.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Mawdrey II</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> Achievements <img src = "../images/assets/icons/Achievements.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						
					</div>
				</div> 

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Princess.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Princess</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> Achievements <img src = "../images/assets/icons/Achievements.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						
					</div>
				</div> 

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Herta.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Herta</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> Achievements <img src = "../images/assets/icons/Achievements.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						
					</div>
				</div>

				<div class = "mhi-list">
					<div>
						<img src = "../images/assets/icons/Ley-Energy_Matter_Converter.png" style = "vertical-align: middle;">
					</div>
					<div style = "margin-left: 10px; margin-top: auto; margin-bottom: auto;">
						<b>Ley-Energy Matter Converter</b> 
						<img src = "../images/assets/info.png" style = "width: 25px; height: 25px; vertical-align: middle; cursor: pointer;" onclick = "mhiInfoBoxRight(this);" >
						<br> Achievements <img src = "../images/assets/icons/Achievements.png" style = "width: 25px; height: 25px; vertical-align: middle;">
						
					</div>
				</div> 

			</div> <!-- End of section box-->
		</div>

		<div id = "info-box-left" class = "page-box" style = "position: fixed; top: 35%; left: 20%; display: none;">
			<div id = "info-close" onclick = "closeBox(this);" class = "popup-x">
				x
			</div>
			<div class = "popup-box">
				<div id = "popup-copper-fed" class = "popup-box-child">
					<h1> Copper-Fed Salvage-o-Matic </h1>

					By far, one of the best (if not, the best) tool to have in the game in terms of QoL. This item salvages gear and items in your inventory with a click of a button. It's super convenient when farming, opening bags, opening Unidentified Gear, and any other content that you would get a lot of salvagable items from. This is most useful for blue and green identified gear. 

					<br><br>
					I recommend putting this in a Shared Inventory slot so that you can use this item for all characters. You never have to buy basic salvage kits ever again!
				</div>

				<div id = "popup-runecrafters" class = "popup-box-child">
					<h1> Runecrafter's Salvage-o-Matic </h1>

					Just as Copper-Fed, it brings the same QoL change, but is more useful for salvaging specifically green identified gear. The reason is due to an increase of overall profits via more charms/symbols dropping. While this item may not be in the gemstore all the time, it is a nice investment for when it does. 
				</div>

				<div id = "popup-silver-fed" class = "popup-box-child">
					<h1> Silver-Fed Salvage-o-Matic </h1>

					Just as Copper-Fed and Runecrafter's, it brings the same QoL change, but is more useful for salvaging specifically rare or cheap exotic identified gear. The reason is because it brings the same benefits as Mystic Salvage kits, but without having to craft the kits. It is too expensive to use on blue and green gear.  
				</div>

				<div id = "popup-volatile-tools" class = "popup-box-child">
					<h1> Infinite Volatile Magic Gathering Tools </h1>

					While pretty expensive, in the long run, you can make an extreme amount of profits. This is especially true if you gather on a frequent bases. All the tools always offers:
					<br> 1) Unbreakable gathering tools
					<br> 2) 3 Account-bound Glyph of Voltality 

					<br><br>
					The unbreakable tools are good enough for the price, but the Glyphs are what's going to give you long-term profits. Each strike will grant some Volatile Magic. Over time, you'll end up having thousands racked up from purely gathering, which you can exchange for Trophy Shipments via LS4 vendors. Check out <a href = "../research/currency-worth.html" target="_blank"><u>this page</u></a> for how much profits you'd get per Volatile Magic to get a better idea. 
				</div>

				<div id = "popup-consortium-sickle" class = "popup-box-child">
					<h1> Consortium Harvesting Sickle </h1>

					This specific sickle is extremely fast. It has the best cast time with no aftercast. To compare the speeds of other popular sickles, head to <a href = "../gathering.html" target = "_blank"><u>this page</u></a>. After gathering with this tool, gathering plants in any other tool will make them seem too slow. Not to mention, having an unbreakable tool is always handy! 
				</div>

				<div id = "popup-choya-mining" class = "popup-box-child">
					<h1> Choya Mining Tool </h1>

					This specific mining tool is convenient with rich nodes or guild hall nodes. The tool actually strikes 5 times instead of the normal 4. With rich nodes, there's always 10 strikes per node. With 5, you only have to cast the animation twice instead of 3 times. 
				</div>

				<div id = "popup-shared-inventory" class = "popup-box-child">
					<h1> Shared Inventory Slot </h1>

					The same offers a few free Shared Inventory slots if you've bought the expansions, but it's never enough! These are one of the best QoL items to buy. Here are some items that are great to have in the slots: 
					<br> - Copper-Fed, other salvaging tools 
					<br> - Unbreakable gathering tools. You can place the tools in here to easily swap them to other characters without having to go to a bank
					<br> - Portal scrolls 
					<br> - White Mantle Portal Device
					<br> - Rewinder
					<br> - Eaters/Converters 
					<br> - Unidentified gear - If you're an altoholic, managing Unidentified Gear is easier in one central location
					<br> - Lounge pass keys
					<br> - Food
					<br> - Any other item you use on many characters
				</div>

				<div id = "popup-mistlock-santuary" class = "popup-box-child">
					<h1> Mistlock Santuary </h1>

					Honestly, getting any lounge pass is worth it (my favorite is Lava Lounge). The benefit of lounges is that you can instantly go to a hub full of vendors, TP, bank, crafting stations, and more. Mistlock is a favorite because vendors are close together, you can traverse easily, and it's an instanced map where if you leave you'll go back to your previous location. 
				</div>

				<div id = "popup-storage-expander" class = "popup-box-child">
					<h1> Storage Expander </h1>

					250 is not enough to store your materials! Though, when you buy more, you need to get even more LOL. This QoL change is gamechanging, especially if you craft a lot. Your inventory will also be cleaner as when you direct deposit, there's less chances of your storage becoming full and filling your inventory with the overflow materials. 
				</div>

				<div id = "popup-bank-tab" class = "popup-box-child">
					<h1> Bank Tab Expansion </h1>

					Having only 1 to start with is a crime. More bank tabs are extremely useful for the long-term because eventually you'll start stocking up on items that are boosters, can't be deposited via material storage, or saving up for something. 
				</div>

				<div id = "popup-bag-slot" class = "popup-box-child">
					<h1> Bag Slot Expansion </h1>

					As someone who does trains often and open bags for research, having the most amount of bag space available is less of a hassel of inventory management. 
				</div>

				<div id = "popup-character-slot" class = "popup-box-child">
					<h1> Character Slot Expansion </h1>

					There is a max of 72 characters slots, but I use extra ones for either: 
					<br> - More characters to play
					<br> - Alt parking
					<br> - Key farming
				</div>

				<div id = "popup-build-template" class = "popup-box-child">
					<h1> Build Template Expansion </h1>

					Both Equipment and Build Template Expansion go hand-in-hand. This is great if you love to play a variety of builds. Personally, I need some for each character so I can play it in different styles to make things more interesting. 
				</div>

				<div id = "popup-equipment-template" class = "popup-box-child">
					<h1> Equipment Template Expansion </h1>

					Both Equipment and Build Template Expansion go hand-in-hand. This is great if you love to play a variety of builds. Personally, I need some for each character so I can play it in different styles to make things more interesting. 
				</div>


			</div> <!-- Pop up box -->
		</div><!-- Info box -->


		<div id = "info-box-right" class = "page-box" style = "position: fixed; top: 35%; left: 20%; display: none;">
			<div id = "info-close" onclick = "closeBox(this);" class = "popup-x">
				x
			</div>
			<div class = "popup-box">
				<div id = "popup-rewinder" class = "popup-box-child">
					<h1> Prototype Position Rewinder </h1>

					This item can be aquired from a heart vendor at Anniogel Encampment Waypoint <b>[&BCULAAA=]</b>. 

					<br><br>
					Using the item will grant the player to rewind the character's position to it's location where it was used. This is best used as a portal back for jumping puzzles, or uncertain areas. 
				</div>

				<div id = "popup-waystation" class = "popup-box-child">
					<h1> Portable United Legions Waystation </h1>
					With the completion of most or all of the Icebrood Saga "United Legions Waystation Synchronization", you will be able to grab all sorts of special actions. 

					<br><br>
					1. Electromagical Pulse (EMP) - This allows you to bring major CC quickly 
					<br> 2. Remote Charge - Use on structures in Drizzlewood Coast to destroy them quickly
					<br> 3. Medizooka - Allow yourself to be thrown into the air to drop boon missiles at friends

					<br><br>
					Obtain this by exchanging at a War Supply/Quartermaster vendor at Drizzlewood Coast or a waystation that's already placed in the open world. 
				</div>

				<div id = "popup-season-3" class = "popup-box-child">
					<h1> Season 3 Portal Tome </h1>

					At every Season 3 map, there is an Unbound trader NPC that you can exchange for a portal scroll for that respective map. Each vendor will also offer the Tome, but you only need to buy one. Use the Tome to store the scrolls to make it easy to teleport to all 6 maps. 

					<br><br>
					<b>Maps:</b>
					<br> 1. Bloodstone Fen
					<br> 2. Ember Bay
					<br> 3. Bitterfrost Frontier
					<br> 4. Lake Doric
					<br> 5. Draconis Mons
					<br> 6. Siren's Landing 
				</div>

				<div id = "popup-season-4" class = "popup-box-child">
					<h1> Season 4 Portal Tome </h1>

					At every Season 4 map, there is an Volatile trader NPC that you can exchange for a portal scroll for that respective map. Each vendor will also offer the Tome, but you only need to buy one. Use the Tome to store the scrolls to make it easy to teleport to all 6 maps. This also includes Sun's Refuge in Jahai Bluffs. 

					<br><br>
					<b>Maps:</b>
					<br> 1. Domain of Istan
					<br> 2. Sandswept Isles
					<br> 3. Domain of Kourna
					<br> 4. Jahai Bluffs
					<br> 5. Thunderhead Peaks
					<br> 6. Dragonfall
				</div>

				<div id = "popup-icebrood" class = "popup-box-child">
					<h1> Icebrood Saga Portal Tome </h1>

					At every Season 5 (Icebrood Saga) map, there is an Karma/currency trader NPC that you can exchange for a portal scroll for that respective map. Each vendor will also offer the Tome, but you only need to buy one. Use the Tome to store the scrolls to make it easy to teleport to all the maps. This also includes Eye of the North hub. 

					<br><br>
					<b>Maps:</b>
					<br> 1. Grothmar Valley
					<br> 2. Bjora Marches
					<br> 3. Eye of the North
					<br> 4. Drizzlewood Coast
				</div>

				<div id = "popup-white-mantle" class = "popup-box-child">
					<h1> White Mantle Portal Device </h1>

					At the Aerodrome, <b>[&BCAJAAA=]</b>, at the Magnitide Shard vendor, you can buy a portal that works similarly to Mesmer portals. The difference is that it's on a 30 minute cooldown and has a limit of 20 people to teleport when activated. This can be minigated by GGing twice in fractals. The Portal Device is often used in meta strats for high end fractals. 
				</div>

				<div id = "popup-gleam-of-sentience" class = "popup-box-child">
					<h1> Gleam of Sentience </h1>

					This item holds multiple eaters at once. Each eater can be obtained by completing various LS3 achievements. You could exchange Bloodstone Dust, Dragonite Ore, Empyreal Fragments, and Unbound Magic for various loots such as Unidentified Gear and junk. 

					<br><br>
					Guides for each eater (name - achievement): 
					<br> <b>Sentient Aberration</b> - <a href = "https://www.youtube.com/watch?v=cCy61RXACJo" target = "_blank"><u>Token Collector</u></a> 
					<br> <b>Sentient Anomaly</b> - <a href = "https://www.youtube.com/watch?v=0JIC-alnYDM" target = "_blank"><u>The Memoirs of Justiciar Bauer</u></a> + <a href = "https://www.youtube.com/watch?v=O6c8uI3EvME" target = "_blank"><u>Grand Savant Valis the Learned's Research Journal</u></a> + <a href = "https://www.youtube.com/watch?v=mPu3IdXpiqo" target = "_blank"><u>Apprentice Kasandra's Notebook</u></a>
					<br> <b>Sentient Oddity</b> - <a href = "https://www.youtube.com/watch?v=fPJIzqf2hWU" target = "_blank"><u>Cin Business</u></a>
					<br> <b>Sentient Singularity</b> - <a href = "https://www.youtube.com/watch?v=VqY44afhjdg" target = "_blank"><u>Lesson Learned</u></a>
					<br> 
				</div>

				<div id = "popup-star-of-gratitude" class = "popup-box-child">
					<h1> Star of Gratitude </h1>

					
					The Star could consume up to 300 Empyreal Fragments a day for random loot such as Unidentified Gear and junk.  

					<br><br>
					This can only be obtained by starting a collection during Wintersday. Though, you could finish the collection after Wintersday is over. To start, check out this <a href = "https://wiki.guildwars2.com/wiki/Grawnk_Munch" target = "_blank"><u>walkthrough</u></a>. Then, complete this <a href = "https://wiki.guildwars2.com/wiki/For_the_Children!" target = "_blank"><u>achievement</u></a>. 
				</div>

				<div id = "popup-mawdrey" class = "popup-box-child">
					<h1> Mawdrey II </h1>
					Mawdrey could consume up to 300 Bloodstone Dust a day for random loot such as Unidentified Gear and junk.  

					<br><br>
					This can only be obtained by doing a collection of crafting and achievements. Here's a full <a href = "https://wiki.guildwars2.com/wiki/User:Fey_Zeal/Mawdrey_Guide" target = "_blank"><u>wiki guide</u></a>.
				</div>

				<div id = "popup-princess" class = "popup-box-child">
					<h1> Princess </h1>
					Princess could consume up to 300 Dragonite Ore a day for random loot such as Unidentified Gear and junk.  

					<br><br>
					This can only be obtained by doing a collection achievement. Here's a full <a href = "https://wiki.guildwars2.com/wiki/Lion%27s_Arch_Exterminator" target = "_blank"><u>wiki guide</u></a>.
				</div>

				<div id = "popup-herta" class = "popup-box-child">
					<h1> Herta </h1>
					Herta can consume an entire stack of Bloodstone Dust (250)! for loots. This can only be done once per day, per account.

					<br><br>
					This can only be obtained by doing a collection achievement. Here's a full <a href = "https://www.youtube.com/watch?v=DoCmHs9lMi4" target = "_blank"><u>video guide by AyinMaiden</u></a>.
				</div>

				<div id = "popup-ley-energy" class = "popup-box-child">
					<h1> Ley-Energy Matter Converter </h1>
					On the daily, get one key from one of the HoT maps. Machete, Vial of Chak Acid, Exalted Key, or Pact Crowbar.   

					<br><br>
					You could also exchange Ley-line crystals, Aurillium, and Airship Parts for random loot such as Obsidian Shards, Jewels, crafting materials, and other currencies. 

					<br><br>
					Obtain this by kiling the Mouth of Mordremoth in under 20 minutes in Dragon's Stand. 
				</div>
			</div> <!-- Pop up box -->
		</div><!-- Info box right -->
	</div> <!-- End of page box -->

	<script>
		getGemtoGoldConversion();
	</script>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
</body>
</html>