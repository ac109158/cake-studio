<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MaryLou's Cake Studio</title>
<link rel="stylesheet" href="style.css">
<!-- Font for Navigation Links -->
<link href='http://fonts.googleapis.com/css?family=Italiana' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- scripts for the Ajax pulls -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ajax2.js"></script>
	
</head>
<body>
	<div id="container" class="glow" class="clear">
	<div class="topTier">
		<img src="brand.jpg" alt="">
	</div>
	<div id="header">
		<div id="lowerLeft" class="navbg">
			<ul>
				<li class="ajax" ><a href="about.php">About</a></li>			
			</ul>
		</div>
		<div id="headerLeft" class="navbg">
			<ul>		
				<li class="ajax"><a href="cakes.php">Cakes</a>
					<ul class="offset">
						<li><a href="flavors.php">Flavors</a></li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="Features.php">Features</a></li>
					</ul>
				</li>
			</ul>
			
		</div>
		<div id="headerCenter">
			<div id="logo" class="navbg">
				<a href="index.php"><img src="logo3.png" id="logoimg"></a>
			</div>
			<div id="menu"></div>
			<div id="menu2"></div>
			<div id="menu3"></div>
		</div>
		<div id="headerRight" class="navbg">
			<ul>
				<li class="ajax"><a href="gallery.php">Gallery</a>
					<ul class="offset2">
						<li><a href="weddingGallery.php">Wedding</a></li>
						<li><a href="birthdayGallery.php">Birthday</a></li>
						<li><a href="toddlerGallery.php">Toddler</a></li>
						<li><a href="babyGallery.php">Baby</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="lowerRight" class="navbg">
			<ul>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>

	</div>