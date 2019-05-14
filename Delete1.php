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
  $sql="UPDATE parentsinfo SET Status=1 WHERE Id='".$_SESSION['pId']."'";
  if(mysqli_query($conn, $sql)){
    header('Location: Main.html');


  }
  ?>