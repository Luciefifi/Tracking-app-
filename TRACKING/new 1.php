  header ("location:services1.php");
       exit();
	   
	   
	   
	   
	   
	   	else{
	$rq = "SELECT*FROM login";
	$result = mysqli_query($connection,$rq);
	?>

	
	 "<table border="1">"
	    " <tr>"
		    <th>fname </th>
			<th>lname </th>
			<th>email</th>
			<th>PASSWORD</th>
		</tr>
		<?php 
	 while($rq = mysqli_fetch_array($result))
	 {
		 
   echo "<tr><td>".$rq['Fname']."</td><td>".$rq['Lname']."</td><td>".$rq['email']."</td><td>".$rq['PASSWORD']."</td></tr>";
	 }
  echo "</table>";

	 }
     
	 {
     

    }
    else
		 header("Location:service1.php");
    exit();
	
	
	
	
	<?php
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
include(CONNECTION.php);
UPDATE login
SET 
    lastname = $_POST[]
WHERE
    employeeID = 3;


?>