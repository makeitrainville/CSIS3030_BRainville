<?php
	include("global.php");
	
	$email = mysqli_real_escape_string($connection,$_POST["email"]);
	$password = mysqli_real_escape_string($connection,$_POST["password"]);
	



	$sql = "select * from users where email = '$email' and password = '$password'";
	

	$result = mysqli_query($connection,$sql);
	
	if (mysqli_num_rows($result) == 1) {
		
		$row = mysqli_fetch_assoc($result); 
		$_SESSION["firstname"] = $row["firstname"]; 
		$_SESSION["lastname"] = $row["lastname"];
		$_SESSION["id"] = $row["id"];

		header("Location: admin_index.php");

	} else {
		$errormessage = "<br/>" . "Invalid login";
		include("admin_login_form.php");
	}


	
	?>