<?php
require_once'dbconfig.php';

// Get the userid
$questionno=intval($_GET['questionno']);
$sql = "SELECT * from question   where questionno=:questionno";
//Prepare the query:
$query = $dbh->prepare($sql);
//Bind the parameters
$query->bindParam(':questionno',$questionno,PDO::PARAM_STR);
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
            <h4>Edit Maths questions</h4>
          </div>
        </div>
         <div class="container"><div class="col d-flex justify-content-center">

<br />
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      
     <div class="form-group">
	          
		     <label for="exam_number">exam_number </label>
			 <input type="number" class="form-control" id="exam_number" placeholder="exam_number" name="exam_number"/>
			 
		     </div>
      <div class="form-group">
	          
		     <label for="question_title">Question </label>
			 <input type="text" class="form-control" id="question_title" placeholder="question_title" name="question_title"/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_1">option_1</label>
			 <input type="option_1" class="form-control" id="option_1" placeholder="option_1" name="option_1"/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_2">option_2</label>
			 <input type="option_2" class="form-control" id="option_2" placeholder="option_2" name="option_2"/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_3">option_3</label>
			 <input type="option_3" class="form-control" id="option_3" placeholder="option_3" name="option_3"/>
			 
		     </div>
			 <div class="form-group">
		     <label for="option_4">option_4</label>
			 <input type="option_4" class="form-control" id="option_4" placeholder="option_4" name="option_4"/>
			 
		     </div>
		     <div class="form-group">
		     <label for="answer_option">Answer option</label>
			 <input type="text" class="form-control" id="answer_option" placeholder="answer_option" name="answer_option"required/>
			 
		     </div>
		     </div>
			 
			 
			
</div>

		   
      
      
			 
			
</div>
<?php }} ?>
<div class="container text-center">		  
	       <input type="submit" name="update" value="update"class="btn hub" />
		   
		   </div></form>

<a href="viewquestion.php">Back</a></p>
<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['update']))
{
// Get the userid
$questionno=intval($_GET['questionno']);
// Posted Values
   $exam_number=$_POST['exam_number'];
    $question_title=$_POST['question_title'];
	 $option_1=$_POST['option_1'];
	  $option_2=$_POST['option_2'];
	   $option_3=$_POST['option_3'];
	    $option_4=$_POST['option_4'];
		 $answer_option=$_POST['answer_option'];
   

// Query for Updation
$sql="update question set exam_number=:ti,question_title=:dt,option_1=:dur,option_2=:tq,option_3=:rn,option_4=:wrn,answer_option=:cre        where questionno=:questionno";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':ti',$exam_number,PDO::PARAM_STR);
$query->bindParam(':dt',$question_title,PDO::PARAM_STR);
$query->bindParam(':dur',$option_1,PDO::PARAM_STR);
$query->bindParam(':tq',$option_2,PDO::PARAM_STR);
$query->bindParam(':rn',$option_3,PDO::PARAM_STR);
$query->bindParam(':wrn',$option_4,PDO::PARAM_STR);
$query->bindParam(':cre',$answer_option,PDO::PARAM_STR);
$query->bindParam(':questionno',$questionno,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='viewquestion.php'</script>";
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