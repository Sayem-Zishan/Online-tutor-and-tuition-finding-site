


<html>

<head>
      <title>Teachers sign up</title>
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
  padding: 14px 72px;
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

</style>
</head>
<body background="1.png" >

<?php
   require("LoginDB.php");
       session_start();
        if(isset($_SESSION["pId"])){
  }
else{
  header("location:Login1.php");
}
   $sql="select Name,Dob,Gender,Phone,EmailId,Address,University,Cgpa from teacherinfo where Id='".$_REQUEST["teId"]."'";
  $a=getfromDB($sql);
  
  foreach($a as $v) {?>
        <table align="center">
        <tr><td><b>Name:</b></td><td><b><?php echo $v["Name"];?></b></td></tr><br>
        <tr><td>Date of birth:</td><td><?php echo $v["Dob"];?></td></tr><br>
        <tr><td>Gender:</td><td><?php echo $v["Gender"];?></td></tr><br>
        <tr><td>Phone Number</td><td><?php echo $v["Phone"];?></td></tr><br>
        <tr><td>Email Id</td><td><?php echo $v["EmailId"];?></td></tr><br>
        <tr><td>Adress</td><td><?php echo $v["Address"];?></td></tr><br>
        <tr><td>University</td><td><?php echo $v["University"];?></td></tr><br>
        <tr><td>Cgpa</td><td><?php echo $v["Cgpa"];?></td></tr><br>
        
        </table>    
        <?php
  }             
?>   
 
<body/>


<html/>  