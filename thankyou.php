<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
session_start();
include("inc/functions.inc.php");
?>

<html>
<head>
	<title>Comic Books Galore - Thank You</title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
</head>

<body>
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<?php include("navbar.php") ?>
</div>
<div id="main">
<h2>Thank you for your purchase.</h2>
<?php
	echo "<table id='shoppingCart'>";
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				echo "<tr><td>" . $mykey . "</td><td>" . $myValue . "</td></tr>";	
			}
		}
	echo "</table>";
	//unset($_SESSION['cart']);
?>
<p></p> 
<a href="index.php?action=clear">Return to Shopping></a>
</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>
<script type="text/javascript">
	var transactionID = Math.floor(Math.random() * 1000);
	var ftSpotLight = new Image();
	ftSpotLight.src = "http://servedby.flashtalking.com/spot/1921;7690;896/?spotName=Thank_You&ftXRef="+transactionID+"&U1=<?php echo getSkus(); ?>";
</script>

<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
</body>
</html>