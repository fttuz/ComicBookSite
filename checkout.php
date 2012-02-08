<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
// Start the session
session_start();
// Process actions
include("inc/functions.inc.php");

if(isset($_POST['clear'])) 
{
	clearCart();
} 
else 
{
	$product_name = $_POST['ProductName'];
	$product_sku = $_POST['ProductSku'];
	$product_price = $_POST['ProductPrice'];
	
	if (strlen($product_sku > 0)) {
		if( isset($_SESSION['cart'][$product_sku]) ) {
	    	$_SESSION['cart'][$product_sku]['qty'] += 1;
	 	} else {
	    	$_SESSION['cart'][$product_sku] = array(Item => $product_sku, Name => $product_name, qty => 1, Price => $product_price);
	 	}
 	}
}


?>
<html>
<head>
	<title>Comic Books Galore - Checkout</title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
	<style type="text/css">
		table {border-bottom: 2px solid black; margin-bottom: 10px; table-layout:fixed; width:360px;}
	</style>
</head>

<body>
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<?php include("navbar.php") ?>
</div>
<div id="main">
<h2>Your Cart</h2>
<?php
	echo displayCart();
?>

<h2>Total Price:</h2>
<?php 
if (sumValuesFromCart("Price").length > 0) {
	echo "$" . sumValuesFromCart("Price") . ".00";
}
?>
<p></p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="submit" name="clear" value="Clear Cart">
</form>

<form id="frmPurchase" name="buyNow" method="POST" action="ThankYou.php">
	<input type="hidden" id="transId" name="transId" />
	<input type="Submit" Value="Buy Now!!!!" onClick="genTransId();" />
</form>

</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>
<div style="position:absolute;"> 
<img style="width:1px; height:1px;" src="http://servedby.flashtalking.com/spot/1921;7689;896/?spotName=Checkout_Page&U1=<?php echo getSkus(); ?>"/> 
</div>

<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
</body>
</html>