<html>
<head>
	<title>Comic Books Galore - </title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
	<style type="text/css">
		#leftCol > img {
			width:280px;
			height:400px;
			margin-top: -10px;
			margin-left: 30px;
		}
	</style>
</head>

<body onload="init();">
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<ul>
<li><a href="index.php">Products</a></li>
<li><a href="Checkout.php">Shopping Cart</a></li>


</ul>
</div>
<div id="main">
	<div id="innerWrapper">
		<div id="leftCol">
		</div>
		<div id="rightCol" style="font-size:12px">
		<div id="price">Price: </div>
		<form name="buyNow" method="POST" action="Checkout.php">
			<input type="submit" id="buyNow" Value="Add to Shopping Cart" />
			<input type="hidden" id="ProductName" name="ProductName" />
			<input type="hidden" id="ProductSku" name="ProductSku" />
			<input type="hidden" id="ProductPrice" name="ProductPrice"/ >
		</form>
		</div>
	</div>
</div>
<div id="sidebar">
<h2>Product List</h2>
<p></p>
<ul>
<li><a href="product_1.php">Amazing Fantasy 15 (1962)</a></li>
<li><a href="product_2.php">Detective Comics 27 (1939)</a></li>
<li><a href="product_3.php">Action Comics 1 (1938)</a></li>
<li><a href="product_4.php">Showcase 22 (1959)</a></li>
<li><a href="product_5.php">The Avengers #1 (1963)</a></li>
</ul>
</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script type="text/javascript">
	var productName = "Detective Comics 27 (1939)",
	productImage = "Detective_Comics_27.jpg",
	productSku = "3812639379154",
	productPrice = "400.00",
	productDescription="Detective Comics #27 (May 1939) featured the first appearance of Batman (as 'The Bat-Man'). That superhero would eventually become the star of the title, the cover logo of which is often written as 'Detective Comics featuring Batman'. Because of its significance, issue #27 is widely considered one of the most valuable comic books in existence, with one copy selling for $1,075,000 in a February 2010 auction.",
		init = function(e) {
				$("#leftCol").append("<img src='images/"+productImage+"' />");
				$("#rightCol").append(productDescription);
				$("#price").append(productPrice);
				$('#buyNow').click(function() {
					$("#ProductName").val(productName);
					$("#ProductSku").val(productSku);
					$("#ProductPrice").val(productPrice);
				});
				document.title += " " + productName;
		};
</script>
</body>
</html>