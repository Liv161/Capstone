<?php
//$conn = mysqli_connect("localhost","root","","test");
//    if (mysqli_connect_errno()){
// echo "Failed to connect to MySQL: " . mysqli_connect_error();
// die();
// } 
// else{
//     //echo 'Connected...';
// }
//date_default_timezone_set('America/New_York');
//$error="";


$conn = mysqli_connect("ict.neit.edu:5500;","se266_000926501","000926501","se266_000926501");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 } 
 else{
     //echo 'Connected...';
 }
date_default_timezone_set('America/New_York');
$error="";
?>