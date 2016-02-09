<?php

	include("global.php");
	$_SESSION["id"] = "";
	$_SESSION["firstname"] = "";
	$_SESSION["lastname"] = "";
	
	header("Location: admin_login_form.php");
	
?>