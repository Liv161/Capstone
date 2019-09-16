<?php
//$conn = mysqli_connect("127.0.0.1","root","","register");
//if (mysqli_connect_errno())
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }
//  else{
//      echo 'Connected...';
//  }



$conn = mysqli_connect("localhost","root","","register");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
date_default_timezone_set('America/New_York');
$error="";
?>