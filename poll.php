<!-- Adds Header and Navigation to this web page. -->
<?php
	echo "<title>Poll</title>"; // Overrides default page title
	require_once("layout/header.php");
	require_once("layout/navigation.php");
?><html>
<head>

<style> 
#poll{ 
  color: #e6e6e6;
    font-family: times new roman;
 }
 #top{
  color: #e6e6e6;
    font-family: times new roman;
    padding-left: 40%;
 }
#botm{
  padding-left: 10%;
   color: #e6e6e6;
    font-family: times new roman;
}

#poll{
  display: inline-block;
  padding: 10px;
  margin-left: 40px;
}

</style>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body><br/><br/>
<h1 id="top" class="headerStyle1">WEEKLY POLL</h1>

<h3 id="botm">What is your favourite movie? </h3>
<div id="poll"><br >
<form>
<img src="img/cart/10.jpg" id="pollImg" />
<input type="radio" name="vote" value="0" onClick="getVote(this.value)">Love rosie
<br/><br/>
<img src="img/cart/2.jpg" id="pollImg"/>
<input type="radio" name="vote" value="1" onClick="getVote(this.value)">Get Hard
<br/><br/>
<img src="img/cart/3.jpg" id="pollImg"/>
<input type="radio" name="vote" value="2" onClick="getVote(this.value)">Duff
<br/><br/>
<img src="img/cart/4.jpg" id="pollImg"/>
<input type="radio" name="vote" value="3" onClick="getVote(this.value)">WeddingRinger
</form>

</div>

</body>
</html>
<!-- Adds Footer to this web page. -->
<?php
	require_once("layout/footer.php");
?>