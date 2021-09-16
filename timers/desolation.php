<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Desolation </title>
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
      <h1>Desolation</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">

        <div id = "desolation-1-sidebox" class = "event-sidebox" >
	      <h1> Caravan </h1>
	      <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-1-start">
	      <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-1-reset">
	      <p1 id = "sidetimer-desolation-1">10:00</p1>
	      <p2 id = "numerical-sidetimer-desolation-1">600</p2>
	    </div>

	    <div id = "desolation-2-sidebox" class = "event-sidebox" >
	      <h1> Lost Mount </h1>
	      <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-2-start">
	      <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-2-reset">
	      <p1 id = "sidetimer-desolation-2">11:15</p1>
	      <p2 id = "numerical-sidetimer-desolation-2">675</p2>
	    </div>

	    <div id = "desolation-3-sidebox" class = "event-sidebox" >
	      <h1> Redeemer Kossan </h1>
	      <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-3-start">
	      <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-3-reset">
	      <p1 id = "sidetimer-desolation-3">8:45</p1>
	      <p2 id = "numerical-sidetimer-desolation-3">525</p2>
	    </div>

	    <div id = "desolation-4-sidebox" class = "event-sidebox" >
	      <h1> Raiding Party (W1) </h1>
	      <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-4-start">
	      <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-4-reset">
	      <p1 id = "sidetimer-desolation-4">6:00</p1>
	      <p2 id = "numerical-sidetimer-desolation-4">360</p2>
	    </div>

      <div id = "desolation-5-sidebox" class = "event-sidebox" >
        <h1> Raiding Party (W2) </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-5-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-5-reset">
        <p1 id = "sidetimer-desolation-5">6:00</p1>
        <p2 id = "numerical-sidetimer-desolation-5">360</p2>
      </div>

      <div id = "desolation-6-sidebox" class = "event-sidebox" >
        <h1> Raiding Party (W3) </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-6-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-6-reset">
        <p1 id = "sidetimer-desolation-6">6:00</p1>
        <p2 id = "numerical-sidetimer-desolation-6">360</p2>
      </div>

      <div id = "desolation-7-sidebox" class = "event-sidebox" >
        <h1> Raiding Party (W4) </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-7-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-7-reset">
        <p1 id = "sidetimer-desolation-7">6:00</p1>
        <p2 id = "numerical-sidetimer-desolation-7">360</p2>
      </div>

      <div id = "desolation-8-sidebox" class = "event-sidebox" >
        <h1> Ghost Kids </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-8-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-8-reset">
        <p1 id = "sidetimer-desolation-8">16:00</p1>
        <p2 id = "numerical-sidetimer-desolation-8">960</p2>
      </div>

      <div id = "desolation-9-sidebox" class = "event-sidebox" >
        <h1> Champ Ooze </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-9-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-9-reset">
        <p1 id = "sidetimer-desolation-9">9:30</p1>
        <p2 id = "numerical-sidetimer-desolation-9">570</p2>
      </div>

      <div id = "desolation-10-sidebox" class = "event-sidebox" >
        <h1> Ghost Eaters </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-10-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-10-reset">
        <p1 id = "sidetimer-desolation-10">12:00</p1>
        <p2 id = "numerical-sidetimer-desolation-10">720</p2>
      </div>

      <div id = "desolation-11-sidebox" class = "event-sidebox" >
        <h1> Forged Officer </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-11-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-11-reset">
        <p1 id = "sidetimer-desolation-11">12:30</p1>
        <p2 id = "numerical-sidetimer-desolation-11">750</p2>
      </div>

      <div id = "desolation-12-sidebox" class = "event-sidebox" >
        <h1> Raiding Party (W5) </h1>
        <input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "sidetimer-desolation-12-start">
        <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "sidetimer-desolation-12-reset">
        <p1 id = "sidetimer-desolation-12">6:00</p1>
        <p2 id = "numerical-sidetimer-desolation-12">360</p2>
      </div>
	    	     
	    
	  </div> <!-- End of left side box --> 

	<div id = "checkboxes" class = "checkboxes">
    All: <input type = "Checkbox" id = "desolation-all-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events, 'all');">
    <br>
    Caravan: <input type = "Checkbox" id = "desolation-1-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Lost Mount: <input type = "Checkbox" id = "desolation-2-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Redeemer Kossan: <input type = "Checkbox" id = "desolation-3-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Raiding Party W1: <input type = "Checkbox" id = "desolation-4-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Raiding Party W2: <input type = "Checkbox" id = "desolation-5-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Raiding Party W3: <input type = "Checkbox" id = "desolation-6-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Raiding Party W4: <input type = "Checkbox" id = "desolation-7-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Raiding Party W5: <input type = "Checkbox" id = "desolation-12-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Ghost Kids: <input type = "Checkbox" id = "desolation-8-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Champ Ooze: <input type = "Checkbox" id = "desolation-9-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Ghost Eaters: <input type = "Checkbox" id = "desolation-10-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">
    <br>
    Forged Officer: <input type = "Checkbox" id = "desolation-11-checkbox" checked = "true" onclick = "checkboxTimer(this, desolation.events);">

	</div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

      		<!-- 
      			HTML notation: 
      			<div class = "[map]-[event #]-box">
      			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
      			<br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-[map]-[event #]-start">
      			<input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
      		-->

      		<div class = "event-box" id = "desolation-1-box">
      			<h1> Caravan </h1>
       	 		<br><p1 id = "timer-desolation-1">10:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-1-start">
       			<input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-1-reset">
       			<br><p2 id = "timer-desolation-1-text"></p2>	
       		</div>

       		<div class = "event-box" id = "desolation-2-box">
      			<h1> Lost Mount </h1>
       	 		<br><p1 id = "timer-desolation-2">11:15</p1>
        		<br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-2-start">
       			<input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-2-reset">
       			<br><p2 id = "timer-desolation-2-text"></p2>	
       		</div>

       		<div class = "event-box" id = "desolation-3-box">
      			<h1> Redeemer Kossan </h1>
       	 		<br><p1 id = "timer-desolation-3">8:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-3-start">
       			<input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-3-reset">
       			<br><p2 id = "timer-desolation-3-text"></p2>	
       		</div>

       		<div class = "event-box" id = "desolation-4-box">
      			<h1> Raiding Party (W1) </h1>
       	 		<br><p1 id = "timer-desolation-4">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-4-start">
       			<input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-4-reset">
       			<br><p2 id = "timer-desolation-4-text"></p2>	
       		</div>

          <div class = "event-box" id = "desolation-5-box">
            <h1> Raiding Party (W2) </h1>
            <br><p1 id = "timer-desolation-5">6:00</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-5-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-5-reset">
            <br><p2 id = "timer-desolation-5-text"></p2> 
          </div>

          <div class = "event-box" id = "desolation-6-box">
            <h1> Raiding Party (W3) </h1>
            <br><p1 id = "timer-desolation-6">6:00</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-6-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-6-reset">
            <br><p2 id = "timer-desolation-6-text"></p2> 
          </div> 

          <div class = "event-box" id = "desolation-7-box">
            <h1> Raiding Party (W4) </h1>
            <br><p1 id = "timer-desolation-7">6:00</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-7-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-7-reset">
            <br><p2 id = "timer-desolation-7-text"></p2> 
          </div> 

          <div class = "event-box" id = "desolation-8-box">
            <h1> Ghost Kids </h1>
            <br><p1 id = "timer-desolation-8">16:00</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-8-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-8-reset">
            <br><p2 id = "timer-desolation-8-text"></p2> 
          </div> 

          <div class = "event-box" id = "desolation-9-box">
            <h1> Champ Ooze </h1>
            <br><p1 id = "timer-desolation-9">9:30</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-9-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-9-reset">
            <br><p2 id = "timer-desolation-9-text"></p2> 
          </div> 

          <div class = "event-box" id = "desolation-10-box">
            <h1> Ghost Eaters </h1>
            <br><p1 id = "timer-desolation-10">12:00</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-10-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-10-reset">
            <br><p2 id = "timer-desolation-10-text"></p2> 
          </div> 

          <div class = "event-box" id = "desolation-11-box">
            <h1> Forged Officer </h1>
            <br><p1 id = "timer-desolation-11">12:30</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-11-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-11-reset">
            <br><p2 id = "timer-desolation-11-text"></p2> 
          </div> 

          <div class = "event-box" id = "desolation-12-box">
            <h1> Raiding Party (W5) </h1>
            <br><p1 id = "timer-desolation-12">6:00</p1>
            <br><input type = "button" onclick = "start_stop(this, desolation.events);" value = "Start" id = "timer-desolation-12-start">
            <input type = "button" onclick = "reset(this, desolation.events);" value = "&#8635;" id = "timer-desolation-12-reset">
            <br><p2 id = "timer-desolation-12-text"></p2> 
          </div> 

          <!-- Event Circles w/ animation--> 
          <!-- Maw -->
          <div id = "desolation-img-1" class = "desolation-img-1">
            <img src = "../images/assets/event_circle.png" >
          </div>

          <div id = "desolation-img-2" class = "desolation-img-2">
            <img src = "../images/assets/event_circle.png" >
          </div>

          <div id = "desolation-img-3" class = "desolation-img-3">
            <img src = "../images/assets/event_circle.png">
          </div>

          <!-- Junundu -->
          <div id = "desolation-img-4" class = "desolation-img-4">
            <img src = "../images/assets/event_circle.png">
          </div>

          <div id = "desolation-img-5" class = "desolation-img-5">
            <img src = "../images/assets/event_circle.png">
          </div>

          <div id = "desolation-img-6" class = "desolation-img-6">
            <img src = "../images/assets/event_circle.png" >
          </div>

          <!-- Event swords w/ animation --> 
          <!-- Maw --> 
          <div id = "desolation-img-7" class = "desolation-img-7">
            <img src = "../images/assets/event_cross_swords.png" >
          </div>

          <div id = "desolation-img-8" class = "desolation-img-8">
            <img src = "../images/assets/event_cross_swords.png" >
          </div>

          <div id = "desolation-img-9" class = "desolation-img-9">
            <img src = "../images/assets/event_cross_swords.png" >
          </div>

          <!-- Event gathering w/ animation -->
          <!-- Junundu -->
          <div id = "desolation-img-10" class = "desolation-img-10">
            <img src = "../images/assets/event_collect.png" >
          </div>

          <div id = "desolation-img-11" class = "desolation-img-11">
            <img src = "../images/assets/event_collect.png" >
          </div>

          <div id = "desolation-img-12" class = "desolation-img-12">
            <img src = "../images/assets/event_collect.png" >
          </div>

          <!-- W/O animation for rest --> 
          <!-- Event Circles--> 
          <!-- Maw -->
          <div id = "desolation-img-13" class = "desolation-img-13">
            <img src = "../images/assets/event_circle.png" >
          </div>

          <div id = "desolation-img-14" class = "desolation-img-14">
            <img src = "../images/assets/event_circle.png" >
          </div>

          <div id = "desolation-img-15" class = "desolation-img-15">
            <img src = "../images/assets/event_circle.png">
          </div>

          <!-- Junundu -->
          <!-- Circles -->
          <div id = "desolation-img-16" class = "desolation-img-16">
            <img src = "../images/assets/event_circle.png">
          </div>

          <div id = "desolation-img-17" class = "desolation-img-17">
            <img src = "../images/assets/event_circle.png">
          </div>

          <div id = "desolation-img-18" class = "desolation-img-18">
            <img src = "../images/assets/event_circle.png" >
          </div>

          <!-- Event swords --> 
          <!-- Maw --> 
          <div id = "desolation-img-19" class = "desolation-img-19">
            <img src = "../images/assets/event_cross_swords.png" >
          </div>

          <div id = "desolation-img-20" class = "desolation-img-20">
            <img src = "../images/assets/event_cross_swords.png" >
          </div>

          <div id = "desolation-img-21" class = "desolation-img-21">
            <img src = "../images/assets/event_cross_swords.png" >
          </div>

          <!-- Event gathering -->
          <!-- Junundu -->
          <div id = "desolation-img-22" class = "desolation-img-22">
            <img src = "../images/assets/event_collect.png" >
          </div>

          <div id = "desolation-img-23" class = "desolation-img-23">
            <img src = "../images/assets/event_collect.png" >
          </div>

          <div id = "desolation-img-24" class = "desolation-img-24">
            <img src = "../images/assets/event_collect.png" >
          </div>

          <!-- Event escorts --> 
          <!-- Event defense --> 
          <!-- Maw --> 
          <div id = "desolation-img-25" class = "desolation-img-25">
            <img src = "../images/assets/event_shield.png" >
          </div>

          <div id = "desolation-img-26" class = "desolation-img-26">
            <img src = "../images/assets/event_shield.png" >
          </div>

          <div id = "desolation-img-27" class = "desolation-img-27">
            <img src = "../images/assets/event_shield.png" >
          </div>

          <!-- Boss symbol --> 
          <div id = "desolation-img-28" class = "desolation-img-28">
            <img src = "../images/assets/event_red_boss.png" >
          </div>
          <!-- Red circle --> 
          <div id = "desolation-img-29" class = "desolation-img-29">
            <img src = "../images/assets/event_red_circle.png" >
          </div>

          <!-- Junundu --> 
          <!-- Red cross swords --> 
          <!-- Forged camp -->
          <div id = "desolation-img-30" class = "desolation-img-30">
            <img src = "../images/assets/event_red_cross_swords.png" >
          </div>
          <!-- Awakened Camp -->
          <div id = "desolation-img-31" class = "desolation-img-31">
            <img src = "../images/assets/event_red_cross_swords.png" >
          </div>
          <!-- Red circles --> 
          <!-- Forged camp -->
          <div id = "desolation-img-32" class = "desolation-img-32">
            <img src = "../images/assets/event_red_circle.png" >
          </div>
          <!-- Awakend Camp --> 
          <div id = "desolation-img-33" class = "desolation-img-33">
            <img src = "../images/assets/event_red_circle.png" >
          </div>

          <!-- Arrows --> 
          <!-- Maw W -->
          <div id = "desolation-arrow-1" class="desolation-arrow-1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- Maw N -->
          <div id = "desolation-arrow-2" class="desolation-arrow-2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- Maw S --> 
          <div id = "desolation-arrow-3" class="desolation-arrow-3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Meta messages --> 
          <div class = "desolation-info-box-1">
            <img src = "../images/assets/info.png" style = "width: 150%;">
          </div>
          <!-- Maw --> 
          <div class = 'desolation-info-1' style = "width: 10%;">
            <h1 id = "desolation-info-1"> Maw of Torment </h1>
          </div>

       		<!-- Map -->
			<img class = "map-timer-map" title = "desolation Basin" src = "../images/desolation/map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <!-- Progress bars -->
  <div class = "bottom-sticky">
    <div id = "maw-progress-box" class = "progress-box">
        <h1 id = "maw-progress-text" class = "progress-text"> </h1>
        <div id = "maw-progress-bar" class = "progress-bar"></div>
      </div>

      <div id = "jun-progress-box" class = "progress-box">
        <h1 id = "jun-progress-text" class = "progress-text"> </h1>
        <div id = "jun-progress-bar" class = "progress-bar"></div>
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
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/desolation.js?v=<?php echo $date;?>"></script>
</body>
</html>
