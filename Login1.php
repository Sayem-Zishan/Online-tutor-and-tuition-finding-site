<!-- 
<?php
require("LoginDB.php");
       session_start();
        if(isset($_SESSION["tId"]) ){
          header("location:TeacherProfile.php");
  }
  if(isset($_SESSION["pId"]) ){
          header("location:ParentProfile.php");
  }

?> -->



<html>
<head>
      <title> Login</title>
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
      <script type="text/javascript">
function validate(){
  var flag=true;
  m = document.getElementById("msg1");
  m.innerHTML="";
  document.fm.EmailId.style.border="";
    
    m1 = document.getElementById("msg2");
  m1.innerHTML="";
  document.fm.enpassword.style.border="";
    
    if (/^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(document.fm.EmailId.value)){
     flag=true;
     }
     else 
     
     {//document.fm.day.focus();
    m.style.color="red";
    //document.fm.phone.style.border="1px solid red";
    m.innerHTML="provide email id";
    flag=false;
    }
       if(document.fm.enpassword.value.length <8){
    m1.style.color="red";
    m1.innerHTML="password must be 8 charcters";
    flag=false;
  }
        return flag;
    }
    
    </script>

</head>
<body background="1.png"  >

<div class="topnav">
  <a  href="Main.html">Home</a>
  <a href="About.html">About</a>
  <a href="Find.php">Find Tuition</a>

  <a  href="Adminlogin.php">Admin</a>
  <a href="SignUp.html">Sign Up</a>
  <a class="active" href="Login1.php">Sign In</a>
    <a  href="ContactUs.html">Contact Us</a>
  

  


</div>
 
<p align="center"> <font size="20" color="#CB4335"> Please login </font> </p>
 <form align="center" action="Login.php" method="post" name="fm" id="fm"  >
 <table align="center" width="30%"  >
 <tr>
 <td>EmailId:</td>
 <td><input type="text" name="EmailId" id="EmailId"></td>
 </tr>
 <tr>
  <td></td>
  <td><span id="msg1"></span></td>
  </tr>
  <tr>
 <td>Password:</td>
 <td><input type="password" name="enpassword" id="enpassword"></td> 
 </tr>
 <tr>
  <td></td>
  <td><span id="msg2"></span></td>
  </tr>
 <tr>
 <td></td><td><div ><button class="button" onclick="return validate();" type="Submit" name="btn">Sign in</div></td>
 </tr>
 </body>
 </html>