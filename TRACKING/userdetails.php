<?php
   include("CONNECTION.php");
   $id = $_GET['id'];
   echo $query = "SELECT * FROM users WHERE id =".$id;
   
   $result = mysqli_query ($connection, $query);
   if(!$result){
	   echo "Error ".mysqli_error($connection);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "USER ID: ".$row['id']; echo "<br/>";
		   echo "FIRST NAME: ".$row['fname']; echo "<br/>";
		   echo "MIDDLE-NAME: ".$row['mname']; echo "<br/>";
		    echo "LAST NAME: ".$row['lname']; echo "<br/>";
            echo "DATE OF BIRTH: ".$row['dob']; echo "<br/>";
            echo "EMAIL :".$row['email']; echo "<br/>";
            echo "GENDER :".$row['gender']; echo "<br/>";
            echo "PROVINCE :".$row['province']; echo "<br/>";
            echo " DISTRICT:".$row['district']; echo "<br/>";
            echo "SECTOR :".$row['sector']; echo "<br/>";
            echo "CELL :".$row['cell']; echo "<br/>";
            echo "VILLAGE :".$row['vilage']; echo "<br/>";
            echo "PASSWORD: ".$row['password']; echo "<br/>";
            echo "CONFIRM : ".$row['confirm']; echo "<br/>";
			
			
	   }
   }
?>