<!DOCTYPE html>
<html>
<?php
	echo '<meta http-equiv="refresh" content="3; url=feedback.php" />';
	include ('functions.php');
	$name=$_POST['inputName'];
	$email=$_POST['inputEmail'];
	$rating=$_POST['rating'];
	$comments=$_POST['inputComments'];
	
	if(isset($_POST['emailUpdates'])){
		$emailUpdates=$_POST['emailUpdates'];
	}else{
		$emailUpdates="false";
	}

	$connection = dbConnect();

	$query="INSERT INTO feddback(name,email,updates,rating,comments) VALUES ('{$name}','{$email}','{$emailUpdates}','{$rating}','{$comments}')";
	mysqli_query($connection,$query);

	mysqli_close($connection);
?>
	<center>
		<img src="img/thank.jpg" /><br /><br />
		<h1>Redirecting to Feedback Page........</h1>
	</center>
</html>