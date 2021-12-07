<div id = "bookmark-button" onclick = "show_bookmark_left(this);" class = "bookmark-button"> &#10097; </div>

<div class = "splatter-container">
	<div class  = "splatter-bkg"></div>
</div>
<div class = "footer">
	<div class = "inner-footer">
		<h1> Created By </h1>
		<a href = "<?php echo $base;?>/resources/about-me.php"> Peureki.3647 |</a>
		<a href = "<?php echo $base;?>/resources/about-me.php"> Peureki#5452 |</a>
		<a href = "mailto: peureseachcenter@gmail.com"> peuresearchcenter@gmail.com </a>
		<h1 style = "margin-top: 10px;"> Artwork </h1>
		<a href = "https://www.twitter.com/tiffymew"> @tiffymew </a>
	</div>

	<div class = "inner-footer">
		<h1> Support </h1>
		<a href="<?php echo $base;?>/supporters.php" style = "margin-bottom: 10px;"> List of supporters </a>
		<br><a href="https://www.patreon.com/peureki" target = "_blank"> Patreon </a>
		<br><a href="https://www.paypal.me/peureki" target = "_blank">Paypal </a>
	</div>

	<div class = "inner-footer">
		<p1> Associated logos, renderings, images, and other related content are registered trademarks to ArenaNet or NCSOFT.</p1>
	</div>
</div>

<script>

function show_bookmark_left(button){
	let bookmark_left = document.getElementById('bookmark-left');
	button = document.getElementById(button);

	console.log("this happened");
	
	if (bookmark_left == null){
		button.style.display = "none";
	}

	try{
		if (bookmark_left.style.display == "block"){
			bookmark_left.style.display = "none";
		} else {
			bookmark_left.style.display = "block";
		}
	} catch (error){}

	
	
}
show_bookmark_left('bookmark-button');
</script>