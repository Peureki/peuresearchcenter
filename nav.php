<div id = "navbar" class = "navbar">
	<div class = "brand-name"><a href = "<?php echo $base;?>/index.php">Peu Research Center </a></div>

	<a href="#" id = "hamburger" class = "hamburger">
		<span class = "hamburger-bar"></span>
		<span class = "hamburger-bar"></span>
		<span class = "hamburger-bar"></span>
	</a>

	<div onclick = "applyMode();" class = "dark-mode">
		<span id = "mode-circle"></span>
	</div>

	<ul class = "nav-bar-list">
		<li class = "nav-dropdown">
			<a class = "nav-header" href = "#"> Resources </a>
			<ul class = "sub-menu">
				<div class = "sub-menu-header">
					<li> How To Get </li> 
					<li><a href = "<?php echo $base;?>/resources/ascended-materials.php"> Ascended Materials </a></li>
					<li><a href = "<?php echo $base;?>/resources/experience.php"> Experience </a></li>
					<li><a href = "<?php echo $base;?>/resources/ls3-currencies.php"> Living Story 3 Currencies </a></li>
					<li><a href = "<?php echo $base;?>/resources/ls4-currencies.php"> Living Story 4 Currencies </a></li>
					<li><a href = "<?php echo $base;?>/resources/must-have-items.php"> Must Have Items </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Tools </li> 
					<li><a href = "<?php echo $base;?>/resources/dailies.php"> Dailies </a></li>
					<li><a href = "<?php echo $base;?>/resources/living-story-trinkets.php"> Living Story Trinkets </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> About </li> 
					<li><a href = "<?php echo $base;?>/resources/about-benchmarks.php"> Benchmarks </a></li>
					<li><a href = "<?php echo $base;?>/resources/about-me.php"> About Me </a></li>
					<li><a href = "<?php echo $base;?>/resources/list-of-resources.php"> Extra Resources </a></li>
				</div>
			</ul>
		</li>

		<li class = "nav-dropdown">
			<a class = "nav-header" href = "<?php echo $base;?>/benchmarks.php"> Benchmarks </a>
		</li>

		<li class = "nav-dropdown">
			<a class = "nav-header" href = "#"> Timers </a>
			<ul class = "sub-menu">
				<div class = "sub-menu-header">
					<li> Heart of Thorns </li> 
					<li><a href = "<?php echo $base;?>/timers/verdant-brink.php"> Verdant Brink </a></li>
					<li><a href = "<?php echo $base;?>/timers/auric-basin.php"> Auric Basin </a></li>
					<li><a href = "<?php echo $base;?>/timers/tangled-depths.php"> Tangled Depths </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Living Story 3 </li>
					<li><a href = "<?php echo $base;?>/timers/bloodstone-fen.php"> Bloodstone Fen </a></li>
					<li><a href = "<?php echo $base;?>/timers/ember-bay.php"> Ember Bay </a></li>
					<li><a href = "<?php echo $base;?>/timers/bitterfrost-frontier.php"> Bitterfrost Frontier </a></li>
					<li><a href = "<?php echo $base;?>/timers/draconis-mons.php"> Draconis Mons </a></li>
					<li><a href = "<?php echo $base;?>/timers/sirens-landing.php"> Siren's Landing </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Path of Fire </li>
					<li><a href = "<?php echo $base;?>/timers/desert-highlands.php"> Desert Highlands </a></li>
					<li><a href = "<?php echo $base;?>/timers/crystal-oasis.php"> Crystal Oasis </a></li>
					<li><a href = "<?php echo $base;?>/timers/elon-riverlands.php"> Elon Riverlands </a></li>
					<li><a href = "<?php echo $base;?>/timers/desolation.php"> Desolation </a></li>
					<li><a href = "<?php echo $base;?>/timers/domain-of-vabbi.php"> Domain of Vabbi </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Living Story 4 </li>
					<li><a href = "<?php echo $base;?>/timers/domain-of-istan.php"> Domain of Istan </a></li>
					<li><a href = "<?php echo $base;?>/timers/sandswept-isles.php"> Sandswept Isles </a></li>
					<li><a href = "<?php echo $base;?>/timers/domain-of-kourna.php"> Domain of Kourna </a></li>
					<li><a href = "<?php echo $base;?>/timers/dragonfall.php"> Dragonfall </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Icebrood Saga </li>
					<li><a href = "<?php echo $base;?>/timers/bjora-marches.php"> Bjora Marches </a></li>
					<li><a href = "<?php echo $base;?>/timers/drizzlewood-coast.php"> Drizzlewood Coast </a></li>
				</div>
			</ul>
		</li>

		<li class = "nav-dropdown">
			<a class = "nav-header" href = "#"> Research </a>
			<ul class = "sub-menu">
				<div class = "sub-menu-header">
					<li> Research </li>
					<li><a href = "<?php echo $base;?>/research/currency-worth.php"> Currency Worth </a></li>
					<li><a href = "<?php echo $base;?>/research/drizzlewood-reward-tracks.php"> Drizzlewood Reward Tracks </a></li>
					<li><a href = "<?php echo $base;?>/gathering.php#glyphs"> Glyphs </a></li>
					<li><a href = "<?php echo $base;?>/research/refinement.php"> Refinement </a></li>
					<li><a href = "<?php echo $base;?>/research/salvage.php"> Salvage </a></li>
				</div>
			</ul>
		</li>

		<li class = "nav-dropdown">
			<a class = "nav-header" href = "#"> Maps </a>
			<ul class = "sub-menu">
				<div class = "sub-menu-header">
					<li> Core Tyria </li>
					<li><a href = "<?php echo $base;?>/maps/silverwastes.php"> Silverwastes </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Heart of Thorns </li>
					<li><a href = "<?php echo $base;?>/maps/verdant-brink.php"> Verdant Brink </a></li>
					<li><a href = "<?php echo $base;?>/maps/auric-basin.php"> Auric Basin </a></li>
					<li><a href = "<?php echo $base;?>/maps/tangled-depths.php"> Tangled Depths </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Living Story 3 </li>
					<li><a href = "<?php echo $base;?>/maps/bloodstone-fen.php"> Bloodstone Fen </a></li>
					<li><a href = "<?php echo $base;?>/maps/ember-bay.php"> Ember bay </a></li>
					<li><a href = "<?php echo $base;?>/maps/bitterfrost-frontier.php"> Bitterfrost Frontier </a></li>
					<li><a href = "<?php echo $base;?>/maps/lake-doric.php"> Lake Doric </a></li>
					<li><a href = "<?php echo $base;?>/maps/draconis-mons.php"> Draconis Mons </a></li>
					<li><a href = "<?php echo $base;?>/maps/sirens-landing.php"> Siren's Landing </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Path of Fire </li>
					<li><a href = "<?php echo $base;?>/maps/desert-highlands.php"> Desert Highlands </a></li>
					<li><a href = "<?php echo $base;?>/maps/crystal-oasis.php"> Crystal Oasis </a></li>
					<li><a href = "<?php echo $base;?>/maps/elon-riverlands.php"> Elon Riverlands </a></li>
					<li><a href = "<?php echo $base;?>/maps/desolation.php"> Desolation </a></li>
					<li><a href = "<?php echo $base;?>/maps/domain-of-vabbi.php"> Domain of Vabbi </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Living Story 4 </li>
					<li><a href = "<?php echo $base;?>/maps/domain-of-istan.php"> Domain of Istan </a></li>
					<li><a href = "<?php echo $base;?>/maps/sandswept-isles.php"> Sandswept Isles </a></li>
					<li><a href = "<?php echo $base;?>/maps/domain-of-kourna.php"> Domain of Kourna </a></li>
					<li><a href = "<?php echo $base;?>/maps/jahai-bluffs.php"> Jahai Bluffs </a></li>
					<li><a href = "<?php echo $base;?>/maps/thunderhead-peaks.php"> Thunderhead Peaks </a></li>
					<li><a href = "<?php echo $base;?>/maps/dragonfall.php"> Dragonfall </a></li>
				</div>
				<div class = "sub-menu-header">
					<li> Icebrood Saga </li>
					<li><a href = "<?php echo $base;?>/maps/grothmar-valley.php"> Grothmar Valley </a></li>
					<li><a href = "<?php echo $base;?>/maps/bjora-marches.php"> Bjora Marches </a></li>
					<li><a href = "<?php echo $base;?>/maps/drizzlewood-coast.php"> Drizzlewood Coast </a></li>
				</div>
			</ul>
		</li>

		<li class = "nav-dropdown">
			<a class = "nav-header" href = "<?php echo $base;?>/gathering.php"> Gathering </a>
		</li>

		<li class = "nav-dropdown">
			<a class = "nav-header" href = "<?php echo $base;?>/supporters.php"> Support </a>
		</li>
	</ul>
</div>

<script> 
	// Grabs the hamburger and shows it when clicking on the icon
	function showHamburger(){
		const toggleHamburger = document.getElementsByClassName('hamburger')[0];
		const navBar = document.getElementsByClassName('navbar')[0];
		const navBarList = document.getElementsByClassName('nav-bar-list')[0];

		var dropdownMenu = document.getElementsByClassName('nav-dropdown');
		var navStatus = 0;

		var body = document.body;

		// When users click the hamburger
		toggleHamburger.addEventListener('click', () =>{
			// If the navbar list is already up, disappear
			if (navBarList.style.display == "flex"){
				navBar.style.height = "initial";
				navBarList.style.display = "none";

				body.style.overflowY = "auto";
			// If navbar list isn't up, set the nav height to 100% so users can scroll within only that window
			} else {
				navBarList.style.display = "flex";
				navBar.style.height = "100%";

				dropdownMenu[0].addEventListener('click', () => selectedDropDown(0));
				dropdownMenu[2].addEventListener('click', () => selectedDropDown(2));
				dropdownMenu[3].addEventListener('click', () => selectedDropDown(3));
				dropdownMenu[4].addEventListener('click', () => selectedDropDown(4));

				body.style.overflowY = "hidden";
			}
		});
		// Based on the num, show the submenu
		function selectedDropDown(num){
			// Switch depending on what is selected to be reverted back from X
			var menuItem,
				menuPosition = [0, 2, 3, 4]; // Postition in the list of menu items for headers that can drop down
			switch (num){
				case 0: menuItem = "Resources"; break;
				case 2: menuItem = "Timers"; break;
				case 3: menuItem = "Research"; break;
				case 4: menuItem = "Maps"; break;
			}
			// dropdownMenu.children[0] = Subheader
			// dropdownMenu.children[1] = The sub menu
			// If no subnav 
			if (navStatus == 0){
				// Change selected mainnav to X to indicate you can click it again 
				dropdownMenu[num].children[0].innerHTML = "X";
				navStatus = 1;

				// Remove all other mainNavs
				for (i = 0; i < dropdownMenu.length; i++){
					// If the selected nav is the same as the count, don't remove mainNav
					if (num != i){
						dropdownMenu[i].style.display = "none";
					}
					if (num == menuPosition[i]){
						dropdownMenu[num].children[1].style.display = "flex";
					}
				}
			} else {
				// Change mainNav to original name
				// Remove the sub menu
				// Bring back all other main navs
				dropdownMenu[num].children[0].innerHTML = menuItem; 
				dropdownMenu[num].children[1].style.display = "none"
				for (i = 0; i < dropdownMenu.length; i++){
					dropdownMenu[i].style.display = "block"
				}
				navStatus = 0;
			}
		}
	}
	showHamburger();
</script>