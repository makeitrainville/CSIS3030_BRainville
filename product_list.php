<?
	include("global.php");
	include("header.php");

$category_id = intval($_GET["category_id"]);
$result = mysqli_query($connection, "SELECT * FROM categories where id = $category_id"); 
$row = mysqli_fetch_assoc($result);
echo $row["category_name"];

echo "<br /><br />";

$result = mysqli_query($connection, "SELECT * FROM products where category_id = $category_id");
while ($row = mysqli_fetch_assoc($result)) { ?>
	<div class="titles"><h3> <? echo $row["product_name"] . "<br />"; ?> </h3></div>
	<div class="description"><p><? echo $row["description"] . "<br />";
	echo "<img src='img/" . $row["image"] . "'><br /><br />"; ?>
	</p></div>
<div class="view_product">
<? echo "<a href='product_detail.php?product_id=" . $row["id"] . "'>View Product</a>";
} ?>
</div>

<?
	include("footer.php");
?>
