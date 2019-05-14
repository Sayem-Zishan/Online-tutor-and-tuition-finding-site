<?php
require ("LoginDB.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["pname"])){
	//$sql="select * from student where name='".$_REQUEST["uname"]."'";
	$sql="select * from jobinfo where Location like '".$_REQUEST["pname"]."%'";
	//echo $sql;
	$a=getfromDB($sql);
	//echo "<pre>";print_r($a);echo "<pre>";
	foreach($a as $v){?>
		  <p><a href="View.php?pid=<?php echo $v["Id"]; ?>"><?php echo $v["Location"]; ?></a></p>
		
		<?php
 
	}
}
?>