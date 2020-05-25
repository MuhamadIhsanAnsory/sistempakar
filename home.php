<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SisKar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1167b1 url(images/bg1.jpeg) 50% 0% no-repeat ;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome to this website</h1>
  <p> <?php echo $_SESSION['username']; ?>!</p>
</div>

<div class="navbar">
  <a href="home.php" class="active">Home</a>
  <a href="help.php">Help</a>
  
  <a href="logout.php" class="right">Logout</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>aboutme me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <h3>Name</h3>
    <p>litle desc</p>
    
    
  </div>
  <div class="main">
    <h2>AHP</h2>
    <h5>sistem pakar dengan metode ahp</h5>
    <p><a href="ahp.php" class="w3-btn w3-block w3-black">coba</a></p>
    
   
    <br>
    <h2>Saw</h2>
    <h5>sistem pakar dengan metode saw</h5>
    <p><a href="saw.php" class="w3-btn w3-block w3-black">coba</a></p>

    <br>
    <h2>mfep</h2>
    <h5>sistem pakar dengan metode mfep</h5>
    <p><a href="mfep.php" class="w3-btn w3-block w3-black">coba</a></p>
    <br>
    <h2>Smart</h2>
    <h5>sistem pakar dengan metode smart</h5>
    <p><a href="smart.php" class="w3-btn w3-block w3-black">coba</a></p>
    <br>
    <h2>topsis</h2>
    <h5>sistem pakar dengan metode topsis</h5>
    <p><a href="topsis.php" class="w3-btn w3-block w3-black">coba</a></p>
     <h2>wp</h2>
    <h5>sistem pakar dengan metode wp</h5>
    <p><a href="wp.php" class="w3-btn w3-block w3-black">coba</a></p>
  </div>
</div>

<div class="footer">
  <h2>thanks for use this website, by @tksan_19</h2>
  <p>buy me a coffe for revision & updates</p>
</div>

</body>
</html>
