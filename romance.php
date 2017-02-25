<!-- Adds Title, Header and Navigation to this web page. -->
<?php
session_start();
echo "<title>Categories</title>";
require_once("layout/header.php");
require_once("layout/navigation.php");
if (!isset($cart)) {
	$cart=array();
}

if (isset($_SESSION["cart"])) {
	$cart=$_SESSION["cart"];
}



if (isset($_POST["prodId"])) {
	$cart[]=$_POST;
}

$_SESSION["cart"]=$cart;
?>

<div id="section1" class="container-fluid startingSection">
<?php require_once("cartCommon.php"); ?>
	<center><h1 class="alert alert-info"><strong>Category : Romance</strong></h1>
	</center>		
</div>
<div id="items" class="container-fluid">
	<center>
	<?php
		require_once ('functions.php');
		$connection=dbConnect();
		$query="SELECT * FROM products WHERE category='romance'";
		$result= mysqli_query($connection,$query);
		while($row=mysqli_fetch_assoc($result)){
	?>
			<div class="items">
				<form action="romance.php" method="post">
					<h4><?php echo $row["prodName"]; ?></h4>
					<img src="<?php echo $row['image']; ?>" class="img-rounded"><br />
					<h4>Price : <?php echo $row["price"]; ?> LKR</h4>
					<h5>Remaining Stock : <?php echo $row["stock"]; ?></h5>
					<div class="description">
						<?php echo $row["description"]; ?>
					</div>
					<input type="hidden" name="prodId" value="<?php echo $row['prodId']; ?>">
					<input type="text" paceholder="Quantity" name="quantity" value="1" /><br />
					<input type="Submit"  value="Add to Cart" class="btn btn-primary">
				</form>
			</div>
		<?php }	?>
	</center>
</div>
	<br /><br />
<!-- Adds Footer to this web page. -->
<?php
mysqli_free_result($result);
mysqli_close($connection);
require_once("layout/footer.php");
?>