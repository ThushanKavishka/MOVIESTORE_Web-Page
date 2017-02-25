<!-- Adds Title, Header and Navigation to this web page. -->
<?php
	echo "<title>Curriculum Vitae</title>";
	require_once("layout/header.php");
	require_once("layout/navigation.php");
	include ("functions.php");

	$connection=dbConnect();
	$query="SELECT * FROM cv WHERE member='{$_GET["member"]}'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_assoc($result);

?>

	<div id="section3" class="container-fluid startingSection">
			<img class="pull-right img-rounded" id="image" src="img/cv/<?php echo $_GET['member']; ?>.jpg" width="200px" height="170px">
		<center>
		<h1>CURRICULUM VITAE</h1>
		<h3>OF</h3>
		<h1><?php echo $_GET['name']; ?></h1>
		</center><br/><br/>
		<table class="table table-hover" id="cvTable"><center>
			<tr><th colspan="2" class="tableMain" style="color:	#ededf7"><center>Personal Details</center></th></tr>
			<tr>
				<th class="tableTH">Name with initials</th>
				<td><?php echo $row['initials']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Full Name</th>
				<td><?php echo $row['fName']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Date Of Birth</th>
				<td><?php echo $row['dob']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Gender</th>
				<td><?php echo $row['gender']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Nationality</th>
				<td><?php echo $row['nationality']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Phone Number</th>
				<td><?php echo $row['phone']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Email</th>
				<td><?php echo $row['email']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Marital Status</th>
				<td><?php echo $row['status']; ?></td>
			</tr>
			<tr><th colspan="2" class="tableMain"  style="color:	#ededf7"><center>Educational Details</center></th></tr>
			<tr>
				<th class="tableTH">Degree</th>
				<td><?php echo $row['degree']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">University</th>
				<td><?php echo $row['university']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">A/L Results</th>
				<td><?php echo $row['aLevel']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">O/L Results</th>
				<td><?php echo $row['oLevel']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">High School</th>
				<td><?php echo $row['school']; ?></td>
			</tr>
			<tr><th colspan="2" class="tableMain" style="color:#ededf7">  <center>Professional Details</center></th></tr>
			<tr>
				<th class="tableTH">Former Company</th>
				<td><?php echo $row['company']; ?></td>
			</tr>
			<tr>
				<th class="tableTH">Industry Experience(Years)</th>
				<td><?php echo $row['exp']; ?></td>
			</tr>
		</table>
	
	</div>

	<br /><br />
<!-- Adds Footer to this web page. -->
<?php
	require_once("layout/footer.php");
	mysqli_free_result($result);
	mysqli_close($connection);
?>

<style>
	#section3 h3{
		color: #f2f2f2;
	}
	#section3 h1{
		font-family:times new roman	;
		color: #f2f2f2;
	}
	#image{
	border: 2px solid black;
	display: inline-block;
	text-align: center;
	padding: 20px;
	background-color:   #e0e0d1;
	margin-left: 20px;
	width: 160px;
	height:230px;
	-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
	}
	

</style>