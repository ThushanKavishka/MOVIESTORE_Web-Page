<?php
function dbConnect()
{
	$connection = mysqli_connect("localhost","root","","moviestore");
	if(mysqli_connect_errno()){
		die("Database connction failed: ".
			mysqli_connect_error().
			" (".mysqli_connect_errno().")"
			);
	}
	return $connection;
}
?>