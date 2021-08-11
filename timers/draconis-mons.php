<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults -->
	<?php include('../config.php'); ?>
	<title> Draconis Mons </title>
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
			<h1>Draconis Mons</h1>
			<div class = "banner-box"></div>
			<img src = "../images/assets/banner.svg">
		</div>
		<!-- Hidden space so the header doesn't overlap anything below -->
		<div class = "section-header-space"></div>
	</div>

	<div id = "nav-left-popup" class = "nav-left-popup" onclick = "nav_popup();"> 
		&#x2194;
	</div>

	<!-- Inner navgation box to the side -->
	<div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

	    <div id = "draconis-1-sidebox" class = "event-sidebox">
	      <h1> Cull the Destroyers </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-1-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-1-reset">
	      <p1 id = "sidetimer-draconis-1">16:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-1">960</p2>
	    </div>
	    <div id = "draconis-2-sidebox" class = "event-sidebox">
	      <h1> Lava Wurm</h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-2-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-2-reset">
	      <p1 id = "sidetimer-draconis-2">11:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-2">660</p2>
	    </div>

	    <div id = "draconis-3-sidebox" class = "event-sidebox">
	      <h1> Skelk </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-3-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-3-reset">
	      <p1 id = "sidetimer-draconis-3">11:30</p1>
	      <p2 id = "numerical-sidetimer-draconis-3">690</p2>
	    </div>

	    <div id = "draconis-4-sidebox" class = "event-sidebox">
	      <h1> Golem </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-4-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-4-reset">
	      <p1 id = "sidetimer-draconis-4">7:45</p1>
	      <p2 id = "numerical-sidetimer-draconis-4">465</p2>
	    </div>

	    <div id = "draconis-5-sidebox" class = "event-sidebox">
	      <h1> Devourer </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-5-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-5-reset">
	      <p1 id = "sidetimer-draconis-5">19:30</p1>
	      <p2 id = "numerical-sidetimer-draconis-5">1170</p2>
	    </div>

	    <div id = "draconis-6-sidebox" class = "event-sidebox">
	      <h1> Emperor Mattake </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-6-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-6-reset">
	      <p1 id = "sidetimer-draconis-6">12:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-6">720</p2>
	    </div>

	    <div id = "draconis-7-sidebox" class = "event-sidebox">
	      <h1> Webby Mother </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-7-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-7-reset">
	      <p1 id = "sidetimer-draconis-7">9:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-7">540</p2>
	    </div>

	    <div id = "draconis-8-sidebox" class = "event-sidebox">
	      <h1> Wind Rider </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-8-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-8-reset">
	      <p1 id = "sidetimer-draconis-8">13:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-8">780</p2>
	    </div>

	    <div id = "draconis-9-sidebox" class = "event-sidebox">
	      <h1> Spirit of Nature </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-9-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-9-reset">
	      <p1 id = "sidetimer-draconis-9">5:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-9">300</p2>
	    </div>

	    <div id = "draconis-10-sidebox" class = "event-sidebox">
	      <h1> Stonehead </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-10-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-10-reset">
	      <p1 id = "sidetimer-draconis-10">6:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-10">360</p2>
	    </div>

	    <div id = "draconis-11-sidebox" class = "event-sidebox">
	      <h1> Grub Gobbler </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-11-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-11-reset">
	      <p1 id = "sidetimer-draconis-11">12:30</p1>
	      <p2 id = "numerical-sidetimer-draconis-11">750</p2>
	    </div>

	    <div id = "draconis-12-sidebox" class = "event-sidebox">
	      <h1> Mercenaries </h1>
	      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-draconis-12-start">
	      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-draconis-12-reset">
	      <p1 id = "sidetimer-draconis-12">6:00</p1>
	      <p2 id = "numerical-sidetimer-draconis-12">360</p2>
	    </div>
	    
	  </div> <!-- End of left side box --> 

	  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box">
	  	All: <input type = "Checkbox" id = "draconis-all-checkbox" checked = "true" onclick = "draconis_Mons_All_Checkbox(this);">
	  	<br>
	  	Meta: <input type = "Checkbox" id = "draconis-1-checkbox" checked = "true" onclick = "draconis_Mons_Meta_Checkbox(this);">
	  	<br>
	  	Lava Wurm: <input type = "Checkbox" id = "draconis-2-checkbox" checked = "true" onclick = "draconis_Mons_4_Checkbox(this);">
	  	<br>
	  	Skelk: <input type = "Checkbox" id = "draconis-3-checkbox" checked = "true" onclick = "draconis_Mons_7_Checkbox(this);">
	  	<br>
	  	Golem: <input type = "Checkbox" id = "draconis-4-checkbox" checked = "true" onclick = "draconis_Mons_8_Checkbox(this);">
	  	<br>
	  	Devourer: <input type = "Checkbox" id = "draconis-5-checkbox" checked = "true" onclick = "draconis_Mons_10_Checkbox(this);">
	  	<br>
	  	Emporer Mattake: <input type = "Checkbox" id = "draconis-6-checkbox" checked = "true" onclick = "draconis_Mons_12_Checkbox(this);">
	  	<br>
	  	Webby: <input type = "Checkbox" id = "draconis-7-checkbox" checked = "true" onclick = "draconis_Mons_13_Checkbox(this);">
	  	<br>
	  	Wind Rider: <input type = "Checkbox" id = "draconis-8-checkbox" checked = "true" onclick = "draconis_Mons_15_Checkbox(this);">
	  	<br>
	  	Spirit of Nature: <input type = "Checkbox" id = "draconis-9-checkbox" checked = "true" onclick = "draconis_Mons_16_Checkbox(this);">
	  	<br>
	    Stonehead: <input type = "Checkbox" id = "draconis-10-checkbox" checked = "true" onclick = "draconis_Mons_20_Checkbox(this);">
	  	<br>
	  	Grub Gobbler: <input type = "Checkbox" id = "draconis-11-checkbox" checked = "true" onclick = "draconis_Mons_21_Checkbox(this);">
	  	<br>
	  	Mercenaries: <input type = "Checkbox" id = "draconis-12-checkbox" checked = "true" onclick = "draconis_Mons_22_Checkbox(this);">
	  	<br>
	    
	 </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      	<h2> Disclaimer: </h2>
			<div class = "small-description">
				<p1> <b> How this works: </b>
				<br> Nothing special about these events, in terms of the event timers.  </p1>
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
			<div class = "event-box" id = "draconis-1-box">
				<h1> Cull the Destroyers </h1>
       	 		<br><p1 id = "timer-draconis-1">16:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-1-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-1-reset">
       		</div>

			<div class = "event-box" id = "draconis-2-box">
				<h1> Lava Wurm </h1>
       	 		<br><p1 id = "timer-draconis-2">11:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-2-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-2-reset">	
       		</div>

       		<div class = "event-box" id = "draconis-3-box">
				<h1> Skelk </h1>
       	 		<br><p1 id = "timer-draconis-3">11:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-3-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-3-reset">
       		</div>

       		<div class = "event-box" id = "draconis-4-box">
				<h1> Golem </h1>
       	 		<br><p1 id = "timer-draconis-4">7:45</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-4-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-4-reset">
       		</div>

       		<div class = "event-box" id = "draconis-5-box">
				<h1> Devourer </h1>
       	 		<br><p1 id = "timer-draconis-5">19:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-5-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-5-reset">	
       		</div>

       		<div class = "event-box" id = "draconis-6-box">
				<h1> Emperor Mattake </h1>
       	 		<br><p1 id = "timer-draconis-6">12:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-6-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-6-reset">	
       		</div>

       		<div class = "event-box" id = "draconis-7-box">
				<h1> Webby Mother </h1>
       	 		<br><p1 id = "timer-draconis-7">9:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-7-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-7-reset">
       		</div>

       		<div class = "event-box" id = "draconis-8-box">
				<h1> Wind Rider </h1>
       	 		<br><p1 id = "timer-draconis-8">13:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-8-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-8-reset">	
       		</div>

       		<div class = "event-box" id = "draconis-9-box">
				<h1> Spirit of Nature </h1>
       	 		<br><p1 id = "timer-draconis-9">5:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-9-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-9-reset">	
       		</div>

       		<div class = "event-box" id = "draconis-10-box">
				<h1> Stonehead </h1>
       	 		<br><p1 id = "timer-draconis-10">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-10-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-10-reset">
       		</div>

       		<div class = "event-box" id = "draconis-11-box">
				<h1> Grub Gobbler </h1>
       	 		<br><p1 id = "timer-draconis-11">12:30</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-11-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-11-reset">
       		</div>

       		<div class = "event-box" id = "draconis-12-box">
				<h1> Mercenaries </h1>
       	 		<br><p1 id = "timer-draconis-12">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-draconis-12-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-draconis-12-reset">	
       		</div>
       		
       		<div id = "draconis-1-circle-1" class="draconis-1-circle-1"></div>
       		<div id = "draconis-1-circle-2" class="draconis-1-circle-2"></div>
       		<div id = "draconis-1-circle-3" class="draconis-1-circle-3"></div>
       		<div id = "draconis-1-circle-4" class="draconis-1-circle-4"></div>
       		<div id = "draconis-1-circle-5" class="draconis-1-circle-5"></div>
       		<div id = "draconis-1-circle-6" class="draconis-1-circle-6"></div>
       		<div id = "draconis-1-circle-7" class="draconis-1-circle-7"></div>
       		<div id = "draconis-1-circle-8" class="draconis-1-circle-8"></div>
       		<div id = "draconis-1-circle-9" class="draconis-1-circle-9"></div>
       		<div id = "draconis-1-circle-10" class="draconis-1-circle-10"></div>
       		<div id = "draconis-1-circle-11" class="draconis-1-circle-11"></div>
       		<div id = "draconis-1-circle-12" class="draconis-1-circle-12"></div>
       		<div id = "draconis-1-circle-13" class="draconis-1-circle-13"></div>
       		<div id = "draconis-1-circle-14" class="draconis-1-circle-14"></div>

       		<div id = "draconis-arrow-1" class="draconis-arrow-1">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-2" class="draconis-arrow-2">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-3" class="draconis-arrow-3">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-4" class="draconis-arrow-4">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-5" class="draconis-arrow-5">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-6" class="draconis-arrow-6">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-7" class="draconis-arrow-7">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

			<div id = "draconis-arrow-8" class="draconis-arrow-8">
                <span></span>
                <span></span>
                <span></span>
  				<span></span>
  				<span></span>
                <span></span>
                <span></span>
  				<span></span>
			</div>

       		<!-- Other assets -->
       		<!-- Thermal tube icon -->
       		<img id = "draconis-hover-image-1" class = "draconis-hover-image-1" src = "../images/assets/thermal-tube.png">

       		<img id = "draconis-hover-image-2" class = "draconis-hover-image-2" src = "../images/assets/thermal-tube.png">

       		<img id = "draconis-hover-image-3" class = "draconis-hover-image-3" src = "../images/assets/thermal-tube.png">

			<img class = "map-timer-map" src = "../images/draconis-mons/draconis-mons-top-layer.jpg"> 

			<img class = "map-timer-map" src = "../images/draconis-mons/draconis-mons-middle-layer.jpg"> 

			<img class = "map-timer-map" src = "../images/draconis-mons/draconis-mons-bottom-layer.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("../footer.php"); ?>
	<script type = "text/javascript" src = "<?php echo $base;?>/timers/draconis-mons.js?v=<?php echo $date;?>"></script>
</body>
</html>
