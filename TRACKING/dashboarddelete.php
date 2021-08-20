<?php
  include("CONNECTION.php");

  $sname =$_GET['sname'];
  
  $query = "DELETE FROM service WHERE service_name='".$sname."'";
  //echo $query;
  
  mysqli_query($connection, $query);
  header("Location:dashboard.php");
  die();

?>