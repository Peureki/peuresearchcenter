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
		        This map is extremely strange compared to others. Each meta occurs at xx:45 of the hour, switching each hour. After each meta, there are a sequence of events that occur. First being the Rift, then Pepperseed. Events info boxes will pop up explaining each and when to do them on the map when it's after the meta.
		 		<br><br>
		        <b>Priority of events:</b>
		        <br>Metas &#8594; Hydra (only after south meta) &#8594; Rift &#8594; Tirabikkr &#8594; Pepperseed &#8594; Branded Forgotton &#8594; Garrison &#8594; Pepperseed (from Garrison) &#8594; Repeat Tirabikkr and Branded Forgotton until next meta
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
       		<!-- 
			    =============================================================
			    ====================== IMAGES / ASSETS ======================
			    =============================================================
			-->
			<!-- Thunderhead Keep -->
			<div id = "thunderhead-img-1" class = "event-image">
				<img src = "../images/assets/event_red_circle.png" style = "width: 150%;">
			</div>

			<div id = "thunderhead-img-2" class = "event-image">
				<img src = "../images/assets/event_red_boss.png">
			</div>

			<!-- Oil Floes-->
			<!-- N oil rig -->
			<div id = "thunderhead-img-3" class = "event-image">
				<img src = "../images/assets/event_red_circle.png">
			</div>

			<div id = "thunderhead-img-4" class = "event-image">
				<img src = "../images/assets/event_red_shield.png">
			</div>
			<!-- M oil rig -->
			<div id = "thunderhead-img-5" class = "event-image">
				<img src = "../images/assets/event_red_circle.png">
			</div>

			<div id = "thunderhead-img-6" class = "event-image">
				<img src = "../images/assets/event_red_shield.png">
			</div>

			<!-- S oil rig -->
			<div id = "thunderhead-img-7" class = "event-image">
				<img src = "../images/assets/event_red_circle.png">
			</div>

			<div id = "thunderhead-img-8" class = "event-image">
				<img src = "../images/assets/event_red_shield.png">
			</div>

			<!-- Turd boss -->
			<div id = "thunderhead-img-9" class = "event-image">
				<img src = "../images/assets/event_red_circle.png">
			</div>

			<div id = "thunderhead-img-10" class = "event-image">
				<img src = "../images/assets/event_red_boss.png">
			</div>

			<!-- Other events --> 
			<!-- Rift --> 
			<div id = "thunderhead-img-11" class = "event-image">
				<img src = "../images/assets/event_circle.png" style = "width: 200%;">
			</div>

			<div id = "thunderhead-img-12" class = "event-image">
				<img src = "../images/assets/inquest_portal.png">
			</div>

			<!-- Pepperseed -->
			<div id = "thunderhead-img-13" class = "event-image">
				<img src = "../images/assets/event_circle.png" style = "width: 150%;">
			</div>

			<div id = "thunderhead-img-14" class = "event-image">
				<img src = "../images/assets/event_shield.png">
			</div>

			<!-- Garrison -->
			<div id = "thunderhead-img-15" class = "event-image">
				<img src = "../images/assets/event_circle.png" style = "width: 150%;">
			</div>

			<div id = "thunderhead-img-16" class = "event-image">
				<img src = "../images/assets/event_shield.png">
			</div>

			<!-- Hydra -->
			<div id = "thunderhead-img-17" class = "event-image">
				<img src = "../images/assets/event_circle.png" style = "width: 150%;">
			</div>

			<div id = "thunderhead-img-18" class = "event-image">
				<img src = "../images/assets/event_boss.png">
			</div>

			<!-- 
			    ===================================================
			    ====================== TEXTS ======================
			    ===================================================
			-->
			<!-- Metas -->
			<div id = "thunderhead-info-1" class = 'meta-info'>
       			<h1> THUNDERHEAD KEEP </h1>
       		</div>

       		<div id = "thunderhead-info-2" class = 'meta-info'>
       			<h1> OIL FLOES </h1>
       		</div>

       		<!-- Other events -->
       		<!-- Rift -->
       		<div id = "thunderhead-info-3" class = 'event-info'>
       			<b> Rift </b>
       			<br>Spawns 30 seconds after each meta. If the area is branded prior, then it will spawn at xx:15 instead. 
       		</div>
       		<!-- Pepperseed -->
       		<div id = "thunderhead-info-4" class = 'event-info'>
       			<b> Pepperseed </b>
       			<br>Spawns around this area after either meta unless Pepperseed is at Moorage Waypoint [&BLoLAAA=]. 
       		</div>
			<!-- Garrison -->
       		<div id = "thunderhead-info-5" class = 'event-info'>
       			<b> Garrison </b>
       			<br>Spawns ~3 mins after Pepperseed gets escorted to here (not starting from here). 
       		</div>
       		<!-- Hydra -->
       		<div id = "thunderhead-info-6" class = 'event-info'>
       			<b> Hydra </b>
       			<br>Spawns after only the Oil Floes meta 
       		</div>

			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "Thunderhead Peaks" src = "../images/thunderhead-peaks/map.jpg">
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