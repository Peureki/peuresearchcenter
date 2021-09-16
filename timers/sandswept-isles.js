// Sort the timers on a 1 sec interval. Sorts the list based on most upcoming
sortTimers();

var sandswept = {
    events: [
        {   // empty
            status: 0,
            key: 0,
        },
        {   // [1] Gathering Storms Meta
            status: 0,
            key: 0,
            cooldown: 60 * 33, 
            startButton: document.getElementById('timer-sandswept-1-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-1-start'),
            resetButton: document.getElementById('timer-sandswept-1-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-1-reset'),
            timeLabel: document.getElementById('timer-sandswept-1'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-1'),
            sidebox: document.getElementById('sandswept-1-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-1'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        }, 

        {   // [2] Specimen Chamber Meta
            status: 0,
            key: 0,
            cooldown: 60 * 40, 
            startButton: document.getElementById('timer-sandswept-2-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-2-start'),
            resetButton: document.getElementById('timer-sandswept-2-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-2-reset'),
            timeLabel: document.getElementById('timer-sandswept-2'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-2'),
            sidebox: document.getElementById('sandswept-2-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-2'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        }, 
        {   // [3] Dominus Crystallum
            status: 0,
            key: 0,
            cooldown: 60 * 12, 
            startButton: document.getElementById('timer-sandswept-3-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-3-start'),
            resetButton: document.getElementById('timer-sandswept-3-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-3-reset'),
            timeLabel: document.getElementById('timer-sandswept-3'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-3'),
            sidebox: document.getElementById('sandswept-3-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-3'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [4] Inquest Portal
            status: 0,
            key: 0,
            cooldown: 60 * 11 + 30, 
            startButton: document.getElementById('timer-sandswept-4-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-4-start'),
            resetButton: document.getElementById('timer-sandswept-4-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-4-reset'),
            timeLabel: document.getElementById('timer-sandswept-4'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-4'),
            sidebox: document.getElementById('sandswept-4-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-4'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [5] Mark III 
            status: 0,
            key: 0,
            cooldown: 60 * 10, 
            startButton: document.getElementById('timer-sandswept-5-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-5-start'),
            resetButton: document.getElementById('timer-sandswept-5-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-5-reset'),
            timeLabel: document.getElementById('timer-sandswept-5'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-5'),
            sidebox: document.getElementById('sandswept-5-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-5'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [6] Awakened Patrol
            status: 0,
            key: 0,
            cooldown: 60 * 8 + 30, 
            startButton: document.getElementById('timer-sandswept-6-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-6-start'),
            resetButton: document.getElementById('timer-sandswept-6-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-6-reset'),
            timeLabel: document.getElementById('timer-sandswept-6'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-6'),
            sidebox: document.getElementById('sandswept-6-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-6'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [7] Marmoxes
            status: 0,
            key: 0,
            cooldown: 60 * 30, 
            startButton: document.getElementById('timer-sandswept-7-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-7-start'),
            resetButton: document.getElementById('timer-sandswept-7-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-7-reset'),
            timeLabel: document.getElementById('timer-sandswept-7'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-7'),
            sidebox: document.getElementById('sandswept-7-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-7'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [8] Scarab
            status: 0,
            key: 0,
            cooldown: 60 * 23, 
            startButton: document.getElementById('timer-sandswept-8-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-8-start'),
            resetButton: document.getElementById('timer-sandswept-8-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-8-reset'),
            timeLabel: document.getElementById('timer-sandswept-8'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-8'),
            sidebox: document.getElementById('sandswept-8-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-8'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
        {   // [9] Inquest Data
            status: 0,
            key: 0,
            cooldown: 60 * 7, 
            startButton: document.getElementById('timer-sandswept-9-start'),
            startSideButton: document.getElementById('sidetimer-sandswept-9-start'),
            resetButton: document.getElementById('timer-sandswept-9-reset'),
            resetSideButton: document.getElementById('sidetimer-sandswept-9-reset'),
            timeLabel: document.getElementById('timer-sandswept-9'), 
            timeSideLabel: document.getElementById('sidetimer-sandswept-9'),
            sidebox: document.getElementById('sandswept-9-sidebox'),
            num: document.getElementById('numerical-sidetimer-sandswept-9'),
            doCountdown: function() {countdown(this.status, this.key, this.cooldown, this.timeLabel, this.timeSideLabel, this.sidebox, this.num);},
        },
    ]
};
// Dynamically creates unique keys
add_event_keys(sandswept.events); 

// Bounty checkboxes
// Starcaller
function sandswept_Bounty_1_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('sandswept-bounty-target-1'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}
// Seneb
function sandswept_Bounty_2_Checkbox(obj){
    var checkbox = obj,
        bounty = document.getElementById('sandswept-bounty-target-17'); 
    if (checkbox.checked == true){
        bounty.style.opacity = 1; 
    } else {
        bounty.style.opacity = 0;
    }
}
// Ironshell
function sandswept_Bounty_3_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-2'),
        bounty_2 = document.getElementById('sandswept-bounty-target-3'),
        bounty_3 = document.getElementById('sandswept-bounty-target-4'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-3-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-3-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-3-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-3-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-3-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-3-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Oakenscorn
function sandswept_Bounty_4_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-5'),
        bounty_2 = document.getElementById('sandswept-bounty-target-6'),
        bounty_3 = document.getElementById('sandswept-bounty-target-7'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-4-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-4-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-4-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-4-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-4-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-4-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Old Stonehoof
function sandswept_Bounty_5_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-8'),
        bounty_2 = document.getElementById('sandswept-bounty-target-9'),
        bounty_3 = document.getElementById('sandswept-bounty-target-10'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-5-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-5-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-5-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-5-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-5-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-5-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Exterminator
function sandswept_Bounty_6_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-11'),
        bounty_2 = document.getElementById('sandswept-bounty-target-12'),
        bounty_3 = document.getElementById('sandswept-bounty-target-13'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-6-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-6-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-6-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-6-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-6-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-6-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Emogg
function sandswept_Bounty_7_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-14'),
        bounty_2 = document.getElementById('sandswept-bounty-target-15'),
        bounty_3 = document.getElementById('sandswept-bounty-target-16'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-7-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-7-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-7-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-7-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-7-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-7-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Magneton
function sandswept_Bounty_8_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-18'),
        bounty_2 = document.getElementById('sandswept-bounty-target-19'),
        bounty_3 = document.getElementById('sandswept-bounty-target-20'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-8-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-8-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-8-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-8-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-8-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-8-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Prickly Pair
function sandswept_Bounty_9_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-21'),
        bounty_2 = document.getElementById('sandswept-bounty-target-22'),
        bounty_3 = document.getElementById('sandswept-bounty-target-23'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-9-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-9-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-9-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-9-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-9-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-9-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Nepheretes
function sandswept_Bounty_10_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-24'),
        bounty_2 = document.getElementById('sandswept-bounty-target-25'),
        bounty_3 = document.getElementById('sandswept-bounty-target-26'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-10-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-10-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-10-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-10-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-10-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-10-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Vebis
function sandswept_Bounty_11_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-27'),
        bounty_2 = document.getElementById('sandswept-bounty-target-28'),
        bounty_3 = document.getElementById('sandswept-bounty-target-29'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-11-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-11-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-11-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-11-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-11-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-11-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}
// Crystalwing
function sandswept_Bounty_12_Checkbox(obj){
    var checkbox = obj,
        bounty_1 = document.getElementById('sandswept-bounty-target-30'),
        bounty_2 = document.getElementById('sandswept-bounty-target-31'),
        bounty_3 = document.getElementById('sandswept-bounty-target-32'); 
    if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-12-1-checkbox'){
        bounty_1.style.opacity = 1; 
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-12-2-checkbox' ) {
        bounty_2.style.opacity = 1;
    } else if (checkbox.checked == true && checkbox.id == 'sandswept-bounty-12-3-checkbox' ) {
        bounty_3.style.opacity = 1;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-12-1-checkbox'){
        bounty_1.style.opacity = 0; 
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-12-2-checkbox' ) {
        bounty_2.style.opacity = 0;
    } else if (checkbox.checked == false && checkbox.id == 'sandswept-bounty-12-3-checkbox' ) {
        bounty_3.style.opacity = 0;
    } 
}


