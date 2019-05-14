<?php

//print_r($GLOBALS);
require("LoginDB.php");

echo "<br>";
$count=0;
if(strlen($_REQUEST["name"])==0){
	echo "first name is mandatory";
	++$count;
}
echo "<br>";

if($_REQUEST["day"]=="day")
{
	echo "day field is empty";
	++$count;
}
echo "<br>";

if($_REQUEST["month"]=="month")
{
	echo "month field is empty";
	++$count;
}
echo "<br>";

if($_REQUEST["year"]=="year")
{
	echo "year field is empty";
	++$count;
}
echo "<br>";

if(isset($_REQUEST["gender"]))
	{

	}
else
{
	echo "gender field is empty";
	++$count;
}
echo "<br>";

if(strlen($_REQUEST["phone"])!=11)
{
	echo "phone number is not valid";
	++$count;
}

echo "<br>";
if(strlen($_REQUEST["EmailId"])==0)
{
	echo "Email Id is empty";
	++$count;
}
echo "<br>";
if(strlen($_REQUEST["uni"])==0){
	echo "university name is mandatory";
	++$count;
}
echo "<br>";
if(strlen($_REQUEST["enpassword"])<8)
{
	echo "password mustbe 8charcters";
	++$count;
}
echo "<br>";
if(strlen($_REQUEST["conpassword"])<8){
	echo "password mustbe 8 charcters";
	++$count;
}
echo "<br>";
if(strpos( $_REQUEST["EmailId"],"@")==0 || strpos($_REQUEST["EmailId"],".")< strpos($_REQUEST["EmailId"],"@"))
{
	echo "email is not valid";
	++$count;
}

echo "<br>";
if(($_REQUEST["enpassword"]) != ($_REQUEST["conpassword"]))
{
	echo "confirm password not matched";
	++$count;

}
if(($_REQUEST["cgpa"])>0 && ($_REQUEST["cgpa"])>0)
//echo $count;
echo "<br>";
	$conn = mysqli_connect("localhost", "root", "", "tutorpoint");
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	 $sql1= "select EmailId from teacherinfo";
	$a=getfromDB($sql1);
	 $S=0;
	foreach($a as $v)
    {
    if($v["EmailId"]==$_REQUEST["EmailId"])
    {

       	$count++;
       	$S=$S+1;
    }
   
    
     
	}
	 if($S!=0)
    {
    	       	echo "email has been used before try with another EmailId";

    }
	if($count==0){
	$sql="INSERT INTO teacherinfo VALUES ('','".$_REQUEST['name']."','".$_REQUEST["day"]."-".$_REQUEST["month"]."-".$_REQUEST["year"]."','".$_REQUEST['gender']."','".$_REQUEST['phone']."','".$_REQUEST['EmailId']."','".$_REQUEST['address']."','".$_REQUEST['uni']."','".$_REQUEST['cgpa']."','".$_REQUEST['enpassword']."',NOW(),0)";
	echo $sql;
	if(mysqli_query($conn, $sql)){
		header('Location: signupsuccess.html');
	}
}

?>
