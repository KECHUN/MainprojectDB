
<?php
//Connect To Database
$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';
$usertable='Account';
$yourfield = 'user_name';

mysqli_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbname);

$query = 'SELECT * FROM ' . $usertable;
$result = mysqli_query($query);
if($result) {
    while($row = mysqli_fetch_array($result)){
        print $name = $row[$yourfield];
        echo 'Name: ' . $name;
    }
}
else {
    print "Database NOT Found ";
    mysqli_close($db_handle);
}
?>