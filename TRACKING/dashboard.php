<?php
 include("CONNECTION.php");


?>
<html> 




<?php
$sql="SELECT* FROM service;";
?>
 
<table border=1 >
<tr><th>service_name </th>
<th colspan=3> action </th>
</tr>

<tr>
	<?php 
     
      
	  $result=mysqli_query($connection,$sql);
	  if(mysqli_num_rows($result)>0)
	  {
		  while($row=mysqli_fetch_assoc($result))
		  {
			  echo '<tr><td>'.$row['service_name'].'</td>';
			  echo '<td> <a href="dashdetails.php?sname='.$row['service_name'].'"> More </a></td>';
			  echo '<td><a href="dashboardupdate.php?sname='.$row['service_name'].'"> Update</a> </td>';
			  echo '<td><a href="dashboarddelete.php?sname='.$row['service_name'].'"> Delete </a></td></tr>';

		  }
	  }

    ?> 
	
 

</table> 



</body>
</html>