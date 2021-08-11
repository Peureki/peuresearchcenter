<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Dragonfall</title>
	
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
      <h1>Dragonfall</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
    </div>

  <div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">
    <!-- CULL EVENTS -->
    <div id = "dragonfall-1-sidebox" class = "event-sidebox">
      <h1>Cull - B1</h1>     
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-1-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-1-reset">
      <p1 id = "sidetimer-dragonfall-1">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-1">240</p2>
    </div>

    <div id = "dragonfall-2-sidebox" class = "event-sidebox">
      <h1>Cull - B2</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-2-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-2-reset">
      <p1 id = "sidetimer-dragonfall-2">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-2">240</p2>
    </div>

    <div id = "dragonfall-3-sidebox" class = "event-sidebox">
      <h1>Cull - B3</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-3-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-3-reset">
      <p1 id = "sidetimer-dragonfall-3">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-3">240</p2>
    </div>

    <div id = "dragonfall-4-sidebox" class = "event-sidebox">
      <h1>Cull - U1</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-4-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-4-reset">
      <p1 id = "sidetimer-dragonfall-4">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-4">240</p2>
    </div>

    <div id = "dragonfall-5-sidebox" class = "event-sidebox">
      <h1>Cull - U2</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-5-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-5-reset">
      <p1 id = "sidetimer-dragonfall-5">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-5">240</p2>
    </div>

    <div id = "dragonfall-6-sidebox" class = "event-sidebox">
      <h1>Cull - U3</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-6-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-6-reset">
      <p1 id = "sidetimer-dragonfall-6">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-6">240</p2>
    </div>

    <div id = "dragonfall-7-sidebox" class = "event-sidebox">
      <h1>Cull - M1</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-7-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-7-reset">
      <p1 id = "sidetimer-dragonfall-7">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-7">240</p2>
    </div>

    <div id = "dragonfall-8-sidebox" class = "event-sidebox">
      <h1>Cull - M2</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-8-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-8-reset">
       <p1 id = "sidetimer-dragonfall-8">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-8">240</p2>
    </div>

    <div id = "dragonfall-9-sidebox" class = "event-sidebox">
      <h1>Cull - M3</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-9-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-9-reset">
      <p1 id = "sidetimer-dragonfall-9">4:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-9">240</p2>
    </div>

    <!-- BRANDSTORM EVENTS --> 
    <div id = "dragonfall-10-sidebox" class = "event-sidebox">
      <h1>Brandstorms - B</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-10-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-10-reset">
      <p1 id = "sidetimer-dragonfall-10">6:15</p1>
      <p2 id = "numerical-sidetimer-dragonfall-10">375</p2>
    </div>

    <div id = "dragonfall-11-sidebox" class = "event-sidebox">
      <h1>Brandstorms - U</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-11-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-11-reset">
      <p1 id = "sidetimer-dragonfall-11">6:15</p1>
      <p2 id = "numerical-sidetimer-dragonfall-11">375</p2>
    </div>

    <div id = "dragonfall-12-sidebox" class = "event-sidebox">
      <h1>Brandstorms - M</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-12-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-12-reset">
      <p1 id = "sidetimer-dragonfall-12">6:15</p1>
      <p2 id = "numerical-sidetimer-dragonfall-12">375</p2>
    </div>

    <!-- CHAMPION EVENTS --> 
    <div id = "dragonfall-13-sidebox" class = "event-sidebox">
      <h1>Champion Abyssal</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-13-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-13-reset">
      <p1 id = "sidetimer-dragonfall-13">9:30</p1>
      <p2 id = "numerical-sidetimer-dragonfall-13">570</p2>
    </div>

    <div id = "dragonfall-14-sidebox" class = "event-sidebox">
      <h1>Champion Arbiter</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-14-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-14-reset">
      <p1 id = "sidetimer-dragonfall-14">9:30</p1>
      <p2 id = "numerical-sidetimer-dragonfall-14">570</p2>
    </div>

    <div id = "dragonfall-15-sidebox" class = "event-sidebox">
      <h1>Champion Elemental</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-15-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-15-reset">
      <p1 id = "sidetimer-dragonfall-15">9:30</p1>
      <p2 id = "numerical-sidetimer-dragonfall-15">570</p2>
    </div>

    <!-- MENDER EVENTS -->
    <div id = "dragonfall-16-sidebox" class = "event-sidebox">
      <h1>Mender - B</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-16-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-16-reset">
      <p1 id = "sidetimer-dragonfall-16">9:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-16">540</p2>
    </div>

    <div id = "dragonfall-17-sidebox" class = "event-sidebox">
      <h1>Mender - U</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-17-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-17-reset">
      <p1 id = "sidetimer-dragonfall-17">9:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-17">540</p2>
    </div>

    <div id = "dragonfall-18-sidebox" class = "event-sidebox">
      <h1>Mender - M</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-18-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-18-reset">
      <p1 id = "sidetimer-dragonfall-18">9:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-18">540</p2>
    </div>

    <!-- BRIDGE EVENTS -->
    <div id = "dragonfall-19-sidebox" class = "event-sidebox">
      <h1>Bridge - B1</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-19-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-19-reset">
      <p1 id = "sidetimer-dragonfall-19">14:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-19">840</p2>
    </div>

    <div id = "dragonfall-20-sidebox" class = "event-sidebox">
      <h1>Bridge - B2</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-20-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-20-reset">
      <p1 id = "sidetimer-dragonfall-20">14:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-20">840</p2>
    </div>

    <div id = "dragonfall-21-sidebox" class = "event-sidebox">
      <h1>Bridge - U</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-21-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-21-reset">
      <p1 id = "sidetimer-dragonfall-21">14:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-21">840</p2>
    </div>

    <div id = "dragonfall-22-sidebox" class = "event-sidebox">
      <h1>Bridge - M</h1> 
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-dragonfall-22-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-dragonfall-22-reset">
      <p1 id = "sidetimer-dragonfall-22">14:00</p1>
      <p2 id = "numerical-sidetimer-dragonfall-22">840</p2>
    </div>
  </div> <!-- End of left side box --> 

  <div class = "nav-right-sidetimer-box">
    All: <input type = "Checkbox" id = "dragonfall-all-checkbox" checked = "true" onclick = "dragonfall_All_Checkbox(this);">
    <br>
    Culls: <input type = "Checkbox" id = "dragonfall-cull-checkbox" checked = "true" onclick = "dragonfall_Cull_Checkbox(this);">
    <br>
    Brandstorms: <input type = "Checkbox" id = "dragonfall-brandstorm-checkbox" checked = "true" onclick = "dragonfall_Brandstorm_Checkbox(this);">
    <br>
    Champions: <input type = "Checkbox" id = "dragonfall-champion-checkbox" checked = "true" onclick = "dragonfall_Champion_Checkbox(this);">
    <br>
    Menders: <input type = "Checkbox" id = "dragonfall-mender-checkbox" checked = "true" onclick = "dragonfall_Mender_Checkbox(this);">
    <br>
    Bridge: <input type = "Checkbox" id = "dragonfall-bridge-checkbox" checked = "true" onclick = "dragonfall_Bridge_Checkbox(this);">
  </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      <h2> Disclaimer: </h2>
			<div class = "small-description">
				<p1> <b> How this works: </b>
          <br>This page is best to keep track of the Menders or Bridges (if doing the achievement). Most of the time, you won't be heading back to the Culls and other events because the squad would be in another zone doing those other events. 
         </p1>
			</div>
		</div>

		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
          <!-- CRYSTAL BLOOM CAMP -->
		    	<div class = "event-box" id = "dragonfall-1-box">
				    <h1>Cull - B1</h1> 
       	 		<br><p1 id = "timer-dragonfall-1">4:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-1-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-1-reset">
       			<br><p2 id = "timer-dragonfall-1-text"></p2>	
       		</div>

          <div class = "event-box" id = "dragonfall-2-box">
            <h1>Cull - B2</h1> 
            <br><p1 id = "timer-dragonfall-2">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-2-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-2-reset">
            <br><p2 id = "timer-dragonfall-2-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-3-box">
            <h1>Cull - B3</h1> 
            <br><p1 id = "timer-dragonfall-3">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-3-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-3-reset">
            <br><p2 id = "timer-dragonfall-3-text"></p2>  
          </div>
          
          <!-- Underworld -->
          <div class = "event-box" id = "dragonfall-4-box">
            <h1>Cull - U1</h1> 
            <br><p1 id = "timer-dragonfall-4">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-4-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-4-reset">
            <br><p2 id = "timer-dragonfall-4-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-5-box">
            <h1>Cull - U2</h1> 
            <br><p1 id = "timer-dragonfall-5">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-5-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-5-reset">
            <br><p2 id = "timer-dragonfall-5-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-6-box">
            <h1>Cull - U3</h1> 
            <br><p1 id = "timer-dragonfall-6">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-6-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-6-reset">
            <br><p2 id = "timer-dragonfall-6-text"></p2>  
          </div>

          <!-- Melandru --> 
           <div class = "event-box" id = "dragonfall-7-box">
            <h1>Cull - M1</h1> 
            <br><p1 id = "timer-dragonfall-7">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-7-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-7-reset">
            <br><p2 id = "timer-dragonfall-7-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-8-box">
            <h1>Cull - M2</h1> 
            <br><p1 id = "timer-dragonfall-8">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-8-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-8-reset">
            <br><p2 id = "timer-dragonfall-8-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-9-box">
            <h1>Cull - M3</h1> 
            <br><p1 id = "timer-dragonfall-9">4:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-9-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-9-reset">
            <br><p2 id = "timer-dragonfall-9-text"></p2>  
          </div>

          <!-- Brandstorms -->
          <div class = "event-box" id = "dragonfall-10-box">
            <h1>Brandstorm - B</h1> 
            <br><p1 id = "timer-dragonfall-10">6:15</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-10-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-10-reset">
            <br><p2 id = "timer-dragonfall-10-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-11-box">
            <h1>Brandstorm - U</h1> 
            <br><p1 id = "timer-dragonfall-11">6:15</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-11-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-11-reset">
            <br><p2 id = "timer-dragonfall-11-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-12-box">
            <h1>Brandstorm - M</h1> 
            <br><p1 id = "timer-dragonfall-12">6:15</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-12-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-12-reset">
            <br><p2 id = "timer-dragonfall-12-text"></p2>  
          </div>

          <!-- Champions -->
          <div class = "event-box" id = "dragonfall-13-box">
            <h1>Champion Abyssal</h1> 
            <br><p1 id = "timer-dragonfall-13">9:30</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-13-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-13-reset">
            <br><p2 id = "timer-dragonfall-13-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-14-box">
            <h1>Champion Arbiter</h1> 
            <br><p1 id = "timer-dragonfall-14">9:30</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-14-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-14-reset">
            <br><p2 id = "timer-dragonfall-14-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-15-box">
            <h1>Champion Elemental</h1> 
            <br><p1 id = "timer-dragonfall-15">9:30</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-15-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-15-reset">
            <br><p2 id = "timer-dragonfall-15-text"></p2>  
          </div>

          <!-- Menders -->
          <div class = "event-box" id = "dragonfall-16-box">
            <h1>Mender - B</h1> 
            <br><p1 id = "timer-dragonfall-16">9:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-16-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-16-reset">
            <br><p2 id = "timer-dragonfall-16-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-17-box">
            <h1>Mender - U</h1> 
            <br><p1 id = "timer-dragonfall-17">9:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-17-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-17-reset">
            <br><p2 id = "timer-dragonfall-17-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-18-box">
            <h1>Mender - M</h1> 
            <br><p1 id = "timer-dragonfall-18">9:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-18-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-18-reset">
            <br><p2 id = "timer-dragonfall-18-text"></p2>  
          </div>

          <!-- Bridges -->
          <div class = "event-box" id = "dragonfall-19-box">
            <h1>Bridge - B1</h1> 
            <br><p1 id = "timer-dragonfall-19">14:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-19-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-19-reset">
            <br><p2 id = "timer-dragonfall-19-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-20-box">
            <h1>Bridge - B2</h1> 
            <br><p1 id = "timer-dragonfall-20">14:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-20-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-20-reset">
            <br><p2 id = "timer-dragonfall-20-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-21-box">
            <h1>Bridge - U</h1> 
            <br><p1 id = "timer-dragonfall-21">14:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-21-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-21-reset">
            <br><p2 id = "timer-dragonfall-21-text"></p2>  
          </div>

          <div class = "event-box" id = "dragonfall-22-box">
            <h1>Bridge - M</h1> 
            <br><p1 id = "timer-dragonfall-22">14:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-dragonfall-22-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-dragonfall-22-reset">
            <br><p2 id = "timer-dragonfall-22-text"></p2>  
          </div>

			<img class = "map-timer-dragonfall" title = "Dragonfall" src = "../images/dragonfall/dragonfall-crystal-bloom.jpg">

      <img class = "map-timer-dragonfall" title = "Dragonfall" src = "../images/dragonfall/dragonfall-olmakhan.jpg">

      <img class = "map-timer-dragonfall" title = "Dragonfall" src = "../images/dragonfall/dragonfall-mist-warden.jpg">
  </div>
		
	</div> <!-- End of page-box -->

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>

	<script type = "text/javascript" src = "<?php echo $base;?>/timers/dragonfall.js?v=<?php echo $date;?>"></script>
</body>
</html>
