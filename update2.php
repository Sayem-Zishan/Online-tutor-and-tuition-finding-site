<?php 
  /*require("LoginDB.php");
     session_start();
        if(isset($_SESSION["tId"])){
  }
else{
  header("location:Login.html");
}*/
?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>

              <h1 align="center">change profile of Parents</h1>
              <form align="center" action="update3.php" method="post">
               
                  <input type="text" name="name"  placeholder="Name">
                    <br>
                    <br>
                  <input type="text" name="Phone"  placeholder="Phone">
                    <br>
                    <br>
                  <input type="text" name="EmailId"  placeholder="New Email ID">
                  <br>
                  <br>
                  <input type="text" name="address"  placeholder="Address">
                  <br>
                  <br>
             
                  <input type="password" name="enpassword"  placeholder="enter new password">
                  <br>
                  <br>
                 
                  <input type="submit" name="submit" value="Submit">
              
              </form>
            </div>
      </div>
    </div>


  </body>
</html>