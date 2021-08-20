<?php

   
   
   
    include("CONNECTION.php");
   $id = $_GET['id'];
   echo $query = "SELECT * FROM login WHERE id =".$id;
   
   $result = mysqli_query ($connection, $query);
   if(!$result)
   {
	    echo "Failed";
  
   }
   if($d = mysqli_fetch_array($result)){
	   ?>
	   <form action="" method="post">
		  <input type="hidden" name ="id" value="<?php echo $d['ID'];?>" />
		  <br/>
      fname: <input type="text" name ="fname" value="<?php echo $d['Fname'];?>" />
		  <br/> 		  
			lname: <input type="text" name ="lname" value="<?php echo $d['Lname'];?>" />
		   <br/> 
		 email:  <input type="text" name ="email" value="<?php echo $d['email'];?>" />
		   
		password:   <input type="text" name="password" value=<?php echo $d['PASSWORD'];?> />
			
			<input type="submit" name="update" value="update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
		</form> 
	   
	   <?php  
	     if(isset($_POST['update'])){
			 $fname = $_POST['fname'];
			 $lname = $_POST['lname'];
			 $email = $_POST['email'];
			 $password = $_POST['password'];
			 
			 echo $w = "UPDATE login SET Fname='$fname', Lname='$lname', email='$email', PASSWORD='$password'
			 WHERE id=".$_POST['id'];
			 
			 $r = mysqli_query($connection,$w);  
			 if(!$r){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
		 } 
		 }
		 ?>
   
