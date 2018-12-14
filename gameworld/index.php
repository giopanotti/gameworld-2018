<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Game World - Buy Our Damn Games">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GameWorld</title>
</head>
<body>
<header id="header">
	<?php
	include("header.php");
	 ?>
</header>

<div>
		<div id="masseffect">
			<img class="image" src="images/masseffect.jpg">
		</div>
		<div class="text-image">
			Welcome to
		</div>
		<div class="text2-image">
			GameWorld
		</div>
	<div id="side-bar">
		<nav><a href="games.php?gameCategoryId=1"><img class="playstation" src="images/playstation.jpg"></a></nav>
		<nav><a href="games.php?gameCategoryId=3"><img class="xbox" src="images/xbox.jpg"></a></nav>
		<nav><a href="games.php?gameCategoryId=2"><img class="steam" src="images/steam.jpg"></a></nav>
	</div>
</div>

<div class="clearfix"></div>

<footer id="footer">
	<?php
	include("footer.php");
	 ?>
</footer>
</body>
