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
	    =============================================================
	    ====================== SIDE TIMER LIST ======================
	    =============================================================
	-->
	<div id = "side-timer-list" class = "side-timer-list">
		<div id = "jahai-meta-sidebox" class = "meta-sidebox">
			<h1 id = "side-meta-name"></h1>
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
		        Auric Basin is seperate by 2 different types of events: pylon and independent events.
		        <br><br>
		        The pylon events are events that occur after completing a pylon. To accurately get the time of the events that spawn after completing a particular pylon, <b>click on the checkbox on the right sidebox under "Completed Pylons?"</b>. This will begin the <b> initial spawn timer</b> of the event. After completing the event, click on the &#8635; button to start the <b> respawn timer </b>. Initial spawn timer and respawn timer are not the same amount of time. 
		        <br><br>
		        Example: After completing the south pylon event chain, click on the "South Pylon" checkbox. It will start a countdown to an event chain called the Blighted Saplings. This event is unique where, a few moments after completing the south pylon, a champion will spawn. Let it fail to spawn the Blighted Saplings. The timer accounts for how long it takes til the event fails and the Blighted event chain spawns.
		        <br><br>
		        Independent events include the Vinetooths and Priory Escorts. These occur regardless of the progress of the map. 

		        <br><br> 
		        <b>Priority of events:</b>
		        <br>Vinetooths &#8594; Blighted Saplings &#8594; Wyvern (or Balthazar if you have a small group) &#8594; Priory Escort &#8594; Treasure Mushroom &#8594; Other Champs
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
	    ================================================================
	    ====================== FOOTER + DARK MODE ======================
	    ================================================================
	-->
	<?php include('../footer.php'); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/timers/jahai-bluffs.js?v=<?php echo $date;?>"></script>
</html>