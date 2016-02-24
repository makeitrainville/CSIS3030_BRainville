<?
	include("global.php");
	include("header.php");

$product_id = intval($_GET["product_id"]);

$result = mysqli_query($connection, "SELECT * FROM products where id = $product_id");
$row = mysqli_fetch_assoc($result); ?>
	<div class="titles"><h3> <? echo $row["product_name"] . "<br />"; ?> </h3></div>
	<div class="description"><p> <? echo $row["description"] . "<br />"; 
	echo "<img src='img/" . $row["image"] . "'><br /><br />"; ?></p></div> <?
 ?>
<br />
	<div class="form">
<form action="cart_process.php" method="POST"> 

<? echo 'Quantity: <input type="number" name="product_' . $product_id . '" size="3" width="50%"><br /><br />';

 ?>

<input type="submit" value="Add to Cart">
	</div>

<? $product_id = intval($_POST["product_id"]);

//echo "<a href='product_detail.php?product_id=" . $row["id"] . "'>";
//product_id=" . $row["id"]

	include("footer.php");
?>
