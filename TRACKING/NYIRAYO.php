<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport contet="width=device-width, initial-scale=1.0">
<title> login </title>
<link rel="stylesheet " href="NYIRAYO.CSS">
<script defer src="NYIRAYO.js"></script>
</head>

<body>
<main id="main-holder">
<h1 id="login-header"> login </h1>

<div id="login-error-msg-holder">
 <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
 </div>
 
 
 <form  method="POST" action="dashboard.php" id="login-form">
 <input type="text" name="username" id="username-field" class="login-form-field" placeholder="username">
 
 <input type="password" name="password" id="password-field" class="login-form-field" placeholder="password">
 <button type="submit" value="" id="login-form-submit">login </button>
 </form>
 <?php
 if(isset($_POST["submit"]))
 {
    header("location:dashboard.php");
    
 }
 ?>
 </main>
 </body>
 </html>