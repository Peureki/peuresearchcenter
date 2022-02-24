<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Sandswept Isles </title>
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
			<h1>Sandswept Isles</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">

			<div id = "sandswept-1-sidebox" class = "event-sidebox">
		      <h1> Gathering Storms </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-1-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-1-reset">
		      <p1 id = "sidetimer-sandswept-1">33:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-1">1980</p2>
	    	</div>

	    	<div id = "sandswept-2-sidebox" class = "event-sidebox">
		      <h1> Specimen Chamber </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-2-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-2-reset">
		      <p1 id = "sidetimer-sandswept-2">40:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-2">2400</p2>
	    	</div>

	    	<div id = "sandswept-3-sidebox" class = "event-sidebox">
		      <h1> Dominus Crystallum </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-3-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-3-reset">
		      <p1 id = "sidetimer-sandswept-3">12:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-3">720</p2>
	    	</div>

	    	<div id = "sandswept-4-sidebox" class = "event-sidebox">
		      <h1> Inquest Patrol </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-4-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-4-reset">
		      <p1 id = "sidetimer-sandswept-4">11:30</p1>
		      <p2 id = "numerical-sidetimer-sandswept-4">690</p2>
	    	</div>

	    	<div id = "sandswept-5-sidebox" class = "event-sidebox">
		      <h1> Mark III </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-5-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-5-reset">
		      <p1 id = "sidetimer-sandswept-5">10:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-5">600</p2>
	    	</div>

	    	<div id = "sandswept-6-sidebox" class = "event-sidebox">
		      <h1> Awakened Patrol </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-6-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-6-reset">
		      <p1 id = "sidetimer-sandswept-6">8:30</p1>
		      <p2 id = "numerical-sidetimer-sandswept-6">510</p2>
	    	</div>
	    	<!--
	    	<div id = "sandswept-7-sidebox" class = "sandswept-7-sidebox">
		      <h1> Marmoxes </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-7-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-7-reset">
		      <p1 id = "sidetimer-sandswept-7"></p1>
		      <p2 id = "numerical-sidetimer-sandswept-7"></p2>
	    	</div>
			-->
	    	<div id = "sandswept-8-sidebox" class = "event-sidebox">
		      <h1> Scarab </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-8-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-8-reset">
		      <p1 id = "sidetimer-sandswept-8">23:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-8">1380</p2>
	    	</div>

	    	<div id = "sandswept-9-sidebox" class = "event-sidebox">
		      <h1> Inquest Data </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-9-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-9-reset">
		      <p1 id = "sidetimer-sandswept-9">7:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-9">420</p2>
	    	</div>

	    	<div id = "sandswept-10-sidebox" class = "event-sidebox">
		      <h1> Inquest Core </h1>
		      <input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "sidetimer-sandswept-10-start">
		      <input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "sidetimer-sandswept-10-reset">
		      <p1 id = "sidetimer-sandswept-10">12:00</p1>
		      <p2 id = "numerical-sidetimer-sandswept-10">720</p2>
	    	</div>
	     
	    
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
	  	All: <input type = "Checkbox" id = "sandswept-all-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events, 'all');">
	  	<br>
	  	Wyvern: <input type = "Checkbox" id = "sandswept-3-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br>
	  	Inquest Patrol: <input type = "Checkbox" id = "sandswept-4-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br>
	  	Mark III: <input type = "Checkbox" id = "sandswept-5-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br>
	  	Awakened Patrol: <input type = "Checkbox" id = "sandswept-6-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br><!--
	  	Marmoxes: <input type = "Checkbox" id = "sandswept-7-checkbox" onclick = "sandswept_10_Checkbox(this);">
	  	<br>-->
	  	Scarabs: <input type = "Checkbox" id = "sandswept-8-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br>
	  	Inquest Data: <input type = "Checkbox" id = "sandswept-9-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br>
	  	Inquest Core: <input type = "Checkbox" id = "sandswept-10-checkbox" checked = "true" onclick = "checkboxTimer(this, sandswept.events);">
	  	<br><br>
	  	Deselect bounties: <input type = "button" id = "sandswept-deselect" checked = "true" value = "&#x2637;" onclick = "sandswept_Deselect(this);" style = "background-color: #802020; color: white;">
	  	<br><br>
	  	Legendary Bounties 
	  	<br><br>
	  	Starcaller: <input type = "Checkbox" id = "sandswept-bounty-1-checkbox" onclick = "sandswept_Bounty_1_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-1');"
	    	onmouseout="hideCheckboxElement('sandswept-bounty-target-1', this);">
	  	<br>
	  	Seneb: <input type = "Checkbox" id = "sandswept-bounty-2-checkbox" onclick = "sandswept_Bounty_2_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-17');"
	    	onmouseout="hideCheckboxElement('sandswept-bounty-target-17', this);">
	  	<br><br>
	  	Champion Bounties <br> North Side
	  	<br><br>
	  	Ironshell: <input type = "Checkbox" id = "sandswept-bounty-3-1-checkbox" onclick = "sandswept_Bounty_3_Checkbox(this);" 
	  		onmouseover="showElement('sandswept-bounty-target-2');"
	    	onmouseout="hideCheckboxElement('sandswept-bounty-target-2', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-3-2-checkbox" onclick = "sandswept_Bounty_3_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-3');"
	    		onmouseout="hideCheckboxElement('sandswept-bounty-target-3', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-3-3-checkbox" onclick = "sandswept_Bounty_3_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-4');"
	    		onmouseout="hideCheckboxElement('sandswept-bounty-target-4', this);">
	  	<br>
	  	Oakenscorn: <input type = "Checkbox" id = "sandswept-bounty-4-1-checkbox" onclick = "sandswept_Bounty_4_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-5');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-5', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-4-2-checkbox" onclick = "sandswept_Bounty_4_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-6');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-6', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-4-3-checkbox" onclick = "sandswept_Bounty_4_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-7');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-7', this);">
	  	<br>
	  	Old Stonehoof: <input type = "Checkbox" id = "sandswept-bounty-5-1-checkbox" onclick = "sandswept_Bounty_5_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-8');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-8', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-5-2-checkbox" onclick = "sandswept_Bounty_5_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-9');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-9', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-5-3-checkbox" onclick = "sandswept_Bounty_5_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-10');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-10', this);">
	  	<br>
	  	Exterminator: <input type = "Checkbox" id = "sandswept-bounty-6-1-checkbox" onclick = "sandswept_Bounty_6_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-11');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-11', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-6-2-checkbox" onclick = "sandswept_Bounty_6_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-12');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-12', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-6-3-checkbox" onclick = "sandswept_Bounty_6_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-13');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-13', this);">
	  	<br>
	  	Emogg: <input type = "Checkbox" id = "sandswept-bounty-7-1-checkbox" onclick = "sandswept_Bounty_7_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-14');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-14', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-7-2-checkbox" onclick = "sandswept_Bounty_7_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-15');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-15', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-7-3-checkbox" onclick = "sandswept_Bounty_7_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-16');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-16', this);">
	  	<br><br>
	  	South Side 
	  	<br><br>
	  	Magneton: <input type = "Checkbox" id = "sandswept-bounty-8-1-checkbox" onclick = "sandswept_Bounty_8_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-18');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-18', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-8-2-checkbox" onclick = "sandswept_Bounty_8_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-19');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-19', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-8-3-checkbox" onclick = "sandswept_Bounty_8_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-20');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-20', this);">
	  	<br>
	  	Prickly Pair: <input type = "Checkbox" id = "sandswept-bounty-9-1-checkbox" onclick = "sandswept_Bounty_9_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-21');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-21', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-9-2-checkbox" onclick = "sandswept_Bounty_9_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-22');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-22', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-9-3-checkbox" onclick = "sandswept_Bounty_9_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-23');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-23', this);">
	  	<br>
	  	Nepheretes: <input type = "Checkbox" id = "sandswept-bounty-10-1-checkbox" onclick = "sandswept_Bounty_10_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-24');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-24', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-10-2-checkbox" onclick = "sandswept_Bounty_10_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-25');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-25', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-10-3-checkbox" onclick = "sandswept_Bounty_10_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-26');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-26', this);">
	  	<br>
	  	Vebis: <input type = "Checkbox" id = "sandswept-bounty-11-1-checkbox" onclick = "sandswept_Bounty_11_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-27');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-27', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-11-2-checkbox" onclick = "sandswept_Bounty_11_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-28');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-28', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-11-3-checkbox" onclick = "sandswept_Bounty_11_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-29');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-29', this);">
	  	<br>
	  	Crystalwing: <input type = "Checkbox" id = "sandswept-bounty-12-1-checkbox" onclick = "sandswept_Bounty_12_Checkbox(this);"
	  		onmouseover="showElement('sandswept-bounty-target-30');"
    		onmouseout="hideCheckboxElement('sandswept-bounty-target-30', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-12-2-checkbox" onclick = "sandswept_Bounty_12_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-31');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-31', this);">
		  	<input type = "Checkbox" id = "sandswept-bounty-12-3-checkbox" onclick = "sandswept_Bounty_12_Checkbox(this);"
		  		onmouseover="showElement('sandswept-bounty-target-32');"
    			onmouseout="hideCheckboxElement('sandswept-bounty-target-32', this);">
	  	<br>

	  	
	    
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
			<!-- Gathering Storms -->
       		<div class = "event-box" id = "sandswept-1-box">
				<h1> Gathering Storms </h1>
       	 		<br><p1 id = "timer-sandswept-1">33:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-1-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-1-reset">
       			<br><p2 id = "timer-sandswept-1-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-2-box">
				<h1> Specimen Chamber </h1>
       	 		<br><p1 id = "timer-sandswept-2">40:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-2-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-2-reset">
       			<br><p2 id = "timer-sandswept-2-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-3-box">
				<h1> Dominus <br> Crystallum </h1>
       	 		<br><p1 id = "timer-sandswept-3">12:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-3-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-3-reset">
       			<br><p2 id = "timer-sandswept-3-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-4-box">
				<h1> Inquest <br> Patrol </h1>
       	 		<br><p1 id = "timer-sandswept-4">11:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-4-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-4-reset">
       			<input type = "button" value = "&#x203A;" 
       				onmouseover = "showElement('sandswept-img-4'); showElement('sandswept-img-5'); showElement('sandswept-img-6');"
       				onmouseout = "hideElement('sandswept-img-4'); hideElement('sandswept-img-5'); hideElement('sandswept-img-6');">
       			<br><p2 id = "timer-sandswept-4-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-5-box">
				<h1> Mark III </h1>
       	 		<br><p1 id = "timer-sandswept-5">10:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-5-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-5-reset">
       			<input type = "button" value = "&#x203A;" 
       				onmouseover = "showElement('sandswept-img-1'); showElement('sandswept-img-2'); showElement('sandswept-img-3');"
       				onmouseout = "hideElement('sandswept-img-1'); hideElement('sandswept-img-2'); hideElement('sandswept-img-3');">
       			<br><p2 id = "timer-sandswept-5-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-6-box">
				<h1> Awakened Patrol </h1>
       	 		<br><p1 id = "timer-sandswept-6">8:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-6-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-6-reset">
       			<br><p2 id = "timer-sandswept-6-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-7-box">
				<h1> Marmoxes </h1>
       	 		<br><p1 id = "timer-sandswept-7"></p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-7-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-7-reset">
       			<br><p2 id = "timer-sandswept-7-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-8-box">
				<h1> Scarab </h1>
       	 		<br><p1 id = "timer-sandswept-8">23:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-8-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-8-reset">
       			<br><p2 id = "timer-sandswept-8-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-9-box">
				<h1> Inquest <br> Data </h1>
       	 		<br><p1 id = "timer-sandswept-9">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-9-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-9-reset">
       			<input type = "button" value = "&#x203A;" 
       				onmouseover = "showElement('sandswept-img-7'); showElement('sandswept-img-8'); showElement('sandswept-img-9');"
       				onmouseout = "hideElement('sandswept-img-7'); hideElement('sandswept-img-8'); hideElement('sandswept-img-9');">
       			<br><p2 id = "timer-sandswept-9-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sandswept-10-box">
				<h1> Inquest Core </h1>
       	 		<br><p1 id = "timer-sandswept-10">12:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sandswept.events);" value = "Start" id = "timer-sandswept-10-start">
       			<input type = "button" onclick = "reset(this, sandswept.events);" value = "&#8635;" id = "timer-sandswept-10-reset">
       			<br><p2 id = "timer-sandswept-10-text"></p2>	
       		</div>

       		<!-- Bounty Icons --> 
       		<!-- Legendary Starcaller -->
       		<div id = "sandswept-bounty-target-1" class = "sandswept-bounty-target-1">
       			<span id = "sandswept-bounty-1-text">Starcaller</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Ironshell -->
	       	<div id = "sandswept-bounty-target-2" class = "sandswept-bounty-target-2">
       			<span id = "sandswept-bounty-2-text">Ironshell 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-3" class = "sandswept-bounty-target-3">
       			<span id = "sandswept-bounty-3-text">Ironshell 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-4" class = "sandswept-bounty-target-4">
       			<span id = "sandswept-bounty-4-text">Ironshell 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Oakenscorn -->
	       	<div id = "sandswept-bounty-target-5" class = "sandswept-bounty-target-5">
       			<span id = "sandswept-bounty-5-text">Oakenscorn 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-6" class = "sandswept-bounty-target-6">
       			<span id = "sandswept-bounty-6-text">Oakenscorn 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-7" class = "sandswept-bounty-target-7">
       			<span id = "sandswept-bounty-7-text">Oakenscorn 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Old Stonehoof -->
	       	<div id = "sandswept-bounty-target-8" class = "sandswept-bounty-target-8">
       			<span id = "sandswept-bounty-8-text">Old Stonehoof 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-9" class = "sandswept-bounty-target-9">
       			<span id = "sandswept-bounty-8-text">Old Stonehoof 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-10" class = "sandswept-bounty-target-10">
       			<span id = "sandswept-bounty-8-text">Old Stonehoof 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Exterminator IG-04 -->
	       	<div id = "sandswept-bounty-target-11" class = "sandswept-bounty-target-11">
       			<span id = "sandswept-bounty-11-text">Exterminator <br> IG-04 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-12" class = "sandswept-bounty-target-12">
       			<span id = "sandswept-bounty-12-text">Exterminator <br> IG-04 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-13" class = "sandswept-bounty-target-13">
       			<span id = "sandswept-bounty-13-text">Exterminator <br> IG-04 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Emogg the Soulbeast -->
	       	<div id = "sandswept-bounty-target-14" class = "sandswept-bounty-target-14">
       			<span id = "sandswept-bounty-14-text">Emogg the <br> Soulbeast 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-15" class = "sandswept-bounty-target-15">
       			<span id = "sandswept-bounty-15-text">Emogg the <br> Soulbeast 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-16" class = "sandswept-bounty-target-16">
       			<span id = "sandswept-bounty-16-text">Emogg the <br> Soulbeast 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Legendary Seneb -->
       		<div id = "sandswept-bounty-target-17" class = "sandswept-bounty-target-17">
       			<span id = "sandswept-bounty-17-text">Seneb the <br> Desecrated</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Magneton Manipulator -->
       		<div id = "sandswept-bounty-target-18" class = "sandswept-bounty-target-18">
       			<span id = "sandswept-bounty-18-text">Magneton <br> Manipulator 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-19" class = "sandswept-bounty-target-19">
       			<span id = "sandswept-bounty-19-text">Magneton <br> Manipulator 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-20" class = "sandswept-bounty-target-20">
       			<span id = "sandswept-bounty-20-text">Magneton <br> Manipulator 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- The Prickly Pair -->
       		<div id = "sandswept-bounty-target-21" class = "sandswept-bounty-target-21">
       			<span id = "sandswept-bounty-21-text">Prickly Pear 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-22" class = "sandswept-bounty-target-22">
       			<span id = "sandswept-bounty-22-text">Prickly Pear 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-23" class = "sandswept-bounty-target-23">
       			<span id = "sandswept-bounty-23-text">Prickly Pear 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Nepheretes -->
       		<div id = "sandswept-bounty-target-24" class = "sandswept-bounty-target-24">
       			<span id = "sandswept-bounty-24-text">Nepheretes 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-25" class = "sandswept-bounty-target-25">
       			<span id = "sandswept-bounty-25-text">Nepheretes 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-26" class = "sandswept-bounty-target-26">
       			<span id = "sandswept-bounty-26-text">Nepheretes 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Vebis the Inquisitor -->
       		<div id = "sandswept-bounty-target-27" class = "sandswept-bounty-target-27">
       			<span id = "sandswept-bounty-27-text">Vebis the <br> Inquisitor 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-28" class = "sandswept-bounty-target-28">
       			<span id = "sandswept-bounty-28-text">Vebis the <br> Inquisitor 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-29" class = "sandswept-bounty-target-29">
       			<span id = "sandswept-bounty-29-text">Vebis the <br> Inquisitor 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Crystalwing -->
       		<div id = "sandswept-bounty-target-30" class = "sandswept-bounty-target-30">
       			<span id = "sandswept-bounty-30-text">Crystalwing 1</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-31" class = "sandswept-bounty-target-31">
       			<span id = "sandswept-bounty-31-text">Crystalwing 2</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>
	       	<div id = "sandswept-bounty-target-32" class = "sandswept-bounty-target-32">
       			<span id = "sandswept-bounty-32-text">Crystalwing 3</span> 
	       		<img src = "../images/assets/bounty_target.png">
	       	</div>

	       	<!-- Mark III spots -->
	       	<div id = "sandswept-img-1" class = "sandswept-img-1">
	       		<h1> Mark III </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-2" class = "sandswept-img-2">
       			<h1> Mark III </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-3" class = "sandswept-img-3">
       			<h1> Mark III </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Inquest Patrol spots -->
	       	<div id = "sandswept-img-4" class = "sandswept-img-4">
	       		<h1> Inquest Patrol </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-5" class = "sandswept-img-5">
       			<h1> Inquest Patrol </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-6" class = "sandswept-img-6">
       			<h1> Inquest Patrol </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Inquest Data spots -->
	       	<div id = "sandswept-img-7" class = "sandswept-img-7">
	       		<h1> Inquest Data </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-8" class = "sandswept-img-8">
	       		<h1> Inquest Data </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-9" class = "sandswept-img-9">
	       		<h1> Inquest Data </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- North meta initial spawn spots W/O ANIMATION -->
	       	<div id = "sandswept-img-10" class = "sandswept-img-10">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-11" class = "sandswept-img-11">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-12" class = "sandswept-img-12">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-13" class = "sandswept-img-13">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Mark III initial spawn spots W/ ANIMATION -->
	       	<div id = "sandswept-img-14" class = "sandswept-img-14">
	       		<h1> Mark III </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-15" class = "sandswept-img-15">
	       		<h1> Mark III </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-16" class = "sandswept-img-16">
	       		<h1> Mark III </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Inquest Patrol initial spawn spots W/ ANIMATION -->
	       	<div id = "sandswept-img-17" class = "sandswept-img-17">
	       		<h1> Inquest Patrol </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-18" class = "sandswept-img-18">
	       		<h1> Inquest Patrol </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-19" class = "sandswept-img-19">
	       		<h1> Inquest Patrol </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Inquest Data initial spawn spots W/ ANIMATION -->
	       	<div id = "sandswept-img-20" class = "sandswept-img-20">
	       		<h1> Inquest Data </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-21" class = "sandswept-img-21">
	       		<h1> Inquest Data </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-22" class = "sandswept-img-22">
	       		<h1> Inquest Data </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- North meta initial spawn spots W/ ANIMATION -->
	       	<div id = "sandswept-img-23" class = "sandswept-img-23">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-24" class = "sandswept-img-24">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-25" class = "sandswept-img-25">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<div id = "sandswept-img-26" class = "sandswept-img-26">
	       		<h1> Gathering Storms </h1>
       			<img src = "../images/assets/event_circle.png">
       		</div> 

       		<!-- Inquest portals W/O animation -->
	       	<div id = "sandswept-img-27" class = "sandswept-img-27">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-28" class = "sandswept-img-28">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-29" class = "sandswept-img-29">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-30" class = "sandswept-img-30">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-31" class = "sandswept-img-31">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-32" class = "sandswept-img-32">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>

       		<!-- Inquest portals W/ animation -->
	       	<div id = "sandswept-img-33" class = "sandswept-img-33">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-34" class = "sandswept-img-34">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-35" class = "sandswept-img-35">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-36" class = "sandswept-img-36">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-37" class = "sandswept-img-37">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>
       		<div id = "sandswept-img-38" class = "sandswept-img-38">
       			<img src = "../images/assets/inquest_portal.png">
       		</div>

       		<!-- Info on events with multiple possible locations -->
       		<div id = "sandswept-box-info-1" class = 'sandswept-box-info-1'>
       			<h1> These events marked on the right side have multiple possible locations. There will only be 1 event of each at a time. </h1>
       		</div>
       


       		<!-- Map -->
			<img class = "map-timer-map" title = "Sandswept Isles" src = "../images/sandswept-isles/sandswept-north-map.jpg"> 
			<!-- Map -->
			<img class = "map-timer-map" title = "Sandswept Isles" src = "../images/sandswept-isles/sandswept-south-map.jpg"> 


		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>

	<script type = "text/javascript" src = "<?php echo $base;?>/timers/sandswept-isles.js?v=<?php echo $date;?>"></script>
</body>
</html>
