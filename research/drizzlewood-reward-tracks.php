<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Drizzlewood Reward Tracks </title>
</head>
<body>

	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div class = "page-links">
			<p1><a href="https://docs.google.com/spreadsheets/d/1CLhCWWLgtXqap7XWxoezNFkeZfVYHMeSVPc8Mmz-ZU4/edit#gid=1349413477" target = "_blank"> Spreadsheet </a></p1>
		</div>

	<div class = "page-box"> 
		<div class = "section-header">
			<h1> Drizzlewood Reward Tracks </h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			Average is determined by the average price of completing an entire reward track. This includes all materials with a 15% TP tax being considered in the sell price values. Mystic clovers and ascended materials such as Dragonite Ore, Empyreal Fragments, and Bloodstone Dust are not monetized. 
		</div>

		<table id = "drizzle-tracks" class = "worth" style = "opacity: 1;"> 
			<thead> 
				<tr>
					<th onclick = "sortTableByAlphabet('drizzle-tracks', 0);"> Reward Track</th>
					<th onclick = "sortTableByTime('drizzle-tracks', 1);"> Avg Worth</th>
				</tr>
			</thead>
			<tbody id = "drizzleData"></tbody>
		</table>
	</div>

	<div class = "page-box">
		<div class = "section-header">
			<h1> Proofs </h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

		<div class = "small-description">
			Left tables are the full reward track and the average worth of those materials. For containers that offer multiple choices, the best option is chosen. Those are viewed on the right tables. 
		</div>

		<div class = "multi-benchmarks-left">
			<div id = "loading" class = "loading"> 
				<table id = "ash-track" class = "worth-drizzle"> 
					<thead> 
						<tr>
							<th> Ash Legion Reward Track</th>
							<th> Qty</th>
							<th> Avg Worth</th>
						</tr>
					</thead>
					<tbody id = "ash-table"></tbody>
				</table>
			</div>
			<div = style = "white-space: nowrap;"> <!-- Inner box -->
				<div id = "loading" class = "loading"> 
					<table id = "ash-craft" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Ash Legion Crafting Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "ash-craft-table"></tbody>
					</table>
				</div>

				<div id = "loading" class = "loading"> 
					<table id = "ash-reward" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Ash Legion Reward Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "ash-reward-table"></tbody>
					</table>
				</div>
			</div> <!-- End of inner box -->
		</div>

		<div class = "multi-benchmarks-left">
			<div id = "loading" class = "loading"> 
				<table id = "flame-track" class = "worth-drizzle"> 
					<thead> 
						<tr>
							<th> Flame Legion Reward Track</th>
							<th> Qty</th>
							<th> Avg Worth</th>
						</tr>
					</thead>
					<tbody id = "flame-table"></tbody>
				</table>
			</div>

			<div = style = "white-space: nowrap;"> <!-- Inner box -->
				<div id = "loading" class = "loading"> 
					<table id = "flame-craft" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Flame Legion Crafting Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "flame-craft-table"></tbody>
					</table>
				</div>

				<div id = "loading" class = "loading"> 
					<table id = "flame-reward" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Flame Legion Reward Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "flame-reward-table"></tbody>
					</table>
				</div>
			</div> <!-- End of inner box -->
		</div>

		<div class = "multi-benchmarks-left">
			<div id = "loading" class = "loading"> 
				<table id = "iron-track" class = "worth-drizzle"> 
					<thead> 
						<tr>
							<th> Iron Legion Reward Track</th>
							<th> Qty</th>
							<th> Avg Worth</th>
						</tr>
					</thead>
					<tbody id = "iron-table"></tbody>
				</table>
			</div>

			<div = style = "white-space: nowrap;"> <!-- Inner box -->
				<div id = "loading" class = "loading"> 
					<table id = "iron-craft" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Iron Legion Crafting Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "iron-craft-table"></tbody>
					</table>
				</div>

				<div id = "loading" class = "loading"> 
					<table id = "iron-reward" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Iron Legion Reward Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "iron-reward-table"></tbody>
					</table>
				</div>
			</div> <!-- End of inner box -->
		</div>

		<div class = "multi-benchmarks-left"> <!-- Outer box -->
			<div id = "loading" class = "loading"> 
				<table id = "blood-track" class = "worth-drizzle"> 
					<thead> 
						<tr>
							<th> Blood Legion Reward Track</th>
							<th> Qty</th>
							<th> Avg Worth</th>
						</tr>
					</thead>
					<tbody id = "blood-table"></tbody>
				</table>
			</div>

			<div = style = "white-space: nowrap;"> <!-- Inner box -->
				<div id = "loading" class = "loading"> 
					<table id = "blood-craft" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Blood Legion Crafting Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "blood-craft-table"></tbody>
					</table>
				</div>

				<div id = "loading" class = "loading"> 
					<table id = "blood-reward" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Blood Legion Reward Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "blood-reward-table"></tbody>
					</table>
				</div>
			</div> <!-- End of inner box -->
		</div> <!-- End of Outer box --> 

		<div class = "multi-benchmarks-left"> <!-- Outer box -->
			<div id = "loading" class = "loading"> 
				<table id = "dominion-track" class = "worth-drizzle"> 
					<thead> 
						<tr>
							<th> Dominion Reward Track</th>
							<th> Qty</th>
							<th> Avg Worth</th>
						</tr>
					</thead>
					<tbody id = "dominion-table"></tbody>
				</table>
			</div>

			<div = style = "white-space: nowrap;"> <!-- Inner box -->
				<div id = "loading" class = "loading"> 
					<table id = "dominion-craft" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Dominion Crafting Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "dominion-craft-table"></tbody>
					</table>
				</div>

				<div id = "loading" class = "loading"> 
					<table id = "dominion-reward" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Dominion Reward Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "dominion-reward-table"></tbody>
					</table>
				</div>
			</div> <!-- End of inner box -->
		</div> <!-- End of Outer box --> 

		<div class = "multi-benchmarks-left"> <!-- Outer box -->
			<div id = "loading" class = "loading"> 
				<table id = "corrupted-track" class = "worth-drizzle"> 
					<thead> 
						<tr>
							<th> Corrupted Reward Track</th>
							<th> Qty</th>
							<th> Avg Worth</th>
						</tr>
					</thead>
					<tbody id = "corrupted-table"></tbody>
				</table>
			</div>

			<div = style = "white-space: nowrap;"> <!-- Inner box -->
				<div id = "loading" class = "loading"> 
					<table id = "corrupted-craft" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Corrupted Crafting Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "corrupted-craft-table"></tbody>
					</table>
				</div>

				<div id = "loading" class = "loading"> 
					<table id = "corrupted-reward" class = "worth-drizzle"> 
						<thead> 
							<tr>
								<th> Corrupted Reward Box</th>
								<th> Avg Worth</th>
							</tr>
						</thead>
						<tbody id = "corrupted-reward-table"></tbody>
					</table>
				</div>
			</div> <!-- End of inner box -->
		</div> <!-- End of Outer box --> 
	</div>


	<script> //getDrizzleTracks('drizzle-tracks', 'loading-image'); 
	getDrizzleTrackProofs();
	</script>

		
	</div> <!-- End of page-box -->
	
	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
</body>
</html>