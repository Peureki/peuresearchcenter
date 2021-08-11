<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Bjora Marches</title>
</head>
<body>
	<!-- 
    ============================================================
    ====================== NAVIGATION BAR ======================
    ============================================================
  -->
  <?php include('../nav.php'); ?>

	<div id = "nav-left-popup" class = "nav-left-popup" onclick = "nav_popup();"> 
		&#x2194;
	</div>

	<!-- Main header -->
		<div class = "page-box">
			<div class = "section-header">
      <h1>Bjora Marches</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
		</div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

    <div class = "event-sidebox" id = "bjora-1-sidebox">
      <h1> Wisp </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-1-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-1-reset">
      <p1 id = "sidetimer-bjora-1">9:00</p1>
      <p2 id = "numerical-sidetimer-bjora-1">540</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-2-sidebox">
      <h1> Pineshade </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-2-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-2-reset">
      <p1 id = "sidetimer-bjora-2">9:00</p1>
      <p2 id = "numerical-sidetimer-bjora-2">540</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-3-sidebox">
      <h1> Bowman </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-3-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-3-reset">
      <p1 id = "sidetimer-bjora-3">9:00</p1>
      <p2 id = "numerical-sidetimer-bjora-3">540</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-4-sidebox">
      <h1> Murellow </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-4-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-4-reset">
      <p1 id = "sidetimer-bjora-4">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-4">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-5-sidebox">
      <h1> Skelk </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-5-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-5-reset">
      <p1 id = "sidetimer-bjora-5">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-5">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-6-sidebox">
      <h1> Berserker </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-6-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-6-reset">
      <p1 id = "sidetimer-bjora-6">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-6">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-7-sidebox">
      <h1> Shaman </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-7-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-7-reset">
      <p1 id = "sidetimer-bjora-7">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-7">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-8-sidebox">
      <h1> Brute </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-8-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-8-reset">
      <p1 id = "sidetimer-bjora-8">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-8">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-9-sidebox">
      <h1> Summoner </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-9-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-9-reset">
      <p1 id = "sidetimer-bjora-9">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-9">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-10-sidebox">
      <h1> Patrol - NE </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-10-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-10-reset">
      <p1 id = "sidetimer-bjora-10">6:00</p1>
      <p2 id = "numerical-sidetimer-bjora-10">360</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-11-sidebox">
      <h1> Patrol - N </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-11-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-11-reset">
      <p1 id = "sidetimer-bjora-11">8:00</p1>
      <p2 id = "numerical-sidetimer-bjora-11">480</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-12-sidebox">
      <h1> Patrol - S </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-12-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-12-reset">
      <p1 id = "sidetimer-bjora-12">6:00</p1>
      <p2 id = "numerical-sidetimer-bjora-12">360</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-13-sidebox">
      <h1> Boneskinner </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-13-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-13-reset">
      <p1 id = "sidetimer-bjora-13">5:00</p1>
      <p2 id = "numerical-sidetimer-bjora-13">300</p2>
    </div>


    <!--
    <div class = "event-sidebox" id = "bjora-7-sidebox">
      <h1> Jofast Defence </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bjora-7-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bjora-7-reset">
      <p1 id = "sidetimer-bjora-7">30:15</p1>
      <p2 id = "numerical-sidetimer-bjora-7">1815</p2>
    </div>
    -->

	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box" style = "min-width: 180px;">
      Choya: <input type = "Checkbox" id = "bjora-1-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-1-sidebox') ">
      <br>
      Branded Waves: <input type = "Checkbox" id = "bjora-2-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-2-sidebox') ">
      <br>
      Flint: <input type = "Checkbox" id = "bjora-3-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-3-sidebox') ">
      <br>
      Raiding Party - N: <input type = "Checkbox" id = "bjora-4-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-4-sidebox') ">
      <br>
      Raiding Party - M: <input type = "Checkbox" id = "bjora-5-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-5-sidebox') ">
      <br>
      Raiding Party - S: <input type = "Checkbox" id = "bjora-6-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-6-sidebox') ">
      <br>
      Lost Mount: <input type = "Checkbox" id = "bjora-7-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-7-sidebox') ">
      <br>
      Sand Lion: <input type = "Checkbox" id = "bjora-8-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-8-sidebox') ">
      <br>
      Deadhouse: <input type = "Checkbox" id = "bjora-9-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-9-sidebox') ">
      <br>
      Jimoh: <input type = "Checkbox" id = "bjora-10-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-10-sidebox') ">
      <br>
      Branded Storm - N: <input type = "Checkbox" id = "bjora-11-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-11-sidebox') ">
      <br>
      Branded Storm - S: <input type = "Checkbox" id = "bjora-12-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'bjora-12-sidebox') ">
      <br>

	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				Most events have a wide range of respawn timers. While these display the average, some may spawn 3+ mins before or after the average. In terms of the Temples and Gates of Arah, the cooldown seems to be beyond 2 hours</b>.  
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
      <div class = "event-box" id = "bjora-1-box">
        <h1> Wisp </h1>
        <br><p1 id = "timer-bjora-1">9:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-1-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-1-reset">
      </div>

      <div class = "event-box" id = "bjora-2-box">
        <h1> Pineshade </h1>
        <br><p1 id = "timer-bjora-2">9:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-2-reset">
      </div>

      <div class = "event-box" id = "bjora-3-box">
        <h1> Bowman </h1>
        <br><p1 id = "timer-bjora-3">9:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-3-reset">
      </div>

      <div class = "event-box" id = "bjora-4-box">
        <h1> Murellow </h1>
        <br><p1 id = "timer-bjora-4">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-4-reset">
      </div>

      <div class = "event-box" id = "bjora-5-box">
        <h1> Skelk </h1>
        <br><p1 id = "timer-bjora-5">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-5-reset">
      </div>

      <div class = "event-box" id = "bjora-6-box">
        <h1> Berserker </h1>
        <br><p1 id = "timer-bjora-6">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-6-reset">
      </div>

      <div class = "event-box" id = "bjora-7-box">
        <h1> Shaman </h1>
        <br><p1 id = "timer-bjora-7">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-7-reset">
      </div>

      <div class = "event-box" id = "bjora-8-box">
        <h1> Brute </h1>
        <br><p1 id = "timer-bjora-8">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-8-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-8-reset">
      </div>

      <div class = "event-box" id = "bjora-9-box">
        <h1> Summoner </h1>
        <br><p1 id = "timer-bjora-9">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-9-reset">
      </div>

      <div class = "event-box" id = "bjora-10-box">
        <h1> Patrol - NE </h1>
        <br><p1 id = "timer-bjora-10">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-10-reset">
      </div>

      <div class = "event-box" id = "bjora-11-box">
        <h1> Patrol - N </h1>
        <br><p1 id = "timer-bjora-11">8:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-11-reset">
      </div>

      <div class = "event-box" id = "bjora-12-box">
        <h1> Patrol - S </h1>
        <br><p1 id = "timer-bjora-12">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-12-reset">
      </div>

      <div class = "event-box" id = "bjora-13-box">
        <h1> Boneskinner </h1>
        <br><p1 id = "timer-bjora-13">5:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-13-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-13-reset">
      </div>
      
      <!--
      <div class = "event-box" id = "bjora-7-box">
        <h1> Jofast Defense </h1>
        <p1 id = "timer-bjora-7">30:15</p1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bjora-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bjora-7-reset">
      </div>
    -->

      




       		<!-- Map -->
			<img class = "map-timer-map" title = "Bjora Marches" src = "../images/bjora-marches/map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/bjora-marches.js?v=<?php echo $date;?>"></script>
</body>
</html>
