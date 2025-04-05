<?php
// include database connection file
include 'Db_conection.php';

session_start();
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:adminlogin.php');
};

if(isset($_GET['logout'])){
   unset($admin_id);
   session_destroy();
   header('location:adminlogin.php');
}
$select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
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
      
      <div class="row mb-4">
        
          
             

              <div class="row">
           
               <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Mathematics Assignment</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-dark" aria-hidden="true"></i>
                Upload<span class="font-weight-bold">your assignment  </span>to your Sr.Students
              </p>
            </div>
			 
			 

	
	  
	  
   
			  
			 
            <div class="card-body p-3">
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="Subject" class="form-label"></label>
			 <input type="text" class="form-control" id="Subject"  value = "Mathematics" name="Subject"required/>
			 
		     </div>
			 <br>
			 <label for="pdfFile" class="form-label"><b>pdfFile:</b>
			 <div class="input-group input-group-outline my-3">
	          
		      
               <input type="file" class="form-control" name="pdfFile" accept=".pdf" required>
        
    
		     </div>
      </label>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="Upload_PDF11" value="Upload PDF"class="btn bg-gradient-dark w-100 my-4 mb-2" />
		   
		   </div></div>
      </form>
			 
			  
			   <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = "localhost";     
        $dbUser = "root";     
        $dbPassword = "";                 
        $dbName = "tool";    

        // Create a database connection
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
         if(isset($_POST['Upload_PDF11'])){
        $pdfFile = $_FILES["pdfFile"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];
        $college_number = $_POST['college_number'];
        $subject = $_POST['Subject'];
        // Store the PDF content in the database
        $sql = "INSERT INTO sr_assignment (file_name, file_content, file_size, file_type, college_number, subject) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType', '$college_number', '$subject')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>window.location.href='admindashboard.php'</script>";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close the database connection
       
    }
	}
    ?> 
			  
			  
			  
                </div>
              
          

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Physics Assignment</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-dark" aria-hidden="true"></i>
                 Upload<span class="font-weight-bold">your assignment  </span>to your Sr.Students
              </p>
            </div>
			
            <div class="card-body p-3">
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="Subject" class="form-label"></label>
			 <input type="text" class="form-control" id="Subject"  value = "Physics" name="Subject"required/>
			 
		     </div>
			 <br>
			 <label for="pdfFile" class="form-label"><b>pdfFile:</b>
			 <div class="input-group input-group-outline my-3">
	          
		      
               <input type="file" class="form-control" name="pdfFile" accept=".pdf" required>
        
    
		     </div>
      </label>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="Upload_PDF1" value="Upload PDF"class="btn bg-gradient-dark w-100 my-4 mb-2" />
		   
		   </div></div>
      </form>
			 
			   <?php 
			  
			  if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = "localhost";     
        $dbUser = "root";     
        $dbPassword = "";                 
        $dbName = "tool";    

        // Create a database connection
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            if(isset($_POST['Upload_PDF1'])){
        $pdfFile = $_FILES["pdfFile"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];
        $college_number = $_POST['college_number'];
        $subject = $_POST['Subject'];
        // Store the PDF content in the database
        $sql = "INSERT INTO srphy_assignment (file_name, file_content, file_size, file_type, college_number, subject) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType', '$college_number', '$subject')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>window.location.href='admindashboard.php'</script>";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close the database connection
       
    }
			  }
    ?> 
			  
			  
			  
			  
			  
                </div>
				<div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Chemistry Assignment</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-dark" aria-hidden="true"></i>
                Upload<span class="font-weight-bold">your assignment  </span>to your Sr.Students
              </p>
            </div>
			 
            <div class="card-body p-3">
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
			  
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="Subject" class="form-label"></label>
			 <input type="text" class="form-control" id="Subject"  value = "Chemistry" name="Subject"required/>
			 
		     </div>
			 <br>
			 <label for="pdfFile" class="form-label"><b>pdfFile:</b>
			 <div class="input-group input-group-outline my-3">
	          
		      
               <input type="file" class="form-control" name="pdfFile" accept=".pdf" required>
        
    
		     </div>
      </label>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="Upload_PDF" value="Upload PDF"class="btn bg-gradient-dark w-100 my-4 mb-2" />
		   
		   </div></div>
      </form>
			 
			   <?php 
			  
			  if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = "localhost";     
        $dbUser = "root";     
        $dbPassword = "";                 
        $dbName = "tool";    

        // Create a database connection
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
           if(isset($_POST['Upload_PDF'])){

        $pdfFile = $_FILES["pdfFile"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];
        $college_number = $_POST['college_number'];
        $subject = $_POST['Subject'];
        // Store the PDF content in the database
        $sql = "INSERT INTO srche_assignment (file_name, file_content, file_size, file_type, college_number, subject) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType', '$college_number', '$subject')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>window.location.href='admindashboard.php'</script>";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close the database connection
        
    }
			  }
    ?> 
			  
			  
			  
			  
                </div>
				
				
				
				
				
				
				
              </div>
            </div>
          </div>
        </div>

         
<div class="container-fluid py-4">

<div class="row mb-4">
        
          
           
              <div class="row">
           
               <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Mathematics Assignment</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-dark" aria-hidden="true"></i>
                Upload<span class="font-weight-bold">your assignment  </span>to your Jr.Students
              </p>
            </div>
			 
            <div class="card-body p-3">
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="Subject" class="form-label"></label>
			 <input type="text" class="form-control" id="Subject"  value = "Maths" name="Subject"required/>
			 
		     </div>
			 <br>
			 <label for="pdfFile" class="form-label"><b>pdfFile:</b>
			 <div class="input-group input-group-outline my-3">
	          
		      
               <input type="file" class="form-control" name="pdfFile" accept=".pdf" required>
        
    
		     </div>
      </label>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="Upload_PDF9" value="Upload PDF"class="btn bg-gradient-dark w-100 my-4 mb-2" />
		   
		   </div></div>
      </form>
			 
			   <?php 
			  
			  if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = "localhost";     
        $dbUser = "root";     
        $dbPassword = "";                 
        $dbName = "tool";    

        // Create a database connection
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
           if(isset($_POST['Upload_PDF9'])){

        $pdfFile = $_FILES["pdfFile"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];
        $college_number = $_POST['college_number'];
        $subject = $_POST['Subject'];
        // Store the PDF content in the database
        $sql = "INSERT INTO jr_assignment (file_name, file_content, file_size, file_type, college_number, subject) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType', '$college_number', '$subject')";
        if ($conn->query($sql) === TRUE) {
           echo "<script>window.location.href='admindashboard.php'</script>";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close the database connection
        
    }
			  }
    ?> 
			 
			  
			  
			  
			  
			  
                </div>
              
          

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Physics Assignment</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-dark" aria-hidden="true"></i>
                Upload<span class="font-weight-bold">your assignment  </span>to your Jr.Students
              </p>
            </div>
			 
            <div class="card-body p-3">
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
			  
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="Subject" class="form-label"></label>
			 <input type="text" class="form-control" id="Subject"  value = "Physics" name="Subject"required/>
			 
		     </div>
			 <br>
			 <label for="pdfFile" class="form-label"><b>pdfFile:</b>
			 <div class="input-group input-group-outline my-3">
	          
		      
               <input type="file" class="form-control" name="pdfFile" accept=".pdf" required>
        
    
		     </div>
      </label>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="Upload_PDF99" value="Upload PDF"class="btn bg-gradient-dark w-100 my-4 mb-2" />
		   
		   </div></div>
      </form>
			 
			   <?php 
			  
			  if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = "localhost";     
        $dbUser = "root";     
        $dbPassword = "";                 
        $dbName = "tool";    

        // Create a database connection
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
           if(isset($_POST['Upload_PDF99'])){

        $pdfFile = $_FILES["pdfFile"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];
        $college_number = $_POST['college_number'];
        $subject = $_POST['Subject'];
        // Store the PDF content in the database
        $sql = "INSERT INTO jrphy_assignment (file_name, file_content, file_size, file_type, college_number, subject) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType', '$college_number', '$subject')";
        if ($conn->query($sql) === TRUE) {
           echo "<script>window.location.href='admindashboard.php'</script>";
			
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close the database connection
        
    }
			  }
    ?> 
			 
			  
			  
			  
			  
			  
			  
			  
                </div>
				<div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Chemistry Assignment</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-dark" aria-hidden="true"></i>
                Upload<span class="font-weight-bold">your assignment  </span>to your Jr.Students
              </p>
            </div>
			
            <div class="card-body p-3">
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `principal` WHERE id = '$admin_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
			  
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="Subject" class="form-label"></label>
			 <input type="text" class="form-control" id="Subject"  value = "Chemistry" name="Subject"required/>
			 
		     </div>
			 <br>
			 <label for="pdfFile" class="form-label"><b>pdfFile:</b>
			 <div class="input-group input-group-outline my-3">
	          
		      
               <input type="file" class="form-control" name="pdfFile" accept=".pdf" required>
        
    
		     </div>
      </label>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="Upload_PDF999" value="Upload PDF"class="btn bg-gradient-dark w-100 my-4 mb-2" />
		   
		   </div></div>
      </form>
			 
			   <?php 
			  
			  if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dbHost = "localhost";     
        $dbUser = "root";     
        $dbPassword = "";                 
        $dbName = "tool";    

        // Create a database connection
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
           if(isset($_POST['Upload_PDF999'])){

        $pdfFile = $_FILES["pdfFile"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];
        $college_number = $_POST['college_number'];
        $subject = $_POST['Subject'];
        // Store the PDF content in the database
        $sql = "INSERT INTO jrche_assignment (file_name, file_content, file_size, file_type, college_number, subject) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType', '$college_number', '$subject')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>window.location.href='admindashboard.php'</script>";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
			  }
    ?> 
			 
			  
			  
			  
			  
			  
			  
                </div>
				
				
				
				
				
				
				
              </div>
            </div>
          </div>
        </div>

         















<div class="container-fluid py-4">
      
      <div class="row mb-4">
        
          <div class="card">
           
              <div class="row">
           
               
          
            <div class="card-header pb-0">
              <h5>Notice's from College Management</h5>
              <p class="text-sm">
                
               Click <span class="font-weight-bold">  "MARK READ" </span>after reading.Your prompt response appreciated. Thanks!
              </p>
            </div>
			 
			  
			  
           
            <div class="card-body ">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">college_number</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">admin_name</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">principal_name</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">reply</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mark Read</th>
                      
                      
                    </tr>
                  </thead>
                  <?php
                   $college_number = $fetch['college_number'];
				  $telect = mysqli_query($conn, "SELECT * FROM `principalreply` WHERE college_number = '$college_number'") or die('query failed');
				 
				 if(mysqli_num_rows($telect) > 0){
                 while( $tetch = mysqli_fetch_assoc($telect)) {
				 echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['id']. '</td>';
			      echo '<td>' .$tetch['college_number']. '</td>';
			      echo '<td>' .$tetch['admin_name']. '</td>';
			      echo '<td>' .$tetch['principal_name']. '</td>';
			      echo '<td>' .$tetch['reply']. '</td>';
			   
               
             
          
			  echo '<td><a href="deletereply.php?del=' .$tetch['id']. '"><button class=" btn  mb-0 text-white bg-gradient-dark shadow-dark btn-xs">Mark Read</button></a></td>';
			
			   
			  
			  
				 
				 }
                 }
   ?>
                     
                    </tr>
                    
                  </tbody>
                </table>
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