<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults, CSS/JS main files -->
	<?php include('config.php'); 
	include ("./js-to-php/get-gathering-benchmarks.php");
	//include ('./js-to-php/gathering-benchmarks.php');
	?>
	<script> 
		// AJAX to show the gathering farm once users have selected the drop down menu of gathering farms
		function show_gathering_farm(str) {
			let div = document.getElementById('gathering-map-tableData');
		  	if (str == "") {
		    	div.innerHTML = "";
		    	return;
		  	} else {
		    	var xmlhttp = new XMLHttpRequest();
		    	xmlhttp.onreadystatechange = function() {
		      	if (this.readyState == 4 && this.status == 200) {
		        	div.innerHTML = this.responseText;
		        	let arr = div.getElementsByTagName('script')
					for (let n = 0; n < arr.length; n++)
					    eval(arr[n].innerHTML)//run script inside div
		      	}
		    };
		    xmlhttp.open("GET","./js-to-php/get-specific-gathering-map.php?q="+str,true);
		    xmlhttp.send();
		  }
		}
	</script>
	<title> Gathering Benchmarks </title>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('nav.php'); ?>

	<div class = "page-box">
		<!--
		<form method = "GET">
			<input type = "hidden" name = "name" value = "Matt">
			<button type = "submit"> Submit </button>
		</form>
		-->
		<form method = "GET" action = "">
			<select name = "node-farm" id = "node-farm" name = "node-farm" onchange="show_gathering_farm(this.value);">
				<option value = "Bjora Marches"> Bjora Marches </option>
				<option value = "Bloodstone Fen"> Bloodstone Fen </option>
				<option value = "Draconis Mons"> Draconis Mons </option>
				<option value = "Dredgehaunt Cliffs"> Dredgehaunt Cliffs </option>
				<option value = "Flax"> Flax </option>
				<option value = "Lake Doric"> Lake Doric </option>
				<option value = "Maguuma Lilies"> Maguuma Lilies </option>
				<option value = "Mount Maelstrom"> Mount Maelstrom </option>
				<option value = "Mussels"> Mussels </option>
				<option value = "Orr"> Orr </option>
				<option value = "Rich Nodes"> Rich Nodes </option>
				<option value = "Sandswept Isles"> Sandswept Isles </option>
				<option value = "Siren's Landing"> Siren's Landing </option>
				<option value = "Sparkfly Fen"> Sparkfly Fen </option>
				<option value = "Timberline Falls"> Timberline Falls </option>
				<option value = "Winterberry"> Winterberry </option>
			</select>
			<input type = "submit">
		</form>

		<table id = 'gathering-benchmarks' class = 'gathering-benchmarks'> 
			<thead> 
				<tr>
					<th onclick = "sortTableByAlphabet('gathering-benchmarks', 0);"> Map </th>
					<th onclick = "sortTableByPrice('gathering-benchmarks', 1);"> Pick </th>
					<th onclick = "sortTableByPrice('gathering-benchmarks', 2);"> Axe </th>
					<th onclick = "sortTableByPrice('gathering-benchmarks', 3);"> Sickle </th>
					<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> GPH </th>
					<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Gold /Char </th>
					<th onclick = "sortTableByPrice('gathering-benchmarks', 4);"> Time /Char </th>
				</tr>
			</thead>
			<tbody id = 'gathering-map-tableData'>
			</tbody>
		</table>
	</div>


	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/gathering-benchmarks.js?v=<?php echo $date;?>"></script>
</body>
</html>