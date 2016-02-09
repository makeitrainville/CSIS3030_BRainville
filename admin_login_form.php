<?php
include("global.php");
include("header.php");

?>
<div style="color: red;">
	<?php echo $errormessage; ?>
</div>

<p>Welcome!</p>
<p>Login in to admin panel to edit menu items:</p>
<br/>
<form action="admin_login_process.php" method="POST">
	Email: <input type="text" name="email" value="<?php echo $email;?>"><br /><br />
	Password: <input type="password" name="password"><br /><br /><br />
	<input type="submit" value="Login">
	<br/><br /><br/>
</form>

<?php
include("footer.php");
?>