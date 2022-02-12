<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults, CSS/JS main files -->
	<?php include('config.php'); 
	include ("./js-to-php/get-gathering-benchmarks.php");
	//include ('./js-to-php/gathering-benchmarks.php');
	?>
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
		<table id = "gathering-benchmarks" class = "benchmarks" style = "display: block; opacity: 1;"> 
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
			<tbody id = "gathering-tableData"></tbody>
		</table>

		<!--<script> let merptest = document.getElementById('merptest'); merptest.innerHTML = displayValues(10000,0); </script>-->

		<?php 

			function display_gathering_map($farm){
				/*$farm = json_decode($farm);
				for ($i = 0; $i < count($farm); $i++){
					$dataHTML += `<tr>
					<td> {$farm[$i]['name']} </td>
					<td> {$farm[$i]['pick']} </td>
					<td> {$farm[$i]['axe']} </td> 
					<td> {$farm[$i]['sickle']} </td> 
					<td> {$farm[$i]['gold_per_hour']} </td>
					<td> {$farm[$i]['gold_per_char']} </td>
					<td> {$farm[$i]['time_per_char']} </td> 
					</td>`;
				}
				$table = `
				<table id = "gathering-benchmarks" class = "benchmarks" style = "display: block; opacity: 1;"> 
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
					<tbody>`.`{$dataHTML}`.`
				</table>`;*/
				$farm = json_decode($farm, TRUE);
				$dataHTML = ""; 
				for ($i = 0; $i < 10; $i++){
					$gphID = "gathering-map-gph".$i; 
					$gpcID = "gathering-map-gpc".$i;
					$dataHTML .= "<tr>
					<td> ".$farm[$i]['name']."</td>
					<td> ".$farm[$i]['pick']." </td>
					<td> ".$farm[$i]['axe']." </td> 
					<td> ".$farm[$i]['sickle']." </td> 
					<td id = ".$gphID."></td>
					<td id = ".$gpcID."> ".$farm[$i]['gold_per_char']." </td>
					<td> ".$farm[$i]['time_per_char']." </td> 
					</td>
					<script> let gphID".$i." = document.getElementById('".$gphID."'), 
						gpcID".$i." = document.getElementById('".$gpcID."'); 

					gphID".$i.".innerHTML = displayValues(".$farm[$i]['gold_per_hour'].", 0);
					gpcID".$i.".innerHTML = displayValues(".$farm[$i]['gold_per_char'].", 0);"."</script>"."";
				}

				echo "<table id = 'gathering-benchmarks' class = 'benchmarks' style = 'display: block; opacity: 1;'> 
					<thead> 
						<tr>
							<th onclick = 'sortTableByAlphabet('gathering-benchmarks', 0);'> Map </th>
							<th onclick = 'sortTableByPrice('gathering-benchmarks', 1);'> Pick </th>
							<th onclick = 'sortTableByPrice('gathering-benchmarks', 2);'> Axe </th>
							<th onclick = 'sortTableByPrice('gathering-benchmarks', 3);'> Sickle </th>
							<th onclick = 'sortTableByPrice('gathering-benchmarks', 4);'> GPH </th>
							<th onclick = 'sortTableByPrice('gathering-benchmarks', 4);'> Gold /Char </th>
							<th onclick = 'sortTableByPrice('gathering-benchmarks', 4);'> Time /Char </th>
						</tr>
					</thead>
					<tbody id = 'gathering-map-tableData'>
					".
						$dataHTML
					."
					</tbody>
				</table>";

			}

			if ($_SERVER["REQUEST_METHOD"]=="POST"){
				$farmName = $_POST["node-farm"];
				$farmJSON = $gatheringDB->get_specific_map($farmName); 
				display_gathering_map($farmJSON);
			}
		?>
		<form method = "post" action = "">
			<select name = "node-farm" id = "node-farm" name = "node-farm">
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
			<input type = "submit" name = "submit" value = "Submit">
		</form>

		<!--<table id = "gathering-benchmarks" class = "benchmarks" style = "display: block; opacity: 1;"> 
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
			<tbody id = "gathering-map-tableData"></tbody>
		</table>
	-->
	</div>

	<script> get_gathering_benchmarks(); //get_gathering_maps();</script>
	<script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/gathering-benchmarks.js?v=<?php echo $date;?>"></script>
</body>
</html>