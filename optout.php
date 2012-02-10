<?php
	include("inc/function.inc.php");
?>

<html>
<head>
	<title>Comic Books Galore - Optout</title>
	<link rel="stylesheet" HREF="css/style.css" TYPE="text/css">
</head>

<body>
<div id="wrap">
<div id="header"><h1>Comic Books Galore</h1></div>
<div id="nav">
<?php include("navbar.php") ?>
</div>
<div id="main">
<h2>Your Privacy Matters!</h2>
... well, no it doesnt.   We keep everything, and track you all over the internets.   We know where you live. 
<p></p>
If you dont like that, <a href="javascript:opt();">click here</a>
<p>
<div id="optStatus"></div>
</div>
<div id="sidebar">
</div>
<div id="footer">
<p>&copy; Comic Books Galore, Inc.  <a href="optout.php">Privacy & Optout</a></p>
</div>
</div>


<script type="text/javascript" src="js/jquery-1.7.1.js"></script>


<script type="text/javascript">

function opt()
	{	
		//opt out/in
		var script1 = document.createElement('script');
	   	script1.type= 'text/javascript';
	   	script1.src= 'http://servedby.flashtalking.com/segment/optout/;;javascript/?token='+ftToken+'?delete=true';
		document.getElementsByTagName("HEAD")[0].appendChild(script1);
			
		alert("You are now opted out of cookies, you bastard.  Fine, be that way.");
		document.getElementById("optStatus").innerHTML = "You are currently "+(ftToken=="in"?"<b>not</b> ":"")+"opted out of cookies.";
		
	}
	
	//get status beore optout/optin
	var scriptstat = document.createElement('script');
   	scriptstat.type= 'text/javascript';
   	scriptstat.src= 'http://servedby.flashtalking.com/segment/status/;;javascript/'
	/*if(document.all)
	{
		scriptstat.onreadystatechange = function()
		{
			if(scriptstat.readyState == "loaded")
			{
				opt();
			}
		};
	}
	else
	{
		scriptstat.onload = function(){ opt(); };
	}*/
	document.getElementsByTagName("HEAD")[0].appendChild(scriptstat);
	

</script>



</body>
</html>