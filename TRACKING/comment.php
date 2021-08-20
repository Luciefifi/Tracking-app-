<?php
 include("CONNECTION.php")


?>


<html>

<head>
<title>        </title>
<style>
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
    body{
        background-color: cornflowerblue;
        margin: 30px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: bolder;
        font-size: larger;
    }
    .footer
{
    position: relative;
    padding-bottom: 10%;
    left: 0;
    right: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
    height: 20%;
}
</style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="home.html"> home </a>
        <a href="log.php"> login</a>
        <a href="service1.php"> services </a>
        <a href="contacts"> contacts </a>
        <a href ="about us"> about us </a>
        <a href="comment.html"> comments</a>
        <a href="logout.html"> logout </a>
        </div> </br> </br> </br>
<form method="POST" action="comment.php">
<h1 style=" margin-left= 30px;margin-righ40px ; text-align :centre" > leave your comment or suggestion here please </h1> </br>
fname: <input type="text" name="fname" /> <br/> <br/>
lname: <input type="text" name="lname"/> <br/><br/>
password: <input type="password" name="password" /><br/><br/>
<textarea rows="10" cols="100" name ="comment"> </textarea>
<input type="submit" name="submit" value="submit"><br>
<a href="logout.html" >logout </a>
</form>
<div class="footer">
    <p style="bottom: 0px;"> your life is in your hand</p>
</div>
<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO comment(fname,lnam,password,comment) VALUES(' $fname','$lname',' $password','$comment')";

    $q = mysqli_query($connection, $query);
    if(!$q){
               echo "Failed ".mysqli_error($connection);
           }else{
               echo " great!!!  , thank you for giving us your commnt";
           header("location:comment.php");


}

}
?>
</body>
</html>