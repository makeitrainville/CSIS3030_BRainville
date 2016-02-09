<?php 
	include("global.php");


?>



<?php


$description = mysqli_real_escape_string($connection,$_POST["description"]);
$title = mysqli_real_escape_string($connection,$_POST["title"]);
$id = intval($_POST["id"]);


	if ($description == "")
		$errormessage = $errormessage . "Description cannot be blank<br />";

	if ($title == "")
		$errormessage = $errormessage . "Title cannot be blank<br />";


	if ($errormessage != "") {
		include("admin_menu_form.php");
		die();
	}
	

if (is_uploaded_file($_FILES["pic"]["tmp_name"])) {
	$filename = uniqid("IMG") . ".jpg"; 
	copy($_FILES["pic"]["tmp_name"],"uploads_img/" . $filename);
}

if (mysqli_real_escape_string($connection,$_POST["category"]) == "dessert") {
	$category_id = 1;
} 
else {
	$category_id = 2;
}


if ($id == 0) {
$sql = "insert into items (description, title, category_id, filename) values ('$description','$title','$category_id', '$filename')";
} else {
$sql = "update items set description = '$description', title = '$title', category_id = '$category_id', filename = '$filename' where id = $id";
}

mysqli_query($connection,$sql);
include("header.php");
echo "Thank you, your file has been saved.<br /> <a href='admin_menu_list.php'>Return to Listing</a><br />";
echo "Description: " . $_POST["description"] . "<br />";
echo "<img src='uploads_img/$filename'>";


include("footer.php");

?>







