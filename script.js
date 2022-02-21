// When the window resizes, adjust the height to get 100%
// This is mostly for mobile to prevent the address bar from creating random space on the bottom
window.addEventListener('resize', () => {
	// Update element's size
	let vh = window.innerHeight * 0.01;
	// Set var --vh to be the new size
	document.documentElement.style.setProperty('--vh', `${vh}px`);
})

// Display a particular benchmark on benchmark page
function revert_benchmarks(button){
	var choice = button.id,
		num = 0;

	var farmBench = document.getElementById('benchmarks'),
		metaBench = document.getElementById('meta-benchmarks'),
		chestBench = document.getElementById('chest-benchmarks'),
		altBench = document.getElementById('alt-benchmarks');

	switch (choice){
		case "farm-benchmark-button": num = 0; break;
		case "meta-benchmark-button": num = 1; break;
		case "chest-benchmark-button": num = 2; break;
		case "alt-benchmark-button": num = 3; break;
		default: num = 0; break;
	}
	switch (num){
		case 0: farmBench.style.display = "block"; metaBench.style.display = "none"; chestBench.style.display = "none"; altBench.style.display = "none"; break;
		case 1: farmBench.style.display = "none"; metaBench.style.display = "block"; chestBench.style.display = "none"; altBench.style.display = "none"; break;
		case 2: farmBench.style.display = "none"; metaBench.style.display = "none"; chestBench.style.display = "block"; altBench.style.display = "none"; break;
		case 3: farmBench.style.display = "none"; metaBench.style.display = "none"; chestBench.style.display = "none"; altBench.style.display = "block"; break;
	}
}

const api_url_map_benchmarks = 'https://script.google.com/macros/s/AKfycbwzCoaJtZVmPUO5nus0i6mLWi1CJhXPkww1NFGX/exec';
const api_shipment_gw2 = 'https://api.guildwars2.com/v2/commerce/prices?ids=19741,19745,19718,19743,19748,19739,19725,19722,19723,19724,19727,19726,19719,19728,19730,19731,19729,19732,19697,19699,19702,19700,19701,24358,24289,83757,24300,83103,24299,24341,24350,24356,24288,24277,24276,24282,24283,24294,24295,24351,24357';
const api_mist_packet_gw2 = 'https://api.guildwars2.com/v2/commerce/prices?ids=19725,46741,19730,19697,19741,46738,19722,46739,19698,19745,19723,19724,19732,19699,19718,19743,19700,19701,19702,19719,19731,19727,19748,19703,19726,46736,19729,19728,19739';
const api_magic_bundle_gw2 = 'https://api.guildwars2.com/v2/commerce/prices?ids=68063,24358,24289,76491,24305,24330,24325,75654,24300,68942,74988,76179,24370,24320,19721,37897,72315,70957,24315,72504,70842,24310,24277,24335,24283,48884,24295,24351,24357';
const api_multiplier_googlesheets = 'https://script.google.com/macros/s/AKfycbzf7PsDDNO2GHy-KIFPFjkBkPXPWm-P6zR9nt8ZN0LPtdJ1_sc/exec';

async function getPeuTrain(elem){
	const api = 'https://script.google.com/macros/s/AKfycbyJvkwmtIfvhVb4I2muUoNs5kATfp4fhMk6cMoIsmlKHmrJoeY/exec';
	const response = await fetch(api);
	const data = await response.json(); 

	var elem = document.getElementById(elem);
	let dataHTML = data.spreadsheet[0].farm;
	elem.innerHTML = dataHTML

}

async function train_timer(){
	const api = 'https://script.google.com/macros/s/AKfycbyJvkwmtIfvhVb4I2muUoNs5kATfp4fhMk6cMoIsmlKHmrJoeY/exec';
	const response = await fetch(api);
	const data = await response.json(); 

	// Date (year, month, day, hour, minute, second, milisecond)
	var newDate = new Date(Date.UTC(data.spreadsheet[7].farm, data.spreadsheet[7].days, data.spreadsheet[7].hours, data.spreadsheet[7].minutes, data.spreadsheet[7].seconds));

	var days = document.getElementById('days'),
		hours = document.getElementById('hours'),
		minutes = document.getElementById('minutes'),
		seconds = document.getElementById('seconds'),
		d_label = document.getElementById('peu-train-timer1'),
		h_label = document.getElementById('peu-train-timer2'),
		m_label = document.getElementById('peu-train-timer3'),
		s_label = document.getElementById('peu-train-timer4'),
		current_train = document.getElementById('current-train'),
		current_train_box = document.getElementById('current-train-box');

	var timer = setInterval(function(){
		var nowDate = new Date();

		var diff = newDate - nowDate;

		if (diff >= 0){
			var s = Math.floor(diff / 1000);
			var m = Math.floor(s / 60);
			var h = Math.floor(m / 60);
			var d = Math.floor(h / 24);

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
		// 900000 = 15 minutes prior start time
		// -3600000 = 1 hour after start time 
		if (diff <= 900000 && diff > 0){
			current_train_box.style.display = 'block';
			current_train.innerHTML = "Setting up squad! Join through LFG or /sqjoin Peureki.3647";
		} 
		if (diff < 0 && diff > -3600000){
			current_train_box.style.display = 'block';
			current_train.innerHTML = "Train has started! Join through LFG or /sqjoin Peureki.3647";
		} 

		if (diff <= -3600000){
			current_train_box.style.display = 'none';
			d_label.style.opacity = .2;
			h_label.style.opacity = .2;
			m_label.style.opacity = .2;
			s_label.style.opacity = .2;
		}	
	}, 1000);
}

function node_plus(obj){
	var value,
		strike,
		node_num,
		strike_num;

	switch(obj.id){
		case "button-1-row-4-col-2":
		node_num = document.getElementById('table-1-row-2-col-2'); 
		strike_num = document.getElementById('table-1-row-3-col-2');
		value = parseInt(node_num.innerHTML) + 1;
		strike = parseInt(strike_num.innerHTML) + 3;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-3":
		node_num = document.getElementById('table-1-row-2-col-3'); 
		strike_num = document.getElementById('table-1-row-3-col-3');
		value = parseInt(node_num.innerHTML) + 1;
		strike = parseInt(strike_num.innerHTML) + 3;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-4":
		node_num = document.getElementById('table-1-row-2-col-4'); 
		strike_num = document.getElementById('table-1-row-3-col-4');
		value = parseInt(node_num.innerHTML) + 1;
		strike = parseInt(strike_num.innerHTML) + 3;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-5":
		node_num = document.getElementById('table-1-row-2-col-5'); 
		strike_num = document.getElementById('table-1-row-3-col-5');
		value = parseInt(node_num.innerHTML) + 1;
		strike = parseInt(strike_num.innerHTML) + 3;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-6":
		node_num = document.getElementById('table-1-row-2-col-6'); 
		strike_num = document.getElementById('table-1-row-3-col-6');
		value = parseInt(node_num.innerHTML) + 1;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-7":
		node_num = document.getElementById('table-1-row-2-col-7'); 
		strike_num = document.getElementById('table-1-row-3-col-7');
		value = parseInt(node_num.innerHTML) + 1;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-8":
		node_num = document.getElementById('table-1-row-2-col-8'); 
		strike_num = document.getElementById('table-1-row-3-col-8');
		value = parseInt(node_num.innerHTML) + 1;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-9":
		node_num = document.getElementById('table-1-row-2-col-9'); 
		strike_num = document.getElementById('table-1-row-3-col-9');
		value = parseInt(node_num.innerHTML) + 1;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-10":
		node_num = document.getElementById('table-1-row-2-col-10'); 
		strike_num = document.getElementById('table-1-row-3-col-10');
		value = parseInt(node_num.innerHTML) + 1;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-4-col-11":
		node_num = document.getElementById('table-1-row-2-col-11'); 
		strike_num = document.getElementById('table-1-row-3-col-11');
		value = parseInt(node_num.innerHTML) + 1;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		// Next row +2 
		case "button-1-row-5-col-2":
		node_num = document.getElementById('table-1-row-2-col-2'); 
		strike_num = document.getElementById('table-1-row-3-col-2');
		value = parseInt(node_num.innerHTML) + 2;
		strike = parseInt(strike_num.innerHTML) + 6;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-3":
		node_num = document.getElementById('table-1-row-2-col-3'); 
		strike_num = document.getElementById('table-1-row-3-col-3');
		value = parseInt(node_num.innerHTML) + 2;
		strike = parseInt(strike_num.innerHTML) + 6;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-4":
		node_num = document.getElementById('table-1-row-2-col-4'); 
		strike_num = document.getElementById('table-1-row-3-col-4');
		value = parseInt(node_num.innerHTML) + 2;
		strike = parseInt(strike_num.innerHTML) + 6;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-5":
		node_num = document.getElementById('table-1-row-2-col-5'); 
		strike_num = document.getElementById('table-1-row-3-col-5');
		value = parseInt(node_num.innerHTML) + 2;
		strike = parseInt(strike_num.innerHTML) + 6;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;
		
		case "button-1-row-5-col-6":
		node_num = document.getElementById('table-1-row-2-col-6'); 
		strike_num = document.getElementById('table-1-row-3-col-6');
		value = parseInt(node_num.innerHTML) + 2;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-7":
		node_num = document.getElementById('table-1-row-2-col-7'); 
		strike_num = document.getElementById('table-1-row-3-col-7');
		value = parseInt(node_num.innerHTML) + 2;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-8":
		node_num = document.getElementById('table-1-row-2-col-8'); 
		strike_num = document.getElementById('table-1-row-3-col-8');
		value = parseInt(node_num.innerHTML) + 2;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-9":
		node_num = document.getElementById('table-1-row-2-col-9'); 
		strike_num = document.getElementById('table-1-row-3-col-9');
		value = parseInt(node_num.innerHTML) + 2;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-10":
		node_num = document.getElementById('table-1-row-2-col-10'); 
		strike_num = document.getElementById('table-1-row-3-col-10');
		value = parseInt(node_num.innerHTML) + 2;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-5-col-11":
		node_num = document.getElementById('table-1-row-2-col-11'); 
		strike_num = document.getElementById('table-1-row-3-col-11');
		value = parseInt(node_num.innerHTML) + 2;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		// Next row +3
		case "button-1-row-6-col-2":
		node_num = document.getElementById('table-1-row-2-col-2'); 
		strike_num = document.getElementById('table-1-row-3-col-2');
		value = parseInt(node_num.innerHTML) + 3;
		strike = parseInt(strike_num.innerHTML) + 9;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-3":
		node_num = document.getElementById('table-1-row-2-col-3'); 
		strike_num = document.getElementById('table-1-row-3-col-3');
		value = parseInt(node_num.innerHTML) + 3;
		strike = parseInt(strike_num.innerHTML) + 9;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-4":
		node_num = document.getElementById('table-1-row-2-col-4'); 
		strike_num = document.getElementById('table-1-row-3-col-4');
		value = parseInt(node_num.innerHTML) + 3;
		strike = parseInt(strike_num.innerHTML) + 9;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-5":
		node_num = document.getElementById('table-1-row-2-col-5'); 
		strike_num = document.getElementById('table-1-row-3-col-5');
		value = parseInt(node_num.innerHTML) + 3;
		strike = parseInt(strike_num.innerHTML) + 9;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;
		
		case "button-1-row-6-col-6":
		node_num = document.getElementById('table-1-row-2-col-6'); 
		strike_num = document.getElementById('table-1-row-3-col-6');
		value = parseInt(node_num.innerHTML) + 3;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-7":
		node_num = document.getElementById('table-1-row-2-col-7'); 
		strike_num = document.getElementById('table-1-row-3-col-7');
		value = parseInt(node_num.innerHTML) + 3;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-8":
		node_num = document.getElementById('table-1-row-2-col-8'); 
		strike_num = document.getElementById('table-1-row-3-col-8');
		value = parseInt(node_num.innerHTML) + 3;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-9":
		node_num = document.getElementById('table-1-row-2-col-9'); 
		strike_num = document.getElementById('table-1-row-3-col-9');
		value = parseInt(node_num.innerHTML) + 3;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-10":
		node_num = document.getElementById('table-1-row-2-col-10'); 
		strike_num = document.getElementById('table-1-row-3-col-10');
		value = parseInt(node_num.innerHTML) + 3;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-6-col-11":
		node_num = document.getElementById('table-1-row-2-col-11'); 
		strike_num = document.getElementById('table-1-row-3-col-11');
		value = parseInt(node_num.innerHTML) + 3;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		// Next row +4
		case "button-1-row-7-col-2":
		node_num = document.getElementById('table-1-row-2-col-2'); 
		strike_num = document.getElementById('table-1-row-3-col-2');
		value = parseInt(node_num.innerHTML) + 1;
			if (parseInt(strike_num.innerHTML) == 0){
				strike = 10;
			} else {
				strike = parseInt(strike_num.innerHTML) + 10; 
			}
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-3":
		node_num = document.getElementById('table-1-row-2-col-3'); 
		strike_num = document.getElementById('table-1-row-3-col-3');
		value = parseInt(node_num.innerHTML) + 1;
			if (parseInt(strike_num.innerHTML) == 0){
				strike = 10;
			} else {
				strike = parseInt(strike_num.innerHTML) + 10; 
			}
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-4":
		node_num = document.getElementById('table-1-row-2-col-4'); 
		strike_num = document.getElementById('table-1-row-3-col-4');
		value = parseInt(node_num.innerHTML) + 4;
		strike = parseInt(strike_num.innerHTML) + 12;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-5":
		node_num = document.getElementById('table-1-row-2-col-5'); 
		strike_num = document.getElementById('table-1-row-3-col-5');
		value = parseInt(node_num.innerHTML) + 4;
		strike = parseInt(strike_num.innerHTML) + 12;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;
		
		case "button-1-row-7-col-6":
		node_num = document.getElementById('table-1-row-2-col-6'); 
		strike_num = document.getElementById('table-1-row-3-col-6');
		value = parseInt(node_num.innerHTML) + 4;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-7":
		node_num = document.getElementById('table-1-row-2-col-7'); 
		strike_num = document.getElementById('table-1-row-3-col-7');
		value = parseInt(node_num.innerHTML) + 4;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-8":
		node_num = document.getElementById('table-1-row-2-col-8'); 
		strike_num = document.getElementById('table-1-row-3-col-8');
		value = parseInt(node_num.innerHTML) + 4;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-9":
		node_num = document.getElementById('table-1-row-2-col-9'); 
		strike_num = document.getElementById('table-1-row-3-col-9');
		value = parseInt(node_num.innerHTML) + 4;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-10":
		node_num = document.getElementById('table-1-row-2-col-10'); 
		strike_num = document.getElementById('table-1-row-3-col-10');
		value = parseInt(node_num.innerHTML) + 4;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		case "button-1-row-7-col-11":
		node_num = document.getElementById('table-1-row-2-col-11'); 
		strike_num = document.getElementById('table-1-row-3-col-11');
		value = parseInt(node_num.innerHTML) + 4;
		strike = value;
		node_num.innerHTML = value;
		strike_num.innerHTML = strike;
		break;

		// Next row 9 other +1
		case "button-1-row-10-col-2":
		node_num = document.getElementById('table-1-row-9-col-2'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-3":
		node_num = document.getElementById('table-1-row-9-col-3'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-4":
		node_num = document.getElementById('table-1-row-9-col-4'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-5":
		node_num = document.getElementById('table-1-row-9-col-5'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;
		
		case "button-1-row-10-col-6":
		node_num = document.getElementById('table-1-row-9-col-6'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-7":
		node_num = document.getElementById('table-1-row-9-col-7'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-8":
		node_num = document.getElementById('table-1-row-9-col-8'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-9":
		node_num = document.getElementById('table-1-row-9-col-9'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-10":
		node_num = document.getElementById('table-1-row-9-col-10'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;

		case "button-1-row-10-col-11":
		node_num = document.getElementById('table-1-row-9-col-11'); 
		value = parseInt(node_num.innerHTML) + 1;
		node_num.innerHTML = value;
		break;
	}
}

function calc_result(input1, input2, result){
	var input_1 = document.getElementById(input1.id).value;
	var input_2 = document.getElementById(input2.id).value;
	var result_box = input_2 - input_1;
	result.innerHTML = result_box;

}



async function getShipments(table, image){
	//Get API from GW2 of all possible shipment drops
	const response_shipment_gw2 = await fetch(api_shipment_gw2);
	const shipment_gw2 = await response_shipment_gw2.json();
	//Get API from GW2 of all possible mist-warped packets 
	const response_mist_packet_gw2 = await fetch(api_mist_packet_gw2);
	const mist_packet_gw2 = await response_mist_packet_gw2.json();
	//Get API from GW2 of all possible magic-warped bundles
	const response_magic_bundle_gw2 = await fetch(api_magic_bundle_gw2);
	const magic_bundle_gw2 = await response_magic_bundle_gw2.json();
	//Get API from my spreadsheet of all multipliers
	const response_shipment_goolgesheets = await fetch(api_multiplier_googlesheets);
	const multiplier_googlesheets = await response_shipment_goolgesheets.json();

	var myTable = document.getElementById(table);
	var loading_image = document.getElementById(image);

	myTable.style.opacity = 1; 
	loading_image.style.display = 'none';

	// Volatile Magic
	// 0, 6 = Cloth shipment 
	// 6, 12 = Wood shipment
	// 12, 18 = Leather shipment
	// 18, 23 = Metal shipment
	// 23, 44 = Trophy shipment
	let cloth_shipment_array = shipment_gw2.slice(0,6);
	let wood_shipment_array = shipment_gw2.slice(6,12);
	let leather_shipment_array = shipment_gw2.slice(12,18);
	let metal_shipment_array = shipment_gw2.slice(18,23);
	let trophy_shipment_array = shipment_gw2.slice(23,44);

	// Slice - Unbound Magic
	let eb_mist_packet_array = mist_packet_gw2.slice(0,29);
	let eb_magic_bundle_array = magic_bundle_gw2.slice(0,29);

	var subtotal_cloth_shipment = 0, 
		subtotal_wood_shipment = 0,
		subtotal_leather_shipment = 0,
		subtotal_metal_shipment = 0,
		subtotal_trophy_shipment = 0,
		shipment_fee = 10000, //Liquid gold cost for shipments
		subtotal_eb_mist_packet = 0,
		subtotal_eb_magic_bundle = 0,
		eb_packet_fee = 5000, //Liquid gold cost for EB packets
		eb_bundle_fee = 4000, //Liquid gold cost for EB bundles
		individual_totals = 0;

	// Table from HTML that this is going to go to	
	const tableBody = document.getElementById('currencyData');
	// Empty table that will get filled in
	let dataHTML = '';

	// Unbound Magic
	// 42-70 - Mist-Warped Packet
	// 72-100 - Magic-Warped Bundle 
	var mist_packet_length = 29,
		magic_bundle_length = 20;

	// Main loop: Going through the mulipliers from the spreadsheet
	// Secondary loop: Going through each of the GW2 API 
	// Goal: When the IDs match, find the individual totals of each item from each shipment to find out
	//       the subtotal (how much you'll make by the shipment itself)
	// Tax is included 

	//41 = Range of 0-41 = Range of shipment multipliers from spreadsheet
	//74 = Range of 42-74 = Range of EB mist packet multipliers from spreadsheet
	//104 = Range of 72-104 = Range of EB magic bundle multipliers from spreadsheet
	for (i = 0; i < 41; i++){
		for(j = 0; j < cloth_shipment_array.length; j++){
			if (multiplier_googlesheets.data[i].id == cloth_shipment_array[j].id){
				individual_totals = (multiplier_googlesheets.data[i].multiplier * cloth_shipment_array[j].sells.unit_price)*.85;
				subtotal_cloth_shipment = subtotal_cloth_shipment + individual_totals;
			}
		} 
		for(j = 0; j < wood_shipment_array.length; j++){
			if (multiplier_googlesheets.data[i].id == wood_shipment_array[j].id){
				individual_totals = (multiplier_googlesheets.data[i].multiplier * wood_shipment_array[j].sells.unit_price)*.85;
				subtotal_wood_shipment = subtotal_wood_shipment + individual_totals;
			}
		} 
		for(j = 0; j < leather_shipment_array.length; j++){
			if (multiplier_googlesheets.data[i].id == leather_shipment_array[j].id){
				individual_totals = (multiplier_googlesheets.data[i].multiplier * leather_shipment_array[j].sells.unit_price)*.85;
				subtotal_leather_shipment = subtotal_leather_shipment + individual_totals;
			}
		} 
		for(j = 0; j < metal_shipment_array.length; j++){
			if (multiplier_googlesheets.data[i].id == metal_shipment_array[j].id){
				individual_totals = (multiplier_googlesheets.data[i].multiplier * metal_shipment_array[j].sells.unit_price)*.85;
				subtotal_metal_shipment = subtotal_metal_shipment + individual_totals;
			}
		}
		for(j = 0; j < trophy_shipment_array.length; j++){
			if (multiplier_googlesheets.data[i].id == trophy_shipment_array[j].id){
				individual_totals = (multiplier_googlesheets.data[i].multiplier * trophy_shipment_array[j].sells.unit_price)*.85;
				subtotal_trophy_shipment = subtotal_trophy_shipment + individual_totals;
			}
		} 	
	}

	//Unbound Magic 
	for (i = 42; i < 74; i++){
		for(j = 0; j < eb_mist_packet_array.length; j++){
			if (multiplier_googlesheets.data[i].id == eb_mist_packet_array[j].id){
			    individual_totals = (multiplier_googlesheets.data[i].multiplier * eb_mist_packet_array[j].sells.unit_price)*.85;
				subtotal_eb_mist_packet = subtotal_eb_mist_packet + individual_totals;
			}
		} 
	}
	for (i = 72; i < 101; i++){
		for(j = 0; j < eb_magic_bundle_array.length; j++){
			if (multiplier_googlesheets.data[i].id == eb_magic_bundle_array[j].id){
				individual_totals = (multiplier_googlesheets.data[i].multiplier * eb_magic_bundle_array[j].sells.unit_price)*.85;
				subtotal_eb_magic_bundle = subtotal_eb_magic_bundle + individual_totals;
			} 
		}
	}

	// Find the total profit/loss of each shipment with the fee of 1 gold 
	total_cloth_shipment = Math.trunc(subtotal_cloth_shipment - shipment_fee);
	total_wood_shipment = Math.trunc(subtotal_wood_shipment - shipment_fee);
	total_leather_shipment = Math.trunc(subtotal_leather_shipment - shipment_fee);
	total_metal_shipment = Math.trunc(subtotal_metal_shipment - shipment_fee); 
	total_trophy_shipment = Math.trunc(subtotal_trophy_shipment - shipment_fee);

	// Find the total profit/loss of each shipment per Volatile Magic
	total_cloth_shipment_per_vm = Math.trunc(total_cloth_shipment / 250);
	total_wood_shipment_per_vm = Math.trunc(total_wood_shipment / 250);
	total_leather_shipment_per_vm = Math.trunc(total_leather_shipment / 250);
	total_metal_shipment_per_vm = Math.trunc(total_metal_shipment / 250);
	total_trophy_shipment_per_vm = Math.trunc(total_trophy_shipment / 250); 

	// Arrays to easily go through when making the table
	let shipment_name_array = ["Cloth Shipment", "Wood Shipment", "Leather Shipment", "Metal Shipment", "Trophy Shipment"];
	let total_per_vm_array = [total_cloth_shipment_per_vm, total_wood_shipment_per_vm, total_leather_shipment_per_vm, total_metal_shipment_per_vm, total_trophy_shipment_per_vm];
	let total_per_shipment_array = [total_cloth_shipment, total_wood_shipment, total_leather_shipment, total_metal_shipment, total_trophy_shipment];

	// Goal: Spliting the numbers into 3 sections: Gold, Silver, Copper and finding their negative/positive values
	// Most of this for-loop is derived from GW2Lunchbox @ https://gw2lunchbox.com/IstanShipments.php. 
	// C#802020it goes to them 
	for (i = 0; i < total_per_shipment_array.length; i++){

		var amount = total_per_shipment_array[i];
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);
			copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png">`;
			if (copper == 100){
				copper = 0;
				amount++;
			}
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount > 0){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${gold*-1} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${silver*-1}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${copper*-1} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png">`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 
		dataHTML += `
	<tr> 
		<td> ${shipment_name_array[i]} </td>
		<td> ${total_per_vm_array[i]} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png"></td> 
		<td> ${goldHTML}${silverHTML}${copperHTML} </td>
	</tr>`;
	}
	tableBody.innerHTML = dataHTML; 

	//New header before the next loop
	dataHTML += `
	<tr> 
		<th> Packet/Bundle </th>
		<th> Worth Per 1 UM </th>
		<th> Worth per Packet/Bundle </th>
	</tr>`;

	// Find the total profit/loss of each packet and bundle
	total_eb_mist_packet = Math.trunc(subtotal_eb_mist_packet - eb_packet_fee);
	total_eb_magic_bundle = Math.trunc(subtotal_eb_magic_bundle - eb_bundle_fee);

	// Find the total profit/loss of each packet and bundle
	// 250 = unbound magic cost for EB mist packets
	// 1250 = unbound magic cost for EB magic bundles
	total_eb_mist_packet_per_um = Math.trunc(total_eb_mist_packet / 250);
	total_eb_magic_bundle_per_um = Math.trunc(total_eb_magic_bundle / 1250);

	// Arrays to easily go through when making the table
	let unbound_name_array = ["Mist-Warped Packet","Magic-Warped Bundle"];
	let total_per_um_array = [total_eb_mist_packet_per_um, total_eb_magic_bundle_per_um];
	let total_per_unbound_array = [total_eb_mist_packet, total_eb_magic_bundle];

	// Goal: Spliting the numbers into 3 sections: Gold, Silver, Copper and finding their negative/positive values
	// Most of this for-loop is derived from GW2Lunchbox @ https://gw2lunchbox.com/IstanShipments.php. 
	// C#802020it goes to them 
	for (i = 0; i < total_per_unbound_array.length; i++){

		var amount = total_per_unbound_array[i];
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);
			copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png">`;
			if (copper == 100){
				copper = 0;
				amount++;
			}
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount > 0){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${gold*-1} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${silver*-1}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${copper*-1} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png">`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 
		dataHTML += `
	<tr> 
		<td> ${unbound_name_array[i]} </td>
		<td> ${total_per_um_array[i]} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png"></td> 
		<td> ${goldHTML}${silverHTML}${copperHTML} </td>
	</tr>`;
	}
	tableBody.innerHTML = dataHTML; 
	//sortTableByPrice('shipments', 2);
}

// Grabs all the benchmarks from the main Google Spreadsheet: 
// Specifically gathering 
async function getGatheringBenchmarkAll(table, image){

	//Grabs the JSON URL file from the Google App Script 
	const response = await fetch(api_url_map_benchmarks);
	const data = await response.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('tableData');
	var tableName = document.getElementById(table);
	var loading_image = document.getElementById(image);

	tableName.style.opacity = 1;
	loading_image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	var count = 0;
	//Loop through all of the named benchmarks until there's an empy cell in the spreadsheet
	//Places those data into the empty data table
	for (i = 0; i < data.spreadsheet.length; i++){
		if (data.spreadsheet[i].farmtype == "G"){

			const unboundmagic = Math.floor(data.spreadsheet[i].unboundmagic);
			const volatilemagic = Math.floor(data.spreadsheet[i].volatilemagic);

			var time = Math.floor(data.spreadsheet[i].time), 
				hours = Math.floor(time / 100),
				minutes = time % 100; 

			if (minutes < 10){
				minutes = "0" + minutes; 
			}

			time = hours + ":" + minutes;

			var amount = Math.floor(data.spreadsheet[i].gold);
			var negative = false; 
			var negative_symbol = '';
			var gold = 0;
			var silver = 0;
			var copper = 0;
			var copperHTML = ``;
			var silverHTML = ``;
			var goldHTML = ``;

			if (amount < 0){
				amount = amount * -1; 
				negative = true;
			}

			if (amount > 0){ 
				copper = (amount % 100);
				amount = Math.floor(amount/100);

				if (copper >= 10){
					copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
				} else {
					copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
				}
				if (copper == 100){
					copper = 0;
					amount++;
				} 
			}
			if (amount > 0){
				silver = amount % 100; 
				amount = Math.floor(amount / 100);

				if (silver >= 10){
					silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
				} else {
					silverHTML = " 0"+`${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
				}
				if (silver == 100){
					silver = 0;
					amount++;
				}
			}
			if (amount >= 10){
				gold = amount;
				goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
			} else {
				gold = amount;
				goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
			}

			if (negative == true){
				negative_symbol = ' -';
				if (gold > 0){
					goldHTML = `${negative_symbol}${goldHTML}`;
				} else {
					goldHTML = ``;
					if (silver > 0){
						silverHTML = `${negative_symbol}${silverHTML}`;
					} else {
						silverHTML = ``;
						if (copper > 0){
							copperHTML = `${negative_symbol}${copperHTML}`;
						} else {
							copperHTML = ``;
						} 
					}
				} 
			} 

			var link = '';

			switch (data.spreadsheet[i].map){
				case "Bjora Marches Node Farm (B/V/V)":
				link = "./maps/bjora-marches.php";
				break;

				case "Bjora Marches Node Farm (w/ Volatile)":
				link = "./maps/bjora-marches.php";
				break;

				case "Dgehaunt Node Farm (w/ Volatile)":
				link = "./gathering/drgehaunt-node-farm.php";
				break;

				case "Flax Farm (w/ Volatile)":
				link = "./gathering/flax-farm.php";
				break;

				case "Lake Doric Node Farm (w/ Volatile)":
				link = "./maps/lake-doric.php#node-farm";
				break;

				case "Orr Node Farm (w/ Volatile)":
				link = "./gathering/orr-node-farm.php";
				break;

				case "Rich Node Farm (w/ Volatile)":
				link = "./gathering/rich-node-farm.php";
				break;

				case "Sandswept Node Farm (w/ Volatile)":
				link = "./maps/sandswept-isles.php#node-farm";
				break;

				case "Siren's Landing Node Farm (w/ Volatile)":
				link = "./maps/sirens-landing.php#node-farm";
				break;

				case "Sparkfly Fen Node Farm (w/ Volatile)":
				link = "./gathering/sparkfly-fen-node-farm.php";
				break;

				case "Timberline Node Farm (w/ Volatile)":
				link = "./gathering/timberline-falls-node-farm.php";
				break;

				case "Winterberry Farm (w/ Volatile)":
				link = "./maps/bitterfrost-frontier.php#nodes";
				break;
			}

		
			dataHTML += `<tr>
			<td onclick = "location.href = '${link}'">${data.spreadsheet[i].map}</td>
			<td>${time}</td>
			<td>${goldHTML}${silverHTML}${copperHTML}</td>
			<td>${unboundmagic}</td>
			<td>${volatilemagic}</td>
			</tr>`;

		} else if (data.spreadsheet[i].farmtype == ""){
			break;
		}
	}
	//Magic
	tableBody.innerHTML = dataHTML;
	sortTableByGPH('benchmarks',2);
}

function closeBox(div){
	div.parentNode.style.display = "none";
}

function infoBox(td){
	var mapName = td.parentNode.getElementsByTagName('td')[2].innerHTML;
	var info = document.getElementById('info-box');
	info.style.display = "block";

	var altBox = info.children[1].children;
	function removeAltBoxes(){
		for (i = 0; i < altBox.length; i++){
			altBox[i].style.display = "none";
		}
	}
	removeAltBoxes();
	switch (mapName){
		case "Bitterfrost Frontier": document.getElementById('alt-bitterfrost').style.display = "block"; break;
		case "Bjora Marches": document.getElementById('alt-bjora').style.display = "block"; break;
		case "Blazeridge Steppes": document.getElementById('alt-blazeridge').style.display = "block"; break;
		case "Bloodtide Coast": document.getElementById('alt-bloodtide').style.display = "block"; break;
		case "Brisband Wildlands": document.getElementById('alt-brisband').style.display = "block"; break;
		case "Caledon Forest": document.getElementById('alt-caledon').style.display = "block"; break;
		case "Crystal Oasis": document.getElementById('alt-crystal').style.display = "block"; break;
		case "Desert Highlands": document.getElementById('alt-desert').style.display = "block"; break;
		case "Desolation": document.getElementById('alt-desolation').style.display = "block"; break;
		case "Diessa Plateau": document.getElementById('alt-diessa').style.display = "block"; break;
		case "Domain of Kourna": document.getElementById('alt-kourna').style.display = "block"; break;
		case "Domain of Vabbi": document.getElementById('alt-vabbi').style.display = "block"; break;
		case "Draconis Mons": document.getElementById('alt-draconis').style.display = "block"; break;
		case "Dredgehaunt Cliffs": document.getElementById('alt-dredgehaunt').style.display = "block"; break;
		case "Drizzlewood Coast": document.getElementById('alt-drizzlewood').style.display = "block"; break;
		case "Dry Top": document.getElementById('alt-drytop').style.display = "block"; break;
		case "Ember Bay": document.getElementById('alt-ember').style.display = "block"; break;
		case "Field of Ruins": document.getElementById('alt-field').style.display = "block"; break;
		case "Fireheart Rise": document.getElementById('alt-fireheart').style.display = "block"; break;
		case "Frostgorge Sound": document.getElementById('alt-frostgorge').style.display = "block"; break;
		case "Gendarran Fields": document.getElementById('alt-gendarran').style.display = "block"; break;
		case "Harathi Hinterlands": document.getElementById('alt-harathi').style.display = "block"; break;
		case "Iron Marches": document.getElementById('alt-iron').style.display = "block"; break;
		case "Kessex Hills": document.getElementById('alt-kessex').style.display = "block"; break;
		case "Lion's Arch": document.getElementById('alt-lions').style.display = "block"; break;
		case "Lornar's Pass": document.getElementById('alt-lornars').style.display = "block"; break;
		case "Malchor's Leap": document.getElementById('alt-malchors').style.display = "block"; break;
		case "Metrica Province": document.getElementById('alt-metrica').style.display = "block"; break;
		case "Mount Maelstrom": document.getElementById('alt-mount').style.display = "block"; break;
		case "Plains of Ashford": document.getElementById('alt-plains').style.display = "block"; break;
		case "Queensdale": document.getElementById('alt-queensdale').style.display = "block"; break;
		case "Sandswept Isles": document.getElementById('alt-sandswept').style.display = "block"; break;
		case "Siren's Landing": document.getElementById('alt-sirens').style.display = "block"; break;
		case "Snowden Drifts": document.getElementById('alt-snowden').style.display = "block"; break;
		case "Straits of Devestation": document.getElementById('alt-straits').style.display = "block"; break;
		case "Tangled Depths": document.getElementById('alt-tangled').style.display = "block"; break;
		case "Thunderhead Peaks": document.getElementById('alt-thunderhead').style.display = "block"; break;
		case "Timberline Falls": document.getElementById('alt-timber').style.display = "block"; break;
		case "Variety": document.getElementById('alt-variety').style.display = "block"; break;
		case "Verdant Brink": document.getElementById('alt-verdant').style.display = "block"; break;
	}
}

async function getBenchmark(table, name, name2, name3, name4, name5, name6){

	//Grabs the JSON URL file from the Google App Script 
	const response = await fetch(api_url_map_benchmarks);
	const data = await response.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById(table);

	//Empty data table
	let dataHTML = '';

	//Loop through all of the named benchmarks until there's an empy cell in the spreadsheet
	//Places those data into the empty data table
	for (i = 0; i < data.spreadsheet.length; i++){
		if (data.spreadsheet[i].farmtype != "" 
			&& data.spreadsheet[i].map == name 
			|| data.spreadsheet[i].map == name2
			|| data.spreadsheet[i].map == name3
			|| data.spreadsheet[i].map == name4
			|| data.spreadsheet[i].map == name5
			|| data.spreadsheet[i].map == name6){

			var background_color = "";

			switch(data.spreadsheet[i].farmtype){

				case "R":
				data.spreadsheet[i].farmtype = "Repeatable";
				background_color = "#4ccd38";
				break;

				case "D":
				data.spreadsheet[i].farmtype = "Daily";
				background_color = "#84F473";
				break;

				case "G":
				data.spreadsheet[i].farmtype = "Gathering";
				background_color = "#fab52a";
				break;

				case "S":
				data.spreadsheet[i].farmtype = "Solo";
				background_color = "#1f8ce7";
				break;
			}
			const goldValue_second_digit = Math.floor((data.spreadsheet[i].gold / Math.pow(10, 6-1)) % 10); 
			const goldValue_first_digit = Math.floor((data.spreadsheet[i].gold / Math.pow(10, 5-1)) % 10); 
			const silverValue_second_digit = Math.floor((data.spreadsheet[i].gold / Math.pow(10, 4-1)) % 10); 
			const silverValue_first_digit = Math.floor((data.spreadsheet[i].gold / Math.pow(10, 3-1)) % 10);
			const copperValue_second_digit = Math.floor((data.spreadsheet[i].gold / Math.pow(10, 2-1)) % 10); 
			const copperValue_first_digit = Math.floor((data.spreadsheet[i].gold / Math.pow(10, 1-1)) % 10);
		
			dataHTML += `
			<tr>
				<td style = "background-color:${background_color}">${data.spreadsheet[i].farmtype}</td>
				<td> ${data.spreadsheet[i].map} </td>
				<td>
					${goldValue_second_digit}${goldValue_first_digit} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">
					${silverValue_second_digit}${silverValue_first_digit} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">
					${copperValue_second_digit}${copperValue_first_digit} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png">
				</td>
			</tr>`;
		} 
	}
	//Magic
	tableBody.innerHTML = dataHTML;
}

async function getGatheringBenchmark(table, name, name2, name3, name4, name5, name6){

	//Grabs the JSON URL file from the Google App Script 
	const response = await fetch(api_url_map_benchmarks);
	const data = await response.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById(table);

	//Empty data table
	let dataHTML = '';

	//Loop through all of the named benchmarks until there's an empy cell in the spreadsheet
	//Places those data into the empty data table
	for (i = 0; i < data.spreadsheet.length; i++){
		if (data.spreadsheet[i].farmtype != "" 
			&& data.spreadsheet[i].map == name 
			|| data.spreadsheet[i].map == name2
			|| data.spreadsheet[i].map == name3
			|| data.spreadsheet[i].map == name4
			|| data.spreadsheet[i].map == name5
			|| data.spreadsheet[i].map == name6){

			var background_color = "";

			const farm = data.spreadsheet[i].map;
			const unbound_magic = Math.round(data.spreadsheet[i].unboundmagic);
			const volatile_magic = Math.round(data.spreadsheet[i].volatilemagic);
		
			var amount = Math.floor(data.spreadsheet[i].gold);
			var negative = false; 
			var negative_symbol = '';
			var gold = 0;
			var silver = 0;
			var copper = 0;
			var copperHTML = ``;
			var silverHTML = ``;
			var goldHTML = ``;

			var time = Math.floor(data.spreadsheet[i].time), 
				hours = Math.floor(time / 100),
				minutes = time % 100; 

			if (minutes < 10){
				minutes = "0" + minutes; 
			}

			time = hours + ":" + minutes;

			if (amount < 0){
				amount = amount * -1; 
				negative = true;
			}

			if (amount > 0){ 
				copper = (amount % 100);
				amount = Math.floor(amount/100);

				if (copper >= 10){
					copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				}
				if (copper == 100){
					copper = 0;
					amount++;
				} 
			}
			if (amount > 0){
				silver = amount % 100; 
				amount = Math.floor(amount / 100);

				if (silver >= 10){
					silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML = " 0"+`${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver == 100){
					silver = 0;
					amount++;
				}
			}
			if (amount >= 10){
				gold = amount;
				goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			} else {
				gold = amount;
				goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			}

			if (negative == true){
				negative_symbol = ' -';
				if (gold > 0){
					goldHTML = `${negative_symbol}${goldHTML}`;
				} else {
					goldHTML = ``;
					if (silver > 0){
						silverHTML = `${negative_symbol}${silverHTML}`;
					} else {
						silverHTML = ``;
						if (copper > 0){
							copperHTML = `${negative_symbol}${copperHTML}`;
						} else {
							copperHTML = ``;
						} 
					}
				} 
			} 
		
			dataHTML += `
			<tr>
				<td> ${farm} </td>
				<td>
					${goldHTML}${silverHTML}${copperHTML}
				</td>
				<td> ${time} </td>
				<td> ${unbound_magic} </td>
				<td> ${volatile_magic}</td>
			</tr>`;
		} 
	}
	//Magic
	tableBody.innerHTML = dataHTML;
}

// Grabs from GW2 api of ores
async function getOres(table){

	//Grabs the JSON URL file from GW2
	const api_ores_gw2 = 'https://api.guildwars2.com/v2/commerce/prices?ids=19697,19703,19698,19699,19702,19700,19701';
	const response = await fetch(api_ores_gw2);
	const data = await response.json();

	const api_ores_info = 'https://api.guildwars2.com/v2/items?ids=19697,19703,19698,19699,19702,19700,19701';
	const response_info = await fetch(api_ores_info);
	const data_info = await response_info.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('oreData');
	var tableName = document.getElementById(table);

	tableName.style.opacity = 1;

	//Empty data table
	let dataHTML = '';


	for (i = 0; i < data.length; i++){
		var data_icon = data_info[i].icon;
		var data_name = data_info[i].name;

		var amount = Math.floor(data[i].sells.unit_price);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 


		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${data_icon}> </td>
			<td> ${data_name} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('ores',2);

}

// Grabs from GW2 api of woods
async function getWoods(table){

	//Grabs the JSON URL file from GW2
	const api = 'https://api.guildwars2.com/v2/commerce/prices?ids=19723,19726,19727,19724,19722,19725';
	const response = await fetch(api);
	const data = await response.json();

	const api_info = 'https://api.guildwars2.com/v2/items?ids=19723,19726,19727,19724,19722,19725';
	const response_info = await fetch(api_info);
	const data_info = await response_info.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('woodData');
	var tableName = document.getElementById(table);

	tableName.style.opacity = 1;

	//Empty data table
	let dataHTML = '';


	for (i = 0; i < data.length; i++){
		var data_icon = data_info[i].icon;
		var data_name = data_info[i].name;

		var amount = Math.floor(data[i].sells.unit_price);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 


		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${data_icon}> </td>
			<td> ${data_name} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('woods',2);
}

// Grabs from GW2 api of plants/other nodes
async function getPlants(table, image){

	//Grabs the JSON URL file from GW2
	const api = 'https://api.guildwars2.com/v2/commerce/prices?ids=12512,12505,12247,12161,12236,12537,12255,12511,12134,73113,12504,12331,12258,12327,12534,12531,,12336,12143,12544,12341,12533,82866,12332,12532,12163,12238,12333,12508,12546,12510,12536,12147,74266,66524,12128,12142,12244,12545,81837,12246,12507,37907,36731,73096,12334,12135,66522,12254,12335,12535,12547,12243,73504,12509,12342,12144,12241,12253,12538,12506,12248,12162,12234,12250,12329,12330';
	const response = await fetch(api);
	const data = await response.json();

	const api_info = 'https://api.guildwars2.com/v2/items?ids=12512,12505,12247,12161,12236,12537,12255,12511,12134,73113,12504,12331,12258,12327,12534,12531,,12336,12143,12544,12341,12533,82866,12332,12532,12163,12238,12333,12508,12546,12510,12536,12147,74266,66524,12128,12142,12244,12545,81837,12246,12507,37907,36731,73096,12334,12135,66522,12254,12335,12535,12547,12243,73504,12509,12342,12144,12241,12253,12538,12506,12248,12162,12234,12250,12329,12330';
	const response_info = await fetch(api_info);
	const data_info = await response_info.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('plantData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';


	for (i = 0; i < data.length; i++){
		var data_icon = data_info[i].icon;
		var data_name = data_info[i].name;

		var amount = Math.floor(data[i].sells.unit_price);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 


		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${data_icon}> </td>
			<td> ${data_name} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('plants',2);
}
// Grabs from GW2 api of herbs
async function getHerbs(table){

	//Grabs the JSON URL file from GW2
	const api = 'https://api.guildwars2.com/v2/commerce/prices?ids=91692,91768,91731,91699,91850';
	const response = await fetch(api);
	const data = await response.json();

	const api_info = 'https://api.guildwars2.com/v2/items?ids=91692,91768,91731,91699,91850';
	const response_info = await fetch(api_info);
	const data_info = await response_info.json();

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('herbData');
	var tableName = document.getElementById(table);

	tableName.style.opacity = 1;

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < data.length; i++){
		var data_icon = data_info[i].icon;
		var data_name = data_info[i].name;

		var amount = Math.floor(data[i].sells.unit_price);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 


		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${data_icon}> </td>
			<td> ${data_name} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('herbs',2);
}
// Price of ore nodes as a whole
async function getOreNodes(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use Ore node data
	let nodes = data.spreadsheet.slice(0,8);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('oreNodeData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < nodes.length; i++){

		var amount = Math.floor(nodes[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		switch (nodes[i].item){
			case "Copper Ore":
			pic = "./images/assets/nodes/Copper_Ore.png"; 
			break;

			case "Silver Ore":
			pic = "./images/assets/nodes/Silver_Ore.png";
			break;

			case "Gold Ore":
			pic = "./images/assets/nodes/Gold_Ore.png";
			break; 

			case "Iron Ore (Level <= 25 Zone)":
			pic = "./images/assets/nodes/Iron_Ore.png";
			break; 

			case "Iron Ore (Level > 25 Zone)":
			pic = "./images/assets/nodes/Iron_Ore.png";
			break;

			case "Platinum Ore":
			pic = "./images/assets/nodes/Platinum_Ore.png";
			break;

			case "Mithril Ore":
			pic = "./images/assets/nodes/Mithril_Ore.png";
			break;

			case "Orichalcum Ore":
			pic = "./images/assets/nodes/Orichalcum_Ore.png";
			break;
		}

		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${pic}></td>
			<td> ${nodes[i].item} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('oreNodes',2);
}

// Price of wood nodes as a whole
async function getWoodNodes(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use wood node data
	let nodes = data.spreadsheet.slice(9,30);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('woodNodeData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < nodes.length; i++){

		var amount = Math.floor(nodes[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		switch (nodes[i].item){
			case "Ancient Sapling":
			pic = "./images/assets/nodes/Ancient_Wood_Log.png"; 
			break;

			case "Aspen Sapling":
			pic = "./images/assets/nodes/Green_Wood_Log.png";
			break;

			case "Banyan Sapling":
			pic = "./images/assets/nodes/Hard_Wood_Log.png";
			break; 

			case "Baoba Sapling (Non-Maguuma)":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break; 

			case "Baoba Sapling (Maguuma Jungle)":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break; 

			case "Cypress Sapling (Non-Maguuma Jungle, Non-Shiverpeaks)":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break;

			case "Cypress Sapling (Maguuma Wastes)":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break;  

			case "Cypress Sapling (Shiverpeaks)":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break; 

			case "Ekku Sapling":
			pic = "./images/assets/nodes/Green_Wood_Log.png";
			break;

			case "Fir Sapling":
			pic = "./images/assets/nodes/Seasoned_Wood_Log.png";
			break;

			case "Gummo Sapling":
			pic = "./images/assets/nodes/Soft_Wood_Log.png";
			break;

			case "Inglewood Sapling":
			pic = "./images/assets/nodes/Hard_Wood_Log.png";
			break; 

			case "Kertch Sapling":
			pic = "./images/assets/nodes/Green_Wood_Log.png";
			break;

			case "Mebahya Sapling":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break; 

			case "Mimosa Sapling":
			pic = "./images/assets/nodes/Soft_Wood_Log.png";
			break;

			case "Orrian Sapling":
			pic = "./images/assets/nodes/Ancient_Wood_Log.png"; 
			break;

			case "Palm Sapling":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break; 

			case "Pine Sapling":
			pic = "./images/assets/nodes/Hard_Wood_Log.png";
			break;

			case "Red Oak Sapling":
			pic = "./images/assets/nodes/Elder_Wood_Log.png";
			break; 

			case "Snow Cherry Sapling":
			pic = "./images/assets/nodes/Soft_Wood_Log.png";
			break;

			case "Tukawa Sapling":
			pic = "./images/assets/nodes/Seasoned_Wood_Log.png";
			break;
		}

		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${pic} ></td>
			<td> ${nodes[i].item} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('woodNodes',2);
}
// Price of plant nodes as a whole
async function getPlantNodes(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use wood node data
	let nodes = data.spreadsheet.slice(31,77);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('plantNodeData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < nodes.length; i++){

		var amount = Math.floor(nodes[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		switch (nodes[i].item){
			case "Artichoke":
			pic = "./images/assets/nodes/Artichoke.png"; 
			break;

			case "Asparagus":
			pic = "./images/assets/nodes/Asparagus_Spear.png"; 
			break;

			case "Black Crocus":
			pic = "./images/assets/nodes/Saffron_Thread.png"; 
			break;

			case "Blackberry":
			pic = "./images/assets/nodes/Blackberry.png"; 
			break;

			case "Blooming Passiflora":
			pic = "./images/assets/nodes/Passion_Flower.png"; 
			break;

			case "Blueberry":
			pic = "./images/assets/nodes/Blueberry.png"; 
			break;

			case "Butternut Squash":
			pic = "./images/assets/nodes/Butternut_Squash.png"; 
			break;

			case "Button Mushroom":
			pic = "./images/assets/nodes/Mushroom.png"; 
			break;

			case "Cabbage":
			pic = "./images/assets/nodes/Head_of_Cabbage.png"; 
			break;

			case "Cactus":
			pic = "./images/assets/nodes/Nopal.png"; 
			break;

			case "Carrot":
			pic = "./images/assets/nodes/Carrot.png"; 
			break;

			case "Cauliflower":
			pic = "./images/assets/nodes/Head_of_Cauliflower.png"; 
			break;

			case "Cayenne Pepper":
			pic = "./images/assets/nodes/Cayenne_Pepper.png"; 
			break;

			case "Clam":
			pic = "./images/assets/nodes/Clam.png"; 
			break;

			case "Coral (Level 80 Zone)":
			pic = "./images/assets/nodes/Coral_Orb.png"; 
			break;

			case "Desert Vegetable":
			pic = "./images/assets/nodes/Cassava_Root.png"; 
			break;

			case "Flax":
			pic = "./images/assets/nodes/Pile_of_Flax_Seeds.png"; 
			break;

			case "Ghost Pepper":
			pic = "./images/assets/nodes/Ghost_Pepper.png"; 
			break;

			case "Grape":
			pic = "./images/assets/nodes/Grape.png"; 
			break;

			case "Jungle Plant":
			pic = "./images/assets/nodes/Cassava_Root.png"; 
			break;

			case "Kale":
			pic = "./images/assets/nodes/Kale_Leaf.png"; 
			break;

			case "Leek":
			pic = "./images/assets/nodes/Leek.png"; 
			break;

			case "Ghost Pepper":
			pic = "./images/assets/nodes/Ghost_Pepper.png"; 
			break;

			case "Lentil":
			pic = "./images/assets/nodes/Handful_of_Red_Lentils.png"; 
			break;

			case "Lettuce":
			pic = "./images/assets/nodes/Head_of_Lettuce.png"; 
			break;

			case "Lotus Root":
			pic = "./images/assets/nodes/Lotus_Root.png"; 
			break;

			case "Mussel":
			pic = "./images/assets/nodes/Mussel.png"; 
			break;

			case "Omnomberry":
			pic = "./images/assets/nodes/Omnomberry.png"; 
			break;

			case "Onion":
			pic = "./images/assets/nodes/Onion.png"; 
			break;

			case "Orrian Truffle":
			pic = "./images/assets/nodes/Orrian_Truffle.png"; 
			break;

			case "Passiflora":
			pic = "./images/assets/nodes/Passion_Fruit.png"; 
			break;

			case "Portobello Mushroom":
			pic = "./images/assets/nodes/Portobello_Mushroom.png"; 
			break;

			case "Potato":
			pic = "./images/assets/nodes/Potato.png"; 
			break;

			case "Raspberry":
			pic = "./images/assets/nodes/Raspberry.png"; 
			break;

			case "Root Vegetable":
			pic = "./images/assets/nodes/Beet.png"; 
			break;

			case "Sawgill Mushroom":
			pic = "./images/assets/nodes/Sawgill_Mushroom.png"; 
			break;

			case "Scallion":
			pic = "./images/assets/nodes/Green_Onion.png"; 
			break;

			case "Seaweed":
			pic = "./images/assets/nodes/Seaweed.png"; 
			break;

			case "Snow Truffle":
			pic = "./images/assets/nodes/Snow_Truffle.png"; 
			break;

			case "Spinach":
			pic = "./images/assets/nodes/Spinach_Leaf.png"; 
			break;

			case "Sugar Pumpkin":
			pic = "./images/assets/nodes/Sugar_Pumpkin.png"; 
			break;

			case "Taproot":
			pic = "./images/assets/nodes/Beet.png"; 
			break;

			case "Varied Mushroom":
			pic = "./images/assets/nodes/Mushroom.png"; 
			break;

			case "Varietgated Taproot":
			pic = "./images/assets/nodes/Carrot.png"; 
			break;

			case "Winter Root Vegetable":
			pic = "./images/assets/nodes/Parsnip.png"; 
			break;

			case "Zucchini":
			pic = "./images/assets/nodes/Zucchini.png"; 
			break;
			
		}

		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${pic} ></td>
			<td> ${nodes[i].item} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('plantNodes',2);
}
// Price of herb nodes as a whole
async function getHerbNodes(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use wood node data
	let nodes = data.spreadsheet.slice(78,100);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('herbNodeData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < nodes.length; i++){

		var amount = Math.floor(nodes[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		switch (nodes[i].item){
			case "Cluster of Desert Herbs":
			pic = "./images/assets/nodes/Varietal_Cilantro_Seed.png"; 
			break;

			case "Cluster of Herbs":
			pic = "./images/assets/nodes/Varietal_Cilantro_Seed.png"; 
			break;

			case "Herb Patch":
			pic = "./images/assets/nodes/Varietal_Clove_Seed.png"; 
			break;

			case "Herb Seedling (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Seedling (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Seedling (Kryta)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Seedling (Maguuma Jungle)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Seedling (Shiverpeaks)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Sprout (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Sprout (Kryta)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Sprout (Maguuma Jungle)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Herb Sprout (Shiverpeaks)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Mature Herbs (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Mint_Seed.png"; 
			break;

			case "Mature Herbs (Kryta)":
			pic = "./images/assets/nodes/Varietal_Cilantro_Seed.png"; 
			break;

			case "Mature Herbs (Maguuma Jungle)":
			pic = "./images/assets/nodes/Varietal_Clove_Seed.png"; 
			break;

			case "Mature Herbs (Shiverpeak)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Verdant Herbs (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Mint_Seed.png"; 
			break;

			case "Verdant Herbs (Kryta)":
			pic = "./images/assets/nodes/Varietal_Mint_Seed.png"; 
			break;

			case "Verdant Herbs (Maguuma Jungle)":
			pic = "./images/assets/nodes/Varietal_Clove_Seed.png"; 
			break;

			case "Verdant Herbs (Shiverpeaks)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Verdant Herbs (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Mint_Seed.png"; 
			break;

			case "Verdant Herbs (Kryta)":
			pic = "./images/assets/nodes/Varietal_Mint_Seed.png"; 
			break;

			case "Verdant Herbs (Maguuma Jungle)":
			pic = "./images/assets/nodes/Varietal_Clove_Seed.png"; 
			break;

			case "Verdant Herbs (Shiverpeaks)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Young Herbs (Ascalon)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;

			case "Young Herbs (Kryta)":
			pic = "./images/assets/nodes/Varietal_Sesame_Seed.png"; 
			break;

			case "Young Herbs (Shiverpeaks)":
			pic = "./images/assets/nodes/Varietal_Peppercorn_Seed.png"; 
			break;
		}

		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${pic} ></td>
			<td> ${nodes[i].item} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('herbNodes',2);
}

// Price of rich nodes as a whole
async function getRichNodes(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use wood node data
	let nodes = data.spreadsheet.slice(101,108);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('richNodeData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < nodes.length; i++){

		var amount = Math.floor(nodes[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		switch (nodes[i].item){
			case "Rich Copper Ore":
			pic = "./images/assets/nodes/Copper_Ore.png"; 
			break;

			case "Rich Gold Ore":
			pic = "./images/assets/nodes/Gold_Ore.png"; 
			break;

			case "Rich Iron Ore":
			pic = "./images/assets/nodes/Iron_Ore.png"; 
			break;

			case "Rich Mithril Ore":
			pic = "./images/assets/nodes/Mithril_Ore.png"; 
			break;

			case "Rich Orichalcum Ore":
			pic = "./images/assets/nodes/Orichalcum_Ore.png"; 
			break;

			case "Rich Platinum Ore":
			pic = "./images/assets/nodes/Platinum_Ore.png"; 
			break;

			case "Rich Silver Ore":
			pic = "./images/assets/nodes/Silver_Ore.png"; 
			break;
		}

		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${pic} ></td>
			<td> ${nodes[i].item} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('richNodes',2);
}

// Price of rich nodes as a whole
async function getLSNodes(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwS4UH9UXEsHuJGBYkmT2pEveLcW7eEyRqSLGwt7op-X3AWaEYw/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use wood node data
	let nodes = data.spreadsheet.slice(109,119);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('lsNodeData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < nodes.length; i++){

		var amount = Math.floor(nodes[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
			
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		switch (nodes[i].item){
			case "Bloodstone Crystal":
			pic = "./images/assets/nodes/Blood_Ruby.png"; 
			break;

			case "Petrified Stump":
			pic = "./images/assets/nodes/Petrified_Wood.png"; 
			break;

			case "Winterberry Bush":
			pic = "./images/assets/nodes/Fresh_Winterberry.png"; 
			break;

			case "Jade Fragment":
			pic = "./images/assets/nodes/Jade_Shard.png"; 
			break;

			case "Primordial Orchid":
			pic = "./images/assets/nodes/Fire_Orchid_Blossom.png"; 
			break;

			case "Orrian Oyster":
			pic = "./images/assets/nodes/Orrian_Pearl.png"; 
			break;

			case "Difluorite Crystal":
			pic = "./images/assets/nodes/Difluorite_Crystal.png"; 
			break;

			case "Dragon Crystal Node":
			pic = "./images/assets/nodes/Branded_Mass.png"; 
			break;

			case "Mistborn Mote":
			pic = "./images/assets/nodes/Mistborn_Mote.png"; 
			break;

			case "Eternal Ice":
			pic = "./images/assets/nodes/Eternal_Ice_Shard.png"; 
			break;
		}

		dataHTML += `
		<tr>
			<td> <img style = "width: 70%;" src = ${pic} ></td>
			<td> ${nodes[i].item} </td>
			<td style = "text-align: right;"> ${silverHTML}${copperHTML} </td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
	sortTableByPrice('lsNodes',2);
}

// Drizzlewood Reward Tracks 
// Price of rich nodes as a whole
/*
async function getDrizzleTracks(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbwaKMPLTlrjqDZFske606otUYeg2Rsh-fN6fz-ZDigkIlpe_iU/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API to only use wood node data
	let tracks = data.spreadsheet.slice(21, 27);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('drizzleData');
	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	for (i = 0; i < tracks.length; i++){

		var amount = Math.floor(tracks[i].worth);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var pic;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			if (silver >= 10){
				silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			} else {
				silverHTML = " 0"+`${silver} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			}
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount >= 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = "0"+`${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		dataHTML += `
		<tr>
			<td>${tracks[i].currency}</td>
			<td>${goldHTML}${silverHTML}${copperHTML}</td>
		</tr>`;
	}

	tableBody.innerHTML = dataHTML;
} */

async function getDrizzleTrackProofs(){
	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbxrOI8g0EYxJPfk-hj-Wkajm13xh0xlYHMKNZebL_xFtKULDipA/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Splitting API 
	var legion = {
		tracks: [
			{
				name: "Glory to the Ash Legion", 
				total: data.spreadsheet[18].total
			},
			{
				name: "Glory to the Flame Legion", 
				total: data.spreadsheet[38].total
			},
			{
				name: "Glory to the Iron Legion", 
				total: data.spreadsheet[57].total
			},
			{
				name: "Glory to the Blood Legion", 
				total: data.spreadsheet[76].total
			},
			{
				name: "Death to the Dominion", 
				total: data.spreadsheet[96].total
			},
			{
				name: "Death to the Corrupted", 
				total: data.spreadsheet[116].total
			},
		]
	};
	console.log(data);

	let track = data.spreadsheet;

	let ash_track = data.spreadsheet.slice(1,19); // Ash reward track
	let flame_track = data.spreadsheet.slice(21,39); // Flame reward track
	let iron_track = data.spreadsheet.slice(41,58); // Iron reward track
	let blood_track = data.spreadsheet.slice(60,77); // Blood reward track
	let dominion_track = data.spreadsheet.slice(79,97); // Dominion reward track
	let corrupted_track = data.spreadsheet.slice(99,117); // Corrupted reward track

	// Crafting boxes
	let ash_craft = data.spreadsheet.slice(1,3); // Ash
	let flame_craft = data.spreadsheet.slice(21,23); // Flame
	let iron_craft = data.spreadsheet.slice(41,43); // Iron
	let blood_craft = data.spreadsheet.slice(60,62); // Blood
	let dominion_craft = data.spreadsheet.slice(79,81); // Dominion
	let corrupted_craft = data.spreadsheet.slice(99,101); // Corrupted

	// Reward Boxes
	let ash_reward = data.spreadsheet.slice(5,9); // Ash
	let flame_reward = data.spreadsheet.slice(25,29); // Flame
	let iron_reward = data.spreadsheet.slice(45,49); // Iron
	let blood_reward = data.spreadsheet.slice(64,68); // Blood
	let dominion_reward = data.spreadsheet.slice(83,86); // Dominion
	let corrupted_reward = data.spreadsheet.slice(103,106); // Corrupted

	// Table bodies
	const drizzle_tableBody = document.getElementById('drizzleData');
	// Reward tracks
	const ash_tableBody = document.getElementById('ash-table'); // Ash
	const flame_tableBody = document.getElementById('flame-table'); // Flame
	const iron_tableBody = document.getElementById('iron-table'); // Iron 
	const blood_tableBody = document.getElementById('blood-table'); // Blood
	const dominion_tableBody = document.getElementById('dominion-table'); // Dominion
	const corrupted_tableBody = document.getElementById('corrupted-table'); // Corrupted

	// Crafting boxes
	const ash_craft_tableBody = document.getElementById('ash-craft-table'); // Ash
	const flame_craft_tableBody = document.getElementById('flame-craft-table'); // Flame
	const iron_craft_tableBody = document.getElementById('iron-craft-table'); // Iron 
	const blood_craft_tableBody = document.getElementById('blood-craft-table'); // Blood
	const dominion_craft_tableBody = document.getElementById('dominion-craft-table'); // Dominion
	const corrupted_craft_tableBody = document.getElementById('corrupted-craft-table'); // Corrupted

	// Reward Boxes 
	const ash_reward_tableBody = document.getElementById('ash-reward-table'); // Ash
	const flame_reward_tableBody = document.getElementById('flame-reward-table'); // Flame
	const iron_reward_tableBody = document.getElementById('iron-reward-table'); // Iron
	const blood_reward_tableBody = document.getElementById('blood-reward-table'); // Blood
	const dominion_reward_tableBody = document.getElementById('dominion-reward-table'); // Dominion
	const corrupted_reward_tableBody = document.getElementById('corrupted-reward-table'); // Corrupted

	// Final reward track totals
	function insert_final(tableBody){
		let dataHTML = '';

		for (i = 0; i < legion.tracks.length; i++){
			dataHTML += `
			<tr>
				<td>${legion.tracks[i].name}</td>
				<td>${format_values_subpage(legion.tracks[i].total).gold}${format_values_subpage(legion.tracks[i].total).silver}${format_values_subpage(legion.tracks[i].total).copper}</td>
			</tr>`;
		}
		tableBody.innerHTML = dataHTML;
	}

	// For full reward tracks
	function insert_track(track,tableBody){
		//Empty data table
		let dataHTML = '';

		for (i = 0; i < track.length; i++){

			var amount = Math.floor(track[i].total);
			var negative = false; 
			var negative_symbol = '';
			var gold = 0;
			var silver = 0;
			var copper = 0;
			var copperHTML = ``;
			var silverHTML = ``;
			var goldHTML = ``;
			var pic;

			if (amount < 0){
				amount = amount * -1; 
				negative = true;
			}

			if (amount > 0){ 
				copper = (amount % 100);
				amount = Math.floor(amount/100);

				if (copper >= 10){
					copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				}
				if (copper == 100){
					copper = 0;
					amount++;
				} 
			}
			if (amount > 0){
				silver = amount % 100; 
				amount = Math.floor(amount / 100);

				if (silver >= 10){
					silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML = " 0"+`${silver} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver == 100){
					silver = 0;
					amount++;
				}
			}
			if (amount > 0){
				if (amount >= 10){
					gold = amount;
					goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
				} else {
					gold = amount;
					goldHTML = `${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
				}
				if (gold == 0){
					gold = 0;
					amount++;
				}
			}

			if (negative == true){
				negative_symbol = ' -';
				if (gold > 0){
					goldHTML = `${negative_symbol}${goldHTML}`;
				} else {
					goldHTML = ``;
					if (silver > 0){
						silverHTML = `${negative_symbol}${silverHTML}`;
					} else {
						silverHTML = ``;
						if (copper > 0){
							copperHTML = `${negative_symbol}${copperHTML}`;
						} else {
							copperHTML = ``;
						} 
					}
				} 
			} 

			dataHTML += `
			<tr>
				<td>${track[i].item}</td>
				<td>${track[i].quantity}</td>
				<td style = "text-align: right;">${goldHTML}${silverHTML}${copperHTML}</td>
			</tr>`;
		}
		tableBody.innerHTML = dataHTML;
	}

	// For both crafting boxes and reward boxes
	function insert_box(track,tableBody){
		//Empty data table
		let dataHTML = '';

		for (i = 0; i < track.length; i++){

			var amount = Math.floor(track[i].boxtotal);
			var negative = false; 
			var negative_symbol = '';
			var gold = 0;
			var silver = 0;
			var copper = 0;
			var copperHTML = ``;
			var silverHTML = ``;
			var goldHTML = ``;
			var pic;

			if (amount < 0){
				amount = amount * -1; 
				negative = true;
			}

			if (amount > 0){ 
				copper = (amount % 100);
				amount = Math.floor(amount/100);

				if (copper >= 10){
					copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				} else {
					copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
				}
				if (copper == 100){
					copper = 0;
					amount++;
				} 
			}
			if (amount > 0){
				silver = amount % 100; 
				amount = Math.floor(amount / 100);

				if (silver >= 10){
					silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				} else {
					silverHTML = " 0"+`${silver} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
				}
				if (silver == 100){
					silver = 0;
					amount++;
				}
			}
			if (amount > 0){
				if (amount >= 10){
					gold = amount;
					goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
				} else {
					gold = amount;
					goldHTML = `${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
				}
				if (gold == 0){
					gold = 0;
					amount++;
				}
			}

			if (negative == true){
				negative_symbol = ' -';
				if (gold > 0){
					goldHTML = `${negative_symbol}${goldHTML}`;
				} else {
					goldHTML = ``;
					if (silver > 0){
						silverHTML = `${negative_symbol}${silverHTML}`;
					} else {
						silverHTML = ``;
						if (copper > 0){
							copperHTML = `${negative_symbol}${copperHTML}`;
						} else {
							copperHTML = ``;
						} 
					}
				} 
			} 

			dataHTML += `
			<tr>
				<td>${track[i].box}</td>
				<td style = "text-align: right;">${goldHTML}${silverHTML}${copperHTML}</td>
			</tr>`;
		}
		tableBody.innerHTML = dataHTML;
	}
	// Total reward track
	insert_final(drizzle_tableBody);
	// Full reward track
	insert_track(ash_track, ash_tableBody);
	insert_track(flame_track, flame_tableBody);
	insert_track(iron_track, iron_tableBody);
	insert_track(blood_track, blood_tableBody);
	insert_track(dominion_track, dominion_tableBody);
	insert_track(corrupted_track, corrupted_tableBody);
	// Crafting boxes
	insert_box(ash_craft, ash_craft_tableBody);
	insert_box(flame_craft, flame_craft_tableBody);
	insert_box(iron_craft, iron_craft_tableBody);
	insert_box(blood_craft, blood_craft_tableBody);
	insert_box(dominion_craft, dominion_craft_tableBody);
	insert_box(corrupted_craft, corrupted_craft_tableBody);
	// Reward boxes
	insert_box(ash_reward, ash_reward_tableBody);
	insert_box(flame_reward, flame_reward_tableBody);
	insert_box(iron_reward, iron_reward_tableBody);
	insert_box(blood_reward, blood_reward_tableBody);
	insert_box(dominion_reward, dominion_reward_tableBody);
	insert_box(corrupted_reward, corrupted_reward_tableBody);

	sortTableByPrice('drizzle-tracks',1);
}

// Salvage TP values
async function getSalvage(table, image){

	//Grabs the JSON URL file from spreadsheet
	const api = 'https://script.google.com/macros/s/AKfycbzdw6GmB_S6qQTxvEgWrQxho1vmZiii1cqzcPNR_POO8rIXOChI/exec';
	const response = await fetch(api);
	const data = await response.json();

	// Grab info from GW2 API on uni gear
	const api_uni_info = 'https://api.guildwars2.com/v2/items?ids=85016,84731,83008';
	const response_info = await fetch(api_uni_info);
	const uni_info = await response_info.json();

	// Grab info from GW2 API on other items
	const api_other_info = 'https://api.guildwars2.com/v2/items?ids=21678,80681,21690,21692,21686,22326,21675,22327,21670,21657,21673,21668,21656,21663,19721,22329,22325,21689,21680,21693,21694,66670,22328,21681,21679,21666,21672,21684,79423,22330,21695,21664,21654,21688,22331,82488,21682,21658,21669,21659,21662,21661,21653,21687,21685,21674,21667,21655,21665,79213,79079,79138,21683,21691,21671,21660';
	const response_other = await fetch(api_other_info);
	const other_info = await response_other.json();

	// Splitting API to only use wood node data
	let uni = data.spreadsheet.slice(59,62);
	let tp = data.spreadsheet.slice(1,57);

	//The table that all the data will be sto#802020 in
	const tableBody = document.getElementById('salvage-tp-table');
	const uni_tableBody = document.getElementById('salvage-uni-table');

	var tableName = document.getElementById(table);
	var image = document.getElementById(image);

	tableName.style.opacity = 1;
	image.style.display = 'none';

	//Empty data table
	let dataHTML = '';

	// UNI GEAR
	//Empty data table
	let uni_dataHTML = '';

	for (i = 0; i < uni.length; i++){

		var uni_icon = uni_info[i].icon;

		var amount = Math.floor(uni[i].copper);
		var negative = false; 
		var negative_symbol = '';
		var gold = 0;
		var silver = 0;
		var copper = 0;
		var copperHTML = ``;
		var silverHTML = ``;
		var goldHTML = ``;
		var choice;

		if (amount < 0){
			amount = amount * -1; 
			negative = true;
		}

		if (amount > 0){ 
			copper = (amount % 100);
			amount = Math.floor(amount/100);

			if (copper >= 10){
				copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			} else {
				copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			}
			if (copper == 100){
				copper = 0;
				amount++;
			} 
		}
		if (amount > 0){
			silver = amount % 100; 
			amount = Math.floor(amount / 100);

			if (silver >= 10){
				silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			} else {
				silverHTML = " 0"+`${silver} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			}
			if (silver == 100){
				silver = 0;
				amount++;
			}
		}
		if (amount > 0){
			if (amount >= 10){
				gold = amount;
				goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			} else {
				gold = amount;
				goldHTML = `${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
			}
			if (gold == 0){
				gold = 0;
				amount++;
			}
		}

		if (negative == true){
			negative_symbol = ' -';
			if (gold > 0){
				goldHTML = `${negative_symbol}${goldHTML}`;
			} else {
				goldHTML = ``;
				if (silver > 0){
					silverHTML = `${negative_symbol}${silverHTML}`;
				} else {
					silverHTML = ``;
					if (copper > 0){
						copperHTML = `${negative_symbol}${copperHTML}`;
					} else {
						copperHTML = ``;
					} 
				}
			} 
		} 

		// If negative, change color to green + change choice. Vise versa
		switch (negative){
			case true:
			color = 'rgba(215, 86, 86, 0.7)';
			choice = 'TP';
			break;

			case false:
			color = 'rgba(86, 215, 109, 0.7)';
			choice = 'Mix Salvage';
			break;
		}


		uni_dataHTML += `
		<tr>
			<td><img style = "width: 100%; display: block;" src = ${uni_icon}></td>
			<td>${uni[i].item}</td>
			<td style = "background-color: ${color};">${goldHTML}${silverHTML}${copperHTML}</td>
			<td style = "text-align: center;"> ${choice} </td>
		</tr>`;
	}
	uni_tableBody.innerHTML = uni_dataHTML; // Uni gear

	for (i = 0; i < tp.length; i++){
		var other_icon = other_info[i].icon;

		var amount_c = Math.floor(tp[i].copper),
			amount_r = Math.floor(tp[i].rune),
			amount_s = Math.floor(tp[i].silver);

		var negative_c = false,
			negative_r = false,
			negative_s = false;

		var negative_symbol_c = '',
			negative_symbol_r = '',
			negative_symbol_s = '';

		var gold_c = 0,
			gold_r = 0,
			gold_s = 0;

		var silver_c = 0,
			silver_r = 0,
			silver_s = 0;

		var copper_c = 0,
			copper_r = 0,
			copper_s = 0;

		var copperHTML_c = ``, 
			copperHTML_r = ``,
			copperHTML_s = ``;

		var silverHTML_c = ``,
			silverHTML_r = ``,
			silverHTML_s = ``;

		var goldHTML_c = ``,
			goldHTML_r = ``,
			goldHTML_s = ``;

		var color_c,
			color_r,
			color_s;

		// COPPER-FED
		if (amount_c < 0){
			amount_c = amount_c * -1; 
			negative_c = true;
		}

		if (amount_c > 0){ 
			copper_c = (amount_c % 100);
			amount_c = Math.floor(amount_c/100);

			if (copper_c >= 10){
				copperHTML_c = ` ${copper_c} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			} else {
				copperHTML_c = " 0"+`${copper_c} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			}
			if (copper_c == 100){
				copper_c = 0;
				amount_c++;
			} 
		}
		if (amount_c > 0){
			silver_c = amount_c % 100; 
			amount_c = Math.floor(amount_c / 100);

			if (silver_c >= 10){
				silverHTML_c = ` ${silver_c}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			} else {
				silverHTML_c = " 0"+`${silver_c} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			}
			if (silver_c == 100){
				silver_c = 0;
				amount_c++;
			}
		}
		if (amount_c >= 10){
			gold_c = amount_c;
			goldHTML_c = ` ${gold_c} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}

		if (negative_c == true){
			negative_symbol_c = ' -';
			if (gold_c > 0){
				goldHTML_c = `${negative_symbol_c}${goldHTML_c}`;
			} else {
				goldHTML_c = ``;
				if (silver_c > 0){
					silverHTML_c = `${negative_symbol_c}${silverHTML_c}`;
				} else {
					silverHTML_c = ``;
					if (copper_c > 0){
						copperHTML_c = `${negative_symbol_c}${copperHTML_c}`;
					} else {
						copperHTML_c = ``;
					} 
				}
			} 
		} 

		// RUNECRAFTER'S
		if (amount_r < 0){
			amount_r = amount_r * -1; 
			negative_r = true;
		}

		if (amount_r > 0){ 
			copper_r = (amount_r % 100);
			amount_r = Math.floor(amount_r/100);

			if (copper_r >= 10){
				copperHTML_r = ` ${copper_r} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			} else {
				copperHTML_r = " 0"+`${copper_r} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			}
			if (copper_r == 100){
				copper_r = 0;
				amount_r++;
			} 
		}
		if (amount_r > 0){
			silver_r = amount_r % 100; 
			amount_r = Math.floor(amount_r / 100);

			if (silver_r >= 10){
				silverHTML_r = ` ${silver_r}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			} else {
				silverHTML_r = " 0"+`${silver_r} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			}
			if (silver_r == 100){
				silver_r = 0;
				amount_r++;
			}
		}
		if (amount_r >= 10){
			gold_r = amount_r;
			goldHTML_r = ` ${gold_r} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}

		if (negative_r == true){
			negative_symbol_r = ' -';
			if (gold_r > 0){
				goldHTML_r = `${negative_symbol_r}${goldHTML_r}`;
			} else {
				goldHTML_r = ``;
				if (silver_r > 0){
					silverHTML_r = `${negative_symbol_r}${silverHTML_r}`;
				} else {
					silverHTML_r = ``;
					if (copper_r > 0){
						copperHTML_r = `${negative_symbol_r}${copperHTML_r}`;
					} else {
						copperHTML_r = ``;
					} 
				}
			} 
		}

		// SILVERFED
		if (amount_s < 0){
			amount_s = amount_s * -1; 
			negative_s = true;
		}

		if (amount_s > 0){ 
			copper_s = (amount_s % 100);
			amount_s = Math.floor(amount_s/100);

			if (copper_s >= 10){
				copperHTML_s = ` ${copper_s} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			} else {
				copperHTML_s = " 0"+`${copper_s} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
			}
			if (copper_s == 100){
				copper_s = 0;
				amount_s++;
			} 
		}
		if (amount_s > 0){
			silver_s = amount_s % 100; 
			amount_s = Math.floor(amount_s / 100);

			if (silver_s >= 10){
				silverHTML_s = ` ${silver_s}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			} else {
				silverHTML_s = " 0"+`${silver_s} <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			}
			if (silver_s == 100){
				silver_s = 0;
				amount_s++;
			}
		}
		if (amount_s >= 10){
			gold_s = amount_s;
			goldHTML_s = ` ${gold_s} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}

		if (negative_s == true){
			negative_symbol_s = ' -';
			if (gold_s > 0){
				goldHTML_s = `${negative_symbol_s}${goldHTML_s}`;
			} else {
				goldHTML_s = ``;
				if (silver_s > 0){
					silverHTML_s = `${negative_symbol_s}${silverHTML_s}`;
				} else {
					silverHTML_s = ``;
					if (copper_s > 0){
						copperHTML_s = `${negative_symbol_s}${copperHTML_s}`;
					} else {
						copperHTML_s = ``;
					} 
				}
			} 
		}

		// Color 
		switch (negative_c){
			case true:
			color_c = 'rgba(215, 86, 86, 0.7)'; 
			break;

			case false:
			color_c = 'rgba(86, 215, 109, 0.7)';
			break;
		}
		switch (negative_r){
			case true:
			color_r = 'rgba(215, 86, 86, 0.7)'; 
			break;

			case false:
			color_r = 'rgba(86, 215, 109, 0.7)';
			break;
		}
		switch (negative_s){
			case true:
			color_s = 'rgba(215, 86, 86, 0.7)'; 
			break;

			case false:
			color_s = 'rgba(86, 215, 109, 0.7)';
			break;
		}

		dataHTML += `
		<tr>
			<td><img style = "width: 100%; display: block;" src = ${other_icon}></td>
			<td>${tp[i].item}</td>
			<td style = "background-color: ${color_c};">${goldHTML_c}${silverHTML_c}${copperHTML_c}</td>
			<td style = "background-color: ${color_r};">${goldHTML_r}${silverHTML_r}${copperHTML_r}</td>
			<td style = "background-color: ${color_s};">${goldHTML_s}${silverHTML_s}${copperHTML_s}</td>
			<td>${tp[i].kit}</td>
		</tr>`;
	}
	tableBody.innerHTML = dataHTML; 
}


function benchmarkLinkNames(defaultName){
	var referencePage = "";

	switch (defaultName){
		case "Amal / Key Metas (PoF/LS4 & 5)":
		referencePage = "amal-key-meta-pof-ls4-ls5.php";
		break;

		case "Amnoon Nodes/Caches":
		referencePage = "amnoon-nodes-caches.php";
		break; 

		case "Auric Basin (Baubles)":
		referencePage = "auric-basin.php";
		break; 


	}
}

function showElement(id){
	obj = document.getElementById(id);
	obj.style.opacity = 1;

}

function hideElement(id){
	obj = document.getElementById(id);
	obj.style.opacity = 0;
}

function hideCheckboxElement(id, obj){
	var checkbox = obj; 
	if (checkbox.checked == true){
		document.getElementById(id).style.opacity = 1;
	} else {
		document.getElementById(id).style.opacity = 0;
	}
}

function onHover_Yellow(id){
	document.getElementById(id).style.backgroundColor = "#FCFF57";
}

function onHover_Tan(id){
	document.getElementById(id).style.backgroundColor = "#FFE89C";
}


function sortTableByNumber(tableName){

  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById(tableName);
  
  document.getElementById("chain-wrapper-event-table").style.opacity = "1";

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
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];

      //check if the two rows should switch place:
      if (parseInt(x.innerHTML) > parseInt(y.innerHTML)) {
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

function sortTableByUpscale(tableName){

  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById(tableName);
  document.getElementById("chain-wrapper-event-table").style.opacity = "0";

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
      x = rows[i].getElementsByTagName("TD")[4];
      y = rows[i + 1].getElementsByTagName("TD")[4];

      //check if the two rows should switch place:
      if (x.innerHTML.length < y.innerHTML.length) {
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

function sortTableByCriteria(tableName){

  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById(tableName);

  document.getElementById("chain-wrapper-event-table").style.opacity = "0";

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
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];

      //check if the two rows should switch place:
      if (parseInt(x.id) > parseInt(y.id)) {
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

function sortTableByExtra(tableName){

  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById(tableName);

  document.getElementById("chain-wrapper-event-table").style.opacity = "0";

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
      x = rows[i].getElementsByTagName("TD")[5];
      y = rows[i + 1].getElementsByTagName("TD")[5];

      //check if the two rows should switch place:
      if (x.innerHTML.length < y.innerHTML.length) {
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

function sortTableByNode(tableName){

  var table, rows, switching, i, x, y, shouldSwitch;
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
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];

      //check if the two rows should switch place:
      if (x.innerHTML.length > y.innerHTML.length) {
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

function highlightTableByAlphabet(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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

      //check if the two rows should switch place:
      if (y.innerHTML.toLowerCase() < x.innerHTML.toLowerCase()) {
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

function sortTableByAlphabet(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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

      //check if the two rows should switch place:
      if (y.innerHTML.toLowerCase() < x.innerHTML.toLowerCase()) {
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

function sortTableByAlphabet_Backwards(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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

      //check if the two rows should switch place:
      if (y.innerHTML.toLowerCase() > x.innerHTML.toLowerCase()) {
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

// Sorted by time that's label as: xx:xx
function sortTableByTime(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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

      //check if the two rows should switch place:
      if (parseInt(y.innerHTML.slice(0,1) + y.innerHTML.slice(2)) > parseInt(x.innerHTML.slice(0,1) + x.innerHTML.slice(2))) {
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

// Sorted by GPH labeled as xx[gold]xx[silver]xx[copper]
function sortTableByGPH(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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

      // Taking a part of the entire string for gold, silver, copper values
      x_gold = parseInt(x.innerHTML.slice(0,3));
      x_silver = parseInt(x.innerHTML.slice(76,79));
      x_copper = parseInt(x.innerHTML.slice(155,158));
      x = x_gold*10000 + x_silver*100 + x_copper;

      y_gold = parseInt(y.innerHTML.slice(0,3));
      y_silver = parseInt(y.innerHTML.slice(76,79));
      y_copper = parseInt(y.innerHTML.slice(155,158));
      y = y_gold*10000 + y_silver*100 + y_copper;


      //check if the two rows should switch place:
      if (y > x) {
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

// Sorted by GPH labeled as xx[silver]xx[copper]
function sortTableByGPH_Two(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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
      
      if (x.innerHTML.length > 79){
      	x_silver = parseInt(x.innerHTML.slice(0,3)) * 100;
      	x_copper = parseInt(x.innerHTML.slice(81, 83));
      	x = x_silver + x_copper;
      } else {
      	x = parseInt(x.innerHTML.slice(0,3));
      }
      if (y.innerHTML.length > 79){
      	y_silver = parseInt(y.innerHTML.slice(0,3)) * 100;
      	y_copper = parseInt(y.innerHTML.slice(81, 83));
      	y = y_silver + y_copper
      } else {
      	y = parseInt(y.innerHTML.slice(0,3));
      } 
 
      //check if the two rows should switch place:
      if (y > x) {
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

// Sorted by GPH labeled as xx[gold]xx[silver]
function sortTableByPrice(tableName, column, order){

  var table, rows, switching, i, x, y, shouldSwitch, isNeg;
  let sameNumCheck = 0;
  var findNum = /(|-)[0-9]/g,
  	  c,
  	  s,
  	  g;
  table = document.getElementById(tableName);
  // The .match creates an array with the nums from the spreadsheet. ex: 1g 23s 45c = [1,2,3,4,5]
  // Returns the array [1,2,3,4,5] -> 12345
  function currency(array){	
  	isNeg = false; // reset var so that it doesn't think every other time this function goes, every array is conside#802020 neg
  	// Check if the first num of the array is negative. If yes, then switch it to positive so it will add everything correctly
  	// At the end, change the whole value to negative
  	if (parseInt(array[0]) < 0){
  		array[0] = parseInt(array[0]) * -1;
  		isNeg = true;
  	}
  	// Since some TDs have tooltips, it increases the length of the array. Cut the array specifically to only show the actual GPH so it can sort properly
  	if (array.length == 25 || array.length == 26)
  		array = array.slice(0, 5);
  	if (array.length >= 27)
  		array = array.slice(0, 6);

  	switch (array.length){
  		case 1:
  		c = (parseInt(array[array.length - 1]));
  		s = 0;
  		g = 0;
  		break;

  		case 2:
  		c = (parseInt(array[array.length - 2]) * 10) + (parseInt(array[array.length - 1]));
  		s = 0;
  		g = 0;
  		break;

  		case 3:
  		c = (parseInt(array[array.length - 2]) * 10) + (parseInt(array[array.length - 1]));
  		s = (parseInt(array[array.length - 3]) * 100);
  		g = 0;
  		break;

  		case 4:
  		c = (parseInt(array[array.length - 2]) * 10) + (parseInt(array[array.length - 1]));
  		s = (parseInt(array[array.length - 4]) * 1000) + (parseInt(array[array.length - 3]) * 100);
  		g = 0;
  		break;

  		case 5:
  		c = (parseInt(array[array.length - 2]) * 10) + (parseInt(array[array.length - 1]));
  		s = (parseInt(array[array.length - 4]) * 1000) + (parseInt(array[array.length - 3]) * 100);
  		g = (parseInt(array[array.length - 5]) * 10000);
  		break;

  		case 6:
  		c = (parseInt(array[array.length - 2]) * 10) + (parseInt(array[array.length - 1]));
  		s = (parseInt(array[array.length - 4]) * 1000) + (parseInt(array[array.length - 3]) * 100);
  		g = (parseInt(array[array.length - 6]) * 100000) + (parseInt(array[array.length - 5]) * 10000);
  		break;

  		case 7:
  		c = (parseInt(array[array.length - 2]) * 10) + (parseInt(array[array.length - 1]));
  		s = (parseInt(array[array.length - 4]) * 1000) + (parseInt(array[array.length - 3]) * 100);
  		g = (parseInt(array[array.length - 7]) * 1000000) + (parseInt(array[array.length - 6]) * 100000) + (parseInt(array[array.length - 5]) * 10000);
  		break;
  	}
  	
  	if (isNaN(g) == true){
  		g = 0;
  	}
  	if (isNaN(s) == true){
  		s = 0;
  	}
  	if (isNaN(c) == true){
  		c = 0;
  	}

  	// Change value to negative
  	if (isNeg == true){
  		g = g*-1;
  		s = s*-1;
  		c = c*-1;
  		return g+s+c;
  	} else {
  		return g+s+c;
  	}
  }

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

      if (x.children.length > 0 && x.children[0].id == "sort"){
      	x = currency(x.children[0].innerHTML.match(findNum),g,s,c);
      	y = currency(y.children[0].innerHTML.match(findNum),g,s,c);
      } else {
      	x = currency(x.innerHTML.match(findNum),g,s,c);
      	y = currency(y.innerHTML.match(findNum),g,s,c);
      }

      //x = currency(x.innerHTML.match(findNum),g,s,c);
     // y = currency(y.innerHTML.match(findNum),g,s,c);

      

      //check if the two rows should switch place:
      if (order == "ascending"){
      	if (y < x) {
	        //if so, mark as a switch and break the loop:
	        shouldSwitch = true;
	        break;
	      }
      } else {
      	if (y > x) {
	        //if so, mark as a switch and break the loop:
	        shouldSwitch = true;
	        break;
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

// Sorted by GPH labeled as xx[gold]xx[silver]
function sortTableByPrice_Backwards(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
  var x_gold = 0,
  	  x_silver = 0, 
  	  x_copper = 0, 
  	  y_gold = 0, 
  	  y_silver = 0, 
  	  y_copper = 0;
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

      // Only copper value
      if (x.innerHTML.length <= 80){
      	x_gold = 0;
      	x_silver = 0;
      	x_copper = parseInt(x.innerHTML.slice(1,4));
      } 
      if (x.innerHTML.length > 80){
      	x_gold = 0;
      	x_silver = parseInt(x.innerHTML.slice(1,4));
      	x_copper = parseInt(x.innerHTML.slice(80,83));
      } 
      if (x.innerHTML.length > 158){
      	x_gold = parseInt(x.innerHTML.slice(1,4)); 
      }
      
      // Only copper value
      if (y.innerHTML.length <= 80){
      	y_gold = 0;
      	y_silver = 0;
      	y_copper = parseInt(y.innerHTML.slice(1,4));
      } 
      if (y.innerHTML.length > 80){
      	y_gold = 0;
      	y_silver = parseInt(y.innerHTML.slice(1,4));
      	y_copper = parseInt(y.innerHTML.slice(80,83));
      } 
      if (y.innerHTML.length > 158){
      	y_gold = parseInt(y.innerHTML.slice(1,4)); 
      } 

      x = x_gold*10000 + x_silver*100 + x_copper;
      y = y_gold*10000 + y_silver*100 + y_copper;
      
      //check if the two rows should switch place:
      if (y < x) {
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

// Sorted by quantity of a value
function sortTableByQuantity(tableName, column){

  var table, rows, switching, i, x, y, shouldSwitch;
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

      //check if the two rows should switch place:
      if (parseInt(y.innerHTML) > parseInt(x.innerHTML)) {
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

function hover_over_trinkets(id){
	var backpiece = document.getElementById('backpiece'),
		accessory = document.getElementById('accessory'),
		amulet = document.getElementById('amulet'),
		ring_1 = document.getElementById('ring-1'),
		ring_2 = document.getElementById('ring-2'),
		left_side = document.getElementById('left-side'),
		trinket = id.id;

	left_side.style.opacity = 0.3;

	switch (trinket){
		case "trinket-backpiece":
		backpiece.style.display = "block";
		break;

		case "trinket-accessory":
		accessory.style.display = "block";
		break;

		case "trinket-amulet":
		amulet.style.display = "block";
		break;

		case "trinket-ring":
		ring.style.display = "block";
		break;
	}
}
function hover_out_trinkets(id){
	var backpiece = document.getElementById('backpiece'),
		accessory = document.getElementById('accessory'),
		amulet = document.getElementById('amulet'),
		ring = document.getElementById('ring'),
		left_side = document.getElementById('left-side'),
		trinket = id.id;

	backpiece.style.display = "none";
	accessory.style.display = "none";
	amulet.style.display = "none";
	ring.style.display = "none";
	
	left_side.style.opacity = 1;
}

// TIMERS 
// 9370DB
// BC9461
// D7A15D
var progress_color = "rgba(215,161,93)",
	fail_color = "rgba(242, 61, 61)",
	soon_color = "rgba(233,245,88)",
	soon_message = "Up Soon!",
	ready_color = "rgba(88,245,106)", 
	ready_message = "~ Ready!",
	pre_meta_color = "rgba(191, 255, 255)",
	meta_color = "rgba(87, 204, 250)";

// Expression to use with .match(findNum) to find a number in a string
var findNum = /\d+/; 

// BITTERFROST CHECKBOXES
function bitterfrost_All_Checkbox(obj){
	var checkbox = obj,
		bff_meta = document.getElementById('bitterfrost-meta-checkbox'), 
		bff_4 = document.getElementById('bitterfrost-4-checkbox'),
		bff_6 = document.getElementById('bitterfrost-6-checkbox'),
		bff_8 = document.getElementById('bitterfrost-8-checkbox'),
		bff_10 = document.getElementById('bitterfrost-10-checkbox');

	if (checkbox.checked == true){
		bff_meta.checked = true;
		bff_4.checked = true;
		bff_6.checked = true;
		bff_8.checked = true;
		bff_10.checked = true; 

		bitterfrost_Meta_Checkbox(bff_meta);
		bitterfrost_4_Checkbox(bff_4);
		bitterfrost_6_Checkbox(bff_6);
		bitterfrost_8_Checkbox(bff_8);
		bitterfrost_10_Checkbox(bff_10);
	} else {
		bff_meta.checked = false;
		bff_4.checked = false;
		bff_6.checked = false;
		bff_8.checked = false;
		bff_10.checked = false; 

		bitterfrost_Meta_Checkbox(bff_meta);
		bitterfrost_4_Checkbox(bff_4);
		bitterfrost_6_Checkbox(bff_6);
		bitterfrost_8_Checkbox(bff_8);
		bitterfrost_10_Checkbox(bff_10);
	}
}

function bitterfrost_Meta_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_bitterfrost_meta.style.display = "block";
	} else {
		sidebox_timer_bitterfrost_meta.style.display = "none";
	}
}
function bitterfrost_4_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_bitterfrost_4.style.display = "block";
	} else {
		sidebox_timer_bitterfrost_4.style.display = "none";
	}
}
function bitterfrost_6_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_bitterfrost_6.style.display = "block";
	} else {
		sidebox_timer_bitterfrost_6.style.display = "none";
	}
}
function bitterfrost_8_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_bitterfrost_8.style.display = "block";
	} else {
		sidebox_timer_bitterfrost_8.style.display = "none";
	}
}
function bitterfrost_10_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_bitterfrost_10.style.display = "block";
	} else {
		sidebox_timer_bitterfrost_10.style.display = "none";
	}
}

// DRACONIS MONS CHECKBOXES
function draconis_Mons_All_Checkbox(obj){
	var checkbox = obj,
		draconis_mons_meta = document.getElementById("draconis-mons-meta-checkbox"),
		draconis_mons_4 = document.getElementById("draconis-mons-4-checkbox"),
		draconis_mons_7 = document.getElementById("draconis-mons-7-checkbox"),
		draconis_mons_8 = document.getElementById("draconis-mons-8-checkbox"),
		draconis_mons_10 = document.getElementById("draconis-mons-10-checkbox"),
		draconis_mons_12 = document.getElementById("draconis-mons-12-checkbox"),
		draconis_mons_13 = document.getElementById("draconis-mons-13-checkbox"),
		draconis_mons_15 = document.getElementById("draconis-mons-15-checkbox"),
		draconis_mons_16 = document.getElementById("draconis-mons-16-checkbox"),
		draconis_mons_20 = document.getElementById("draconis-mons-20-checkbox"),
		draconis_mons_21 = document.getElementById("draconis-mons-21-checkbox"),
		draconis_mons_22 = document.getElementById("draconis-mons-22-checkbox");

	if (checkbox.checked == true){
		draconis_mons_meta.checked = true;
		draconis_mons_4.checked = true; 
		draconis_mons_7.checked = true; 
		draconis_mons_8.checked = true; 
		draconis_mons_10.checked = true; 
		draconis_mons_12.checked = true; 
		draconis_mons_13.checked = true; 
		draconis_mons_15.checked = true; 
		draconis_mons_16.checked = true; 
		draconis_mons_20.checked = true; 
		draconis_mons_21.checked = true; 
		draconis_mons_22.checked = true; 

		draconis_Mons_Meta_Checkbox(draconis_mons_meta);
		draconis_Mons_4_Checkbox(draconis_mons_4);
		draconis_Mons_7_Checkbox(draconis_mons_7);
		draconis_Mons_8_Checkbox(draconis_mons_8);
		draconis_Mons_10_Checkbox(draconis_mons_10);
		draconis_Mons_12_Checkbox(draconis_mons_12);
		draconis_Mons_13_Checkbox(draconis_mons_13);
		draconis_Mons_15_Checkbox(draconis_mons_15);
		draconis_Mons_16_Checkbox(draconis_mons_16);
		draconis_Mons_20_Checkbox(draconis_mons_20);
		draconis_Mons_21_Checkbox(draconis_mons_21);
		draconis_Mons_22_Checkbox(draconis_mons_22);

	} else {
		draconis_mons_4.checked = false; 
		draconis_mons_7.checked = false; 
		draconis_mons_8.checked = false; 
		draconis_mons_10.checked = false; 
		draconis_mons_12.checked = false; 
		draconis_mons_13.checked = false; 
		draconis_mons_15.checked = false; 
		draconis_mons_16.checked = false; 
		draconis_mons_20.checked = false; 
		draconis_mons_21.checked = false; 
		draconis_mons_22.checked = false; 

		draconis_Mons_4_Checkbox(draconis_mons_4);
		draconis_Mons_7_Checkbox(draconis_mons_7);
		draconis_Mons_8_Checkbox(draconis_mons_8);
		draconis_Mons_10_Checkbox(draconis_mons_10);
		draconis_Mons_12_Checkbox(draconis_mons_12);
		draconis_Mons_13_Checkbox(draconis_mons_13);
		draconis_Mons_15_Checkbox(draconis_mons_15);
		draconis_Mons_16_Checkbox(draconis_mons_16);
		draconis_Mons_20_Checkbox(draconis_mons_20);
		draconis_Mons_21_Checkbox(draconis_mons_21);
		draconis_Mons_22_Checkbox(draconis_mons_22);
	}
}
function draconis_Mons_Meta_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_meta.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_meta.style.display = "none";
	}
}
function draconis_Mons_4_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_4.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_4.style.display = "none";
	}
}
function draconis_Mons_7_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_7.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_7.style.display = "none";
	}
}
function draconis_Mons_8_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_8.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_8.style.display = "none";
	}
}
function draconis_Mons_10_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_10.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_10.style.display = "none";
	}
}
function draconis_Mons_12_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_12.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_12.style.display = "none";
	}
}
function draconis_Mons_13_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_13.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_13.style.display = "none";
	}
}
function draconis_Mons_15_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_15.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_15.style.display = "none";
	}
}
function draconis_Mons_16_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_16.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_16.style.display = "none";
	}
}
function draconis_Mons_20_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_20.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_20.style.display = "none";
	}
}
function draconis_Mons_21_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_21.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_21.style.display = "none";
	}
}
function draconis_Mons_22_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_draconis_mons_22.style.display = "block";
	} else {
		sidebox_timer_draconis_mons_22.style.display = "none";
	}
}

/* SIREN'S LANDING CHECKBOXES */
function sirens_Landing_All_Checkbox(obj){
	var checkbox = obj,
		meta = document.getElementById('sirens-landing-meta-checkbox'),
		sl3 = document.getElementById('sirens-landing-3-checkbox'),
		sl5 = document.getElementById('sirens-landing-5-checkbox'),
		sl7 = document.getElementById('sirens-landing-7-checkbox'),
		sl10 = document.getElementById('sirens-landing-10-checkbox'),
		sl11 = document.getElementById('sirens-landing-11-checkbox'),
		sl12 = document.getElementById('sirens-landing-12-checkbox'),
		sl15 = document.getElementById('sirens-landing-15-checkbox'),
		sl17 = document.getElementById('sirens-landing-17-checkbox'),
		sl18 = document.getElementById('sirens-landing-18-checkbox');

	if (checkbox.checked == true){
		meta.checked = true;
		sl3.checked = true;
		sl5.checked = true;
		sl7.checked = true;
		sl10.checked = true;
		sl11.checked = true;
		sl12.checked = true;
		sl15.checked = true;
		sl17.checked = true;
		sl18.checked = true;
		
		sirens_Landing_Meta_Checkbox(meta);
		sirens_Landing_3_Checkbox(sl3);
		sirens_Landing_5_Checkbox(sl5);
		sirens_Landing_7_Checkbox(sl7);
		sirens_Landing_10_Checkbox(sl10);
		sirens_Landing_11_Checkbox(sl11);
		sirens_Landing_12_Checkbox(sl12);
		sirens_Landing_15_Checkbox(sl15);
		sirens_Landing_17_Checkbox(sl17);
		sirens_Landing_18_Checkbox(sl18);
	} else {
		meta.checked = false;
		sl3.checked = false;
		sl5.checked = false;
		sl7.checked = false;
		sl10.checked = false;
		sl11.checked = false;
		sl12.checked = false;
		sl15.checked = false;
		sl17.checked = false;
		sl18.checked = false;
		
		sirens_Landing_Meta_Checkbox(meta);
		sirens_Landing_3_Checkbox(sl3);
		sirens_Landing_5_Checkbox(sl5);
		sirens_Landing_7_Checkbox(sl7);
		sirens_Landing_10_Checkbox(sl10);
		sirens_Landing_11_Checkbox(sl11);
		sirens_Landing_12_Checkbox(sl12);
		sirens_Landing_15_Checkbox(sl15);
		sirens_Landing_17_Checkbox(sl17);
		sirens_Landing_18_Checkbox(sl18);
	}
}

function sirens_Landing_Meta_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_meta.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_meta.style.display = "none";
	}
}
function sirens_Landing_3_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_3.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_3.style.display = "none";
	}
}
function sirens_Landing_5_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_5.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_5.style.display = "none";
	}
}
function sirens_Landing_7_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_7.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_7.style.display = "none";
	}
}
function sirens_Landing_10_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_10.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_10.style.display = "none";
	}
}
function sirens_Landing_11_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_11.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_11.style.display = "none";
	}
}
function sirens_Landing_12_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_12.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_12.style.display = "none";
	}
}
function sirens_Landing_15_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_15.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_15.style.display = "none";
	}
}
function sirens_Landing_17_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_17.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_17.style.display = "none";
	}
}
function sirens_Landing_18_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_sirens_landing_18.style.display = "block";
	} else {
		sidebox_timer_sirens_landing_18.style.display = "none";
	}
}

/* KOURNA CHECKBOXES */
function kourna_All_Checkbox(obj){
	var all_checkbox = obj, 
		meta_checkbox = document.getElementById("kourna-meta-checkbox"),
	 	kourna_1_checkbox = document.getElementById("kourna-1-checkbox"),
	 	kourna_2_checkbox = document.getElementById("kourna-2-checkbox"),
	 	kourna_4_checkbox = document.getElementById("kourna-4-checkbox"),
	 	kourna_5_checkbox = document.getElementById("kourna-5-checkbox"),
	 	kourna_6_checkbox = document.getElementById("kourna-6-checkbox"),
	 	kourna_7_checkbox = document.getElementById("kourna-7-checkbox"),
	 	kourna_11_checkbox = document.getElementById("kourna-11-checkbox");


	 if (all_checkbox.checked == true){
	 	meta_checkbox.checked = true;
	 	kourna_1_checkbox.checked = true;
	 	kourna_2_checkbox.checked = true;
	 	kourna_4_checkbox.checked = true;
	 	kourna_5_checkbox.checked = true;
	 	kourna_6_checkbox.checked = true;
	 	kourna_7_checkbox.checked = true;
	 	kourna_11_checkbox.checked = true;

	 	kourna_Meta_Checkbox(meta_checkbox);
	 	kourna_1_Checkbox(kourna_1_checkbox); 
	 	kourna_2_Checkbox(kourna_2_checkbox); 
	 	kourna_4_Checkbox(kourna_4_checkbox);
	 	kourna_5_Checkbox(kourna_5_checkbox); 
	 	kourna_6_Checkbox(kourna_6_checkbox);
	 	kourna_7_Checkbox(kourna_7_checkbox);
	 	kourna_11_Checkbox(kourna_11_checkbox); 
	 } else {
	 	meta_checkbox.checked = false;
	 	kourna_1_checkbox.checked = false;
	 	kourna_2_checkbox.checked = false;
	 	kourna_4_checkbox.checked = false;
	 	kourna_5_checkbox.checked = false;
	 	kourna_6_checkbox.checked = false;
	 	kourna_7_checkbox.checked = false;
	 	kourna_11_checkbox.checked = false;

	 	kourna_Meta_Checkbox(meta_checkbox);
	 	kourna_1_Checkbox(kourna_1_checkbox); 
	 	kourna_2_Checkbox(kourna_2_checkbox); 
	 	kourna_4_Checkbox(kourna_4_checkbox);
	 	kourna_5_Checkbox(kourna_5_checkbox); 
	 	kourna_6_Checkbox(kourna_6_checkbox);
	 	kourna_7_Checkbox(kourna_7_checkbox);
	 	kourna_11_Checkbox(kourna_11_checkbox); 
	 }
}

function kourna_Meta_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_meta.style.display = "block";
	} else {
		sidebox_timer_kourna_meta.style.display = "none";
	}
}
function kourna_1_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_1.style.display = "block";
	} else {
		sidebox_timer_kourna_1.style.display = "none";
	}
}
function kourna_2_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_2.style.display = "block";
	} else {
		sidebox_timer_kourna_2.style.display = "none";
	}
}
function kourna_4_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_4.style.display = "block";
	} else {
		sidebox_timer_kourna_4.style.display = "none";
	}
}
function kourna_5_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_5.style.display = "block";
	} else {
		sidebox_timer_kourna_5.style.display = "none";
	}
}
function kourna_6_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_6.style.display = "block";
	} else {
		sidebox_timer_kourna_6.style.display = "none";
	}
}
function kourna_7_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_7.style.display = "block";
	} else {
		sidebox_timer_kourna_7.style.display = "none";
	}
}
function kourna_11_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		sidebox_timer_kourna_11.style.display = "block";
	} else {
		sidebox_timer_kourna_11.style.display = "none";
	}
}

function kourna_Troopmarshal_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		location_kourna_troopmarshal.style.opacity = 1;
		location_kourna_troopmarshal_image.style.opacity = 1;
	} else {
		location_kourna_troopmarshal.style.opacity = 0;
		location_kourna_troopmarshal_image.style.opacity = 0;
	}
}

function kourna_Agasaya_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true && checkbox.id == "kourna-agasaya-checkbox-1"){
		location_kourna_agasaya_1.style.opacity = 1;
		location_kourna_agasaya_image_1.style.opacity = 1;
	} else if (checkbox.checked == true && checkbox.id == "kourna-agasaya-checkbox-2") {
		location_kourna_agasaya_2.style.opacity = 1;
		location_kourna_agasaya_image_2.style.opacity = 1;
	} else if (checkbox.checked == true && checkbox.id == "kourna-agasaya-checkbox-3") {
		location_kourna_agasaya_3.style.opacity = 1;
		location_kourna_agasaya_image_3.style.opacity = 1;
	} else if (checkbox.checked == false && checkbox.id == "kourna-agasaya-checkbox-1"){
		location_kourna_agasaya_1.style.opacity = 0;
		location_kourna_agasaya_image_1.style.opacity = 0;
	} else if (checkbox.checked == false && checkbox.id == "kourna-agasaya-checkbox-2") {
		location_kourna_agasaya_2.style.opacity = 0;
		location_kourna_agasaya_image_2.style.opacity = 0;
	} else if (checkbox.checked == false && checkbox.id == "kourna-agasaya-checkbox-3") {
		location_kourna_agasaya_3.style.opacity = 0;
		location_kourna_agasaya_image_3.style.opacity = 0;
	}
}

function kourna_Asphodel_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true && checkbox.id == "kourna-asphodel-checkbox-1"){
		location_kourna_asphodel_1.style.opacity = 1;
		location_kourna_asphodel_image_1.style.opacity = 1;
	} else if (checkbox.checked == true && checkbox.id == "kourna-asphodel-checkbox-2") {
		location_kourna_asphodel_2.style.opacity = 1;
		location_kourna_asphodel_image_2.style.opacity = 1;
	} else if (checkbox.checked == true && checkbox.id == "kourna-asphodel-checkbox-3") {
		location_kourna_asphodel_3.style.opacity = 1;
		location_kourna_asphodel_image_3.style.opacity = 1;
	} else if (checkbox.checked == false && checkbox.id == "kourna-asphodel-checkbox-1"){
		location_kourna_asphodel_1.style.opacity = 0;
		location_kourna_asphodel_image_1.style.opacity = 0;
	} else if (checkbox.checked == false && checkbox.id == "kourna-asphodel-checkbox-2") {
		location_kourna_asphodel_2.style.opacity = 0;
		location_kourna_asphodel_image_2.style.opacity = 0;
	} else if (checkbox.checked == false && checkbox.id == "kourna-asphodel-checkbox-3") {
		location_kourna_asphodel_3.style.opacity = 0;
		location_kourna_asphodel_image_3.style.opacity = 0;
	}
}

function kourna_Cabochon_Checkbox(obj){
	var checkbox = obj;
	if (checkbox.checked == true){
		location_kourna_cabochon_1.style.opacity = 1;
		location_kourna_cabochon_image_1.style.opacity = 1;
	} else {
		location_kourna_cabochon_1.style.opacity = 0;
		location_kourna_cabochon_image_1.style.opacity = 0;
	}
}

function kourna_Enbilulu_Checkbox(obj){
	var checkbox = obj; 
	if (checkbox.checked == true && checkbox.id == "kourna-enbilulu-location-box-1"){
		location_kourna_enbilulu_1.style.opacity = 1;
		location_kourna_enbilulu_image_1.style.opacity = 1;
	} else if (checkbox.checked == true && checkbox.id == "kourna-enbilulu-location-box-3") {
		location_kourna_enbilulu_3.style.opacity = 1;
		location_kourna_enbilulu_image_3.style.opacity = 1;
	} else if (checkbox.checked == false && checkbox.id == "kourna-enbilulu-location-box-1") {
		location_kourna_enbilulu_1.style.opacity = 0;
		location_kourna_enbilulu_image_1.style.opacity = 0;
	} else if (checkbox.checked == false && checkbox.id == "kourna-enbilulu-location-box-3") {
		location_kourna_enbilulu_3.style.opacity = 0;
		location_kourna_enbilulu_image_3.style.opacity = 0;
	}
}

function change_arrow_colors_to_light_cyan(div){
	var set = div.children;
	for (i = 0; i < set.length; i++){
		set[i].style.borderBottom = '10px solid #bfffff'; 
		set[i].style.borderRight = '10px solid #bfffff';
	} 
}
function change_arrow_colors_to_cyan(div){
	var set = div.children;
	for (i = 0; i < set.length; i++){
		set[i].style.borderBottom = '10px solid #00ffff'; 
		set[i].style.borderRight = '10px solid #00ffff';
	} 
}

function show_arrows(div){
	div.style.opacity = 1;
}

function hide_arrows(div){
	div.style.opacity = 0;
}

function show_multiple_elements(initial_position, final_position, partial_name, style_type){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		if (style_type == 'display'){
			elem.style.display = 'block';
		} else if (style_type == 'opacity'){
			elem.style.opacity = 1;
		}
	}
} 
function show_multiple_elements_db_names(initial_position, final_position, partial_name1, partial_name2, style_type){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i+partial_name2);
		if (style_type == 'display'){
			elem.style.display = 'block';
		} else if (style_type == 'opacity'){
			elem.style.opacity = 1;
		}
	}
} 
function hide_multiple_elements(initial_position, final_position, partial_name, style_type){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		if (style_type == 'display'){
			elem.style.display = 'none';
		} else if (style_type == 'opacity'){
			elem.style.opacity = 0;
		}
	}
} 
function hide_multiple_elements_db_names(initial_position, final_position, partial_name1, partial_name2, style_type){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name1+i+partial_name2);
		if (style_type == 'display'){
			elem.style.display = 'none';
		} else if (style_type == 'opacity'){
			elem.style.opacity = 0;
		}
	}
} 




/* Shows circles depending on the position of the name in the HTML 
	initial_position = what ID to start off with 
	final_position = what ID to end off with
	partialName = Only partial of the name in the HTML. Ex: 'draconis-mons-meta-circle-'. 
				  The last number of the HTML is the initial and final position
	style_type = style.[type]. This depends whether a circle has an animation or not. 
				 If animated -> style_type = 'display'
				 If not animated -> style_type = 'opacity'
*/
function show_circles(initial_position, final_position, partial_name, style_type){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		if (style_type == 'display'){
			elem.style.display = 'block';
		} else if (style_type == 'opacity'){
			elem.style.opacity = 1;
		}
	}
} 
function hide_circles(initial_position, final_position, partial_name, style_type){ 
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		if (style_type == 'display'){
			elem.style.display = 'none';
		} else if (style_type == 'opacity'){
			elem.style.opacity = 0;
		}
	}
}

function change_circle_color_to_something(initial_position, final_position, partial_name, color){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		// Green
		switch (color){
			// Green
			case '#49C45B':
			elem.style.borderColor = '#49C45B';
			break;
			// Yellow
			case '#FCFF57':
			elem.style.borderColor = '#FCFF57';
			break;
			// #802020
			case '#F23D3D':
			elem.style.borderColor = '#F23D3D';
			break;
			// Blue 
			case '#3D58F2':
			elem.style.borderColor = '#3D58F2';
			break;
			// Purple
			case '#A73DF2':
			elem.style.borderColor = '#A73DF2';
			break;
		}

	}
}

function change_circle_color_to_yellow(initial_position, final_position, partial_name){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		elem.style.borderColor = '#FCFF57';
	}
}
function change_circle_color_to_green(initial_position, final_position, partial_name){
	var elem;
	for (i = initial_position; i <= final_position; i++){
		elem = document.getElementById(partial_name+i);
		elem.style.borderColor = '#49C45B';
	}
}
// Helper Functions 
// Place this into meta function timers
function time_text_and_labels_meta_less_than_0(time_text, time_label, sidebox_time, side_time_text_label){
    time_text.style.opacity = 1; 
    time_text.style.background = meta_color; 
    time_text.innerHTML = ready_message;
    time_label.style.color = "#802020";

    sidebox_time.style.background = meta_color;
    side_time_text_label.style.color = "#802020";
}
// Apply this into meta function timers < 60
function time_text_and_labels_meta_less_than_60(time_text, sidebox_time){
    time_text.style.opacity = 1; 
    time_text.style.background = pre_meta_color; 
    time_text.innerHTML = soon_message;

    sidebox_time.style.background = pre_meta_color;
}
// NON-METAS
function time_text_and_labels_less_than_0(time_label, sidebox_time, side_time_text_label){
    time_label.style.background = ready_color; 
    time_label.style.color = "#802020";

    sidebox_time.style.background = ready_color;
    side_time_text_label.style.color = "#802020";
}
// NON-METAS
function time_text_and_labels_less_than_60(time_label, sidebox_time){
    time_label.style.background = soon_color; 
    sidebox_time.style.background = soon_color;

    time_label.style.color = "black";
    sidebox_time.style.color = "";
}
// Change color of timer text when counting down
function start_countdown_color(text, sideText){
	//boxBackground.style.background = "#F8F9DE";
	//sideboxBackgroud.style.background = "#F8F9DE";
	text.style.color = "#008B11";
	sideText.style.color = "#008B11";
}

// Time 
function getTime(start, time, display, side_display, numerical_num){
	var diff,
	minutes,
	seconds;
	// diff = actual countdown 
	// 	 = [time of event] - [time when function is called - time of previous function is called]
	diff = time - (((Date.now() - start) / 1000) | 0);
	minutes = parseInt(diff / 60) | 0;
    seconds = parseInt(diff % 60) | 0;

    if (display == 'none'){
	    if (seconds <= -60 || minutes <= -1){
	    	if (seconds > -10){
	    		side_display.innerHTML = Math.abs(minutes) + ":0" + Math.abs(seconds);
	    	} else {
	    	seconds = seconds > -10 ? "0" + seconds : seconds;
	    	side_display.innerHTML = Math.abs(minutes) + ":" + Math.abs(seconds);
	    	}
	    } else if (seconds <= -10){
	    	side_display.innerHTML = "0:" + Math.abs(seconds);
	    } else if (seconds < 0){
	    	side_display.innerHTML = "0:0" + Math.abs(seconds);
	    } else {
	    	//minutes = minutes < 10 ? "0" + minutes : minutes;
	   	 	seconds = seconds < 10 ? "0" + seconds : seconds;
	    	side_display.innerHTML = minutes + ":" + seconds;
	    } 
	    numerical_num.innerHTML = diff;
	    // Use these objects to return 
	    // Ex: meh.time will give the actual countdown 
	    return {
	    	time: diff,
	    	side_display: side_display,
	    	numerical_num: numerical_num
	    };
	} else {
		if (seconds <= -60 || minutes <= -1){
	    	if (seconds > -10){
	    		display.innerHTML = Math.abs(minutes) + ":0" + Math.abs(seconds);
	    		side_display.innerHTML = display.innerHTML;

	    	} else {
	    	seconds = seconds > -10 ? "0" + seconds : seconds;
	    	display.innerHTML = Math.abs(minutes) + ":" + Math.abs(seconds);
	    	side_display.innerHTML = display.innerHTML;
	    	}
	    } else if (seconds <= -10){
	    	display.innerHTML = "0:" + Math.abs(seconds);
	    	side_display.innerHTML = display.innerHTML;
	    } else if (seconds < 0){
	    	display.innerHTML = "0:0" + Math.abs(seconds);
	    	side_display.innerHTML = display.innerHTML;
	    } else {
	    	//minutes = minutes < 10 ? "0" + minutes : minutes;
	   	 	seconds = seconds < 10 ? "0" + seconds : seconds;
	    	display.innerHTML = minutes + ":" + seconds;
	    	side_display.innerHTML = display.innerHTML;
	    } 
	    numerical_num.innerHTML = diff;
	    // Use these objects to return 
	    // Ex: meh.time will give the actual countdown 
	    return {
	    	time: diff,
	    	display: display,
	    	side_display: side_display,
	    	numerical_num: numerical_num
	    };
	}
}

// Time for metas
function getMetaTime(start, time){
	var diff,
	minutes,
	seconds;
	// diff = actual countdown 
	// 	 = [time of event] - [time when function is called - time of previous function is called]
	diff = time - (((Date.now() - start) / 1000) | 0);
    // Use these objects to return 
    // Ex: meh.time will give the actual countdown 
    return {
    	time: diff
    };
}

function getDisplayTime(time){
	var minutes = parseInt(time / 60, 10);
    var seconds = parseInt(time % 60, 10);

    if (seconds <= -60 || minutes <= -1){
    	if (seconds > -10){
    		return Math.abs(minutes) + ":0" + Math.abs(seconds);
    	} else {
    	seconds = seconds > -10 ? "0" + seconds : seconds;
    	return Math.abs(minutes) + ":" + Math.abs(seconds);
    	}
    } else if (seconds <= -10){
    	return "0:" + Math.abs(seconds);
    } else if (seconds < 0){
    	return "0:0" + Math.abs(seconds);
    } else {
    	//minutes = minutes < 10 ? "0" + minutes : minutes;
   	 	seconds = seconds < 10 ? "0" + seconds : seconds;
    	return minutes + ":" + seconds;
    }
} 

// =================================================================================
// ============================= EVENT TIMER FUNCTIONS =============================
// =================================================================================
// Dynamically make unique keys for all objects so that
// it can be unique timers. This allows the timers to 
// act independently when countdowning instead of messing
// up when you reset/restart
// PLACE THIS AFTER CREATING THE EVENT OBJECTS
function add_event_keys(objEvent){
	for (i = 0; i < objEvent.length; i++){
		objEvent[i].key = i;
	}
}
// Empty array to place timer countdowns in. By allowing to have their own space,
// it makes sure each timer is independent from one another and can still be
// called again by the same functions to be stopped or not
var placeholder = []; 
// Start the countdown of the timers 
function countdown(status, eventNum, eventCooldown, timeLabel, sideTimeLabel, sidebox, numCountdown){
    // Get the time right now
    let dateNow = Date.now();

    function run_countdown() {
        // Take the parameters from the event object to start counting down time and display it
        // Change color of texts and displays based on how much time is left (green for it's up, yellow for when it's coming, etc)
        let countdown = getTime(dateNow, eventCooldown, timeLabel, sideTimeLabel, numCountdown);
        if (countdown.time <= 0){ 
            timeLabel.style.background = ready_color;
            timeLabel.style.color = "#802020"; 
            sideTimeLabel.style.color = '#802020';
            sidebox.style.background = ready_color;
            sidebox.style.color = 'black';
            
        } else if (countdown.time <= 60){
            timeLabel.style.background = soon_color;
            timeLabel.style.color = "black"; 
            sideTimeLabel.style.color = "black";
            sidebox.style.background = soon_color;
            sidebox.style.color = "black"; 

        // Default -> Countdown number to green, bkg are normal
        } else if (countdown.time < eventCooldown){
            timeLabel.style.color = "#008B11";
            sideTimeLabel.style.color = "#008B11";
        }
    }
    // Run the function to do the countdown
    run_countdown(); 
    // Check if the status of the event is 1 or 0. If 1, do the countdown
    // Else, stop this specific timer
    //
    // Do [eventNum] because eventNum is unique to each event. This allows
    // each timer to act independently + can still be stopped/reset/etc when
    // this function is called again
    if (status == 1){
        placeholder[eventNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(placeholder[eventNum]);   
    } 
}

// Starts and stops an event
// objHTML = id of the html object itself
// objEvent = reference the specific events that are going to be called via HTML (this, auric.events)
function start_stop(objHTML, objEvent){
    // The container itself
    let timer = objHTML.id;
    // Based on the ID of the container, check what num is hard-coded as and match it with the event object
    let timerKey = objHTML.id.match(findNum)[0]; 
    // Status 0 = Stop 
    // Status 1 = Starting, Ongoing
    // When the Start button is clicked, change status to Starting and start timer
    // Else -> Keep status at Stop
    function start_event(timerKey){
        let start = "Start", 
            reset = "Reset",
            // Colors that are set by the dark/light mode
            setDefault = ''; 
        if (timer == objEvent[timerKey].startButton.id || timer == objEvent[timerKey].startSideButton.id){
        	// Start the countdown
            if (objEvent[timerKey].status == 0){
                objEvent[timerKey].status = 1; 
                objEvent[timerKey].doCountdown(); 

                objEvent[timerKey].startButton.value = reset;
                objEvent[timerKey].startSideButton.value = reset;
            // Stop the countdown
            } else {
                objEvent[timerKey].status = 0;
                objEvent[timerKey].startButton.value = start;
                objEvent[timerKey].startSideButton.value = start;

                objEvent[timerKey].timeLabel.style.color = setDefault;
                objEvent[timerKey].timeSideLabel.style.color = setDefault;
                objEvent[timerKey].timeLabel.style.background = 'rgba(255,246,214)';
                objEvent[timerKey].sidebox.style.background = setDefault;
                objEvent[timerKey].sidebox.style.color = setDefault;
                objEvent[timerKey].doCountdown();
            }   
        }
    }
    start_event(timerKey);
}

// Reset Button functionality
function reset (objHTML, objEvent){
    let timer = objHTML.id;
    let timerKey = objHTML.id.match(findNum)[0];
    /*
        When Reset button is clicked, 
        -> Change status to Stop 
        -> Reset timer to original time + 1
        -> Reset time label to oringal time
        -> Reset opacity of the text to hidden
    */
    // Remember to change these reset times to the RESPAWN rate and not the INITIAL SPAWN rate

    function reset_event(timerKey){
        if (timer == objEvent[timerKey].resetButton.id || timer == objEvent[timerKey].resetSideButton.id){
            if (objEvent[timerKey].status == 1){
                objEvent[timerKey].status = 0;
                objEvent[timerKey].cooldown = objEvent[timerKey].cooldown;
                objEvent[timerKey].timeLabel.style.color = "";

                objEvent[timerKey].timeSideLabel.innerHTML = '';
                objEvent[timerKey].sidebox.style.color = '';

                objEvent[timerKey].timeLabel.style.background = 'rgba(255,246,214)';
                objEvent[timerKey].sidebox.style.background = "transparent";

                // For events with different initial spawn and respawn rates 
                switch (objEvent[timerKey].name){
                    // AURIC BASIN
                    case "Blighted Saplings":
                    objEvent[timerKey].cooldown = 60 * 8 + 30; 
                    break;

                    case "Wyvern":
                    objEvent[timerKey].cooldown = 60 * 11;
                    break;

                    case "Ooze":
                    objEvent[timerKey].cooldown = 60 * 14; 
                    break;

                    case "Tendril":
                    objEvent[timerKey].cooldown = 60 * 10 + 15;
                    break;

                    // TANGLED DEPTHS
                    // NUHOCH
                    case "Nuhoch Chak Lobber":
                    objEvent[timerKey].cooldown = 60 * 36; 
                    break;

                    case "Nuhoch Elementals":
                    objEvent[timerKey].cooldown = 60 * 13;
                    break;

                    case "Nuhoch Sporlings":
                    objEvent[timerKey].cooldown = 60 * 30;
                    break; 

                    case "Nuhoch Grub Pit":
                    objEvent[timerKey].cooldown = 60 * 10 + 15; 
                    break;

                    case "Nuhoch Beetle":
                    objEvent[timerKey].cooldown = 60 * 12 + 15; 
                    break;

                    case "Nuhoch Alchemist":
                    objEvent[timerKey].cooldown = 60 * 30; 
                    break;

                    case "Nuhoch Zintl":
                    objEvent[timerKey].cooldown = 60 * 28 + 45;
                    break;

                    case "Nuhoch Skelk":
                    objEvent[timerKey].cooldown = 60 * 24; 
                    break;

                    // OGRE
                    case "Ogre Wyvern":
                    objEvent[timerKey].cooldown = 60 * 18; 
                    break;

                    case "Ogre Matriarch":
                    objEvent[timerKey].cooldown = 60 * 18 + 30;
                    break;

                    case "Ogre Chak":
                    objEvent[timerKey].cooldown = 60 * 17 + 30;
                    break;

                    case "Ogre Grub":
                    objEvent[timerKey].cooldown = 60 * 18 + 45;
                    break;

                    // RATA
                    case "Rata Chak Lobber":
                    objEvent[timerKey].cooldown = 60 * 18 + 15;
                    break;

                    case "Rata Haywire":
                    objEvent[timerKey].cooldown = 60 * 22 + 15;
                    break;

                    case "Rata Mushrooms":
                    objEvent[timerKey].cooldown = 60 * 30; 
                    break;

                    //SCAR 
                    case "SCAR Chak Crown":
                    objEvent[timerKey].cooldown = 60 * 36 + 30;
                    break;

                    case "SCAR Wyvern":
                    objEvent[timerKey].cooldown = 60 * 22 + 15;
                    break;

                    case "SCAR Wasps":
                    objEvent[timerKey].cooldown = 60 * 18 + 15;
                    break;

                    case "SCAR Chak Lobber":
                    objEvent[timerKey].cooldown = 60 * 30; 
                    break;

                }

                objEvent[timerKey].doCountdown(); 
                objEvent[timerKey].status = 1;
                objEvent[timerKey].doCountdown(); 
            }
        }
    }
    reset_event(timerKey);
}
// Gets the id of the timer list on the left side
// As the timers go off or reset, change the list order depending on the timers from most upcoming to least
function sortTimers(){
	// Make sure in the HTML, the ID of the sidebox matches
	let list = document.getElementById('side-timer-list'); 
	let sortList = setInterval(() => {
		let switching, i, x, y, shouldSwitch, 
			// Get all the timers from the timer list
			listObj = list.children; 
		// Default status
		switching = true;
		while (switching){
			switching = false; 

			for (i = 0; i < listObj.length - 1; i++){
				shouldSwitch = false; 
				// Compare current and next timer to see if one is greater than the other
				// If yes, then switch
				x = listObj[i].getElementsByTagName('p2');
				y = listObj[i+1].getElementsByTagName('p2');

				if (parseInt(x[0].innerHTML) > parseInt(y[0].innerHTML)){
					shouldSwitch = true;
					break;
				}
			}

			if (shouldSwitch){
				listObj[i].parentNode.insertBefore(listObj[i+1], listObj[i]);
				switching = true;
			}
		} 
	}, 1000)
}
// DELETE THIS AFTER ALL TIMER PAGES ARE DONE
// Sorts the event table on the left on Timer pages by upcoming event
function left_sidetimer_sort(obj){
  var switching, i, x, y, shouldSwitch;
  var left_sidetimer = obj.children;
  switching = true;

  while (switching) {
    switching = false;
    
    for (i = 0; i < (left_sidetimer.length - 1); i++) {
      shouldSwitch = false;
      
      x = left_sidetimer[i].getElementsByTagName("p2");
      y = left_sidetimer[i+1].getElementsByTagName("p2");

      if (parseInt(x[0].innerHTML) > parseInt(y[0].innerHTML)) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) { 
      left_sidetimer[i].parentNode.insertBefore(left_sidetimer[i + 1], left_sidetimer[i]);
      switching = true;
    }
  }
}

// Sorts the event table on the left on Timer pages by upcoming event
function left_sidetimer_sort(obj){
  var switching, i, x, y, shouldSwitch;
  var left_sidetimer = obj.children;
  switching = true;

  while (switching) {
    switching = false;
    
    for (i = 0; i < (left_sidetimer.length - 1); i++) {
      shouldSwitch = false;
      
      x = left_sidetimer[i].getElementsByTagName("p2");
      y = left_sidetimer[i+1].getElementsByTagName("p2");

      if (parseInt(x[0].innerHTML) > parseInt(y[0].innerHTML)) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) { 
      left_sidetimer[i].parentNode.insertBefore(left_sidetimer[i + 1], left_sidetimer[i]);
      switching = true;
    }
  }
}

// Shows or removes timer on the sideboxes depending if the users check or unchecks the checkbox
/*
function checkboxTimer(objHTML, objEvent){
    // Match the num on the html id to match the pos/key in the objEvent
    let timerKey = objHTML.id.match(findNum)[0];
    // Check if user has checked or unchecked checkbox
    if (objHTML.checked == true){
        objEvent[timerKey].sidebox.style.display = "block"; 
    } else {
        objEvent[timerKey].sidebox.style.display = "none";
    }
}
*/
// Custom checkboxes for specific ranges
// Ex: customCheckboxTimers(this, dragonfall.events, 1, 5, 9, 21)
function checkboxTimer(objHTML, objEvent, event1, event2, event3, event4, event5, event6, event7, event8, event9){
	let eventRange = new Array;
	let timerKey;
	// Get all the checkboxes
	let objChildren = objHTML.parentNode.getElementsByTagName('input');

	// Check if there's a number in the string of the current checkbox ID
	try {
		timerKey = objHTML.id.match(findNum)[0];
	} catch(error){
		console.log("There's no number in the current checkbox ID");
	}
	// Check if there are any event parms
	// If yes, then push them into the eventRange array
	if (typeof event1 !== 'undefined' && event1 !== 'all') eventRange.push(event1);
	if (typeof event2 !== 'undefined') eventRange.push(event2);
	if (typeof event3 !== 'undefined') eventRange.push(event3);
	if (typeof event4 !== 'undefined') eventRange.push(event4);
	if (typeof event5 !== 'undefined') eventRange.push(event5);
	if (typeof event6 !== 'undefined') eventRange.push(event6);
	if (typeof event7 !== 'undefined') eventRange.push(event7);
	if (typeof event8 !== 'undefined') eventRange.push(event8);
	if (typeof event9 !== 'undefined') eventRange.push(event9);

	// If only a single event (no event parms)
	if (eventRange.length == 0 && event1 !== 'all'){
		if (objHTML.checked == true){
	        objEvent[timerKey].sidebox.style.display = "block"; 
	    } else {
	        objEvent[timerKey].sidebox.style.display = "none";
	    }
	}
	// If multiple events (at least one event parms)
	if (eventRange.length !== 0 && event1 !== 'all'){
		if (objHTML.checked == true){
			for (i = 0; i < eventRange.length; i++){
				objEvent[eventRange[i]].sidebox.style.display = "block";
				objChildren[eventRange[i]].checked = true;
			}
		} else {
			for (i = 0; i < eventRange.length; i++){
				objEvent[eventRange[i]].sidebox.style.display = "none";
				objChildren[eventRange[i]].checked = false;
			}
		}
	}
	// If all events selected 
	if (event1 == 'all'){
		if (objHTML.checked == true){
			// Loop thru entire event json
			for (i = 0; i < objEvent.length; i++){
				// Check if any of the indexes are empty or dont have a sidebox
				try{
					objEvent[i].sidebox.style.display = "block";
				}	catch (error){
					console.log('Object does not have a sidebox');
				}
			}
			// Loop thru all checkboxes
			for (i = 0; i < objChildren.length; i++){
				objChildren[i].checked = true;
			}
			
		} else {
			for (i = 0; i < objEvent.length; i++){
				// Check if any of the indexes are empty or dont have a sidebox
				try{
					objEvent[i].sidebox.style.display = "none";
				}	catch (error){
					console.log('Object does not have a sidebox');
				}
			}
			// Loop thru all checkboxes
			for (i = 0; i < objChildren.length; i++){
				objChildren[i].checked = false;
			}
		}
	}
}

function nav_popup_overflow(){
	var nav_left = document.getElementById('nav-left-sidetimer-box'),
		nav_right = document.getElementById('nav-right-sidetimer-box-overflow');

	if (nav_left.style.display == 'none' || nav_right.style.display == 'none'){
		nav_left.style.display = 'block';
		nav_right.style.display = 'block'; 
	} else if (nav_left.style.display == 'block' || nav_right.style.display == 'block'){
		nav_left.style.display = 'none';
		nav_right.style.display = 'none'; 
	}
	else {
		nav_left.style.display = 'block';
		nav_right.style.display = 'block'; 
	}
}
function nav_popup(){
	var	nav_left = document.getElementById('nav-left-sidetimer-box'),
		nav_right = document.getElementById('nav-right-sidetimer-box');

	if (nav_left.style.display == 'none' || nav_right.style.display == 'none'){
		nav_left.style.display = 'block';
		nav_right.style.display = 'block'; 
	} else if (nav_left.style.display == 'block' || nav_right.style.display == 'block'){
		nav_left.style.display = 'none';
		nav_right.style.display = 'none'; 
	}
	else {
		nav_left.style.display = 'block';
		nav_right.style.display = 'block'; 
	}
}
function nav_popup_rightOnly(){
	var	nav_right = document.getElementById('nav-right-sidetimer-box');

	if (nav_right.style.display == 'none'){
		nav_right.style.display = 'block'; 
	} else if (nav_right.style.display == 'block'){
		nav_right.style.display = 'none'; 
	}
	else {
		nav_right.style.display = 'block'; 
	}
}
function nav_popup_maps(){
	var	nav = document.getElementById('nav-side-box');

	if (nav.style.display == 'none'){
		nav.style.display = 'block';
	} else if (nav.style.display == 'block' || nav.style.display == 'block'){
		nav.style.display = 'none';
	}
	else {
		nav.style.display = 'block';
	}
}
// For bookmarks
function toggleNav(leftBox, rightBox){
	var nav_left = document.getElementById(leftBox),
		nav_right = document.getElementById(rightBox);

	if (nav_left.style.display == 'none' || nav_right.style.display == 'none'){
		nav_left.style.display = 'block';
		nav_right.style.display = 'block'; 
	} else if (nav_left.style.display == 'block' || nav_right.style.display == 'block'){
		nav_left.style.display = 'none';
		nav_right.style.display = 'none'; 
	}
	else {
		nav_left.style.display = 'block';
		nav_right.style.display = 'block'; 
	}
}

// Checkboxes
// Write in the HTML: onclick = "checkbox_Timers(this, [id of the side timer box])"
function checkbox_Timers(checkbox, timerBox){
    var box = document.getElementById(timerBox);

    if (checkbox.checked == true){
        box.style.display = "block";
    } else {
        box.style.display = "none";
    }
}

function format_values(value){
	var amount = Math.floor(value);
	var negative = false; 
	var negative_symbol = '';
	var gold = 0;
	var silver = 0;
	var copper = 0;
	var copperHTML = ``;
	var silverHTML = ``;
	var goldHTML = ``;

	if (amount < 0){
		amount = amount * -1; 
		negative = true;
	}

	if (amount == 0){
		copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
	}


	if (amount > 0){ 
		copper = (amount % 100);
		amount = Math.floor(amount/100);
		if (copper >= 10){
			copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
		} else {
			copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "./images/assets/Copper_coin.png">`;
		}
		if (copper == 100){
			copper = 0;
			amount++;
		} 
	}
	if (amount > 0){
		silver = amount % 100; 
		amount = Math.floor(amount / 100);


		if (silver >= 10){
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
		} else {
			silverHTML = " 0"+`${silver}  <img style="vertical-align:middle;" src = "./images/assets/Silver_coin.png">`;
		}
		if (silver == 100){
			silver = 0;
			amount++;
		}
	}
	if (amount <= 0){
		
	} else {
		if (amount > 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = `${gold} <img style="vertical-align:middle;" src = "./images/assets/Gold_coin.png">`;
		}
	}
	

	if (negative == true){
		negative_symbol = ' -';
		if (silver > 0){
			goldHTML = ``;
			if (silver > 0){
				silverHTML = `${negative_symbol}${silverHTML}`;
			} else {
				silverHTML = ``;
				if (copper > 0){
					copperHTML = `${negative_symbol}${copperHTML}`;
				} else {
					copperHTML = ``;
				} 
			}
		} 
	}

	return {
		copper: copperHTML,
		silver: silverHTML,
		gold: goldHTML
	};
}
function format_values_subpage(value){
	var amount = Math.floor(value);
	var negative = false; 
	var negative_symbol = '';
	var gold = 0;
	var silver = 0;
	var copper = 0;
	var copperHTML = ``;
	var silverHTML = ``;
	var goldHTML = ``;
	var result;

	if (amount < 0){
		amount = amount * -1; 
		negative = true;
	}

	if (amount == 0){
		copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
	}


	if (amount > 0){ 
		copper = (amount % 100);
		amount = Math.floor(amount/100);
		if (copper >= 10){
			copperHTML = ` ${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
		} else {
			copperHTML = " 0"+`${copper} <img style="vertical-align:middle;" src = "../images/assets/Copper_coin.png">`;
		}
		if (copper == 100){
			copper = 0;
			amount++;
		} 
	}
	if (amount > 0){
		silver = amount % 100; 
		amount = Math.floor(amount / 100);


		if (silver >= 10){
			silverHTML = ` ${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
		} else {
			silverHTML = " 0"+`${silver}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
		}
		if (silver == 100){
			silver = 0;
			amount++;
		}
	}
	if (amount <= 0){
		
	} else {
		if (amount > 10){
			gold = amount;
			goldHTML = ` ${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		} else {
			gold = amount;
			goldHTML = `${gold} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		}
	}
	

	if (negative == true){
		negative_symbol = ' -';
		if (gold > 0){
			goldHTML = `${gold*-1} <img style="vertical-align:middle;" src = "../images/assets/Gold_coin.png">`;
		} else {
			goldHTML = ``;
			if (silver > 0){
				silverHTML = `${silver*-1}  <img style="vertical-align:middle;" src = "../images/assets/Silver_coin.png">`;
			} else {
				silverHTML = ``;
				if (copper > 0){
					copperHTML = `${copper*-1} <img style="vertical-align:middle;" src = "https://wiki.guildwars2.com/images/e/eb/Copper_coin.png">`;
				} else {
					copperHTML = ``;
				} 
			}
		} 
	} 

	return {
		copper: copperHTML,
		silver: silverHTML,
		gold: goldHTML
	};
}

function displayValues(value, path){
	var amount = Math.floor(value);
	var negative = false; 
	var negative_symbol = '';
	var gold = 0;
	var silver = 0;
	var copper = 0;
	var copperHTML = ``;
	var silverHTML = ``;
	var goldHTML = ``;
	var result;

	let imgCopper, imgSilver, imgGold; 
	let imgCheck = 0; 
	let dot; 

	if (path == 0){
		dot = ".";
	} else {
		dot = "..";
	}

	imgCopper = `<img style='vertical-align:middle;' src = '${dot}/images/assets/Copper_coin.png'>`;
	imgSilver = `<img style='vertical-align:middle;' src = '${dot}/images/assets/Silver_coin.png'>`;
	imgGold = `<img style='vertical-align:middle;' src = '${dot}/images/assets/Gold_coin.png'>`;

	if (amount < 0){
		amount = amount * -1; 
		negative = true;
	}

	if (amount == 0){
		copperHTML = " 0"+`${copper} ` + imgCopper;
	}


	if (amount > 0){ 
		copper = (amount % 100);
		amount = Math.floor(amount/100);
		if (copper >= 10){
			copperHTML = ` ${copper} ` + imgCopper;
		} else {
			copperHTML = " 0"+`${copper} ` + imgCopper;
		}
		if (copper == 100){
			copper = 0;
			amount++;
		} 
	}
	if (amount > 0){
		silver = amount % 100; 
		amount = Math.floor(amount / 100);


		if (silver >= 10){
			silverHTML = ` ${silver} ` + imgSilver;
		} else {
			silverHTML = " 0"+`${silver} ` + imgSilver;
		}
		if (silver == 100){
			silver = 0;
			amount++;
		}
	}
	if (amount <= 0){
		
	} else {
		if (amount > 10){
			gold = amount;
			goldHTML = ` ${gold} ` + imgGold;
		} else {
			gold = amount;
			goldHTML = `${gold} ` + imgGold;
		}
	}
	

	if (negative == true){
		negative_symbol = ' -';
		if (gold > 0){
			goldHTML = `${gold*-1} ` + imgGold;
		} else {
			goldHTML = ``;
			if (silver > 0){
				silverHTML = `${silver*-1}  ` + imgSilver;
			} else {
				silverHTML = ``;
				if (copper > 0){
					copperHTML = `${copper*-1} ` + imgCopper;
				} else {
					copperHTML = ``;
				} 
			}
		} 
	} 

	return result = goldHTML + silverHTML + copperHTML;
}

function copyText(input) {
  var text = document.getElementById(input);
  text.select();
  text.setSelectionRange(0, 99999)
  document.execCommand("copy");

  var copyWord = text.parentNode.children[2]; 
  copyWord.style.opacity = 1; 

  setTimeout(function(){copyWord.style.opacity = 0; }, 2000);
}

function copyValue(input) {
  var text = document.getElementById(input);
  var tempText = text.value;
  if (text.value == "Copied!"){
  	text.value = tempText;
  } else {
  	tempText = text.value;
  	text.select();
  	text.setSelectionRange(0, 99999)
  	document.execCommand("copy");

  	text.value = "Copied!";
  	setTimeout(function(){text.value = tempText}, 1000); 
  }
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

function fadeOutandBack(div){
	div.style.opacity = 0.5;
	setTimeout(function(){
		div.style.opacity = 1;
	}, 300);
}

// For the gathering-workspace buttons
// When user clicks on the +1, +2, etc buttons, add value to the output area
function add_num_to_node(button){
	let subNodes = button.parentNode.getElementsByClassName("workspace-sub")[0].children[0],
		subStrikes = button.parentNode.getElementsByClassName("workspace-sub")[0].children[1]; 

	let nodeName = button.parentNode.getElementsByClassName("node-name")[0];
	let placeholder = nodeName.placeholder; 

	console.log(nodeName);

	let sumNodes = 0,
		sumStrikes = 0;
	// Check if there's 'rich' in the name
	function check_node_type(){
		if (nodeName.value.includes("rich") || nodeName.value.includes("Rich")){
			subStrikes.value = parseInt(subStrikes.value) + 10; 
		} else if (placeholder != "Plant"){
			subStrikes.value = parseInt(subStrikes.value) + 3;
		} else {
			subStrikes.value = parseInt(subStrikes.value) + 1;
		}
	}

	// Depending on what the value of the button pressed, add that value to the output
	switch (button.value){
		case "+1": 
		subNodes.value = parseInt(subNodes.value) + 1; 
		check_node_type(); 
		break;
		case "+2": 
		subNodes.value = parseInt(subNodes.value) + 2; 
		subStrikes.value = parseInt(subStrikes.value) + 2; 
		break;
		case "+3": 
		subNodes.value = parseInt(subNodes.value) + 3; 
		subStrikes.value = parseInt(subStrikes.value) + 3; 
		break;
		case "+4": 
		subNodes.value = parseInt(subNodes.value) + 4; 
		subStrikes.value = parseInt(subStrikes.value) + 4;
		break;

	}
}
