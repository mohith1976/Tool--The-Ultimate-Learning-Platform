<?php
require_once'dbconfig.php';

// Get the userid
$online_exam_id=intval($_GET['online_exam_id']);
$sql = "SELECT * from online_exam_table   where online_exam_id=:online_exam_id";
//Prepare the query:
$query = $dbh->prepare($sql);
//Bind the parameters
$query->bindParam(':online_exam_id',$online_exam_id,PDO::PARAM_STR);
//Execute the query:
$query->execute();
//Assign the data which you pulled from the database (in the preceding step) to a variable.
$results=$query->fetchAll(PDO::FETCH_OBJ);
// For serial number initialization
$cnt=1;
if($query->rowCount() > 0)
{
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{
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
	<link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" 
        src="https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src=
"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    </script>
	<script type="text/javascript" src=
"https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js">
    </script>
    <link rel="stylesheet" href="css/style.css" />
	 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	

    <title>Tool-The ultimte online learning platform</title>
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
                <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
               Online Examntion System
              </div>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              
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
            <h4>Exam List</h4>
          </div>
        </div>
         <div class="container"><div class="col d-flex justify-content-center">

<br />
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      
     
      <div class="form-group">
		     <label for="online_exam_title">Exam Name</label>
			 <input type="text" class="form-control" id="online_exam_title" placeholder="online_exam_title" <?php echo htmlentities($result->online_exam_title);?> name="online_exam_title"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="online_exam_datetime">Date and Time of Exam</label>
			 <input type="datetime-local" class="form-control" id="online_exam_datetime" placeholder="online_exam_datetime" <?php echo htmlentities($result->online_exam_datetime);?> name="online_exam_datetime"required/>
			 
		     </div>
			 <div class="form-group">
		     <label for="online_exam_duration">Duration of exam</label>
			 
			    <select name="online_exam_duration" id="online_exam_duration"  name="online_exam_duration"  <?php echo htmlentities($result->online_exam_duration);?> placeholder="online_exam_duration" class="form-control">
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
			 
			 <select name="total_question" id="total_question"   name="total_question" placeholder="total_question" <?php echo htmlentities($result->total_question);?> class="form-control">
	                				<option value="">Select</option>
	                				<option value="5">5 Question</option>
	                				<option value="10">10 Question</option>
	                				<option value="25">25 Question</option>
	                				<option value="50">50 Question</option>
	                				<option value="100">100 Question</option>
	                				<option value="200">200 Question</option>
	                				<option value="300">300 Question</option>
	                			</select>
		     </div>
			 <div class="form-group">marks per right answer
		     <label for="marks_per_right_answer"></label>
			
			 <select name="marks_per_right_answer" id="marks_per_right_answer" name="marks_per_right_answer" placeholder="marks_per_right_answer" <?php echo htmlentities($result->marks_per_right_answer);?> class="form-control">
	                				<option value="">Select</option>
	                				<option value="1">+1 Mark</option>
	                				<option value="2">+2 Mark</option>
	                				<option value="3">+3 Mark</option>
	                				<option value="4">+4 Mark</option>
	                				<option value="5">+5 Mark</option>
	                			</select>
		     </div>
			 <div class="form-group">marks per wrong answer
		     <label for="marks_per_wrong_answer"></label>
			 <select name="marks_per_wrong_answer" id="marks_per_wrong_answer"  name="marks_per_wrong_answer"  placeholder="marks_per_wrong_answer" <?php echo htmlentities($result->marks_per_wrong_answer);?> class="form-control">
	                				<option value="">Select</option>
	                				<option value="1">-1 Mark</option>
	                				<option value="1.25">-1.25 Mark</option>
	                				<option value="1.50">-1.50 Mark</option>
	                				<option value="2">-2 Mark</option>
	                			</select>
		     </div>
			 <div class="form-group">Exam created on
		     <label for="online_exam_created_on"></label>
			 <input type="date" class="form-control" id="online_exam_created_on" placeholder="online_exam_created_on" <?php echo htmlentities($result->online_exam_created_on);?> name="online_exam_created_on"required/>
			 
		     </div></form>
			 
			
</div>
<?php }} ?>
<div class="container text-center">		  
	       <input type="submit" name="update" value="update"class="btn hub" />
		   
		   </div></form>


<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['update']))
{
// Get the userid
$online_exam_id=intval($_GET['online_exam_id']);
// Posted Values
   $online_exam_title=$_POST['online_exam_title'];
    $online_exam_datetime=$_POST['online_exam_datetime'];
	 $online_exam_duration=$_POST['online_exam_duration'];
	  $total_question=$_POST['total_question'];
	   $marks_per_right_answer=$_POST['marks_per_right_answer'];
	    $marks_per_wrong_answer=$_POST['marks_per_wrong_answer'];
		 $online_exam_created_on=$_POST['online_exam_created_on'];
   

// Query for Updation
$sql="update online_exam_table set online_exam_title=:ti,online_exam_datetime=:dt,online_exam_duration=:dur,total_question=:tq,marks_per_right_answer=:rn,marks_per_wrong_answer=:wrn,online_exam_created_on=:cre        where online_exam_id=:online_exam_id";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':ti',$online_exam_title,PDO::PARAM_STR);
$query->bindParam(':dt',$online_exam_datetime,PDO::PARAM_STR);
$query->bindParam(':dur',$online_exam_duration,PDO::PARAM_STR);
$query->bindParam(':tq',$total_question,PDO::PARAM_STR);
$query->bindParam(':rn',$marks_per_right_answer,PDO::PARAM_STR);
$query->bindParam(':wrn',$marks_per_wrong_answer,PDO::PARAM_STR);
$query->bindParam(':cre',$online_exam_created_on,PDO::PARAM_STR);
$query->bindParam(':online_exam_id',$online_exam_id,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='examlist.php'</script>";
}
?>
</main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
</body></html>