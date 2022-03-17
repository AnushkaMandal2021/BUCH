<?php
include("E:\Gradprojct\htdocs\buch\header.php");
?>
<html>
<head>
    <title> SIGNUP PAGE </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="container">
    <img src="avatar.jpg" class="avatar">
        <h1>SIGN UP</h1>
             <form action = "dbcon.php" method="GET">
            <p>First Name</p>
            <input type="text" name="firstname" placeholder="Enter First Name">
            <p>Last Name</p>
            <input type="text" name="lastname" placeholder="Enter Last Name">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Mobile</p>
            <input type="text" name="mobile" placeholder="Enter Mobile">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            
            <input type="submit" name="submit" value="Sign up">
            <a href="http://localhost/buch/login/login.php">Already have an account ⮞</a><br><br>
            <a href="http://localhost/buch/homepage/homepage.php">⮜ Homepage</a>  
            </form>
        
        
        </div>
    
    </body>
</html>    