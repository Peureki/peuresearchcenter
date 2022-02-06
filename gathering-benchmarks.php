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

		<form method = "post" action = "get-gathering-benchmarks.php">
			Name: <input type = "text" name = "FirstName"><br>
			<input type = "submit" name = "submit" value = "Submit">
		</form>
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