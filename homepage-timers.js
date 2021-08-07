var bonusMap = ["Verdant Brink", "Auric Basin", "Tangled Depths"];
/*
function getWeekNumber(d) {
    d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
    // Set to nearest Thursday: current date + 4 - current day number
    // Make Sunday's day number 7
    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||7));
    // Get first day of year
    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
    // Calculate full weeks to nearest Thursday
    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
    // Return array of year and week number
    return [d.getUTCFullYear(), weekNo];
}

var result = getWeekNumber(new Date());
console.log('It\'s currently week ' + result[1] + ' of ' + result[0]);
console.log("It's currently week " + (result[1]+2));

function whichBonusMap(){
    var result = getWeekNumber(new Date());

    if ((result[1]+2) == )
}
*/
var d1 = new Date(Date.UTC(2021,0,7,20)); 
var d2 = new Date(); 
var weeksAgo = Math.floor((d2-d1)/604800000);

switch (weeksAgo % 3){
    case 0:
    break;

    case 1: 
    break;

    case 2: 
    break;
}

async function new_Train(dd,hr,min,sec,progressBarHTML,numHTML,boxHTML,nameHTML,timeHTML,placement){

    const api = 'https://script.google.com/macros/s/AKfycbwZy_zeLTJRuKWBQN6fL7Z-W5g7p4PYKPVCyaGeY905U7OPSO3vCI4Q/exec';
    const response = await fetch(api);
    const data = await response.json();

    // Date (year, month, day, hour, minute, second, milisecond)
    //var newDate = new Date(Date.UTC(data.spreadsheet[0].farm, data.spreadsheet[0].days, data.spreadsheet[0].hours, data.spreadsheet[0].minutes));

    var days_HTML = document.getElementById(dd),
        hours_HTML = document.getElementById(hr),
        minutes_HTML = document.getElementById(min),
        seconds_HTML = document.getElementById(sec),
        progress_bar = document.getElementById(progressBarHTML),
        num = document.getElementById(numHTML),
        box = document.getElementById(boxHTML),
        input_train = document.getElementById(nameHTML),
        input_time = document.getElementById(timeHTML);

    var days = parseInt(data.spreadsheet[placement].day),
        hours = parseInt(data.spreadsheet[placement].hour),
        minutes = parseInt(data.spreadsheet[placement].minute),
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

    var allM = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var allD = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];


    input_train.innerHTML = data.spreadsheet[placement].name;
    //input_time.innerHTML = date;

    if (data.spreadsheet[placement].name == ""){
        box.style.opacity = 0.2;
    }

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

        progress_bar.style.background = "#ddd"; // bar disppears
        pre_time = 0;
        event_time = 0;

        end_time = ((days * 86400) + (hours * 3600) + (minutes * 60) + (seconds));

        // If a Saturday train is beyond reset, this makes sure the time still stays relevant for UTC time
        if (days == 6 && d.getUTCDay() == 0 && d.getUTCHours() < 3){
            time = 6*86400 + (d.getUTCHours()*3600 + 24*3600) + d.getUTCMinutes()*60 + d.getUTCSeconds();
        }

        if (days == 6 && d.getUTCDay() == 0){
            time = 7*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();
        }
        if (days == 6 && d.getUTCDay() == 1){
            time = 8*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();
        }
        if (days == 6 && d.getUTCDay() == 2){
            time = 9*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();
        }
        
        result = end_time - time;
        num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

        // Event is 1 day left && 1 hour
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


        format_time(result, days_HTML, hours_HTML, minutes_HTML, seconds_HTML);
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

// Get ids of the color faders
var topFader = document.getElementById('top-fader'),
    bottomFader = document.getElementById('bottom-fader'),
    leftFader = document.getElementById('left-fader'),
    rightFader = document.getElementById('right-fader'),

    faderCheck = -1, // Num to check if a previous fader has been used already
    choya = document.getElementById('display-choya'),
    choyaNum, 
    choyaNumCheck = -1; // These choya nums are to check if a choya has been summoned twice. -1 b/c it's always not array
// Collection of choyas for the animation to loop through
var choyaCollection = [
    "./images/assets/red-choya.png",
    "./images/assets/gold-choya.png",
    "./images/assets/timer-choya.png",
    "./images/assets/research-choya.png",
    "./images/assets/blue-choya.png",
    "./images/assets/gathering-choya.png",

    "./images/assets/baltazar-choya.png",
    "./images/assets/bread-choya.png",
    "./images/assets/dragonblood-choya.png",
    "./images/assets/golem-choya.png",
    "./images/assets/good-choya.png",
    "./images/assets/ice-daddy-choya.png",
    "./images/assets/kitty-blu-choya-transparent.jpg",
    "./images/assets/meh-choya.png",
    "./images/assets/parachute-choya.png",
    "./images/assets/sad-choya.png",
    "./images/assets/thorn-choya.png",
    "./images/assets/zombie-choya.png",
]
// Every few seconds, continuously fade the choya out, bring new choya in
// Delay start for a few seconds to showcase the og peu choya
setTimeout(function displayChoya() {
    // Depending on the fader, apply height/width to 100% half way thru
    // Then switch choya picture
    // Then go backwards to reset
    faderCheck = randomNum(3);
    switch (faderCheck){
        case 0: topFader.animate([
            {
                height: "0%",
                zIndex: 1,
            },
            {
                height: "100%",
                zIndex: 1,
                offset: 0.5,
            },
            {
                height: "0%",
                zIndex: 1,
            }
            ], {
                duration: 5000,
                easing: "linear",
                fill: "forwards",
                iterations: 1,
            });
            break;
        case 1: bottomFader.animate([
            {
                height: "0%",
                zIndex: 1,
            },
            {
                height: "100%",
                zIndex: 1,
                offset: 0.5,
            },
            {
                height: "0%",
                zIndex: 1,
            }
            ], {
                duration: 5000,
                easing: "linear",
                fill: "forwards",
                iterations: 1,
            });
            break;
        case 2: leftFader.animate([
            {
                width: "0%",
                zIndex: 1,
            },
            {
                width: "100%",
                zIndex: 1,
                offset: 0.5,
            },
            {
                width: "0%",
                zIndex: 1,
            }
            ], {
                duration: 5000,
                easing: "linear",
                fill: "forwards",
                iterations: 1,
            });
            break;
        case 3: rightFader.animate([
            {
                width: "0%",
                zIndex: 1,
            },
            {
                width: "100%",
                zIndex: 1,
                offset: 0.5,
            },
            {
                width: "0%",
                zIndex: 1,
            }
            ], {
                duration: 5000,
                easing: "linear",
                fill: "forwards",
                iterations: 1,
            });
            break;
    }
    
    
    
    // In between the 50% of the slider, display the new choya
    // Timeout at 2900 because since it's 'ease', the animation fully hits 100% at 3 seconds
    // Repeat timeout with same delay as duration of slider animation
    setTimeout(function setChoya() {
        
        choyaNum = randomNum(choyaCollection.length);
        // Check if the numCheck is default or if it matches the previous iteration
        if (choyaNumCheck == -1 || choyaNumCheck != choyaNum){
            choya.src = choyaCollection[choyaNum];
            choyaNumCheck = choyaNum;
            setTimeout(displayChoya, 2500);
        } else {
            // Check if choyaNum is 0 or the max
            if (choyaNum == 0){
                choyaNum = 1; 
            } else if (choyaNum == choyaCollection.length - 1){
                choyaNum = choyaCollection.length - 2;
            } else {
                choyaNum += 1;
            }
            choya.src = choyaCollection[choyaNum];
            choyaNumCheck = choyaNum;
            setTimeout(displayChoya, 2500);   
        }
    
        
    }, 2500)
}, 2500);

var randomNum = (max) => Math.floor(Math.random() * max);



