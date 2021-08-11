<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Tangled Depths </title>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<div class = "page-box">
		<div class = "section-header">
			<h1>Tangled Depths</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "event-list">

		<div id = "tangled-meta-sidebox" class = "meta-sidebox" >
	       <h1 id = "side-meta-name"> </h1>
	       <p1 id = "sidetimer-tangled-meta"></p1>
	       <p2 id = "numerical-sidetimer-tangled-meta"></p2>
	     </div>

	    <div id = "tangled-1-sidebox" class = "event-sidebox">
	      <h1> Chak Lobber - Nuh</h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-1-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-1-reset">
	      <p1 id = "sidetimer-tangled-1">7:45</p1>
	      <p2 id = "numerical-sidetimer-tangled-1">465</p2>
	    </div>
	    <div id = "tangled-2-sidebox" class = "event-sidebox">
	      <h1> Elementals </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-2-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-2-reset">
	      <p1 id = "sidetimer-tangled-2">2:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-2">120</p2>
	    </div>
	    <div id = "tangled-3-sidebox" class = "event-sidebox">
	      <h1> Sporlings </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-3-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-3-reset">
	      <p1 id = "sidetimer-tangled-3">8:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-3">480</p2>
	    </div>
	    <div id = "tangled-4-sidebox" class = "event-sidebox">
	      <h1> Grub Pit </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-4-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-4-reset">
	      <p1 id = "sidetimer-tangled-4">0:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-4">0</p2>
	    </div>
	   	<div id = "tangled-5-sidebox" class = "event-sidebox">
	      <h1> Beetle </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-5-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-5-reset">
	      <p1 id = "sidetimer-tangled-5">10:30</p1>
	      <p2 id = "numerical-sidetimer-tangled-5">630</p2>
	    </div>
	    <div id = "tangled-6-sidebox" class = "event-sidebox">
	      <h1> Alchemist Patli </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-6-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-6-reset">
	      <p1 id = "sidetimer-tangled-6">13:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-6">780</p2>
	    </div>
	    <div id = "tangled-7-sidebox" class = "event-sidebox">
	      <h1> Zintl </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-7-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-7-reset">
	      <p1 id = "sidetimer-tangled-7">23:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-7">1380</p2>
	    </div>
	    <div id = "tangled-8-sidebox" class = "event-sidebox">
	      <h1> Skelk </h1> 
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-8-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-8-reset">
	      <p1 id = "sidetimer-tangled-8">24:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-8">1440</p2>
	    </div>

	    <div id = "tangled-9-sidebox" class = "event-sidebox">
	      <h1> Wyvern Nests</h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-9-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-9-reset">
	      <p1 id = "sidetimer-tangled-9">3:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-9">180</p2>
	    </div>

	    <div id = "tangled-10-sidebox" class = "event-sidebox">
	      <h1> Matriarch Bat </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-10-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-10-reset">
	      <p1 id = "sidetimer-tangled-10">7:45</p1>
	      <p2 id = "numerical-sidetimer-tangled-10">465</p2>
	    </div>

	    <div id = "tangled-11-sidebox" class = "event-sidebox">
	      <h1> Chak Morale </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-11-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-11-reset">
	      <p1 id = "sidetimer-tangled-11">12:30</p1>
	      <p2 id = "numerical-sidetimer-tangled-11">750</p2>
	    </div>

	    <div id = "tangled-12-sidebox" class = "event-sidebox">
	      <h1> Grubs </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-12-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-12-reset">
	      <p1 id = "sidetimer-tangled-12">17:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-12">1020</p2>
	    </div>

	    <div id = "tangled-13-sidebox" class = "event-sidebox">
	      <h1> Haywire Golems </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-13-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-13-reset">
	      <p1 id = "sidetimer-tangled-13">4:30</p1>
	      <p2 id = "numerical-sidetimer-tangled-13">270</p2>
	    </div>

	    <div id = "tangled-14-sidebox" class = "event-sidebox">
	      <h1> Chak Lobber - Rata </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-14-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-14-reset">
	      <p1 id = "sidetimer-tangled-14">8:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-14">480</p2>
	    </div>

	    <div id = "tangled-15-sidebox" class = "event-sidebox">
	      <h1> Mushrooms </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-15-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-15-reset">
	      <p1 id = "sidetimer-tangled-15">3:15</p1>
	      <p2 id = "numerical-sidetimer-tangled-15">195</p2>
	    </div>

	    <div id = "tangled-16-sidebox" class = "event-sidebox">
	      <h1> Chak Crown </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-16-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-16-reset">
	      <p1 id = "sidetimer-tangled-16">8:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-16">480</p2>
	    </div>

	    <div id = "tangled-17-sidebox" class = "event-sidebox">
	      <h1> Fire Wyvern </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-17-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-17-reset">
	      <p1 id = "sidetimer-tangled-17">7:30</p1>
	      <p2 id = "numerical-sidetimer-tangled-17">450</p2>
	    </div>

	    <div id = "tangled-18-sidebox" class = "event-sidebox">
	      <h1> Wasps </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-18-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-18-reset">
	      <p1 id = "sidetimer-tangled-18">15:45</p1>
	      <p2 id = "numerical-sidetimer-tangled-18">945</p2>
	    </div>

	    <div id = "tangled-19-sidebox" class = "event-sidebox">
	      <h1> Chak Lobber - Scar</h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-19-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-19-reset">
	      <p1 id = "sidetimer-tangled-19">30:30</p1>
	      <p2 id = "numerical-sidetimer-tangled-19">1830</p2>
	    </div>

	    <div id = "tangled-20-sidebox" class = "event-sidebox">
	      <h1> Mushroom King </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-20-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-20-reset">
	      <p1 id = "sidetimer-tangled-20">18:45</p1>
	      <p2 id = "numerical-sidetimer-tangled-20">1125</p2>
	    </div>

	    <div id = "tangled-21-sidebox" class = "event-sidebox">
	      <h1> Treasure Mushroom </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-21-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-21-reset">
	      <p1 id = "sidetimer-tangled-21">9:30</p1>
	      <p2 id = "numerical-sidetimer-tangled-21">570</p2>
	    </div>

	    <div id = "tangled-22-sidebox" class = "event-sidebox">
	      <h1> Chak Driver </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-tangled-22-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-tangled-22-reset">
	      <p1 id = "sidetimer-tangled-22">38:00</p1>
	      <p2 id = "numerical-sidetimer-tangled-22">2280</p2>
	    </div>
	    
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box-overflow" class = "nav-right-sidetimer-box-overflow">
	  	<b> Completed Outposts? </b>
	  	<br><br>
	  	Nuhoch: <input type = "Checkbox" id = "post-nuhoch" onclick = "tangled_Depths_Post_Checkbox(this);">
		<br>
		Ogre: <input type = "Checkbox" id = "post-ogre" onclick = "tangled_Depths_Post_Checkbox(this);">
		<br>
		Rata: <input type = "Checkbox" id = "post-rata" onclick = "tangled_Depths_Post_Checkbox(this);">
		<br>
		SCAR: <input type = "Checkbox" id = "post-scar" onclick = "tangled_Depths_Post_Checkbox(this);">

		<br><br>
		<b> All Checkboxes </b>
		<br><br>
		Peu's List: <input type = "Checkbox" id = "peus-list-checkbox"  onclick = "tangled_Depths_All_Checkbox(this);">
		<br>
	    All Nuhoch: <input type = "Checkbox" id = "all-nuhoch-checkbox" checked = "true" onclick = "tangled_Depths_All_Checkbox(this);">
	    <br>
	    All Ogre: <input type = "Checkbox" id = "all-ogre-checkbox" checked = "true" onclick = "tangled_Depths_All_Checkbox(this);">
	    <br>
	    All Rata: <input type = "Checkbox" id = "all-rata-checkbox" checked = "true" onclick = "tangled_Depths_All_Checkbox(this);">
	    <br>
	    All SCAR: <input type = "Checkbox" id = "all-scar-checkbox" checked = "true" onclick = "tangled_Depths_All_Checkbox(this);">

	    <br><br>
	    <b>Nuhoch Outposts </b>
	    <br><br> 
	    Chak Lobber: <input type = "Checkbox" id = "tangled-1-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-1-sidebox');">
	    <br>
	    Elementals: <input type = "Checkbox" id = "tangled-2-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-2-sidebox');">
	    <br>
	    Sporlings: <input type = "Checkbox" id = "tangled-3-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-3-sidebox');">
	    <br>
	    Grub Pit: <input type = "Checkbox" id = "tangled-4-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-4-sidebox');">
	    <br>
	    Beetle: <input type = "Checkbox" id = "tangled-5-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-5-sidebox');">
	    <br>
	    Alchemist Patli: <input type = "Checkbox" id = "tangled-6-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-6-sidebox');">
	    <br>
	    Zintl: <input type = "Checkbox" id = "tangled-7-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-7-sidebox');">
	    <br>
	    Skelk: <input type = "Checkbox" id = "tangled-8-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-8-sidebox');">
	    <br><br>
	    <b>Ogre Outposts</b> 
	    <br><br>
	    Wyvern Nests: <input type = "Checkbox" id = "tangled-9-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-9-sidebox');">
	    <br>
	    Matriarch Bat: <input type = "Checkbox" id = "tangled-10-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-10-sidebox');">
	    <br>
	    Chak Morale: <input type = "Checkbox" id = "tangled-11-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-11-sidebox');">
	    <br>
	    Grubs: <input type = "Checkbox" id = "tangled-12-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-12-sidebox');">
	    <br><br>
	    <b>Rata Outposts</b> 
	    <br><br>
	    Haywire Golems: <input type = "Checkbox" id = "tangled-13-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-13-sidebox');">
	    <br>
	    Chak Lobber: <input type = "Checkbox" id = "tangled-14-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-14-sidebox');">
	    <br>
	    Mushrooms: <input type = "Checkbox" id = "tangled-15-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-15-sidebox');">
	    <br><br>
	    <b>SCAR Outposts</b>
	    <br><br>
	    Chak Crown: <input type = "Checkbox" id = "tangled-16-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-16-sidebox');">
	    <br>
	    Fire Wyvern: <input type = "Checkbox" id = "tangled-17-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-17-sidebox');">
	    <br>
	    Wasps: <input type = "Checkbox" id = "tangled-18-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-18-sidebox');">
	    <br>
	    Chak Lobber: <input type = "Checkbox" id = "tangled-19-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-19-sidebox');">
	    <br><br>
	    <b>Standalones</b>
	    <br><br>
	    Mushroom King: <input type = "Checkbox" id = "tangled-20-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-20-sidebox');">
	    <br>
	    Treasure Mushroom: <input type = "Checkbox" id = "tangled-21-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-21-sidebox');">
	    <br>
	    Chak Driver: <input type = "Checkbox" id = "tangled-22-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'tangled-22-sidebox');">
	    <br>
	    
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				<b>How the map works:</b><br>
				When it's not the meta, there are 4 outposts with their own chain of events. When the event chain for an outpost are complete, all events afterwards in that zone will begin a countdown to spawn. 

				<br><br>
				If you &#8635; the farm, it will be the respawn rate <b> after</b> completing that event after doing the outposts. Example, after completing Ogre's pre-events, you'll check the box below and it will begin all Ogre events at once. When you complete an event, and hit &#8635;, it will respawn again with a specific timer. 

				<br><br>
				Check the checkboxes on the right under <b>"Completed Outposts?"</b> when you complete the Outpost events to begin the spawn timers for all the events in that particular zone. </p1>

				<br><br>
				<b> Peu's List </b>
				<br>
				By checking the box, it will showcase all the events that I recommend and remove the ones I try to avoid. This is to clean up the left side box and to improve my focus. 
			</div>
		</div>

		<!-- Failed meta message --> 
		<div id = "revert" class = "revert">
			<input type = "button" id = "merp-button" value = "Revert" onclick = "revert_tangled_depths();">
			&#x27F6; Revert back to the Outpost timers
		</div>

		<!-- Failed meta message --> 
		<div id = "refresh" class = "refresh">
			<input type = "button" id = "merp-button" value = "Refresh" onclick = "refresh();">
			&#x27F6; Refresh page to refresh all timers to default
		</div>

		<div id = "map-timer-wrapper-1" class = "map-timer-wrapper" style = ''>
		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->

			<div class = "event-box" id = "tangled-1-box">
				<h1> Chak Lobber </h1>
       	 		<br><p1 id = "timer-tangled-1">7:45</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-1-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-1-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-1');" onmouseout = "hideElement('tangled-info-1');"> 
       		</div>

       		<div class = "event-box" id = "tangled-2-box">
				<h1> Elementals </h1>
       	 		<br><p1 id = "timer-tangled-2">2:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-2-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-2-reset">	

       		</div>

       		<div class = "event-box" id = "tangled-3-box">
				<h1> Sporlings </h1>
       	 		<br><p1 id = "timer-tangled-3">8:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-3-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-3-reset">
       		</div>

       		<div class = "event-box" id = "tangled-4-box">
				<h1> Grub Pit </h1>
       	 		<br><p1 id = "timer-tangled-4">0:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-4-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-4-reset">	
       		</div>

       		<div class = "event-box" id = "tangled-5-box">
				<h1> Beetle </h1>
       	 		<br><p1 id = "timer-tangled-5">10:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-5-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-5-reset">	
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-2');" onmouseout = "hideElement('tangled-info-2');"> 
       		</div>

       		<div class = "event-box" id = "tangled-6-box">
				<h1> Alchemist Patli </h1>
       	 		<br><p1 id = "timer-tangled-6">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-6-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-6-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-3');" onmouseout = "hideElement('tangled-info-3');"> 
       		</div>

       		<div class = "event-box" id = "tangled-7-box">
				<h1> Zintl </h1>
       	 		<br><p1 id = "timer-tangled-7">23:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-7-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-7-reset">
       		</div>

       		<div class = "event-box" id = "tangled-8-box">
				<h1> Skelk </h1>
       	 		<br><p1 id = "timer-tangled-8">24:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-8-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-8-reset">	
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-4');" onmouseout = "hideElement('tangled-info-4');"> 
       		</div>

       		<!-- Ogre -->
       		<div class = "event-box" id = "tangled-9-box">
				<h1> Wyvern Nest </h1>
       	 		<br><p1 id = "timer-tangled-9">3:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-9-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-9-reset">	
       		</div>

       		<div class = "event-box" id = "tangled-10-box">
				<h1> Matriarch Bat </h1>
       	 		<br><p1 id = "timer-tangled-10">7:45</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-10-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-10-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-5');" onmouseout = "hideElement('tangled-info-5');"> 
       		</div>

       		<div class = "event-box" id = "tangled-11-box">
				<h1> Chak Morale </h1>
       	 		<br><p1 id = "timer-tangled-11">12:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-11-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-11-reset">	
       		</div>

       		<div class = "event-box" id = "tangled-12-box">
				<h1> Grub </h1>
       	 		<br><p1 id = "timer-tangled-12">17:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-12-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-12-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-6');" onmouseout = "hideElement('tangled-info-6');"> 
       		</div>

       		<!-- Rata Outpost -->
       		<div class = "event-box" id = "tangled-13-box">
				<h1> Haywire Golems </h1>
       	 		<br><p1 id = "timer-tangled-13">4:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-13-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-13-reset">
       		</div>

       		<div class = "event-box" id = "tangled-14-box">
				<h1> Chak Lobber </h1>
       	 		<br><p1 id = "timer-tangled-14">8:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-14-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-14-reset">	
       		</div>

       		<div class = "event-box" id = "tangled-15-box">
				<h1> Mushrooms </h1>
       	 		<br><p1 id = "timer-tangled-15">3:15</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-15-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-15-reset">	
       		</div>

       		<!-- SCAR outposts -->
       		<div class = "event-box" id = "tangled-16-box">
				<h1> Chak Crown </h1>
       	 		<br><p1 id = "timer-tangled-16">8:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-16-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-16-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-7');" onmouseout = "hideElement('tangled-info-7');">	
       		</div>

       		<div class = "event-box" id = "tangled-17-box">
				<h1> Fire Wyvern </h1>
       	 		<br><p1 id = "timer-tangled-17">7:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-17-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-17-reset">
       		</div>

       		<div class = "event-box" id = "tangled-18-box">
				<h1> Wasps </h1>
       	 		<br><p1 id = "timer-tangled-18">15:45</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-18-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-18-reset">
       		</div>

       		<div class = "event-box" id = "tangled-19-box">
				<h1> Chak Lobber </h1>
       	 		<br><p1 id = "timer-tangled-19">30:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-19-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-19-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-8');" onmouseout = "hideElement('tangled-info-8');">
       		</div>

       		<div class = "event-box" id = "tangled-20-box">
				<h1> Mushroom King </h1>
       	 		<br><p1 id = "timer-tangled-20">18:45</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-20-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-20-reset">
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-9');" onmouseout = "hideElement('tangled-info-9');">
       		</div>

       		<div class = "event-box" id = "tangled-21-box">
				<h1> Treasure <br>Mushroom </h1>
       	 		<br><p1 id = "timer-tangled-21">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-21-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-21-reset">	
       		</div>

       		<div class = "event-box" id = "tangled-22-box">
				<h1> Chak Driver </h1>
       	 		<br><p1 id = "timer-tangled-22">38:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-tangled-22-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-tangled-22-reset">	
       			<input type = "button" value = "i" onmouseover = "showElement('tangled-info-10');" onmouseout = "hideElement('tangled-info-10');">
       		</div>

       		<!-- Information boxes 
       			 Nuhoch Lane 
       			 Chak Lobber -->
       		<div class = "event-info" id = "tangled-info-1">
       			There are two events. Killing individual chak is the pre-event. Click &#8635; after defeating the Champion Chak Lobber.
       		</div>

       		<!-- Beetle --> 
       		<div class = "event-info" id = "tangled-info-2">
       			There are multiple spawn locations. All spawn on the surface of the area, above the waypoint. The NPC itself does not stop moving, but can fail quickly if not defended. 
       		</div>

       		<!-- Alchemist --> 
       		<div class = "event-info" id = "tangled-info-3">
       			There are three events. The first is a quick escort. The NPC can be 0% and still not fail. The next two events are stomping nodules and killing veterans. The nodules take a very long time with a squad and I recommend to skip. 
       		</div>

       		<!-- Skelk --> 
       		<div class = "event-info" id = "tangled-info-4">
       			There are two events. First is an escort underground, down from the waypoint. Second is a champion. Click &#8635; after defeating the Champion Skelk. 
       		</div>

       		<!-- Ogre Info -->
       		<!-- Matriarch Bat -->
       		<div class = "event-info" id = "tangled-info-5">
       			There are two events. First is a quick escort. Second event is a quick champion. Click &#8635; after defeating the Champion Matriarch Bat. 
       		</div>

       		<!-- Grubs -->
       		<div class = "event-info" id = "tangled-info-6">
       			Avoid doing this with a squad. The bat will force move itself away from the event by someone pressing F on it. Without a squad, this event finishes fairly quickly. 
       		</div>

       		<!-- SCAR info -->
       		<!-- Chak Crown -->
       		<div class = "event-info" id = "tangled-info-7">
       			There are three events. First is a defense mission at the waypoint. Second is an escort to Confluence Waypoint. Third is a champion boss. Click &#8635; after defeating the Champ Crown
       		</div>

       		<!-- Chak Lobber -->
       		<div class = "event-info" id = "tangled-info-8">
       			There are two events. First is an escort. Second is a champion. Click &#8635; after defeating the Champ Chak Lobber. 
       		</div>

       		<!-- Mushroom King -->
       		<div class = "event-info" id = "tangled-info-9">
       			There are three events. First is a defense mission at the location of the timer. Second is a champion. Third is an escort to Ogre camp. Click &#8635; after escorting. 
       		</div>

       		<!-- Other info -->
       		<div class = "event-info" id = "tangled-info-10">
       			This event has a long range of when it can spawn: 32-44 minutes.
       		</div>

			<img class = "map-timer-map" title = "Nuhoch" src = "../images/tangled-depths/nuhoch-sector.jpg"> 

			<img class = "map-timer-map" title = "Nuhoch" src = "../images/tangled-depths/ogre-sector.jpg">

			<img class = "map-timer-map" title = "Nuhoch" src = "../images/tangled-depths/rata-sector.jpg">

			<img class = "map-timer-map" title = "Nuhoch" src = "../images/tangled-depths/scar-sector.jpg">

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	<div id = "map-timer-wrapper-2" class = "map-timer-wrapper" style = "opacity: 1; position: static;">
		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->

			<!-- Arrows -->
			<!-- Ogre -->
			<div id = "tangled-arrow-1" class="tangled-arrow-1">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
			</div>
			<!-- Nuhoch -->
			<div id = "tangled-arrow-2" class="tangled-arrow-2">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
			</div>
			<!-- Rata -->
			<div id = "tangled-arrow-3" class="tangled-arrow-3">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
			</div>
			<!-- SCAR -->
			<div id = "tangled-arrow-4" class="tangled-arrow-4">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
			</div>

			<!-- Event circles -->
			<!-- Ogre -->
       		<div id = "tangled-img-1" class = "tangled-img-1">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Nuhoch -->
       		<div id = "tangled-img-2" class = "tangled-img-2">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Rata -->
       		<div id = "tangled-img-3" class = "tangled-img-3">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- SCAR -->
       		<div id = "tangled-img-4" class = "tangled-img-4">
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Boss icons --> 
       		<!-- Ogre --> 
       		<div id = "tangled-img-5" class = "tangled-img-5">
       			<img src = "../images/assets/event_red_boss.png">
       		</div>
       		<!-- Nuhoch --> 
       		<div id = "tangled-img-6" class = "tangled-img-6">
       			<img src = "../images/assets/event_red_boss.png">
       		</div>
       		<!-- Rata --> 
       		<div id = "tangled-img-7" class = "tangled-img-7">
       			<img src = "../images/assets/event_red_boss.png">
       		</div>
       		<!-- SCAR --> 
       		<div id = "tangled-img-8" class = "tangled-img-8">
       			<img src = "../images/assets/event_red_boss.png">
       		</div>

       		<!-- NPC icons --> 
       		<div id = "tangled-img-9" class = "tangled-img-9">
       			<img src = "../images/assets/gerent_npc.png" style = "width: 50%;">
       		</div>
       		<div id = "tangled-img-10" class = "tangled-img-10">
       			<img src = "../images/assets/gerent_npc.png" style = "width: 50%;">
       		</div>
       		<div id = "tangled-img-11" class = "tangled-img-11">
       			<img src = "../images/assets/gerent_npc.png" style = "width: 50%;">
       		</div>
       		<div id = "tangled-img-12" class = "tangled-img-12">
       			<img src = "../images/assets/gerent_npc.png" style = "width: 50%;">
       		</div>

       		<!-- Chak invasion --> 
       		<!-- Ogre --> 
       		<div id = "tangled-img-13" class = "tangled-img-13">
       			<img src = "../images/assets/event_red_cross_swords.png" >
       		</div>
       		<!-- Nuhoch -->
       		<div id = "tangled-img-14" class = "tangled-img-14">
       			<img src = "../images/assets/event_red_cross_swords.png">
       		</div>
       		<!-- Rata -->
       		<div id = "tangled-img-15" class = "tangled-img-15">
       			<img src = "../images/assets/event_red_cross_swords.png">
       		</div>
       		<!-- SCAR -->
       		<div id = "tangled-img-16" class = "tangled-img-16">
       			<img src = "../images/assets/event_red_cross_swords.png">
       		</div>


       		<!-- Lane messages -->
       		<!-- Ogre -->
       		<div class = "meta-info" id = 'tangled-lane-info-1'>
       			<h1 id = "tangled-lane-info-1"> Destroy Chak eggs </h1>
       		</div>
       		<!-- Nuhoch -->
       		<div class = "meta-info" id = 'tangled-lane-info-2'>
       			<h1 id = "tangled-lane-info-2"> Stomp nodules </h1>
       		</div>
       		<!-- Ogre -->
       		<div class = "meta-info" id = 'tangled-lane-info-3'>
       			<h1 id = "tangled-lane-info-3"> Power up the golem </h1>
       		</div>
       		<!-- Ogre -->
       		<div class = "meta-info" id = 'tangled-lane-info-4'>
       			<h1 id = "tangled-lane-info-4"> Destroy Chak </h1>
       		</div>
       		<!-- Overall messages --> 
       		<!--
       		<div class = "meta-info" id = tangled-lane-info-5>
       			<h1 id = "tangled-lane-info-5"> Prep time! Gather and fill each lane! </h1>
       		</div> -->


			<img class = "map-timer-map" title = "Nuhoch" src = "../images/tangled-depths/meta-map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

	<!-- Progress bars -->
	<div class = "bottom-sticky">
	    <div id = "progress-box" class = "progress-box">
	      <h1 id = "progress-text" class = "progress-text"> </h1>
	      <div id = "progress-bar" class = "progress-bar"></div>
	    </div>
	    
	    <div class = 'current-status-box'>
	      <h1 id = "current-status"></h1>
	    </div>
	</div>

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
</body>

<script type = "text/javascript" src = "<?php echo $base;?>/timers/tangled-depths.js?v=<?php echo $date;?>"></script>
</html>
