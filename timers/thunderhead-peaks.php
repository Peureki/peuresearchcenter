<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> Thunderhead Peaks </title>
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
			<h1> Thunderhead Peaks </h1>
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
		<b> Events </b>
		<br><br>
		Branded Forgotton: <input type = "Checkbox" id = "thunderhead-1-checkbox" checked = "true" onclick = "checkboxTimer(this, thunderhead.events);">
		<br> 
		Tirabikkr: <input type = "Checkbox" id = "thunderhead-2-checkbox" checked = "true" onclick = "checkboxTimer(this, thunderhead.events);">
		<br> 
	</div>

	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">
		<div id = "thunderhead-meta-sidebox" class = "meta-sidebox">
			<h1 id = "side-meta-name" class = "side-meta-name"></h1>
			<p1 id = "sidetimer-thunderhead-meta"></p1>
			<p2 id = "numerical-sidetimer-thunderhead-meta"></p2> 
		</div>

		<div id = "thunderhead-1-sidebox" class = "event-sidebox" >
	      	<h1> Branded Forgotton </h1>
	      	<input type = "button" onclick = "start_stop(this, thunderhead.events);" value = "Start" id = "sidetimer-thunderhead-1-start">
	      	<input type = "button" onclick = "reset(this, thunderhead.events);" value = "&#8635;" id = "sidetimer-thunderhead-1-reset">
	      	<p1 id = "sidetimer-thunderhead-1">12:00</p1>
	      	<p2 id = "numerical-sidetimer-thunderhead-1">720</p2>
	    </div>

	    <div id = "thunderhead-2-sidebox" class = "event-sidebox" >
	      	<h1> Tirabikkr </h1>
	      	<input type = "button" onclick = "start_stop(this, thunderhead.events);" value = "Start" id = "sidetimer-thunderhead-2-start">
	      	<input type = "button" onclick = "reset(this, thunderhead.events);" value = "&#8635;" id = "sidetimer-thunderhead-2-reset">
	      	<p1 id = "sidetimer-thunderhead-2">11:00</p1>
	      	<p2 id = "numerical-sidetimer-thunderhead-2">660</p2>
	    </div>
	    <!--
	    <div id = "thunderhead-7-sidebox" class = "event-sidebox" >
	      	<h1> LB: Wyverns </h1>
	      	<input type = "button" onclick = "start_stop(this, thunderhead.events);" value = "Start" id = "sidetimer-thunderhead-7-start">
	      	<input type = "button" onclick = "reset(this, thunderhead.events);" value = "&#8635;" id = "sidetimer-thunderhead-7-reset">
	      	<p1 id = "sidetimer-thunderhead-7">30:00</p1>
	      	<p2 id = "numerical-sidetimer-thunderhead-7">1800</p2>
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
		        LB = Legendary Bounty, B = Bounty
		        <br><br>
		        <b>Priority of events:</b>
		        <br>Rifts &#8594; Garrison &#8594; Yatendi Village &#8594; Chantry
		        <br> Rifts will be up almost 100% of the time so it is possible to do an event train purely on rifts.
		    </details>
		</div>

		<div class = "map-timer-wrapper">

			<div class = "event-box" id = "thunderhead-1-box">
      			<h1> Branded Forgotton </h1>
       	 		<br><p1 id = "timer-thunderhead-1">12:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, thunderhead.events);" value = "Start" id = "timer-thunderhead-1-start">
       			<input type = "button" onclick = "reset(this, thunderhead.events);" value = "&#8635;" id = "timer-thunderhead-1-reset">	
       		</div>

       		<div class = "event-box" id = "thunderhead-2-box">
      			<h1> Tirabikkr </h1>
       	 		<br><p1 id = "timer-thunderhead-2">11:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, thunderhead.events);" value = "Start" id = "timer-thunderhead-2-start">
       			<input type = "button" onclick = "reset(this, thunderhead.events);" value = "&#8635;" id = "timer-thunderhead-2-reset">	
       		</div>
       		<!--
			<div class = "event-box" id = "thunderhead-7-box">
      			<h1> LB: Wyverns </h1>
       	 		<br><p1 id = "timer-thunderhead-7">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, thunderhead.events);" value = "Start" id = "timer-thunderhead-7-start">
       			<input type = "button" onclick = "reset(this, thunderhead.events);" value = "&#8635;" id = "timer-thunderhead-7-reset">	
       		</div>
       	-->
			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "thunderhead Bluffs" src = "../images/thunderhead-peaks/map.jpg">
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
<script type = "text/javascript" src = "<?php echo $base;?>/timers/thunderhead-peaks.js?v=<?php echo $date;?>"></script>
</html>