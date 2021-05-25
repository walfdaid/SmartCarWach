<?php
session_start();

include 'includes/config.php';

	$Error ='';


if(isset($_POST['Submit']))
{
	
	
$Username=$_POST['Username'];
$Password=$_POST['Password'];



$query = mysqli_query($dbConn,"SELECT * FROM stations WHERE (Username='$Username' AND Password='$Password') AND Status='Active'"); 
		

if (mysqli_num_rows($query)>0)
{

$row=mysqli_fetch_array($query);
$S_ID=$row['ID'];
$_SESSION['S_Log'] = $S_ID;


	  
echo '<script language="JavaScript">
            document.location="Stations/";
        </script>';
	
}
else
{

$Error = 'Sorry ! Check Your Access Information Or Your Status With Administrator !';


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
  <title>Smart Car Wash - Station Login</title>
  <link href="Administrator/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="Administrator/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="Administrator/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
				  <img src="Administrator/img/logo.png" width="40%" style="  border-radius: 5%;
"/><br><br>
                    <h1 class="h4 text-gray-900 mb-4">Stations Login</h1>
                  </div>
                  <form class="user" method="post" action="Station_Login.php">
                    <div class="form-group">
                      <input type="text" name="Username" class="form-control" placeholder="Username"                 >
                    </div>
                    <div class="form-group">
                      <input type="password" name="Password" class="form-control" placeholder="Password">
                    </div>
                   
                    <div class="form-group">
					
					
                <button type="submit" name="Submit" class="btn btn-primary btn-block">Login</button>
                <button type="reset" name="Reset" class="btn btn-danger btn-block">Clear</button>
			
				
				
				
				
                    </div>
                  
                   
                  </form>
                 
                  <div class="text-center">
				                         <center>Smart Car Wash © 2021. All Rights Reserved.</center>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="Administrator/vendor/jquery/jquery.min.js"></script>
  <script src="Administrator/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Administrator/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="Administrator/js/ruang-admin.min.js"></script>
</body>

</html>