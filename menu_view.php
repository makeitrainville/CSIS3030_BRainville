<?php 
	include("global.php");
	include("header.php");


$sql = "SELECT * FROM items WHERE category_id= " .intval($_GET["id"]);


$result = mysqli_query($connection,$sql);
	

	while ($row = mysqli_fetch_assoc($result)) {
		
		echo "<img src='uploads_img/" . $row["filename"] . "' width=250px>" . "<br/>";
		echo $row["title"] . "<br />";
		echo $row["description"] . "<br />";

	}




?>

<br/>


<?php include("footer.php");

?>