<?php
session_start();

$S_ID=$_GET['S_ID'];

require_once('../includes/config.php');

mysqli_query($dbConn,"delete from services where Station_ID='$N_ID'");
mysqli_query($dbConn,"delete from stations where ID='$S_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Station Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Stations_List.php';
        </script>";

?>