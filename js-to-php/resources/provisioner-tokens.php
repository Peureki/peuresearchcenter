<?php
	chdir(dirname(__FILE__));
	include_once '../../db/items.php'; 	
?>

<?php 
	$sylvariIDs = "46281,46040,46186,45731,45765,45622";
?>

<script>
//	===================================================================================
//  ========================== PROVISIONER TOKENS =====================================
// 	===================================================================================

	// VB
	let sylvariIDs = "46281,46040,46186,45731,45765,45622", 
		itzelIDs = "15465,13924,14469,11121,11876,10702",
		pactIDs = "15394,13895,14517,11295,11798,10722", 
		nobleIDs = "15508,13974,14596,11248,11835,10710",
		quagganIDs = "36779,36813,36750,36892,36891,36746"; 

	// AB
	let prioryIDs = "38336,38415,38367,38228,38264,38179",
		exaltedIDs = "15352,13895,14566,11295,11798,10722",
		skrittIDs = "15427,13928,14648,11167,11754,10699"; 

	// TD
	let ogreIDs = "15391,13976,14563,11341,11921,10691",
		rataIDs = "15423,13973,14428,11247,11834,10709",
		nuhochIDs = "15512,13894,14516,11126,11881,10707",
		scarIDs = "36779,36780,36812,36844,36842,36806";
		/*
	let sylvari = <?php echo $itemsDB->get_array_items("items", "46281,46040,46186,45731,45765,45622"); ?>, 
		itzel = <?php echo $itemsDB->get_array_items("items", "15465,13924,14469,11121,11876,10702"); ?>,
		pact = <?php echo $itemsDB->get_array_items("items", "15394,13895,14517,11295,11798,10722"); ?>,
		noble = <?php echo $itemsDB->get_array_items("items", "15508,13974,14596,11248,11835,10710"); ?>,
		quaggan = <?php echo $itemsDB->get_array_items("items", "36779,36813,36750,36892,36891,36746"); ?>,

		priory = <?php echo $itemsDB->get_array_items("items", "38336,38415,38367,38228,38264,38179"); ?>,
		exalted = <?php echo $itemsDB->get_array_items("items", "15352,13895,14566,11295,11798,10722"); ?>,
		skritt = <?php echo $itemsDB->get_array_items("items", "15427,13928,14648,11167,11754,10699"); ?>,

		ogre = <?php echo $itemsDB->get_array_items("items", "15391,13976,14563,11341,11921,10691"); ?>,
		rata = <?php echo $itemsDB->get_array_items("items", "15423,13973,14428,11247,11834,10709"); ?>,
		nuhoch = <?php echo $itemsDB->get_array_items("items", "15512,13894,14516,11126,11881,10707"); ?>,
		scar = <?php echo $itemsDB->get_array_items("items", "36779,36780,36812,36844,36842,36806"); ?>; 
	*/
	let itemIDs = <?php echo $itemsDB->get_array_items("items", "46281,46040,46186,45731,45765,45622,15465,13924,14469,11121,11876,10702,15394,13895,14517,11295,11798,10722,15508,13974,14596,11248,11835,10710,36779,36813,36750,36892,36891,36746,38336,38415,38367,38228,38264,38179,15352,13895,14566,11295,11798,10722,15427,13928,14648,11167,11754,10699,15391,13976,14563,11341,11921,10691,15423,13973,14428,11247,11834,10709,15512,13894,14516,11126,11881,10707,36779,36780,36812,36844,36842,36806"); ?>; 

	let prov = <?php echo $provDB->get_all_items('prov_tokens'); ?>; 
	console.log("prov: ", prov);

	console.log("itemIDs: ", itemIDs[0].name);

	
	let factions = {
		vb_sylvari: [
			{	
				name: "", 
				id: 0,
				map: "Verdant Brink",
				waypoint: "[&BN4HAAA=]",
				icon: "",
				buy_price: 0,
				sell_price: 0,
			},
		],
	};
	

	//let vb_sylvari = {};

	new Array(6).fill(null).forEach((item, i) => {factions.vb_sylvari[i] = {
		factions.vb_sylvari[i].name = itemIDs[i].name,
		factions.vb_sylvari[i].id = itemIDs[i].id,
		factions.vb_sylvari[i].map = "Verdant Brink",
		factions.vb_sylvari[i].waypoint = "[&BN4HAAA=]",
		factions.vb_sylvari[i].icon = itemIDs[i].icon,
		factions.vb_sylvari[i].buy_price = itemIDs[i].buy_unit_price, 
		factions.vb_sylvari[i].sell_price = itemIDs[i].sell_unit_price,
	}; });

	console.log(factions);

	/*
	for (i = 0; i < 6; i++){
		factions.vb_sylvari[i].name = itemIDs[i].name;
		factions.vb_sylvari[i].id = itemIDs[i].id;
		factions.vb_sylvari[i].map = "Verdant Brink";
		factions.vb_sylvari[i].waypoint = "[&BN4HAAA=]";
		factions.vb_sylvari[i].icon = itemIDs[i].icon;
		factions.vb_sylvari[i].buy_price = itemIDs[i].buy_unit_price; 
		factions.vb_sylvari[i].sell_price = itemIDs[i].sell_unit_price; 
	}
	*/

	function applyIDs(){
		let merp = <?php echo $itemsDB->get_array_items("items", $sylvariIDs); ?>;
		console.log("merp: ", merp); 
	}
	console.log(applyIDs());


</script>
