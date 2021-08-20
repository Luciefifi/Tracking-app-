<?php
  include("CONNECTION.php");
  $id=$_GET['id'];
  
  $query = "DELETE FROM users WHERE id=".$id;
  //echo $query;
  
  $r = mysqli_query($connection, $query);
  
  if($r){
	  echo "data deleted Delected";
  }else{
	  echo "  oops Something went wrong!  please try again";
  }

?>