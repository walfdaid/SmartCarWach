<?php
session_start();

$Service_ID=$_GET['Service_ID'];

require_once('../includes/config.php');

mysqli_query($dbConn,"delete from services where ID='$Service_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Service Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Services_List.php';
        </script>";

?>