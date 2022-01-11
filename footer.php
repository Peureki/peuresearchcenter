<div id = "bookmark-button" onclick = "show_bookmark_left(this.id);" class = "bookmark-button"> </div>

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

// For mobile
// Show button on the top left to remove and show the bookmarks on the side
// It is defaulted to show it, but if there's a page where there isn't bookmarks, then it won't show at all
function show_bookmark_left(button){
	let bookmark_left = document.getElementById('bookmark-left');
	button = document.getElementById(button);
	// Check if the page has the bookmarks at all
	// If not, don't show the button
	if (bookmark_left == null){
		button.style.display = "none";
	}

	if (bookmark_left.style.display == "block"){
		bookmark_left.style.display = "none";
		button.innerHTML = "\u2771";
	} else {
		bookmark_left.style.display = "block";
		button.innerHTML = "\u2770"; 
	}	
}
show_bookmark_left('bookmark-button');
</script>