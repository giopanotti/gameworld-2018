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
<div class="contact-container">
  <form action="contact.php">
  <div class="contact-item1">
		<label for="fname">First Name</label>
	</div>
    <input class="contact-items" type="text" id="fname" name="firstname" placeholder="Your name.."></br>

    <label class="contact-items" for="lname">Last Name</label></br>
    <input class="contact-items" type="text" id="lname" name="lastname" placeholder="Your last name.."></br>

    <label class="contact-items" for="country">E-mail</label></br>
    <input class="contact-items" type="text" id="lname" name="E-mail" placeholder="Your E-Mail.."></br>

    <label class="contact-items" for="subject">Subject</label></br>
    <textarea class="contact-items"  id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea></br>

    <input class="contact-items2" type="submit" value="Submit">
  </form>
		<img class="contact-png"src="images/contact.png">
	</div>
	<img class="halo5" src="images/halo5.jpg">
</div>
<div class="clearfix"></div>

<footer id="footer">
	 <?php
	 include("footer.php");
	 ?>
</footer>
</body>
