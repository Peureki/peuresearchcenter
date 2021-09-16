<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Verdant Brink </title>
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
      <h1>Verdant Brink</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
	</div>

 <div id = "side-timer-list" class = "side-timer-list">

  <div id = "verdant-daynight-meta-sidebox" class = "meta-sidebox" >
    <h1 id = "daynight-meta-name"> </h1>
    <p1 id = "sidetimer-verdant-daynight-meta"></p1>
    <p2 id = "numerical-sidetimer-verdant-daynight-meta"></p2>
  </div>

  <div id = "verdant-bosses-meta-sidebox" class = "meta-sidebox" >
    <h1 id = "bosses-meta-name"> </h1>
    <p1 id = "sidetimer-verdant-bosses-meta"></p1>
    <p2 id = "numerical-sidetimer-verdant-bosses-meta"></p2>
  </div>

     <div id = "verdant-1-sidebox" class = "event-sidebox">
       <h1> Pact Tower (S) </h1>
       <input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "sidetimer-verdant-1-start">
       <input type = "button" onclick = "reset(this, verdant.events);" value = "&#8635;" id = "sidetimer-verdant-1-reset">
       <p1 id = "sidetimer-verdant-1">4:30</p1>
       <p2 id = "numerical-sidetimer-verdant-1">270</p2>
     </div>

     <div id = "verdant-2-sidebox" class = "event-sidebox">
       <h1> Pact Tower (W) </h1>
       <input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "sidetimer-verdant-2-start">
       <input type = "button" onclick = "reset(this, verdant.events);" value = "&#8635;" id = "sidetimer-verdant-2-reset">
       <p1 id = "sidetimer-verdant-2">4:30</p1>
       <p2 id = "numerical-sidetimer-verdant-2">270</p2>
     </div>

     <div id = "verdant-3-sidebox" class = "event-sidebox">
       <h1> Pact Tower (E) </h1>
       <input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "sidetimer-verdant-3-start">
       <input type = "button" onclick = "reset(this, verdant.events);" value = "&#8635;" id = "sidetimer-verdant-3-reset">
       <p1 id = "sidetimer-verdant-3">4:30</p1>
       <p2 id = "numerical-sidetimer-verdant-3">270</p2>
     </div>
     
   </div> <!-- End of left side box --> 

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
  		<div class = "small-description">
        <details>
            <summary><b>How to: </b></summary>
            At the start of day time, all outposts will begin their event chain. Completing an outpost will spawn addition events depending on the outpost. The more outpost that are completed, the more Airship Cargo will spawn on the ground.
            <br><br>
            To achieve a successful T4 meta, make sure to continously have a map effort to defend as many camps as possible while escorting scouts, gathering supplies, killing veteran Mordrem, and defeating all bosses. The more bosses are defeated, the more Airship Cargo will spawn in the air. Use the timer to help gauge when each phase will occur. 
            <br><bR>
            <b>Priority of events (Day):</b>
            <br>First event of each outpost in the order of Ordnance, Pact Encampment, Jaka Itzel, Nobles, Pale Reavers &#8594; your choice in which outpost (most go for Pale Reavers for the Stonehead bauble farm)
        </details>
  		</div>
		</div>

    <!-- Inner navgation box to the side -->
		<div class = "map-timer-box">


			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this.verdant.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
			<!-- Ordnance Corps day -->
			<div id = "verdant-box-1" class = "event-box">
				<h1 style = "margin-bottom: 0;"> Ordnance Corps </h1>
        		<input type = "button" value = "i" onmouseover = "showElement('verdant-info-1');" onmouseout = "hideElement('verdant-info-1');">
       		</div>
       		<!-- Nobles day -->
       		<div id = "verdant-box-2" class = "event-box">
				<h1 style = "margin-bottom: 0;"> Nobles </h1>
        		<input type = "button" value = "i" onmouseover = "showElement('verdant-info-3');" onmouseout = "hideElement('verdant-info-3');">
       		</div>
       		<!-- Pact Encampment -->
       		<div id = "verdant-box-3" class = "event-box">
				<h1 style = "margin-bottom: 0;"> Pact <br> Encampment </h1>
        		<input type = "button" value = "i" onmouseover = "showElement('verdant-info-4');" onmouseout = "hideElement('verdant-info-4');">
       		</div>
       		<!-- Jaka Itzel -->
       		<div id = "verdant-box-4" class = "event-box">
				<h1 style = "margin-bottom: 0;"> Jaka Itzel </h1>
        		<input type = "button" value = "i" onmouseover = "showElement('verdant-info-5');" onmouseout = "hideElement('verdant-info-5');">
       		</div>
       		<!-- Pale Reaver -->
       		<div id = "verdant-box-5" class = "event-box">
				<h1 style = "margin-bottom: 0;"> Pale Reavers </h1>
        		<input type = "button" value = "i" onmouseover = "showElement('verdant-info-6');" onmouseout = "hideElement('verdant-info-6');">
       		</div>

          <!-- Ordnance Corps -->
       		<div id = "verdant-info-1" class = 'event-info'>
       			 When this event chain is complete, veterans will spawn around the area with very low cooldown. When the event chain is at the gathering salvage event, the Pact Towers spawn until Night.
       		</div>

          <!-- Pact Towers -->
          <div id = "verdant-info-2" class = 'event-info'>
             These spawn after completing the Ordnance event chain til the salvage event.
          </div>

          <!-- Nobles --> 
          <div id = "verdant-info-3" class = 'event-info'>
             Veterans spawn SE of the waypoint after completing all the outpost events. 
          </div>

          <!-- Pact Encampment --> 
          <div id = "verdant-info-4" class = 'event-info'>
             A veteran Tendril and escorts spawn after completing all the outpost events.  
          </div>

          <!-- Jaka Itzel --> 
          <div id = "verdant-info-5" class = 'event-info'>
             Itzel hunter events and a single veteran event spawns after compelting all the outpost events. The Itzel hunter event respawn 1 at a time with about a minute or two in between each cooldown.  
          </div>

          <!-- Pale Reaver --> 
          <div id = "verdant-info-6" class = 'event-info'>
             Veterans spawn at the ruins and at the Dry Step Mesas (south of the first waypoint). Multiple Stoneheads spawn at the Dry Step Mesas and can continously spawn every minute or less. 
          </div>


              -->

             <!-- Post outpost events --> 
             <div class = "event-box" id = "verdant-1-box">
              <h1> Pact Tower (S) </h1>
              <br><p1 id = "timer-verdant-1">4:30</p1>
              <br><input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "timer-verdant-1-start">
              <input type = "button" onclick = "reset(this.verdant.events);" value = "&#8635;" id = "timer-verdant-1-reset">
              <input type = "button" value = "i" onmouseover = "showElement('verdant-info-2');" onmouseout = "hideElement('verdant-info-2');"> 
             </div>

             <div class = "event-box" id = "verdant-2-box">
              <h1> Pact Tower (W) </h1>
              <br><p1 id = "timer-verdant-2">4:30</p1>
              <br><input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "timer-verdant-2-start">
              <input type = "button" onclick = "reset(this.verdant.events);" value = "&#8635;" id = "timer-verdant-2-reset"> 
              <input type = "button" value = "i" onmouseover = "showElement('verdant-info-2');" onmouseout = "hideElement('verdant-info-2');">
             </div>

             <div class = "event-box" id = "verdant-3-box">
              <h1> Pact Tower (E) </h1>
              <br><p1 id = "timer-verdant-3">4:30</p1>
              <br><input type = "button" onclick = "start_stop(this, verdant.events);" value = "Start" id = "timer-verdant-3-start">
              <input type = "button" onclick = "reset(this.verdant.events);" value = "&#8635;" id = "timer-verdant-3-reset">
              <input type = "button" value = "i" onmouseover = "showElement('verdant-info-2');" onmouseout = "hideElement('verdant-info-2');"> 
             </div>
			

       		<!-- Camp Locations -->
       		<!-- Pre-camp animations -->
       		<!-- 1-4 = Ordnance Corps --> 
       		<div id = "verdant-meta-circle-1" class="verdant-meta-circle-1"></div>
       		<div id = "verdant-meta-circle-2" class="verdant-meta-circle-2"></div>
       		<div id = "verdant-meta-circle-3" class="verdant-meta-circle-3"></div>
       		<div id = "verdant-meta-circle-4" class="verdant-meta-circle-4"></div>
       		<!-- 5-8 = Nobles -->
       		<div id = "verdant-meta-circle-5" class="verdant-meta-circle-5"></div>
       		<div id = "verdant-meta-circle-6" class="verdant-meta-circle-6"></div>
       		<div id = "verdant-meta-circle-7" class="verdant-meta-circle-7"></div>
       		<div id = "verdant-meta-circle-8" class="verdant-meta-circle-8"></div>
       		<!-- 9-12 = Pact Encampment -->
       		<div id = "verdant-meta-circle-9" class="verdant-meta-circle-9"></div>
       		<div id = "verdant-meta-circle-10" class="verdant-meta-circle-10"></div>
       		<div id = "verdant-meta-circle-11" class="verdant-meta-circle-11"></div>
       		<div id = "verdant-meta-circle-12" class="verdant-meta-circle-12"></div>
       		<!-- 13-16 = Itzel -->
       		<div id = "verdant-meta-circle-13" class="verdant-meta-circle-13"></div>
       		<div id = "verdant-meta-circle-14" class="verdant-meta-circle-14"></div>
       		<div id = "verdant-meta-circle-15" class="verdant-meta-circle-15"></div>
       		<div id = "verdant-meta-circle-16" class="verdant-meta-circle-16"></div>
       		<!-- 17-20 = Reavers -->
       		<div id = "verdant-meta-circle-17" class="verdant-meta-circle-17"></div>
       		<div id = "verdant-meta-circle-18" class="verdant-meta-circle-18"></div>
       		<div id = "verdant-meta-circle-19" class="verdant-meta-circle-19"></div>
       		<div id = "verdant-meta-circle-20" class="verdant-meta-circle-20"></div>
       		<!-- Attack on camps -->
       		<!-- Ordnance Corps -->
       		<div id = "verdant-meta-circle-21" class="verdant-meta-circle-21"></div>
       		<div id = "verdant-meta-circle-22" class="verdant-meta-circle-22"></div>
       		<div id = "verdant-meta-circle-23" class="verdant-meta-circle-23"></div>
       		<div id = "verdant-meta-circle-24" class="verdant-meta-circle-24"></div>
       		<!-- Nobles -->
       		<div id = "verdant-meta-circle-25" class="verdant-meta-circle-25"></div>
       		<div id = "verdant-meta-circle-26" class="verdant-meta-circle-26"></div>
       		<div id = "verdant-meta-circle-27" class="verdant-meta-circle-27"></div>
       		<div id = "verdant-meta-circle-28" class="verdant-meta-circle-28"></div>
       		<!-- Pact Encampment -->
       		<div id = "verdant-meta-circle-29" class="verdant-meta-circle-29"></div>
       		<div id = "verdant-meta-circle-30" class="verdant-meta-circle-30"></div>
       		<div id = "verdant-meta-circle-31" class="verdant-meta-circle-31"></div>
       		<div id = "verdant-meta-circle-32" class="verdant-meta-circle-32"></div>
       		<!-- Itzel -->
       		<div id = "verdant-meta-circle-33" class="verdant-meta-circle-33"></div>
       		<div id = "verdant-meta-circle-34" class="verdant-meta-circle-34"></div>
       		<div id = "verdant-meta-circle-35" class="verdant-meta-circle-35"></div>
       		<div id = "verdant-meta-circle-36" class="verdant-meta-circle-36"></div>
       		<!-- Reavers -->
       		<div id = "verdant-meta-circle-37" class="verdant-meta-circle-37"></div>
       		<div id = "verdant-meta-circle-38" class="verdant-meta-circle-38"></div>
       		<div id = "verdant-meta-circle-39" class="verdant-meta-circle-39"></div>
       		<div id = "verdant-meta-circle-40" class="verdant-meta-circle-40"></div>

       		<div id = "verdant-meta-boss-info-1" class = 'verdant-meta-boss-info-1'>
       			<h1> Trio </h1>
       		</div>
       		<div id = "verdant-meta-boss-info-2" class = 'verdant-meta-boss-info-2'>
       			<h1> Axemaster </h1>
       		</div>
       		<div id = "verdant-meta-boss-info-3" class = 'verdant-meta-boss-info-3'>
       			<h1> Matriarch </h1>
       		</div>
       		<div id = "verdant-meta-boss-info-4" class = 'verdant-meta-boss-info-4'>
       			<h1> Frogs </h1>
       		</div>
       		<div id = "verdant-meta-boss-info-5" class = 'verdant-meta-boss-info-5'>
       			<h1> Patriarch </h1>
       		</div>
       		<div id = "verdant-meta-info-1" class = 'verdant-meta-info-1'>
       			<ul>
       				<li><img src = "../images/assets/event_shield.png"> &emsp; Defend / escort patrols </li>
       				<li><img src = "../images/assets/event_collect.png"> &emsp; Gather supplies and turn them in the camps </li>
       				<li><img src = "../images/assets/event_boss.png"> &emsp; Kill veteran Mordrems </li>
       				<li><img src = "../images/assets/rally_point_lost.png" style = "width: 7.5%;"> &emsp; Retake fallen camps </li>
       			<ul>
       		</div>

       		<!-- Ordnance Corps -->
       		<!-- Coztic -->
       		<div id = "verdant-vet-1" class = "verdant-vet-1">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Mordrem -->
       		<div id = "verdant-vet-2" class = "verdant-vet-2">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Smokescale -->
       		<div id = "verdant-vet-3" class = "verdant-vet-3">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Spider -->
       		<div id = "verdant-vet-4" class = "verdant-vet-4">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Nobles --> 
       		<!-- Arrowhead -->
       		<div id = "verdant-vet-5" class = "verdant-vet-5">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Wyverns --> 
       		<div id = "verdant-vet-6" class = "verdant-vet-6">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Frogs -->
       		<div id = "verdant-vet-7" class = "verdant-vet-7">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Black Moa -->
       		<div id = "verdant-vet-8" class = "verdant-vet-8">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Mushroom King (next to Black Moa) -->
       		<div id = "verdant-vet-9" class = "verdant-vet-9">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Mushroom King (in caves) -->
       		<div id = "verdant-vet-10" class = "verdant-vet-10">
       			<img src = "../images/assets/event_boss.png">
       		</div>
       		<!-- Pact Encampment -->
       		<!-- Escort --> 
       		<div id = "verdant-vet-11" class = "verdant-vet-11">
       			<img src = "../images/assets/event_shield.png">
       		</div>
       		<!-- Events (circle) --> 
       		<div id = "verdant-vet-12" class = "verdant-vet-12">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Escort southeast -->
       		<div id = "verdant-vet-13" class = "verdant-vet-13">
       			<img src = "../images/assets/event_shield.png">
       		</div>
       		<!-- Itzel -->
       		<!-- Hunt 1 -->
       		<div id = "verdant-vet-14" class = "verdant-vet-14">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Hunt 2 -->
       		<div id = "verdant-vet-15" class = "verdant-vet-15">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Pale Reaver --> 
       		<!-- Stoneheads -->
       		<div id = "verdant-vet-16" class = "verdant-vet-16">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Shrouded Ruins veterans -->
       		<div id = "verdant-vet-17" class = "verdant-vet-17">
       			<img src = "../images/assets/event_circle.png">
       		</div>
       		<!-- Mushroom King -->
       		<div id = "verdant-vet-18" class = "verdant-vet-18">
       			<img src = "../images/assets/event_boss.png">
       		</div>

       		<!-- Ordnance Corps -->
       		<div id = "verdant-vet-info-1" class = "event-info-box">
       			<h1> Coztic </h1>
       		</div>
       		<div id = "verdant-vet-info-2" class = "event-info-box">
       			<h1> Mordrem </h1>
       		</div>
       		<div id = "verdant-vet-info-3" class = "event-info-box">
       			<h1> Smokescale </h1>
       		</div>
       		<div id = "verdant-vet-info-4" class = "event-info-box">
       			<h1> Spider </h1>
       		</div>
       		<!-- Nobles --> 
       		<div id = "verdant-vet-info-5" class = "event-info-box">
       			<h1> Arrowhead </h1>
       		</div>
       		<div id = "verdant-vet-info-6" class = "event-info-box">
       			<h1> Wyverns (x2) </h1>
       		</div>
       		<div id = "verdant-vet-info-7" class = "event-info-box">
       			<h1> Frogs (x8) </h1>
       		</div>
       		<div id = "verdant-vet-info-8" class = "event-info-box">
       			<h1> Black Moa </h1>
       		</div>
       		<div id = "verdant-vet-info-9" class = "event-info-box">
       			<h1> Mushroom King </h1>
       		</div>
       		<div id = "verdant-vet-info-10" class = "event-info-box">
       			<h1> Mushroom King </h1>
       		</div>
       		<!-- Pact Encampment -->
       		<!-- Escort location north -->
       		<div id = "verdant-vet-info-11" class = "event-info-box">
       			<h1> Escort </h1>
       		</div>
       		<!-- Events (circle) -->
       		<div id = "verdant-vet-info-12" class = "event-info-box">
       			<h1> Events </h1>
       		</div>
       		<!-- Escort location southeast -->
       		<div id = "verdant-vet-info-13" class = "event-info-box">
       			<h1> Escort </h1>
       		</div>
       		<!-- Itzel -->
       		<!-- Hunts --> 
       		<div id = "verdant-vet-info-14" class = "event-info-box">
       			<h1> Hunts (x2) </h1>
       		</div>
       		<!-- Pale Reavers -->
       		<!-- Stoneheads --> 
       		<div id = "verdant-vet-info-15" class = "event-info-box">
       			<h1> Stoneheads (x5) </h1>
       		</div>
       		<!-- Shrouded Ruin veterans --> 
       		<div id = "verdant-vet-info-16" class = "event-info-box">
       			<h1> Veterans (x6) </h1>
       		</div>
       		<!-- Mushroom King --> 
       		<div id = "verdant-vet-info-17" class = "event-info-box">
       			<h1> Mushroom King </h1>
       		</div>


       		<!-- Map -->
			<img class = "map-timer-map" title = "Verdant Brink" src = "../images/verdant-brink/verdant-brink-map.jpg"> 


		</div> <!-- End of map-box --> 

	</div> <!-- End of page-box -->

  <div class = "bottom-sticky">
    <div id = "verdant-progress-box" class = "verdant-progress-box">
      <h1 id = "verdant-progress-text" class = "verdant-progress-text"> </h1>
      <div id = "verdant-progress-bar" class = "verdant-progress-bar"></div>
    </div>

    <div id = "verdant-progress-bosses-box" class = "verdant-progress-bosses-box">
      <h1 id = "verdant-progress-bosses-text" class = "verdant-progress-bosses-text"> </h1>
      <div id = "verdant-progress-bosses-bar" class = "verdant-progress-bosses-bar"></div>
    </div>

    <div class = 'verdant-current-status-box'>
      <h1 id = "verdant-current-status"></h1>
    </div>
  </div>

 <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/verdant-brink.js?v=<?php echo $date;?>"></script>
</body>
</html>
