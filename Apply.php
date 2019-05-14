<?php
require("LoginDB.php");
session_start();
        if(isset($_SESSION["tId"])){
  }
else{
  header("location:Login1.php");
}
//$sql1= "select  from teacherinfo";
$conn = mysqli_connect("localhost", "root", "", "tutorpoint");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql1="select Name from Teacherinfo where  Id='".$_SESSION['tId']."'";
	$a=getfromDB($sql1);	
foreach ($a as $v) {
	$sql="INSERT INTO applyinfo  VALUES ('','".$_REQUEST['jId']."','".$_SESSION['tId']."','".$v['Name']."',NOW(),0)";
if(mysqli_query($conn, $sql)){
		header('Location: ApplyShow.php');
}

}
?>