<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();
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
<ul>
<li><a href="index.php">Products</a></li>
<li><a href="Checkout.php">Shopping Cart</a></li>


</ul>
</div>
<div id="main">
<h2>Thank you for your purchase.</h2>
<?php


	echo "<table id='shoppingCart'>";
	//if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				echo "<tr><td>" . $mykey . "</td><td>" . $myValue . "</td></tr>";	
			}
		}
	//}
	echo "</table>";
	unset($_SESSION['cart']);
?>
<p></p> 
<a href="index.php">Return to Shopping></a>
</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>


<script type="http://code.jquery.com/jquery-1.7.1.js" src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script type="text/javascript">
	var transactionID = Math.floor(Math.random() * 1000);
</script>
</body>
</html>