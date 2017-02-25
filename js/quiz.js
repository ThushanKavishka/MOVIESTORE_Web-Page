var marks=0;
var correct=0;
var submission=false;

function quiz () {
	if(!submission){
		alert("Time Out!");
	}


	var a1=document.querySelector('input[name=q1]:checked').value;
	var a2=document.querySelector('input[name=q2]:checked').value;
	var a3=document.querySelector('input[name=q3]:checked').value;
	var a4=document.querySelector('input[name=q4]:checked').value;
	var a5=document.querySelector('input[name=q5]:checked').value;
	var a6=document.querySelector('input[name=q6]:checked').value;
	var a7=document.querySelector('input[name=q7]:checked').value;
	var a8=document.querySelector('input[name=q8]:checked').value;
	var a9=document.querySelector('input[name=q9]:checked').value;
	var a10=document.querySelector('input[name=q10]:checked').value;

	if(a1=="a"){
		document.getElementById('qs1').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs1').className="alert alert-danger";
		marks -= 1;
	}
	if(a2=="a"){
		document.getElementById('qs2').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs2').className="alert alert-danger";
		marks -= 1;
	}
	if(a3=="b"){
		document.getElementById('qs3').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs3').className="alert alert-danger";
		marks -= 1;
	}
	if(a4=="c"){
		document.getElementById('qs4').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs4').className="alert alert-danger";
		marks -= 1;
	}
	if(a5=="b"){
		document.getElementById('qs5').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs5').className="alert alert-danger";
		marks -= 1;
	}
	if(a6=="a"){
		document.getElementById('qs6').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs6').className="alert alert-danger";
		marks -= 1;
	}
	if(a7=="b"){
		document.getElementById('qs7').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs7').className="alert alert-danger";
		marks -= 1;
	}
	if(a8=="b"){
		document.getElementById('qs8').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs8').className="alert alert-danger";
		marks -= 1;
	}
	if(a9=="b"){
		document.getElementById('qs9').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs9').className="alert alert-danger";
		marks -= 1;
	}
	if(a10=="a"){
		document.getElementById('qs10').className="alert alert-success";
		marks += 2;
		correct++;
	}else{
		document.getElementById('qs10').className="alert alert-danger";
		marks -= 1;
	}

	document.getElementById('player').innerHTML="Your Marks :    " + marks
	+"<br/><br/>Correct Answers :  " + correct
	+"<br/><br/>Incorrect Answers : " + (10-correct);

	if (marks<=0) {
		$("#section5").css("background-color","pink");
	} else{
		if (marks>0 && marks <=10) {
			$("#section5").css("background-color","khaki");
		} else{
			$("#section5").css("background-color","MediumSeaGreen");
		};
		
	};

	$("#quizReset").click(function(){
		$("#section5").css("background-color","white");
		document.getElementById('qs1').className="alert alert-info";
		document.getElementById('qs2').className="alert alert-info";
		document.getElementById('qs3').className="alert alert-info";
		document.getElementById('qs4').className="alert alert-info";
		document.getElementById('qs5').className="alert alert-info";
		document.getElementById('qs6').className="alert alert-info";
		document.getElementById('qs7').className="alert alert-info";
		document.getElementById('qs8').className="alert alert-info";
		document.getElementById('qs9').className="alert alert-info";
		document.getElementById('qs10').className="alert alert-info";
		marks=0;
		correct=0;
		$("#player").text("");
		submission=false;
		timeHandler=setTimeout(quiz,60000);
	});
}

var timeHandler=setTimeout(quiz,60000);

document.getElementById("quizSubmit").onclick=function() {
	clearInterval(timeHandler);
	submission=true;
	quiz();
};

