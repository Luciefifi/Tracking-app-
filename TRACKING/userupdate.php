<?php

   
   
   
    include("CONNECTION.php");
   if(isset($_POST['id']))
   {
      $id=$_POST['id'];
   }
   else if($_GET['id'])
   {
    $id=$_GET['id'];
   }
   echo $query = "SELECT * FROM users WHERE id =".$id;
   
   $result = mysqli_query ($connection, $query);
   if(!$result)
   {
	    echo "Failed";
  
   }
   if($d = mysqli_fetch_array($result)){
	   ?>




<form  method="POST" action="userupdate.php" >
<fieldset>
<legend color= "green" ,font-size= "90px" ,font-family="" > personal info </legend> <br/>
<input type="hidden" name ="id" value="<?php echo $d['id'];?>" />
		 
FNAME: <input type="text" name="fname" value="<?php echo $d['fname'];?>"   size="50" width="10" height="5"/><br/><br/>

		  <br/> 		  
MIDDLE_NAME: <input type="text"  name="mname" value="<?php echo $d['mname'];?>" /><br/><br/>

LNAME : <input type="text"  name="lname" value="<?php echo $d['lname'];?>"   /><br/><br/>

EMAIL: <input type="email"  name="email" value="<?php echo $d['email'];?>"/><br/><br/>
<label>date__ofbirth:</lable>
 <input type="date"   name="dob" id="dob" value="<?php echo $d['dob'];?>" /><br/><br/>
<p><strong>  gender </strong></p>
 <input type="radio" id="female" name="gender" value="<?php echo $d['gender'];?>">
  <label for="female">female</label><br>
  <input type="radio" id="male" name="gender" value="<?php echo $d['gender'];?>">
  <label for="male">male</label><br>
<br> <br>

PROVINCE: <select name="province" id="province" value="<?php echo $d['province'];?>">
    <option>eastern</option>
    <option>western</option>
    <option>northern</option>
    <option>southern</option>
    <option> kigali</option>
</select><br/><br/>


DISTRICTS: <select name="district" id="district" value="<?php echo $d['district'];?>" >
    <option> Bugesera </option>

    <option> Kayonza </option>

    <option> Rwamagana </option>

    <option> Nyagatare </option>

    <option> Gatsibo </option>

    <option> Kirehe </option>
    
    <option> Ngoma </option>
    <option> Musanze </option>
    <option> Rulindo </option>
    <option> Burera </option>
    <option> Gakenke </option>
    <option> Gicumbi </option>
    <option> Kamonyi </option>
    <option> Muhanga </option>
    <option> Ruhango </option>
    <option> Nyanza </option>
    <option> Huye </option>
    <option> Gisagara </option>
    <option> Nyabihu </option>
    <option> Nyaruguru </option>
    <option> Nyamasheke </option>
    <option> rubavu </option>
    <option> Rutsiro </option>
    <option> Karongi </option>
    <option> Rusizi </option>
    <option> Kicukiro </option>
    <option> Nyarugenge </option>
    <option> Gasabo </option>
</select><br/><br/><br/>
SECTOR: <input type="text" name="sector" id="sector" value="<?php echo $d['sector'];?>">
<br/> <br/>
CELL:<input type="text"  name="cell" id="cell" value="<?php echo $d['cell'];?>"> 
<br> <br>
VILLAGE: <input type="text" name="village" id="village" value="<?php echo $d['vilage'];?>">

<br/> <br/>
 password:<input type="password"  name="pwd" placeholder="password"><br/><br/>
            confirm: <input type="password"  name="cfrm" placeholder="enter your password again to confirm" width="20" height="10"><br/><br/>
         
<?php
   }
?>
<?php  
	     if(isset($_POST['update']))
         {
			 $fname = $_POST['fname'];
			 $mname = $_POST['mname'];
             $lname = $_POST['lname'];
             $dob = $_POST['dob'];
             $email = $_POST['email'];
             $gender = $_POST['gender'];
             $province = $_POST['province'];
             $district = $_POST['district'];
             $sector= $_POST['sector'];
             $cell = $_POST['cell'];
             $village = $_POST['vilage'];
             $password = $_POST['password'];
             $confirm = $_POST['confirm'];
			 
			
			 
			 echo $w = "UPDATE users SET fname='$fname', mname='$mname', lname='$lname', dob='$dob', email='$email', province='$province', district='$district', sector='$sector', cell='$cell', village='$vilage', password='$password', confirm='$confirm', 
			 WHERE id=".$_POST['id'];
			 
			 $r = mysqli_query($connection,$w);  
			 if(!$r){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
             header("location:users.php?gender=$gender");
             exit();
		 } 
		 ?>
</fieldset>


    </div>
	<input type="submit" name="update" value="update"/>
	<input type="submit" name ="retrieve" value="Retrieve"/>
	</form>
   </body> 
</html>	   
	   
   
