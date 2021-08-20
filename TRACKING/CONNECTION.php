<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "TRACKINGAPP";
$connection= mysqli_connect($host,$user,$password,$db);
if(!$connection){
	echo "failed to connect";
}
else
{
	echo " connected successfully";
}
?>