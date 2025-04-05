

<?php

include 'Db_conection.php';
session_start();

  $admin_id = $_SESSION['admin_id'];
  
  


 $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
				 $_SESSION['exam_number'] = $fetch['exam_number'];
                 }
				    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   if(isset($_POST['addmaths'])){
	
	
	  $exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   $check_question_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_question_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
     $insert = mysqli_query($conn,"INSERT INTO `question`( exam_number, question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$exam_number', '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');

      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	  header('refresh:0.1;url=question.php');
	
exit();  
    }else{
             
             echo "<script>alert(' exam does not exist ,Incorrect exam number!')</script>"; 
			 
         
            
         }
            echo 'failed!';
         }



if(isset($_POST['addphy'])){
	
	  $exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   


   
   
 $check_question_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_question_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
     $insert = mysqli_query($conn, "INSERT INTO `phyquestion`(exam_number, question_title, option_1, option_2, option_3, option_4, answer_option) VALUES('$exam_number', '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	  header('refresh:0.1;url=question.php');
	
exit();  
    }else{
             
             echo "<script>alert(' exam does not exist ,Incorrect exam number!')</script>"; 
			 
         
            
         }
            echo 'failed!';
         }
      
      


if(isset($_POST['addche'])){
	
	  $exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   


   
   
 $check_question_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_question_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
     $insert = mysqli_query($conn, "INSERT INTO `chequestion`(exam_number, question_title, option_1, option_2, option_3, option_4, answer_option) VALUES('$exam_number', '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	  header('refresh:0.1;url=question.php');
	
exit();  
    }else{
             
             echo "<script>alert(' exam does not exist ,Incorrect exam number!')</script>"; 
			 
         
            
         }
            echo 'failed!';
         }
      
      









   
?>


















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
   Tool-The ultimte online learning platform
  </title>
  <!--     Fonts and icons     -->
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets1/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets1/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets1/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
     .kol{
	 font-family:Bungee;
	 color:#421569;
	 text-align:center
	 }
	 
	 .lab{
	 text-align:center;
	 font-family:Quicksand;
	 
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
	  .carbd {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
     .
    
     }
	 
	 </style>


</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        
        <span class="ms-1 font-weight-bold text-white">Admin dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-dark" href="admindashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="createexam.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"> Create Exam </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="assignments.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Assignments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="pdf.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Notes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="doubts.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Doubts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="news.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-white " href="questionbank.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Question Bank</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        
        
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            
           
            <li class="nav-item d-flex align-items-center">
              <a href="adminlogin.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
     <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add  Mathematics Questions</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
               <?php
                   
                                      $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 
				 





                   




?>
			 
			  
			  
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="exam_number" class="form-label"></label>
			 <input type="number" class="form-control" id="exam_number"  value = "<?php echo $fetch['exam_number']; ?>" name="exam_number"required/>
			 
		     </div>
      <div class="input-group input-group-outline my-3">
		     <label for="question_title" class="form-label">Question </label>
			 <input type="text" class="form-control" id="question_title"  name="question_title"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_1"class="form-label">option_1</label>
			 <input type="option_1" class="form-control" id="option_1"  name="option_1"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_2"class="form-label">option_2</label>
			 <input type="option_2" class="form-control" id="option_2"  name="option_2"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_3"class="form-label">option_3</label>
			 <input type="option_3" class="form-control" id="option_3"  name="option_3"required/>
			 
		     </div>
			<div class="input-group input-group-outline my-3">
		     <label for="option_4"class="form-label">option_4</label>
			 <input type="option_4" class="form-control" id="option_4"  name="option_4"required/>
			 
		     </div>
			<div class="input-group input-group-outline my-3">
		     <label for="answer_option"class="form-label">Answer option</label>
			 <input type="answer_option" class="form-control" id="answer_option"  name="answer_option"required/>
			 
		     </div>
		     
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="addmaths" value="addmaths"class="btn bg-gradient-dark w-100 my-4 mb-2" /></button>
		   <a href="examslist1.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion1.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form>
			  
			  
			  
			  
			  
			  
			    
            </div>
            </div>
            </div>
			  
            </div>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add  Image Mathematics Questions</h6>
              </div>
            </div>

<div class="card-body px-0 pb-2">
               <?php
                   
                                      $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 
				 





                   




?>
			 
			  
			  
			  <form action="questionimg.php" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="exam_number" class="form-label"></label>
			 <input type="number" class="form-control" id="exam_number"  value = "<?php echo $fetch['exam_number']; ?>" name="exam_number"required/>
			 
		     </div>
      <div class="input-group input-group-outline my-3">
	          
	          
		     <label for="iquestion_title"class="form-label"> </label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="iquestion_title"   name="iquestion_title"required/>
			
		     </div>
 <label for="ioption_1"class="form-label">Option 1</label>
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_1"  name="ioption_1"required/>
			 
		     </div>
<label for="ioption_2"class="form-label">Option 2</label>
			 <div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_2"  name="ioption_2"required/>
			 
		     </div>
<label for="ioption_3"class="form-label">Option 3</label>
			 <div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_3"  name="ioption_3"required/>
			 
		     </div>
<label for="ioption_4"class="form-label">Option 4</label>  
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_4"  name="ioption_4"required/>
			 
</div>
<label for="answer_option"class="form-label">Answer option</label>
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="answer_option"  name="answer_option"required/>
			 
		     </div>
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="iaddmaths" value="Add Question" class="btn btn-dark"/></button>
		   <a href="examslist1.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion1.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form>
			  
			  
			  
			  
			  
			  
			  
			  
            </div> 
</div>




<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >Tool</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>TOOL's  JEE ADVANCED -Question Bank</h2><br><br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" style="font-family:Bungee; color:#421569;" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths">Mathematics</button>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" style="font-family:Bungee; color:#421569;" class="btn hub btn-lg lab " data-toggle="modal" data-target="#myModalphysics">Physics</button>  </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button"  style="font-family:Bungee; color:#421569;" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche">Chemistry</button> </div>
  </div>
  <br>
  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-info "  data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

   
   
   
    <div class="modal fade" id="myModalmaths">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >Tool</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>TOOL's Maths Question Bank</h2><br><br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths1">Sets, Relations, and Functions</button>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths2">Complex Numbers 7 Quadratic Numbers</button>  </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalmaths3 ">Matrices and Determinants</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths4 ">Permutations & Combinations</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths5 ">Mathematical Induction</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths6 ">Binomial Theorem & its simple applications</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths7 ">Sequences and Series</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths8 ">Limits, Continuity, and Differentiability</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button"class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths9 ">Integral Calculus</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths10 ">Differential Calculus</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths11 ">Coordinate Geometry</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths12 ">Three Dimensional Geometry</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths13 ">Vector Algebra</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths14 ">Statistics Probability</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths15 ">Trigonometry</button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalmaths16 ">Mathematical Reasoning</button> </div>
  </div>
  <br>
  
  
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

   
   
   
   
   
   
   <div class="modal fade" id="myModalphysics">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >Tool</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>TOOL's Physics Question Bank</h2><br><br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics1">Physics and Measurement</button></div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics2">Kinematics</button>  </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics3">Laws of Motion</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalphysics4">Work, Energy and Power</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics5">Rotational Motion</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics6">Gravitation</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics7">Properties of Solids and Liquids</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalphysics8">Thermodynamics</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalphysics9">Kinetic Theory of Gases</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics10">Oscillations and Waves</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics11">Electrostatics</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics12">Current Electricity  </button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics13"> Magnetic Effects of Current and Magnetism</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics14">Electromagnetic Induction and Alternating Currents </button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics15">Electromagnetic Waves</button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics16">Optics </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics17">Dual Nature of Matter and Radiation </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics18">Atoms and Nuclei </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics19">Electronic Devices </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalphysics20">Communication Systems </button> </div>
  </div>
  <br>
  
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
   
   
   
   
   
   
   <div class="modal fade" id="myModalche">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >Tool</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>TOOL's Chemistry Question Bank</h2><br><br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche1">Some Basic Concepts in Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche2">States of Matter</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche3">Atomic Structure</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche4">Chemical Bonding and Molecular Structure</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche5">Chemical Thermodynamics</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche6">Solutions</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche7">Equilibrium</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche8">Redox Reactions and Electro-chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche9">Chemical Kinetics</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche10">Surface Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche11">Classification of Elements and Periodicity in Properties</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche12">General Principles and Processes of Isolation of Metals</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche13">Hydrogen</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche14">S - Block Elements (Alkali and Alkaline Earth Metals)</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche15">p- Block Elements</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche16">d - and f - Block Elements</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche17">Co-Ordination Compounds</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche18">Environmental Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche19">Purification and Characterization of Organic Compounds</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche20">Some Basic Principles of Organic Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche21">Hydrocarbons</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche22">Organic Compounds Containing Halogens</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche23">Organic Compounds Containing Oxygen</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche24">Organic Compounds Containing Nitrogen</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche25">Polymers</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab"data-toggle="modal" data-target="#myModalche26">Biomolecules</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche27">Chemistry In Everyday Life</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn hub btn-lg lab" data-toggle="modal" data-target="#myModalche28">Principles Related to Practical Chemistry</button></div>
  </div>
  <br>
  
  
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
    
	
	 <!-- The Modal -->
  <div class="modal fade " id="myModalmaths1">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>Sets,Relations and Functions</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM sets_relation") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addque.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

   
   <!-- The Modal -->
  <div class="modal fade" id="myModalmaths2">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM complex_numbers_quadratic_numbers ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addcomplex.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths3">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM matrices_and_determinants") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addmatrices.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths4">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM permutations_and_combinations") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addpermu.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths5">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM mathematical_induction") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addmathsinduc.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths6">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM binomial_theorem_its_simple_applications") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addbinom.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths7">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM sequences_and_series") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addseries.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths8">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM limits_continuity_and_differentiability") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addlimits.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths9">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM integral_calculus") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addintegral.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths10">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM differential_calculus") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addcalcdiff.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths11">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM coordinate_geometry") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addcord.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths12">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM three_dimensional_geometry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="add3d.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths13">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM vector_algebra") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addvect.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths14">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM statistics_probability") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addstat.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalmaths15">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM trigonometry") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addtrigo.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>





<!-- The Modal -->
  <div class="modal fade" id="myModalmaths16">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM mathematical_reasoning") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addreason.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>











<!-- The Modal -->
  <div class="modal fade" id="myModalphysics1">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM physics_and_measurement") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addmea.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- The Modal -->
  <div class="modal fade" id="myModalphysics2">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM kinematics") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addkine.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics3">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM laws_of_motion") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addlaws.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics4">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM work_energy_and_power") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addwork.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics5">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM rotational_motion") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addrot.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics6">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM gravitation ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addgra.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics7">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM properties_of_solids_and_liquids") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addprop.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics8">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM thermodynamics") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addthermo.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics9">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM kinetic_theory_of_gases") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addkinetic.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics10">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM oscillations_and_waves") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addosc.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics11">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM electrostatics") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addelectstat.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics12">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM current_electricity") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addcurrent.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics13">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM magnetic_effects_of_current_and_magnetism") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addmag.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics14">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM electromagneticinduction_and_alternating_currents") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addind.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics15">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM electromagnetic_waves") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addmagwav.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics16">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM optics") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addopt.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics17">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM dual_nature_of_matter_and_radiation") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="adddual.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics18">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM atoms_and_nuclei") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addatom.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModalphysics19">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM electronic_devices") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addelectro.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- The Modal -->
  <div class="modal fade" id="myModalphysics20">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";></h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM communication_systems") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';
			   echo '<td><a href="addcomm.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


          </div>
        </div>
      </div>
      







<!-- The Modal -->
  <div class="modal fade " id="myModalche1">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>Some Basic Concepts in Chemistry</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM some_basic_concepts_in_chemistry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addsboc.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche2">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>states_of_matter</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM states_of_matter  ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addsom.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche3">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>atomic_structure</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM atomic_structure ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addas.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!-- The Modal -->
  <div class="modal fade " id="myModalche4">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>chemical_bonding_and_molecular_structure</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM chemical_bonding_and_molecular_structure ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addcbms.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!-- The Modal -->
  <div class="modal fade " id="myModalche5">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>chemical_thermodynamics</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM chemical_thermodynamics ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addct.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "<script>alert(' No Question found!')</script>"; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!-- The Modal -->
  <div class="modal fade " id="myModalche6">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>solutions</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM solutions ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addsol.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo ""; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche7">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>equilibrium</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM equilibrium ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addeq.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo ""; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche8">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>redox_reactions_and_electrochemistry</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM redox_reactions_and_electrochemistry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addred.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo ""; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>



<!-- The Modal -->
  <div class="modal fade " id="myModalche9">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>chemical_kinetics</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM chemical_kinetics ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addck.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo ""; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche10">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>surface_chemistry</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM surface_chemistry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addsc.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo ""; 
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche11">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>classification_of_elements_and_periodicity_in_properties</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM classification_of_elements_and_periodicity_in_properties ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addcoe.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo ""; 
     
         }

?>
<br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche12">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>general_principles_and_processes_of_isolation_of_metals</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM general_principles_and_processes_of_isolation_of_metals ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addgp.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche13">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>hydrogen</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM hydrogen ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addh.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche14">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>s_block_elements</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM s_block_elements ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addsbe.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche15">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>p_block_elements</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM p_block_elements ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addpb.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- The Modal -->
  <div class="modal fade " id="myModalche16">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>d_and_f_block_elements</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM d_and_f_block_elements ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="adddf.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- The Modal -->
  <div class="modal fade " id="myModalche17">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>coordination_compounds</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM coordination_compounds ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addcc.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>






<!-- The Modal -->
  <div class="modal fade " id="myModalche18">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>environmental_chemistry</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM environmental_chemistry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addec.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche19">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>purification_and_characterization_of_organic_compounds</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM purification_and_characterization_of_organic_compounds ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addpac.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche20">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>some_basic_principles_of_organic_chemistry</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM some_basic_principles_of_organic_chemistry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addsbp.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche21">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>hydrocarbons</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM hydrocarbons ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addhc.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche22">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>organic_compounds_containing_halogens</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM organic_compounds_containing_halogens ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addoch.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche23">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>organic_compounds_containing_oxyzen</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM organic_compounds_containing_oxyzen ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addoco.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche24">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>organic_compounds_containing_nitrozen</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM organic_compounds_containing_nitrozen ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addocn.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche25">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>polymers</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM polymers ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addpol.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche26">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>biomolecules</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM biomolecules ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addbio.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




<!-- The Modal -->
  <div class="modal fade " id="myModalche27">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>chemistry_in_everyday_life</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM chemistry_in_everyday_life ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addcel.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- The Modal -->
  <div class="modal fade " id="myModalche28">
    <div class="modal-dialog align-items-center modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-family:Bungee;
	 color:#421569;"; >TOOL's  JEE ADVANCED -Question Bank</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <div class="container">
  <h2 style="font-family:Bungee;
	 color:#421569;";>principles_related_to_practical_chemistry</h2><br><br>
   
   
   <?php




  
   

   $select = mysqli_query($conn, "SELECT * FROM principles_related_to_practical_chemistry ") or die('query failed');
    

   
   if(mysqli_num_rows($select) > 0){
	       
			   echo'<br>';
           while( $tetch = mysqli_fetch_assoc($select)) {
			   
			   echo'<div class="card-body">';
			   echo'<div class="table-responsive-md">';
			   echo'';
		       echo '<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >';
			   echo '<thead>';
			   echo '<tr>';
			   echo '<th>Id</th>';
			   
			   echo '<th> Question </th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th>option_1</th>';
			   echo '<th> answer_option </th>';
			   echo '<th>add question to exam</th>';
			   
			   echo '</tr>';
			   echo ' </thead>';
			   echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['question_id']. '</td>';
			  
			   echo '<td>' .$tetch['question_title']. '</td>';
			   echo '<td>' .$tetch['option_1'].'</td>';
			   echo '<td>'.$tetch['option_2'].'</td>';
			   echo '<td>'. $tetch['option_3'].'</td>';
			   echo ' <td>'.$tetch['option_4'].'</td>';
			   echo '<td>'. $tetch['answer_option'].'</td>  ';          
			   echo '<td><a href="addppc.php?question_id= '.$tetch['question_id'] . ' "><button class="  btn bg-gradient-dark"><input type="submit" name="addque" value="addque"class="btn bg-gradient-dark" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
			   echo ' </tr>';
			   echo '	  </tbody>
';
			   echo '</table>';
			   echo '</div>';
			   echo '</div>';
			   			 		   }	
   }else{
       echo "" ;
     
         }

?>






  
  <br>
  
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>





  
  












<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Physics Questions</h6>
              </div>
            </div>

<div class="card-body px-0 pb-2">
               <?php
                   
                                      $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 
				 





                   




?>
			 
			  
			  
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="exam_number" class="form-label"></label>
			 <input type="number" class="form-control" id="exam_number"  value = "<?php echo $fetch['exam_number']; ?>" name="exam_number"required/>
			 
		     </div>
      <div class="input-group input-group-outline my-3">
		     <label for="question_title" class="form-label">Question </label>
			 <input type="text" class="form-control" id="question_title"  name="question_title"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_1"class="form-label">option_1</label>
			 <input type="option_1" class="form-control" id="option_1"  name="option_1"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_2"class="form-label">option_2</label>
			 <input type="option_2" class="form-control" id="option_2"  name="option_2"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_3"class="form-label">option_3</label>
			 <input type="option_3" class="form-control" id="option_3"  name="option_3"required/>
			 
		     </div>
			<div class="input-group input-group-outline my-3">
		     <label for="option_4"class="form-label">option_4</label>
			 <input type="option_4" class="form-control" id="option_4"  name="option_4"required/>
			 
		     </div>
			<div class="input-group input-group-outline my-3">
		     <label for="answer_option"class="form-label">Answer option</label>
			 <input type="answer_option" class="form-control" id="answer_option"  name="answer_option"required/>
			 
		     </div>
		     
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="addphy" value="addphy"class="btn bg-gradient-dark" /></button>
		   <a href="examslist1.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion1.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form>
			  
			  
			  
			  
			  
			  
			  
			  
            </div>












          </div>
        </div>
      </div>
      

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add  Image Phyics Questions</h6>
              </div>
            </div>

<div class="card-body px-0 pb-2">
               <?php
                   
                                      $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 
				 





                   




?>
			 
			  
			  
			  <form action="questionimg.php" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="exam_number" class="form-label"></label>
			 <input type="number" class="form-control" id="exam_number"  value = "<?php echo $fetch['exam_number']; ?>" name="exam_number"required/>
			 
		     </div>
       <div class="input-group input-group-outline my-3">
	          
	          
		     <label for="iquestion_title"class="form-label"> </label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="iquestion_title"   name="iquestion_title"required/>
			
		     </div>
 <label for="ioption_1"class="form-label">Option 1</label>
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_1"  name="ioption_1"required/>
			 
		     </div>
<label for="ioption_2"class="form-label">Option 2</label>
			 <div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_2"  name="ioption_2"required/>
			 
		     </div>
<label for="ioption_3"class="form-label">Option 3</label>
			 <div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_3"  name="ioption_3"required/>
			 
		     </div>
<label for="ioption_4"class="form-label">Option 4</label>  
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_4"  name="ioption_4"required/>
			 
</div>
<label for="answer_option"class="form-label">Answer option</label>
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="answer_option"  name="answer_option"required/>
			 
		     </div>
		     
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="iaddphy" value="iaddphy"class="btn bg-gradient-dark " /></button>
		   <a href="examslist1.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion1.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form>
			  
			  
			  
			  
			  
			  
			  
			  
            </div>












          </div>
        </div>
      </div>
      

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add  Chemistry Questions</h6>
              </div>
            </div>

<div class="card-body px-0 pb-2">
               <?php
                   
                                      $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 
				 





                   




?>
			 
			  
			  
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="exam_number" class="form-label"></label>
			 <input type="number" class="form-control" id="exam_number"  value = "<?php echo $fetch['exam_number']; ?>" name="exam_number"required/>
			 
		     </div>
      <div class="input-group input-group-outline my-3">
		     <label for="question_title" class="form-label">Question </label>
			 <input type="text" class="form-control" id="question_title"  name="question_title"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_1"class="form-label">option_1</label>
			 <input type="option_1" class="form-control" id="option_1"  name="option_1"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_2"class="form-label">option_2</label>
			 <input type="option_2" class="form-control" id="option_2"  name="option_2"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="option_3"class="form-label">option_3</label>
			 <input type="option_3" class="form-control" id="option_3"  name="option_3"required/>
			 
		     </div>
			<div class="input-group input-group-outline my-3">
		     <label for="option_4"class="form-label">option_4</label>
			 <input type="option_4" class="form-control" id="option_4"  name="option_4"required/>
			 
		     </div>
			<div class="input-group input-group-outline my-3">
		     <label for="answer_option"class="form-label">Answer option</label>
			 <input type="answer_option" class="form-control" id="answer_option"  name="answer_option"required/>
			 
		     </div>
		     
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="addche" value="addche"class="btn bg-gradient-dark w-100 my-4 mb-2" /></button>
		   <a href="examslist1.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion1.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form>
			  
			  
			  
			  
			  
			  
			  
			  
            </div>












          </div>
        </div>
      </div>
      

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add  Image Chemistry Questions</h6>
              </div>
            </div>

<div class="card-body px-0 pb-2">
               <?php
                   
                                      $question_id = intval($_GET['id']);
                  $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE online_exam_id = '$question_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 
				 





                   




?>
			 
			  <form action="questionimg.php" method="post" class="text-start" enctype="multipart/form-data">
			  
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="exam_number" class="form-label"></label>
			 <input type="number" class="form-control" id="exam_number"  value = "<?php echo $fetch['exam_number']; ?>" name="exam_number"required/>
			 
		     </div>
      <div class="input-group input-group-outline my-3">
	          
	          
		     <label for="iquestion_title"class="form-label"> </label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="iquestion_title"   name="iquestion_title"required/>
			
		     </div>
 <label for="ioption_1"class="form-label">Option 1</label>
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_1"  name="ioption_1"required/>
			 
		     </div>
<label for="ioption_2"class="form-label">Option 2</label>
			 <div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_2"  name="ioption_2"required/>
			 
		     </div>
<label for="ioption_3"class="form-label">Option 3</label>
			 <div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_3"  name="ioption_3"required/>
			 
		     </div>
<label for="ioption_4"class="form-label">Option 4</label>  
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_4"  name="ioption_4"required/>
			 
</div>
<label for="answer_option"class="form-label">Answer option</label>
			<div class="input-group input-group-outline my-3">
	          
		     
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="answer_option"  name="answer_option"required/>
			 
		     </div>
		     </div>
			 
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="iaddche" value="iaddche"class="btn bg-gradient-dark w-100 my-4 mb-2" /></button>
		   <a href="examslist1.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion1.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form>
			  
			  
			  
			  
			  
			  
			  
			  
            </div>












          </div>
        </div>
      </div>
      

















      </div>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Tool's Tool</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
		       <span class="badge filter bg-gradient-dark active" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-primary " data-color="primary" onclick="sidebarColor(this)"></span>
           
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets1/js/core/popper.min.js"></script>
  <script src="assets1/js/core/bootstrap.min.js"></script>
  <script src="assets1/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets1/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets1/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <script src="assets1/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html> 