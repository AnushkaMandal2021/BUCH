<?php
include("E:\Gradprojct\htdocs\buch\header.php");
?>
<html>
<style type="text/css">

	body{
    margin: 0;
    padding: 0;
    background: url(forget.jpg);
    background-size: cover;
    background-position: center;
    font-family: helvatica;
}
.pwd-box{
    width: 320px;
    height: 450px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.pwd-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.pwd-box input{
    width: 100%;
    margin-bottom: 20px;
    font-family: helvatica;
}
.pwd-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    font-family: helvatica;
}
.pwd-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    font-family: helvatica;
}
.pwd-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
    font-family: helvatica;
}

.pwd-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.pwd-box a:hover
{
    color: #39dc79;
}
</style>
<head>
    <title> LOGIN PAGE </title>   
</head>
    <body>
    <div class="pwd-box">
        <img src="confused.png" class="avatar">
        <h1>RESET PASSWORD!!</h1>
            <form action = "forgetpwddb.php" method = "POST" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>Re-enter password</p>
            <input type="password" name="password2" placeholder="Re-enter Password">
            <input type="submit" name="submit" value="Reset">
            <a href="javascript:history.go(-1)">⮜ Back</a><br><br>
            <a href="http://localhost/buch/homepage/homepage.php">⮜ Homepage</a>  
            </form>
        
        
        </div>
    
    </body>
</html>