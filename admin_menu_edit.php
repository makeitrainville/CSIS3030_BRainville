
<?php

include("global.php");



$id = intval($_GET["id"]);
$result = mysqli_query($connection,"select * from items where id = $id");
$row = mysqli_fetch_assoc($result);



$description = $row["description"];
$title = $row["title"];
$filename = $row["filename"];



include("admin_menu_form.php");



$category_id = $_POST['category'];

$sql = "update items set description = '$description', title = '$title', category_id = '$category_id', filename = '$filename' where id = $id";


mysqli_query($connection,$sql);



?>

<br /><br />


<?php
include("footer.php");


?>


