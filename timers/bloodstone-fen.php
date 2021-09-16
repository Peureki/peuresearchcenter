<!DOCTYPE html> 
<html>
<head>
      <!-- Defaults -->
      <?php include('../config.php'); ?>
	<title> Bloodstone Fen </title>
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
                  <h1>Bloodstone Fen</h1>
                  <div class = "banner-box"></div>
                  <img src = "../images/assets/banner.svg">
            </div>
            <!-- Hidden space so the header doesn't overlap anything below -->
            <div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">
            <div id = "bloodstone-1-sidebox" class = "event-sidebox" >
      	      <h1> Justicar Hablion </h1>
      	      <input type = "button" onclick = "start_stop(this, bloodstone.events);" value = "Start" id = "sidetimer-bloodstone-1-start">
      	      <input type = "button" onclick = "reset(this, bloodstone.events);" value = "&#8635;" id = "sidetimer-bloodstone-1-reset">
      	      <p1 id = "sidetimer-bloodstone-1">30:00</p1>
      	      <p2 id = "numerical-sidetimer-bloodstone-1">1800</p2>
	     </div>

           <div id = "bloodstone-2-sidebox" class = "event-sidebox" >
                  <h1> Bloodstone Maw </h1>
                  <input type = "button" onclick = "start_stop(this, bloodstone.events);" value = "Start" id = "sidetimer-bloodstone-2-start">
                  <input type = "button" onclick = "reset(this, bloodstone.events);" value = "&#8635;" id = "sidetimer-bloodstone-2-reset">
                  <p1 id = "sidetimer-bloodstone-2">60:00</p1>
                  <p2 id = "numerical-sidetimer-bloodstone-2">3600</p2>
           </div>
	    	     
	    
	</div> <!-- End of left side box --> 

      <div id = "checkboxes" class = "checkboxes">
            All: <input type = "Checkbox" id = "bloodstone-all-checkbox" checked = "true" onclick = "checkboxTimer(this, bloodstone.events, 'all');">
            <br>
            Justicar Hablion: <input type = "Checkbox" id = "bloodstone-1-checkbox" checked = "true" onclick = "checkboxTimer(this, bloodstone.events);">
            <br>
            Bloodstone Maw: <input type = "Checkbox" id = "bloodstone-2-checkbox" checked = "true" onclick = "checkboxTimer(this, bloodstone.events);">
            <br>
            <br>
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      		<div class = "small-description">
      			<details>
                        <summary><b> How this works: </b></summary>
                        <br> Justicar Hablion and the meta are the only ones that have a cooldown to keep track of. The Cleric events on the ground rotate in a clockwise rotation after completing one and spawn right away. The Rift events above spawn relatively often with multiple locations. 
                        </details>
      		</div>
			
		</div>

		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

      		<!-- 
      			HTML notation: 
      			<div class = "[map]-[event #]-box">
      			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
      			<br><input type = "button" onclick = "start_stop(this, bloodstone.events);" value = "Start" id = "timer-[map]-[event #]-start">
      			<input type = "button" onclick = "reset(this, bloodstone.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
      		-->

      		<div class = "event-box" id = "bloodstone-1-box">
      			<h1> Justicar Hablion </h1>
       	 		<br><p1 id = "timer-bloodstone-1">30:00</p1>
        		      <br><input type = "button" onclick = "start_stop(this, bloodstone.events);" value = "Start" id = "timer-bloodstone-1-start">
       			<input type = "button" onclick = "reset(this, bloodstone.events);" value = "&#8635;" id = "timer-bloodstone-1-reset">
       		</div>

                  <div class = "event-box" id = "bloodstone-2-box">
                        <h1> Bloodstone Maw </h1>
                        <br><p1 id = "timer-bloodstone-2">60:00</p1>
                        <br><input type = "button" onclick = "start_stop(this, bloodstone.events);" value = "Start" id = "timer-bloodstone-2-start">
                        <input type = "button" onclick = "reset(this, bloodstone.events);" value = "&#8635;" id = "timer-bloodstone-2-reset">
                  </div>
       		<!-- Map -->
			<img class = "map-timer-map" title = "Bloodstone Fen" src = "../images/bloodstone-fen/bloodstone-fen-map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->
      <!-- 
            ========================================================================
            ====================== FOOTER + DARK MODE ==============================
            ========================================================================
      -->
      <?php include("../footer.php"); ?>
      <script type = "text/javascript" src = "<?php echo $base;?>/timers/bloodstone-fen.js?v=<?php echo $date;?>"></script>
</body>
</html>
