<!DOCTYPE html>
<html>
<head>
	<!-- Defaults --> 
	<?php include('../config.php'); ?>
	<title> Labyrinth </title>
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
			<h1> Labyrinth </h1>
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
		All: <input type = "Checkbox" id = "lab-all-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events, 'all');">

		<br><br>
		NE Foes Door: <input type = "Checkbox" id = "lab-1-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		Harrow: <input type = "Checkbox" id = "lab-2-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		N Vets Door: <input type = "Checkbox" id = "lab-3-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		Viscount: <input type = "Checkbox" id = "lab-4-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		NW Vets Door: <input type = "Checkbox" id = "lab-5-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		Mid Vets Door: <input type = "Checkbox" id = "lab-6-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		Steve: <input type = "Checkbox" id = "lab-7-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		SW Foes Door: <input type = "Checkbox" id = "lab-8-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		Gordy: <input type = "Checkbox" id = "lab-9-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		S Vets Door: <input type = "Checkbox" id = "lab-10-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		SE Foes Door: <input type = "Checkbox" id = "lab-11-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		Lich: <input type = "Checkbox" id = "lab-12-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
		E Foes Door: <input type = "Checkbox" id = "lab-13-checkbox" checked = "true" onclick = "checkboxTimer(this, lab.events);">
		<br>
	</div>

	<!-- 
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">
	    <div id = "lab-1-sidebox" class = "event-sidebox" >
	      	<h1> NE Foes Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-1-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-1-reset">
	      	<p1 id = "sidetimer-lab-1">19:30</p1>
	      	<p2 id = "numerical-sidetimer-lab-1">1170</p2>
	    </div>

	    <div id = "lab-2-sidebox" class = "event-sidebox" >
	      	<h1> Harrow </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-2-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-2-reset">
	      	<p1 id = "sidetimer-lab-2">25:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-2">1500</p2>
	    </div>

	    <div id = "lab-3-sidebox" class = "event-sidebox" >
	      	<h1> N Vets Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-3-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-3-reset">
	      	<p1 id = "sidetimer-lab-3">20:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-3">1200</p2>
	    </div>

	    <div id = "lab-4-sidebox" class = "event-sidebox" >
	      	<h1> Viscount </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-4-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-4-reset">
	      	<p1 id = "sidetimer-lab-4">25:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-4">1500</p2>
	    </div>

	    <div id = "lab-5-sidebox" class = "event-sidebox" >
	      	<h1> NW Vets Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-5-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-5-reset">
	      	<p1 id = "sidetimer-lab-5">18:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-5">1080</p2>
	    </div>

	    <div id = "lab-6-sidebox" class = "event-sidebox" >
	      	<h1> Mid Vets Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-6-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-6-reset">
	      	<p1 id = "sidetimer-lab-6">21:45</p1>
	      	<p2 id = "numerical-sidetimer-lab-6">1305</p2>
	    </div>

	    <div id = "lab-7-sidebox" class = "event-sidebox" >
	      	<h1> Steve </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-7-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-7-reset">
	      	<p1 id = "sidetimer-lab-7">20:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-7">1200</p2>
	    </div>

	    <div id = "lab-8-sidebox" class = "event-sidebox" >
	      	<h1> SW Foes Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-8-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-8-reset">
	      	<p1 id = "sidetimer-lab-8">21:15</p1>
	      	<p2 id = "numerical-sidetimer-lab-8">1275</p2>
	    </div>

	    <div id = "lab-9-sidebox" class = "event-sidebox" >
	      	<h1> Gourdy </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-9-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-9-reset">
	      	<p1 id = "sidetimer-lab-9">26:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-9">1560</p2>
	    </div>

	    <div id = "lab-10-sidebox" class = "event-sidebox" >
	      	<h1> S Vets Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-10-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-10-reset">
	      	<p1 id = "sidetimer-lab-10">26:15</p1>
	      	<p2 id = "numerical-sidetimer-lab-10">1575</p2>
	    </div>

	    <div id = "lab-11-sidebox" class = "event-sidebox" >
	      	<h1> SE Foes Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-11-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-11-reset">
	      	<p1 id = "sidetimer-lab-11">20:00</p1>
	      	<p2 id = "numerical-sidetimer-lab-11">1200</p2>
	    </div>

	    <div id = "lab-12-sidebox" class = "event-sidebox" >
	      	<h1> Lich </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-12-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-12-reset">
	      	<p1 id = "sidetimer-lab-12">26:45</p1>
	      	<p2 id = "numerical-sidetimer-lab-12">1605</p2>
	    </div>

	    <div id = "lab-13-sidebox" class = "event-sidebox" >
	      	<h1> E Foes Door </h1>
	      	<input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "sidetimer-lab-13-start">
	      	<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "sidetimer-lab-13-reset">
	      	<p1 id = "sidetimer-lab-13">20:30</p1>
	      	<p2 id = "numerical-sidetimer-lab-13">1230</p2>
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
		        There are many different ways to farm this train, but the general route is to go counter-clockwise, starting with whatever door is up from the spawn waypoint. Some groups skip boss doors and some do all doors. If you do bosses though, make sure to have some decent to good DPS so it won't take forever. 
		    </details>
		</div>
	</div>

	<div class = "page-box" style = "max-width: 1000px;">
		<div class = "event-box" id = "lab-1-box">
  			<h1> NE Foes Door </h1>
   	 		<br><p1 id = "timer-lab-1">19:30</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-1-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-1-reset">
   		</div>

   		<div class = "event-box" id = "lab-2-box">
  			<h1> Harrow </h1>
   	 		<br><p1 id = "timer-lab-2">25:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-2-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-2-reset">
   		</div>

   		<div class = "event-box" id = "lab-3-box">
  			<h1> N Vets Door </h1>
   	 		<br><p1 id = "timer-lab-3">20:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-3-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-3-reset">
   		</div>

   		<div class = "event-box" id = "lab-4-box">
  			<h1> Viscount </h1>
   	 		<br><p1 id = "timer-lab-4">25:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-4-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-4-reset">
   		</div>

   		<div class = "event-box" id = "lab-5-box">
  			<h1> NW Vets Door </h1>
   	 		<br><p1 id = "timer-lab-5">18:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-5-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-5-reset">
   		</div>

   		<div class = "event-box" id = "lab-6-box">
  			<h1> Mid Vets Door </h1>
   	 		<br><p1 id = "timer-lab-6">21:45</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-6-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-6-reset">
   		</div>

   		<div class = "event-box" id = "lab-7-box">
  			<h1> Steve </h1>
   	 		<br><p1 id = "timer-lab-7">20:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-7-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-7-reset">
   		</div>

   		<div class = "event-box" id = "lab-8-box">
  			<h1> SW Foes Door </h1>
   	 		<br><p1 id = "timer-lab-8">21:15</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-8-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-8-reset">
   		</div>

   		<div class = "event-box" id = "lab-9-box">
  			<h1> Gourdy </h1>
   	 		<br><p1 id = "timer-lab-9">26:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-9-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-9-reset">
   		</div>

   		<div class = "event-box" id = "lab-10-box">
  			<h1> S Vets Door </h1>
   	 		<br><p1 id = "timer-lab-10">26:15</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-10-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-10-reset">
   		</div>

   		<div class = "event-box" id = "lab-11-box">
  			<h1> SE Foes Door </h1>
   	 		<br><p1 id = "timer-lab-11">20:00</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-11-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-11-reset">
   		</div>

   		<div class = "event-box" id = "lab-12-box">
  			<h1> Lich </h1>
   	 		<br><p1 id = "timer-lab-12">26:45</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-12-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-12-reset">
   		</div>

   		<div class = "event-box" id = "lab-13-box">
  			<h1> E Foes Door </h1>
   	 		<br><p1 id = "timer-lab-13">20:30</p1>
    		<br><input type = "button" onclick = "start_stop(this, lab.events);" value = "Start" id = "timer-lab-13-start">
   			<input type = "button" onclick = "reset(this, lab.events);" value = "&#8635;" id = "timer-lab-13-reset">
   		</div>

		<div class = "map-timer-wrapper">


			<!-- MAP PICTURE -->
			<img class = "map-timer-map" title = "Labyrinth" src = "../images/labyrinth/map.jpg">
		</div> <!-- End of map timer wrapper -->
	</div> <!-- End of page box -->

	<!-- 
	    ================================================================
	    ====================== FOOTER + DARK MODE ======================
	    ================================================================
	-->
	<?php include('../footer.php'); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/timers/labyrinth.js?v=<?php echo $date;?>"></script>
</html>