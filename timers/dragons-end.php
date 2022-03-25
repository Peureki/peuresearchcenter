<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> Dragon's End </title>
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
			<h1> Dragon's End </h1>
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

		<div id = "de-1-sidebox" class = "event-sidebox" >
	      	<h1> Jade Maw </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-1-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-1-reset">
	      	<p1 id = "sidetimer-de-1">30:00</p1>
	      	<p2 id = "numerical-sidetimer-de-1">1800</p2>
	    </div>

		<div id = "de-2-sidebox" class = "event-sidebox" >
	      	<h1> Shipments </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-2-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-2-reset">
	      	<p1 id = "sidetimer-de-2">7:00</p1>
	      	<p2 id = "numerical-sidetimer-de-2">420</p2>
	    </div>

	    <div id = "de-3-sidebox" class = "event-sidebox" >
	      	<h1> Sangsa Chain </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-3-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-3-reset">
	      	<p1 id = "sidetimer-de-3">7:00</p1>
	      	<p2 id = "numerical-sidetimer-de-3">420</p2>
	    </div>

	    <div id = "de-4-sidebox" class = "event-sidebox" >
	      	<h1> Modrem Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-4-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-4-reset">
	      	<p1 id = "sidetimer-de-4">13:00</p1>
	      	<p2 id = "numerical-sidetimer-de-4">780</p2>
	    </div>

	    <div id = "de-5-sidebox" class = "event-sidebox" >
	      	<h1> Naga </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-5-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-5-reset">
	      	<p1 id = "sidetimer-de-5">16:00</p1>
	      	<p2 id = "numerical-sidetimer-de-5">960</p2>
	    </div>

	    <div id = "de-6-sidebox" class = "event-sidebox" >
	      	<h1> Risen Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-6-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-6-reset">
	      	<p1 id = "sidetimer-de-6">13:15</p1>
	      	<p2 id = "numerical-sidetimer-de-6">795</p2>
	    </div>

	    <div id = "de-7-sidebox" class = "event-sidebox" >
	      	<h1> NW Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-7-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-7-reset">
	      	<p1 id = "sidetimer-de-7">36:15</p1>
	      	<p2 id = "numerical-sidetimer-de-7">2175</p2>
	    </div>

	    <div id = "de-8-sidebox" class = "event-sidebox" >
	      	<h1> Icebrood Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-8-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-8-reset">
	      	<p1 id = "sidetimer-de-8">36:15</p1>
	      	<p2 id = "numerical-sidetimer-de-8">2175</p2>
	    </div>

	    <div id = "de-9-sidebox" class = "event-sidebox" >
	      	<h1> Branded Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-9-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-9-reset">
	      	<p1 id = "sidetimer-de-9">36:15</p1>
	      	<p2 id = "numerical-sidetimer-de-9">2175</p2>
	    </div>

	    <div id = "de-10-sidebox" class = "event-sidebox" >
	      	<h1> Lau Chain </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-10-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-10-reset">
	      	<p1 id = "sidetimer-de-10">8:00</p1>
	      	<p2 id = "numerical-sidetimer-de-10">480</p2>
	    </div>

	    <div id = "de-11-sidebox" class = "event-sidebox" >
	      	<h1> Enraged Kappa </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-11-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-11-reset">
	      	<p1 id = "sidetimer-de-11">8:15</p1>
	      	<p2 id = "numerical-sidetimer-de-11">495</p2>
	    </div>

	    <div id = "de-12-sidebox" class = "event-sidebox" >
	      	<h1> Shrine Guardian </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-12-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-12-reset">
	      	<p1 id = "sidetimer-de-12">8:45</p1>
	      	<p2 id = "numerical-sidetimer-de-12">525</p2>
	    </div>

	    <div id = "de-13-sidebox" class = "event-sidebox" >
	      	<h1> Speaker Outpost </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-13-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-13-reset">
	      	<p1 id = "sidetimer-de-13">7:00</p1>
	      	<p2 id = "numerical-sidetimer-de-13">420</p2>
	    </div>

	    <div id = "de-14-sidebox" class = "event-sidebox" >
	      	<h1> Speaker Champ </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-14-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-14-reset">
	      	<p1 id = "sidetimer-de-14">7:00</p1>
	      	<p2 id = "numerical-sidetimer-de-14">420</p2>
	    </div>

	    <div id = "de-15-sidebox" class = "event-sidebox" >
	      	<h1> Destroyer Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-15-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-15-reset">
	      	<p1 id = "sidetimer-de-15">36:15</p1>
	      	<p2 id = "numerical-sidetimer-de-15">2175</p2>
	    </div>

	    <div id = "de-16-sidebox" class = "event-sidebox" >
	      	<h1> NW Void </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-16-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-16-reset">
	      	<p1 id = "sidetimer-de-16">36:15</p1>
	      	<p2 id = "numerical-sidetimer-de-16">2175</p2>
	    </div>

	    <div id = "de-17-sidebox" class = "event-sidebox" >
	      	<h1> Brotherhood </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-17-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-17-reset">
	      	<p1 id = "sidetimer-de-17">7:30</p1>
	      	<p2 id = "numerical-sidetimer-de-17">450</p2>
	    </div>

	    <!--
	    <div id = "de-7-sidebox" class = "event-sidebox" >
	      	<h1> LB: Wyverns </h1>
	      	<input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "sidetimer-de-7-start">
	      	<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "sidetimer-de-7-reset">
	      	<p1 id = "sidetimer-de-7">30:00</p1>
	      	<p2 id = "numerical-sidetimer-de-7">1800</p2>
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

		

		<div class = "map-timer-wrapper">

			<div class = "event-box" id = "de-1-box">
      			<h1> Jade Maw </h1>
       	 		<br><p1 id = "timer-de-1">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-1-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-1-reset">	
       		</div>

			<div class = "event-box" id = "de-2-box">
	  			<h1> Shipments </h1>
	   	 		<br><p1 id = "timer-de-2">7:00</p1>
	    		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-2-start">
	   			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-2-reset">	
	   		</div>

	   		<div class = "event-box" id = "de-3-box">
      			<h1> Sangsa Chain </h1>
       	 		<br><p1 id = "timer-de-3">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-3-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-3-reset">	
       		</div>

       		<div class = "event-box" id = "de-4-box">
      			<h1> Modrem Void </h1>
       	 		<br><p1 id = "timer-de-4">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-4-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-4-reset">	
       		</div>

       		<div class = "event-box" id = "de-5-box">
      			<h1> Naga </h1>
       	 		<br><p1 id = "timer-de-5">16:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-5-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-5-reset">	
       		</div>

       		<div class = "event-box" id = "de-6-box">
      			<h1> Risen Void </h1>
       	 		<br><p1 id = "timer-de-6">13:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-6-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-6-reset">	
       		</div>

       		<div class = "event-box" id = "de-7-box">
      			<h1> NE Void </h1>
       	 		<br><p1 id = "timer-de-7">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-7-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-7-reset">	
       		</div>

       		<div class = "event-box" id = "de-8-box">
      			<h1> Icebrood Void </h1>
       	 		<br><p1 id = "timer-de-8">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-8-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-8-reset">	
       		</div>

       		<div class = "event-box" id = "de-9-box">
      			<h1> Branded Void </h1>
       	 		<br><p1 id = "timer-de-9">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-9-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-9-reset">	
       		</div>

       		<div class = "event-box" id = "de-10-box">
      			<h1> Lau Chain </h1>
       	 		<br><p1 id = "timer-de-10">8:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-10-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-10-reset">	
       		</div>

       		<div class = "event-box" id = "de-11-box">
      			<h1> Enraged Kappa </h1>
       	 		<br><p1 id = "timer-de-11">8:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-11-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-11-reset">	
       		</div>

       		<div class = "event-box" id = "de-12-box">
      			<h1> Shrine Guardian </h1>
       	 		<br><p1 id = "timer-de-12">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-12-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-12-reset">	
       		</div>

       		<div class = "event-box" id = "de-13-box">
      			<h1> Speaker Outpost </h1>
       	 		<br><p1 id = "timer-de-13">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-13-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-13-reset">	
       		</div>

       		<div class = "event-box" id = "de-14-box">
      			<h1> Speaker Champ </h1>
       	 		<br><p1 id = "timer-de-14">7:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-14-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-14-reset">	
       		</div>

       		<div class = "event-box" id = "de-15-box">
      			<h1> Destroyer Void </h1>
       	 		<br><p1 id = "timer-de-15">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-15-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-15-reset">	
       		</div>

       		<div class = "event-box" id = "de-16-box">
      			<h1> NW Void </h1>
       	 		<br><p1 id = "timer-de-16">36:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-16-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-16-reset">	
       		</div>

       		<div class = "event-box" id = "de-17-box">
      			<h1> Brotherhood </h1>
       	 		<br><p1 id = "timer-de-17">7:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-17-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-17-reset">	
       		</div>

	   		<!--
	   		<div class = "event-box" id = "de-7-box">
      			<h1> Volatile Sparks (Bori) </h1>
       	 		<br><p1 id = "timer-de-7">34:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, de.events);" value = "Start" id = "timer-de-7-start">
       			<input type = "button" onclick = "reset(this, de.events);" value = "&#8635;" id = "timer-de-7-reset">	
       		</div>
       	-->

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
<script type = "text/javascript" src = "<?php echo $base;?>/timers/dragons-end.js?v=<?php echo $date;?>"></script>
</html>