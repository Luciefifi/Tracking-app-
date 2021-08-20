
<?php
include("CONNECTION.php");
?>





	
	<?php
	   
	   $rqu = "SELECT * FROM users";
	   $result = mysqli_query($connection, $rqu);
	   ?>
	   <table border="1">
	     <tr>
		    <th>id </th>
			<th bg_color="green">fname </th>
			<th>mname</th>
            <th>lname</th>
            <th>dob</th>
            <th>email</th>
            <th>gender</th>
            <th>province</th>
            <th>district</th>
            <th>sector</th>
            <th>cell</th>
            <th>village</th>
			
			<th>password</th>
            <th>confirm</th>
			<th colspan="3">Action </th>
		</tr> 
	   <?php
	   while($r = mysqli_fetch_array($result)){
		   ?>
		   
		   <tr>
		   <td><?php echo $r['id'];?></td>
		   <td><?php echo $r['fname'];?></td>
		   <td><?php echo $r['mname'];?></td>
		   <td><?php echo $r['lname'];?></td>
		   <td><?php echo $r['dob'];?></td>
           <td><?php echo $r['email'];?></td>
           <td><?php echo $r['gender'];?></td>
           <td><?php echo $r['province'];?></td>
           <td><?php echo $r['district'];?></td>
           <td><?php echo $r['sector'];?></td>
           <td><?php echo $r['cell'];?></td>
           <td><?php echo $r['vilage'];?></td>
           <td><?php echo $r['password'];?></td>
           <td><?php echo $r['confirm'];?></td>

		   
		   <td><a href="userdetails.php?id=<?php echo $r['id'];?>"> More </a></td>
		   <td><a href="userupdate.php?id=<?php echo $r['id'];?>"> Update</a> </td>
		   <td><a href="deletuser.php?id=<?php echo $r['id'];?>"> Delete </a></td>
		   </tr>
	    <?php    
	   }
	   ?>
	  </table>
	  <?php

?>

