<html>
<head>
	<title>Comic Books Galore - </title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
</head>

<body onload="init();">
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<?php include("navbar.php") ?>
</div>
<div id="main">
	<div id="innerWrapper">
		<div id="leftCol">
		</div>
		<div id="rightCol" style="font-size:12px">
		<div id="price">Price: </div>
		<form name="buyNow" method="POST" action="checkout.php">
			<input type="submit" id="buyNow" Value="Add to Shopping Cart" />
			<input type="hidden" id="ProductName" name="ProductName" />
			<input type="hidden" id="ProductSku" name="ProductSku" />
			<input type="hidden" id="ProductPrice" name="ProductPrice"/ >
		</form>
		</div>
	</div>
</div>
<div id="sidebar">
<?php include("sidebar.php") ?>
</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>


<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript">
	var productName = "Action Comics 1 (1938)",
	productImage = "Action_Comics_1.jpg",
	productSku = "84625395716233",
	productPrice = "700.00",
	productDescription="Action Comics is an American comic book series that introduced Superman, the first major superhero character as the term is popularly defined. The publisher was originally known as Detective Comics, Inc., and later as National Comics and as National Periodical Publications, before taking on its current name of DC Comics.",
		fireSpot = function(a) {
				var ftSpotLight = new Image();
				ftSpotLight.src = "http://servedby.flashtalking.com/spot/1921;7691;896/?spotName=Product_Page&U1="+productSku;
		},
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
				fireSpot();
		};

</script>

</body>
</html>