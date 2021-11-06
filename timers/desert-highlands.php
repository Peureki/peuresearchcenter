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
	<div id = "side-timer-list" class = "side-timer-list">

      <div class = "event-sidebox" id = "desert-1-sidebox">
        <h1> Choya </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-1-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-1-reset">
        <p1 id = "sidetimer-desert-1">16:30</p1>
        <p2 id = "numerical-sidetimer-desert-1">990</p2>
      </div>

      <div class = "event-sidebox" id = "desert-2-sidebox">
        <h1> Sand Shark </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-2-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-2-reset">
        <p1 id = "sidetimer-desert-2">17:15</p1>
        <p2 id = "numerical-sidetimer-desert-2">435</p2>
      </div>

      <div class = "event-sidebox" id = "desert-3-sidebox">
        <h1> Sand Eel </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-3-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-3-reset">
        <p1 id = "sidetimer-desert-3">18:15</p1>
        <p2 id = "numerical-sidetimer-desert-3">1095</p2>
      </div>

      <div class = "event-sidebox" id = "desert-4-sidebox">
        <h1> Yumma Escort </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-4-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-4-reset">
        <p1 id = "sidetimer-desert-4">17:45</p1>
        <p2 id = "numerical-sidetimer-desert-4">1065</p2>
      </div>

      <div class = "event-sidebox" id = "desert-5-sidebox">
        <h1> Yumug Escort </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-5-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-5-reset">
        <p1 id = "sidetimer-desert-5">20:45</p1>
        <p2 id = "numerical-sidetimer-desert-5">1245</p2>
      </div>

      <div class = "event-sidebox" id = "desert-6-sidebox" style = "display: none;">
        <h1> Nayim Chain </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-6-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-6-reset">
        <p1 id = "sidetimer-desert-6">46:30</p1>
        <p2 id = "numerical-sidetimer-desert-6">2790</p2>
      </div>

      <div class = "event-sidebox" id = "desert-7-sidebox">
        <h1> Asho Escort </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-7-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-7-reset">
        <p1 id = "sidetimer-desert-7">17:30</p1>
        <p2 id = "numerical-sidetimer-desert-7">1050</p2>
      </div>

      <div class = "event-sidebox" id = "desert-8-sidebox" style = "display: none;">
        <h1> Mordant Crescent </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-8-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-8-reset">
        <p1 id = "sidetimer-desert-8">51:30</p1>
        <p2 id = "numerical-sidetimer-desert-8">3090</p2>
      </div>

      <div class = "event-sidebox" id = "desert-9-sidebox">
        <h1> Ogre Escort </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-9-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-9-reset">
        <p1 id = "sidetimer-desert-9">6:15</p1>
        <p2 id = "numerical-sidetimer-desert-9">375</p2>
      </div>

      <div class = "event-sidebox" id = "desert-10-sidebox">
        <h1> Dameer Escort </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-10-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-10-reset">
        <p1 id = "sidetimer-desert-10">17:30</p1>
        <p2 id = "numerical-sidetimer-desert-10">1050</p2>
      </div>	    

      <div class = "event-sidebox" id = "desert-11-sidebox">
        <h1> (LB) Forged Tormentor </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-11-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-11-reset">
        <p1 id = "sidetimer-desert-11">30:00</p1>
        <p2 id = "numerical-sidetimer-desert-11">1800</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-12-sidebox">
        <h1> Hostages </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-12-start">
        <p1 id = "sidetimer-desert-12">7:00</p1>
        <p2 id = "numerical-sidetimer-desert-12">420</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-13-sidebox">
        <h1> Tosun Escort </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-13-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-13-reset">
        <p1 id = "sidetimer-desert-13">13:00</p1>
        <p2 id = "numerical-sidetimer-desert-13">780</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-14-sidebox">
        <h1> Branded Waves </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-14-start">
        <p1 id = "sidetimer-desert-14">7:00</p1>
        <p2 id = "numerical-sidetimer-desert-14">420</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-15-sidebox">
        <h1> Drogg </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-15-start">
        <p1 id = "sidetimer-desert-15">12:00</p1>
        <p2 id = "numerical-sidetimer-desert-15">720</p2>
      </div>

      <div class = "event-sidebox" id = "desert-16-sidebox">
        <h1> (B) Awakened Occultist </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-16-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-16-reset">
        <p1 id = "sidetimer-desert-16">15:00</p1>
        <p2 id = "numerical-sidetimer-desert-16">900</p2>
      </div>  

      <div class = "event-sidebox" id = "desert-17-sidebox">
        <h1> (B) Snag Seizeclaw </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-17-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-17-reset">
        <p1 id = "sidetimer-desert-17">15:00</p1>
        <p2 id = "numerical-sidetimer-desert-17">900</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-18-sidebox">
        <h1> (B) Cracking Brandspark </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-18-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-18-reset">
        <p1 id = "sidetimer-desert-18">15:00</p1>
        <p2 id = "numerical-sidetimer-desert-18">900</p2>
      </div> 

      <div class = "event-sidebox" id = "desert-18-sidebox">
        <h1> (B) Balthazar's Lost </h1>
        <input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "sidetimer-desert-18-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "sidetimer-desert-19-reset">
        <p1 id = "sidetimer-desert-18">15:00</p1>
        <p2 id = "numerical-sidetimer-desert-18">900</p2>
      </div> 
	    
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
      All: <input type = "Checkbox" id = "desert-all-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events, 'all');">
      <br>
      Choya: <input type = "Checkbox" id = "desert-1-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Sand Shark: <input type = "Checkbox" id = "desert-2-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Sand Eel: <input type = "Checkbox" id = "desert-3-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Yumma Escort: <input type = "Checkbox" id = "desert-4-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Yumug Escort: <input type = "Checkbox" id = "desert-5-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Asho Escort: <input type = "Checkbox" id = "desert-7-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Ogre Escort: <input type = "Checkbox" id = "desert-9-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Dammer Escort: <input type = "Checkbox" id = "desert-10-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Forged Tormentor: <input type = "Checkbox" id = "desert-11-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Hostages: <input type = "Checkbox" id = "desert-11-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Tosun Escort: <input type = "Checkbox" id = "desert-11-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Branded Waves: <input type = "Checkbox" id = "desert-11-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>
      Drogg: <input type = "Checkbox" id = "desert-11-checkbox" checked = "true" onclick = "checkboxTimer(this, desert.events);">
      <br>

	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
			<div class = "small-description">
        <details>
          <summary><b> How to: </b></summary>
				  There are 2 events that are not displayed on the page, but are considered to be good events to do. It's the Mordant Cresent (near the Hostages event) and Awakened Defense (at the first waypoint). These events go hand-in-hand and won't start until the other event is completed. They cannot occur at the same time.  

          <br><br>
          <b> Bounties (in rough order) from great to good: </b>
          <br> - Legendary Forged
          <br> - Awakened Occultist
          <br> - Snag Seizeclaw
          <br> - Cracking Brandspark
          <br> - Balthazar's Lost
        </details>
			</div>
			
		</div>

		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

  		<!-- 
  			HTML notation: 
  			<div class = "[map]-[event #]-box">
  			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
  			<br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-[map]-[event #]-start">
  			<input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
   			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
  		-->

      <div class = "event-box" id = "desert-1-box">
        <h1> Choya </h1>
        <br><p1 id = "timer-desert-1">16:30</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-1-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-1-reset">
        <br><p2 id = "timer-desert-1-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-2-box">
        <h1> Sand Shark </h1>
        <br><p1 id = "timer-desert-2">17:15</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-2-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-2-reset">
        <br><p2 id = "timer-desert-2-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-3-box">
        <h1> Sand Eel </h1>
        <br><p1 id = "timer-desert-3">18:15</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-3-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-3-reset">
        <br><p2 id = "timer-desert-3-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-4-box">
        <h1> Yumma Escort </h1>
        <br><p1 id = "timer-desert-4">17:45</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-4-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-4-reset">
        <br><p2 id = "timer-desert-4-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-5-box">
        <h1> Yumug Escort </h1>
        <br><p1 id = "timer-desert-5">20:45</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-5-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-5-reset">
        <br><p2 id = "timer-desert-5-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-6-box">
        <h1> Nayim Chain </h1>
        <br><p1 id = "timer-desert-6">46:30</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-6-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-6-reset">
        <br><p2 id = "timer-desert-6-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-7-box">
        <h1> Asho Escort </h1>
        <br><p1 id = "timer-desert-7">11:15</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-7-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-7-reset">
        <br><p2 id = "timer-desert-7-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-8-box">
        <h1> Mordant Crescent </h1>
        <br><p1 id = "timer-desert-8">51:30</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-8-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-8-reset">
        <br><p2 id = "timer-desert-8-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-9-box">
        <h1> Ogre Escort </h1>
        <br><p1 id = "timer-desert-9">6:15</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-9-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-9-reset">
        <br><p2 id = "timer-desert-9-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-10-box">
        <h1> Dameer Escort </h1>
        <br><p1 id = "timer-desert-10">17:30</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-10-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-10-reset">
        <br><p2 id = "timer-desert-10-text"></p2>  
      </div> 

      <div class = "event-box" id = "desert-11-box">
        <h1> Forged Tormentor </h1>
        <br><p1 id = "timer-desert-11">30:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-11-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-11-reset">
        <br><p2 id = "timer-desert-11-text"></p2>  
      </div>

      <div class = "event-box" id = "desert-12-box">
        <h1> Hostages </h1>
        <br><p1 id = "timer-desert-12">7:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-12-start">
        <input type = "button" value = "i" onmouseover="showElement('desert-info-box-1'); " onmouseout = "hideElement('desert-info-box-1'); ">  
      </div>

      <div class = "event-box" id = "desert-13-box">
        <h1> Tosun Escort </h1>
        <br><p1 id = "timer-desert-13">13:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-13-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-13-reset"> 
      </div>

      <div class = "event-box" id = "desert-14-box">
        <h1> Branded Waves </h1>
        <br><p1 id = "timer-desert-14">7:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-14-start">
        <input type = "button" value = "i" onmouseover="showElement('desert-info-box-2'); " onmouseout = "hideElement('desert-info-box-2'); ">  
      </div>

      <div class = "event-box" id = "desert-15-box">
        <h1> Drogg </h1>
        <br><p1 id = "timer-desert-15">12:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-15-start">
        <input type = "button" value = "i" onmouseover="showElement('desert-info-box-3'); " onmouseout = "hideElement('desert-info-box-3'); ">  
      </div>

      <div class = "event-box" id = "desert-16-box">
        <h1> (B) Awakened Occultist </h1>
        <br><p1 id = "timer-desert-16">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-16-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-16-reset">
      </div>

      <div class = "event-box" id = "desert-17-box">
        <h1> (B) Snag Seizeclaw </h1>
        <br><p1 id = "timer-desert-17">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-17-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-17-reset">
      </div>

      <div class = "event-box" id = "desert-18-box">
        <h1> (B) Cracking Brandspark </h1>
        <br><p1 id = "timer-desert-18">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-18-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-18-reset">
      </div>

      <div class = "event-box" id = "desert-19-box">
        <h1> (B) Bathazar's Lost </h1>
        <br><p1 id = "timer-desert-19">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this, desert.events);" value = "Start" id = "timer-desert-19-start">
        <input type = "button" onclick = "reset(this, desert.events);" value = "&#8635;" id = "timer-desert-19-reset">
      </div>

      <!-- Event info --> 
      <!-- Hostages -->
      <div id = "desert-info-box-1" class = "event-info">
        Start this timer only after completing the Mordant Cresent event. 
      </div>
      <!-- Branded Waves -->
      <div id = "desert-info-box-2" class = "event-info">
        Start this timer only after completing the Drogg gather + escort event chain. 
      </div>
      <!-- Drogg -->
      <div id = "desert-info-box-3" class = "event-info">
        Start this timer only after completing the Branded Waves event. 
      </div>
    




       		<!-- Map -->
			<img class = "map-timer-map" title = "desert Riverlands" src = "../images/desert-highlands/map.jpg"> 

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
