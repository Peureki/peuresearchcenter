<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> New Kaineng City </title>
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
			<h1> New Kaineng City </h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!--
       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>
       	-->

	<!-- 
	    ========================================================
	    ====================== CHECKBOXES ======================
	    ========================================================
	-->
	<div class = "checkboxes">
		<b> Jump to: </b>
		<br><br>
		<a href = "#baedal-hill"> Baedal Hill </a>
		<br> 
		<a href = "#bori-ward"> Bori Ward </a>
		<br>
		<a href = "#nahpui-lab"> Nahpui Lab </a>
		<br> 
		<a href = "#lutgardis-plaza"> Lutgardis Plaza </a>
		<br>
		<a href = "#cobble-ward"> Cobble Ward </a>
		<br>
		<a href = "#gwangsan-hill"> Gwangsan Hill </a>
		<br>
		<a href = "#power-plant"> Power Plant </a>
	</div>

	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">
		<div id = "kaineng-meta-sidebox" class = "meta-sidebox">
			<h1 id = "side-meta-name" class = "side-meta-name"></h1>
			<p1 id = "sidetimer-kaineng-meta"></p1>
			<p2 id = "numerical-sidetimer-kaineng-meta"></p2> 
		</div>

		<div id = "kaineng-1-sidebox" class = "event-sidebox" >
	      	<h1> Elite Brotherhood (Baedal) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-1-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-1-reset">
	      	<p1 id = "sidetimer-kaineng-1">44:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-1">2685</p2>
	    </div>

	    <div id = "kaineng-2-sidebox" class = "event-sidebox" >
	      	<h1> Technician (Baedal) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-2-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-2-reset">
	      	<p1 id = "sidetimer-kaineng-2">30:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-2">1845</p2>
	    </div>

	    <div id = "kaineng-3-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Baedal) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-3-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-3-reset">
	      	<p1 id = "sidetimer-kaineng-3">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-3">2070</p2>
	    </div>

	    <div id = "kaineng-4-sidebox" class = "event-sidebox" >
	      	<h1> Teleporter (Baedal) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-4-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-4-reset">
	      	<p1 id = "sidetimer-kaineng-4">29:15</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-4">1755</p2>
	    </div>

	    <div id = "kaineng-5-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Bori) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-5-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-5-reset">
	      	<p1 id = "sidetimer-kaineng-5">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-5">2070</p2>
	    </div>

	    <div id = "kaineng-6-sidebox" class = "event-sidebox" >
	      	<h1> Teleporter (Bori) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-6-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-6-reset">
	      	<p1 id = "sidetimer-kaineng-6">29:15</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-6">1755</p2>
	    </div>

	    <div id = "kaineng-7-sidebox" class = "event-sidebox" >
	      	<h1> Volatile Sparks (Bori) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-7-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-7-reset">
	      	<p1 id = "sidetimer-kaineng-7">34:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-7">2040</p2>
	    </div>

	    <div id = "kaineng-8-sidebox" class = "event-sidebox" >
	      	<h1> Repair Crew (Bori) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-8-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-8-reset">
	      	<p1 id = "sidetimer-kaineng-8">8:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-8">525</p2>
	    </div>

	    <div id = "kaineng-9-sidebox" class = "event-sidebox" >
	      	<h1> Elite Brotherhood (Bori) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-9-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-9-reset">
	      	<p1 id = "sidetimer-kaineng-9">44:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-9">2685</p2>
	    </div>

	    <div id = "kaineng-10-sidebox" class = "event-sidebox" >
	      	<h1> Food Cart (Bori) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-10-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-10-reset">
	      	<p1 id = "sidetimer-kaineng-10">24:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-10">1470</p2>
	    </div>

	    <div id = "kaineng-11-sidebox" class = "event-sidebox" >
	      	<h1> Volatile Sparks (Nahpui) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-11-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-11-reset">
	      	<p1 id = "sidetimer-kaineng-11">34:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-11">2040</p2>
	    </div>

	    <div id = "kaineng-12-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Nahpui) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-12-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-12-reset">
	      	<p1 id = "sidetimer-kaineng-12">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-12">2070</p2>
	    </div>

	    <div id = "kaineng-13-sidebox" class = "event-sidebox" >
	      	<h1> Teleporter (Nahpui) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-13-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-13-reset">
	      	<p1 id = "sidetimer-kaineng-13">29:15</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-13">1755</p2>
	    </div>

	    <div id = "kaineng-14-sidebox" class = "event-sidebox" >
	      	<h1> Technician (Nahpui) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-14-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-14-reset">
	      	<p1 id = "sidetimer-kaineng-14">30:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-14">1845</p2>
	    </div>

	    <div id = "kaineng-15-sidebox" class = "event-sidebox" >
	      	<h1> Elite Brotherhood (Lut) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-15-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-15-reset">
	      	<p1 id = "sidetimer-kaineng-15">44:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-15">2685</p2>
	    </div>

	    <div id = "kaineng-16-sidebox" class = "event-sidebox" >
	      	<h1> Technician (Lut) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-16-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-16-reset">
	      	<p1 id = "sidetimer-kaineng-16">30:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-16">1845</p2>
	    </div>

	    <div id = "kaineng-17-sidebox" class = "event-sidebox" >
	      	<h1> Teleporter (Lut) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-17-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-17-reset">
	      	<p1 id = "sidetimer-kaineng-17">29:15</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-17">1755</p2>
	    </div>

	    <div id = "kaineng-18-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Lut) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-18-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-18-reset">
	      	<p1 id = "sidetimer-kaineng-18">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-18">2070</p2>
	    </div>

	    <div id = "kaineng-19-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Cobble) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-19-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-19-reset">
	      	<p1 id = "sidetimer-kaineng-19">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-19">2070</p2>
	    </div>

	    <div id = "kaineng-20-sidebox" class = "event-sidebox" >
	      	<h1> Repair Crew (Cobble) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-20-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-20-reset">
	      	<p1 id = "sidetimer-kaineng-20">8:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-20">525</p2>
	    </div>

	    <div id = "kaineng-21-sidebox" class = "event-sidebox" >
	      	<h1> Volatile Sparks (Cobble) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-21-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-21-reset">
	      	<p1 id = "sidetimer-kaineng-21">34:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-21">2040</p2>
	    </div>

	    <div id = "kaineng-22-sidebox" class = "event-sidebox" >
	      	<h1> Elite Brotherhood (Cobble) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-22-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-22-reset">
	      	<p1 id = "sidetimer-kaineng-22">44:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-22">2685</p2>
	    </div>

	    <div id = "kaineng-23-sidebox" class = "event-sidebox" >
	      	<h1> Technician (Cobble) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-23-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-23-reset">
	      	<p1 id = "sidetimer-kaineng-23">30:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-23">1845</p2>
	    </div>

	    <div id = "kaineng-24-sidebox" class = "event-sidebox" >
	      	<h1> Food Cart (Cobble) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-24-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-24-reset">
	      	<p1 id = "sidetimer-kaineng-24">24:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-24">1470</p2>
	    </div>

	    <div id = "kaineng-25-sidebox" class = "event-sidebox" >
	      	<h1> Volatile Sparks (Gwan) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-25-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-25-reset">
	      	<p1 id = "sidetimer-kaineng-25">34:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-25">2040</p2>
	    </div>

	    <div id = "kaineng-26-sidebox" class = "event-sidebox" >
	      	<h1> Elite Brotherhood (Gwan) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-26-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-26-reset">
	      	<p1 id = "sidetimer-kaineng-26">44:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-26">2685</p2>
	    </div>

	    <div id = "kaineng-27-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Gwan) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-27-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-27-reset">
	      	<p1 id = "sidetimer-kaineng-27">34:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-27">2085</p2>
	    </div>

	    <div id = "kaineng-28-sidebox" class = "event-sidebox" >
	      	<h1> Technician (Gwan) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-28-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-28-reset">
	      	<p1 id = "sidetimer-kaineng-28">30:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-28">1845</p2>
	    </div>

	    <div id = "kaineng-29-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Power, Up) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-29-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-29-reset">
	      	<p1 id = "sidetimer-kaineng-29">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-29">2070</p2>
	    </div>

	    <div id = "kaineng-30-sidebox" class = "event-sidebox" >
	      	<h1> Servitor (Power, Down) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-30-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-30-reset">
	      	<p1 id = "sidetimer-kaineng-30">34:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-30">2070</p2>
	    </div>

	    <div id = "kaineng-31-sidebox" class = "event-sidebox" >
	      	<h1> Posh Party (Baedal) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-31-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-31-reset">
	      	<p1 id = "sidetimer-kaineng-31">10:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-31">645</p2>
	    </div>

	    <div id = "kaineng-32-sidebox" class = "event-sidebox" >
	      	<h1> Jade Bulwark </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-32-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-32-reset">
	      	<p1 id = "sidetimer-kaineng-32">9:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-32">540</p2>
	    </div>

	    <div id = "kaineng-33-sidebox" class = "event-sidebox" >
	      	<h1> Bathhouse </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-33-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-33-reset">
	      	<p1 id = "sidetimer-kaineng-33">10:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-33">645</p2>
	    </div>

	    <!--
	    <div id = "kaineng-7-sidebox" class = "event-sidebox" >
	      	<h1> LB: Wyverns </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-7-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-7-reset">
	      	<p1 id = "sidetimer-kaineng-7">30:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-7">1800</p2>
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
		        This map is extremely strange compared to others. Each meta occurs at xx:45 of the hour, switching each hour. After each meta, there are a sequence of events that occur. First being the Rift, then Pepperseed. Events info boxes will pop up explaining each and when to do them on the map when it's after the meta.
		 		<br><br>
		        <b>Priority of events:</b>
		        <br>Metas &#8594; Hydra (only after south meta) &#8594; Rift &#8594; Tirabikkr &#8594; Pepperseed &#8594; Branded Forgotton &#8594; Garrison &#8594; Pepperseed (from Garrison) &#8594; Repeat Tirabikkr and Branded Forgotton until next meta
		    </details>
		</div>

		<div class = "map-timer-wrapper" id = "baedal-hill">

			<div class = "event-box" id = "kaineng-1-box">
      			<h1> Elite Brotherhood </h1>
       	 		<br><p1 id = "timer-kaineng-1">44:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-1-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-1-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-2-box">
      			<h1> Technician </h1>
       	 		<br><p1 id = "timer-kaineng-2">30:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-2-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-2-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-3-box">
      			<h1> Servitor (Baedal) </h1>
       	 		<br><p1 id = "timer-kaineng-3">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-3-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-3-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-4-box">
      			<h1> Teleporter (Baedal) </h1>
       	 		<br><p1 id = "timer-kaineng-4">29:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-4-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-4-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-31-box">
      			<h1> Posh Party (Baedal) </h1>
       	 		<br><p1 id = "timer-kaineng-31">10:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-31-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-31-reset">	
       		</div>
       		
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/baedal-hill.png">
		</div> <!-- End of map timer wrapper -->

		<div class = "map-timer-wrapper" id = "bori-ward">

			<div class = "event-box" id = "kaineng-5-box">
      			<h1> Servitor (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-5">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-5-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-5-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-6-box">
      			<h1> Teleporter (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-6">29:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-6-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-6-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-8-box">
      			<h1> Repair Crew (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-8">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-8-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-8-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-9-box">
      			<h1> Elite Brotherhood (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-9">44:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-9-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-9-reset">	
       		</div>

      		<div class = "event-box" id = "kaineng-10-box">
      			<h1> Food Cart </h1>
       	 		<br><p1 id = "timer-kaineng-10">24:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-10-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-10-reset">	
       		</div>
       		
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/bori-ward.png">
		</div>

		<div class = "map-timer-wrapper" id = "nahpui-lab">

			<div class = "event-box" id = "kaineng-11-box">
      			<h1> Volatile Sparks (Nahpui) </h1>
       	 		<br><p1 id = "timer-kaineng-11">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-11-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-11-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-12-box">
      			<h1> Servitor (Nahpui) </h1>
       	 		<br><p1 id = "timer-kaineng-12">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-12-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-12-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-13-box">
      			<h1> Teleporter (Nahpui) </h1>
       	 		<br><p1 id = "timer-kaineng-13">29:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-13-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-13-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-14-box">
      			<h1> Technicians (Nahpui) </h1>
       	 		<br><p1 id = "timer-kaineng-14">30:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-14-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-14-reset">	
       		</div>

       	<!--
       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>
       	-->
       		
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/nahpui-lab.png">
		</div> <!-- End of map timer wrapper -->

		<div class = "map-timer-wrapper" id = "lutgardis-plaza">

			<div class = "event-box" id = "kaineng-15-box">
      			<h1> Elite Brotherhood (Lut) </h1>
       	 		<br><p1 id = "timer-kaineng-15">44:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-15-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-15-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-16-box">
      			<h1> Technicians (Lut) </h1>
       	 		<br><p1 id = "timer-kaineng-16">30:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-16-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-16-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-17-box">
      			<h1> Teleporter (Lut) </h1>
       	 		<br><p1 id = "timer-kaineng-17">29:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-17-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-17-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-18-box">
      			<h1> Servitor (Lut) </h1>
       	 		<br><p1 id = "timer-kaineng-18">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-18-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-18-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-33-box">
      			<h1> Bathhouse </h1>
       	 		<br><p1 id = "timer-kaineng-33">10:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-33-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-33-reset">	
       		</div>
       	<!--
       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>
       	-->
       		
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/lutgardis-plaza.png">
		</div> <!-- End of map timer wrapper -->

		<div class = "map-timer-wrapper" id = "cobble-ward">

			<div class = "event-box" id = "kaineng-19-box">
      			<h1> Servitor (Cobble) </h1>
       	 		<br><p1 id = "timer-kaineng-19">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-19-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-19-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-20-box">
      			<h1> Repair Crew (Cobble) </h1>
       	 		<br><p1 id = "timer-kaineng-20">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-20-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-20-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-21-box">
      			<h1> Volatile Sparks (Cobble) </h1>
       	 		<br><p1 id = "timer-kaineng-21">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-21-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-21-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-22-box">
      			<h1> Elite Brotherhood (Cobble) </h1>
       	 		<br><p1 id = "timer-kaineng-22">44:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-22-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-22-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-23-box">
      			<h1> Technician (Cobble) </h1>
       	 		<br><p1 id = "timer-kaineng-23">30:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-23-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-23-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-24-box">
      			<h1> Food Cart (Cobble) </h1>
       	 		<br><p1 id = "timer-kaineng-24">24:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-24-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-24-reset">	
       		</div>

       	
       		
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/cobble-ward.png">
		</div> <!-- End of map timer wrapper -->

		<div class = "map-timer-wrapper" id = "gwangsan-hill">

			<div class = "event-box" id = "kaineng-25-box">
      			<h1> Volatile Sparks (Gwan) </h1>
       	 		<br><p1 id = "timer-kaineng-25">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-25-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-25-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-26-box">
      			<h1> Elite Brotherhood (Gwan) </h1>
       	 		<br><p1 id = "timer-kaineng-26">44:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-26-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-26-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-27-box">
      			<h1> Servitor (Gwan) </h1>
       	 		<br><p1 id = "timer-kaineng-27">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-27-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-27-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-28-box">
      			<h1> Technicians (Gwan) </h1>
       	 		<br><p1 id = "timer-kaineng-28">30:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-28-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-28-reset">	
       		</div>

       	<!--
       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>
       	-->
       		
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/gwangsan-hill.png">
		</div> <!-- End of map timer wrapper -->

		<div class = "map-timer-wrapper" id = "power-plant">

			<div class = "event-box" id = "kaineng-29-box">
      			<h1> Servitor (Power, Up) </h1>
       	 		<br><p1 id = "timer-kaineng-29">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-29-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-29-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-30-box">
      			<h1> Servitor (Power, Down) </h1>
       	 		<br><p1 id = "timer-kaineng-30">34:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-30-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-30-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-32-box">
      			<h1> Jade Bulwark </h1>
       	 		<br><p1 id = "timer-kaineng-32">9:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-32-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-32-reset">	
       		</div>
       	<!--
       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-kaineng-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>
       	-->
       		
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "kaineng Peaks" src = "../images/new-kaineng-city/power-plant.png">
		</div> <!-- End of map timer wrapper -->


	</div> <!-- End of page box -->

	<!-- 
	    ===================================================================
	    ====================== PROGRESS BARS ==============================
	    ===================================================================
	  -->
  	<div class = "bottom-sticky">
      	<div id = "progress-box" class = "progress-box">
        	<h1 id = "progress-text" class = "progress-text"> </h1>
        	<div id = "progress-bar" class = "progress-bar"></div>
      	</div>
  	</div>

	<!-- 
	    ================================================================
	    ====================== FOOTER + DARK MODE ======================
	    ================================================================
	-->
	<?php include('../footer.php'); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/timers/new-kaineng-city.js?v=<?php echo $date;?>"></script>
</html>