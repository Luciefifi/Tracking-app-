<html>
<head>
<title>     </title>
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
    .footer
{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: blue;
    color: white;
    text-align: center;
}
</style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="home.html"> home </a>
        <a href="log.php"> LOGIN AS</a>
        <a href="service1.php"> services </a>
        <a href="contacts"> contacts </a>
        <a href ="about us"> about us </a>
        <a href="comment.php"> comments</a>
        <a href="logout.php"> logout </a>
        </div> </br> </br> </br>
<h1> thank you somuch </h1>
<table height="20%" width="10%">

<form method="post" action="home.html">
<input type="submit" value="logout"/>
</table>
</form>
<div class="footer">
    <p> your life is in you hand</p>
</div>
<?php

if(isset($_POST['submit'])){
header("location: home.html");

}

?>
</body>
</html>


