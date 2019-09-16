<?php
include("../dbData/auth.php");

// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<title>Campaigns</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>    
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif; color:black}
            .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
        body{
        width:100%;
    }
    @media(min-width:1200px){
        body{
           height: 100%; 
           width:100%;
       }
        nav{
           width:100%;
       }
    }

     @media(min-width:1199px) and (min-width:600px){
        body{
            height: 100%;
            width:100%;
        }    
        nav{
           width:100%;
       }
    }
    @media(min-width:599px){
        body{
           height: 100%;
           width:100%;
       }
        nav{
           width:100%;
       }
    } 
    h2{
        text-align: center;
    }
    table{
        text-align: center;
    } 
    </style>
</head>
<body class="w3-light-grey">    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand"  class="" href="view-action_1.php">B.O.V</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../home.php">Home</a></li>
            <li><a href="index.php">Build Your Own</a></li>
            <li><a href="view-action.php">Campaigns</a></li>
            <li class="active"><a href="../vote&poll.php">Vote Now</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../Credentials/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../Credentials/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="../Credentials/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
        include '../dbData/insertCode.php';
    ?>
    <div>
        <table>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <!--<th>ID</th>-->
                        <th><h2>Candidate's Image</h2></th>
                        <th><h2>Candidate's Name</h2></th>
                        <th><h2>Candidate's Occupation</h2></th>
                    </tr>
                </thead>
            <?php foreach ($results as $row): ?>
                <tr>
                    <!--
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['imagename']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['occupation']; ?></td>
                    -->
                    <td><a href="read.php?id=<?php echo $row['id']; ?>"><?php echo "<img src=".$row['imagename']." height=150 width=150/>"; ?></a></td>
                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td> 
                    <td><?php echo $row['occupation']; ?></td>  
    <!--                <td><a href="read.php?id=<?php //echo $row['id']; ?>" class="btn btn-success">Read</a></td>     -->
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>&nbsp;<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>            
<!--                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>-->
                </tr>
            <?php endforeach; ?>
            </table> 
        </div>
    </body>
</html>
