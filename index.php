<?
	include("global.php");
	include("header.php");

?>

<?
	
	if ($_SESSION["id"] != "") {
		echo "Welcome, " . $_SESSION["firstname"] . "<br />"; 

		echo 'Click <a href=\"category_list.php\">here</a> to logout<br /><br />';
		
	} else {
	
		echo "Click <a href=\"category_list.php\">here</a> to shop! <br /><br />";
		
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


<?
	include("footer.php");
?>