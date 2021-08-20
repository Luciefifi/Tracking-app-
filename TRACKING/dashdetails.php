<?php
   include("CONNECTION.php");
   $SERVICE_NAME = $_GET['sname'];
   $query = "SELECT * FROM service WHERE service_name =".$SERVICE_NAME;
   
   $result = mysqli_query ($connection, $query);
   if(!$result){
	   echo "Error ".mysqli_error($connection);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "service_name: ".$row['sname']; echo "<br/>";
		  
		  
	   }
   }
?>