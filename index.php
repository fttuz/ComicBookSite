<?php
	session_start();
	include("inc/functions.inc.php");
	if ($_GET['action'] == "clear") {
		clearCart();
	}
?>
<html>
<head>
	<title>Comic Books Galore - Home</title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
</head>

<body>
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<?php include("navbar.php") ?>
</div>
<div id="main">
<h2>The Best Comic Books!</h2>
<p></p
	<div id="innerWrapper">
		<div id="leftCol">
			<h3><a href="product_1.php">Amazing Fantasy 15 (1962)</a></h3>
			<h3><a href="product_2.php">Detective Comics 27 (1939)</a></h3>
			<h3><a href="product_3.php">Action Comics 1 (1938)</a></h3>
			<h3><a href="product_4.php">Showcase 22 (1959)</a></h3>
			<h3><a href="product_5.php">The Avengers #1 (1963)</a></h3>
		</div>
		<div id="rightCol">
			<img src="images/comic-book-explosion1.jpg" width="150px" height="200px" />
		</div>

</div>
<div id="sidebar">
<?php include("sidebar.php") ?>
</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>
<div style="position:absolute;"> 
<img style="width:1px; height:1px;" src="http://servedby.flashtalking.com/spot/1921;7688;896/?spotName=Landing_Page"/> 
</div>


<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
</body>
</html>