<?php 
	include("global.php");
	include("header.php");


if ($_SESSION["id"] == "") {
	$errormessage = "<br/><br/>" . "You must login to have access that page";
	include("admin_login_form.php");
	die();
}

	

?>
<span style="color: red;"><?php echo $errormessage;?></span>
<br/><br/>

<form action="admin_menu_process.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $id;?>">

Description: <input type="text" name="description" value="<?php echo $description;?>"><br /><br />

Title: <input type="text" name="title" value="<?php echo $title;?>"><br /><br />

Category: <select name="category" value="<?php echo $category;?>">
					<option>Dessert</option>
					<option>Appetizer</option>
				</select><br/><br /><br />

Photo: <input type="file" name="pic"><br /><br />

<input type="submit" value="Save">


</form>


<br/><br/>


<?php include("footer.php");

?>