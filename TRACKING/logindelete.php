<?php
  include("CONNECTION.php");
  $ID=$_GET['id'];
  
  $query = "DELETE FROM login WHERE ID=".$ID;
  //echo $query;
  
  $r = mysqli_query($connection, $query);
  
  if($r){
	  echo "data deleted Delected";
  }else{
	  echo "  oops Something went wrong!  please try again";
  }

?>