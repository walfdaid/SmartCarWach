<?php
session_start();

include("../includes/config.php");

$A_ID = $_SESSION['A_Log'];

if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';







if(isset($_POST['Submit']))
{
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Phone_Number = $_POST['Phone_Number'];
$Longitude = $_POST['Longitude'];
$Latitude = $_POST['Latitude'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

 


 

$insert = mysqli_query($dbConn,"insert into stations (Name,Address,Phone_Number,Longitude,Latitude,Username,Password,Status) values ('$Name','$Address','$Phone_Number','$Longitude','$Latitude','$Username','$Password','Active')");



echo "<script language='JavaScript'>
			  alert ('New Station Has Been Added Successfully !');
      </script>";

	echo "<script language='JavaScript'>
document.location='View_Stations_List.php';
        </script>";

}



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




 <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOorkShHO1xhw2zbjz-OZdSKP-xQ65AS0"></script>
    <script src="locationpicker.jquery.min.js"></script>
	
	
	
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
      
	  
	  
	  
	  
	  
      <li class="nav-item active">
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Stations</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Stations</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
           
		   
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add New Station</h6>
                </div>
              
			  
			  
			  
			  
			  
			  
			  
                  
                     <form method="post" action="Add_New_Station.php" class="form-horizontal" enctype="multipart/form-data">
                                

                       

					   
								
								 <div class="form-group"><label class="col-sm-2 control-label">Name *</label>

                                    <div class="col-sm-10"><input value=""  type="text" name="Name" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								 <div class="form-group"><label class="col-sm-2 control-label">Address *</label>

                                    <div class="col-sm-10"><input value=""  type="text" name="Address" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
									
								 <div class="form-group"><label class="col-sm-2 control-label">Phone Number *</label>

                                    <div class="col-sm-10"><input value="" type="text" name="Phone_Number" pattern="[0-9]{10}" title="Phone Number Must Be 10 Numbers" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								
								 <div class="form-group"><label class="col-sm-2 control-label">Username *</label>

                                    <div class="col-sm-10"><input value=""  type="text" name="Username" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								
								
									
								 <div class="form-group"><label class="col-sm-2 control-label">Password *</label>

                                    <div class="col-sm-10"><input value=""  type="password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								            
	<div class="form-group"><label class="col-sm-2 control-label">Location *</label>
                <input type="hidden" name="Latitude" class="form-control" style="width: 110px" id="us3-lat" required />
                <input type="hidden" name="Longitude" class="form-control" style="width: 110px" id="us3-lon" required />

        <div id="us3" style="height: 300px;"></div>
                                </div>
                                <div class="hr-line-dashed"></div>  
          
                                
        <script>
            $('#us3').locationpicker({
                location: {
                    latitude: 31.954302,
                    longitude: 35.910514

				},
                radius: 300,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
        </script>
                   
                    

					
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
																		                                        <button class="btn btn-primary" type="submit" name="Submit">Add</button>

									<button class="btn btn-danger" type="reset" name="Reset">Clear</button>

                                    </div>
                                </div>
                            </form>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
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