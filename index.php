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
<div id="header"><h1>Comic Books Galore!</h1></div>
<div id="nav">
<?php include("navbar.php") ?>
</div>
<div id="main">
<h2>The Best Comic Books!</h2>
<p></p>
<iframe width="480" height="274" src="http://www.youtube.com/embed/lCIS_uoQrvM?rel=0&iv_load_policy=3&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
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
<div style="position:absolute;"><img style="width:1px; height:1px;" src="http://servedby.flashtalking.com/segment/modify/at1;;pixel/?name=LandingPage"/></div>

<script type="text/javascript" src="js/jquery-1.7.1.js"></script>

</body>
</html>