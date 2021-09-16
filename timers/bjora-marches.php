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
	<div id = "side-timer-list" class = "side-timer-list">

    <div class = "event-sidebox" id = "bjora-1-sidebox">
      <h1> Wisp </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-1-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-1-reset">
      <p1 id = "sidetimer-bjora-1">9:00</p1>
      <p2 id = "numerical-sidetimer-bjora-1">540</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-2-sidebox">
      <h1> Pineshade </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-2-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-2-reset">
      <p1 id = "sidetimer-bjora-2">9:00</p1>
      <p2 id = "numerical-sidetimer-bjora-2">540</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-3-sidebox">
      <h1> Bowman </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-3-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-3-reset">
      <p1 id = "sidetimer-bjora-3">9:00</p1>
      <p2 id = "numerical-sidetimer-bjora-3">540</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-4-sidebox">
      <h1> Murellow </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-4-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-4-reset">
      <p1 id = "sidetimer-bjora-4">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-4">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-5-sidebox">
      <h1> Skelk </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-5-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-5-reset">
      <p1 id = "sidetimer-bjora-5">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-5">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-6-sidebox">
      <h1> Berserker </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-6-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-6-reset">
      <p1 id = "sidetimer-bjora-6">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-6">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-7-sidebox">
      <h1> Shaman </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-7-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-7-reset">
      <p1 id = "sidetimer-bjora-7">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-7">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-8-sidebox">
      <h1> Brute </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-8-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-8-reset">
      <p1 id = "sidetimer-bjora-8">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-8">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-9-sidebox">
      <h1> Summoner </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-9-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-9-reset">
      <p1 id = "sidetimer-bjora-9">12:30</p1>
      <p2 id = "numerical-sidetimer-bjora-9">750</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-10-sidebox">
      <h1> Patrol - NE </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-10-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-10-reset">
      <p1 id = "sidetimer-bjora-10">6:00</p1>
      <p2 id = "numerical-sidetimer-bjora-10">360</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-11-sidebox">
      <h1> Patrol - N </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-11-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-11-reset">
      <p1 id = "sidetimer-bjora-11">8:00</p1>
      <p2 id = "numerical-sidetimer-bjora-11">480</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-12-sidebox">
      <h1> Patrol - S </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-12-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-12-reset">
      <p1 id = "sidetimer-bjora-12">6:00</p1>
      <p2 id = "numerical-sidetimer-bjora-12">360</p2>
    </div>

    <div class = "event-sidebox" id = "bjora-13-sidebox">
      <h1> Boneskinner </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-13-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-13-reset">
      <p1 id = "sidetimer-bjora-13">5:00</p1>
      <p2 id = "numerical-sidetimer-bjora-13">300</p2>
    </div>


    <!--
    <div class = "event-sidebox" id = "bjora-7-sidebox">
      <h1> Jofast Defence </h1>
      <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "sidetimer-bjora-7-start">
      <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "sidetimer-bjora-7-reset">
      <p1 id = "sidetimer-bjora-7">30:15</p1>
      <p2 id = "numerical-sidetimer-bjora-7">1815</p2>
    </div>
    -->

	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
      All: <input type = "Checkbox" id = "bjora-all-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events, 'all');">
      <br>
      Wisp: <input type = "Checkbox" id = "bjora-1-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Pineshade: <input type = "Checkbox" id = "bjora-2-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Bowman: <input type = "Checkbox" id = "bjora-3-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Murellow: <input type = "Checkbox" id = "bjora-4-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Skelk: <input type = "Checkbox" id = "bjora-5-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Berserker: <input type = "Checkbox" id = "bjora-6-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Shaman: <input type = "Checkbox" id = "bjora-7-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Brute: <input type = "Checkbox" id = "bjora-8-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Summoner: <input type = "Checkbox" id = "bjora-9-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Patrol NE: <input type = "Checkbox" id = "bjora-10-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Patrol N: <input type = "Checkbox" id = "bjora-11-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>
      Patrol S: <input type = "Checkbox" id = "bjora-12-checkbox" checked = "true" onclick = "checkboxTimer(this, bjora.events);">
      <br>

	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

  		<!-- 
  			HTML notation: 
  			<div class = "[map]-[event #]-box">
  			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
  			<br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-[map]-[event #]-start">
  			<input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
   			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
  		-->
      <div class = "event-box" id = "bjora-1-box">
        <h1> Wisp </h1>
        <br><p1 id = "timer-bjora-1">9:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-1-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-1-reset">
      </div>

      <div class = "event-box" id = "bjora-2-box">
        <h1> Pineshade </h1>
        <br><p1 id = "timer-bjora-2">9:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-2-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-2-reset">
      </div>

      <div class = "event-box" id = "bjora-3-box">
        <h1> Bowman </h1>
        <br><p1 id = "timer-bjora-3">9:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-3-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-3-reset">
      </div>

      <div class = "event-box" id = "bjora-4-box">
        <h1> Murellow </h1>
        <br><p1 id = "timer-bjora-4">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-4-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-4-reset">
      </div>

      <div class = "event-box" id = "bjora-5-box">
        <h1> Skelk </h1>
        <br><p1 id = "timer-bjora-5">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-5-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-5-reset">
      </div>

      <div class = "event-box" id = "bjora-6-box">
        <h1> Berserker </h1>
        <br><p1 id = "timer-bjora-6">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-6-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-6-reset">
      </div>

      <div class = "event-box" id = "bjora-7-box">
        <h1> Shaman </h1>
        <br><p1 id = "timer-bjora-7">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-7-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-7-reset">
      </div>

      <div class = "event-box" id = "bjora-8-box">
        <h1> Brute </h1>
        <br><p1 id = "timer-bjora-8">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-8-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-8-reset">
      </div>

      <div class = "event-box" id = "bjora-9-box">
        <h1> Summoner </h1>
        <br><p1 id = "timer-bjora-9">12:30</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-9-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-9-reset">
      </div>

      <div class = "event-box" id = "bjora-10-box">
        <h1> Patrol - NE </h1>
        <br><p1 id = "timer-bjora-10">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-10-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-10-reset">
      </div>

      <div class = "event-box" id = "bjora-11-box">
        <h1> Patrol - N </h1>
        <br><p1 id = "timer-bjora-11">8:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-11-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-11-reset">
      </div>

      <div class = "event-box" id = "bjora-12-box">
        <h1> Patrol - S </h1>
        <br><p1 id = "timer-bjora-12">6:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-12-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-12-reset">
      </div>

      <div class = "event-box" id = "bjora-13-box">
        <h1> Boneskinner </h1>
        <br><p1 id = "timer-bjora-13">5:00</p1>
        <br><input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-13-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-13-reset">
      </div>
      
      <!--
      <div class = "event-box" id = "bjora-7-box">
        <h1> Jofast Defense </h1>
        <p1 id = "timer-bjora-7">30:15</p1>
        <input type = "button" onclick = "start_stop(this, bjora.events);" value = "Start" id = "timer-bjora-7-start">
        <input type = "button" onclick = "reset(this, bjora.events);" value = "&#8635;" id = "timer-bjora-7-reset">
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
