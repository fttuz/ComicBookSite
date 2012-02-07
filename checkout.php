<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
// Start the session
session_start();
// Process actions


if(isset($_POST['clear'])) 
{
	clearCart();
} 
else 
{
	$product_name = $_POST['ProductName'];
	$product_sku = $_POST['ProductSku'];
	$product_price = $_POST['ProductPrice'];
	
	if( isset($_SESSION['cart'][$product_sku]) ) {
    	$_SESSION['cart'][$product_sku]['qty'] += 1;
 	} else {
    	$_SESSION['cart'][$product_sku] = array(Item => $product_sku, Name => $product_name, qty => 1, Price => $product_price);
 	}
}

function displayCart()
{
	echo "<table id='shoppingCart'>";
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				echo "<tr><td>" . $mykey . "</td><td>" . $myValue . "</td></tr>";	
			}
		}
	}
	echo "</table>";
}

function sumTotal()
{
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				if ($mykey == "Price") {
					$sum += $myValue;
				}
			}
		}
		//$sum = "$" . $sum . ".00";
	}
	return $sum;
}

function clearCart()
{
	unset($_SESSION['cart']);
}

function totalQty()
{
		if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				if ($mykey == "qty") {
					$myQty += $myValue;
				}
			}
		}
	}
	return $myQty;
}
function getSku()
{
	return $_POST['ProductSku'];
}
?>
<html>
<head>
	<title>Comic Books Galore - Checkout</title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
	<style type="text/css">
		table {border-bottom: 2px solid black;}
	</style>
</head>

<body>
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<ul>
<li><a href="index.php">Return to Products</a></li>
<li><a href="Checkout.php">Shopping Cart</a></li>

</ul>
</div>
<div id="main">
<h2>Your Cart</h2>
<?php
	echo displayCart();
?>

<h2>Total Price:</h2>
<?php 
if (sumTotal().length > 0) {
	echo "$" . sumTotal() . ".00";
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

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
</body>
</html>