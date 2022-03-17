<?php
include("E:\Gradprojct\htdocs\buch\header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNT CREATED SUCCESSFULLY</title>

</head>
<style type="text/css">
	body{
    margin: 0;
    padding: 0;
    background: black;
    background-size: cover;
    background-position: center;
    font-family: Papyrus;
}
h1{
    margin: 0;
    padding: 0;
    text-align: center;
    font-size: 50px;
}
h2{
    margin: 0;
    padding: 0;
    text-align: center;
    font-size: 25px;
}
.box{
    width: 700px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.button {
  border-radius: 4px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 175px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left:220px
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<body>
<div class="box">
    	 <font color="yellow"><h1>WELL DONE!!</h1><br></font> 
         <h2>ACCOUNT CREATED SUCCESSFULLY </h2><br>
         <a href="http://localhost/buch/login/login.php"><button class="button"><span>LOGIN</button></span></a>
    </div> 	 
</body>
</html>