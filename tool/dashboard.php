<?php
// include database connection file
include 'Db_conection.php';

session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:principallogin.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:principallogin.php');
}
$select = mysqli_query($conn, "SELECT * FROM `request` WHERE id = '$user_id'") or die('query failed');
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
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
             @
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
             Principal 
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="adminregister.php">
              <i class="tim-icons icon-atom"></i>
              <p>Add Admin</p>
            </a>
          </li>
          <li>
            <a href="useradd1.php">
              <i class="tim-icons icon-atom"></i>
              <p>Add Student</p>
            </a>
          </li>
		  <li>
            <a href="examslist.php">
              <i class="tim-icons icon-align-center"></i>
              <p>Exam's List</p>
            </a>
          </li>
		  <li>
            <a href="user.php">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          
          
		  
          <li>
            <a href="Pricings.html">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Pricings</p>
            </a>
          </li>
          
          <li>
            <a href="rtl.html">
              <i class="tim-icons icon-world"></i>
              <p>Dev Support</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Tool's Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="user.php" class="nav-item dropdown-item">Profile</a></li>
                  
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="principallogin.php" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Total Exams</h5>
                    <h2 class="card-title">High scores</h2>
                  </div>
                  
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Manage Admins</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> ..</h3>
              </div>
			  
              <div class="card-body">
                <div class="chart-area">
				<div class="container text-center">
                  <?php
                   $select = mysqli_query($conn, "SELECT * FROM `request` WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 $college_number = $fetch['college_number'];
				 
				 $admin_query = "SELECT * FROM `principal` WHERE college_number = '$college_number'";
				 $admin_query_run = mysqli_query($conn, $admin_query);
				 
				 if($admin_total = mysqli_num_rows($admin_query_run))
				 {
				      echo '<h1 class="card-title display-1 text-primary">'.$admin_total.'</h1>';			 
				 }
				 else
				 {
				     echo '<h4 class="card-title text-primary ">No Data</h4>';	
				 }
   ?><br><br>
                     <button class="btn text-primary "><a href="manageadmin.php">Manage Admin</a></button>
                </div>
				</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Manage Jr.Students</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-info"></i>.. </h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
				<div class="container text-center">
                  <?php
                   $select = mysqli_query($conn, "SELECT * FROM `request` WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 $college_number = $fetch['college_number'];
				 
				 $user_query = "SELECT * FROM `user` WHERE college_number = '$college_number'";
				 $user_query_run = mysqli_query($conn, $user_query);
				 
				 if($user_total = mysqli_num_rows($user_query_run))
				 {
				      echo '<h1 class="card-title display-1 text-info">'.$user_total.'</h1>';			 
				 }
				 else
				 {
				     echo '<h4 class="card-title text-info ">No Data</h4>';	
				 }
   ?><br><br>
                     <button class="btn text-info "><a href="manageuser.php">  Manage Jr.students</a></button>
                </div>
				</div>
            </div>
          </div>
		  </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Manage Sr.Students</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> ..</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <div class="container text-center">
                  <?php
                   $select = mysqli_query($conn, "SELECT * FROM `request` WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 $college_number = $fetch['college_number'];
				 
				 $suser_query = "SELECT * FROM `sr_user` WHERE college_number = '$college_number'";
				 $suser_query_run = mysqli_query($conn, $suser_query);
				 
				 if($suser_total = mysqli_num_rows($suser_query_run))
				 {
				      echo '<h1 class="card-title display-1 text-success">'.$suser_total.'</h1>';			 
				 }
				 else
				 {
				     echo '<h4 class="card-title text-success ">No Data</h4>';	
				 }
   ?><br><br>
                     <button class="btn text-success "><a href="managesruser.php">  Manage Sr.students</a></button>
                </div>
				</div>
                </div>
              </div>
            
          </div>
        </div>
        
               <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h4 class="card-category">Notifications</h4>
                    <h6 class=" text-capitalize ps-3">Please click on Mark Read after reading your notifications!!</h6>
                  </div>
                  
                  
                </div>
              </div>
              <div class="card-body">
                 
				 <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              
                
              </div>
           
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">admin name</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">title</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mark Read</th>
                      
                      
                    </tr>
                  </thead>
                  <?php
                   $college_number = $fetch['college_number'];
				  $telect = mysqli_query($conn, "SELECT * FROM `adminmail` WHERE college_number = '$college_number'") or die('query failed');
				 
				 if(mysqli_num_rows($telect) > 0){
                 while( $tetch = mysqli_fetch_assoc($telect)) {
				 echo '<tbody>';
			   echo '<tr>';
			   echo '<td>' .$tetch['id']. '</td>';
			      echo '<td>' .$tetch['admin_name']. '</td>';
			      echo '<td>' .$tetch['title']. '</td>';
			      echo '<td>' .$tetch['Message']. '</td>';
			   
               
             
          echo '<td><button type="button" class="btn  mb-0 text-white bg-gradient-primary shadow-dark btn-xs" data-toggle="modal" data-target="#myModal">Reply</button></td>';

			  echo '<td><a href="deletemail.php?del=' .$tetch['id']. '"><button class=" btn  mb-0 text-white bg-gradient-primary shadow-dark btn-xs">Mark Read</button></a></td>';
			
			   
			  
			  
				 
				 }
                 }
   ?>
                     
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
				 
				 
				 <div class="modal fade" id="myModal">
    <div class="modal-dialog  modal-dialog-scrollable">
      <div class="modal-content bg-dark">
      
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <h4 class="modal-title text-primary" 
	  >Reply </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body bg-dark">
          

  <div class="card">
    <div class="card-body p-3 bg-dark">
  
       <?php 
			  include 'Db_conection.php';
			  if(isset($_POST['submit'])){
	
	
	  $college_number= mysqli_real_escape_string($conn, $_POST['college_number']);
	  $admin_name= mysqli_real_escape_string($conn, $_POST['admin_name']);
	  $principal_name= mysqli_real_escape_string($conn, $_POST['principal_name']);
      $reply= mysqli_real_escape_string($conn, $_POST['reply']);
       
  
   $check_message_query="select * from request WHERE college_number='$college_number'";  
    $run_query=mysqli_query($conn,$check_message_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
     $insert = mysqli_query($conn,"INSERT INTO `principalreply`( college_number, admin_name, principal_name, reply) VALUES( '$college_number','$admin_name','$principal_name', '$reply')") or die('query failed');

      echo "<script>alert('Reply sent')</script>";
	  echo ' <a href ="#"></a>';
	
exit();  
    }else{
             
             header('refresh:0.1;url=dashboard.php');
            
         }
          
			  }
			  
			  ?>
            
              <?php
                   $select = mysqli_query($conn, "SELECT * FROM `request` WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                 $fetch = mysqli_fetch_assoc($select);
                 }
				 ?>
				 
				 
			  <form action="" method="post" class="text-start" enctype="multipart/form-data">
      
     <div class="input-group input-group-outline my-3">
	          
		     <label for="college_number" class="form-label"></label>
			 <input type="number" class="form-control" id="college_number"  value = "<?php echo $fetch['college_number']; ?>" name="college_number"required/>
			 
		     </div>
			 <?php
                    $college_number = $fetch['college_number'];
				  $telect = mysqli_query($conn, "SELECT * FROM `adminmail` WHERE college_number = '$college_number'") or die('query failed');
				 
                if(mysqli_num_rows($telect) > 0){
                 $tetch = mysqli_fetch_assoc($telect);
                 }
				 ?>
			 <div class="input-group input-group-outline my-3">
	          
		     <label for="admin_name" class="form-label"></label>
			 <input type="text" class="form-control" id="admin_name"  value = "<?php echo $tetch['admin_name']; ?>" name="admin_name"required/>
			 
		     </div>
      <div class="input-group input-group-outline my-3">
		     <label for="principal_name" class="form-label"></label>
			 <input type="text-area" class="form-control" id="principal_name" value = "<?php echo $fetch['username']; ?>" name="principal_name"required/>
			 
		     </div>
			 <div class="input-group input-group-outline my-3">
		     <label for="reply" id="reply" class="form-label bg-gradient-primary">reply</label>
			 <textarea id="reply" name="reply" rows="9" cols="50">

</textarea>

		     </div>
			 
			 
			
</div>
<div class="container text-center">		  
	      <input type="submit" name="submit" value="submit"class="btn bg-dark w-100  " />
		   
		   </div></div>
      </form>
			 
  
</div>

        
        
        <!-- Modal footer -->
        <div class="modal-footer bg-dark">
          <button type="button" class="btn btn-lg btn-primary "  data-dismiss="modal">Close</button>
        </div>
        
      </div>
      </div>
    
  </div>
  
</div>
				 
				 
              </div>
            </div>
          </div>
        </div>  
      
	  
	  
	  
	  
	  
	  
	  
	  
	  
     </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        
        
        
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>