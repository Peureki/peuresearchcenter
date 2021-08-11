<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Elon Riverlands</title>
</head>
<body>
	<!-- 
    ============================================================
    ====================== NAVIGATION BAR ======================
    ============================================================
  -->
  <?php include('../nav.php'); ?>
  <div class = "page-box">
    <div class = "section-header">
      <h1>Elon Riverlands</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
  </div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

      <div id = "elon-meta-sidebox" class = "meta-sidebox" >
        <h1 id = "meta-name"> </h1>
        <p1 id = "sidetimer-elon-meta"></p1>
        <p2 id = "numerical-sidetimer-elon-meta"></p2>
      </div>

      <div class = "event-sidebox" id = "elon-1-sidebox">
	      <h1> Choya </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-1-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-1-reset">
	      <p1 id = "sidetimer-elon-1">15:00</p1>
	      <p2 id = "numerical-sidetimer-elon-1">900</p2>
	    </div>

      <div class = "event-sidebox" id = "elon-2-sidebox">
        <h1> Branded Waves </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-2-reset">
        <p1 id = "sidetimer-elon-2">9:15</p1>
        <p2 id = "numerical-sidetimer-elon-2">555</p2>
      </div>

      <div class = "event-sidebox" id = "elon-3-sidebox">
        <h1> Flint </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-3-reset">
        <p1 id = "sidetimer-elon-3">11:00</p1>
        <p2 id = "numerical-sidetimer-elon-3">660</p2>
      </div>

      <div class = "event-sidebox" id = "elon-4-sidebox">
        <h1> Raiding Party - N </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-4-reset">
        <p1 id = "sidetimer-elon-4">6:00</p1>
        <p2 id = "numerical-sidetimer-elon-4">360</p2>
      </div>

      <div class = "event-sidebox" id = "elon-5-sidebox">
        <h1> Raiding Party - Mid </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-5-reset">
        <p1 id = "sidetimer-elon-5">6:00</p1>
        <p2 id = "numerical-sidetimer-elon-5">360</p2>
      </div>

      <div class = "event-sidebox" id = "elon-6-sidebox">
        <h1> Raiding Party - S </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-6-reset">
        <p1 id = "sidetimer-elon-6">6:00</p1>
        <p2 id = "numerical-sidetimer-elon-6">360</p2>
      </div>

      <div class = "event-sidebox" id = "elon-7-sidebox">
        <h1> Lost Mount </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-7-reset">
        <p1 id = "sidetimer-elon-7">11:15</p1>
        <p2 id = "numerical-sidetimer-elon-7">675</p2>
      </div>

      <div class = "event-sidebox" id = "elon-8-sidebox">
        <h1> Sand Lion </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-8-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-8-reset">
        <p1 id = "sidetimer-elon-8">8:45</p1>
        <p2 id = "numerical-sidetimer-elon-8">525</p2>
      </div>

      <div class = "event-sidebox" id = "elon-9-sidebox">
        <h1> Deadhouse </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-9-reset">
        <p1 id = "sidetimer-elon-9">11:30</p1>
        <p2 id = "numerical-sidetimer-elon-9">690</p2>
      </div>

      <div class = "event-sidebox" id = "elon-10-sidebox">
        <h1> Jimoh </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-10-reset">
        <p1 id = "sidetimer-elon-10">8:45</p1>
        <p2 id = "numerical-sidetimer-elon-10">525</p2>
      </div>

      <div class = "event-sidebox" id = "elon-11-sidebox">
        <h1> Branded Storm - N </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-11-reset">
        <p1 id = "sidetimer-elon-11">6:45</p1>
        <p2 id = "numerical-sidetimer-elon-11">405</p2>
      </div>

      <div class = "event-sidebox" id = "elon-12-sidebox">
        <h1> Raiding Party - S </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-12-reset">
        <p1 id = "sidetimer-elon-12">6:45</p1>
        <p2 id = "numerical-sidetimer-elon-12">405</p2>
      </div>

      <div class = "event-sidebox" id = "elon-13-sidebox">
        <h1> Doppleganger </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-elon-13-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-elon-13-reset">
        <p1 id = "sidetimer-elon-13">10:00</p1>
        <p2 id = "numerical-sidetimer-elon-13">600</p2>
      </div>

	 
	    	     
	    
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box" style = "min-width: 180px;">
      Choya: <input type = "Checkbox" id = "elon-1-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-1-sidebox') ">
      <br>
      Branded Waves: <input type = "Checkbox" id = "elon-2-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-2-sidebox') ">
      <br>
      Flint: <input type = "Checkbox" id = "elon-3-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-3-sidebox') ">
      <br>
      Raiding Party - N: <input type = "Checkbox" id = "elon-4-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-4-sidebox') ">
      <br>
      Raiding Party - M: <input type = "Checkbox" id = "elon-5-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-5-sidebox') ">
      <br>
      Raiding Party - S: <input type = "Checkbox" id = "elon-6-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-6-sidebox') ">
      <br>
      Lost Mount: <input type = "Checkbox" id = "elon-7-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-7-sidebox') ">
      <br>
      Sand Lion: <input type = "Checkbox" id = "elon-8-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-8-sidebox') ">
      <br>
      Deadhouse: <input type = "Checkbox" id = "elon-9-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-9-sidebox') ">
      <br>
      Jimoh: <input type = "Checkbox" id = "elon-10-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-10-sidebox') ">
      <br>
      Branded Storm - N: <input type = "Checkbox" id = "elon-11-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-11-sidebox') ">
      <br>
      Branded Storm - S: <input type = "Checkbox" id = "elon-12-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'elon-12-sidebox') ">
      <br>

	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				There's nothing special about these cooldowns of the events except Doppleganger. While there's an option to start the timer for Doppleganger, only start it <b>after completing Path of Ascension meta</b>.  
			</div>
			
		</div>

		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

  		<!-- 
  			HTML notation: 
  			<div class = "[map]-[event #]-box">
  			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
  			<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-[map]-[event #]-start">
  			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
   			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
  		-->

  		<div class = "event-box" id = "elon-1-box">
  			<h1> Choya </h1>
   	 		<br><p1 id = "timer-elon-1">15:00</p1>
    		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-1-start">
   			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-1-reset">
   			<br><p2 id = "timer-elon-1-text"></p2>	
   		</div>

      <div class = "event-box" id = "elon-2-box">
        <h1> Branded Waves </h1>
        <br><p1 id = "timer-elon-2">9:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-2-reset">
        <br><p2 id = "timer-elon-2-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-3-box">
        <h1> Flint </h1>
        <br><p1 id = "timer-elon-3">11:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-3-reset">
        <br><p2 id = "timer-elon-3-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-4-box">
        <h1> Raiding Party - <br> North </h1>
        <br><p1 id = "timer-elon-4">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-4-reset">
        <br><p2 id = "timer-elon-4-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-5-box">
        <h1> Raiding Party - <br> Mid </h1>
        <br><p1 id = "timer-elon-5">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-5-reset">
        <br><p2 id = "timer-elon-5-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-6-box">
        <h1> Raiding Party - <br> South </h1>
        <br><p1 id = "timer-elon-6">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-6-reset">
        <br><p2 id = "timer-elon-6-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-7-box">
        <h1> Lost Mount </h1>
        <br><p1 id = "timer-elon-7">11:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-7-reset">
        <br><p2 id = "timer-elon-7-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-8-box">
        <h1> Sand Lion </h1>
        <br><p1 id = "timer-elon-8">8:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-8-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-8-reset">
        <br><p2 id = "timer-elon-8-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-9-box">
        <h1> Deadhouse </h1>
        <br><p1 id = "timer-elon-9">11:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-9-reset">
        <br><p2 id = "timer-elon-9-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-10-box">
        <h1> Jimoh </h1>
        <br><p1 id = "timer-elon-10">8:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-10-reset">
        <br><p2 id = "timer-elon-10-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-11-box">
        <h1> Branded Storm - <br> North </h1>
        <br><p1 id = "timer-elon-11">6:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-11-reset">
        <br><p2 id = "timer-elon-11-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-12-box">
        <h1> Branded Storm - <br> South </h1>
        <br><p1 id = "timer-elon-12">6:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-12-reset">
        <br><p2 id = "timer-elon-12-text"></p2>  
      </div>

      <div class = "event-box" id = "elon-13-box">
        <h1> Doppleganger </h1>
        <br><p1 id = "timer-elon-13">10:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-elon-13-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-elon-13-reset">
        <br><p2 id = "timer-elon-13-text"></p2>  
      </div>

      <!-- Meta -->
      <div id = "elon-shape-1" class = "event-rect">
      </div>

      <div id = "elon-meta-info-1" class = 'meta-info'>
        <h1> Doppleganger!</h1>
        <br>
        Gather magic throughout the area
        <br><br>
        If targetted, run to nearest waypoint!
      </div>

      <!-- Ascension -->
      <div id = "elon-shape-2" class = "event-rect">
      </div>

      <div id = "elon-meta-info-2" class = 'meta-info'>
        After defeating the Branded Forgotten, <br>start the countdown for Doppleganger
      </div>



       		<!-- Map -->
			<img class = "map-timer-map" title = "Elon Riverlands" src = "../images/elon-riverlands/map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <div class = "bottom-sticky">
    <div id = "progress-box" class = "progress-box">
      <h1 id = "progress-text" class = "progress-text"> </h1>
      <div id = "progress-bar" class = "progress-bar"></div>
    </div>

    <div class = 'current-status-box'>
      <h1 id = "current-status"></h1>
    </div>
  </div>

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/elon-riverlands.js?v=<?php echo $date;?>"></script>
</body>
</html>
