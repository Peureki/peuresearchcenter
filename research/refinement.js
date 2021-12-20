// HOW THIS SCRIPT WORKS:
// 1) If you want to add a new refined mat, add the ID in the list matPricesAPI
// 2) Determine what kind of mat it is (component, gizmo, etc) then find the appropiate object
// 3) Check if it needs a recipe. If it does, add those ingredients in
// 4) If there's a new object, add addValues(new object); 
// 5) Add the new mat in the appropiate function (Misc, Ascended, etc)

async function refinement(choice, taxChoice){
	var matPricesAPI = "https://api.guildwars2.com/v2/commerce/prices?ids=19718,19739,19741,19743,19748,19745,19720,19740,19742,19744,19747,19746,19723,19726,19727,19724,19722,19725,19710,19713,19714,19711,19709,19712,19719,19728,19730,19731,19729,19732,19738,19733,19734,19736,19735,19737,19697,19699,19703,19698,19702,19700,19701,19680,19679,19683,19687,19682,19688,19686,19681,19684,19685,19721,46741,46738,46739,46736,70992,80723,80714,80791,71334,80775,46743,24341,24288,24299,24276,24282,24294,24350,24356,79410,24514,24518,24532,24533,24524,19721,72436,72010,24520,76491,24515,24884,24510,75654,24515,74988,76179,24772,72315,70957,72504,24522,24773,24508,24516,24502,68063,24358,24289,24300,24277,24283,24295,24351,24357,42010,24512,42006,24519,24511,24509,24473,24521,24474,24475,90339,24359,43773,74042,66913,12815,24503,44941,66993,24305,24340,24330,24325,24320,24315,24310,67015,73034,74090,77256,72224,48917,48884,75075,71641,71580,24830,71425,24821,89271,89216,68942,74202,89258,24833,73399,72852,24800,76100,24762,36044,24756,44957,49460,69370,24818,24803,69370,89103,74328,24335,36041,38024,68437,24720,85713,76166,24821,24827,24839,86601,24,44951,89999,77699,66637,67832,66650,93567,70842,92687,9585,76614,9593,9581,9584,9591,9594,9574,9571,9572,9566";
	const response1 = await fetch(matPricesAPI);
	const matPrices = await response1.json();
	/*
	var silverAPI = "https://api.datawars2.ie/gw2/v2/history/hourly/json?itemID=19718,19739,19741,19743,19748,19745,19720,19740,19742,19744,19747,19746,19723,19726,19727,19724,19722,19725,19710,19713,19714,19711,19709,19712,19719,19728,19730,19731,19729,19732,19738,19733,19734,19736,19735,19737";
	const response2 = await fetch(silverAPI);
	const histPrices = await response2.json(); 
	
	console.log(histPrices)
	*/
	var mats = {
	// Ascended Materials
		ascended: [
			{
				name: "Blended Leather Sheet",
				id: 80723,
				icon: "https://render.guildwars2.com/file/C6BFD6AEF9C70A75C7129016C9B8BC2C20395DA8/1653612.png",
				discipline: ["Armorsmith", " Artificer", " Huntsman", " Leatherworker", " Tailor", " Weaponsmith"],
			},
			{
				name: "Bolt of Damask",
				id: 46741,
				icon: "https://render.guildwars2.com/file/7E7DA70B0EA3DB78CCB2F4FDA400A9BFEF0B0D6C/631489.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
			},
			{
				name: "Carbonized Mithrillium Ingot",
				id: 80714,
				icon: "https://render.guildwars2.com/file/7EA70FE31408FB0A07B891ED0913A62C40B514F5/1653617.png",
				discipline: ["Armorsmith", " Artificer", " Huntsman", " Leatherworker", " Tailor", " Weaponsmith"],
			},
			{
				name: "Composite Wood Board",
				id: 80791,
				icon: "https://render.guildwars2.com/file/16287CEB690793071A0A2974D5750BB153C6DDBA/1653613.png",
				discipline: ["Artificer", " Huntsman", " Weaponsmith"],
			},
			{
				name: "Damask Patch",
				id: 71334,
				icon: "https://render.guildwars2.com/file/C904D7ABDA5B972F6F34FA5B6A9A5BBBC1E61D53/1201849.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
			},
			{
				name: "Deldrimor Steel Ingot",
				id: 46738,
				icon: "https://render.guildwars2.com/file/94DCAE59215C0096449906A81F202B0201FBA85B/631486.png",
				discipline: ["Armorsmith", " Artificer", " Huntsman", " Weaponsmith"],
			},
			{
				name: "Elonian Leather Square",
				id: 46739,
				icon: "https://render.guildwars2.com/file/057F4DB327DB7F46490876E4D9D86E7C1D613C26/631487.png",
				discipline: ["Armorsmith", " Huntsman", " Leatherworker", " Tailor"],
			},
			{
				name: "Jeweled Damask Patch",
				id: 70992,
				icon: "https://render.guildwars2.com/file/C904D7ABDA5B972F6F34FA5B6A9A5BBBC1E61D53/1201849.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
			},
			{
				name: "Mystic Curio",
				id: 79410,
				icon: "https://render.guildwars2.com/file/A9C0E631560D98A6045E5D2B93E4DEEFA521A40B/1493222.png",
				discipline: ["Artificer", " Huntsman", " Weaponsmith"],
			},
			{
				name: "Spiritwood Plank",
				id: 46736,
				icon: "https://render.guildwars2.com/file/955A9F900BB8AB253C9C91C7F7DF4305A741917C/631485.png",
				discipline: ["Artificer", " Huntsman", " Weaponsmith"],
			},
			{
				name: "Square of Vabbian Silk",
				id: 80775,
				icon: "https://render.guildwars2.com/file/2B0CF51E755FE9C1F3034F4921613E6692F6C2AE/1653611.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
			},
			{
				name: "Xunlai Electrum Ingot",
				id: 46743,
				icon: "https://render.guildwars2.com/file/A52F4B070711BE096158957A790C264413CE3704/631491.png",
				discipline: "Jeweler", 
			},
		],
		ascendedDaily: [
			{
				name: "Glob of Elder Spirit Residue",
				id: 46744,
				icon: "https://render.guildwars2.com/file/131F51B9177E2AEB75326901021C42CB3169452D/631492.png",
				recipe: function(){
					ingredients(this,
						findItem('Elder Wood Plank', mats.refinedWood), 50,
						findItem('Glob of Ectoplasm', mats.general), 1,
						findItem('Thermocatalytic Reagent', mats.vendor), 10);
				},
			},
			{
				name: "Lump of Mithrillium",
				id: 46742,
				icon: "https://render.guildwars2.com/file/BAF140ED460135E04101146CC8CE9EFB5698F077/631490.png",
				recipe: function(){
					ingredients(this,
						findItem('Mithril Ingot', mats.refinedMetal), 50,
						findItem('Glob of Ectoplasm', mats.general), 1,
						findItem('Thermocatalytic Reagent', mats.vendor), 10);
				},
			},
			{
				name: "Spool of Thick Elonian Cord",
				id: 46745,
				icon: "https://render.guildwars2.com/file/643E2343E5B573664DD8010ACBD9B5BD970E305C/631493.png",
				recipe: function(){
					ingredients(this,
						findItem('Cured Thick Leather Square', mats.refinedLeather), 50,
						findItem('Glob of Ectoplasm', mats.general), 1,
						findItem('Thermocatalytic Reagent', mats.vendor), 10);
				},
			},
			{
				name: "Spool of Silk Weaving Thread",
				id: 46740,
				icon: "https://render.guildwars2.com/file/45C6FC08BE801CFC31C455A8684A963B51A73759/631488.png",
				recipe: function(){
					ingredients(this,
						findItem('Bolt of Silk', mats.refinedCloth), 50,
						findItem('Glob of Ectoplasm', mats.general), 1,
						findItem('Thermocatalytic Reagent', mats.vendor), 10);
				},
			},
		],
		ascendedJunk: [
			{
				name: "Empyreal Fragment",
				id: 46735,
				icon: "https://render.guildwars2.com/file/DE4779014F27DE027BDBE761607B220923DB03D5/631484.png",
				value: 0,
			},
			{
				name: "Ley Line Spark",
				id: 69392,
				icon: "https://render.guildwars2.com/file/C4676E0C0FAEB44FB538EFEA4E36F39B012E1A06/1204970.png",
				value: 0,
			},
			{
				name: "Pile of Bloodstone Dust",
				id: 46731,
				icon: "https://render.guildwars2.com/file/1468C6A946BFF0A42CBD08A70E45F8F05851FED0/631480.png",
				value: 0,
			},
		],

	// Basic Materials
		cloth: [
			{
				name: "Jute Scrap",
				id: 19718,
				icon: "https://render.guildwars2.com/file/A03B07F2A625FE01B01A59042BDD06C7C5AC30D2/65939.png",
			},
			{
				name: "Wool Scrap",
				id: 19739,
				icon: "https://render.guildwars2.com/file/4F4E176F0B5B040F690AB7AE7B7A6844C83F2D0D/65956.png",
			},
			{
				name: "Cotton Scrap",
				id: 19741,
				icon: "https://render.guildwars2.com/file/3C013701E6252F3F100D2559BE4E47546CE1E82F/65957.png",
			},
			{
				name: "Linen Scrap",
				id: 19743,
				icon: "https://render.guildwars2.com/file/28536CD63C63047DA7DA9F7923923461DCFC5860/65958.png",
			},
			{
				name: "Silk Scrap",
				id: 19748,
				icon: "https://render.guildwars2.com/file/021DA825F2092327B1C6BC09EC77BD5DE5B4770D/65961.png",
			},
			{
				name: "Gossamer Scrap",
				id: 19745,
				icon: "https://render.guildwars2.com/file/0CB2040408D0789690575FFE3532F3C34B693C6F/340417.png",
			},
		],
		refinedCloth: [
			{
				name: "Bolt of Jute",
				id: 19720,
				icon: "https://render.guildwars2.com/file/B7BA22DDCF0F4277A692D5D75271F9491AC303AD/63573.png",
			},
			{
				name: "Bolt of Wool",
				id: 19740,
				icon: "https://render.guildwars2.com/file/E9BB423BDD0D54E33B020DAFFAFBE6F75A62F003/63545.png",
			},
			{
				name: "Bolt of Cotton",
				id: 19742,
				icon: "https://render.guildwars2.com/file/2EA1366176E09ECFCA1E93441ACAEF10E7C93B7A/63542.png",
			},
			{
				name: "Bolt of Linen",
				id: 19744,
				icon: "https://render.guildwars2.com/file/7CD96276BF2094F5A17EB520DAA5123F04023102/63575.png",
			},
			{
				name: "Bolt of Silk",
				id: 19747,
				icon: "https://render.guildwars2.com/file/17570FF5167A03B42605BEE44AFFF0547E07C0F4/65960.png",
			},
			{
				name: "Bolt of Gossamer",
				id: 19746,
				icon: "https://render.guildwars2.com/file/7FBA68B71DB805E416315067DD0DDEEB204CFC65/63577.png",
			},
		],
		leather: [
			{
				name: "Rawhide Leather Section",
				id: 19719,
				icon: "https://render.guildwars2.com/file/0CB8030AD26C3C7563B10E5EC397490F991ED795/65940.png",
			},
			{
				name: "Thin Leather Section",
				id: 19728,
				icon: "https://render.guildwars2.com/file/ACB203A4381C7B690A7C9BAA2EFEBD01A418E3AD/65945.png",
			},
			{
				name: "Coarse Leather Section",
				id: 19730,
				icon: "https://render.guildwars2.com/file/0BDAA40E3795930BBF3DC5ACE366ABAE2D5BBFB2/65947.png",
			},
			{
				name: "Rugged Leather Section",
				id: 19731,
				icon: "https://render.guildwars2.com/file/73E9DCD5D9E50BBE3DDC97B8120E0EB9BDC590E6/65948.png",
			},
			{
				name: "Thick Leather Section",
				id: 19729,
				icon: "https://render.guildwars2.com/file/CC3A2CAADBB2F2B13B1E70079E7E207B08D16E93/65946.png",
			},
			{
				name: "Hardened Leather Section",
				id: 19732,
				icon: "https://render.guildwars2.com/file/C4600FB8F97F2618F4DFA2CE9FD2C669FAE9DE6F/65949.png",
			},
		],
		refinedLeather: [
			{
				name: "Stretched Rawhide Leather Square",
				id: 19738,
				icon: "https://render.guildwars2.com/file/6E0F2811CBEA77DF5344499E6B4C01673EE6DAC9/65955.png",
			},
			{
				name: "Cured Thin Leather Square",
				id: 19733,
				icon: "https://render.guildwars2.com/file/A7491F3EFD42E8AED665150C05B8D09D55B1325F/65950.png",
			},
			{
				name: "Cured Coarse Leather Square",
				id: 19734,
				icon: "https://render.guildwars2.com/file/060124C6B61BBFD79333E063AA28E37B300F210A/65951.png",
			},
			{
				name: "Cured Rugged Leather Square",
				id: 19736,
				icon: "https://render.guildwars2.com/file/3158B2B14EC72A93D05F07AD3FAF0EB9BC7E3E0C/65953.png",
			},
			{
				name: "Cured Thick Leather Square",
				id: 19735,
				icon: "https://render.guildwars2.com/file/12B5A77DE31564F344BFD46875C3200E9105E0A8/65952.png",
			},
			{
				name: "Cured Hardened Leather Square",
				id: 19737,
				icon: "https://render.guildwars2.com/file/BB34A319132236042659CE7B31DF6FA890FF6501/65954.png",
			},
		],
		metal: [
			{ //
				name: "Copper Ore",
				id: 19697,
				icon: "https://render.guildwars2.com/file/6E17C5A65955239640743E48B30A3425FACA5D02/65925.png",
			},
			{
				name: "Iron Ore",
				id: 19699,
				icon: "https://render.guildwars2.com/file/C1FD07F60E0B74C497761C1C014D03E402E60C6F/65927.png",
			},
			{
				name: "Silver Ore",
				id: 19703,
				icon: "https://render.guildwars2.com/file/DA1D9FCF3006222DEE691016EFF8AEE162C3431D/65931.png",
			},
			{ 
				name: "Gold Ore",
				id: 19698,
				icon: "https://render.guildwars2.com/file/D9C17CE765F921332DEBCA44681DFA2DA8586A36/65926.png",
			},
			{ 
				name: "Iron Ore",
				id: 19699,
				icon: "https://render.guildwars2.com/file/C1FD07F60E0B74C497761C1C014D03E402E60C6F/65927.png",
			},
			{ 
				name: "Platinum Ore",
				id: 19702,
				icon: "https://render.guildwars2.com/file/413D7EE8CE04C0BC07C31A4B381EB6344150F849/65930.png",
			},
			{
				name: "Mithril Ore",
				id: 19700,
				icon: "https://render.guildwars2.com/file/E90FE803CDC205CDEB13FE03694D4D04757ACF5D/65928.png",
			},
			{
				name: "Orichalcum Ore",
				id: 19701,
				icon: "https://render.guildwars2.com/file/A6E2C82153BA684E2D05D3FCA09F3E02431366ED/220461.png",
			},
		],
		refinedMetal: [
			{
				name: "Copper Ingot",
				id: 19680,
				icon: "https://render.guildwars2.com/file/32D3BC4B5722155E15DC5A1DE5E9255C50F90609/65909.png",
				recipe: function(){
					ingredients(this,
						findItem("Copper Ore", mats.metal), 2
					);
				},
			},
			{
				name: "Bronze Ingot",
				id: 19679,
				icon: "https://render.guildwars2.com/file/E3D6CBCEACAE61041366A4C0021B6E6B40630A0F/65908.png",
				recipe: function(){
					ingredients(this,
						findItem("Copper Ore", mats.metal), 10,
						findItem("Lump of Tin", mats.vendor), 1);
				},
			},
			{
				name: "Iron Ingot",
				id: 19683,
				icon: "https://render.guildwars2.com/file/69722C33064097766ABC44B20F5D4B551E599E32/65912.png",
				recipe: function(){
					ingredients(this,
						findItem("Iron Ore", mats.metal), 3);
				},
			},
			{
				name: "Silver Ingot",
				id: 19687,
				icon: "https://render.guildwars2.com/file/33150406A468526276071A0D0AD678B9F1D6EDCA/65915.png",
				recipe: function(){
					ingredients(this,
						findItem("Silver Ore", mats.metal), 2);
				},
			},
			{
				name: "Gold Ingot",
				id: 19682,
				icon: "https://render.guildwars2.com/file/80C845F5ED06036F7E041C7214C29FA3D562A480/65911.png",
				recipe: function(){
					ingredients(this,
						findItem("Gold Ore", mats.metal), 2);
				},
			},
			{
				name: "Steel Ingot",
				id: 19688,
				icon: "https://render.guildwars2.com/file/FCB6E507C84EDD01E2CE25665370FDE8423B58F9/65916.png",
				recipe: function(){
					ingredients(this,
						findItem("Iron Ore", mats.metal), 3,
						findItem("Lump of Coal", mats.vendor), 1);
				},
			},
			{
				name: "Platinum Ingot",
				id: 19686,
				icon: "https://render.guildwars2.com/file/3F08D6044B2268BE57972DCB1F0424B5A60F2AEC/65914.png",
				recipe: function(){
					ingredients(this,
						findItem("Platinum Ore", mats.metal), 2);
				},
			},
			{
				name: "Darksteel Ingot",
				id: 19681,
				icon: "https://render.guildwars2.com/file/EDC02674C339C0D5B0B8C9370013394ED6270FA7/65910.png",
				recipe: function(){
					ingredients(this,
						findItem("Platinum Ore", mats.metal), 2,
						findItem("Lump of Primordium", mats.vendor), 1);
				},
			},
			{
				name: "Mithril Ingot",
				id: 19684,
				icon: "https://render.guildwars2.com/file/7B0701F4092237431EDC72340BC89AA126EA4EF0/65913.png",
				recipe: function(){
					ingredients(this,
						findItem("Mithril Ore", mats.metal), 2);
				},
			},
			{
				name: "Orichalcum Ingot",
				id: 19685,
				icon: "https://render.guildwars2.com/file/D1941454313ACCB234906840E1FB401D49091B96/220460.png",
				recipe: function(){
					ingredients(this,
						findItem("Orichalcum Ore", mats.metal), 2);
				},
			},
		],
		wood: [
			{
				name: "Green Wood Log",
				id: 19723,
				icon: "https://render.guildwars2.com/file/DAF50142ADC06FB11FBC02F8FFEF504F4E674047/65942.png",
			},
			{
				name: "Soft Wood Log",
				id: 19726,
				icon: "https://render.guildwars2.com/file/AB6C5501209B91D9B890B1F84B29BC0142CB59D8/65943.png",
			},
			{
				name: "Seasoned Wood Log",
				id: 19727,
				icon: "https://render.guildwars2.com/file/66BEAC3E5D0EDA160AA4A7942D0C46C27DC0E7AA/65944.png",
			},
			{
				name: "Hard Wood Log",
				id: 19724,
				icon: "https://render.guildwars2.com/file/576ED6A37FA1130DDD230D5D0E0D80484E25260C/220466.png",
			},
			{
				name: "Elder Wood Log",
				id: 19722,
				icon: "https://render.guildwars2.com/file/205871B734054D0206986FB44D6DC5425E572B0B/220465.png",
			},
			{
				name: "Ancient Wood Log",
				id: 19725,
				icon: "https://render.guildwars2.com/file/5C999770AB7CC1F85D270A50C205673DF8B6E104/220467.png",
			},
		],
		refinedWood: [
			{
				name: "Green Wood Plank",
				id: 19710,
				icon: "https://render.guildwars2.com/file/0DF93CAB2913940F5FD44FF66EF309632125DB28/65936.png",
			},
			{
				name: "Soft Wood Plank",
				id: 19713,
				icon: "https://render.guildwars2.com/file/5903B1BDD6DB016204B11ADFF1CCFE22265CF566/65937.png",
			},
			{
				name: "Seasoned Wood Plank",
				id: 19714,
				icon: "https://render.guildwars2.com/file/6CFF221BAA7877C54B243D1DE9C8A211BB6AE170/65938.png",
			},
			{
				name: "Hard Wood Plank",
				id: 19711,
				icon: "https://render.guildwars2.com/file/4DFCF8776C05F6D304B5BAB25F5715C57CB19FD6/220463.png",
			},
			{
				name: "Elder Wood Plank",
				id: 19709,
				icon: "https://render.guildwars2.com/file/DB5C0A4EB6E7F730DAC3B3DE7032482792E76FA7/220462.png",
			},
			{
				name: "Ancient Wood Plank",
				id: 19712,
				icon: "https://render.guildwars2.com/file/4A0C6F64BD7AD446ADCA0177C052D732582EE90A/220464.png",
			},
		],
		// Fine
		fineT2:[
			{
				name: "Pile of Lucent Crystal",
				id: 89271,
				icon: "https://render.guildwars2.com/file/607AA1A4574FA66006FFB57C0B2DDBAAFDE50CD6/2063471.png",
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
		// Rare
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
				name: "Evergreen Lodestone",
				id: 68942,
				icon: "https://render.guildwars2.com/file/2CF4BAB1CD7F509DF151F0472F632C0D1ECAF468/1203091.png",
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
				name: "Mordrem Lodestone",
				id: 70842,
				icon: "https://render.guildwars2.com/file/1ABBBC6D026544723A9D001DC41757746206C5F7/1203019.png",
			},
			{
				name: "Onyx Lodestone",
				id: 24310,
				icon: "https://render.guildwars2.com/file/2232AA41E3DF20EB249C0B6D10BC0D37FF6C0E3D/66963.png",
			},
			{
				name: "Pile of Putrid Essence",
				id: 24335,
				icon: "https://render.guildwars2.com/file/CBC82EA8093AE4F60F0752B179F7CD02DDF5CB33/223781.png",
			},
			
		],
		crests: [
			{
				name: "Crest of the Assassin",
				id: 24514,
				icon: "https://render.guildwars2.com/file/D10616BF9FE61F3B223F71479EE0DF0615661A5A/340582.png",
			},
			{
				name: "Crest of the Magi",
				id: 24518,
				icon: "https://render.guildwars2.com/file/63301D190F16A255F4A432BF17D6246FD15463D6/340584.png",
			},
			{
				name: "Crest of the Rabid",
				id: 24532,
				icon: "https://render.guildwars2.com/file/4F40450DF59CB92FD1A102DD98D6FBEBC39BE1EB/340590.png",
			},
			{
				name: "Crest of the Shaman",
				id: 24533,
				icon: "https://render.guildwars2.com/file/E612C4D4EBF90B980C33FD33F55CCAE5B60553B8/340591.png",
			},
			{
				name: "Crest of the Soldier",
				id: 24524,
				icon: "https://render.guildwars2.com/file/006E24E069B0DAA57DF00E05B0D1C278600E1180/340586.png",
			},
		],
		gemT3:[
			{
				name: "Sunstone Lump",
				id: 24503,
				icon: "https://render.guildwars2.com/file/4F9B09A85A77B6C356F4D15FF6F9FB4DF90BACCE/220943.png",
			},
		],
		gemT5: [
			{
				name: "Azurite Crystal",
				id: 42006,
				icon: "https://render.guildwars2.com/file/1214625C57FE02B8A50644365AC862019CD06C6E/561994.png",
			},
			{
				name: "Beryl Crystal",
				id: 24519,
				icon: "https://render.guildwars2.com/file/5A6B60DB61C60002F7197871234DA0B9F9AB2A6D/220954.png",
			},
			{
				name: "Chrysocola Crystal",
				id: 24511,
				icon: "https://render.guildwars2.com/file/D9B9D43327DBAC347C1933CF29DCE83619F4510B/220950.png",
			},
			{
				name: "Coral Tentacle",
				id: 24509,
				icon: "https://render.guildwars2.com/file/2DC5460357C6E766A31EF72854F3030C43BF0143/220948.png",
			},
			{
				name: "Emerald Crystal",
				id: 24473,
				icon: "https://render.guildwars2.com/file/DB38D4CED0E4C722809C270DF2B53D7EE19397A0/220916.png",
			},
			{
				name: "Opal Crystal",
				id: 24521,
				icon: "https://render.guildwars2.com/file/D121707FEAAB6D71D1C807C7E70C75CD1E4F6552/220956.png",
			},
			{
				name: "Quartz Crystal", 
				id: 43773,
				icon: "https://render.guildwars2.com/file/6D0737BD7FC3E270D67A9C0D214CCAB70A4C1B74/603252.png",
			},
			{ // After Quartz so it can get the buy/sell of Quartz to find the value
				name: "Charged Quartz Crystal",
				id: 43772,
				icon: "https://render.guildwars2.com/file/10ABB44B459640C30CB8BFAEA9DFEAE19C6ECD67/603251.png",
				recipe: function(){
					ingredients(this,
						findItem("Quartz Crystal", mats.gemT5), 25
					);
				},
			},
			{
				name: "Ruby Crystal",
				id: 24474,
				icon: "https://render.guildwars2.com/file/90097CD0D563E852044397F848556C3F5EAE66D0/220917.png",
			},
			{
				name: "Sapphire Crystal",
				id: 24475,
				icon: "https://render.guildwars2.com/file/7C612CD5DB06D81A720F7105CE2B3F4309C4F9BC/220918.png",
			},
		],
		gemT6: [
			{
				name: "Agate Orb",
				id: 72436,
				icon: "https://render.guildwars2.com/file/0D430696220C8004F329D37506DC254BFDC504E4/1202985.png",
			},
			{
				name: "Amalgamated Gemstone",
				id: 68063,
				icon: "https://render.guildwars2.com/file/35BC2D35511C806348730A5E63152B2E260D4A5C/919363.png",
			},
			{
				name: "Azurite Orb",
				id: 42010,
				icon: "https://render.guildwars2.com/file/33A24CED131E010FB63B60C1303B5AEDC606B528/575165.png",
			},
			{
				name: "Beryl Orb",
				id: 24520,
				icon: "https://render.guildwars2.com/file/7D130AE0AE5073703219A0BC48C3CD6C95215CFD/220955.png",
			},
			{
				name: "Black Diamond",
				id: 76491,
				icon: "https://render.guildwars2.com/file/4E096C75FAB2EF90A82648A43C64FC226267FB92/1202991.png",
			},
			{
				name: "Chrysocola Orb",
				id: 24512,
				icon: "https://render.guildwars2.com/file/DD7DB26B7BDCED3E15CB971D0016299F38490D58/220951.png",
			},
			{
				name: "Copper Doubloon",
				id: 24884,
				icon: "https://render.guildwars2.com/file/DBA477C50202162C7CA47F422F7CB306B71C2AC8/221185.png",
			},
			{
				name: "Coral Orb",
				id: 24510,
				icon: "https://render.guildwars2.com/file/A5634473D2B67BEC9CE2335473673CB665F4D50C/220949.png",
			},
			{
				name: "Ebony Orb",
				id: 75654,
				icon: "https://render.guildwars2.com/file/052E2FBD2FF19BC174E19568966A174B9A0FB1E5/1203016.png",
			},
			{
				name: "Emerald Orb",
				id: 24515,
				icon: "https://render.guildwars2.com/file/327A0AA63E50E268EC02C4A5F0DBD246F207AEBB/220952.png",
			},{
				name: "Flax Blossom",
				id: 74988,
				icon: "https://render.guildwars2.com/file/A660107FB0ACA5337A376F984EA3A04F9121C77E/1203039.png",
			},
			{
				name: "Freshwater Pearl",
				id: 76179,
				icon: "https://render.guildwars2.com/file/629318080FD49E701566ED98DF98FA54033AC9CB/223939.png",
			},
			{
				name: "Gold Doubloon",
				id: 24772,
				icon: "https://render.guildwars2.com/file/C7ECB96451CD1493215DBBE967AD0B62A1585461/221104.png",
			},
			{
				name: "Maguuma Burl",
				id: 72315,
				icon: "https://render.guildwars2.com/file/B15D7F31F8A477717E6055A2AFE0010BD90FECD1/1203051.png",
			},
			{
				name: "Maguuma Lily",
				id: 70957,
				icon: "https://render.guildwars2.com/file/2FFF0F2BF16F6692A845B9A7CC089EEC0B07B1B6/1203049.png",
			},
			{
				name: "Moonstone Orb",
				id: 72504,
				icon: "https://render.guildwars2.com/file/169AC14EB2E5D10D285E04BF06E506EB26D933BF/1203053.png",
			},
			{
				name: "Opal Orb",
				id: 24522,
				icon: "https://render.guildwars2.com/file/62CE38CB99469CBADDAD6FF4A221F75B636AA55D/220957.png",
			},
			{
				name: "Platinum Doubloon",
				id: 24773,
				icon: "https://render.guildwars2.com/file/E5C1AB06B16DEC154546D21F63620173780AC860/434543.png",
			},
			{
				name: "Ruby Orb",
				id: 24508,
				icon: "https://render.guildwars2.com/file/7702E49901413CC14B2F5B7BFD059522333210E6/220947.png",
			},
			{
				name: "Sapphire Orb",
				id: 24516,
				icon: "https://render.guildwars2.com/file/D13B6E523AE806CFF3D21E12793571037FAA46F7/220953.png",
			},
			{
				name: "Silver Doubloon",
				id: 24502,
				icon: "https://render.guildwars2.com/file/EA581B219A5937D31F145E3CD00CE7046216DE22/220942.png",
			},
		],
		bags: [
			{
				name: "18 Slot Silk Bag",
				id: 9566,
				icon: "https://render.guildwars2.com/file/F8230D6D750D7208D68010D87DEBAAB97E51DBDB/219395.png",
				recipe: function(){
					ingredients(this,
						findItem("Greater Rune of Holding", mats.vendor), 1,
						findItem("Bolt of Silk", mats.refinedCloth), 10,
					);
				},
				discipline: "Tailor",
			},
			{
				name: "20 Slot Craftsman's Bag",
				id: 9572,
				icon: "https://render.guildwars2.com/file/5F7362DEF112DCAED4D615B94E9D1C3CEA040011/433577.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Bolt of Gossamer", mats.refinedCloth), 10,
						findItem("Ancient Bone", mats.fineT6), 3,
					);
				},
				discipline: "Armorsmith",
			},
			{
				name: "20 Slot Equipment Pack Box",
				id: 9593,
				icon: "https://render.guildwars2.com/file/5519EC3E90D9CF07B9052902BFD80C08C364DAE8/433594.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Orichalcum Ingot", mats.refinedMetal), 10,
						findItem("Armored Scale", mats.fineT6), 3,
					);
				},
				discipline: "Armorsmith",
			},
			{
				name: "20 Slot Gossamer Bag",
				id: 9571,
				icon: "https://render.guildwars2.com/file/CCCF23C7F9F8AC41D25B2B67A469DA951C669467/219390.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Bolt of Gossamer", mats.refinedCloth), 10,
					);
				},
				discipline: "Tailor",
			},
			{
				name: "20 Slot Hardened Leather Pack",
				id: 9581,
				icon: "https://render.guildwars2.com/file/A149FD302E9128B0DEFAF7BA71726A5842B7D2EB/222426.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Cured Hardened Leather Square", mats.refinedLeather), 10,
					);
				},
				discipline: "Leatherworker",
			},
			{
				name: "20 Slot Invisible Bag",
				id: 9574,
				icon: "https://render.guildwars2.com/file/C6D16D1D43120B28C0011277EE5E2AD8085E473B/433579.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Bolt of Gossamer", mats.refinedCloth), 10,
						findItem("Pile of Crystalline Dust", mats.fineT6), 3,
					);
				},
				discipline: "Tailor",
			},
			{
				name: "20 Slot Invisible Pack",
				id: 9584,
				icon: "https://render.guildwars2.com/file/B7B7EB4291550C3BBE50C6E7C223C59A15614D33/433587.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Cured Hardened Leather Square", mats.refinedLeather), 10,
						findItem("Pile of Crystalline Dust", mats.fineT6), 3,
					);
				},
				discipline: "Leatherworker",
			},
			{
				name: "20 Slot Oiled Pack",
				id: 9585,
				icon: "https://render.guildwars2.com/file/703717137DF44401D7B2C45A736C5C90482F0673/433588.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Cured Hardened Leather Square", mats.refinedLeather), 10,
						findItem("Ancient Bone", mats.fineT6), 3,
					);
				},
				discipline: "Leatherworker",
			},
			{
				name: "20 Slot Orichalcum Box",
				id: 9591,
				icon: "https://render.guildwars2.com/file/FE2CFC2DF2AA02C24C9FE810119D0539266CDB42/222418.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Orichalcum Ingot", mats.refinedMetal), 10,
					);
				},
				discipline: "Armorsmith",
			},
			{
				name: "20 Slot Safe Box",
				id: 9594,
				icon: "https://render.guildwars2.com/file/12F22D0BB1723B256CA44CE0D0B611A1089DCA2B/433595.png",
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of Holding", mats.vendor), 1,
						findItem("Orichalcum Ingot", mats.refinedMetal), 10,
						findItem("Pile of Crystalline Dust", mats.fineT6), 3,
					);
				},
				discipline: "Armorsmith",
			},

		],
		components: [
			{
				name: "Amalgamated Draconic Lodestone 1",
				id: 92687,
				icon: "https://render.guildwars2.com/file/CEBF06A096D0EB0AF0410CA90370F0157F70A921/2247707.png",
				recipe: function(){
					ingredients(this,
						findItem("Destroyer Lodestone", mats.rareT5), 10,
						findItem("Crystal Lodestone", mats.rareT5), 10,
						findItem("Corrupted Lodestone", mats.rareT5), 10,
						findItem("Mordrem Lodestone", mats.rareT5), 10
					);
				},
				discipline: "All, but Chef",
			},
			{
				name: "Amalgamated Draconic Lodestone 2",
				id: 92687,
				icon: "https://render.guildwars2.com/file/CEBF06A096D0EB0AF0410CA90370F0157F70A921/2247707.png",
				recipe: function(){
					ingredients(this,
						findItem("Destroyer Lodestone", mats.rareT5), 10,
						findItem("Crystal Lodestone", mats.rareT5), 10,
						findItem("Corrupted Lodestone", mats.rareT5), 10,
						findItem("Pile of Putrid Essence", mats.rareT5), 10
					);
				},
				discipline: "All, but Chef",
			},
			{
				name: "Charm of Brilliance",
				id: 89103,
				icon: "https://render.guildwars2.com/file/E4B016CDF70960156803FD04C425BF9A4C382D95/2063466.png",
			},
			{
				name: "Charm of Potence",
				id: 89258,
				icon: "https://render.guildwars2.com/file/2949679FC79B6808EB437A0434B59D5642D86BCC/2063465.png",
			},
			{
				name: "Charm of Skill",
				id: 89216,
				icon: "https://render.guildwars2.com/file/F99BAAD3C841D8AC4E5C621972454E400E3CD85D/2063467.png",
			},
			{
				name: "Gossamer Patch",
				id: 76614,
				icon: "https://render.guildwars2.com/file/EE34585260D85E44DCCC980F6C0F1C171101B7C0/1201850.png",
				recipe: function(){
					ingredients(this, 
						findItem("Cured Hardened Leather Square", mats.refinedLeather), 10,
						findItem("Bolt of Gossamer", mats.refinedCloth), 4,
						findItem("Spool of Gossamer Thread", mats.vendor), 25,
					);
				},
				discipline: "Armorsmith, Leatherworker, Tailor",
			},
			{
				name: "Lump of Glass",
				id: 75075,
				icon: "https://render.guildwars2.com/file/30F2DAAA227CCA9E5C0C0775EB7B67D35A353DDD/1202372.png",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Coarse Sand", mats.general), 3,
						findItem("Thermocatalytic", mats.vendor), 1,
					);
				},
			},
			{
				name: "Piece of Ambrite",
				id: 66637,
				icon: "https://render.guildwars2.com/file/D2CC0E0A9C4E391BC2D1B6EFADB0EC9D6CE0DFFC/831471.png",
			},
			{
				name: "Sheet of Ambrite",
				id: 66650,
				icon: "https://render.guildwars2.com/file/A87B2A37E3400D19E0BF2D9206DF80DD6C98066E/831484.png",
				recipe: function(){
					ingredients(this,
						findItem("Piece of Ambrite", mats.components), 25,
						findItem("Quartz Crystal", mats.gemT5), 5,
					);
				},
				discipline: "All, but Chef",
			},
			{
				name: "Sheet of Charged Ambrite",
				id: 67832,
				icon: "https://render.guildwars2.com/file/0F610E4E91CDA394F96E61DD2CB0560ACF5C9823/904680.png",
				recipe: function(){
					ingredients(this,
						findItem("Charged Quartz Crystal", mats.gemT5), 1,
						findItem("Piece of Ambrite", mats.components), 10,
					);
				},
				discipline: "All, but Chef",
			},
			{
				name: "Stormcaller Core",
				id: 93567,
				icon: "https://render.guildwars2.com/file/47190CD59577B1B2D5C7667FAD16D8661172AE6A/2293282.png",
				recipe: function(){
					ingredients(this,
						findItem("Charged Lodestone", mats.rareT5), 10,
						findItem("Bolt of Gossamer", mats.refinedCloth), 75,
						findItem("Orichalcum Ingot", mats.refinedMetal), 25,
						findItem("Charged Quartz Crystal", mats.gemT5), 1
					);
				},
				discipline: ["Artificer", "Huntsman", "Weaponsmith"], 
			},
			{
				name: "Vial of Linseed Oil",
				id: 73034,
				icon: "https://render.guildwars2.com/file/B73F53BA2F4BFA1EB8F0FA45F05C9DF542EDE952/65660.png",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Flax Seeds", mats.cooking), 15,
						findItem("Milling Stone", mats.cooking), 5,
						findItem("Milling Basin", mats.vendor), 1,
					);
				},
				discipline: "All",
			},
			{
				name: "Orichalcum Setting",
				id: 12815,
				icon: "https://render.guildwars2.com/file/DD02B907A499D37F9A6562EFC2FF0E642FE193A7/219500.png",
				recipe: function(){
					ingredients(this,
						findItem("Orichalcum Ingot", mats.refinedMetal), 2,
					);
				},
			},
		],
		// Other mats
		fractals:[
			{
				name: "Shard of Crystallized Mists Essence",
				id: 38024,
				icon: "https://render.guildwars2.com/file/7DB2AB514CB9ACC219457DC1AEAB340BD578644F/512007.png",
				value: 0,
			},
		],
		festive:[
			{
				name: "Lucky New Year Firework",
				id: 77699,
				icon: "https://render.guildwars2.com/file/6BCB7ABFB4DD68907F0B4F7817950371C91C024F/1341437.png",
			},
			{
				name: "Piece of Candy Corn",
				id: 36041,
				icon: "https://render.guildwars2.com/file/7AF3232140CB5DF159E4E54C2F092F69B5BD460F/499376.png",
			},
			{
				name: "Snowflake",
				id: 86601,
				icon: "https://render.guildwars2.com/file/F3023510F5EDEC640CA619BF3A74C3240BCFD129/1914828.png",
			},
			// Items with ingredients before in this json
			{
				name: "Sealed Package of Snowballs",
				id: 24,
				icon: "https://render.guildwars2.com/file/1D05D1EE04E16E69710E1EAB11AC466BBF105778/219347.png",
				recipe: function(){
					ingredients(this,
						findItem("Snowflake", mats.festive), 1);
				},
			},
		],
		general: [
			{
				name: "Barbed Thorn",
				id: 74202,
				icon: "https://render.guildwars2.com/file/7B5BB36847642E7FC0DB9D9AEFF649CC32B926F0/1203083.png",
			},
			{
				name: "Glob of Ectoplasm",
				id: 19721,
				icon: "https://render.guildwars2.com/file/18CE5D78317265000CF3C23ED76AB3CEE86BA60E/65941.png",
			},
			{
				name: "Leaf Fossil",
				id: 74328,
				icon: "https://render.guildwars2.com/file/4B71A105A7315B7D1F38B82E1EBE43ADA924ED38/1203043.png",
			},
			{
				name: "Pile of Coarse Sand",
				id: 71641,
				icon: "https://render.guildwars2.com/file/D838CB1BF7D49E1725EBB1F3ABD00C55EB67CE1E/1205401.png",
			},
			{
				name: "Pristine Toxic Spore Sample",
				id: 48884,
				icon: "https://render.guildwars2.com/file/78B90364F0FA4806E6600DD260BE2EBC51D1431D/665773.png",
			},
			{
				name: "Watchwork Sprocket",
				id: 44941,
				icon: "https://render.guildwars2.com/file/F996013B7E4AB74F0D73EE38723521BEA9B8D67F/619700.png",
			},
		],
		gizmo: [
			{
				name: "Extra-Pungent Skyscale Treat", 
				id: 90339,
				icon: "https://render.guildwars2.com/file/3C427C80623C00F1D5A6A74C3AE4F3EA5704B7E5/2140331.png",
				recipe: function(){
					ingredients(this,
						findItem("Smell-Enhancing Culture", mats.vendor), 1,
						findItem("Charged Quartz Crystal", mats.gemT5), 1,
						findItem("Slab of Red Meat", mats.cooking), 2,
						findItem("Pile of Bloodstone Dust", mats.ascendedJunk), 10
					);
				},
				discipline: "Chef",
			},
		],
		ls4:[
			{
				name: "Kralkatite Ore",
				id: 86069,
				icon: "https://render.guildwars2.com/file/380A7E3B250B050C2C39B1106CA39AED65C8396B/1894933.png",
				value: 0,
			},
		],
		runes:[
			{
				name: "Superior Rune of the Adventurer",
				id: 24830,
				icon: "https://render.guildwars2.com/file/3C053CD2680D7DAE5E0899E8F6FF530D0E445704/221141.png",
				discipline: "Leatherworker", 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Platinum Doubloon", mats.gemT6), 1,
						findItem("Charm of Skill", mats.components), 2,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Brawler",
				id: 24833,
				icon: "https://render.guildwars2.com/file/65A51C02312B93452A6EA9F0BF6BB5240894500D/220735.png",
				discipline: "Armorsmith", 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 12,
						findItem("Crystal Lodestone", mats.rareT5), 1,
						findItem("Charm of Potence", mats.components), 1,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Elementalist",
				id: 24800,
				icon: "https://render.guildwars2.com/file/F321ABCA3954145A4A17046D6170767740674866/220730.png",
				discipline: "Tailor", 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 12,
						findItem("Destroyer Lodestone", mats.rareT5), 1,
						findItem("Charm of Brilliance", mats.components), 1,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Engineer",
				id: 24812,
				icon: "https://render.guildwars2.com/file/9896142965DE036D05030D04220A036062545B43/220728.png",
				discipline: "Leatherworker", 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Iron Ore", mats.metal), 25,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Charm of Skill", mats.components), 2);
				},
			},
			{
				name: "Superior Rune of Exuberance",
				id: 44951,
				icon: "https://render.guildwars2.com/file/5FBA08E65429F5AF91CE4776F6AC4972FCF93E50/619710.png",
				discipline: "Armorsmith", 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Watchwork Sprocket", mats.general), 250,
						findItem("Charm of Brilliance", mats.components), 2);
				},
			},
			{
				name: "Superior Rune of Fireworks",
				id: 89999,
				icon: "https://render.guildwars2.com/file/CECC01C8220163A9646171B0BAA528B73DE3D527/2100803.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"], 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Lucky New Year Firework", mats.festive), 10,
						findItem("Charm of Brilliance", mats.components), 3,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Krait",
				id: 24762,
				icon: "https://render.guildwars2.com/file/F0932EF967413023BE0CC1EEF5E2536B2764E65A/220711.png",
				discipline: "Armorsmith", 
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 12,
						findItem("Pile of Putrid Essence", mats.rareT5), 1,
						findItem("Charm of Brilliance", mats.components), 1,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Mad King",
				id: 36044,
				icon: "https://render.guildwars2.com/file/0A0E6F80DA16D7764FFEA33893B66051FBE07A3F/499379.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Piece of Candy Corn", mats.festive), 200,
						findItem("Charm of Skill", mats.components), 3);
				},
			},
			{
				name: "Superior Rune of the Mesmer",
				id: 24803,
				icon: "https://render.guildwars2.com/file/D4099559DA2558F9B172EFB306EE0C942193B66F/220727.png",
				discipline: "Tailor",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Crystal Lodestone", mats.rareT5), 1,
						findItem("Charm of Brilliance", mats.components), 3,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Ogre",
				id: 24756,
				icon: "https://render.guildwars2.com/file/136590B36FFC2053D135743B063405C9A54A9E6A/220716.png",
				discipline: "Leatherworker",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Onyx Lodestone", mats.rareT5), 1,
						findItem("Charm of Potence", mats.components), 2,
						findItem("Glob of Ectoplasm", mats.general), 3);
				},
			},
			{
				name: "Superior Rune of Perplexity",
				id: 44957,
				icon: "https://render.guildwars2.com/file/F67A922A4624470EBAD493920DC1EE2616769E9D/619716.png",
				discipline: "Tailor",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Charm of Brilliance", mats.components), 3,
						findItem("Watchwork Sprocket", mats.general), 250);
				},
			},
			{
				name: "Superior Rune of the Revenant",
				id: 69370,
				icon: "https://render.guildwars2.com/file/3C07D12B7B55004FA51C5D4DC20794329BE023B5/1201526.png",
				discipline: "Armorsmith",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Leaf Fossil", mats.general), 5,
						findItem("Charm of Potence", mats.components), 3);
				},
			},
			{
				name: "Superior Rune of Resistance",
				id: 49460,
				icon: "https://render.guildwars2.com/file/585BF273BFCD9D12F462087A19FBD12DF755269A/681057.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Charm of Potence", mats.components), 2,
						findItem("Shard of Crystallized Mists Essence", mats.fractals), 3);
				},
			},
			{
				name: "Superior Rune of the Thief",
				id: 24818,
				icon: "https://render.guildwars2.com/file/997AEFF0927F640DE515B4DA516911B3B3B6B9EA/220731.png",
				discipline: "Leatherworker",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 12,
						findItem("Cured Hardened Leather Square", mats.refinedLeather), 1,
						findItem("Charm of Skill", mats.components), 1,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Scholar",
				id: 24836,
				icon: "https://render.guildwars2.com/file/4378ABC0415950DAC6A05C76920392D72E242EC2/220736.png",
				discipline: "Tailor",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Elaborate Totem", mats.fineT6), 5,
						findItem("Charm of Brilliance", mats.components), 2);
				},
			},
			{
				name: "Superior Rune of Snowfall",
				id: 68437,
				icon: "https://render.guildwars2.com/file/177542577DA8A9500706A80D1F79BB7FD5EA9DD5/924726.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Sealed Package of Snowballs", mats.festive), 5,
						findItem("Charm of Brilliance", mats.components), 2,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of Speed",
				id: 24720,
				icon: "https://render.guildwars2.com/file/1ED9421DC70174CA9BBC33075047381C3659C837/220722.png",
				discipline: "Leatherworker",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Charged Lodestone", mats.rareT5), 1,
						findItem("Charm of Brilliance", mats.components), 3,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of the Stars",
				id: 85713,
				icon: "https://render.guildwars2.com/file/BEDDD1D249DF6FC417451E0CA25F803FA818294A/1894695.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Charm of Skill", mats.components), 1,
						findItem("Kralkatite Ore", mats.ls4), 15,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			{
				name: "Superior Rune of Tormenting",
				id: 44956,
				icon: "https://render.guildwars2.com/file/F8BC046221EA49EB3D349B5D3C50DDF33213D8B3/619715.png",
				discipline: "Leatherworker",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 12,
						findItem("Charm of Potence", mats.components), 1,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Watchwork Sprocket", mats.general), 250);
				},
			},
			{
				name: "Superior Rune of the Trooper",
				id: 24827,
				icon: "https://render.guildwars2.com/file/643A3C23647EF27F520860F0EFC7FEEB29766B1A/220734.png",
				discipline: "Armorsmith",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 8,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Vial of Powerful Blood", mats.fineT6), 5,
						findItem("Charm of Potence", mats.components), 2);
				},
			},
			{
				name: "Superior Rune of the Warrior",
				id: 24821,
				icon: "https://render.guildwars2.com/file/ACA8355625070B3706CAE0B49B0549CB12123420/220732.png",
				discipline: "Armorsmith",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Armored Scale", mats.fineT6), 5,
						findItem("Charm of Potence", mats.components), 3);
				},
			},
			{
				name: "Superior Rune of the Water",
				id: 24839,
				icon: "https://render.guildwars2.com/file/50C5E3125234FF4525162A052335354D47B50D0F/220737.png",
				discipline: "Tailor",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Lucent Crystal", mats.fineT2), 4,
						findItem("Glacial Lodestone", mats.rareT5), 1,
						findItem("Charm of Skill", mats.components), 3,
						findItem("Glob of Ectoplasm", mats.general), 5);
				},
			},
			// Runes that require other runes before it
			{
				name: "Superior Rune of the Berserker",
				id: 71425,
				icon: "https://render.guildwars2.com/file/EB082298F2B83D4E042EF9C1566F3D4E250EB204/1201518.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of the Warrior", mats.runes), 1,
						findItem("Evergreen Lodestone", mats.rareT5), 1,
						findItem("Barbed Thorn", mats.general), 10);
				},
			},
			{
				name: "Superior Rune of the Chronomancer",
				id: 73399,
				icon: "https://render.guildwars2.com/file/80FE6B56334AB53830DD2D0F61992DF4CC44A710/1201519.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of the Mesmer", mats.runes), 1,
						findItem("Evergreen Lodestone", mats.rareT5), 1,
						findItem("Barbed Thorn", mats.general), 10);
				},
			},
			{
				name: "Superior Rune of the Daredevil",
				id: 72852,
				icon: "https://render.guildwars2.com/file/5957E29A2B985F0FF0E50878F62A702262BC0714/1201520.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of the Thief", mats.runes), 1,
						findItem("Evergreen Lodestone", mats.rareT5), 1,
						findItem("Leaf Fossil", mats.general), 10);
				},
			},
			{
				name: "Superior Rune of the Herald",
				id: 76100,
				icon: "https://render.guildwars2.com/file/041C98AABD6751C5FAF8AD74F3253CACF0E8DA74/1201522.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of the Revenant", mats.runes), 1,
						findItem("Evergreen Lodestone", mats.rareT5), 1,
						findItem("Leaf Fossil", mats.general), 10);
				},
			},
			{
				name: "Superior Rune of the Tempest",
				id: 76166,
				icon: "https://render.guildwars2.com/file/D144F10ABB48042794BA0627EE04B3311A4131DB/1201529.png",
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
				recipe: function(){
					ingredients(this,
						findItem("Superior Rune of the Elementalist", mats.runes), 1,
						findItem("Evergreen Lodestone", mats.rareT5), 1,
						findItem("Leaf Fossil", mats.general), 10);
				},
			},
		],
		trophy: [
			{
				name: "Clay Pot", 
				id: 66913,
				icon: "https://render.guildwars2.com/file/A16C9EFFD44CAD0827F4BB5E80F8C2120934366B/849433.png",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Incandescent Dust", mats.fineT5), 15,
						findItem("Thermocatalytic Reagent", mats.vendor), 25,
						findItem("Glob of Ectoplasm", mats.general), 5,
						findItem("Brick of Clay", mats.vendor), 25
					);
				},
				discipline: "Artificer",
			},
			{
				name: "Empty Keg", 
				id: 72224,
				icon: "https://render.guildwars2.com/file/93719EC76AF9B666F1195E7FB9530EFF4C152504/63122.png",
				recipe: function(){
					ingredients(this,
						findItem("Elder Wood Plank", mats.refinedWood), 10,
						findItem("Mithril Ingot", mats.refinedMetal), 10,
						findItem("Vial of Linseed Oil", mats.components), 3,
					);
				},
				discipline: "Chef",
			},
			{
				name: "Glass Mug", 
				id: 71580,
				icon: "https://render.guildwars2.com/file/C8B32231DEE0312A39010FDC116E1D2304690391/1301771.png",
				recipe: function(){
					ingredients(this,
						findItem("Lump of Glass", mats.components), 3,
						findItem("Thermocatalytic Reagent", mats.vendor), 1,
					);
				},
				discipline: "Jeweler",
			},
			{
				name: "Grow Lamp", 
				id: 66993,
				icon: "https://render.guildwars2.com/file/A3F044BBD2AD33A4CAC1F00276A633392A59C7FD/855360.png",
				recipe: function(){
					ingredients(this,
						findItem("Charged Quartz Crystal", mats.gemT5), 10,
						findItem("Orichalcum Setting", mats.components), 10,
						findItem("Sunstone Lump", mats.gemT3), 25,
						findItem("Watchwork Sprocket", mats.general), 25
					);
				},
				discipline: "Jeweler",
			},
			{
				name: "Heat Stone", 
				id: 67015,
				icon: "https://render.guildwars2.com/file/0411420C4FB4B7287A006AD5B7AB0E41171009B6/855375.png",
				recipe: function(){
					ingredients(this,
						findItem("Lesser Vision Crystal", mats.vendor), 1,
						findItem("Molten Lodestone", mats.rareT5), 10,
						findItem("Onyx Lodestone", mats.rareT5), 10,
						findItem("Thermocatalytic Reagent", mats.vendor), 15
					);
				},
				discipline: ["Armorsmith", " Leatherworker", " Tailor"],
			},
			{
				name: "Ley-Line Infused Tool", 
				id: 74042,
				icon: "https://render.guildwars2.com/file/4E6B472FC915196101BA7095EFE2D4EE0710050A/1203098.png",
				recipe: function(){
					ingredients(this,
						findItem("Charged Quartz Crystal", mats.gemT5), 1,
						findItem("Ley Line Spark", mats.ascendedJunk), 1,
						findItem("Orichalcum Ingot", mats.refinedMetal), 2,
						findItem("Pile of Bloodstone Dust", mats.ascendedJunk), 50
					);
				},
				discipline: "Weaponsmith",
			},
		],
		// Cooking Mats
		cooking:[
			{
				name: "Milling Stone",
				id: 77256,
				icon: "https://render.guildwars2.com/file/657F0902F3331F960A6DB93B06419714504D3DAC/1201834.png",
			},
			{
				name: "Pile of Flax Seeds",
				id: 74090,
				icon: "https://render.guildwars2.com/file/481BDB30B60B08E759CCEF3FF10C9441D49BBB76/1203081.png",
			},
			{
				name: "Slab of Red Meat",
				id: 24359,
				icon: "https://render.guildwars2.com/file/6BEA5E4A5BDCB2C4D6B8630B65B2A91D0E13356F/66928.png",
			},
		],
		utility:[
			{
				name: "Toxic Focusing Crystal", 
				id: 48917,
				icon: "https://render.guildwars2.com/file/CAE216F71766AD4407ECD8C70894792DE41B0366/665781.png",
				recipe: function(){
					ingredients(this,
						findItem("Pile of Crystalline Dust", mats.fineT6), 3,
						findItem("Pristine Toxic Spore Sample", mats.general), 5,
						findItem("Empyreal Fragment", mats.ascendedJunk), 100,
					);
				},
				discipline: "Artificer",
			},
		],
		vendor: [
			{
				name: "N/A",
				id: 0,
				icon: "https://wiki.guildwars2.com/images/b/bc/End_alt_option.png",
				buy: 0,
				sell: 0,
				value: 0, 
			},
			{
				name: "Brick of Clay",
				id: 66902,
				icon: "https://render.guildwars2.com/file/3344FFF73E551B6BBE954A58EE521AD0D9FB9396/849428.png",
				value: 0, 
			},
			{
				name: "Greater Rune of Holding",
				id: 13008,
				icon: "https://render.guildwars2.com/file/2C591D0C7FF702983FC8290FBBF750EA9C4A9292/63500.png",
				value: 20000,
			},
			{
				name: "Lesser Vision Crystal",
				id: 49523,
				icon: "https://render.guildwars2.com/file/F304B2B4F078BBD2EBA347FBEC521C7047B672A9/1200199.png",
				value: 0, 
			},
			{ // For Bronze Ingot
				name: "Lump of Tin",
				id: 19704,
				icon: "https://render.guildwars2.com/file/B2705275944046734E4079651E6BB0CC0EEB3943/65932.png",
				value: 8, 
			},
			{ // Steel Ingot
				name: "Lump of Coal",
				id: 19750,
				icon: "https://render.guildwars2.com/file/3728DC6E10FA4DADCD3B0918A70FAE9DEA96BDD4/65962.png",
				value: 16,
			},
			{ // Darksteel Ingot
				name: "Lump of Primordium",
				id: 19924,
				icon: "https://render.guildwars2.com/file/3728DC6E10FA4DADCD3B0918A70FAE9DEA96BDD4/65962.png",
				value: 48,
			},
			{ 
				name: "Milling Basin",
				id: 76839,
				icon: "https://render.guildwars2.com/file/0E251A26CB31A19813666546C89A0C4EDDB1A6B1/1201835.png",
				value: 56,
			},
			{ 
				name: "Smell-Enhancing Culture",
				id: 90201,
				icon: "https://render.guildwars2.com/file/272BFDA5485572127E24F7D4E5409256DB58D9BC/63256.png",
				value: 40000,
			},
			{
				name: "Spool of Gossamer Thread",
				id: 19790,
				icon: "https://render.guildwars2.com/file/B7CFD70F53A845E4ED1212040C18C123FC172910/65959.png",
				value: 64,
			},
			{
				name: "Superior Rune of Holding",
				id: 13009,
				icon: "https://render.guildwars2.com/file/CFA856D1EE9F01056490EE1CD2C637C2C1C5CBA6/63501.png",
				value: 100000,
			},
			{ 
				name: "Thermocatalytic Reagent",
				id: 46747,
				icon: "https://render.guildwars2.com/file/090DF0E7AFD6AD9A6C9FC31CCE510A05663D0A0E/631495.png",
				value: 149.6,
			},
		],
		accBound: [
			{
				name: "Fulgurite", 
				id: 76933,
				icon: "https://render.guildwars2.com/file/C00CF0A5804C7794EEE7605945A66098B302D00E/1204964.png",
				buy: 0,
				sell: 0,
				value: 0,
			},
		],
	};

	var icons = {
		discipline: [
			{
				name: "Armorsmith",
				img: "https://wiki.guildwars2.com/images/5/55/Master_Armorsmith.png",
			},
		],
	};

	// Go through both json of the api prices and the name of the materials
	// When ids match, fuse the prices and names together
	function addValues(array){
		for (i = 0; i < array.length; i++){
			if (array[i].recipe != null){
				array[i].recipe();
			}
			for (j = 0; j < matPrices.length; j++){
				if (matPrices[j].id == array[i].id){
					array[i].buy = matPrices[j].buys.unit_price; 
					array[i].sell = matPrices[j].sells.unit_price;
					// In case there's a situation where there's no buy orders. ie Milling Stones
					if (matPrices[j].buys.unit_price == 0){array[i].buy = array[i].sell;}
				}
			}
		}
	}
	addValues(mats.cloth); addValues(mats.refinedCloth);
	addValues(mats.leather); addValues(mats.refinedLeather);
	addValues(mats.metal); addValues(mats.refinedMetal);
	addValues(mats.wood); addValues(mats.refinedWood);

	addValues(mats.fineT2);
	addValues(mats.fineT5);
	addValues(mats.fineT6);

	addValues(mats.ascended);
	addValues(mats.crests);
	addValues(mats.fractals);
	addValues(mats.festive);
	addValues(mats.gemT3);
	addValues(mats.gemT6);
	addValues(mats.general);
	addValues(mats.cooking);
	addValues(mats.rareT5);
	
	// Things that have recipes 
	addValues(mats.ascendedDaily);
	addValues(mats.bags);
	addValues(mats.components);
	addValues(mats.gemT5);
	addValues(mats.gizmo);
	addValues(mats.runes);
	addValues(mats.trophy);
	addValues(mats.utility);

	console.log(mats.bags);

	// FOR THINGS THAT GET TAXED
	// Finding a specific item in an array and returns those specific attributes
	function findItem(name, array){
		var attributes = 0; 
		for (counter = 0; counter < array.length; counter++){
			if (name == array[counter].name){
				attributes = array[counter];
				// If there happens to be a vendor item with a price, insert buy, sell values to be = the vendor price
				if (array[counter].value != null){
					array[counter].buy = array[counter].value;
					array[counter].sell = array[counter].value;
				}
			}
		}
		return attributes;
	}
	// Find the position of where the item is in the specific json
	function findPosition(name, array){
		var position = 0;
		for (counter = 0; counter < array.length; counter++){
			if (name == array[counter].name){
				position = counter;
				break;
			}
		}
		return position;
	}

	// WITHOUT TAX
	// Finding a specific item in an array and returns those specific attributes
	function findVendor(name, array){
		var attributes = 0; 
		for (counter = 0; counter < array.length; counter++){
			if (name == array[counter].name){
				attributes = array[counter];
			}
		}
		return attributes;
	}

	// For materials that are not account bound. Add prices of tradable materials to find the worth/value
	// i1 == item 1, etc
	function ingredients(applyTo, i1, i1Qty, i2, i2Qty, i3, i3Qty, i4, i4Qty){
		// Make materials, qty as arrays to push the ingredients towards the final product
		var itemBuy = 0, itemSell = 0, resultBuy, resultSell, materials = new Array, qty = new Array;
		// check if there's items in the parameters or not
		if (isNaN(i1) != true || typeof i1 !== "undefined"){materials.push(i1); applyTo.ingre1 = i1;}
		if (isNaN(i2) != true || typeof i2 !== "undefined"){materials.push(i2); applyTo.ingre2 = i2;}
		if (isNaN(i3) != true || typeof i3 !== "undefined"){materials.push(i3); applyTo.ingre3 = i3;}
		if (isNaN(i4) != true || typeof i4 !== "undefined"){materials.push(i4); applyTo.ingre4 = i4;}

		if (isNaN(i1Qty) != true || typeof i1Qty !== "undefined"){qty.push(i1Qty); applyTo.ingre1Qty = i1Qty;}
		if (isNaN(i2Qty) != true || typeof i2Qty !== "undefined"){qty.push(i2Qty); applyTo.ingre2Qty = i2Qty;}
		if (isNaN(i3Qty) != true || typeof i3Qty !== "undefined"){qty.push(i3Qty); applyTo.ingre3Qty = i3Qty;}
		if (isNaN(i4Qty) != true || typeof i4Qty !== "undefined"){qty.push(i4Qty); applyTo.ingre4Qty = i4Qty;}

		for (k = 0; k < materials.length; k++){
			if (typeof materials[k].buy !== "undefined"){
				itemBuy = itemBuy + materials[k].buy * qty[k];
				itemSell = itemSell + materials[k].sell * qty[k];
			} else { // For vendor items or acc bound
				itemBuy = itemBuy + materials[k].value * qty[k];
				itemSell = itemSell + materials[k].value * qty[k];
			}
		}
		applyTo.buy = itemBuy; 
		applyTo.sell = itemSell; 
	}
	// Table bodies to put the html input in
	var clothBody = document.getElementById('cloth-tableBody'),
		leatherBody = document.getElementById('leather-tableBody'),
		metalBody = document.getElementById('metal-tableBody'),
		woodBody = document.getElementById('wood-tableBody'),
		ascendedBody = document.getElementById('ascended-tableBody'),
		bagBody = document.getElementById('bag-tableBody'),
		curioBody = document.getElementById("curio-tableBody"),
		gemBody = document.getElementById("gem-tableBody"),
		miscBody = document.getElementById('misc-tableBody'),
		runeBody = document.getElementById('rune-tableBody'),
		orbBody = document.getElementById("orb-tableBody");
	var html = ``;
	var valueConversion, valueResult, vendorItem, vendorValue, vendorIcon, vendorName, vendorQty, resultQty, profit, tax;
	var item1Qty, item2Qty, item3Qty, item4Qty, // For asc mats
		item1Value, item2Value, item3Value, item4Valu, // For displaying the value of each item individually when using buy/sell values
		item1Attr, item2Attr, item3Attr, item4Attr, resultAttr, // For dispalying the atritubes of the item's json
		dr; // Drop rate
	var recipeMain = new Array; 
	var craftingIcon = "../images/assets/icons/Crafting.png";
	var backgroundColor,
		isNegCount = 0, // if all profit margins are neg, then this would be true. Otherwise, if one is pos, then this is false
		iconSize = "width: 35px; height: 35px; vertical-align: middle;";

	// If the user chooses <tax option> then change the tax in all the functions
	switch (taxChoice){
		case "85% Tax": tax = 0.85; break;
		case "90% Tax": tax = 0.90; break;
		case "No Tax": tax = 1; break;
		default: tax = 0.85; break;
	}

	// When clicking the <select> buttons, depending on what the choice of the user is, it will show different prices
	switch (choice){
		case 0: 
		cloth("Buy", "Sell"); 
		leather("Buy", "Sell");
		metal("Buy", "Sell");
		wood("Buy", "Sell");

		ascended("Buy", "Sell"); 
		bags("Buy", "Sell");
		gem("Buy", "Sell");
		curio("Buy", "Sell");
		orb("Buy", "Sell");
		misc("Buy", "Sell");
		rune("Buy", "Sell");
		break;

		case 1: 
		cloth("Sell", "Sell");
		leather("Sell", "Sell");
		metal("Sell", "Sell");
		wood("Sell", "Sell"); 

		ascended("Sell", "Sell");
		bags("Sell", "Sell");
		gem("Sell", "Sell");
		curio("Sell", "Sell");
		orb("Sell", "Sell");
		misc("Sell", "Sell");
		rune("Sell", "Sell");
		break;

		case 2: 
		cloth("Buy", "Buy"); 
		leather("Buy", "Buy");
		metal("Buy", "Buy");
		wood("Buy", "Buy"); 

		ascended("Buy", "Buy");
		bags("Buy", "Buy");
		gem("Buy", "Buy");
		curio("Buy", "Buy");
		orb("Buy", "Buy");
		misc("Buy", "Buy");
		rune("Buy", "Buy");
		break;

		case 3: 
		cloth("Sell", "Buy"); 
		leather("Sell", "Buy");
		metal("Sell", "Buy");
		wood("Sell", "Buy"); 

		ascended("Sell", "Buy");
		bags("Sell", "Sell");
		gem("Sell", "Buy");
		curio("Sell", "Buy");
		orb("Sell", "Buy");
		misc("Sell", "Buy");
		rune("Sell", "Buy");
		break;

	}
	// Cloth 
	function cloth(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.cloth.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": initialMat = mats.cloth[i].buy; refinedMat = mats.refinedCloth[i].buy; break;
				case "Sell": initialMat = mats.cloth[i].sell; refinedMat = mats.refinedCloth[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.refinedCloth[i].buy; break;
				case "Sell": resultInput = mats.refinedCloth[i].sell; break;
			}

			switch (mats.cloth[i].name){
				case "Silk Scrap": valueConversion = initialMat * 3; break;
				default: valueConversion = initialMat * 2; break;
			}
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			if (mats.cloth[i].name != "Silk Scrap"){
				html += `
				<tr>
					<td> 2 &nbsp; <img src = "${mats.cloth[i].icon}" style = "${iconSize}"><span class = "hoverTooltip">${mats.cloth[i].name}</span> 
						<br> <span> ${displayValues(initialMat * 2)} </span> </td>
					<td> &#8594; </td>
					<td> 1 &nbsp; <img src = "${mats.refinedCloth[i].icon}" style = "${iconSize}"><span class = "hoverTooltip"><b>${mats.refinedCloth[i].name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span>  
						<br> <span> ${displayValues(valueResult)} </span></td>
					<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)} </td>
				</tr>
				`;
			} else {
				html += `
				<tr>
					<td> 3 &nbsp; <img src = "${mats.cloth[i].icon}" title = "${mats.cloth[i].name}" style = "${iconSize}"><span class = "hoverTooltip">${mats.cloth[i].name}</span> 
						<br> <span> ${displayValues(initialMat * 3)} </span> </td>
					<td> &#8594; </td>
					<td> 1 &nbsp; <img src = "${mats.refinedCloth[i].icon}" style = "${iconSize}"><span class = "hoverTooltip"><b>${mats.refinedCloth[i].name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span>  
						<br> <span> ${displayValues(valueResult)} </span></td>
					<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)} </td>
				</tr>
				`;
			}
			clothBody.innerHTML = html;
		} 
	} 
	// Leather
	function leather(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.leather.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": initialMat = mats.leather[i].buy; refinedMat = mats.refinedLeather[i].buy; break;
				case "Sell": initialMat = mats.leather[i].sell; refinedMat = mats.refinedLeather[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.refinedLeather[i].buy; break;
				case "Sell": resultInput = mats.refinedLeather[i].sell; break;
			}

			switch (mats.leather[i].name){
				case "Thick Leather Section": item1Qty = 4; valueConversion = initialMat * item1Qty; break;
				case "Hardened Leather Section": item1Qty = 3; valueConversion = initialMat * item1Qty; break;
				default: item1Qty = 2; valueConversion = initialMat * item1Qty; break;
			}
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> ${item1Qty} &nbsp; <img src = "${mats.leather[i].icon}" style = "${iconSize}"><span class = "hoverTooltip">${mats.leather[i].name}</span> 
					<br> <span> ${displayValues(valueConversion)} </span> </td>
				<td> &#8594; </td>
				<td> 1 &nbsp; <img src = "${mats.refinedLeather[i].icon}" style = "${iconSize}"><span class = "hoverTooltip"><b>${mats.refinedLeather[i].name}</b>
							<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
							<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span>  
					<br> <span> ${displayValues(valueResult)} </span></td>
				<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)} </td>
			</tr>
			`;
			
			leatherBody.innerHTML = html;
		} 
	}
	// Metal
	function metal(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.refinedMetal.length; i++){
			// Change prices depnding on what the choices of <select> are

			item1Attr = mats.refinedMetal[i].ingre1; 
			item1Qty = mats.refinedMetal[i].ingre1Qty; 
			item2Attr = mats.refinedMetal[i].ingre2; 
			item2Qty = mats.refinedMetal[i].ingre2Qty; 

			// If the items are vendored or acc bound items that don't have buy/sell values, return the N/A values
			if (typeof item1Attr == "undefined" || item1Qty == "undefined"){item1Attr = mats.vendor[0]; item1Qty = 0;}
			if (typeof item2Attr == "undefined" || item2Qty == "undefined"){item2Attr = mats.vendor[0]; item2Qty = 0;}

			switch (conversionBuyOrSell){
				case "Buy": item1Value = item1Attr.buy*item1Qty; item2Value = item2Attr.buy*item2Qty; 
					initialMat = item1Value + item2Value; break;
				case "Sell": item1Value = item1Attr.sell*item1Qty; item2Value = item2Attr.sell*item2Qty; 
					initialMat = item1Value + item2Value; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.refinedMetal[i].buy; break;
				case "Sell": resultInput = mats.refinedMetal[i].sell; break;
			}
	
			// Change qty of result if bronze ingot, otherwise keep at 1
			if (mats.refinedMetal[i].name == "Bronze Ingot"){
				resultQty = 5; 
				resultInput *= 5; 
			} else {
				resultQty = 1;
			}

			valueConversion = initialMat
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> ${item1Qty} &nbsp; <img src = "${item1Attr.icon}" style = "${iconSize}"><span class = "hoverTooltip">${item1Attr.name}</span> 
					<br> <span> ${displayValues(item1Value)} </span> </td>
				<td> + </td> 
				<td> ${item2Qty} &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"><span class = "hoverTooltip">${item2Attr.name}</span>
					<br> <span> ${displayValues(item2Value)} </span> </td>
				<td> &#8594; </td>
				<td> ${resultQty} &nbsp; <img src = "${mats.refinedMetal[i].icon}" style = "${iconSize}"><span class = "hoverTooltip"><b>${mats.refinedMetal[i].name}</b>
							<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
							<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span>  
					<br> <span> ${displayValues(valueResult)} </span></td>
				<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)} </td>
			</tr>
			`;
			
			metalBody.innerHTML = html;
		} 
	}
	// Wood 
	function wood(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.wood.length; i++){
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": initialMat = mats.wood[i].buy; refinedMat = mats.refinedWood[i].buy; break;
				case "Sell": initialMat = mats.wood[i].sell; refinedMat = mats.refinedWood[i].sell; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = mats.refinedWood[i].buy; break;
				case "Sell": resultInput = mats.refinedWood[i].sell; break;
			}

			switch (mats.wood[i].name){
				case "Soft Wood Log": item1Qty = 2; valueConversion = initialMat * item1Qty; break;
				default: item1Qty = 3; valueConversion = initialMat * item1Qty; break;
			}
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> ${item1Qty} &nbsp; <img src = "${mats.wood[i].icon}" style = "${iconSize}"><span class = "hoverTooltip">${mats.wood[i].name}</span>
					<br> <span> ${displayValues(valueConversion)} </span> </td>
				<td> &#8594; </td>
				<td> 1 &nbsp; <img src = "${mats.refinedWood[i].icon}" style = "${iconSize}"><span class = "hoverTooltip"><b>${mats.refinedWood[i].name}</b>
							<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
							<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span> 
					<br> <span> ${displayValues(valueResult)} </span></td>
				<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)} </td>
			</tr>
			`;
			
			woodBody.innerHTML = html;
		} 
	}
	function ascended(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		// Since every mat switches to a different sequence of refined mats & different tiers of refined mats, created an array to iterate thru the json
		// asc [] = the specific order for the for loop

		var ascMat;
		// This will change only for metal as it's in different positions of rarity vs. the rest (json)
		// resultNum changes every time due to the way the json is ordered 
		var num1, num2, num3, resultNum;
		var item3Temp = {icon: "", name: "", value: 0},
			item4Temp = {icon: "", name: "", value: 0};

		for (i = 0; i < mats.ascended.length; i++){
			if (mats.ascended[i].name == "Mystic Curio"){} else {
				// Position of the mats in a specific json that isn't in a normal sequence (T2->T3->T4)
				switch (mats.ascended[i].name){
					case "Jeweled Damask Patch":
					case "Damask Patch": num1 = findPosition("Bolt of Damask", mats.ascended); num2 = findPosition("Elonian Leather Square", mats.ascended); num3 = 0; break;
					case "Deldrimor Steel Ingot": num1 = findPosition("Iron Ingot", mats.refinedMetal); num2 = findPosition("Steel Ingot", mats.refinedMetal); num3 = findPosition("Darksteel Ingot", mats.refinedMetal); break;
					case "Xunlai Electrum Ingot": num1 = findPosition("Silver Ingot", mats.refinedMetal); num2 = findPosition("Gold Ingot", mats.refinedMetal); num3 = findPosition("Platinum Ingot", mats.refinedMetal); break;
					default: num1 = 1; num2 = 2; num3 = 3; break;
				}

				switch (mats.ascended[i].name){
					case "Blended Leather Sheet": item1Qty = 10; item2Qty = 5; item3Qty = 10; item4Qty = 1; 
						seq = mats.refinedLeather; ascDailyMat = findItem("Spool of Thick Elonian Cord", mats.ascendedDaily); break;

					case "Bolt of Damask": item1Qty = 20; item2Qty = 10; item3Qty = 20; item4Qty = 1; 
						seq = mats.refinedCloth; ascDailyMat = findItem("Spool of Silk Weaving Thread", mats.ascendedDaily); break;

					case "Carbonized Mithrillium Ingot": item1Qty = 20; item2Qty = 10; item3Qty = 20; item4Qty = 1; 
						seq = mats.refinedMetal; ascDailyMat = findItem("Lump of Mithrillium", mats.ascendedDaily); break;

					case "Composite Wood Board": item1Qty = 10; item2Qty = 5; item3Qty = 10; item4Qty = 1; 
						seq = mats.refinedWood; ascDailyMat = findItem("Glob of Elder Spirit Residue", mats.ascendedDaily); break;

					case "Damask Patch": item1Qty = 1; item2Qty = 1; item3Qty = 0; item4Qty = 0; 
						seq = mats.ascended; break;

					case "Deldrimor Steel Ingot": item1Qty = 20; item2Qty = 10; item3Qty = 20; item4Qty = 1; 
						seq = mats.refinedMetal; ascDailyMat = findItem("Lump of Mithrillium", mats.ascendedDaily); break

					case "Elonian Leather Square": item1Qty = 20; item2Qty = 10; item3Qty = 20; item4Qty = 1; 
						seq = mats.refinedLeather; ascDailyMat = findItem("Spool of Thick Elonian Cord", mats.ascendedDaily); break;

					case "Jeweled Damask Patch": item1Qty = 1; item2Qty = 1; item3Qty = 0; item4Qty = 25; 
						seq = mats.ascended;  ascDailyMat = findItem("Fulgurite", mats.accBound); break;

					case "Spiritwood Plank": item1Qty = 20; item2Qty = 10; item3Qty = 20; item4Qty = 1; 
						seq = mats.refinedWood; ascDailyMat = findItem("Glob of Elder Spirit Residue", mats.ascendedDaily); break;	

					case "Square of Vabbian Silk": item1Qty = 10; item2Qty = 5; item3Qty = 10; item4Qty = 1; 
						seq = mats.refinedCloth; ascDailyMat = findItem("Spool of Silk Weaving Thread", mats.ascendedDaily); break;	

					case "Xunlai Electrum Ingot": item1Qty = 20; item2Qty = 10; item3Qty = 20; item4Qty = 1; 
						seq = mats.refinedMetal; ascDailyMat = findItem("Lump of Mithrillium", mats.ascendedDaily); break;
				}


				// Change prices depnding on what the choices of <select> are
				switch (conversionBuyOrSell){
					case "Buy": item1Value = seq[num1].buy*item1Qty; item2Value = seq[num2].buy*item2Qty; item3Value = seq[num3].buy*item3Qty; item4Value = ascDailyMat.buy*item4Qty;  
						initialMat = item1Value + item2Value + item3Value + item4Value; break;
					case "Sell": item1Value = seq[num1].sell*item1Qty; item2Value = seq[num2].sell*item2Qty; item3Value = seq[num3].sell*item3Qty; item4Value = ascDailyMat.sell*item4Qty;  
						initialMat = item1Value + item2Value + item3Value + item4Value; break;
				}
				switch (resultBuyOrSell){
					case "Buy": resultInput = mats.ascended[i].buy; break;
					case "Sell": resultInput = mats.ascended[i].sell; break;
				}

				// When there's no ingredients needed, then change values to 0 and change icons
				if (item3Qty == 0){item3Temp.icon = mats.vendor[0].icon; item3Temp.name = mats.vendor[0].name; item3Temp.value = mats.vendor[0].value;} 
					else {item3Temp.icon = seq[num3].icon; item3Temp.name = seq[num3].name; item3Temp.value = item3Value;}
				if (item4Qty == 0){item4Temp.icon = mats.vendor[0].icon; item4Temp.name = mats.vendor[0].name; item4Temp.value = mats.vendor[0].value;}
					else {item4Temp.icon = ascDailyMat.icon; item4Temp.name = ascDailyMat.name; item4Temp.value = item4Value;}

				valueConversion = initialMat; 
				valueResult = resultInput * tax;
				profit = valueResult - valueConversion;

				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
					<tr> 
						<td> ${item1Qty} &nbsp; <img src = "${seq[num1].icon}" style = "${iconSize}"><span class = "hoverTooltip">${seq[num1].name}</span>
							<br> <span> ${displayValues(item1Value)} </span> </td> 
						<td> + </td> 
						<td> ${item2Qty} &nbsp; <img src = "${seq[num2].icon}" style = "${iconSize}"><span class = "hoverTooltip">${seq[num2].name}</span>
							<br> <span> ${displayValues(item2Value)} </span> </td> 
						<td> + </td> 
						<td> ${item3Qty} &nbsp; <img src = "${item3Temp.icon}" style = "${iconSize}"><span class = "hoverTooltip">${item3Temp.name}</span>
							<br> <span> ${displayValues(item3Temp.value)} </span> </td> 
						<td> + </td> 
						<td> ${item4Qty} &nbsp; <img src = "${item4Temp.icon}" style = "${iconSize}"><span class = "hoverTooltip">${item4Temp.name}</span> 
							<br> <span> ${displayValues(item4Temp.value)} </span> </td> 
						<td> &#8594; </td>
						<td> 1 &nbsp; <img src = "${mats.ascended[i].icon}" style = "${iconSize}"> <span class = "hoverTooltip"><b>${mats.ascended[i].name}</b>
							<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
							<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}
							<br> <b>Discipline:</b> ${mats.ascended[i].discipline}</span>
							<br> <span> ${displayValues(valueResult)} </span> </td> 
						<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)}</td> 
					</tr>
				`
				
				ascendedBody.innerHTML = html;
			} // End of if else
		} 
	}
	// Bags
	function bags(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		// What result items are presented

		let resultArray = [];
		for (i = 0; i < mats.bags.length; i++){
			resultArray.push(mats.bags[i]);
		}

		for (i = 0; i < resultArray.length; i++){
			// Assign items and their qty based on their recipes
			item1Attr = resultArray[i].ingre1; item1Qty = resultArray[i].ingre1Qty;
			item2Attr = resultArray[i].ingre2; item2Qty = resultArray[i].ingre2Qty;
			item3Attr = resultArray[i].ingre3; item3Qty = resultArray[i].ingre3Qty;
			item4Attr = resultArray[i].ingre4; item4Qty = resultArray[i].ingre4Qty;

			// Change output qty for specific items
			switch(resultArray[i].name){
				case "Gossamer Patch": resultQty = 5; break;
				case "Toxic Focusing Crystal": resultQty = 5; break;
				default: resultQty = 1; break;
			}
			resultAttr = resultArray[i]; 

			// If the items are vendored or acc bound items that don't have buy/sell values, return the N/A values
			if (typeof item3Attr == "undefined" || item3Qty == "undefined"){item3Attr = mats.vendor[0]; item3Qty = 0;}
			if (typeof item4Attr == "undefined" || item4Qty == "undefined"){item4Attr = mats.vendor[0]; item4Qty = 0;}

			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": item1Value = item1Attr.buy*item1Qty; item2Value = item2Attr.buy*item2Qty; item3Value = item3Attr.buy*item3Qty; item4Value = item4Attr.buy*item4Qty;  
					initialMat = item1Value + item2Value + item3Value + item4Value; break;
				case "Sell": item1Value = item1Attr.sell*item1Qty; item2Value = item2Attr.sell*item2Qty; item3Value = item3Attr.sell*item3Qty; item4Value = item4Attr.sell*item4Qty;  
					initialMat = item1Value + item2Value + item3Value + item4Value; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = resultAttr.buy*resultQty; break;
				case "Sell": resultInput = resultAttr.sell*resultQty; break;
			}

			valueConversion = initialMat; 
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
				<tr> 
					<td> ${item1Qty} &nbsp; <img src = "${item1Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item1Attr.name}</span>
						<br> <span> ${displayValues(item1Value)} </span> </td> 
					<td> + </td> 
					<td> ${item2Qty} &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item2Attr.name}</span>
						<br> <span> ${displayValues(item2Value)} </span> </td> 
					<td> + </td> 
					<td> ${item3Qty} &nbsp; <img src = "${item3Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item3Attr.name}</span>
						<br> <span> ${displayValues(item3Value)} </span> </td> 
					<td> + </td> 
					<td> ${item4Qty} &nbsp; <img src = "${item4Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item4Attr.name}</span>
						<br> <span> ${displayValues(item4Value)} </span> </td> 
					<td> &#8594; </td>
					<td> ${resultQty} &nbsp; <img src = "${resultAttr.icon}" style = "${iconSize}"> <span class = "hoverTooltip"><b>${resultAttr.name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}
						<br> <b>Discipline:</b> ${resultAttr.discipline}</span>
						<br> <span> ${displayValues(valueResult)} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)}</td> 
				</tr>
			`	
			bagBody.innerHTML = html;
		}
	}
	// gemT6
	function orb(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		// Dust is the constant ingredient
		item2Attr = findItem("Pile of Incandescent Dust", mats.fineT5);

		for (i = 0; i < mats.gemT5.length; i++){
			// Ignore Quartz and skip over
			if (mats.gemT5[i].name == "Quartz Crystal" || mats.gemT5[i].name == "Charged Quartz Crystal"){continue;}
			// Find an orb in the mats.gemstone json and make that the result
			for (j = 0; j < mats.gemT6.length; j++){
				// Compare item vs result and check if the first word of their name matches. If yes, that's the result and item
				if (mats.gemT6[j].name.split(" ")[0] == mats.gemT5[i].name.split(" ")[0]){resultAttr = mats.gemT6[j]; item1Attr = mats.gemT5[i];}
			}
			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": item1Value = item1Attr.buy*2; item2Value = item2Attr.buy*5;
					initialMat = item1Value + item2Value; break;
				case "Sell": item1Value = item1Attr.sell*2; item2Value = item2Attr.sell*5;
					initialMat = item1Value + item2Value; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = resultAttr.buy; break;
				case "Sell": resultInput = resultAttr.sell; break;
			}
			valueConversion = initialMat;
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
			<tr>
				<td> 2 &nbsp; <img src = "${item1Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item1Attr.name}</span>
					<br> <span> ${displayValues(item1Value)} </span> </td>
				<td> + </td>
				<td> 5 &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item2Attr.name}</span>
					<br> <span> ${displayValues(item2Value)} </span></td>
				<td> &#8594; </td>
				<td> 1 &nbsp; <img src = "${resultAttr.icon}" style = "${iconSize}"> <span class = "hoverTooltip"><b>${resultAttr.name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span>
					<br> <span> ${displayValues(valueResult)} </span> </td> 
				<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)}</td> 
			</tr>
			`;
			orbBody.innerHTML = html;
		} 
	}
	// gemT6
	function gem(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		resultAttr = findItem("Amalgamated Gemstone", mats.gemT6);
		doGem(findItem("Pile of Crystalline Dust", mats.fineT6), mats.crests, 1.37, 1, 3);
		doGem(findItem("Pile of Crystalline Dust", mats.fineT6), mats.gemT6, 1.37, 1, 3);
		doGem(findItem("Glob of Ectoplasm", mats.general), mats.crests, 11.49, 5, 25);
		doGem(findItem("Glob of Ectoplasm", mats.general), mats.gemT6, 11.49, 5, 25);
		// i1 = What the first item is (either t6 dust or ecto)
		function doGem(i1, array, dr, firstItemQty, otherItemQty){
			for (i = 0; i < array.length; i++){
				// Skip over Amal Gemstone in the json
				if (array == mats.gemT6 && i == 1){} else {
					item1Attr = i1;
					item2Attr = array[i];
					item3Attr = item2Attr;
					item4Attr = item2Attr;
					
					// Change prices depnding on what the choices of <select> are
					// initialMat = the prices of the items being converted
					switch (conversionBuyOrSell){
						case "Buy": item1Value = item1Attr.buy*firstItemQty; item2Value = item2Attr.buy*otherItemQty; item3Value = item3Attr.buy*otherItemQty; item4Value = item4Attr.buy*otherItemQty;
							initialMat = item1Value + item2Value + item3Value + item4Value;  break;
						case "Sell": item1Value = item1Attr.sell*firstItemQty; item2Value = item2Attr.sell*otherItemQty; item3Value = item3Attr.sell*otherItemQty; item4Value = item4Attr.sell*otherItemQty;
							initialMat = item1Value + item2Value + item3Value + item4Value;  break;
					}
					switch (resultBuyOrSell){
						case "Buy": resultInput = resultAttr.buy; break;
						case "Sell": resultInput = resultAttr.sell; break;
					}
					valueConversion = initialMat; 
					valueResult = (resultInput*dr) * tax;
					profit = valueResult - valueConversion;

					if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
					html += `
					<tr>
						<td> ${firstItemQty} &nbsp; <img src = "${item1Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item1Attr.name}</span>
							<br> <span> ${displayValues(item1Value)} </span> </td>
						<td> + </td> 
						<td> ${otherItemQty} &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item2Attr.name}</span>
							<br> <span> ${displayValues(item2Value)} </span> </td>
						<td> + </td>
						<td> ${otherItemQty}  &nbsp; <img src = "${item3Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item3Attr.name}</span>
							<br> <span> ${displayValues(item3Value)} </span> </td>
						<td> + </td>
						<td> ${otherItemQty} &nbsp; <img src = "${item4Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item4Attr.name}</span>
							<br> <span> ${displayValues(item4Value)} </span> </td>
						<td> &#8594; </td>
						<td> ${dr} &nbsp; <img src = "${resultAttr.icon}" style = "${iconSize}"> <span class = "hoverTooltip"><b>${resultAttr.name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}</span>
							<br> <span> ${displayValues(valueResult)} </span> </td> 
						<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)}</td> 
					</tr>
					`;			
					gemBody.innerHTML = html;
				} // End of if else
			} 
		}
	}
	// Misc
	function misc(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		// What result items are presented
		var resultArray = [findItem("Extra-Pungent Skyscale Treat", mats.gizmo),
			findItem("Ley-Line Infused Tool", mats.trophy),
			findItem("Clay Pot", mats.trophy),
			findItem("Grow Lamp", mats.trophy),
			findItem("Heat Stone", mats.trophy),
			findItem("Vial of Linseed Oil", mats.components),
			findItem("Empty Keg", mats.trophy),
			findItem("Toxic Focusing Crystal", mats.utility),
			findItem("Glass Mug", mats.trophy),
			findItem("Sheet of Ambrite", mats.components),
			findItem("Sheet of Charged Ambrite", mats.components),
			findItem("Stormcaller Core", mats.components),
			findItem("Amalgamated Draconic Lodestone 1", mats.components),
			findItem("Amalgamated Draconic Lodestone 2", mats.components),
			findItem("Gossamer Patch", mats.components),
		];

		for (i = 0; i < resultArray.length; i++){
			// Assign items and their qty based on their recipes
			item1Attr = resultArray[i].ingre1; item1Qty = resultArray[i].ingre1Qty;
			item2Attr = resultArray[i].ingre2; item2Qty = resultArray[i].ingre2Qty;
			item3Attr = resultArray[i].ingre3; item3Qty = resultArray[i].ingre3Qty;
			item4Attr = resultArray[i].ingre4; item4Qty = resultArray[i].ingre4Qty;

			// Change output qty for specific items
			switch(resultArray[i].name){
				case "Gossamer Patch": resultQty = 5; break;
				case "Toxic Focusing Crystal": resultQty = 5; break;
				default: resultQty = 1; break;
			}
			resultAttr = resultArray[i]; 

			// If the items are vendored or acc bound items that don't have buy/sell values, return the N/A values
			if (typeof item3Attr == "undefined" || item3Qty == "undefined"){item3Attr = mats.vendor[0]; item3Qty = 0;}
			if (typeof item4Attr == "undefined" || item4Qty == "undefined"){item4Attr = mats.vendor[0]; item4Qty = 0;}

			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": item1Value = item1Attr.buy*item1Qty; item2Value = item2Attr.buy*item2Qty; item3Value = item3Attr.buy*item3Qty; item4Value = item4Attr.buy*item4Qty;  
					initialMat = item1Value + item2Value + item3Value + item4Value; break;
				case "Sell": item1Value = item1Attr.sell*item1Qty; item2Value = item2Attr.sell*item2Qty; item3Value = item3Attr.sell*item3Qty; item4Value = item4Attr.sell*item4Qty;  
					initialMat = item1Value + item2Value + item3Value + item4Value; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = resultAttr.buy*resultQty; break;
				case "Sell": resultInput = resultAttr.sell*resultQty; break;
			}

			valueConversion = initialMat; 
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
				<tr> 
					<td> ${item1Qty} &nbsp; <img src = "${item1Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item1Attr.name}</span>
						<br> <span> ${displayValues(item1Value)} </span> </td> 
					<td> + </td> 
					<td> ${item2Qty} &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item2Attr.name}</span>
						<br> <span> ${displayValues(item2Value)} </span> </td> 
					<td> + </td> 
					<td> ${item3Qty} &nbsp; <img src = "${item3Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item3Attr.name}</span>
						<br> <span> ${displayValues(item3Value)} </span> </td> 
					<td> + </td> 
					<td> ${item4Qty} &nbsp; <img src = "${item4Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item4Attr.name}</span>
						<br> <span> ${displayValues(item4Value)} </span> </td> 
					<td> &#8594; </td>
					<td> ${resultQty} &nbsp; <img src = "${resultAttr.icon}" style = "${iconSize}"> <span class = "hoverTooltip"><b>${resultAttr.name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}
						<br> <b>Discipline:</b> ${resultAttr.discipline}</span>
						<br> <span> ${displayValues(valueResult)} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)}</td> 
				</tr>
			`	
			miscBody.innerHTML = html;
		}
	}
	// Mystic Curios
	function curio(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		item2Attr = findItem("Mithril Ingot", mats.refinedMetal);
		item3Attr = findItem("Elder Wood Plank", mats.refinedWood);
		resultAttr = findItem("Mystic Curio", mats.ascended);
	
		// All T5 mats, BUT the dust is part of the conversion (mats.fineT5[3])
		for (i = 0; i < mats.fineT5.length; i++){
			// When i == 3, do nothing, skip over dust conversion
			if (i == 3){} else {
			// Change prices depnding on what the choices of <select> are
			// initialMat = the prices of the items being converted

				switch (conversionBuyOrSell){
					case "Buy": item1Value = mats.fineT5[i].buy*35; item2Value = item2Attr.buy*15; item3Value = item3Attr.buy*10;
						initialMat = item1Value + item2Value + item3Value;  break;
					case "Sell": item1Value = mats.fineT5[i].sell*35; item2Value = item2Attr.sell*15; item3Value = item3Attr.sell*10;
						initialMat = item1Value + item2Value + item3Value;  break;
				}
				switch (resultBuyOrSell){
					case "Buy": resultInput = resultAttr.buy; break;
					case "Sell": resultInput = resultAttr.sell; break;
				}
				valueConversion = initialMat; 
				valueResult = resultInput * tax;
				profit = valueResult - valueConversion;

				if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
				html += `
				<tr>
					<td> 35 &nbsp; <img src = "${mats.fineT5[i].icon}" style = "${iconSize}"> <span class = "hoverTooltip">${mats.fineT5[i].name}</span>
						<br> <span> ${displayValues(item1Value)} </span> </td>
					<td> + </td> 
					<td> 15 &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item2Attr.name}</span>
						<br> <span> ${displayValues(item2Value)} </span> </td>
					<td> + </td>
					<td> 10 &nbsp; <img src = "${item3Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item3Attr.name}</span>
						<br> <span> ${displayValues(item3Value)} </span> </td>
					<td> &#8594; </td>
					<td> 1 &nbsp; <img src = "${resultAttr.icon}"  style = "${iconSize}"> <span class = "hoverTooltip"><b>${resultAttr.name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}
						<br> <b>Discipline:</b> ${resultAttr.discipline}</span>
						<br> <span> ${displayValues(valueResult)} </span> </td> 
					<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)}</td> 
				</tr>
				`;			
				curioBody.innerHTML = html;
			} // End of if else
		} 
	}
	// Runes
	function rune(conversionBuyOrSell, resultBuyOrSell){
		html = ''; // reset HTML so it doesn't copy over the previous list
		isNegCount = 0; // reset count so it doesn't hide the next table
		for (i = 0; i < mats.runes.length; i++){
			// Assign items and their qty based on their recipes
			item1Attr = mats.runes[i].ingre1; item1Qty = mats.runes[i].ingre1Qty;
			item2Attr = mats.runes[i].ingre2; item2Qty = mats.runes[i].ingre2Qty;
			item3Attr = mats.runes[i].ingre3; item3Qty = mats.runes[i].ingre3Qty;
			item4Attr = mats.runes[i].ingre4; item4Qty = mats.runes[i].ingre4Qty;

			// Change output qty for specific items
			switch(mats.runes[i].name){
				case "Toxic Focusing Crystal": resultQty = 5; break;
				default: resultQty = 1; break;
			}
			resultAttr = mats.runes[i]; 

			// If the items are vendored or acc bound items that don't have buy/sell values, return the N/A values
			if (typeof item3Attr == "undefined" || item3Qty == "undefined"){item3Attr = mats.vendor[0]; item3Qty = 0;}
			if (typeof item4Attr == "undefined" || item4Qty == "undefined"){item4Attr = mats.vendor[0]; item4Qty = 0;}

			// Change prices depnding on what the choices of <select> are
			switch (conversionBuyOrSell){
				case "Buy": item1Value = item1Attr.buy*item1Qty; item2Value = item2Attr.buy*item2Qty; item3Value = item3Attr.buy*item3Qty; item4Value = item4Attr.buy*item4Qty;  
					initialMat = item1Value + item2Value + item3Value + item4Value; break;
				case "Sell": item1Value = item1Attr.sell*item1Qty; item2Value = item2Attr.sell*item2Qty; item3Value = item3Attr.sell*item3Qty; item4Value = item4Attr.sell*item4Qty;  
					initialMat = item1Value + item2Value + item3Value + item4Value; break;
			}
			switch (resultBuyOrSell){
				case "Buy": resultInput = resultAttr.buy*resultQty; break;
				case "Sell": resultInput = resultAttr.sell*resultQty; break;
			}

			valueConversion = initialMat; 
			valueResult = resultInput * tax;
			profit = valueResult - valueConversion;

			if (profit < 0){ backgroundColor = '#E9C4B4'; isNegCount = isNegCount + 1;} else { backgroundColor = '#CFE9B4'} // change background depending on neg or pos
			html += `
				<tr> 
					<td> ${item1Qty} &nbsp; <img src = "${item1Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item1Attr.name}</span> 
						<br> <span> ${displayValues(item1Value)} </span> </td> 
					<td> + </td> 
					<td> ${item2Qty} &nbsp; <img src = "${item2Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item2Attr.name}</span> 
						<br> <span> ${displayValues(item2Value)} </span> </td> 
					<td> + </td> 
					<td> ${item3Qty} &nbsp; <img src = "${item3Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item3Attr.name}</span> 
						<br> <span> ${displayValues(item3Value)} </span> </td> 
					<td> + </td> 
					<td> ${item4Qty} &nbsp; <img src = "${item4Attr.icon}" style = "${iconSize}"> <span class = "hoverTooltip">${item4Attr.name}</span> 
						<br> <span> ${displayValues(item4Value)} </span> </td> 
					<td> &#8594; </td>
					<td> ${resultQty} &nbsp; <img src = "${resultAttr.icon}" style = "${iconSize}"> <span class = "hoverTooltip"><b>${resultAttr.name}</b>
						<br> <b>Result Value:</b> &nbsp; ${displayValues(valueResult)} (Tax: ${displayValues(valueResult - resultInput)})  
						<br> <b>Item Value:</b> &nbsp;&nbsp;&nbsp; - ${displayValues(valueConversion)}
						<br> <b>Discipline:</b> ${resultAttr.discipline}</span> 
						<br> <span> ${displayValues(valueResult)} </span></td> 
					<td style = "background-color: ${backgroundColor};"> ${displayValues(profit)} 
				</tr>
			`	
			runeBody.innerHTML = html;
		}
	}
	sortTableByPrice('cloth-table', 3);
	sortTableByPrice('leather-table', 3);
	sortTableByPrice('metal-table', 5)
	sortTableByPrice('wood-table', 3);

	sortTableByPrice('ascended-table', 9); 
	sortTableByPrice('bag-table', 9);
	sortTableByPrice('curio-table', 7);
	sortTableByPrice('gem-table', 9);
	sortTableByPrice('orb-table', 5);
	sortTableByPrice('misc-table',9);
	sortTableByPrice('rune-table', 9);
}

function showPrices(itemBuyorSell, resultBuyOrSell, taxChoice){
	var itemValue = document.getElementById(itemBuyorSell).value,
		resultValue = document.getElementById(resultBuyOrSell).value,
		taxValue = document.getElementById(taxChoice).value;

	if (taxValue == "85% Tax"){
		if (itemValue == "Buy Price" && resultValue == "Sell Price"){
			refinement(0, "85% Tax"); 
		} else if (itemValue == "Sell Price" && resultValue == "Sell Price"){
			refinement(1, "85% Tax");
		} else if (itemValue == "Buy Price" && resultValue == "Buy Price"){
			refinement(2, "85% Tax");
		} else if (itemValue == "Sell Price" && resultValue == "Buy Price"){
			refinement(3, "85% Tax");
		}
	} else if (taxValue == "90% Tax") {
		if (itemValue == "Buy Price" && resultValue == "Sell Price"){
			refinement(0, "90% Tax"); 
		} else if (itemValue == "Sell Price" && resultValue == "Sell Price"){
			refinement(1, "90% Tax");
		} else if (itemValue == "Buy Price" && resultValue == "Buy Price"){
			refinement(2, "90% Tax");
		} else if (itemValue == "Sell Price" && resultValue == "Buy Price"){
			refinement(3, "90% Tax");
		}
	} else if (taxValue == "No Tax") {
		if (itemValue == "Buy Price" && resultValue == "Sell Price"){
			refinement(0, "No Tax"); 
		} else if (itemValue == "Sell Price" && resultValue == "Sell Price"){
			refinement(1, "No Tax");
		} else if (itemValue == "Buy Price" && resultValue == "Buy Price"){
			refinement(2, "No Tax");
		} else if (itemValue == "Sell Price" && resultValue == "Buy Price"){
			refinement(3, "No Tax");
		}
	}
}

