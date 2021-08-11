<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Desert Highlands</title>
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
      <h1>Desert Highlands</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
		</div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

      <div class = "event-sidebox" id = "desert-1-sidebox">
        <h1> Choya </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-1-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-1-reset">
        <p1 id = "sidetimer-desert-1">16:30</p1>
        <p2 id = "numerical-sidetimer-desert-1">990</p2>
      </div>

      <div class = "event-sidebox" id = "desert-2-sidebox">
        <h1> Sand Shark </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-2-reset">
        <p1 id = "sidetimer-desert-2">17:15</p1>
        <p2 id = "numerical-sidetimer-desert-2">435</p2>
      </div>

      <div class = "event-sidebox" id = "desert-3-sidebox">
        <h1> Sand Eel </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-3-reset">
        <p1 id = "sidetimer-desert-3">18:15</p1>
        <p2 id = "numerical-sidetimer-desert-3">1095</p2>
      </div>

      <div class = "event-sidebox" id = "desert-4-sidebox">
        <h1> Yumma Escort </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-4-reset">
        <p1 id = "sidetimer-desert-4">17:45</p1>
        <p2 id = "numerical-sidetimer-desert-4">1065</p2>
      </div>

      <div class = "event-sidebox" id = "desert-5-sidebox">
        <h1> Yumug Escort </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-5-reset">
        <p1 id = "sidetimer-desert-5">20:45</p1>
        <p2 id = "numerical-sidetimer-desert-5">1245</p2>
      </div>

      <div class = "event-sidebox" id = "desert-6-sidebox" style = "display: none;">
        <h1> Nayim Chain </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-6-reset">
        <p1 id = "sidetimer-desert-6">46:30</p1>
        <p2 id = "numerical-sidetimer-desert-6">2790</p2>
      </div>

      <div class = "event-sidebox" id = "desert-7-sidebox">
        <h1> Asho Escort </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-7-reset">
        <p1 id = "sidetimer-desert-7">17:30</p1>
        <p2 id = "numerical-sidetimer-desert-7">1050</p2>
      </div>

      <div class = "event-sidebox" id = "desert-8-sidebox" style = "display: none;">
        <h1> Mordant Crescent </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-8-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-8-reset">
        <p1 id = "sidetimer-desert-8">51:30</p1>
        <p2 id = "numerical-sidetimer-desert-8">3090</p2>
      </div>

      <div class = "event-sidebox" id = "desert-9-sidebox">
        <h1> Ogre Escort </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-9-reset">
        <p1 id = "sidetimer-desert-9">6:15</p1>
        <p2 id = "numerical-sidetimer-desert-9">375</p2>
      </div>

      <div class = "event-sidebox" id = "desert-10-sidebox">
        <h1> Dameer Escort </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-10-reset">
        <p1 id = "sidetimer-desert-10">17:30</p1>
        <p2 id = "numerical-sidetimer-desert-10">1050</p2>
      </div>	    

      <div class = "event-sidebox" id = "desert-11-sidebox">
        <h1> Forged Tormentor </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-11-reset">
        <p1 id = "sidetimer-desert-11">30:00</p1>
        <p2 id = "numerical-sidetimer-desert-11">1800</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-12-sidebox">
        <h1> Hostages </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-desert-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-desert-12-reset">
        <p1 id = "sidetimer-desert-12">7:00</p1>
        <p2 id = "numerical-sidetimer-desert-12">420</p2>
      </div> 
	    
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box" style = "min-width: 180px;">
      Choya: <input type = "Checkbox" id = "desert-1-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-1-sidebox') ">
      <br>
      Branded Waves: <input type = "Checkbox" id = "desert-2-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-2-sidebox') ">
      <br>
      Flint: <input type = "Checkbox" id = "desert-3-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-3-sidebox') ">
      <br>
      Raiding Party - N: <input type = "Checkbox" id = "desert-4-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-4-sidebox') ">
      <br>
      Raiding Party - M: <input type = "Checkbox" id = "desert-5-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-5-sidebox') ">
      <br>
      Raiding Party - S: <input type = "Checkbox" id = "desert-6-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-6-sidebox') ">
      <br>
      Lost Mount: <input type = "Checkbox" id = "desert-7-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-7-sidebox') ">
      <br>
      Sand Lion: <input type = "Checkbox" id = "desert-8-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-8-sidebox') ">
      <br>
      Deadhouse: <input type = "Checkbox" id = "desert-9-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-9-sidebox') ">
      <br>
      Jimoh: <input type = "Checkbox" id = "desert-10-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-10-sidebox') ">
      <br>
      Branded Storm - N: <input type = "Checkbox" id = "desert-11-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-11-sidebox') ">
      <br>
      Branded Storm - S: <input type = "Checkbox" id = "desert-12-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'desert-12-sidebox') ">
      <br>

	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				There are 2 events that are not displayed on the page, but are considered to be good events to do. It's the Mordant Cresent (near the Hostages event) and Awakened Defense (at the first waypoint). These events go hand-in-hand and won't start until the other event is completed. They cannot occur at the same time.  
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

      <div class = "event-box" id = "desert-1-box">
        <h1> Choya </h1>
        <br><p1 id = "timer-desert-1">16:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-1-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-1-reset">
        <br><p2 id = "timer-desert-1-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-2-box">
        <h1> Sand Shark </h1>
        <br><p1 id = "timer-desert-2">17:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-2-reset">
        <br><p2 id = "timer-desert-2-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-3-box">
        <h1> Sand Eel </h1>
        <br><p1 id = "timer-desert-3">18:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-3-reset">
        <br><p2 id = "timer-desert-3-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-4-box">
        <h1> Yumma Escort </h1>
        <br><p1 id = "timer-desert-4">17:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-4-reset">
        <br><p2 id = "timer-desert-4-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-5-box">
        <h1> Yumug Escort </h1>
        <br><p1 id = "timer-desert-5">20:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-5-reset">
        <br><p2 id = "timer-desert-5-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-6-box">
        <h1> Nayim Chain </h1>
        <br><p1 id = "timer-desert-6">46:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-6-reset">
        <br><p2 id = "timer-desert-6-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-7-box">
        <h1> Asho Escort </h1>
        <br><p1 id = "timer-desert-7">11:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-7-reset">
        <br><p2 id = "timer-desert-7-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-8-box">
        <h1> Mordant Crescent </h1>
        <br><p1 id = "timer-desert-8">51:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-8-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-8-reset">
        <br><p2 id = "timer-desert-8-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-9-box">
        <h1> Ogre Escort </h1>
        <br><p1 id = "timer-desert-9">6:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-9-reset">
        <br><p2 id = "timer-desert-9-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-10-box">
        <h1> Dameer Escort </h1>
        <br><p1 id = "timer-desert-10">17:30</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-10-reset">
        <br><p2 id = "timer-desert-10-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-11-box">
        <h1> Forged Tormentor </h1>
        <br><p1 id = "timer-desert-11">30:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-11-reset">
        <br><p2 id = "timer-desert-11-text"></p2>  
      </div>

      <div class = "event-box" id = "desert-12-box">
        <h1> Hostages </h1>
        <br><p1 id = "timer-desert-12">7:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-desert-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-desert-12-reset">
        <input type = "button" value = "i" onmouseover="showElement('desert-info-box-1'); " onmouseout = "hideElement('desert-info-box-1'); ">  
      </div>

      <!-- Event info --> 
      <!-- Hostages -->
      <div id = "desert-info-box-1" class = "event-info">
        Start this timer only after completing the Mordant Cresent event. 
      </div>
    




       		<!-- Map -->
			<img class = "map-timer-map" title = "desert Riverlands" src = "../images/desert-highlands/east-map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/desert-highlands.js?v=<?php echo $date;?>"></script>
</body>
</html>
