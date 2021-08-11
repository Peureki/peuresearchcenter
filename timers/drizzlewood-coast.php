<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Drizzlewood Coast</title>

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
      <h1>Drizzlewood Coast</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

      <div class = "event-sidebox" id = "drizzlewood-1-sidebox">
	      <h1> Vloxen Mine </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-drizzlewood-1-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-drizzlewood-1-reset">
	      <p1 id = "sidetimer-drizzlewood-1">1:00</p1>
	      <p2 id = "numerical-sidetimer-drizzlewood-1">90</p2>
	    </div>

      <div class = "event-sidebox" id = "drizzlewood-2-sidebox">
        <h1> Petraj Overlook </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-drizzlewood-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-drizzlewood-2-reset">
        <p1 id = "sidetimer-drizzlewood-2">1:00</p1>
        <p2 id = "numerical-sidetimer-drizzlewood-2">90</p2>
      </div>

      <div class = "event-sidebox" id = "drizzlewood-3-sidebox">
        <h1> Fort Defiance </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-drizzlewood-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-drizzlewood-3-reset">
        <p1 id = "sidetimer-drizzlewood-3">1:00</p1>
        <p2 id = "numerical-sidetimer-drizzlewood-3">90</p2>
      </div>

      <div class = "event-sidebox" id = "drizzlewood-4-sidebox">
        <h1> Port Cascadia </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-drizzlewood-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-drizzlewood-4-reset">
        <p1 id = "sidetimer-drizzlewood-4">1:00</p1>
        <p2 id = "numerical-sidetimer-drizzlewood-4">90</p2>
      </div>

      <div class = "event-sidebox" id = "drizzlewood-5-sidebox">
        <h1> Leadfoot Village </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-drizzlewood-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-drizzlewood-5-reset">
        <p1 id = "sidetimer-drizzlewood-5">1:00</p1>
        <p2 id = "numerical-sidetimer-drizzlewood-5">90</p2>
      </div>

      <div class = "event-sidebox" id = "drizzlewood-6-sidebox">
        <h1> Lighthouse Point </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-drizzlewood-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-drizzlewood-6-reset">
        <p1 id = "sidetimer-drizzlewood-6">1:00</p1>
        <p2 id = "numerical-sidetimer-drizzlewood-6">90</p2>
      </div>
   
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box" style = "min-width: 180px;">
      Vloxen Mine: <input type = "Checkbox" id = "drizzlewood-1-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'drizzlewood-1-sidebox') ">
      <br>
      Petraj Overlook: <input type = "Checkbox" id = "drizzlewood-2-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'drizzlewood-2-sidebox') ">
      <br>
      Fort Defiance: <input type = "Checkbox" id = "drizzlewood-3-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'drizzlewood-3-sidebox') ">
      <br>
      Port Cascadia: <input type = "Checkbox" id = "drizzlewood-4-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'drizzlewood-4-sidebox') ">
      <br>
      Leadfoot Village: <input type = "Checkbox" id = "drizzlewood-5-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'drizzlewood-5-sidebox') ">
      <br>
      Lighthouse Point: <input type = "Checkbox" id = "drizzlewood-6-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'drizzlewood-6-sidebox') ">
      <br>
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				The most important ones to keep track of are Vloxen Mine, Petraj Overlook, Fort Defiance, and Port Cascadia. Use this tool to keep track of when events will spawn after capturing a camp or finishing an event. This can help if you're stuck focusing on one side, but are able to know when the next event spawns on the other side. 
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

  		<div class = "event-box" id = "drizzlewood-1-box">
  			<h1> Vloxen Mine </h1>
   	 		<br><p1 id = "timer-drizzlewood-1">1:00</p1>
    		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-drizzlewood-1-start">
   			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-drizzlewood-1-reset">
   			<br><p2 id = "timer-drizzlewood-1-text"></p2>	
   		</div>

      <div class = "event-box" id = "drizzlewood-2-box">
        <h1> Petraj Overlook </h1>
        <br><p1 id = "timer-drizzlewood-2">1:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-drizzlewood-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-drizzlewood-2-reset">
        <br><p2 id = "timer-drizzlewood-2-text"></p2> 
      </div>

      <div class = "event-box" id = "drizzlewood-3-box">
        <h1> Fort Defiance </h1>
        <br><p1 id = "timer-drizzlewood-3">1:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-drizzlewood-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-drizzlewood-3-reset">
        <br><p2 id = "timer-drizzlewood-3-text"></p2> 
      </div>

      <div class = "event-box" id = "drizzlewood-4-box">
        <h1> Port Cascadia </h1>
        <br><p1 id = "timer-drizzlewood-4">1:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-drizzlewood-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-drizzlewood-4-reset">
        <br><p2 id = "timer-drizzlewood-4-text"></p2> 
      </div>

      <div class = "event-box" id = "drizzlewood-5-box">
        <h1> Leadfoot Village </h1>
        <br><p1 id = "timer-drizzlewood-5">1:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-drizzlewood-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-drizzlewood-5-reset">
        <br><p2 id = "timer-drizzlewood-5-text"></p2> 
      </div>

      <div class = "event-box" id = "drizzlewood-6-box">
        <h1> Lighthouse Point </h1>
        <br><p1 id = "timer-drizzlewood-6">1:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-drizzlewood-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-drizzlewood-6-reset">
        <br><p2 id = "timer-drizzlewood-6-text"></p2> 
      </div>


      <!-- Map -->
			<img class = "map-timer-map" title = "Drizzlewood Coast" src = "../images/drizzlewood-coast/map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/drizzlewood-coast.js?v=<?php echo $date;?>"></script>
</body>
</html>
