
<?php
// include database connection file
include 'Db_conection.php';

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
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9">
				<h3 class="panel-title">View Exams List</h3>
			</div>
			
		</div>
	</div>
	
	<div class="card-body">
		<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      
   
		     
			 <div class="form-group">
		     <label for="exam_number">Exam Number</label>
			 <input type="number" class="form-control" id="exam_number" placeholder="enter your exam_number" name="exam_number"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     
		  
</div>
<div class="container text-center">		  
	       <input type="submit" name="submit" value="submit"class="btn hub" />
		   </div></form>
      
      
      
   </form>

<a href="question.php" class="btn btn-warning btn-sm" type ="button">Add new question for your existed exam??</a>
<a href="addexam.php" class="btn btn-warning btn-sm" type ="button">Add new exam??</a>
</div>
</div>
</div>
<?php


if(isset($_POST['submit'])){

   $exam_number = mysqli_real_escape_string($conn, $_POST['exam_number']);
   

   $select = mysqli_query($conn, "SELECT * FROM `online_exam_table` WHERE exam_number = '$exam_number'") or die('query failed');


   
   if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
			
   }else{
       echo "<script>alert(' incorrect exam number!')</script>"; 
   
         }

}

      
?>
<div class="card-body">
		<div class="table-responsive-md">
			<table id="online_exam_table" class="w-auto table table-bordered table-striped table-hover" >
				<thead>
					<tr>
					    <th>Id</th>
						<th>Exam Title</th>
						<th>Date & Time</th>
						<th>Duration</th>
						<th>Total Question</th>
						<th>Right Answer Mark</th>
						<th>Wrong Answer Mark</th>
						<th>Exam Created on</th>
						<th>Status</th>
						<th>Enroll</th>
						<th>Question</th>
						<th>Result</th>
						<th>Action</th>
				   </tr>
			    </thead>
				     
				<tbody>
				
				 <tr>
				 
				 
<!-- Display Records -->
    <tr>
	 <td><?php echo $fetch['online_exam_id']; ?></td>
      <td><?php echo $fetch['online_exam_title']; ?></td>
	  <td><?php echo $fetch['online_exam_datetime']; ?></td>
	  <td><?php echo $fetch['online_exam_duration']; ?></td>
	  <td><?php echo $fetch['total_question']; ?></td>
	  <td><?php echo $fetch['marks_per_right_answer']; ?></td>
	  <td><?php echo $fetch['marks_per_wrong_answer']; ?></td>
	  <td><?php echo $fetch['online_exam_created_on']; ?></td>   
      <td><?php echo $fetch['online_exam_status']; ?></td> 	  
	  <td><a href="status.php?online_exam_id=<?php echo $fetch['online_exam_id']; ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil">staus of exam</span></button></a></td>
	  <td><a href="question.php?id=<?php echo $fetch['online_exam_id']; ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil">add question</span></button></a><br><br>
	 	  <a href="viewquestion.php?question_id=<?php echo $fetch['online_exam_id']; ?>"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil">view question</span></button></a></td>

	 <td><a href="getresult.php?id=<?php echo $fetch['online_exam_id']; ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil">Result</span></button></a></td>
<td><a href="updateexam.php?online_exam_id=<?php echo $fetch['online_exam_id']; ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span>edit exam</button></a><br><br>
<a href="deleteexam.php?del=<?php echo $fetch['online_exam_id']; ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>

					
      </tr>
	  </tbody>
			</table>
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
</body></html>