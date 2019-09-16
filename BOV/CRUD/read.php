<!DOCTYPE html>
<html>
<title>Read Campaign</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
   /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }    
</style>
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
        <li  class="active"><a href="view-action.php">Campaigns</a></li>
        <li><a href="../vote&poll.php">Vote Now</a></li>
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
include("../dbData/updateCode.php");
?>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <h1><?php //echo $id;?></h1>
  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container w3-margin-bottom">            
          <?php echo "<img src=".$imgname." height=100% width=100%/>"; ?>
          <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2 style="color:silver"><?php echo $fname." ".$lname; ?><br>For <?php echo $campaign; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-dark-grey"></i><?php echo $occupation; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-dark-grey"></i><?php echo $city.", ".$state; ?> </p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-dark-grey"></i><?php echo $emailC; ?></p>
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-dark-grey"></i>Follow me on twitter!</b></p><hr>
          <div id="twitter-timeline">                
                <a class="twitter-timeline" data-width="600" data-height="400" href="<?php echo $twitter; ?>" style="width:100%">Tweets by <?php echo $fname." ".$lname; ?></a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div> 
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <div style="text-align:center">
            <h1><?php echo $banner;?></h1>
            </div>
        </div>
      <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-dark-grey w3-padding-16"><i class="<?php echo $party; ?>"></i><?php echo $slogan; ?></h2><hr>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Biography</b></h5>
          <?php echo $about;?>
          <hr>
        </div>
      </div>
      <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-dark-grey w3-padding-16"><i class="fas fa-key fa-fw w3-margin-right w3-xxlarge w3-text-dark-grey"></i>Campaign Issues</h2>
          <hr>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $day_1f;?></b></h5>
          <h6 class="w3-text-dark-grey"><i class="fa fa-calendar fa-fw w3-margin-right"></i>On Day One</h6>
          <p><?php echo $day_1s;?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $month_1f;?></b></h5>
          <h6 class="w3-text-dark-grey"><i class="fa fa-calendar fa-fw w3-margin-right"></i>In 1st Month</h6>
          <p><?php echo $month_1s;?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $year_1f;?></b></h5>
          <h6 class="w3-text-dark-grey"><i class="fa fa-calendar fa-fw w3-margin-right"></i>In 1st Year</h6>
          <p><?php echo $year_1s;?></p><hr>          
        </div>
          <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $term_1f;?></b></h5>
          <h6 class="w3-text-dark-grey"><i class="fa fa-calendar fa-fw w3-margin-right"></i>In 1st Term</h6>
          <p><?php echo $term_1s;?></p><hr>          
        </div>
      </div>
<div class="w3-container w3-card w3-white">
        <h2 class="w3-text-dark-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-dark-grey"></i>NOTABLE QUOTES</h2><hr>
        <div class="w3-container">
            <?php $candName = $fname." ".$lname;?>
          <h5 class="w3-opacity"><b><?php echo $candName;?></b></h5>          
          <p><?php echo '"'.$quote.'"';?></p>
          <hr>        
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

  <footer class="w3-container w3-center w3-margin-top" style="background-color:#000000;color:lightgrey">
  <p>Find me on social media.</p>
  <a href="https://facebook.com/" <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://instagram.com/" <i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://twitter.com/" <i class="fa fa-twitter w3-hover-opacity"></i></a>
  <p>&copy;B.O.V 2019</p>
</footer>

</body>
</html>
