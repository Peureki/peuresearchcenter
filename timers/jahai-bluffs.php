<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> Jahai Bluffs </title>
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
			<h1> Jahai Bluffs </h1>
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
		Yatendi Village: <input type = "Checkbox" id = "jahai-1-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Ziya: <input type = "Checkbox" id = "jahai-2-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Garrison: <input type = "Checkbox" id = "jahai-3-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		DERV: <input type = "Checkbox" id = "jahai-4-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Gate: <input type = "Checkbox" id = "jahai-5-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Chantry: <input type = "Checkbox" id = "jahai-6-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br><br>
		<b> Bounties </b>
		<br><br>
		Wyverns: <input type = "Checkbox" id = "jahai-7-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Ettin: <input type = "Checkbox" id = "jahai-8-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Pet Rock: <input type = "Checkbox" id = "jahai-9-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
		Weapons: <input type = "Checkbox" id = "jahai-10-checkbox" checked = "true" onclick = "checkboxTimer(this, jahai.events);">
		<br> 
	</div>

	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">
		<div id = "jahai-meta-sidebox" class = "meta-sidebox">
			<h1 id = "side-meta-name" class = "side-meta-name"></h1>
			<p1 id = "sidetimer-jahai-meta"></p1>
			<p2 id = "numerical-sidetimer-jahai-meta"></p2> 
		</div>

		<div id = "jahai-1-sidebox" class = "event-sidebox" >
	      	<h1> Yatendi Village </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-1-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-1-reset">
	      	<p1 id = "sidetimer-jahai-1">23:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-1">1380</p2>
	    </div>

	    <div id = "jahai-2-sidebox" class = "event-sidebox" >
	      	<h1> Ziya </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-2-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-2-reset">
	      	<p1 id = "sidetimer-jahai-2">13:45</p1>
	      	<p2 id = "numerical-sidetimer-jahai-2">825</p2>
	    </div>

	    <div id = "jahai-3-sidebox" class = "event-sidebox" >
	      	<h1> Garrison </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-3-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-3-reset">
	      	<p1 id = "sidetimer-jahai-3">2:30</p1>
	      	<p2 id = "numerical-sidetimer-jahai-3">150</p2>
	    </div>

	    <div id = "jahai-4-sidebox" class = "event-sidebox" >
	      	<h1> DERV </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-4-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-4-reset">
	      	<p1 id = "sidetimer-jahai-4">14:45</p1>
	      	<p2 id = "numerical-sidetimer-jahai-4">885</p2>
	    </div>

	    <div id = "jahai-5-sidebox" class = "event-sidebox" >
	      	<h1> Gate </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-5-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-5-reset">
	      	<p1 id = "sidetimer-jahai-5">14:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-5">840</p2>
	    </div>

	    <div id = "jahai-6-sidebox" class = "event-sidebox" >
	      	<h1> Chantry </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-6-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-6-reset">
	      	<p1 id = "sidetimer-jahai-6">13:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-6">780</p2>
	    </div>

	    <!-- 
		    ======================================================
		    ====================== BOUNTIES ======================
		    ======================================================
		-->

	    <div id = "jahai-7-sidebox" class = "event-sidebox" >
	      	<h1> LB: Wyverns </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-7-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-7-reset">
	      	<p1 id = "sidetimer-jahai-7">30:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-7">1800</p2>
	    </div>

	    <div id = "jahai-8-sidebox" class = "event-sidebox" >
	      	<h1> B: Ettin </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-8-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-8-reset">
	      	<p1 id = "sidetimer-jahai-8">15:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-8">900</p2>
	    </div>

	    <div id = "jahai-9-sidebox" class = "event-sidebox" >
	      	<h1> B: Pet Rock </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-9-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-9-reset">
	      	<p1 id = "sidetimer-jahai-9">15:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-9">900</p2>
	    </div>

	    <div id = "jahai-10-sidebox" class = "event-sidebox" >
	      	<h1> B: Weapons </h1>
	      	<input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "sidetimer-jahai-10-start">
	      	<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "sidetimer-jahai-10-reset">
	      	<p1 id = "sidetimer-jahai-10">15:00</p1>
	      	<p2 id = "numerical-sidetimer-jahai-10">900</p2>
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
		        <b>Priority of events:</b>
		        <br>Rifts &#8594; Garrison &#8594; Yatendi Village &#8594; Chantry
		        <br> Rifts will be up almost 100% of the time so it is possible to do an event train purely on rifts.
		    </details>
		</div>

		<div class = "map-timer-wrapper">

			<div class = "event-box" id = "jahai-1-box">
      			<h1> Yatendi Village </h1>
       	 		<br><p1 id = "timer-jahai-1">23:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-1-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-1-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-2-box">
      			<h1> Ziya </h1>
       	 		<br><p1 id = "timer-jahai-2">13:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-2-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-2-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-3-box">
      			<h1> Garrison </h1>
       	 		<br><p1 id = "timer-jahai-3">2:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-3-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-3-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-4-box">
      			<h1> DERV </h1>
       	 		<br><p1 id = "timer-jahai-4">14:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-4-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-4-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-5-box">
      			<h1> Gate </h1>
       	 		<br><p1 id = "timer-jahai-5">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-5-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-5-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-6-box">
      			<h1> Chantry </h1>
       	 		<br><p1 id = "timer-jahai-6">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-6-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-6-reset">	
       		</div>

       		<!-- 
			    ======================================================
			    ====================== BOUNTIES ======================
			    ======================================================
			-->

			<div class = "event-box" id = "jahai-7-box">
      			<h1> LB: Wyverns </h1>
       	 		<br><p1 id = "timer-jahai-7">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-7-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-7-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-8-box" style = "visibility: hidden;">
      			<h1> B: Ettin </h1>
       	 		<br><p1 id = "timer-jahai-8">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-8-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-8-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-9-box" style = "visibility: hidden;">
      			<h1> B: Pet Rock </h1>
       	 		<br><p1 id = "timer-jahai-9">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-9-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-9-reset">	
       		</div>

       		<div class = "event-box" id = "jahai-10-box" style = "visibility: hidden;">
      			<h1> B: Weapons </h1>
       	 		<br><p1 id = "timer-jahai-10">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, jahai.events);" value = "Start" id = "timer-jahai-10-start">
       			<input type = "button" onclick = "reset(this, jahai.events);" value = "&#8635;" id = "timer-jahai-10-reset">	
       		</div>


			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "Jahai Bluffs" src = "../images/jahai-bluffs/jahai-bluffs-map.jpg">
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
<script type = "text/javascript" src = "<?php echo $base;?>/timers/jahai-bluffs.js?v=<?php echo $date;?>"></script>
</html>