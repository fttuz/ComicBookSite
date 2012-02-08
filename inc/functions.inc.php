<?php
function displayCart()
{
	
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			echo "<table id='shoppingCart'>";
			foreach ($value as $mykey => $myValue)
			{
				echo "<tr><td>" . $mykey . "</td><td>" . $myValue . "</td></tr>";	
			}
			echo "</table>";
		}
	}
	
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

function getProductNames()
{
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				if ($mykey == "Name") {
					$names = $myValue . ",";
				}
			}
		}
	}
	return $names;	
}


function getSku()
{
	return $_POST['ProductSku'];
}
function getSkus()
{
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				if ($mykey == "Item") {
					$skus = $myValue . ",";
				}
			}
			
		}
	}
	//lob off last comma
	$skus=eregi_replace(',$', '', $skus);
	return $skus;
}

function getTransactionId() {
	return rand();
}

?>
