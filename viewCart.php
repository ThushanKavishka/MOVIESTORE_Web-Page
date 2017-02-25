<!-- Adds Title, Header and Navigation to this web page. -->
<?php
session_start();
echo "<title>Shopping Cart</title>";
require_once("layout/header.php");
require_once("layout/navigation.php");

if (isset($_GET['destroy'])) {
	if ($_GET['destroy']=="true") {
			session_destroy();
			header("Location: shoppingLogin.php");
	}
}

if (isset($_SESSION["cart"])) {
	if (isset($_GET['action'])) {
		if ($_GET['action']=="remove") {
			unset($_SESSION['cart'][$_GET['key']]);
		}else{
			$_SESSION['cart']=array();
		}
	}
	$cart=$_SESSION["cart"];
}else{
	$cart=array();
}

$prodNames=array();
$prodIds=array();
$transactionID="";
?>

<div id="section1" class="container-fluid startingSection">
	<?php require_once("cartCommon.php"); ?>
	<center><h1 class="alert alert-info"><strong>Shopping Cart</strong></h1>
	</center>		
</div>
<div id="cartSection" class="container-fluid">
	<center>
	<h1>
		<?php
			if(count($cart)==0){
				echo "Currenly your shopping cart is empty!";
			}
			require_once ('functions.php');
			$connection=dbConnect();
			$totalCost=0;
		?>
	</h1>
	<table id="cartTable" class="table table-hover">
		<tr>
			<th class="tableMain">Product ID</th>
			<th class="tableMain">Book Name</th>
			<th class="tableMain">Category</th>
			<th class="tableMain">Quantity</th>
			<th class="tableMain">Unit Price</th>
			<th class="tableMain">Total Price</th>
			<th class="tableMain">Action</th>
		</tr>

		<?php
			foreach ($cart as  $key => $item) {
			$query="SELECT * FROM products WHERE prodId={$item['prodId']}";
			$result= mysqli_query($connection,$query);
			$row=mysqli_fetch_assoc($result);
			$prodNames[]=$row['prodName'];
			$prodIds[]=$row['prodId'];
		?>

		<tr>
			<td><?php echo $row['prodId']; ?></td>
			<td><?php echo $row['prodName']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $item['quantity']; ?></td>
			<td><?php echo $row['price']; ?> LKR</td>
			<td>
				<?php 
					echo ($cost = ((int)$row['price']) * ((int)$item['quantity'])); 
					$totalCost += $cost;
				?> LKR
			</td>
			<td><a href="viewCart.php?action=remove&key=<?php echo $key; ?>">Remove</a></td>
		</tr>

		<?php
			}
			$_SESSION["prodNames"]=$prodNames;
			$_SESSION["prodIds"]=$prodIds;	
			$_SESSION["totalCost"]=$totalCost;				
		?>
	</table>
	<p id="cartCost">Total Cost : <?php echo $totalCost; ?> LKR</p>
	<br />
	<a href="viewCart.php?action=empty" class="btn">Clear Cart</a><br /><br />
	<form id="cartForm" action="order.php" method="post" onsubmit="return cartSubmit();">
		<h3>Please fill the following details to proceed</h3>
		<h5>Name :</h5>
		<input type="text" name="orderName" required><br>
		<h5>Telephone :</h5>
		<input type="text" name="orderTP" required><br>
		<h5>Email :</h5>
		<input type="email" name="orderEmail" required><br>
		<h5>Address :</h5>
		<textarea name="orderAddress" required></textarea>
		<br><br>
		<input id="placeOrder" name="order" type="submit" class="btn btn-primary" value="Place Order">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Reset Fields" class="btn">
		
	</form>

	</center>
</div>
	<br /><br />
	<script type="text/javascript">
		var totalCost = Number(<?php echo $totalCost; ?>);
		
		if(totalCost > 0 && totalCost < 3000){
			document.getElementById("cartSection").style.backgroundColor="lightgreen";
		}else{
			if(totalCost > 3000 && totalCost < 10000){
				document.getElementById("cartSection").style.backgroundColor="orange";
			}else{
				if(totalCost > 10000){
					document.getElementById("cartSection").style.backgroundColor="grey";
				}else{
					document.getElementById("cartSection").style.backgroundColor="#fff7e6";
				}
			}
		}
	</script>
<!-- Adds Footer to this web page. -->
<?php
if(isset($result)){
	mysqli_free_result($result);
}
	mysqli_close($connection);
require_once("layout/footer.php");
?>
