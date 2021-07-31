var greenText = "#329340";
var redText = "#933232";

function verdantLootTimer(progressBarHTML, fullTimeHTML, nextTextHTML, currentTextHTML){
    var progressBar = document.getElementById(progressBarHTML),
        fullTime = document.getElementById(fullTimeHTML),
        nextText = document.getElementById(nextTextHTML),
        currentText = document.getElementById(currentTextHTML);

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
            result,
            endTime,
            eventTime;

        // Day = every even hour at :30 til odd hour at :45 (UTC time)
        // Night = every odd hour at :45 til even hour at :30 (UTC time)
        // Night bosses = every even hour at :10 til even hour at :30 (UTC time)
        // 
        // Worse timet to get loot: 0:30-1:45
        // Best time to get loot: 1:45-2:30
        function displayTime(prev_hr, hr, next_hr){
            if (d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
                prev_hr = -2;
                hr = -1;
                next_hr = 0; 
            }
            // G

            // Not loot time
            if (d.getUTCHours() == prev_hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == hr && d.getUTCMinutes() < 30){

                progressBar.style.background = progress_color;
                nextText.innerHTML = "Good time to loot chests";
                currentText.innerHTML = "Bad time to loot chests. Outposts starting to progress.";
                currentText.style.color = redText;

                endTime = ((hr * 3600) + (30 * 60)) - ((prev_hr * 3600) + (30 * 60));
                eventTime = time - ((prev_hr * 3600) + (30 * 60));
                result = ((hr * 3600) + (30 * 60)) - time;

            }
            // Good loot time
            if (d.getUTCHours() == hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == next_hr && d.getUTCMinutes() < 30){
                progressBar.style.background = meta_color;
                nextText.innerHTML = "Map Reset";
                currentText.innerHTML = "Good time to loot chests. Outposts completed and/or close to complete.";
                currentText.style.color = greenText;

                endTime = ((next_hr * 3600) + (30 * 60)) - ((hr * 3600) + (30 * 60));
                eventTime = time - ((hr * 3600) + (30 * 60));
                result = ((next_hr * 3600) + (30 * 60)) - time;
            }

            width = (eventTime/endTime)*100;
            progressBar.style.width = width + "%";

            fullTime.innerHTML = getDisplayTime(result); 
        }
        
        console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());

        if (d.getUTCHours() == 0 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 30){
            displayTime(0,1,2);
        }
        if (d.getUTCHours() == 2 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
            displayTime(2,3,4);
        }
        if (d.getUTCHours() == 4 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 30){
            displayTime(4,5,6);
        }
        if (d.getUTCHours() == 6 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
            displayTime(6,7,8);
        }
        if (d.getUTCHours() == 8 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 30){
            displayTime(8,9,10);
        }
        if (d.getUTCHours() == 10 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
            displayTime(10,11,12);
        }
        if (d.getUTCHours() == 12 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 30){
            displayTime(12,13,14);
        }
        if (d.getUTCHours() == 14 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 30){
            displayTime(14,15,16);
        }
        if (d.getUTCHours() == 16 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 30){
            displayTime(16,17,18);
        }
        if (d.getUTCHours() == 18 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
            displayTime(18,19,20);
        }
        if (d.getUTCHours() == 20 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 30){
            displayTime(20,21,22);
        }
        if (d.getUTCHours() == 22 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
            displayTime(22,23,24);
        }
        
        }, 1000);
}

function auricLootTimer(progressBarHTML, fullTimeHTML, nextTextHTML, currentTextHTML){
    var progressBar = document.getElementById(progressBarHTML),
        fullTime = document.getElementById(fullTimeHTML),
        nextText = document.getElementById(nextTextHTML),
        currentText = document.getElementById(currentTextHTML);

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
            result,
            endTime,
            eventTime;

        // Pylons start every odd UTC :30
        // Meta starts every odd UTC :00
        //
        // Good loot time every even UTC :30 til odd UTC :30
        function displayTime(prev_hr, hr, next_hr){
            if (d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
                prev_hr = -2;
                hr = -1;
                next_hr = 0; 
            }
            // G
            // Good loot time
            if (d.getUTCHours() == prev_hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == hr && d.getUTCMinutes() < 30){

                progressBar.style.background = meta_color;
                nextText.innerHTML = "Map Reset";
                currentText.innerHTML = "Good time to loot chests. Outposts completed and/or close to complete.";
                currentText.style.color = greenText;

                endTime = ((hr * 3600) + (30 * 60)) - ((prev_hr * 3600) + (30 * 60));
                eventTime = time - ((prev_hr * 3600) + (30 * 60));
                result = ((hr * 3600) + (30 * 60)) - time;

            }
            // Bad loot time
            if (d.getUTCHours() == hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == next_hr && d.getUTCMinutes() < 30){

                progressBar.style.background = progress_color;
                nextText.innerHTML = "Good time to loot chests";
                currentText.innerHTML = "Bad time to loot chests. Outposts starting to progress.";
                currentText.style.color = redText;

                endTime = ((next_hr * 3600) + (30 * 60)) - ((hr * 3600) + (30 * 60));
                eventTime = time - ((hr * 3600) + (30 * 60));
                result = ((next_hr * 3600) + (30 * 60)) - time;
            }

            width = (eventTime/endTime)*100;
            progressBar.style.width = width + "%";

            fullTime.innerHTML = getDisplayTime(result); 
        }
        
        console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());

        if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 30){
            displayTime(0,1,2);
        }
        if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 30){
            displayTime(2,3,4);
        }
        if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 30){
            displayTime(4,5,6);
        }
        if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 30){
            displayTime(6,7,8);
        }
        if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 30){
            displayTime(8,9,10);
        }
        if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 30){
            displayTime(10,11,12);
        }
        if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 30){
            displayTime(12,13,14);
        }
        if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 30){
            displayTime(14,15,16);
        }
        if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 30){
            displayTime(16,17,18);
        }
        if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 30){
            displayTime(18,19,20);
        }
        if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 30){
            displayTime(20,21,22);
        }
        if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 30){
            displayTime(22,23,24);
        }
        
        }, 1000);
}

function tangledLootTimer(progressBarHTML, fullTimeHTML, nextTextHTML, currentTextHTML){
    var progressBar = document.getElementById(progressBarHTML),
        fullTime = document.getElementById(fullTimeHTML),
        nextText = document.getElementById(nextTextHTML),
        currentText = document.getElementById(currentTextHTML);

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
            result,
            endTime,
            eventTime;

        // Outposts start every even UTC :46
        // Meta starts every even UTC :30
        //
        // Good loot time every odd UTC :30 til even UTC :46
        function displayTime(prev_hr, hr, next_hr){
            if (d.getUTCHours() == 0 && d.getUTCMinutes() < 46){
                prev_hr = -2;
                hr = -1;
                next_hr = 0; 
            }
            // Good loot time
            if (d.getUTCHours() == prev_hr && d.getUTCMinutes() >= 46 || d.getUTCHours() == hr && d.getUTCMinutes() < 30){

                progressBar.style.background = progress_color;
                nextText.innerHTML = "Good time to loot chests";
                currentText.innerHTML = "Bad time to loot chests. Outposts starting to progress.";
                currentText.style.color = redText;

                endTime = ((hr * 3600) + (30 * 60)) - ((prev_hr * 3600) + (46 * 60));
                eventTime = time - ((prev_hr * 3600) + (46 * 60));
                result = ((hr * 3600) + (30 * 60)) - time;

            }
            // Bad loot time
            if (d.getUTCHours() == hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == next_hr && d.getUTCMinutes() < 46){

                progressBar.style.background = meta_color;
                nextText.innerHTML = "Map Reset";
                currentText.innerHTML = "Good time to loot chests. Outposts completed and/or close to complete.";
                currentText.style.color = greenText;
                
                endTime = ((next_hr * 3600) + (46 * 60)) - ((hr * 3600) + (30 * 60));
                eventTime = time - ((hr * 3600) + (30 * 60));
                result = ((next_hr * 3600) + (46 * 60)) - time;
            }

            width = (eventTime/endTime)*100;
            progressBar.style.width = width + "%";

            fullTime.innerHTML = getDisplayTime(result); 
        }
        
        console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());

        if (d.getUTCHours() == 0 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 1 || d.getUTCHours() == 2 && d.getUTCMinutes() < 46){
            displayTime(0,1,2);
        }
        if (d.getUTCHours() == 2 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 3 || d.getUTCHours() == 4 && d.getUTCMinutes() < 46){
            displayTime(2,3,4);
        }
        if (d.getUTCHours() == 4 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 5 || d.getUTCHours() == 6 && d.getUTCMinutes() < 46){
            displayTime(4,5,6);
        }
        if (d.getUTCHours() == 6 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 7 || d.getUTCHours() == 8 && d.getUTCMinutes() < 46){
            displayTime(6,7,8);
        }
        if (d.getUTCHours() == 8 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 9 || d.getUTCHours() == 10 && d.getUTCMinutes() < 46){
            displayTime(8,9,10);
        }
        if (d.getUTCHours() == 10 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 11 || d.getUTCHours() == 12 && d.getUTCMinutes() < 46){
            displayTime(10,11,12);
        }
        if (d.getUTCHours() == 12 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 13 || d.getUTCHours() == 14 && d.getUTCMinutes() < 46){
            displayTime(12,13,14);
        }
        if (d.getUTCHours() == 14 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 15 || d.getUTCHours() == 16 && d.getUTCMinutes() < 46){
            displayTime(14,15,16);
        }
        if (d.getUTCHours() == 16 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 17 || d.getUTCHours() == 18 && d.getUTCMinutes() < 46){
            displayTime(16,17,18);
        }
        if (d.getUTCHours() == 18 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 19 || d.getUTCHours() == 20 && d.getUTCMinutes() < 46){
            displayTime(18,19,20);
        }
        if (d.getUTCHours() == 20 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 21 || d.getUTCHours() == 22 && d.getUTCMinutes() < 46){
            displayTime(20,21,22);
        }
        if (d.getUTCHours() == 22 && d.getUTCMinutes() >= 46 || d.getUTCHours() == 23 || d.getUTCHours() == 0 && d.getUTCMinutes() < 46){
            displayTime(22,23,24);
        }
        
        }, 1000);
}

function dragonStandLootTimer(progressBarHTML, fullTimeHTML, nextTextHTML, currentTextHTML){
    var progressBar = document.getElementById(progressBarHTML),
        fullTime = document.getElementById(fullTimeHTML),
        nextText = document.getElementById(nextTextHTML),
        currentText = document.getElementById(currentTextHTML);

    var timer = setInterval(function(){
        var d = new Date();
        var time = d.getUTCHours()*3600 + d.getUTCMinutes()*60 + d.getUTCSeconds(),
            result,
            endTime,
            eventTime;

        // Fresh maps start at odd hrs xx:30
        //
        function displayTime(prev_hr, hr, next_hr){
            if (d.getUTCHours() == 0){
                prev_hr = -1;
                hr = 0;
                next_hr = 1; 
            }
            // Good loot time
            if (d.getUTCHours() == prev_hr && d.getUTCMinutes() >= 30 || d.getUTCHours() == hr && d.getUTCMinutes() < 45){

                progressBar.style.background = meta_color;
                nextText.innerHTML = "Close to Map Reset";
                currentText.innerHTML = "Good time to find a map via LFG. Progress the meta to get more chests.";
                currentText.style.color = greenText;

                endTime = ((hr * 3600) + (45 * 60)) - ((prev_hr * 3600) + (30 * 60));
                eventTime = time - ((prev_hr * 3600) + (30 * 60));
                result = ((hr * 3600) + (45 * 60)) - time;

            }
            // Bad loot time
            if (d.getUTCHours() == hr && d.getUTCMinutes() >= 45 || d.getUTCHours() == next_hr && d.getUTCMinutes() < 30){
                
                progressBar.style.background = progress_color;
                nextText.innerHTML = "Good time to find a map";
                currentText.innerHTML = "Bad time. There may be a map on the brink of finishing, but it's close until the meta resets";
                currentText.style.color = redText;
                
                endTime = ((next_hr * 3600) + (30 * 60)) - ((hr * 3600) + (45 * 60));
                eventTime = time - ((hr * 3600) + (45 * 60));
                result = ((next_hr * 3600) + (30 * 60)) - time;
            }

            width = (eventTime/endTime)*100;
            progressBar.style.width = width + "%";

            fullTime.innerHTML = getDisplayTime(result); 
        }
        
        console.log(d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds());

        if (d.getUTCHours() == 1 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 2 || d.getUTCHours() == 3 && d.getUTCMinutes() < 30){
            displayTime(1,2,3);
        }
        if (d.getUTCHours() == 3 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 4 || d.getUTCHours() == 5 && d.getUTCMinutes() < 30){
            displayTime(3,4,5);
        }
        if (d.getUTCHours() == 5 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 6 || d.getUTCHours() == 7 && d.getUTCMinutes() < 30){
            displayTime(5,6,7);
        }
        if (d.getUTCHours() == 7 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 8 || d.getUTCHours() == 9 && d.getUTCMinutes() < 30){
            displayTime(7,8,9);
        }
        if (d.getUTCHours() == 9 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 10 || d.getUTCHours() == 11 && d.getUTCMinutes() < 30){
            displayTime(9,10,11);
        }
        if (d.getUTCHours() == 11 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 12 || d.getUTCHours() == 13 && d.getUTCMinutes() < 30){
            displayTime(11,12,13);
        }
        if (d.getUTCHours() == 13 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 14 || d.getUTCHours() == 15 && d.getUTCMinutes() < 30){
            displayTime(13,14,15);
        }
        if (d.getUTCHours() == 15 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 16 || d.getUTCHours() == 17 && d.getUTCMinutes() < 30){
            displayTime(15,16,17);
        }
        if (d.getUTCHours() == 17 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 18 || d.getUTCHours() == 19 && d.getUTCMinutes() < 30){
            displayTime(17,18,19);
        }
        if (d.getUTCHours() == 19 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 20 || d.getUTCHours() == 21 && d.getUTCMinutes() < 30){
            displayTime(19,20,21);
        }
        if (d.getUTCHours() == 21 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 22 || d.getUTCHours() == 23 && d.getUTCMinutes() < 30){
            displayTime(21,22,23);
        }
        if (d.getUTCHours() == 23 && d.getUTCMinutes() >= 30 || d.getUTCHours() == 0 || d.getUTCHours() == 1 && d.getUTCMinutes() < 30){
            displayTime(23,0,1);
        }
        
        }, 1000);
}