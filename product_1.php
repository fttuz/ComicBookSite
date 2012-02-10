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
	var productName = "Amazing Fantasy 15 (1962)",
	productImage = "220px-Amazing_Fantasy_15.jpg",
	productSku = "1293812938172",
	productPrice = "250.00",
	productDescription="With nothing to lose, publisher Martin Goodman agreed to allow Lee to introduce Spider-Man, a new kind of superhero — one who would be a teenager, but not a sidekick, and one who would have everyman doubts, neuroses and money problems.  Sales for Amazing Fantasy #15 proved to be one of Marvel's highest at the time and The Amazing Spider-Man was quickly launched to capitalize on the new character's apparent popularity",
		firePixel = function(pixelType) {
			var ftpixel = new Image();
			switch(pixelType) {
				case "segment":
				  ftpixel.src = "http://servedby.flashtalking.com/spot/1921;7691;896/?spotName=Product_Page&U1="+productSku;
				  break;
				case "spotlight":
				  ftpixel.src = "http://servedby.flashtalking.com/segment/modify/at8;;pixel/?name=ProductPage&valuePairs="+productSku;
				  break;
				 default:
				 	break;
			};
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
				firePixel("segment");
				firePixel("spotlight");
		};
</script>

</body>
</html>