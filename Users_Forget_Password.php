<?php
session_start();
include 'includes/config.php';


	$Error ='';


if(isset($_POST['Submit']))
{
	

	
$Phone_Number = $_POST['Phone_Number'];



$sql = mysqli_query($dbConn,"select * from users where Phone_Number='$Phone_Number'");

if (mysqli_num_rows($sql)>0){

$row = mysqli_fetch_array($sql);
$S_ID = $row['ID'];

$Password = rand(1000,9999);
$New_Password = $Password;

$sql1 = mysqli_query($dbConn,"update users set Password='$New_Password' where ID='$S_ID'");







	 

	  $Error ='New Password Has Been Sent !';

	
	
}else{	  
	
	


	  $Error ='Error ... Please Check Phone Number !';
	
	


}
	

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
      
	  
	  
	    <li class="nav-item active">
        <a class="nav-link" href="Users_Signin_Signup.php">
          <i class="fa fa-user"></i>
          <span>Users Signin / Signup</span></a>
      </li>
      
	  
	  
	  
	  
	  <li class="nav-item ">
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
		  
		  		  	<font style="margin-left:45px; color:#fff"><center>Users Forget Password</center>  </font>

			
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
		
	<br><br>
		

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
         

          <div class="row mb-3">



            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      
					
					                     <form method="post" action="Users_Forget_Password.php" class="form-horizontal" enctype="multipart/form-data">

					 <div class="form-group"><label class="col-sm-2 control-label">Phone Number *</label>

                              <div class="col-sm-10"><input value="" type="text" pattern="[0-9]{10}" title="Phone Number Must Be 10 Numbers" name="Phone_Number" class="form-control" required>
												<br>

															<span style="font-size:12px">Phone Number Should Start With 079 Or 078 Or 077</span>
                                </div>
                                <div class="hr-line-dashed"></div>
								
							
								
								
								
						                          	<br><br>
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
							<center>	<button class="btn btn-primary" type="submit" name="Submit">Reset</button>

									<button class="btn btn-danger" type="reset" name="Reset">Cancel</button>
							</center>
                                    </div>
                                </div>
												<center><font style="color:black"><strong><?php echo $Error; ?></strong></font></center>

                            </form>
					
					
					
								<br><br><br><br><br>

					  
					  
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			
			
			
			
			<br><br><br>
			
			
			
			
			
			
			
			
			
			
			
		
			
			
			
			
			
			
			
			
			
          
		  
		  
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