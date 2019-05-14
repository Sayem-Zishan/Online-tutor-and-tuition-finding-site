<?php

//print_r($GLOBALS);
require("LoginDB.php");
 session_start();
        if(isset($_SESSION["tId"])){
        	echo $_SESSION["tId"];
  }
else{
  header("location:Login1.php");
}

$conn = mysqli_connect("localhost", "root", "", "tutorpoint");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(strlen($_REQUEST["name"])!=0){
	$sql="UPDATE teacherinfo SET Name='".$_REQUEST['name']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');


	}
}
if(strlen($_REQUEST["Phone"])==11)
{
	$sql="UPDATE teacherinfo SET Phone='".$_REQUEST['Phone']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');
		//echo $count++;
	}
}
if(strlen($_REQUEST["EmailId"])!=0 || strpos($_REQUEST["EmailId"],".")> strpos($_REQUEST["EmailId"],"@"))
{
	$sql="UPDATE teacherinfo SET EmailId='".$_REQUEST['EmailId']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');
		//echo $count++;
	}
}
if(strlen($_REQUEST["enpassword"])>=8)
{
	$sql="UPDATE teacherinfo SET Password='".$_REQUEST['enpassword']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');
		//echo $count++;
	}
}

if(strlen($_REQUEST["address"])!=0)
{
	$sql="UPDATE teacherinfo SET Address='".$_REQUEST['address']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');
		//echo $count++;
	}
}
if(strlen($_REQUEST["uni"])!=0)
{
	$sql="UPDATE teacherinfo SET University='".$_REQUEST['uni']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');
		//echo $count++;
	}
}
if(strlen($_REQUEST["cgpa"])>0 && strlen($_REQUEST["cgpa"])<=4 )
{
	$sql="UPDATE teacherinfo SET Cgpa='".$_REQUEST['cgpa']."' WHERE Id='".$_SESSION['tId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update.php');
		//echo $count++;
	}
}


 else 
	header('Location: update.php');
 	echo "my error";


 ?>
