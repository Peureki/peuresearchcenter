// Get the id and num from HTML. Ex: ..Preferences(this.id, 1) <-- Insert this in the HTML right checkbox
// Anything 1 or above will be an individual checkbox
// 0 is default and clear the preferences
function showPreferences(id, variable){
	var num = 1;
	// Fine boxes
	if (document.getElementById(id).id.includes('fine') == true){
		if (document.getElementById(id).checked == true){
			localStorage.setItem('ssFineOption'+variable, variable); 
		} else {
			localStorage.removeItem('ssFineOption'+variable);
			localStorage.setItem('ssDefault', 1); // Since default is all checked, once uncheck, the settings are no longer default
		}
	// Rare boxes
	} else if (document.getElementById(id).id.includes('rare') == true){
		if (document.getElementById(id).checked == true){
			localStorage.setItem('ssRareOption'+variable, variable); 
		} else {
			localStorage.removeItem('ssRareOption'+variable);
			localStorage.setItem('ssDefault', 1); // Since default is all checked, once uncheck, the settings are no longer default
		}
	} else if (variable == 0){
		localStorage.clear();
	}

	switch (variable){
		// Currency-Worth
		case "bc": getPreferences(id, variable); break;
		case "laurels": getPreferences(id, variable); break;
		case "tc": getPreferences(id, variable); break;
		case "vmum": getPreferences(id, variable); break;

		// Refinement
		case "ascended": getPreferences(id, variable); break;
		case "basic": getPreferences(id, variable); break;
		case "gem": getPreferences(id, variable); break;
		case "jewel": getPreferences(id, variable); break;
		case "misc": getPreferences(id, variable); break;
		case "curio": getPreferences(id, variable); break;
		case "rune": getPreferences(id, variable); break;
	}

	function getPreferences(id, variable){
		if (document.getElementById(id).id.includes(variable) == true){
			if (document.getElementById(id).checked == true){
				localStorage.setItem(variable+"Option"+num, num); 
			} else {
				localStorage.removeItem(variable+"Option"+num);
				localStorage.setItem(variable+"Default", 1);
			}
		}
	}
	
	doPreferences();
}
// Check based on whether or not something is saved checked or not
// If the saved preferences are checked, show stuff
// If the saved prefereces are not, remove stuff
function doPreferences(){
	var ssBlockCount = 0;
	var path = window.location.pathname;
	var page = path.split("/").pop();

	function showToggle(localTag, checkBoxID, divBoxID, bookmarkID1, bookmarkID2){
		if (localStorage.getItem(localTag) == null){
			document.getElementById(checkBoxID).checked = false;
			document.getElementById(divBoxID).style.display = "none";
			document.getElementById(bookmarkID1).style.display = "none";
			if (bookmarkID2 == null){} else {document.getElementById(bookmarkID2).style.display = "none";}
		} else {
			document.getElementById(checkBoxID).checked = true;
			document.getElementById(divBoxID).style.display = "block";
			document.getElementById(bookmarkID1).style.display = "block";
			if (bookmarkID2 == null){} else {document.getElementById(bookmarkID2).style.display = "block";}
		}
	}
	function defaultSettings(localDefault, localTag, checkBoxID, divBoxID, bookmarkID1, bookmarkID2){
		if (localStorage.getItem(localDefault) == null){
			localStorage.setItem(localTag, 1);
			document.getElementById(checkBoxID).checked = true; 
			document.getElementById(divBoxID).style.display = "block";
			document.getElementById(bookmarkID1).style.display = "block";
			if (typeof bookmarkID2 == "undefined"){} else {document.getElementById(bookmarkID2).style.display = "block";}
		}
	}

	switch (page){
		case "currency-worth.html": 
			// Show/hide VM & UM
			showToggle('vmumOption1', 'check-vmum', 'vmum', 'bookmark-vm', 'bookmark-um');
			showToggle('bcOption1', 'check-bc', 'bandit-crests', 'bookmark-bc');
			showToggle('laurelsOption1', 'check-laurels', 'laurels', 'bookmark-laurels');
			showToggle('tcOption1', 'check-tc', 'trade-contracts', 'bookmark-tc');

			for (i = 1; i < 6; i++){
				if (localStorage.getItem('ssFineOption'+i) == null){
					document.getElementById('check-fineT'+i+'ToT'+(i+1)).checked = false;
					document.getElementById('spirit-shards-fineT'+i+'ToT'+(i+1)).style.display = "none";
					document.getElementById('bookmark-fineT'+i+"ToT"+(i+1)).style.display = "none";
				} else {
					document.getElementById('check-fineT'+i+'ToT'+(i+1)).checked = true;
					document.getElementById('spirit-shards-fineT'+i+'ToT'+(i+1)).style.display = "block";
					document.getElementById('bookmark-fineT'+i+"ToT"+(i+1)).style.display = "block";
					ssBlockCount = ssBlockCount + 1;
				}
			}
			for (i = 1; i < 5; i++){
				if (localStorage.getItem('ssRareOption'+i) == null){
					document.getElementById('check-rareT'+i+'ToT'+(i+1)).checked = false;
					document.getElementById('spirit-shards-rareT'+i+'ToT'+(i+1)).style.display = "none";
					document.getElementById('bookmark-rareT'+i+"ToT"+(i+1)).style.display = "none";
				} else {
					document.getElementById('check-rareT'+i+'ToT'+(i+1)).checked = true;
					document.getElementById('spirit-shards-rareT'+i+'ToT'+(i+1)).style.display = "block";
					document.getElementById('bookmark-rareT'+i+"ToT"+(i+1)).style.display = "block";
					ssBlockCount = ssBlockCount + 1;
				}
			}
			// If all SS checkboxes are marked off, then remove SS header and bookmark
			if (ssBlockCount == 0){
				document.getElementById('spirit-shards').style.display = "none";
				document.getElementById('bookmark-ss').style.display = "none";
			} else {
				document.getElementById('spirit-shards').style.display = "block";
				document.getElementById('bookmark-ss').style.display = "block";
			}

			// Currency-Worth
			defaultSettings('vmumDefault', 'vmumOption1', 'check-vmum', 'vmum', 'bookmark-vm', 'bookmark-um');
			defaultSettings('bcDefault', 'bcOption1', 'check-bc', 'bandit-crests', 'bookmark-bc');
			defaultSettings('laurelsDefault', 'laurelsOption1', 'check-laurels', 'laurels', 'bookmark-laurels');
			defaultSettings('tcDefault', 'tcOption1', 'check-tc', 'trade-contracts', 'bookmark-tc');

			// Default action. Check all the boxes and give all the preferences a value so it knows that it won't change to default again when reloading 
			if (localStorage.getItem('ssDefault') == null){
				for (i = 1; i < 6; i++){
					localStorage.setItem('ssFineOption'+i, i);
					document.getElementById('check-fineT'+i+'ToT'+(i+1)).checked = true;
					document.getElementById('spirit-shards-fineT'+i+'ToT'+(i+1)).style.display = "block";
					document.getElementById('bookmark-fineT'+i+"ToT"+(i+1)).style.display = "block";

					if (i != 5){
						localStorage.setItem('ssRareOption'+i, i);
						document.getElementById('check-rareT'+i+'ToT'+(i+1)).checked = true;
						document.getElementById('spirit-shards-rareT'+i+'ToT'+(i+1)).style.display = "block";
						document.getElementById('bookmark-rareT'+i+"ToT"+(i+1)).style.display = "block";
					}
				} 
			}
		break;

		case "refinement.html": 
		// Refinement
		showToggle('ascendedOption1', 'check-ascended', 'ascended', 'bookmark-ascended');
		showToggle('basicOption1', 'check-basic', 'basic', 'bookmark-basic');
		showToggle('gemOption1', 'check-gem', 'gem', 'bookmark-gem');
		showToggle('jewelOption1', 'check-jewel', 'jewel', 'bookmark-jewel');
		showToggle('miscOption1', 'check-misc', 'misc', 'bookmark-misc');
		showToggle('curioOption1', 'check-curio', 'curio', 'bookmark-curio');
		showToggle('runeOption1', 'check-rune', 'rune', 'bookmark-rune');

		defaultSettings('ascendedDefault', 'ascendedOption1', 'check-ascended', 'ascended', 'bookmark-ascended');
		defaultSettings('basicDefault', 'basicOption1', 'check-basic', 'basic', 'bookmark-basic');
		defaultSettings('gemDefault', 'gemOption1', 'check-gem', 'gem', 'bookmark-gem');
		defaultSettings('jewelDefault', 'jewelOption1', 'check-jewel', 'jewel', 'bookmark-jewel');
		defaultSettings('miscDefault', 'miscOption1', 'check-misc', 'misc', 'bookmark-misc');
		defaultSettings('curioDefault', 'curioOption1', 'check-curio', 'curio', 'bookmark-curio');
		defaultSettings('runeDefault', 'runeOption1', 'check-rune', 'rune', 'bookmark-rune');

		break;
	} // End of switch
	
}








