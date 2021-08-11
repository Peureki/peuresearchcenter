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

	<div id = "nav-left-popup" class = "nav-left-popup" onclick = "nav_popup();"> 
		&#x2194;
	</div>

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
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

            <div id = "bloodstone-spirits-sidebox" class = "bloodstone-spirits-sidebox">
                  <h1> Spirits </h1>
                  <p1 id = "sidetimer-bloodstone-spirits"></p1>
                  <p2 id = "numerical-sidetimer-bloodstone-spirits"></p2>
            </div>

	     <div id = "bloodstone-meta-sidebox" class = "bloodstone-meta-sidebox" >
            <h1> Bloodstone Maw </h1>
            <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bloodstone-meta-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bloodstone-meta-reset">
            <p1 id = "sidetimer-bloodstone-meta">60:00</p1>
            <p2 id = "numerical-sidetimer-bloodstone-meta">3600</p2>
          </div>

          <div id = "bloodstone-1-sidebox" class = "bloodstone-1-sidebox" >
	      <h1> Justicar Hablion </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-bloodstone-1-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-bloodstone-1-reset">
	      <p1 id = "sidetimer-bloodstone-1">30:00</p1>
	      <p2 id = "numerical-sidetimer-bloodstone-1">1800</p2>
	    </div>
	    	     
	    
	</div> <!-- End of left side box --> 

      <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box">
            All: <input type = "Checkbox" id = "bloodstone-all-checkbox" checked = "true" onclick = "bloodstone_All_Checkbox(this);">
            <br>
            Spirits: <input type = "Checkbox" id = "bloodstone-spirits-checkbox" checked = "true" onclick = "bloodstone_Spirits_Checkbox(this);">
            <br>
            Bloodstone Maw: <input type = "Checkbox" id = "bloodstone-meta-checkbox" checked = "true" onclick = "bloodstone_Meta_Checkbox(this);">
            <br>
            Justicar Hablion: <input type = "Checkbox" id = "bloodstone-1-checkbox" checked = "true" onclick = "bloodstone_1_Checkbox(this);">
            <br>
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      		<div class = "small-description">
      			<p1> 
                        <b> How this works: </b>
                        <br> Justicar Hablion and the meta are the only ones that have a cooldown to keep track of. The Cleric events on the ground rotate in a clockwise rotation after completing one and spawn right away. The Rift events above spawn relatively often with multiple locations. 
                        </p1>
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

                  <!-- Bloodstone Maw -->
                  <div class = "bloodstone-meta-box">
                        <input class = "event-button" type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bloodstone-meta-start">
                        <input class = "event-button" type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bloodstone-meta-reset">
                        <input class = "event-button" type = "button" value = "&#x203A;">
                  </div>

                  <!-- Spirits -->
                  <div class = "bloodstone-spirit-box">
                        <input class = "event-button" type = "button" onclick = "progress_meta();" value = "Next objective" id = "bloodstone-spirit-button" style = 'opacity: 0;'>
                  </div>

      		<div class = "event-box" id = "bloodstone-1-box">
      			<h1> Justicar Hablion <br> (mid floor) </h1>
       	 		<br><p1 id = "timer-bloodstone-1">30:00</p1>
        		      <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-bloodstone-1-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-bloodstone-1-reset">
       		</div>

                  

                  <!-- Spirits meta -->
                  <!-- Night time -->
                  <!-- Spirit area -->
                  <div id = "bloodstone-img-1" class = "bloodstone-img-1">
                        <img src = "../images/assets/event_circle.png" style = "width: 50%;">
                  </div>

                  <!-- Boss symbols -->
                  <!-- Spirit area cross swords -->
                  <div id = "bloodstone-img-2" class = "bloodstone-img-2">
                        <img src = "../images/assets/event_cross_swords.png">
                  </div>
                  <!-- Champ Savant Ehrin -->
                  <div id = "bloodstone-img-3" class = "bloodstone-img-3">
                        <img src = "../images/assets/event_boss.png">
                  </div>
                  <!-- Champ Nyle the Compassionate -->
                  <div id = "bloodstone-img-4" class = "bloodstone-img-4">
                        <img src = "../images/assets/event_boss.png">
                  </div>
                  <!-- Champ Ritualist Josa -->
                  <div id = "bloodstone-img-5" class = "bloodstone-img-5">
                        <img src = "../images/assets/event_boss.png">
                  </div>
                  <!-- Champ Thief Lloyd -->
                  <div id = "bloodstone-img-6" class = "bloodstone-img-6">
                        <img src = "../images/assets/event_boss.png">
                  </div>
                  <!-- Escort -->
                  <div id = "bloodstone-img-7" class = "bloodstone-img-7">
                        <img src = "../images/assets/event_shield.png">
                  </div>

                  <!-- Circle for boss symbols --> 
                  <!-- Champ Savant Ehrin -->
                  <div id = "bloodstone-img-8" class = "bloodstone-img-8">
                        <img src = "../images/assets/event_circle.png">
                  </div>
                  <!-- Champ Nyle the Compassionate -->
                  <div id = "bloodstone-img-9" class = "bloodstone-img-9">
                        <img src = "../images/assets/event_circle.png">
                  </div>
                  <!-- Champ Ritualist Josa -->
                  <div id = "bloodstone-img-10" class = "bloodstone-img-10">
                        <img src = "../images/assets/event_circle.png">
                  </div>
                  <!-- Champ Thief Lloyd -->
                  <div id = "bloodstone-img-11" class = "bloodstone-img-11">
                        <img src = "../images/assets/event_circle.png">
                  </div>
                  <!-- Escort -->
                  <div id = "bloodstone-img-12" class = "bloodstone-img-12">
                        <img src = "../images/assets/event_circle.png">
                  </div>

                  <!-- Spirit 1st events animations --> 
                  <!-- Spirit area -->
                  <div id = "bloodstone-img-13" class = "bloodstone-img-13">
                        <img src = "../images/assets/event_circle.png" style = "width: 50%;">
                  </div>
                  <!-- Spirit area cross swords -->
                  <div id = "bloodstone-img-14" class = "bloodstone-img-14">
                        <img src = "../images/assets/event_cross_swords.png">
                  </div>

                  <!-- Maw event circle --> 
                  <div id = "bloodstone-img-15" class = "bloodstone-img-15">
                        <img src = "../images/assets/event_circle.png" style = "width: 100%;">
                  </div>
                  <!-- Maw event boss symbol -->
                  <div id = "bloodstone-img-16" class = "bloodstone-img-16">
                        <img src = "../images/assets/event_boss.png">
                  </div>

                  <!-- Maw animations -->
                  <!-- Maw event circle --> 
                  <div id = "bloodstone-img-17" class = "bloodstone-img-17">
                        <img src = "../images/assets/event_circle.png" style = "width: 100%;">
                  </div>
                  <!-- Maw event boss symbol -->
                  <div id = "bloodstone-img-18" class = "bloodstone-img-18">
                        <img src = "../images/assets/event_boss.png">
                  </div>

                  <!-- Spirit arrows --> 
                  <!-- 1st champ -> 2nd -->
                  <div id = "bloodstone-arrow-1" class="bloodstone-arrow-1">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                  </div>
                  <!-- 2nd champ -> 3 -->
                  <div id = "bloodstone-arrow-2" class="bloodstone-arrow-2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                  </div>
                  <!-- 3rd champ -> 4 -->
                  <div id = "bloodstone-arrow-3" class="bloodstone-arrow-3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                  </div>
                  <!-- 4 champ -> escort -->
                  <div id = "bloodstone-arrow-4" class="bloodstone-arrow-4">
                        <span></span>
                        <span></span>
                        <span></span>
                  </div>



       		<!-- Map -->
			<img class = "map-timer-map" title = "Bloodstone Fen" src = "../images/bloodstone-fen/bloodstone-fen-map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

      <div id = "progress-box-bottom" class = "progress-box-bottom">
            <h1 id = "progress-text-bottom" class = "progress-text-bottom">Exorcise the angered spirits!</h1>
            <div id = "progress-bar-bottom" class = "progress-bar-bottom"></div>
       </div>

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

      <!-- 
            ========================================================================
            ====================== FOOTER + DARK MODE ==============================
            ========================================================================
      -->
      <?php include("../footer.php"); ?>
      <script type = "text/javascript" src = "<?php echo $base;?>/timers/bloodstone-fen.js?v=<?php echo $date;?>"></script>
</body>
</html>
