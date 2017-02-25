<!-- Adds Title, Header and Navigation to this web page. -->
<?php
session_start();
echo "<title>Order Summary</title>";
require_once("layout/header.php");
require_once("layout/navigation.php");


if (isset($_POST["order"])) {
	$prodIds=implode(" ", $_SESSION["prodIds"]);
	$prodNames=implode(" ", $_SESSION["prodNames"]);
	$totalCost=$_SESSION["totalCost"];
	$name=$_POST["orderName"];
	$email=$_POST["orderEmail"];
	$telephone=(int)$_POST["orderTP"];
	$address=$_POST["orderAddress"];
	$status="In Transit";
	$orderId=mt_rand(5,10000);
	$username=$_SESSION['username'];
	$cart=$_SESSION['cart'];
}
	require_once ('functions.php');
	$connection=dbConnect();
	$query="SELECT orderId FROM orders";
	$result=mysqli_query($connection,$query);

	while($row=mysqli_fetch_row($result)){
		if (in_array($orderId, $row)) {
			$orderId=mt_rand(5,10000) + 3;
		}
	}

	mysqli_free_result($result);

	$query="INSERT INTO orders(orderId,username,prodIds,prodNames,name,email,telephone,address,status,totalCost) ";
	$query.="VALUES ({$orderId},'{$username}','{$prodIds}','{$prodNames}','{$name}','{$email}',{$telephone},'{$address}','{$status}',{$totalCost})";
	mysqli_query($connection,$query);

	foreach ($cart as $key => $value) {
		$prodId=$value['prodId'];
		$quantity=$value['quantity'];

		$query="SELECT stock FROM products WHERE prodId={$prodId}";
		$result=mysqli_query($connection,$query);
		$row=mysqli_fetch_row($result);

		$stock=$row[0];
		$stock-=$quantity;

		$query="UPDATE products SET stock={$stock} WHERE prodId={$prodId}";
		mysqli_query($connection,$query);
		mysqli_free_result($result);
	}
	
?>

<div id="section1" class="container-fluid startingSection">
<?php require_once("cartCommon.php"); ?>
	<center><h1 class="alert alert-info"><strong>Order Summary</strong></h1>
	</center>		
</div>
<div class="container-fluid">
	<center>
	<table id="orderTable" class="table table-hover">
		<tr>
			<th class="tableMain">Order ID</th>
			<td><?php echo $orderId; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Username</th>
			<td><?php echo $username; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Name</th>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Email</th>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Telephone</th>
			<td><?php echo $telephone; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Address</th>
			<td><?php echo $address; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Number Of Products</th>
			<td><?php echo count($_SESSION['prodIds']); ?></td>
		</tr>
		<tr>
			<th class="tableMain">Book Names</th>
			<td><?php
			foreach ($_SESSION['prodNames'] as $value) {
				 echo $value."<br>";
			}
			 
			 ?>
			</td>
		</tr>
		<tr>
			<th class="tableMain">Total Cost</th>
			<td><?php echo $totalCost; ?></td>
		</tr>
		<tr>
			<th class="tableMain">Status</th>
			<td><?php echo $status; ?></td>
		</tr>
	</table>
		<a href="viewCart.php?action=empty" class="btn btn-primary">Continue Shopping</a>	
	</center>
</div>
	<br /><br />
<!-- Adds Footer to this web page. -->
<?php
mysqli_close($connection);
require_once("layout/footer.php");
?>