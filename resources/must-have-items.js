async function getGemtoGoldConversion(){
	var api1 = "https://api.guildwars2.com/v2/commerce/exchange/coins?quantity=1000000";
	const response1 = await fetch(api1);
	const goldToGem = await response1.json();

	var api2 = "https://api.guildwars2.com/v2/commerce/exchange/gems?quantity=100";
	const response2 = await fetch(api2);
	const gemToGold = await response2.json();

	console.log(gemToGold);

	var rateGoldPerGem = format_values_subpage(goldToGem.coins_per_gem).silver + format_values_subpage(goldToGem.coins_per_gem).copper;
	var rawRateGoldPerGem = goldToGem.coins_per_gem;

	var rateGemPerGold = format_values_subpage(gemToGold.coins_per_gem).silver + format_values_subpage(gemToGold.coins_per_gem).copper;
	var rawRateGemPerGold = gemToGold.coins_per_gem;

	var goldPerGem = document.getElementById('gold-per-gem');
	var gemPerGold = document.getElementById('gem-per-gold');

	goldPerGem.innerHTML = rateGoldPerGem;
	gemPerGold.innerHTML = rateGemPerGold;

	var goldPerDollar = document.getElementById('gold-per-dollar');
	goldPerDollar.innerHTML = format_values_subpage(gemToGold.coins_per_gem*80).gold + format_values_subpage(gemToGold.coins_per_gem*80).silver + format_values_subpage(gemToGold.coins_per_gem*80).copper;

	var itemValue = 0;
	var mustHave = {
		items: [
			{	// Copper-fed
				ele: document.getElementById('copper-fed'),
				cost: 800,
			},
			{	// Runecrafter
				ele: document.getElementById('runecrafter'),
				cost: 600,
			},
			{	// Silver-fed
				ele: document.getElementById('silver-fed'),
				cost: 500,
			},
			{	// Volatile tools
				ele: document.getElementById('volatile-tools'),
				cost: 2700,
			},
			{	// Consortium
				ele: document.getElementById('consortium-sickle'),
				cost: 1000,
			},
			{	// Choya Mining
				ele: document.getElementById('choya-mining'),
				cost: 1000,
			},
			{	// Shared inventory
				ele: document.getElementById('shared-inventory'),
				cost: 700,
			},
			{	// Mistlock
				ele: document.getElementById('mistlock-santuary'),
				cost: 1000,
			},
			{	// Storage Expander
				ele: document.getElementById('storage-expander'),
				cost: 800,
			},
			{	// Bank Slot
				ele: document.getElementById('bank-tab'),
				cost: 600,
			},
			{	// Bag Slot
				ele: document.getElementById('bag-slot'),
				cost: 400,
			},
			{	// Character slot
				ele: document.getElementById('character-slot'),
				cost: 800,
			},
			{	// Equipment template
				ele: document.getElementById('equipment-template'),
				cost: 500,
			},
			{	// Build template
				ele: document.getElementById('build-template'),
				cost: 300,
			},
			
		]
	};
	for (i = 0; i < mustHave.items.length; i++){
		itemValue = rawRateGoldPerGem * mustHave.items[i].cost; 
		mustHave.items[i].ele.innerHTML = format_values_subpage(itemValue).gold + format_values_subpage(itemValue).silver + format_values_subpage(itemValue).copper;
	}
}

function mhiInfoBoxLeft(icon){

	var itemName = icon.parentNode.getElementsByTagName('b')[0].innerHTML;
	var info = document.getElementById('info-box-left');
	info.style.display = "block";

	var popupBox = info.children[1].children;
	function removePopupBoxes(){
		for (i = 0; i < popupBox.length; i++){
			popupBox[i].style.display = "none";
		}
	}
	
	switch (itemName){
		case "Copper-Fed Salvage-o-Matic": removePopupBoxes(); document.getElementById('popup-copper-fed').style.display = "block"; break;
		case "Runecrafter's Salvage-o-Matic": removePopupBoxes(); document.getElementById('popup-runecrafters').style.display = "block"; break;
		case "Silver-Fed Salvage-o-Matic": removePopupBoxes(); document.getElementById('popup-silver-fed').style.display = "block"; break;
		case "Infinite Volatile Magic Gathering Tools": removePopupBoxes(); document.getElementById('popup-volatile-tools').style.display = "block"; break;
		case "Consortium Harvesting Sickle": removePopupBoxes(); document.getElementById('popup-consortium-sickle').style.display = "block"; break;
		case "Choya Mining Tool": removePopupBoxes(); document.getElementById('popup-choya-mining').style.display = "block"; break;
		case "Shared Inventory Slot": removePopupBoxes(); document.getElementById('popup-shared-inventory').style.display = "block"; break;
		case "Mistlock Santuary Passkey": removePopupBoxes(); document.getElementById('popup-mistlock-santuary').style.display = "block"; break;
		case "Storage Expander": removePopupBoxes(); document.getElementById('popup-storage-expander').style.display = "block"; break;
		case "Bank Tab Expansion": removePopupBoxes(); document.getElementById('popup-bank-tab').style.display = "block"; break;
		case "Bag Slot Expansion": removePopupBoxes(); document.getElementById('popup-bag-slot').style.display = "block"; break;
		case "Character Slot Expansion": removePopupBoxes(); document.getElementById('popup-character-slot').style.display = "block"; break;
		case "Build Template Expansion": removePopupBoxes(); document.getElementById('popup-build-template').style.display = "block"; break;
		case "Equipment Template Expansion": removePopupBoxes(); document.getElementById('popup-equipment-template').style.display = "block"; break;

	}
}

function mhiInfoBoxRight(icon){

	var itemName = icon.parentNode.getElementsByTagName('b')[0].innerHTML;
	var info = document.getElementById('info-box-right');
	info.style.display = "block";

	var popupBox = info.children[1].children;
	function removePopupBoxes(){
		for (i = 0; i < popupBox.length; i++){
			popupBox[i].style.display = "none";
		}
	}
	
	switch (itemName){
		case "Prototype Position Rewinder": removePopupBoxes(); document.getElementById('popup-rewinder').style.display = "block"; break;
		case "Season 3 Portal Tome": removePopupBoxes(); document.getElementById('popup-season-3').style.display = "block"; break;
		case "Season 4 Portal Tome": removePopupBoxes(); document.getElementById('popup-season-4').style.display = "block"; break;
		case "Icebrood Saga Portal Tome": removePopupBoxes(); document.getElementById('popup-icebrood').style.display = "block"; break;
		case "Portable United Legions Waystation": removePopupBoxes(); document.getElementById('popup-waystation').style.display = "block"; break;
		case "White Mantle Portal Device": removePopupBoxes(); document.getElementById('popup-white-mantle').style.display = "block"; break;
		case "Gleam of Sentience": removePopupBoxes(); document.getElementById('popup-gleam-of-sentience').style.display = "block"; break;
		case "Star of Gratitude": removePopupBoxes(); document.getElementById('popup-star-of-gratitude').style.display = "block"; break;
		case "Mawdrey II": removePopupBoxes(); document.getElementById('popup-mawdrey').style.display = "block"; break;
		case "Princess": removePopupBoxes(); document.getElementById('popup-princess').style.display = "block"; break;
		case "Herta": removePopupBoxes(); document.getElementById('popup-herta').style.display = "block"; break;
		case "Ley-Energy Matter Converter": removePopupBoxes(); document.getElementById('popup-ley-energy').style.display = "block"; break;
	}
}


