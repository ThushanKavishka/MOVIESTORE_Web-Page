<!-- Adds Header and Navigation to this web page. -->
<?php
	echo "<title>Feedback</title>"; // Overrides default page title
	require_once("layout/header.php");
	require_once("layout/navigation.php");
	?>


	<div id="feedback" class="container-fluid startingSection">
	<center><h1 class="headerStyle1" id="feedbackTitle">Tell Us About Your Ideas!</h1></center> <br />
		<div class="forms container-fluid" id="form">
			<form id="feedbackForm" action="feedbackProcess.php" method="post"><center>
				<div class="form-group" id="formgroup">
				
					<label for="inputName">Name:</label>
					<input class="form-control" type="text"
					id="inputName" name="inputName" placeholder="Name" required>
				</div><br />

				<div class="form-group" id="formgroup">
					<label for="inputEmail">Email:</label>
					<input class="form-control" type="email"
					id="inputEmail" name="inputEmail" placeholder="Email">  
				</div><br />

				<div class="form-group" id="formgroup">
				
					<label for="rateUs"> Rate Us: </label>
					<input type="radio" name="rateUs" value="worse" id="radio"/><span>Worse</span> 
					<input type="radio" name="rateUs" value="Average" id="radio"/><span>Average</span>
					<input type="radio" name="rateUs" value="Good" id="radio"/><span>Good</span> 
					<input type="radio" name="rateUs" value="Perfect" id="radio"/><span>Perfect</span> <br/>
				</div><br />

				<div class="form-group" id="formgroup">
					<label>
						<input id="emailUpdates"
						type="checkbox" name="emailUpdates" value="true">Receive updates by email
					</label>
				</div><br />

				<div class="form-group" id="formgroup">
					<label for="inputComments">Comments:</label>
					<textarea class="form-control" 
					id="inputComments" name="inputComments" rows="5" cols="40" required></textarea>
				</div><br />
				</div><div id=formbtn>
				<input type="submit" value="Submit" class="btn btn-primary"  
				value="submit">
				<input type="reset" value="Clear Fields" class="btn btn-default"  
				value="submit">
				</div>
			</form>
			</center>
		</div>
	</div>
	<br/><br/><br/><br/>

<style>
#feedback{
	background-image: url("img/k1.png");
}
#feedbackTitle{
	color: #ff1a1a;
	font-family: times new roman;
}
#form{
	color: white;
	margin-left:  0px;
}
#formbtn{
	text-align: center;
}


</style>

<?php
	require_once("layout/footer.php");
?>