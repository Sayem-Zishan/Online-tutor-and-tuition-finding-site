<?php
session_start();
unset($_SESSION["pId"]);
header ('Location:Main.html');
?>