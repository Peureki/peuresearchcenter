var bags = {
	sandy: [
		{
			name: "Piece of Unidentified Gear",
			id: 84731,
			icon: "https://render.guildwars2.com/file/B147379DFC5430E207FCB742804E199EDF727719/1766400.png",
			dr: 0.96,
		},
		{
			name: "Piece of Rare Unidentified Gear",
			id: 83008,
			icon: "https://render.guildwars2.com/file/EF63A10BD2317CECCEA63A3B7E6555550B414C4E/1766399.png",
			dr: 0.0350,
		},
		{
			name: "Pile of Silky Sand",
			id: 66608,
			icon: "https://render.guildwars2.com/file/4AA6F8CB30973B9A6E4C310124EFB5BFF42036E5/63273.png",
			dr: 5.700,
		},
		{
			name: "Exotic",
			id: 0,
			icon: "",
			dr: 0.005,
		},
		{
			name: "Liquid Gold",
			id: 0,
			icon: "",
			dr: 10.23,
			buy: 1,
			sell: 1,
		},
	],
	stolenGoods: [
		{
			dr: 1,
			buy: 0,
			sell: 0,
		}
	],
}; 

var silkySand = [
	{
		name: "Lump of Raw Ambrite",
		id: 66670,
		icon: "https://render.guildwars2.com/file/ED1D15DCA3FF6EC502E10D3923EDEB916ABC0261/831511.png",
		dr: 0.002, 
	},
	{
		name: "Pile of Coarse Sand",
		id: 71641,
		icon: "https://render.guildwars2.com/file/D838CB1BF7D49E1725EBB1F3ABD00C55EB67CE1E/1205401.png",
		dr: 0.068, 
	},
];

// Updated 5/26/21
var exoticSalvage = [
	{
		name: "Ancient Wood Log",
		id: 19725,
		icon: "https://render.guildwars2.com/file/5C999770AB7CC1F85D270A50C205673DF8B6E104/220467.png",
		dr: .0516,
	},
	{
		name: "Cavalier's Intricate Gossamer Insignia",
		id: 46709,
		icon: "https://render.guildwars2.com/file/C507B7123817449BAC19C2A9ECB0A5A303092B99/699285.png",
		dr: 0.047,
	},
	{
		name: "Congealed Putrescence",
		id: 83757,
		icon: "https://render.guildwars2.com/file/7EE737D8FFC9B1DB04D4AF2C973150C92897E2A5/1767537.png",
		dr: 0.047,
	},
	{
		name: "Dire Intricate Gossamer Insignia",
		id: 49522,
		icon: "https://render.guildwars2.com/file/A3D8FA093CF830A5F799C742AAC70DE590C21498/699307.png",
		dr: 0.0329,
	},
	{
		name: "Dire Orichalcum Imbued Inscription",
		id: 46690,
		icon: "https://render.guildwars2.com/file/5065F7F45DBCBDF1D0220AF1F6565528AB72AB54/631478.png",
		dr: 0.0141,
	},
	{
		name: "Elder Wood Log",
		id: 19722,
		icon: "https://render.guildwars2.com/file/205871B734054D0206986FB44D6DC5425E572B0B/220465.png",
		dr: 0.4178,
	},
	{
		name: "Glob of Ectoplasm",
		id: 19721,
		icon: "https://render.guildwars2.com/file/18CE5D78317265000CF3C23ED76AB3CEE86BA60E/65941.png",
		dr: 1.5822,
	},
	{
		name: "Gossamer Scrap",
		id: 19745,
		icon: "https://render.guildwars2.com/file/0CB2040408D0789690575FFE3532F3C34B693C6F/340417.png",
		dr: 0.0329,
	},
	{
		name: "Hardened Leather Section",
		id: 19732,
		icon: "https://render.guildwars2.com/file/C4600FB8F97F2618F4DFA2CE9FD2C669FAE9DE6F/65949.png",
		dr: 0.0376,
	},
	{
		name: "Magi's Intricate Gossamer Insignia",
		id: 46711,
		icon: "https://render.guildwars2.com/file/051501594FD0080C5D159CCBB320AA76E54BAA92/699287.png",
		dr: 0.0423,
	},
	{
		name: "Magi's Orichalcum Imbued Inscription",
		id: 46687,
		icon: "https://render.guildwars2.com/file/1E2D626B133CBC9DC472E903D01F2FE2C5970732/631475.png",
		dr: 0.0141,
	},
	{
		name: "Mithril Ore",
		id: 46687,
		icon: "https://render.guildwars2.com/file/E90FE803CDC205CDEB13FE03694D4D04757ACF5D/65928.png",
		dr: 0.0141,
	},
	{
		name: "Orichalcum Ore",
		id: 19701,
		icon: "https://render.guildwars2.com/file/A6E2C82153BA684E2D05D3FCA09F3E02431366ED/220461.png",
		dr: 0.0469,
	},
	{
		name: "Rabid Intricate Gossamer Insignia",
		id: 46710,
		icon: "https://render.guildwars2.com/file/9C594080BB9C6B4536FADEF21DFC2006F44A455D/699286.png",
		dr: 0.0469,
	},
	{
		name: "Rabid Orichalcum Imbued Inscription",
		id: 46708,
		icon: "https://render.guildwars2.com/file/9EAD37F9A1DD703574B2A0BE62C60C356E4F01AC/631474.png",
		dr: 0.0376,
	},
	{
		name: "Shaman's Intricate Gossamer Insignia",
		id: 46708,
		icon: "https://render.guildwars2.com/file/6299D476551B3ADA132B211DF6EFF3C3C8CBB97E/699284.png",
		dr: 0.0047,
	},
	{
		name: "Shaman's Orichalcum Imbued Inscription",
		id: 46684,
		icon: "https://render.guildwars2.com/file/97D807C9ED4BE1A820A79FD93CB56DA37AB9BA06/631472.png",
		dr: 0.0376,
	},
	{
		name: "Silk Scrap",
		id: 19748,
		icon: "https://render.guildwars2.com/file/021DA825F2092327B1C6BC09EC77BD5DE5B4770D/65961.png",
		dr: 0.3944,
	},
	{
		name: "Soldier's Intricate Gossamer Insignia",
		id: 46712,
		icon: "https://render.guildwars2.com/file/A431EE55EB47093FFEB0DD35920465F3B770BBF8/699288.png",
		dr: 0.0141,
	},
	{
		name: "Soldier's Orichalcum Imbued Inscription",
		id: 46688,
		icon: "https://render.guildwars2.com/file/4B69327AC17E3A225E732F0FE6EE205B0F0B17ED/631476.png",
		dr: 0.0188,
	},
	{
		name: "Superior Rune of Balthazar",
		id: 24765,
		icon: "https://render.guildwars2.com/file/7CEF770BE7E6A5E507B6D98018155CD2395FAD18/220694.png",
		dr: 0.0282,
	},
	{
		name: "Superior Rune of Dwayna",
		id: 24768,
		icon: "https://render.guildwars2.com/file/AFB370B09F230D76014E55662924CDFB5AD947A3/220699.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of Grenth",
		id: 24779,
		icon: "https://render.guildwars2.com/file/5930FE034AD9067EC7DF633C683927EB4A0F509F/220706.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of Hoelbrak",
		id: 24729,
		icon: "https://render.guildwars2.com/file/150204B4552ED82CD15204ACC7360198F51F6C13/220708.png",
		dr: 0.0235,
	},
	{
		name: "Superior Rune of Infiltration",
		id: 24703,
		icon: "https://render.guildwars2.com/file/F9C62BCFB70106EEBCA33C4AC35352CE2A082F10/220710.png",
		dr: 0.0094,
	},
	{
		name: "Superior Rune of Melandru",
		id: 24771,
		icon: "https://render.guildwars2.com/file/66A56E6838D707BBBAD0B8D0091425502F7E3AF4/220714.png",
		dr: 0.0094,
	},
	{
		name: "Superior Rune of Mercy",
		id: 24708,
		icon: "https://render.guildwars2.com/file/6866D3A85960F806E67C616E5709F97F0D025F02/220715.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of Rage",
		id: 24717,
		icon: "https://render.guildwars2.com/file/5F65FDA9D721B6BA5654E5ED29A42B01C04DF2DA/220719.png",
		dr: 0.0047,
	},
	{
		name: "Superior Rune of Rata Sum",
		id: 24726,
		icon: "https://render.guildwars2.com/file/1434C3CEC42A4F0D4861F013B899D9CBFE91E836/220720.png",
		dr: 0.0047,
	},
	{
		name: "Superior Rune of Scavenging",
		id: 24738,
		icon: "https://render.guildwars2.com/file/C9BEBEB9D8ADA51C1D9DEB67A3C079B5037E9833/221082.png",
		dr: 0.0094,
	},
	{
		name: "Superior Rune of Strength",
		id: 24714,
		icon: "https://render.guildwars2.com/file/F33F44776DFCB0D75B48005904E3C75456C4F5FA/220644.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of the Afflicted",
		id: 24687,
		icon: "https://render.guildwars2.com/file/B952E2BB3ACDF477F4C823655DAC1294C9A12745/220692.png",
		dr: 0.0094,
	},
	{
		name: "Superior Rune of the Centaur",
		id: 24788,
		icon: "https://render.guildwars2.com/file/37FB0225B2DE715BCB25B02D2914F35DBB080708/220695.png",
		dr: 0.0188,
	},
	{
		name: "Superior Rune of the Eagle",
		id: 24723,
		icon: "https://render.guildwars2.com/file/2966CB3D97E85EB0E4C33AFB6D1FB63D7304EC97/220700.png",
		dr: 0.0235,
	},
	{
		name: "Superior Rune of the Flame Legion",
		id: 24797,
		icon: "https://render.guildwars2.com/file/776392A017E4DA16BF3DCA69292BB31ABA998010/220703.png",
		dr: 0.0235,
	},
	{
		name: "Superior Rune of the Flock",
		id: 24696,
		icon: "https://render.guildwars2.com/file/F9D5AFF9E79806AF490FA1E6DD73041D15D401A7/220704.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of the Lich",
		id: 24688,
		icon: "https://render.guildwars2.com/file/10324E350DEFA2276F0FD22299D4BAFD00736D18/220712.png",
		dr: 0.0282,
	},
	{
		name: "Superior Rune of the Pack",
		id: 24702,
		icon: "https://render.guildwars2.com/file/FEF77764F24C0548271F29337268970C092DA5D3/220717.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of the Rebirth",
		id: 84171,
		icon: "https://render.guildwars2.com/file/DA4AF714D87F63978039E053D80F9F717A49D3BE/1766390.png",
		dr: 0.0188,
	},
	{
		name: "Superior Rune of the Traveler",
		id: 24691,
		icon: "https://render.guildwars2.com/file/3CCCAB48D5D5FAEA14912BC6D3DB1A79DFC4C846/221050.png",
		dr: 0.0141,
	},
	{
		name: "Superior Rune of Vampirism",
		id: 24711,
		icon: "https://render.guildwars2.com/file/F13EECC6AED473604A097A5DBB0861E3410702EF/220724.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Accuracy",
		id: 24618,
		icon: "https://render.guildwars2.com/file/4B0EFF29FD064E5E93E4F8616BE309A451450AED/220661.png",
		dr: 0.0141,
	},
	{
		name: "Superior Sigil of Agony",
		id: 24612,
		icon: "https://render.guildwars2.com/file/BAF34EB051D118F8A7C1645E0D940ED0660E6269/220658.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Air",
		id: 24554,
		icon: "https://render.guildwars2.com/file/C337CC61DF2F5EE44B7D053EFF33059111024444/220676.png",
		dr: 0.0047,
	},
	{
		name: "Superior Sigil of Battle",
		id: 24601,
		icon: "https://render.guildwars2.com/file/A25A5E7D74A6B293B5C6B8EC7EDA1A06C649CBEF/220691.png",
		dr: 0.0047,
	},
	{
		name: "Superior Sigil of Blood",
		id: 24570,
		icon: "https://render.guildwars2.com/file/BFD4F5E6A8B95866BBA7CDC0E8920D0346337934/220681.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Bloodlust",
		id: 24575,
		icon: "https://render.guildwars2.com/file/77AAE10D3E03036D6E00642DEF01E5DF3468524F/220673.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Chilling",
		id: 24630,
		icon: "https://render.guildwars2.com/file/F7C54D53F1CDB2094B9C4FEA2FA455ADC54492B4/220663.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Debility",
		id: 24636,
		icon: "https://render.guildwars2.com/file/33FB5EED4B3F16F3CC2538B178B645BE5CA67CF2/220667.png",
		dr: 0.0047,
	},
	{
		name: "Superior Sigil of Earth",
		id: 24560,
		icon: "https://render.guildwars2.com/file/251EE3B8B5ADB8D7F7A35DBAEFABA35AEACDF51B/220677.png",
		dr: 0.0235,
	},
	{
		name: "Superior Sigil of Energy",
		id: 24607,
		icon: "https://render.guildwars2.com/file/3A064B97AB7D0E1F1250EFB5F06798A8FE623708/220688.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Force",
		id: 24615,
		icon: "https://render.guildwars2.com/file/D7420E430D002E07382035EF0D0F77370C4EE6B8/220662.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Geomancy",
		id: 24605,
		icon: "https://render.guildwars2.com/file/B79B430645DDF54E6792909A52F5CA40A4911407/220687.png",
		dr: 0.0047,
	},
	{
		name: "Superior Sigil of Grawl Slaying",
		id: 24648,
		icon: "https://render.guildwars2.com/file/5D7569213FFA04AF2B16251102A7A5B1CC70BA60/221030.png",
		dr: 0.00188,
	},
	{
		name: "Superior Sigil of Hydromancy",
		id: 24597,
		icon: "https://render.guildwars2.com/file/B5F3E2021863079919299707290698504B5C7E90/220689.png",
		dr: 0.0141,
	},
	{
		name: "Superior Sigil of Leeching",
		id: 24599,
		icon: "https://render.guildwars2.com/file/BC276BC8AD2497A1E5A905CBDB20425CF2133D78/220690.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Life",
		id: 24582,
		icon: "https://render.guildwars2.com/file/A7AE0E9D0DF64B69EF309D93E44FFAA90859ABA0/220670.png",
		dr: 0.0141,
	},
	{
		name: "Superior Sigil of Nullification",
		id: 24572,
		icon: "https://render.guildwars2.com/file/B926E1026E6E271D3B9F9A177710E3A8C801FFF3/220744.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Ogre Slaying",
		id: 24655,
		icon: "https://render.guildwars2.com/file/D947B21C999C455E2EAF9FEDF8080197271CF7E4/221037.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Perception",
		id: 24580,
		icon: "https://render.guildwars2.com/file/FA237EF63BC111701FAEC13E312A022E9D44ED93/340593.png",
		dr: 0.0235,
	},
	{
		name: "Superior Sigil of Purity",
		id: 24571,
		icon: "https://render.guildwars2.com/file/C3E907DE24CF72CE490639710F46CDCD917D5B06/220745.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Rage",
		id: 24561,
		icon: "https://render.guildwars2.com/file/15310B48271FC15332C65C5E02FEC4FFF298B652/220679.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Restoration",
		id: 24594,
		icon: "https://render.guildwars2.com/file/0877D8E26B3CE964B3A7C2C324C4629B04362A09/220671.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Serpent Slaying",
		id: 24658,
		icon: "https://render.guildwars2.com/file/26EEDDE25D6E60A7085610FF4097D763F1293174/221040.png",
		dr: 0.0141,
	},
	{
		name: "Superior Sigil of Severance",
		id: 84505,
		icon: "https://render.guildwars2.com/file/396D7A5DBFA03BC49C12DAB532C4E34D342F0B51/1766396.png",
		dr: 0.0047,
	},
	{
		name: "Superior Sigil of Smoldering",
		id: 24624,
		icon: "https://render.guildwars2.com/file/60AAB7109E5D679901E00DC066774EE5FB3E6052/220659.png",
		dr: 0.0094,
	},
	{
		name: "Superior Sigil of Stamina",
		id: 24592,
		icon: "https://render.guildwars2.com/file/970DD319EC0E7455E941CD5DA840C10EA6EF160E/220669.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Vision",
		id: 24600,
		icon: "https://render.guildwars2.com/file/1F41DBAFFA5979D7496F2BB9E4D9AE0F2FA4F940/220685.png",
		dr: 0.0188,
	},
	{
		name: "Superior Sigil of Water",
		id: 24551,
		icon: "https://render.guildwars2.com/file/F117A4F536901B0C69A618EEEB0DA6BDEB075FD8/220684.png",
		dr: 0.0141,
	},
	{
		name: "Thick Leather SEction",
		id: 19729,
		icon: "https://render.guildwars2.com/file/CC3A2CAADBB2F2B13B1E70079E7E207B08D16E93/65946.png",
		dr: 0.2347,
	},
];

// Updated 5/28/21
var bagStolenGoods = [
	{
		name: "Almond",
		id: 12337,
		icon: "https://render.guildwars2.com/file/C00408A9C039E55934FED7C15AE9A9B60AB752E8/63374.png",
		dr: 0.0040,
		buy: 0,
		sell: 0,
	},
	{
		name: "Ancient Bone",
		id: 24358,
		icon: "",
		dr: 0.0050,
	},
	{
		name: "Apple",
		id: 12165,
		icon: "https://render.guildwars2.com/file/17520D2F53CF62BFA696EDE02DA1F77445A9F796/63265.png",
		dr: 0.0150,
		buy: 0,
		sell: 0,
	},
	{
		name: "Armored Scale",
		id: 24289,
		icon: "",
		dr: 0.0140,
	},
	{
		name: "Banana",
		id: 12251,
		icon: "https://render.guildwars2.com/file/0CF6F3FFEF0D55632B0B17F1596CC903A3969903/63328.png",
		dr: 0.0120,
		buy: 0,
		sell: 0,
	},
	{
		name: "Bay Leaf",
		id: 12247,
		icon: "",
		dr: 0.0070,
	},
	{
		name: "Beryl Crystal",
		id: 24519,
		icon: "",
		dr: 0.0030,
	},
	{
		name: "Beryl Orb",
		id: 24520,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Black Bean",
		id: 12237,
		icon: "https://render.guildwars2.com/file/0A4B02E6059ABBDE9A989257A9B10552B97DA2A6/63316.png",
		dr: 0.0020,
		buy: 0,
		sell: 0,
	},
	{
		name: "Cherry",
		id: 12338,
		icon: "https://render.guildwars2.com/file/3E57C8B86E2225E7767FCEA5E75CF5A2CB04E11A/63375.png",
		dr: 0.0020,
		buy: 0,
		sell: 0,
	},
	{
		name: "Chrysocola Crystal",
		id: 24511,
		icon: "",
		dr: 0.0040,
	},
	{
		name: "Chrysocola Orb",
		id: 24512,
		icon: "",
		dr: 0.0000,
	},
	{
		name: "Cinnamon Stick",
		id: 12258,
		icon: "",
		dr: 0.0040,
	},
	{
		name: "Coconut",
		id: 12350,
		icon: "https://render.guildwars2.com/file/9139EE60FBDBAFA0C39DAB7C34B8C5292B33C790/63379.png",
		dr: 0.0060,
		buy: 0,
		sell: 0,
	},
	{
		name: "Coral Tentacle",
		id: 24509,
		icon: "",
		dr: 0.0020,
	},
	{
		name: "Crest of the Shamen",
		id: 24533,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Crude Salvage Kit",
		id: 23038,
		icon: "https://render.guildwars2.com/file/9F09ACD431CE4906631E271E650ABB0454F90705/63123.png",
		dr: 0.0300,
		buy: 0,
		sell: 0,
	},
	{
		name: "Elaborate Totem",
		id: 24300,
		icon: "",
		dr: 0.0090,
	},
	{
		name: "Emerald Crystal",
		id: 24473,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Emerald Orb",
		id: 24515,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Gossamer Scrap",
		id: 19745,
		icon: "",
		dr: 0.0170,
	},
	{
		name: "Hardened Leather Section",
		id: 19732,
		icon: "",
		dr: 0.0190,
	},
	{
		name: "Intricate Totem",
		id: 24299,
		icon: "",
		dr: 0.0450,
	},
	{
		name: "Large Bone",
		id: 24341,
		icon: "",
		dr: 0.0560,
	},
	{
		name: "Large Claw",
		id: 24350,
		icon: "",
		dr: 0.0560,
	},
	{
		name: "Large Fang",
		id: 24356,
		icon: "",
		dr: 0.0460,
	},
	{
		name: "Large Scale",
		id: 24288,
		icon: "",
		dr: 0.0450,
	},
	{
		name: "Medallion of the Magi",
		id: 24517,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Medallion of the Rabid",
		id: 24531,
		icon: "",
		dr: 0,
	},
	{
		name: "Medallion of the Shaman",
		id: 24476,
		icon: "",
		dr: 0.0020,
	},
	{
		name: "Medallion of the Soldier",
		id: 24523,
		icon: "",
		dr: 0.0050,
	},
	{
		name: "Opal Crystal",
		id: 24521,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Orange",
		id: 12351,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Orichalcum Harvesting Sickle",
		id: 22997,
		icon: "https://render.guildwars2.com/file/AA1BD042F1EAB6A0F5D614DC6113E356C4B836C1/66591.png",
		dr: 0.040,
		buy: 0,
		sell: 0,
	},
	{
		name: "Orichalcum Logging Axe",
		id: 23000,
		icon: "https://render.guildwars2.com/file/201CC6E60448CB4BA8AD919C74904EE1F9AEC54F/66597.png",
		dr: 0.60,
		buy: 0,
		sell: 0,
	},
	{
		name: "Orichalcum Mining Pick",
		id: 23001,
		icon: "https://render.guildwars2.com/file/3CD995B576C8CB39B02D4826EA04690701755ECB/66254.png",
		dr: 0.60,
		buy: 0,
		sell: 0,
	},
	{
		name: "Pile of Crystalline Dust",
		id: 24277,
		icon: "",
		dr: 0.0030,
	},
	{
		name: "Pile of Incandescent Dust",
		id: 24276,
		icon: "",
		dr: 0.058,
	},
	{
		name: "Potent Venom Sac",
		id: 24282,
		icon: "",
		dr: 0.0510,
	},
	{
		name: "Powerful Venom Sac",
		id: 24283,
		icon: "",
		dr: 0.0080,
	},
	{
		name: "Raspberry",
		id: 12254,
		icon: "",
		dr: 0.010,
	},
	{
		name: "Ruby Crystal",
		id: 24474,
		icon: "",
		dr: 0.000,
	},
	{
		name: "Ruby Orb",
		id: 24508,
		icon: "",
		dr: 0.00,
	},
	{
		name: "Sapphire Crystal",
		id: 24475,
		icon: "",
		dr: 0.0020,
	},
	{
		name: "Sapphire Orb",
		id: 24516,
		icon: "",
		dr: 0.0010,
	},
	{
		name: "Silk Scrap",
		id: 19748,
		icon: "",
		dr: 0.03540,
	},
	{
		name: "Slab of Poultry Meat",
		id: 24360,
		icon: "",
		dr: 0.0220,
	},
	{
		name: "Slab of Red Meat",
		id: 24359,
		icon: "",
		dr: 0.0240,
	},
	{
		name: "Thick Leather Section",
		id: 19729,
		icon: "",
		dr: 0.2590,
	},
	{
		name: "Vial of Potent Blood",
		id: 24294,
		icon: "",
		dr: 0.0530,
	},
	{
		name: "Vial of Powerful Blood",
		id: 24295,
		icon: "",
		dr: 0.0110,
	},
	{
		name: "Vicious Claw",
		id: 24351,
		icon: "",
		dr: 0.008,
	},
	{
		name: "Vicious Fang",
		id: 24357,
		icon: "",
		dr: 0.010,
	},
]; 

// Updated 5/24/2021
async function getBanditCrests(choice){
	// dr = drop rate, multiplier

	var matPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=84731,83008,66608,66670,71641,19725,46709,83757,49522,46690,19722,19721,19745,19732,46711,46687,19700,19701,46710,46686,46708,46684,19748,46712,46688,24765,24768,24779,24729,24703,24771,24708,24717,24726,24738,24714,24687,24788,24723,24797,24696,24688,24702,84171,24691,24711,24618,24612,24554,24601,24570,24575,24630,24636,24560,24607,24615,24605,24648,24597,24599,24582,24572,24655,24580,24571,24561,24594,24658,84505,24624,24592,24600,24551,19729,12337,24358,12165,24289,12251,12247,24519,24520,12237,12338,24511,24512,12258,12350,24509,24533,23038,24300,24473,24515,24299,24341,24350,24356,24288,24517,24531,24476,24523,24521,12351,22997,23000,23001,24277,24276,24282,24283,12254,24474,24508,24475,24516,24360,24359,24294,24295,24351,24357";
	const response1 = await fetch(matPricesAPI);
	const matPrices = await response1.json();

	// Getting the total prices of silky sand rates for the worth of Pile of Silk Sand
	var totalSandBuy = 0, totalSandSell = 0; 
	var totalExoticBuy = 0, totalExoticSell = 0;
	var totalBagStolenGoodsBuy = 0, totalBagStolenGoodsSell = 0;

	// Go through both json of the api prices and the name of the materials
	// When ids match, fuse the prices and names together
	for (i = 0; i < matPrices.length; i++){
		addPrices(silkySand);
		addPrices(bags.sandy);
		addPrices(exoticSalvage);
		addPrices(bagStolenGoods);
	}

	function addPrices(array){
		for (j = 0; j < array.length; j++){
			if (matPrices[i].id == array[j].id){
				array[j].buy = matPrices[i].buys.unit_price; 
				array[j].sell = matPrices[i].sells.unit_price;
			}
		}
	}

	// Find and total the drop rates of silky sand
	for (i = 0; i < silkySand.length; i++){
		silkySand[i].totalBuy = silkySand[i].dr * silkySand[i].buy; 
		silkySand[i].totalSell = silkySand[i].dr * silkySand[i].sell;

		totalSandBuy = totalSandBuy + silkySand[i].totalBuy;
		totalSandSell = totalSandSell + silkySand[i].totalSell;
	}

	// Add the silky sand drop rate stuff to the Pile of Silky Sand json
	bags.sandy[2].buy = totalSandBuy/10; 
	bags.sandy[2].sell = totalSandSell/10; 

	// Find and total the drop rates of exotics
	for (i = 0; i < exoticSalvage.length; i++){
		exoticSalvage[i].totalBuy = exoticSalvage[i].dr * exoticSalvage[i].buy; 
		exoticSalvage[i].totalSell = exoticSalvage[i].dr * exoticSalvage[i].sell;

		totalExoticBuy = totalExoticBuy + exoticSalvage[i].totalBuy;
		totalExoticSell = totalExoticSell + exoticSalvage[i].totalSell;
	}
	// Add the exotic drop rate to the bag of sandy gear json
	bags.sandy[3].buy = totalExoticBuy;
	bags.sandy[3].sell = totalExoticSell;

	// Find and total the drop rates of bags of stolen goods
	for (i = 0; i < bagStolenGoods.length; i++){
		bagStolenGoods[i].totalBuy = bagStolenGoods[i].dr * bagStolenGoods[i].buy; 
		bagStolenGoods[i].totalSell = bagStolenGoods[i].dr * bagStolenGoods[i].sell;

		totalBagStolenGoodsBuy = totalBagStolenGoodsBuy + bagStolenGoods[i].totalBuy;
		totalBagStolenGoodsSell = totalBagStolenGoodsSell + bagStolenGoods[i].totalSell;
	}
	bags.stolenGoods[0].buy = totalBagStolenGoodsBuy;
	bags.stolenGoods[0].sell = totalBagStolenGoodsSell;


	var tableBody = document.getElementById('bc-tableBody');
	var tableBodyProof = document.getElementById('bc-proof-tableBody')
	var html = ``,
		htmlProof = ``;
	var addItem, valueItem = 0, valueContainer, valueCurrency, profit, tax = 0.85, fee = 0, choiceValue;
	var backgroundColor, containerName,
		isNegCount = 0; // if all profit margins are neg, then this would be true. Otherwise, if one is pos, then this is false

	
	// Total all values of container or bag items
	function aContainer(array){
		addItem = 0;
		valueItem = 0;

		for (i = 0; i < array.length; i++){
			switch(choice){
				case "Sell Price": choiceValue = array[i].sell; break;
				case "Buy Price": choiceValue = array[i].buy; break;
				default: choiceValue = array[i].sell; break;
			}
			addItem = array[i].dr * choiceValue; 
			valueItem = valueItem + addItem;
		}
		valueContainer = (valueItem * tax) - fee;

		return valueContainer;
	}
	// Go through each total and calculate the value or per currency
	for (j = 0; j < 2; j++){
		switch(j){
			case 0: fee = 80; valueContainer = aContainer(bags.sandy); valueCurrency = valueContainer/15;
				containerName = "Sandy Bag of Gear"; break;
			case 1: fee = 96; valueContainer = aContainer(bags.stolenGoods); valueCurrency = valueContainer/10;
				containerName = "Bag of Stolen Goods"; break;
		}
		if (valueContainer < 0){ backgroundColor = '#E9C4B4';} else { backgroundColor = '#CFE9B4'}
		html += `
			<tr>
				<td> ${containerName} </td>
				<td style = "background-color: ${backgroundColor};" > ${format_values_subpage(valueContainer).gold + format_values_subpage(valueContainer).silver + format_values_subpage(valueContainer).copper} </td> 
				<td style = "background-color: ${backgroundColor};"> ${format_values_subpage(valueCurrency).gold + format_values_subpage(valueCurrency).silver + format_values_subpage(valueCurrency).copper} </td>
			</tr>

		`;	
	}


	tableBody.innerHTML = html; 
	sortTableByPrice('bc', 2);
}

function showBanditCrest(resultChoice){
	var resultValue = document.getElementById(resultChoice).value; 
	getBanditCrests(resultValue);
}