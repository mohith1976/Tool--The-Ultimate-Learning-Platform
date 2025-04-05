	
	 
	 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
	<link rel="icon" type="image/x-icon" href="mutta.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Tool-The ultimte online learning platform</title>
	<style>
	 color:black;
	  }
	  .r{
	 background-color:#8989b9;
	 }
	 .but{
	 background-color:#8989b9;
	 border:none;
	 transition-duration: 0.4s;
	 }
	  .carbd {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
     .
    
     }
	 .text-responsive2{
	 font-size:calc(80% + 1vw + 1vh);
	 }
	 </style>
  </head>
  <body>
  
    <div id ="countdowntimer"></div>





             <div id="current_que" style="float:left">0</div>
       <div  style="float:left">/</div>
         <div id="total_que" style="float:left">0</div>
           </div>
<div  style="float:right">
		   <a href="result.php"  target="_parent" class="btn btn-info" type ="button">SUBMIT??</a>
		   <a href="logout.php"  target="_parent" class="btn btn-warning" type ="button">LOGOUT??</a>

                
</div>
           </div>
 
           
		  <div class="col-lg-10 col-lg-push-1" style="min-height: 300px;" id="load_questions">
         </div>
		 
		 
		 
		   <div class="col-lg-12 text-center">
		   
		     <input type="button" class="btn btn-warning" value="previous" onclick="load_previous();">&nbsp;
		     <input type="button" class="btn btn-primary" value="next" onclick="load_next();">
		   </div>
		   


<script type="text/javascript">
setInterval(function(){
	timer();
	},1000);
function timer()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if(xmlhttp.responseText=="00:00:01")
			{
				window.location="result.php";
			}
			document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET","load_timer.php",true);
	xmlhttp.send(null);
	
}
</script>
<script type="text/javascript">
function load_total_que()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById("total_que").innerHTML=xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET","load_total_que.php",true);
	xmlhttp.send(null);
	
}

var questionno="1";
load_questions(questionno);

function load_questions(questionno)
{
	document.getElementById("current_que").innerHTML=questionno;
 var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if(xmlhttp.responseText=="over")
			{
				window.location="result.php";
			}
			else{
				document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
				load_total_que();
			}
		}
	};
	xmlhttp.open("GET","load_questions.php?questionno="+ questionno,true);
	xmlhttp.send(null);
}


function radioclick(r1,questionno)
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			
		}
	};
	xmlhttp.open("GET","saveanswer_in_session.php?questionno="+questionno +"&value1="+r1,true);
	xmlhttp.send(null);
}

function load_previous()
{
	if(questionno=="1")
	{
		load_questions(questionno);
		
	}
	else{
		questionno=eval(questionno)-1;
		load_questions(questionno);
	}
}
 function load_next()
 {
     questionno=eval(questionno)+1;
		load_questions(questionno);
 }
</script>










    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>