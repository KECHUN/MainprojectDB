<?php
ob_start();
session_start();
?>

<html>
<body>	
<?php

$userN= $_POST["userN"];
$pw = $_POST["passW"];
$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';



$dbc = mysqli_connect($hostname,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbc,$dbname);

//$query = "SELECT * FROM transaction "; //add more account data to session?
$result = mysqli_query($dbc,"CALL backupTransactions()");

     
   echo "Transaction data back up completed"; 

?>

</body>
</html>