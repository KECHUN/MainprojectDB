<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
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

$query = "SELECT * FROM admin WHERE admin_name = '$userN' AND password = '$pw'";
$result = mysqli_query($dbc,$query);
if(mysqli_num_rows($result) > 0) {
    
    $_SESSION["user"] = $userN;
    
    header("Location: welcome_admin.php"); 
    exit();
}
else {
   $message = "";
   $_SESSION["message"] = $message;
    header("Location: index.html"); 
}
?>

</body>
</html>