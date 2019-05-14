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
<script>
    function showHint() {
        var  xmlhttp = new XMLHttpRequest();
        var str=document.getElementById('mytext').value;

        //document.getElementById("spinner").style.visibility= "visible";
        xmlhttp.onreadystatechange = function() {
            //alert(xmlhttp.rxmlhttpeadyState);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("spinner").style.visibility= "hidden";
                var m=document.getElementById("txtHint");


                m.innerHTML=xmlhttp.responseText;
            }
        };
        //var url="data.php?pname="+str;
        //alert(url);
        //xmlhttp.open("GET", url,true);
        //xmlhttp.send();
        var url="data.php"
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("pname="+str);

    }
    </script>
</head>
<body background="1.png"  >
  



<div class="topnav">
  <a  href="Main.html">Home</a>
  <a  href="About.html">About</a>
  <a class="active" href="Find.php">Find Tuition</a>

  <a href="Adminlogin.php">Admin</a>
  <a  href="SignUp.html" >Sign Up</a>
  <a href="Login1.php">Sign In</a>
    <a  href="ContactUs.html">Contact Us</a>
</div>  
</div>
<div class="search">
    <div>
      <br>
      <br>
      <span>Search</span> : <input type="text" name="text" onkeyup="showHint()" id="mytext" >

      <p id="txtHint"></p>
    </div>
</div>


<?php
   require("LoginDB.php");
//       session_start();
//         if(isset($_SESSION["tId"])){
// 	}
// else{
// 	header("location:Login.html");
// }
    $sql="select Id,Title,Class,StudentGender,DayPerWeek,Salary,PreGender,Location,OtherReq,Category,Time from jobinfo ";
	$a=getfromDB($sql);
	
	foreach($a as $v) {?>
    <form  >
	      <table align="center">
        <tr><td><h2>Job Id:</h2></td><td><h2><?php echo $v["Id"];?></h2></td> <td><a href="Apply.php?jId=<?php echo $v['Id'];?>">Apply </a> <td></tr>
        <tr><td>Title:</td><td><?php echo $v["Title"];?></td></tr>
        <tr><td>Student's Class:</td><td><?php echo $v["Class"];?></td></tr>
        <tr><td>Student Gender:</td><td><?php echo $v["StudentGender"];?></td></tr>
        <tr><td>Day Per Week:</td><td><?php echo $v["DayPerWeek"];?></td></tr>
        <tr><td>Salary:</td><td><?php echo $v["Salary"];?></td></tr>
        <tr><td>Location:</td><td><?php echo $v["Location"];?></td></tr>
        <tr><td>Subject:</td><td><?php echo $v["OtherReq"];?></td></tr>
        <tr><td>Category:</td><td><?php echo $v["Category"];?></td></tr>
        <tr><td>Upload time:</td><td><?php echo $v["Time"];?></td></tr><br>


        </table>    
    </form>
        <?php
	}             
?>       
    </body>    
</html>	           
               
