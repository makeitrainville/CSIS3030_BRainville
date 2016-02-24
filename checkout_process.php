<?
	include("global.php");

$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
$lastname = mysqli_real_escape_string($connection,$_POST["lastname"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$state = mysqli_real_escape_string($connection,$_POST["state"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

if ($firstname == "")
		$errormessage = $errormessage . "First Name cannot be blank<br />";

	if ($lastname == "")
		$errormessage = $errormessage . "Last Name cannot be blank<br />";

	if ($address == "")
		$errormessage = $errormessage . "Address cannot be blank<br />";

	if ($city == "")
		$errormessage = $errormessage . "City cannot be blank<br />";

	if ($state == "")
		$errormessage = $errormessage . "State cannot be blank<br />";

	if ($zip == "")
		$errormessage = $errormessage . "Zip code cannot be blank<br />";


	if ($errormessage != "") {
		include("checkout_form.php");
		die();
	}

//if ($id == 0) {
//	$sql = "update products set quantity_remaining = $quantity_remaining - $quantity where product_id = $id";
//}

include("header.php");
echo "Thank you, your order has been received. Stay Bearded.";
echo "<br /><br />";

echo "<div class='box'>";
echo "Here is Your Order Summary:";
echo "<br /><br />";
echo "First Name: " . $_POST["firstname"] . "<br />";
echo "Last Name: " . $_POST["lastname"] . "<br />";
echo "Address: " . $_POST["address"] . "<br />";
echo "City: " . $_POST["city"] . "<br />";
echo "State: " . $_POST["state"] . "<br />";
echo "Zip Code: " . $_POST["zip"] . "<br />";
echo "<br /><br />";

$result = mysqli_query($connection, "select * from cart join products on (cart.product_id = products.id) where session_id = '".session_id()."'");

$product_id = intval($_GET["product_id"]);


	while ($row = mysqli_fetch_assoc($result)) {

	echo $row["product_name"] . '<br />' . '(' . $row["quantity"] . ')' . '<br /><br />';

	include("jwu_mail.php");
	$message= "Thank you, " . $firstname . "\n" .
        "Your order for " . $row['product_name'] . " (" . $row['quantity'] . ") has been received and will begin processing immediately. \n\n We will direct your products to " . $address .
         ", " . $city . ", " . $state . ", " . $zip . " " . " and they should arrive between 7-10 business days! \n\n Thank you for your support and remember, Stay Bearded.";
	jwu_mail("Brainville01@wildcats.jwu.edu","Test", $message);
}

echo "</div>";
echo "<br /><br />";

echo "<button><a href='category_list.php' title='Products'>Back to Products</a></button>";

echo "<br /><br />";

include("footer.php");

?>