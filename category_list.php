<?
	include("global.php");
	include("header.php");

$sql= "SELECT * FROM categories ";
$query = mysqli_query($connection,$sql); 

while($row = mysqli_fetch_array($query)) : ?>
    <li class="categories"><? echo $row['category_name'];?></li>
 <? endwhile; 

//<a href="product_list.php?category_id=7">Tennis Equipment</a>

	include("footer.php");
?>