<?php
//Connect To Database
$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';
$usertable='Account';
$yourfield = 'user_name';

$dbc = mysqli_connect($hostname,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbc,$dbname);

$query = 'SELECT * FROM ' . $usertable;
$result = mysqli_query($dbc,$query);
if($result) {
    while($row = mysqli_fetch_array($result)){
         $name = $row[$yourfield];
        echo 'Name: ' . $name.'<br>';
    }
}
else {
    print "Database NOT Found ";
    mysqli_close($dbc,$db_handle);
}
?>
