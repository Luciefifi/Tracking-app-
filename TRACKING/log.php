
<?php
include("CONNECTION.php");
?>





<!DOCTYPE html>
<html>
    <head>
        <style>
          body  {
              background-color:white;
              margin: 20px;
              font-size: larger;
              font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
              font-variant: normal;
              color: brown;

            }
			input[type=text], input[type=password], input[type=email] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: #501080;
  font-size: 2rem;
			}


			button{
  opacity: 0.8;
  background-color:gray;
  width: 15%;
  height: 10%;
  color: #203090;
  font-size: 1.5rem;
			}
.footer
     {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 10%;
    background-color:black;
    color: white;
    text-align: center;
    padding: 10px 10px ;
    padding-bottom: 10px;
    
}
.topnav
    {
        overflow: hidden;
        background-color: black;
    }
.topnav a {
    float:left;
    color: #cddefa;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
.topnav a:hover{
    background-color: #ddd;
    color: black;
}
.topnav a.active{
    background-color: #04aa6d;
    color:white;
}
form{
    text-align: center;
}
        </style>
    </head>
<body>
    <div class="topnav">
        <a class="active" href="home.html"> home </a>
        <a href="log.php"> login</a>
        <a href="service1.php"> services </a>
        <a href="contact.html"> contacts </a>
        <a href ="about us.html"> about us </a>
        <a href="comment.html"> comments</a>
        <a href="logout.html"> logout </a>
        </div> </br> </br> </br>
		<?php
		$nameErr= "";
		$Fname= "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $FnameErr = "Name is required";
  } else {
    $Fname = test_input($_POST["fname"]);
  }
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Fname)) {
      $nameErr = "Only letters and white space allowed";
    }
		}
		
		function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
		}
       ?>
 <form method="post" action="log.php">
<h3><u><b> LOGIN PAGE </br></u></h3>
<lable> <br>Fname </lable> <input type="text" name="fname" placeholder="enter your first name"  /></br>
<lable> <br>Lname </lable> <input type="text" name="lname" placeholder="enter your last name" /></br>
<lable> <br>email</lable> <input type="email" name="email" placeholder="email@gmail.com"   /><br>
<lable> <br>password</lable> <input type="password" name="password" value=""   /><br><br/> <br/>
<button  type="submit" name="submit" > send </button>

<button type="submit"  name="retrieve" >retrieve  </button>

</form>
<?php 
 if(isset($_POST["submit"])){
	$Fname = $_POST['fname'];
	$Lname = $_POST['lname'];
	$email = $_POST['email'];
	$password =md5($_POST['password']);
	
	$query = "INSERT INTO login( fname, lname, email , password ) VALUES ( '$Fname', '$Lname', '$email', '$password')";


$q = mysqli_query($connection, $query);
 if(!$q)
 {
			echo "Failed ".mysqli_error($connection);
		}else{
			echo " your login in was a success";
		header("location:service1.php");
		exit();
		}
		
 }
 
 else
		
	
	{
	   
	   $rqu = "SELECT * FROM login";
	   $result = mysqli_query($connection, $rqu);
	   ?>
	   <table border="1">
	     <tr>
		    <th>ID </th>
			<th bg_color="green">fname </th>
			<th>lname</th>
			<th>email</th>
			<th>password</th>
			<th colspan="3">Action </th>
		</tr> 
	   <?php
	   while($r = mysqli_fetch_array($result)){
		   ?>
		   
		   <tr>
		   <td><?php echo $r['ID'];?></td>
		   <td><?php echo $r['Fname'];?></td>
		   <td><?php echo $r['Lname'];?></td>
		   <td><?php echo $r['email'];?></td>
		   <td><?php echo $r['PASSWORD'];?></td>
		   
		   <td><a href="logindetails.php?id=<?php echo $r['ID'];?>"> More </a></td>
		   <td><a href="loginUpdate.php?id=<?php echo $r['ID'];?>"> Update</a> </td>
		   <td><a href="loginDelete.php?id=<?php echo $r['ID'];?>"> Delete </a></td>
		   </tr>
	    <?php    
	   }
	   ?>
	  </table>
	  <?php
      } 
?>


<a  href="ACCOUNT.php."> don't have acount? signup </a>
<div class="footer">
    <p> your life is in your hand</p>
</div>
</body>
<script>
    alert("hello , you are welcome")
</script>
</html>