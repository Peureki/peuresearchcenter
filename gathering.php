<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults, CSS/JS main files -->
	<?php 
		include('config.php');
	?>
	<title> Gathering </title>

	<script type = "text/javascript" src = "<?php echo $base;?>/glyphs.js?v=<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/node-farm-calculator.js?v=<?php echo $date;?>"></script>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('nav.php'); ?>

	<div class = "page-box">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Benchmarks</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div id = "calculator" class = "homepage-title">
			<h1> Node Farm Calculator </h1>
		</div>

		<div class = "result">
			<h1 id = "value"> Select Node Farm </h1>
		</div>
		<div style = "overflow-x: auto">
			<table class = "gather-calc">
				<tr>
					<td>
						<label for = "node-farm"> Node Farm: </label>
					</td>
					<td align="center">
						<img src = "./images/assets/waypoint.png" style = "width: 30%;">
					</td>
					<td>
						<select name = "node-farm" id = "node-farm">
							<option value = "Bjora Marches"> Bjora Marches </option>
							<option value = "Bloodstone Fen"> Bloodstone Fen </option>
							<option value = "Draconis Mons"> Draconis Mons </option>
							<option value = "Dredgehaunt Cliffs"> Dredgehaunt Cliffs </option>
							<option value = "Flax"> Flax </option>
							<option value = "Lake Doric"> Lake Doric </option>
							<option value = "Mount Maelstrom"> Mount Maelstrom </option>
							<option value = "Orr"> Orr </option>
							<option value = "Rich Nodes"> Rich Nodes </option>
							<option value = "Sandswept Isles"> Sandswept Isles </option>
							<option value = "Siren's Landing"> Siren's Landing </option>
							<option value = "Sparkfly Fen"> Sparkfly Fen </option>
							<option value = "Timberline Falls"> Timberline Falls </option>
							<option value = "Winterberry"> Winterberry </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for = "sickle"> Sickle: </label>
					</td>
					<td align="center">
						<img src = "./images/assets/sickle.png" style = "width: 30%;">
					</td>
					<td>
						<select name = "sickle" id = "sickle">
							<option value = "0"> None </option>
							<option value = "Bounty"> Bounty </option>
							<option value = "Forester"> Forester </option>
							<option value = "Herbalist"> Herbalist </option>
							<option value = "Leatherworker"> Leatherworker </option>
							<option value = "Prospector"> Prospector </option>
							<option value = "Scavenger"> Scavenger </option>
							<option value = "Tailor"> Tailor </option>
							<option value = "Unbound"> Unbound </option>
							<option value = "Volatile"> Volatile </option>
							<option value = "Watchknight"> Watchknight </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for = "axe"> Axe: </label>
					</td>
					<td align="center">
						<img src = "./images/assets/axe.png" style = "width: 30%;">
					</td>
					<td>
						<select name = "axe" id = "axe">
							<option value = "0"> None </option>
							<option value = "Bounty"> Bounty </option>
							<option value = "Forester"> Forester </option>
							<option value = "Herbalist"> Herbalist </option>
							<option value = "Leatherworker"> Leatherworker </option>
							<option value = "Prospector"> Prospector </option>
							<option value = "Scavenger"> Scavenger </option>
							<option value = "Tailor"> Tailor </option>
							<option value = "Unbound"> Unbound </option>
							<option value = "Volatile"> Volatile </option>
							<option value = "Watchknight"> Watchknight </option>
						</select>
					</td>
				</tr>
					<td>
						<label for = "pick"> Pick: </label>
					</td>
					<td align="center">
						<img src = "./images/assets/pick.png" style = "width: 30%;">
					</td>
					<td>
						<select name = "pick" id = "pick">
							<option value = "0"> None </option>
							<option value = "Bounty"> Bounty </option>
							<option value = "Forester"> Forester </option>
							<option value = "Herbalist"> Herbalist </option>
							<option value = "Leatherworker"> Leatherworker </option>
							<option value = "Prospector"> Prospector </option>
							<option value = "Scavenger"> Scavenger </option>
							<option value = "Tailor"> Tailor </option>
							<option value = "Unbound"> Unbound </option>
							<option value = "Volatile"> Volatile </option>
							<option value = "Watchknight"> Watchknight </option>
						</select>
					</td>
				<tr>
					<td>
						<label for = "characters"> Characters: </label>
					</td>
					<td align="center">
						<img src = "./images/assets/blue_dolyak.png" style = "width: 30%;">
					</td>
					<td>
						<select name = "characters" id = "characters">
							<option value = "1"> 1 </option>
							<option value = "2"> 2 </option>
							<option value = "3"> 3 </option>
							<option value = "4"> 4 </option>
							<option value = "5"> 5 </option>
							<option value = "6"> 6 </option>
							<option value = "7"> 7 </option>
							<option value = "8"> 8 </option>
							<option value = "9"> 9 </option>
							<option value = "10"> 10 </option>
							<option value = "11"> 11 </option>
							<option value = "12"> 12 </option>
							<option value = "13"> 13 </option>
							<option value = "14"> 14 </option>
							<option value = "15"> 15 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for = "time"> Time: </label>
					</td>
					<td align="center">
						<img src = "./images/assets/Chronomancer_Icon.png" style = "width: 30%;">
					</td>
					<td>
						<select name = "hour" id = "hour">
							<option value = "0"> 0 </option>
							<option value = "1"> 1 </option>
							<option value = "2"> 2 </option>
							<option value = "3"> 3 </option>
							<option value = "4"> 4 </option>
							<option value = "5"> 5 </option>
							<option value = "6"> 6 </option>
							<option value = "7"> 7 </option>
							<option value = "8"> 8 </option>
							<option value = "9"> 9 </option>
						</select>
						<b style = "font-size: 20px;">:</b>
						<select name = "minute-1" id = "minute-1">
							<option value = "0"> 0 </option>
							<option value = "1"> 1 </option>
							<option value = "2"> 2 </option>
							<option value = "3"> 3 </option>
							<option value = "4"> 4 </option>
							<option value = "5"> 5 </option>
						</select>
						<select name = "minute-2" id = "minute-2">
							<option value = "0"> 0 </option>
							<option value = "1"> 1 </option>
							<option value = "2"> 2 </option>
							<option value = "3"> 3 </option>
							<option value = "4"> 4 </option>
							<option value = "5"> 5 </option>
							<option value = "6"> 6 </option>
							<option value = "7"> 7 </option>
							<option value = "8"> 8 </option>
							<option value = "9"> 9 </option>
						</select>
					</td>
				</tr>
			</table>
		</div> <!-- End of overflow-x scroll -->

		<div id = "time-notice" style = "color: #802020; text-align: center; margin-left: auto; margin-right: auto;" align = "center"></div>

		<div class = "calc-button">
			<button  type = "button" id = "calculate" class = "add-button" onclick = "display_values('node-farm','sickle','axe','pick', 'characters', 'hour', 'minute-1', 'minute-2','find-farm');"> Calculate </button>
			<div id = "find-farm" style = "margin: 5px;">
				<!--<button  type = "button" id = "find-farm" class = "add-button"> View Selected Farm </button>-->
			</div>
		</div>

		<div>
			<img id = "rolling-choya-node-proof" class = "rolling-choya" src = "./images/assets/rolling-choya.png" style = "width: 20%; display: none;">

			<table class = "node-proof"> 
				<tr>
					<th> </th>
					<th> Node Name </th>
					<th> Equation</th>
				</tr>
				<tbody id = "node-proof-data"></tbody> 
			</table>
		</div>

		<div class = "small-description">
			The Node Farm Calculator will result in an estimated profit per character for a given farm. What is gathered is based on my farms listed in the <a href = "./benchmarks.html" target = "_blank" style = "text-decoration: underline;"> benchmarks</a>, the list below, and from a button that will appear after calculating a node farm labeled "View Selected Farm". The purpose of this calculator is to experiment with different combinations of farms + glyphs and figure out what the estimated outcome could be. The table will list the: 
			<br> - Quantity of a particular node 
			<br> - Average worth of the node 
			<br> - Average worth of the glyphs used for that particular farm 
			<br><br>
			The equation goes as following: 
			<br><b>Nodes = (Quanity of node * Avg worth of node) + (Quanity of node * Avg worth of glyph based on the zone/farm)</b>
			<br><br>
			Final value:
			<br>
			<b> &Sigma; Nodes / Time </b>| Note: If time = 0, it is defaulted to 1. Thus, the final value would be gold per character rather than per time, hour, etc. Time = ((hour * 60) + (minute_1 * 10) + (minute_2)) / 60
		</div>

	</div> <!-- End of page-box for node calculator -->

		
	<div class = "page-box">
		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Node Farms</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div id = "farms" class = "double-box" style = "align-items: center;">
			<div id = "loading" class = "loading">
				<img id = "loading-image" class = "loading-image" src = "./images/assets/research-choya.png">
				<table id = "benchmarks" class = "gathering-benchmarks"> 
					<thead> 
						<tr>
							<th onclick = "sortTableByAlphabet('benchmarks', 0);"> Map </th>
							<th onclick = "sortTableByTime('benchmarks', 1);"> Time </th>
							<th onclick = "sortTableByGPH('benchmarks', 2);"> Benchmark </th>
							<th onclick = "sortTableByQuantity('benchmarks', 3);"> <img title = "UM" src = ".\images\assets\Unbound_Magic.png" style = "width: 50%;"></th>
							<th onclick = "sortTableByQuantity('benchmarks', 4);"> <img title = "VM" src = ".\images\assets\Volatile_Magic.png" style = "width: 50%;"> </th>
						</tr>
					</thead>
					<tbody id = "tableData"></tbody>
				</table>
			</div>

			<div class = "small-description" style = "max-width: 400px;">
				<b> About </b>
				<br>
				All gathering farms will have (w/ [something]). That something is what type of glyph/tool I used for that farm such as Glyph of Volatility. This glyph is the default glyph for my benchmarks. Use the calculator above to test out the estimated profits for different ones. 
				<br><br> 
				These tools can be purchased with Karma at every Lounge Pass area or cities. Check the <a href = "https://wiki.guildwars2.com/wiki/Harvesting_Sickle_of_Bounty" target = "_blank" style = "text-decoration: underline;"> GW2Wiki</a> for every NPC that offers it. Unbound can be found <a href = "https://wiki.guildwars2.com/wiki/Unbound_Logging_Axe" target = "_blank" style = "text-decoration: underline"> here</a> and Volatile can be found <a href = "https://wiki.guildwars2.com/wiki/Volatile_Logging_Axe" target = "_blank" style = "text-decoration: underline"> here.</a> 
				<br><br>
				Depending on the size of the farm, there are multiple character swapping to achieve an hour worth of data.
			</div>
		</div>
	</div>



	<div class = "page-box">

		<div style = "position: relative;">
			<div class = "section-header">
				<h1>Glyphs</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "page-links">
			<p1><a href="https://docs.google.com/spreadsheets/d/1VT52qxoPQdvHBMwqeZu2oT4oFGiQneRBk0A3huyOF-4/edit#gid=220353359" target = "_blank"> Spreadsheet </a></p1>
		</div>

		<div class = "small-description">
			<span style = "font-weight: bold"> Disclaimer: </span> Sample size may be small for some of the node data. This project will increase over time as it takes an extremely long time to gather every single node for every glyph (+ different levels). For very specific drop rates, check the spreadsheet link above. 
			<br><br>
			Below showcases the average profit per strike and per node. Both tables are auto-sorted to profit/node, but can be sorted via clicking the headers. For Bounty, there is a 47.48% increase in resources for plants and 15.83% in ores and wood (<a href = "https://wiki.guildwars2.com/wiki/Gathering#Notes_on_additional_strikes" target = "_blank" style = "text-decoration: underline;">wiki</a>). These are the average value/node w/ Bounty - value/node w/o any glyphs. In result, profit/node is the <b>estimated gain</b> for using Bounty for these specific nodes. For example, for Blooming Passiflora, the value under Profit/Node is how much more you may make in addition to how much the node is worth by itself. 
		</div>

		<div class = "double-box" style = "overflow-y: scroll; height: 1000px;">

			<div id = "loading" class = "loading">
				<div class = "homepage-title" style = "margin: 15px">
					<h1> Most Glyphs</h1>
				</div>
				<img id = "loading-image-glyphs" class = "loading-image" src = "./images/assets/gathering-choya.png">
				<table id = "all-glyphs" class = "all-glyphs"> 
					<thead> 
						<tr>
							<th onclick = "sortTableByAlphabet('all-glyphs', 0);" ondblclick = "sortTableByAlphabet_Backwards('all-glyphs', 0);"> Glyph </th>
							<th onclick = "sortTableByAlphabet('all-glyphs', 1);" ondblclick = "sortTableByAlphabet_Backwards('all-glyphs', 1);"> Tool </th>
							<th onclick = "sortTableByAlphabet('all-glyphs', 2);" ondblclick = "sortTableByAlphabet_Backwards('all-glyphs', 2);"> Level </th>
							<th onclick = "sortTableByPrice('all-glyphs', 3);" ondblclick = "sortTableByPrice_Backwards('all-glyphs', 3);"> Profit/Strike </th>
							<th onclick = "sortTableByPrice('all-glyphs', 4);" ondblclick = "sortTableByPrice_Backwards('all-glyphs', 4);"> Profit/Node </th>
						</tr>
					</thead>
					<tbody id = "tableData-glyphs"></tbody>
				</table> 
			</div>

			<div id = "loading" class = "loading">
				<div class = "homepage-title" style = "margin: 15px">
					<h1> Bounty Glyph </h1>
				</div>
				<img id = "loading-image-bounty" class = "loading-image" src = "./images/assets/gathering-choya.png">
				<table id = "bounty" class = "bounty-glyph"> 
					<thead> 
						<tr>
							<th onclick = "sortTableByAlphabet('bounty', 0);" ondblclick = "sortTableByAlphabet_Backwards('bounty', 0);"> Node </th>
							<th onclick = "sortTableByAlphabet('bounty', 1);" ondblclick = "sortTableByAlphabet_Backwards('bounty', 1);"> Tool </th>
							<th onclick = "sortTableByPrice('bounty', 2);" ondblclick = "sortTableByPrice_Backwards('bounty', 2);"> Profit/Node </th>
						</tr>
					</thead>
					<tbody id = "tableData-bounty"></tbody>
				</table> 
			</div>
		</div> <!-- End of multi left -->
	</div>

	<div id = "speed-of-tools" class = "homepage-title">
			<h1> Speed of Tools </h1>
		</div>

	<div class = "small-description" style = "margin-bottom: -20px;">
		These are the speeds for each some gathering tools. This information was all from this <a href = "https://docs.google.com/spreadsheets/d/1stw9RIOjS2ENOelHPhp494ne90e2G3xQNUUfmQ6mXBs/edit#gid=1489005975" target = "_blank" style = "text-decoration: underline"> spreadsheet </a> by <a href = "https://old.reddit.com/r/Guildwars2/comments/8bbwcm/science_exact_gathering_tool_speeds/" target = "_blank" style = "text-decoration: underline"> /u/MarsEdge</a>. All tables are sorted by the total amount of time required to harvest a node. % to Interrupt means the % of the cast time you can interrupt, but still gather the node. 
		<br><br>
		All tools grant 4 strikes. This means you only have to cast the tool animation 3 times instead of 4 and can interrupt it midway of the 3rd. 
		<br><br>
		Some tools have some niche benefits besides the speed:
		<br> Unbound Harvesting Sickle - Strikes once and gathers all possible chances for additional strikes (gathering halls)
		<br> Choya Mining Pick - Requires only 2 strikes on rich nodes rather than 3 (gathers 5 strikes)
	</div>

	<div style = "display: flex; flex-direction: column;">
		<div class = "overflow-table">
			<div class = "homepage-title">
				<h1> Harvesting Tools </h1>
			</div>
			<table id = "tool-speed" class = "bounty-glyph"> 
				<tr>
					<th> Tool </th>
					<th> Cast Time </th>
					<th> Aftercast </th>
					<th> % to Interrupt </th>
					<th> Total </th>
				</tr>

				<tr>
					<td> Consortium </td>
					<td> 1400ms</td>
					<td> 600ms </td>
					<td> 52% </td>
					<td> 1040ms </td>
				</tr>
				<tr>
					<td> Molten </td>
					<td> 1400ms</td>
					<td> 600ms </td>
					<td> 52% </td>
					<td> 1040ms </td>
				</tr>
				<tr>
					<td> Tresher </td>
					<td> 2190ms</td>
					<td> 960ms </td>
					<td> 60% </td>
					<td> 1890ms </td>
				</tr>
				<tr>
					<td> Reap-r-Tron </td>
					<td> 2000ms</td>
					<td> 0 </td>
					<td> 100% </td>
					<td> 2000ms </td>
				</tr>

				<tr>
					<td> Skritt </td>
					<td> 4200ms</td>
					<td> 0 </td>
					<td> 50% </td>
					<td> 2100ms </td>
				</tr>
				<tr>
					<td> Volatile </td>
					<td> 2568ms</td>
					<td> 22ms </td>
					<td> 100% </td>
					<td> 2590ms </td>
				</tr>
				<tr>
					<td> Unbound </td>
					<td> 2520ms</td>
					<td> 230ms </td>
					<td> 100% </td>
					<td> 2750ms </td>
				</tr>
				<tr>
					<td> Cosmic</td>
					<td> 2168ms</td>
					<td> 1732ms </td>
					<td> 100% </td>
					<td> 3900ms </td>
				</tr>
				<tr>
					<td> Basic </td>
					<td> 2168ms</td>
					<td> 1762 </td>
					<td> 100% </td>
					<td> 3930ms </td>
				</tr>

				<tr>
					<td> Basic </td>
					<td> 2168ms</td>
					<td> 1762ms </td>
					<td> 100% </td>
					<td> 3930ms </td>
				</tr>
			</table>
		</div>

		<div class = "overflow-table">
			<div class = "homepage-title">
				<h1> Logging Tools </h1>
			</div>
			<table id = "tool-speed" class = "bounty-glyph"> 
				<tr>
					<th> Tool </th>
					<th> Cast Time </th>
					<th> Aftercast </th>
					<th> % to Interrupt </th>
					<th> Total </th>
				</tr>

				<tr>
					<td> Unbound </td>
					<td> 4250ms</td>
					<td> 0ms </td>
					<td> 100% </td>
					<td> 4250ms </td>
				</tr>
				<tr>
					<td> Frost Wasp </td>
					<td> 4250ms</td>
					<td> 360ms </td>
					<td> 100% </td>
					<td> 4610ms </td>
				</tr>
				<tr>
					<td> Log-r-Tron </td>
					<td> 4500ms</td>
					<td> 250ms </td>
					<td> 100% </td>
					<td> 4750ms </td>
				</tr>
				<tr>
					<td> Volatile </td>
					<td> 4480ms</td>
					<td> 620ms </td>
					<td> 100% </td>
					<td> 5100ms </td>
				</tr>
				<tr>
					<td> Cosmic </td>
					<td> 4500ms</td>
					<td> 1000ms </td>
					<td> 100% </td>
					<td> 5500ms </td>
				</tr>
				<tr>
					<td> Dream </td>
					<td> 4700ms</td>
					<td> 1650ms </td>
					<td> 100% </td>
					<td> 6350ms </td>
				</tr>
				<tr>
					<td> Basic </td>
					<td> 4700ms</td>
					<td> 1670ms </td>
					<td> 100% </td>
					<td> 6370ms </td>
				</tr>
				<tr>
					<td> ChopItAll </td>
					<td> 4700ms</td>
					<td> 1700ms </td>
					<td> 100% </td>
					<td> 6400ms </td>
				</tr>
			</table>
		</div>
	</div> <!-- End off block -->

	<div class = "overflow-table">
		<div class = "homepage-title">
			<h1> Mining Tools </h1>
		</div>
		<table id = "tool-speed" class = "bounty-glyph" style = "margin-top: 15px;"> 
			<tr>
				<th> Tool </th>
				<th> Cast Time </th>
				<th> Aftercast </th>
				<th> % to Interrupt </th>
				<th> Total </th>
			</tr>

			<tr>
				<td> Unbound </td>
				<td> 3989ms</td>
				<td> 1061ms </td>
				<td> 70% </td>
				<td> 3535ms </td>
			</tr>
			<tr>
				<td> Volatile </td>
				<td> 4252ms</td>
				<td> 123ms </td>
				<td> 100% </td>
				<td> 4370ms </td>
			</tr>
			<tr>
				<td> Cosmic </td>
				<td> 4500ms</td>
				<td> 1000ms </td>
				<td> 100% </td>
				<td> 5500ms </td>
			</tr>
			<tr>
				<td> Basic </td>
				<td> 4500ms</td>
				<td> 1850ms </td>
				<td> 100% </td>
				<td> 6350ms </td>
			</tr>
			<tr>
				<td> Watchwork </td>
				<td> 4500ms</td>
				<td> 1850ms </td>
				<td> 100% </td>
				<td> 6350ms </td>
			</tr>
			<tr>
				<td> Molten </td>
				<td> 4500ms</td>
				<td> 1850ms </td>
				<td> 100% </td>
				<td> 6350ms </td>
			</tr>
			<tr>
				<td> Bone Pick </td>
				<td> 4500ms</td>
				<td> 1850ms </td>
				<td> 100% </td>
				<td> 6350ms </td>
			</tr>
		</table>
	</div>
</div> <!-- End of page-box -->

<script> getGlyphs("all-glyphs",'loading-image-glyphs');
	getBountyValues("bounty", "loading-image-bounty");</script>



						
	<script> getGatheringBenchmarkAll('benchmarks','loading-image'); 
	</script>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("footer.php"); ?>
	
</body>
</html>