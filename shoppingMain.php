<!-- Adds Title, Header and Navigation to this web page. -->
<?php
	session_start();
	echo "<title>Shopping Main</title>";
	require_once("layout/header.php");
	require_once("layout/navigation.php");
?>

	<div id="section1" class="container-fluid startingSection">
		<center>
				<h1 class="headerStyle1">SHOPPING HOME PAGE</h1></center><br>
			<?php require_once("cartCommon.php"); ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button>
		<a href="romance.php">
		<img src="img/categories/romance.png" height="250px" width="250px" padding="50px"></a></button>
		 <img src="img/categories/cart.png" height="600px" width="400px" align="">
          	
            <button>
			<a href="science.php">	
			<img src="img/categories/science.jpg" height="250px" width="250px"></a></button><br />
			
			<a href="comedy.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="img/categories/comedy.jpg" height="250px" width="250px" ></a></button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button>
			<a href="horror.php">
            <img src="img/categories/horror.jpg" height="250px" width="250px" ></a></button>
		
	</div>
<br/><br/>
<!-- Adds Footer to this web page. -->
<?php
	require_once("layout/footer.php");
?>
<style>
	#section1 h1{
		color: #e6e6e6;
		font-family: times new roman;
	}


</style>