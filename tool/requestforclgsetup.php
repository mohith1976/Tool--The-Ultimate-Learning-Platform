<?php

include 'Db_conection.php';

if(isset($_POST['submit'])){

   $collegename = mysqli_real_escape_string($conn, $_POST['collegename']);
   $collegeaddress = mysqli_real_escape_string($conn, $_POST['collegeaddress']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   
   $college_number = mysqli_real_escape_string($conn, $_POST['college_number']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn,($_POST['password']));
   $cpassword = mysqli_real_escape_string($conn, ($_POST['cpassword']));
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   
   
 $check_email_query="select * from request WHERE email='$email'";  
  $check_college_number_query="select * from request WHERE college_number='$college_number'"; 
    $run_query=mysqli_query($conn,$check_email_query,);  
	$run_query=mysqli_query($conn,$check_college_number_query,); 
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>"; 
echo "<script>alert('Email $college_number is already exist in our database, Please try another one!')</script>"; 
header('refresh:0.1;url=requestforclgsetup.php'); 
exit();  
    }elseif($image_size > 2000000){
         echo 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `request`(collegename, collegeaddress, image, college_number, username, email, password, number) VALUES('$collegename', '$collegeaddress', '$image', '$college_number', '$username', '$email', '$password', '$number')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:principallogin.php');
         }else{
            echo 'registeration failed!';
         }
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
	  background-color:#421569;
	  color:black;
	  }
	  .r{
	 background-color:#8989b9;
	 }
	 .but{
	 background-color:#421569;
	 border:none;
	 transition-duration: 0.4s;
	 }
	  .card {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
     .
    
     }
  </style></head>
<body>
  <nav class="navbar navbar-expand-md r navbar-dark ">

         <a class="navbar-brand" href="http://localhost/tool/index.html">
         <img src="tool.png" alt="logo" style="width:90px; height:35px;"><br><img src="po.png" style="width:80px;height:15px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
         </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
             <ul class="navbar-nav ml-auto justify-content-between w-75">
              <li class="nav-item">
             <button type="button" class="nav-link btn but hub  " href="#">Login</button>
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
          </nav><br>
         <div class="container card ">
         <h1 class="kol text-responsive">Thank you,For registering your college in our Tool.</h1>
		 <p class="lab text-responsive1 typewrite" data-period="2000" data-type='["To register your college please enter your college details.","To register your college please enter your details."]'>
		  <span class="wrap"></span>
		  </p>
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      
     
      <div class="form-group">
		     <label for="collegename">College Name:</label>
			 <input type="text" class="form-control" id="collegename" placeholder="College Name" name="collegename"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     <div class="form-group">
		     <label for="collegeaddress">College Address</label>
			 <input type="text" class="form-control" id="collegeaddress" placeholder="College Address" name="collegeaddress"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			  <div class="form-group">
			  <p>Please use images in lesser Dimsions</p>
		     <label for="image">College Logo</label>
			 <input type="file" class="form-control" id="image"  name="image" accept="image/jpg, image/jpeg, image/png"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			 <div class="form-group">
		     <label for="college_number">College Number</label>
			 <input type="number" class="form-control" id="college_number" placeholder="enter your college_number" name="college_number"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     <div class="form-group">
		     <label for="username">Name</label>
			 <input type="txt" class="form-control" id="username" placeholder="enter your Name" name="username"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     <div class="form-group">
		     <label for="email">Email:</label>
			 <input type="email" class="form-control" id="email" placeholder="enter email" name="email"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			  <div class="form-group">
		     <label for="password">Password:</label>
			 <input type="password" class="form-control" id="password" placeholder="Password" name="password"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			 <div class="form-group">
		     <label for="password">Cofirm Password:</label>
			 <input type="password" class="form-control" id="cpassword" placeholder=" Confirm Password" name="cpassword"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     <div class="form-group">
		     <label for="number">Phone Number</label>
			 <input type="number" class="form-control" id="number" placeholder="enter Number" name="number"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		  
</div>
<div class="container text-center">		  
	       <input type="submit" name="submit" value="Register"class="btn hub" />
		   </div></form>
      
      
      <p>already have an account? <a href="principallogin.php">login now</a></p>
   </form>

</div>

</body>
</html>