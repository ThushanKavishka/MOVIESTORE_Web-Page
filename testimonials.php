<!-- Adds Title, Header and Navigation to this web page. -->
<?php
	echo "<meta http-equiv='refresh' content='5' />";
	echo "<title>Testimonials</title>";
	require_once("layout/header.php");
	require_once("layout/navigation.php");
	include ('functions.php');

	$random=rand(1,5);
	$connection = dbConnect();
	$query="SELECT comments,name FROM feddback WHERE commentNo = {$random}";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_row($result);
?>

	<div id="section1" class="container-fluid startingSection">
		<center><h1 id="headerTestimonials">OUR SATISFIED CUSTOMERS</h1></center>
		<br />
		<div id="section4" >
			<p id="commentPara">"<font size="3"> <?php echo $row[0]; ?> "</p></font>><br/>
			<p id="customer" class="pull-right">-<font size="3"> <?php echo $row[1]; ?> -</p></font>
		</div>

	</div>
<center><img src="img/t2.jpg" height="300" width=50%></center>
	<br/><br/><br/><br/>
<!-- Adds Footer to this web page. -->
<?php
	mysqli_free_result($result);
	mysqli_close($connection);
	require_once("layout/footer.php");
?>

<style>
	#headerTestimonials{
		color:  #e6e6e6;
		font-family: times new roman;
		text-align: center;
	}
	#section4{
		background-color: #e6e6e6;
	}

	
</style>