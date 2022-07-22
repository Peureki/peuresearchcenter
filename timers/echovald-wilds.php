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
	    <b> Events </b>
	    <br><br>
	    Shipments: <input type = "Checkbox" id = "echovald-2-checkbox" checked = "true" onclick = "checkboxTimer(this, echovald.events);">
	    <br>
	</div>


	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">

		<div id = "echovald-1-sidebox" class = "event-sidebox" >
	      	<h1> N Spirits </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-1-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-1-reset">
	      	<p1 id = "sidetimer-echovald-1">15:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-1">900</p2>
	    </div>

	    <div id = "echovald-2-sidebox" class = "event-sidebox" >
	      	<h1> S Spirits </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-2-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-2-reset">
	      	<p1 id = "sidetimer-echovald-2">15:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-2">900</p2>
	    </div>

	    <div id = "echovald-3-sidebox" class = "event-sidebox" >
	      	<h1> NE Spirits </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-3-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-3-reset">
	      	<p1 id = "sidetimer-echovald-3">15:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-3">900</p2>
	    </div>

	    <div id = "echovald-4-sidebox" class = "event-sidebox" >
	      	<h1> Champ IGO </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-4-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-4-reset">
	      	<p1 id = "sidetimer-echovald-4">13:30</p1>
	      	<p2 id = "numerical-sidetimer-echovald-4">810</p2>
	    </div>

	    <div id = "echovald-5-sidebox" class = "event-sidebox" >
	      	<h1> Tomiko Escort </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-5-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-5-reset">
	      	<p1 id = "sidetimer-echovald-5">11:45</p1>
	      	<p2 id = "numerical-sidetimer-echovald-5">705</p2>
	    </div>

	    <div id = "echovald-6-sidebox" class = "event-sidebox" >
	      	<h1> Qinkai Chain </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-6-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-6-reset">
	      	<p1 id = "sidetimer-echovald-6">11:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-6">660</p2>
	    </div>

	    <div id = "echovald-7-sidebox" class = "event-sidebox" >
	      	<h1> Farmer Shi  </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-7-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-7-reset">
	      	<p1 id = "sidetimer-echovald-7">12:30</p1>
	      	<p2 id = "numerical-sidetimer-echovald-7">750</p2>
	    </div>

	    <div id = "echovald-8-sidebox" class = "event-sidebox" >
	      	<h1> Grenadier </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-8-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-8-reset">
	      	<p1 id = "sidetimer-echovald-8">13:00</p1>
	      	<p2 id = "numerical-sidetimer-echovald-8">780</p2>
	    </div>

	    <div id = "echovald-9-sidebox" class = "event-sidebox" >
	      	<h1> Arborstone Defense </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-9-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-9-reset">
	      	<p1 id = "sidetimer-echovald-9">12:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-9">735</p2>
	    </div>

	    <div id = "echovald-10-sidebox" class = "event-sidebox" >
	      	<h1> Black Moa </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-10-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-10-reset">
	      	<p1 id = "sidetimer-echovald-10">15:45</p1>
	      	<p2 id = "numerical-sidetimer-echovald-10">945</p2>
	    </div>

	    <!-- USE THIS AS THE COPY PASTA -->
	    <!--
	    <div id = "echovald-7-sidebox" class = "event-sidebox" >
	      	<h1> NW Void </h1>
	      	<input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "sidetimer-echovald-7-start">
	      	<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "sidetimer-echovald-7-reset">
	      	<p1 id = "sidetimer-echovald-7">36:15</p1>
	      	<p2 id = "numerical-sidetimer-echovald-7">900</p2>
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
      			<h1> N Spirits </h1>
       	 		<br><p1 id = "timer-echovald-1">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-1-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-1-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-2-box">
      			<h1> S Spirits </h1>
       	 		<br><p1 id = "timer-echovald-2">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-2-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-2-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-3-box">
      			<h1> NE Spirits </h1>
       	 		<br><p1 id = "timer-echovald-3">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-3-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-3-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-4-box">
      			<h1> Champ IGO </h1>
       	 		<br><p1 id = "timer-echovald-4">13:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-4-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-4-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-5-box">
      			<h1> Tomiko Escort </h1>
       	 		<br><p1 id = "timer-echovald-5">11:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-5-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-5-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-6-box">
      			<h1> Qinkai Chain </h1>
       	 		<br><p1 id = "timer-echovald-6">11:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-6-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-6-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-7-box">
      			<h1> Farmer Shi </h1>
       	 		<br><p1 id = "timer-echovald-7">12:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-7-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-7-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-8-box">
      			<h1> Grenadier </h1>
       	 		<br><p1 id = "timer-echovald-8">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-8-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-8-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-9-box">
      			<h1> Arborstone Defense </h1>
       	 		<br><p1 id = "timer-echovald-9">12:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-9-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-9-reset">	
       		</div>

       		<div class = "event-box" id = "echovald-10-box">
      			<h1> Black Moa </h1>
       	 		<br><p1 id = "timer-echovald-10">15:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-10-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-10-reset">	
       		</div>

			<!-- USE THIS AS THE COPY PASTA -->
			<!--
       		<div class = "event-box" id = "echovald-7-box">
      			<h1> NE Void </h1>
       	 		<br><p1 id = "timer-echovald-7">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, echovald.events);" value = "Start" id = "timer-echovald-7-start">
       			<input type = "button" onclick = "reset(this, echovald.events);" value = "&#8635;" id = "timer-echovald-7-reset">	
       		</div>
			-->




			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "Echovald Wilds" src = "../images/echovald-wilds/map.jpg" style = "width: 85%;">
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
<script type = "text/javascript" src = "<?php echo $base;?>/timers/echovald-wilds.js?v=<?php echo $date;?>"></script>
</html>