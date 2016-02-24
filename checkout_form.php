<?
	include("global.php");
	include("header.php");

?>

<span style="color: red;"><?php echo $errormessage;?></span>

<div class="checkout form">
	<form action="checkout_process.php" method="POST"> 
		<p>First Name:</p><input type="text" name="firstname" value="<? echo $firstname;?>"><br />
		<p>Last Name:</p><input type="text" name="lastname" value="<? echo $lastname;?>"><br />
		<p>Address:</p><input type="text" name="address" value="<? echo $address;?>"><br />
		<p>City:</p><input type="text" name="city" value="<? echo $city;?>"><br />
		<p>State:</p><input type="text" name="state" value="<? echo $state;?>"><br />
		<p>Zip Code:</p><input type="text" name="zip" value="<? echo $zip;?>"><br />
		<br />
		<input type="submit" value="Checkout">
	</form>
</div>


<?

	include("footer.php");
?>
