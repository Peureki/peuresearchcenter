<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Bitterfrost Frontier</title>
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
			<h1>Bitterfrost Frontier</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<div id = "nav-left-popup" class = "nav-left-popup" onclick = "nav_popup();"> 
		&#x2194;
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">

	    <div id = "bitterfrost-1-sidebox" class = "event-sidebox" >
	      <h1> Beacons of Koda </h1>
	      <input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "sidetimer-bitterfrost-1-start">
	      <input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "sidetimer-bitterfrost-1-reset">
	      <p1 id = "sidetimer-bitterfrost-1">52:00</p1>
	      <p2 id = "numerical-sidetimer-bitterfrost-1"></p2>
	    </div>

	    <div>
			<h1></h1>
			<p2 id = "numerical-sidetimer-istan-meta-gh"></p2>
		</div>

		<div id = "bitterfrost-2-sidebox" class = "event-sidebox">
	      <h1> Vet Wolf </h1>
	      <input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "sidetimer-bitterfrost-2-start">
	      <input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "sidetimer-bitterfrost-2-reset">
	      <p1 id = "sidetimer-bitterfrost-2">9:45</p1>
	      <p2 id = "numerical-sidetimer-bitterfrost-2">585</p2>
	    </div>

	    <div id = "bitterfrost-4-sidebox" class = "event-sidebox">
	      <h1> Svanir Tyrant </h1>
	      <input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "sidetimer-bitterfrost-4-start">
	      <input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "sidetimer-bitterfrost-4-reset">
	      <p1 id = "sidetimer-bitterfrost-4">9:45</p1>
	      <p2 id = "numerical-sidetimer-bitterfrost-4">585</p2>
	    </div>

	    <div id = "bitterfrost-6-sidebox" class = "event-sidebox">
	      <h1> Griffon Chicks </h1>
	      <input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "sidetimer-bitterfrost-6-start">
	      <input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "sidetimer-bitterfrost-6-reset">
	      <p1 id = "sidetimer-bitterfrost-6">8:45</p1>
	      <p2 id = "numerical-sidetimer-bitterfrost-6">525</p2>
	    </div>

	    <div id = "bitterfrost-8-sidebox" class = "event-sidebox">
	      <h1> Chokocooka </h1>
	      <input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "sidetimer-bitterfrost-8-start">
	      <input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "sidetimer-bitterfrost-8-reset">
	      <p1 id = "sidetimer-bitterfrost-8">9:30</p1>
	      <p2 id = "numerical-sidetimer-bitterfrost-8">570</p2>
	    </div>

	    <div id = "bitterfrost-10-sidebox" class = "event-sidebox">
	      <h1> Quaggan Bath </h1>
	      <input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "sidetimer-bitterfrost-10-start">
	      <input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "sidetimer-bitterfrost-10-reset">
	      <p1 id = "sidetimer-bitterfrost-10">11:00</p1>
	      <p2 id = "numerical-sidetimer-bitterfrost-10">660</p2>
	    </div>  
	    
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
	  	All: <input type = "Checkbox" id = "bitterfrost-all-checkbox" checked = "true" onclick = "checkboxTimer(this, bitterfrost.events, 'all');">
	  	<br>
	  	Beacon of Kodan: <input type = "Checkbox" id = "bitterfrost-1-checkbox" checked = "true" onclick = "checkboxTimer(this, bitterfrost.events);">
	  	<br>
	  	Svanir Tyrant: <input type = "Checkbox" id = "bitterfrost-4-checkbox" checked = "true" onclick = "checkboxTimer(this, bitterfrost.events);">
	  	<br>
	  	Griffon Chicks: <input type = "Checkbox" id = "bitterfrost-6-checkbox" checked = "true" onclick = "checkboxTimer(this, bitterfrost.events);">
	  	<br>
	  	Chokocooka: <input type = "Checkbox" id = "bitterfrost-8-checkbox" checked = "true" onclick = "checkboxTimer(this, bitterfrost.events);">
	  	<br>
	  	Quaggan Bath: <input type = "Checkbox" id = "bitterfrost-10-checkbox" checked = "true" onclick = "checkboxTimer(this, bitterfrost.events);">
	  	<br>
	    
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "small-description">
			<details>
				<summary><b> How this works: </b></summary>
				<br> The meta has about a 45 minute cooldown, but the extra few minutes are dependent on how many Braizers are lit. The more Braizers, the faster the charge up time for the meta to start when you see a progress bar on the right. 
				<br><br>
				Chokocooka and Quaggan Bath both have events that spawn when it fails. The timer does take that in consideration and will notify you when the event would be up if you did the failed event instead. 
			</details>
		</div>
		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
			
			<div class = "event-box" id = "bitterfrost-1-box">
				<h1> Beacons of Koda </h1>
       	 		<br><p1 id = "timer-bitterfrost-1">52:00</p1>
       	 		<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-bitterfrost-1-start">
       			<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-bitterfrost-1-reset">
       	 		<input type = "button" value = "i" onmouseover="showElement('bitterfrost-1-info-box-1'); " onmouseout = "hideElement('bitterfrost-1-info-box-1'); ">	
       		</div>

       		<div class = "event-box" id = "bitterfrost-2-box">
				<h1> Vet Wolf </h1>
       	 		<br><p1 id = "timer-bitterfrost-2">9:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-bitterfrost-2-start">
       			<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-bitterfrost-2-reset">	
       		</div>

			<div class = "event-box" id = "bitterfrost-4-box">
				<h1> Svanir Tyrant </h1>
       	 		<br><p1 id = "timer-bitterfrost-4">9:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-bitterfrost-4-start">
       			<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-bitterfrost-4-reset">	
       		</div>

       		<div class = "event-box" id = "bitterfrost-6-box">
				<h1> Griffon Chicks </h1>
       	 		<br><p1 id = "timer-bitterfrost-6">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-bitterfrost-6-start">
       			<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-bitterfrost-6-reset">	
       		</div>

       		<div class = "event-box" id = "bitterfrost-8-box">
				<h1> Chokocooka </h1>
       	 		<br><p1 id = "timer-bitterfrost-8">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-bitterfrost-8-start">
       			<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-bitterfrost-8-reset">
       			<input type = "button" value = "i" onmouseover="showElement('bitterfrost-8-info-box-2'); " onmouseout = "hideElement('bitterfrost-8-info-box-2'); ">	
       		</div>

       		<div class = "event-box" id = "bitterfrost-10-box">
				<h1> Quaggan Bath </h1>
       	 		<br><p1 id = "timer-bitterfrost-10">11:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, bitterfrost.events);" value = "Start" id = "timer-bitterfrost-10-start">
       			<input type = "button" onclick = "reset(this, bitterfrost.events);" value = "&#8635;" id = "timer-bitterfrost-10-reset">
       			<input type = "button" value = "i" onmouseover="showElement('bitterfrost-10-info-box-2'); " onmouseout = "hideElement('bitterfrost-10-info-box-2'); ">	
       		</div>

       		<!-- Meta info -->
       		<div id = "bitterfrost-1-info-box-1" class = "bitterfrost-1-info-box-1">
       			<h2 id = "bitterfrost-1-info-box-1-text">The more braziers that are lit, the faster the meta will progress when the progress bar shows up. It's ~45 minutes from the previous meta to the beginning of the progress bar. 
       				<br><br>
       			The closer it is to meta time, the more braziers will become under attack. When the meta begins, 9 champions will randomly spawn at a brazier. Make sure to check the map!</h2> 
       		</div>

       		<!-- Chokocooka warning when timer is 1:30 -->
       		<div id = "bitterfrost-8-info-box-1" class = "bitterfrost-8-info-box-1">
       			<h2 id = "bitterfrost-8-info-box-1-text"></h2> 
       		</div>

       		<div id = "bitterfrost-8-info-box-2" class = "bitterfrost-8-info-box-2">
       			<h2 id = "bitterfrost-8-info-box-2-text"> There are two events: 
       			<br><br>
       			"Gather stone to bolster the statue of Chokocooka" (gathering event) & "Protect the statue from destruction" (defense)
				<br><br>
				If the gathering event completes, then the defense event will spawn ~8:30 minutes later. The defense event, if successful, will continue the defense event rather than the gathering event. </h2> 
       		</div>

       		<!-- Quaggan Bath warning when timer is 1:30 -->
       		<div id = "bitterfrost-10-info-box-1" class = "bitterfrost-10-info-box-1">
       			<h2 id = "bitterfrost-10-info-box-1-text"></h2> 
       		</div>

       		<div id = "bitterfrost-10-info-box-2" class = "bitterfrost-10-info-box-2">
       			<h2 id = "bitterfrost-10-info-box-2-text">There are two events: 
       			"Destroy all the icebrood around the hot springs" (Icebrood) & "Clear the streams of corruption so the quaggans can enjoy bathing" (defense)
       			<br><br>
				If the Icebrood event completes, then the defense event will spawn ~5:00 minutes later. The defense event, if successful, will continue the defense event rather than the Icebrood event.  </h2> 
       		</div>

       		<!-- Waypoint Icons --> 
	        <div id = "bitterfrost-waypoint-1" class = "waypoint" onclick = "copyValue('wp-1'); fadeOutandBack(this);">
	        	<img src = "../images/assets/waypoint.png">
	        </div>

	        <div id = "bitterfrost-waypoint-2" class = "waypoint" onclick = "copyValue('wp-2'); fadeOutandBack(this);">
	        	<img src = "../images/assets/waypoint.png">
	        </div>

       		<!-- Map -->
			<img class = "map-timer-map" title = "Bitterfrost" src = "../images/bitterfrost-frontier/bitterfrost-frontier-map.jpg"> 

			<!-- Waypoint Copy Pasta -->
			<div style = "opacity: 0;">
		    	<input id = "wp-1" type = "text" value = "[&BIEJAAA=]">
		  	</div>

		  	<div style = "opacity: 0;">
		    	<input id = "wp-2" type = "text" value = "[&BH0JAAA=]">
		  	</div>


		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/timers/bitterfrost-frontier.js?v=<?php echo $date;?>"></script>
</body>
</html>
