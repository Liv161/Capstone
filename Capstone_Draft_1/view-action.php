<?php
include("auth.php");
// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Campaigns</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="color: silver">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Campaign's Profit</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="index.php">Build Your Own</a></li>
        <li><a href="view-action.php">Campaigns</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    <?php
    include 'phpCode.php';
    ?>
    <table>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <!--<th>ID</th>-->
                    <th><h2>Image Name</h2></th>
                    <!--<th>Data Two</th>-->
                    <th><h2>First Name</h2></th>
                    <th><h2>Last Name</h2></th>
                </tr>
            </thead>
        <?php foreach ($results as $row): ?>
            <tr>
                <!--
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['imagename']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                -->
                <td><?php echo "<img src=".$row['imagename']." height=150 width=150/>"; ?></td>
<!--                <td><?php //echo $row['imagename']; ?></td>-->
                <td><?php echo $row['firstname']; ?></td> 
                <td><?php echo $row['lastname']; ?></td> 
                <td><a href="read.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Read</a></td>     
                <td><a href="Update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a></td>            
                <td><a href="phpCode/Delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>          
            </tr>
        <?php endforeach; ?>
        </table> 
    </body>
</html>
