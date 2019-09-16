<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      body {
  background: #2d343d;
}
.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}
h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7; 
}
.login-input {
  width: 248px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
    ;
}
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}
.login-lost
{
  text-align:center;
  margin-bottom:0px;
}
.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}
.form{
    text-align: center;
    color: white;
}
  </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../Capstone_Draft_1/home.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="../Capstone/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
  </div>
</nav>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
  <form class="login" action="" method="post">
    <h1 class="login-title">Register</h1>
    <input type="text" class="login-input" name="username" placeholder="Username" required />
    <input type="text" class="login-input" name="email" placeholder="Email Adress">
    <input type="password" class="login-input" name="password" placeholder="Password">    
    <input type="submit" name="submit" value="Register" class="login-button">
  <p class="login-lost">Already Registered? <a href="login.php">Login Here</a></p>
  </form>

<?php } ?>
</body>
</html>