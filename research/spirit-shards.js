async function spiritShards(choice, taxChoice){
	var matPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=24277,24294,24295,24341,24358,24350,24351,24356,24357,24288,24289,24299,24300,24282,24283,24276,24304,24339,24324,24319,24314,24309,24305,24340,24325,24320,24315,24310,24345,24287,24363,24275,24281,24293,24349,24355,24344,24286,24298,24274,24280,24292,24348,24354,24343,24285,24297,24273,24279,24291,24347,24353,24342,24284,24296,24272,24278,24290,24346,24352,24329,24330,24303,24338,24323,24318,24313,24308,24328,24327,24337,24322,24317,24318,24307,24301,24336,24326,24321,24316,24311,24306,24302";
	const response1 = await fetch(matPricesAPI);
	const matPrices = await response1.json();
	/*
	var matNamesAPI = "https://api.guildwars2.com/v2/items?ids=24277,24294,24295,24341,24358,24350,24351,24356,24357,24288,24289,24299,24300,24282,24283,24276";
	const response2 = await fetch(matNamesAPI);
	const matNames = await response2.json();
	*/
	
	var mats = {
	fineT1: [
			{
				name: "Bone Chip",
				id: 24342,
				icon: "https://render.guildwars2.com/file/0A5B3C374C1A7F07BA3D06162857D1599B01F91D/66988.png",
			},
			{
				name: "Tiny Scale",
				id: 24284,
				icon: "https://render.guildwars2.com/file/129C3E6801966212018033D29B23ABAF5A712615/66940.png",
			},
			{
				name: "Tiny Totem",
				id: 24296,
				icon: "https://render.guildwars2.com/file/7AE87D4DE89F16B7B6E1EF6D133F3B28AA3971C9/66951.png",
			},
			{
				name: "Pile of Glittering Dust",
				id: 24272,
				icon: "https://render.guildwars2.com/file/F438A5EFB89C4ED6F8A04FE6E7060D05C294C4C6/434532.png",
			},
			{
				name: "Tiny Venom Sac",
				id: 24278,
				icon: "https://render.guildwars2.com/file/C40532E544D99B9A92B703131409390EF36E513A/66934.png",
			},
			{
				name: "Vial of Weak Blood",
				id: 24290,
				icon: "https://render.guildwars2.com/file/C0FB13FB0EDEA8E56676A05F80E3FDC5E92E98E1/66945.png",
			},
			{
				name: "Tiny Claw",
				id: 24346,
				icon: "https://render.guildwars2.com/file/386E92E109C9937C4477E5F82A0291AA05D44A92/66992.png",
			},
			{
				name: "Tiny Fang",
				id: 24352,
				icon: "https://render.guildwars2.com/file/0394D7C230A11502C4CF07003B66BC64F4F7C7C2/65893.png",
			},
		],
	fineT2: [
			{
				name: "Bone Shard",
				id: 24343,
				icon: "https://render.guildwars2.com/file/E2EC91117128DC5BC0B0FA0267EBBC2429B3556F/66989.png",
			},
			{
				name: "Small Scale",
				id: 24285,
				icon: "https://render.guildwars2.com/file/EE0C5C5917BE5B0F1569134E40E80399FFC73E17/66941.png",
			},
			{
				name: "Small Totem",
				id: 24297,
				icon: "https://render.guildwars2.com/file/ABE928F56C08C9ED47664948EB30A25B08DC5DEF/66952.png",
			},
			{
				name: "Pile of Shimmering Dust",
				id: 24273,
				icon: "https://render.guildwars2.com/file/33653CA0C67796BE03A22B5AE3197D0564376700/434533.png",
			},
			{
				name: "Small Venom Sac",
				id: 24279,
				icon: "https://render.guildwars2.com/file/0C04FDFF465A682BB080F272E9DB3DBC0637113D/66935.png",
			},
			{
				name: "Vial of Thin Blood",
				id: 24291,
				icon: "https://render.guildwars2.com/file/3008755732C166F3ACF87CC044779C5D95D25896/66946.png",
			},
			{
				name: "Small Claw",
				id: 24347,
				icon: "https://render.guildwars2.com/file/4CFEC931B41FA0092E5C9B6F240FE1F64E2F5247/66993.png",
			},
			{
				name: "Small Fang",
				id: 24353,
				icon: "https://render.guildwars2.com/file/58E20991EB9BA6D4954DAFC6AF4B3CE3C8EB7116/220904.png",
			},
		],
	fineT3: [
			{
				name: "Bone",
				id: 24344,
				icon: "https://render.guildwars2.com/file/B000AA18322202719E2B251B4EE735B5D3EF4EB1/66990.png",
			},
			{
				name: "Scale",
				id: 24286,
				icon: "https://render.guildwars2.com/file/14C880782A481EE8051BDB176E542AF55C6CE663/66942.png",
			},
			{
				name: "Totem",
				id: 24298,
				icon: "https://render.guildwars2.com/file/52A92F9505FD49FB655A0631525556D5B80E55C0/66953.png",
			},
			{
				name: "Pile of Radiant Dust",
				id: 24274,
				icon: "https://render.guildwars2.com/file/3F95D5E3E1B07294C7625B36004F6AE76C05E117/434534.png",
			},
			{
				name: "Venom Sac",
				id: 24280,
				icon: "https://render.guildwars2.com/file/6D1AB79FCCD5E673A0220A39C56E45081B426019/66936.png",
			},
			{
				name: "Vial of Blood",
				id: 24292,
				icon: "https://render.guildwars2.com/file/7D0B2A322001D999514908D519590D9B5D04DB35/66947.png",
			},
			{
				name: "Claw",
				id: 24348,
				icon: "https://render.guildwars2.com/file/325E12790C72C161E15B1CCE253C6079960CA138/66994.png",
			},
			{
				name: "Fang",
				id: 24354,
				icon: "https://render.guildwars2.com/file/112DF0DE564C9C061FE8DDB198EA953ED527E9D6/66809.png",
			},
		],
	fineT4: [
			{
				name: "Heavy Bone",
				id: 24345,
				icon: "https://render.guildwars2.com/file/A27457964A7F0A19DFFCA57FCB7308D233FE66E1/66991.png",
			},
			{
				name: "Smooth Scale",
				id: 24287,
				icon: "https://render.guildwars2.com/file/95F72F7A1A3D6D01751148FF3D0D9709366F203B/66943.png",
			},
			{
				name: "Engraved Totem",
				id: 24363,
				icon: "https://render.guildwars2.com/file/AB3AC996CC791BE0FF784CDC57060F05E6D23020/67000.png",
			},
			{
				name: "Pile of Luminous Dust",
				id: 24275,
				icon: "https://render.guildwars2.com/file/DDCA6504E718CA6DFF08F1483A2F356D0F4AEB4A/434535.png",
			},
			{
				name: "Full Venom Sac",
				id: 24281,
				icon: "https://render.guildwars2.com/file/FE3D2BD0B88077ACE7E808504A3ACB0C4EDAD8D5/66937.png",
			},
			{
				name: "Vial of Thick Blood",
				id: 24293,
				icon: "https://render.guildwars2.com/file/5103E44DB05DE7A9579C98037332294DB209CB72/66948.png",
			},
			{
				name: "Sharp Claw",
				id: 24349,
				icon: "https://render.guildwars2.com/file/97BCA6B90E56E6F0A06B3C031CDEA5EC0EBA17B5/66995.png",
			},
			{
				name: "Sharp Fang",
				id: 24355,
				icon: "https://render.guildwars2.com/file/5F9923611B4B5314D5993872EC2970CA7BE09DAB/65896.png",
			},
		],
	fineT5: [
			{
				name: "Large Bone",
				id: 24341,
				icon: "https://render.guildwars2.com/file/13F077BA5D5C6324CFCB0A2E39050F24A441190B/66987.png",
			},
			{
				name: "Large Scale",
				id: 24288,
				icon: "https://render.guildwars2.com/file/F94ECFFF0FA9C321C108DA34E777B27B0AC9D5F8/66944.png",
			},
			{
				name: "Intricate Totem",
				id: 24299,
				icon: "https://render.guildwars2.com/file/4DBC299E4B036A0DD3119A0F06BACA147C03B5C7/66954.png",
			},
			{
				name: "Pile of Incandescent Dust",
				id: 24276,
				icon: "https://render.guildwars2.com/file/3501C2BBADF95BE5F14E31484850E851EFCA33CB/434536.png",
			},
			{
				name: "Potent Vemon Sac",
				id: 24282,
				icon: "https://render.guildwars2.com/file/EA6A4C91F561EC5667947AEFE4CA436D0631CBE3/66938.png",
			},
			{
				name: "Vial of Potent Blood",
				id: 24294,
				icon: "https://render.guildwars2.com/file/99AAE49EABF9A2415940FDB83CA1CE5E6E256020/66949.png",
			},
			{
				name: "Large Claw",
				id: 24350,
				icon: "https://render.guildwars2.com/file/3A4D64F4CE2951F358DE0AFCEA6551050FB4B4A7/66420.png",
			},
			{
				name: "Large Fang",
				id: 24356,
				icon: "https://render.guildwars2.com/file/DED4F23E44430C2BE1C0D491145A4946FC7D7C6F/223793.png",
			},
		],
	fineT6: [
			{
				name: "Ancient Bone",
				id: 24358,
				icon: "https://render.guildwars2.com/file/0EE45FBB1E1A004600E9BAA7097830B2DE08587D/66828.png",
			},
			{
				name: "Armored Scale",
				id: 24289,
				icon: "https://render.guildwars2.com/file/7061C82F4F9D0C585742F545C40A0F06BE0154DC/66527.png",
			},
			{
				name: "Elaborate Totem",
				id: 24300,
				icon: "https://render.guildwars2.com/file/C1ABF9082901FC3CEABC3138CBCCA1DAD5D41812/66955.png",
			},
			{
				name: "Pile of Crystalline Dust",
				id: 24277,
				icon: "https://render.guildwars2.com/file/080D00670558CD9E580D5662030394B2206E92A6/434537.png",
			},
			{
				name: "Powerful Venom Sac",
				id: 24283,
				icon: "https://render.guildwars2.com/file/543EC37900EA2A57E77FA891193A48D66AA224AB/66939.png",
			},
			{
				name: "Vial of Powerful Blood",
				id: 24295,
				icon: "https://render.guildwars2.com/file/1A930A6A7B5B01EAB4CB36E79014C12B500BF6B3/66950.png",
			},
			{
				name: "Vicious Claw",
				id: 24351,
				icon: "https://render.guildwars2.com/file/043E2BBA270F381870F1B45E7C09C098CAFE3D14/66996.png",
			},
			{
				name: "Vicious Fang",
				id: 24357,
				icon: "https://render.guildwars2.com/file/F2050EE1A7A43EDCDCB1E971FDA608AD0566E4DA/66998.png",
			},
		],
	rareT1: [
			{
				name: "Charged Sliver",
				id: 24301,
				icon: "https://render.guildwars2.com/file/3E2CD04924CFA55FEBF9614DA490D7AE660C1D24/66956.png",
			},
			{
				name: "Corrupted Sliver",
				id: 24336,
				icon: "https://render.guildwars2.com/file/19AA3BEF089B72F09D80E43A210FF4FCF9369345/66982.png",
			}, 
			{
				name: "Crystal Sliver",
				id: 24326,
				icon: "https://render.guildwars2.com/file/044EFF43FF7DF27C0C542AAA4E064E0F533E782E/66977.png",
			}, 
			{
				name: "Destroyer Sliver",
				id: 24321,
				icon: "https://render.guildwars2.com/file/5CBA53FEA2210EC074E33D650D6E3FDCCB252B2C/66972.png",
			}, 
			{
				name: "Glacial Sliver",
				id: 24316,
				icon: "https://render.guildwars2.com/file/6DD06745F5484B1F1CF0DD9BED26573504BF1575/66969.png",
			}, 
			{
				name: "Molten Sliver",
				id: 24311,
				icon: "https://render.guildwars2.com/file/0B55A8510D75CBF6DF6BEF4FD3D52C349B1C4129/66964.png",
			}, 
			{
				name: "Onyx Sliver",
				id: 24306,
				icon: "https://render.guildwars2.com/file/9BAD413B9A2F18BE1DA83C0638560F98ED300A15/66959.png",
			}, 
		],
	rareT2: [
			{
				name: "Charged Fragment",
				id: 24302,
				icon: "https://render.guildwars2.com/file/3E2CD04924CFA55FEBF9614DA490D7AE660C1D24/66956.png",
			},
			{
				name: "Corrupted Fragment",
				id: 24337,
				icon: "https://render.guildwars2.com/file/7A492E71E419ECFD94D8A2B1400A09A0C20373CE/66983.png",
			},
			{
				name: "Crystal Fragment",
				id: 24327,
				icon: "https://render.guildwars2.com/file/43D43127072CF33D58B25E2FCC940435EB3D4548/66978.png",
			},
			{
				name: "Destroyer Fragment",
				id: 24322,
				icon: "https://render.guildwars2.com/file/EF65D6D16101C608709619BAE2045E00511E7CD5/66973.png",
			},
			{
				name: "Glacial Fragment",
				id: 24317,
				icon: "https://render.guildwars2.com/file/6909C7740DF404434BA1D32E4F7042D050FF7FE7/63150.png",
			},
			{
				name: "Molten Fragment",
				id: 24318,
				icon: "https://render.guildwars2.com/file/C3FD9D339FFF55543CB33643C91B0E4BA9D2F4A4/65591.png",
			},
			{
				name: "Onyx Fragment",
				id: 24307,
				icon: "https://render.guildwars2.com/file/C9F32DD525689EC3ADABDD7B633F1815A2C93080/66960.png",
			},
		],
	rareT3: [
			{
				name: "Charged Shard",
				id: 24303,
				icon: "https://render.guildwars2.com/file/306AB62DEBCD6D02113CD0730BDC6F95BA9B9AC4/65587.png",
			},
			{
				name: "Corrupted Shard",
				id: 24338,
				icon: "https://render.guildwars2.com/file/08AF9D2A7576FA66BEC322A859ADA0DFF7BA4B0E/66984.png",
			},
			{
				name: "Crystal Shard",
				id: 24328,
				icon: "https://render.guildwars2.com/file/2EDD405D1DF17EB01192982A3F9CF59090D7A617/65590.png",
			},
			{
				name: "Destroyer Shard",
				id: 24323,
				icon: "https://render.guildwars2.com/file/51F010BBE69639210416F8E436C00177670C5847/66974.png",
			},
			{
				name: "Glacial Shard",
				id: 24318,
				icon: "https://render.guildwars2.com/file/C3FD9D339FFF55543CB33643C91B0E4BA9D2F4A4/65591.png",
			},
			{
				name: "Molten Shard",
				id: 24313,
				icon: "https://render.guildwars2.com/file/F7A947B33B0710FF2D34EAD478E7C9C430A4CFE4/66966.png",
			},
			{
				name: "Onyx Shard",
				id: 24308,
				icon: "https://render.guildwars2.com/file/F0C133B3E8FADB3C070DA35C015551A7E50692F8/66961.png",
			},
		],
	rareT4: [
			{
				name: "Charged Core",
				id: 24304,
				icon: "https://render.guildwars2.com/file/3903CB74F8D64657FFCCAADB934AF42DFB941E6C/66957.png",
			},
			{
				name: "Corrupted Core",
				id: 24339,
				icon: "https://render.guildwars2.com/file/31E8DC797FD7369A2824AAB76D414350FFABED95/66985.png",
			},
			{
				name: "Crystal Core",
				id: 24329,
				icon: "https://render.guildwars2.com/file/D75C7D66B6589636E00AA45B20EB061305B5C52B/66979.png",
			}, 
			{
				name: "Destroyer Core",
				id: 24324,
				icon: "https://render.guildwars2.com/file/D59CDF80A1C9C061ED729C78BAA5980DAC75BE4C/66975.png",
			},
			{
				name: "Glacial Core",
				id: 24319,
				icon: "https://render.guildwars2.com/file/7C5BF3B99647E2AB0E0F6C18B60CD5743D21BADC/66970.png",
			},
			{
				name: "Molten Core",
				id: 24314,
				icon: "https://render.guildwars2.com/file/F23608C7DE13B2BC903D3F6EB9734B423E96A6CB/66967.png",
			},
			{
				name: "Onyx Core",
				id: 24309,
				icon: "https://render.guildwars2.com/file/EDE00E4F3F3802F8064D7640A345ADA0E85D045C/66962.png",
			},
		],
	rareT5: [
			{
				name: "Charged Lodestone",
				id: 24305,
				icon: "https://render.guildwars2.com/file/02EFB1C5E11B2FF4B4AC25A84E2302D244C82AA3/66958.png",
			},
			{
				name: "Corrupted Lodestone",
				id: 24340,
				icon: "https://render.guildwars2.com/file/CCC31822DA0D7D930D067B17C958A5CB1F4A24A5/66986.png",
			},
			{
				name: "Crystal Lodestone",
				id: 24330,
				icon: "https://render.guildwars2.com/file/C10553036839522AAB54425B431E391F76D878AC/66980.png",
			},
			{
				name: "Destroyer Lodestone",
				id: 24325,
				icon: "https://render.guildwars2.com/file/77BE2565DD345ADFEF3850A5B647FE50C144AAF8/66976.png",
			},
			{
				name: "Glacial Lodestone",
				id: 24320,
				icon: "https://render.guildwars2.com/file/E6FE2939F9BE1E03B4CD32B8492D3EDC407C0F75/66971.png",
			},
			{
				name: "Molten Lodestone",
				id: 24315,
				icon: "https://render.guildwars2.com/file/76910A3A41C33D0FF09EF3CBDA4B079706150FB9/66968.png",
			},
			{
				name: "Onyx Lodestone",
				id: 24310,
				icon: "https://render.guildwars2.com/file/2232AA41E3DF20EB249C0B6D10BC0D37FF6C0E3D/66963.png",
			},
			
		],
	};

	var mysticMat = [
		{
			name: "Bottle of Elonian Wine",
			id: 19663,
			vendorBuy: 2504,
			icon: "https://render.guildwars2.com/file/CC720B5A5810A84FD97AB00FA43F1679C48074DE/455843.png",
		},
		{
			name: "Mystic Crystal",
			id: 20799,
			icon: "https://render.guildwars2.com/file/045C05C2F83A59FC4B6F15073465C5D3040E4DF5/65674.png",
		},
		{
			name: "Philosopher's Stone",
			id: 20796,
			icon: "https://render.guildwars2.com/file/68FF9617BA1BE1AD58E83E4209AEF0FB58950702/434425.png",
		},
		{
			name: "Spirit Shard",
			id: 0,
			icon: "https://wiki.guildwars2.com/images/6/63/Spirit_Shard.png",
		},

	];
	
	// Go through both json of the api prices and the name of the materials
	// When ids match, fuse the prices and names together
	for (i = 0; i < matPrices.length; i++){
		addPrices(mats.fineT1);
		addPrices(mats.fineT2);
		addPrices(mats.fineT3);
		addPrices(mats.fineT4);
		addPrices(mats.fineT5);
		addPrices(mats.fineT6);

		addPrices(mats.rareT1);
		addPrices(mats.rareT2);
		addPrices(mats.rareT3);
		addPrices(mats.rareT4);
		addPrices(mats.rareT5);
	}
	function addPrices (array){
		for (j = 0; j < array.length; j++){
			if (matPrices[i].id == array[j].id){
				array[j].buy = matPrices[i].buys.unit_price; 
				array[j].sell = matPrices[i].sells.unit_price;
			}
		}
	}
	// Table bodies to put the html input in
	var fineT1ToT2TableBody = document.getElementById('ss-fine-t1ToT2-tableBody'),
		fineT2ToT3TableBody = document.getElementById('ss-fine-t2ToT3-tableBody'),
		fineT3ToT4TableBody = document.getElementById('ss-fine-t3ToT4-tableBody'),
		fineT4ToT5TableBody = document.getElementById('ss-fine-t4ToT5-tableBody'),
		fineT5ToT6TableBody = document.getElementById('ss-fine-t5ToT6-tableBody'),
		rareT1ToT2TableBody = document.getElementById('ss-rare-t1ToT2-tableBody'),
		rareT2ToT3TableBody = document.getElementById('ss-rare-t2ToT3-tableBody'),
		rareT3ToT4TableBody = document.getElementById('ss-rare-t3ToT4-tableBody'),
		rareT4ToT5TableBody = document.getElementById('ss-rare-t4ToT5-tableBody');
	var html = ``;
	var valueConversion, valueResult, profit, tax;
	var backgroundColor,
		isNegCount = 0, // if all profit margins are neg, then this would be true. Otherwise, if one is pos, then this is false
		iconSize = "width: 35px; height: 35px; vertical-align: middle;",
		ssSize = "width: 20px; height: 20px; vertical-align: middle;";

	var dust; // Placeholder for any kind of dust

	// If the user chooses <tax option> then change the tax in all the functions
	switch (taxChoice){
		case "85% Tax": tax = 0.85; break;
		case "90% Tax": tax = 0.90; break;
		case "No Tax": tax = 1; break;
		default: tax = 0.85; break;
	}

	// When clicking the <select> buttons, depending on what the choice of the user is, it will show different prices
	switch (choice){
		case 0: fineT1ToT2("Buy", "Sell"); 
		fineT2ToT3("Buy", "Sell"); 
		fineT3ToT4("Buy", "Sell"); 
		fineT4ToT5("Buy", "Sell"); 
		fineT5ToT6("Buy", "Sell"); 
		rareT1ToT2("Buy", "Sell"); 
		rareT2ToT3("Buy", "Sell"); 
		rareT3ToT4("Buy", "Sell"); 
		rareT4ToT5("Buy", "Sell"); break;
		case 1: fineT1ToT2("Sell", "Sell"); 
		fineT2ToT3("Sell", "Sell"); 
		fineT3ToT4("Sell", "Sell"); 
		fineT4ToT5("Sell", "Sell"); 
		fineT5ToT6("Sell", "Sell"); 
		rareT1ToT2("Sell", "Sell"); 
		rareT2ToT3("Sell", "Sell"); 
		rareT3ToT4("Sell", "Sell");  
		rareT4ToT5("Sell", "Sell"); break;
		case 2: fineT1ToT2("Buy", "Buy"); 
		fineT2ToT3("Buy", "Buy"); 
		fineT3ToT4("Buy", "Buy"); 
		fineT4ToT5("Buy", "Buy"); 
		fineT5ToT6("Buy", "Buy"); 
		rareT1ToT2("Buy", "Buy"); 
		rareT2ToT3("Buy", "Buy"); 
		rareT3ToT4("Buy", "Buy"); 
		rareT4ToT5("Buy", "Buy"); break;
		case 3: fineT1ToT2("Sell", "Buy"); 
		fineT2ToT3("Sell", "Buy"); 
		fineT3ToT4("Sell", "Buy"); 
		fineT4ToT5("Sell", "Buy"); 
		fineT5ToT6("Sell", "Buy"); 
		rareT1ToT2("Sell", "Buy"); 
		rareT2ToT3("Sell", "Buy"); 
		rareT3ToT4("Sell", "Buy");  
		rareT4ToT5("Sell", "Buy"); break;
	}

	// Fine T1 -> T2
	function fineT1ToT2(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.fineT1.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": 
					t1Input = mats.fineT1[i].buy; 
					t2Input = mats.fineT2[i].buy
					dust = mats.fineT2[3].buy;
					break;
				case "Sell": 
					t1Input = mats.fineT1[i].sell; 
					t2Input = mats.fineT2[i].sell; 
					dust = mats.fineT2[3].sell;
					break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.fineT2[i].buy; break;
				case "Sell": resultInput = mats.fineT2[i].sell; break;
			}

			valueConversion = (t1Input * 50) + t2Input + (dust * 5)
			valueResult = (resultInput * 18.51) * tax;
			profit = valueResult - valueConversion;

			if (i != 3){
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 50 &nbsp; <img src = "${mats.fineT1[i].icon}" title = "${mats.fineT1[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t1Input * 50).gold + format_values_subpage(t1Input * 50).silver + format_values_subpage(t1Input * 50).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT2[i].icon}" title = "${mats.fineT2[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t2Input).gold + format_values_subpage(t2Input).silver + format_values_subpage(t2Input).copper} </span></td>
					<td> + </td>
					<td> 5 &nbsp; <img src = "${mats.fineT2[3].icon}" title = "${mats.fineT2[3].name}" style = "${iconSize}"> <br>
						<span> ${format_values_subpage(dust * 5).gold + format_values_subpage(dust * 5).silver + format_values_subpage(dust * 5).copper} </span></td> 
					<td> + </td> 
					<td> 1 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.1 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~19 &nbsp; <img src = "${mats.fineT2[i].icon}" title = "${mats.fineT2[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.1).gold + format_values_subpage(profit/0.1).silver + format_values_subpage(profit/0.2).copper}</td> 
				</tr>
				`;
				
			} else { // with Dust's new conversion
				valueConversion = (t1Input * 250) + (dust * 1)
				valueResult = (resultInput * 87) * tax;
				profit = valueResult - valueConversion;
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 250 &nbsp; <img src = "${mats.fineT1[i].icon}" title = "${mats.fineT1[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t1Input * 250).gold + format_values_subpage(t1Input * 250).silver + format_values_subpage(t1Input * 250).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT2[i].icon}" title = "${mats.fineT2[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t2Input).gold + format_values_subpage(t2Input).silver + format_values_subpage(t2Input).copper} </span></td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> <br>
						<span> <span> 0.6 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> + </td> 
					<td> 1 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.1 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~87 &nbsp; <img src = "${mats.fineT2[i].icon}" title = "${mats.fineT2[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.7).gold + format_values_subpage(profit/0.7).silver + format_values_subpage(profit/0.7).copper}</td> 
				</tr>
				`;
			}
			//if (isNegCount == mats.fineT1.length){
			//	fineT1ToT2TableBody.style.display = "none";
			//}
			fineT1ToT2TableBody.innerHTML = html;
		} 
	}
	// Fine T2 -> T3
	function fineT2ToT3(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.fineT2.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": 
					t2Input = mats.fineT2[i].buy; 
					t3Input = mats.fineT3[i].buy; 
					dust = mats.fineT3[3].buy;
					break;
				case "Sell": 
					t2Input = mats.fineT2[i].sell; 
					t3Input = mats.fineT3[i].sell; 
					dust = mats.fineT3[3].sell;
					break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.fineT3[i].buy; break;
				case "Sell": resultInput = mats.fineT3[i].sell; break;
			}

			valueConversion = (t2Input * 50) + t3Input + (dust * 5)
			valueResult = (resultInput * 18.51) * tax;
			profit = valueResult - valueConversion;

			if (i != 3){
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 50 &nbsp; <img src = "${mats.fineT2[i].icon}" title = "${mats.fineT2[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t2Input * 50).gold + format_values_subpage(t2Input * 50).silver + format_values_subpage(t2Input * 50).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT3[i].icon}" title = "${mats.fineT3[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t3Input).gold + format_values_subpage(t3Input).silver + format_values_subpage(t3Input).copper} </span></td>
					<td> + </td>
					<td> 5 &nbsp; <img src = "${mats.fineT3[3].icon}" title = "${mats.fineT3[3].name}" style = "${iconSize}"> <br>
						<span> ${format_values_subpage(dust * 5).gold + format_values_subpage(dust * 5).silver + format_values_subpage(dust * 5).copper} </span></td> 
					<td> + </td> 
					<td> 2 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.2 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~19 &nbsp; <img src = "${mats.fineT3[i].icon}" title = "${mats.fineT3[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.2).gold + format_values_subpage(profit/0.2).silver + format_values_subpage(profit/0.2).copper}</td> 
				</tr>
				`;
				
			} else { // with Dust's new conversion
				valueConversion = (t2Input * 250) + (dust * 1)
				valueResult = (resultInput * 87) * tax;
				profit = valueResult - valueConversion;
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 250 &nbsp; <img src = "${mats.fineT2[i].icon}" title = "${mats.fineT2[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t2Input * 250).gold + format_values_subpage(t2Input * 250).silver + format_values_subpage(t2Input * 250).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT3[i].icon}" title = "${mats.fineT3[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t3Input).gold + format_values_subpage(t3Input).silver + format_values_subpage(t3Input).copper} </span></td>
					<td> + </td>
					<td> 2 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> <br>
						<span> <span> 1.2 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> + </td> 
					<td> 2 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.2 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~87 &nbsp; <img src = "${mats.fineT3[i].icon}" title = "${mats.fineT3[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/1.4).gold + format_values_subpage(profit/1.4).silver + format_values_subpage(profit/1.4).copper}</td> 
				</tr>
				`;
			}
			fineT2ToT3TableBody.innerHTML = html;
			
		} 
	}
	// Fine T3 -> T4
	function fineT3ToT4(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.fineT3.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": 
					t3Input = mats.fineT3[i].buy; 
					t4Input = mats.fineT4[i].buy;
					dust = mats.fineT4[3].buy; 
					break;
				case "Sell": 
					t3Input = mats.fineT3[i].sell; 
					t4Input = mats.fineT4[i].sell;
					dust = mats.fineT4[3].sell; 
					break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.fineT4[i].buy; break;
				case "Sell": resultInput = mats.fineT4[i].sell; break;
			}

			valueConversion = (t3Input * 50) + t4Input + (dust * 5)
			valueResult = (resultInput * 18.51) * tax;
			profit = valueResult - valueConversion;

			if (i != 3){
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 50 &nbsp; <img src = "${mats.fineT3[i].icon}" title = "${mats.fineT3[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t3Input * 50).gold + format_values_subpage(t3Input * 50).silver + format_values_subpage(t3Input * 50).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT4[i].icon}" title = "${mats.fineT4[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t4Input).gold + format_values_subpage(t4Input).silver + format_values_subpage(t4Input).copper} </span></td>
					<td> + </td>
					<td> 5 &nbsp; <img src = "${mats.fineT4[3].icon}" title = "${mats.fineT4[3].name}" style = "${iconSize}"> <br>
						<span> ${format_values_subpage(dust * 5).gold + format_values_subpage(dust * 5).silver + format_values_subpage(dust * 5).copper} </span></td> 
					<td> + </td> 
					<td> 3 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.3 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~19 &nbsp; <img src = "${mats.fineT4[i].icon}" title = "${mats.fineT4[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.3).gold + format_values_subpage(profit/0.3).silver + format_values_subpage(profit/0.3).copper}</td> 
				</tr>
				`;
				
			} else { // with Dust's new conversion
				valueConversion = (t3Input * 250) + (mats.fineT5[3].buy * 1)
				valueResult = (resultInput * 87) * tax;
				profit = valueResult - valueConversion;
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 250 &nbsp; <img src = "${mats.fineT3[i].icon}" title = "${mats.fineT3[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t3Input * 250).gold + format_values_subpage(t3Input * 250).silver + format_values_subpage(t3Input * 250).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT4[i].icon}" title = "${mats.fineT4[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t4Input).gold + format_values_subpage(t4Input).silver + format_values_subpage(t4Input).copper} </span></td>
					<td> + </td>
					<td> 3 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> <br>
						<span> <span> 1.8 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> + </td> 
					<td> 3 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.3 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~87 &nbsp; <img src = "${mats.fineT4[i].icon}" title = "${mats.fineT4[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/2.1).gold + format_values_subpage(profit/2.1).silver + format_values_subpage(profit/1.15).copper}</td> 
				</tr>
				`;
			}
			fineT3ToT4TableBody.innerHTML = html;
		} 
	}
	// Fine T4 -> T5
	function fineT4ToT5(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.fineT4.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": 
					t4Input = mats.fineT4[i].buy; 
					t5Input = mats.fineT5[i].buy;
					dust = mats.fineT5[3].buy; 
					break;
				case "Sell": 
					t4Input = mats.fineT4[i].sell; 
					t5Input = mats.fineT5[i].sell; 
					dust = mats.fineT5[3].sell;
					break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.fineT5[i].buy; break;
				case "Sell": resultInput = mats.fineT5[i].sell; break;
			}

			valueConversion = (t4Input * 50) + t5Input + (dust * 5)
			valueResult = (resultInput * 18.51) * tax;
			profit = valueResult - valueConversion;

			if (i != 3){
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 50 &nbsp; <img src = "${mats.fineT4[i].icon}" title = "${mats.fineT4[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t4Input * 50).gold + format_values_subpage(t4Input * 50).silver + format_values_subpage(t4Input * 50).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT5[i].icon}" title = "${mats.fineT5[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t5Input).gold + format_values_subpage(t5Input).silver + format_values_subpage(t5Input).copper} </span></td>
					<td> + </td>
					<td> 5 &nbsp; <img src = "${mats.fineT5[3].icon}" title = "${mats.fineT5[3].name}" style = "${iconSize}"> <br>
						<span> ${format_values_subpage(dust * 5).gold + format_values_subpage(dust * 5).silver + format_values_subpage(dust * 5).copper} </span></td> 
					<td> + </td> 
					<td> 4 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.4 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~19 &nbsp; <img src = "${mats.fineT5[i].icon}" title = "${mats.fineT5[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.4).gold + format_values_subpage(profit/0.4).silver + format_values_subpage(profit/0.4).copper}</td> 
				</tr>
				`;
				
			} else { // with Dust's new conversion
				valueConversion = (t4Input * 250) + (dust * 1)
				valueResult = (resultInput * 120) * tax;
				profit = valueResult - valueConversion;
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 250 &nbsp; <img src = "${mats.fineT4[i].icon}" title = "${mats.fineT4[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t4Input * 250).gold + format_values_subpage(t4Input * 250).silver + format_values_subpage(t4Input * 250).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT5[i].icon}" title = "${mats.fineT5[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t5Input).gold + format_values_subpage(t5Input).silver + format_values_subpage(t5Input).copper} </span></td>
					<td> + </td>
					<td> 4 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> <br>
						<span> <span> 2.4 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> + </td> 
					<td> 4 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.4 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~120 &nbsp; <img src = "${mats.fineT5[i].icon}" title = "${mats.fineT5[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/2.8).gold + format_values_subpage(profit/2.8).silver + format_values_subpage(profit/2.8).copper}</td> 
				</tr>
				`;
			}
			fineT4ToT5TableBody.innerHTML = html;
		} 
	}

	// Fine T5 -> T6
	function fineT5ToT6(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.fineT5.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": 
					t5Input = mats.fineT5[i].buy; 
					t6Input = mats.fineT6[i].buy;  
					dust = mats.fineT6[3].buy; 
					break;
				case "Sell": 
					t5Input = mats.fineT5[i].sell; 
					t6Input = mats.fineT6[i].sell; 
					dust = mats.fineT6[3].sell;
					break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.fineT6[i].buy; break;
				case "Sell": resultInput = mats.fineT6[i].sell; break;
			}

			valueConversion = (t5Input * 50) + t6Input + (dust * 5)
			valueResult = (resultInput * 6.833333) * tax;
			profit = valueResult - valueConversion;

			if (i != 3){
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 50 &nbsp; <img src = "${mats.fineT5[i].icon}" title = "${mats.fineT5[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t5Input * 50).gold + format_values_subpage(t5Input * 50).silver + format_values_subpage(t5Input * 50).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT6[i].icon}" title = "${mats.fineT6[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t6Input).gold + format_values_subpage(t6Input).silver + format_values_subpage(t6Input).copper} </span></td>
					<td> + </td>
					<td> 5 &nbsp; <img src = "${mats.fineT6[3].icon}" title = "${mats.fineT6[3].name}" style = "${iconSize}"> <br>
						<span> ${format_values_subpage(dust * 5).gold + format_values_subpage(dust * 5).silver + format_values_subpage(dust * 5).copper} </span></td> 
					<td> + </td> 
					<td> 5 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.5 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~7 &nbsp; <img src = "${mats.fineT6[i].icon}" title = "${mats.fineT6[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.5).gold + format_values_subpage(profit/0.5).silver + format_values_subpage(profit/0.5).copper}</td> 
				</tr>
				`;
				
			} else { // with Crystalline Dust's new conversion
				valueConversion = (t5Input * 250) + (dust * 1)
				valueResult = (resultInput * 19) * tax;
				profit = valueResult - valueConversion;
				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 250 &nbsp; <img src = "${mats.fineT5[i].icon}" title = "${mats.fineT5[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(t5Input * 250).gold + format_values_subpage(t5Input * 250).silver + format_values_subpage(t5Input * 250).copper} </span> </td>
					<td> + </td>
					<td> 1 &nbsp; <img src = "${mats.fineT6[i].icon}" title = "${mats.fineT6[i].name}" style = "${iconSize}"> <br> 
						<span> ${format_values_subpage(t6Input).gold + format_values_subpage(t6Input).silver + format_values_subpage(t6Input).copper} </span></td>
					<td> + </td>
					<td> 5 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> <br>
						<span> <span> 3 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> + </td> 
					<td> 5 &nbsp; <img src = "${mysticMat[2].icon}" title = "${mysticMat[2].name}" style = "${iconSize}"> 
						<br> <span> 0.5 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
					<td> = </td> 
					<td> ~19 &nbsp; <img src = "${mats.fineT6[i].icon}" title = "${mats.fineT6[i].name}" style = "${iconSize}"> 
						<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
					<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/3.5).gold + format_values_subpage(profit/3.5).silver + format_values_subpage(profit/3.5).copper}</td> 
				</tr>
				`;
			}
			fineT5ToT6TableBody.innerHTML = html;
		} 
	}
	// Rare T1 -> T2, Sliver -> Fragment
	function rareT1ToT2(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.rareT1.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": t1Input = mats.rareT1[i].buy; t2Input = mats.rareT2[i].buy; break;
				case "Sell": t1Input = mats.rareT1[i].sell; t2Input = mats.rareT2[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.rareT2[i].buy; break;
				case "Sell": resultInput = mats.rareT2[i].sell; break;
			}
			// T5*2 + Elonian wine + T6 dust
			valueConversion = (t1Input * 2) + mysticMat[0].vendorBuy + mats.fineT3[3].buy;
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;
			if (profit < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> 2 &nbsp; <img src = "${mats.rareT1[i].icon}" title = "${mats.rareT1[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(t1Input * 2).gold + format_values_subpage(t1Input * 2).silver + format_values_subpage(t1Input * 2).copper} </span> </td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mysticMat[0].icon}" title = "${mysticMat[0].name}" style = "${iconSize}"> <br> 
					<span> ${format_values_subpage(mysticMat[0].vendorBuy).gold + format_values_subpage(mysticMat[0].vendorBuy).silver + format_values_subpage(mysticMat[0].vendorBuy).copper} </span></td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mats.fineT3[3].icon}" title = "${mats.fineT3[3].name}" style = "${iconSize}"> <br>
					<span> ${format_values_subpage(mats.fineT3[3].buy).gold + format_values_subpage(mats.fineT3[3].buy).silver + format_values_subpage(mats.fineT3[3].buy).copper} </span></td> 
				<td> + </td> 
				<td> 1 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> 
					<br> <span> 0.6 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
				<td> = </td> 
				<td> 1 &nbsp; <img src = "${mats.rareT2[i].icon}" title = "${mats.rareT2[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.6).gold + format_values_subpage(profit/0.6).silver + format_values_subpage(profit/0.6).copper}</td> 
			</tr>
			`;
			rareT1ToT2TableBody.innerHTML = html;
		} 
	}
	// Rare T2 -> T3, Fragment -> Shard
	function rareT2ToT3(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.rareT2.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": t2Input = mats.rareT2[i].buy; t3Input = mats.rareT3[i].buy; break;
				case "Sell": t2Input = mats.rareT2[i].sell; t3Input = mats.rareT3[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.rareT3[i].buy; break;
				case "Sell": resultInput = mats.rareT3[i].sell; break;
			}
			// T5*2 + Elonian wine + T6 dust
			valueConversion = (t2Input * 2) + mysticMat[0].vendorBuy + mats.fineT4[3].buy;
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;
			if (profit < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> 2 &nbsp; <img src = "${mats.rareT2[i].icon}" title = "${mats.rareT2[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(t2Input * 2).gold + format_values_subpage(t2Input * 2).silver + format_values_subpage(t2Input * 2).copper} </span> </td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mysticMat[0].icon}" title = "${mysticMat[0].name}" style = "${iconSize}"> <br> 
					<span> ${format_values_subpage(mysticMat[0].vendorBuy).gold + format_values_subpage(mysticMat[0].vendorBuy).silver + format_values_subpage(mysticMat[0].vendorBuy).copper} </span></td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mats.fineT4[3].icon}" title = "${mats.fineT4[3].name}" style = "${iconSize}"> <br>
					<span> ${format_values_subpage(mats.fineT4[3].buy).gold + format_values_subpage(mats.fineT4[3].buy).silver + format_values_subpage(mats.fineT4[3].buy).copper} </span></td> 
				<td> + </td> 
				<td> 1 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> 
					<br> <span> 0.6 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
				<td> = </td> 
				<td> 1 &nbsp; <img src = "${mats.rareT3[i].icon}" title = "${mats.rareT3[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.6).gold + format_values_subpage(profit/0.6).silver + format_values_subpage(profit/0.6).copper}</td> 
			</tr>
			`;
			rareT2ToT3TableBody.innerHTML = html;
		} 
	}
	// Rare T3 -> T4, Shard -> Core
	function rareT3ToT4(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.rareT3.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": t3Input = mats.rareT3[i].buy; t4Input = mats.rareT4[i].buy; break;
				case "Sell": t3Input = mats.rareT3[i].sell; t4Input = mats.rareT4[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.rareT4[i].buy; break;
				case "Sell": resultInput = mats.rareT4[i].sell; break;
			}
			// T5*2 + Elonian wine + T6 dust
			valueConversion = (t3Input * 2) + mysticMat[0].vendorBuy + mats.fineT5[3].buy;
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;
			if (profit < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> 2 &nbsp; <img src = "${mats.rareT3[i].icon}" title = "${mats.rareT3[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(t3Input * 2).gold + format_values_subpage(t3Input * 2).silver + format_values_subpage(t3Input * 2).copper} </span> </td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mysticMat[0].icon}" title = "${mysticMat[0].name}" style = "${iconSize}"> <br> 
					<span> ${format_values_subpage(mysticMat[0].vendorBuy).gold + format_values_subpage(mysticMat[0].vendorBuy).silver + format_values_subpage(mysticMat[0].vendorBuy).copper} </span></td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mats.fineT5[3].icon}" title = "${mats.fineT5[3].name}" style = "${iconSize}"> <br>
					<span> ${format_values_subpage(mats.fineT5[3].buy).gold + format_values_subpage(mats.fineT5[3].buy).silver + format_values_subpage(mats.fineT5[3].buy).copper} </span></td> 
				<td> + </td> 
				<td> 1 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> 
					<br> <span> 0.6 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
				<td> = </td> 
				<td> 1 &nbsp; <img src = "${mats.rareT4[i].icon}" title = "${mats.rareT4[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.6).gold + format_values_subpage(profit/0.6).silver + format_values_subpage(profit/0.6).copper}</td> 
			</tr>
			`;
			rareT3ToT4TableBody.innerHTML = html;
		} 
	}
	// Rare T4 -> T5, Cores -> Lodestones
	function rareT4ToT5(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.rareT4.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": t4Input = mats.rareT4[i].buy; t5Input = mats.rareT5[i].buy; break;
				case "Sell": t4Input = mats.rareT4[i].sell; t5Input = mats.rareT5[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.rareT5[i].buy; break;
				case "Sell": resultInput = mats.rareT5[i].sell; break;
			}
			// T5*2 + Elonian wine + T6 dust
			valueConversion = (t4Input * 2) + mysticMat[0].vendorBuy + mats.fineT6[3].buy;
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;
			if (profit < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> 2 &nbsp; <img src = "${mats.rareT4[i].icon}" title = "${mats.rareT4[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(t4Input * 2).gold + format_values_subpage(t4Input * 2).silver + format_values_subpage(t4Input * 2).copper} </span> </td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mysticMat[0].icon}" title = "${mysticMat[0].name}" style = "${iconSize}"> <br> 
					<span> ${format_values_subpage(mysticMat[0].vendorBuy).gold + format_values_subpage(mysticMat[0].vendorBuy).silver + format_values_subpage(mysticMat[0].vendorBuy).copper} </span></td>
				<td> + </td>
				<td> 1 &nbsp; <img src = "${mats.fineT6[3].icon}" title = "${mats.fineT6[3].name}" style = "${iconSize}"> <br>
					<span> ${format_values_subpage(mats.fineT6[3].buy).gold + format_values_subpage(mats.fineT6[3].buy).silver + format_values_subpage(mats.fineT6[3].buy).copper} </span></td> 
				<td> + </td> 
				<td> 1 &nbsp; <img src = "${mysticMat[1].icon}" title = "${mysticMat[1].name}" style = "${iconSize}"> 
					<br> <span> 0.6 <img src = "${mysticMat[3].icon}" title = "${mysticMat[3].icon}" style = "${ssSize}"> </span> </td> 
				<td> = </td> 
				<td> 1 &nbsp; <img src = "${mats.rareT5[i].icon}" title = "${mats.rareT5[i].name}" style = "${iconSize}"> 
					<br> <span> ${format_values_subpage(valueResult).gold + format_values_subpage(valueResult).silver + format_values_subpage(valueResult).copper} </span> </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit).gold + format_values_subpage(profit).silver + format_values_subpage(profit).copper} </td>
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(profit/0.6).gold + format_values_subpage(profit/0.6).silver + format_values_subpage(profit/0.6).copper}</td> 
			</tr>
			`;
			rareT4ToT5TableBody.innerHTML = html;
		} 
	}
	sortTableByPrice('ss-fine-t1ToT2', 10);
	sortTableByPrice('ss-fine-t2ToT3', 10);
	sortTableByPrice('ss-fine-t3ToT4', 10);
	sortTableByPrice('ss-fine-t4ToT5', 10);
	sortTableByPrice('ss-fine-t5ToT6', 10);

	sortTableByPrice('ss-rare-t1ToT2', 10);
	sortTableByPrice('ss-rare-t2ToT3', 10);
	sortTableByPrice('ss-rare-t3ToT4', 10);
	sortTableByPrice('ss-rare-t4ToT5', 10);
}

function showSSPrices(itemBuyorSell, resultBuyOrSell, taxChoice){
	var itemValue = document.getElementById(itemBuyorSell).value,
		resultValue = document.getElementById(resultBuyOrSell).value,
		taxValue = document.getElementById(taxChoice).value;

	if (taxValue == "85% Tax"){
		if (itemValue == "Buy Price" && resultValue == "Sell Price"){
			spiritShards(0, "85% Tax"); 
		} else if (itemValue == "Sell Price" && resultValue == "Sell Price"){
			spiritShards(1, "85% Tax");
		} else if (itemValue == "Buy Price" && resultValue == "Buy Price"){
			spiritShards(2, "85% Tax");
		} else if (itemValue == "Sell Price" && resultValue == "Buy Price"){
			spiritShards(3, "85% Tax");
		}
	} else if (taxValue == "90% Tax") {
		if (itemValue == "Buy Price" && resultValue == "Sell Price"){
			spiritShards(0, "90% Tax"); 
		} else if (itemValue == "Sell Price" && resultValue == "Sell Price"){
			spiritShards(1, "90% Tax");
		} else if (itemValue == "Buy Price" && resultValue == "Buy Price"){
			spiritShards(2, "90% Tax");
		} else if (itemValue == "Sell Price" && resultValue == "Buy Price"){
			spiritShards(3, "90% Tax");
		}
	} else if (taxValue == "No Tax") {
		if (itemValue == "Buy Price" && resultValue == "Sell Price"){
			spiritShards(0, "No Tax"); 
		} else if (itemValue == "Sell Price" && resultValue == "Sell Price"){
			spiritShards(1, "No Tax");
		} else if (itemValue == "Buy Price" && resultValue == "Buy Price"){
			spiritShards(2, "No Tax");
		} else if (itemValue == "Sell Price" && resultValue == "Buy Price"){
			spiritShards(3, "No Tax");
		}
	}
}

function removeTable(id){
	var table = id;
	if (table){ table.parentNode.removeChild(table); }
}
