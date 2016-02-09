<?php
include("global.php");


?>

<?php

if ($_SESSION["id"] == "") {
	$errormessage = "<br/><br/>" . "You must login to have access that page";
	include("admin_login_form.php");
	die();
}
include("header.php");	
	
	if ($_SESSION["id"] != "") {
		echo "Welcome, " . $_SESSION["firstname"] . "<br />"; 

		echo "Click <a href=\"admin_logout.php\">here</a> to logout<br /><br />";
		
	} else {
	
		echo "Click <a href=\"admin_login_form.php\">here</a> to login to your admin account<br /><br />";
		
	}


	?>

	<div id="content">
			<h3>About The Resturant</h3>
			<p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet.ea 
			iisque invenire perpetua ea, tractatos consectetuer vix id. Magna insolens atomorum ei vel, 
			possit aeterno virtute no has. Cu vis nisl facilisi interpretaris. His te labore quaestio adipiscing, 
			scripta laoreet scripserit cu nec, ei audiam oportere eum.
			</p>
			<p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet.ea 
			iisque invenire perpetua ea, tractatos consectetuer vix id. Magna insolens atomorum ei vel, 
			possit aeterno virtute no has. Cu vis nisl facilisi interpretaris. His te labore quaestio adipiscing, 
			scripta laoreet scripserit cu nec, ei audiam oportere eum.
			</p>
			<br/>
</div>


<?php


include("footer.php");
?>