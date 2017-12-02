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
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="services.html">Our Services</a>
				</li>
				<li>
						<a href="team.html">Log out</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
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

<?php
$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';


$dbc = mysqli_connect($hostname,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbc,$dbname);

$query = "SELECT * FROM Account WHERE user_name = '".$_SESSION['user']."' ";
$result = mysqli_query($dbc,$query);
if($result) {
    while($row = mysqli_fetch_array($result)){
         $membership = $row["membership"];
         $firstName = $row["first_name"];
         $lastName = $row["last_name"];
         $email = $row["email"];
         $phone = $row["phone"];
    }
}
else {
    print "Database NOT Found ";
    mysqli_close($dbc,$db_handle);
}
        echo 'First Name: ' . $firstName.'<br>';
	echo 'Last Name: '  . $lastName.'<br>';
	echo 'Email address: ' . $email.'<br>';
	echo 'Phone number: ' . $phone. '<br>';
	echo 'Membership: ' . $membership.'<br>';
?>
<a href="membership.php">Change membership</a>
<a href="viewOwnAds.php">View, edit and delete ads</a>
<a href="postAds.php">Post an ad</a>
<a href="search.php">Search for an ad</a>


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
