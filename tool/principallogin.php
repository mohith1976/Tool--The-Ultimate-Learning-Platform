<?php

include 'Db_conection.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, ($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `request` WHERE email = '$email' AND password = '$password'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:dashboard.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tool-The ultimate online learning platform</title>
  <link rel="icon" type="image/x-icon" href="mutta.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
     .kol{
	 font-family:Bungee;
	 color:#421569;
	 text-align:center
	 }
	 .text-responsive{
	 font-size:calc(200% + 2vw + 2vh);
	 }
	 .lab{
	 text-align:center;
	 font-family:Quicksand;
	 
	 }
	 .text-responsive1{
	 font-size:calc(100% + 1vw + 1vh);
	 }
	 .hub{
	 background-color:#8989b9;
	 color:black;
	 }
	  .hub:hover{
	  background-color:#8989b9;
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
	  .card {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
     .
    
     }
  </style>
</head>
<body>
   <nav class="navbar navbar-expand-md r navbar-dark ">

         <a class="navbar-brand" href="index.html">
         <img src="tool.png" alt="logo" style="width:90px; height:35px;"><br><img src="po.png" style="width:80px;height:15px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
         </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
             <ul class="navbar-nav ml-auto justify-content-between w-75">
              <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
             Login
             </a>
             <div class="dropdown-menu but ">
                 <a class="dropdown-item" href="userlogin.php">Student Login</a>
                 <a class="dropdown-item" href="principallogin.php">Principal Login</a>
                 <a class="dropdown-item" href="adminlogin.php">Admin Login</a>
               </div>
               </li>
             <li class="nav-item">
             <a class="nav-link " href="blogs.html">Blogs</a>
             </li>
             <li class="nav-item">
             <a class="nav-link " href="pricings.html">Pricings</a>
             <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
             Tools
             </a>
             <div class="dropdown-menu but hub">
                 <a class="dropdown-item" href="onlinetest.html">Online Tests</a>
                 <a class="dropdown-item" href="liveclasses.html">Live Classes</a>
                 <a class="dropdown-item" href="doubts.html">Doubts</a>
               </div>
               </li>
	
	         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
             Company
             </a>
             <div class="dropdown-menu">
                 <a class="dropdown-item" href="index.html">About us</a>
                 <a class="dropdown-item" href="index.html">Video demo</a>
                 <a class="dropdown-item" href="index.html">Achievemnts</a>
             </div>
             </li>
             </li>    
             </ul>
           </div>  
          </nav> <br><br><br>
		  <div class="container card ">
         <h1 class="kol text-responsive">Thank you,for Registering please login to Tool.</h1>
		 <p class="lab text-responsive1 typewrite" data-period="2000" data-type='["To Login please enter your details.","please login to Tool"]'>
		  <span class="wrap"></span>
		  </p>
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <div class="form-group">
		     
		     <div class="form-group">
		     <label for="email">Email:</label>
			 <input type="email" class="form-control" id="email" placeholder="enter email" name="email"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     <div class="form-group">
		     <label for="password">Password</label>
			 <input type="password" class="form-control" id="password" placeholder="enter Password" name="password"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		   </div>  <br>
           <div class="container text-center">		  
	       <input type="submit" name="submit" value="Login"class="btn hub" />
		   </div>
      <p>don't have an account? <a href="requestforclgsetup.php">regiser now</a></p>
   </form>

</div>
<script>
		var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
	};
	</script>
</body>
</html>