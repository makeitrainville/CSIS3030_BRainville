<?
	include("global.php");
	include("header.php");

?>

<?
$sql = "SELECT * FROM categories ="  .intval($_GET["id"]);

$result= mysqli_query($connection,$sql);

echo $result;
?>


<?
	include("footer.php");
?>