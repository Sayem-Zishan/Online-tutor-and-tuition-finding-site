<?php
require("LoginDB.php");
session_start();
        if(isset($_SESSION["pId"])){
  }
else{
  header("location:Login1.php");
}
//$sql1= "select  from teacherinfo";
$conn = mysqli_connect("localhost", "root", "", "tutorpoint");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1="select JobId,TeacherId,TeacherName from applyinfo ";
    $a=getfromDB($sql1);    
foreach($a as $v) {?>
        <table align="center">
        <tr><td><h2>Job Id:</h2></td><td><h2><?php echo $v["JobId"];?></h2></td><td>
        <tr><td>Teacher Id:</td><td><?php echo $v["TeacherId"];?></td></tr>
        <tr><td>Teacher Name:</td><td><a href="TProfile.php?teId=<?php echo $v['TeacherId'];?>"><?php echo $v["TeacherName"];?></a></td></tr>
        </table>    
        <?php
  }             
?> 

}
?>