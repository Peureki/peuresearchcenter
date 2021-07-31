

function new_Train(dd,hr,min,sec,progressBarHTML,numHTML,boxHTML,nameHTML,nextHTML,placement){

	var bonusMap = ["Verdant Brink", "Auric Basin", "Tangled Depths"];
	var d1 = new Date(Date.UTC(2021,0,7,20)); 
	var d2 = new Date(); 
	var weeksAgo = Math.floor((d2-d1)/604800000);

    var days_HTML = document.getElementById(dd),
        hours_HTML = document.getElementById(hr),
        minutes_HTML = document.getElementById(min),
        seconds_HTML = document.getElementById(sec),
        progress_bar = document.getElementById(progressBarHTML),
        num = document.getElementById(numHTML),
        box = document.getElementById(boxHTML),
        input_train = document.getElementById(nameHTML),
        input_next = document.getElementById(nextHTML);

    var days = 4,
        hours = 20,
        minutes = 0,
        seconds = 0;

    var width,
        temp_time = 0,
        pre_time = 0,
        event_time,
        end_time, 
        result,
        num_result;

    console.log("Days until thursday:", 4 - d2.getDay())
    daysUntilThursday = 4 - d2.getDay();
    //daysInAWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];


    switch (weeksAgo % 3){
	    case 0: input_train.innerHTML = "Verdant Brink"; //input_next.innerHTML = new Date(d2.getFullYear(), d2.getMonth(), d2.getDate() + daysUntilThursday, 20); 
	    input_next.innerHTML = 

	    console.log("It's Verdant Brink week!");
	    break;

	    case 1: 
	    console.log("It's Tangled Depths week!");
	    break;

	    case 2: 
	    console.log("It's Auric Basin week!");
	    break;
	}

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCDay()*86400 + d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds();

        progress_bar.style.background = "#ddd"; // bar disppears
        pre_time = 0; // Time until the end of the cycle
        event_time = 0; // Total duration of a week
        // The time of the end of the cycle
        end_time = ((days * 86400) + (hours * 3600) + (minutes * 60) + (seconds));
        
        result = end_time - time;
        num_result = result; // Makes sure the sorting stays accurate and also to not invert when result < 0

        event_time = 604800;
        pre_time = 604800 - result;
        progress_bar.style.background = 'rgb(215, 161, 93)';

        // Event is 1 day left && 1 hour
        /*
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
	*/
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
