<?php
include("E:\Gradprojct\htdocs\buch\header.php");
?>
<html>
<head>
    <title> ADMIN LOGIN PAGE </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>ADMIN LOGIN</h1>
            <form action="logindb.php" method="POST" autocomplete="off">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="http://localhost/buch/Admin/login/adminemail.php">Forget Password?</a><br><br>
            <a href="http://localhost/buch/Admin/signup/signup.php">New User? Sign Up!</a>    
            </form>
        
        
        </div>
    
    </body>
</html>