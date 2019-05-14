<html>
<head>
      <title></title>
      <style>


body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: White;
  text-align: center;
  padding: 14px 62px;
  text-decoration: none;
  font-size: 19px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.button {
    background-color: #2E86C1;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;}
</style>
</head>
<body background="1.png"  >
  <div class="topnav">
  <a  href="Main.html">Home</a>
  <a  href="About.html">About</a>
  <a href="Find.php">Find Tuition</a>

  <a class="active" href="Adminlogin.html">Admin</a>
  <a  href="SignUp.html" >Sign Up</a>
  <a href="Login1.php">Sign In</a>
    <a  href="ContactUs.html">Contact Us</a>
</div>
<?php
if(isset($_COOKIE["pass"]))
  echo "Hello ";
else{
  //echo "Hello unknown<br>";
  header("location:Adminlogin.php");
}
?>
<form action="logout.php" method="post">
	<input type="submit" name="submit" value="Logout">
	</form>
 
<body/>


<html/>  
