<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> Dragonfall </title>
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
			<h1> Dragonfall </h1>
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
	<div class = "checkboxes">
		All: <input type = "Checkbox" id = "dragonfall-all-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events, 'all');">
		<br> 
		<b> B: Burning Forest </b>
		<br><br>
		Cull N: <input type = "Checkbox" id = "dragonfall-1-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Cull S: <input type = "Checkbox" id = "dragonfall-2-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Cull E: <input type = "Checkbox" id = "dragonfall-3-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Champ Abyssal: <input type = "Checkbox" id = "dragonfall-4-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Brandstorm <input type = "Checkbox" id = "dragonfall-5-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Mender: <input type = "Checkbox" id = "dragonfall-6-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br>
		Bridge N: <input type = "Checkbox" id = "dragonfall-7-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Bridge W: <input type = "Checkbox" id = "dragonfall-8-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br><br>
		<b> O: Olmakhan </b>
		<br><br>
		Cull W: <input type = "Checkbox" id = "dragonfall-9-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Cull S: <input type = "Checkbox" id = "dragonfall-10-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Cull E: <input type = "Checkbox" id = "dragonfall-11-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Champ Arbiter: <input type = "Checkbox" id = "dragonfall-12-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Brandstorm: <input type = "Checkbox" id = "dragonfall-13-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Mender: <input type = "Checkbox" id = "dragonfall-14-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Bridge S: <input type = "Checkbox" id = "dragonfall-15-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br><br>
		<b> M: Melandru </b>
		<br><br>
		Cull N: <input type = "Checkbox" id = "dragonfall-16-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Cull W: <input type = "Checkbox" id = "dragonfall-17-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Cull S: <input type = "Checkbox" id = "dragonfall-18-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Champ Elemental: <input type = "Checkbox" id = "dragonfall-19-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Brandstorm: <input type = "Checkbox" id = "dragonfall-20-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Mender: <input type = "Checkbox" id = "dragonfall-21-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Bridge E: <input type = "Checkbox" id = "dragonfall-22-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br><br>
		<b> Custom </b>
		<br><br>
		All Bridges: <input type = "Checkbox" id = "dragonfall-bridge-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events, 7, 8, 15, 22);">
		<br> 
		All Culls: <input type = "Checkbox" id = "dragonfall-bridge-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events, 1, 2, 3, 9, 10, 11, 16, 17, 18);">
		<br> 
		All Brandstorms: <input type = "Checkbox" id = "dragonfall-brandstorm-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events, 5, 13, 20);">
		<br> 
		All Menders: <input type = "Checkbox" id = "dragonfall-mender-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events, 6, 14, 21);">
		<br> 
	</div>

	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">

		<!-- 
		    =============================================================
		    ====================== BURNING FOREST =======================
		    =============================================================
		-->
	    <div id = "dragonfall-1-sidebox" class = "event-sidebox" >
	      	<h1> B: Cull N </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-1-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-1-reset">
	      	<p1 id = "sidetimer-dragonfall-1">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-1">240</p2>
	    </div>

	    <div id = "dragonfall-2-sidebox" class = "event-sidebox" >
	      	<h1> B: Cull S </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-2-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-2-reset">
	      	<p1 id = "sidetimer-dragonfall-2">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-2">240</p2>
	    </div>

	    <div id = "dragonfall-3-sidebox" class = "event-sidebox" >
	      	<h1> B: Cull E </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-3-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-3-reset">
	      	<p1 id = "sidetimer-dragonfall-3">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-3">240</p2>
	    </div>

	    <div id = "dragonfall-4-sidebox" class = "event-sidebox" >
	      	<h1> B: Champ Abyssal </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-4-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-4-reset">
	      	<p1 id = "sidetimer-dragonfall-4">9:30</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-4">570</p2>
	    </div>

	    <div id = "dragonfall-5-sidebox" class = "event-sidebox" >
	      	<h1> B: Brandstorm </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-5-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-5-reset">
	      	<p1 id = "sidetimer-dragonfall-5">6:15</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-5">375</p2>
	    </div>

	    <div id = "dragonfall-6-sidebox" class = "event-sidebox" >
	      	<h1> B: Mender </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-6-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-6-reset">
	      	<p1 id = "sidetimer-dragonfall-6">9:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-6">540</p2>
	    </div>

	    <div id = "dragonfall-7-sidebox" class = "event-sidebox" >
	      	<h1> B: Bridge N </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-7-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-7-reset">
	      	<p1 id = "sidetimer-dragonfall-7">14:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-7">840</p2>
	    </div>

	    <div id = "dragonfall-8-sidebox" class = "event-sidebox" >
	      	<h1> B: Bridge W </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-8-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-8-reset">
	      	<p1 id = "sidetimer-dragonfall-8">14:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-8">840</p2>
	    </div>

	    <!-- 
		    =======================================================
		    ====================== OKLAHOMA =======================
		    =======================================================
		-->

	    <div id = "dragonfall-9-sidebox" class = "event-sidebox" >
	      	<h1> O: Cull W </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-9-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-9-reset">
	      	<p1 id = "sidetimer-dragonfall-9">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-9">240</p2>
	    </div>

	    <div id = "dragonfall-10-sidebox" class = "event-sidebox" >
	      	<h1> O: Cull S </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-10-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-10-reset">
	      	<p1 id = "sidetimer-dragonfall-10">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-10">240</p2>
	    </div>

	    <div id = "dragonfall-11-sidebox" class = "event-sidebox" >
	      	<h1> O: Cull E </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-11-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-11-reset">
	      	<p1 id = "sidetimer-dragonfall-11">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-11">240</p2>
	    </div>

	    <div id = "dragonfall-12-sidebox" class = "event-sidebox" >
	      	<h1> O: Champ Arbiter </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-12-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-12-reset">
	      	<p1 id = "sidetimer-dragonfall-12">9:30</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-12">570</p2>
	    </div>

	    <div id = "dragonfall-13-sidebox" class = "event-sidebox" >
	      	<h1> O: Brandstorm </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-13-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-13-reset">
	      	<p1 id = "sidetimer-dragonfall-13">6:15</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-13">375</p2>
	    </div>

	    <div id = "dragonfall-14-sidebox" class = "event-sidebox" >
	      	<h1> B: Mender </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-14-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-14-reset">
	      	<p1 id = "sidetimer-dragonfall-14">9:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-14">540</p2>
	    </div>

	    <div id = "dragonfall-15-sidebox" class = "event-sidebox" >
	      	<h1> O: Bridge S </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-15-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-15-reset">
	      	<p1 id = "sidetimer-dragonfall-15">14:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-15">840</p2>
	    </div>

	    <!-- 
		    =======================================================
		    ====================== MELANDRU =======================
		    =======================================================
		-->

	    <div id = "dragonfall-16-sidebox" class = "event-sidebox" >
	      	<h1> M: Cull N </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-16-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-16-reset">
	      	<p1 id = "sidetimer-dragonfall-16">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-16">240</p2>
	    </div>

	    <div id = "dragonfall-17-sidebox" class = "event-sidebox" >
	      	<h1> M: Cull W </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-17-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-17-reset">
	      	<p1 id = "sidetimer-dragonfall-17">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-17">240</p2>
	    </div>

	    <div id = "dragonfall-18-sidebox" class = "event-sidebox" >
	      	<h1> M: Cull S </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-18-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-18-reset">
	      	<p1 id = "sidetimer-dragonfall-18">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-18">240</p2>
	    </div>

	    <div id = "dragonfall-19-sidebox" class = "event-sidebox" >
	      	<h1> M: Champ Elemental </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-19-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-19-reset">
	      	<p1 id = "sidetimer-dragonfall-19">9:30</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-19">570</p2>
	    </div>

	    <div id = "dragonfall-20-sidebox" class = "event-sidebox" >
	      	<h1> M: Brandstorm </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-20-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-20-reset">
	      	<p1 id = "sidetimer-dragonfall-20">6:15</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-20">375</p2>
	    </div>

	    <div id = "dragonfall-21-sidebox" class = "event-sidebox" >
	      	<h1> M: Mender </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-21-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-21-reset">
	      	<p1 id = "sidetimer-dragonfall-21">9:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-21">540</p2>
	    </div>

	    <div id = "dragonfall-22-sidebox" class = "event-sidebox" >
	      	<h1> M: Bridge E </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-22-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-22-reset">
	      	<p1 id = "sidetimer-dragonfall-22">14:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-22">840</p2>
	    </div>
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
		        This page can be utilitized in a few different ways. The most common is figuring out the times for the bridges. <b>Bridges</b> start their events on a fresh map. After you completed them, you can start the timers for it. If you want to keep track of only bridges, on the right side, uncheck the "All" then check the "All Bridges". 
		        <br><br>
		        <b>Menders</b> are good to keep track of as they will provide the squad with 3 Dragon Coffers afterwards. Getting at least 3 before the meta is a good run. Note that these timers are the respawn rate, not the spawn rate after you get a camp to level 3. Check the mini-map for a tangerine symbol at the respective waypoint to know if it is up. 
		        <br><br>
		        <b> Priority of events: </b>
		        <br> Menders &#8594; Culls &#8594; Brandstorms &#8594; Champs
		    </details>
		</div>

		<div class = "map-timer-wrapper">

			<div class = "event-box" id = "dragonfall-1-box">
      			<h1> B: Cull N </h1>
       	 		<br><p1 id = "timer-dragonfall-1">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-1-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-1-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-2-box">
      			<h1> B: Cull S </h1>
       	 		<br><p1 id = "timer-dragonfall-2">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-2-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-2-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-3-box">
      			<h1> B: Cull E </h1>
       	 		<br><p1 id = "timer-dragonfall-3">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-3-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-3-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-4-box">
      			<h1> B: Champ Abyssal </h1>
       	 		<br><p1 id = "timer-dragonfall-4">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-4-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-4-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-5-box">
      			<h1> B: Brandstorm </h1>
       	 		<br><p1 id = "timer-dragonfall-5">6:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-5-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-5-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-6-box">
      			<h1> B: Mender </h1>
       	 		<br><p1 id = "timer-dragonfall-6">9:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-6-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-6-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-7-box">
      			<h1> B: Bridge N </h1>
       	 		<br><p1 id = "timer-dragonfall-7">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-7-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-7-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-8-box">
      			<h1> B: Bridge W </h1>
       	 		<br><p1 id = "timer-dragonfall-8">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-8-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-8-reset">
       		</div>

       		<!-- 
			    =======================================================
			    ====================== OKLAHOMA =======================
			    =======================================================
			-->

       		<div class = "event-box" id = "dragonfall-9-box">
      			<h1> O: Cull W </h1>
       	 		<br><p1 id = "timer-dragonfall-9">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-9-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-9-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-10-box">
      			<h1> O: Cull S </h1>
       	 		<br><p1 id = "timer-dragonfall-10">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-10-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-10-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-11-box">
      			<h1> O: Cull E </h1>
       	 		<br><p1 id = "timer-dragonfall-11">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-11-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-11-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-12-box">
      			<h1> O: Champ Arbiter </h1>
       	 		<br><p1 id = "timer-dragonfall-12">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-12-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-12-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-13-box">
      			<h1> O: Brandstorm </h1>
       	 		<br><p1 id = "timer-dragonfall-13">6:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-13-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-13-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-14-box">
      			<h1> O: Mender </h1>
       	 		<br><p1 id = "timer-dragonfall-14">9:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-14-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-14-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-15-box">
      			<h1> O: Bridge S </h1>
       	 		<br><p1 id = "timer-dragonfall-15">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-15-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-15-reset">
       		</div>

       		<!-- 
			    =======================================================
			    ====================== MELANDRU =======================
			    =======================================================
			-->

       		<div class = "event-box" id = "dragonfall-16-box">
      			<h1> M: Cull N </h1>
       	 		<br><p1 id = "timer-dragonfall-16">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-16-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-16-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-17-box">
      			<h1> M: Cull W </h1>
       	 		<br><p1 id = "timer-dragonfall-17">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-17-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-17-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-18-box">
      			<h1> M: Cull S </h1>
       	 		<br><p1 id = "timer-dragonfall-18">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-18-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-18-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-19-box">
      			<h1> M: Champ Elemental </h1>
       	 		<br><p1 id = "timer-dragonfall-19">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-19-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-19-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-20-box">
      			<h1> M: Brandstorm </h1>
       	 		<br><p1 id = "timer-dragonfall-20">6:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-20-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-20-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-21-box">
      			<h1> M: Mender </h1>
       	 		<br><p1 id = "timer-dragonfall-21">9:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-21-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-21-reset">
       		</div>

       		<div class = "event-box" id = "dragonfall-22-box">
      			<h1> M: Bridge E </h1>
       	 		<br><p1 id = "timer-dragonfall-22">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-22-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-22-reset">
       		</div>

			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "dragonfall Bluffs" src = "../images/dragonfall/map.jpg">
		</div> <!-- End of map timer wrapper -->
	</div> <!-- End of page box -->

	<!-- 
	    ================================================================
	    ====================== FOOTER + DARK MODE ======================
	    ================================================================
	-->
	<?php include('../footer.php'); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/timers/dragonfall.js?v=<?php echo $date;?>"></script>
</html>