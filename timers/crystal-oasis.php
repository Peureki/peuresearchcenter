<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Crystal Oasis </title>
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
      <h1>Crystal Oasis</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
	</div>


	<!-- Inner navgation box to the side -->
	<div id = "side-timer-list" class = "side-timer-list">

      <div id = "crystal-meta-sidebox" class = "meta-sidebox" >
       <h1 id = "side-meta-name"> </h1>
       <p1 id = "sidetimer-crystal-meta"></p1>
       <p2 id = "numerical-sidetimer-crystal-meta"></p2>
      </div>

        <div id = "crystal-1-sidebox" class = "event-sidebox" >
	      <h1> Raiding Party (N1) </h1>
	      <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-1-start">
	      <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-1-reset">
	      <p1 id = "sidetimer-crystal-1">6:00</p1>
	      <p2 id = "numerical-sidetimer-crystal-1">360</p2>
	    </div>

	    <div id = "crystal-2-sidebox" class = "event-sidebox" >
	      <h1> Raiding Party (N2)</h1>
	      <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-2-start">
	      <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-2-reset">
	      <p1 id = "sidetimer-crystal-2">6:00</p1>
	      <p2 id = "numerical-sidetimer-crystal-2">360</p2>
	    </div>

	    <div id = "crystal-3-sidebox" class = "event-sidebox" >
	      <h1> Raiding Party (S1)</h1>
	      <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-3-start">
	      <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-3-reset">
	      <p1 id = "sidetimer-crystal-3">6:00</p1>
	      <p2 id = "numerical-sidetimer-crystal-3">360</p2>
	    </div>

	    <div id = "crystal-4-sidebox" class = "event-sidebox" >
	      <h1> Raiding Party (S2) </h1>
	      <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-4-start">
	      <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-4-reset">
	      <p1 id = "sidetimer-crystal-4">6:00</p1>
	      <p2 id = "numerical-sidetimer-crystal-4">360</p2>
	    </div>

      <div id = "crystal-5-sidebox" class = "event-sidebox" >
        <h1> Raiding Party (E1) </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-5-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-5-reset">
        <p1 id = "sidetimer-crystal-5">6:00</p1>
        <p2 id = "numerical-sidetimer-crystal-5">360</p2>
      </div>

      <div id = "crystal-6-sidebox" class = "event-sidebox" >
        <h1> Crucible </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-6-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-6-reset">
        <p1 id = "sidetimer-crystal-6">21:30</p1>
        <p2 id = "numerical-sidetimer-crystal-6">1290</p2>
      </div>

      <div id = "crystal-7-sidebox" class = "event-sidebox" >
        <h1> Choya Stampede </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-7-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-7-reset">
        <p1 id = "sidetimer-crystal-7">10:00</p1>
        <p2 id = "numerical-sidetimer-crystal-7">600</p2>
      </div>

      <div id = "crystal-8-sidebox" class = "event-sidebox" >
        <h1> Farm </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-8-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-8-reset">
        <p1 id = "sidetimer-crystal-8">10:30</p1>
        <p2 id = "numerical-sidetimer-crystal-8">630</p2>
      </div>

      <div id = "crystal-9-sidebox" class = "event-sidebox" >
        <h1> Refugee (S) </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-9-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-9-reset">
        <p1 id = "sidetimer-crystal-9">7:30</p1>
        <p2 id = "numerical-sidetimer-crystal-9">450</p2>
      </div>

      <div id = "crystal-10-sidebox" class = "event-sidebox" >
        <h1> Refugee (M) </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-10-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-10-reset">
        <p1 id = "sidetimer-crystal-10">12:30</p1>
        <p2 id = "numerical-sidetimer-crystal-10">750</p2>
      </div>

      <div id = "crystal-11-sidebox" class = "event-sidebox" >
        <h1> Refugee (N) </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-11-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-11-reset">
        <p1 id = "sidetimer-crystal-11">6:30</p1>
        <p2 id = "numerical-sidetimer-crystal-11">390</p2>
      </div>

      <div id = "crystal-12-sidebox" class = "event-sidebox" >
        <h1> Caravan W</h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-12-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-12-reset">
        <p1 id = "sidetimer-crystal-12">15:30</p1>
        <p2 id = "numerical-sidetimer-crystal-12">930</p2>
      </div>

      <div id = "crystal-13-sidebox" class = "event-sidebox" >
        <h1> Caravan E</h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-13-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-13-reset">
        <p1 id = "sidetimer-crystal-13">11:45</p1>
        <p2 id = "numerical-sidetimer-crystal-13">705</p2>
      </div>

      <div id = "crystal-14-sidebox" class = "event-sidebox" >
        <h1> Forged Maverick</h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-14-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-14-reset">
        <p1 id = "sidetimer-crystal-14">15:00</p1>
        <p2 id = "numerical-sidetimer-crystal-14">900</p2>
      </div>

      <div id = "crystal-15-sidebox" class = "event-sidebox" >
        <h1> Forged Punisher </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-15-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-15-reset">
        <p1 id = "sidetimer-crystal-15">15:00</p1>
        <p2 id = "numerical-sidetimer-crystal-15">900</p2>
      </div>

      <div id = "crystal-16-sidebox" class = "event-sidebox" >
        <h1> Forged Sorcerer </h1>
        <input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "sidetimer-crystal-16-start">
        <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "sidetimer-crystal-16-reset">
        <p1 id = "sidetimer-crystal-16">15:00</p1>
        <p2 id = "numerical-sidetimer-crystal-16">900</p2>
      </div>
	    	     
	    
	  </div> <!-- End of left side box --> 

	  <div id = "checkboxes" class = "checkboxes">
            All: <input type = "Checkbox" id = "crystal-all-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events, 'all');">
            <br>
            Raiding Party N1: <input type = "Checkbox" id = "crystal-1-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Raiding Party N2: <input type = "Checkbox" id = "crystal-2-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Raiding Party S1: <input type = "Checkbox" id = "crystal-3-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Raiding Party S2: <input type = "Checkbox" id = "crystal-4-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Raiding Party E1: <input type = "Checkbox" id = "crystal-5-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Crucible: <input type = "Checkbox" id = "crystal-6-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Choya Stampede: <input type = "Checkbox" id = "crystal-7-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Farm: <input type = "Checkbox" id = "crystal-8-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Refugee S: <input type = "Checkbox" id = "crystal-9-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Refugee M: <input type = "Checkbox" id = "crystal-10-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br>
            Refugee N: <input type = "Checkbox" id = "crystal-11-checkbox" checked = "true" onclick = "checkboxTimer(this, crystal.events);">
            <br><br>
            Deselect bounties: <input type = "button" id = "bounty-deselect" value = "&#x2637;" onclick = "bounty_Deselect(this);" style = "background-color: #802020; color: white;">
            <br><br>
            Legendary Bounties
            <br><br>
            Choya: <input type = "Checkbox" id = "crystal-bounty-1-checkbox" onclick = "crystal_Bounty_1_Checkbox(this);"
              onmouseover="showElement('crystal-bounty-target-1');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-1', this);">
            <br>
            Queen Yidaxu: <input type = "Checkbox" id = "crystal-bounty-2-checkbox" onclick = "crystal_Bounty_2_Checkbox(this);"
              onmouseover="showElement('crystal-bounty-target-2');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-2', this);">
            <br>
            Facet: <input type = "Checkbox" id = "crystal-bounty-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
              onmouseover="showElement('crystal-bounty-target-3');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-3', this);">
            <br><br>
            Amnoon Bounty Board
            <br><br>
            Tazula: <input type = "Checkbox" id = "crystal-bounty-4-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-4');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-4', this);">
              <input type = "Checkbox" id = "crystal-bounty-4-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-5');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-5', this);">
              <input type = "Checkbox" id = "crystal-bounty-4-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-6');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-6', this);">
            <br>
            Braek Baredfang: <input type = "Checkbox" id = "crystal-bounty-5-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-7');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-7', this);">
              <input type = "Checkbox" id = "crystal-bounty-5-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-8');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-8', this);">
              <input type = "Checkbox" id = "crystal-bounty-5-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-9');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-9', this);">
            <br>
            Zelke: <input type = "Checkbox" id = "crystal-bounty-6-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-10');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-10', this);">
              <input type = "Checkbox" id = "crystal-bounty-6-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-11');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-11', this);">
              <input type = "Checkbox" id = "crystal-bounty-6-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-12');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-12', this);">
            <br>
            Man-Eater: <input type = "Checkbox" id = "crystal-bounty-7-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-13');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-13', this);">
              <input type = "Checkbox" id = "crystal-bounty-7-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-14');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-14', this);">
              <input type = "Checkbox" id = "crystal-bounty-7-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-15');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-15', this);">
            <br>
            Forged Maverick: <input type = "Checkbox" id = "crystal-bounty-8-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-16');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-16', this);">
              <input type = "Checkbox" id = "crystal-bounty-8-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-17');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-17', this);">
              <input type = "Checkbox" id = "crystal-bounty-8-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-18');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-18', this);">
            <br><br>
            Temple Bounty Board
            <br><br>
            Forged Punisher: <input type = "Checkbox" id = "crystal-bounty-9-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-19');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-19', this);">
              <input type = "Checkbox" id = "crystal-bounty-9-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-20');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-20', this);">
              <input type = "Checkbox" id = "crystal-bounty-9-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-21');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-21', this);">
            <br>
            Forged Ambusher: <input type = "Checkbox" id = "crystal-bounty-10-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-22');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-22', this);">
              <input type = "Checkbox" id = "crystal-bounty-10-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-23');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-23', this);">
              <input type = "Checkbox" id = "crystal-bounty-10-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-24');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-24', this);">
            <br>
            Butch: <input type = "Checkbox" id = "crystal-bounty-11-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-25');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-25', this);">
              <input type = "Checkbox" id = "crystal-bounty-11-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-26');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-26', this);">
              <input type = "Checkbox" id = "crystal-bounty-11-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-27');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-27', this);">
            <br>
            Xedra: <input type = "Checkbox" id = "crystal-bounty-12-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-28');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-28', this);">
              <input type = "Checkbox" id = "crystal-bounty-12-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-29');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-29', this);">
              <input type = "Checkbox" id = "crystal-bounty-12-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-30');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-30', this);">
            <br>
            Forged Sorcerer: <input type = "Checkbox" id = "crystal-bounty-13-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-31');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-31', this);">
              <input type = "Checkbox" id = "crystal-bounty-13-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-32');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-32', this);">
              <input type = "Checkbox" id = "crystal-bounty-13-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-33');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-33', this);">
            <br><br>
            Destiny's Bounty Board 
            <br><br>
            Shardcrest: <input type = "Checkbox" id = "crystal-bounty-14-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-34');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-34', this);">
              <input type = "Checkbox" id = "crystal-bounty-14-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-35');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-35', this);">
              <input type = "Checkbox" id = "crystal-bounty-14-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-36');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-36', this);">
            <br>
            Scragglebeard: <input type = "Checkbox" id = "crystal-bounty-15-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-37');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-37', this);">
              <input type = "Checkbox" id = "crystal-bounty-15-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-38');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-38', this);">
              <input type = "Checkbox" id = "crystal-bounty-15-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-39');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-39', this);">
            <br>
            Uussh Visshta: <input type = "Checkbox" id = "crystal-bounty-16-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-40');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-40', this);">
              <input type = "Checkbox" id = "crystal-bounty-16-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-41');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-41', this);">
              <input type = "Checkbox" id = "crystal-bounty-16-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-42');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-42', this);">
            <br>
            Chief Kronon: <input type = "Checkbox" id = "crystal-bounty-17-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-43');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-43', this);">
              <input type = "Checkbox" id = "crystal-bounty-17-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-44');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-44', this);">
              <input type = "Checkbox" id = "crystal-bounty-17-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-45');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-45', this);">
            <br>
            Chaotic Leyspark: <input type = "Checkbox" id = "crystal-bounty-18-1-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);" 
              onmouseover="showElement('crystal-bounty-target-46');"
              onmouseout="hideCheckboxElement('crystal-bounty-target-46', this);">
              <input type = "Checkbox" id = "crystal-bounty-18-2-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-47');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-47', this);">
              <input type = "Checkbox" id = "crystal-bounty-18-3-checkbox" onclick = "crystal_Bounty_3_Checkbox(this);"
                onmouseover="showElement('crystal-bounty-target-48');"
                onmouseout="hideCheckboxElement('crystal-bounty-target-48', this);">
            <br>
	 </div>
	<!-- Main box -->
	<div class = "page-box">		

		<!-- Progress bars -->
		<div id = "current-progress" class = "progress-header">
			<h2></h2>
		</div>

    <!--
		<div class = 'current-status-box'>
	   	<h1 id = "current-status"></h1>
	 	</div>
    -->

		<div class = "map-timer-wrapper">

      		<!-- 
      			HTML notation: 
      			<div class = "[map]-[event #]-box">
      			<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
      			<br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-[map]-[event #]-start">
      			<input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
      		-->

      		<div class = "event-box" id = "crystal-1-box">
      			<h1> Raiding Party (N1) </h1>
       	 		<br><p1 id = "timer-crystal-1">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-1-start">
       			<input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-1-reset">
       		</div>

       		<div class = "event-box" id = "crystal-2-box">
      			<h1> Raiding Party (N2) </h1>
       	 		<br><p1 id = "timer-crystal-2">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-2-start">
       			<input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-2-reset">
       		</div>

       		<div class = "event-box" id = "crystal-3-box">
      			<h1> Raiding Party (S1) </h1>
       	 		<br><p1 id = "timer-crystal-3">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-3-start">
       			<input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-3-reset">
       		</div>

       		<div class = "event-box" id = "crystal-4-box">
      			<h1> Raiding Party (S2) </h1>
       	 		<br><p1 id = "timer-crystal-4">6:00</p1>
        		<br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-4-start">
       			<input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-4-reset">
       		</div>

          <div class = "event-box" id = "crystal-5-box">
            <h1> Raiding Party (E1) </h1>
            <br><p1 id = "timer-crystal-5">6:00</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-5-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-5-reset">
          </div>

          <div class = "event-box" id = "crystal-6-box">
            <h1> Crucible </h1>
            <br><p1 id = "timer-crystal-6">21:30</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-6-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-6-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-1');" onmouseout = "hideElement('crystal-info-1');"> 
          </div> 

          <div class = "event-box" id = "crystal-7-box">
            <h1> Choya Stampede </h1>
            <br><p1 id = "timer-crystal-7">10:00</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-7-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-7-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-2');" onmouseout = "hideElement('crystal-info-2');">
          </div> 

          <div class = "event-box" id = "crystal-8-box">
            <h1> Farm </h1>
            <br><p1 id = "timer-crystal-8">10:30</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-8-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-8-reset">
          </div> 

          <div class = "event-box" id = "crystal-9-box">
            <h1> Refugee (S) </h1>
            <br><p1 id = "timer-crystal-9">7:30</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-9-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-9-reset"> 
          </div> 

          <div class = "event-box" id = "crystal-10-box">
            <h1> Refugee (M) </h1>
            <br><p1 id = "timer-crystal-10">12:30</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-10-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-10-reset">
          </div> 

          <div class = "event-box" id = "crystal-11-box">
            <h1> Refugee (N) </h1>
            <br><p1 id = "timer-crystal-11">6:30</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-11-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-11-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-3');" onmouseout = "hideElement('crystal-info-3');">
          </div> 

          <div class = "event-box" id = "crystal-12-box">
            <h1> Caravan W</h1>
            <br><p1 id = "timer-crystal-12">15:30</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-12-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-12-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-4');" onmouseout = "hideElement('crystal-info-4');">
          </div>

          <div class = "event-box" id = "crystal-13-box">
            <h1> Caravan E</h1>
            <br><p1 id = "timer-crystal-13">11:45</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-13-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-13-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-4');" onmouseout = "hideElement('crystal-info-4');">
          </div>

          <div class = "event-box" id = "crystal-14-box" style = "opacity: 0;">
            <h1> Forged Maverick </h1>
            <br><p1 id = "timer-crystal-14">15:00</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-14-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-14-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-4');" onmouseout = "hideElement('crystal-info-4');">
          </div>

          <div class = "event-box" id = "crystal-15-box" style = "opacity: 0;">
            <h1> Forged Punisher </h1>
            <br><p1 id = "timer-crystal-15">15:00</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-15-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-15-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-4');" onmouseout = "hideElement('crystal-info-4');">
          </div>

          <div class = "event-box" id = "crystal-16-box" style = "opacity: 0;">
            <h1> Forged Sorcerer </h1>
            <br><p1 id = "timer-crystal-16">15:00</p1>
            <br><input type = "button" onclick = "start_stop(this, crystal.events);" value = "Start" id = "timer-crystal-16-start">
            <input type = "button" onclick = "reset(this, crystal.events);" value = "&#8635;" id = "timer-crystal-16-reset">
            <input type = "button" value = "i" onmouseover = "showElement('crystal-info-4');" onmouseout = "hideElement('crystal-info-4');">
          </div>
       
          <!-- Casino Blitz circles w/ ANIMATION-->
          <!-- Round 1 -->
          <div id = "crystal-img-1" class = "crystal-img-1">
            <img src = "../images/assets/event_circle.png" style = "width: 170%;">
          </div>

          <!-- Casino Blitz circles w/o ANIMATION -->
          <!-- Round 1 -->
          <div id = "crystal-img-2" class = "crystal-img-2">
            <img src = "../images/assets/event_circle.png" style = "width: 170%;">
          </div>
          <!-- Round 2 -->
          <div id = "crystal-img-3" class = "crystal-img-3">
            <img src = "../images/assets/event_circle.png" style = "width: 170%;">
          </div>
          <!-- Round 3 -->
          <div id = "crystal-img-4" class = "crystal-img-4">
            <img src = "../images/assets/event_circle.png" style = "width: 170%;">
          </div>

          <!-- Choya Pinata -->
          <div id = "crystal-img-5" class = "crystal-img-5">
            <img src = "../images/assets/event_circle.png" style = "width: 170%;">
          </div>

          <!-- Info boxes -->
          <!-- Crucible -->
          <div class = "event-info" id = "crystal-info-1">
            There are two events. Start the event on top of the SW cliff. First event is to CC mobs and to destroy the crucible. The second event is a champ forged. Click &#8635; after defeating the champion.
          </div>

          <!-- Choya Stampede -->
          <div class = "event-info" id = "crystal-info-2">
            While there is a respawn timer, it will not respawn if the race is setting up or has begun. 
          </div>

          <!-- Refugee N -->
          <div class = "event-info" id = "crystal-info-3">
            There are 2-3 events. After the escort, there is a defense mission. If it fails, it could spawn an assault mission. Click &#8635; after either of these have been completed.
          </div>

          <!-- Caravan -->
          <div class = "event-info" id = "crystal-info-4">
            There are 2 different locations for this event. Only one can spawn at a time. When one finishes, the other location will be the next to spawn. 
            <br>
            Click &#8635; after the opposite caravan (W->E, E->W) has been completed. 
          </div>
      


       		<!-- Map -->
			<img class = "map-timer-map" src = "../images/crystal-oasis/map.jpg"> 

		</div> <!-- End of map-box --> 
	</div> <!-- End of map-timer-wrapper -->

	</div> <!-- End of page-box -->

  <div class = "page-box">
    <div class = "page-header">
        <h2> Bounties </h2>
    </div>
    <div class = "map-timer-wrapper">
      <div class = "map-timer-box">

        <!-- Bounty Icons --> 
        <!-- Legendary Choya -->
        <div id = "crystal-bounty-target-1" class = "crystal-bounty-target-1">
          <span id = "crystal-bounty-1-text">Choya</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <!-- Legendary Queen -->
        <div id = "crystal-bounty-target-2" class = "crystal-bounty-target-2">
          <span id = "crystal-bounty-2-text">Queen Yidaxu</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <!-- Legendary Facet -->
        <div id = "crystal-bounty-target-3" class = "crystal-bounty-target-3">
          <span id = "crystal-bounty-3-text">Facet</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Amnoon Board Champions-->
        <!-- Tazula Mindclouder -->
        <div id = "crystal-bounty-target-4" class = "crystal-bounty-target-4">
          <span id = "crystal-bounty-4-text">Tazula <br>Mindclouder 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-5" class = "crystal-bounty-target-5">
          <span id = "crystal-bounty-5-text">Tazula <br>Mindclouder 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-6" class = "crystal-bounty-target-6">
          <span id = "crystal-bounty-6-text">Tazula <br>Mindclouder 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Braek Baredfang -->
        <div id = "crystal-bounty-target-7" class = "crystal-bounty-target-7">
          <span id = "crystal-bounty-7-text">Braek <br>Baredfang 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-8" class = "crystal-bounty-target-8">
          <span id = "crystal-bounty-8-text">Braek <br>Baredfang 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-9" class = "crystal-bounty-target-9">
          <span id = "crystal-bounty-9-text">Braek <br>Baredfang 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Zelke the Shameless -->
        <div id = "crystal-bounty-target-10" class = "crystal-bounty-target-10">
          <span id = "crystal-bounty-10-text">Zelke the <br>Shameless 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-11" class = "crystal-bounty-target-11">
          <span id = "crystal-bounty-11-text">Zelke the <br>Shameless 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-12" class = "crystal-bounty-target-12">
          <span id = "crystal-bounty-12-text">Zelke the <br>Shameless 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Man-Eater -->
        <div id = "crystal-bounty-target-13" class = "crystal-bounty-target-13">
          <span id = "crystal-bounty-13-text">Man-Eater 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-14" class = "crystal-bounty-target-14">
          <span id = "crystal-bounty-14-text">Man-Eater 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-15" class = "crystal-bounty-target-15">
          <span id = "crystal-bounty-15-text">Man-Eater 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Forged Maverick -->
        <div id = "crystal-bounty-target-16" class = "crystal-bounty-target-16">
          <span id = "crystal-bounty-16-text">Forged Maverick 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-17" class = "crystal-bounty-target-17">
          <span id = "crystal-bounty-17-text">Forged Maverick 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-18" class = "crystal-bounty-target-18">
          <span id = "crystal-bounty-18-text">Forged Maverick 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Temple Bounty Board -->
        <!-- Forged Punisher --> 
        <div id = "crystal-bounty-target-19" class = "crystal-bounty-target-19">
          <span id = "crystal-bounty-19-text">Forged <br>Punisher 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-20" class = "crystal-bounty-target-20">
          <span id = "crystal-bounty-20-text">Forged <br>Punisher 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-21" class = "crystal-bounty-target-21">
          <span id = "crystal-bounty-21-text">Forged <br>Punisher 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Forged Ambusher --> 
        <div id = "crystal-bounty-target-22" class = "crystal-bounty-target-22">
          <span id = "crystal-bounty-22-text">Forged Ambusher 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-23" class = "crystal-bounty-target-23">
          <span id = "crystal-bounty-23-text">Forged Ambusher 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-24" class = "crystal-bounty-target-24">
          <span id = "crystal-bounty-24-text">Forged Ambusher 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Butch --> 
        <div id = "crystal-bounty-target-25" class = "crystal-bounty-target-25">
          <span id = "crystal-bounty-25-text">Butch 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-26" class = "crystal-bounty-target-26">
          <span id = "crystal-bounty-26-text">Butch 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-27" class = "crystal-bounty-target-27">
          <span id = "crystal-bounty-27-text">Butch 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Xedra Tahz Tahom --> 
        <div id = "crystal-bounty-target-28" class = "crystal-bounty-target-28">
          <span id = "crystal-bounty-28-text">Xedra Tahz <br>Tahom 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-29" class = "crystal-bounty-target-29">
          <span id = "crystal-bounty-29-text">Xedra Tahz <br>Tahom 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-30" class = "crystal-bounty-target-30">
          <span id = "crystal-bounty-30-text">Xedra Tahz <br>Tahom 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Forged Sorcerer -->
        <div id = "crystal-bounty-target-31" class = "crystal-bounty-target-31">
          <span id = "crystal-bounty-31-text">Forged Sorcerer 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-32" class = "crystal-bounty-target-32">
          <span id = "crystal-bounty-32-text">Forged Sorcerer 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-33" class = "crystal-bounty-target-33">
          <span id = "crystal-bounty-33-text">Forged Sorcerer 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>

        <!-- Destiny's Gorge Bounty Board --> 
        <!-- Shardcrest -->
        <div id = "crystal-bounty-target-34" class = "crystal-bounty-target-34">
          <span id = "crystal-bounty-34-text">Shardcrest 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-35" class = "crystal-bounty-target-35">
          <span id = "crystal-bounty-35-text">Shardcrest 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-36" class = "crystal-bounty-target-36">
          <span id = "crystal-bounty-36-text">Shardcrest 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <!-- Scragglebeard -->
        <div id = "crystal-bounty-target-37" class = "crystal-bounty-target-37">
          <span id = "crystal-bounty-37-text">Scragglebeard 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-38" class = "crystal-bounty-target-38">
          <span id = "crystal-bounty-38-text">Scragglebeard 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-39" class = "crystal-bounty-target-39">
          <span id = "crystal-bounty-39-text">Scragglebeard 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <!-- Uussh Visshta -->
        <div id = "crystal-bounty-target-40" class = "crystal-bounty-target-40">
          <span id = "crystal-bounty-40-text">Uussh Visshta 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-41" class = "crystal-bounty-target-41">
          <span id = "crystal-bounty-41-text">Uussh Visshta 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-42" class = "crystal-bounty-target-42">
          <span id = "crystal-bounty-42-text">Uussh Visshta 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <!-- Chief Kronon -->
        <div id = "crystal-bounty-target-43" class = "crystal-bounty-target-43">
          <span id = "crystal-bounty-43-text">Chief Kronon 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-44" class = "crystal-bounty-target-44">
          <span id = "crystal-bounty-44-text">Chief Kronon 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-45" class = "crystal-bounty-target-45">
          <span id = "crystal-bounty-45-text">Chief Kronon 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <!-- Chaotic Leyspark -->
        <div id = "crystal-bounty-target-46" class = "crystal-bounty-target-46">
          <span id = "crystal-bounty-46-text">Chaotic Leyspark 1</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-47" class = "crystal-bounty-target-47">
          <span id = "crystal-bounty-47-text">Chaotic Leyspark 2</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>
        <div id = "crystal-bounty-target-48" class = "crystal-bounty-target-48">
          <span id = "crystal-bounty-48-text">Chaotic Leyspark 3</span> 
          <img src = "../images/assets/bounty_target.png">
        </div>



          <!-- Map -->
      <img class = "map-timer-map" title = "crystal Basin" src = "../images/crystal-oasis/map.jpg"> 

      </div> <!-- End of map-box --> 
    </div> <!-- End of map-timer-wrapper -->

  </div> <!-- End of page-box -->

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
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/crystal-oasis.js?v=<?php echo $date;?>"></script>
</body>
</html>
