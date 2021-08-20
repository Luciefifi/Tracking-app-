<?php

   
   
   
    include("CONNECTION.php");
   $sname = $_GET['sname'];
   echo $query = "SELECT * FROM service WHERE service_name =".$sname;;
   
   $result = mysqli_query ($connection, $query);
   if(!$result)
   {
	    echo "Failed";
  
   }
   if($d = mysqli_fetch_array($result)){
	   ?>
	  <form method="POST"  action="dashboardupdate.php">

<label> SERVICE_NAME: </label>
<select name="sname"  value="<?php echo $d['service_name'];?>">
<option values="regular"> regular </option>
<option values="irregular"> irregular </option>
<option values="fertility"> fertility </option>
<option values="advice"> advice </option>
</select>
password: <input type="password" name="pwd"  value="<?php echo $d['password'];?>"placeholder="password"/><br/><br/>
<button type="submit" name="submit">submit </button>
		</form> 
	   
	   <?php  
	     if(isset($_POST['submit'])){
			 $sname = $_POST['sname'];
			 $password = $_POST['password'];
			 
			 echo $w = "UPDATE service SET service_name='$sname',password='$password'
			 WHERE service_name=".$_POST['sname'];
			 
			 $r = mysqli_query($connection,$w);  
			 if(!$r){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
		 } 
		 }
		 ?>
   
