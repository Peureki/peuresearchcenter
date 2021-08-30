<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Auric Basin</title>
  <script type = "text/javascript" src = "./eventClass.js"></script>
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
      <h1>Auric Basin</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
  </div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

      <div id = "auric-meta-sidebox" class = "meta-sidebox" >
        <h1 id = "side-meta-name"> </h1>
        <p1 id = "sidetimer-auric-meta"></p1>
        <p2 id = "numerical-sidetimer-auric-meta"></p2>
      </div>

      <div id = "auric-1-sidebox" class = "event-sidebox" >
	      <h1> Vinetooth (N) </h1>
	      <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-1-start">
	      <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-1-reset">
	      <p1 id = "sidetimer-auric-1">9:30</p1>
	      <p2 id = "numerical-sidetimer-auric-1">570</p2>
	    </div>

	    <div id = "auric-2-sidebox" class = "event-sidebox" >
	      <h1> Vinetooth (E) </h1>
	      <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-2-start">
	      <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-2-reset">
	      <p1 id = "sidetimer-auric-2">9:30</p1>
	      <p2 id = "numerical-sidetimer-auric-2">570</p2>
	    </div>

	    <div id = "auric-3-sidebox" class = "event-sidebox" >
	      <h1> Vinetooth (S) </h1>
	      <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-3-start">
	      <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-3-reset">
	      <p1 id = "sidetimer-auric-3">9:30</p1>
	      <p2 id = "numerical-sidetimer-auric-3">570</p2>
	    </div>

	    <div id = "auric-4-sidebox" class = "event-sidebox" >
	      <h1> Vinetooth (W) </h1>
	      <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-4-start">
	      <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-4-reset">
	      <p1 id = "sidetimer-auric-4">9:30</p1>
	      <p2 id = "numerical-sidetimer-auric-4">570</p2>
	    </div>

      <div id = "auric-5-sidebox" class = "event-sidebox" >
        <h1> Priory Escort (SE) </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-5-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-5-reset">
        <p1 id = "sidetimer-auric-5">6:30</p1>
        <p2 id = "numerical-sidetimer-auric-5">390</p2>
      </div>

      <div id = "auric-6-sidebox" class = "event-sidebox" >
        <h1> Priory Escort (W) </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-6-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-6-reset">
        <p1 id = "sidetimer-auric-6">6:30</p1>
        <p2 id = "numerical-sidetimer-auric-6">390</p2>
      </div>

      <div id = "auric-7-sidebox" class = "event-sidebox" >
        <h1> Balthazar HP </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-7-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-7-reset">
        <p1 id = "sidetimer-auric-7">8:00</p1>
        <p2 id = "numerical-sidetimer-auric-7">480</p2>
      </div>

      <div id = "auric-8-sidebox" class = "event-sidebox" >
        <h1> Blighted Saplings </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-8-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-8-reset">
        <p1 id = "sidetimer-auric-8">6:30</p1>
        <p2 id = "numerical-sidetimer-auric-8">390</p2>
      </div>

      <div id = "auric-9-sidebox" class = "event-sidebox" >
        <h1> Wyvern </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-9-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-9-reset">
        <p1 id = "sidetimer-auric-9">14:00</p1>
        <p2 id = "numerical-sidetimer-auric-9">840</p2>
      </div>

      <div id = "auric-10-sidebox" class = "event-sidebox" >
        <h1> Ooze </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-10-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-10-reset">
        <p1 id = "sidetimer-auric-10">13:00</p1>
        <p2 id = "numerical-sidetimer-auric-10">780</p2>
      </div>

      <div id = "auric-11-sidebox" class = "event-sidebox" >
        <h1> Tendril </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-11-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-11-reset">
        <p1 id = "sidetimer-auric-11">11:30</p1>
        <p2 id = "numerical-sidetimer-auric-11">690</p2>
      </div>

      <div id = "auric-12-sidebox" class = "event-sidebox" >
        <h1> Priory Escort (NE) </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-12-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-12-reset">
        <p1 id = "sidetimer-auric-12">6:30</p1>
        <p2 id = "numerical-sidetimer-auric-12">390</p2>
      </div>

      <div id = "auric-13-sidebox" class = "event-sidebox" >
        <h1> Treasure Mushroom </h1>
        <input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "sidetimer-auric-13-start">
        <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "sidetimer-auric-13-reset">
        <p1 id = "sidetimer-auric-13">9:45</p1>
        <p2 id = "numerical-sidetimer-auric-13">585</p2>
      </div>
	    	     
	    
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box-overflow" style = "min-width: 180px;">
      <b> Completed Pylons? </b>
      <br><br>
      South Pylon: <input type = "Checkbox" id = "auric-post-s-pylon" onclick = "auric_Post_S_Pylon(this);"> 
      <br>
      Southeast Pylon: <input type = "Checkbox" id = "auric-post-se-pylon" onclick = "auric_Post_SE_Pylon(this);">
      <br>
      West Pylon: <input type = "Checkbox" id = "auric-post-w-pylon" onclick = "auric_Post_W_Pylon(this);"> 
      <br>
      North Pylon: <input type = "Checkbox" id = "auric-post-n-pylon" onclick = "auric_Post_N_Pylon(this);"> 

      <br><br>
      <b> Vinetooths </b>
      <br><br>
      Vinetooth N: <input type = "Checkbox" id = "auric-1-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events);">
      <br>
      Vinetooth E: <input type = "Checkbox" id = "auric-2-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Vinetooth S: <input type = "Checkbox" id = "auric-3-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Vinetooth W: <input type = "Checkbox" id = "auric-4-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      
      <br><br>
      <b> Priory Escorts </b>
      <br><br>
      Priory Escort NE: <input type = "Checkbox" id = "auric-12-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Priory Escort SE: <input type = "Checkbox" id = "auric-5-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Priory Escort W: <input type = "Checkbox" id = "auric-6-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">

      <br><br>
      <b> Post Pylon Events/HP </b>
      <br><br>
      Bathlazar HP: <input type = "Checkbox" id = "auric-7-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Blighted Sapling: <input type = "Checkbox" id = "auric-8-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Wyvern: <input type = "Checkbox" id = "auric-9-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Ooze: <input type = "Checkbox" id = "auric-10-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">
      <br>
      Tendril: <input type = "Checkbox" id = "auric-11-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">

      <br><br>
      <b> Other </b>
      <br><br>
      TM: <input type = "Checkbox" id = "auric-13-checkbox" checked = "true" onclick = "checkboxTimer(this, auric.events)">

      
      
	 </div>

	<!-- Main box -->
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
		<div class = "map-timer-box">

      		<!-- 
      			HTML notation: 
      			<div class = "[map]-[event #]-box">
      			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
      			<br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-[map]-[event #]-start">
      			<input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
      		-->

      		<div class = "event-box" id = "auric-1-box">
      			<h1> Vinetooth (N) </h1>
       	 		<br><p1 id = "timer-auric-1">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-1-start">
       			<input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-1-reset">	
       		</div>

       		<div class = "event-box" id = "auric-2-box">
      			<h1> Vinetooth (E)</h1>
       	 		<br><p1 id = "timer-auric-2">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-2-start">
       			<input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-2-reset">	
       		</div>

       		<div class = "event-box" id = "auric-3-box">
      			<h1> Vinetooth (S) </h1>
       	 		<br><p1 id = "timer-auric-3">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-3-start">
       			<input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-3-reset">	
       		</div>

       		<div class = "event-box" id = "auric-4-box">
      			<h1> Vinetooth (W) </h1>
       	 		<br><p1 id = "timer-auric-4">9:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-4-start">
       			<input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-4-reset">	
       		</div>

          <div class = "event-box" id = "auric-5-box">
            <h1> Priory Escort (SE) </h1>
            <br><p1 id = "timer-auric-5">6:30</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-5-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-5-reset"> 
          </div>

          <div class = "event-box" id = "auric-6-box">
            <h1> Priory Escort (W) </h1>
            <br><p1 id = "timer-auric-6">6:30</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-6-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-6-reset"> 
          </div>

          <div class = "event-box" id = "auric-7-box">
            <h1> Balthazar HP </h1>
            <br><p1 id = "timer-auric-7">8:00</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-7-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-7-reset"> 
          </div>

          <div class = "event-box" id = "auric-8-box">
            <h1> Blighted Saplings </h1>
            <br><p1 id = "timer-auric-8">6:30</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-8-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-8-reset"> 
            <input type = "button" value = "i" onmouseover="showElement('auric-event-info-3'); " onmouseout = "hideElement('auric-event-info-3'); ">
          </div>

          <div class = "event-box" id = "auric-9-box">
            <h1> Wyvern </h1>
            <br><p1 id = "timer-auric-9">14:00</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-9-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-9-reset">
            <input type = "button" value = "i" onmouseover="showElement('auric-event-info-4'); " onmouseout = "hideElement('auric-event-info-4'); "> 
          </div>

          <div class = "event-box" id = "auric-10-box">
            <h1> Ooze </h1>
            <br><p1 id = "timer-auric-10">13:00</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-10-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-10-reset"> 
            <input type = "button" value = "i" onmouseover="showElement('auric-event-info-2'); " onmouseout = "hideElement('auric-event-info-2'); ">
          </div>

          <div class = "event-box" id = "auric-11-box">
            <h1> Tendril </h1>
            <br><p1 id = "timer-auric-11">11:30</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-11-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-11-reset">
            <input type = "button" value = "i" onmouseover="showElement('auric-event-info-1'); " onmouseout = "hideElement('auric-event-info-1'); "> 
          </div>

          <div class = "event-box" id = "auric-12-box">
            <h1> Priory Escort (NE) </h1>
            <br><p1 id = "timer-auric-12">6:30</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-12-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-12-reset"> 
          </div>

          <div class = "event-box" id = "auric-13-box">
            <h1> Treasure Mushroom </h1>
            <br><p1 id = "timer-auric-13">9:45</p1>
            <br><input type = "button" onclick = "start_stop(this, auric.events);" value = "Start" id = "timer-auric-13-start">
            <input type = "button" onclick = "reset(this, auric.events);" value = "&#8635;" id = "timer-auric-13-reset"> 
          </div>


      <!-- Event info -->

      <!-- Tendril -->
      <div class = "event-info" id = "auric-event-info-1">
        Click "Start" or check "North Pylon" under <b>Completed Pylons?</b> when all north pylon events have been completed. 
        <br><br>
        Clicking the &#8635; will restart the timer with the <b>respawn rate</b> instead. 
      </div>

      <!-- Ooze -->
      <div class = "event-info" id = "auric-event-info-2">
        Click "Start" or check "West Pylon" under <b>Completed Pylons?</b> after killing the Ooze via main pylon event chain. 
        <br><br>
        Clicking the &#8635; will restart the timer with the <b>respawn rate</b> instead. 
      </div>

      <!-- Blighted Sapling -->
      <div class = "event-info" id = "auric-event-info-3">
        Click "Start" or check "South Pylon" under <b>Completed Pylons?</b> after charging up the south-most pylon.  
        <br><br>
        A champion husk event will spawn before the 3 Blighted Saplings. That event needs to fail in order to spawn the Blighted Saplings. 
        <br><br>
        Clicking the &#8635; will restart the timer with the <b>respawn rate</b> instead. 
      </div>

      <!-- Ooze -->
      <div class = "event-info" id = "auric-event-info-4">
        Click "Start" or check "Southeast Pylon" under <b>Completed Pylons?</b> after killing the Wyvern via main pylon event chain.
        <br><br>
        Clicking the &#8635; will restart the timer with the <b>respawn rate</b> instead.  
      </div>


      <!-- Arrows -->
			<!-- North -->
			<div id = "auric-arrow-1" class="auric-arrow-1">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>
			<!-- East -->
			<div id = "auric-arrow-2" class="auric-arrow-2">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>
			<!-- South -->
			<div id = "auric-arrow-3" class="auric-arrow-3">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>
			<!-- West -->
			<div id = "auric-arrow-4" class="auric-arrow-4">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

			<!-- Event circles -->
			<!-- Challenges -->
			<!-- north -->
       		<div id = "auric-img-1" class = "auric-img-1">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- East -->
       		<div id = "auric-img-2" class = "auric-img-2">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- south -->
       		<div id = "auric-img-3" class = "auric-img-3">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- west -->
       		<div id = "auric-img-4" class = "auric-img-4">
       			<img src = "../images/assets/event_circle.png">
       		</div>

       		<!-- Mordrem Assaults circles--> 
       		<!-- north -->
       		<div id = "auric-img-5" class = "auric-img-5">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>
       		<!-- East -->
       		<div id = "auric-img-6" class = "auric-img-6">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>
       		<!-- south -->
       		<div id = "auric-img-7" class = "auric-img-7">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>
       		<!-- west -->
       		<div id = "auric-img-8" class = "auric-img-8">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>

       		<!-- Mordrem Assult cross swords -->
       		<!-- north -->
       		<div id = "auric-img-9" class = "auric-img-9">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>
       		<!-- east -->
       		<div id = "auric-img-10" class = "auric-img-10">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>
       		<!-- south -->
       		<div id = "auric-img-11" class = "auric-img-11">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>
       		<!-- west -->
       		<div id = "auric-img-12" class = "auric-img-12">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>

       		<!-- Meta circles--> 
       		<!-- north -->
       		<div id = "auric-img-13" class = "auric-img-13">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>
       		<!-- East -->
       		<div id = "auric-img-14" class = "auric-img-14">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>
       		<!-- south -->
       		<div id = "auric-img-15" class = "auric-img-15">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>
       		<!-- west -->
       		<div id = "auric-img-16" class = "auric-img-16">
       			<img src = "../images/assets/event_circle.png" style = "width: 130%;">
       		</div>

       		<!-- Meta cross swords -->
       		<!-- north -->
       		<div id = "auric-img-17" class = "auric-img-17">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>
       		<!-- east -->
       		<div id = "auric-img-18" class = "auric-img-18">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>
       		<!-- south -->
       		<div id = "auric-img-19" class = "auric-img-19">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>
       		<!-- west -->
       		<div id = "auric-img-20" class = "auric-img-20">
       			<img src = "../images/assets/event_cross_swords.png">
       		</div>

          <!-- Waypoint Icons --> 
          <div id = "auric-waypoint-1" class = "waypoint" onclick = "copyValue('wp-1'); fadeOutandBack(this);">
            <img src = "../images/assets/waypoint.png">
          </div>

          <div id = "auric-waypoint-2" class = "waypoint" onclick = "copyValue('wp-2'); fadeOutandBack(this);">
            <img src = "../images/assets/waypoint.png">
          </div>

          <div id = "auric-waypoint-3" class = "waypoint" onclick = "copyValue('wp-3'); fadeOutandBack(this);">
            <img src = "../images/assets/waypoint.png">
          </div>

          <div id = "auric-waypoint-4" class = "waypoint" onclick = "copyValue('wp-4'); fadeOutandBack(this);">
            <img src = "../images/assets/waypoint.png">
          </div>

       		<!-- Challenges info -->
       		<!-- North -->
       		<div id = "auric-info-1" class = 'pre-meta-info'>
       			<h1> Challenge </h1>
       		</div>
       		<!-- East -->
       		<div  id = "auric-info-2" class = 'pre-meta-info'>
       			<h1> Challenge </h1>
       		</div>
       		<!-- South -->
       		<div  id = "auric-info-3" class = 'pre-meta-info'>
       			<h1> Challenge </h1>
       		</div>
       		<!-- West -->
       		<div  id = "auric-info-4" class = 'pre-meta-info'>
       			<h1> Challenge </h1>
       		</div>

       		<!-- Mordrem Assault info -->
       		<!-- North -->
       		<div  id = "auric-info-5" class = 'pre-meta-info'>
       			<h1> Assault </h1>
       		</div>
       		<!-- East -->
       		<div id = "auric-info-6" class = 'pre-meta-info'>
       			<h1> Assault </h1>
       		</div>
       		<!-- South -->
       		<div  id = "auric-info-7" class = 'pre-meta-info'>
       			<h1> Assault </h1>
       		</div>
       		<!-- West -->
       		<div  id = "auric-info-8" class = 'pre-meta-info'>
       			<h1> Assault </h1>
       		</div>

       		<!-- Meta info -->
       		<!-- North -->
       		<div id = "auric-info-9" class = 'meta-info'>
       			<h1> Damage bramble vines, <br> use turrets</h1>
       		</div>
       		<!-- East -->
       		<div  id = "auric-info-10" class = 'meta-info'>
       			<h1> Glide, <br>drop bombs </h1>
       		</div>
       		<!-- South -->
       		<div  id = "auric-info-11" class = 'meta-info'>
       			<h1> Push + pull <br> bomb </h1>
       		</div>
       		<!-- West -->
       		<div  id = "auric-info-12" class = 'meta-info'>
       			<h1> Turn into mushroom, <br> explode  </h1>
       		</div>
       

       		<!-- Map -->
			<img class = "map-timer-map" title = "Auric Basin" src = "../images/auric-basin/auric-basin-map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <!-- Progress bars -->
  <div class = "bottom-sticky">
      <div id = "progress-box" class = "progress-box">
        <h1 id = "progress-text" class = "progress-text"> </h1>
        <div id = "progress-bar" class = "progress-bar"></div>
      </div>
      
      <div class = 'current-status-box'>
        <h1 id = "current-status"></h1>
      </div>
  </div>

  <div style = "opacity: 0;">
    <input id = "wp-1" type = "text" value = "[&BN0HAAA=]">
  </div>

  <div style = "opacity: 0;">
    <input id = "wp-2" type = "text" value = "[&BGwIAAA=]">
  </div>

  <div style = "opacity: 0;">
    <input id = "wp-3" type = "text" value = "[&BAIIAAA=]">
  </div>

  <div style = "opacity: 0;">
    <input id = "wp-4" type = "text" value = "[&BAYIAAA=]">
  </div>

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/timers/auric-basin.js?v=<?php echo $date;?>"></script>
</html>
