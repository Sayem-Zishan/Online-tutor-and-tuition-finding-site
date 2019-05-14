<?php

print_r($GLOBALS);
require("LoginDB.php");


echo "<br>";
$count=0;
if(strlen($_REQUEST["title"])==0){
	echo "title is mandatory";
	++$count;
}
echo "<br>";

if($_REQUEST["class"]=="class")
{
	echo "class is empty";
	++$count;
}
echo "<br>";


if($_REQUEST["daypweek"]=="Choose")
{
	echo "days per week must be selected";
	++$count;
}
echo "<br>";


if(isset($_REQUEST["sgender"]))
	{

	}
else
{
	echo " s gender field is empty";
	++$count;
}
echo "<br>";


if(strlen($_REQUEST["salary"])==0){
	echo "salary is mandatory";
	++$count;
}
echo "<br>";


if(isset($_REQUEST["pgender"]))
	{

	}
else
{
	echo " p gender field is empty";
	++$count;
}
echo "<br>";


if(strlen($_REQUEST["location"])==0){
	echo "location is mandatory";
	++$count;
}
echo "<br>";



if($_REQUEST["category"]=="category")
{
	echo "days per week must be selected";
	++$count;
}
echo "<br>";
	$conn = mysqli_connect("localhost", "root", "", "tutorpoint");
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	
	if($count==0){
	$sql="INSERT INTO jobinfo VALUES ('','".$_REQUEST['title']."','".$_REQUEST['class']."', '".$_REQUEST['sgender']."','".$_REQUEST['daypweek']."','".$_REQUEST['salary']."','".$_REQUEST['pgender']."','".$_REQUEST['location']."','".$_REQUEST['req']."', '".$_REQUEST['pgender']."',NOW(),0)";
	echo $sql;
	if(mysqli_query($conn, $sql)){
		echo " job posted successfully";
		header('Location:ParentProfile.php ');
	}
}

?> 