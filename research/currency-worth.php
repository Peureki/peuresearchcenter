<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Currency Worth </title>

	<script type = "text/javascript" src = "<?php echo $base;?>/research/magic.js?=v<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/research/spirit-shards.js?=v<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/research/trade-contracts.js?=v<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/research/bandit-crests.js?=v<?php echo $date;?>"></script>
	<script type = "text/javascript" src = "<?php echo $base;?>/research/laurels.js?=v<?php echo $date;?>"></script>
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
			<a href = "#bandit-crests"><li id = "bookmark-bc" > &#10097; Bandit Crests </li></a> 
			<a href = "#laurels"><li id = "bookmark-laurels" > &#10097; Laurels </li></a> 
			<a href = "#spirit-shards"><li id = "bookmark-ss" > &#10097; Spirit Shards 
				<ul>
					<a href = "#spirit-shards-fineT1ToT2"><li id = "bookmark-fineT1ToT2" > &#10093; Fine T1 &#x2192; T2 </li></a>
					<a href = "#spirit-shards-fineT2ToT3"><li id = "bookmark-fineT2ToT3" > &#10093; Fine T2 &#x2192; T3 </li></a>
					<a href = "#spirit-shards-fineT3ToT4"><li id = "bookmark-fineT3ToT4" > &#10093; Fine T3 &#x2192; T4 </li></a>
					<a href = "#spirit-shards-fineT4ToT5"><li id = "bookmark-fineT4ToT5" > &#10093; Fine T4 &#x2192; T5 </li></a>
					<a href = "#spirit-shards-fineT5ToT6"><li id = "bookmark-fineT5ToT6" > &#10093; Fine T5 &#x2192; T6 </li></a>
					<a href = "#spirit-shards-rareT1ToT2"><li id = "bookmark-rareT1ToT2" > &#10093; Rare T1 &#x2192; T2 </li></a>
					<a href = "#spirit-shards-rareT2ToT3"><li id = "bookmark-rareT2ToT3" > &#10093; Rare T2 &#x2192; T3 </li></a>
					<a href = "#spirit-shards-rareT3ToT4"><li id = "bookmark-rareT3ToT4" > &#10093; Rare T3 &#x2192; T4 </li></a>
					<a href = "#spirit-shards-rareT4ToT5"><li id = "bookmark-rareT4ToT5" > &#10093; Rare T4 &#x2192; T5 </li></a>
				</ul>
			</li></a> 
			<a href = "#trade-contracts"><li id = "bookmark-tc" > &#10097; Trade Contracts </li></a> 
			<a href = "#unbound-magic"><li id = "bookmark-um" > &#10097; Unbound Magic </li></a>
			<a href = "#volatile-magic"><li id = "bookmark-vm" > &#10097; Volatile Magic </li></a>
		</ul>
	</div>	

	<div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box-overflow" style = "min-width: 180px;">
		<b style = "font-size: 20px;"> Preferences </b>
	    <br> 
	    Toggle to show/hide
	    <br><br>
		<button  type = "button" id = "default" class = "select-button" onclick = "showPreferences(this.id, 0);"> Default </button> 
	    <br><br>
	    <b> Currencies </b>
	    <br><br>
	    Bandit Crests <input type = "Checkbox" id = "check-bc" onclick = "showPreferences(this.id, 'bc');"> 
	    <br>
	    Laurels <input type = "Checkbox" id = "check-laurels" onclick = "showPreferences(this.id, 'laurels');"> 
	    <br>
	    Trade Contracts <input type = "Checkbox" id = "check-tc" onclick = "showPreferences(this.id, 'tc');">
	    <br>
	    VM & UM <input type = "Checkbox" id = "check-vmum" onclick = "showPreferences(this.id, 'vmum');">   
	    <br><br>
	    <b> Spirit Shards </b>
	    <br><br>
	    Fine T1 &#x2192; T2: <input type = "Checkbox" id = "check-fineT1ToT2" onclick = "showPreferences(this.id, 1);"> 
	    <br>
	    Fine T2 &#x2192; T3: <input type = "Checkbox" id = "check-fineT2ToT3" onclick = "showPreferences(this.id, 2);"> 
	    <br>
	    Fine T3 &#x2192; T4: <input type = "Checkbox" id = "check-fineT3ToT4" onclick = "showPreferences(this.id, 3);"> 
	    <br>
	    Fine T4 &#x2192; T5: <input type = "Checkbox" id = "check-fineT4ToT5" onclick = "showPreferences(this.id, 4);"> 
	    <br>
	    Fine T5 &#x2192; T6: <input type = "Checkbox" id = "check-fineT5ToT6" onclick = "showPreferences(this.id, 5);">
	    <br>
	    Rare T1 &#x2192; T2: <input type = "Checkbox" id = "check-rareT1ToT2" onclick = "showPreferences(this.id, 1);">
	    <br>
	    Rare T2 &#x2192; T3: <input type = "Checkbox" id = "check-rareT2ToT3" onclick = "showPreferences(this.id, 2);">
	    <br>
	    Rare T3 &#x2192; T4: <input type = "Checkbox" id = "check-rareT3ToT4" onclick = "showPreferences(this.id, 3);">
	    <br>
	    Rare T4 &#x2192; T5: <input type = "Checkbox" id = "check-rareT4ToT5" onclick = "showPreferences(this.id, 4);">  
	</div>

	<div class = "page-box">
		<div id = "bandit-crests">
			<div class = "section-header">
				<h1> Bandit Crest </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>

			<div style = "text-align: center;">
				<span style = "font-size: 15px; font-weight: bold;"> Results: </span>
				<select name = "results" id = "results-bc" class = "select-button">
					<option value = "Sell Price"> Sell Price </option>
					<option value = "Buy Price"> Buy Price </option>
				</select>

				<button  type = "button" id = "calculate" class = "select-button" onclick = "showBanditCrest('results-bc');"> Calculate </button>
			</div>

			<table id = "bc" class = "bc"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('tc', 1);"> Item </th>
						<th onclick = "sortTableByPrice('tc', 2);"> /Item </th>
						<th onclick = "sortTableByPrice('tc', 3);"> /Bandit Crest </th>
					</tr>
				</thead>
				<tbody id = "bc-tableBody"></tbody>
			</table>

			<table id = "bc-proof" class = "currency-proof" style = "display: none;"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('tc', 1);"> Pic </th>
						<th onclick = "sortTableByPrice('tc', 2);"> Name </th>
						<th onclick = "sortTableByPrice('tc', 3);"> Drop Rate </th>
						<th> Worth </th>
					</tr>
				</thead>
				<tbody id = "bc-proof-tableBody"></tbody>
			</table>
		</div>

		<div id = "laurels">
			<div class = "section-header">
				<h1> Laurels </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div style = "text-align: center;">
				<span style = "font-size: 15px; font-weight: bold;"> Results: </span>
				<select name = "results" id = "results-laurels" class = "select-button">
					<option value = "Sell Price"> Sell Price </option>
					<option value = "Buy Price"> Buy Price </option>
				</select>

				<button  type = "button" id = "calculate" class = "select-button" onclick = "showLaurels('results-laurels');"> Calculate </button>
			</div>

			<table id = "laurels-table" class = "laurels"> 
				<thead> 
					<tr>
						<th onclick = "sortTableByAlphabet('tc', 1);"> Bag </th>
						<th onclick = "sortTableByPrice('tc', 3);"> /Laurel </th>
					</tr>
				</thead>
				<tbody id = "laurels-tableBody"></tbody>
			</table>
		</div>

		<div id = "spirit-shards">
			<div class = "section-header">
				<h1> Spirit Shards </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div style = "text-align: center;">
				<span style = "font-size: 15px; font-weight: bold;"> Items: </span>
				<select name = "items" id = "items-ss" class = "select-button">
					<option value = "Buy Price"> Buy Price </option>
					<option value = "Sell Price"> Sell Price </option>
				</select>

				<span style = "font-size: 15px; font-weight: bold;"> Results: </span>
				<select name = "results" id = "results-ss" class = "select-button">
					<option value = "Sell Price"> Sell Price </option>
					<option value = "Buy Price"> Buy Price </option>
				</select>

				<span style = "font-size: 15px; font-weight: bold;"> Tax: </span>
				<select name = "results" id = "tax-ss" class = "select-button">
					<option value = "85% Tax"> 85% Tax (TP Tax) </option>
					<option value = "90% Tax"> 90% Tax </option>
					<option value = "No Tax"> No Tax </option>
				</select>

				<button  type = "button" id = "calculate" class = "select-button" onclick = "showSSPrices('items-ss', 'results-ss', 'tax-ss');"> Calculate </button>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-fineT1ToT2">
				<div class = "homepage-title">
					<h1> Fine T1 &#x2192; T2 </h1> 
				</div>

				<table id = "ss-fine-t1ToT2" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result </th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-fine-t1ToT2-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div = id = "spirit-shards-fineT2ToT3">
				<div class = "homepage-title">
					<h1> Fine T2 &#x2192; T3 </h1> 
				</div>

				<table id = "ss-fine-t2ToT3" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-fine-t2ToT3-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-fineT3ToT4">
				<div class = "homepage-title">
					<h1> Fine T3 &#x2192; T4 </h1> 
				</div>

				<table id = "ss-fine-t3ToT4" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-fine-t3ToT4-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-fineT4ToT5">
				<div class = "homepage-title">
					<h1> Fine T4 &#x2192; T5 </h1> 
				</div>

				<table id = "ss-fine-t4ToT5" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-fine-t4ToT5-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-fineT5ToT6">
				<div class = "homepage-title">
					<h1> Fine T5 &#x2192; T6 </h1>
				</div>

				<table id = "ss-fine-t5ToT6" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-fine-t5ToT6-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-rareT1ToT2">
				<div>
					<div class = "homepage-title">
						<h1> Rare T1 &#x2192; T2 </h1>
					</div>

					<table id = "ss-rare-t1ToT2" class = "four-ingre">
						<thead>
							<tr>
								<th> Item 1 </th>
								<th> </th>
								<th> Item 2 </th>
								<th> </th>
								<th> Item 3 </th>
								<th> </th>
								<th> Item 4 </th>
								<th> </th>
								<th> Result</th>
								<th> /Conversion </th>
								<th> /Spirit Shard </th>
							</tr>	
						</thead>
						<tbody id = "ss-rare-t1ToT2-tableBody"></tbody>
					</table>
				</div>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-rareT2ToT3">
				<div class = "homepage-title">
					<h1> Rare T2 &#x2192; T3 </h1>
				</div>

				<table id = "ss-rare-t2ToT3" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-rare-t2ToT3-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-rareT3ToT4">
				<div class = "homepage-title">
					<h1> Rare T3 &#x2192; T4 </h1>
				</div>

				<table id = "ss-rare-t3ToT4" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-rare-t3ToT4-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div class = "overflow-table">
			<div id = "spirit-shards-rareT4ToT5">
				<div class = "homepage-title">
					<h1> Rare T4 &#x2192; T5 </h1>
				</div>

				<table id = "ss-rare-t4ToT5" class = "four-ingre">
					<thead>
						<tr>
							<th> Item 1 </th>
							<th> </th>
							<th> Item 2 </th>
							<th> </th>
							<th> Item 3 </th>
							<th> </th>
							<th> Item 4 </th>
							<th> </th>
							<th> Result</th>
							<th> /Conversion </th>
							<th> /Spirit Shard </th>
						</tr>	
					</thead>
					<tbody id = "ss-rare-t4ToT5-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div id = "trade-contracts">
			<div class = "section-header">
				<h1> Trade Contracts </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div class = "small-description">
					Calculations can be found in this <a href = "https://docs.google.com/spreadsheets/d/1CLhCWWLgtXqap7XWxoezNFkeZfVYHMeSVPc8Mmz-ZU4/edit#gid=1933064350" style = "text-decoration: underline;" target="_blank"> spreadsheet. </a>
					<br><br>
					These caches are available after completing certain hearts vendors in PoF maps. 
					<br> <a href = "https://wiki.guildwars2.com/wiki/Cowrie_League_Leather_Crate" target = "_blank"><u>Cowrie</u></a>, <a href = "https://wiki.guildwars2.com/wiki/Hamaseen_Wood_Crate" target = "_blank"><u>Hamaseen</u></a>, and <a href = "https://wiki.guildwars2.com/wiki/House_of_Daoud_Leather_Crate" target = "_blank"><u>House of Daoud</u></a>
			</div>
			<div class = "overflow-table">
				<table id = "tc" class = "worth-tc"> 
					<thead> 
						<tr>
							<th></th>
							<th onclick = "sortTableByAlphabet('tc', 1);"> Trade Cache</th>
							<th onclick = "sortTableByPrice('tc', 2);"> Per TC</th>
							<th onclick = "sortTableByPrice('tc', 3);"> Per Cache </th>
						</tr>
					</thead>
					<tbody id = "tc-tableBody"></tbody>
				</table>
			</div>
		</div>

		<div id = "vmum">
			<div class = "section-header">
				<h1> Volatile/Unbound Magic </h1>
				<div class = "banner-box"></div>
				<img src = "../images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div class = "small-description">
				Values consider both TP tax and the price it costs to buy the shipments/packets/bundles. Calculations can be found in this <a href = "https://docs.google.com/spreadsheets/d/1AqxY0qEhl9X55X4t2yoMprSjkqSQU_vJ5ZYGdl-bbuE/edit?usp=sharing" style = "text-decoration: underline;" target="_blank"> spreadsheet. </a>
			</div>

			<div style = "text-align: center;">
				<span style = "font-size: 15px; font-weight: bold;"> Results: </span>
				<select name = "results" id = "results-magic" class = "select-button">
					<option value = "Sell Price"> Sell Price </option>
					<option value = "Buy Price"> Buy Price </option>
				</select>

				<button  type = "button" id = "calculate" class = "select-button" onclick = "showMagic('results-magic');"> Calculate </button>
			</div>

			<div id = "vmum" class = "flex-description">
				<div id = "volatile-magic" style = "margin: 10px;">
					<div class = "homepage-title">
						<h1> Volatile Magic </h1> 
					</div>

					<div class = "overflow-table">
						<table id = "vm" class = "vm">
							<thead>
								<tr>
									<th> Shipment Name</th>
									<th> /Shipment</th>
									<th> /Volatile Magic </th>
								</tr>	
							</thead>
							<tbody id = "vm-tableBody"></tbody>
						</table>
					</div>
				</div>

				<div id = "unbound-magic" style = "margin: 10px;">
					<div class = "homepage-title">
						<h1> Unbound Magic </h1> 
					</div>

					<div class = "overflow-table">
						<table id = "um" class = "um">
							<thead>
								<tr>
									<th> Shipment Name</th>
									<th> /Shipment</th>
									<th> /Unbound Magic </th>
								</tr>	
							</thead>
							<tbody id = "um-tableBody"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			getTradeContracts();
			spiritShards(0);
		</script>
	
	<!-- For this page specifically, the 2nd to last column is colored and needs words need to black to see them -->
	<style>
		.four-ingre td:nth-child(10){
			color: black;
		}
	</style>

	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
	
	<script> getVolatile(); getUnbound(); </script>
	<script> getBanditCrests(); </script>
	<script> getLaurels(); </script>
	
</body>

<script id = "js-pref" type = "text/javascript" src = "<?php echo $base;?>/research/preferences.js?v=<?php echo $date;?>"></script>
<script> doPreferences(); </script>
</html>