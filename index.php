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


<?
	include("footer.php");
?>