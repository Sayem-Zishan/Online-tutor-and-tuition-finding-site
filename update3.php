<?php

//print_r($GLOBALS);
require("LoginDB.php");
 session_start();
        if(isset($_SESSION["pId"])){
        	echo $_SESSION["pId"];
  }
else{
  header("location:Login1.php");
}

$conn = mysqli_connect("localhost", "root", "", "tutorpoint");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(strlen($_REQUEST["name"])!=0){
	$sql="UPDATE parentsinfo SET Name='".$_REQUEST['name']."' WHERE Id='".$_SESSION['pId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update2.php');


	}
}
if(strlen($_REQUEST["Phone"])==11)
{
	$sql="UPDATE parentsinfo SET Phone='".$_REQUEST['Phone']."' WHERE Id='".$_SESSION['pId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location:update2.php');
		//echo $count++;
	}
}
if(strlen($_REQUEST["EmailId"])!=0 || strpos($_REQUEST["EmailId"],".")> strpos($_REQUEST["EmailId"],"@"))
{
	$sql="UPDATE parentsinfo SET EmailId='".$_REQUEST['EmailId']."' WHERE Id='".$_SESSION['pId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update2.php');
		//echo $count++;
	}
}
if(strlen($_REQUEST["enpassword"])>=8)
{
	$sql="UPDATE parentsinfo SET Password='".$_REQUEST['enpassword']."' WHERE Id='".$_SESSION['pId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update2.php');
		//echo $count++;
	}
}

if(strlen($_REQUEST["address"])!=0)
{
	$sql="UPDATE parentsinfo SET Address='".$_REQUEST['address']."' WHERE Id='".$_SESSION['pId']."'";
	if(mysqli_query($conn, $sql)){
		header('Location: update2.php');
		//echo $count++;
	}
}



 else 
	header('Location: update2.php');
 	echo "my error";


 ?>
