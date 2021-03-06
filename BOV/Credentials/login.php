<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <style>
      html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif; color:black}
  </style>
</head>

<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../CRUD/view-action_1.php">B.O.V</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../home.php">Home</a></li>
        <li><a href="../CRUD/index.php">Build Your Own</a></li>
        <li><a href="../CRUD/view-action.php">Campaigns</a></li>
        <li><a href="../vote&poll.php">Vote Now</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li  class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
require('../dbData/db.php');
session_start();
if (isset($_POST['username'])){    
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
        $id = stripslashes($_REQUEST['id']);
	$id = mysqli_real_escape_string($conn,$id);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;            
	    header("Location: ../home.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
  <form class="login" action="" method="post" name="login">
    <h1 class="login-title">Login</h1>
    <input type="text" class="login-input" name="username" placeholder="Username" required>
    <input type="password" class="login-input" name="password" placeholder="Password" required>
    <input type="submit" value="Login" name="submit" class="login-button">
    <p class="login-lost">New Here? <a href="registration.php">Register</a><br><a href="forgotPassword.php">Forgot password?</a></p>
  
  </form>
<?php } ?>
</body>
</html>