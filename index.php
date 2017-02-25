<!-- Adds Title, Header and Navigation to this web page. -->
<?php
	echo '<meta http-equiv="refresh" content="5; url=home.php" />';
	echo "<title>Our Team</title>";
	require_once("layout/header.php");
?>

<div id="section1" class="container-fluid startingSection">
	<div id="profiles">
			<center>
		<h1 class="headerStyle1">WELCOME TO SHOW TIME</h1><br /><br />
		<div id="profile1" class="profile">
			<img src="img/cv/a.jpg" class="img-circle" width="200" height="1"><br />
			<h3>Anuradha Gunasinghe</h3>
			<h4>Back-End Developer</h4>
		</div>

		<div id="profile2" class="profile">
			<img src="img/cv/k.jpg" class="img-circle" width="180" height="1"><br />
			<h3>Kith Perera</h3>
			<h4>Back-End Developer</h4>
		</div>

		<div id="profile3" class="profile">
			<img src="img/cv/p.jpg" class="img-circle" width="200" height="1"><br />
			<h3>Piumal Kulasekara</h3>
			<h4>Back-End Developer</h4>
		</div>

		<div id="profile4" class="profile">
			<img src="img/cv/t.jpg" class="img-circle" width="160" height="1"><br />
			<h3>Thushan Kavishka</h3>
			<h4>Back-End Developer</h4>
		</div>

		<div id="profile5" class="profile">
			<img src="img/cv/l.jpg" class="img-circle" width="200" height="2"><br />
			<h3>Thilan Kumara</h3>
			<h4>Back-End Developer</h4>
		</div>
		<br /><br /><br />
	</center>
	</div>

</div>

<style>
	#profile1,#profile2,#profile3,#profile4,#profile5 h3{
color: #e6e6e6;

	}
	#profile1,#profile2,#profile3,#profile4,#profile5 h4{
color: #f2f2f2;
	
	}
	#profiles h1{
		color: #f2f2f2;
		font-family: times new roman;
	}

</style>