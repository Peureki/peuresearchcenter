// Choice is either 1 or 2. 
	// 1 = today's dailies
	// 2 = tomorrow's dailies
async function getDaily(choice){

	var daily = {
		info: [
			// Adventures
			{ // A Fungus Among Us
				id: 2980,
				waypoint: '[&BAIIAAA=]',
				difficulty: 'Hard',
				howto: 'Head west. Once at the Adventure symbol on the map, go up.',
				acc: "HoT",
			},
			{ // Beetle Feast
				id: 2973,
				waypoint: '[&BAwIAAA=]',
				difficulty: 'Hard',
				howto: 'Head up. Once at the surface, head northeast and go up from bouncing mushrooms',
				acc: "HoT",
			},
			{ // Bugs in the Branches
				id: 2975,
				waypoint: '[&BN4HAAA=]',
				difficulty: 'Meh',
				howto: 'From WP, head N. The adventure will only be open during the day',
				acc: "HoT",
			},
			{ // Drone Race
				id: 2905,
				waypoint: '[&BAAIAAA=]',
				difficulty: 'Meh',
				howto: 'From WP, head to the vine wall at the SE corner of the map. Only accessible after completing SCAR outpost event chain.',
				acc: "HoT",
			},
			{ // Fallen Masks
				id: 2915,
				waypoint: '[&BMYHAAA=]',
				difficulty: 'Hard',
				howto: 'Wiki: walk N, go up the stairs, then turn left (NNW). Turn left at the second set of stairs. Take a left at the top of that staircase. A few steps into the hallway, talk to an "Exalted Bastion Adventure" npc to enter. (acc Exalted Acceptance).',
				acc: "HoT",
			},
			{ // Flying Circus
				id: 2891,
				waypoint: '[&BNUHAAA=]',
				difficulty: 'Meh',
				howto: 'From WP, take the bouncing mushroom W on the edge of the land.',
				acc: "HoT",
			},
			{ // Haywire Punch-o-Matic
				id: 2922,
				waypoint: '[&BPUHAAA=]',
				difficulty: 'Hard',
				howto: 'From the WP, head N to Rata Lane.',
				acc: "HoT",
			},
			{ // On Wings of Gold
				id: 2984,
				waypoint: '[&BN0HAAA=]',
				difficulty: 'Meh',
				howto: 'From the WP, head S towards Tarir. Through the gates, glide/fly towards the howto of the Adventure. It will be in a small area inside the wall.',
				acc: "HoT",
			},
			{ // Salvage Pit
				id: 2919,
				waypoint: '[&BAEIAAA=]',
				difficulty: 'Meh',
				howto: 'Head E. Only accessible after Pale Reaver outpost events are completed.',
				acc: "HoT",
			},
			{ // Sanctum Scramble
				id: 2969,
				waypoint: '[&BMYHAAA=]',
				difficulty: 'Hard',
				howto: 'Drop down into the hole (like doing the meta). Run to the room to the right and into an Exalted Portal',
				acc: "HoT",
			},
			{ // Scrap Rifle Field Test
				id: 2988,
				waypoint: '[&BAAIAAA=]',
				difficulty: 'Hard',
				howto: 'From the WP, head E then N to the Adventure. You do not need to complete the SCAR outpost events to do it',
				video: 'https://www.youtube.com/watch?v=o5seNOrbfvY',
				acc: "HoT",
			},
			{ // Shooting Gallery
				id: 2987,
				waypoint: '[&BO8HAAA=]',
				difficulty: 'Hard',
				howto: 'Head SE and slightly down. Nobles outpost will need to be completed to do this',
				video: 'https://www.youtube.com/watch?v=MiN0HmM6YN4',
				acc: "HoT",
			},
			{ // Tendril Torches
				id: 2936,
				waypoint: '[&BN4HAAA=]',
				difficulty: 'Meh',
				howto: 'Head S. This Adventure is onyl available if the meta is during the Day',
				video: 'https://www.youtube.com/watch?v=JUFuV4umS7U',
				acc: "HoT",
			},
			{ // The Floor is Lava?
				id: 2942,
				waypoint: '[&BNYHAAA=]',
				difficulty: 'Hard',
				howto: 'Fall down to the ground. From there, head W into a hidden cave.',
				video: 'https://www.youtube.com/watch?v=9X6OoPkfEfU',
				acc: "HoT",
			},
			{ // The Ley-Line run
				id: 2960,
				waypoint: '[&BPUHAAA=]',
				difficulty: 'Meh',
				howto: 'Run to Ogre lane and there will be a bouncing mushroom below the Adventure. This is not available during the meta',
				video: 'https://www.youtube.com/watch?v=m1UgvAOgIrM',
				acc: "HoT",
			},
			{ // Daily Desert Adventurer
				id: 3749,
				waypoint: '[&BLsKAAA=]',
				difficulty: 'Meh',
				howto: 'Directly SE from Amnoon.',
				video: 'https://wiki.guildwars2.com/wiki/File:Refugee_Supply_Run_map.jpg',
				acc: "PoF",
			},

			// Bounties
			{ // Crystal Oasis Bounty Hunter
				id: 3626,
				waypoint: '[&BLsKAAA=] | [&BEAKAAA=] | [&BJMKAAA=]',
				difficulty: 'Easy',
				howto: 'Check tags or LFG for a group. Easy bounties include: Legendary Facet, TAzula, Zelke, Leyspark, Punisher, Sorcerer',
				acc: "PoF",
			},
			{ // Desert Highlands Bounty Hunter
				id: 3784,
				waypoint: '[&BGsKAAA=]',
				difficulty: 'Easy',
				howto: 'Check tags or LFG for a group. Easy bounties include: Forged Tormentor, Awakened Occulist ',
				acc: "PoF",
			},
			{ // Elon Riverlands Bounty Hunter
				id: 3722,
				waypoint: '[&BFMKAAA=] | [&BCgKAAA=]',
				difficulty: 'Meh',
				howto: 'Check tags or LFG for a group. Easy bounties include: Brandclaw, Stray',
				acc: "PoF",
			},
			{ // Desolation Bounty Hunter
				id: 3779,
				waypoint: '[&BNwKAAA=] | [&BKMKAAA=] | [&BMEKAAA=]',
				difficulty: 'Easy',
				howto: 'Check tags or LFG for a group. Easy bounties include: Legendary Hoarder, Legendary Queen, Perturbed Choya, Proliferator, Necrophage',
				acc: "PoF",
			},
			{ // Vabbian Bounty Hunter
				id: 3562,
				waypoint: '[&BO0KAAA=] | [&BEoKAAA=] | [&BNAKAAA=]',
				difficulty: 'Easy',
				howto: 'Check tags or LFG for a group. Easy bounties include: Legendary Forged, Forged Wolfhound, Forged Marauder, Forged Brutalizer, Forged Wildhound',
				acc: "PoF",
			},

			// Dungeon 
			{ // Ascalonian Catacombs
				id: 2893,
				waypoint: '[&BIYBAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG for a group. Easy: Story, Path 1, Path 2',
				acc: "Core",
			},
			{ // CAudecus's Manor
				id: 2914,
				waypoint: '[&BPoAAAA=]',
				difficulty: 'Hard',
				howto: 'Check LFG for a group. Easy: Story',
				acc: "Core",
			},
			{ // Twlight Arbor
				id: 2959,
				waypoint: '[&BEEFAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG for a group. Easy: All paths',
				acc: "Core",
			},
			{ // Sorrow's Embrace
				id: 2917,
				waypoint: '[&BD8FAAA=]',
				difficulty: 'Hard',
				howto: 'Check LFG for a group. Easy: Path 1',
				acc: "Core",
			},
			{ // Citadel of Flame
				id: 2901,
				waypoint: '[&BEAFAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG for a group. Easy: Story, Path 1, Path 2',
				acc: "Core",
			},
			{ // Honor of the Waves
				id: 2931,
				waypoint: '[&BEMFAAA=]',
				difficulty: 'Hard',
				howto: 'Check LFG for a group. Easy: Story, Path 1',
				acc: "Core",
			},
			{ // Crucible of Eternity
				id: 2953,
				waypoint: '[&BEIFAAA=]',
				difficulty: 'Hard',
				howto: 'Check LFG for a group. Easy: Story, Path 1, Path 3',
				acc: "Core",
			},
			{ // Ruined City of Arah
				id: 2938,
				waypoint: '[&BCADAAA=]',
				difficulty: 'Hard',
				howto: 'Check LFG for a group. Easy: Story, Path 1',
				acc: "Core",
			},

			// Events
			{ // Blazeridge Steppes Event Completer
				id: 1946,
				waypoint: '[&BE4DAAA=] | [&BAUCAAA=] | [&BFIDAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints. If Shatterer meta is up, do that',
				acc: "Core",
			},
			{ // Bloodtide Coast Event Completer
				id: 1948,
				waypoint: '[&BKYBAAA=] | [&BK8BAAA=] | [&BKwBAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints. If Taidia meta is up, head to [&BKgBAAA=]',
				acc: "Core",
			},
			{ // Brisban Event Completer
				id: 1945,
				waypoint: '[&BF4AAAA=] | [&BF0AAAA=] | [&BGMAAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints.',
				acc: "Core",
			},
			{ // Caledon Forest Event Completer
				id: 1940,
				waypoint: '[&BDgBAAA=] | [&BD4BAAA=] | [&BD8BAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Cursed Shore Event Completer
				id: 1945,
				waypoint: '[&BBkDAAA=] | [&BB4DAAA=] | [&BB8DAAA=]',
				difficulty: 'Easy',
				howto: 'Check LFG, tags, or callouts in map chat. The map in general is very active for events.',
				acc: "Core",
			},
			{ // Diessa Plateau Event Completer
				id: 1967,
				waypoint: '[&BN0AAAA=] | [&BNkAAAA=] | [&BNsAAAA=]',
				difficulty: 'Easy',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Dredgehaunt Cliffs Event Completer
				id: 1958,
				waypoint: '[&BFoCAAA=] | [&BFcCAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Dry Top Event Completer
				id: 1955,
				waypoint: '[&BHoHAAA=] | [&BIYHAAA=] | [&BJcHAAA=]',
				difficulty: 'Easy',
				howto: 'Check LFG, tags, or callouts in map chat. The map in general is very active for events.',
				acc: "Core",
			},
			{ // Fields of Ruin Event Completer
				id: 1952,
				waypoint: '[&BNUAAAA=] | [&BE8BAAA=] | [&BFEBAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Fireheart Rise Event Completer
				id: 1966,
				waypoint: '[&BBgCAAA=] | [&BBwCAAA=] | [&BCUCAAA=]',
				difficulty: 'Easy',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Frostgorge Sound Event Completer
				id: 1944,
				waypoint: '[&BEMFAAA=] | [&BHkCAAA=] | [&BIUCAAA=]| [&BIMCAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Gendarran Fields Event Completer
				id: 1943,
				waypoint: '[&BI4BAAA=] | [&BJQBAAA=] ',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Harathi Hinterlands Event Completer
				id: 1960,
				waypoint: '[&BKgAAAA=] | [&BMMAAAA=] ',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these',
				acc: "Core",
			},
			{ // Iron Marches Event Completer
				id: 1962,
				waypoint: '[&BOQBAAA=] | [&BOgBAAA=] | [&BO0BAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Kessex Hills Event Completer
				id: 1965,
				waypoint: '[&BLoDAAA=] | [&BAQAAAA=] | [&BAcAAAA=]',
				difficulty: 'Easy',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Lornar's Pass Event Completer
				id: 1957,
				waypoint: '[&BOgAAAA=] | [&BOcAAAA=] | [&BJgBAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Malchor's Leap Event Completer
				id: 1961,
				waypoint: '[&BKwCAAA=] | [&BKYCAAA=] | [&BKcCAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core"
			},
			{ // Metrica Province Event Completer
				id: 1951,
				waypoint: '[&BEQAAAA=] | [&BEYAAAA=] | [&BEgAAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core"
			},
			{ // Mount Maelstrom Event Completer
				id: 1950,
				waypoint: '[&BNYCAAA=] | [&BMoCAAA=] | [&BNICAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Plains of Ashford Event Completer
				id: 1964,
				waypoint: '[&BIMBAAA=] | [&BIYBAAA=] | [&BIgBAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Queensdale Event Completer
				id: 1963,
				waypoint: '[&BPkAAAA=] | [&BPIAAAA=] | [&BPMAAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Silverwastes Event Completer
				id: 1959,
				waypoint: '[&BH8HAAA=]',
				difficulty: 'Easy',
				howto: 'Check LFG for a RIBA Farm as they are guaranteed event trains. Otherwise, view the map for defense/assult events or caravans that need escorting or the meta',
				acc: "Core",
			},
			{ // Snowden Drifts Event Completer
				id: 1956,
				waypoint: '[&BMIAAAA=] | [&BLsAAAA=] | [&BLwAAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Southsun Cove Event Completer
				id: 1949,
				waypoint: '[&BNUGAAA=]',
				difficulty: 'Meh',
				howto: 'Tags may be doing events. Watch map chat for events. Otherwise, if WPs are contested, there is likey an event occuring there',
				acc: "Core",
			},
			{ // Sparkfly Fen Event Completer
				id: 1947,
				waypoint: '[&BMgBAAA=] | [&BE0DAAA=] | [&BLMDAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Straits of Devastation Event Completer
				id: 1942,
				waypoint: '[&BNIEAAA=] | [&BO4CAAA=]',
				difficulty: 'Hard',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core",
			},
			{ // Timberline Fall Event Completer
				id: 1954,
				waypoint: '[&BEsCAAA=] | [&BEUCAAA=] | [&BE0CAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core"
			},
			{ // Wayfarer Foothills Event Completer
				id: 1953,
				waypoint: '[&BHMBAAA=] | [&BH0BAAA=] | [&BMEDAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG, tags, or callouts in map chat. Possible events are nearby these waypoints',
				acc: "Core"
			},
			{ // Verdant Brink Event Completer
				id: 2945,
				waypoint: '[&BN4HAAA=] | [&BAgIAAA=] | [&BNUHAAA=]',
				difficulty: 'Easy',
				howto: 'This will depend if the meta is Day or Night. If Day, each outpost will have their own event chains. If Night, there will be camps periodically needing to be defended or assulted with legendary bosses at the end. Check LFG for groups.',
				acc: "HoT",
			},
			{ // Auric Basin Event Completer
				id: 2910,
				waypoint: '[&BN0HAAA=] | [&BAYIAAA=] | [&BAIIAAA=] | [&BGwIAAA=]',
				difficulty: 'Easy',
				howto: 'Each outpost will have their own event chain. If the meta is starting, head to each gate of Tarir for events. Check LFG for groups.',
				acc: "HoT",
			},
			{ // Tangled Depths Event Completer
				id: 2968,
				waypoint: '[&BMwHAAA=] | [&BAwIAAA=] | [&BAMIAAA=] | [&BAAIAAA=]',
				difficulty: 'Easy',
				howto: 'Each outpost will have their own event chain. If the meta is starting, look through LFG for an active map. Do this at least 10 minutes before meta begins!',
				acc: "HoT",
			},
			{ // Dragon's Stand Event Completer
				id: 2924,
				waypoint: '[&BBAIAAA=]',
				difficulty: 'Meh',
				howto: 'Check LFG for groups. Events are soley dependent on the progression of the map meta.',
				acc: "HoT",
			},
			{ // Crystal Oasis Event Completer
				id: 3793,
				waypoint: '[&BLsKAAA=] | [&BEAKAAA=] | [&BJMKAAA=]',
				difficulty: 'Easy',
				howto: 'Tags may be doing events. Watch map chat for events and bounties. Otherwise, hop around different waypoints of the map to find one nearby.',
				acc: "PoF",
			},
			{ // Desert Highlands Event Completer
				id: 3814,
				waypoint: '[&BGsKAAA=] | [&BGoKAAA=]',
				difficulty: 'Meh',
				howto: 'Tags may be doing events. Watch map chat for events and bounties. Otherwise, hop around different waypoints of the map to find one nearby.',
				acc: "PoF",
			},
			{ // Elon Riverlands Event Completer
				id: 3661,
				waypoint: '[&BFMKAAA=] | [&BCgKAAA=]',
				difficulty: 'Meh',
				howto: 'Tags may be doing events. Watch map chat for events and bounties. Otherwise, hop around different waypoints of the map to find one nearby.',
				acc: "PoF",
			},
			{ // Desolation Event Completer
				id: 3866,
				waypoint: '[&BNwKAAA=] | [&BKMKAAA=] | [&BMEKAAA=]',
				difficulty: 'Meh',
				howto: 'Tags may be doing events. Watch map chat for events and bounties. Otherwise, hop around different waypoints of the map to find one nearby.',
				acc: "PoF",
			},
			{ // Domain of Vabbi Event Completer
				id: 3554,
				waypoint: '[&BNAKAAA=] | [&BO0KAAA=] | [&BEoKAAA=]',
				difficulty: 'Meh',
				howto: 'Tags may be doing events. Watch map chat for events and bounties. Otherwise, hop around different waypoints of the map to find one nearby.',
				acc: "PoF",
			},

			// Fractals
			{ // Fractals of the Mists
				id: 1989,
				waypoint: '[&BDAEAAA=]',
				difficulty: 'Meh',
				howto: 'Any fractal of any tier will do. Depending on your group will depend how well it will go. Find a guild group or looking through LFG.',
				acc: "Core",
			},

			// Gathering
			{ // Ascalon Forager
				id: 1838,
				waypoint: '[&BMcDAAA=]',
				difficulty: 'Easy',
				howto: 'Directly south for potatoes',
				acc: "Core",
			},
			{ // Ascalon Lumberer
				id: 1837,
				waypoint: '[&BAECAAA=]',
				difficulty: 'Easy',
				howto: 'Mostly S or around the WP',
				acc: "Core",
			},
			{ // Ascalon Miner
				id: 1981,
				waypoint: '[&BAECAAA=]',
				difficulty: 'Easy',
				howto: 'Iron or Gold is all around the WP',
				acc: "Core",
			},
			{ // Kryta Forager
				id: 1975,
				waypoint: '[&BPoAAAA=]',
				difficulty: 'Easy',
				howto: 'Directly S',
				acc: "Core",
			},
			{ // Kryta Lumberer
				id: 1972,
				waypoint: '[&BKgAAAA=]',
				difficulty: 'Easy',
				howto: 'Majority of it will be just SE',
				acc: "Core",
			},
			{ // Kryta Miner
				id: 1971,
				waypoint: '[&BPMAAAA=]',
				difficulty: 'Easy',
				howto: 'Directly N. Ore can be found in or on top of the cave',
				acc: "Core"
			},
			{ // Maguuma Jungle Forager
				id: 1973,
				waypoint: '[&BEABAAA=]',
				difficulty: 'Easy',
				howto: 'Directly NW',
				acc: "Core"
			},
			{ // Maguuma Jungle Lumberer
				id: 1970,
				waypoint: '[&BNMCAAA=]',
				difficulty: 'Easy',
				howto: 'Directly S',
				acc: "Core",
			},
			{ // Maguuma Jungle Miner
				id: 1969,
				waypoint: '[&BMkCAAA=]',
				difficulty: 'Easy',
				howto: 'Ore can be found around the WP or E',
				acc: "Core",
			},
			{ // Maguuma Wastes Forager
				id: 1980,
				waypoint: '[&BIYHAAA=]',
				difficulty: 'Easy',
				howto: 'Head north and slightly down',
				acc: "Core"
			},
			{ // Maguuma Wastes Lumberer
				id: 1979,
				waypoint: '[&BH8HAAA=]',
				difficulty: 'Easy',
				howto: 'No good spots. Just run around the map outside the camp for trees',
				acc: "Core",
			},
			{ // Maguuma Wastes Miner
				id: 1978,
				waypoint: '[&BH8HAAA=] | [&BIAHAAA=]',
				difficulty: 'Easy',
				howto: 'Run outside the SW camp | or fly NW from the Dry Top waypoint',
				acc: "Core"
			},
			{ // Orr Forager
				id: 1974,
				waypoint: '[&BFgGAAA=]',
				difficulty: 'Easy',
				howto: 'Herbs around the WP or there is a farm NE from the WP',
				acc: "Core",
			},
			{ // Orr Lumberer
				id: 1976,
				waypoint: '[&BKYCAAA=]',
				difficulty: 'Easy',
				howto: 'Trees around the WP or there is a farm W from the WP',
				acc: "Core",
			},
			{ // Orr Miner
				id: 1977,
				waypoint: '[&BKYCAAA=]',
				difficulty: 'Easy',
				howto: 'Generally Ore will be W from WP',
				acc: "Core",
			},
			{ // Shiverpeaks Forager
				id: 1985,
				waypoint: '[&BF8CAAA=]',
				difficulty: 'Easy',
				howto: 'Head directly W and up the hill',
				acc: "Core",
			},
			{ // Shiverpeaks Lumberer
				id: 1968,
				waypoint: '[&BGICAAA=]',
				difficulty: 'Easy',
				howto: 'South from WP',
				acc: "Core",
			},
			{ // Shiverpeaks Miner
				id: 1984,
				waypoint: '[&BGUCAAA=]',
				difficulty: 'Easy',
				howto: 'There is a cave to the E. Run through and there will be a guaranteed rich node',
				acc: "Core",
			},
			{ // Heart of Maguuma Forager
				id: 2912,
				waypoint: '[&BOAHAAA=]',
				difficulty: 'Easy',
				howto: 'Drop down from the village. Flax farm will be alllll the way on the ground.',
				acc: "HoT",
			},
			{ // Heart of Maguuma Lumberer
				id: 2937,
				waypoint: '[&BEsJAAA=]',
				difficulty: 'Easy',
				howto: 'Drop down from the airship to the ground',
				acc: "HoT",
			},
			{ // Heart of Maguuma Miner
				id: 2957,
				waypoint: '[&BE4JAAA=]',
				difficulty: 'Easy',
				howto: 'Drop down to the maw or fly to the fragments in the air',
				acc: "HoT",
			},
			{ // Desert Lumberer
				id: 3880,
				waypoint: '[&BJ0KAAA=]',
				difficulty: 'Easy',
				howto: 'Around the WP and to the E',
				acc: "PoF",
			},
			{ // Desert Miner
				id: 3888,
				waypoint: '[&BEMLAAA=]',
				difficulty: 'Easy',
				howto: 'Head NE inland. There may be a variety of things to mine.',
				acc: "PoF",
			},
			{ // Desert Forager
				id: 3760,
				waypoint: '[&BEMLAAA=]',
				difficulty: 'Easy',
				howto: 'Head NE inland. Multiple farms',
				account: "PoF",
				acc: "PoF",
			},

			// Jumping Puzzles
			{ // Antre of Adjournment Jumping Puzzle
				id: 1893,
				waypoint: '[&BKoCAAA=]',
				difficulty: 'Meh',
				howto: 'Head W',
				video: 'https://www.youtube.com/watch?v=zk_8kNiyjv4',
				acc: "Core",
			},
			{ // Behem Gauntlet Jumping Puzzle
				id: 1891,
				waypoint: '[&BP0BAAA=]',
				difficulty: 'Meh',
				howto: 'Head W into a tunnel full of spiders. There is a hole into a cave',
				video: 'https://www.youtube.com/watch?v=hCShpaE5Nh8',
				acc: "Core",
			},
			{ // Branded Mine Jumping Puzzle
				id: 1890,
				waypoint: '[&BNcAAAA=]',
				difficulty: 'Meh',
				howto: "Head N. Before hitting Varim's Run, there is an enterance to a cave. Check the video for a guide.",
				video: 'https://www.youtube.com/watch?v=gzWWrg9T4FI',
				acc: "Core",
			},
			{ // Buried Archives Jumping Puzzle
				id: 1919,
				waypoint: '[&BB8DAAA=]',
				difficulty: 'Meh',
				howto: 'Head S towards the southern-most Vista. There will be small platforms to climb on the side',
				video: 'https://www.youtube.com/watch?v=dndJ_qeBKsI',
				acc: "Core",
			},
			{ // Chaos Crystal Cavern Jumping Puzzle
				id: 1886,
				waypoint: '[&BOQBAAA=]',
				difficulty: 'Meh',
				howto: 'Head W to the edge of the map. There will be a hole covered in bushes',
				video: 'https://www.youtube.com/watch?v=nhKN3PLrcfc',
				acc: "Core",
			},
			{ // Coddler's Cove Jumping Puzzle
				id: 1908,
				waypoint: '[&BEYCAAA=]',
				difficulty: 'Meh',
				howto: 'Head S. On the wall, there will be platforms you can jump on that will gradually go higher',
				video: 'https://www.youtube.com/watch?v=l1SwH3Y5guE',
				acc: "Core",
			},
			{ // Collapsed Observatory Jumping Puzzle
				id: 1892,
				waypoint: '[&BBIAAAA=]',
				difficulty: 'Meh',
				howto: 'South into a small valley where the water is flowing away from. Follow the water',
				video: 'https://www.youtube.com/watch?v=hUkT06ZNT_w',
				acc: "Core",
			},
			{ // Conundrum Cubed Jumping Puzzle
				id: 1907,
				waypoint: '[&BMgCAAA=]',
				difficulty: 'Meh',
				howto: 'N and there is a gap in the wall',
				video: 'https://www.youtube.com/watch?v=mDpSdLF2TYk',
				acc: "Core",
			},
			{ // Crash Site Jumping Puzzle
				id: 1924,
				waypoint: '[&BIAHAAA=]',
				difficulty: 'Hard',
				howto: 'All the way up at [&BHUHAAA=]. I recommend a mesmer portal or watch the video guide',
				video: 'https://www.youtube.com/watch?v=CyBI5EpUPcY',
				acc: "Core",
			},
			{ // Craze's Folly Jumping Puzzle
				id: 1885,
				waypoint: '[&BAECAAA=]',
				difficulty: 'Meh',
				howto: 'NE from the waypoint, past the Heart',
				video: 'https://www.youtube.com/watch?v=1w8MsvSJC0g',
				acc: "Core",
			},
			{ // Crimson Plateau Jumping Puzzle
				id: 1914,
				waypoint: '[&BMYDAAA=]',
				difficulty: 'Meh',
				howto: 'Head W, then go around the vista. The goal is to go to an area directly S from the WP',
				video: 'https://www.youtube.com/watch?v=8LSutpolb7c',
				acc: "Core",
			},
			{ // Dark Reverie Jumping Puzzle
				id: 1913,
				waypoint: '[&BDUBAAA=]',
				difficulty: 'Hard',
				howto: "You'll have to do the JP S from the WP to get to this one. The first JP is where the hero point is. Once you're above the WP, that's the start.",
				video: 'https://www.youtube.com/watch?v=Uw4P2MRpLag',
				acc: "Core",
			},
			{ // Demongrub Pits Jumping Puzzle
				id: 1926,
				waypoint: '[&BPwAAAA=]',
				difficulty: 'Meh',
				howto: 'Head far SE from the WP to Demongrub Pits. There is a hidden cave on the side.',
				video: 'https://www.youtube.com/watch?v=WeKK4sSvHnk',
				acc: "Core",
			},
			{ //Fawcett's Bounty Jumping Puzzle
				id: 1910,
				waypoint: '[&BLIAAAA=]',
				difficulty: 'Meh',
				howto: 'Head far W from the WP. N of the water, there is a cave enterence.',
				video: 'https://www.youtube.com/watch?v=NaHYPEeHTMA',
				acc: "Core",
			},
			{ // Goemm's Lab Jumping Puzzle
				id: 1888,
				waypoint: '[&BLIEAAA=]',
				difficulty: 'Meh',
				howto: 'Head slightly S and there will be a cave to the left.',
				video: 'https://www.youtube.com/watch?v=B-7hQi8a8gk',
				acc: "Core",
			},
			{ // Grendich Gamble Jumping Puzzle
				id: 1906,
				waypoint: '[&BNoAAAA=]',
				difficulty: 'Easy',
				howto: 'Head slightly NE, just past Blasted Moors',
				video: "https://www.youtube.com/watch?v=qoY7LXVi7TM",
				acc: "Core",
			},
			{ // Griffonrook Run Jumping Puzzle
				id: 1905,
				waypoint: '[&BOgAAAA=]',
				difficulty: 'Hard',
				howto: "There's a hidden underwater cave SE from the WP. It is NE from the word 'False Lake' on the map. Check the video for the guide",
				video: 'https://www.youtube.com/watch?v=o5wEHgm3Aco',
				acc: "Core",
			},
			{ // Hexfoundry Jumping Puzzle
				id: 1909,
				waypoint: '[&BM0BAAA=]',
				difficulty: 'Meh',
				howto: 'Slightly SE and there will be a cave enterence',
				video: 'https://www.youtube.com/watch?v=t5gXCp68C0M',
				acc: "Core",
			},
			{ // Hidden Garden Jumping Puzzle
				id: 1901,
				waypoint: 'SW of [&BMkCAAA=] | N of [&BM8CAAA=] | W of [&BNECAAA=] | SE of [&BNICAAA=]',
				difficulty: 'Hard',
				howto: 'At each of these waypoints, there may be a veteran Keeper. Kill one of these to open the portal to the Hidden Garden.',
				video: 'https://www.youtube.com/watch?v=JHJ7YBH84Dk',
				acc: "Core",
			},
			{ // King Jalis's Refuge Jumping Puzzle
				id: 1904,
				waypoint: '[&BLUAAAA=]',
				difficulty: 'Meh',
				howto: 'Head far south before hitting the POI. N of the POI, there is a hidden cave enterence',
				video: 'https://www.youtube.com/watch?v=HcHRPuT54nw',
				acc: "Core",
			},
			{ // Loreclaw Expanse Jumping Puzzle
				id: 1902,
				waypoint: '[&BMcDAAA=]',
				difficulty: 'Meh',
				howto: 'Head directly SE',
				video: 'https://www.youtube.com/watch?v=7dss9GFiC54',
				acc: "Core",
			},
			{ // Morgan's Leap Jumping Puzzle
				id: 1929,
				waypoint: '[&BDUBAAA=]',
				difficulty: 'Meh',
				howto: 'Head directly S to the HP',
				video: 'https://www.youtube.com/watch?v=-wV7VGnXwA8',
				acc: "Core",
			},
			{ // Only Zuhl Jumping Puzzle
				id: 1900,
				waypoint: '[&BE4CAAA=]',
				difficulty: 'Meh',
				howto: 'Directly N into a cave',
				video: 'https://www.youtube.com/watch?v=ZuX8fxN6uqU',
				acc: "Core",
			},
			{ // Pig Iron Quarry Jumping Puzzle
				id: 1927,
				waypoint: '[&BBkCAAA=]',
				difficulty: 'Meh',
				howto: 'Head SW to Pig Iron. From that island, climb up',
				video: 'https://www.youtube.com/watch?v=NMq_ZMuQbj8',
				acc: "Core",
			},
			{ // Portmatt's Lab Jumping Puzzle
				id: 1887,
				waypoint: '[&BKQBAAA=]',
				difficulty: 'Hard',
				howto: 'Travel down and W. There will be an island with weird glass placement. This is more of a puzzle than a jumping puzzle.',
				video: 'https://www.youtube.com/watch?v=APuVQE6YU4s',
				acc: "Core",
			},
			{ // Scavenger's Chasm Jumping Puzzle
				id: 1897,
				waypoint: '[&BKoCAAA=]',
				difficulty: 'Hard',
				howto: 'Head SW, past the Elder Wood farm. When you get to the water, there will be a waterfall to the left of it, will be a hidden enterence.',
				video: 'https://www.youtube.com/watch?v=Xo6zW6hsY-4',
				acc: "Core",
			},
			{ // Shamen's Rookery Jumping Puzzle
				id: 1895,
				waypoint: '[&BHcBAAA=]',
				difficulty: 'Meh',
				howto: "Head SW to Shaman's Rookery",
				video: 'https://www.youtube.com/watch?v=k_CR_9qFmTo',
				acc: "Core",
			},
			{ // Shattered Ice Ruins Jumping Puzzle
				id: 1896,
				waypoint: '[&BH4CAAA=]',
				difficulty: 'Meh',
				howto: 'Head E between mountains. When you get to the water, head down into it, take a right and do a 180 around until you find a hidden cave',
				video: 'https://www.youtube.com/watch?v=D00JHqw5lpU',
				acc: "Core",
			},
			{ // Skipping Stones Jumping Puzzle
				id: 1894,
				waypoint: '[&BNAGAAA=]',
				difficulty: 'Meh',
				howto: 'Head SE, then wrap around the mountain',
				video: 'https://www.youtube.com/watch?v=Z3i0bwwK8qk',
				acc: "Core",
			},
			{ // Spekk's Lab Jumping Puzzle
				id: 1912,
				waypoint: '[&BDcBAAA=]',
				difficulty: 'Meh',
				howto: 'NW from WP. There is a hidden cave enterence on the side of the map that is next to a river.',
				video: 'https://www.youtube.com/watch?v=maKi8YdDatg',
				acc: "Core",
			},
			{ // Spelunker's Delve Jumping Puzzle
				id: 1898,
				waypoint: '[&BP4FAAA=]',
				difficulty: 'Meh',
				howto: 'Head all the way S to the edge of the map. There is a hidden hole in the ground that is covered by a bush',
				video: 'https://www.youtube.com/watch?v=p4Mv9lWDQ_g',
				acc: "Core",
			},
			{ // Swashbuckler's Cove Jumping Puzzle
				id: 1899,
				waypoint: '[&BJEBAAA=]',
				difficulty: 'Meh',
				howto: 'Head far SE to the edge of the map. Follow to near the end of the river. There will be land to the right that leads uphill.',
				video: 'https://www.youtube.com/watch?v=8ufow05Hirk',
				acc: "Core",
			},
			{ // Tribulation Caverns Jumping Puzzle
				id: 1915,
				waypoint: '[&BFYCAAA=]',
				difficulty: 'Hard',
				howto: 'Head SW towards the Tribulation Caverns. Follow the video guide for the howtos',
				video: 'https://www.youtube.com/watch?v=0t1cYjtCTAw',
				acc: "Core",
			},
			{ // Tribulation Rift Jumping Puzzle
				id: 1916,
				waypoint: '[&BFYCAAA=]',
				difficulty: 'Meh',
				howto: 'Head SW. Follow the video guide for the full howtos',
				video: 'https://www.youtube.com/watch?v=hhu9H_eihGY',
				acc: "Core",
			},
			{ // Under New Mangement Jumping Puzzle
				id: 1917,
				waypoint: '[&BNUGAAA=]',
				difficulty: 'Easy',
				howto: 'The JP is right at the WP',
				video: 'https://www.youtube.com/watch?v=7t0N37J4RpU',
				acc: "Core",
			},
			{ // Urmaug's Secret Jumping Puzzle
				id: 1889,
				waypoint: '[&BA0EAAA=]',
				difficulty: 'Easy',
				howto: 'Follow the river NE. There will be a hidden cave enterence going up',
				video: 'https://www.youtube.com/watch?v=BtWy90Ppkmg',
				acc: "Core",
			},
			{ // Vizier's Tower Jumping Puzzle
				id: 1918,
				waypoint: '[&BPcCAAA=]',
				difficulty: 'Meh',
				howto: 'Head to the island SE of where the nearest Vista is',
				video: 'https://www.youtube.com/watch?v=asB3QtL6L8U',
				acc: "Core",
			},
			{ // Wall Breach Blitz Jumping Puzzle
				id: 1920,
				waypoint: '[&BGEBAAA=]',
				difficulty: 'Meh',
				howto: 'Follow the edge of the wall, but head SW from the WP',
				video: 'https://www.youtube.com/watch?v=jrS7U47C0bE',
				acc: "Core",
			},
			{ // Weyant's Revenge Jumping Puzzle
				id: 1923,
				waypoint: '[&BDMEAAA=]',
				difficulty: 'Meh',
				howto: 'Head S to a farmhouse with a windmill. Go around it through stacks of hay',
				video: 'https://www.youtube.com/watch?v=zpMsf-7eDg4',
				acc: "Core",
			},

			// Minidungeons
			{ // Bad Neighborhood Minidungeon
				id: 1882,
				waypoint: '[&BPkAAAA=]',
				difficulty: 'Easy',
				howto: "Head directly NW to Beggar's Burrow. ",
				video: 'https://www.youtube.com/watch?v=006UGN5Q2wM',
				acc: "Core",
			},
			{ // Don't Touch the Shiny Minidungeon
				id: 1881,
				waypoint: '[&BDoBAAA=]',
				difficulty: 'Easy',
				howto: 'Head NE and where the n is in "Unseen" on the minimap is the enterence to the area',
				video: 'https://www.youtube.com/watch?v=5vEeyEAcDCQ',
				acc: "Core",
			},
			{ // Forgotten Stream Minidungeon
				id: 1873,
				waypoint: '[&BBsDAAA=]',
				difficulty: 'Easy',
				howto: 'Head towards the Cathedral of Verdance, but then go underwater. Keep going slightly NE.',
				video: 'https://www.youtube.com/watch?v=8Ca5dn2ZU8I',
				acc: "Core",
			},
			{ // Forsaken Fortune Minidungeon
				id: 1883,
				waypoint: '[&BGUCAAA=]',
				difficulty: 'Hard',
				howto: 'Head W towards Wyrmblood Lake and to the edge of the map. Check the video as there are possibly tasks to do before entering the dungeon',
				video: 'https://www.youtube.com/watch?v=0HXZjm-920o',
				acc: "Core",
			},
			{ // Goff's Loot Minidungeon
				id: 1874,
				waypoint: '[&BLoDAAA=]',
				difficulty: 'Easy',
				howto: 'N of the WP at the POI. At the end of the cave, there is a cage door. Interact with it and defeat trolls. Reach the chest at the end',
				video: 'https://www.youtube.com/watch?v=O_tVu-0jQQg',
				acc: "Core",
			},
			{ // Grounded Minidungeon
				id: 1880,
				waypoint: '[&BOQGAAA=]',
				difficulty: 'Easy',
				howto: 'Head NW to a shipwreck',
				video: 'https://www.youtube.com/watch?v=aJRCyEqKk5A',
				acc: "Core",
			},
			{ // Magellan's Memento Minidungeon
				id: 1878,
				waypoint: '[&BHgCAAA=]',
				difficulty: 'Easy',
				howto: 'From the WP, head E and stay on the edge of the mountain/end of the map',
				video: 'https://www.youtube.com/watch?v=g64CK_59x0U',
				acc: "Core",
			},
			{ // Rebel's Seculusion Minidungeon
				id: 1876,
				waypoint: '[&BBoCAAA=]',
				difficulty: 'Easy',
				howto: 'Head N and hang on the edge of the mountain. Find a break through the wall',
				video: 'https://www.youtube.com/watch?v=-0k8W7OHMqY',
				acc: "Core",
			},
			{ // Ship of Sorrows Minidungeon
				id: 1879,
				waypoint: '[&BOACAAA=]',
				difficulty: 'Easy',
				howto: 'There is a sunken ship W of the POI',
				video: 'https://www.youtube.com/watch?v=6BVn8ONBE6o',
				acc: "Core",
			},
			{ // Tears of Itlaocol Minidungeon
				id: 1875,
				waypoint: '[&BD4BAAA=]',
				difficulty: 'Meh',
				howto: 'Head SW and follow the water. On the bottom edge of it, there will be an enterance',
				video: 'https://www.youtube.com/watch?v=bug1XwDFPts',
				acc: "Core",
			},
			{ // The Long Way Around Minidungeon
				id: 1872,
				waypoint: '[&BPICAAA=]',
				difficulty: 'Hard',
				howto: 'Follow the video guide for the full howtos',
				video: 'https://www.youtube.com/watch?v=dfHGOmXhWjI',
				acc: "Core",
			},
			{ // Vexa's Lab Minidungeon
				id: 1884,
				waypoint: '[&BBoCAAA=]',
				difficulty: 'Meh',
				howto: 'Follow the video guide for the full howtos',
				video: 'https://www.youtube.com/watch?v=BwOJA_2BRgk',
				acc: "Core",
			},
			{ // Windy Cave Treasure Minidungeon
				id: 1877,
				waypoint: '[&BJkBAAA=]',
				difficulty: 'Meh',
				howto: 'Head S then W before reaching the Heart',
				video: 'https://www.youtube.com/watch?v=jGduFo-sCic',
				acc: "Core",
			},

			// Renown Hearts
			{ // Elon Riverlands Taskmaster
				id: 3792,
				waypoint: '[&BFMKAAA=]',
				difficulty: 'Easy',
				howto: 'The heart N of the WP is quick and easy. Gather glyphs, kill Djinns.',
				acc: "PoF",
			},
			{ // Desolation Taskmaster
				id: 3791,
				waypoint: '[&BNwKAAA=]',
				difficulty: 'Easy',
				howto: 'The heart SE from the WP has very simple tasks such as killing things, removing stuff from walls, etc.',
				acc: "PoF",
			},

			// Vistas
			{ // Ascalon Vista Viewer
				id: 1938,
				waypoint: '[&BKYDAAA=]',
				difficulty: 'Easy',
				howto: 'Head N slightly',
				acc: "Core",
			},
			{ //Kryta Vista Viewer
				id: 1839,
				waypoint: '[&BPEAAAA=]',
				difficulty: 'Easy',
				howto: 'Up the stairs',
				acc: "Core"
			},
			{ // Maguuma Vista Viewer
				id: 1931,
				waypoint: '[&BLoEAAA=]',
				difficulty: 'Easy',
				howto: 'Head NE',
				acc: "Core"
			},
			{ // Maguuma Wastes Vista Viewer
				id: 1937,
				waypoint: '[&BH8HAAA=]',
				difficulty: 'Easy',
				howto: 'NE and up next to the WP',
				acc: "Core"
			},
			{ // Orr Vista Vista Viewer
				id: 1932,
				waypoint: '[&BCEDAAA=]',
				difficulty: 'Easy',
				howto: 'Mount up or run outside the camp, beind the HP. Jump up.',
				acc: "Core"
			},
			{ // Shiverpeaks Vista Viewer
				id: 1936,
				waypoint: '[&BI0DAAA=]',
				difficulty: 'Easy',
				howto: 'Mount up or run behind the Vista and up the ledge',
				acc: "Core"
			},
			{ // Heart of Maguuma Vista Viewer
				id: 2983,
				waypoint: '[&BOAHAAA=]',
				difficulty: 'Easy',
				howto: 'Watch your step!',
				acc: 'HoT'
			},
			{ // Desert Vista Viewer
				id: 3721,
				waypoint: '[&BEAKAAA=]',
				difficulty: 'Easy',
				howto: 'Head W',
				acc: 'PoF'
			},

			// World Bosses
			{ // Claw of Jormag
				id: 2026,
				waypoint: '[&BHoCAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Forged Demolisher (Maw of Torment)
				id: 3607,
				waypoint: '[&BKMKAAA=]',
				difficulty: 'Meh',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Fire Elemental
				id: 1930,
				waypoint: '[&BEcAAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Frozen Maw
				id: 2022,
				waypoint: '[&BMIDAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Great Jungle Wurm
				id: 1933,
				waypoint: '[&BEEFAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Hound Master
				id: 3589,
				waypoint: '[&BO0KAAA=]',
				difficulty: 'Meh',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Inquest Golem Mark II
				id: 1934,
				waypoint: '[&BNQCAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Megadestroyer
				id: 1935,
				waypoint: '[&BM0CAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Shadow Behemoth
				id: 2025,
				waypoint: '[&BPcAAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},
			{ // Shatterer
				id: 1983,
				waypoint: '[&BE4DAAA=]',
				difficulty: 'Easy',
				howto: 'Check GW2Wiki timers for when the boss is up',
				web: 'https://wiki.guildwars2.com/wiki/Event_timers',
				acc: "Core",
			},

			// Other
			{ // Activity Participiation
				id: 1939,
				waypoint: '[&BBAEAAA=]',
				difficulty: 'Meh',
				howto: 'Check GW2Wiki for what activity is up',
				web: 'https://wiki.guildwars2.com/wiki/Activity',
				acc: "Core",
			},
			{ // Mystic Forger
				id: 500,
				waypoint: '[&BBAEAAA=]',
				difficulty: 'Easy',
				howto: 'Combine 4 items together in the Mystic Forge. Easy recipes: 4 pieces of gear, weapon, sigil, rune.',
				acc: "Core",
			},

			// PvP
			{ // PvP Matches Played in Unranked or Ranked Arena
				id: 2816,
				difficulty: "Easy",
				howto: "Complete any Unranked or Ranked match"
			},
			{ // PvP Player Kills
				id: 1861,
				difficulty: "Easy",
				howto: "Kill, or help kill, 3 enemy players in a PvP match."
			},
			{ // PvP Rank Points
				id: 1857,
				difficulty: "Easy",
				howto: "Earn 50 Rank Points in PvP matches. Make sure to Ready Up."
			},
			{ // PvP Rated Game Winner
				id: 3449,
				difficulty: "Meh",
				howto: "Win an Unranked or Ranked match."
			},
			{ // PvP Reward Earner
				id: 1856,
				difficulty: "Easy",
				howto: "Earn 1 reward from a PvP Reward Track. This can be done easily by completing another PvP daily and drinking the potion"
			},
			{ // PvP Tournament Participator
				id: 3450,
				difficulty: "Hard",
				howto: "Participate in a PvP Tournament."
			},
			{ // PvP Top Stats
				id: 2817,
				difficulty: "Easy",
				howto: "Earn a top scoreboard stat on your team in a PvP match."
			},


			// WvW 
			{ // Mists Guard Killer
				id: 437,
				howto: "Kill 5 enemy guard NPCs.",
				difficulty: 'Easy'
			},
			{ // WvW Big Spender
				id: 1852,
				howto: "Spend 25 Badges of Honor in World versus World.",
				difficulty: 'Easy'
			},
			{ // WvW Camp Capturer
				id: 1850,
				howto: "Capture supply camps for your realm in World versus World.",
				difficulty: 'Easy'
			},
			{ // WvW Caravan Disruptor
				id: 1847,
				howto: "Destroy 1 enemy supply caravan in World versus World.",
				difficulty: 'Easy'
			},
			{ // WvW Invasion Defender
				id: 1846,
				howto: "Defeat enemy invaders in World vs. World.",
				difficulty: 'Meh'
			},
			{ // WvW Keep Capturer
				id: 1845,
				howto: "Capture a keep for your realm in World vs. World.",
				difficulty: 'Hard'
			},
			{ // WvW Land Claimer
				id: 1849,
				howto: "Kill a sentry and capture the circle",
				difficulty: 'Easy'
			},
			{ // WvW Objective Defender
				id: 1844,
				howto: "Defend a castle, keep, tower, or supply camp for your realm in World versus World.",
				difficulty: 'Meh'
			},
			{ // WvW Tower Capturer
				id: 1843,
				howto: "Capture towers for your realm in World versus World.",
				difficulty: 'Meh'
			},
			{ // WvW World Ranker
				id: 1851,
				howto: "Gain World Rank in World versus World.",
				difficulty: 'Easy'
			},
			{ // WvW Master of Monuments
				id: 946,
				howto: "Capture 1 ruin or shrine in any of the WvW Borderlands.",
				difficulty: 'Easy'
			},
			{ // WvW Veteran Creature Slayer
				id: 1848,
				howto: "Kill the veteran harpy, warg, or wurm located in the Borderlands in World vs. World.",
				difficulty: 'Easy'
			},
		]
	};
	// Pact Supply Network Agent
	var psna = {
		sunday: [
			{
				name: "Azarr's Arbor",
				waypoint: "[&BIYHAAA=]",
				desc: "Northwest of Uplands Oasis",
				area: "Maguuma Wastes",
			},
			{
				name: "Mabon Market",
				waypoint: "[&BDoBAAA=]",
				desc: "Nearby waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Fort Trinity",
				waypoint: "[&BO4CAAA=]",
				desc: "West of waypoint",
				area: "Ruins of Orr",
			},
			{
				name: "Mudflat Camp",
				waypoint: "[&BKcBAAA=]",
				desc: "South of waypoint",
				area: "Kryta",
			},
			{
				name: "Blue Ice Shining",
				waypoint: "[&BIUCAAA=]",
				desc: "Up the ramp and by the armor repair Kodan",
				area: "Shiverpeaks",
			},
			{
				name: "Snow Ridge Camp",
				waypoint: "[&BCECAAA=]",
				desc: "Nearby waypoint",
				area: "Ascalon",
			},
		],
		monday: [
			{
				name: "Restoration Refuge",
				waypoint: "[&BIgHAAA=]",
				desc: "North of waypoint",
				area: "Maguuma Wastes",
			},
			{
				name: "Lionguard Waystation",
				waypoint: "[&BEwDAAA=]",
				desc: "Southwest of waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Triumph Plaza",
				waypoint: "[&BNIEAAA=]",
				desc: "Nearby waypoint",
				area: "Ruins of Orr",
			},
			{
				name: "Mashwatch Haven",
				waypoint: "[&BKYBAAA=]",
				desc: "West of waypoint",
				area: "Kryta",
			},
			{
				name: "Ridgerock Camp",
				waypoint: "[&BIMCAAA=]",
				desc: "Nearby waypoint",
				area: "Shiverpeaks",
			},
			{
				name: "Haymal Gore",
				waypoint: "[&BB4CAAA=]",
				desc: "North of waypoint",
				area: "Ascalon",
			},
		],
		tuesday: [
			{
				name: "Camp Resolve",
				waypoint: "[&BH8HAAA=]",
				desc: "1) North of the camp or 2) South of the camp or 3) West of Blue Oasis [&BKsHAAA=]",
				area: "Maguuma Wastes",
			},
			{
				name: "Desider Atum",
				waypoint: "[&BEgAAAA=]",
				desc: "Nearby waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Shelter Docks",
				waypoint: "[&BKgCAAA=]",
				desc: "Nearby waypoint",
				area: "Ruins of Orr",
			},
			{
				name: "Garenhoff",
				waypoint: "[&BBEAAAA=]",
				desc: "South of waypoint",
				area: "Kryta",
			},
			{
				name: "Snowslide Ravine",
				waypoint: "[&BGQCAAA=]",
				desc: "Nearby waypoint",
				area: "Shiverpeaks",
			},
			{
				name: "Temperus Point",
				waypoint: "[&BIMBAAA=]",
				desc: "East of waypoint",
				area: "Ascalon",
			},
		],
		wednesday: [
			{
				name: "Town of Prosperity",
				waypoint: "[&BHoHAAA=]",
				desc: "Northeast of waypoint",
				area: "Maguuma Wastes",
			},
			{
				name: "Swampwatch Post",
				waypoint: "[&BLQDAAA=]",
				desc: "South of waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Caer Shadowfain",
				waypoint: "[&BCEDAAA=]",
				desc: "Nearby waypoint",
				area: "Ruins of Orr",
			},
			{
				name: "Shieldbluff",
				waypoint: "[&BKYAAAA=]",
				desc: "East of waypoint",
				area: "Kryta",
			},
			{
				name: "Mennerheim",
				waypoint: "[&BLQAAAA=]",
				desc: "West of waypoint",
				area: "Shiverpeaks",
			},
			{
				name: "Ferrusatos Village",
				waypoint: "[&BFEDAAA=]",
				desc: "Southwest of waypoint",
				area: "Ascalon",
			},
		],
		thursday: [
			{
				name: "Blue Oasis",
				waypoint: "[&BKsHAAA=]",
				desc: "West of Blue Oasis",
				area: "Maguuma Wastes",
			},
			{
				name: "Seraph Protectors",
				waypoint: "[&BF0AAAA=]",
				desc: "South of waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Armada Harbor",
				waypoint: "[&BO4CAAA=]",
				desc: "West of waypoint",
				area: "Ruins of Orr",
			},
			{
				name: "Altar Brook Trading Post",
				waypoint: "[&BEUDAAA=]",
				desc: "Southwest of waypoint",
				area: "Kryta",
			},
			{
				name: "Rocklair",
				waypoint: "[&BJcBAAA=]",
				desc: "East of waypoint",
				area: "Shiverpeaks",
			},
			{
				name: "Iron Marches",
				waypoint: "[&BOQBAAA=] or [&BOcBAAA=]",
				desc: "1) North of Old Piken or 2) Southwest of Scalecatch",
				area: "Ascalon",
			},
		],
		friday: [
			{
				name: "Repair Station",
				waypoint: "[&BJcHAAA=]",
				desc: "Near waypoint",
				area: "Maguuma Wastes",
			},
			{
				name: "Bretch Ayahusasca",
				waypoint: "[&BMwCAAA=]",
				desc: "South of waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Shelter Docks",
				waypoint: "[&BKYCAAA=] or [&BKgCAAA=]",
				desc: "1) North of Pagga or 2) South of Waste Hollows",
				area: "Ruins of Orr",
			},
			{
				name: "Pearl Islet",
				waypoint: "[&BNUGAAA=]",
				desc: "Nearby waypoint",
				area: "Kryta",
			},
			{
				name: "Dolyak Pass",
				waypoint: "[&BHsBAAA=]",
				desc: "West of waypoint",
				area: "Shiverpeaks",
			},
			{
				name: "Hawkgates",
				waypoint: "[&BNMAAAA=]",
				desc: "Southwest of waypoint",
				area: "Ascalon",
			},
		],
		saturday: [
			{
				name: "Camp Resolve",
				waypoint: "[&BH8HAAA=]",
				desc: "1) North of the camp or 2) South of the camp",
				area: "Maguuma Wastes",
			},
			{
				name: "Augur's Torch",
				waypoint: "[&BB8DAAA=]",
				desc: "South of waypoint",
				area: "Ruins of Orr",
			},
			{
				name: "Gallant's Folly",
				waypoint: "[&BNMCAAA=]",
				desc: "Nearby waypoint",
				area: "Maguuma Jungle",
			},
			{
				name: "Vigil Keep",
				waypoint: "[&BJIBAAA=]",
				desc: "South of waypoint",
				area: "Kryta",
			},
			{
				name: "Balddistead",
				waypoint: "[&BEICAAA=]",
				desc: "Nearby waypoint",
				area: "Shiverpeaks",
			},
			{
				name: "Bovarin Estate",
				waypoint: "[&BBABAAA=]",
				desc: "West of waypoint",
				area: "Ascalon",
			},
		],
	};

	// Get daily ids
	var api = "https://api.guildwars2.com/v2/achievements/daily";
	const response = await fetch(api);
	const dailyNum = await response.json();

	// Get tomorrow's daily IDs
	var api2 = "https://api.guildwars2.com/v2/achievements/daily/tomorrow";
	const response2 = await fetch(api2);
	const tomorrowNum = await response2.json();

	var table = document.getElementById('daily');
	var tableBody = document.getElementById('dailyBody'),
		psnaBody = document.getElementById('psnaBody');
	var tdID = 0, showDir, showDiff, showWP, showVid, accountIcon, linkWidth = 0, cursor, showLink, logo;
	var sameName1, sameName2;
	var colorDiff, colorType, // Color background for what the difficulty could be
		icon; // Type icons
	let dataHTML = '',
		psnaHTML = '';

	var foragerCounter = 0,
		lumbererCounter = 0,
		vistaCounter = 0,
		eventCounter = 0,
		jpCounter = 0,
		miniCounter = 0,
		minerCounter = 0;

	async function doIt(choice){
		// Put the IDs into a string (###,###,###)
		var dString = '';
		var dTemp = '';
		var todayType = [dailyNum.pve, dailyNum.wvw, dailyNum.pvp];
		var tomorrowType = [tomorrowNum.pve, tomorrowNum.wvw, tomorrowNum.pvp]; 
		dataHTML = '';

		if (choice == 1){
			for (i=0; i<todayType.length; i++){
				for (j=0; j<todayType[i].length; j++){
					dTemp = todayType[i][j].id;
					if (dString == ''){
						dString = dTemp;
					} else {
						dString = dString + "," + dTemp; 
					}
				}
			}
		} else {
			for (i=0; i<tomorrowType.length; i++){
				for (j=0; j<tomorrowType[i].length; j++){
					dTemp = tomorrowType[i][j].id;
					if (dString == ''){
						dString = dTemp;
					} else {
						dString = dString + "," + dTemp; 
					}
				}
			}
		}
		// Puts the string into what the daily actually is
		var api3 = "https://api.guildwars2.com/v2/achievements?ids="+dString;
		const response3 = await fetch(api3);
		const todaysList = await response3.json();

		for (i=0; i<todaysList.length; i++){
			for (j=0; j<daily.info.length; j++){
				// Check if IDs match
				if (todaysList[i].id == daily.info[j].id){
					// If two core dailies of the same type are used, delete the second one
					if (daily.info[j].acc != null && daily.info[j].acc == "Core"){
						
						if (todaysList[i].name.includes("Forager")){
							foragerCounter = foragerCounter + 1; 
							if (foragerCounter == 2){
								todaysList.splice(i,1);
							}
						} else if (todaysList[i].name.includes("Miner")){
							minerCounter = minerCounter + 1;
							if (minerCounter == 2){
								todaysList.splice(i,1);
							}
						} else if (todaysList[i].name.includes("Lumberer")){
							lumbererCounter = lumbererCounter + 1;
							if (lumbererCounter == 2){
								todaysList.splice(i,1);
							}
						} else if (todaysList[i].name.includes("Vista Viewer")){
							vistaCounter = vistaCounter + 1;
							if (vistaCounter == 2){
								todaysList.splice(i,1);
								i = i-1;
							} 
						} else if (todaysList[i].name.includes("Event")){
							eventCounter = eventCounter + 1;
							if (eventCounter == 2){
								todaysList.splice(i,1);
							}
						} else if (todaysList[i].name.includes("Minidungeon")){
							miniCounter = miniCounter + 1;
							if (miniCounter == 2){
								todaysList.splice(i,1);
							}
						}  else if (todaysList[i].name.includes("Jumping Puzzle")){
							jpCounter = jpCounter + 1; 
							if (jpCounter == 2){
								todaysList.splice(i,1);
							}
						} 

						
					} 
				}
			}
		}

		// Go through both lists of today's dailies and the overall list to make their IDs
		// Match IDs and input their information
		for (i=0; i<todaysList.length; i++){
			for (j=0; j<daily.info.length; j++){
				// Check if IDs match
				if (todaysList[i].id == daily.info[j].id){
					showDiff = daily.info[j].difficulty;
					showDir = daily.info[j].howto; 

					// Check if it has waypoint
					if (daily.info[j].waypoint == null){
						showWP = '';
					} else {
						showWP = daily.info[j].waypoint;
					}

					if (daily.info[j].video != null && daily.info[j].web == null){
						showLink = `onclick = "window.open('${daily.info[j].video}');"`;
						linkWidth = 100;
						cursor = 'pointer';
						logo = `<img src ="../images/assets/youtube-logo-2.png" style = "width: ${linkWidth}%; cursor: ${cursor};">`;
					} else if (daily.info[j].web != null && daily.info[j].video == null){
						showLink = `onclick = "window.open('${daily.info[j].web}');"`;
						linkWidth = 100;
						cursor = 'pointer';
						logo = `<img src ="../images/assets/earth.png" style = "width: ${linkWidth}%; cursor: ${cursor};">`;
					}  else {
						showLink = '';
						linkWidth = 0;
						cursor = 'default';
						logo = '';
					}
					// Change the background color of dailies that are for POF or HOT 
					// This is for the sort to tell which is POF or HOT so that the next daily's background changes to tell it's a free account
					if (daily.info[j].acc == "PoF" || daily.info[j].acc == "HoT"){
						colorType = "#FF2F67";
					} else {
						colorType = "#ECECDE";
					}
					
				} 
			}

			// Picks daily icon based on type
			if (todaysList[i].name.includes("PvP") || todaysList[i].name.includes("Top Stats")){
				icon = "../images/assets/icons/Daily_PvP.png";
			} else if (todaysList[i].name.includes("WvW") || todaysList[i].name.includes("Mists Guard Killer")){
				icon = "../images/assets/icons/Daily_WvW.png";
			} else {
				icon = "../images/assets/icons/Daily_PvE.png";
			}

			// Picks background color of column Difficulty
			switch (showDiff){
				case 'Easy': colorDiff = '#49C45B'; break;
				case 'Meh': colorDiff = '#FCFF57'; break;
				case 'Hard': colorDiff = '#F23D3D'; break;
				default: colorDiff = '#ECECDE'; break;
			}

			dataHTML += `<tr>
			<td style = "background-color: ${colorType};"><center><img src = ${icon} style = ""></center></td>
			<td style = "background-color: ${colorDiff};">${showDiff}</td>
			<td>${todaysList[i].name.replace('Daily ','')}</td>
			<td>${showDir}</td>
			<td onclick = "copyWP(this.children[0].id, '${showWP}');"><input id = '${tdID}' type = 'text' value = '${showWP}'></input></td>
			<td ${showLink}><center>${logo}</center></td>
			
			</tr>`;
			// Different ID of the WP dailies so each one is unique when it copies to clipboard
			tdID = tdID + 1;
		}

		tableBody.innerHTML = dataHTML;
		removeRepeat(table, 1);
	} // End of doit()

	// Get today's num
	var d = new Date(),
		hour = d.getUTCHours(),
		today = d.getUTCDay(), 
		psnaJSON, copyPSNA = new Array,
		inputPSNA = document.getElementById('copyPSNA'); 

	// Show the table to the PSNA
	function showPSNA(){
		psnaHTML = ''; // Reset
		// Depending on what day it is, pick different locations  
		// PSNA changes at 8 UTC 
		// If the hour is >= 8, PSNA and today matches. Otherwise, still show yesturday's PSNA (case #: change)
		if (hour >= 8){
			switch (today){
			case 0: psnaJSON = psna.sunday; break; 
			case 1: psnaJSON = psna.monday; break;
			case 2: psnaJSON = psna.tuesday; break;
			case 3: psnaJSON = psna.wednesday; break;
			case 4: psnaJSON = psna.thursday; break;
			case 5: psnaJSON = psna.friday; break;
			case 6: psnaJSON = psna.saturday; break;
			}
		} else {
			switch (today){
			case 1: psnaJSON = psna.sunday; break; 
			case 2: psnaJSON = psna.monday; break;
			case 3: psnaJSON = psna.tuesday; break;
			case 4: psnaJSON = psna.wednesday; break;
			case 5: psnaJSON = psna.thursday; break;
			case 6: psnaJSON = psna.friday; break;
			case 0: psnaJSON = psna.saturday; break;
			}
		}
		// Picked sunday's (doesn't matter) length just because it's 6
		for (i = 0; i < psna.sunday.length; i++){
			psnaHTML += ` <tr>
				<td> ${psnaJSON[i].name} </td>
				<td> ${psnaJSON[i].area} </td>
				<td> ${psnaJSON[i].desc} </td>
				<td onclick = "copyWP(this.children[0].id, '${psnaJSON[i].waypoint}');"><input id = '${tdID}' type = "text" value = '${psnaJSON[i].waypoint}'</input></td>
			</tr>`
			// Unique IDs needed to copy
			tdID = tdID + 1;
			// To link all waypoints
			copyPSNA.push(" " + (i+1) + ": " + psnaJSON[i].waypoint);
		}
		psnaBody.innerHTML = psnaHTML; 
		inputPSNA.value = "PSNA" + copyPSNA;
	}

	// If the user chooces tomorrow's dailies (2), then do the function, but switch it
	if (choice != 2){
		doIt(1); 
	} else {
		doIt(2);
	}
	showPSNA();
}

function copyWP(input, waypoint) {
	var text = document.getElementById(input);
	if (text.value == "Copied!"){
		text.value = waypoint;
	} else {
		var tempText = text.value;
	  	text.select();
	  	text.setSelectionRange(0, 99999)
	  	document.execCommand("copy");

	  	text.value = "Copied!";
	  	setTimeout(function(){text.value = tempText}, 1000); 
	}
}

// Removes any duplicates and shows what dailies are "only free"
function removeRepeat(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch, 
  	foragerCounter = 0, minerCounter = 0, vistaCounter = 0, eventCounter = 0, dungCounter = 0, miniCounter = 0;
  var xFirstCol, yFirstCol;
  var showRowColor = '#FF6129';
  table = tableName;
  var copyExpan = document.getElementById('copyExpan');
  var copyExpanInput = '';
  var copyCount = 0;

  // Core dailies
  var dungeon = ["Ascalonian Catacombs", "Caudecus's Manor", "Twilight Arbor", "Sorrow's Embrace", "Citadel of Flame", "Honor of the Waves", "Crucible of Eternity", "The Ruin City of Arah"];  

  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[column];
      y = rows[i + 1].getElementsByTagName("TD")[column];
      
      // For sorting which dailies are free or not
      xFirstCol = x.parentNode.children[0];
      yFirstCol = y.parentNode.children[0];
      // To get the values of the daily names
      xSecondCol = x.parentNode.children[1].innerHTML;
      // To get the values of the waypoint links
      xForthCol = x.parentNode.children[4].children[0].value;

      if (y.innerHTML.includes('Jumping Puzzle') && x.innerHTML.includes('Jumping Puzzle')){
      	table.deleteRow(i+1);
      }
      if (y.innerHTML.includes('Miner') && x.innerHTML.includes('Miner')){
      	minerCounter = minerCounter + 1;
      	if (minerCounter > 1){
      		table.deleteRow(i+1);
      	}
      }
      if (y.innerHTML.includes('Minidungeon') && x.innerHTML.includes('Minidungeon')){
      	miniCounter = miniCounter + 1;
      	console.log(miniCounter)
      	if (miniCounter == 1){
      		table.deleteRow(i+1);
      	}
      }

      // If a column is a different color than the default, 
      // change the next column to be the "Core" color and revert the current column to be the default
      if (xFirstCol.style.backgroundColor == "rgb(255, 47, 103)"){
      	xFirstCol.style.backgroundColor = "rgb(236, 236, 222)";
      	yFirstCol.style.backgroundColor = "rgb(255, 97, 41)";
      }

      // If the first column is the default color (after sorting), then that is the expansion dailies
      // Copy all waypoints that are expansion into one value
      if (xFirstCol.style.backgroundColor == "rgb(236, 236, 222)" && !xSecondCol.includes("WvW") 
      	&& !xSecondCol.includes("PvP") && !xSecondCol.includes("Top Stats")){
      	copyCount = copyCount + 1;
      	if (copyCount > 1){
      		copyExpanInput = copyExpanInput + ", " + xSecondCol.split(" ").slice(0,2).join(" ") + ": " + xForthCol; 
      	} else {
      		copyExpanInput = xSecondCol.split(" ").slice(0,2).join(" ") + ": " + xForthCol; 
      	}
      	copyExpan.value = copyExpanInput;
      }

      // Remove dungeon duplicates
      if (dungeon.indexOf(y.innerHTML) != -1){
      	dungCounter = dungCounter + 1;
      	console.log(dungCounter)

      	if (dungCounter == 2){
	      	table.deleteRow(i);
	    } else if (dungCounter == 3) {
	      	table.deleteRow(i);
	    }
      }
       

    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function sortTableByDifficulty(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch, xDiff = 0, yDiff = 0;
  table = document.getElementById(tableName);

  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[column];
      y = rows[i + 1].getElementsByTagName("TD")[column];

      if (x.innerHTML.includes('Easy')){
      	xDiff = 1;
      } else if (x.innerHTML.includes('Meh')){
      	xDiff = 2;
      } else if (x.innerHTML.includes('Hard')){
      	xDiff = 3;
      }
      if (y.innerHTML.includes('Easy')){
      	yDiff = 1;
      } else if (y.innerHTML.includes('Meh')){
      	yDiff = 2;
      } else if (y.innerHTML.includes('Hard')){
      	yDiff = 3;
      }
      
      //check if the two rows should switch place:
      if (yDiff < xDiff) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

async function new_Train(hr,min,sec,progressBarHTML,numHTML,boxHTML,nameHTML,timeHTML,placement){
    // Date (year, month, day, hour, minute, second, milisecond)
    //var newDate = new Date(Date.UTC(data.spreadsheet[0].farm, data.spreadsheet[0].days, data.spreadsheet[0].hours, data.spreadsheet[0].minutes));

    var hours_HTML = document.getElementById(hr),
        minutes_HTML = document.getElementById(min),
        seconds_HTML = document.getElementById(sec),
        progress_bar = document.getElementById(progressBarHTML),
        num = document.getElementById(numHTML),
        box = document.getElementById(boxHTML),
        input_train = document.getElementById(nameHTML),
        input_time = document.getElementById(timeHTML);

    var hours = 24,
        minutes = 0,
        seconds = 0;

    var width,
        temp_time = 0,
        pre_time = 0,
        event_time,
        end_time, 
        result,
        num_result;

    var date = new Date();
    date.setUTCHours(hours);
    date.setUTCMinutes(minutes);
    date.setUTCSeconds(seconds);

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

        progress_bar.style.background = "#ddd"; // bar disppears
        pre_time = 0;
        event_time = 0;

        end_time = ((hours * 3600) + (minutes * 60) + (seconds));
        
        result = end_time - time;
        num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

        // 24 hours = brown
        // 1 hour = blue
        if (result < 86400 && result > 0){
            progress_bar.style.background = 'rgb(215, 161, 93)';

            if (result < 3660){
                progress_bar.style.background = pre_meta_color;
            }
            event_time = 86400;
            pre_time = (86400 - result);
        }

        // Event is ongoing for 1 hour
        if (result <= 0 && result >= -3600){
            progress_bar.style.background = meta_color;

            event_time = 100;
            pre_time = 100;
        }

        if (result < -3600){
            box.style.opacity = 0.2;
            num_result = 10000000000000;
        }

        // Ongoing. Displays the number as positve and goes up 
        if (result < 0){
            result = result * -1;
        }


        format_time(result, 0, hours_HTML, minutes_HTML, seconds_HTML);
        width = (pre_time/event_time)*100;
        progress_bar.style.width = width + "%";

        num.innerHTML = num_result;

    }, 1000);
}

// Format the time to display in days, hours, minutes, and seconds
// Takes the numbers into HTML 
function format_time(result_time, days, hours, minutes, seconds){
    var s = Math.floor(result_time);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var d = Math.floor(h / 24);

    if (isNaN(s) == true){
        s = 0;
        m = 0;
        h = 0;
        d = 0;
    }

    h %= 24;
    m %= 60; 
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s; 

    days.innerHTML = d;
    hours.innerHTML = h;
    minutes.innerHTML = m;
    seconds.innerHTML = s;
}


