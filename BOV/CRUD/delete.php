<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Campaign</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
   /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
      <a class="navbar-brand" href="view-action_1.php">B.O.V</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../home.php">Home</a></li>
        <li><a href="index.php">Build Your Own</a></li>
        <li><a href="view-action.php">Campaigns</a></li>
        <li><a href="../vote&poll.php">Vote Now</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../Credentials/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
        <?php        
            include '../dbData/deleteCode.php';
        ?>        
        <h1>Record <?php echo $fname." ".$lname.' Id '.$id ; ?>
         <?php if ( !$isDeleted ): ?> 
          Not
        <?php endif; ?>
        Deleted</h1>
        <main>
        <p><a href="view-action.php">Back To Campaigns</a></p>
        </main>
    </body>
</html>
