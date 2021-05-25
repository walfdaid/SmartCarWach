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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fa fa-desktop"></i>
          <span>Home</span></a>
      </li>
      
	  
	  
	  
	  
	  
      <li class="nav-item ">
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
	  
	  
	  
	  <li class="nav-item active">
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
           
		   
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View Users List</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Add Date / Time</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                
					
					
					
                    <tbody>
					
					
					
					 <?php
					$sql1 = mysqli_query($dbConn,"select * from users order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$U_ID = $row1['ID'];
						$Name = $row1['Name'];
						$Phone_Number = $row1['Phone_Number'];
						$Longitude = $row1['Longitude'];
						$Latitude = $row1['Latitude'];
						$Password = $row1['Password'];
						$Status = $row1['Status'];
						$Add_Date_Time = $row1['Add_Date_Time'];
						
				
				



					?>
					
                      <tr>
                        <td><?php echo $Name; ?></td>
                          <td><?php echo $Phone_Number; ?></td>
                          <td><?php echo $Longitude; ?></td>
                          <td><?php echo $Latitude; ?></td>
                          <td><?php echo $Password; ?></td>
                          <td><?php echo $Status; ?></td>
                          <td><?php echo $Add_Date_Time; ?></td>
                         
                        <td><center>
						
						
						
 <a href="Edit_User.php?U_ID=<?php echo $U_ID; ?>" style="width:52px" class="btn btn-warning btn-sm" role="button">Edit</a>
 <br><br>
 <a href="JavaScript:if(confirm('Are You Sure To Delete This User ?')==true)
{window.location='Delete_User.php?U_ID=<?php echo $U_ID; ?>';}" class="btn btn-danger btn-sm" role="button">Delete</a>





</center>

</td>
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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>