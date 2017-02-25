<!DOCTYPE html>
<html lang="en"-us>
<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="img/carousel/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	
	<style>
	#upcomingMovies h1{
		color: red;
		font-size: 30px;
		text-align: center;
		background-color: #c2c2a3;
		padding: 5px;
		font-family: times new roman;

	}
 #img{
	border: 2px solid black;
	display: inline-block;
	text-align: center;
	padding: 20px;
	background-color:  #ffffff;
	margin-left: 20px;
	width: 200px;
	height:300px;
	-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;

}


	</style>


</head>


<body>
	<?php
	echo "<title>Home</title>"; // Overrides default page title
	require_once("layout/header.php");
	require_once("layout/navigation.php");
	?>
	
	<?php
	include("carousel.php");
	?>

<div id="upcomingMovies">
	<h1>Upcoming Movies</h1></div>
<div id="items" class="mainPageMovies">
	<div id=img><img src = "img/mainPage/s1.jpg" /></div>
	<div id=img><img src = "img/mainPage/s2.jpg"/></div>
	<div id=img><img src = "img/mainPage/s3.jpg"/></div>
	<div id=img><img src = "img/mainPage/s4.jpg"/></div>
	<div id=img><img src = "img/mainPage/s5.jpg"/></div>
	
</div>

	<br/><br/>
	<!--marquee-->
	<?php
	require_once("marquee.php");
?>
<br/><br/><br/>
	</footer> 
	<?php
	require_once("layout/footer.php");
?>

	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="img/carousel/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>

	
</body>
</html>