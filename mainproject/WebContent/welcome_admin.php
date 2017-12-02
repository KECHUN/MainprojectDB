<?php
ob_start();
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Simple Business Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
			
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li class="active">
					<a href="search.html">Search</a>
				</li>
				<form action="buckup.php" method="post">
				<li>
					<button class="btn btn-primary" type="submit">Transfer today transactions</button>
				</li>
				</form>
				<form action="transactions.php" method="post">
				<li>
					<button class="btn btn-primary" type="submit">Check all transactions</button>
				</li>
				</form>
				<form action="logout.php" method="post">
				<li>
					<button class="btn btn-primary" type="submit">Log out</button>
				</li>
				</form>
			</ul>
			
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
		<?php
		session_start();
		
        echo"Welcome ".$_SESSION["user"];
?>	
			
		
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>About Us</h4>
				
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> 
				</p>
				<p>
					<span>Phone:</span> 
				</p>
				<p>
					<span>Email:</span> 
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<a href="" class="subscribe">CONTACT US</a>
			</div>
		</div>
		<div id="footsocial">
			<div class="clearfix">
				<div class="connect">
					<a href="https://www.facebook.com/SimpleWebsiteTemplates" class="facebook"></a><a href="" class="googleplus"></a><a href="http://pinterest.com/" class="pinterest"></a>
				</div>
				<p>
					© 2013 Your Business. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>