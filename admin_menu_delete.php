<?php

	include("global.php");

	$id = intval($_GET["id"]);

	mysqli_query($connection,"delete from items where id = $id");

	header("Location: admin_menu_list.php");

?>
