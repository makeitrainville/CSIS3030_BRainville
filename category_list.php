<?
	include("global.php");
	include("header.php");

$result = mysqli_query($connection, "SELECT * FROM categories order by category_name "); 

while($row = mysqli_fetch_assoc($result)) { ?>
	<h3><? echo "<a href='product_list.php?category_id=" . $row["id"] . "'>"; ?></h3>
	<? echo $row["category_name"];
	echo "</a>";
}
    

//<a href="product_list.php?category_id=1">Tennis Equipment</a>

	include("footer.php");
?>

