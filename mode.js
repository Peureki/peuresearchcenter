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
cssVar('clr-bold'); // Anything in <b> tag 
cssVar('clr-border'); // General borders
cssVar('clr-button-hover'); // Hovering a button
cssVar('clr-hover-bkg'); // Light (but darker grey)
cssVar('clr-title'); // Main page title color
cssVar('clr-text'); // Texts
cssVar('clr-links'); // General links
cssVar('clr-bookmark'); // Bookmarks

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
let modeCircle = document.getElementById('mode-circle'),
	modeMoon = document.getElementById('mode-moon');

if (localStorage.getItem('mode') == "dark"){
	modeCircle.style.left = "0%";
	modeMoon.style.display = "block";
	applyMode();
} else {
	modeCircle.style.left = "65%"; 
	modeMoon.style.display = "none";
	applyMode();
}

function applyMode(){
	let modeCircle = document.getElementById('mode-circle');
	// If toggle circle is on the left side 
	// -> Dark Mode
	if (modeCircle.style.left == "0%"){
		localStorage.setItem('mode', 'dark');

		modeCircle.style.left = "65%";
		modeMoon.style.display = "block";
		cssVar('clr-bkg', '#2A2B2E'); // dark gray
		cssVar('clr-bold', '#93CDDD'); // LIght blue
		cssVar('clr-border', '#1A687D'); // Dark blue
		cssVar('clr-button-hover', '#1A687D'); // dark blue
		cssVar('clr-hover-bkg', '#4E5055'); // Dark gray but lighter
		cssVar('clr-title', '#B22323'); // Lighter dark red
		cssVar('clr-text', '#E0E0E0'); // light gray
		cssVar('clr-link', '#FFD12C'); // yellow
		cssVar('clr-bookmark', '#1A687D'); // Light gray

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
	// Check :root for original colors
	} else {
		localStorage.setItem('mode', 'light');

		modeCircle.style.left = "0%";
		modeMoon.style.display = "none";
		// Bring back the defaults 
		cssVar('clr-bkg', '#E4E8E4'); // Background of the whole pages
		cssVar('clr-bold', '#1A687D'); // Dark blue
		cssVar('clr-border', 'black'); // General borders
		cssVar('clr-button-hover', '#FFD12C'); // yellow
		cssVar('clr-hover-bkg', '#C5C9C5'); // Light gray but darker
		cssVar('clr-title', '#802020'); // Main page title color
		cssVar('clr-text', 'black'); // Texts
		cssVar('clr-link', 'black'); // General links
		cssVar('clr-bookmark', '#656765'); // Light gray

		// Specifc containers and stuff
		cssVar('clr-left-homepage', '#87E6FF'); // Left portion of homepage
		cssVar('clr-bkg-container', '#E4E8E4'); // Specific containers like timers

		// TABLES
		cssVar('clr-text-table', 'black'); // Text in tables
		cssVar('clr-th-table', '#802020'); // Table header bkg
		cssVar('clr-bkg-table', '#E4E8E4'); // Table backgrounds

		// BUTTON 
		cssVar('clr-bkg-button', '#E4E8E4'); // Buttons
	}
}