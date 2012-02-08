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

function clearCart()
{
	unset($_SESSION['cart']);
}

function sumValuesFromCart($type)
{
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				if ($mykey == $type) {
					$sum += $myValue;
				}
			}
		}
	}
	return $sum;
}

function getValuesFromCart($type)
{
	if(isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			foreach ($value as $mykey => $myValue)
			{
				if ($mykey == $type) {

					$retVal = $retVal . urlencode($myValue) . ",";
				}
			}
		}
	}
	//lob off last comma
	$retVal=eregi_replace(',$', '', $retVal);
	return $retVal;	
}

function getTransactionId() {
	return rand();
}

?>
