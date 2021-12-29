<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160103677-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160103677-1');
</script>

<!-- 
	Insert base of the URL (home directory) to be placed into the href 
	By echoing in href, it displays in the URL
	Place this php at the top <head>
-->
<?php
	//$base = "https://www.peuresearchcenter.com";
	$base = "http://localhost/peuresearchcenter";
	$date = date("D M d, Y G:i"); // For versioning
?>
<!-- Tab icon -->
<link rel = "icon" href = "<?php echo $base;?>/images/assets/peu-choya.png">

<!-- Main files -->
<link type = "text/css" rel = "stylesheet" href = "<?php echo $base;?>/styles.css?v=<?php echo $date;?>">
<script type = "text/javascript" src = "<?php echo $base;?>/script.js?v=<?php echo $date;?>"></script>

<div onclick = "applyMode();" class = "dark-mode">
	<img style = "display: none;" id = "mode-moon" src = "<?php echo $base;?>/images/assets/moon.svg">
	<span id = "mode-circle"></span>
</div>

<!-- Include dark mode feature -->
<script type = "text/javascript" src = "<?php echo $base;?>/mode.js?v=<?php echo $date;?>"></script>

<!-- Shortcut Icon + Scalable view -->
<link rel = "shortcut icon" href = "../images/assets/peu-choya.png">
<meta name="viewport" content="height=device-height, 
    					width=device-width, initial-scale=1.0, 
                      	minimum-scale=1.0, maximum-scale=1.0, 
                      	user-scalable=no">

