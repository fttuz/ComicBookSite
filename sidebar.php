<?php

$myquery = "SELECT id, name FROM products";

$resultset = queryDB($myquery);

while ($row = mysql_fetch_array($resultset, MYSQL_BOTH)) {
    $saved[] = $row;
}

closeDB();

?>
<h2>Product List</h2>
<p></p>
<ul>
<?php
	foreach ($saved as $key => $item) {
		echo "<li><a href='product_page.php?id=" . $item['id'] . "'>" . $item['name'] . "</a></li>\n";
	}
?>
</ul>

