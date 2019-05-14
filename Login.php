<?php
require("LoginDB.php");
$email=0;
$pass=0;
if(strlen($_REQUEST["EmailId"])==0){
    echo "name is mandatory";
}
else{
    $email=1;
}
if(strlen($_REQUEST["enpassword"])==0){
    echo "password field is empty";
}
else{
    $pass=1;
}
session_start();
if($email==1 && $pass==1 )
{
    $sql="select Id,Password from parentsinfo where EmailId='".$_REQUEST['EmailId']."'and Status=0 ";
    $sql1= "select Id,Password from teacherinfo where EmailId='".$_REQUEST['EmailId']."'and Status=0" ;
    $a=getfromDB($sql);
    $a1=getfromDB($sql1);

    foreach($a as $v)
    {
    if($v["Password"]==$_REQUEST["enpassword"])
    {
        $_SESSION["pId"]=$v["Id"];
    header("location:ParentProfile.php"); 
    }
    else
    {
        header("location:Login1.php");
    }
    }    
    foreach($a1 as $v1)
    {
    if($v1["Password"]==$_REQUEST["enpassword"])
    {
        $_SESSION["tId"]=$v1["Id"];
    header("location:TeacherProfile.php"); 
    }
    else
    {
        header("location:Login1.php");
    }
    }
}
        
else{
        header("location:Login1.php");
    }
?>

