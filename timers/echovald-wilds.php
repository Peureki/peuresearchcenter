<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> Echovald Wilds </title>
</head>
<body>

	<!-- 
	    ============================================================
	    ====================== NAVIGATION BAR ======================
	    ============================================================
	-->
	<?php include('../nav.php'); ?>

	<!-- 
	    ====================================================
	    ====================== HEADER ======================
	    ====================================================
	-->
	<div class = "page-box">
		<div class = "section-header">
			<h1> Echovald Wilds </h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!-- 
	    ========================================================
	    ====================== CHECKBOXES ======================
	    ========================================================
	-->
	<div id = "nav-right-sidetimer-box" class = "checkboxes" style = "min-width: 180px;">
	    <b> North </b>
	    <br><br>
	    Shipments: <input type = "Checkbox" id = "echovald-2-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Naga: <input type = "Checkbox" id = "echovald-5-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Speaker Outpost: <input type = "Checkbox" id = "echovald-13-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Brotherhood: <input type = "Checkbox" id = "echovald-17-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br><br>
	    <b> Central </b>
	    <br><br>
	    NE Void: <input type = "Checkbox" id = "echovald-7-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    NW Void: <input type = "Checkbox" id = "echovald-17-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Shrine Guardian: <input type = "Checkbox" id = "echovald-12-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Destroyer Void: <input type = "Checkbox" id = "echovald-15-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Branded Void: <input type = "Checkbox" id = "echovald-9-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Icebrood Void: <input type = "Checkbox" id = "echovald-8-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    NW Void: <input type = "Checkbox" id = "echovald-7-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br><br>
	    <b> South </b>
	    <br><br>
	    Modrem Void: <input type = "Checkbox" id = "echovald-4-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Risen Void: <input type = "Checkbox" id = "echovald-6-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Sangsa Chain: <input type = "Checkbox" id = "echovald-3-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Lau Chain: <input type = "Checkbox" id = "echovald-10-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	    Enraged Kappa: <input type = "Checkbox" id = "echovald-11-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	</div>


	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "siechovald-timer-list" class = "siechovald-timer-list">

		<div id = "echovald-1-sidebox" class = "event-sidebox" >
	      	<h1> Jade Maw </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-1-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-1-reset">
	      	<p1 id = "sidetimer-echovald-1">30:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-1">1800</p2>
	    </div>

		<div id = "echovald-2-sidebox" class = "event-sidebox" >
	      	<h1> Shipments </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-2-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-2-reset">
	      	<p1 id = "sidetimer-echovald-2">7:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-2">420</p2>
	    </div>

	    <div id = "echovald-3-sidebox" class = "event-sidebox" >
	      	<h1> Sangsa Chain </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-3-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-3-reset">
	      	<p1 id = "sidetimer-echovald-3">7:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-3">420</p2>
	    </div>

	    <div id = "echovald-4-sidebox" class = "event-sidebox" >
	      	<h1> Modrem Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-4-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-4-reset">
	      	<p1 id = "sidetimer-echovald-4">13:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-4">780</p2>
	    </div>

	    <div id = "echovald-5-sidebox" class = "event-sidebox" >
	      	<h1> Naga </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-5-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-5-reset">
	      	<p1 id = "sidetimer-echovald-5">16:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-5">960</p2>
	    </div>

	    <div id = "echovald-6-sidebox" class = "event-sidebox" >
	      	<h1> Risen Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-6-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-6-reset">
	      	<p1 id = "sidetimer-echovald-6">13:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-6">795</p2>
	    </div>

	    <div id = "echovald-7-sidebox" class = "event-sidebox" >
	      	<h1> NW Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-7-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-7-reset">
	      	<p1 id = "sidetimer-echovald-7">36:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-7">2175</p2>
	    </div>

	    <div id = "echovald-8-sidebox" class = "event-sidebox" >
	      	<h1> Icebrood Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-8-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-8-reset">
	      	<p1 id = "sidetimer-echovald-8">36:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-8">2175</p2>
	    </div>

	    <div id = "echovald-9-sidebox" class = "event-sidebox" >
	      	<h1> Branded Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-9-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-9-reset">
	      	<p1 id = "sidetimer-echovald-9">36:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-9">2175</p2>
	    </div>

	    <div id = "echovald-10-sidebox" class = "event-sidebox" >
	      	<h1> Lau Chain </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-10-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-10-reset">
	      	<p1 id = "sidetimer-echovald-10">8:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-10">480</p2>
	    </div>

	    <div id = "echovald-11-sidebox" class = "event-sidebox" >
	      	<h1> Enraged Kappa </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-11-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-11-reset">
	      	<p1 id = "sidetimer-echovald-11">8:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-11">495</p2>
	    </div>

	    <div id = "echovald-12-sidebox" class = "event-sidebox" >
	      	<h1> Shrine Guardian </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-12-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-12-reset">
	      	<p1 id = "sidetimer-echovald-12">8:45</p1>
	      	<p2 id = "numerical-sidetimer-echovald-12">525</p2>
	    </div>

	    <div id = "echovald-13-sidebox" class = "event-sidebox" >
	      	<h1> Speaker Outpost </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-13-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-13-reset">
	      	<p1 id = "sidetimer-echovald-13">7:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-13">420</p2>
	    </div>
	    <!--
	    <div id = "echovald-14-sidebox" class = "event-sidebox" >
	      	<h1> Speaker Champ </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-14-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-14-reset">
	      	<p1 id = "sidetimer-echovald-14">7:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-14">420</p2>
	    </div>
	-->

	    <div id = "echovald-15-sidebox" class = "event-sidebox" >
	      	<h1> Destroyer Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-15-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-15-reset">
	      	<p1 id = "sidetimer-echovald-15">36:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-15">2175</p2>
	    </div>

	    <div id = "echovald-16-sidebox" class = "event-sidebox" >
	      	<h1> NW Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-16-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-16-reset">
	      	<p1 id = "sidetimer-echovald-16">36:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-16">2175</p2>
	    </div>

	    <div id = "echovald-17-sidebox" class = "event-sidebox" >
	      	<h1> Brotherhood </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-17-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-17-reset">
	      	<p1 id = "sidetimer-echovald-17">7:30</p1>
	      	<p2 id = "numerical-sidetimer-echovald-17">450</p2>
	    </div>

	    <!--
	    <div id = "echovald-7-sidebox" class = "event-sidebox" >
	      	<h1> LB: Wyverns </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-7-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-7-reset">
	      	<p1 id = "sidetimer-echovald-7">30:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-7">1800</p2>
	    </div>
	-->
	</div>

	<!-- 
	    ======================================================
	    ====================== MAIN BOX ======================
	    ======================================================
	-->
	<div class = "page-box">
		<div class = "small-description">
		    <details>
		        <summary><b>How to: </b></summary>
		        This page is intended to get your events as fast as possible to get Imperial Favors and Writs. These timers will only be available for maps that have reset or are in the prep phase. Most of these events can be done solo and will heavily upscale with a squad. Hover over the "i" icon next to an event if they are somewhat unique on how they occur. 
		        <br><br>
		        Jade Maws occur at the even UTC hours at xx:05 and xx:45 (during the prep phases) at <input type = "text" onclick = "copy_value(this);" value = "[&BPUMAAA=]">
		 		<br><br>
		        <b>Priority of events:</b>
		        <br>Modrem & Risen &#8594; Other Voids &#8594; Any of the 7-8 minute events EXCEPT the Shipments (Sangsa &#8594; Enraged Kappa &#8594; Speaker Outpost &#8594; Shrine Guardian &#8594; Brotherhood &#8594; Lau) &#8594; Naga
		    </details>
		</div>

		

		<div class = "map-timer-wrapper">

			<div class = "event-box" id = "echovald-1-box">
      			<h1> Jade Maw </h1>
       	 		<br><p1 id = "timer-echovald-1">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-1-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-1-reset">	
       		</div>

			<div class = "event-box" id = "echovald-2-box">
	  			<h1> Shipments </h1>
	   	 		<br><p1 id = "timer-echovald-2">7:00</p1>
	    		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-2-start">
	   			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-2-reset">	
	   			<input type = "button" value = "i" onmouseover="showElement('echovald-event-info-2'); " onmouseout = "hideElement('echovald-event-info-2'); "> 
	   		</div>

	   		<div class = "event-box" id = "echovald-3-box">
      			<h1> Sangsa Chain </h1>
       	 		<br><p1 id = "timer-echovald-3">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-3-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-3-reset">
       			<input type = "button" value = "i" onmouseover="showElement('echovald-event-info-3'); " onmouseout = "hideElement('echovald-event-info-3'); "> 	
       		</div>

       		<div class = "event-box" id = "echovald-4-box">
      			<h1> Modrem Void </h1>
       	 		<br><p1 id = "timer-echovald-4">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-4-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-4-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-5-box">
      			<h1> Naga </h1>
       	 		<br><p1 id = "timer-echovald-5">16:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-5-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-5-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-6-box">
      			<h1> Risen Void </h1>
       	 		<br><p1 id = "timer-echovald-6">13:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-6-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-6-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-7-box">
      			<h1> NE Void </h1>
       	 		<br><p1 id = "timer-echovald-7">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-7-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-7-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-8-box">
      			<h1> Icebrood Void </h1>
       	 		<br><p1 id = "timer-echovald-8">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-8-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-8-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-9-box">
      			<h1> Branded Void </h1>
       	 		<br><p1 id = "timer-echovald-9">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-9-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-9-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-10-box">
      			<h1> Lau Chain </h1>
       	 		<br><p1 id = "timer-echovald-10">8:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-10-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-10-reset">	
       			<input type = "button" value = "i" onmouseover="showElement('echovald-event-info-10'); " onmouseout = "hideElement('echovald-event-info-10'); "> 
       		</div>

       		<div class = "event-box" id = "echovald-11-box">
      			<h1> Enraged Kappa </h1>
       	 		<br><p1 id = "timer-echovald-11">8:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-11-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-11-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-12-box">
      			<h1> Shrine Guardian </h1>
       	 		<br><p1 id = "timer-echovald-12">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-12-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-12-reset">
       			<input type = "button" value = "i" onmouseover="showElement('echovald-event-info-12'); " onmouseout = "hideElement('echovald-event-info-12'); ">	
       		</div>

       		<div class = "event-box" id = "echovald-13-box">
      			<h1> Speaker Outpost </h1>
       	 		<br><p1 id = "timer-echovald-13">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-13-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-13-reset">	
       			<input type = "button" value = "i" onmouseover="showElement('echovald-event-info-13'); " onmouseout = "hideElement('echovald-event-info-13'); ">
       		</div>
       		<!--
       		<div class = "event-box" id = "echovald-14-box">
      			<h1> Speaker Champ </h1>
       	 		<br><p1 id = "timer-echovald-14">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-14-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-14-reset">	
       		</div>
       	-->

       		<div class = "event-box" id = "echovald-15-box">
      			<h1> Destroyer Void </h1>
       	 		<br><p1 id = "timer-echovald-15">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-15-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-15-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-16-box">
      			<h1> NW Void </h1>
       	 		<br><p1 id = "timer-echovald-16">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-16-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-16-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-17-box">
      			<h1> Brotherhood </h1>
       	 		<br><p1 id = "timer-echovald-17">7:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-17-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-17-reset">	
       			<input type = "button" value = "i" onmouseover="showElement('echovald-event-info-17'); " onmouseout = "hideElement('echovald-event-info-17'); "> 
       		</div>

	   		<!--
	   		<div class = "event-box" id = "echovald-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-echovald-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-7-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-7-reset">	
       		</div>
       	-->

       		<!-- JADE MAW GRAPHICS -->
       		<div id = "echovald-img-1" class = "event-image">
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<div id = "echovald-img-2" class = "event-image">
       			<img src = "../images/assets/event_boss.png">
       		</div>

       		<div id = "echovald-text-1" class = "meta-info">
       			Jade Maw
       		</div>

       		<!-- BATTLE FOR JADE SEA -->
       		<div id = "echovald-img-3" class = "event-image">
       			<img src = "../images/assets/event_red_circle.png">
       		</div>

       		<div id = "echovald-text-2" class = "meta-info">
       			Gather for the Battle of the Jade Sea meta!
       		</div>

       		<!-- REGULAR EVENT INFOS -->
       		<!-- Shipments -->
       		<div id = "echovald-event-info-2" class = "event-info">
       			This event may take a long time to complete. There is a second event that occurs afterwards that requires players to defend 3 locations. This often fails if there are not enough people. 
       		</div>
       		<!-- Sangsa -->
       		<div id = "echovald-event-info-3" class = "event-info">
       			There are 4 events within this chain. A quick revive, defend, escort, and a champion at the end. 
       		</div>
       		<!-- Lau -->
       		<div id = "echovald-event-info-10" class = "event-info">
       			There are 2 events within this chain. An escort and a "gathering" event. Both may or may not take some time, but not a bad event if you are needing something. 
       		</div>
       		<!-- Shrine Guardian -->
       		<div id = "echovald-event-info-12" class = "event-info">
       			There are 2 events within this chain. Both are defense events. They finish fairly quickly, though the second could take a minute as some mobs sometimes spawn 1-2 at a time rather than a wave. 
       		</div>
       		<!-- Speaker Outpost -->
       		<div id = "echovald-event-info-13" class = "event-info">
       			There are 3 events in this chain, but only 2 happen back-to-back. The first event is a defense event for a few minutes. Afterward, there is a champ that spawns. The 3rd event only occurs 7 minutes AFTER the champion. When the 3rd event occurs, it's a champion slightly south of the Outpost. After that event, the whole cycle repeats at 7 minutes as well. Use this timer for both the next chain or for the 3rd event. 
       		</div>
       		<!-- Brotherhood -->
       		<div id = "echovald-event-info-17" class = "event-info">
       			This is an extremely quick event. There are only two waves of enemies that spawn. 
       		</div>

			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "Dragon's End" src = "../images/dragons-end/map.jpg" style = "width: 60%;">
		</div> <!-- End of map timer wrapper -->


	</div> <!-- End of page box -->

	<!-- 
	    ===================================================================
	    ====================== PROGRESS BARS ==============================
	    ===================================================================
	  -->
  	<div class = "bottom-sticky">
      	<div id = "progress-box" class = "progress-box">
        	<h1 id = "progress-text-meta" class = "progress-text"> </h1>
        	<div id = "progress-bar-meta" class = "progress-bar"></div>
      	</div>

      	<div id = "progress-box" class = "progress-box">
        	<h1 id = "progress-text-maw" class = "progress-text"> </h1>
        	<div id = "progress-bar-maw" class = "progress-bar"></div>
      	</div>
  	</div>

	<!-- 
	    ================================================================
	    ====================== FOOTER + DARK MODE ======================
	    ================================================================
	-->
	<?php include('../footer.php'); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/timers/dragons-end.js?v=<?php echo $date;?>"></script>
</html>