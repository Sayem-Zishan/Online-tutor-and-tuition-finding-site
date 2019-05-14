<?php
session_start();
unset($_SESSION["tId"]);
header ('Location:Main.html');
?>