<?php
   include("CONNECTION.php");
   $id = $_GET['id'];
   echo $query = "SELECT * FROM login WHERE id =".$id;
   
   $result = mysqli_query ($connection, $query);
   if(!$result){
	   echo "Error ".mysqli_error($connection);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "LOGIN ID: ".$row['ID']; echo "<br/>";
		   echo "LOGIN FName: ".$row['Fname']; echo "<br/>";
		   echo "LOGIN Lname: ".$row['Lname']; echo "<br/>";
		    echo "LOGIN EMAIL: ".$row['email']; echo "<br/>";
			
			 echo "LOGIN PASSWORD: ".$row['email']; echo "<br/>";
	   }
   }
?>