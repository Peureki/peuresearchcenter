let date1 = new Date(Date.UTC(2021,0,7,20)); 
let date2 = new Date(); 
let weeksAgo = Math.floor((date2-date1)/604800000);

let input_bauble = document.getElementById('input-bauble'),
    input_map_bonus = document.getElementById('input-map-bonus');

switch (weeksAgo % 3){
    case 0:
    input_bauble.innerHTML = "Tangled Depths";
    break;

    case 1: 
    input_bauble.innerHTML = "Verdant Brink";
    break;

    case 2: 
   	input_bauble.innerHTML = "Auric Basin";
    break;
}

switch (weeksAgo % 8){
    case 0:
    input_map_bonus.innerHTML = "Week 3";
    break;

    case 1: 
    input_map_bonus.innerHTML = "Week 4";
    break;

    case 2: 
    input_map_bonus.innerHTML = "Week 5";
    break;

    case 3: 
    input_map_bonus.innerHTML = "Week 6";
    break;

    case 4: 
    input_map_bonus.innerHTML = "Week 7";
    break;

    case 5: 
    input_map_bonus.innerHTML = "Week 8";
    break;

    case 6: 
    input_map_bonus.innerHTML = "Week 1";
    break;

    case 7: 
    input_map_bonus.innerHTML = "Week 2";
    break;
}