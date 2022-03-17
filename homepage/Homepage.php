<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body, html {
  height: 100%;
  font-family: 'Roboto', sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("image.jpg");
  min-height: 93%;
}
.banner{
width:720px;
height: 100px;
margin:7px auto;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-moz-border-radius: 15px;
-webkit-border-radius: 15px;
padding-left:190px;
}
.banner0{
background: #656964 url(banner1.jpg) no-repeat center left;
}
</style>
<body>


<div>
  <div class="banner banner0"></div>
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="http://localhost/buch/signup/Signup.php" class="w3-button w3-block w3-black">SIGN UP</a>
    </div>
    <div class="w3-col s3">
      <a href="http://localhost/buch/login/login.php" class="w3-button w3-block w3-black">LOGIN</a>
    </div>
    <div class="w3-col s3">
      <a href="http://localhost/buch/Aboutus/aboutus.php" class="w3-button w3-block w3-black">ABOUT US</a>
    </div>
    <div class="w3-col s3">
      <a href="http://localhost/buch/contactus/contact.php" class="w3-button w3-block w3-black">CONTACT US</a>
    </div>
  </div>
</div>
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">BUCH<br></span>
    <span class="w3-text-white" style="font-size:30px">Where the bookstore comes to you.<br></span>

  </div>

</header>

</body>

<script>
 var slideIndex = 1;
 showDivs(slideIndex);
 function plusDivs(n) {
 showDivs(slideIndex += n);
  }
 function showDivs(n) {
 var i;
 var x = document.getElementsByClassName("mySlides");
 if (n > x.length) {slideIndex = 1} if (n < 1) {slideIndex = x.length}for
 (i = 0; i < x.length; i++) {x[i].style.display = "none";}
 x[slideIndex-1].style.display = "block"; }
</script>

</html>
