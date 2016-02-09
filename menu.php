<?php 
	include("global.php");
	include("header.php");

	if ($_SESSION["id"] != "") {
	echo "Click <a href=\"admin_menu_list.php\">here</a> to edit items<br /><br />";
		
	}

?>



<div id="content">
			<a href="menu_view.php?id=2"><h3>Appetizers</h3></a><br/>
			<a href="menu_view.php?id=1"><h3>Desserts</h3></a>

			<br/>


	<?php include("footer.php");?>