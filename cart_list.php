<?
	include("global.php");
	include("header.php");

$result = mysqli_query($connection, "select * from cart join products on (cart.product_id = products.id) where session_id = '".session_id()."'"); ?>

<div class="list">
<form action="cart_process.php" method="POST"> 

<? while ($row = mysqli_fetch_assoc($result)) {

	echo '<div class="box">' . $row["product_name"] . '<br />' . '<input type="number" name="product_' . $row["product_id"] . '" value="' . $row["quantity"] . '" size="3">' . '<br />' . '</div>' . '<br /><br />';
}

	echo '<input type="submit" class="next" value="Update Cart">';

	//echo "<button type='button' class='button' name='update_cart'><a href='cart_list.php'>Update Cart</a></button>";

	//echo "<input type='button' class='button' name='update_cart' onClick='history.go(0)' value='Update Cart'>";

	echo '<input type="submit" class="next" name="checkout" value="Checkout">'; ?>
</div>

<?
	include("footer.php");
?>

