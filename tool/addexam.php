<?php

include 'Db_conection.php';
session_start();

  


   







if(isset($_POST['add'])){
      $college_number= mysqli_real_escape_string($conn, $_POST['college_number']);
      $exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
   $online_exam_title = mysqli_real_escape_string($conn, $_POST['online_exam_title']);
    $online_exam_datetime = mysqli_real_escape_string($conn, $_POST['online_exam_datetime']);
	 $online_exam_duration = mysqli_real_escape_string($conn, $_POST['online_exam_duration']);
	  $total_question = mysqli_real_escape_string($conn, $_POST['total_question']);
	   $marks_per_right_answer = mysqli_real_escape_string($conn, $_POST['marks_per_right_answer']);
	    $marks_per_wrong_answer = mysqli_real_escape_string($conn, $_POST['marks_per_wrong_answer']);
		 $online_exam_created_on = mysqli_real_escape_string($conn, $_POST['online_exam_created_on']);
        
        $online_exam_status = mysqli_real_escape_string($conn, $_POST['online_exam_status']);
   


   $check_college_number_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_college_number_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
      echo "<script>alert('Exam number is already exist in our database, Please try another one!')</script>"; 
      header('refresh:0.1;url=addexam.php');  
   exit(); 
    
	}else{
   
 $check_online_exam_title_query="select * from online_exam_table WHERE online_exam_title='$online_exam_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Exam Title is already exist in our database, Please try another one!')</script>"; 
header('refresh:0.1;url=addexam.php'); 
exit();  
    }else{
         $insert = mysqli_query($conn, "INSERT INTO `online_exam_table`(college_number, exam_number, online_exam_title, online_exam_datetime, online_exam_duration, total_question, marks_per_right_answer, marks_per_wrong_answer, online_exam_created_on, online_exam_status) VALUES('$college_number', '$exam_number', '$online_exam_title', '$online_exam_datetime', '$online_exam_duration', '$total_question', '$marks_per_right_answer', '$marks_per_wrong_answer', '$online_exam_created_on', '$online_exam_status')") or die('query failed');

         echo "<script>alert('exam added successfully.Now,Admin can go back to get his dashbord')</script>";
            
         }
            echo 'exam registeration failed!';
         }
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Tool-The ultimte online learning platform</title>
	 <link rel="icon" type="image/x-icon" href="mutta.ico">
  </head>
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
                    <a href="#" class="nav-link px-3">
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
            <h4>Add Exam</h4>
          </div>
        </div>
        <div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      
	  <div class="form-group">
		     <label for="college_number">College Number</label>
			 <input type="number" class="form-control" id="college_number" placeholder="college_number" name="college_number"required/>
			 
		     </div>
			 
     <div class="form-group">
		     <label for="exam_number">Exam Number</label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"required/>
			 
		     </div>
      <div class="form-group">
		     <label for="online_exam_title">Exam Name</label>
			 <input type="text" class="form-control" id="online_exam_title" placeholder="online_exam_title" name="online_exam_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="online_exam_datetime">Date and Time of Exam</label>
			 <input type="datetime-local" class="form-control" id="online_exam_datetime" placeholder="online_exam_datetime" name="online_exam_datetime"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="online_exam_duration">Duration of exam</label>
			 
			    <select name="online_exam_duration" id="online_exam_duration"  name="online_exam_duration"  placeholder="online_exam_duration" class="form-control">
	                				<option value="">Select</option>
	                				<option value="5">5 Minute</option>
	                				<option value="30">30 Minute</option>
	                				<option value="60">1 Hour</option>
	                				<option value="120">2 Hour</option>
	                				<option value="180">3 Hour</option>
	                			</select> 
			 
		     </div>
			 <div class="form-group">
		     <label for="total_question">Total Questions</label>
			 
			 <select name="total_question" id="total_question"   name="total_question" placeholder="total_question"  class="form-control">
	                				<option value="">Select</option>
	                				<option value="5">5 Question</option>
	                				<option value="10">10 Question</option>
	                				<option value="25">25 Question</option>
	                				<option value="50">50 Question</option>
	                				<option value="100">100 Question</option>
	                				
	                			</select>
		     </div>
			 <div class="form-group">marks per right answer
		     <label for="marks_per_right_answer"></label>
			
			 <select name="marks_per_right_answer" id="marks_per_right_answer" name="marks_per_right_answer" placeholder="marks_per_right_answer" class="form-control">
	                				<option value="">Select</option>
	                				<option value="1">+1 Mark</option>
	                				<option value="2">+2 Mark</option>
	                				<option value="3">+3 Mark</option>
	                				<option value="4">+4 Mark</option>
	                				
	                			</select>
		     </div>
			 <div class="form-group">marks per wrong answer
		     <label for="marks_per_wrong_answer"></label>
			 <select name="marks_per_wrong_answer" id="marks_per_wrong_answer"  name="marks_per_wrong_answer"  placeholder="marks_per_wrong_answer" class="form-control">
	                				<option value="">Select</option>
	                				<option value="1">-1 Mark</option>
	                				
	                				<option value="2">-2 Mark</option>
	                			</select>
		     </div>
			 <div class="form-group">Exam created on
		     <label for="online_exam_created_on"></label>
			 <input type="date" class="form-control" id="online_exam_created_on" placeholder="online_exam_created_on" name="online_exam_created_on"required/>
			 
		     </div>
			 <div class="form-group">status
		     <label for="online_exam_status"></label>
			 <select name="online_exam_status" id="online_exam_status"  name="online_exam_status"  placeholder="online_exam_status" class="form-control">
	                				<option value="">Select</option>
	                				<option value="created">created</option>  
	                				<option value="StartExam">StartExam</option>
									<option value="ExamCompleted">ExamCompleted</option>
	                			</select>
		     </div>
			
</div>
<div class="container text-center">		  
	       <input type="submit" name="add" value="add"class="btn hub" />
		   <button class="bth hub"><a href="admindashboard.html">Close</a></button>
		   </div></form>
      
      
      
   </form>
        
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
