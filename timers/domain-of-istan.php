<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Domain of Istan </title>
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
			<h1>Domain of Istan</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">

	      <div id = "istan-meta-pala-sidebox" class = "meta-sidebox">
	      <h1> Palawadan </h1>
	      <p1 id = "sidetimer-istan-meta-pala"></p1>
	      <p2 id = "numerical-sidetimer-istan-meta-pala"></p2>
	    </div>

	    <div id = "istan-meta-gh-sidebox" class = "meta-sidebox">
	      <h1> Great Hall </h1>
	      <p1 id = "sidetimer-istan-meta-gh"></p1>
	      <p2 id = "numerical-sidetimer-istan-meta-gh"></p2>
	    </div>

	    <div id = "istan-1-sidebox" class = "event-sidebox" >
	      <h1> Pirates </h1>
	      <input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "sidetimer-istan-1-start">
	      <input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "sidetimer-istan-1-reset">
	      <p1 id = "sidetimer-istan-1">12:30</p1>
	      <p2 id = "numerical-sidetimer-istan-1">750</p2>
	    </div>

	    <div id = "istan-2-sidebox" class = "event-sidebox">
	      <h1> Akili </h1>
	      <input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "sidetimer-istan-2-start">
	      <input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "sidetimer-istan-2-reset">
	      <p1 id = "sidetimer-istan-2">20:45</p1>
	      <p2 id = "numerical-sidetimer-istan-2">1245</p2>
	    </div>

	    <div id = "istan-3-sidebox" class = "event-sidebox">
	      <h1> Book Raid </h1>
	      <input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "sidetimer-istan-3-start">
	      <input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "sidetimer-istan-3-reset">
	      <p1 id = "sidetimer-istan-3">19:45</p1>
	      <p2 id = "numerical-sidetimer-istan-3">1185</p2>
	    </div>

	    <div id = "istan-4-sidebox" class = "event-sidebox">
	      <h1> Graveyard </h1>
	      <input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "sidetimer-istan-4-start">
	      <input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "sidetimer-istan-4-reset">
	      <p1 id = "sidetimer-istan-4">15:00</p1>
	      <p2 id = "numerical-sidetimer-istan-4">900</p2>
	    </div>
	    
	     
	    
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
	  	All: <input type = "Checkbox" id = "istan-all-checkbox" checked = "true" onclick = "checkboxTimer(this, istan.events, 'all');">
	  	<br>
	  	Pirates: <input type = "Checkbox" id = "istan-1-checkbox" checked = "true" onclick = "checkboxTimer(this, istan.events);">
	  	<br>
	  	Akili: <input type = "Checkbox" id = "istan-2-checkbox" checked = "true" onclick = "checkboxTimer(this, istan.events);">
	  	<br>
	  	Book Raid: <input type = "Checkbox" id = "istan-3-checkbox" checked = "true" onclick = "checkboxTimer(this, istan.events);">
	  	<br>
	  	Graveyard: <input type = "Checkbox" id = "istan-4-checkbox" checked = "true" onclick = "checkboxTimer(this, istan.events);">
	  	<br>
	    
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
			<div class = "small-description">
				<details>
					<summary><b> How to do this: </b></summary>
	                            <br> While the Great Hall is on a global timer, when it's on cooldowm it is possible to run it again. Kill Awakened mobs to make the progress bar drop and it will start.
                     	</details>
			</div>
			
		</div>

		<div class = "map-timer-wrapper">
		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->

			<div class = "event-box" id = "istan-1-box">
				<h1> Pirates </h1>
       	 		<br><p1 id = "timer-istan-1">12:30</p1>
        		<br><input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "timer-istan-1-start">
       			<input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "timer-istan-1-reset">
       			<br><p2 id = "timer-istan-1-text"></p2>	
       		</div>

       		<div class = "event-box" id = "istan-2-box">
				<h1> Akili </h1>
       	 		<br><p1 id = "timer-istan-2">20:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "timer-istan-2-start">
       			<input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "timer-istan-2-reset">
       			<input type = "button" value = "i" onmouseover="showElement('istan-2-info-box-2'); " onmouseout = "hideElement('istan-2-info-box-2'); ">
       			<br><p2 id = "timer-istan-2-text"></p2>	
       		</div>

       		<div class = "event-box" id = "istan-3-box">
				<h1> Book Raid </h1>
       	 		<br><p1 id = "timer-istan-3">19:45</p1>
        		<br><input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "timer-istan-3-start">
       			<input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "timer-istan-3-reset">
       			<input type = "button" value = "i" onmouseover="showElement('istan-2-info-box-2'); " onmouseout = "hideElement('istan-2-info-box-2'); ">
       			<br><p2 id = "timer-istan-3-text"></p2>	
       		</div>

       		<div class = "event-box" id = "istan-4-box">
				<h1> Graveyard </h1>
       	 		<br><p1 id = "timer-istan-4">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, istan.events);" value = "Start" id = "timer-istan-4-start">
       			<input type = "button" onclick = "reset(this, istan.events);" value = "&#8635;" id = "timer-istan-4-reset">
       			<input type = "button" value = "i" onmouseover="showElement('istan-4-info-box-1'); " onmouseout = "hideElement('istan-4-info-box-1'); ">
       			<br><p2 id = "timer-istan-4-text"></p2>	
       		</div>

       		<!-- Other Assets -->
       		<!-- Akili warning when timer is 5:30 -->
       		<div id = "istan-2-info-box-1" class = "istan-2-info-box-1">
       			<h2 id = "istan-2-info-box-1-text"></h2> 
       		</div>

       		<!-- Palawadan Info -->
       		<div id = "istan-meta-pala-info-box-1" class = "istan-meta-pala-info-box-1">
       			<h2 id = "istan-meta-pala-info-box-1-text"> Palawadan spawns at every odd hour, at the :45 UTC-0 mark. The meta lasts for 30 minutes. 
       			</h2> 
       		</div>

       		<!-- Great Hall Info -->
       		<div id = "istan-meta-gh-info-box-1" class = "istan-meta-gh-info-box-1">
       			<h2 id = "istan-meta-gh-info-box-1-text"> Great Hall spawns 5 minutes after the timer of Palawadan ends. 
       			<br><br>
       			Outside of the global timers, Great Hall can spawn if enough Mordant Crescent are defeated. You will see a progress bar to indicate when you are able to spawn the meta.
       			</h2> 
       		</div>

       		<!-- Akili / Book Raid info -->
       		<div id = "istan-2-info-box-2" class = "istan-2-info-box-2">
       			<h2 id = "istan-2-info-box-2-text"> Both Akili and Book Raid can affect each other's spawn time. 
       			<br><br>
       			If Book Raid is ongoing, then Akili won't spawn. Akili will always spawn around 6:30 minutes after a successful Book Raid. 
       			<br><br>
       			If Akili is ongoing, then Book Raid won't spawn. Book Raid will spawn around 2:30 minutes after a successful Akili, BUT if Akili finished after 15 minutes of the previous Book Raid, then the timer is unknown.  </h2> 
       		</div>

       		<div id = "istan-4-info-box-1" class = "istan-4-info-box-1">
       			<h2 id = "istan-4-info-box-1-text"> Graveyard is an event that happens when a previous event, "Defeat the Mordant Crescent before they Awakened buried Villagers", fails. That event fails quickly if nobody is present for a minute, so Graveyard is generally up </h2> 
       		</div>

       		<!-- Event circles -->
			<!-- Pala -->
			<!-- Gates -->
       		<div id = "istan-img-1" class = "istan-img-1">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- NW rally point -->
       		<div id = "istan-img-2" class = "istan-img-2">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- N rally point -->
       		<div id = "istan-img-3" class = "istan-img-3">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- Corsairs -->
       		<div id = "istan-img-4" class = "istan-img-4">
       			<img src = "../images/assets/event_circle.png" style = "width: 120%; ">
       		</div>
       		<!-- Joko's feet -->
       		<div id = "istan-img-5" class = "istan-img-5">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- SW rally point -->
       		<div id = "istan-img-6" class = "istan-img-6">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- S rally point -->
       		<div id = "istan-img-7" class = "istan-img-7">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- Boats -->
       		<div id = "istan-img-8" class = "istan-img-8">
       			<img src = "../images/assets/event_circle.png" style = "width: 100%; height: 100%;">
       		</div>
       		<!-- Iberu -->
       		<div id = "istan-img-9" class = "istan-img-9">
       			<img src = "../images/assets/event_circle.png" >
       		</div>

       		<!-- Symbols -->
       		<!-- Gate boss -->
       		<div id = "istan-img-10" class = "istan-img-10">
       			<img src = "../images/assets/event_boss.png" style = "width: 70%;">
       		</div>
       		<!-- NW rally symbol -->
       		<div id = "istan-img-11" class = "istan-img-11">
       			<img src = "../images/assets/event_flag.png" style = "width: 70%;">
       		</div>
       		<!-- N rally symbol -->
       		<div id = "istan-img-12" class = "istan-img-12">
       			<img src = "../images/assets/event_flag.png" style = "width: 70%;">
       		</div>
       		<!-- Corsair boss -->
       		<div id = "istan-img-13" class = "istan-img-13">
       			<img src = "../images/assets/event_boss.png" style = "width: 70%;">
       		</div>
       		<!-- Joko's feet symbol -->
       		<div id = "istan-img-14" class = "istan-img-14">
       			<img src = "../images/assets/event_cross_swords.png" style = "width: 70%;">
       		</div>
       		<!-- SW rally symbol -->
       		<div id = "istan-img-15" class = "istan-img-15">
       			<img src = "../images/assets/event_flag.png" style = "width: 70%;">
       		</div>
       		<!-- S rally symbol -->
       		<div id = "istan-img-16" class = "istan-img-16">
       			<img src = "../images/assets/event_flag.png" style = "width: 70%;">
       		</div>
       		<!-- N boat -->
       		<div id = "istan-img-17" class = "istan-img-17">
       			<img src = "../images/assets/event_boss.png" style = "width: 70%;">
       		</div>
       		<!-- Middle boat -->
       		<div id = "istan-img-18" class = "istan-img-18">
       			<img src = "../images/assets/event_boss.png" style = "width: 70%;">
       		</div>
       		<!-- S boat -->
       		<div id = "istan-img-19" class = "istan-img-19">
       			<img src = "../images/assets/event_boss.png" style = "width: 70%;">
       		</div>
       		<!-- Iberu boss -->
       		<div id = "istan-img-20" class = "istan-img-20">
       			<img src = "../images/assets/event_boss.png" style = "width: 70%;">
       		</div>

       		<!-- Great Hall -->
       		<div id = "istan-img-21" class = "istan-img-21">
       			<img src = "../images/assets/event_circle.png" style = "width: 100%;">
       		</div>

       		<!-- FADE IN AND OUT ANIMATION-->
			<!-- Pala -->
			<!-- Gates -->
       		<div id = "istan-img-22" class = "istan-img-22">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- NW rally point -->
       		<div id = "istan-img-23" class = "istan-img-23">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- N rally point -->
       		<div id = "istan-img-24" class = "istan-img-24">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- Corsairs -->
       		<div id = "istan-img-25" class = "istan-img-25">
       			<img src = "../images/assets/event_circle.png" style = "width: 120%; ">
       		</div>
       		<!-- Joko's feet -->
       		<div id = "istan-img-26" class = "istan-img-26">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- SW rally point -->
       		<div id = "istan-img-27" class = "istan-img-27">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- S rally point -->
       		<div id = "istan-img-28" class = "istan-img-28">
       			<img src = "../images/assets/event_circle.png" style = "width: 70%;">
       		</div>
       		<!-- Boats -->
       		<div id = "istan-img-29" class = "istan-img-29">
       			<img src = "../images/assets/event_circle.png" style = "width: 100%; height: 100%;">
       		</div>
       		<!-- Iberu -->
       		<div id = "istan-img-30" class = "istan-img-30">
       			<img src = "../images/assets/event_circle.png" >
       		</div>

       		<!-- Great Hall -->
       		<div id = "istan-img-31" class = "istan-img-31">
       			<img src = "../images/assets/event_circle.png" style = "width: 100%;">
       		</div>

       		<!-- Arrows of Palawadan--> 
       		<!-- Gate -> NW rally -->
       		<div id = "istan-arrow-1" class="istan-arrow-1">
                <span></span>
			</div>
			<!-- NW rally -> N rally --> 
			<div id = "istan-arrow-2" class="istan-arrow-2">
                <span></span>
			</div>
			<!-- N rally -> Corsairs -->
			<div id = "istan-arrow-3" class="istan-arrow-3">
                <span></span>
			</div>
			<!-- Corsairs -> Joko feet -->
			<div id = "istan-arrow-4" class="istan-arrow-4">
                <span></span>
			</div>
			<!-- Joko feet -> SW rally -->
			<div id = "istan-arrow-5" class="istan-arrow-5">
                <span></span>
			</div>
			<!-- SW rally -> S rally -->
			<div id = "istan-arrow-6" class="istan-arrow-6">
                <span></span>
			</div>
			<!-- S rally -> Boats -->
			<div id = "istan-arrow-7" class="istan-arrow-7">
                <span></span>
			</div>
			<!-- Boats -> Iberu -->
			<div id = "istan-arrow-8" class="istan-arrow-8">
                <span></span>
			</div>




       		<!-- Map -->
			<img class = "map-timer-map" title = "Domain of Istan" src = "../images/domain-of-istan/istan-map.jpg"> 


		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

       <!-- Progress Bars -->
       <div class = "bottom-sticky">
              <div id = "pala-progress-box" class = "pala-progress-box">
                     <h1 id = "pala-progress-text" class = "pala-progress-text"> </h1>
                     <div id = "pala-progress-bar" class = "pala-progress-bar"></div>
              </div>

              <div id = "gh-progress-box" class = "gh-progress-box">
                     <h1 id = "gh-progress-text" class = "gh-progress-text"> </h1>
                     <div id = "gh-progress-bar" class = "gh-progress-bar"></div>
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


	<script type = "text/javascript" src = "<?php echo $base;?>/timers/domain-of-istan.js?v=<?php echo $date;?>"></script>
</body>
</html>
