// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

let bloodstone = {
	events: [
		{
			status: 0,
			key: 0,
		},
		{   // [1] Justicar Hablion
            status: 0,
            key: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-bloodstone-1-start'),
            startSideButton: document.getElementById('sidetimer-bloodstone-1-start'),
            resetButton: document.getElementById('timer-bloodstone-1-reset'),
            resetSideButton: document.getElementById('sidetimer-bloodstone-1-reset'),
            timeLabel: document.getElementById('timer-bloodstone-1'), 
            timeSideLabel: document.getElementById('sidetimer-bloodstone-1'),
            sidebox: document.getElementById('bloodstone-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-bloodstone-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [2] Bloodstone Maw
            status: 0,
            key: 0,
            cooldown: 60 * 60, 
            startButton: document.getElementById('timer-bloodstone-2-start'),
            startSideButton: document.getElementById('sidetimer-bloodstone-2-start'),
            resetButton: document.getElementById('timer-bloodstone-2-reset'),
            resetSideButton: document.getElementById('sidetimer-bloodstone-2-reset'),
            timeLabel: document.getElementById('timer-bloodstone-2'), 
            timeSideLabel: document.getElementById('sidetimer-bloodstone-2'),
            sidebox: document.getElementById('bloodstone-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-bloodstone-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
	]
};
// Dynamically creates unique keys
add_event_keys(bloodstone.events); 