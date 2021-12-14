<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Domain of Kourna </title>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('../nav.php'); ?>

	<!-- Main header -->
	<div class = "page-box">
		<div class = "section-header">
			<h1>Domain of Kourna</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">
	    <!-- KOURNA EVENTS -->
	    <div id = "kourna-0-sidebox" class = "event-sidebox">
	      <h1> Scarab Plague</h1>
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-0-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-0-reset">
	      <p1 id = "sidetimer-kourna-0">30:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-0">1800</p2> 
	    </div>

	    <div id = "kourna-1-sidebox" class = "event-sidebox">
	      <h1> Researcher Siris</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-1-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-1-reset">
	      <p1 id = "sidetimer-kourna-1">8:30</p1>
	      <p2 id = "numerical-sidetimer-kourna-1">510</p2> 
	    </div>

	    <div id = "kourna-2-sidebox" class = "event-sidebox">
	      <h1> Researcher Emm</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-2-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-2-reset">
	      <p1 id = "sidetimer-kourna-2">8:30</p1>
	      <p2 id = "numerical-sidetimer-kourna-2">510</p2> 
	    </div>
	    <div id = "kourna-3-sidebox" class = "event-sidebox">
	      <h1> Champ Shark</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-3-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-3-reset">
	      <p1 id = "sidetimer-kourna-3">13:30</p1>
	      <p2 id = "numerical-sidetimer-kourna-3">810</p2> 
	    </div>

	    <div id = "kourna-4-sidebox" class = "event-sidebox">
	      <h1> Choya Chieftain</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-4-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-4-reset">
	      <p1 id = "sidetimer-kourna-4">15:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-4">900</p2> 
	    </div>

	    <div id = "kourna-5-sidebox" class = "event-sidebox" onMouseOver = "showElement('kourna-5-circle-4'); showElement('kourna-5-circle-5'); showElement('kourna-5-circle-6') " onMouseOut = " hideElement('kourna-5-circle-4'); hideElement('kourna-5-circle-5'); hideElement('kourna-5-circle-6') ">
	      <h1> Cannons</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-5-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-5-reset">
	      <p1 id = "sidetimer-kourna-5">5:30</p1>
	      <p2 id = "numerical-sidetimer-kourna-5">330</p2> 
	    </div>

	    <div id = "kourna-6-sidebox" class = "event-sidebox">
	      <h1> Inquest Lab</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-6-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-6-reset">
	      <p1 id = "sidetimer-kourna-6">13:30</p1>
	      <p2 id = "numerical-sidetimer-kourna-6">810</p2>
	    </div>

	    <div id = "kourna-7-sidebox" class = "event-sidebox">
	      <h1> Researcher Maggin</h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-7-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-7-reset">
	      <p1 id = "sidetimer-kourna-7">8:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-7">480</p2> 
	    </div>

	    <div id = "kourna-8-sidebox" class = "event-sidebox">
	      <h1> LB: Troopmarshal </h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-8-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-8-reset">
	      <p1 id = "sidetimer-kourna-8">30:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-8">1800</p2> 
	    </div>

	    <div id = "kourna-9-sidebox" class = "event-sidebox">
	      <h1> B: Agasaya </h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-9-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-9-reset">
	      <p1 id = "sidetimer-kourna-9">15:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-9">900</p2> 
	    </div>

	    <div id = "kourna-10-sidebox" class = "event-sidebox">
	      <h1> B: Aspohodel </h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-10-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-10-reset">
	      <p1 id = "sidetimer-kourna-10">15:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-10">900</p2> 
	    </div>

	    <div id = "kourna-11-sidebox" class = "event-sidebox">
	      <h1> B: Cabochon </h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-11-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-11-reset">
	      <p1 id = "sidetimer-kourna-11">15:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-11">900</p2> 
	    </div>

	    <div id = "kourna-12-sidebox" class = "event-sidebox">
	      <h1> B: Enbilulu </h1> 
	      <input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "sidetimer-kourna-12-start">
	      <input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "sidetimer-kourna-12-reset">
	      <p1 id = "sidetimer-kourna-12">15:00</p1>
	      <p2 id = "numerical-sidetimer-kourna-12">900</p2> 
	    </div>
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
	    All: <input type = "Checkbox" id = "kourna-all-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events, 'all');">
	    <br>
	    Meta - Scarab Plague: <input type = "Checkbox" id = "kourna-0-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Researcher Siris: <input type = "Checkbox" id = "kourna-1-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Researcher Emm: <input type = "Checkbox" id = "kourna-2-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Champ Shark: <input type = "Checkbox" id = "kourna-3-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Choya Chieftain: <input type = "Checkbox" id = "kourna-4-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Cannons: <input type = "Checkbox" id = "kourna-5-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Inquest Lab: <input type = "Checkbox" id = "kourna-6-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    Researcher Maggin: <input type = "Checkbox" id = "kourna-7-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br>
	    LB: Troopmarshal: <input type = "Checkbox" id = "kourna-8-checkbox" checked = "true" onclick = "checkboxTimer(this, kourna.events);">
	    <br><br>
	    Bounty Locations
	    <br><br>
	    Troopmarshal: <input type = "Checkbox"
	    	onclick = "kourna_Troopmarshal_Checkbox(this);" 
	    	onmouseover="showElement('kourna-troopmarshal-location-box-1'); showElement('kourna-troopmarshal-green-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-troopmarshal-location-box-1', this); hideCheckboxElement('kourna-troopmarshal-green-x-1', this); "> 
	    <br>
	    Agasaya: <input type = "Checkbox" id = "kourna-agasaya-checkbox-1" 
	    	onclick = "kourna_Agasaya_Checkbox(this);" 
	    	onmouseover="showElement('kourna-agasaya-location-box-1'); showElement('kourna-agasaya-green-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-agasaya-location-box-1', this); hideCheckboxElement('kourna-agasaya-green-x-1', this); ">
	    	<input type = "Checkbox" id = "kourna-agasaya-checkbox-2" onclick = "kourna_Agasaya_Checkbox(this);" onmouseover="showElement('kourna-agasaya-location-box-2'); showElement('kourna-agasaya-green-x-2');" 
	    	onmouseout="hideCheckboxElement('kourna-agasaya-location-box-2', this); hideCheckboxElement('kourna-agasaya-green-x-2', this); ">
	    	<input type = "Checkbox" id = "kourna-agasaya-checkbox-3" onclick = "kourna_Agasaya_Checkbox(this);" onmouseover="showElement('kourna-agasaya-location-box-3'); showElement('kourna-agasaya-green-x-3');" 
	    	onmouseout="hideCheckboxElement('kourna-agasaya-location-box-3', this); hideCheckboxElement('kourna-agasaya-green-x-3', this); ">
    	<br>
    	Asphodel: <input type = "Checkbox" id = "kourna-asphodel-checkbox-1" onclick = "kourna_Asphodel_Checkbox(this);" onmouseover="showElement('kourna-asphodel-location-box-1'); showElement('kourna-asphodel-green-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-asphodel-location-box-1', this); hideCheckboxElement('kourna-asphodel-green-x-1', this); ">
    		<input type = "Checkbox" id = "kourna-asphodel-checkbox-2" onclick = "kourna_Asphodel_Checkbox(this);" onmouseover="showElement('kourna-asphodel-location-box-2'); showElement('kourna-asphodel-green-x-2');" 
	    		onmouseout="hideCheckboxElement('kourna-asphodel-location-box-2', this); hideCheckboxElement('kourna-asphodel-green-x-2', this); ">
    		<input type = "Checkbox" id = "kourna-asphodel-checkbox-3" onclick = "kourna_Asphodel_Checkbox(this);" onmouseover="showElement('kourna-asphodel-location-box-3'); showElement('kourna-asphodel-green-x-3');" 
	    		onmouseout="hideCheckboxElement('kourna-asphodel-location-box-3', this); hideCheckboxElement('kourna-asphodel-green-x-3', this); ">
    	<br>
		Cabochon: <input type = "Checkbox" id = "kourna-cabochon-checkbox-1" onclick = "kourna_Cabochon_Checkbox(this);" 	onmouseover="showElement('kourna-cabochon-location-box-1'); showElement('kourna-cabochon-yellow-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-cabochon-location-box-1', this); hideCheckboxElement('kourna-cabochon-yellow-x-1', this); ">
			<input type = "Checkbox" id = "kourna-cabochon-checkbox-2" onclick = "kourna_Cabochon_Checkbox(this);" 
			onmouseover="showElement('kourna-cabochon-location-box-1'); showElement('kourna-cabochon-yellow-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-cabochon-location-box-1', this); hideCheckboxElement('kourna-cabochon-yellow-x-1', this); ">
			<input type = "Checkbox" id = "kourna-cabochon-checkbox-3" onclick = "kourna_Cabochon_Checkbox(this);" 
			onmouseover="showElement('kourna-cabochon-location-box-1'); showElement('kourna-cabochon-yellow-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-cabochon-location-box-1', this); hideCheckboxElement('kourna-cabochon-yellow-x-1', this); ">
		<br>
		Enbilulu: <input type = "Checkbox" id = "kourna-enbilulu-checkbox-1" onclick = "kourna_Enbilulu_Checkbox(this);"
			onmouseover="showElement('kourna-enbilulu-location-box-1'); showElement('kourna-enbilulu-red-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-enbilulu-location-box-1', this); hideCheckboxElement('kourna-enbilulu-red-x-1', this); ">
	    	<input type = "Checkbox" id = "kourna-enbilulu-checkbox-1" onclick = "kourna_Enbilulu_Checkbox(this);"
			onmouseover="showElement('kourna-enbilulu-location-box-1'); showElement('kourna-enbilulu-red-x-1');" 
	    	onmouseout="hideCheckboxElement('kourna-enbilulu-location-box-1', this); hideCheckboxElement('kourna-enbilulu-red-x-1', this); ">
			<input type = "Checkbox" id = "kourna-enbilulu-checkbox-3" onclick = "kourna_Enbilulu_Checkbox(this);" 
			onmouseover="showElement('kourna-enbilulu-location-box-3'); showElement('kourna-enbilulu-red-x-3');" 
	    	onmouseout="hideCheckboxElement('kourna-enbilulu-location-box-3', this); hideCheckboxElement('kourna-enbilulu-red-x-3', this); ">
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "small-description">
			<details>
				<summary><b> How to: </b></summary>
				<br> There are two types of cannon events: attacking the cannon and defending the cannon. Attacking the cannon is what you want in terms of farming. Defending is during the pre-event for the meta after destroying the 3 pylons and turning all the Spare Parts. Attacking only occurs any time the pre-event is not up. This means that when all the Spare Parts are filled and the pylons are up/destroyed then it will stop, but continue during the raid  of the Moon Fortress and beyond. 
				<br><br>
				<b> Priority of events: </b>
				<br>Emm &#8594; Cannons &#8594; Meta (not including pre) &#8594; Champ Shark &#8594; Choya &#8594; Maggin			
			</details>
		</div>
		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
			<div class = "event-box" id = "kourna-0-box">
       			<h1> Meta - Scarab Plague </h1>
       	 		<br><p1 id = "timer-kourna-0">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-0-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-0-reset">
       			<br><p2 id = "timer-kourna-0-text"></p2>	
       		</div>

			<div class = "event-box" id = "kourna-1-box">
				<h1> Researcher Siris </h1>
       	 		<br><p1 id = "timer-kourna-1">8:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-1-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-1-reset">
       			<br><p2 id = "timer-kourna-1-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-2-box">
       			<h1> Researcher Emm  </h1>
				<br><p1 id = "timer-kourna-2" >8:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-2-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-2-reset">
       			<br><p2 id = "timer-kourna-2-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-3-box">
       			<h1> Champ Shark </h1>
       	 		<br><p1 id = "timer-kourna-3">13:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-3-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-3-reset">
       			<br><p2 id = "timer-kourna-3-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-4-box">
       			<h1> Choya Chieftain </h1>
       	 		<br><p1 id = "timer-kourna-4">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-4-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-4-reset">
       			<br><p2 id = "timer-kourna-4-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-5-box" onMouseOver = "showElement('kourna-5-circle-4'); showElement('kourna-5-circle-5'); showElement('kourna-5-circle-6') " onMouseOut = " hideElement('kourna-5-circle-4'); hideElement('kourna-5-circle-5'); hideElement('kourna-5-circle-6') ">
       			<h1> Cannons (3) </h1>
				<br><p1 id = "timer-kourna-5">5:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-5-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-5-reset">
       			<br><p2 id = "timer-kourna-5-text"></p2>	
       		</div>

       		<!-- CANNON CIRCLES (event 6) 
       				1-3 = light cyan 
       				4-6 = cyan --> 
       		<div id = "kourna-5-circle-1" class="kourna-5-circle-1"></div>
       		<div id = "kourna-5-circle-2" class="kourna-5-circle-2"></div>
       		<div id = "kourna-5-circle-3" class="kourna-5-circle-3"></div>
       		<div id = "kourna-5-circle-4" class="kourna-5-circle-4"></div>
       		<div id = "kourna-5-circle-5" class="kourna-5-circle-5"></div>
       		<div id = "kourna-5-circle-6" class="kourna-5-circle-6"></div>

       		<div class = "event-box" id = "kourna-6-box">
       			<h1> Inquest Lab  </h1>
       	 		<br><p1 id = "timer-kourna-6">13:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-6-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-6-reset">
       			<br><p2 id = "timer-kourna-6-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-7-box">
       			<h1> Researcher Maggin </h1>
       	 		<br><p1 id = "timer-kourna-7">8:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-7-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-7-reset">
       			<br><p2 id = "timer-kourna-7-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-8-box">
       			<h1> LB: Troopmarshal </h1>
       	 		<br><p1 id = "timer-kourna-8">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-8-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-8-reset">
       			<br><p2 id = "timer-kourna-8-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-9-box" style = "opacity: 0;">
       			<h1> B: Agasaya </h1>
       	 		<br><p1 id = "timer-kourna-9">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-9-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-9-reset">
       			<br><p2 id = "timer-kourna-9-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-10-box" style = "opacity: 0;">
       			<h1> B: Asphodel </h1>
       	 		<br><p1 id = "timer-kourna-10">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-10-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-10-reset">
       			<br><p2 id = "timer-kourna-10-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-11-box" style = "opacity: 0;">
       			<h1> B: Cabochon </h1>
       	 		<br><p1 id = "timer-kourna-11">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-11-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-11-reset">
       			<br><p2 id = "timer-kourna-11-text"></p2>	
       		</div>

       		<div class = "event-box" id = "kourna-12-box" style = "opacity: 0;">
       			<h1> B: Enbilulu </h1>
       	 		<br><p1 id = "timer-kourna-12">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kourna.events);" value = "Start" id = "timer-kourna-12-start">
       			<input type = "button" onclick = "reset(this, kourna.events);" value = "&#8635;" id = "timer-kourna-12-reset">
       			<br><p2 id = "timer-kourna-12-text"></p2>	
       		</div>



			<img class = "map-timer-domain-of-kourna" title = "Domain of Kourna" src = "../images/domain-of-kourna/domain-of-kourna-map.jpg">

			<!-- BOUNTY LOCATION MARKERS --> 
		<div id = "kourna-troopmarshal-location-box-1" class = "kourna-troopmarshal-location-box-1">
       		<h1 id = "kourna-trooopmarshal-location-box-1-text">Troopmarshal</h1> 
       	</div>

       	<div id = "kourna-agasaya-location-box-1" class = "kourna-agasaya-location-box-1">
       		<h1 id = "kourna-agasaya-location-box-1-text">Location 1 <br> Agasaya</h1> 
       	</div>

       	<div id = "kourna-agasaya-location-box-2" class = "kourna-agasaya-location-box-2">
       		<h1 id = "kourna-agasaya-location-box-2-text">Location 2 <br> Agasaya</h1> 
       	</div>

       	<div id = "kourna-agasaya-location-box-3" class = "kourna-agasaya-location-box-3">
       		<h1 id = "kourna-agasaya-location-box-3-text">Location 3 <br> Agasaya</h1> 
       	</div>

       	<div id = "kourna-asphodel-location-box-1" class = "kourna-asphodel-location-box-1">
       		<h1 id = "kourna-asphodel-location-box-1-text">Location 1 <br> Asphodel</h1> 
       	</div>

       	<div id = "kourna-asphodel-location-box-2" class = "kourna-asphodel-location-box-2">
       		<h1 id = "kourna-asphodel-location-box-2-text">Location 2 <br> Asphodel</h1> 
       	</div>

       	<div id = "kourna-asphodel-location-box-3" class = "kourna-asphodel-location-box-3">
       		<h1 id = "kourna-asphodel-location-box-3-text">Location 3 <br> Asphodel</h1> 
       	</div>

       	<div id = "kourna-cabochon-location-box-1" class = "kourna-cabochon-location-box-1">
       		<h1 id = "kourna-cabochon-location-box-1-text">Location 1/2/3 <br> Cabochon</h1> 
       	</div>

       	<div id = "kourna-enbilulu-location-box-1" class = "kourna-enbilulu-location-box-1">
       		<h1 id = "kourna-enbilulu-location-box-1-text">Location 1/2 <br> Enbilulu</h1> 
       	</div>

       	<div id = "kourna-enbilulu-location-box-3" class = "kourna-enbilulu-location-box-3">
       		<h1 id = "kourna-enbilulu-location-box-3-text">Location 3 <br> Enbilulu</h1> 
       	</div>
       	<!-- Troopmarshal -->
		<div id = "kourna-troopmarshal-green-x-1" class = "kourna-troopmarshal-green-x-1">
			<span>X</span>
		</div>
		<!-- Agasaya -->
		<div id = "kourna-agasaya-green-x-1" class = "kourna-agasaya-green-x-1">
			<span>X</span>
		</div>

		<div id = "kourna-agasaya-green-x-2" class = "kourna-agasaya-green-x-2">
			<span>X</span>
		</div>

		<div id = "kourna-agasaya-green-x-3" class = "kourna-agasaya-green-x-3">
			<span>X</span>
		</div>
		<!-- Asphodel -->
		<div id = "kourna-asphodel-green-x-1" class = "kourna-asphodel-green-x-1">
			<span>X</span>
		</div>

		<div id = "kourna-asphodel-green-x-2" class = "kourna-asphodel-green-x-2">
			<span>X</span>
		</div>

		<div id = "kourna-asphodel-green-x-3" class = "kourna-asphodel-green-x-3">
			<span>X</span>
		</div>
		<!-- Cabochon -->
		<div id = "kourna-cabochon-yellow-x-1" class = "kourna-cabochon-yellow-x-1">
			<span>X</span>
		</div>
		<!-- Enbilulu -->
		<div id = "kourna-enbilulu-red-x-1" class = "kourna-enbilulu-red-x-1">
			<span>X</span>
		</div>
		<div id = "kourna-enbilulu-red-x-3" class = "kourna-enbilulu-red-x-3">
			<span>X</span>
		</div>

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>

	<script type = "text/javascript" src = "<?php echo $base;?>/timers/domain-of-kourna.js?v=<?php echo $date;?>"></script>
</body>
</html>
