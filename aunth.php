<?php
//print_r($GLOBALS);
$xml=simplexml_load_file("Admin.xml") or die("can not find");
//print_r($xml);
$flag=0;

foreach($xml->user as $u)
{
	if($_REQUEST["mail_id"]==$u->email && $_REQUEST["password"]==$u->pass)
	{echo "valid user name";
	$flag=1;	
	setcookie("email",$_REQUEST["mail_id"],time()+5000);
setcookie("pass",$_REQUEST["password"],time()+3000);
	header("location:home.php");
	echo "<br>";	
	}
}
if($flag==0)
{echo "invalid";
	header("location:Adminlogin.html");
}
?>