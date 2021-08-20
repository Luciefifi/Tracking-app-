<!DOCTYPE html>

<?php

include("CONNECTION.php");


?>
<html>
<head>
    <style>
       form{
            margin: 0px 30px;
        }
        .form{
            border:solid ;
        }
    div.next
{
background-color: #ccffee
border-style :solid  
border-width :100%;
text-align :center
color :black
 margin-left: 20px; size : 16px ;
}
.footer
{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:black;
    color: white;
    text-align: center;
}
body{
    background-color:whitesmoke;
    margin: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight:100;
    font-size: large;
    color: black;
}
.topnav
    {
        overflow: hidden;
        background-color: gray;
    }
.topnav a {
    float:left;
    color: #cddefa;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.dropdown {
  float: left;
  overflow: hidden;
  }
  
  .dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
 {
    background-color: #ddd;
    color: gray;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  }
  
  
  .dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.topnav a.active{
    background-color: #04aa6d;
    color:white;
}
    </style>

<title> creating an acount</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="#home"> home </a>
    <a href="logout.php"> logout</a>
    <a href="service1.php"> services </a>
    <a href="contact.html"> contacts </a>
    <a href ="about us.html"> about us </a>
    <a href="comment.php"> comments</a>
    <div class="dropdown">
    <button class="dropbtn"> LOGIN AS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="log.php"> user </a>
      <a href="NYIRAYO.html">admin</a>
	  </div
    </div> </br> </br> </br>
    </div> </br> </br> </br>
    <div class="form" border="5"> 
        <img src="girl jaws.jpg" align=" top left" width="30%" heigh="40%"/>
	
		 <form  method="POST" action="ACCOUNT.php" >
<fieldset>
<legend color= "green" ,font-size= "90px" ,font-family="" > personal info </legend>
FNAME: <input type="text" name="fname" value=""placeholder="please enter your first name" required  size="50" width="10" height="5"/><br/><br/>

MIDDLE_NAME: <input type="text"  name="mname" placeholder="enter your middle name"/><br/><br/>

LNAME : <input type="text" placeholder="enter your last name" name="lname"  required /><br/><br/>

EMAIL: <input type="email"  name="email" placeholder="email@gmail.com" required /><br/><br/>
<label>date__ofbirth:</lable>
 <input type="date" placeholder=""  name="dob" id="dob" required /><br/><br/>
<p><strong>  gender </strong></p>
 <input type="radio" id="female" name="gender" value="female">
  <label for="female">female</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">male</label><br>
<br> <br>

PROVINCE: <select name="province" id="province">
    <option>eastern</option>
    <option>western</option>
    <option>northern</option>
    <option>southern</option>
    <option> kigali</option>
</select><br/><br/>


DISTRICTS: <select name="district" id="district" >
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
SECTOR: <input type="text" name="sector" id="sector">
<br/> <br/>
CELL:<input type="text"  name="cell" id="cell"> 
<br> <br>
VILLAGE: <input type="text" name="village" id="village">

<br/> <br/>
 password:<input type="password"  name="pwd" placeholder="password"><br/><br/>
            confirm: <input type="password"  name="cfrm" placeholder="enter your password again to confirm" width="20" height="10"><br/><br/>
            <button type="submit" name="submit" > submit </button>

</fieldset>


    </div>
  
       
           
        </form>
		<?php
    if(isset($_POST['submit']))
    {
      $FNAME = $_POST['fname'];
      $MIDDLE_NAME = $_POST['mname'];
      $lname = $_POST['lname'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $province = $_POST['province'];
      $district = $_POST['district'];
      $sector = $_POST['sector'];
      $cell = $_POST['cell'];
      $village = $_POST['village'];
      $password = md5( $_POST['pwd']);
      $confirm = md5($_POST['cfrm']);
      
        if(!empty($FNAME) ||  !empty($mname) ||!empty($lname) || !empty($dob) || !empty($email) || !empty($gender) || !empty($province) || !empty($district) || !empty($sector) || !empty($cell) || !empty($village) || !empty($password) || !empty($confirm));
     
     {
         
     $query = "INSERT INTO users(fname, mname, Lname, dob, email, gender, province, district, sector, cell, vilage, confirm) VALUES('$FNAME','$MIDDLE_NAME','$lname','$dob','$email','$gender','$province','$district','$sector','$cell','$village','$confirm');";
      
      $sql = mysqli_query($connection,$query);
      if(!$sql)
      {
        echo "failed to connect".mysqli_error($connection);
      }
      else
      {
        echo " conguratulations!! your acount has been already created";
        
        header("Location:log.php");
        exit();
      }
 
         
     
     }
    }
		 
	
		?>
	
		
		
    
    </body>
    </html>