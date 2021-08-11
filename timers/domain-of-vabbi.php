<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Domain of Vabbi</title>
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
      <h1>Domain of Vabbi</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
		</div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

      <div id = "vabbi-forged-sidebox" class = "meta-sidebox" >
        <h1 id = "side-forged-name"> </h1>
        <p1 id = "sidetimer-vabbi-forged"></p1>
        <p2 id = "numerical-sidetimer-vabbi-forged"></p2>
      </div>

      <div id = "vabbi-serpent-sidebox" class = "meta-sidebox" >
        <h1 id = "side-serpent-name"> </h1>
        <p1 id = "sidetimer-vabbi-serpent"></p1>
        <p2 id = "numerical-sidetimer-vabbi-serpent"></p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-1-sidebox">
        <h1> Forged Officer </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-1-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-1-reset">
        <p1 id = "sidetimer-vabbi-1">6:45</p1>
        <p2 id = "numerical-sidetimer-vabbi-1">405</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-2-sidebox">
        <h1> Statues </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-2-reset">
        <p1 id = "sidetimer-vabbi-2">24:15</p1>
        <p2 id = "numerical-sidetimer-vabbi-2">1455</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-3-sidebox" onmouseover="showElement('vabbi-info-1'); show_multiple_elements(3,10,'vabbi-img-','opacity'); " onmouseout = "hideElement('vabbi-info-1'); hide_multiple_elements(3,10,'vabbi-img-','opacity');">
        <h1> Branded Assaults</h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-3-reset">
        <p1 id = "sidetimer-vabbi-3">7:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-3">420</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-4-sidebox">
        <h1> Show </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-4-reset">
        <p1 id = "sidetimer-vabbi-4">10:45</p1>
        <p2 id = "numerical-sidetimer-vabbi-4">645</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-5-sidebox">
        <h1> Legendary Forged </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-5-reset">
        <p1 id = "sidetimer-vabbi-5">30:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-5">1800</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-6-sidebox">
        <h1> Forged Wildhound </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-6-reset">
        <p1 id = "sidetimer-vabbi-6">15:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-6">900</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-9-sidebox">
        <h1> Forged Warmonger </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-9-reset">
        <p1 id = "sidetimer-vabbi-9">15:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-9">900</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-10-sidebox">
        <h1> Forged Lurker </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-10-reset">
        <p1 id = "sidetimer-vabbi-10">15:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-10">900</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-11-sidebox">
        <h1> Forged Marauder </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-11-reset">
        <p1 id = "sidetimer-vabbi-11">15:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-11">900</p2>
      </div>

      <div class = "event-sidebox" id = "vabbi-12-sidebox">
        <h1> Forged Brutalizer </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-12-reset">
        <p1 id = "sidetimer-vabbi-12">15:00</p1>
        <p2 id = "numerical-sidetimer-vabbi-12">900</p2>
      </div>

      <!--
      <div class = "event-sidebox" id = "vabbi-7-sidebox">
        <h1> Asho Escort </h1>
        <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-vabbi-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-vabbi-7-reset">
        <p1 id = "sidetimer-vabbi-7">17:30</p1>
        <p2 id = "numerical-sidetimer-vabbi-7">1050</p2>
      </div> -->
	    
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box" style = "min-width: 180px;">
      Forged Officer: <input type = "Checkbox" id = "vabbi-1-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'vabbi-1-sidebox') ">
      <br>
      Statues: <input type = "Checkbox" id = "vabbi-2-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'vabbi-2-sidebox') ">
      <br>
      Branded Assaults: <input type = "Checkbox" id = "vabbi-3-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'vabbi-3-sidebox') ">
      <br>
      Show: <input type = "Checkbox" id = "vabbi-4-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'vabbi-4-sidebox') ">
      <br><br>
      <b> Bounties </b>
      <br><br>
      Legendary Forged: <input type = "Checkbox" id = "vabbi-5-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'vabbi-5-sidebox') ">
      <br>
      Forged Wildhound: <input type = "Checkbox" id = "vabbi-6-checkbox" checked = "true" onclick = "checkbox_Timers(this, 'vabbi-6-sidebox') ">
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				Particular Forged bounties are included as timers for this. While they are not regular events, these bounties should be completed while on the rotation of a train to fill time gaps</b>.  
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

      <div class = "event-box" id = "vabbi-1-box">
        <h1> Forged Officer </h1>
        <br><p1 id = "timer-vabbi-1">6:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-1-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-1-reset">
        <br><p2 id = "timer-vabbi-1-text"></p2>  
      </div> 

      <div class = "event-box" id = "vabbi-2-box">
        <h1> Statues </h1>
        <br><p1 id = "timer-vabbi-2">24:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-2-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-2-reset">
        <br><p2 id = "timer-vabbi-2-text"></p2>  
      </div> 

      <div class = "event-box" id = "vabbi-3-box">
        <h1> Branded Assaults </h1>
        <br><p1 id = "timer-vabbi-3">7:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-3-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-3-reset">
        <input type = "button" value = "i" onmouseover="showElement('vabbi-info-1'); show_multiple_elements(3,10,'vabbi-img-','opacity'); " onmouseout = "hideElement('vabbi-info-1'); hide_multiple_elements(3,10,'vabbi-img-','opacity');"> 
      </div> 

      <div class = "event-box" id = "vabbi-4-box">
        <h1> Show </h1>
        <br><p1 id = "timer-vabbi-4">10:45</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-4-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-4-reset">
        <br><p2 id = "timer-vabbi-4-text"></p2>  
      </div> 

      <div class = "event-box" id = "vabbi-5-box">
        <h1> Legendary Forged </h1>
        <br><p1 id = "timer-vabbi-5">30:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-5-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-5-reset">
        <br><p2 id = "timer-vabbi-5-text"></p2>  
      </div>

      <div class = "event-box" id = "vabbi-6-box">
        <h1> Forged Wildhound </h1>
        <br><p1 id = "timer-vabbi-6">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-6-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-6-reset">
        <br><p2 id = "timer-vabbi-6-text"></p2>  
      </div>

      <div class = "event-box" id = "vabbi-9-box">
        <h1> Forged Warmonger </h1>
        <br><p1 id = "timer-vabbi-9">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-9-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-9-reset">
        <br><p2 id = "timer-vabbi-9-text"></p2>  
      </div>

      <div class = "event-box" id = "vabbi-10-box">
        <h1> Forged Lurker </h1>
        <br><p1 id = "timer-vabbi-10">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-10-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-10-reset">
        <br><p2 id = "timer-vabbi-10-text"></p2>  
      </div>

      <div class = "event-box" id = "vabbi-11-box">
        <h1> Forged Marauder </h1>
        <br><p1 id = "timer-vabbi-11">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-11-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-11-reset">
        <br><p2 id = "timer-vabbi-11-text"></p2>  
      </div>

      <div class = "event-box" id = "vabbi-12-box">
        <h1> Forged Bruatalizer </h1>
        <br><p1 id = "timer-vabbi-12">15:00</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-12-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-12-reset">
        <br><p2 id = "timer-vabbi-12-text"></p2>  
      </div>
      
      <!--
      <div class = "event-box" id = "vabbi-7-box">
        <h1> Asho Escort </h1>
        <br><p1 id = "timer-vabbi-7">11:15</p1>
        <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-vabbi-7-start">
        <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-vabbi-7-reset">
        <br><p2 id = "timer-vabbi-7-text"></p2>  
      </div> -->

      <!-- Forged with Fire -->
      <div id = "vabbi-arrow-1" class="meta-arrow">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div id = "vabbi-meta-info-1" class = 'meta-info'>
        <h1> Forged with Fire</h1>
      </div>

      <div id = "vabbi-img-1" class = "event-red-circle">
        <img src = "../images/assets/event_red_circle.png" style = "width: 200%;">
      </div>

      <div id = "vabbi-img-2" class = "event-red-boss" style = "opacity: 1;">
        <img src = "../images/assets/event_red_boss.png">
      </div>

      <!-- Serpents' Ire -->

      <div id = "vabbi-shape-1" class = "vabbi-rectangle">
      </div>

      <div id = "vabbi-arrow-2" class="meta-arrow">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div id = "vabbi-arrow-3" class="meta-arrow">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div id = "vabbi-arrow-4" class="meta-arrow">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div id = "vabbi-meta-info-2" class = 'meta-info'>
        <h1> Serpents' Ire</h1>
      </div>

      <!-- Other events --> 

      <!-- Branded Assaults -->
      <div id = "vabbi-img-3" class = "event-image">
        <img src = "../images/assets/event_circle.png">
      </div>

      <div id = "vabbi-img-4" class = "event-image">
        <img src = "../images/assets/event_circle.png">
      </div>

      <div id = "vabbi-img-5" class = "event-image">
        <img src = "../images/assets/event_circle.png">
      </div>

      <div id = "vabbi-img-6" class = "event-image">
        <img src = "../images/assets/event_circle.png">
      </div>

      <div id = "vabbi-img-7" class = "event-image">
        <img src = "../images/assets/event_cross_swords.png">
      </div>

      <div id = "vabbi-img-8" class = "event-image">
        <img src = "../images/assets/event_cross_swords.png">
      </div>

      <div id = "vabbi-img-9" class = "event-image">
        <img src = "../images/assets/event_cross_swords.png">
      </div>

      <div id = "vabbi-img-10" class = "event-image">
        <img src = "../images/assets/event_cross_swords.png">
      </div>

      <div id = "vabbi-info-1" class = "event-info">
        These 4 events are related in that they share the same respawn timer. They all won't respawn until all 4 are compeleted. 

        <br><br>
        Clicking the &#8635; after an event is good practice in case you don't know if the others have been completed or not.
      </div>
    
       		<!-- Map -->
			<img class = "map-timer-map" title = "Domain of Vabbi" src = "../images/domain-of-vabbi/map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->
	</div> <!-- End of page-box -->

  <div class = "bottom-sticky">
    <div id = "forged-progress-box" class = "progress-box">
      <h1 id = "forged-progress-text" class = "progress-text"> </h1>
      <div id = "forged-progress-bar" class = "progress-bar"></div>
    </div>

    <div id = "serpent-progress-box" class = "progress-box">
      <h1 id = "serpent-progress-text" class = "progress-text"> </h1>
      <div id = "serpent-progress-bar" class = "progress-bar"></div>
    </div>

    <div class = 'current-status-box'>
      <h1 id = "vabbi-current-status"></h1>
    </div>
  </div>

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/domain-of-vabbi.js?v=<?php echo $date;?>"></script>
</body>
</html>
