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
	      	<h1> Repair Crew (N) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-1-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-1-reset">
	      	<p1 id = "sidetimer-kaineng-1">8:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-1">525</p2>
	    </div>

	    <div id = "kaineng-2-sidebox" class = "event-sidebox" >
	      	<h1> Repair Crew (S) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-2-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-2-reset">
	      	<p1 id = "sidetimer-kaineng-2">8:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-2">525</p2>
	    </div>

	    <div id = "kaineng-3-sidebox" class = "event-sidebox" >
	      	<h1> Food Cart (N) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-3-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-3-reset">
	      	<p1 id = "sidetimer-kaineng-3">23:15</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-3">1395</p2>
	    </div>

	    <div id = "kaineng-4-sidebox" class = "event-sidebox" >
	      	<h1> Food Cart (S) </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-4-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-4-reset">
	      	<p1 id = "sidetimer-kaineng-4">25:15</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-4">1530</p2>
	    </div>

	    <div id = "kaineng-5-sidebox" class = "event-sidebox" >
	      	<h1> Boat House </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-5-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-5-reset">
	      	<p1 id = "sidetimer-kaineng-5">10:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-5">645</p2>
	    </div>

	    <div id = "kaineng-6-sidebox" class = "event-sidebox" >
	      	<h1> Aligator </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-6-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-6-reset">
	      	<p1 id = "sidetimer-kaineng-6">13:00</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-6">780</p2>
	    </div>

	    <div id = "kaineng-7-sidebox" class = "event-sidebox" >
	      	<h1> Naga Cages </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-7-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-7-reset">
	      	<p1 id = "sidetimer-kaineng-7">12:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-7">750</p2>
	    </div>

	     <div id = "kaineng-8-sidebox" class = "event-sidebox" >
	      	<h1> Corvus </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-8-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-8-reset">
	      	<p1 id = "sidetimer-kaineng-8">11:30</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-8">690</p2>
	    </div>

	    <div id = "kaineng-9-sidebox" class = "event-sidebox" >
	      	<h1> Fisherman Daegu </h1>
	      	<input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "sidetimer-kaineng-9-start">
	      	<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "sidetimer-kaineng-9-reset">
	      	<p1 id = "sidetimer-kaineng-9">14:45</p1>
	      	<p2 id = "numerical-sidetimer-kaineng-9">885</p2>
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
      			<h1> Repair Crew (N) </h1>
       	 		<br><p1 id = "timer-kaineng-1">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-1-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-1-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-2-box">
      			<h1> Repair Crew (S) </h1>
       	 		<br><p1 id = "timer-kaineng-2">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-2-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-2-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-3-box">
      			<h1> Food Cart (N) </h1>
       	 		<br><p1 id = "timer-kaineng-3">23:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-3-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-3-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-4-box">
      			<h1> Food Cart (S) </h1>
       	 		<br><p1 id = "timer-kaineng-4">25:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-4-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-4-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-5-box">
      			<h1> Boat House </h1>
       	 		<br><p1 id = "timer-kaineng-5">10:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-5-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-5-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-6-box">
      			<h1> Aligators </h1>
       	 		<br><p1 id = "timer-kaineng-6">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-6-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-6-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-7-box">
      			<h1> Naga Cages </h1>
       	 		<br><p1 id = "timer-kaineng-7">12:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-7-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-7-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-8-box">
      			<h1> Corvus </h1>
       	 		<br><p1 id = "timer-kaineng-8">11:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-8-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-8-reset">	
       		</div>

       		<div class = "event-box" id = "kaineng-9-box">
      			<h1> Fisherman Daegu </h1>
       	 		<br><p1 id = "timer-kaineng-9">14:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, kaineng.events);" value = "Start" id = "timer-kaineng-9-start">
       			<input type = "button" onclick = "reset(this, kaineng.events);" value = "&#8635;" id = "timer-kaineng-9-reset">	
       		</div>

			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "New Kaineng City" src = "../images/new-kaineng-city/New_Kaineng_City_map.jpg">
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