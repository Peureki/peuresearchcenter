// CSS Variables
// Decale variables then change them throughout each setting
// TO INITIALIZE
// Ex: cssVar('clr-light-blue'); 
// TO EXECUTE
// Ex: cssVar('clr-light-blue', 'COLOR YOU WANT')
var cssVar = (name, value) => {
	if (name.substr(0, 2) !== "--") name = "--" + name; 
	if (value) document.documentElement.style.setProperty(name, value);

	return getComputedStyle(document.documentElement).getPropertyValue(name);
}
cssVar('clr-bkg'); // Background of the whole pages
cssVar('clr-border'); // General borders
cssVar('clr-title'); // Main page title color
cssVar('clr-text'); // Texts
cssVar('clr-links'); // General links

// Specifc containers and stuff
cssVar('clr-left-homepage'); // Left portion of homepage
cssVar('clr-bkg-container'); // Specific containers like timers

// TABLES
cssVar('clr-text-table'); // Text in tables
cssVar('clr-th-table'); // Table header bkg
cssVar('clr-bkg-table'); // Table backgrounds

// BUTTON 
cssVar('clr-bkg-button'); // Buttons

// Apply whether or not the user choose dark/light mode
// First check what it is currently 
var modeCircle = document.getElementById('mode-circle');
if (localStorage.getItem('mode') == "dark"){
	modeCircle.style.left = "0%";
	applyMode();
} else {
	modeCircle.style.left = "55%"; 
	applyMode();
}

console.log("local storage: ", localStorage.getItem('mode'))
function applyMode(){
	var modeCircle = document.getElementById('mode-circle');
	// If toggle circle is on the left side 
	// -> Dark Mode
	if (modeCircle.style.left == "0%"){
		localStorage.setItem('mode', 'dark');

		modeCircle.style.left = "55%";
		cssVar('clr-bkg', '#2A2B2E'); // dark gray
		cssVar('clr-border', '#1A687D'); // Dark blue
		cssVar('clr-title', '#B22323'); // Lighter dark red
		cssVar('clr-text', '#E0E0E0'); // light gray
		cssVar('clr-link', '#FFD12C'); // yellow

		cssVar('clr-left-homepage', '#1A687D'); // Dark blue

		cssVar('clr-bkg-container', '#9A9A9A'); // gray

		// TABLES 
		cssVar('clr-text-table', '#E0E0E0'); // light gray
		cssVar('clr-th-table', '#1A687D'); // Dark blue
		cssVar('clr-bkg-table', '#2B2B2D'); // Dark gray

		// BUTTONS
		cssVar('clr-bkg-button', '#2B2B2D'); // Dark gray
	// If toggle circle is onthe right side
	// -> Light mode
	} else {
		localStorage.setItem('mode', 'light');

		modeCircle.style.left = "0%";
		// Bring back the defaults 
		cssVar('clr-bkg', '#E4E8E4'); // Background of the whole pages
		cssVar('clr-border', 'black'); // General borders
		cssVar('clr-title', '#802020'); // Main page title color
		cssVar('clr-text', 'black'); // Texts
		cssVar('clr-link', 'black'); // General links

		// Specifc containers and stuff
		cssVar('clr-left-homepage', '#87E6FF'); // Left portion of homepage
		cssVar('clr-bkg-container', 'ddd'); // Specific containers like timers

		// TABLES
		cssVar('clr-text-table', 'black'); // Text in tables
		cssVar('clr-th-table', '#802020'); // Table header bkg
		cssVar('clr-bkg-table', '#E4E8E4'); // Table backgrounds

		// BUTTON 
		cssVar('clr-bkg-button', '#E4E8E4'); // Buttons
	}
}