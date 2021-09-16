// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var bitterfrost = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },

        {   // [1] Beacons of Koda Meta
            function: function() { bitterfrost_Countdown(1); },
            status: 0,
            key: 0,
            cooldown: 60 * 52, 
            startButton: document.getElementById('timer-bitterfrost-1-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-1-start'),
            resetButton: document.getElementById('timer-bitterfrost-1-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-1-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-1'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-1'),
            sidebox: document.getElementById('bitterfrost-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-1'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // [2] Vet Wolf
            function: function() { bitterfrost_Countdown(2); },
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 45, 
            startButton: document.getElementById('timer-bitterfrost-2-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-2-start'),
            resetButton: document.getElementById('timer-bitterfrost-2-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-2-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-2'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-2'),
            sidebox: document.getElementById('bitterfrost-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-2'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [4] Svanir Tyrant
            function: function() { bitterfrost_Countdown(4); },
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 45, 
            startButton: document.getElementById('timer-bitterfrost-4-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-4-start'),
            resetButton: document.getElementById('timer-bitterfrost-4-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-4-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-4'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-4'),
            sidebox: document.getElementById('bitterfrost-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-4'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [6] Griffon Chicks
            function: function() { bitterfrost_Countdown(6); },
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 45, 
            startButton: document.getElementById('timer-bitterfrost-6-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-6-start'),
            resetButton: document.getElementById('timer-bitterfrost-6-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-6-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-6'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-6'),
            sidebox: document.getElementById('bitterfrost-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-6'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [8] Chokocooka
            function: function() { bitterfrost_Countdown(8); },
            name: "Chokocooka",
            status: 0,
            key: 0,
            cooldown: 60 * 9 + 30, 
            startButton: document.getElementById('timer-bitterfrost-8-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-8-start'),
            resetButton: document.getElementById('timer-bitterfrost-8-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-8-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-8'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-8'),
            sidebox: document.getElementById('bitterfrost-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-8'),
            infoBox: document.getElementById('bitterfrost-8-info-box-1'),
            infoText: document.getElementById('bitterfrost-8-info-box-1-text'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [10] Quaggan Bath
            function: function() { bitterfrost_Countdown(10); },
            name: "Quaggan Bath",
            status: 0,
            key: 0,
            cooldown: 60 * 11, 
            startButton: document.getElementById('timer-bitterfrost-10-start'),
            startSideButton: document.getElementById('sidetimer-bitterfrost-10-start'),
            resetButton: document.getElementById('timer-bitterfrost-10-reset'),
            resetSideButton: document.getElementById('sidetimer-bitterfrost-10-reset'),
            timeLabel: document.getElementById('timer-bitterfrost-10'), 
            timeSideLabel: document.getElementById('sidetimer-bitterfrost-10'),
            sidebox: document.getElementById('bitterfrost-10-sidebox'),
            num: document.getElementById('numerical-sidetimer-bitterfrost-10'),
            infoBox: document.getElementById('bitterfrost-10-info-box-1'),
            infoText: document.getElementById('bitterfrost-10-info-box-1-text'),
            doCountdown: function() { countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num); }
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(dragonfall.events); 

/*
function bitterfrost_Countdown(arrayNum){
    var date_now = Date.now(); 

    function run_countdown() {
        var countdown = getTime(date_now, bitterfrost.events[arrayNum].cooldown, bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].timeSideLabel, bitterfrost.events[arrayNum].num);

        // When events have pre-events that could be in replacement of the actual event 
        switch(bitterfrost.events[arrayNum].name){
            case "Chokocooka": 
                if (countdown.time <= -60){
                    bitterfrost.events[arrayNum].infoBox.style.background = fail_color; 
                    bitterfrost.events[arrayNum].infoText.innerHTML = "If none present, gathering event is back!";
                } else if (countdown.time <= 90){
                    bitterfrost.events[arrayNum].infoBox.style.background = ready_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event up if gathering succeeded!";
                } else if (countdown.time <= 150){
                    bitterfrost.events[arrayNum].infoBox.style.opacity = 1;
                    bitterfrost.events[arrayNum].infoBox.style.background = soon_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event upcoming if gathering succeeded!";
                }
            break; 

            case "Quaggan Bath":
                if (countdown.time <= 240){
                    bitterfrost.events[arrayNum].infoBox.style.background = fail_color; 
                    bitterfrost.events[arrayNum].infoText.innerHTML = "If none present, Icebrood have taken over!";
                } else if (countdown.time <= 360){
                    bitterfrost.events[arrayNum].infoBox.style.background = ready_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event up if Icebrood was cleared!";
                } else if (countdown.time <= 420){
                    // 5:00 between completing corruption -> quaggan bath. 11:00 - 5:00 = 6:00 -> 420 (+ 1 minute warning)
                    bitterfrost.events[arrayNum].infoBox.style.opacity = 1;
                    bitterfrost.events[arrayNum].infoBox.style.background = soon_color;
                    bitterfrost.events[arrayNum].infoText.innerHTML = "Event upcoming if Icebrood was cleared!";
                }
            break;
            
        } 
        if (countdown.time <= 0){ 
            time_text_and_labels_less_than_0(bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].sidebox, bitterfrost.events[arrayNum].timeSideLabel);
        } else if (countdown.time <= 60){
            time_text_and_labels_less_than_60(bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].sidebox);
        } else if (countdown.time < bitterfrost.events[arrayNum].cooldown){
            start_countdown_color(bitterfrost.events[arrayNum].timeLabel, bitterfrost.events[arrayNum].timeSideLabel);
        }
    }
    run_countdown(); 
    if (bitterfrost.events[arrayNum].status == 1){
        bitterfrost[arrayNum] = setInterval(run_countdown, 1000);
    } else {
        clearInterval(bitterfrost[arrayNum]);   
    } 
}
*/


