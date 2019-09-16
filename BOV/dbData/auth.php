<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../Credentials/login.php");
exit(); }
?>