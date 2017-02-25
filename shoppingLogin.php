<!--Login Form Handling -->
<?php
//if ($_GET['destroy']=="true") {
//	session_destroy(old);
//}
session_start();
	require_once("functions.php");
		$connection=dbConnect();
		$loginMessage="";
	if (isset($_POST["signIn"])) {

		$username=$_POST["username"];
		$password=$_POST["password"];

		$query="SELECT password FROM login WHERE loginID = '{$username}'";
		$result= mysqli_query($connection,$query);
		$row=mysqli_fetch_assoc($result);

		if($password==$row["password"]){
			$_SESSION["username"]=$username;
			header("Location: shoppingMain.php");
		}else{
			$loginMessage="Invalid username or password !";
		}
		mysqli_free_result($result);
	}

	else if (isset($_POST["signUp"])) {

		$isNew=true;
		$username=$_POST["username"];
		$password=$_POST["password"];

		$query="SELECT loginID FROM login";
		$result= mysqli_query($connection,$query);

		while($row=mysqli_fetch_row($result)){
			if ($username==$row[0]) {
				$loginMessage="Username already exists ! Try Again.";
				$isNew=false;
				break;
			}
		}
		mysqli_free_result($result);

		if($isNew){
			$query="INSERT INTO login(loginID,password) VALUES ('{$username}','{$password}')";
			mysqli_query($connection,$query);
			$loginMessage="User : ".$username." Registration Succesful!! Please Sign-In";
		}
		$_SESSION["username"]=$username;
	}



?>

<!-- Adds Title, Header and Navigation to this web page. -->
<?php
	echo "<title>Login</title>";
	require_once("layout/header.php");
	require_once("layout/navigation.php");
?><br/><br/><br/><div id=headerSign>
<h1> SIGN IN </h1></div><br/>
	<div id="section1" class="container-fluid startingSection">
		<center>
			<form id="login" action="shoppingLogin.php" method="post">
				<h3>Username :</h3>
				<input type="text" name="username"  required><br><br>
				<h3>Password :</h3>
				<input type="password" name="password"  required><br><br><br>
				<input type="submit" id="signIn" name="signIn" class="btn btn-primary" value="Sign-In">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" id="signIn" class="btn" value="Clear">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="SignUpForm.php">
				<input type="button" id="signUp" name="signUp" class="btn btn-primary" value="Sign-Up">
			</form>
			<h4 id="loginMessage"><?php echo "$loginMessage"; ?></h4>
		</center>
	</div>

<!-- Adds Footer to this web page. -->
<?php

	require_once("layout/footer.php");
?>

<style>
#headerSign h1{
color:#e6e6e6;
font-family: times new roman;
text-align: center;


}	
#section1{
background-image: url("img/k2.jpg");
margin-left: 400px;
margin-right:400px;
padding: 10px;
margin-top: 10px;
margin-bottom: 20px;
color:white;
}

</style>