<?php>
$adID = $_GET['varname'];


$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';


$dbc = mysqli_connect($hostname,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbc,$dbname);
$query = "SELECT * FROM Ad WHERE adID = '".$adID."' ";
$result = mysqli_query($dbc,$query);
if($result) {
    while($row = mysqli_fetch_array($result)){
        echo ' 
          <form name="newAd" method = "POST" action = "updatedAd.php">
              <input type="hidden" name="adID" value="'.$adID.'">
              Title: <input type="text" name="title" value="'.html_entity_decode($row["title"]).'"><br>
              Category: <input type="text" name="category" value="'.html_entity_decode($row["category"]).'"><br>
              Subcategory: <input type="text" name="subcategory" value="'.html_entity_decode($row["subCategory"]).'"><br>
              Price: <input type="text" name="price" value="'.html_entity_decode($row["price"]).'"><br>
              Description: <input type="text" name="description" value="'.html_entity_decode($row["description"]).'"><br>
              Image 1: <input type="text" name="image1" value="'.$row["image1"].'"><br>
              Image 2: <input type="text" name="image2" value="'.$row["image2"].'"><br>
              Image 3: <input type="text" name="image3" value="'.$row["image3"].'"><br>
              Image 4: <input type="text" name="image4" value="'.$row["image4"].'"><br>
              <input type="submit" name="Edit" value="Edit">
              <input type="submit" name="Delete" value="Delete" >
          </form>';


}
}
else {
    print "Database NOT Found ";
    mysqli_close($dbc);
}
?>
