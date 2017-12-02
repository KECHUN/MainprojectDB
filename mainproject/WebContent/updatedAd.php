<style>
table, th, td{
border: 1px solid black;
}
</style>
<?php>

$hostname='vvc353_2.encs.concordia.ca';
$username='vvc353_2';
$password='Philips6';
$dbname='vvc353_2';

$adID = htmlentities($_POST["adID"],ENT_QUOTES);
$title= htmlentities($_POST["title"],ENT_QUOTES);
$category= htmlentities($_POST["category"],ENT_QUOTES);
$subcategory= htmlentities($_POST["subcategory"],ENT_QUOTES);
$price= htmlentities($_POST["price"],ENT_QUOTES);
$description= htmlentities($_POST["description"],ENT_QUOTES);
$image1= $_POST["image1"];
$image2= $_POST["image2"];
$image3= $_POST["image3"];
$image4= $_POST["image4"];

$dbc = mysqli_connect($hostname,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
mysqli_select_db($dbc,$dbname);

if(isset($_POST["Edit"])) {
    echo 'test<br>';
    $query = "SELECT * FROM Ad WHERE adID = '".$adID."' ";
    $update = "UPDATE Ad 
               SET
                 title = '".$title."',
                 category = '".$category."',
                 subcategory = '".$subcategory."',
                 price = '".$price."',
                 description = '".$description."',
                 image1 = '".$image1."',
                 image2 = '".$image2."',
                 image3 = '".$image3."',
                 image4 = '".$image4."'
               WHERE adID = '".$adID."' ";
    $updateResult = mysqli_query($dbc,$update);
    if($updateResult) {
        echo 'Ad edited:<br>
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
        $queryResult = mysqli_query($dbc,$query);
        while($row = mysqli_fetch_array($queryResult)){
            echo ' <tr>
    		<td>'.html_entity_decode($row["title"]).'</td>
    		<td>'.html_entity_decode($row["category"]).'</td>
    		<td>'.html_entity_decode($row["subCategory"]).'</td>
    		<td>'.html_entity_decode($row["endDate"]).'</td>
    		<td>'.html_entity_decode($row["price"]).'</td>
    		<td>'.html_entity_decode($row["description"]).'</td>
    		<td><img src="'.$row["image1"].'" height="250" width="250"></td>
    		<td><img src="'.$row["image2"].'" height="250" width="250"></td>
    		<td><img src="'.$row["image3"].'" height="250" width="250"></td>
    		<td><img src="'.$row["image4"].'" height="250" width="250"></td>
    		<td><a href = "editAd.php?varname='.$row["adID"].'">Edit</a></td>
    	    <tr>';
        }
        echo ' </table>';
    }
    else {
        print "Database NOT Found ";
        echo $adID, $title, $category, $subcategory, $price, $description, $image1, $image2, $image3, $image4;
        mysqli_close($dbc);
    };
} else if (isset($_POST["Delete"])) {
    $delete = "DELETE FROM Ad
                   WHERE adID = '".$adID."' ";
    $deleteResult = mysqli_query($dbc,$delete);
    if($deleteResult) {
        echo 'Your ad has been deleted';
    } else {
        print "Database NOT Found ";
        mysqli_close($dbc);
    }
};

?>

<a href= "viewOwnAds.php">Return to your ads</a>
