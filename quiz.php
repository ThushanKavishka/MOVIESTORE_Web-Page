<!-- Adds Title, Header and Navigation to this web page. -->
<?php
echo "<title>Quiz</title>";
require_once("layout/header.php");
require_once("layout/navigation.php");
?>

<div id="section5" class="container-fluid startingSection">
	<center><h1 class="headerStyle1">Let's begin the quiz!</h1>
		<h2>You Have To Select Answers <strong>Within 60 seconds</strong>......</h2>
	</center><br /><br />
	<form>
	<div class="questions">
		<div id="qs1" class="qs alert alert-info">
			<strong>Question 1 : </strong> Which of these films was Aamir Khan's directorial debut?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="a" checked> Lagaan&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q1" value="b"> 3Idiots&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q1" value="c"> Pehla Nasha
	</div><br />

	<div class="questions">
		<div id="qs2" class="qs alert alert-info">
			<strong>Question 2 : </strong> Which of these actors has never appeared in television advertisements?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="a" checked> Govinda&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q2" value="b"> Hrithik Roshan&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q2" value="c"> Shah rukh khan
	</div><br />

	<div class="questions">
		<div id="qs3" class="qs alert alert-info">
			<strong>Question 3 : </strong>  For which of these films did Vin Diesel shave off his moustache?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="a" checked> Lamhe&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q3" value="b"> Fast & Furious&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q3" value="c"> Final Call
	</div><br />

	<div class="questions">
		<div id="qs4" class="qs alert alert-info">
			<strong>Question 4 : </strong>  Before Leonardo Di-Caprio became an actor, he worked as a...?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="a" checked> Clerk&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q4" value="b"> Reporter&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q4" value="c"> Waiter

	<div class="questions">
		<div id="qs5" class="qs alert alert-info">
			<strong>Question 5 : </strong> In which year did Amitabh Bachchan debut in Hindi cinema?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="a" checked> 1960&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q5" value="b"> 1965&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q5" value="c"> 1968
	</div><br />

	<div class="questions">
		<div id="qs6" class="qs alert alert-info">
			<strong>Question 6 : </strong> Which was the first Hindi Movie to receive the national award?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="a" checked> Kabuliwala&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q6" value="b"> Do Aankhen Barah Haath&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q6" value="c"> Mirza Ghalib
	</div><br />

	<div class="questions">
		<div id="qs7" class="qs alert alert-info">
			<strong>Question 7 : </strong> Considering the 20th century,which of these actress won the Best Actress award only once?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="a" checked> Anna Kedrick&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q7" value="b"> Julie Cash&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q7" value="c"> Amanda Cerny
	</div><br />

	<div class="questions">
		<div id="qs8" class="qs alert alert-info">
			<strong>Question 8 : </strong> Who plays the blind friend in the 2012 "Cream"?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="a" checked> Lucifer&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q8" value="b"> Julies&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q8" value="c"> Inna
	</div><br />

	<div class="questions">
		<div id="qs9" class="qs alert alert-info">
			<strong>Question 9 : </strong> In which Movie "four" appearing?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="a" checked> DonJon&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q9" value="b"> Blind Walker&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q9" value="c"> Divergent
	</div><br />

	<div class="questions">
		<div id="qs10" class="qs alert alert-info">
			<strong>Question 10 : </strong> Who is the famous agent of England?
		</div>
		&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="a" checked> 007 &nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q10" value="b"> Agent 1 &nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="q10" value="c"> 002
	</div><br /><br />

	&nbsp;&nbsp;&nbsp;<input type="button" id="quizSubmit" class="btn btn-primary" value="Submit">&nbsp;&nbsp;&nbsp;
	<input type="reset" id="quizReset" class="btn btn-primary" value="Play Again"></form>
	<br /><br />
	<p id="player"></p>
	

</div></div>

<style>
	#section5{
background-color: #e6ffe6;}
</style>

<script type="text/javascript" src="js/quiz.js"></script>
<!-- Adds Footer to this web page. -->
<?php
require_once("layout/footer.php");
?>