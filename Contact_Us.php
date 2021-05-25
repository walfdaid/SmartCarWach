<?php
session_start();
include 'includes/config.php';


if(isset($_POST['Submit']))
{
$Full_Name = $_POST['Full_Name'];
$Email_Address = $_POST['Email_Address'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];



$Email = 'info@smart-car-wash.com';

$Header = "From: Smart Car Wash - Contact Us Form | ".$Full_Name." - ".$Email_Address;
	
mail ($Email,$Subject,$Message,$Header);




echo "<script language='JavaScript'>
			  alert ('Your Message Has Been Sent !');
      </script>";

	echo "<script language='JavaScript'>
document.location='Contact_Us.php';
        </script>";


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="Administrator/img/logo.png" rel="icon">
  <title>Smart Car Wash</title>
  <link href="Administrator/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="Administrator/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="Administrator/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="Administrator/img/logo.png">
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
        <a class="nav-link" href="About_Us.php">
          <i class="fa fa-question-circle"></i>
          <span>About Us</span></a>
      </li>
      
	  
	  
	    <li class="nav-item ">
        <a class="nav-link" href="Users_Signin_Signup.php">
          <i class="fa fa-user"></i>
          <span>Users Signin / Signup</span></a>
      </li>
      
	  
	  
	  
	  <li class="nav-item active">
        <a class="nav-link" href="Contact_Us.php">
          <i class="fa fa-phone"></i>
          <span>Contact Us</span></a>
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
		  
		  		  	<font style="margin-left:95px; color:#fff"><center>Contact Us</center>  </font>

			
          <ul class="navbar-nav ml-auto">
          
		  
	
		  
          
            <div class="topbar-divider d-none d-sm-block">
			
		
			
			
			</div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="Administrator/img/logo2.png" style="max-width: 60px">
              </a>
              
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
                    <div class="col mr-2">
                      
					
					
					
					
						<form method="post" action="Contact_Us.php" class="form-horizontal" enctype="multipart/form-data">
                                
                                
                                
                               
                                
                                
                                  <div class="form-group"><label class="col-sm-2 control-label">Name *</label>

                                    <div class="col-sm-10"><input value="" type="text" name="Full_Name" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                
                                
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Email Address *</label>

                                    <div class="col-sm-10"><input value="" type="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" title="Your Email Should Be Like This Format: email@domain.com" name="Email_Address" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>   
                             
                                
                                
                               

                                
                                
                               

	<div class="form-group"><label class="col-sm-2 control-label">Subject *</label>

                                    <div class="col-sm-10"><input value="" type="text" name="Subject" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>  



                                
                                

	<div class="form-group"><label class="col-sm-2 control-label">Message *</label>

                                    <div class="col-sm-10"><textarea value="" type="text" name="Message" class="form-control" required></textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>  




                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit" name="Submit">Send</button>
									<button class="btn btn-danger" type="reset">Cancel</button>
                                    </div>
                                </div>
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

  <script src="Administrator/vendor/jquery/jquery.min.js"></script>
  <script src="Administrator/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Administrator/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="Administrator/js/ruang-admin.min.js"></script>
  <script src="Administrator/vendor/chart.js/Chart.min.js"></script>
  <script src="Administrator/js/demo/chart-area-demo.js"></script>  
</body>

</html>