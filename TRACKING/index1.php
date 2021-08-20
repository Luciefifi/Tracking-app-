<?php 

include("CONNECTION.php");

    $sname=$_POST['sname'];
    $pwd=$_POST['pwd'];

    if(!empty($sname) || !empty($pwd));
    
    {
        $pwdHashed=password_hash($pwd,PASSWORD_DEFAULT);
        $sql="INSERT INTO service(service_name,password) VALUES('$sname','$pwdHashed');";
        mysqli_query($connection,$sql);

        header("Location:services.html");
    exit();
    }
?>