// ============================================
// ===== TRANSITION FADERS ON FRONT PAGE ======
// ============================================
// Get ids of the color faders
var topFader = document.getElementById('top-fader'),
    middleTopFader = document.getElementById('middle-top-fader'),
    middleBottomFader = document.getElementById('middle-bottom-fader'),
    bottomFader = document.getElementById('bottom-fader'),

    faderNum = -1, 
    faderNumCheck = -1, // Num to check if a previous fader has been used already
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
    // All left to right
    topFader.animate([
    {
        width: "0%",
        left: "0%",
    },
    {
        width: "100%",
        right: "0%",
        offset: 0.5,
    },
    {
        width: "0%",
        right: "0%",
    }
    ], {
        duration: 5000,
        easing: "ease",
        fill: "forwards",
        iterations: 1,
    });

    middleTopFader.animate([
    {
        width: "0%",
        left: "0%",
    },
    {
        width: "100%",
        right: "0%",
        offset: 0.5,
    },
    {
        width: "0%",
        right: "0%",
    }
    ], {
        duration: 5000,
        easing: "ease",
        fill: "forwards",
        iterations: 1,
    });

    middleBottomFader.animate([
    {
        width: "0%",
        left: "0%",
    },
    {
        width: "100%",
        right: "0%",
        offset: 0.5,
    },
    {
        width: "0%",
        right: "0%",
    }
    ], {
        duration: 5000,
        easing: "ease",
        fill: "forwards",
        iterations: 1,
    });

    bottomFader.animate([
    {
        width: "0%",
        left: "0%",
    },
    {
        width: "100%",
        right: "0%",
        offset: 0.5,
    },
    {
        width: "0%",
        right: "0%",
    }
    ], {
        duration: 5000,
        easing: "ease",
        fill: "forwards",
        iterations: 1,
    });
    
    
    
    // In between the 50% of the slider, display the new choya
    // Timeout at HALF because since it's 'ease', the animation fully hits 100% at 3 seconds
    // Repeat timeout with same delay as duration of slider animation
    setTimeout(function setChoya() {
        
        choyaNum = randomNum(choyaCollection.length);
        // Check if the numCheck is default or if it matches the previous iteration
        if (choyaNumCheck == -1 || choyaNumCheck != choyaNum){
            choya.src = choyaCollection[choyaNum];
            choyaNumCheck = choyaNum;
            setTimeout(displayChoya, 5000);
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
            setTimeout(displayChoya, 5000);   
        }
    }, 1500);
    
}, 2500);

var randomNum = (max) => Math.floor(Math.random() * max);