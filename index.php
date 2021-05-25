<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="img/logo.png" rel="icon">
  <title>Smart Car Wash - Administrator Portal</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3" style="color:#000">Smart Car Wash</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-desktop"></i>
          <span>Home</span></a>
      </li>
      
	  
	  
	  
	  
	  
	  
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stations"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa fa-list"></i>
          <span>Stations</span>
        </a>
        <div id="Stations" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Add_New_Station.php">Add New Station</a>
            <a class="collapse-item" href="View_Stations_List.php">View Stations List</a>

          </div>
        </div>
      </li>
	  
	  
	  
	  
	  
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Users"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa fa-users"></i>
          <span>Users</span>
        </a>
        <div id="Users" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_Users_List.php">View Users List</a>

          </div>
        </div>
      </li>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
          
		  
		  
		  
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/user.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Administrator</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="Logout.php" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
		
		
		<br><br><br><br>
		
		
		

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
         

          <div class="row mb-3">



            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      
					  <br><br>
					  <center>
					  <h1> Administrator Portal</h1>
					  <br>
					  <br>
					  <img src="img/logo.png" width="20%" style="  border-radius: 5%;
"/></center>
					  <br><br><br>
					  
					  
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
			
			
			
			
			
			
			
			
			
          
		  
		  
          </div>
          <!--Row-->

         
          

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Smart Car Wash © 2021. All Rights Reserved.
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>