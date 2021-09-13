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
		<b> Events </b>
		<br><br>
		Yatendi Village: <input type = "Checkbox" id = "dragonfall-1-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Ziya: <input type = "Checkbox" id = "dragonfall-2-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Garrison: <input type = "Checkbox" id = "dragonfall-3-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		DERV: <input type = "Checkbox" id = "dragonfall-4-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Gate: <input type = "Checkbox" id = "dragonfall-5-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Chantry: <input type = "Checkbox" id = "dragonfall-6-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br><br>
		<b> Bounties </b>
		<br><br>
		Wyverns: <input type = "Checkbox" id = "dragonfall-7-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Ettin: <input type = "Checkbox" id = "dragonfall-8-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Pet Rock: <input type = "Checkbox" id = "dragonfall-9-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
		<br> 
		Weapons: <input type = "Checkbox" id = "dragonfall-10-checkbox" checked = "true" onclick = "checkboxTimer(this, dragonfall.events);">
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

	    <!-- 
		    =======================================================
		    ====================== MELANDRU =======================
		    =======================================================
		-->

	    <div id = "dragonfall-15-sidebox" class = "event-sidebox" >
	      	<h1> M: Cull N </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-15-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-15-reset">
	      	<p1 id = "sidetimer-dragonfall-15">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-15">240</p2>
	    </div>

	    <div id = "dragonfall-16-sidebox" class = "event-sidebox" >
	      	<h1> M: Cull W </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-16-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-16-reset">
	      	<p1 id = "sidetimer-dragonfall-16">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-16">240</p2>
	    </div>

	    <div id = "dragonfall-17-sidebox" class = "event-sidebox" >
	      	<h1> M: Cull S </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-17-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-17-reset">
	      	<p1 id = "sidetimer-dragonfall-17">4:00</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-17">240</p2>
	    </div>

	    <div id = "dragonfall-18-sidebox" class = "event-sidebox" >
	      	<h1> M: Champ Elemental </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-18-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-18-reset">
	      	<p1 id = "sidetimer-dragonfall-18">9:30</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-18">570</p2>
	    </div>

	    <div id = "dragonfall-19-sidebox" class = "event-sidebox" >
	      	<h1> M: Brandstorm </h1>
	      	<input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "sidetimer-dragonfall-19-start">
	      	<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "sidetimer-dragonfall-19-reset">
	      	<p1 id = "sidetimer-dragonfall-19">6:15</p1>
	      	<p2 id = "numerical-sidetimer-dragonfall-19">375</p2>
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
		        LB = Legendary Bounty, B = Bounty
		        <br><br>
		        <b>Priority of events:</b>
		        <br>Rifts &#8594; Garrison &#8594; Yatendi Village &#8594; Chantry
		        <br> Rifts will be up almost 100% of the time so it is possible to do an event train purely on rifts.
		    </details>
		</div>

		<div class = "map-timer-wrapper">

			<div class = "event-box" id = "dragonfall-1-box">
      			<h1> Yatendi Village </h1>
       	 		<br><p1 id = "timer-dragonfall-1">23:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-1-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-1-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-2-box">
      			<h1> Ziya </h1>
       	 		<br><p1 id = "timer-dragonfall-2">13:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-2-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-2-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-3-box">
      			<h1> Garrison </h1>
       	 		<br><p1 id = "timer-dragonfall-3">2:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-3-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-3-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-4-box">
      			<h1> DERV </h1>
       	 		<br><p1 id = "timer-dragonfall-4">14:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-4-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-4-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-5-box">
      			<h1> Gate </h1>
       	 		<br><p1 id = "timer-dragonfall-5">14:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-5-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-5-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-6-box">
      			<h1> Chantry </h1>
       	 		<br><p1 id = "timer-dragonfall-6">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-6-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-6-reset">	
       		</div>

       		<!-- 
			    ======================================================
			    ====================== BOUNTIES ======================
			    ======================================================
			-->

			<div class = "event-box" id = "dragonfall-7-box">
      			<h1> LB: Wyverns </h1>
       	 		<br><p1 id = "timer-dragonfall-7">30:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-7-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-7-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-8-box" style = "visibility: hidden;">
      			<h1> B: Ettin </h1>
       	 		<br><p1 id = "timer-dragonfall-8">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-8-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-8-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-9-box" style = "visibility: hidden;">
      			<h1> B: Pet Rock </h1>
       	 		<br><p1 id = "timer-dragonfall-9">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-9-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-9-reset">	
       		</div>

       		<div class = "event-box" id = "dragonfall-10-box" style = "visibility: hidden;">
      			<h1> B: Weapons </h1>
       	 		<br><p1 id = "timer-dragonfall-10">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, dragonfall.events);" value = "Start" id = "timer-dragonfall-10-start">
       			<input type = "button" onclick = "reset(this, dragonfall.events);" value = "&#8635;" id = "timer-dragonfall-10-reset">	
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
<script type = "text/javascript" src = "<?php echo $base;?>/timers/dragonfall2.js?v=<?php echo $date;?>"></script>
</html>