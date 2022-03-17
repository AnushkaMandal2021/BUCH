<!DOCTYPE html>
<html>
<title>Admin Home Page</title>
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
  min-height: 100%;
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="http://localhost/buch/Admin/signup/signup.php" class="w3-button w3-block w3-black">Sign Up</a>
    </div>
    <div class="w3-col s3">
      <a href="http://localhost/buch/Admin/login/login.php" class="w3-button w3-block w3-black">Login</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">BUCH<br>ADMINISTRATION<br></span>
  </div>
</header>

</body>
</html>
