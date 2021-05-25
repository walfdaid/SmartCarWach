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

$Phone_Number=$row1['Phone_Number'];
$Password=$row1['Password'];



	$Error ='';


if(isset($_POST['Submit']))
{
	
	
$U_ID=$_POST['U_ID'];
$Phone_Number=$_POST['Phone_Number'];
$Password=$_POST['Password'];



$query = mysqli_query($dbConn,"SELECT * FROM users WHERE Phone_Number='$Phone_Number' AND ID!='$U_ID'"); 

		

if (mysqli_num_rows($query)>0)
{

$Error = 'Sorry ... This Phone Number Is Already Used !';

	
}else
{




$update = mysqli_query($dbConn,"update users set Phone_Number='$Phone_Number', Password='$Password' where ID='$U_ID'");

$Error = 'Your Information Has Been Updated !';






}
}



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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fa fa-desktop"></i>
          <span>Home</span></a>
      </li>
      
	  
	  
	  
	  <li class="nav-item active">
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
		  
		  
		  		  <font style="margin-left:95px; color:#fff"><center>My Account</center>  </font>



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
                  <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
                </div>
					 
					 
					 
					 
					<form method="post" action="My_Account.php" class="form-horizontal" enctype="multipart/form-data">
                      
					  
					  <input type="hidden" name="U_ID" value="<?php echo $U_ID; ?>"/>
					  
								
								
	 <div class="form-group"><label class="col-sm-2 control-label">Phone Number *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Phone_Number; ?>" type="text" pattern="[0-9]{10}" title="Phone Number Must Be 10 Numbers" name="Phone_Number" class="form-control" required>
									
															<span style="font-size:12px">Phone Number Should Start With 079 Or 078 Or 077</span>

									
									</div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
						



				
						
						
								
							
								
								<div class="form-group"><label class="col-sm-2 control-label">Password *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Password; ?>" type="password" name="Password" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
							
								
								
								
								
								
						                           
                                
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
							<center>	<button class="btn btn-primary" type="submit" name="Submit">Update</button>

									<button class="btn btn-danger" type="reset" name="Reset">Cancel</button>
							</center>
                                    </div>
                                </div>
												<center><font style="color:black"><strong><?php echo $Error; ?></strong></font></center>

                            </form> 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					  
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