<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latest Polls</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    img{
        width: 100%;
        margin-top: 5%;
        margin-left: 60%;
    }
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

        <h1>Latest Poll Graph</h1>
        <table >
            <tr>
                <td>
                    <img src="Uploads/bidenvsharris.png" alt=""/>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="Uploads/bidenvstrump.png" alt=""/>
                </td>
            </tr>
            <tr> 
                <td>
                    <img src="Uploads/demsvsreps.png" alt=""/>
                </td>
            </tr>
        </table>
        <?php
        // put your code here        
        
        ?>
    </body>
</html>
