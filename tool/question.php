<?php

include 'Db_conection.php';

session_start();

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
    <meta charset="UTF-8" />
	<link rel="icon" type="image/x-icon" href="mutta.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Tool-The ultimte online learning platform</title>
	 <link rel="icon" type="image/x-icon" href="mutta.ico">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
	 font-size:calc(300% + 2vw + 2vh);
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
	  .carbd {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
     .
    
     }
	 .text-responsive2{
	 font-size:calc(80% + 1vw + 1vh);
	 }
	 </style></head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Tool's Admin Dashboard</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
         
            </div>
         
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" target="_parent" href="adminhome.php">profile</a></li>
                <li><a class="dropdown-item" href="adminlogin.php">logout</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
               Admin Interface
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Online Examination system</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="examlist.php" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Exam List</span>
                    </a>
                  </li>
				  <li>
                    <a href="" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Assignments</span>
                    </a>
                  </li>
				  <li>
                    <a href="" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Study Materials</span>
                    </a>
                  </li>
				  <li>
                    <a href="" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Post important news to students</span>
                    </a>
                  </li>
				  <li>
                    <a href="" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Doubts Clarification</span>
                    </a>
                  </li>
                <li>
                    <a href="questionbank.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Add Questions to Bank</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pricings</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Help?
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"></span>
                <span>Contact us</span>
              </a>
            </li>
            <li>
              <a href="index.html" class="nav-link px-3">
                <span class="me-2"></span>
                <span>Home</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Add questions in Mathematics</h4>
          </div>
        </div>
		<div class="card" style="width:auto";>
        <div class="form-container">
         
   <form action="" method="post" enctype="multipart/form-data">
      
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="question_title">Question </label>
			 <input type="text" class="form-control" id="question_title" placeholder="question_title" name="question_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_1">option_1</label>
			 <input type="option_1" class="form-control" id="option_1" placeholder="option_1" name="option_1"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_2">option_2</label>
			 <input type="option_2" class="form-control" id="option_2" placeholder="option_2" name="option_2"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_3">option_3</label>
			 <input type="option_3" class="form-control" id="option_3" placeholder="option_3" name="option_3"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_4">option_4</label>
			 <input type="option_4" class="form-control" id="option_4" placeholder="option_4" name="option_4"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="answer_option">Answer option</label>
			 <input type="answer_option" class="form-control" id="answer_option" placeholder="answer_option" name="answer_option"required/>
			 
		     </div>
		     
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="addmaths" value="addmaths"class="btn hub" /></button>
		   <a href="viewexam.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form><br><br><br>
      

   
   
   
   
   
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-16">
            <h4>Add questions containing images in Mathematics</h4>
          </div>
        </div>
   
   <div class="card" style="width:auto";>
        <div class="form-container">
         
   
      <form action="questionimg.php" method="post" enctype="multipart/form-data">
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="iquestion_title">Question </label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="iquestion_title" placeholder="iquestion_title" name="iquestion_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_1">option_1</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_1" placeholder="ioption_1" name="ioption_1"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_2">option_2</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_2" placeholder="ioption_2" name="ioption_2"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_3">option_3</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_3" placeholder="ioption_3" name="ioption_3"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_4">option_4</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_4" placeholder="ioption_4" name="ioption_4"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="answer_option">Answer option</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="answer_option" placeholder="answer_option" name="answer_option"required/>
			 
		     </div>
		     
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="iaddmaths" value="iaddmaths"class="btn hub" /></button>
		   <a href="viewexam.php" class="btn btn-info " type ="button">view exam details??</a>
		   <a href="viewquestion.php" class="btn btn-primary " type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Select questions from our bank??
  </button>
		   </div></form></div>
      
      
	  
	  
	  
	  
	  
	  
	  
	   <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Add questions in Physics</h4>
          </div>
        </div>
		<div class="card" style="width:auto";>
        <div class="form-container">
         
   <form action="" method="post" enctype="multipart/form-data">
      
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="question_title">Question </label>
			 <input type="text" class="form-control" id="question_title" placeholder="question_title" name="question_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_1">option_1</label>
			 <input type="option_1" class="form-control" id="option_1" placeholder="option_1" name="option_1"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_2">option_2</label>
			 <input type="option_2" class="form-control" id="option_2" placeholder="option_2" name="option_2"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_3">option_3</label>
			 <input type="option_3" class="form-control" id="option_3" placeholder="option_3" name="option_3"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_4">option_4</label>
			 <input type="option_4" class="form-control" id="option_4" placeholder="option_4" name="option_4"required/>
			 
		     </div>
		     <label for="answer_option">Answer option</label>
			 
			 <select name="answer_option" id="answer_option"   name="answer_option" placeholder="answer_option"  class="form-control">
	                				<option value="">Select</option>
	                				<option value="option_1">option_1</option>
	                				<option value="option_2">option_2</option>
	                				<option value="option_3">option_3</option>
	                				<option value="option_4">option_4</option>
	                			</select>
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="addphy" value="addphy"class="btn hub" /></button>
		   <a href="viewexam.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form><br><br><br>
      

   
   
   
   
   
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-16">
            <h4>Add questions containing images in Physics</h4>
          </div>
        </div>
   
   <div class="card" style="width:auto";>
        <div class="form-container">
         
   
      <form action="questionimg.php" method="post" enctype="multipart/form-data">
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="iquestion_title">Question </label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="iquestion_title" placeholder="iquestion_title" name="iquestion_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_1">option_1</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_1" placeholder="ioption_1" name="ioption_1"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_2">option_2</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_2" placeholder="ioption_2" name="ioption_2"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_3">option_3</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_3" placeholder="ioption_3" name="ioption_3"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_4">option_4</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_4" placeholder="ioption_4" name="ioption_4"required/>
			 
		     </div>
		     <label for="answer_option">Answer option</label>
			 
			 <select name="answer_option" id="ianswer_option"   name="ianswer_option" placeholder="ianswer_option"  class="form-control">
	                				<option value="">Select</option>
	                				<option value="option_1">option_1</option>
	                				<option value="option_2">option_2</option>
	                				<option value="option_3">option_3</option>
	                				<option value="option_4">option_4</option>
	                			</select>
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="iaddphy" value="iaddphy"class="btn hub" /></button>
		   <a href="viewexam.php" class="btn btn-info " type ="button">view exam details??</a>
		   <a href="viewquestion.php" class="btn btn-primary " type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Select questions from our bank??
  </button>
		   </div></form></div>
      
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	   <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Add questions in Chemistry</h4>
          </div>
        </div>
		<div class="card" style="width:auto";>
        <div class="form-container">
         
   <form action="" method="post" enctype="multipart/form-data">
      
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="question_title">Question </label>
			 <input type="text" class="form-control" id="question_title" placeholder="question_title" name="question_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_1">option_1</label>
			 <input type="option_1" class="form-control" id="option_1" placeholder="option_1" name="option_1"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_2">option_2</label>
			 <input type="option_2" class="form-control" id="option_2" placeholder="option_2" name="option_2"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_3">option_3</label>
			 <input type="option_3" class="form-control" id="option_3" placeholder="option_3" name="option_3"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_4">option_4</label>
			 <input type="option_4" class="form-control" id="option_4" placeholder="option_4" name="option_4"required/>
			 
		     </div>
		     <label for="answer_option">Answer option</label>
			 
			 <select name="answer_option" id="answer_option"   name="answer_option" placeholder="answer_option"  class="form-control">
	                				<option value="">Select</option>
	                				<option value="option_1">option_1</option>
	                				<option value="option_2">option_2</option>
	                				<option value="option_3">option_3</option>
	                				<option value="option_4">option_4</option>
	                			</select>
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="addche" value="addche"class="btn hub" /></button>
		   <a href="viewexam.php" class="btn btn-info" type ="button">view exam details??</a>
		   <a href="viewquestion.php" class="btn btn-warning" type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Select questions from our bank??
  </button>
		   </div></div>
      </form><br><br><br>
      

   
   
   
   
   
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-16">
            <h4>Add questions containing images in Chemistry</h4>
          </div>
        </div>
   
   <div class="card" style="width:auto";>
        <div class="form-container">
         
   
      <form action="questionimg.php" method="post" enctype="multipart/form-data">
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="iquestion_title">Question </label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="iquestion_title" placeholder="iquestion_title" name="iquestion_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_1">option_1</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_1" placeholder="ioption_1" name="ioption_1"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_2">option_2</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_2" placeholder="ioption_2" name="ioption_2"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_3">option_3</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_3" placeholder="ioption_3" name="ioption_3"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="ioption_4">option_4</label>
			 <input type="file" class="form-control" accept="image/jpg, image/jpeg, image/png" id="ioption_4" placeholder="ioption_4" name="ioption_4"required/>
			 
		     </div>
		     <label for="answer_option">Answer option</label>
			 
			 <select name="answer_option" id="ianswer_option"   name="ianswer_option" placeholder="ianswer_option"  class="form-control">
	                				<option value="">Select</option>
	                				<option value="option_1">option_1</option>
	                				<option value="option_2">option_2</option>
	                				<option value="option_3">option_3</option>
	                				<option value="option_4">option_4</option>
	                			</select>
		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	       <button><input type="submit" name="iaddche" value="iaddche"class="btn hub" /></button>
		   <a href="viewexam.php" class="btn btn-info " type ="button">view exam details??</a>
		   <a href="viewquestion.php" class="btn btn-primary " type ="button">view questions??</a>
		   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Select questions from our bank??
  </button>
		   </div></form></div>
      
	  
	  
	  
	  
	  
	  
	  
      
    
 
  
  <!-- The Modal -->
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
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths">Mathematics</button>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics">Physics</button>  </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche">Chemistry</button> </div>
  </div>
  <br>
  
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
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths1">Sets, Relations, and Functions</button>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths2">Complex Numbers 7 Quadratic Numbers</button>  </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths3 ">Matrices and Determinants</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths4 ">Permutations & Combinations</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths5 ">Mathematical Induction</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths6 ">Binomial Theorem & its simple applications</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths7 ">Sequences and Series</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths8 ">Limits, Continuity, and Differentiability</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths9 ">Integral Calculus</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths10 ">Differential Calculus</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths11 ">Coordinate Geometry</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths12 ">Three Dimensional Geometry</button> </div>
  </div>
  <br><div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths13 ">Vector Algebra</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths14 ">Statistics Probability</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths15 ">Trigonometry</button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalmaths16 ">Mathematical Reasoning</button> </div>
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
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics1">Physics and Measurement</button></div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics2">Kinematics</button>  </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics3">Laws of Motion</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics4">Work, Energy and Power</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics5">Rotational Motion</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics6">Gravitation</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics7">Properties of Solids and Liquids</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics8">Thermodynamics</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics9">Kinetic Theory of Gases</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics10">Oscillations and Waves</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics11">Electrostatics</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics12">Current Electricity  </button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics13"> Magnetic Effects of Current and Magnetism</button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics14">Electromagnetic Induction and Alternating Currents </button> </div>
  </div>
  <br>
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics15">Electromagnetic Waves</button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics16">Optics </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics17">Dual Nature of Matter and Radiation </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics18">Atoms and Nuclei </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics19">Electronic Devices </button> </div>
  </div>
  <br>
  
  <div class="card  ">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalphysics20">Communication Systems </button> </div>
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
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche1">Some Basic Concepts in Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche2">States of Matter</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche3">Atomic Structure</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche4">Chemical Bonding and Molecular Structure</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche5">Chemical Thermodynamics</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche6">Solutions</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche7">Equilibrium</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche8">Redox Reactions and Electro-chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche9">Chemical Kinetics</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche10">Surface Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche11">Classification of Elements and Periodicity in Properties</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche12">General Principles and Processes of Isolation of Metals</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche13">Hydrogen</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche14">S - Block Elements (Alkali and Alkaline Earth Metals)</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche15">p- Block Elements</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche16">d - and f - Block Elements</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche17">Co-Ordination Compounds</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche18">Environmental Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche19">Purification and Characterization of Organic Compounds</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche20">Some Basic Principles of Organic Chemistry</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche21">Hydrocarbons</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche22">Organic Compounds Containing Halogens</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche23">Organic Compounds Containing Oxygen</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche24">Organic Compounds Containing Nitrogen</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche25">Polymers</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche26">Biomolecules</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche27">Chemistry In Everyday Life</button></div>
  </div>
  <br>
  <div class="card">
    <div class="card-body hub lab"><button type="button" class="btn " data-toggle="modal" data-target="#myModalche28">Principles Related to Practical Chemistry</button></div>
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
  <div class="modal fade" id="myModalmaths1">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
			   echo '<td><a href="addque.php?question_id= '.$tetch['question_id'] .' "><button class="btn btn-primary btn-xs"><input type="submit" name="addque" value="addque"class="btn btn-primary btn-xs" /><span class="glyphicon glyphicon-pencil"></span></button></a><br><br></td>';
			   
			   
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
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
	</div><br>
        
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
