<?php
session_start();
?>
<style>
table, th, td{
border: 1px solid black;
}
</style>
<?php
$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';
$province = $_POST["province"];
$city = $_POST["city"];
$category= $_POST["category"];


$dbc = mysqli_connect($hostname,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbc,$dbname);
$query = "SELECT * FROM Ad WHERE  =  ";
$result = mysqli_query($dbc,$query);

echo ' 

		<table>
		<tr>
		<th>Title</th>
		<th>Category</th>
		<th>Subcategory</th>
		<th>Expiry Date</th>
		<th>Price</th>
		<th>Description</th>
		<th>Image 1</th>
		<th>Image 2</th>
		<th>Image 3</th>
		<th>Image 4</th>
		<th></th>
		</tr> ';

if($result) {
    while($row = mysqli_fetch_array($result)){
echo ' <tr>
		<td>'.$row["title"].'</td>
		<td>'.$row["category"].'</td>
		<td>'.$row["subCategory"].'</td>
		<td>'.$row["endDate"].'</td>
		<td>'.$row["price"].'</td>
		<td>'.$row["description"].'</td>
		<td><img src="'.$row["image1"].'" height="250" width="250"></td>
		<td><img src="'.$row["image2"].'" height="250" width="250"></td>
		<td><img src="'.$row["image3"].'" height="250" width="250"></td>
		<td><img src="'.$row["image4"].'" height="250" width="250"></td>
		<td><a href = "editAd.php?varname='.$row["adID"].'">Edit</a></td>
	<tr>';
    }
}
else {
    print "Database NOT Found ";
    mysqli_close($dbc,$db_handle);
}
echo ' </table>';
?>
