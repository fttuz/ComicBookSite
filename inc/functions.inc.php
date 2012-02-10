<?php
function displayCart()
{
	if(isset($_SESSION['cart'])) {
		echo "<h3>Your Cart</h3>";
		foreach ($_SESSION['cart'] as $key => $value) {
			echo "<table id='shoppingCart'>";
			foreach ($value as $mykey => $myValue)
			{
				echo "<tr><td>" . $mykey . "</td><td>" . $myValue . "</td></tr>";	
			}
			echo "</table>";
		}
	} else {
		echo "Your cart is empty!  :(";
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

//DB

function queryDB($query) {
    //dev
    $link = mysql_connect('localhost', 'root', 'root');

    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }

    $db_selected = mysql_select_db('comicsgalore', $link);
    if (!$db_selected) {
        die ('Can\'t use db : ' . mysql_error());
    }

    //$query = 'SELECT name, descrip, price, image, sku FROM products where id=' . $_GET['id'];
    //echo $query;

    $result = mysql_query($query);

    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        die($message);
    }

    //echo $name . " " . $desc . " " . $price . " " . $image . " " . $sku;
    return $result;
}

function closeDB() {

    mysql_free_result($result);

    mysql_close($link);
}

?>
