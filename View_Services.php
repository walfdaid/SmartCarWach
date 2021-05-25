<?php
session_start();

include("../includes/config.php");


$U_ID = $_SESSION['U_Log'];


if (!$_SESSION['U_Log'])
echo '<script language="JavaScript">
 document.location="../Users_Signin_Signup.php";
</script>';


$sql1 = mysqli_query($dbConn,"SELECT * FROM users where ID='$U_ID'"); 
$row1 = mysqli_fetch_array($sql1);

$Longitude=$row1['Longitude'];
$Latitude=$row1['Latitude'];




$S_ID = $_GET['S_ID'];





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../Administrator/img/logo.png" rel="icon">
  <title>Smart Car Wash - Users Account</title>
  <link href="../Administrator/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../Administrator/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../Administrator/css/ruang-admin.min.css" rel="stylesheet">
      <link href="../Administrator/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="../Administrator/img/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3" style="color:#000">Smart Car Wash</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-desktop"></i>
          <span>Home</span></a>
      </li>
      
	  
	  
	  
	  <li class="nav-item ">
        <a class="nav-link" href="My_Account.php">
          <i class="fa fa-user"></i>
          <span>My Account</span></a>
      </li>
      
	  
	  
	    
	  
	  
	  <li class="nav-item ">
        <a class="nav-link" href="Logout.php">
          <i class="fa fa-sign-out"></i>
          <span>Logout</span></a>
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
		  
		  
		  <font style="margin-left:105px; color:#fff"><center>Users</center>  </font>
		  
		  
		  
		  
          <ul class="navbar-nav ml-auto">
          
		  
		  
		  
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
             <a class="nav-link" href="Logout.php">
          <i class="fa fa-sign-out"></i>
          <span>Logout</span></a>
              
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
		
	
		

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
         

          <div class="row mb-3">



            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-12">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Station Services </h6>
                </div>
					  <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                
					
					
					
                    <tbody>
					
					
					
					 <?php
					$sql1 = mysqli_query($dbConn,"select * from services where Station_ID='$S_ID' order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$Title = $row1['Title'];
						$Description = $row1['Description'];
						$Price = $row1['Price'];
						

					?>
					
                      <tr>
                        <td><?php echo $Title; ?></td>
                          <td><?php echo $Description; ?></td>
                          <td><?php echo $Price; ?></td>
                          
                         
                        
                      </tr>
                  
				  
				  <?php
				}
					?>
				  
				  
				  
                    </tbody>
                  </table>
                </div>
					  
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

  <script src="../Administrator/vendor/jquery/jquery.min.js"></script>
  <script src="../Administrator/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Administrator/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../Administrator/js/ruang-admin.min.js"></script>
  <script src="../Administrator/vendor/chart.js/Chart.min.js"></script>
  <script src="../Administrator/js/demo/chart-area-demo.js"></script>  
    <script src="../Administrator/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../Administrator/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
  
  
</body>

</html>