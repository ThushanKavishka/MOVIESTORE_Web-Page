<!-- Adds Title, Header and Navigation to this web page. -->
<?php
session_start();
echo "<title>Order Summary</title>";
require_once("layout/header.php");
require_once("layout/navigation.php");


if (isset($_POST["submit"])) {
	$orderId=$_POST["oId"];
}else{
	$orderId=0;
}	
	require_once ('functions.php');
	$connection=dbConnect();
	$query="SELECT * FROM orders WHERE orderId = {$orderId}";
	$result=mysqli_query($connection,$query);
?>

<div id="section1" class="container-fluid startingSection">
<?php require_once("cartCommon.php"); ?>
	<center><h1 class="alert alert-info"><strong>Order Summary</strong></h1>
	</center>		
</div>
<div class="container-fluid">
	<center>
	<form action="trackOrder.php" method="post">
		<h3>Enter Order ID :</h3>
		<input type="text" name="oId" required><br>
		<input id="placeOrder" name="submit" type="submit" class="btn btn-primary" value="Track Order">
	</form><br><br>
	<?php
	if ($result) {
		$row=mysqli_fetch_assoc($result);
	?>
	<table id="orderTable" class="table table-hover">
		<tr>
			<th class="tableMain">Order ID</th>
			<td><?php echo $row['orderId']; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Name</th>
			<td><?php echo $row['name']; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Address</th>
			<td><?php echo $row['address']; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Order Status</th>
			<td><?php echo $row['status']; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Total Cost</th>
			<td><?php echo $row['totalCost']; ?></td>
		</tr>
	</table>
		<?php
				mysqli_free_result($result);
			} else if($result===false) {
				echo "<h2>Order not found!</h2>";
		?>
		
		<?php
			}
		?>
	</center>
</div>
	<br /><br />
<!-- Adds Footer to this web page. -->
<?php
mysqli_close($connection);
require_once("layout/footer.php");
?>

<style>
.container-fluid h3{
	color: #cccccc
}	

</style>