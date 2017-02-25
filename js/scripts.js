function formValidator () {
	var name=document.forms['feedbackForm']['inputName'].value;
	var email=document.forms['feedbackForm']['inputEmail'].value;
	var rating=document.forms['feedbackForm']['rating'].value;
	var emailUpdates=document.forms['feedbackForm']['emailUpdates'].value;
	var comments=document.forms['feedbackForm']['inputComments'].value;
	var updates=document.getElementById('emailUpdates');

	if (updates.checked && email=="") {
		alert("Please enter a valid email address!");
		return false;
	};
	return confirm("Your Name : " + name
			+"\nYour Email : " + email
			+"\nRating Given : " + rating
			+"\nComments : " + comments);
	
}
function cartSubmit (){
	return (confirm("Proceeding to checkout!"));
}

var form=document.getElementById('feedbackForm');

form.onsubmit= function() {
	return formValidator();	
};

var emailChecker=document.getElementById('inputEmail');
emailChecker.onclick=function  () {
	alert("Your email should be like this\nsomeone@example.com");
};

function getVote(vote) {
	var request;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    request=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    request=new ActiveXObject("Microsoft.XMLHTTP");
  }
  request.onreadystatechange=function() {
    if (request.readyState==4 && request.status==200) {
      document.getElementById("poll_p").innerHTML=request.responseText;
    }
  }
  request.open("GET","poll_vote.php?vote="+vote,true);
  request.send();
}