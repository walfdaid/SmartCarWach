<?php
session_start();

include("../includes/config.php");


$S_ID = $_SESSION['S_Log'];


if (!$_SESSION['S_Log'])
echo '<script language="JavaScript">
 document.location="../Station_Login.php";
</script>';




$Service_ID = $_GET['Service_ID'];




$sql1 = mysqli_query($dbConn,"select * from services where ID='$Service_ID'");
$row1 = mysqli_fetch_array($sql1);


$Title = $row1['Title'];
$Description = $row1['Description'];
$Price = $row1['Price'];





if(isset($_POST['Submit']))
{
$Service_ID = $_POST['Service_ID'];



$Title = $_POST['Title'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];


 

$sql1 = mysqli_query($dbConn,"update services set Title='$Title', Description='$Description', Price='$Price' where ID='$Service_ID'");

echo "<script language='JavaScript'>
			  alert ('Service Information Has Been Updated !');
      </script>";

	echo "<script language='JavaScript'>
document.location='View_Services_List.php';
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
  <title>Smart Car Wash - Station Portal</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-desktop"></i>
          <span>Home</span></a>
      </li>
      
	  
	  
	  
	  
	
	  
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Parents"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa fa-list"></i>
          <span>Services</span>
        </a>
        <div id="Parents" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Add_New_Service.php">Add New Service</a>
            <a class="collapse-item" href="View_Services_List.php">View Service List</a>

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
                <span class="ml-2 d-none d-lg-inline text-white small">Station</span>
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
            <h1 class="h3 mb-0 text-gray-800">Services</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
           
		   
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Service Information</h6>
                </div>
              
			  
			  
			  
			  
			  
			  
			  
                  
                     <form method="post" action="Edit_Service.php?Service_ID=<?php echo $Service_ID; ?>" class="form-horizontal" enctype="multipart/form-data">
                                

                       <input type="hidden" name="Service_ID" value="<?php echo $Service_ID; ?>"/>

					   
								
								 <div class="form-group"><label class="col-sm-2 control-label">Title *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Title; ?>"  type="text" name="Title" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								 <div class="form-group"><label class="col-sm-2 control-label">Description *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Description; ?>"  type="text" name="Description" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
									
								
								
								
								
								 <div class="form-group"><label class="col-sm-2 control-label">Price *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Price; ?>"  type="number" min="0" step="any" name="Price" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								
								
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
																		                                        <button class="btn btn-primary" type="submit" name="Submit">Edit</button>

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