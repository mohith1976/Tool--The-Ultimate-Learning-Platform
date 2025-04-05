<?php
// include database connection file
session_start();
?>
<?php
     include 'Db_conection.php';
	 
	 ?>

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
	 .pab{
     color:white;
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
	 </style>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
          href="userdashboard.html"
          >Tool's Student Dashboard</a
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
                <li><a class="dropdown-item" target="_parent" href="userhome.php">profile</a></li>
                <li><a class="dropdown-item" href="userlogin.php">logout</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav "
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-light">
          <ul class="navbar-nav">
             
            <li class="my-4"><hr class="dropdown-divider bg-dark" /></li>
            <li><a href="userviewexam.php" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Upcoming Exam</span>
                    </a></li>
            <li>
			<li class="my-4"><hr class="dropdown-divider bg-dark" /></li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
               Student Interface
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
                    <a href="doubts.html" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Doubts</span>
                    </a>
                  </li>
				  <li>
                    <a href="assignments.php" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Assignments</span>
                    </a>
                  </li>
				  <li>
                    <a href="pdf.php" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Study Materials</span>
                    </a>
                  </li> 
				  <li>
                    <a href="news.php" target="_parent" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Anouncements</span>
                    </a>
                  </li>
				  
                </ul>
              </div>
            </li>
            
            <li class="my-4"><hr class="dropdown-divider bg-dark" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Help?
              </div>
            </li>
            <li>
              <a href="index.html" class="nav-link px-3">
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
	
	
	
	
	<br><br>
	
	<br><br>
	<br>
	

<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Upcoming Exams...</h4>
          </div>
        </div>
		
		<?php
		$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tool");
		$mob=mysqli_query($link,"SELECT * FROM `online_exam_table` WHERE online_exam_status = 'StartExam'");
		while($mobi=mysqli_fetch_array($mob))
		{
			?>
			<input type="button" class="container hub form-control" value="<?php echo $mobi["exam_number"];?>" style="margin-top:10px;" onclick="set_exam_type_session(this.value);"> 
			<?php
		}
		?>
		
		
		
		
		<script type="text/javascript">
function set_exam_type_session(online_exam_table)
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			window.location="examdashboard.php";
		}
	};
	xmlhttp.open("GET","set_exam_type_session.php?online_exam_table="+ online_exam_table,true);
	xmlhttp.send(null);
	
}
</script>
		
		
         
      
   
		     
			 
		     

</div></div><br>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>