<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Siren's Landing Timers </title>
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
			<h1>Siren's Landing</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">

	    <div id = "sirens-1-sidebox" class = "event-sidebox">
	      <h1> Orrian Shrine Power Grid </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-1-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-1-reset">
	      <p1 id = "sidetimer-sirens-1">30:00</p1>
	      <p2 id = "numerical-sidetimer-sirens-1">1800</p2>
	    </div>

	    <div id = "sirens-2-sidebox" class = "event-sidebox">
	      <h1> Winfred</h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-2-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-2-reset">
	      <p1 id = "sidetimer-sirens-2">23:00</p1>
	      <p2 id = "numerical-sidetimer-sirens-2">1380</p2>
	    </div>

	    <div id = "sirens-3-sidebox" class = "event-sidebox">
	      <h1> Kingpins </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-3-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-3-reset">
	      <p1 id = "sidetimer-sirens-3">6:00</p1>
	      <p2 id = "numerical-sidetimer-sirens-3">360</p2>
	    </div>

	    <div id = "sirens-4-sidebox" class = "event-sidebox">
	      <h1> Champ Giant </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-4-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-4-reset">
	      <p1 id = "sidetimer-sirens-4">14:00</p1>
	      <p2 id = "numerical-sidetimer-sirens-4">840</p2>
	    </div>

	    <div id = "sirens-5-sidebox" class = "event-sidebox">
	      <h1> Nodes </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-5-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-5-reset">
	      <p1 id = "sidetimer-sirens-5">13:15</p1>
	      <p2 id = "numerical-sidetimer-sirens-5">795</p2>
	    </div>

	    <div id = "sirens-6-sidebox" class = "event-sidebox">
	      <h1> Champ Spider </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-6-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-6-reset">
	      <p1 id = "sidetimer-sirens-6">13:00</p1>
	      <p2 id = "numerical-sidetimer-sirens-6">780</p2>
	    </div>

	    <div id = "sirens-7-sidebox" class = "event-sidebox">
	      <h1> Wyvern </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-7-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-7-reset">
	      <p1 id = "sidetimer-sirens-7">15:45</p1>
	      <p2 id = "numerical-sidetimer-sirens-7">945</p2>
	    </div>

	    <div id = "sirens-8-sidebox" class = "event-sidebox">
	      <h1> Fountainhead </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-8-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-8-reset">
	      <p1 id = "sidetimer-sirens-8">16:30</p1>
	      <p2 id = "numerical-sidetimer-sirens-8">990</p2>
	    </div>
	    
	    <div id = "sirens-9-sidebox" class = "event-sidebox">
	      <h1> Chaotic Distortion </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-9-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-9-reset">
	      <p1 id = "sidetimer-sirens-9">9:15</p1>
	      <p2 id = "numerical-sidetimer-sirens-9">555</p2>
	    </div>

	    <div id = "sirens-10-sidebox" class = "event-sidebox">
	      <h1> Horrid Illusion </h1>
	      <input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "sidetimer-sirens-10-start">
	      <input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "sidetimer-sirens-10-reset">
	      <p1 id = "sidetimer-sirens-10">12:30</p1>
	      <p2 id = "numerical-sidetimer-sirens-10">750</p2>
	    </div>
	    
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
	  	All: <input type = "Checkbox" id = "sirens-all-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events, 'all');">
	  	<br>
	  	Meta: <input type = "Checkbox" id = "sirens-1-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Winfred: <input type = "Checkbox" id = "sirens-2-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Kingpins: <input type = "Checkbox" id = "sirens-3-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Champ Giant: <input type = "Checkbox" id = "sirens-4-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Nodes: <input type = "Checkbox" id = "sirens-5-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Champ Spider: <input type = "Checkbox" id = "sirens-6-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Wyvern: <input type = "Checkbox" id = "sirens-7-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Fountainhead: <input type = "Checkbox" id = "sirens-8-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	  	Chaotic Distortion: <input type = "Checkbox" id = "sirens-9-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
	  	<br>
	    Horrid Illusion: <input type = "Checkbox" id = "sirens-10-checkbox" checked = "true" onclick = "checkboxTimer(this, sirens.events);">
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
				<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
			<div class = "event-box" id = "sirens-1-box">
				<h1> Orrian Shrine Power Grid </h1>
       	 		<br><p1 id = "timer-sirens-1">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-1-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-1-reset">	
       		</div>

       		<div class = "event-box" id = "sirens-2-box">
				<h1> Winfred </h1>
       	 		<br><p1 id = "timer-sirens-2">23:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-2-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-2-reset">	
       		</div>

       		<div class = "event-box" id = "sirens-3-box">
				<h1> Kingpins </h1>
       	 		<br><p1 id = "timer-sirens-3">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-3-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-3-reset">	
       		</div>

       		<div class = "event-box" id = "sirens-4-box">
				<h1> Champ Giant </h1>
       	 		<br><p1 id = "timer-sirens-4">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-4-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-4-reset">	
       		</div>

       		<div class = "event-box" id = "sirens-5-box">
				<h1> Nodes </h1>
       	 		<br><p1 id = "timer-sirens-5">13:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-5-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-5-reset">	
       		</div>

       		<div class = "event-box" id = "sirens-6-box">
				<h1> Champ Spider </h1>
       	 		<br><p1 id = "timer-sirens-6">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-6-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-6-reset">	
       		</div>

       		<div class = "event-box" id = "sirens-7-box">
				<h1> Wyvern </h1>
       	 		<br><p1 id = "timer-sirens-7">15:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-7-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-7-reset">
       			<br><p2 id = "timer-sirens-7-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sirens-8-box">
				<h1> Fountainhead </h1>
       	 		<br><p1 id = "timer-sirens-8">16:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-8-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-8-reset">
       			<br><p2 id = "timer-sirens-8-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sirens-9-box">
				<h1> Chaotic Distortions </h1>
       	 		<br><p1 id = "timer-sirens-9">9:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-9-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-9-reset">
       			<br><p2 id = "timer-sirens-9-text"></p2>	
       		</div>

       		<div class = "event-box" id = "sirens-10-box">
				<h1> Horrid Illusion </h1>
       	 		<br><p1 id = "timer-sirens-10">12:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, sirens.events);" value = "Start" id = "timer-sirens-10-start">
       			<input type = "button" onclick = "reset(this, sirens.events);" value = "&#8635;" id = "timer-sirens-10-reset">
       			<br><p2 id = "timer-sirens-10-text"></p2>	
       		</div>
       		<!-- Other assets -->
			<img class = "map-timer-map" title = "Siren's Landing" src = "../images/sirens-landing/sirens-landing-map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->
	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/timers/sirens-landing.js?v=<?php echo $date;?>"></script>
</body>
</html>
