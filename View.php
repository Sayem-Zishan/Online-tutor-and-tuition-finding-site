
<html>
<head>
    <style >
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
   
<body background="1.png" >


<?php
   require("LoginDB.php");
//       session_start();
//         if(isset($_SESSION["tId"])){
// 	}
// else{
// 	header("location:Login.html");
// }
    $sql="select Id,Title,Class,StudentGender,DayPerWeek,Salary,PreGender,Location,OtherReq,Category,Time from jobinfo where Id= '".$_REQUEST["pid"]."' ";
	$a=getfromDB($sql);
	
	foreach($a as $v) {?>
    <form >
	      <table align="center">
        <tr><td><h2>Job Id:</h2></td><td><h2><?php echo $v["Id"];?></h2></td> <td> <a href="Apply.php?jId=<?php echo $v['Id'];?>">Apply </a> </td></tr>
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
               