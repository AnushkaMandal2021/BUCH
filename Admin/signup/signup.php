<?php
include("E:\Gradprojct\htdocs\buch\header.php");
?>
<html>
<head>
    <title> ADMIN SIGNUP PAGE </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="container">
    <img src="avatar.png" class="avatar">
        <h1>ADMIN SIGN UP</h1>
            <form action="signupdb.php" method="POST">
            <p>First Name</p>
            <input type="text" name="firstname" placeholder="Enter First Name">
            <p>Last Name</p>
            <input type="text" name="lastname" placeholder="Enter Last Name">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Sign up"> 
            <a href="http://localhost/buch/Admin/login/login.php">Already have an account ⮞</a><br><br>
            <a href="http://localhost/buch/Admin/homepage/homepage.php">⮜ Homepage</a>  
            </form>
        
        
        </div>
    
    </body>
</html>