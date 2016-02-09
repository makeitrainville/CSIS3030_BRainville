<?php
 
	include("global.php");
	include("header.php"); 

	if ($_SESSION["id"] != "") {
	echo "Click <a href=\"admin_logout.php\">here</a> to logout<br /><br />";
		
	}

?>

<br/><br/>

<?php
	$sql = "select * from items";
	

	$result = mysqli_query($connection,$sql);
	
	

	echo "<a href='admin_menu_form.php'>Add an item to the menu</a><br /><br />";

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<img src='uploads_img/" . $row["filename"] . "' width=250px>" . "<br/>";
		echo "Description: " . $row["description"] . "<br />";
		echo "Title: " . $row["title"] . "<br />";
		echo "Category: " . $row["category_id"] . "<br />";
		echo "<a href='admin_menu_edit.php?id=" . $row["id"] . "'>Edit</a><br />";
		echo "<a href='admin_menu_delete.php?id=" . $row["id"] . "'>Delete</a><br /><br />";
	}


	include("footer.php");
?>